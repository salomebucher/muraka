<?php
/* === Daten aus dem Formular auslesen und in Variablen speichern === */

$name = 'Name' . $_POST['name2'];
$email = 'Email' . $_POST['email2'];
$nachricht = 'Nachricht' $_POST['message2'];

/* === Empfängeradresse und Betreff === */

$an = 'info@murakadiving.com'; //Hier Ihre E-Mail-Adresse eintragen
$betreff = "Kontaktformularnachricht";


/* === Wenn Bedingung erfüllt, dann E-Mail abschicken - andernfalls Fehlermeldung ausgeben === */

if ((!empty($name))&&(!empty($email))&&(!empty($nachricht))) {

mail($an, $betreff, $name . $nachricht, 'From:' . $email); //Mail versenden

echo 'Ihre Kontaktnachricht wurde zugestellt. Sie werden bald möglichst eine Antwort erhalten.';
}

else {
echo 'Sie müssen alle Felder ausfüllen. <a href="about.html">Zurück</a>';
}
?> 