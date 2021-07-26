<?php

//echo date('d/m/Y') . "<br/>";
//$data = new DateTime();
//echo $data->format('d-m-Y H:i:s') . "<br/>";

/**
 * P -> periodo, vem e dias, mesesm, ano e semana
 * Y anos
 * M meses
 * D dias
 * W semanas
 * T -> tempo, vem em hora, minuto e segundo
 * H horas
 * M minutos
 * S segundos
 */

//$data = new DateTime();
//$intervalo = new DateInterval('PT5M');// cria periodo de 5 minutos

//$data->add($intervalo); //adiciona 5 minutos
//$data->sub($intervalo); //retira 5 minutos
//var_dump($data);


//exericio
$data = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
echo $data->format('d/m/Y - H:i:s') . "<br>";
$intervalo = new DateInterval('P5DT10H50M');// cria periodo de 5 minutos
$data->sub($intervalo);
echo $data->format('d/m/Y - H:i:s') . "<br>";
