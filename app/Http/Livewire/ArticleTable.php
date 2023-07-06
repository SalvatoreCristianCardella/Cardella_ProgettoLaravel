<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleTable extends Component
{   
    public function deleteArticle(Article $article)
    {
        $article->delete();
    }

    public function render()
    {
        return view('livewire.article-table', [
            'articles' => Article::all()
        ]);
    }
}
