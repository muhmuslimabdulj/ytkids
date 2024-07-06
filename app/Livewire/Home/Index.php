<?php

namespace App\Livewire\Home;

use App\Models\Channel;
use App\Models\Video;
use Livewire\Attributes\Url;
use Livewire\Component;

class Index extends Component
{

    public $videos;

    public $channels;

    #[Url]
    public $search = "";

    public function searchVid()
    {
        $this->videos = Video::query()->where('judul', 'like', '%' . $this->search . '%')->inRandomOrder()->get();
    }

    public function render()
    {
        if ($this->search) {
            $this->searchVid();
        } else {
            $this->videos = Video::query()->inRandomOrder()->get();
        }
        $this->channels = Channel::get();
        return view('livewire.home.index');
    }
}
