<?PHP
//klasa sklada sie z:
//zmiennych - rzeczowniki
//i metod - czasowniki
class Dystrybutor {
    public $waga;
    public $baniak;
    public $zasilanie;
    public $stanWody;
    
    public function lejWode(){
        
        $this->stanWody = $this->stanWody - 0.5;
        echo "Nalewam wode!";
        echo "<br />";
        return 0.5;
    }
    public function podgrzejWode(){
        
    }
    public function koniecWody(){
        
    }
}
?>