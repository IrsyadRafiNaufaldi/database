<?php
    include 'koneksi.php';

    $query = "SELECT * FROM customers";
    $querysatu = "SELECT * FROM products";
    $sql = mysqli_query($con, $query);
    $sql_satu = mysqli_query($con, $querysatu);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATABASE</title>
    <link rel="stylesheet" href="tugas.css">
</head>
<body>
    <h1>DATABASE</h1>

    <h3>Customers</h3>
    <table border=1;>
        <thead>
            <tr>
                <th>Customer Number</th>
                <th>Customer Name</th>
                <th>Contact Last Name</th>
                <th>Contact First Name</th>
                <th>Phone</th>
                <th>Address Line 1</th>
                <th>Address Line 2</th>
                <th>City</th>
                <th>State</th>
                <th>Postal Code</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($hasil_sql = mysqli_fetch_assoc($sql)){
        ?>
            <tr>
                <td>
                    <?php echo $hasil_sql['customerNumber'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['customerName'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['contactLastName'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['contactFirstName'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['phone'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['addressLine1'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['addressLine2'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['city'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['state'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['postalCode'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['country'];?>
                </td>
            </tr>
        <?php
            }
        ?>
        </tbody>
    </table>

    <h3>Product</h3>
    <table border=1;>
        <thead>
            <tr>
                <th>Order Number</th>
                <th>Order Date</th>
                <th>Required Date</th>
                <th>Shipped Date</th>
                <th>Status</th>
                <th>Comments</th>
                <th>Customer Number</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($hasil_sql_satu = mysqli_fetch_assoc($sql_satu)){
        ?>
            <tr>
                <td>
                    <?php echo $hasil_sql_satu['productCode'];?>
                </td>
                <td>
                    <?php echo $hasil_sql_satu['productName'];?>
                </td>
                <td>
                    <?php echo $hasil_sql_satu['productLine'];?>
                </td>
                <td>
                    <?php echo $hasil_sql_satu['productScale'];?>
                </td>
                <td>
                    <?php echo $hasil_sql_satu['productVendor'];?>
                </td>
                <td>
                    <?php echo $hasil_sql_satu['productDescription'];?>
                </td>
                <td>
                    <?php echo $hasil_sql_satu['quantityInStock'];?>
                </td>
                <td>
                    <?php echo $hasil_sql_satu['buyPrice'];?>
                </td>
                <td>
                    <?php echo $hasil_sql_satu['MSRP'];?>
                </td>
            </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</body>
</html>