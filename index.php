<?php

// Mostrar a data atual em timestamp
echo "<p>Data atual em timestamp: " . time()  . "</p>";

//Transformar timestamp em data atual
echo "<p>Transformar timestamp em data atual: " . date("d/m/Y", time())  . "</p>";

//Transformar data atual em timestamp
echo "<p>Transformar data atual em timestamp: " . strtotime("2024/04/03")  . "</p>";

//Somar 100 dias em uma data
$data = "2024/04/03";
$nova_data = strtotime($data) + (86400*100);
echo "<p>Somar 100 dias em uma data: " . date("d/m/Y, $nova_data")  . "</p>";

//Subtrair 10 dias em uma data
$data = "2024/04/03";
$nova_data = strtotime($data) - (86400*100);
echo "<p>Subtrair 10 dias em uma data " . date("d/m/Y, $nova_data")  . "</p>";

//Convertendo o timestamp pro banco de dados
echo "<p>Convertendo o timestamp pro banco de dados: " . date("Y-m-d H-i-s", time()) . "</p>";


//Descobrir dia da semana de uma data em português
echo "<p>Descobrir dia da semana de uma data em português:  " . date("d", $nova_data) . "</p>";

//Descobrir dia da semana de uma data em inglês
echo "<p>Descobrir dia da semana de uma data em inglês: " . date("D", $nova_data) . "</p>";