<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap-5.3.0-alpha1-dist\css\bootstrap.min.css">
	
      <link rel="stylesheet" href="style.css">

      <style>
        #bodyID {
            position: relative;
        }

        .logOT {
            background-color:  rgba(93, 0, 255, 0);
            height: 40px;
            width: 99px;
            
        }
        .posA {
            position: absolute;
            top: 32px;
            right: 32px;
        }
        .nav
{
   
    height: 14.15vh;
    width: 100%;
    background-color: black;
}

.side{
    width:15%;
    height:85vh;
    
    background-color: rgb(210, 197, 197);

}
.contend
{
    width:85%;
    height: 85vh;
    background-color: #8D1381;
}

.mWrap {
    display: flex;
}
#contentFrame {
    height: 100%;
    width: 100%;
}

#sideframe
{
    height: 100%;
    width: 100%;   
}
#bodyfram
{
    height: 100%;
    width: 100%; 
}



      </style>
</head>
<body id="bodyID">
    <a class="posA" href="log.php">
        <div class="logOT"></div>
    </a>

    <div class =full-dash>
    <div class="nav">
    <iframe id="contentFrame"  src="nav.html" frameborder="0"></iframe>
    </div>
    <div class="mWrap">
       <div class="side"> <iframe id="sideframe" src="sidebar.php" frameborder="0"></iframe></div>
       <div  class="contend"> <iframe id="bodyfram" name="contentFrame" src="home.php" frameborder="0"></div>
</div>
<div>
</body>
</html>