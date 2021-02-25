<?php
/*
Creare una variabile con un paragrafo di testo. Usate pure il Lorem Ipsum.
Scrivere a schermo la lunghezza del paragrafo.
Infine, visualizzare il paragrafo sostituendo la badword passata in GET con tre *.
Quindi ricapitolando, dovete sicuramente usare:
il $_GET
qualcosa (una funzione) per calcolare la lunghezza di una stringa
qualcos'altro per sostituire la badwords
Usate il php.net e soprattutto le slide! :))
Inserite tutto nel vostro index.php
In caso di bonus, sviluppate tutto all'interno di una cartella bonus.
Il bonus in questo caso consiste nell'esercitarci e provare un po' di cose che abbiamo fatto in classe, come per esempio il php da terminale (script php).
Siate proattivi, molto fighi, e soprattutto leoni! :lion_face:
Daje branco.
Buon divertimento, a domani!
*/

$paragrafo='Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus possimus sed soluta earum illo aliquid eum quam facilis nam vel. Asperiores impedit, culpa illo nobis a nulla quibusdam at assumenda';
echo'<p>';
echo $paragrafo;
echo'</p>';


$nome=$_GET['nome'];
//$nome=$_GET['nome'];serve per cercare nel link URL un nome della variabile

echo'<p>';
echo 'caratteri del testo  ';
echo strlen($paragrafo) ;
echo'</p>';
echo 'scrivi una variabile "nome"nel lik per sostituire una frase del testo con *** ESEMPIO:? nome=Lorem';
echo'<p>';

$text=str_replace($nome,'***',$paragrafo);

echo $text;
echo'</p>';

?>
