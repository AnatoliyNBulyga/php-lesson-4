<?php 

function greeting($name = "Анатолий", $day = 3) {
	
	switch ($day <= 5) {
		case true:
			echo "Привет $name! Хорошего и продуктивного рабочего дня!";
			break;	
		default:
			echo "Привет $name! Желаю вам хорошо отдохнуть в этот день!";
			break;
	}
	
}

greeting("Павел", 6);
echo "<br>";
greeting();




 ?>