<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <?php $url = 'http://localhost/admin_panel'; ?>
    <?php $url_route = 'http://localhost/admin_panel/admin'; ?>
    <link rel="stylesheet" href="<?php echo $url; ?>/Assets/Css/style.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/Assets/Css/media.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>
    <div class="gc_login_main">
        <div class="container-fluid gc_log">
            <div class="form">
                <img src="<?php echo $url; ?>\Assets\Images\header_logo.png" alt="" class="img-fluid mb-md-4 md-2">
                <h2 class="mt-3">Login</h2>
                <div class="input">
                    <div class="inputBox my-4">
                        <label for="email">Email ID</label>
                        <div class="input-group-customize  mb-3">
                            <span class="input-group-text px-2" id="basic-addon1"><img
                                    src="<?php echo $url; ?>\Assets\Images\login_user.png" alt=""></span>
                            <input type="email" class="form-control" id="email" placeholder="EmailID"
                                aria-label="Email ID" aria-describedby="basic-addon1" autofocus>
                        </div>
                        <!-- <div class="error-message text-danger" id="username-error"></div> -->
                    </div>
                    
                    <div class="inputBox pt-2 text-center w-100">
                        <a href="./login.php" class="btn gc_btn w-100">Submit</a>
                    </div>
                </div>
            </div>



        </div>
    </div>
    </div>
    <script>
        function validateForm() {
            event.preventDefault();
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var usernameError = document.getElementById("username-error");
            var passwordError = document.getElementById("password-error");
            usernameError.innerText = "";
            passwordError.innerText = "";
            if (username.trim() === "") {
                usernameError.innerText = "Please enter a username.";
                return false;
            } else if (username.length <= 3) {
                usernameError.innerText = 'Enter a valid username';
                return false;
            }
            if (password.trim() === "") {
                passwordError.innerText = "Please enter a password.";
                return false;
            } else if (password.length <= 6) {
                passwordError.innerText = 'Enter a valid password';
                return false;
            }
            window.location.href = "<?php echo $url_route; ?>";
        }
    </script>

</body>

</html>