<?php

namespace App\Livewire\Home;

use Livewire\Component;
use Livewire\Attributes\Lazy;
#[Lazy()]
class Galleri extends Component
{
    public $galleri;
    public function placeholder()
    {
        return view('livewire.skeleton.ske-page',[
            'section'=> $this->galleri,
        ]);
    }
    public function render()
    {
        return view('livewire.home.galleri');
    }
}
