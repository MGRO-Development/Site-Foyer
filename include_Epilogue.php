<?php

if ( array_key_exists( 'REMOTE_ADDR', $_SERVER) ) { 
	$IP_ADR = $_SERVER['REMOTE_ADDR']; // 89.81.11.251
} else {
	$IP_ADR = 'xxx.xxx.xxx.xxx';
}

if ( array_key_exists( 'LOCAL_ADDR', $_SERVER) ) { 
	$SERVER = $_SERVER['LOCAL_ADDR']; // 62.39.109.32
} else {
	$SERVER = '127.0.0.1';
}

if ( isset($SERVER_NAME) ) {
	//$SERVER_NAME  ok
} else if ( array_key_exists( 'SERVER_NAME', $_SERVER) ) {
	$SERVER_NAME = $_SERVER['SERVER_NAME'];
} else {
	$SERVER_NAME = '?';
}

?>
