<?php 
include "./db_connection.php";
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="styles.css">
    <head>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Add jQuery (required for Bootstrap JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Add Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
</head>
    <style>
        /*notification pop*/
              #myModal {
            position: center;
            
        }

        .full-page {
            width: 45%;
            height: 80%;
            background-color: #f2f2f2;
            margin-left:30%;
            margin-top:5%;
            padding:50px;
            float:center;
        }

       

        body
        {
            background-color:#e4bfe2;
        }
       
        input{
            margin-top:5%;
            width:400px;
        }
        textarea 
        {
            margin-top:10%;
            width:400px;
            height: 200px;
        }

        /*********************/ 

body
{

    background-color:#e4bfe2;
}
        .topic {
            text-align: center;
            color: #350339;
            font-size: 40px;
            margin-top: 20px;
        }
        .tpic{
            border-style: solid;
            /*border-color: #350339;*/
            width: 700px;
            margin-left: 410px;
            background-color: #d8d5d8;
            margin-top: 50px;
            height: 100px;
            border-radius: 20px;
        }
        .wlc{
            text-align: center;
            color: #ffffff;
        }
        .click{
            text-align: center;
            color: #ffffff;
        }
        .lnk{
            text-align: center;
            text-decoration: none;
            color: #ffffff;
        }


         /***********notification box***************/

         .notification {
    background-color: blue;
    border: 1px solid #ddd;
      padding: 50px;
    margin-bottom: 10px;
    width: 100%;
    
  }
  .notification h2 {
    margin-top: 0;
    font-size: 1.2em;
    color: yellow;
 
  }
  
  .notification p {
    margin-bottom: 0;
  }
  
  .timestamp {
    font-size: 0.8em;
	   color: white;
 
  }

  .N_box
  {
    margin-right:40%;
    width:20%;
    
  }
/****Add_user.php*********/

.Add_user_form
{
    margin-left:25%;
}


/************view page */

.wapper{
            width:1972px;
            height: 1800px;
           
            
            
        }
        .sec{
           
            width: 1972px;
            height: 2000px;
            margin-top:-40px; 
            background-color:#e4bfe2;
        }

        .box1  img
        {
        
            border-radius:50%;
            width:70px;
            height:70px;
            margin-top:30px;
            margin-left:50%;
        
        }

       
       table{
        text-align:left;
        width:1000px;

       
       }
       tr{
        width:600px;

       }

       
       td {
  text-align: left;
}
       


    </style>

  
</head>

<body class="body-index">
    <div id="container">
        <header class="header">
            <form>
            <div>

            </div>
         
    
            <nav class="navbar- navbar-expand-lg mid-navbar">
                <form action="" class="form-inline">
                    <div class="cleaner"></div>
                    <div class="navbar-brand-wpz">
                        <a href="https://vau.ac.lk/" class="custom-logo-link" rel="home" itemprop="url">
                            <img id="logo-img" width="600" height="145" src="https://vau.ac.lk/wp-content/uploads/2021/07/cropped-UoV_Logo.png" class="custom-logo" alt="University of Vavuniya" decoding="async" loading="lazy" itemprop="logo" srcset="https://vau.ac.lk/wp-content/uploads/2021/07/cropped-UoV_Logo.png 742w, https://vau.ac.lk/wp-content/uploads/2021/07/cropped-UoV_Logo-300x80.png 300w, https://vau.ac.lk/wp-content/uploads/2021/07/cropped-UoV_Logo-624x166.png 624w" sizes="(max-width: 742px) 100vw, 742px" /></a>
                        <p class="tagline"></p>

                    </div><!-- .navbar-brand -->

                    <div id="navbar-logo" class="logo-navbar"></div>
                    <div class="cleaner">&nbsp;</div>
                    <!-- end .wrapper -->
                </form>
            </nav>

        </header>

        <div class="navbar-header-main">
            <nav id="main-navbar" class="main-navbar">
            <form class="form-inline justify-content-between" >
                    <div class="form-inline">
                        <a class="nav-link active" id="main-nav-a" aria-current="page" href="Admin_home.php">HOME</a>
                        <a class="nav-link active" id="main-nav-a" aria-current="page" href="admin_examEnteyPage.php">EXAM-ENTRY</a>
                        <a class="nav-link active" id="main-nav-a" aria-current="page" href= "viewMcList.php">MEDICAL </a>
                        <a  class="nav-link active" id="main-nav-a" aria-current="page" href="viewResitList.php" >RESIT</a>
                    
                    
                  
                    </div>
                 <!--   <a class="nav-link active" id="main-nav-a" aria-current="page" href="examentry.php">APPLY<i class="fa-solid fa-caret-down"></i></a>
                    <a class="nav-link" id="main-nav-a" href="#">ACADEMIC <i class="fa-solid fa-caret-down"></i></a>-->
               

                    <div class="form-inline right" style="margin-left:100px">
                    <?php
            if(isset($_SESSION['regNum'])){
                ?>
               
                        <h4  style="color:#fcb900">DEAN-<?php echo $_SESSION['regNum']; ?></h4>

                        <a class="nav-link active " id="main-nav-a" aria-current="page" href="../logout.php" style="margin-left:100px">LOGOUT</a>
         <?php } ?>
                    
        <?php
            if(isset($_SESSION['regNum'])){
                ?>
               

                   
                  
         <?php } ?>

        
            </div>
                </form>
            </nav>
        </div>
        <!-- end #main-menu -->
    </div>
</html>