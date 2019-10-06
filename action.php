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
                                <input type='button' id='selectView' countryId='".$row['id']."' data-toggle='modal' data-target='#viewModal' value='View' class='btn btn-info'/>
                                <input type='button' id='selectUpdate' value='Edit' countryId='".$row['id']."' data-toggle='modal' data-target='#updateModal' class='btn btn-primary'/>
                                <input type='button' id='selectDelete' value='Delete' class='btn btn-danger' countryId='".$row['id']."'/>
                            </td>
                        </tr>
                    ";
                }
            }
            $db->getClose();
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
            $db->getClose();
            exit("Country with this name already exists");
        }else{
            $sql = "INSERT INTO country(countryName,shortDesc,longDesc) VALUES('$countryName','$shortDesc','$longDesc')";
            $query = mysqli_query($db->getConn(),$sql);
            $db->getClose();
            exit("Country has been inserted");
        }
    }


    if(isset($_POST['selectView'])){
        $id = $_POST['id'];
        $sql = "SELECT * FROM country WHERE id = '$id'";
        $query = mysqli_query($db->getConn(),$sql);
        $row = mysqli_fetch_array($query);
        $jsonArray = array(
            'countryName' => $row['countryName'],
            'shortDesc' => $row['shortDesc'],
            'longDesc' => $row['longDesc']
        );
        $db->getClose();
        exit(json_encode($jsonArray));
    }

    if(isset($_POST['selectUpdate'])){
        $id = $_POST['id'];
        $sql = "SELECT * FROM country WHERE id = '$id'";
        $query = mysqli_query($db->getConn(),$sql);
        $row = mysqli_fetch_array($query);
        $jsonArray = array(
            'countryName' => $row['countryName'],
            'shortDesc' => $row['shortDesc'],
            'longDesc' => $row['longDesc']
        );
        $db->getClose();
        exit(json_encode($jsonArray));
    }

    if(isset($_POST['selectDelete'])){
        $id = $_POST['id'];
        $sql = "DELETE FROM country WHERE id = '$id'";
        $query = mysqli_query($db->getConn(),$sql);
        $db->getClose();
        if($query){
            exit("Successfully deleted");
        }else{
            exit("Some error occur");
        }
    }
?>