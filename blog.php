<?php
include 'inc/config.php';
include 'inc/header.php';
$sql = "SELECT * FROM test where id =".$_GET['id'];
$result = $link->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo '
       <div class="card col-5 mx-10 ">
       <img src="'.$row['image'].'"class="card-img-top" alt="https://i3.ytimg.com/vi/qUlk8q-lvgA/maxresdefault.jpg">
       <div class="card-body">
           <h5 class="card-title">'.$row['head'].'</h5>
           <p class="card-text">'.$row['description'].'</p>
           <a href="https://localhost/workshop/blog.php?id='.$row['id'].'"></a>
           <p>As we all know that earth is the only known planet having life in this universe. So we should respect and maintain everything we get from our mother earth. We should save the mother earth so that our future generations can live in a safe environment. We can save the earth by saving trees, natural vegetation, water, natural resources, electricity, etc. We should strictly follow all the possible measures to control the environmental pollution and global warming. Everyone should plant more trees in the surrounding areas to curb the pollution and reduce the effects of global warming. Afforestation, reforestation, recycling of used paper and other natural products, saving of natural resources (minerals, coal, stones, oil, etc), electricity, water and environment should be supported and promoted.</p>
       </div>
   </div>';
   
    }
}

?>
<?php
include 'inc/footer.php';
?>