<?php
    require 'db.php';
    class DatabaseOperation extends Database{

    }

    $db = new DatabaseOperation();

    if(isset($_POST['getExistingData'])){
        $sql = "SELECT id, countryName FROM country";
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
                                <input type='button' value='Delete' class='btn btn-danger'/>
                                <input type='button' value='View' class='btn btn-info'/>
                                <input type='button' value='Edit' class='btn btn-primary'/>
                            </td>
                        </tr>
                    ";
                }
            }
            exit($response);
        }
    }

?>