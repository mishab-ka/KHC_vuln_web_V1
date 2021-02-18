<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">
    <link rel="stylesheet" href="php.css">
    <title></title>
  </head>
  <body>
    <div class="box">
      <p>This is just a test page, reflecting back your</p>

    <a href="<?php echo($_SERVER["SCRIPT_NAME"]);?>?message=Hi" class="btn"><button>message</button></a>

    </div>



  </body>
</html>
<?php

if(isset($_REQUEST["message"]))
{

// If the security level is not MEDIUM or HIGH


?>
<p><i><?php @eval ("echo " . $_REQUEST["message"] . ";");?></i></p>

<?php

}

// If the security level is MEDIUM or HIGH
else
{
?>
<p><i><?php echo htmlspecialchars($_REQUEST["message"], ENT_QUOTES, "UTF-8");;?></i></p>

<?php

}



?>
