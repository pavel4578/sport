<?php
include 'temp/head.php';
include 'temp/nav.php';
include 'temp/bd.php';
?>
<form method="post" action="reg.php">
  <h1 class="mb-3 mt-3">Регистрация</h1>
  <div class="mb-3">
    <label for="fio" class="form-label">ФИО</label>
    <input type="text" class="form-control" id="fio" name="fio"  required>
  </div>
  <div class="mb-3">
    <label for="login" class="form-label">Логин</label>
    <input type="text" class="form-control" id="login" name="login"  required>
  </div>
  <div class="mb-3">
    <label  for="pass">Пароль</label>
    <input type="password" class="form-control" id="pass" name="pass" minlenght="8" required>
  </div>
   <div class="mb-3">
    <label  for="email">E-mail</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <button type="submit" class="btn btn-secondary"style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%" >Зарегристрироваться</button>
</form>

