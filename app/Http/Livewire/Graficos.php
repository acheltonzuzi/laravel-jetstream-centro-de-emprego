<?php

namespace App\Http\Livewire;

use App\Charts\MonthlyUsersChart;
use App\Charts\PieChart;
use Livewire\Component;

class Graficos extends Component
{
    public function render(MonthlyUsersChart $chart,PieChart $pie)
    {
        return view('livewire.graficos',['chart' => $chart->build(),'pie' => $pie->build()]);
    }
   
}
