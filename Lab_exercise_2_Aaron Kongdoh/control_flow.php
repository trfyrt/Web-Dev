<?php
include 'variables.php';
ob_clean();

function ageCheck($age){
    if ($age >= 18){
        echo "You're an adult!";
    }
    else{
        echo "You're a minor!";
    }
}
$age = substr($mahasiswa1->age, 0, 2);

ageCheck($age);

?>