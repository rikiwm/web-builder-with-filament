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
        
        $this->d = Post::where('is_active', 1)
            ->where('categori_id', 1)
            ->with(['user','categori','menu'])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.list.swipper',[
            'data' => $this->d
        ]);
    }
}
