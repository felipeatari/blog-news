<?php

namespace App\Livewire\News;

use App\Models\News;
use Livewire\Component;

class Index extends Component
{
    public string $search = '';

    public function render()
    {
        if ($this->search) {
            $news = News::where('title', 'like', '%' . $this->search . '%')
                ->orWhere('legend', 'like', '%' . $this->search . '%')
                ->orWhere('content', 'like', '%' . $this->search . '%')
                ->orderBy('id', 'DESC')
                ->get();
        }
        else {
            $news = News::orderBy('id', 'DESC')->get();
        }

        return view('livewire.news.index', [
            'news' => $news,
        ]);
    }
}
