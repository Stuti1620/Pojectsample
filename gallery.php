<?php 
session_start();
include('include/header.php');
require("db/connection.php");
function call_query($connect)
{
  $select ="select * from employee";
  $result = mysqli_query($connect,$select);
  return $result;
}
function indicator($connect)
{
  $out="";
  $count=0;
  $result = call_query($connect);
  while($row = mysqli_fetch_array($result))
  { 
    if($count == 0)
    {
      $out.='<li data-target="#carouselExample" data-slide-to="'.$count.'" class="active"></li>';
      
    }
    else
    {
      $out.='<li data-target="#carouselExample" data-slide-to="'.$count.'"></li>';
      // echo "indicator not print";
    }
    $count= $count + 1;
  }
  return $out;
}
function img_display($connect)
{
  $out ="";
  $count = 0;
  $result=call_query($connect);
  while($row = mysqli_fetch_assoc($result))
  {
    if($count == 0)
    {
      $out.='<div class="carousel-item active">';
      // echo "img display";
    }
    else
    {
      $out.='<div class="carousel-item">';
      // echo "img not display";
    }
    $out.='<img class="d-block w-100" src="upload/'.$row['Profile_img'].'" alt="First slide" width="200px" height="200px"></div>';
    $count= $count + 1;

  }

  return $out;
}

function maind($connect)
{
  $out ="";
  $count = 0;
  $result=call_query($connect);

  while($row = mysqli_fetch_assoc($result))
  {
    
    $out.='<div class="col-12 col-sm-6 col-lg-3">
    <img class="w-100" src="upload/'.$row['Profile_img'].'" alt="First slide" data-target="#carouselExample" data-slide-to="'.$count.'" width="200px" height="200px">
  </div>';
    $count= $count + 1;

  }

  return $out;
}


?>

<!-- Gallery -->
<!-- 
Gallery is linked to lightbox using data attributes.

To open lightbox, this is added to the gallery element: {data-toggle="modal" data-target="#exampleModal"}.

To open carousel on correct image, this is added to each image element: {data-target="#carouselExample" data-slide-to="0"}.
Replace '0' with corresponding slide number.
-->
<body>
<div class ="container">
  <div class="row">
    <div class="row" id="gallery" data-toggle="modal" data-target="#exampleModal">
        <?php
          echo maind($connect);
        ?>
      </div>
      <!-- Modal -->
      <!-- 
      This part is straight out of Bootstrap docs. Just a carousel inside a modal.
      -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div id="carouselExample" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <?php echo indicator($connect);?>
                </ol>
                <div class="carousel-inner">
                  <?php echo img_display($connect); ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
  <!-- Custom Styling Toggle. For demo purposes only. -->
  <!-- <div class="switch-wrap">
    <label class="switch">
      <input type="checkbox" id="styleSwitch" onclick="switchStyle();">
      <span class="slider round"></span>
    </label>
    <span class="switch-text">Toggle between <em>Bootstrap defaults</em> and <em>custom styling</em>.</span>
  </div> -->





  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>
</div>
<script>
function switchStyle() {
  if (document.getElementById('styleSwitch').checked) {
    document.getElementById('gallery').classList.add("custom");
    document.getElementById('exampleModal').classList.add("custom");
  } else {
    document.getElementById('gallery').classList.remove("custom");
    document.getElementById('exampleModal').classList.remove("custom");
  }
}</script>
<?php include('include/footer.php');?>