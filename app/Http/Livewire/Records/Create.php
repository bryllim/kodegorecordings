<?php

namespace App\Http\Livewire\Records;

use Livewire\Component;
use App\Models\Recording;

class Create extends Component
{
    public $date;
    public $topic;
    public $amlink;
    public $pmlink;
    public $notes;

    public function render()
    {
        return view('livewire.records.create');
    }

    public function save()
    {
        $recording = new Recording;
        $recording->date = $this->date;
        $recording->topic = $this->topic;
        $recording->amlink = $this->amlink;
        $recording->pmlink = $this->pmlink;

        if(empty($this->notes)){
            $this->notes = "None.";
        }
        $recording->notes = $this->notes;

        $recording->save();

        $this->reset('date');
        $this->reset('topic');
        $this->reset('amlink');
        $this->reset('pmlink');
        $this->reset('notes');

        $this->emit('recordingCreated');
    }
}
