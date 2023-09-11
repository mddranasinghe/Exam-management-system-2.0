
<?php
include "nav.php";
include "db_connection.php";
?>
<?php
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Registration_No = $_POST["Registration_No"];
    $Name_of_the_examination = $_POST["Name_of_the_examination"];

 

    $stmt = $conn->prepare("SELECT gender,Name_with_initials, Name_denoted_by_initial, Address,Mobile_Phone_no,Date_of_admission  FROM students WHERE  Registration_No= ?");
    $stmt->bind_param("s", $Registration_No);
    $stmt->execute();
    

    $result = $stmt->get_result();
    
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $gender = $row["gender"];
        $Name_with_initials = $row["Name_with_initials"];
        $Name_denoted_by_initial = $row["Name_denoted_by_initial"];
        $Address = $row["Address"];
        $Mobile_Phone_no = $row["Mobile_Phone_no"];
        $Date_of_admission = $row["Date_of_admission"];
       
    } else {
    
        $gender = "";
        $Name_with_initials = "";
        $Name_denoted_by_initial = "";
        $Address = "";
        $Mobile_Phone_no  = "";
        $Date_of_admission= "";
    }
} else {

    $Registration_No = "";
    $gender = "";
    $Name_with_initials = "";
    $Name_denoted_by_initial = "";
    $Address = "";
    $Mobile_Phone_no  = "";
    $Date_of_admission= "";
}
?>

<?php

include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $year = $_POST["year"];
    $semester=$_POST["semester"];
    $faculty=$_POST["faculty"];
 
    $stmt = $conn->prepare("SELECT *  FROM course_offerings WHERE  year= ? and semester= ? and faculty= ?");
    $stmt->bind_param("sss",$year,$semester,$faculty);
    $stmt->execute(); 
    

    $result = $stmt->get_result();
   
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $course_code_1 = $row["course_code_1"];
        $subject_name_1 = $row["subject_name_1"];
        $course_code_2 = $row["course_code_2"];
        $subject_name_2 = $row["subject_name_2"];

        $course_code_3 = $row["course_code_3"];
        $subject_name_3 = $row["subject_name_3"];
        $course_code_4 = $row["course_code_4"];
        $subject_name_4 = $row["subject_name_4"];
        
        $course_code_5 = $row["course_code_5"];
        $subject_name_5 = $row["subject_name_5"];
        $course_code_6 = $row["course_code_6"];
        $subject_name_6 = $row["subject_name_6"];
       

        $course_code_7 = $row["course_code_7"];
        $subject_name_7 = $row["subject_name_7"];
        $course_code_8 = $row["course_code_8"];
        $subject_name_8 = $row["subject_name_8"];

        $course_code_9 = $row["course_code_9"];
        $subject_name_9 = $row["subject_name_9"];
        $course_code_10 = $row["course_code_10"];
        $subject_name_10 = $row["subject_name_10"];
        $course_code_11 = $row["course_code_11"];
        $subject_name_11 = $row["subject_name_11"];
        $course_code_12 = $row["course_code_12"];
        $subject_name_12 = $row["subject_name_12"];
 
        $course_code_13= $row["course_code_13"];
        $subject_name_13 = $row["subject_name_13"];
        $course_code_14 = $row["course_code_14"];
        $subject_name_14 = $row["subject_name_14"];
        $course_code_15= $row["course_code_15"];
        $subject_name_15 = $row["subject_name_15"];
    } else {
     
        $course_code_1 = "";
        $subject_name_1 = "";
        $course_code_2= "";
        $subject_name_2 = "";

        $course_code_3 = "";
        $subject_name_3 = "";
        $course_code_4= "";
        $subject_name_4 = "";

        $course_code_5= "";
        $subject_name_5 = "";
        $course_code_6= "";
        $subject_name_6 = "";

        $course_code_7 = "";
        $subject_name_7 = "";
        $course_code_8= "";
        $subject_name_8 = "";

        $course_code_9= "";
        $subject_name_9 = "";
        $course_code_10= "";
        $subject_name_10 = "";
        $course_code_11= "";
        $subject_name_11 = "";
        $course_code_12= "";
        $subject_name_12 = "";
        $course_code_13= "";
        $subject_name_13 = "";
        $course_code_14= "";
        $subject_name_14 = "";
        $course_code_15= "";
        $subject_name_15 = "";
        

 
    }
} else {

    $year  = "";
    $semester= "";
    $faculty = "";
    $course_code_1 = "";
    $subject_name_1 = "";
    $course_code_2= "";
    $subject_name_2 = "";
    $course_code_3 = "";
    $subject_name_3 = "";
    $course_code_4= "";
    $subject_name_4 = "";

    $course_code_5= "";
    $subject_name_5 = "";
    $course_code_6= "";
    $subject_name_6 = "";

    $course_code_7 = "";
    $subject_name_7 = "";
    $course_code_8= "";
    $subject_name_8 = "";

    $course_code_9= "";
    $subject_name_9 = "";
    $course_code_10= "";
    $subject_name_10 = "";
    $course_code_11= "";
    $subject_name_11 = "";
    $course_code_12= "";
    $subject_name_12 = "";
    $course_code_13= "";
    $subject_name_13 = "";
    $course_code_14= "";
    $subject_name_14 = "";
    $course_code_15= "";
    $subject_name_15 = "";
}
?>





