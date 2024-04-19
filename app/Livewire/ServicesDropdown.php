<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ServiceManReservation;

class ServicesDropdown extends Component
{

    protected $listeners = ['loadServices'];

    // public function loadServices($period)
    // {
    //     $this->selectedPeriod = $period;
    //     $this->services = ServiceManReservation::whereHas('period', function ($query) use ($period) {
    //         $query->where('period', $period);
    //     })->get();
    // }

    public $services = [];
    public $selectedPeriod = 'morning'; // default to morning

    public function mount()
    {
        $this->loadServices($this->selectedPeriod);
    }

    public function loadServices($period)
    {
        $this->selectedPeriod = $period ?? 'morning';
        // dd($period);
        $this->services = ServiceManReservation::whereHas('period', function ($query) use ($period) {
                    $query->where('period', $period);
                })->get();
    }

    public function render()
    {
        return view('livewire.services-dropdown');
    }
}
