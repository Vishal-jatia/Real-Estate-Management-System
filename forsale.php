<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <h1>Sale List</h1>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th>PropertyID</th>
                <th>SaleID</th>
                <th>Address</th>
                <th>Area</th>
                <th>Price</th>
                <th>Type</th>
                <th>Owner Number</th>
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
    $id = $_POST['id'];
    $budget=$_POST['budget'];
    $area=$_POST['area'];
    $type=$_POST['type'];
    if(!$area){
        if(!$type){
    $table="select * from `property` inner join `sale` on property.pid=sale.pid where `price`< '$budget'";}
    else{
        $table="select * from `property` inner join `sale` on property.pid=sale.pid  where `price`< '$budget' AND `ptype`='$type'";
    }   
}
    else{ //budget is compulsory
        if(!$type){
            $table="select * from `property` inner join `sale` on property.pid=sale.pid  where `price`< '$budget'  AND `Area`='$area'";}
            else{
                $table="select * from `property` inner join `sale` on property.pid=sale.pid  where `price`< '$budget' AND `ptype`='$type'  AND `Area`='$area'";
    }}
    $result2=mysqli_query($con,$table);
    while($row= mysqli_fetch_assoc($result2)){
        echo"<tr>
        <td>".$row['pid']."</td>
        <td>".$row['saleid']."</td>
        <td>".$row['paddress']."</td>
        <td>".$row['Area']."</td>
        <td>".$row['price']."</td>
        <td>".$row['ptype']."</td>
        <td>".$row['ownernumber']."</td>
        
        </tr>";
    }?>
            </tbody>
        </table>
    </body>
</html>