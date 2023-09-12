
<?php

include "db_connection.php";
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

<?php
            $Registration_No=$_GET['Registration_No'];
            $sql="SELECT * FROM examenrty WHERE Registration_No='$Registration_No'";
            $res=mysqli_query($conn,$sql);

            if(mysqli_num_rows($res)>0){
                $row=mysqli_fetch_assoc($res);
            }
                ?>
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
                    <form name="Registration">
                        <div class="login"> 
                          
                        
                            <div  style="float:right;">
                         
                        
                        </div><br><br><br>
                      
                    
                         
                        <div >
                        <label for="Registration_No" class="col-s m-2 col-form-label"> Registration No </label>
                        <input type="text"class="form-control col-s m-2 col-form-label" name="Registration_No" id="Registration_No"placeholder="Registration No" style="width: 700px;height: 35px;" value="<?php echo $row['Registration_No']; ?>">
                       
                        </div><br>

                       
                        <div>
                        <label for="gender"class="col-s m-2 col-form-label">Gender </label>
                        <input type="text" name="gender"id="gender" placeholder="gender"style="width: 700px;height: 35px;" class="form-control col-s m-2 col-form-label" value="<?php echo $row['gender']; ?>">
                        <label for="Name_with_initials"class="col-s m-2 col-form-label">Name with initials </label>
                    <input type="text" name="Name_with_initials"id="Name_with_initials" placeholder="Name with initials"style="width: 700px;height: 35px;" class="form-control "value="<?php echo $row['Name_with_initials']; ?>">
                        </div><br>

                        <div>
                        <label for="Name_denoted_by_initial"class="col-s m-2 col-form-label"> Name denoted by initial &nbsp &nbsp  &nbsp</label>
                        <input  type="text" name="Name_denoted_by_initial"id="Name_denoted_by_initial" placeholder="Name denoted by initial"style="width: 700px;height: 35px;" class="form-control "value="<?php echo $row['Name_denoted_by_initial']; ?>">
                        </div>  <br>
                    

                        <div>
                        <label for="Address(Present)"class="col-s m-2 col-form-label"> Address(Present) &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp</label>
                        <input  type="text" name="Address" id="Address" placeholder="Address(Present)"style="width: 700px;height: 35px;"  class="form-control "value="<?php echo $row['Address']; ?>">
                        </div>  <br>
                    
                        <div>
                        <label for="Mobile_Phone_no"class="col-s m-2 col-form-label"> Mobile Phone no &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
                        <input type="text" name="Mobile_Phone_no"  id="Mobile_Phone_no" placeholder="Mobile Phone no" style="width: 700px;height: 35px;" class="form-control "value="<?php echo $row['Mobile_Phone_no']; ?>">
                        </div><br>

                        <div>
                        <label for="Date_of_admission"class="col-s m-2 col-form-label"> Date of admission &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp</label>
                        <input type="text" name="Date_of_admission" placeholder="Date of admission" style="width: 700px;height: 35px;"  class="form-control "value="<?php echo $row['Date_of_admission']; ?>">
                        </div><br>
                        <div>
                        <label for="Name_of_the_examination"class="col-s m-2 col-form-label">Name of the examination &nbsp &nbsp</label>
                        <input type="text" name="Name_of_the_examination"  style="width: 700px;height: 35px;"  class="form-control "value="<?php echo $row['Name_of_the_examination']; ?>">
                            </div> <br>
                    
                <table class="margin-right:10px;">

                    <tr >
                        <td>
                        <div>
                        <label for="year_of_the_examination" class="col-s m-2 col-form-label"> Year Of The xamination &nbsp  </label>
                                <input type="text" name="year"  style="width: 200px;height: 35px;"  class="form-control "value=" <?php echo $row['year']; ?>">
                                </div><br>
                                </td>
                                <td>
                        <div>
                        <label for="Semester" class="col-s m-2 col-form-label">Semester &nbsp </label>
                                <input type="text" name="semester"  style="width: 200px;height: 35px;"  class="form-control "value="<?php echo $row['semester'];  ?>">

                        </div>  <br>
                        </td>
                        <td>
                         <label for="Faculty of" class="col-s m-2 col-form-label"> Faculty of</label>

                                <input type="text" name="faculty"  style="width: 200px;height: 35px;"  class="form-control "value=" <?php echo $row['faculty']; ?>">
                            </div>
                           

                        </td>
                        </tr>
                        </table>
                      

                        <?php
$Registration_No = $_GET['Registration_No'];
$sql = "SELECT * FROM examenrty WHERE Registration_No='$Registration_No'";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
}
?>
<body>
    <!-- ... Your HTML and other PHP code ... -->

    <table border="1px" class="table table-stripped m-2 table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>COURSE CODE</th>
                <th>SUBJECT TITLE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $courses = array(
                'course_code_1' => 'subject_name_1',
                'course_code_2' => 'subject_name_2',
                'course_code_3' => 'subject_name_3',
                'course_code_4' => 'subject_name_4',
                'course_code_5' => 'subject_name_5',
                'course_code_6' => 'subject_name_6',
                'course_code_7' => 'subject_name_7',
                'course_code_8' => 'subject_name_8',
                'course_code_9' => 'subject_name_9',
                'course_code_10' => 'subject_name_10',
                'course_code_11' => 'subject_name_11',
                'course_code_12' => 'subject_name_12',
                'course_code_13' => 'subject_name_13',
                'course_code_14' => 'subject_name_14',
                'course_code_15' => 'subject_name_15',
                
            );

            foreach ($courses as $course_code => $subject_name) {
                if (!empty($row[$course_code]) && !empty($row[$subject_name])) {
                    echo '<tr>';
                    echo '<td><input class="form-control" type="text" name="' . $course_code . '" value="' . $row[$course_code] . '"></td>';
                    echo '<td><input class="form-control" type="text" name="' . $subject_name . '" value="' . $row[$subject_name] . '"></td>';
                    echo '</tr>';
                }
            }
            ?>
          
        </tbody>
    </table>

    <!-- ... Rest of your HTML and PHP code ... -->
</body>

				    </form>
                </div>
				
			
      
		
</div>

            
<Script >

document.addEventListener('DOMContentLoaded', function () {
const style = `
                @page {
                size: A4;
                margin: 0;
                }
                html, body {
                width: 210mm;
                height: 297mm;
                margin: 0;
                padding: 0;
                }
            `;
            const head = document.head || document.getElementsByTagName('head')[0];
            const styleElement = document.createElement('style');
            styleElement.type = 'text/css';
            styleElement.appendChild(document.createTextNode(style));
            head.appendChild(styleElement);
            setTimeout(()=>{window.print()},2000);
            
            head.removeChild(styleElement);

        });

</Script>
</body>
</html>

