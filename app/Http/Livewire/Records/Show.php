<?php

namespace App\Http\Livewire\Records;

use Livewire\Component;
use App\Models\Recording;

class Show extends Component
{
    public $recordings;

    protected $listeners = ['recordingCreated' => '$refresh'];

    public function render()
    {
        $this->recordings = Recording::latest()->get();
        return view('livewire.records.show');
    }

    public function delete($id)
    {
        Recording::find($id)->delete();
    }
}
