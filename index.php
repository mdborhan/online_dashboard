<?php
include("config.php");
session_start();
?>
<html>
    <head>
        <title>Online notice </title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery_library.js"></script>
        <script src="js/bootstrap.min.js"></script>
    
    </head>
    <head>
        <nav class="navbar navbar-default navbar-fixed-top" style="background:#583C7B">
            <div class="container">
                 <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"><strong style="color:white;">Online Notice Board</strong></a></li>
      
	
	               </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a style="color:white;" href="index.php?option=New_user"><span style="color:white;" class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a style="color:white;" href="index.php?option=login"><span style="color:white;" class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            
            </div>
        </nav>
        
        <div class="container-fluid">
	<!-- slider -->
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img style="width:100%;height:300px" src="images/one.jpg" alt="...">
                            <div class="carousel-caption">
                            
                                </div>
                        </div>
                    <div class="item">
                        <img style="width:100%;height:300px" src="images/two.jpeg" alt="...">
                            <div class="carousel-caption">
        
                            </div>
                    </div>
	
	 
  
                    </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- slider end-->
</div>
        
        
        <div class="container">
	       <div class="row">
	           <!-- container -->
		      <div class="col-sm-8">
		          <?php 
		          $opt=$_GET['option'];
		
		      if($opt!="")
		  {
			 if($opt=="New_user")
			{
			     include('registration.php');
			}
			
			else if($opt=="login")
			{
			     include('login.php');
			}
		}
		else
		{
		      echo "<h4>An online notice board is a place where people can leave any types of messages and notifications, for example, to advertise things, announce events or provide any information.<br>Notice board online it can be placed on digital devices such computers, tabs, mobile phones etc.<br>This online notice board project is very helpful for all type of users like existing users and new users.<br> So admin can leave and erase notification for other people to read and see.</h4>";
		}
		?>
		
		
		
		
		</div>
	<!-- container -->
		
		<div class="col-sm-4">
			<div class="panel panel-default">
            <div class="panel-heading">Latest news</div>
                <div class="panel-body">
                    Always check your dashboard.See your next notice and routine and decripation others.
  
                    </div>
            </div>
		
		</div>
	</div>

</div>
        
        
<!-- footer-->

			<nav class="navbar navbar-default navbar-bottom" style="background:black">
                <div class="container">
  
                <ul class="nav navbar-nav navbar-left">
                    <li><a href=""> Developed by Borhan uddin depatment of CSE from 36th Batch.</a></li>
      
	           </ul>
            </div>
           </nav>
<!-- footer-->
        
        
            
    
    </head>

</html>