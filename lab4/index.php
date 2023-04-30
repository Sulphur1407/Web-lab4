<?php
//Змінні, робота з рядками, конкатенація, forEach, хеш масиви,
//explode implode, розіменуванння змінних, порівняння, приведення типів
//ООП, клас, нащадок, констуктор, об'єкт, виклик батьківського конструктора, патерн сінглтон

// Оголошення змінних з рядком
$line1 = "Рядок 1";
$line2 = "Рядок 2";

echo "<b>Конкатинація</b>:<br>";
// Виведення повідомлення з використанням змінної та конкатенацією
echo "Статичний рядок " . $line1  . " " . $line2 . " Кінець.<br>";

// Оголошення хеш масиву
$surname = array("Антон" => "Антонов", "Борис" => "Бойко", "Валерій" => "Валуйко");

echo "<br><b>Хеш масив:</b><br>";
// Виведення значень хеш масиву за допомогою foreach
foreach ($surname as $key => $value) {
    echo "Ім'я: " . $key . " | Прізвище:" . $value . "<br>";
}

echo "<br><b>explode та implode</b>:<br>";
// Оголошення рядка з роздільниками
$numbers = "1.2.3.4.5.6.7";
echo $numbers . "<br>";

// Розбивання рядка на масив по роздільниках та виведення масиву
$numbers_array = explode(".", $numbers);
print_r($numbers_array);

// Об'єднання масиву в рядок з роздільниками та виведення рядка
$numbers_string = implode("@", $numbers_array);
echo "<br>" . $numbers_string  . "<br>";

echo "<br><b>Розіменування масиву:</b><br>";
// Розіменування масиву та виведення його елементів
list($number1, $number2, $number3) = $numbers_array;
echo $number1 . "<br>";
echo $number2 . "<br>";
echo $number3 . "<br>"; 

// Оголошення змінних
$a = 0;
$b = null;

echo "<br><b>Приведення типів:</b><br>";
// Порівняння змінних з приведенням типів
if ($a == $b) {
    echo $a . " та " . $b . " рівні<br>";
} else {
    echo $a . " та " . $b . " не рівні<br>";
}

// Порівняння змінних без приведення типів
if ($a !== $b) {
    echo $a . " та " . $b . " не рівні<br>";
} else {
    echo $a . " та " . $b . " рівні<br>";
}

// Приведення до цілочисельного типу
$null_int = (int)$b;
echo "Null в цілочисельному типі: " . $null_int . "<br>";

echo "<br><b>ОOП:</b><br>";
// Оголошуємо клас Human
class Human {

    // Оголошуємо змінні для зберігання даних про людину
    private $name;
    private $age;
    
    // Конструктор класу, приймає ім'я та вік людини
    public function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
    }
  
    // Метод, що виводить привітання
    public function sayHello() {
      echo "Привіт. Мене звати " . $this->name . ".<br>";
    }
  
    // Метод, що виводить вік людини
    public function sayAge() {
      echo "Мені " . $this->age . " років.<br>";
    }
}
  
// Створюємо об'єкт класу Human
$human = new Human("Іван", 25);
  
// Викликаємо методи для виведення привітання та віку
$human->sayHello();
$human->sayAge();


echo "<br><b>Наслідування:</b><br>";
// Оголошуємо клас Student, який є нащадком класу Human
class Student extends Human {

    // Оголошуємо змінну для зберігання даних про курс студента
    private $course;
  
    // Конструктор класу, приймає ім'я, вік та курс студента
    public function __construct($name, $age, $course) {
      // Викликаємо конструктор батьківського класу за допомогою ключового слова parent
      parent::__construct($name, $age);
      $this->course = $course;
    }
  
    // Метод, що виводить курс студента
    public function sayCourse() {
      echo "Я навчаюсь на " . $this->course . " курсі.<br>";
    }
}
  
// Створюємо об'єкт класу Student
$student = new Student("Іван", 25, "3");
  
// Викликаємо методи для виведення привітання, віку та курсу 
$student->sayHello();
$student->sayAge();
$student->sayCourse();

echo "<br><b>Патерн Singleton:</b><br>";
class Singleton {

    // Зберігає єдиний екземпляр класу
    private static $instance;
  
    // Забороняємо створювати екземпляри класу ззовні
    private function __construct() {}
  
    // Забороняємо клонування екземплярів класу
    private function __clone() {}
  
    // Створює або повертає існуючий екземпляр класу
    public static function getInstance() {
      if (!isset(self::$instance)) {
        self::$instance = new self;
      }
      return self::$instance;
    }
}
  
// Створюємо перший об'єкт
$singl1 = Singleton::getInstance();
  
// Створюємо другий об'єкт
$singl2 = Singleton::getInstance();
 
// Перевірка, що $singleton1 та $singleton2 - це один і той же об'єкт
if ($singl1 === $singl2) {
    echo "Це один і той же об'єкт.<br>";
} else {
    echo "Це різні об'єкти.<br>";
}
?>