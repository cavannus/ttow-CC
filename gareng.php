<?php
    include 'auth.php';
    // $id = $_POST['id'];
    // $nm_wayang = $_POST['nm_wayang'];
    // $desc_wayang = $_POST['desc_wayang'];
    // $stry_wayang = $_POST['stry_wayang'];

    // $query = "UPDATE detail_wayang SET nm_wayang = '$nm_wayang',desc_wayang = '$desc_wayang',stry_wayang = '$stry_wayang' WHERE id = '$id'";
    // $result = mysqli_query($conn, $query);

    // if($result){
    //     echo "Update Sukses";
    // }else{
    //     echo "Update Gagal";
    // }
    $db = new auth();
    $conn = $db->connect();
    
    $query="SELECT * FROM cerita_wayang WHERE tokoh='gareng'";
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