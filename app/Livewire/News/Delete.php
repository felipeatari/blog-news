<?php

namespace App\Livewire\News;

use App\Models\News;
use Livewire\Component;

class Delete extends Component
{
    public News $news;

    public bool $showModalDelete = false;

    public function delete()
    {
        $this->news->delete();

        return redirect('/');
    }

    public function openModalDelete()
    {
        $this->showModalDelete = true;
    }

    public function closeModalDelete()
    {
        $this->showModalDelete = false;
    }
}
