<?php
/*
5. Tenemos una variable $numero que tiene un número de 0 a 99. Mostrarlo escrito.
Por ejemplo, para 56 mostrar: cincuenta y seis.
*/

$numero = rand(0,99);

$form = new NumberFormatter("en",NumberFormatter::SPELLOUT);

echo $form->format($numero);




