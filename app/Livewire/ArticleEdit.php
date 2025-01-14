<?php

namespace App\Livewire;

use Livewire\Component;

class ArticleEdit extends Component
{
    public $title, $subtitle, $body;
    public $article;

    public function update()
    {
        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);
        session()->flash('message', 'Articolo aggiornato correttamente');
    }

    public function destroy()
    {
        $this->article->delete();
        return redirect(route('article.index'))->with('message', 'Articolo eliminato correttamente');
    }

    public function mount()
    {
        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->body = $this->article->body;
    }
    public function render()
    {
        return view('livewire.article-edit');
    }
}
