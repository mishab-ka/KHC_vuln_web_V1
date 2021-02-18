<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">
    <title>Login KHC</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Josefin Sans', sans-serif;

        }
        /* body{
            background-image: url("https://i.ibb.co/Zfbm2DC/pexels-anete-lusina-6331043.jpg");
            background; flex;
        } */
        body{
            background: #151320;
            margin: 0;
        }
        .main_div{
            width: 100%;
            height: 100vh;
            /* position: relative; */
        }
        .box{
            width: 400px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 50px;
            background: #1c1b29;
            border-radius: 10px;
            box-shadow: 0 0 30px rgba(0,0,0,1);
            
        }
        .box h1{
            margin-bottom: 5px;
            color: #fff;
            text-align: center;
            text-transform: capitalize;

        }
        .box p{
            margin-bottom: 40px;
            color: #fff;
            

        }
        .box .inputbox{
            position: relative;

        }
        .box .inputbox input{
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #fff;
            letter-spacing: 1px;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
        }
        .box .inputbox label{
            position: absolute;
            top: 0;
            left: 0;
            letter-spacing: 1px;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            transition: 0.3s;
        }
        .box input[type="submit"]{
            background: transparent;
            border: none;
            outline: none;
            color: #000;
            background: #fff;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 18px;
            margin-top: 5px;
            transition: 0.5s;
            
        }
        .box input[type="submit"]:hover{
            color: #fff;
            background: linear-gradient(90deg,transperent,#fff);
            background-color: #000;
            box-shadow: 10px #1c1b29;
            
            /* outline: 100px; */
        }
        .box .inputbox input:focus ~ label,
        .box .inputbox input:valid ~ label{
            top: -25px;
            left:0;
            color: #fff;
            font-size: 12px;
            margin-top: 10px;

        }
        img{
            width: 35%;
            margin-left: 95px;
            margin-top: -40px;
            
        }
        .box .p{
            margin-top: 20px;
            margin-bottom: -40px;
            position: relative;
            left: 150px;
            top: 30px;

        }
        .box .error {
            background: transparent;
            color: red;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            text-align: center;
        }




    </style>
</head>
<body>
    <div class="main_div">
        <div class="box">
            <img src="logo.png" alt="">
            <h1>Login KHC</h1>
            <p class="p2">Kerala Hackers Community Vuln Web V1</p>
            <?php if (isset($_GET['error'])) {?>
                <p class="error"> <?php echo $_GET['error'];?> </p>
            <?php }   ?>
            <form action="login.php" method="post">
                <div class="inputbox">
                    <input  type="text" name="userid" autocomplete="off" required>
                    <label for="">User ID</label>
                </div>
                <div class="inputbox">
                    <input type="password" name="pass" autocomplete="off" required>
                    <label for="">Password</label>
                </div>
                <input type="submit" name="submit" value="login">
                
            </form>
            <div class="p">
                <p>Coded BY H!DD3N_R47</p>
            </div>
        </div>
        
    </div>
</body>
</html>