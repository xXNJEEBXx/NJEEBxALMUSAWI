<!DOCTYPE html>
<html>


<head>
    <title>test 2</title>


    <link rel="stylesheet" href="stayles\fontawesome-free-5.15.1-web\css\all.css">
    <link rel="stylesheet" href="stayles\xXNJEEBXx.css">
    <link rel="stylesheet" href="stayles\stayle.css">
    <link rel="stylesheet" href="stayles\stayle-media.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <meta name=" viewport" content="width=device-width, initial-scale=0.41, maximum-scale=1">
</head>

<body>
    <?php  include 'menu_bar.html'; ?>
    <div class="page-warapper inline-block width100 flex justify-content-center   ">
        <div class="align-items-center box-shadow3 width600px margin-block80px ">
            <div class="flex justify-content-center margin-top20px">
                <button
                    class="sigin-in-button height50px width250px font-size30px background-white color-blue cursor tab tab-active transition500">Sign
                    in
                </button>

                <button
                    class="login-button height50px width250px font-size30px background-white color-blue cursor tab  transition500">Login
                </button>
            </div>
            <form action="php\php_rigster.php" method="post">
                <div class="sigin-in text-align-center background-white padding15px height600px  ">
                    <h1 class="font-size50px">Welcome</h1><br>
                    <label class="inline-block text-align-left width500px font-size40px">Email</label><br>
                    <input placeholder="Email" name="sigin-in-email"
                        class="width500px height40px margin-bottom20px font-size20px background-gray2 border-none padding5px"><br>
                    <label class="inline-block text-align-left width500px font-size40px">Password</label><br>
                    <input placeholder="Password" name="sigin-password"
                        class="width500px height40px margin-bottom20px font-size20px background-gray2 border-none padding5px"><br>
                    <label class="inline-block text-align-left width500px font-size40px">Re-Password</label><br>
                    <input placeholder="Re-Password"
                        class="width500px height40px margin-bottom20px font-size20px background-gray2 border-none padding5px"><br>
                    <label class="font-size23px inline-block text-align-left width500px margin-bottom7px"><input
                            type="checkbox">by prees
                        this</label><br>
                    <button
                        class="width500px margin-bottom20px font-size30px background-blue color-white height50px hover-background-blue2 cursor transition500 focus-box-shadow-blue2">Sign
                        up
                    </button>
                    <form>
                </div>
                <div class="login text-align-center background-white padding15px height600px  display-none">
                    <h1 class="font-size50px">Welcome Back</h1><br>
                    <label class="inline-block text-align-left width500px font-size40px">Email</label><br>
                    <input placeholder="Email"
                        class="width500px height40px margin-bottom20px font-size20px background-gray2 border-none padding5px"><br>
                    <label class="inline-block text-align-left width500px font-size40px">Password</label><br>
                    <input placeholder="Password"
                        class="width500px height40px margin-bottom20px font-size20px background-gray2 border-none padding5px"><br>
                    <a
                        class="width500px inline-block text-align-right margin-bottom7px cursor hover-color-blue transition500">Forgot
                        Password?</a>
                    <button
                        class="width500px margin-bottom20px font-size30px background-blue color-white height50px hover-background-blue2 cursor transition500 focus-box-shadow-blue2">Login

                    </button>
                </div>

        </div>




    </div>
    </div>


    </div>
    <?php include 'footer.html';?>



    <script src="js\java-secript.js"></script>


</body>

</html>