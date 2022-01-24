<?php

// Classe da Strategy, ela é o modelo para as outras classes;
// Ela é a "estratégia";
interface CalculaJurosStrategyInterface
{
    public function getTaxaDeJuros(Pedido $pedido);
}

// As classes a seguir implementam a Strategy;
// Cada uma delas tem sua prórpia forma de calculo;
// estratégias isoladas;
class Itau
{
    public function getTaxaDeJuros(Pedido $pedido){
        return 30;
    }
}

class Bradesco implements CalculaJurosStrategyInterface
{
    public function getTaxaDeJuros(Pedido $pedido){
        return 20;
    }
}


// essa clase vai pegar o valor de empréstimo desejado;
// não é necessário na estratégia;
class Pedido
{
    private $total;

    public function __construct($total)
    {
        $this->total = $total;
    }

    public function getTotal()
    {
        return $this->total;
    }
}

//essa classe irá usar as estratégias isoladas;
// ela recebe como parâmetro uma classe com estratégia isolada,
// essa classe de estratégia isolada tem um método get, chamado getTaxaDeJuros,
// dessa forma, consigo passar o $pedido para ser calculado com a taxa de juros desejada;
class CalculadoraDeJuros
{
    private $calculadorDeJuros;

    public function __construct(CalculaJurosStrategyInterface $calculadorDeJuros)
    {
        $this->calculadorDeJuros = $calculadorDeJuros;
    }

    public function calculaJuros(Pedido $pedido)
    {
        return $this->calculadorDeJuros->getTaxaDeJuros($pedido);
    }
}

//index.php

//define o pedido;
$meuPedido = new Pedido(50);

//define qual banco será utilziado na calculadora de juros;
$juros = new CalculadoraDeJuros(new Bradesco());


//chama função de calcular juros do Bradesco;
$juros->calculaJuros($meuPedido);

// Defino dentro de CalculadoraDeJuros que a classe utilizada será a do Bradesco;
// com calculaJuros($meuPedido) eu uso a classe CalculadoraDeJuros para chamar uma função da
// classe Bradesco();
// por uma função da classe CalculadoraDeJuros();
