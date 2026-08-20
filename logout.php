<?php
session_start();
session_destroy(); /* Destroi a sessão do usuário / Desloga */
header("Location: index.php");
exit();
