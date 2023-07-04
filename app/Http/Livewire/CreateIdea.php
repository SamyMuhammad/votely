<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Idea;
use Livewire\Component;

class CreateIdea extends Component
{
    public $title;
    public $category = 1;
    public $description;

    protected $rules = [
        'title' => ['required', 'string', 'min:3', 'max:255'],
        'category' => ['required', 'exists:categories,id'],
        'description' => ['required', 'string', 'min:3', 'max:255'],
    ];

    public function createIdea()
    {
        $this->validate();
        Idea::create([
            'user_id' => auth()->id(),
            'title' => $this->title,
            'category_id' => $this->category,
            'status_id' => 1,
            'description' => $this->description,
        ]);

        session()->flash('success_message', 'Idea Created Successfully!');
        $this->reset();
        return redirect()->route('idea.index');
    }

    public function render()
    {
        return view('livewire.create-idea', [
            'categories' => Category::all()
        ]);
    }
}
