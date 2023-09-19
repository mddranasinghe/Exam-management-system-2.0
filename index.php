
<!DOCTYPE html>
<html>
<head>
    <title>Examination admin panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        /* Custom styles for the webpage */
        body {
            background-color:  #e0dbdf;/* Background color */
        }
        .form-bg {
            background-color: #f4f6f8; /* Form background color */
        }
        .navbar {
            background-color: #4b0150; /* Navbar background color */
        }
        .navbar .nav-link {
            color: white; /* Text color in the navbar */
            text-align: center; /* Center align the link in the navbar */
        }
        .navbar .nav-link:hover {
            color: yellow; /* Hover color for the link */
        }

    
        .topic {
            text-align: center;
            color: #350339;
            font-size: 40px;
            margin-top: 20px;
        }
        .tpic{
            border-style: solid;
            /*border-color: #350339;*/
            width: 700px;
            margin-left: 410px;
            background-color: #d8d5d8;
            margin-top: 50px;
            height: 100px;
            border-radius: 20px;
        }
        .wlc{
            text-align: center;
            color: #ffffff;
        }
        .click{
            text-align: center;
            color: #ffffff;
        }
        .lnk{
            text-align: center;
            text-decoration: none;
            color: #ffffff;
        }

        .NavPhoto{
            width="600"; 
            height="145"
        }
         
     /*   
        
        @media (max-width: 480px){
        .NavPhoto {
            width: 100%; 
            height: auto;
        }
        #SelectR{
            width: 35vw;
        }

        #FormSize{
            width: 60vw; 
            height: auto;
            margin: auto;
        }
        }
*/
    </style>
</head>
<body>
        <header class="header">
                    <div class="navbar-brand-wpz" >
                        <a href="https://vau.ac.lk/" class="custom-logo-link" rel="home" itemprop="url">
                            <img class="NavPhoto" id="logo-img" src="https://vau.ac.lk/wp-content/uploads/2021/07/cropped-UoV_Logo.png" class="custom-logo" alt="University of Vavuniya" decoding="async" loading="lazy" itemprop="logo" srcset="https://vau.ac.lk/wp-content/uploads/2021/07/cropped-UoV_Logo.png 742w, https://vau.ac.lk/wp-content/uploads/2021/07/cropped-UoV_Logo-300x80.png 300w, https://vau.ac.lk/wp-content/uploads/2021/07/cropped-UoV_Logo-624x166.png 624w" sizes="(max-width: 742px) 100vw, 742px" /></a>
    </div>
        </header>

<nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand mx-auto" href="#">LOGIN</a>
    </nav>
    <div style="margin-top:-120px">
    <div class="container d-flex justify-content-center align-items-center"
        style="min-height: 100vh; background-color: #e0dbdf;">
        <!-- Rest of your login form code -->
        <form id="FormSize" class="border shadow p-3 rounded form-bg"
            action="check-login.php" 
            method="post" 
            style="width: 450px;">
    
            <div class="mb-3">
                <label for="username" 
                    class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" >
            </div>
            <div class="mb-3">
                <label for="password" 
                    class="form-label">Password</label>
                <input type="password" 
                    name="password" 
                    class="form-control" 
                    id="password">
            </div>
            <div class="mb-1">
                <label class="form-label">Role:</label>
            </div>
            <select class="form-select mb-3"
                    name="role" 
                    aria-label="Default select example">

                <option selected value="Student" id="SelectR">Student</option>
                <option value="DR" id="SelectR">DR</option>
                <option value="HOD" id="SelectR">HOD</option>
                <option value="Lecturer" id="SelectR">Lecturer</option>

            </select>
            <button type="submit" 
                    class="btn btn-primary d-block mx-auto" name="submit">LOGIN</button>
        </form>
    </div>


<footer class="bg-light fixed-bottom">
            <p class="text-center fw-bold">Copyright © 2023 University of Vavuniya</p>
        </footer>

