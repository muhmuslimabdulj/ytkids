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

        // Ambil seluruh ID video dalam urutan acak
        $videoIds = Video::query()->inRandomOrder()->pluck('id')->toArray();

        // Simpan urutan ID dalam sesi
        session(['random_video_ids' => $videoIds]);
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
                $videoIds = session('random_video_ids', []);

                // Ambil ID video yang sesuai dengan paginasi
                $pagedVideoIds = array_slice($videoIds, 0, $this->perPage);

                if (!empty($pagedVideoIds)) {
                    // Ambil video berdasarkan ID yang telah dipaginasikan
                    $this->videos = Video::query()->whereIn('id', $pagedVideoIds)
                        ->orderByRaw("FIELD(id, " . implode(',', $pagedVideoIds) . ")")
                        ->get();
                } else {
                    $this->videos = Video::query()->take($this->perPage)->get();
                }
            }
        }

        return view('livewire.home.index');
    }
}
