<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Team extends Component
{
    public $team;

    public function placeholder()
    {
        return view('livewire.skeleton.ske-page',[
            'section'=> $this->team,
        ]);
    }
    public function render()
    {
        return view('livewire.home.team');
    }
}
