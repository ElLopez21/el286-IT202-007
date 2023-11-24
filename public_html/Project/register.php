<?php
require(__DIR__ . "/../../partials/nav.php");
reset_session();
?>
<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="email">Email</label>
        <input type="text" name="email" required />
    </div>
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" required maxlength="30" />
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password" required minlength="8" />
    </div>
    <div>
        <label for="confirm">Confirm</label>
        <input type="password" name="confirm" required minlength="8" />
    </div>
    <input type="submit" value="Register" />
</form>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success
        let email = form.email.value;
        let emailReg = /^([a-z0-9_\.\+-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
        let username = form.username.value;
        let usernameReg = /^[a-z0-9_-]{3,16}$/;
        let password = form.password.value;
        let passwordReg = /^.{8,}$/;
        let confirmPass = form.confirm.value;

        if (email.trim() === '' || email.trim() == null){
            //alert("Email can't be empty");
            flash("Email can't be empty", "warning");
            return false;
        } else if(!emailReg.test(email)){
            //alert("Invalid Email");
            flash("Invalid Email", "warning");
            return false;
        }
        if (username.trim() === '' || username.trim() == null){
            //alert("Username must not be empty");
            flash("Username must not be empty", "warning");
            return false;
        } else if(!usernameReg.test(username)){
            //alert("Username must only contain 3-16 characters a-z, 0-9, _ , or -");
            flash("Username must only contain 3-16 characters a-z, 0-9, _ , or -", "warning");
            return false;
        }
        if(password.trim() === '' || password.trim() == null){
            //alert("Password must not be empty");
            flash("Password must not be empty", "warning");

            return false;
        }else if(!passwordReg.test(password)){
            //alert("Password must be at least 8 characters");
            flash("Password must be at least 8 characters", "warning");
            return false;
        }
        if(confirmPass.trim() ==='' || confirmPass.trim() == null){
            //alert("Confirm password can't be empty");
            flash("Confirm password can't be empty", "warning");
            return false;
        }else if(password.length > 0 && password !== confirmPass){
            //alert("Password must match");
            flash("Password and Confrim password must match", "warning");
            return false;
        }

        return true;
    }
</script>
<?php
//TODO 2: add PHP Code
if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"]) && isset($_POST["username"])) {
    $email = se($_POST, "email", "", false);
    $password = se($_POST, "password", "", false);
    $confirm = se($_POST, "confirm", "", false);
    $username = se($_POST, "username", "", false);
    //TODO 3
    $hasError = false;
    if (empty($email)) {
        flash("Email must not be empty", "danger");
        $hasError = true;
    }
    //sanitize
    $email = sanitize_email($email);
    //validate
    if (!is_valid_email($email)) {
        flash("Invalid email address", "danger");
        $hasError = true;
    }
    if (!is_valid_username($username)) {
        flash("Username must only contain 3-16 characters a-z, 0-9, _, or -", "danger");
        $hasError = true;
    }
    if (empty($password)) {
        flash("password must not be empty", "danger");
        $hasError = true;
    }
    if (empty($confirm)) {
        flash("Confirm password must not be empty", "danger");
        $hasError = true;
    }
    if (!is_valid_password($password)) {
        flash("Password too short", "danger");
        $hasError = true;
    }
    if (
        strlen($password) > 0 && $password !== $confirm
    ) {
        flash("Passwords must match", "danger");
        $hasError = true;
    }
    if (!$hasError) {
        //TODO 4
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Users (email, password, username) VALUES(:email, :password, :username)");
        try {
            $stmt->execute([":email" => $email, ":password" => $hash, ":username" => $username]);
            flash("Successfully registered!", "success");
        } catch (Exception $e) {
            users_check_duplicate($e->errorInfo);
        }
    }
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>