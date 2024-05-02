<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content = "width=device-width, initial-scale=1.0 ">
        <title> Admin Dashboard</title>

       

 <!--BOOTSTRAP css link-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
 rel="stylesheet" 
 integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
  crossorigin="anonymous">

  <!--font awesome link-->


  <!--css link-->
  <link rel="stylesheet" href="../style.css">
<style>
    .admin_image{
    width: 100px;
    object-fit: contain;
}
</style>

</head>
<body>

 <!-- navbar-->
  <!-- first child-->
 <div class="container-fluid p-0"></div>
 <nav class="navbar navbar-expand-lg navbar light bg-info">
<div class="container-fluid">
    <img src="../img/logo.png"alt="" class ="logo">
    <nav class="navbar navbar-expand-lg">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href=""class="nav-link">Welcome Guest</a>
</li>
</ul>
</nav>
</div>
 </nav>
 <!-- second child-->
<div class="bg-light">
<h3 class="text-center p-2">Manage Details</h3>


 <!-- third child-->

<div class="row">
<div class="col-md-12 bg-secondary p-1 d-flex align-items-center justify-content-center">
    <div class="px-5">
  
    <div class="button text-center">
    <button><a href="insert_pro.php" class="nav-link text-light bg-info my-1">Insert Products</a>
    <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
    <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
    <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
    <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
    <button><a href="" class="nav-link text-light bg-info my-1">Log Out</a></button>
    
</div>
</div>
</div>
<!--bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>


</body>
<html>