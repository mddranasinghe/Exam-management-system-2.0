<?php include "./Admin_nav.php"?>

<div class="container p-3 my-3 bg-white text-dark">
<div class="container p-1 my-2 bg-dark text-white">
   <h2 style="text-align:center">ADD STUDENTS DETAILS</h2></div>
   <div class="Add_user_form">
 <form name="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">


    <label for="regNum" class="col-sm-3 col-form-label">Registration Number:</label>
    <input  class="form-control col-sm-7 col-form-label"  type="text"  placeholder="Registration Number" name="regNum" id="regNum"><br>


    <label for=" Name_with_initials"  class="col-sm-2 col-form-label"> Gender  </label></td>
  
      <select name="gender" id="language"class="form-control col-sm-7 col-form-label">
         <option value="">Select gender</option>
         <option value="Female">Female</option>
         <option value="Male">Male</option>
                                      
      </select><br>
                                

<label for="name" class="col-sm-3 col-form-label">Name with Initials:</label>
    <input class="form-control col-sm-7 col-form-label"type="text" placeholder="Name with Initials" name="name" id="name"><br>
  

    <label for="initialName" class="col-sm-3 col-form-label">Name Denoted by Initial:</label>
    <input class="form-control col-sm-7 col-form-label"type="text"  placeholder="Name Denoted by Initial" name="initialName" id="initialName"><br>

    <label for="password" class="col-sm-2 col-form-label">Password:</label>
<input class="form-control col-sm-7 col-form-label"type="password" name="password" placeholder="Password" id="password" required=""><br>
 
  
   <label for="admissionDate" class="col-sm-3 col-form-label">Admission Date:</label>
    <input class="form-control col-sm-7 col-form-label"type="date"  name="admissionDate" id="admissionDate" placeholder="Admision Date" ><br>

 
  <label for="phone" class="col-sm-3 col-form-label">Mobile Phone Number:</label>
    <input class="form-control col-sm-7 col-form-label"type="text"  placeholder="Mobile Phone Number" name="phone" id="phone" ><br>
 
    <label for="address" class="col-sm-2 col-form-label">Address:</label>
    <input class="form-control col-sm-7 col-form-label"type="text" placeholder="Address" name="address" id="address" ><br>


  <input class="btn btn-success" type="submit" name="Submit" value="Submit">&nbsp &nbsp &nbsp
  <input class="btn btn-danger" type="reset" name="Reset" value="Reset">
</form>

</div>
</div>