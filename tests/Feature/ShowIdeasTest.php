<?php

namespace Tests\Feature;

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
        $idea1 = Idea::factory()->create([
            'title' => 'The first idea',
            'description' => 'The description of the first idea',
        ]);
        $idea2 = Idea::factory()->create([
            'title' => 'The second idea',
            'description' => 'The description of the second idea',
        ]);

        $response = $this->get(route('idea.index'));
        
        $response->assertSuccessful();
        $response->assertSee($idea1->title);
        $response->assertSee($idea1->description);
        $response->assertSee($idea2->title);
        $response->assertSee($idea2->description);
    }

    /** @test */
    public function single_idea_shows_correctly_on_the_show_page()
    {
        $idea = Idea::factory()->create([
            'title' => 'The idea title',
            'description' => 'The description of the idea',
        ]);

        $response = $this->get(route('idea.show', $idea));
        
        $response->assertSuccessful();
        $response->assertSee($idea->title);
        $response->assertSee($idea->description);
    }
}
