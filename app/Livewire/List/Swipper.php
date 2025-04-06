<?php

namespace App\Livewire\List;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Lazy;

class Swipper extends Component
{
    public $d;


    public function placeholder()
    {
        return <<<'HTML'
        <div>
            <!-- Loading spinner... -->
            <svg>...</svg>
        </div>
        HTML;
    }

    public function render()
    {
        
        $this->d = Post::all();

        return view('livewire.list.swipper',[
            'data' => $this->d
        ]);
    }
}
