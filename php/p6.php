<html>

<head>
    <title>P6</title>
</head>

<body>
        <h2>BCA Practicle 06</h2>

        <hr>
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <p>Name :</p><input type="text" name="name" placeholder="Enter your name">
            <p>Gender : Male<input type="radio" name="gender" value="Male">
                Female<input type="radio" name="gender" value="Female">
            </p>
            <p>DOB :</p> <input type="date" name="age">
            <p>Mobile No :</p><input  type="num" name="num" placeholder="Enter your number">
            <p>Email :</p><input  type="email" name="email" placeholder="Enter your email">
            <p>Password :</p><input  type="password" name="password">
            <p>Address :</p><textarea  type="address" name="address" rows="5" cols=""
                placeholder="Enter your address "></textarea>
            <br><br><button class="btn" type="submit">SUBMIT</button>
        </form>

    </div>
</body>

</html>
<?php
echo "<br>" . "<hr>";
echo "<h6>OUTPUT</h6>";
print_r($_POST);
?>