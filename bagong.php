<?php
    include 'auth.php';
    $db = new auth();
    $conn = $db->connect();
    
    $query="SELECT * FROM cerita_wayang WHERE tokoh='bagong'";
    $statement = $conn->prepare($query);
    $output = array();
    if($statement->execute()){
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