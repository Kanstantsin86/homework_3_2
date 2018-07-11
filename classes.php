<?php

abstract class Thing//объявляем абстрактный класс Вещь
{
    public $category;//категория
    public $name;//название
    public $validity;//срок годности
    public $tax;//налог
    public $discount;//скидка
    public $price;//цена
    public $basketQuantity;//количество единиц в корзине

    public function __construct($category, $name, $validity, $tax, $discount, $price, $basketQuantity)
    {
        $this->category = $category;
        $this->name = $name;
        $this->validity = $validity;
        $this->tax = $tax;
        $this->discount = $discount;
        $this->price = $price;
        $this->basketQuantity = $basketQuantity;
    }
}

interface CarInterface // Интерфейс для автомобиля
{
    public function checkTheEnvironmentalFriendliness ($engineType);
}

class Car extends Thing implements CarInterface
{
    public $model;
    public $yearOfIssue;
    public $enginePower;
    public $engineType;
    public $bodyType;
    public $color;

    public function __construct($category, $name, $validity, $tax, $discount, $price, $basketQuantity, 
            $model, $yearOfIssue, $enginePower, $engineType, $bodyType, $color) 
    {
        parent::__construct($category, $name, $validity, $tax, $discount, $price, $basketQuantity);
        $this->model = $model;
        $this->yearOfIssue = $yearOfIssue;
        $this->enginePower = $enginePower;
        $this->engineType = $engineType;
        $this->bodyType = $bodyType;
        $this->color = $color;
    }
    
      
    public function checkTheEnvironmentalFriendliness ($engineType)
    {
        if ($engineType === 'electric') {
            echo 'This car is eco-friendly';
        } else {
            echo 'This car is not eco-friendly';
        }
    }
}

$HondaCivic = new Car('Автомобили', 'Honda Civic Type R', 0, 15, 10, 50000, 0, 
        'Honda Civic Type R', 2016, 6500, 'gas', 'hatchback', 'red');
checkTheEnvironmentalFriendliness($HondaCivic->engineType);

$TeslaModelS = new Car('Автомобили', 'Tesla Model S P100D', 0, 5, 10, 90000, 0, 
        'Tesla Model S P100D', 2016, 568, 'electric', 'hatchback', 'black');
checkTheEnvironmentalFriendliness($TeslaModelS->engineType);

interface TvInterface
{
    public function SelectChannel($numberOfChannels);
}

class TV extends Thing implements TvInterface
{
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
    
    public function __construct($category, $name, $validity, $tax, $discount, $price, $basketQuantity, 
            $model, $yearOfIssue, $screenType, $isDigital, $screenSize, $numberOfColors, $remoteControl, 
            $internetConnection, $smartTv, $numberOfChannels)
    {
        parent::__construct($category, $name, $validity, $tax, $discount, $price, $basketQuantity);
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
    
    public function SelectChannel($numberOfChannels)
    {
        echo 'Выберите канал от 1 до ' . $numberOfChannels;
    }
}

$beryozka215 = new TV('Телевизоры', 'Beryozka-215', 0, 0, 99, 100, 0,
        'Beryozka-215', 1976, 'kinescope', false, 24, 2, true, false, false, 8);
SelectChannel($beryozka215->numberOfChannels);

$samsungUE55MU7000U = new TV('Телевизоры', 'Samsung UE55MU7000U', 0, 20, 10, 1500, 0, 
        'Samsung UE55MU7000U', 2017, 'LCD', true, 55, 107000000, true, true, true, 200);
SelectChannel($samsungUE55MU7000U->numberOfChannels);

interface BallPenInterface
{
    public function write ($inkColor);
}

class BallPen extends Thing implements BallPenInterface
{
    public $bodyColor;
    public $size;
    public $withButton;
    public $inkColor;

    public function __construct($category, $name, $validity, $tax, $discount, $price, $basketQuantity,
            $bodyColor, $size, $withButton, $inkColor)
    {
        parent::__construct($category, $name, $validity, $tax, $discount, $price, $basketQuantity);
        $this->bodyColor = $bodyColor;
        $this->size = $size;
        $this->withButton = $withButton;
        $this->inkColor = $inkColor;
    }

    public function write ($inkColor)
    {
        if (is_null($inkColor) === true){
            echo 'В ручке нет чернил';
        } else {
            echo 'Ручка пишет цветом ' . $inkColor;
        }
    }
}
$parkerPen = new BallPen('Шариковые ручки', 'Parker', 0, 20, 5, 10, 0, 
    'gold', 13, true, 'black');
write($parkerPen->inkColor);

$erichKrausePen = new BallPen('Шариковые ручки', 'ErichKrause', 0, 20, 5, 3, 0,
    'white', 15, false, 'blue');
write($erichKrausePen->inkColor);

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
    public $voice;
    public $voiceCount;
    
    public function __construct($category, $name, $validity, $tax, $discount, $price, $basketQuantity, 
        $age, $size, $color, $voice, $voiceCount)
    {
        parent::__construct($category, $name, $validity, $tax, $discount, $price, $basketQuantity);
        $this->age = $age;
        $this->size = $size;
        $this->color = $color;
        $this->voice = $voice;
        $this->voiceCount = $voiceCount;
    }

    public function voice($voice, $voiceCount)
    {
        for ($i = 0; $i < $voiceCount; $i++) {
            echo $voice . "!!! ";
            
        }
    }
}

$billy = new Duck ('Утки', 'Billy', 0, 10, 10, 50, 0, 
    2, 'small', 'brown', 'Billy-krya', 2);
voice($billy->voice, $billy->voiceCount);

$willy = new Duck ('Утки', 'Willy', 0, 10, 10, 80, 0, 
    1, 'small', 'yellow', 'Willy-krya', 3);
voice($willy->voice, $willy->voiceCount);

interface ProductInterface
{
    public function inReserve($in_reserve);
}
class Product extends Thing implements ProductInterface
{
    public $in_reserve;
   
    public function __construct($category, $name, $validity, $tax, $discount, $price, $basketQuantity, 
        $in_reserve)
    {
        parent::__construct($category, $name, $validity, $tax, $discount, $price, $basketQuantity);
        $this->in_reserve = $in_reserve;
    }
    
    public function inReserve($in_reserve)
    {
        echo 'Количество товара на складе -  ' . ($in_reserve) . 'единиц';
    }
}

$phpStorm = new Product ('programs', 'phpStorm', 0, 20, 0, 199.99, 0, 
    2000);
inReserve($phpStorm->in_reserve);

$cheesburger = new Product ('food', 'Чизбургер Де Люкс', 0, 20, 15, 2.50, 0, 
    35);
inReserve($cheesburger->in_reserve);
