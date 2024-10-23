<?php

echo '<div id="Div_Menu-Gauche">' . "\n";

echo '<ul id="Menu-Gauche">' . "\n";

if ( $PAGE_C == 'Accueil' ) {  
  echo '  <li><span>Accueil</span></li>' . "\n";
} else {
  echo '  <li><a href="Accueil.php" title="Accueil - Αρχική σελίδα"  >Accueil</a></li>' . "\n";
}

if ( $PAGE_C == 'Comment-nous-joindre' ) {  
  echo '  <li><span>Comment nous joindre ?</span></li>' . "\n";
} else {
  echo '  <li><a href="Comment-nous-joindre.php" title="Comment nous joindre ? - Στοιχεία Επικοινωνίας"  >Comment nous joindre ?</a></li>' . "\n";
}

if ( $PAGE_C == 'Activites-Eglise' ) {  
  echo '  <li><span>Activités (Église)</span></li>' . "\n";
} else {
  echo '  <li><a href="Activites-Eglise.php" title="Activités (Église) - Aνακοινώσεις">Activités (Église)</a></li>' . "\n";
}

if ( $PAGE_C == 'Galerie-Photos' ) {
  echo '  <li><span>Galerie de Photos</span></li>' . "\n";
} else {
  echo '  <li><a href="Galerie-Photos.php" title="Galerie de Photos - Φωτογραφίες">Galerie de Photos</a></li>' . "\n";
}

if ( $PAGE_C == 'Nouvelles' ) { 
  echo '  <li><span>Nouvelles</span></li>' . "\n";
} else {
  echo '  <li><a href="Nouvelles.php" title="Nouvelles - Ειδήσεις">Nouvelles</a></li>' . "\n";
}

if ( $PAGE_C == 'Articles-Interviews' ) {  
  echo '  <li><span>Articles, Interviews</span></li>' . "\n";
} else {
  echo '  <li><a href="Articles-Interviews.php" title="Articles, Interviews - Αρθρα Δηλώσεις">Articles, interviews</a></li>' . "\n";
}

if ( $PAGE_C == 'Liens' ) {  
  echo '  <li><span>Liens Utiles</span></li>' . "\n";
} else {
  echo '  <li><a href="Liens.php" title="Liens Utiles- Χρήσιμοι Σύνδεσμοι">Liens Utiles</a></li>' . "\n";
}

if ( $PAGE_C == 'Eglise' ) {  
  echo '  <li><span>Église</span></li>' . "\n";
} else {
  echo '  <li><a href="Eglise.php" title="Église - Εκκλησία Φοιτητικής Εστίας">Église</a></li>' . "\n";
}

echo '</ul>' . "\n";
echo "\n";

?>

<!--
https://developers.facebook.com/docs/plugins/like-button/?locale=fr_FR
-->

<div style="margin:24px" class="fb-like" data-href="http://www.foyer-hellenique.net" data-width="240" data-layout="button_count" data-action="like" data-size="small" data-share="false"></div>

<?php
echo '</div>' . "\n";
?>

  