<?php

global $PAGE_C;
global $color;

$PAGE_C = "?";
$color  = "no";

if ( isset( $_SERVER['REQUEST_URI']) ) {
  $PAGE_C = $_SERVER['REQUEST_URI'];

} else if (isset($_SERVER['HTTP_REQUEST_URI'])) {
  $PAGE_C = $_SERVER['HTTP_REQUEST_URI'];

} else if(isset($_SERVER['SCRIPT_NAME'])) {
  $PAGE_C = $_SERVER['SCRIPT_NAME'];

} else {
  $PAGE_C = $_SERVER['PHP_SELF'];
}

$PAGE_C = trim($PAGE_C );
$PATH_L = explode("/", $PAGE_C );

$LGR_PL = count( $PATH_L );
$DIR_PR = $PATH_L[ $LGR_PL-2 ]; // Pere du FileName
$PAGE_C = $PATH_L[ $LGR_PL-1 ]; // FileName

$PATH_L = explode(".", $PAGE_C );
$PAGE_C = $PATH_L[ 0 ]; // BaseName

if ( ! $PAGE_C ) {
  $PAGE_C ="Accueil";
}
?>