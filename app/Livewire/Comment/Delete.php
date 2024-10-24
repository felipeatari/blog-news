<?php

namespace App\Livewire\Comment;

use App\Models\Comment;
use Livewire\Component;

class Delete extends Component
{
    public Comment $comment;

    public bool $showModalDelete = false;
    public bool $deleted = false;

    public function delete()
    {
        $this->deleted = true;
        $this->showModalDelete = false;
        $this->comment->delete();

        $this->js('location.reload()');
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
