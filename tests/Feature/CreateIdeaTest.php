<?php

namespace Tests\Feature;

use App\Http\Livewire\CreateIdea;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

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
}
