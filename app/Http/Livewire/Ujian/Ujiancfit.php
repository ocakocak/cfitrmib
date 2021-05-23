<?php

namespace App\Http\Livewire\Ujian;

use Livewire\Component;

class Ujiancfit extends Component
{
    public $sub1, $jawaban;

    public function mounted($sub1)
    {
        $this->sub1 = $sub1;
    }

    public function render()
    {
        return view('livewire.ujian.ujiancfit');
    }

    public function checkAnswer()
    {
        dd($this->jawaban);
    }
}
