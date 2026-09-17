<?php
include 'temp/head.php';
include 'temp/nav_client.php';
include 'temp/bd.php';

?>
<h1 class="mb-3 mt-3">Добро пожаловать, <?php echo $_SESSION['fio'];?></h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Товар</th>
      <th scope="col">Количество</th>
      <th scope="col">Цена</th>
      <th scope="col">Способ оплаты</th>
      <th scope="col">Сумма</th>
      <th scope="col">Статус</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    session_start();
$id=$_SESSION['id_user'];
    $sql="SELECT `id_zakaz`, zakaz.id_tovar, `kol`, `oplata`, `status`,tovar ,price,price * kol as summ 
            FROM zakaz JOIN tovar ON zakaz.id_tovar = tovar.id_tovar
            WHERE zakaz.id_user = $id ORDER BY zakaz.id_zakaz";
$res=$mysqli->query($sql);
$sum=0;
foreach($res as $row){
    echo '<tr>
      <th>'.$row['tovar'].'</th>
      <td>'.$row['kol'].'</td>
      <td>'.$row['price'].'</td>
      <td>'.$row['oplata'].'</td>
      <td>'.$row['summ'].'</td>
      <td>'.$row['status'].'</td>
      <td>';
      if($row['status']=='Новая'){
echo '<a href="del_status.php?id_zakaz='.$row['id_zakaz'].'"><button type="button" class="btn btn-secondary>Удалить</button></a>';
      }'</td>
    </tr>';
    $sum += $row['summ'];
}
echo '</tbody></table>';
echo '<div class="mt-3 mb-3"><b>Общая сумма: '.$sum.' руб.</b></div>';
?>
<?php
include 'temp/footer.php';
?>