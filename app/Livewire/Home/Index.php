<?php

namespace App\Livewire\Home;

use App\Models\Channel;
use App\Models\Video;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;

class Index extends Component
{

    public $videos;

    public $channels;

    public int $perPage = 8;

    #[Url]
    public $search = "";


    public function loadMore()
    {
        $this->perPage += 4;
    }

    public function searchVid()
    {
        $this->videos = Video::query()->where('judul', 'like', '%' . $this->search . '%')->latest()->take($this->perPage)->get();
    }

    public function searchDirect()
    {
        $this->redirect("/videos?search=$this->search", navigate: false);
    }

    public function hasMorePage() {
        return Video::count() > $this->perPage;
    }

    public function render()
    {
        if ($this->search) {
            $this->searchVid();
        } else {
            $this->videos = Video::query()->latest()->take($this->perPage)->get();
        }
        $this->channels = Channel::get();
        return view('livewire.home.index');
    }
}
