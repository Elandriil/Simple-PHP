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
  $result=queryMysql('SELECT * FROM film WHERE id_film='.$id);
  if($result->num_rows){
  $row=$result->fetch_array(MYSQLI_ASSOC);
  //foreach($result->fetch_array(MYSQLI_ASSOC)->chunk(3) as $chunk){
      echo '<div class="card-deck my-2">';
    foreach($result as $row){
    echo '<div class="card border-dark">
          
              <img src="'.$row['poster_link'].'" alt="" class="card-img-top img-fluid">         
              <div class="card-body">               
                  <h4 class="card-title">'.$row['pealkiri'].'</h4>
                  <p>'.$row['kirjeldus'].'</p>     
                  <p>
                  <iframe width="480" height="360" src="'.$row['trailer_link'].'"frameborder="0" allowfullscreen></iframe>
                  </p> 
                  <p>'.$row['aasta'].'</p>
                  <p>'.$row['rating'].'/10</p>
                  <p>'.$row['pikkus'].' min</p>

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
<?php include_once "footer.php";?>







