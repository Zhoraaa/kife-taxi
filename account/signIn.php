<?php
require("../funcs/session.php");
require_once("../funcs/DBinteraction.php");

$login = $_GET['login'];
$pass = md5($_GET['password']);

$query = "SELECT * FROM `users` WHERE `login` = '$login' OR `email` = '$login' OR `phone` = '$login' AND `password` = '$pass'";
$user = selectFrom($query, "ONE");

if ($user) {
  $_SESSION['result'] = "Добро пожаловать";
  setcookie('user', $user['id'], time() + 3600 * 24, "/");
} else {
  $_SESSION['result'] = "Не добро пожаловать";
}
?>
<script>
  window.addEventListener('DOMContentLoaded', () => {
    localStorage.clear();
  });
</script>
<?php
header("location: /");
