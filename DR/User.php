<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">

  

</head>

<body>
<div id="container" >
    <header class="header">
            <div style="margin-left:100px;">
    <img width="720" height="190" src="https://vau.ac.lk/wp-content/uploads/2021/07/cropped-UoV_Logo.png" class="custom-logo" alt="University of Vavuniya" decoding="async" loading="lazy" itemprop="logo" srcset="https://vau.ac.lk/wp-content/uploads/2021/07/cropped-UoV_Logo.png 742w, https://vau.ac.lk/wp-content/uploads/2021/07/cropped-UoV_Logo-300x80.png 300w, https://vau.ac.lk/wp-content/uploads/2021/07/cropped-UoV_Logo-624x166.png 624w" sizes="(max-width: 720px) 100vw, 720px">
    </div>    
    <!-- main-menu -->
    <div style="background:purple;" >
        
        </div>

        </div>
        <!-- end #main-menu -->
    </div> 
    <div style="background:pink;">
    <div class="text-center">
       
           <!-- <img src="sta.png" width="100" height="100"> -->
           <h2 style="color:blue;">
           <br>
        <center>Join Your Account</center>
    </h2><br>
            
    
    

    
            <!--<th><a href="user.php"><img src="b.png" alt=""style="width:50px; margin-bottom:70px; margin-left:10px;"></a></th>-->
            <center><img src="sta.png" alt=""style="width:100px; height:100px; "></center>
            
    
    <form method="post" action="./PHP/AdminFunc.php">
        <table align="center">

            <tr>
                <th>User Name</th>
                <th>:</th>
                <th style="margin-left:30px;"><input type="text" id="accid" name="accid" placeholder="A00"></th>
            </tr>
            <tr>
                <th>Type</th>
                <th>:</th>
                <th style="margin-left:30px;">
                    <select name="acctype" id="acctype">
                        <option value="DR">DR</option>
                        <option value="Head">Head</option>
                        <option value="Lecturer">Lecturer</option>
                        <option value="Lecturer">Student</option>
                    </select>
                </th>
            </tr>
            <tr style="padding-top:20%;">
                <th>Password</th>
                <th>:</th>
                <th><input type="password" id="accpassword" name="accpassword"></th>
            </tr>


        </table>
        <div style="text-align:center;">
            <button type="submit" class="btn btn-outline-dark" style="font-size:20px; margin-top:20px;" value="Log In"
                name="ALogIn">Log In</button>

        </div>

    </form>
    <br><br>
    </div>
</body>
<footer class="text-center text-lg-start bg-dark text-white">
   <div class="container" style="display:flex;">
    <div class="column" style="width:33.33%; margin-top:40px;">
   
            <p>
                
                University of Vavuniya,<br>
                Pampaimadu,<br>
                Vavuniya, Sri Lanka<br>
                Tel :   +94 24 222 2265<br>
                Fax :   +94 24 222 2265<br>
            </p>
       
</div>   

       <div class="column" style="margin-top:30px;">   
         
       <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4826.827166110597!2d80.39654131667454!3d8.756519333333012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaa4502ed3daa62db!2sUniversity%20of%20Vavuniya%20Hostel!5e0!3m2!1sen!2slk!4v1629056582941!5m2!1sen!2slk" width="600px" height="200px" allowfullscreen=""></iframe>
       
       </div>  
          
        <div class="column" style="margin-left:50px; margin-top:70px;"> 
              e-mail : exams@vau.ac.lk<br>
            Tel : 024 22 23317<br>
             Fax : 024 22 23317</div>
       </div>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        Copyright © 2023 University of Vavuniya.
      
    </div>
   
  </footer>

</html>