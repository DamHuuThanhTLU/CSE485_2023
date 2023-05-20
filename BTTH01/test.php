<?php
    declare(strict_types = 1);
    class Student{
        public int $id;
        public string $name;
        public int $age;

        public function __construct(int $id,string $name,int $age)
        {
            $this->id  = $id;
            $this->name   = $name;
            $this->age = $age;
        }
        public function getId(): int {
            return $this->id;
        }
        
        public function setId(int $id): self {
            $this->id = $id;
            return $this;
        }

        public function getNamae(): string {
            return $this->name;
        }
        
        
        public function setNamae(string $name): self {
            $this->name = $name;
            return $this;
        }

        
        public function getAge(): int {
            return $this->age;
        }
        
        
        public function setAge(int $age): self {
            $this->age = $age;
            return $this;
        }

    }

    class StudentDAO extends Student{
        private string $data;
        
        public function __construct(int $id,string $name,int $age,string $data)
        {
            $this->id  = $id;
            $this->name   = $name;
            $this->age = $age;
            $this->data =$data;

        }
        public function getData(): string {
            return $this->data;
        }
        
        public function setData(string $data): self {
            $this->data = $data;
            return $this;
        }

        //create
        public function create_data(string $data){
            $create = fopen($data,"W");
            if($create){
                echo "tao file thanh cong";
            }else{
                echo"Error:tao file khong thanh cong";
            }
        }
        //read
        public function read($data){
        $read = fopen($data, "r");
        $contents = fread($read, filesize($data));
        echo "<pre>$contents</pre>";
        fclose($data);
        }
        //update 
        public function update($data,$id,$name,$age){
            fwrite($data,$id);
            fwrite($data,$name);
            fwrite($data,$age);
            $update  = file_get_contents($data);
            return $update;
        }
        //Delete
        public function delete($data){
            $delete = unlink($data);
            if($delete){

                echo"xoa thanh cong";
            }else{
                echo"error:xoa khong thanh cong";
            }
        }
        
    }    
    ?>