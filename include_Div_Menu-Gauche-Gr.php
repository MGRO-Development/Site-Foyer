<?php

echo '<div id="Div_Menu-Gauche">' . "\n";

echo '<ul id="Menu-Gauche">' . "\n";

if ( $PAGE_C == 'Accueil-Gr' ) {  
  echo '  <li><span>Αρχική σελίδα</span></li>' . "\n";
} else {
  echo '  <li><a href="Accueil-Gr.php" title="Αρχική σελίδα - Accueil"  >Αρχική σελίδα</a></li>' . "\n";
}

if ( $PAGE_C == 'Comment-nous-joindre-Gr' ) {  
  echo '  <li><span>Στοιχεία Επικοινωνίας</span></li>' . "\n";
} else {
  echo '  <li><a href="Comment-nous-joindre-Gr.php" title="Στοιχεία Επικοινωνίας - Comment nous joindre ?"  >Στοιχεία Επικοινωνίας</a></li>' . "\n";
}

if ( $PAGE_C == 'Activites-Eglise-Gr' ) {  
  echo '  <li><span>Aνακοινώσεις</span></li>' . "\n";
} else {
  echo '  <li><a href="Activites-Eglise-Gr.php" title="Aνακοινώσεις - Activit&eacute;s (&Eacute;glise)">Aνακοινώσεις</a></li>' . "\n";
}

if ( $PAGE_C == 'Galerie-Photos-Gr' ) {
  echo '  <li><span>Φωτογραφίες</span></li>' . "\n";
} else {
  echo '  <li><a href="Galerie-Photos-Gr.php" title="Φωτογραφίες - Galerie Photos">Φωτογραφίες</a></li>' . "\n";
}

if ( $PAGE_C == 'Nouvelles-Gr' ) { 
  echo '  <li><span>Ειδήσεις</span></li>' . "\n";
} else {
  echo '  <li><a href="Nouvelles-Gr.php" title="Ειδήσεις - Nouvelles">Ειδήσεις</a></li>' . "\n";
}

if ( $PAGE_C == 'Articles-Interviews-Gr' ) {  
  echo '  <li><span>Αρθρα Δηλώσεις</span></li>' . "\n";
} else {
  echo '  <li><a href="Articles-Interviews-Gr.php" title="Αρθρα Δηλώσεις - Articles, Interviews">Αρθρα Δηλώσεις</a></li>' . "\n";
}

if ( $PAGE_C == 'Liens-Gr' ) {  
  echo '  <li><span>Χρήσιμοι Σύνδεσμοι</span></li>' . "\n";
} else {
  echo '  <li><a href="Liens-Gr.php" title="Χρήσιμοι Σύνδεσμοι - Liens Utiles- ">Χρήσιμοι Σύνδεσμοι</a></li>' . "\n";
}

if ( $PAGE_C == 'Eglise-Gr' ) {  
  echo '  <li><span>Εκκλησία Φοιτητικής Εστίας</span></li>' . "\n";
} else {
  echo '  <li><a href="Eglise-Gr.php" title="Εκκλησία Φοιτητικής Εστίας - &Eacute;glise">Εκκλησία Φοιτητικής Εστίας</a></li>' . "\n";
}

echo '</ul>' . "\n";
echo "\n"

?>
<div style="margin-top:24px;margin-left:-64px" class="fb-like" data-href="http://www.foyer-hellenique.net" data-width="240" data-layout="button_count" data-action="like" data-size="small" data-share="false"></div>


<?php
echo '</div>' . "\n";
?>

  