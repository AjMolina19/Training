
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    <input type="text" name="value" value="" placeholder="Enter a Number"/>
    <input type="submit" name="submit" value="Submit"/>
</form>
    <?php
        if(isset($_POST['submit'])) {
            function pyra($n) {
                for ($i = 0; $i <= $n; $i++) {
                    for ($j = 0; $j <= $n -$i; $j++) {
                      echo "&nbsp;&nbsp;&nbsp;";

                     }
                     for($r = 0; $r <= $i; $r++) {
                      echo " *";
                     }
                     echo"<br>";
                }
            }
        $n = $_POST['value'];
        pyra($n);
        }
    ?>
    <!-- <div>
        <form action="pyramid.php" method="post">
        <p>
        <input type="text" id="enter" name="enter" placeholder="Enter your a Number" required><i class="validation"><span></span><span></span></i>
        </p>
        <p>
        <input type="submit" id="add" value="Add">
        </p>
        </form>
    </div> -->
</body>
</html>