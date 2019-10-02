

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="float:left;">
    <div class="navbar-header">
      <a class="navbar-brand " href="#">ORG</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php">HOME</a></li> <!--../index.php -->
      
          <li><a href="cars.php">Cars</a> </li>  
          <li><a href="search.php">Search</a> </li>   
         <li><a href=#>About Us</a></li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">More 
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Map</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Sales</a></li>
        </ul>
      </li>
    </ul> 

  </div>

<div class="logs">
 
 <ul>
<!-- isset($_SESSION['adminid']) -->  
   <?php 
                  if(isset( $_SESSION['userid']) ||isset($_SESSION['adminid']) )
                              {
                                            
#print_r($_SESSION);
                         echo "<li >";
                   echo "<button class='btn  btn-primary' ><a href='../logout.php'>LOG OUT</a></button>";
                   
                            echo "</li>";

                             }


                              else
                              {
                         echo "<li>";
  echo "<button class='btn  btn-primary' ><a href='loginfiles/login.php'>LOGIN</a></button>";
                     echo "</li>";

                        echo "<li>";
                          echo "<button class='btn btn-primary' ><a href='regist.php'>Regist</a></button>";
                           echo "</li>";

                              }

            ?>
 </ul>

</div>
</nav>

<style>
  .logs{
    float: right;
    margin-right: 30px;
  
  }
  .logs ul li
  {
    list-style: none;
    display: inline-block;
    margin: 2px;
  }
  .logs ul li a { 
    color: white;
    text-decoration: none;
   }

</style>
 <!--    www.cars.com  -->