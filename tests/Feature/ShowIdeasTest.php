<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function list_of_ideas_shows_on_main_page(): void
    {
        $category1 = Category::factory()->create();
        $category2 = Category::factory()->create();

        $idea1 = Idea::factory()->create([
            'title' => 'The first idea',
            'category_id' => $category1->id,
            'description' => 'The description of the first idea',
        ]);
        $idea2 = Idea::factory()->create([
            'title' => 'The second idea',
            'category_id' => $category2->id,
            'description' => 'The description of the second idea',
        ]);

        $response = $this->get(route('idea.index'));
        
        $response->assertSuccessful();
        $response->assertSee($idea1->title);
        $response->assertSee($idea1->description);
        $response->assertSee($category1->name);

        $response->assertSee($idea2->title);
        $response->assertSee($idea2->description);
        $response->assertSee($category2->name);
    }

    /** @test */
    public function single_idea_shows_correctly_on_the_show_page()
    {
        $category = Category::factory()->create();
        $idea = Idea::factory()->create([
            'title' => 'The idea title',
            'category_id' => $category->id,
            'description' => 'The description of the idea',
        ]);

        $response = $this->get(route('idea.show', $idea));
        
        $response->assertSuccessful();
        $response->assertSee($idea->title);
        $response->assertSee($idea->description);
        $response->assertSee($category->name);
    }
}
