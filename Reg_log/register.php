<?php

include "../Database/connect.php";

if(isset($_POST['register'])){
     $f_name = filter_input(INPUT_POST, "f-name", FILTER_SANITIZE_SPECIAL_CHARS);
     $l_name = filter_input(INPUT_POST, "l-name", FILTER_SANITIZE_SPECIAL_CHARS);
     $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
     $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
     $country = filter_input(INPUT_POST, "country", FILTER_SANITIZE_SPECIAL_CHARS);
     $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);
     $pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);

  
            try{                 
                $sql = "INSERT INTO Users(First_Name, Last_Name, Username, Email, Country, Phone, Pass)
                VALUES('$f_name', '$l_name', '$username', '$email', '$country', '$phone', '$pass')";
                  mysqli_query($conn, $sql);              
                  echo"<div class='alert alert-success' role='alert'>
                            Registered sucessfully! You can now login!
                          </div>";

            }catch(mysqli_sql_exception){
                    echo"<div class='alert alert-danger' role='alert'>
                           User already Exist! Please check the Username,Email or the phone number!
                          </div>";          
                  }

          mysqli_close($conn);
   }
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

    <!-- Fontasome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
</head>
<body class="align-items-center py-4 bg-body-tertiary">
<div class="container-md">
    <div class="m-4">
        <h1 class="text-body-emphasis">Get started with Wealthwave</h1>
         <p class="fs-5 col-md-8">Fill in the following Credentials, to continue.</p>
   </div>
    <form class="row g-3 needs-validation shadow rounded p-3 m-4" id="register-el"  action='<?php $_SERVER['PHP_SELF']?>' method="POST" novalidate>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">First name</label>
          <input type="text" class="form-control" id="validationCustom01" name="f-name" required>
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
                    <input type="tel" placeholder="Phone Number" name="phone" class="form-control" id="validationCustom05" required>
                
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
    <div class="row">
    <label for="validationCustom06" class="form-label">Create Password</label>
      <div class="col-6">
        <div class="input-group d-flex">
          <span
            class="input-group-text border-0"
            id="password"
            >
            <i class="fas fa-lock fa-2x me-1"></i>
        </span>
          <input
        type="password"
        name="pass"
        class="form-control rounded mt-1"
        placeholder="Type your password"
        aria-label="password"
        aria-describedby="password"
        id="password-input"
      />
      <div class="valid-feedback">Good</div>
      <div class="invalid-feedback">Wrong</div>
    </div>
  </div>

      <div class="col-6 mt-4 mt-xxl-0 w-auto h-auto">

        <div
          data-mdb-alert-init class="alert px-4 py-3 mb-0 d-none"
          role="alert"
          data-mdb-color="warning"
          id="password-alert"
          >
              <ul class="list-unstyled mb-0">
            <li class="requirements leng">
              <i class="fas fa-check text-success me-2"></i>
              <i class="fas fa-times text-danger me-3"></i>
              Your password must have at least 8 chars</li>
            <li class="requirements big-letter">
              <i class="fas fa-check text-success me-2"></i>
              <i class="fas fa-times text-danger me-3"></i>
              Your password must have at least 1 big letter.</li>
            <li class="requirements num">
              <i class="fas fa-check text-success me-2"></i>
              <i class="fas fa-times text-danger me-3"></i>
              Your password must have at least 1 number.</li>
            <li class="requirements special-char">
              <i class="fas fa-check text-success me-2"></i>
              <i class="fas fa-times text-danger me-3"></i>
              Your password must have at least 1 special char.</li>
          </ul>
        </div>
      </div>
  </div>     


      <style>
              .wrong .fa-check {
                display: none;
            }
            .good .fa-times {
                display: none;
            }
            .valid-feedback,
            .invalid-feedback {
              margin-left: calc(2em + 0.25rem + 1.5rem);
            }
      </style>

    <!-- Password End -->

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



// Password start

  addEventListener("DOMContentLoaded", (event) => {
  const password = document.getElementById("password-input");
  const passwordAlert = document.getElementById("password-alert");
  const requirements = document.querySelectorAll(".requirements");
  const leng = document.querySelector(".leng");
  const bigLetter = document.querySelector(".big-letter");
  const num = document.querySelector(".num");
  const specialChar = document.querySelector(".special-char");

  requirements.forEach((element) => element.classList.add("wrong"));

  password.addEventListener("focus", () => {
      passwordAlert.classList.remove("d-none");
      if (!password.classList.contains("is-valid")) {
          password.classList.add("is-invalid");
      }
  });

  password.addEventListener("input", () => {
      const value = password.value;
      const isLengthValid = value.length >= 8;
      const hasUpperCase = /[A-Z]/.test(value);
      const hasNumber = /\d/.test(value);
      const hasSpecialChar = /[!@#$%^&*()\[\]{}\\|;:'",<.>/?`~]/.test(value);

      leng.classList.toggle("good", isLengthValid);
      leng.classList.toggle("wrong", !isLengthValid);
      bigLetter.classList.toggle("good", hasUpperCase);
      bigLetter.classList.toggle("wrong", !hasUpperCase);
      num.classList.toggle("good", hasNumber);
      num.classList.toggle("wrong", !hasNumber);
      specialChar.classList.toggle("good", hasSpecialChar);
      specialChar.classList.toggle("wrong", !hasSpecialChar);

      const isPasswordValid = isLengthValid && hasUpperCase && hasNumber && hasSpecialChar;

      if (isPasswordValid) {
          password.classList.remove("is-invalid");
          password.classList.add("is-valid");

          requirements.forEach((element) => {
              element.classList.remove("wrong");
              element.classList.add("good");
          });

          passwordAlert.classList.remove("alert-warning");
          passwordAlert.classList.add("alert-success");
      } else {
          password.classList.remove("is-valid");
          password.classList.add("is-invalid");

          passwordAlert.classList.add("alert-warning");
          passwordAlert.classList.remove("alert-success");
      }
  });

  password.addEventListener("blur", () => {
      passwordAlert.classList.add("d-none");
  });
});


// Password end


</script>
<script type="text/javascript" src="Assets/Js/phone.js"></script>
</div>
</body>
</html>


