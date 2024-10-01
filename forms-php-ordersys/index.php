<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
        border:1px solid black;
        }
    </style>
</head>
<body>
    <h1> Menu </h1>

    <table style="width: 18%">
        <tr>
            <th>Order</th>
            <th>Amount</th>
        </tr>
        <tr>
            <td>Burger</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Fries</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Steak</td>
            <td>150</td>
        </tr>
    </table>
    
    <form method = "post">
        <label for = ""><br> Select an Order: </label>
        <select class = "" name = "order" required>
            <option value = "" selected hidden></option>
            <option value = "Burger">Burger</option>
            <option value = "Fries">Fries</option>
            <option value = "Steak">Steak</option>
        </select>

        <br></br>
    
        <label for = "quantity"> Quantity: </label>
        <input type = "number" id = "quantity" name = "quantity" required><br><br>
       
        <label for = "cash"> Cash: </label>
        <input type = "number" id = "cash" name = "cash" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    $prices = [
        'Burger' => 50,
        'Fries' => 75,
        'Steak' => 150
    ];

    if(isset($_POST['submit'])){
        $order = $_POST['order'];
        $quantity = $_POST['quantity'];
        $cash = $_POST['cash'];
        $totalcost = $_POST['totalcost'];
        $change = $_POST['change'];

        $totalprice = $prices[$order] * $quantity;
        $change = $cash - $totalprice;
        
        header("Location: receipt.php?order=$order&quantity=$quantity&cash=$cash&totalprice=$totalprice&change=$change");
        exit();
    }
?>
</body>
</html>