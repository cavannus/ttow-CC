<?php
    include 'auth.php';
    // $id = $_GET['id'];

    // $query="DELETE FROM detail_wayang WHERE id='$id'";
    // $result = mysqli_query($conn, $query);
    $db = new auth();
    $conn = $db->connect();
    
    $query="SELECT * FROM cerita_wayang WHERE tokoh='semar'";
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
        $json = json_encode($output,JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        $json = preg_replace('!\\r?\\n!', "", $json);
        echo parse($json);
    }else{
        echo 'error';
    }
?>