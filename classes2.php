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
class Thing
{
    public $price;
}
interface CarInterface // Интерфейс для автомобиля
{
    public function checkTheEnvironmentalFriendliness ($engineType);
}
class Car extends Thing implements CarInterface
{
    public function checkTheEnvironmentalFriendliness ($engineType)
    {
        if ($engineType != 'electric')
        {
            echo 'This car is not eco-friendly';
        }
        else
        {
            echo 'This car is eco-friendly';
        }
    }
    public $model;
    public $yearOfIssue;
    public $enginePower;
    public $engineType;
    public $bodyType;
    public $color;

    public function __construct($model, $yearOfIssue, $enginePower, $engineType, $bodyType, $color)
    {
        $this->model = $model;
        $this->yearOfIssue = $yearOfIssue;
        $this->enginePower = $enginePower;
        $this->enginelType = $engineType;
        $this->bodyType = $bodyType;
        $this->color = $color;
    }
}

$HondaCivic = new Car('Honda Civic Type R', 2017, 6500, 'gas', 'hatchback', 'red');
$TeslaModelS = new Car('Tesla Model S P100D', 2016, 568, 'electric ', 'hatchback', 'black');

interface TvInterface
{
    public function SelectChannel($numberOfChannels);
}
class TV extends Thing implements TvInterface
{
    public function SelectChannel($numberOfChannels)
    {
        echo 'Выберите канал от 1 до ' . $numberOfChannels;
    }
    public $model;
    public $yearOfIssue;
    public $screenType;
    public $isDigital;
    public $screenSize;
    public $numberOfColors;
    public $remoteControl;
    public $internetConnection;
    public $smartTv;
    public $numberOfChannels;

    public function __construct($model, $yearOfIssue, $screenType, $isDigital, $screenSize, $numberOfColors, $remoteControl, $internetConnection, $smartTv, $numberOfChannels )
    {
        $this->model = $model;
        $this->yearOfIssue = $yearOfIssue;
        $this->screenType = $screenType;
        $this->isDigital = $isDigital;
        $this->screenSize = $screenSize;
        $this->numberOfColors = $numberOfColors;
        $this->remoteControl = $remoteControl;
        $this->internetConnection = $internetConnection;
        $this->smartTv = $smartTv;
        $this->numberOfChannels = $numberOfChannels;
    }
}

$beryozka215 = new TV('Beryozka-215', 1976, 'kinescope', false, 24, 2, true, false, false, 8);
$samsungUE55MU7000U = new TV('Samsung UE55MU7000U', 2017, 'LCD', true, 55, 107000000, true, true, true, 200);

interface BallPenInterface
{
    public function write ($inkColor);
}
class BallPen extends Thing implements BalPenInterface
{
    public function write ($inkColor)
    {
        if (is_null($inkColor) = true)
        {
            echo 'В ручке нет чернил';
        }
        else
        {
            echo 'Ручка пишет цветом ' . $inkColor;
        }
    }
    public $bodyColor;
    public $size;
    public $withButton;
    public $inkColor;

    public function __construct($bodyColor, $size, $withButton, $inkColor)
    {
        $this->bodyColor = $bodyColor;
        $this->size = $size;
        $this->withButton = $withButton;
        $this->inkColor = $inkColor;
    }
}

$parkerPen = new BallPen('gold', 13, true, 'black');
$erichKrausePen = new BallPen('white', 15, false, 'blue');
interface DuckInterface
{
    public function voice ($voice, $voiceCount);
}
class Duck extends Thing implements DuckInterface
{
    public $age;
    public $name;
    public $size;
    public $color;
    public $voice = 'krya';
    public $voiceCount;
    public function sayCria($voice)
    {
        for($i= 0; $i<$voiceCount; $i++)
        {
            echo $voice;
        }
    }
    public function fly(){
        echo 'Duck is flying now';
    }
    public function swim(){
        echo 'Duck is swimming now';
    }

    public function __construct($name, $age, $size, $color, $voiceCount)
    {
        $this->age = $age;
        $this->name = $name;
        $this->size = $size;
        $this->color = $color;
        $this->voiceCount = $voiceCount;
    }
}

$billy = new Duck ('Billy', 2, 'small', 'brown', 2);
$willy = new Duck ('Willy', 1, 'small', 'yellow', 3);
interface ProductInterface
{
    public function discountСalculation();
}
class Product extends Thing implements ProductInterface
{
    public function discountСalculation ($price, $discount){
        echo 'Размер скидки равен ' . ($price*($discount/100) . '$');
    }
    public $category;
    public $name;
    public $validity;
    public $tax;
    public $discount;

    public function __construct($category, $name, $validity, $price, $tax, $discount)
    {
        $this->category = $category;
        $this->name = $name;
        $this->validity = $validity;
        $this->price = $price;
        $this->tax = $tax;
        $this->discount = $discount;
    }
}
$phpStorm = new Product('programs', 'phpStorm', 'thing', 199.00, 0, 0);
$cheesburger = new Product('food', 'Чизбургер Де Люкс', 'thing', 2.5, 18, 5);
$cheesburger->producer = 'KFC';
$cheesburger->expirationDate = '24.04.2018';