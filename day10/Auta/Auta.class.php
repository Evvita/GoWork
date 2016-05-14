<?PHP
class Auta{
    public $silnik;
    private $przebieg;
    public $kola;
    
    public function __construct($silnik){
        $this->silnik = $silnik;
        $this->przebieg = 0;
        
    }
    public function getPrzebieg(){
        return $this->przebieg;
    }
    public function setJedz($zasieg){
        return $this->przebieg += $zasieg;
    }
}
?>