<?php
    include 'auth.php';
    // $id = $_POST['id'];
    // $nm_wayang = $_POST['nm_wayang'];
    // $desc_wayang = $_POST['desc_wayang'];
    // $stry_wayang = $_POST['stry_wayang'];

    // $query="INSERT INTO detail_wayang(id,nm_wayang,desc_wayang,stry_wayang) VALUES ('$id','$nm_wayang','$desc_wayang','$stry_wayang')";
    // $result = mysqli_query($conn, $query);

    // if($result){
    //     echo "Input Sukses";
    // }else{
    //     echo "Input Gagal";
    // }
    $db = new auth();
    $conn = $db->connect();
    
    $query="SELECT * FROM cerita_wayang WHERE tokoh='petruk'";
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