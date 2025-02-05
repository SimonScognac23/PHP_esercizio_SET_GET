<?php

class Car
{
    private $num_telaio;




// 1 set
    protected function setCarTelaio($string)
     { // questa funzione serve per settare il numero del telaio e come ingresso avra una stringa 

      return $this->num_telaio =$string;   // mi ritorna il numero telaio sarà uguale a $string

}



// 2 get
protected function getCarTelaio(){
    return $this->num_telaio;     // questa funzione mi ritorna il num_telaio che sarebbe nientemeno che la stringa accettata come parametro formale 
}

}







// Classe figlia

class Fiat extends Car

{

    protected $license;
    protected $name;




    public function __construct($targa, $nome)
{
    $this->license = $targa;
    $this->name = $nome;


}




// funzione set
public function setMyCarTelaio($string){   // funzione di car cheavra come ritorno il setCarTelaio che è la funzione che abbiamo creato prima

  return $this->setCarTelaio($string);

}



// funzione get

public function getMyCarTelaio(){

    return $this->getCarTelaio();
}


public function printMessage()
{
    echo "la mia macchina è $this->name con targa $this->license e un numero di telaio " . $this->getMyCarTelaio() . "\n";
}

}









$car = new Fiat('12345678', 'Punto');
$car->setMyCarTelaio('1223333333');     // Setto la funzione che vuole in ingresso una stringa  con il numero di telaio 

$car->printMessage();