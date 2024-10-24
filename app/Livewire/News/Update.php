<?php

namespace App\Livewire\News;

use App\Models\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public News $news;

    public int $news_id = 0;

    #[Rule(['required'])]
    public string $title = '';

    #[Rule(['required'])]
    public string $legend = '';

    #[Rule(['required'])]
    public string $content = '';

    public mixed $banner = '';

    public string $messageUpdateNews = '';
    public bool $statusUpdateNews = false;

    public string $messageUpdateBanner = '';
    public bool $statusUpdateBanner = false;

    public function saveNews()
    {
        $this->validate();

        DB::beginTransaction();

        try {
            DB::commit();

            $this->news->title = $this->title;
            $this->news->legend = $this->legend;
            $this->news->content = $this->content;
            $this->news->save();

            $this->statusUpdateNews = true;
            $this->messageUpdateNews = 'Notícia atualizada com sucesso';
        } catch (\Exception $e) {
            DB::rollBack();

            $this->statusUpdateNews = false;
            $this->messageUpdateNews = $e->getMessage();
        }
    }

    public function saveNewsBanner(int $news_id)
    {
        if (! $this->banner) {
            $this->addError('banner', 'Nenhuma imagem selecionada');

            return;
        }

        $path = $this->banner->store('banner', 'public');
        $url = 'storage/' . $path;

        DB::beginTransaction();

        try {
            DB::commit();

            $news = News::find($news_id);
            $news->banner = $url;
            $news->save();

            $this->statusUpdateBanner = true;
            $this->messageUpdateBanner = 'Banner atualizado com sucesso';
        } catch (\Exception $e) {
            DB::rollBack();

            $this->statusUpdateBanner = false;
            $this->messageUpdateBanner = $e->getMessage();
        }
    }

    public function render()
    {
        $this->title = $this->news->title;
        $this->legend = $this->news->legend;
        $this->content = $this->news->content;

        return view('livewire.news.update');
    }
}
