<?php

namespace App\Livewire\Home;

use App\Models\Channel;
use App\Models\Video;
use Livewire\Component;

class Index extends Component
{
    public $videos;

    public $channels;

    public function render()
    {
        $this->videos = Video::get();
        $this->channels = Channel::get();
        return view('livewire.home.index');
    }
}
