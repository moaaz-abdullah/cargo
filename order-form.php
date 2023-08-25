<?php
$connection = mysqli_connect('localhost', 'root', '', 'order_db');

//TO HANDLE ANY ERROS MIGHT OCCUR
if (!(isset($_POST['send']))) {
    echo 'Try again, something went wrong';
} else {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $address = $_POST['address'];
    $model = $_POST['model'];
    $manufacture = $_POST['manufacture'];

    $request = "insert into order_form(name,phone,mail,address,model,manufacture) values
        ('$name','$phone','$mail','$address','$model','$manufacture')";
    mysqli_query($connection, $request);

    $query2 = "select * from order_form";
    $record = mysqli_query($connection, $query2);
    echo "<table border = '1'>";
    echo "<tr> <td>Name</td> <td>Phone number</td> <td>E-mail</td> <td>Address</td>
        <td>Car Model</td> <td>Car Manufacture</td> </tr>";

    //TO DISPLAY THE TABLE OF THE DATA
    while ($row = mysqli_fetch_array($record)) {
        echo "<tr><td>" . $row['name'] . "</td>" .
            "<td>" . $row['phone'] . "</td>" .
            "<td>" . $row['mail'] . "</td>" .
            "<td>" . $row['address'] . "</td>" .
            "<td>" . $row['model'] . "</td>" .
            "<td>" . $row['manufacture'] . "</td></tr>";
    }
}

$connection->close();
