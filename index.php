<?php 
// Diz para o PHP que estamos usando strings Latin2 até o final do script
mb_internal_encoding('Latin2');

// Diz para o PHP que nós vamos enviar uma saída Latin2 para o navegador
mb_http_output('Latin2');
ob_start("mb_output_handler");  

header('Content-type: text/html; encode=Latin2 language=pt-BR; charset=UTF-8',true);
?>

<?php
/** index.php  */
/** load the enviroment and template */
require('home.php');
?>
