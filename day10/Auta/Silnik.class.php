<?PHP
class Silnik{
    //public oznacza mozliwosc zmiany tej zmiennej
    //private oznacza ze zmienna okreslana jest tylko w klasie i nie jest mozliwa jej zmiana poza klasa
    private $typ;
    private $moc;
    public $wlaczony;
    
    //metoda bedaca  konstruktorem obiektu; moze byc bez parametrow
    //wywolywana zawsze przy tworzeniu obiektu (np $silnik_1= new Silnik())
    
    public function __construct($rodzaj,$km){
        $this->typ = $rodzaj;
        $this->moc = $km;
    }
}
?>