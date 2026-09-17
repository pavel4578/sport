<?php
include 'temp/head.php';
include 'temp/nav.php';
include 'temp/bd.php';
?>
<div class="row">
  <div class="col-3"></div>
<form method="post" action="avto.php" class="col-6">
  <h1 class="mb-3 mt-3">Авторизация для посетителя</h1>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Логин</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="login"  required>
  </div>
  <div class="mb-3">
    <label class="form-label" for="exampleCheck1">Пароль</label>
    <input type="password" class="form-control" id="exampleCheck1" name="pass"  required>
  </div>
  <?php
  $mess=$_GET['mess'];
  echo '<p>'.$mess.'</p>';
  ?>
  <button type="submit" class="btn btn-secondary"style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%">Войти</button>
  <a href="formreg.php">Еще не зарегистрированы? Регистрация</a>
</form>
 <div class="col-3"></div>
</div>