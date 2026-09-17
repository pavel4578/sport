<?php session_start();?>
<nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(135deg, #f86b52 0%, #4d1386 100%);">
  <div class="container-fluid">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="formzayav.php">Взять на прокат</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lich_kab.php">Личный кабинет</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Выйти(<?php echo $_SESSION['fio'];?>)</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">