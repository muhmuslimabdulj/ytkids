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
        $this->resetPerPage();
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
        $this->resetPerPage();
    }

    public function showAllVideos()
    {
        $this->search = "";
        $this->selectedChannel = "";
        $this->resetPerPage();
    }

    public function mount()
    {
        $this->channels = Channel::get();
    }

    public function hasMorePage()
    {
        return Video::count() > $this->perPage;
    }

    public function resetPerPage()
    {
        if ($this->perPage != 8) $this->perPage = 8;
    }

    public function render()
    {
        if ($this->search) {
            $this->searchVid();
        } else {
            if ($this->selectedChannel) {
                $this->videos = Video::query()->where('channel_id', $this->selectedChannel)->take($this->perPage)->get();
            } else {
                $this->videos = Video::query()->latest()->take($this->perPage)->get();
            }
        }

        return view('livewire.home.index');
    }
}
