<?php
include 'variables.php';
ob_clean();

function greet($name){
    echo "Hello $name!";
};

$students = array($mahasiswa1->name, $mahasiswa2->name, $mahasiswa3->name, $mahasiswa4->name, $mahasiswa5->name);

foreach ($students as $x) {
    greet($x);
    echo '<br>';
  }
?>