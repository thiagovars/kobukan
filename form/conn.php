<?php
$link = mysql_connect('mysql.kobukan.com.br', 'kobukan', 'akipafaitoo');
if (!$link) {
   die('Não foi possível conectar ao banco: ' . mysql_error());
}

// seleciona o banco kobukan
$db_selected = mysql_select_db('kobukan', $link);
if (!$db_selected) {
   die ('Não possível selecionar a base de dados: ' . mysql_error());
}

?>