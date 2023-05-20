<?php
class Student {
    private $id;
    private $name;
    private $age;
    private $grade;

    public function __construct($id, $name, $age, $grade) {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getGrade() {
        return $this->grade;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setGrade($grade) {
        $this->grade = $grade;
    }
}   

class StudentDAO {
    private $students = array();
    private $filename;

    public function __construct($filename) {
        $this->filename = $filename;
        $this->load();
    }

    public function add($student) {
        foreach ($this->students as $s) {
            if ($s->getId() == $student->getId()) {
                return false; 
            }
        }

        $this->students[] = $student;
        $this->save();
        return true;
    }

    public function update($id, $name, $age, $grade) {
        foreach ($this->students as $s) {
            if ($s->getId() == $id) {
                $s->setName($name);
                $s->setAge($age);
                $s->setGrade($grade);
                $this->save();
                return true;
            }
        }

        return false; 
    }

    public function delete($id) {
        foreach ($this->students as $key => $s) {
            if ($s->getId() == $id) {
                unset($this->students[$key]);
                $this->save();
                return true;
            }
        }

        return false; 
    }

    public function getAll() {
        return $this->students;
    }

    private function load() {
        if (!file_exists($this->filename)) {
            return;
        }

        $handle = fopen($this->filename, "r");
        if (!$handle) {
            throw new Exception("Cannot open file: " . $this->filename);
        }

        while (($data = fgetcsv($handle)) !== false) {
            $id = $data[0];
            $name = $data[1];
            $age = $data[2];
            $grade = $data[3];
            $this->students[] = new Student($id, $name, $age, $grade);
        }

        fclose($handle);
    }

    private function save() {
        $handle = fopen($this->filename, "w");
        if (!$handle) {
            throw new Exception("Cannot open file: " . $this->filename);
        }

        foreach ($this->students as $s) {
            fputcsv($handle, array(
                $s->getId(),
                $s->getName(),
                $s->getAge(),
                $s->getGrade()
            ));
        }

        fclose($handle);
    }
}

$filename = "students.csv";
$dao = new StudentDAO($filename);


$student = new Student(1, "John Smith", 12, 6);
$dao->add($student);


$dao->update(1, "John Doe", 13, 7);


$dao->delete(1);


$students = $dao->getAll();
foreach ($students as $s) {
    echo "{$s->getId()}, {$s->getName()}, {$s->getAge()}, {$s->getGrade()}<br>";
}
    ?>