<!DOCTYPE html>
<html>
<head>
	<title>exam entry page</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 



 <style type="text/css">
    	   .wapper{
            width:100%;
            height: 100%;
           
            
            
        }
        .sec{
           
            width: 100%;
            height: 100%;
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

        .box2 
        {
            border-color:black;
            border: 5px;
            width:110px;
            height:70px;
            float:right;
            font-size:20px;
            margin-top:-50px;
            margin-right:400px;
            text-align:center;
        
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
<body>

<section>
	<DIV class="wapper">
        <section class="sec">
			
			
        <div style="float:center;width:1200px;height:100%;background-color:#white;margin-left:30px;margin-top:0px;"> 
                        <div class ="box1">   
				<div class ="box1">
                    <img src="n.png" style="float:center;">
                </div>


                
                    <h3 style="text-align:center;text-transform: uppercase;margin:2px;margin-left:50px;">University of Vavuniya,srilanka</h3s>
                    <h4 style="text-align:center;margin:2px;"><u>Examination Entry Form For Proper Candidates</u></h4>
                    <h4 style="text-align:center;margin:2px;">(to be completed and returned to the deputy registrar, examination and student admission)</h4>


                
                    <div class="mb-3">
                    <div class="form-group row">
                    <form name="Registration"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" >
                        <div class="login"> 
                          
                        
                            <div  style="float:right;">
                         
                        
                        </div><br><br><br>
                      
                    <form>
                         
                        <div >
                        <label for="Registration_No" class="col-sm-3 col-form-label">1. Registration No </label>
                        <input type="text"class="form-control " name="Registration_No" id="Registration_No"placeholder="Registration No" style="width: 700px;height: 35px;" value="<?php echo htmlspecialchars($Registration_No); ?>" readonly>
         
                        </div><br>

                       
                        <div>
                        <label for="gender"class="col-sm-3 col-form-label">2.Gender &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
                        <input type="text" name="gender"id="gender" placeholder="gender"style="width: 700px;height: 35px;" class="form-control " value="<?php echo htmlspecialchars($gender); ?>">
</div><br>
<div>
                        <label for="Name_with_initials" class="col-sm-3 col-form-label">3.Name with initials </label>
 
                    <input type="text" name="Name_with_initials"id="Name_with_initials" placeholder="Name with initials"style="width: 700px;height: 35px;" class="form-control "value="<?php echo htmlspecialchars($Name_with_initials); ?>">
                        </div><br>

                        <div>
                        <label for="Name_denoted_by_initial"class="col-sm-3 col-form-label">4. Name denoted by initial &nbsp &nbsp  &nbsp</label>
                        <input  type="text" name="Name_denoted_by_initial"id="Name_denoted_by_initial" placeholder="Name denoted by initial"style="width: 700px;height: 35px;" class="form-control "value="<?php echo htmlspecialchars($Name_denoted_by_initial); ?>">
                        </div>  <br>
                    

                        <div>
                        <label for="Address(Present)"class="col-sm-3 col-form-label">5. Address(Present) &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp</label>
                        <input  type="text" name="Address" id="Address" placeholder="Address(Present)"style="width: 700px;height: 35px;"  class="form-control "value="<?php echo htmlspecialchars($Address); ?>">
                        </div>  <br>
                    
                        <div>
                        <label for="Mobile_Phone_no"class="col-sm-3 col-form-label">6. Mobile Phone no &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
                        <input type="text" name="Mobile_Phone_no"  id="Mobile_Phone_no" placeholder="Mobile Phone no" style="width: 700px;height: 35px;" class="form-control "value="<?php echo htmlspecialchars($Mobile_Phone_no); ?>">
                        </div><br>

                     
                        <div>
                        <label for="Date_of_admission"class="col-sm-3 col-form-label">7. Date of admission &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp</label>
                        <input type="text" name="Date_of_admission" placeholder="Date of admission" style="width: 700px;height: 35px;"  class="form-control "value="<?php echo htmlspecialchars($Date_of_admission); ?>">
                        </div><br>

                        <div>
                        <label for="Name_of_the_examination"class="col-sm-3 col-form-label">8.Name of the examination&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp</label>
                        <input type="text" name="Name_of_the_examination" placeholder="Name ofthe examination" style="width: 700px;height: 35px;"  class="form-control "value="<?php echo htmlspecialchars($Name_of_the_examination); ?>">
                        </div><br>


                        <div>
                        <label for="Faculty"class="col-sm-3 col-form-label">9.Faculty&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp</label>
                        <input type="text" name="faculty" placeholder="Faculty" style="width: 700px;height: 35px;"  class="form-control "value="<?php echo htmlspecialchars($faculty); ?>">
                        </div><br>


                        <div>
                        <label for="year"class="col-sm-3 col-form-label">10.Year &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp</label>
                        <input type="text" name="year" placeholder="year" style="width: 700px;height: 35px;"  class="form-control "value="<?php echo htmlspecialchars($year); ?>">
                        </div><br>


                        <div>
                        <label for="semester"class="col-sm-3 col-form-label">11.Semester &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp</label>
                        <input type="text" name="semester" placeholder="semester" style="width: 700px;height: 35px;"  class="form-control "value="<?php echo htmlspecialchars($semester); ?>">
                        </div><br>


                        <table class="table table-stripped m-2 table table-hover">
                        <thead class="thead-dark">   
                        <tr>
                           
                                <th >COURS CODE</th>
                                <th >SUBJECT TITLE</th>
                           
                               
                            </tr>
</thead>
                            <tr>
                                <td><input class="form-control " type="text" name="course_code_1"   value="<?php echo htmlspecialchars($course_code_1); ?>"></td>
                                <td><input class="form-control "type="text" name="subject_name_1"  value="<?php echo htmlspecialchars($subject_name_1); ?>" ></td>
                                <td><button onclick="deleteRow(this)"class="btn btn-info">X</button></td>
            
                            </tr>
                            <tr>
                                <td><input class="form-control "type="text" name="course_code_2"  value="<?php echo htmlspecialchars($course_code_2); ?>" ></td>
                                <td><input class="form-control "type="text" name="subject_name_2" value="<?php echo htmlspecialchars($subject_name_2); ?>" ></td>
                                <td><button onclick="deleteRow(this)"class="btn btn-info">X</button></td>
            
                            </tr>
                            <tr>
                                <td><input class="form-control "type="text" name="course_code_3"  value="<?php echo htmlspecialchars($course_code_3); ?>" ></td>
                                <td><input class="form-control "type="text" name="subject_name_3"  value="<?php echo htmlspecialchars($subject_name_3); ?>" ></td>
                                <td><button onclick="deleteRow(this)"class="btn btn-info">X</button></td>
            
                            </tr>
                            <tr>
                                <td><input class="form-control "type="text" name="course_code_4"  value="<?php echo htmlspecialchars($course_code_4); ?>"></td>
                                <td><input class="form-control "type="text" name="subject_name_4" value="<?php echo htmlspecialchars($subject_name_4); ?>"  ></td>
                                <td><button onclick="deleteRow(this)"class="btn btn-info">X</button></td>
            
                            </tr>
                            <tr>
                                <td><input class="form-control "type="text" name="course_code_5"   value="<?php echo htmlspecialchars($course_code_5); ?>"></td>
                                <td><input class="form-control "type="text" name="subject_name_5" value="<?php echo htmlspecialchars($subject_name_5); ?>"  ></td>
                                <td><button onclick="deleteRow(this)"class="btn btn-info">X</button></td>
            
                            </tr>
                            <tr>
                                <td><input class="form-control " type="text" name="course_code_6"   value="<?php echo htmlspecialchars($course_code_6); ?>"></td>
                                <td><input class="form-control "type="text" name="subject_name_6"  value="<?php echo htmlspecialchars($subject_name_6); ?>" ></td>
                                <td><button onclick="deleteRow(this)"class="btn btn-info">X</button></td>
                            </tr>
                            <tr>
                                <td><input class="form-control "type="text" name="course_code_7"   value="<?php echo htmlspecialchars($course_code_7); ?>"></td>
                                <td><input class="form-control "type="text" name="subject_name_7"  value="<?php echo htmlspecialchars($subject_name_7); ?>"  ></td>
                                <td><button onclick="deleteRow(this)"class="btn btn-info">X</button></td>
            
                            </tr>
                            <tr>
                                <td><input class="form-control "type="text" name="course_code_8"  value="<?php echo htmlspecialchars($course_code_8); ?>"></td>
                                <td><input class="form-control "type="text" name="subject_name_8" value="<?php echo htmlspecialchars($subject_name_8); ?>"  ></td>
                                <td><button onclick="deleteRow(this)"class="btn btn-info">X</button></td>
            
                            </tr>
                            <tr>
                                <td><input class="form-control "type="text" name="course_code_9"  value="<?php echo htmlspecialchars($course_code_9); ?>"></td>
                                <td><input class="form-control "type="text" name="subject_name_9"   value="<?php echo htmlspecialchars($subject_name_9); ?>" ></td>
                                <td><button onclick="deleteRow(this)"class="btn btn-info">X</button></td>
            
                            </tr>
                            <tr>
                                <td><input class="form-control "type="text" name="course_code_10" value="<?php echo htmlspecialchars($course_code_10); ?>" ></td>
                                <td><input class="form-control "type="text" name="subject_name_10"  value="<?php echo htmlspecialchars($subject_name_10); ?>" ></td>
                                <td><button onclick="deleteRow(this)"class="btn btn-info">X</button></td>
            
                            </tr>
                            <tr>
                                <td><input class="form-control "type="text" name="course_code_11" value="<?php echo htmlspecialchars($course_code_11); ?>" ></td>
                                <td><input class="form-control "type="text" name="subject_name_11"  value="<?php echo htmlspecialchars($subject_name_11); ?>" ></td>
                                <td><button onclick="deleteRow(this)"class="btn btn-info">X</button></td>
            
                            </tr>

                            <tr>
                                <td><input class="form-control "type="text" name="course_code_12" value="<?php echo htmlspecialchars($course_code_12); ?>" ></td>
                                <td><input class="form-control "type="text" name="subject_name_12"  value="<?php echo htmlspecialchars($subject_name_12); ?>" ></td>
                                <td><button onclick="deleteRow(this)"class="btn btn-info">X</button></td>
            
                            </tr>
                            <tr>
                                <td><input class="form-control "type="text" name="course_code_13" value="<?php echo htmlspecialchars($course_code_13); ?>" ></td>
                                <td><input class="form-control "type="text" name="subject_name_13"  value="<?php echo htmlspecialchars($subject_name_13); ?>" ></td>
                                <td><button onclick="deleteRow(this)"class="btn btn-info">X</button></td>
                            </tr>
                            <tr>
                                <td><input class="form-control "type="text" name="course_code_14" value="<?php echo htmlspecialchars($course_code_14); ?>" ></td>
                                <td><input class="form-control "type="text" name="subject_name_14"  value="<?php echo htmlspecialchars($subject_name_14); ?>" ></td>
                                <td><button onclick="deleteRow(this)"class="btn btn-info">X</button></td>
                            </tr>
                            <tr>
                                <td><input class="form-control "type="text" name="course_code_15" value="<?php echo htmlspecialchars($course_code_15); ?>" ></td>
                                <td><input class="form-control "type="text" name="subject_name_15"  value="<?php echo htmlspecialchars($subject_name_15); ?>" ></td>
                                <td><button onclick="deleteRow(this)"class="btn btn-info">X</button></td>
            
                            </tr>
                            </table>

                        <div style="float:right;margin-top:20px;margin-right:50px;">
                        <a href="entryFormget.php"class="btn btn-danger m-2" >GO BACK</a>
                        <input class="btn btn-success m-2"type="submit" name="submit" value="submit">&nbsp &nbsp &nbsp &nbsp 

                        
                        </div>
                   
					
				    </form>
                </div>
				
				<?php

                    if(isset($_POST['submit']))
                    {
                        $count=0;
                        $sql="SELECT Registration_No from `examEnrty`";
                        $res=mysqli_query($conn,$sql);

                        while($row=mysqli_fetch_assoc($res))
                        {
                        if($row['Registration_No']==$_POST['Registration_No'])
                        {
                            $count=$count+1;
                        }
                        }
                        if($count==0)
                        {
                        mysqli_query($conn,"INSERT INTO `examEnrty` VALUES(
                            '$_POST[faculty]',
                            '$_POST[Name_of_the_examination]',
                            '$_POST[year]', 
                            '$_POST[semester]',
                            '$_POST[gender]',
                            '$_POST[Name_with_initials]',
                            '$_POST[Name_denoted_by_initial]',
                            '$_POST[Registration_No]',
                            '$_POST[Address]', 
                            '$_POST[Mobile_Phone_no]',
                            '$_POST[Date_of_admission]',
                            '$_POST[course_code_1]',
                            '$_POST[subject_name_1]', 
                            '$_POST[course_code_2]', 
                            '$_POST[subject_name_2]',
                            '$_POST[course_code_3]', 
                            '$_POST[subject_name_3]',
                            '$_POST[course_code_4]', 
                            '$_POST[subject_name_4]',
                            '$_POST[course_code_5]', 
                            '$_POST[subject_name_5]',
                            '$_POST[course_code_6]', 
                            '$_POST[subject_name_6]',
                            '$_POST[course_code_7]', 
                            '$_POST[subject_name_7]',
                            '$_POST[course_code_8]', 
                            '$_POST[subject_name_8]',
                            '$_POST[course_code_9]', 
                            '$_POST[subject_name_9]',
                            '$_POST[course_code_10]', 
                            '$_POST[subject_name_10]',
                            '$_POST[course_code_11]', 
                            '$_POST[subject_name_11]',
                            '$_POST[course_code_12]', 
                            '$_POST[subject_name_12]',
                            '$_POST[course_code_13]', 
                            '$_POST[subject_name_13]',
                            '$_POST[course_code_14]', 
                            '$_POST[subject_name_14]',
                            '$_POST[course_code_15]', 
                            '$_POST[subject_name_15]');");
                        
                    
                        ?>
                        <script type="text/javascript">
                        alert("Registration successful");
                        </script>
                    
                            

                        <?php
                        }
                        else
                        {

                        ?>
                            <script type="text/javascript">
                            alert("The username already exist.");
                            </script>
                        <?php

                        }
                      
                        exit();//after th complete for loop index page process is stop

                    }

                ?>
      
		
</div>

<script>
    function deleteRow(button) {
        // Get the reference to the row to be deleted
        var row = button.parentNode.parentNode;

        // Remove the row from the table
        row.parentNode.removeChild(row);
    }
</script>



</body>
</html>