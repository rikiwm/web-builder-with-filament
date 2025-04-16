<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Page;

class SearchContent extends Component
{
    public $search = '';

    public function render()
    {
        $posts = [];
        $pages = [];

        if (strlen($this->search) > 1) {
            $posts = Post::where('title', 'like', '%' . $this->search . '%')
                        // ->orWhere('content', 'like', '%' . $this->query . '%')
                        ->get();

            $pages = Page::where('title', 'like', '%' . $this->search . '%')
                        // ->orWhere('content', 'like', '%' . $this->query . '%')
                        ->get();
        }

        return view('livewire.search-content', compact('posts', 'pages'));
    }
}
