<?php

class Car
{
	public function go()
	{
		echo "dur-dur";
	}
}

class Light extends Car
{
	public function courpuse()
	{
		echo "steels + metal";
	}

	public function weight()
	{
		echo "100";
	}
	public function power()
	{
		echo "min";
	}
}

class Bus extends Car
{
	public function weight()
	{
		echo "500";
	}
	public function power()
	{
		echo "medium";
	}
}

class Wen extends Car
{
	public function weight()
	{
		echo "1000";
	}
	public function power()
	{
		echo "max";
	}
}

class BMW extends Wen
{
	public $color;	
	public $doors;
	public $maxSpeed;
}

class BMW extends Light
{
	public $color;	
	public $doors;
	public $maxSpeed;
}

class BMW extends Bus
{
	public $color;	
	public $doors;
	public $maxSpeed;
}

class Ford extends Wen
{
	public $color;	
	public $doors;
	public $maxSpeed;
}

class Ford extends Light
{
	public $color;	
	public $doors;
	public $maxSpeed;
}

class Ford extends Wen
{
	public $color;	
	public $doors;
	public $maxSpeed;
}

class RRR extends Wen
{
	public $color;	
	public $doors;
	public $maxSpeed;
}

class RRR extends Light
{
	public $color;	
	public $doors;
	public $maxSpeed;
}

class RRR extends Bus
{
	public $color;	
	public $doors;
	public $maxSpeed;
}
