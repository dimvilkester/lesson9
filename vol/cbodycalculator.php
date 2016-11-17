<?php

class BodyCalculator
{
	public $sex;
	public $age;
	public $height;
	public $mass;
	public $activityratio;
	
	/* Низкая (сидячий образ жизни) – 1.20
	* Малая (1-3 раза в неделю легкие тренировки) – 1.38
	* Средняя (1-5 раза в неделю умеренные тренировки) – 1.55
	* Высокая (5-7 раза в неделю интенсивные тренировки) – 1.73 */
	

	public function __construct($sex, $age, $height, $mass, $activityratio)    
	{
		$this->sex = $sex;
		$this->age = $age;
		$this->height = $height;
		$this->mass = $mass;
		$this->activityratio = $activityratio;
	}
	
	public function metabolicRate()
	{
		if ($this->sex = "Мужской") {
			return round(66 + (13.7 * $this->mass) + (5 * $this->height) - (6.8 * $this->age), 2);
		} else {
			return round(655 + (9.6 * $this->mass) + (1.8 * $this->height) - (4.7 * $this->age), 2);
		}
	}
	
	public function calculationFPCSlimming()
	{
		
		if ($this->sex = "Мужской")
		{
			$this->fpc = round((66 + (13.7 * $this->mass) + (5 * $this->height) - (6.8 * $this->age)) * $this->activityratio, 2);
		} else {
			$this->fpc = round((655 + (9.6 * $this->mass) + (1.8 * $this->height) - (4.7 * $this->age)) * $this->activityratio, 2);
		}
		
		$this->fpcslimming = round($this->fpc * 0.8, 2);
		
		$this->proteins = round($this->fpcslimming * 0.3/40, 2);
		$this->fats = round($this->fpcslimming * 0.1/9, 2);
		$this->carbohydrates = round($this->fpcslimming * 0.6/4, 2);
		
		return "белки " . $this->proteins . " " .  "жиры " . $this->fats . " " . "углеводы " . $this->carbohydrates;
	}
	
	public function dailyWater()
	{
		if ($this->sex = "Мужской")
		{
			return round($this->mass * 35, 2);
		} else {
			return round($this->mass * 31, 2);
		}
	}
	
	public function indexMassBMI()
	{
		if ($this->sex = "Мужской")
		{
			return round($this->mass / ($this->height * 0.01), 2);
		} else {
			return round($this->mass * 31, 2);
		}
	}
	
	public function bodySurfaceArea()
	{
		return round(($this->mass ^ 0.425 * $this->height ^ 0.725) * 0.007184, 2);
	}
}