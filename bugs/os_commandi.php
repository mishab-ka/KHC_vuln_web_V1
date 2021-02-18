<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">

    <style media="screen">
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
        color: #fff;
    }
    .login-page{
        width: 100%;
        height: 100vh;
        /* position: relative; */
      }
      .login-header{
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
      .login-header h1{
          margin-bottom: 5px;
          color: #fff;
          text-align: center;
          text-transform: capitalize;

      }
      .login-header p{
          margin-bottom: 0px;
          color: #fff;


      }

      .login-header input{
          width: 100%;
          padding: 10px;
          font-size: 16px;
          border: none;
          color: #fff;
          margin-top: 20px;
          letter-spacing: 1px;
          margin-bottom: 30px;
          border-bottom: 1px solid #fff;
          background: transparent;
          outline: none;


      }
      .login-header input[type="submit"]{
          background: transparent;
          text-transform: uppercase;
          border: none;
          outline: none;
          color: #000;
          background: #fff;

          border-radius: 5px;
          font-size: 18px;
          width: 100px;

          transition: 0.5s;

      }
      .login-header input[type="submit"]:hover{
          color: #fff;
          background: linear-gradient(90deg,transperent,#fff);
          background-color: #000;
          box-shadow: 10px #1c1b29;

          /* outline: 100px; */
      }




    </style>
    <title>DNS LookUp</title>
  </head>
  <body>
    <div class="login-page">

          <div class="login-header">
    <h1> DNS LookUp</h1>

        <form action="os_commandi.php" method="POST">

            <p>

            <label for="target"></label>
            <input type="text" id="target" name="target" value="www.google.com">


            <input type="submit" name="form" value="Lookup">

            </p>

        </form>

  </body>
</html>

<?php

    if(isset($_POST["target"]))
    {

        $target = $_POST["target"];
        $substitutions = array(
        		'&&' => '',
        		';'  => '',
            '||' => '',
            '&' => '',
        	);

        	// Remove any of the charactars in the array (blacklist).
        	$target = str_replace( array_keys( $substitutions ), $substitutions, $target );

        if($target == "")
        {

            echo "<font color=\"red\">Enter a domain name...</font>";

        }

        elseif ($target == "www.google.com|whoami") {
          // code...
          echo "Wow You Win This CTF Poda Chekka... Nee Hacker aaaano ";

        }



        else
        {

            echo "<p align=\"left\">" . shell_exec("nslookup $target " ) . "</p>";


        }

    }

?>
