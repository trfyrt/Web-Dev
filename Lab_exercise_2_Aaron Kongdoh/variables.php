<?php

class Mahasiswa {
    public $name;
    public $birthDate;
    public $age;
    public $sex = "";
    public $gpa;
    public $isStudent = TRUE;

    public function __construct($newName, $newBirthDate, $newSex, $newGpa) {
        $this->name = $newName;

        // Untuk umur
        $this->birthDate = date_create($newBirthDate);
        $date = new DateTime("now");
        $this->age = date_diff($this->birthDate, $date)->format('%y years, %m months, dan %d days old');

        $this->sex = $newSex;
        $this->gpa = $newGpa;
        }
}

?>