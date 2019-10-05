<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.css">
    </head>
    <body>
        
        <div class="container-fluid">
            <div class="card-header"><b>MySQL Table Manager</b></div>

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8"></div>
                <div class="col-md-2">
                    <input type="button" class="btn btn-success" id="addNew" value="Add New" style="margin-top: 6px;"/>
                </div>
            </div>
            

            <br/><br/>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Country Name</td>
                                <td>Option</td>
                            </tr>
                        </thead>

                        <tbody><!-- ajax + sql --></tbody>

                    </table>
                </div>
                <div class="col-md-2"></div>
            </div>

        </div>
        
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    	<script type="text/javascript" src="js/bootstrap.js"></script>
    	<script type="text/javascript" src="js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" src="js/myjs.js"></script>
    </body>
</html>