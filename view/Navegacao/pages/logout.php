<?php

session_start();

unset ($_SESSION['email']);
unset ($_SESSION['senha']);

echo("<script>alert('Até mais...');</script>");
echo("<script>window.location= './login_pasta/login.html';</script>");


?>

