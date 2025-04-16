<?php

namespace App\Livewire\List;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Lazy;

class Swipper extends Component
{
   
    protected function query()
    {
       return Post::where('is_active', 1)
        ->where('categori_id', 1)
        ->with(['user','categori','menu']);
    }
 

    public function render()
    {
        $posts = $this->query()->limit(5)->get();
    
        return view('livewire.list.swipper',[
            'data' => $posts
        ]);
    }
}
