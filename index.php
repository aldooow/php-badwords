
<?php
/*Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre * .*/

  // Parametro GET --> parola da sostituire.
  $badword = $_GET['badword'];

  // Testo.
  $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  // Lunghezza del Testo.
  $lenght = strlen($text);
  // Parola Sostituta.
  $word_replace = '***';
  // Testo + Lunghezza.
  $text_lenght = $text . '<br>' . $lenght . ' caratteri.';
  // Testo Nuovo.
  $text_replace = str_replace($badword, $word_replace , $text_lenght);
 ?>
 
<h1>Lorem Ipsum</h1>
<h3>Questo è il mio testo : </h3>
<p><?php echo $text_replace  ?></p>
