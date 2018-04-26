<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 23.04.2018
 * Time: 18:20
 */

/*Распишите своё понимание полиморфизма и наследования своими словами. Представьте, что вас спрашивают на собеседовании.
Своими словами распишите отличие интерфейсов и абстрактных классов. В чём отличие? Когда лучше использовать одно, когда другое?
Для всех объектов, которые вы делали в прошлом ДЗ, придумайте, что могло бы быть суперклассом? (Необходимо написать код).
Создайте интерфейсы для всех объектов, которые у вас были, и имплементируйте их.
*/

class Vehicle // Суперкласс "Транспортное средство" для класса "Автомобиль"
{

}

interface CarInterface // Интерфейс для автомобиля
{
    public function checkTheEnvironmentalFriendliness ($engineType);
}

class Car extends Vehicle
{
    public function __construct($model, $yearOfIssue, $enginePower, $engineType, $bodyType, $color)
    {
        $this -> model = $model;
        $this -> yearOfIssue = $yearOfIssue;
        $this -> enginePower = $enginePower;
        $this -> enginelType = $engineType;
        $this -> bodyType = $bodyType;
        $this -> color = $color;
    }
}

class Car implements CarInterface
{
    public function checkTheEnvironmentalFriendliness ($engineType); // Функция будет проверять авто на экологичность, принимая в качестве параметра тип двигателя
}

$HondaCivic = new Car('Honda Civic Type R', 2017, 6500, 'gas', 'hatchback', 'red');
$TeslaModelS = new Car('Tesla Model S P100D', 2016, 568, 'electric ', 'hatchback', 'black');

class Electronics // Суперкласс "Электронная аппаратура" для класса "Телевизор"
{
}


interface 
{
    public function show ();
}

interface ElectrinicsInterface // Интерфейс для электронной аппаратуры
{
    public function turnOn ($voltage);
}

class TV extends Electronics
{
    public function __construct($model, $yearOfIssue, $screenType, $isDigital, $screenSize, $numberOfColors, $remoteControl, $internetConnection, $smartTv )
    {
        $this -> model = $model;
        $this -> yearOfIssue = $yearOfIssue;
        $this -> screenType = $screenType;
        $this -> isDigital = $isDigital;
        $this -> screenSize = $screenSize;
        $this -> numberOfColors = $numberOfColors;
        $this -> remoteControl = $remoteControl;
        $this -> internetConnection = $internetConnection;
        $this -> smartTv = $smartTv;
    }
}

class Electronics implements ElectrinicsInterface
{
    public function TurnOn ($voltage); // Функция будет проверять авто на экологичность, принимая в качестве параметра тип двигателя
}

$beryozka215 = new TV('Beryozka-215', 1976, 'kinescope', false, 24, 2, true, false, false);
$samsungUE55MU7000U = new TV('Samsung UE55MU7000U', 2017, 'LCD', true, 55, 107000000, true, true, true );

class Pen // Суперкласс "Ручка" для класса "Шариковая ручка"
{

}

interface penInterface // Интерфейс для ручки
{
    public function turnOn ($voltage);
}

class BallPen extends Pen
{
    public $bodyColor;
    public $size;
    public $withButton;
    public $inkColor;
}

$parkerPen = new BallPen;
$parkerPen->bodyColor = 'gold';
$parkerPen->size = 13;
$parkerPen->withButton = true;
$parkerPen->inkColor = 'black';

$erichKrausePen = new BallPen;
$erichKrausePen->bodyColor = 'white';
$erichKrausePen->size = 15;
$erichKrausePen->withButton = false;
$erichKrausePen->inkColor = 'blue';

class Ballpen implements penInterface
{
    public function presenceInkCheck ($color); // Функция будет проверять наличие чернил в ручке, проверяя, есть ли у нее цвет
}


class Bird // Суперкласс "Птица" для класса "Утка"
{

}

interface BirdInterface
{
    public function voice ($voice, $voiceCount);
}

class Duck extends Bird
{
    public $age;
    public $name;
    public $size;
    public $color;
    public $voice = 'krya';
    public function sayCria($voice){
        echo $voice;
    }
    public function fly(){
        echo 'Duck is flying now';
    }
    public function swim(){
        echo 'Duck is swimming now';
    }
}

$duck = new Duck;
$duck->age = 2;
$duck->size = 'large';
$duck->color = 'brown';

$litteDuck = new Duck;
$litteDuck->age = 0.1;
$litteDuck->size = 'small';
$litteDuck->color = 'yellow';

class Duck implements BirdInterface
{
    public function voice ($voice, $voiceCount); // Функция, которая будет будет указывать птице подать голос указанное число раз
}

class Thing // Суперкласс "Вещь" для класса "Товар"
{

}

interface ProductInterface
{
    public function discountСalculation ($price, $discount);
}

class Product extends Thing
{
    public function __construct($category, $name, $price, $validity, $tax, $discount)
    {
        $this -> category = $category;
        $this -> name = $name;
        $this -> price = $price;
        $this -> validity = $validity;
        $this -> tax = $tax;
        $this -> discount = $discount;
    }
}

$phpStorm = new Product('programs', 'phpStorm', 'thing', 199.00, 0, 0);
$phpStorm->validity = 1;
$cheesburger = new Product('food', 'Чизбургер Де Люкс', 'thing', 119, 18, 5);
$cheesburger->producer = 'KFC';
$cheesburger->expirationDate = '24.04.2018';

class Product implements ProductInterface
{
    public function discountСalculation ($price, $discount); // Функция, которая будет рассчитывать сумму скидки принимая цену товара и процент скидки
}