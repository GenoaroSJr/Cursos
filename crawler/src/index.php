<?php

require __DIR__ . "/../vendor/autoload.php";
                                                  
use Genoarosjr\Crawlerronin\Buscador\BuscarDadosCovid;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(["base_uri" => "https://www.worldometers.info/"]);
$crawler = new Crawler();
$buscador = new BuscarDadosCovid($client, $crawler);
//"coronavirus/";
$dados = $buscador->buscarDados("/coronavirus/");
$dados_encode = json_encode($dados);
var_dump($dados_encode);


