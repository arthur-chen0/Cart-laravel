<?php 

namespace App\Model;

class ProductObject
{
    private $name;
    private $price;
    private $url;
    private $quantity = 1;

    public function __construct($name, $price, $url)
    {
        $this->name = $name;
        $this->price = $price;
        $this->url = $url;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getName()
    {
    	return $this->name;
    }

    public function getPrice()
    {
    	return $this->price;
    }

    public function getURL()
    {
    	return $this->url;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function containsName($name){
        return strcmp($this->name, $name) == 0;
    }

}
 ?>