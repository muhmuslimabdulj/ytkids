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

    public $selectedChannel;

    #[Url]
    public $search = "";

    public function searchVid()
    {
        $this->videos = Video::query()->where('judul', 'like', '%' . $this->search . '%')->inRandomOrder()->get();
    }

    public function searchDirect()
    {
        $this->redirect("/videos?search=$this->search", navigate: false);
    }

    public function filterVideoByChannelId($channelId)
    {
        $this->selectedChannel = $channelId;
        $this->videos = Video::query()->where('channel_id', $channelId)->get();
    }

    public function showAllVideos()
    {
        $this->selectedChannel = "";
        $this->videos = Video::query()->inRandomOrder()->get();
    }

    public function mount()
    {
        $this->channels = Channel::get();
        $this->videos = Video::query()->inRandomOrder()->get();
    }

    public function render()
    {
        if ($this->search) {
            $this->searchVid();
        }
        return view('livewire.home.index');
    }
}
