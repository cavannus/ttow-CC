<?php
    include 'auth.php';
    $getnm = $_GET['nm'];

    // $query="DELETE FROM detail_wayang WHERE id='$id'";
    // $result = mysqli_query($conn, $query);
    $db = new auth();
    $conn = $db->connect();
    $query="SELECT * FROM detail_wayang WHERE nm_wayang=:nm";
    $statement = $conn->prepare($query);
    //$statement->bindParam(":getid",$getid);
    $output = array();
    if($statement->execute(['nm' => $getnm])){
        while($row = $statement->fetchAll(PDO::FETCH_ASSOC)) {
            $output['result'] = $row;
        }
    }
    if(!empty($output)){
        header("Access-Control-Allow-Origin: *");
        header('Content-Type: application/json');
        print json_encode($output,JSON_PRETTY_PRINT);
    }else{
        echo 'error';
    }
?>