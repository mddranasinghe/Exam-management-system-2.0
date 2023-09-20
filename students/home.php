<?php 
include "nav.php";
if (isset($_SESSION['regNum'])) { 
?>
<head>
<style>
    * {box-sizing:border-box}

.slideshow-container {
  max-width: 650px;
  position: absolute;
  top:280px;
  margin-left:700px;

  
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 100.0s ease-in-out;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 70%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators 
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}*/



/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 3s;
 transition-duration:100s;
}


@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

</style>

</head>
<body>
<div class="row">
  <div class="column1">
  <div class="container p-3  bg-dark text-white" style="width:50%; float:left; ">

<h2>EXAMINATION NOTIFICATIONS</h2>

<?php

include 'db_connection.php';

$sql = "SELECT * FROM notifications ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo '<div class="notification">';
        echo '<h2>' . $row['title'] . '</h2>';
        echo '<p>' . $row['message'] . '</p>';
        echo '<span class="timestamp">' . $row['created_at'] . '</span>';
        echo '</div>';
    }
} else {
    echo 'No notifications to display.';
}

$conn->close();
?>
</div></div>




<div class="column2">
<div class="slideshow-container" style="margin-top:0px;">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="filesUpload/ga.png" width="100px" height="500px" style="width:100%">
  </div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="filesUpload/fts.jpg"  width="100px" height="500px" style="width:100%">
  </div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="filesUpload/th.jpg"  width="100px" height="500px" style="width:100%">
  </div>

<!-- Next and previous buttons -->
<a class="prev" >&#10094;</a>
<a class="next">&#10095;</a>
</div>
<br>

<!-- The dots/circles 
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>-->



</div>

</div>
<script>
    let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
  
</body>
</html>

<?php
       }
      
        ?>




                
            
                
                
            
                
                
            
                
                
            
                
                
            
		

                            

                            
                               
                                    

	
                

            
    			