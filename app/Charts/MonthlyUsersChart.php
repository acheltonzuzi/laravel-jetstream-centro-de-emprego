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
        $cabinda=Usuario::Where("provincia","cabinda")->count();
        $cunene=Usuario::Where("provincia","Cunene")->count();
        $bie=Usuario::Where("provincia","Bie")->count();
        $lunda_norte=Usuario::Where("provincia","lunda norte")->count();
        $lunda_sul=Usuario::Where("provincia","lunda sul")->count();
        $cuanza_norte=Usuario::Where("provincia","cuanza norte")->count();
        $cuanza_sul=Usuario::Where("provincia","cuanza sul")->count();
        $luanda=Usuario::Where("provincia","luanda")->count();
        $malange=Usuario::Where("provincia","malange")->count();
        $moxico=Usuario::Where("provincia","moxico")->count();
        $huila=Usuario::Where("provincia","huila")->count();
        $benguela=Usuario::Where("provincia","benguela")->count();
        $huambo=Usuario::Where("provincia","huambo")->count();
        $namibe=Usuario::Where("provincia","namibe")->count();
        $cuando_cubango=Usuario::Where("provincia","cuando cubango")->count();
        $uige=Usuario::Where("provincia","uige")->count();
        $bengo=Usuario::Where("provincia","bengo")->count();
        $zaire=Usuario::Where("provincia","zaire")->count();
        return $this->chart->barChart()
            ->setTitle('Cadastro por Província')
            ->setSubtitle('províncias com mais cadastros')
            ->addData('Pessoas', [$bengo,$benguela,$bie,$cabinda,$cuando_cubango,$cuanza_norte,$cuanza_sul,$cunene,$huambo,$huila,$luanda,$lunda_norte,$lunda_sul,$malange,$moxico,$namibe,$uige,$zaire])
            ->setXAxis(['Bengo', 'Benguela', 'Bié', 'Cabinda', 'Cuando Cubango', 'Cuanza norte',"Cuanza Sul","Cunene", "Huambo","Huíla","Luanda","Lunda Norte","Lunda Sul","Malanje","Moxico","Namibe","Uíge","Zaire"]);
    }
}
