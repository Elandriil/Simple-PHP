<?php include_once "header.php"; ?>

<div class="container my-2">
  <div class="row">
    <div class="col-lg-12">
      <img src="image4.jpg" alt="" class="img-fluid">
    </div>
  </div>
</div>

<div class="container my-2 mt-5">
  <div class="row mt-4">
    <div class="col-lg-4 mt-5">
<?php require_once('categories.php'); ?>
    </div>
    <div class="col-lg-8 ">
    <div class="card p-3 mt-5">
      <div class="card-title"><h2>Latest movies</h2></div>
    <div class="card-deck my-2">
<?php 
  $id=$_GET['id'];
  $result=queryMysql('SELECT * from film where zanr_id='.$id);
  if($result->num_rows){
  $row=$result->fetch_array(MYSQLI_ASSOC);
  //foreach($result->fetch_array(MYSQLI_ASSOC)->chunk(3) as $chunk){
      echo '<div class="card-deck my-2">';
    foreach($result as $row){
    echo '<div class="card border-dark">
          <a href="movie.php?id='.$row['id_film'].'">
              <img src="'.$row['poster_link'].'" alt="" class="card-img-top img-fluid">
          </a>
              <div class="card-body">
                <a href="movie.php?id='.$row['id_film'].'">
                  <h4 class="card-title">'.$row['pealkiri'].'</h4>
                  </a>
              </div>
          </div>';
  }
  echo '</div>';
//}
}else{
  echo '0 results';
}
?>
        



      </div>
    </div>
  </div>
</div>
<?php 

	include_once "footer.php";
?>
