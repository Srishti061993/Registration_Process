<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-state=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/showpassword.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script type="text/javascript">
    $("#password").password('toggle');
    $("#pass").password('toggle');
    </script>
    <script src="js/my.js"></script>
    <script>
        function myfunc()
        {
            alert("1. Password must have 8 characters.\n2. It must have atleast one uppercase alphabet.\n3. It must have atleast one lowercase alphabet.\n4. It must have atleast one special character/digit.");
        }
    </script>
    <script>
function validateall()
{
    if (fieldName() && fieldEmailId() && fieldTel()  && fieldUniversity() && fieldCollege() &&fieldPassword() && fieldConformPassword())
    {
        document.forms.form1.submit();
    }
    else
        return false;
}
function fieldName(){
    var alphabetregex = /^[A-Za-z ]*$/;
    if(form1.name.value==""){
        document.form1.name.focus();
        document.form1.name.setCustomValidity("Name cannot be left blank");
        return false;
    }
    if(!(form1.name.value).match(alphabetregex)){
        document.form1.name.focus();
        document.form1.name.setCustomValidity("Name should have alphabets only");
        return false;
    }
    if((form1.name.value).length<2||(form1.name.value).length>30)
    {
        document.form1.name.focus();
        document.form1.name.setCustomValidity("Name must have 2 to 30 characters");
        return false;
    }
    else
    return true;
}
function fieldTel()
{
    if(form1.contact.value==""){
        document.form1.contact.focus();
        document.form1.contact.setCustomValidity("Contact number cannot be left blank");
        document.form1.contact.setCustomValidity("");
        return false;
    }
    if (isNaN(form1.contact.value))
    {
        document.form1.contact.focus();
        document.form1.contact.setCustomValidity("Invalid Contact Number");
        return false;
    }
    if((form1.contact.value).length<10){
        document.form1.contact.focus();
        document.form1.contact.setCustomValidity("Contact Number must have 10 digits");
        return false;
    }
    else
    return true;
}
function fieldEmailId()
{
  if(form1.email.value==""){
        document.form1.email.focus();
        document.form1.email.setCustomValidity("Email Id cannot be left blank");
        return false;
    }  
    else 
        return true;
}
function fieldUniversity()
{
    var alphabetregex = /^[A-Za-z ]*$/;
    if(form1.university.value==""){
        document.form1.university.focus();
        document.form1.university.setCustomValidity("University name cannot be left blank");
        return false;
    }  
    if(!(form1.university.value).match(alphabetregex)){
        document.form1.university.focus();
        document.form1.university.setCustomValidity("University name should have alphabets only");
        return false;
    }
    else 
        return true;
}
function fieldCollege()
{
  var alphabetregex = /^[A-Za-z ]*$/;
    if(form1.college.value==""){
        document.form1.college.focus();
        document.form1.college.setCustomValidity("College name cannot be left blank");
        return false;
    } 
    if(!(form1.college.value).match(alphabetregex)){
        document.form1.college.focus();
        document.form1.college.setCustomValidity("College name should have alphabets only");
        return false;
    }
    else 
        return true;
}
function fieldPassword()
{
  if(form1.password.value==""){
        document.form1.password.focus();
        document.form1.password.setCustomValidity("Password cannot be left blank");
        return false;
    }  
    else 
        return true;
}
function fieldConformPassword()
{
  if(form1.pass.value==""){
        document.form1.pass.focus();
        document.form1.pass.setCustomValidity("Conform Password cannot be left blank");
        return false;
    }  
    else 
        return true;  
}

    </script>
    <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>
<link href="https://code.jquery.com/ui/1.11.2/themes/black-tie/jquery-ui.css" rel="stylesheet"/>
</head>
<body>
<img id="bg">
    <div class="container-fluid" >
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <form id="form1" name="form1" method="post" action="mailer/omg.php" onsubmit="return validateall();">
                    <h1 style="color:white;">Sign-Up Form</h1>
                    <div id="mess"> </div>
                    <div class="form-group">
                        <label>Name</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" name="name" id="name"  placeholder="Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-envelope"></i></span>
                        <input type="email" class="form-control" placeholder="Email" name="email" id="email"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Contact No.</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-phone"></i></span>
                                <input type="tel" class="form-control" placeholder="Contact Number" name="contact" id="contact" maxlength="10" minlength="10" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>University</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-university"></i></span>
                        <input type="text" class="form-control" placeholder="University" name="university" id="university" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>College</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-hotel"></i></span>
                                <input type="text" class="form-control" placeholder="College" name="college" id="college" required>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label>Course</label>
                        <select id="course" name="course" style="width:100%; height:35px;" required>
                            <option value="B.Tech" style="background:#C0C0C0">B.Tech.</option>
                            <option value="B.Arch." >B.Arch.</option>
                            <option value="MCA" style="background:#C0C0C0">MCA</option>
                        </select>
                    </div>
                    <div class="form-group" >
                        <label>Year</label>
                        <select id="year" name="year" style="width:100%;height:35px;" required>
                            <option value="1" style="background:#C0C0C0">1st year</option>
                            <option value="2" >2nd year</option>
                            <option value="3" style="background:#C0C0C0">3rd year</option>
                            <option value="4">4th year</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-group col-xs-12">
                            <span class="input-group-addon"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Password" name="password"  data-toggle="password" id="password" 
                                pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required><span class="input-group-addon"><div onclick="myfunc()" title="Click here to know password policy."><i class="fas fa-info-circle"></i></div></span>
                        </div>
                    </div>
                    <div class="form-group">
                    <label>Confirm Password</label>
                        <div class="input-group col-xs-12">
                            <span class="input-group-addon"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Re-enter Password" id="pass" name="pass" data-toggle="password" required>
                        </div>
                        <br>
                        <div style="background-color: white;">
                        <span id="message"> </span>
                    </div>
                    </div>
                    <br>
                    <button type="submit" class="btn-success btn-block"  onclick="validateall()" >Sign up</button>
                </form>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>
    
</body>
</html>