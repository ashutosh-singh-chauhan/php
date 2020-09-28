<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Description</title>
    <style type="text/css">
      .text{
        text-align: center;
        margin: 50px;
      }
      .img{
        margin: auto;
        border: 2px solid black;
        width: 40%;
        display: block;
        border-radius: 10px;
      }
      .box{
        background-color: #D3D3D3;
        margin: auto;
        border-radius:20px;
        margin-top: 30px;
        margin-bottom: 30px;
      }
      body{
        overflow-x: hidden;
      }
    </style>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Book-Zone</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <div class="form-inline my-2 my-lg-0">
        <a href='addbook.php'><button class="btn btn-outline-danger my-2 my-sm-0">Add Book</button></a>
      </div>
    </div>
  </nav>

     
       <div class="row ">
          <div class=" box col-md-10 ">
          <h1 class="text"><u>Individual Book-Detail</u> </h1>
           <?php include 'connection.php';
           
           if($conn){
           $sql = "SELECT `b_id`,`b_name`,`b_author`,`b_image`,`b_desc` FROM book WHERE b_id = 
           $_GET[b_id]"; 
           $rs = mysqli_query($conn,$sql);
           $result = mysqli_fetch_array($rs);          
           }
           ?>
              <img class="img"src="<?php echo $result['b_image']; ?>" height="400px" width="400px">
              <h3 class="text"><b>Book Name : </b><?php echo $result['b_name']; ?></h3>
              <h3 class="text"><b>Author Name : </b><?php echo $result['b_author']; ?></h3>
              <h3 class="text"><b>Book Description : </b><?php echo $result['b_desc']; ?></h3>
          
         </div>
       </div>
     

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
 