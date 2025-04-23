<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>First Lecture In PHP</h1>
    <?php
    echo "helloworld";
    echo "<br>";
    ?>
    <?php
    echo "hello ". "world";
    ?>
    <?php 
    echo "<br>";
    $first_name="ahmad";
    $last_name="khateeb";
    $age=25;
    echo "$first_name "  ." $last_name " . " age: $age";
    echo"<br>";
    var_dump($age);
    ?>
    <form  method= "GET "action="index1.php">
        <div>

            <label for="">vv</label>
            <input type="text">
        </div>
        <div>
            <button type="submit">submit</button>
        </div>
    </form>
</body>
</html>