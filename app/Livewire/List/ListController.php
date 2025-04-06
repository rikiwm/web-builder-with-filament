<?php

namespace App\Livewire\List;

use App\Models\Post;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class ListController extends Component
{
    public $title;
    public $data =[];
    public $menu_id = null;
    public $model_view = null;
    public $limit = 3;
    public $dataobject = null;
    public function placeholder()
    {
        return view('livewire.skeleton.ske-page');
    }
    public function loadMore()
    {
        $this->limit += 3;

        if ($this->dataobject->count() < $this->limit ) {
            $this->render();
        }
    }

    public function render()
    {

        $data = Post::query()->where('is_active', true)->where('menu_id',$this->menu_id)->orderBy('created_at','desc');

        $this->data = $data->limit($this->limit)->get();

        return view('livewire.list.list-controller',[
            'title'=> $this->title,
            'data'=> $this->data,
            'dataobject' => $this->dataobject,
        ]);
    }
}
