<?php

function home(){
	include_once 'home.html';
}
Router::get('^\/home(\/?)$', 'home');
Router::get('^\/$', 'home');
?>