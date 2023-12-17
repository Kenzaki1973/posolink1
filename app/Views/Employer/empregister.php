<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PesoLink - Employer Registration</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/registeradem/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/registeradem/css/style.css">
</head>
<body class="img js-fullheight" style="background-image: url(assets/loginadem/images/bg.jpg);">

    <div class="main">

        <h1>Sign up</h1>
        <div class="container">
            <div class="sign-up-content">
               
                    <h2>Employer Registration</h2>
           
        
                    <form action="<?= site_url('/registeremployer') ?>" method="post" enctype="multipart/form-data">
                    
                    <div class="form-textbox">
                        <input type="text" name="employer_id" placeholder="Employer ID Number" />
                    </div>
                    <div class="form-textbox">
                        <input type="text" name="company_name" id="email" placeholder="Company Name"/>
                    </div>

                    <div class="form-textbox">
                        <input type="text" name="company_address" id="pass" placeholder="Company Address" />
                    </div>
                    <div class="form-textbox">
                        <input type="text" name="full_name" id="pass" placeholder="Full Name" />
                    </div>
                    <div class="form-textbox">
                        <input type="text" name="position" id="pass" placeholder="Position" />
                    </div>
                    <div class="form-textbox">
                        <input type="text" name="address" id="pass" placeholder="Address" />
                    </div>
                    <div class="form-textbox">
                        <input type="text" name="contactnum" id="pass" placeholder="Contact Number" />
                    </div>
                    <div class="form-textbox">
                        <input type="text" name="email" id="pass" placeholder="Email Address" />
                    </div>
                    <div class="form-textbox">
                        <input type="password" name="password" id="pass" placeholder="Password" />
                    </div>

                    
                    <div class="form-textbox">
                        <input type="file" name="empprofile" placeholder="Employer Profile"/>
                    </div>

                   <br>

                    <div class="form-textbox text-center">
                        <button type="submit" class="submit" id="submit">Register Account</button>
                    </div>
                </form>
                <br>

                <p class="loginhere">
                    Already have an account ?<a href="emplogin" class="loginhere-link"> Log in</a>
                </p>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="assets/registeradem/vendor/jquery/jquery.min.js"></script>
    <script src="assets/registeradem/js/main.js"></script>

    
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>