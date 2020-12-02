<?php
namespace Model;

class Product
{

  private $description;

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

}

?>
