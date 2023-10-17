<?php
include "nav.php";
include "db_connection.php";



?>
<div class="container p-3 my-3 bg-white text-dark">
<div class="container p-1 my-2 bg-dark text-white">
   <h2 style="text-align:center">EXAMINATION  MEDICAL FORM FOR PROPER CANDIDATES</h2></div>
<form   method="POST"action="mcPage.php">
<label for="Registration_No" class="col-sm-3 col-form-label"> Registration No </label>
<input type="text"class="form-control col-s m-2 col-form-label" name="Registration_No" id="Registration_No" required value="<?php echo $_SESSION['regNum']; ?>" readonly>



<label for="Name_of_the_examination"class="col-sm-3 col-form-label" > Name of the Examination &nbsp &nbsp</label>
                        <select name="Name_of_the_examination" id="Name_of_the_examination" class="form-control "required>
                                    <option value="">Select The Exam</option>
                                    <option value="First Year First Semester Examination In Information Communication Technology">First Year First Semester Examination In Information Communication Technology</option>
                                    <option value="First Year Second Semester Examination In Information Communication Technology">First Year Second Semester Examination In Information Communication Technology</option>
                                    <option value="Second Year First Semester Examination In Information Communication Technology">Second Year First Semester Examination In Information Communication Technology</option>
                                    <option value="Second Year Second Semester Examination In Information Communication Technology">Second Year Second Semester Examination In Information Communication Technology</option>
                                    <option value="Third Year First Semester Examination In Information Communication Technology">Third Year First Semester Examination In Information Communication Technology</option>
                                    <option value="Third Year Second Semester Examination In Information Communication Technology">Third Year Second Semester Examination In Information Communication Technology</option>
                                    <option value="Forth Year First Semester Examination In Information Communication Technology">Forth Year First Semester Examination In Information Communication Technology</option>
                                    <option value="Forth Year Second Semester Examination In Information Communication Technology">Forth Year Second Semester Examination In Information Communication Technology</option>
                                </select>
                     
  
                                <label for="Faculty of" class="col-s m-2 col-form-label"> Faculty of</label>
                            <select name="faculty" id="faculty"  class="form-control col-s m-2 col-form-label" required>
                                    <option value="">Select Faculty &nbsp</option>
                                    <option value="Technological studies">Technological Studies</option>
                                    <option value="applied sceince">Applied Science</option>
                                    <option value="manegment">Business Studies</option>
                                </select>
            
                        <label for="year_of_the_examination" class="col-s m-2 col-form-label"> Year of the Examination &nbsp  </label>
                                <select name="year" id="year"  class="form-control col-s m-2 col-form-label" required>
                                    <option value="">Select Year</option>
                                    <option value="1st year">1st year</option>
                                    <option value="2nd year">2nd year</option>
                                    <option value="3rd year">3rd year</option>
                                    <option value="4th year">4th year</option>

                                   
                                </select>
                             
                            
                        <label for="Semester" class="col-s m-2 col-form-label"> Semester &nbsp </label>
                                <select name="semester" id="language"    class="form-control col-s m-2 col-form-label" required>
                                    <option value="">Select Semester</option>
                                    <option value="1st semester">1st semester</option>
                                    <option value="2nd semester">2nd semester</option>
                                </select>

                 
<div style="text-align:right">
                            <input type="submit"  value="GET APPLICATION" class="btn btn-success m-2"></div>
</form>
