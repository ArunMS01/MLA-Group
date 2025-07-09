<?php
function getUsers($id){
    global $conn;
    $sql = "SELECT * FROM user WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        $getUser = array();
        while($row = mysqli_fetch_assoc($result)){
            $getUser[] = $row;
        }
        return $getUser;
    }
}
?>