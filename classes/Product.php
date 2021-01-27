<?php
class Product
{
  private $id;
  private $sku;
  private $name;
  private $price;
  private $category;

  public function __construct($product = null)
  {
    if (is_array($product)) {
      $this->id = $product['productId'];
      $this->sku = $product['sku'];
      $this->name = $product['name'];
      $this->price = $product['price'];
      $this->category = $product['category'];
    }
  }
}

class Book extends Product
{
  public $weight;

  public function __construct($attr = null)
  {
    if (is_array($attr)) {
      $this->weight = $attr['weight'];
    }
  }
}

class DVD extends Product
{
  public $size;
  public function __construct($attr = null)
  {
    if (is_array($attr)) {
      $this->size = $attr['size'];
    }
  }
}

class Furniture extends Product
{
  public $width;
  public $height;
  public $length;

  public function __construct($attr = null)
  {
    if (is_array($attr)) {
      $this->width = $attr['width'];
      $this->height = $data['height'];
      $this->length = $data['length'];
    }
  }
}
