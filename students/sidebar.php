<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="bootstrap-5.3.0-alpha1-dist\css\bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
<style>

      .sidebar ul li a pre:hover{
    color: yellow;
    font-size:x-large;
    cursor: pointer;
}
</style>
</head>
<body>

<div id="sidebarID" class="sidebar">
    <div class="toggle-btn">
  
      <!--<button type="button"  aria-label="Close" (click)="closeMenu()" class="btn btn-outline-dark">X</button>-->
  </div>
  <nav>
    <ul style="list-style-type:none">
    
        <li><a href= "mcPage.php" target="contentFrame"><pre>Medical </pre></a></li>
        <li><a href="resit.php" target="contentFrame"><pre>Resit</pre></a></li>
        <li><a href="examentry.php" target="contentFrame"><pre>Exam Entry</pre></a></li>
        <li><a href=""target=""><pre>Exam Timetable</pre></a></li> 
       
        <li><a href=""target=""><pre>Result</pre></li> 
        <li><a href="forgetpass.php" target="contentFrame"><pre>User Account </pre></li> 
    </ul> 
</nav>
</div>


<script src="EMS.js"></script>

</body>
</html>