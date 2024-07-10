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

    public $selectedChannel;
    public int $perPage = 8;

    #[Url]
    public $search;

    protected $queryString = ['search' => ['except' => '']];


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

    public function filterVideoByChannelId($channelId)
    {
        $this->search = "";
        $this->selectedChannel = $channelId;
        $this->videos = Video::query()->where('channel_id', $channelId)->get();
    }

    public function showAllVideos()
    {
        $this->search = "";
        $this->selectedChannel = "";
        $this->videos = Video::query()->latest()->get();
    }

    public function mount()
    {
        $this->channels = Channel::get();
        $this->videos = Video::query()->latest()->take($this->perPage)->get();
    }

    public function hasMorePage() {
        return Video::count() > $this->perPage;
    }

    public function render()
    {
        if ($this->search) {
            $this->searchVid();
        }
        return view('livewire.home.index');
    }
}
