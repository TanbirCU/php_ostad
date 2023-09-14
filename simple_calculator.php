<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <form method="post" action="simple_calculator.php">
        <label for="num1">Enter First Number:</label>
        <input type="number" name="num1" id="num1" required>
        <br>
        <br>
        <label for="num2">Enter second Number:</label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <br>
        <label for="operation">select option</label>
        <select name="operation" id="operation">
            <option value="add"> + </option>
            <option value="subtract"> - </option>
            <option value="multiply"> * </option>
            <option value="divide"> / </option>
        </select>
        <br>
        <br>

        <input type="submit" name="calculate" value="Calculate">

    </form>

    <?php
        if(isset($_POST['calculate'])){
            $num2 = $_POST['num2'];
            $num1 = $_POST['num1'];
            $operation = $_POST['operation'];
            switch($operation){
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case'divide':
                    if($num2 != 0){
                        $result = $num1 / $num2;
                    }else{
                        $result = "divison by zero is not allowed";
                    } 
                    break;
                default:
                  $result = "Invalid operation";              
            }

            echo "Result : $result";
        }



    ?>
    
</body>
</html>