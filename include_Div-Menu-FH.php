<?php

echo '<div align="center">' . "\n";
echo '  <table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody>' . "\n";
echo '    <tr>' . "\n";
echo '      <td align="right" background="Media/FHJ_Banniere.png" height="314" valign="bottom" width="860">' . "\n";
echo '        <div align="center">' . "\n";
echo '          <table border="0" height="49" width="100%"><tbody>' . "\n";
echo '            <tr>' . "\n";
echo '              <td height="20" width="40%">' . "\n";
echo '              </td>' . "\n";
echo '              <td height="20" width="20%">' . "\n";

if ( $PAGE_C == 'Accueil' ) {
echo '                <p align="center"><font color="#0099FF" face="Arial" size="2"><b>&lt; Accueil &gt;</b></font></p>' . "\n";
} else {
echo '                <p align="center"><font face="Arial" size="2"><a href="Accueil.php"><b>&lt; Accueil &gt;</b></a></font></p>' . "\n";
}

echo '              </td>' . "\n";
echo '              <td height="20" width="20%">' . "\n";

if ( $PAGE_C == 'Galerie_Photos' ) {
echo '                <p align="center"><font color="#0099FF" face="Arial" size="2"><b>&lt; Photos &gt;</b></font></p>' . "\n";
} else {
echo '                <p align="center"><font face="Arial" size="2"><a href="Galerie_Photos.php"><b>&lt; Photos &gt;</b></a></font></p>' . "\n";
}
echo '              </td>' . "\n";
echo '              <td height="20" width="20%">' . "\n";

echo '              </td>' . "\n";
echo '            </tr>' . "\n";
echo '            <tr>' . "\n";
echo '              <td height="21" width="40%">' . "\n";
echo '              </td>' . "\n";
echo '              <td height="21" width="20%">' . "\n";

if ( $PAGE_C == 'Breves' ) {
echo '                <p align="center"><font color="#0099FF" face="Arial" size="2"><b>&lt; Br&egrave;ves &gt;</b></font></p>' . "\n";
} else {
echo '                <p align="center"><font face="Arial" size="2"><a href="Breves.php"><b>&lt; Br&egrave;ves &gt;</b></a></font></p>' . "\n";
}
echo '              </td>' . "\n";
echo '              <td height="21" width="20%">' . "\n";

if ( $PAGE_C == 'Reglement_interieur' ) {
echo '                <p align="center"><font color="#0099FF" face="Arial" size="2"><b>&lt; R&egrave;glement &gt;</b></font></p>' . "\n";
} else {
echo '                <p align="center"><font face="Arial"size="2"><a href="Reglement_interieur.php"><b>&lt; R&egrave;glement &gt;</b></a></font></p>' . "\n";
}
echo '              </td>' . "\n";
echo '              <td height="21" width="20%">' . "\n";

if ( $PAGE_C == 'Formulaires_inscription' ) {
echo '                <p align="center"><font color="#0099FF" face="Arial" size="2"><b>&lt; Inscription &gt;</b></font></p>' . "\n";
} else {
echo '                <p align="center"><font face="Arial" size="2"><a href="Formulaires_inscription.php"><b>&lt; Inscription &gt;</b></a></font></p>' . "\n";
}

echo '              </td>' . "\n";
echo '            </tr>' . "\n";
echo '          </tbody></table>' . "\n";
echo '        </div>' . "\n";
echo '      </td>' . "\n";
echo '    </tr>' . "\n";
echo '  </tbody></table>' . "\n";
echo '</div>' . "\n";
?>