<?php
   // funkcja sluzy do sprawdzania konfig php
   // phpinfo();
//to msc to inicjacja polaczenia z baza danych mysql
// adres serwera - np. localhost lub 127.0.0.1
/* $baza = new mysqli('adres_serwera_bazy_danych_IP/Domena','login_bazy_danych','haslo_bazy_danych','nazwa_bazy_danych'); 
*/
//baza - wskaznik/pilot do obiektu ktory jest baza danych

function connectDB(){
    // polaczenie z baza
    $baza = new mysqli('localhost','root','','baza_ewa'); 
    // sprawdzanie tego polaczenia
    // skladowa "connect_errno przyjmuje:
    // true - blad polaczenia z baza
    // false - nie ma bledu, udalo sie polaczyc
    if($baza->connect_errno){
        echo "numer bledu: ".$baza->connect_errno;
        return false;
    }else{
        return $baza;
    }
    //funkcja wbudowana w mysqli - zamyka polaczenie
    $baza->close();

}
//wrzucamy baze w nowa funkcje, mozemy zmienic nazwe dla porzadku
function showComments($db){
    $sqlquery = 'SELECT * FROM comments'; //zapytanie sql zapisane jako zmienna textowa (string)
    $rezultat = $db->query($sqlquery); //rezultat zapytania. $db->query to metoda ktora zwraca wyniki zapytania przekazanego jako argument tej metody
    // rezultat = jakis wynik -> true - jesli zapytanie sie udalo
    // rezultat = FALSE - bledne zapytanie sql
    if ($rezultat){
        echo "liczba komentarzy: ".$rezultat->num_rows;
        echo "<br />";
        
        while($wiersz = $rezultat->fetch_object()){
            echo "id: ".$wiersz->id." ";
            echo "komentarz: ".$wiersz->comment." ";
            echo "data: ".$wiersz->createdate." ";
            echo "<br />";
        }
    }else{
        echo "bledne zapytanie sql";
    }
     
}
//f potrebuje do zmiany komentarza info o id kometnarza, texcie i bazie
function changeComments($id,$comment,$db){
    $sqlquery = 'UPDATE comments SET comment="'.$comment.'" WHERE comments.id = '.$id;
    // echo $sqlquery; probna zaslepka
    $rezultat = $db->query($sqlquery); 
    if ($rezultat){
        echo "udalo sie zaktualizowac";
        echo "<br />";
        echo "Liczba wierszy ".$db->affected_rows;
    }else{
        echo "bledne zapytanie sql: ".$sqlquery;
    }
     
}
//czesc glowna programu
$mojaBaza = connectDB();
showComments($mojaBaza); // wywolanie metody wraz z przekazany do niej obiektem - baza danych
//changeComments(3,"sra-ta-ta-ta",$mojaBaza);

$mojaBaza->close();

?>