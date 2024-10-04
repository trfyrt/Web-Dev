<?php
include 'variables.php';

$mahasiswa1 = new Mahasiswa("Aaron Jevon Benedict Kongdoh", '2006-01-08', "male", 4.0);
$mahasiswa2 = new Mahasiswa("Gilbert Winardy", '2004-01-08', "male", 4.0);
$mahasiswa3 = new Mahasiswa("Deny Wahyudi Asaloei", '2005-03-15', "male", 4.0);
$mahasiswa4 = new Mahasiswa("Aryo Karel Merentek", '2004-01-04', "male", 4.0);
$mahasiswa5 = new Mahasiswa("Hainzel Kemal", '2005-05-25', "male", 4.0);

echo "<b>Mahasiswa 1</b><br>Name: $mahasiswa1->name <br>Age: $mahasiswa1->age<br>Sex: $mahasiswa1->sex<br>GPA: $mahasiswa1->gpa<br><br>";
echo "<b>Mahasiswa 2</b><br>Name: $mahasiswa2->name <br>Age: $mahasiswa2->age<br>Sex: $mahasiswa2->sex<br>GPA: $mahasiswa2->gpa<br><br>";
echo "<b>Mahasiswa 3</b><br>Name: $mahasiswa3->name <br>Age: $mahasiswa3->age<br>Sex: $mahasiswa3->sex<br>GPA: $mahasiswa3->gpa<br><br>";
echo "<b>Mahasiswa 4</b><br>Name: $mahasiswa4->name <br>Age: $mahasiswa4->age<br>Sex: $mahasiswa4->sex<br>GPA: $mahasiswa4->gpa<br><br>";
echo "<b>Mahasiswa 5</b><br>Name: $mahasiswa5->name <br>Age: $mahasiswa5->age<br>Sex: $mahasiswa5->sex<br>GPA: $mahasiswa5->gpa<br><br>";



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