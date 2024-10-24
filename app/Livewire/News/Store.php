<?php

namespace App\Livewire\News;

use App\Models\News;
use App\Models\NewsBaneer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Store extends Component
{
    use WithFileUploads;

    public int $news_id = 0;

    #[Rule(['required'])]
    public string $title = '';

    #[Rule(['required'])]
    public string $legend = '';

    #[Rule(['required'])]
    public string $content = '';

    public mixed $banner = '';

    public string $messageCreateNews = '';
    public bool $statusCreateNews = false;

    public string $messageCreateBanner = '';
    public bool $statusCreateBanner = false;

    public string $messageSave = '';

    public string $display = 'flex';

    public function saveNews()
    {
        $this->validate();

        try {
            DB::transaction(function() {
                $news = News::create([
                    'title' => $this->title,
                    'legend' => $this->legend,
                    'content' => $this->content,
                ]);

                $this->news_id = $news->id;
                $this->statusCreateNews = true;
                $this->messageCreateNews = 'Noticia criada com sucesso';
                $this->display = 'hidden';
            });
        } catch (\Exception $e) {
            $this->statusCreateNews = false;
            $this->messageCreateNews = $e->getMessage();
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

            $this->statusCreateBanner = true;
            $this->messageCreateBanner = 'Banner criado com sucess';

            return $this->redirect('/');
        } catch (\Exception $e) {
            DB::rollBack();

            $this->statusCreateBanner = false;
            $this->messageCreateBanner = $e->getMessage();
        }
    }

    public function render()
    {
        return view('livewire.news.store');
    }
}
