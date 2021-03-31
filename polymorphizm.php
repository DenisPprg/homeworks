<?php


class User{
    protected $name;
    protected $age;
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setAge(string $age)
    {
        $this->age = $age;
    }

    public function getAge(): string
    {
        return $this->age;
    }
}

class Worker extends User {
    private $salary;
    public function setSalary(string $salary)
    {
        $this->salary = $salary;
    }

    public function getSalary(): string
    {
        return $this->salary;
    }
}

$ivan = new Worker();
$ivan->setName('Иван');
$ivan->setAge(25);
$ivan->setSalary(1000);

$vasya = new Worker();
$vasya->setName('Вася');
$vasya->setAge(26);
$vasya->setSalary(2000);

$summa = $ivan->getSalary() + $vasya->getSalary();
echo "<pre>";
echo 'Сумма зарплат Ивана и Васи-'. $summa;


class Student extends User{
    private $grant;
    private $course;

    public function setGrant(string $grant)
    {
        $this->grant = $grant;
    }

    public function getGrant(): string
    {
        return $this->grant;
    }
    public function setCourse(string $course)
    {
        $this->course = $course;
    }

    public function getCourse(): string
    {
        return $this->course;
    }
}


class Driver extends Worker{
    private $experience;
    private $category = array('A','B','C');
    public function setExpAndCat(string $experience,$category){
        $this->experience = $experience;
        $this->category = $category;
    }
    public function getExp(): string{
        return $this->experience;
    }
    public function getCat(): array{
        return $this->category;
    }
}

echo "<br />";
$driver = new Driver();
var_dump($driver);
var_dump($driver->getCat());

