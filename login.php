<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="style-login.css">
</head>
<body>
    <div id="card">
        <div id="card-content">
            <div id="card-content">
                <h2>LOGIN APLIKASI</h2>
                <div class="underline-title"></div>
            </div>
            <form action="ceklogin.php" method="post" class="form">
                <label for="user-username" style="padding-top: 13px;">
                    &nbsp;Username
                </label>
                <input type="username" class="form-content" placeholder="Masukkan Username" id="user-username" name="username" autocomplete="on" required>

                <div class="form-border"></div>
                <label for="user-password" style="padding-top:22px ;">
                    &nbsp;Password
                </label>
                <input type="password" id="user-password" class="form-content" placeholder="Masukkan Password" name="password" required>
                <div class="form-border"></div>
                <a href="#">
                    <legend id="forgot-pass">Forgot password?</legend>
                </a>
                <input type="submit" id="submit-btn" name="submit" value="LOGIN">
                <a href="content/tambah_akun.php" id="signup">Don't have account yet?</a>
            </form>
        </div>
    </div>
</body>
</html>
