<?php

namespace App\Charts;

use App\Models\Usuario;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PieChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {   $maculino=Usuario::Where("sexo","Masculino")->count();
        $femenino=Usuario::Where("sexo","Femenino")->count();
        return $this->chart->pieChart()
            ->setTitle('Pessoas por Gênero')
            ->setSubtitle('Gênero mais frequente')
            ->addData([$maculino,$femenino])
            ->setLabels(['Masculino', 'Femenino']);
    }
}
