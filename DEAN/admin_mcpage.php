<?php
  include "Admin_nav.php";
  include "db_connection.php";
?>



<!DOCTYPE html>
<html>
<head>
	<title>mc page</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 



 <style type="text/css">
    	   .wapper{
            width:1972px;
            height: 1360px;
           
            
            
        }
        .sec{
           
            width: 1972px;
            height: 1300px;
            margin-top:-50px; 
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

        .box2 
        {
            border-color:black;
            border: 5px;
            width:110px;
            height:70px;
            float:right;
            font-size:20px;
            margin-top:-50px;
            margin-right:100px;
            text-align:center;
        
        }
       table{
        text-align:center;
        width:1000px;
       
       }
       tr{
        width:600px;

       }

       

       

       
    </style>	
  
</head>
<body>

<section>
	<DIV class="wapper">
        <section class="sec">
			
			
                    <div style="float:center;width:1200px;height:1250px;background-color:#white;margin-left:10px;margin-top:50px;"> <!-- margin left- eka wenas karahan -->
                        <div class ="box1">
                            <img src="n.png" style="float:center;">
                        </div>

                        

                        
                            <h3 style="text-align:center;text-transform: uppercase;margin:2px;margin-left:190px;">University of Vavuniya,srilanka</h3s>
                            <h4 style="text-align:center;margin:2px;"><u>confirmation for eligibility of the examination for proper candidate</u></h4>
                            <h4 style="text-align:center;margin:2px;">(to be completed and returned to the deputy registrar, examination and student admission)</h4>


                            <div class="sech"style="float: right;">
				<form class="navbar-form" method="post" name="form1">
					<input class="form-control"type="text" name="search" placeholder="search books.." required="" style="background-color: lightgray">
					<button class="btn btn-default" style="background-color: red;" type="submit" name="submit">
						<span class="glyphicon glyphicon-search"></span>
					</button>

				</form>
				
			</div>
			
			<div class ="book_img">
							<br><br>
						<div class ="box3">
								
								<h1 style ="text-align: center;font-size: 37px ; "> List of The Medical   </h1>
								<br>

				<?php


				if(isset($_POST['submit']))
				{
					$q=mysqli_query($conn,"SELECT *FROM medical where Registration_No like '%$_POST[search]%' ");
					if(mysqli_num_rows($q)==0)
					{
						echo "sorry! not  found. try seaching agin.";
					}
					else
					{
						$res=mysqli_query($conn,"SELECT * FROM medical ORDER BY medical.Registration_No ASC;");

							echo "<table class='table table-bordered table-hover' >";
								echo "<tr style='background-color: white;color:red;'>";
									//Table header
									echo "<th>"; echo "Name_of_the_examination";	echo "</th>";
									echo "<th>"; echo "year";  echo "</th>";
									echo "<th>"; echo "semester";  echo "</th>";
									echo "<th>"; echo "gender";  echo "</th>";
									echo "<th>"; echo "Name_with_initials";  echo "</th>";
									echo "<th>"; echo "Name_denoted_by_initial";  echo "</th>";
									echo "<th>"; echo "Registration_No";  echo "</th>";
                                    echo "<th>"; echo "Address";  echo "</th>";
                                    echo "<th>"; echo "Mobile_Phone_no";  echo "</th>";
                                    echo "<th>"; echo "Date_of_admission";  echo "</th>";
                                    echo "<th>"; echo "course_code_1";  echo "</th>";
                                    echo "<th>"; echo "subject_name_1";  echo "</th>";
                                    echo "<th>"; echo "course_code_2";  echo "</th>";
                                    echo "<th>"; echo "subject_name_2";  echo "</th>";
								echo "</tr>";	

								while($row=mysqli_fetch_assoc($q))
								 {
									echo "<tr style='background-color: gray;color:white;'>";
									echo "<td>"; echo $row['Name_of_the_examination']; echo "</td>";
									echo "<td>"; echo $row['year']; echo "</td>";
									echo "<td>"; echo $row['semester']; echo "</td>";
									echo "<td>"; echo $row['gender']; echo "</td>";
									echo "<td>"; echo $row['Name_with_initials']; echo "</td>";
									echo "<td>"; echo $row['Name_denoted_by_initial']; echo "</td>";
									echo "<td>"; echo $row['Registration_No']; echo "</td>";
                                    echo "<td>"; echo $row['Address']; echo "</td>";
                                    echo "<td>"; echo $row['Mobile_Phone_no']; echo "</td>";
                                    echo "<td>"; echo $row['Date_of_admission']; echo "</td>";
                                    echo "<td>"; echo $row['course_code_1']; echo "</td>";
                                    echo "<td>"; echo $row['subject_name_1']; echo "</td>";
                                    echo "<td>"; echo $row['course_code_2']; echo "</td>";
                                    echo "<td>"; echo $row['subject_name_2']; echo "</td>";

									echo "</tr>";
								}
							echo "</table>";
					}
				}
				/* if button is not pressed */
				else
				{
					$res=mysqli_query($conn,"SELECT * FROM medical ORDER BY medical.Registration_No ASC;");

							echo "<table class='table table-bordered table-hover' >";
								echo "<tr style='background-color: white;color:red;'>";
									//Table header
									echo "<th>"; echo "Name_of_the_examination";	echo "</th>";
									echo "<th>"; echo "year";  echo "</th>";
									echo "<th>"; echo "semester";  echo "</th>";
									echo "<th>"; echo "gender";  echo "</th>";
									echo "<th>"; echo "Name_with_initials";  echo "</th>";
									echo "<th>"; echo "Name_denoted_by_initial";  echo "</th>";
									echo "<th>"; echo "Registration_No";  echo "</th>";
                                    echo "<th>"; echo "Address";  echo "</th>";
                                    echo "<th>"; echo "Mobile_Phone_no";  echo "</th>";
                                    echo "<th>"; echo "Date_of_admission";  echo "</th>";
                                    echo "<th>"; echo "course_code_1";  echo "</th>";
                                    echo "<th>"; echo "subject_name_1";  echo "</th>";
                                    echo "<th>"; echo "course_code_2";  echo "</th>";
                                    echo "<th>"; echo "subject_name_2";  echo "</th>";
								echo "</tr>";	

								while($row=mysqli_fetch_assoc($res))
								 {
									echo "<tr style='background-color: gray;color:white;'>";
									echo "<td>"; echo $row['Name_of_the_examination']; echo "</td>";
									echo "<td>"; echo $row['year']; echo "</td>";
									echo "<td>"; echo $row['semester']; echo "</td>";
									echo "<td>"; echo $row['gender']; echo "</td>";
									echo "<td>"; echo $row['Name_with_initials']; echo "</td>";
									echo "<td>"; echo $row['Name_denoted_by_initial']; echo "</td>";
									echo "<td>"; echo $row['Registration_No']; echo "</td>";
                                    echo "<td>"; echo $row['Address']; echo "</td>";
                                    echo "<td>"; echo $row['Mobile_Phone_no']; echo "</td>";
                                    echo "<td>"; echo $row['Date_of_admission']; echo "</td>";
                                    echo "<td>"; echo $row['course_code_1']; echo "</td>";
                                    echo "<td>"; echo $row['subject_name_1']; echo "</td>";
                                    echo "<td>"; echo $row['course_code_2']; echo "</td>";
                                    echo "<td>"; echo $row['subject_name_2']; echo "</td>";

									echo "</tr>";
								}
							echo "</table>";
				}

							?>
							

						

						</div>	
			</div>	

                        
                    </div>
        </section>        
				

			


		

	</DIV>


</body>
</html>