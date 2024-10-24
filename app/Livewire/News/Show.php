<?php

namespace App\Livewire\News;

use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Show extends Component
{
    public News $news;

    public function render()
    {
        return view('livewire.news.show');
    }
}
