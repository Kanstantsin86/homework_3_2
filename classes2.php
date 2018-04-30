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
    public function checkTheEnvironmentalFriendliness ($engineType);
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
    public function show($channelNumber);
}

class TV extends Thing implements TvInterface
{
    public function show($channelNumber);
    public function __construct($model, $yearOfIssue, $screenType, $isDigital, $screenSize, $numberOfColors, $remoteControl, $internetConnection, $smartTv )
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
    }
}

$beryozka215 = new TV('Beryozka-215', 1976, 'kinescope', false, 24, 2, true, false, false);
$samsungUE55MU7000U = new TV('Samsung UE55MU7000U', 2017, 'LCD', true, 55, 107000000, true, true, true );

interface BallPenInterface // Интерфейс для ручки
{
    public function write ($readyToWrite);
}

class BallPen extends Thing implements BalPenInterface
{
    public function write ($readyToWrite);
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

interface DuckInterface
{
    public function voice ($voice, $voiceCount);
}

class Duck extends Thing implements DuckInterface
{
     public function voice ($voice, $voiceCount);
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

interface ProductInterface
{
    public function discountСalculation ($price, $discount);
}

class Product extends Thing implements ProductInterface
{
    public function discountСalculation ($price, $discount);
    public function __construct($category, $name, $validity, $tax, $discount)
    {
        $this->category = $category;
        $this->name = $name;
        $this->validity = $validity;
        $this->tax = $tax;
        $this->discount = $discount;
    }
}

$phpStorm = new Product('programs', 'phpStorm', 'thing', 199.00, 0, 0);
$phpStorm->validity = 1;
$cheesburger = new Product('food', 'Чизбургер Де Люкс', 'thing', 119, 18, 5);
$cheesburger->producer = 'KFC';
$cheesburger->expirationDate = '24.04.2018';