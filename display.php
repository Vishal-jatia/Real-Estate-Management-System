<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <h1>Customers List</h1>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Fname</th>
                <th>Surname</th>
                <th>Emailid</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
            </thead>
            <tbody>
            <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database="propertymanagement";
    $con = mysqli_connect($server, $username, $password,$database);
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    $table="select * from `customer`";
    $result2=mysqli_query($con,$table);
    while($row= mysqli_fetch_assoc($result2)){
        echo"<tr>
        <td>".$row['id']."</td>
        <td>".$row['name']."</td>
        <td>".$row['surname']."</td>
        <td>".$row['emailid']."</td>
        <td>".$row['num']."</td>
        <td>".$row['address']."</td>
        </tr>";
    }?>
            </tbody>
        </table>
    </body>
</html>



