<?php
class Food {
  private $name;
	private $price;

	public function show_price(int $price) {
		echo $price .'<br>';
	}

	public function __construct(int $price) {
		$this->price = $price;
	}
}

$food = new Food(250);

print_r($food);

$food->show_price(250);
?>

<?php
class Animal {
  private $name;
	private $height;
	private $weight;

	public function show_height(int $height) {
		echo $height . '<br>';
	}

	public function __construct(int $height) {
		$this->height = $height;
	}
}

$animal = new Animal(60);

print_r($animal);

$animal->show_height(60);

?>