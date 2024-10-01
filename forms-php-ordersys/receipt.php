<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            border-style: dotted;
            border-width: 2px;
            border-color: black;
            padding: 10px;
        }
        h1 {
            text-align: center;
            font-family: Arial;
        }
        h2 {
            text-align: left;
            font-family: Arial;
        }
    </style>
</head>
<body>
    <?php
        date_default_timezone_set('Asia/Manila');

        $order = $_GET['order'];
        $quantity = $_GET['quantity'];
        $cash = $_GET['cash'];
        $totalprice = $_GET['totalprice'];
        $change = $_GET['change'];
        $timestamp = date('m/d/2024 h:i:s a');

        if ($cash < $totalprice){
            echo "<h1>Sorry, balance not enough.</h1?";
        }
        else{
            echo "<h1> RECEIPT </h1>";
            echo "<h2>Total Price: $totalprice</h1>";
            echo "<h2>You Paid: $cash</h1>";
            echo "<h2>CHANGE: $change</h1>";
            echo "<h2><i>$timestamp</i></h2>";
        }  
    ?>
</body>
</html>