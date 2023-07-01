<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body style="background:#ccc;">

<!-- $_GET $_POST $_REQUEST $_SERVER -->


<div class="container">
<form class="form p-3 m-5 shadow" action="index.php" method="POST">
    <h3>Simple Calculator</h3>
    <hr>
<label for="num1">Enter first number :</label> <input class="form-control" type="text" name="num1" id="num1"><br>
<label for="num2">Enter second number:</label> <input class="form-control" type="text" name="num2" id="num2"> <br>
Choice your option: 
<input type="radio" name="option" value="+" id="">(+)
<input type="radio" name="option" value="-" id="">(-)
<input type="radio" name="option" value="*" id="">(*)
<input type="radio" name="option" value="/" id="">(/) <br><br>

<input type="submit" class="btn btn-outline-primary" value="Calculate">
<input type="reset" class="btn btn-primary" value="Delete">
<hr>

    <div class="container">
    <?php 

    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];
    $opt = $_REQUEST['option'];

    if ( $opt == "+" ){
        echo "Total is: ".  $num1 + $num2;
    }
    elseif ( $opt == "-" ){
        echo $num1 - $num2;
    }
    elseif ( $opt == "*" ){
        echo $num1 * $num2;
    }
    elseif ( $opt == "/" ){
        echo $num1 / $num2;
    }
    else{
        echo "You have input invalid Option!!";
    }
    ?>

    <blockquote class="float-end">Code by <b>Shakib</b></blockquote>
    </div>
</div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>