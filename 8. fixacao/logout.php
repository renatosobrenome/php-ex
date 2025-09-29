<?php
session_start();
session_destroy();
echo "Sessão encerrada! <a href='login.php'>Voltar ao login</a>";
?>
