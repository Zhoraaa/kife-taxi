<?php
include "./funcs/pageBase.php";
?>
<form action="../account/signInDB.php" class="inner-shadow father-elem tool pad15">
    <h2>Аутентфикация</h2>
    <div><input type="text" name="login" placeholder="Логин" required></div>
    <div><input type="password" name="password" placeholder="Пароль" required></div>
    <div><input type="submit" value="Войти"></div>
</form>