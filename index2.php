<?php
error_reporting(E_ALL); ini_set("display_errors", 1);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
   
</head>
<body>

    <div> TEST </div>
    <script>
        let test=<?php include './script_js.php';  ?>
    </script>
    <script src='./src/main.js'></script>
</body>
</html>