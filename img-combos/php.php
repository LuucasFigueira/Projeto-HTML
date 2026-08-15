<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1><?php
   echo "Olá, Mundo! \u{1f30E}";
   ?></h1>
   <p>Vamos tentar nos livrar da maldição</p>
   <h2>
    <?php
        date_default_timezone_set('America/Sao_Paulo'); /* Define o fuso horário */
        echo "A data de hoje é : " . date("d/m/Y"); /* Exibe a data atual */
        echo " e a hora atual é : " . date("H:i:s"); /* Exibe a hora atual */
    ?>
   </h2>
</body>
</html>