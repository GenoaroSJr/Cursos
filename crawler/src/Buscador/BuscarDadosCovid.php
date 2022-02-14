<?php


namespace Genoarosjr\Crawlerronin\Buscador;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class BuscarDadosCovid
{
    private $httpsClient;
    private $crawler;
    public function __construct(ClientInterface $httpsClient, Crawler $crawler)
    {
        $this->httpsClient = $httpsClient;
        $this->crawler = $crawler;
    }

    public function buscarDados(string $url): array
    {
        $req = $this->httpsClient->request('GET', $url, );
        $html = $req->getBody();
        $this->crawler->addHtmlContent($html);
        
        $paises = $this->crawler->filter('a.mt_a');
        
        $tabela = [];
        foreach ($paises as $pais) {
            $tabela["$pais->textContent"] = array($pais->textContent);
        }
        return $tabela;
    }
}
