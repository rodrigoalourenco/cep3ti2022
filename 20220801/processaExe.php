<?php

$num = $_GET['num'];

if ($num > 0) {
	echo "Valor Postivo";
} else if ($num < 0) {
	echo "Valor Negativo";
} else {
	echo "Igual a Zero";
}

