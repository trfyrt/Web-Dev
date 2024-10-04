<?php
include 'variables.php';

$mahasiswa1 = new Mahasiswa("Aaron Jevon Benedict Kongdoh", '2006-01-08', "male", 4.0);
$mahasiswa2 = new Mahasiswa("Gilbert Winardy", '2004-01-08', "male", 4.0);
$mahasiswa3 = new Mahasiswa("Deny Wahyudi Asaloei", '2005-03-15', "male", 4.0);
$mahasiswa4 = new Mahasiswa("Aryo Karel Merentek", '2004-01-04', "male", 4.0);
$mahasiswa5 = new Mahasiswa("Hainzel Kemal", '2005-05-25', "male", 4.0);


function greet($name){
    echo "Hello $name!";
};

$students = array($mahasiswa1->name, $mahasiswa2->name, $mahasiswa3->name, $mahasiswa4->name, $mahasiswa5->name);

for ($i=0; $i<count($students) ;$i++) {
    greet($students[$i]);
    echo '<br>';
  }
?>