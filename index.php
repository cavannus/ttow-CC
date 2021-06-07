<?php
    include 'auth.php';
    $db = new auth();
    $conn = $db->connect();
    
    $query="SELECT * FROM detail_wayang";
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
    // $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    // print_r($result);
    

    // if($result){
    //     foreach($result as $obj) {
    //         $output[] = $obj;
    //     }
    // } else {
    //     echo 'Error: No result.';
    // }
    
    // header('Content-type: JSON');
    // echo json_encode($output, JSON_PRETTY_PRINT);
    // include 'auth.php'
    // $output = array();

    // $sql = "SELECT * FROM detail_wayang;"
    // $query = mysqli_query($mysqli,$sql) or die ("Tidak Terhubung");
    
    // while($obj = mysqli_fetch_array($query)){
    //     $output[]=$obj;
    // }
    // header('Conten Type : JSON');
    // echo json_encode($output,JSON_PRETTY_PRINT);
?>
