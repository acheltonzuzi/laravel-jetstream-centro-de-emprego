<?php

namespace App\Charts;

use App\Models\Usuario;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $cabinda=Usuario::Where("provincia","Cabinda")->count();
        $cunene=Usuario::Where("provincia","Cunene")->count();
        $bie=Usuario::Where("provincia","Bie")->count();
        $lunda_norte=Usuario::Where("provincia","Lunda Norte")->count();
        $lunda_sul=Usuario::Where("provincia","Lunda Sul")->count();
        $cuanza_norte=Usuario::Where("provincia","Cuanza Norte")->count();
        $cuanza_sul=Usuario::Where("provincia","Cuanza Sul")->count();
        $luanda=Usuario::Where("provincia","Luanda")->count();
        $malange=Usuario::Where("provincia","Malange")->count();
        $moxico=Usuario::Where("provincia","Moxico")->count();
        $huila=Usuario::Where("provincia","Huila")->count();
        $benguela=Usuario::Where("provincia","Benguela")->count();
        $huambo=Usuario::Where("provincia","Huambo")->count();
        $namibe=Usuario::Where("provincia","Namibe")->count();
        $cuando_cubango=Usuario::Where("provincia","Cuando Cubango")->count();
        $uige=Usuario::Where("provincia","Uige")->count();
        $bengo=Usuario::Where("provincia","Bengo")->count();
        $zaire=Usuario::Where("provincia","Zaire")->count();
        return $this->chart->barChart()
            ->setTitle('Cadastro por Província')
            ->setSubtitle('províncias com mais cadastros')
            ->addData('Pessoas', [$bengo,$benguela,$bie,$cabinda,$cuando_cubango,$cuanza_norte,$cuanza_sul,$cunene,$huambo,$huila,$luanda,$lunda_norte,$lunda_sul,$malange,$moxico,$namibe,$uige,$zaire])
            ->setXAxis(['Bengo', 'Benguela', 'Bié', 'Cabinda', 'Cuando Cubango', 'Cuanza norte',"Cuanza Sul","Cunene", "Huambo","Huíla","Luanda","Lunda Norte","Lunda Sul","Malanje","Moxico","Namibe","Zaire"]);
    }
}
