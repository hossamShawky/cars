<?php

include '../include/nav.php';
include '../include/connection.php';

?>

<!--Start Of LOG IN -->

 <form class="login text-center " action="chechlogin.php" method="post" >
    
        <div class="fields">
        <div class="container"> 
            <!-- Strat Form-->
          <form class="" role="form" >
                        <div class="row">
                            <div class="col-md-6">
                             <div class="form-group">
                        
             <input type="text" class="form-control input-lg" placeholder="User Name" id="un" name="username">
                                </div>
                         </div> 
                            <div class="col-md-6">
                             
                             <div class="form-group">
                        
             <input type="password" class="form-control input-lg" placeholder="Password" name="password">
                                </div>
                            </div>

                            <div class="col-md-6">
                             
                             <div class="form-group">
                        
             <input type="submit" class="form-control input-lg btn-primary" value="Log In" name="submit">
                                </div>
                            </div>
                             <div class="col-md-6">
                             
                             <div class="form-group">
                        
             <button onclick="alert('حاضر يومين واعملك ريست للباس ورد بتاعك عشان تتادب وتحفظة بعدين')" class="form-control input-lg btn-primary" >Forgot Password </button>
                                </div>
                            </div>
                          </div>
         
                </form>
            <!-- End Form-->
            
            </div>
        
        
        </div>
    </form>
   <!-- End Of Contact Me-->


<style type="text/css">
	
.login
{
  /*  background:url('../images/pic.jpg') no-repeat center center fixed;*/
  min-height:300px;
    background:url('../images/Live-Wallpaper-7.jpg') no-repeat center center fixed;
}
.login .fields
{
    background-color: rgba(9,9,9,.6);
    min-height:300px;    color: #FFF;
    padding-top: 50px;
    padding-bottom: 50px;
}
 
.login input[type='text'],
.login input[type='password']
{
    color: #FFF;
    background-color: rgba(82,78,78,0.7);
    border: 0;
}
 


</style>

<?php
include '../include/footer.php';
?>