<?php
   include('./nav.php');
  include "db_connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <style type="text/css">
    	body
    	{
    		background-image: url("photos/feedback-image.jpg");
            background-size:cover;
            background-repeat:no-repeat;
            background-color:#e4bfe2;
    	}
        .wapper{
            width:1000px;
            height: 1060px;
            
        }
    	.wrapper
    	{
    		padding: 10px;
    		margin: -20px auto;
    		width:900px;
    		height: 600px;
    		background-color: black;
    		opacity: .8;
    		color: white;
            margin-left:300px;
            margin-top:25px;
    	}
    	.form-control
    	{
    		height: 70px;
    		width: 60%;
    	}
    	.scroll
    	{
    		width: 100%;
    		height: 300px;
    		overflow: auto;
    	}

    </style>
</head>
<body>

    <div class="wapper">

      

            <div class="wrapper">
                
                <h4>If you have any suggesions or questions please comment below.</h4>
                <form style="" action="" method="post">
                    <input class="form-control" type="text" name="comment" placeholder="Write something..."required><br>	
                    <input class="btn btn-default" type="submit" name="submit" value="Comment" style="width: 100px; height: 35px;">		
                </form>
            
                <br><br>
                <div class="scroll">
                    <?php
                        if(isset($_POST['submit']))
                        {
                            $sql="INSERT INTO `feedback` VALUES('','$_POST[comment]');";
                            if(mysqli_query($conn,$sql))
                            {
                                $q="SELECT * FROM feedback ORDER BY feedback.id DESC";
                                $res=mysqli_query($conn,$q);

                                echo "<table class='table table-bordered'>";
                                while ($row=mysqli_fetch_assoc($res)) 
                                {
                                    echo "<tr>";
                                        echo "<td>"; echo $row['comment']; echo "</td>";
                                    echo "</tr>";
                                }
                            }

                        }

                        else
                        {
                            $q="SELECT * FROM feedback ORDER BY feedback.id DESC"; 
                                $res=mysqli_query($conn,$q);

                                echo "<table class='table table-bordered'>";
                                while ($row=mysqli_fetch_assoc($res)) 
                                {
                                    echo "<tr>";
                                        echo "<td>"; echo $row['comment']; echo "</td>";
                                    echo "</tr>";
                                }
                        }
                    ?>
                </div>
            
            </div>
                    
     </div>
</body>
</html>
