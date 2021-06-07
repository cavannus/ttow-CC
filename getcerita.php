<?php
    include 'auth.php';
    $gettk = $_GET['tk'];

    // $query="DELETE FROM detail_wayang WHERE id='$id'";
    // $result = mysqli_query($conn, $query);
    $db = new auth();
    $conn = $db->connect();
    $query="SELECT * FROM cerita_wayang WHERE tokoh=:tk";
    $statement = $conn->prepare($query);
    //$statement->bindParam(":getid",$getid);
    $output = array();
    if($statement->execute(['tk' => $gettk])){
        while($row = $statement->fetchAll(PDO::FETCH_ASSOC)) {
            $output['result'] = $row;
        }
    }
    if(!empty($output)){
        header("Access-Control-Allow-Origin: *");
        header('Content-Type: application/json');
        print json_encode($output,JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }else{
        echo 'error';
    }
?>