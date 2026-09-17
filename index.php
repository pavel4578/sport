<?php
include 'temp/head.php';
include 'temp/bd.php';

session_start();
if(!empty($_SESSION['role'])){
    $role=($_SESSION['role']);
    if($role=='Клиент'){
        include 'temp/nav_client.php';
    }
   
}else{
   include 'temp/nav.php'; 
}
?>
<h1 class="mb-4">Прокат спортивного инветаря</h1>
<div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        $sql = "SELECT * FROM `tovar`";
        $res = $mysqli->query($sql);
        foreach($res as $row){
             echo '<div class="col">
    <div class="card">
      <img src="img/'.$row["img"].'" class="card-img-top" alt="'.$row["tovar"].'">
      <div class="card-body">
        <h5 class="card-title">'.$row["tovar"].'</h5>
               <p class="card-text fw-bold fs-5">Цена:'.$row["price"].'₽</p>';         
            if(!empty($_SESSION['role'])) {
                echo '<a href="formzayav.php?id_tovar='.$row['id_tovar'].'" class="btn btn-primary">Взять на прокат</a>';
            } else {
                 echo '<a href="formavto.php" class="btn btn-primary">Взять на прокат</a>';
             }
                    echo '</div>
            </div>
        </div>
                ';}?>

<?php
include 'temp/footer.php';
?>