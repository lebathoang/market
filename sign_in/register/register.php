<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../index.css">
</head>

<body>
    <div class="wrap">
        <div class="header">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3On_D3e7Z8VZPcmnMMxjlhU8MjrfDZlt8VMcW_q2YUV5ee6IEO9KvzfZqEgQk39O3VDM&usqp=CAU"
                alt="">
            <h2>Register Account</h2>
        </div>
        <form action="./handle_register.php" method="post">
            <table>
                <tr>
                    <td>
                        <input type="text" name="fullname" placeholder="Fullname">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="username" placeholder="Username">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="email" name="email" placeholder="Email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="address" placeholder="Address">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="password" placeholder="Password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="confirm_password" placeholder="Confirm_password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="button" type="submit" value="Register" name="register">
                    </td>
                </tr>
            </table>
        </form>
        <div class="footer">
            <span>Ban da co tai khoan? Dang nhap
                <a href="../login/login.php">Tai day?</a>
            </span>
        </div>
    </div>
</body>

</html>