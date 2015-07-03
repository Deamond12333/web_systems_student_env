<?php
function user($args){
	echo "Это страница пользователя № $args";
}

Router::get('^\/user\/(\d+)$', 'user');
?>

