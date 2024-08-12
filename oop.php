<?php 
class Animal{
    public $name;
    
    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function run(){
        echo "Running...";
    }

    public function sleep(){
        echo "Sleeping...";
    }


    //Destructor là một phương thức được gọi khi một đối tượng bị hủy
    public function __destruct(){
        echo "Destroying...";
    }
}

class Dog extends Animal{
    public function bark(){
        echo "Barking...";
    }

    public function run(){
        echo "Dog is running...";
    }
}

$dog = new Dog("Dog1");
//Sau khi dùng hàm setName, giá trị của thuộc tính name sẽ thay đổi
$dog->setName("Dog2");
echo $dog->getName();
echo "<br>";


//Access Modifier
//Public: Có thể truy cập từ bất kỳ đâu
//Protected: Chỉ có thể truy cập từ bên trong class hoặc class kế thừa
//Private: Chỉ có thể truy cập từ bên trong class
//Nếu không khai báo Access Modifier thì mặc định sẽ là Public
//Ví dụ về Access Modifier
class Animal2{
    public $name;
    protected $color;
    private $weight;

    public function __construct($name, $color, $weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function getColor(){
        return $this->color;
    }

    public function getWeight(){
        return $this->weight;
    }
}

class Dog2 extends Animal2{
    public function __construct($name, $color, $weight){
        parent::__construct($name, $color, $weight);
    }

    public function getColor(){
        return $this->color;
    }

    public function getWeight(){
        return $this->weight;
    }
}

$dog2 = new Dog2("Dog2", "Black", 10);

//Khi gọi hàm getWeight từ class Dog2 thì sẽ báo lỗi vì thuộc tính  weight là và private



// Abstract Class
// Abstract Class là class mà không thể khởi tạo đối tượng từ nó
// Abstract Class có thể chứa các phương thức abstract hoặc không abstract

abstract class Animal3{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    abstract public function run();
}

class Dog3 extends Animal3{
    public function run(){
        echo "Dog is running...";
    }
}

//Interface
//Interface là một bản thiết kế cho class hay còn gọi là bản hợp đồng
//Interface chỉ chứa các phương thức không chứa thuộc tính
//Interface không thể khởi tạo đối tượng từ nó
//Một class có thể implement nhiều interface
interface Animal4{
    public function run();
    public function sleep();
}

class Dog4 implements Animal4{
    public function run(){
        echo "Dog is running...";
    }

    public function sleep(){
        echo "Dog is sleeping...";
    }
}

//Trait
//Trait là một nhóm các phương thức được định nghĩa trong một class để sử dụng lại
//Trait không thể khởi tạo đối tượng từ nó

trait Animal5{
    public function run(){
        echo "Running...";
    }

    public function sleep(){
        echo "Sleeping...";
    }
}

class Dog5{
    use Animal5;
}
$dog5 = new Dog5();
$dog5->run();

//Static Method
//Static Method là phương thức của class không cần khởi tạo đối tượng
//Để gọi phương thức static thì sử dụng toán tử ::
class Math{
    public static function sum($num1, $num2){
        return $num1 + $num2;
    }
}

echo Math::sum(1, 2);

//Static Property
//Static Property là thuộc tính của class không cần khởi tạo đối tượng
class Math2{
    public static $num = 10;
}

echo Math2::$num;

//Namespace
//Namespace là một cách để đóng gói các class, interface, trait, function mà trong đó có thể dùng chung tài nguyên
//Namespace được khai báo ở đầu file
// namespace MyNamespace;



//Iterable
//Iterable là một kiểu dữ liệu mới trong PHP 7.1
//Iterable là một kiểu dữ liệu mà có thể lặp qua được
function test(iterable $iterable){
    foreach($iterable as $value){
        echo $value;
    }
}

$array = [1, 2, 3, 4, 5];
test($array);

// Khác nhau giữa array và iterable
//Array: Chỉ chấp nhận mảng
//Iterable: Chấp nhận mảng hoặc các đối tượng có thể lặp qua được

?>