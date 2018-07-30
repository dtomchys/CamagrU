<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>CamagrU</title>
    <link href="views/css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="loginbox" onsubmit="return validate();">
        <img src="/views/img/avatar.png" class="avatar">
        <h1>Sign In</h1>
        <form>
            <p>Login</p>
            <input type="text" name="" placeholder="Login:" id="log_id">
            <p>Password</p>
            <input type="password" name="" placeholder="Password:" id="pass_id">
            <input type="submit" name="" value="Login">
            <a href="#">Forget your password?</a>
            <a href="#">Don't have an account?</a>
        </form>
    <script>
        function validate() {
            var userName = document.getElementById("log_id");
            var userPass = document.getElementById("pass_id");

            if (!userName.value) {
                userName.style.border = "2px solid red";
                return false;
            }
            if (!userPass.value) {
                userPass.style.border = "2px solid red";
                return false;
            }
            return true;
        }
    </script>
    </div>
</body>
</html>