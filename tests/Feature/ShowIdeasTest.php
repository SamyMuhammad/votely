<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Idea;
use App\Models\Status;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function list_of_ideas_shows_on_main_page(): void
    {
        $category1 = Category::factory()->create();
        $category2 = Category::factory()->create();

        $statusOpen = Status::factory()->create([
            'name' => 'Open',
            'classes' => 'bg-gray-200',
        ]);
        $statusConsidering = Status::factory()->create([
            'name' => 'Considering',
            'classes' => 'bg-purple-500 text-white',
        ]);

        $idea1 = Idea::factory()->create([
            'title' => 'The first idea',
            'category_id' => $category1->id,
            'status_id' => $statusOpen->id,
            'description' => 'The description of the first idea',
        ]);
        $idea2 = Idea::factory()->create([
            'title' => 'The second idea',
            'category_id' => $category2->id,
            'status_id' => $statusConsidering->id,
            'description' => 'The description of the second idea',
        ]);

        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee($idea1->title);
        $response->assertSee($idea1->description);
        $response->assertSee($category1->name);
/*         $response->assertSee('<div class="bg-gray-200 uppercase font-bold text-center text-xxs leading-none w-28 h-7 rounded-full py-2 px-4">
        Open
    </div>', false); */

        $response->assertSee($idea2->title);
        $response->assertSee($idea2->description);
        $response->assertSee($category2->name);
/*         $response->assertSee('<div class="bg-purple-500 text-white uppercase font-bold text-center text-xxs leading-none w-28 h-7 rounded-full py-2 px-4">
        Considering
    </div>', false); */
    }

    /** @test */
    /* public function single_idea_shows_correctly_on_the_show_page()
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
    } */
}
