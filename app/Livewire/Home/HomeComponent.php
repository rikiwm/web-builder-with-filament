<?php

namespace App\Livewire\Home;
use Livewire\Attributes\Lazy;
use Livewire\Component;
use App\Models\Post;

#[Lazy()]
class HomeComponent extends Component
{
    public $hero;
    public $section;
    public $welcome;
    public function placeholder()
    {
        return view('livewire.skeleton.ske-hero',[
            'hero'=> $this->hero,
            'section'=> $this->section,
        ]);
    }
    public function render()
    {
        $data =  Post::where('is_active', 1)
        ->where('categori_id', 1)
        ->with(['user','categori','menu'])
        ->orderBy('created_at', 'desc')
        ->get();

        return view('livewire.home.home-component',[
        
        ]);
    }
}
