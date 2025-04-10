<?php

namespace App\Livewire\List;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Lazy;

class DocView extends Component
{
    public $title;
    public $data = null;
    public $menu_slug;
    public $model_view;
    public $limit = 3;
    public $datacount;
    public function placeholder()
    {
        return view('livewire.skeleton.ske-page');
    }
    public function render()
    {
        $this->data = Post::query()->where('is_active', true)
        ->whereHas('menu', fn ($q) => $q->where('slug', $this->title))
        ->orderBy('created_at','desc')->limit($this->limit)->get();
   
        return view('livewire.list.doc-view', [
            'title' => $this->title,
            'data' => $this->data,
        ]);
    }
}
