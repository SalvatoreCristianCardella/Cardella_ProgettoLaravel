<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class CreateArticlesForm extends Component
{
    public $title;
    public $body;

    protected $rules = [
        'title' => 'required|min:6',
        'body' => 'required|min:20',
    ];
    public function updated()
    {
        $this->validate();
    }
    public function store()
    {
        //$this->validate(); 

        Article::create([
            'title' => $this->title,
            'body' => $this->body,
        ]);

        $this->reset();
    }
    public function render()
    {
        return view('livewire.create-articles-form');
    }
}
