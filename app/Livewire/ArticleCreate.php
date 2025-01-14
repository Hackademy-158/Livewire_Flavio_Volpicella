<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ArticleCreate extends Component
{
    #[Validate('required|min:5|max:255')]
    public $title;
    #[Validate('required|min:5|max:255')]
    public $subtitle;
    #[Validate('required|min:10| max:255')]
    public $body;

    // protected $rules = [
    //     'title' => 'required|min:5|max:255',
    //     'subtitle' => 'required|min:5| max:255',
    //     'body' => 'required|min:10| max:255',

    // ];

    public function store()
    {
        $this->validate();
        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);
        session()->flash('message', 'Articolo creato con successo!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.article-create');
    }
}
