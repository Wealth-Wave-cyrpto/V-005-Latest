<?php
include "../Database/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="assets/js/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Assets/CSS/register.css">
    <link rel="stylesheet" href="Assets/Css/phone.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
<div class="container-md">


    <div class="m-4">
        <h1 class="text-body-emphasis">Get started with Wealthwave</h1>
         <p class="fs-5 col-md-8">Fill in the following Credentials, to continue.</p>
    </div>
        

    <form class="row g-3 needs-validation shadow rounded p-3 m-4" id="register-el"  action='register.php' method="POST" novalidate>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">First name</label>
          <input type="text" class="form-control" id="validationCustom01" name="f-name"  required>
          <div class="invalid-feedback">
            First Name is required
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Last name</label>
          <input type="text" class="form-control" id="validationCustom02" name="l-name" required>
          <div class="invalid-feedback">
            Last Name is required
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustomUsername" class="form-label">Username</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="username" required>
            <div class="invalid-feedback">
              Please choose a username.
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom03" class="form-label">Email</label>
          <input type="email" class="form-control" id="validationCustom03" name="email" required>
          <div class="invalid-feedback">
            Please provide a valid Email Address.
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom04" class="form-label">Country</label>
          <input type="text" class="form-control" id="validationCustom04" name="country" required>
          <div class="invalid-feedback">
            Please select a valid state.
          </div>
        </div>

        <div class="col-md-4">
          <label for="validationCustom05" class="form-label">Phone Number</label>
            <!-- Phone to countries -->
            <div class="select-box">
                <div class="selected-option">
                    <div>
                        <span class="iconify" data-icon="flag:gb-4x3"></span>
                        <strong>+44</strong>
                    </div>
                    <input type="tel" name="tel" placeholder="Phone Number" name="phone" class="form-control" id="validationCustom05" required>
                
                </div>
                <div class="options">
                    <input type="text" class="search-box" placeholder="Search Country Name">
                    <ol>
                    </ol>
                </div>
           </div>
    
         <!-- Phone to counmtires -->
    </div>


    <!-- Create password -->
     <div class="col-md-4">
        <label for="validationCustom06" class="form-label">Create Password</label>
        <input type="password" class="form-control pass1"  id="validationCustom06" name="pass1"  required>
        
        <div class="invalid-feedback">
            Please create your password!.
        </div>
     </div>
     
     <!-- Confirm password -->
     <div class="col-md-4">
        <label for="validationCustom07" class="form-label">Confirm Password</label>
        <input type="password" class="form-control pass2"  id="validationCustom07" name="pass2"  required>
       
        <div class="invalid-feedback">
            Please confirm your password!.
        </div>
     </div>

  <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
       </div>

       <div class="col-12">
          <button class="btn btn-primary w-100 " type="submit" name="register">Register</button>
        </div>
  </form>


    <script >
        (() => {
            'use strict'
        
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation');

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }
        
                form.classList.add('was-validated')
            }, false)
            })
        })()

</script>
<script type="text/javascript" src="Assets/Js/phone.js"></script>
</div>
</body>
</html>

<?php


if(isset($_POST["register"])){  



        $first_name = $_POST["f-name"];
        $last_name = $_POST["l-name"];
        $email = $_POST["email"];
        $country = $_POST["country"];
        $phone = $_POST["tel"];
        $username = $_POST["username"];
        $pass = $_POST["pass2"];


        // Section 1 Validation

        if (empty($_POST["f-name"])) {
            die("First Name is Recquired");
            }


            if (empty($_POST["l-name"])) {
            die("Last Name is Recquired");
          }


        if(empty($_POST["email"])){
            die("Registration number is Recquired!");
          }


      /* end of sec-1*/ 

        if (empty($_POST["country"])) {
          die("Country is required");

        }

        if (empty($_POST["tel"])) {
          die("Please Enter Your Phone number");
        }


        if(empty($_POST["username"])){
          echo"Username is recquired!";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
          die("Valid Email is Required!");

        }

      //  Password Validation


          // 1. Atleast 8 characters

          if(strlen($_POST["pass1"])<8){
          die("Password Must be atleast Eight characters");
          }


          //2. Atleast One letter

          if(!preg_match("/[a-z]/i", $_POST["pass1"])){
              die("Password Must Contain atleast one letter");
          }

          // 3. Atleast One number

          if(!preg_match("/[0-9]/i", $_POST["pass1"])){
          die("Password Must Contain atleast one  Number!");
          }

          // Password confirmation

          if( $_POST["pass1"] !== $_POST["pass2"]){
            die("Passwords Must Match");
          }


          try{

            $sql = "INSERT INTO users (First_Name, Last_Name, Email, Country, Phone, Username, Pass)
            VALUES ('$first_name', '$last_name', ' $email', '$country', '$phone', '$username', '$pass')";
            mysqli_query($conn, $sql);

            echo "<script>alert('User Registered successfully!')";

          }catch(mysqli_sql_exception){
          die("User already Exist");
          }

}

mysqli_close($conn);

?>