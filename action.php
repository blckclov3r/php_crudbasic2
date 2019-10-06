<?php
    require 'db.php';
    
    class DatabaseOperation extends Database{ }

    $db = new DatabaseOperation();

    if(isset($_POST['getExistingData'])){
        $sql = "SELECT * FROM country ORDER BY id DESC";
        $query = mysqli_query($db->getConn(),$sql);
        $response = "";
        if($query){
            while($row = mysqli_fetch_array($query)){
                if($row > 0){
                    $response .= "
                        <tr>
                            <td>".$row['id']."</td>
                            <td>".$row['countryName']."</td>
                            <td>
                                <input type='button' id='viewBtn' countryId='".$row['id']."' countryName='".$row['countryName']."' shortDesc='".$row['shortDesc']."' longDesc='".$row['longDesc']."' data-toggle='modal' data-target='#viewModal' value='View' class='btn btn-info'/>
                                <input type='button' id='editBtn' value='Edit' countryId='".$row['id']."' countryName='".$row['countryName']."' shortDesc='".$row['shortDesc']."' longDesc='".$row['longDesc']."' data-toggle='modal' data-target='#updateModal' class='btn btn-primary'/>
                                <input type='button' value='Delete' class='btn btn-danger'/>
                            </td>
                        </tr>
                    ";
                }
            }
            exit($response);
        }
    }

    if(isset($_POST['insertBtn'])){
        $countryName = $_POST['countryName'];
        $shortDesc = $_POST['shortDesc'];
        $longDesc = $_POST['longDesc'];

        $sql = "SELECT id FROM country WHERE countryName='$countryName' LIMIT 1";
        $query = mysqli_query($db->getConn(),$sql);
        $row = mysqli_num_rows($query);
        if($row > 0){
            exit("Country with this name already exists");
        }else{
            $sql = "INSERT INTO country(countryName,shortDesc,longDesc) VALUES('$countryName','$shortDesc','$longDesc')";
            $query = mysqli_query($db->getConn(),$sql);
            exit("Country has been inserted");
        }
    }


    if(isset($_POST['viewBtn'])){
        $id = $_POST['id'];
        $sql = "SELECT * FROM country WHERE id = '$id'";
        $query = mysqli_query($db->getConn(),$sql);
        $row = mysqli_fetch_array($query);
        $jsonArray = array(
            'countryName' => $row['countryName'],
            'shortDesc' => $row['shortDesc'],
            'longDesc' => $row['longDesc']
        );
        exit(json_encode($jsonArray));
    }
?>