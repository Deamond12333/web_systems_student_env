<?php
function user($num){
	echo "Это страница пользователя № $num";
}
function add(){
	echo "Это страница добавления пользователя";
}
Router::get('^\/user(\/?)add(\/?)$', 'add');

Router::get('^\/user(\/?)(\d+)$', 'user');
?>

