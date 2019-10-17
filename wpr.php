<?php
class auto {
    private $marka;

    private $kolor="czerwony";
    private $predkosc;
    private $tab = array();


    function __construct($marka_podana){
     $this->predkosc = 0;
     $this->marka = $marka_podana;
    echo("<br>konstruktor marka: ".$this->marka);
    echo("<br>konstruktor kolor: ".$this->kolor);
    echo("<br>konstruktor predkosc: ".$this->predkosc);}



    function sprawdzenie(){
        echo ("działam");
    }
    function uruchom_auto(){
        $this->predkosc = 5;
        echo('<br>jade '.$this->marka);
    }
    function getPredkosc(){
        return $this->Predkosc;
    }
    function setPredkosc(){
        $this->predkosc += 5;
    }
     function __tostring(){
     return '<li> UWAGA zgłaszam sie';
      }
      function __invoke(){   
      echo '<li> DZIALAM ale inaczej';
    }
      function __set($nowa_zm, $wartosc_nowej_zm){
      $this->tab[$nowa_zm] = $wartosc_nowej_zm;
     echo '<li> ustawiles '.$wartosc_nowej_zm;
     }
     function __get($nowa_zm){
     return $this->tab[$nowa_zm];
    }
    }

//$moje_autko1 = new auto('bmw');
$moje_autko = new auto('bmw');
$moje_autko();//__invoke

$moje_autko->przedmiot = 'matematyka';
$moje_autko->marka = 'opel';
echo $moje_autko->przedmiot;
echo $moje_autko->predkosc;
echo "<br>".$moje_autko->getPredkosc();

//$moje_autko1->sprawdzenie();
// $moje_autko1->uruchom_auto();

echo $moje_autko->setPredkosc();
echo $moje_autko->getPredkosc();
    
?>