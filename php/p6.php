<html>
    <head>
        <title>P6</title>
        <meta name="viewport" content="width=device-width, intialized"/>
        <style>
            body{
                background: #e0e5ec;
                font-family: Tahoma, sans-serif;

                
            }
            .form-box{
                border-radius: 20px;
                box-shadow: 0px 0px 10px 1px #c4c3c2;
                margin : auto;
                margin-top: 50px;
                padding : 20px;
                width: 300px;
               
            }
            .btn{
                
                border-radius: 10px;
                border : 3px solid #c4c3c2;
                box-shadow : 0px 0px 10px 1px #c4c3c2;
                width : 100%;
                height : 40px;
                background : transparent;
            }
                            
            h2,p{
                color: black;
                margin-bottom: -3px;
                margin-left : 7px;
                }
            .input-box{
                border: 0px;
                border-radius: 5px;
                box-shadow: 0px 0px 3px 1px #c4c3c2;
                width: 100%;
                margin: 5px;
                padding: 7px;
                background: #e0e5ec;
            }
            </style>
</head>
<body>
    <div class="form-box">
        <h2>BCA Practicle 06</h2>
       
        <hr>
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <p>Name :</p><input class="input-box" type="text" name="name" placeholder="Enter your name">
    <p>Gender : Male<input type="radio" name="gender" value="Male">
              Female<input type="radio" name="gender" value="Female">
                </p>
    <p>DOB :</p>       <input class="input-box" type="date" name="age" >
    <p>Mobile No :</p><input class="input-box" type="number" name="number" placeholder="Enter your number">
    <p>Email :</p><input  class="input-box"type="email" name="email" placeholder="Enter your email">
    <p>Password :</p><input class="input-box" type="password" name="password">
    <p>Address :</p><textarea  class="input-box" type="address" name="address" rows="5" cols="" placeholder="Enter your address "></textarea>
    <br><br><button class="btn" type="submit">SUBMIT</button>
    </form>
    
        </div>
</body>
</html>
<?php 
echo "<br>"."<hr>";
echo "<h6>OUTPUT</h6>";
var_dump($_POST);

echo "<br>"."<br>"."CREATED BY MAX"."<hr>";


?>