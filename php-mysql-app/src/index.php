<?php

class Fruit
{
	public function __construct(public string $name) {}

	public function getName() {
		return $this->name;
	}
}


$fruit = new Fruit('Banana');
echo $fruit?->name;