<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <h1>Property List</h1>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th>PropertyID</th>
                <th>Address</th>
                <th>Area</th>
                <th>Owner</th>
                <th>Price</th>
                <th>Type</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database="propertymanagement";
    $con= mysqli_connect($server, $username, $password,$database);
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    
    $id = $_POST['id'];
    $budget=$_POST['budget'];
    $area=$_POST['area'];
    $ptype=$_POST['ptype'];
    
   // $rk = "INSERT INTO `requirement` (`id`, `budget`, `ptype`, `Area`) VALUES ('$id','$budget','$ptype','$area');";
    //$result=mysqli_query($con,$rk);
    
    

    if(!$area){
        if(!$type){
    $table="select *, length(`pstatus`) as a from `property` where `propprice`< '$budget' AND `pstatus`='Unoccupied'";}
    else{
        $table="select * from `property` where `propprice`< '$budget' AND `ptype`='$type' AND `pstatus`='Unoccupied'";
    }   
}
    else{ //budget is compulsory
        if(!$type){
            $table="select * from `property` where `propprice`< '$budget'  AND `Area`='$area' AND `pstatus`='Unoccupied'";}
            else{
                $table="select * from `property` where `propprice`< '$budget' AND `ptype`='$type'  AND `Area`='$area' AND `pstatus`='Unoccupied'";
    }}
    $result2=mysqli_query($con,$table);
    while($row= mysqli_fetch_assoc($result2)){
        echo"<tr>
        <td>".$row['pid']."</td>
        <td>".$row['paddress']."</td>
        <td>".$row['Area']."</td>
        <td>".$row['owner']."</td>
        <td>".$row['propprice']."</td>
        <td>".$row['ptype']."</td>
        <td>".$row['pstatus']."</td>
        
        </tr>";
    }
    $sql= "INSERT INTO `requirement` (`id`, `budget`, `Area`, `ptype`)VALUES ('$id','$budget','$area','$ptype');";
    $input=mysqli_query($con,$sql);?>
            </tbody>
        </table>
    </body>
</html>