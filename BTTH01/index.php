<?php

class Student {
  private $id;
  private $name;
  private $age;

  public function __construct($id, $name, $age) {
    $this->id = $id;
    $this->name = $name;
    $this->age = $age;
  }

  public function getId() {
    return $this->id;
  }

  public function setId($value) {    
    $this->id = $value;
  }

  public function getName() {
    return $this->name;
  }

  public function setName($value) {
    $this->name = $value;
  }

  public function getAge() {
    return $this->age;
  }

  public function setAge($value) {
    $this->age = $value;
  }
}


class StudentDAO {
  private $students = []; 

  public function add(Student $student) {
    $this->students[] = $student;
  }

  public function getAll() {
    return $this->students;
  }

  public function getById($id) {
    foreach ($this->students as $student) {
      if ($student->getId() === $id) {
        return $student;
      }
    }
    return null;
  }

 
  public function update(Student $student) {
    foreach ($this->students as &$s) {
      if ($s->getId() === $student->getId()) {
        $s = $student;
        break;
      }
    }
  }

  public function delete($id) {
    foreach ($this->students as $key => $student) {
      if ($student->getId() === $id) {
        unset($this->students[$key]);
        break;
      }
    }
  }
}
?>