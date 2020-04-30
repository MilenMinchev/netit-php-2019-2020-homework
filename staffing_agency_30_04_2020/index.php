<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Staffing Agency</title>
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/public.css">
    </head>
    <body>
        
        <div id="application-header" class="web-header">
            <h1 class="logo">Staffing Agency</h1>
        </div>
            
        <div id="blog">
            <div id="category-header" class="component">
                <ul class="category-list">
                    <li class="category">Employ</li>
                    <li class="category">Employer</li>
                    <li class="category">Training</li>
                    <li class="category">Social programs</li>
                </ul>
            </div>
                        
            <div id="content" class="component"></div>
        </div>
        
<!--           <div class="post">
                <header class="post-title">Season work</header>
                <div class="post-timestamp">1 hour ago</div>
                <a href="#"> - </a>
            </div>
            
            <div class="post">
                <header class="post-title">Work at home</header>
                <div class="post-timestamp">3 hour ago</div>
                <a href="#"> - </a>
            </div>
            
            <div class="post">
                <header class="post-title">Cooking course</header>
                <div class="post-timestamp">4 hour ago</div>
                <a href="#"> - </a>
            </div>-->        
        
        
        <script src="scripts/client/netitquery.js"></script>
        <script src="scripts/vendor/jquery.js"></script>
        <script src="scripts/application/index.js"></script>
    </body>
</html>
<?php
    include './external_autoload';
    $indexControllerReference = new controllers\IndexController();
    $indexControllerReference->index();
  //  (new controllers\IndexController())->index();
?>


<!--
       /* $mysqlConnection = mysqli_connect("localhost","root","","staffing_agency");
        //var_dump($mysqlConnection);
               
                //staffing_agency.hr
        
                $fname_hr                    = $_POST['fname_hr'];
                $lname_hr                    = $_POST['lname_hr'];
                $mobil_hr                    = $_POST['mobil_hr'];
                $email_hr                    = $_POST['email_hr'];
                $role_hr                     = $_POST['role_hr'];
                $password_hr                 = $_POST['password_hr'];
                
                               
                $query = "INSERT INTO staffing_agency.hr('fname_hr','lname_hr','mobil_hr','email_hr','role_hr','password_hr') 
                          VALUES ('$fname_hr','$lname_hr','$mobil_hr','$email_hr','$role_hr','$password_hr')";
                
                mysqli_query($mysqlConnection,$query);
                        
                /*if(!mysqli_query($mysqlConnection,$query)){
                    echo 'Query failed';
                    echo mysql_error($link);
                }
                else {
                    echo "Success registrion";
                }
                
                //staffing_agency.employ
                
                $fname                    = $_POST['fname'];
                $lname                    = $_POST['lname'];
                $age                      = $_POST['age'];
                $sex                      = $_POST['sex'];
                $address                  = $_POST['address'];
                $mobil                    = $_POST['mobil'];
                $email                    = $_POST['email'];
                $education                = $_POST['education'];
                $role                     = $_POST['role'];
                $department               = $_POST['department'];
                $experience               = $_POST['experience'];
                $password                 = $_POST['password'];
                
                //staffing_agency.employer
                 
                $company                  = $_POST['company'];
                $presentetion             = $_POST['presentetion']; 
                $staff_fname              = $_POST['staff_fname'];
                $staff_lname              = $_POST['staff_lname'];
                $mobil_persons            = $_POST['mobil_persons'];
                $email_persons            = $_POST['email_persons'];
                $free_job                 = $_POST['free_job'];
                $department_free          = $_POST['department_free'];
                $sex_worker               = $_POST['sex_worker'];
                $experience_worker        = $_POST['experience_worker'];
                $password_staff           = $_POST['password_staff']; */
        
        ?>-->
       <!--  <div class="section">
            <h3>Staffing agency</h3>
            <h3>HR</h3>
            <form method="POST" id="registration_form_hr">
                <input type="text" name="fname_hr" placeholder="First name"/>
                <input type="text" name="lname_hr" placeholder="Last name"/>
                <input type="text" name="email_hr" placeholder="E-mail"/>
                <input type="text" name="mobile_hr" placeholder="Mobile phone"/>
                <input type="text" name="role_hr" placeholder="Role"/>
                <input type="text" name="password_hr" placeholder="Password"/>
                <input type="hidden" name="registration_hr" value="1"/>
                <input type="submit" value="Register"/>       
            </form>
            <h3>Employ</h3>
            <form method="POST" id="registration_form_employ">
                <input type="text" name="fname" placeholder="First name"/>
                <input type="text" name="lname" placeholder="Last name"/>
                <input type="text" name="age" placeholder="Age"/>
                <label>male</label>
                <input type="radio" value="advice" name="Sex"/>  
                <label>female</label>
                <input type="radio" value="advice" name="Sex"/>
                <input type="text" name="email" placeholder="E-mail"/>
                <input type="text" name="mobile" placeholder="Mobile phone"/>
                <input type="text" name="address" placeholder="Address"/>
                <input type="text" name="role" placeholder="Role"/>
                <input type="text" name="department" placeholder="Department"/>
                <input type="text" name="experience" placeholder="Experience"/>
                <input type="text" name="password" placeholder="Password"/>
                <input type="hidden" name="registration_employ" value="2"/>
                <input type="submit" value="Register"/>       
            </form>
            <h3>Employer</h3>
            <form method="POST" id="registration_form_employer">
                <input type="text" name="company" placeholder="Company"/>              
                <input type="text" name="presentation" placeholder="Presentation"/>
                <input type="text" name="staff_fname" placeholder="First name"/>
                <input type="text" name="staff_lname" placeholder="Last name"/>
                <input type="text" name="mobail_persons" placeholder="Mobile phone"/>
                <input type="text" name="email_persons" placeholder="E-mail"/>
                <input type="text" name="free_job" placeholder="Free job"/>
                <input type="text" name="department_free" placeholder="Department"/>
                <input type="text" name="education_worker" placeholder="Education"/>
                <input type="text" name="sex_worker" placeholder="Sex"/>
                <input type="text" name="experience_worker" placeholder="Experience"/>
                <input type="text" name="password_staff" placeholder="Password"/>
                <input type="hidden" name="registration_employer" value="3"/>
                <input type="submit" value="Register"/>       
            </form>
        </div>
    </body>
</html> -->
