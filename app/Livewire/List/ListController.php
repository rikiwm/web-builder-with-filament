<?php

namespace App\Livewire\List;

use App\Models\Post;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class ListController extends Component
{
    public $title;
    public $data = null;
    public $top = null;
    public $news = null;
    public $news_top = null;
    public $menu_slug;
    public $model_view;
    public $limit = 3;
    public $datacount;
    public function placeholder()
    {
        return view('livewire.skeleton.ske-page');
    }
    public function loadMore()
    {
        $this->limit += 3;

        if ($this->datacount < $this->limit ) {
            $this->render();
        }
    }

    public function popular()
    {  
        $q =  Post::query()
            ->where('is_active', true)
            ->whereHas('menu', fn ($q) => $q->where('slug', $this->title))
            ->whereDate('created_at', '>=', now()->subDays(30))
            ->limit(5)
            ->get();
        return $q;
    }

    public function terbaru()
    {  
        return Post::query()
            ->where('is_active', true)
            ->whereHas('menu', fn ($q) => $q->where('slug', $this->title))
            ->whereDate('created_at', '>=', now()->subDays(1))
            ->limit(5)
            ->get();
    }

    public function render()
    {
        $query = Post::query()
            ->where('is_active', true)
            ->whereHas('menu', fn ($q) => $q->where('slug', $this->title));

        $this->data = (clone $query)->orderBy('created_at', 'desc')->limit($this->limit)->get();
        $this->top = (clone $query)->where('is_featured', true)->first();
        $this->news = $this->terbaru();
        $this->news_top = $this->popular();

        if ($this->popular()) {
            $this->news_top = $this->popular();
            // $this->news_top = $this->data->where('id', '!=', $this->top->id);
        }
        return view('livewire.list.list-controller',[
            'title'=> $this->title,
            'data'=> $this->data,
            'top'=> $this->top,
            'news_top'=> $this->news_top,
            'news'=> $this->news,
        ]);
    }
}
