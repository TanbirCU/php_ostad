<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>even_odd_checker</title>
</head>
<body>
    <form method="post" action="even_odd_checker.php">
        <label for="num">Give a number:</label>
      <input type="number" name="num" id="num">

      <input type="submit" name="even_odd" value="even_odd_check">
    </form>

    <?php
        if(isset($_POST['even_odd'])){
            $num = $_POST['num'];
        // $even_odd = $_POST['even_odd'];

        if($num % 2 == 0){
            echo"this number is even";

        }else{
            echo"this number is odd";
        }
        }




    ?>
    
</body>
</html>