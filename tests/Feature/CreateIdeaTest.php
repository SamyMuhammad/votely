<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Livewire\Livewire;
use App\Models\Category;
use App\Http\Livewire\CreateIdea;
use App\Models\Status;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateIdeaTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_idea_form_does_not_show_when_logged_out(): void
    {
        $this->get(route('idea.index'))->assertDontSeeLivewire(CreateIdea::class);
    }

    public function test_create_idea_form_shows_when_logged_in(): void
    {
        $this->actingAs(User::factory()->create())->get(route('idea.index'))->assertSeeLivewire(CreateIdea::class);
    }

    public function test_create_idea_form_validation_works(): void
    {
        Livewire::actingAs(User::factory()->create())
            ->test(CreateIdea::class)
            ->set('title', '')
            ->set('category', '')
            ->set('description', '')
            ->call('createIdea')
            ->assertHasErrors(['title', 'description']);
    }

    public function test_creating_idea_works_fine(): void
    {
        $category = Category::factory()->create();
        Status::factory()->create();

        $title = 'Idea created during testing';
        $description = 'Idea created during testing description';
        Livewire::actingAs(User::factory()->create())
            ->test('create-idea')
            ->set('title', $title)
            ->set('category', $category->id)
            ->set('description', $description)
            ->call('createIdea')
            ->assertHasNoErrors(['title', 'category', 'description'])
            ->assertRedirect('/');

        $this->assertDatabaseHas('ideas', [
            'title' => $title,
            'description' => $description
        ]);

        $this->get(route('idea.index'))
            ->assertSee($title)
            ->assertSee($description);
    }

    public function test_creating_two_ideas_with_the_same_title(): void
    {
        $category = Category::factory()->create();
        Status::factory()->create();

        $title = 'First Idea';
        $description = 'Idea description';

        Livewire::actingAs(User::factory()->create())
            ->test('create-idea')
            ->set('title', $title)
            ->set('category', $category->id)
            ->set('description', $description)
            ->call('createIdea');

        $this->assertDatabaseHas('ideas', [
            'title' => $title,
            'slug' => 'first-idea'
        ]);

        Livewire::actingAs(User::factory()->create())
            ->test('create-idea')
            ->set('title', $title)
            ->set('category', $category->id)
            ->set('description', $description)
            ->call('createIdea');

        $this->assertDatabaseHas('ideas', [
            'title' => $title,
            'slug' => 'first-idea-2'
        ]);
    }
}
