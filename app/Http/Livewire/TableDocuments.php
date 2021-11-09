<?php

namespace App\Http\Livewire;

use App\Models\Electronic;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class TableDocuments extends Component
{
    public $search;

    public function render()
    {
        $electronica = count(Storage::allFiles('electronica'));
        $docsElectronica = Electronic::where('keywords', 'like', '%' . $this->search . '%')->get();

        return view('livewire.table-documents', compact('electronica', 'docsElectronica'));
    }

    public function search()
    {
        $docsElectronica = Electronic::all();
        return $docsElectronica;
    }
}
