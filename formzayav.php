<?php
include 'temp/head.php';
include 'temp/nav_client.php';
include 'temp/bd.php';
?>
<form method="post" action="">
  <h1 class="mb-3 mt-3">Прокат</h1>
   <div class="mb-3">
    <label for="n" class="form-label">Выберите товар </label>
    <select class="form-select" name="id_tovar" aria-label="Default select example" required>
      <?php
      $sql="SELECT * FROM `tovar`";
      $res=$mysqli->query($sql);
      foreach($res as $row){
  echo '<option value="'.$row['id_tovar'].'">'.$row['tovar'].' / '.$row['price'].'руб.</option>';}?>
</select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Несколько количество</label>
    <input type="number" class="form-control" name="kol" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="s" class="form-label">Способы оплаты</label>
  <select class="form-select" name="oplata" aria-label="Default select example" required>
  <option selected>Выберите способы оплаты</option>
  <option value="Наличным">Наличным</option>
  <option value="Переводом по номеру телефона">Переводом по номеру телефона</option>
</select>
</div>
  <button type="submit" class="btn btn-secondary">Отправить</button>
</form>
<?php
session_start();
$id_vid_tovar=$_POST['id_vid_tovar'];
$id_tovar=$_POST['id_tovar'];
$oplata=$_POST['oplata'];
$kol=$_POST['kol'];
$id=$_SESSION['id_user'];
$sql="INSERT INTO `zakaz`( `id_user`, `id_tovar`, `kol`, `oplata`, `status`) VALUES
 ('$id','$id_tovar','$kol','$oplata','Новая')";
$res=$mysqli->query($sql);
include 'temp/footer.php';
?>