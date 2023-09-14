<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
</head>
<body>
    <form method="post" action="grade_calculator.php">
        <label for="num1">Enter First result:</label>
        <input type="number" name="num1" id="num1" required>
        <br>
        <br>
        <label for="num2">Enter second result:</label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <br>
        <label for="num2">Enter third result:</label>
        <input type="number" name="num3" id="num3" required>
        <br>
        <br>

        <input type="submit" name="calculate" value="Calculate">

    </form>

    <?php
        if(isset($_POST['calculate'])){
            $num2 = $_POST['num2'];
            $num1 = $_POST['num1'];
            $num3 = $_POST['num3'];

            $average = $num1 + $num2 +$num3/3;

            if($average>=90){
                echo"grade A ";
            }elseif($average>=80){
                echo"grade B";
            }elseif($average>=70){
                echo"grade c";
            }elseif($average>=60){
                echo"grade D";
            }else{
                echo"grade F";
            }
                        
            }

           
        



    ?>
    
</body>
</html>