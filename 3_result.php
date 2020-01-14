<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="main.php">Back</a>
<h1>Current</h1>
    <?php
        $vote = $_POST['vote'];
        echo $vote;
        $file = fopen('result.txt', 'a+');
        if($file) {
            fwrite($file, $vote . "\n");
            fclose($file);
        }
    ?>
    <br>
    <h2>All</h2>
    <?php
        $file = fopen('result.txt', 'r');
        if($file) {
            while ($line = fgets($file)) {
                echo "<p> $line </p>";
            }
            fclose($file);
        }
    ?>
    
</body>
</html>