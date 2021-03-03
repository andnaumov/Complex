
<?php

// Описание класса по операциям с комплексными числами
	class complex {
		public $Re1 = 1; // Действительная часть комплексного числа Z1
		public $Im1 = 1; // Мнимая часть комплексного числа Z1 
		public $Re2 = 1; // Действительная часть комплексного числа Z2
		public $Im2 = 1; // Мнимая часть комплексного числа Z2
		public $Re3 = 1; // Действительная часть результата Z3
		public $Im3 = 1; // Мнимая часть комплексного числа Z3

// Конструктор
		function __construct($Re1, $Im1, $Re2, $Im2) {
      		$this->Re1 = $Re1;
      		$this->Im1 = $Im1;
      		$this->Re2 = $Re2;
      		$this->Im2 = $Im2;
    	}

// Сумма
		function summa() {
      		$this->Re3 = $this->Re1 + $this->Re2;
      		$this->Im3 = $this->Im1 + $this->Im2;

   		}

// Разность
		function diff() {
      		$this->Re3 = $this->Re1 - $this->Re2;
      		$this->Im3 = $this->Im1 - $this->Im2;
   		}

// Умножение
		function mul() {
      		$this->Re3 = $this->Re1 * $this->Re2 - $this->Im1 * $this->Im2;
      		$this->Im3 = $this->Re1 * $this->Im2 + $this->Re2 * $this->Im1;
   		}

// Деление
		function div() {
			$znam = pow($this->Re2, 2) + pow($this->Im2, 2);
      		$this->Re3 = ($this->Re1 * $this->Re2 + $this->Im1 * $this->Im2) / $znam;
      		$this->Im3 = ($this->Re2 * $this->Im1 - $this->Re1 * $this->Im2) / $znam;
   		}

	}

//Инициализация объекта, вывод результатов

	$cmp = new complex($_POST['Re1'], $_POST['Im1'], $_POST['Re2'], $_POST['Im2']);
	echo "Вывод результатов.";

	echo "<br><br>Сумма:";
	$cmp->summa();
	echo "<br>Действительная часть: $cmp->Re3";
	echo "<br>Мнимая часть: $cmp->Im3";	

	echo "<br><br>Разность:";
	$cmp->diff();
	echo "<br>Действительная часть: $cmp->Re3";
	echo "<br>Мнимая часть: $cmp->Im3";	

	echo "<br><br>Умножение:";
	$cmp->mul();
	echo "<br>Действительная часть: $cmp->Re3";
	echo "<br>Мнимая часть: $cmp->Im3";	

	echo "<br><br>Деление:";
	$cmp->div();
	echo "<br>Действительная часть: $cmp->Re3";
	echo "<br>Мнимая часть: $cmp->Im3";	

?>
