<?php
include 'inc/config.php';
include 'inc/header.php';
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="style.css">


<!-- doubts=
1.carousel-height.
2.blog.php- different para
3.what to place inn search box
4.google maps api.js
5.whats wordpress? -->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1564336180035-cb55f05330a6?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="d-block w-100 height-60%" alt="https://images.unsplash.com/photo-1564336180035-cb55f05330a6?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1533139143976-30918502365b?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80" class="d-block w-100 h-80" alt="https://images.unsplash.com/photo-1533139143976-30918502365b?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1551131069-0141b9d23d67?ixid=MXwxMjA3fDB8MHxzZWFyY2h8N3x8ZGVza3RvcCUyMGZ1bGwlMjBzY3JlZW4lMjB3YWxscGFwZXJzJTIwbmF0dXJlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100 h-80" alt="https://images.unsplash.com/photo-1551131069-0141b9d23d67?ixid=MXwxMjA3fDB8MHxzZWFyY2h8N3x8ZGVza3RvcCUyMGZ1bGwlMjBzY3JlZW4lMjB3YWxscGFwZXJzJTIwbmF0dXJlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1548089549-7fbcae70cb28?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="d-block w-100 h-80" alt="https://images.unsplash.com/photo-1548089549-7fbcae70cb28?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1550945501-75feaf9764d8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=752&q=80" class="d-block w-100 h-80" alt="https://images.unsplash.com/photo-1550945501-75feaf9764d8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=752&q=80">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1547550105-e6314a907fb8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="d-block w-100 h-80" alt="https://images.unsplash.com/photo-1547550105-e6314a907fb8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  

</div>
<div class="d-flex flex-wrap pb-4 mt-5">
<?php
$sql = "SELECT * FROM test";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo ' 
       <div class="card col-4 mx-2" >
       <img src="'.$row['image'].'" class="card-img-top" alt="">
       <div class="card-body">
           <h5 class="card-title">'.$row['head'].'</h5>
           <p class="card-text"></p>
           <a href="https://localhost/workshop/blog.php?id='.$row['id'].'" class="btn btn-primary">visit here</a>
       </div>
   </div>';
    }
}
?>
</div>

<?php
include 'inc/footer.php';
?>
<!-- http://localhost/workshop/ -->