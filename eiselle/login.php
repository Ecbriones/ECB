<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to my website</title>
    <style>
        @keyframes color {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "poppins", sans-serif;
        }

        body {
            height: 100vh;
            width: 100%;
            background: linear-gradient(45deg, #7b511b, #FAF4B7, #CBB279, #E9B384, #BBAB8C, #E9DAC1);
            background-size: 300% 300%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center; /* Centering horizontally */
            padding: 70px;
            position: relative;
            animation: color 12s ease-in-out infinite; 
        }

        .wrapper {
            width: 420px;
            background: #ffd69f;
            color: rgb(59, 52, 8);
            border-radius:  10px;
            padding: 30px 40px;
        }

        .wrapper h1 {
            font-size: 45px;
            text-align: center;
        }

        .wrapper h2 {
            font-size: 20px;
            text-align: center;
            padding-top: 30px;
        }

        .wrapper .input-box {
            position: relative;
            width: 100%;
            height: 50px;
            margin: 30px 0;
        }

        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(53, 44, 44, 0.2);
            border-radius: 40px;
            font-size: 16px;
            color: #000000;
            padding: 20px 45px 20px 20px;
        }

        .input-box ::placeholder {
            color: #000000;
        }

        .input-box i {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
        }

        .wrapper .remember-forgot {
            display: flex;
            justify-content: space-between;
            font-size: 14.5px;
            margin: -15px 0 15px;
        }

        .wrapper .remember-forgot label input {
            accent-color: #bbbaba;
            margin-right: 3px;
        }

        .remember-forgot a {
            color: #fff;
            text-decoration: none;
        }

        .remember-forgot a:hover {
            text-decoration: underline;
        }

        .wrapper .button {
            width: 100%;
            height: 50px;
            background: #fff;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            cursor: pointer;
            font-size: 16px;
            color: #333;
            font-weight: 600;
        }

        .wrapper .Register-link {
            font-size: 14.5px;
            text-align: center;
            margin: 20px;
        }

        .Register-link p a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
        }

        .Register-link p a:hover {
            text-decoration: underline;
        }
        .error-message {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <form action="loginaction.php" method="POST">
                <h1>Login</h1>
                <h2><center>Hello! Please Login to your Account.</center></h2>
                <?php if(isset($_GET['error'])) { ?>
                    <p style="color:red;text-align:center;" class="error-message"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <?php if(isset($_GET['account_created']) && $_GET['account_created'] == 1) { ?>
                    <p style="color:green;text-align:center;margin-top:15px;" class="success-message">Account created successfully!</p>
                <?php } ?>
                <div class="input-box">
                    <input type="text" name="email_address" placeholder="Email Address" required>
                </div>
                <div class="input-box">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <button type="submit" class="button">Login</button>
                <div class="Register-link">
                    <p>Don't have an account? <a href="registration.php">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
