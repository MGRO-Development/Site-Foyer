<?php

echo "\n" . '<div id="Div_FichierHTML">' . "\n";

$Fic_HTML = 'Fichiers_HTML/' . $PAGE_C . '.html';

if ( isset( $_GET[ 'Test' ] ) ) {
	$Fic_HTML = 'Fichiers_HTML/Test_' . $PAGE_C . '.html';
}

$Fd_HTML = fopen( $Fic_HTML, 'r' );
if ( $Fd_HTML === false ) {
	exit( 0 );
}
$Tst_BODY = 0;

while ( ! feof( $Fd_HTML ) ) {

	$LIGNE = trim( fgets( $Fd_HTML ) );

	if ( $LIGNE == strstr($LIGNE, '<body') ) {
		if ( $LIGNE ) $Tst_BODY = 1; // et on ne fait rien
	} else {
		if ( $LIGNE == '</body>' ) {
			$Tst_BODY = 0;
		}
		if ( $Tst_BODY ) {
			echo $LIGNE . "\n";
		}
	}
}

fclose( $Fd_HTML );

echo "\n" . '</div>' . "\n";

?>
