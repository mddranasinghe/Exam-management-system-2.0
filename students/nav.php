<?php 
  
include "./db_connection.php";
session_start();
if (isset($_SESSION['regNum'])) { 

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

<!-- Add jQuery (required for Bootstrap JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Add Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style type="text/css">
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
  body
{
    
    background-color:#e4bfe2;
}



/*******profil page ************************** */


        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .profile-info p {
            color: #666;
        }




            /*change password  pop*/
            #myModal {
            position: absolute;
            top: 90px;
            left: 50px;
            
        }
        #signatureCanvas {
            border: 2px solid #ccc;
        }
       
    </style>

  
</head>
<body> 
    
<div class="body-index">
    <div id="container">
        <header class="header">
            <form>
            <div>

            </div>


            <nav class="mid-navbar">
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

        <div class="navbar-header-main" >
            <nav id="main-navbar" class="main-navbar">
                <form class="form-inline justify-content-between" >
                    <div class="form-inline">
                        <a class="nav-link active" id="main-nav-a" aria-current="page" href="home.php">HOME</a>
                        <a class="nav-link active" id="main-nav-a" aria-current="page" href="entryFormget.php">EXAM-ENTRY</a>
                        <a class="nav-link active" id="main-nav-a" aria-current="page" href= "mFormget.php">MEDICAL </a>
                        <a  class="nav-link active" id="main-nav-a" aria-current="page" href="reSiteFormget.php" >RESIT</a>
                        <a  class="nav-link active" id="main-nav-a" aria-current="page" href="feedback.php" >FEEDBACK</a>
            
                        <a  class="nav-link active" id="main-nav-a" aria-current="page" href="userProfile.php" >USER PROFILE</a>
                        <a class="nav-link active" id="main-nav-a" aria-current="page" href="about.php">ABOUT</a>
                </div>

                    <div class="form-inline right" style="margin-left:220px">
                    <?php
            if(isset($_SESSION['regNum'])){
                ?>
                   
                        <h4  style="color:#fcb900">STUDENT-<?php echo $_SESSION['regNum']; ?></h4>
                        
                        
                        <a class="nav-link active " id="main-nav-a" aria-current="page" href="../logout.php" style="margin-left:70px">LOGOUT</a>
                     
                  
         <?php } ?>
                    
        

        
            </div>
                </form>
            </nav>
        </div>
    </div>

    
    </form>
            </div>
            <?php
        }?>