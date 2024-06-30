<?php

namespace App\Livewire\Watch;

use App\Models\Video;
use Illuminate\Http\Request;
use Livewire\Component;

class Index extends Component
{
    public $video_code;

    public $video;

    public $channel;

    public $videos;

    public function mount($code)
    {
        $this->video_code = $code;
        $this->video = Video::query()->where('video_code', $this->video_code)->first();
        $this->channel = $this->video->channel;
        $this->videos = Video::query()->where('channel_id', $this->channel->id)->get();
    }

    public function render()
    {
        return view('livewire.watch.index');
    }
}
