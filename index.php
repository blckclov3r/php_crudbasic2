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

            <div class="row"  style="margin-top: 6px;">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <button  class="btn btn-success" data-toggle="modal" data-target="#insertModal">Insert</button>
                </div>
                <div class="col-md-2">
                </div>
            </div>
            

            
            <div class="row" style="margin-top: 6px;">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Country Name</th>
                                <th>Option</th>
                            </tr>
                        </thead>

                        <tbody><!-- ajax + sql --></tbody>

                    </table>
                </div>
                <div class="col-md-2"></div>
            </div>

        </div>


        <!-- Insert Modal -->
        <div  class="modal fade " id="insertModal"  role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Insert</h4>
                        <button class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="insertForm">
                            <input type="text" class="form-control" placeholder="CountryName..." id="countryName"><br/>
                            <textarea class="form-control" id="shortDesc" placeholder="Short Country Description"></textarea><br/>
                            <textarea class="form-control" id="longDesc" placeholder="Short Country Description"></textarea><br/>
                            <button id="insertBtn" data-dismiss="modal" class="btn btn-primary btn-block">Insert</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- View Modal -->
        <div  class="modal fade" id="viewModal"  role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            <div  id="countryView"></div>
                        </h4>
                        <button class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <b>Short Description</b>
                        <div id="shortDescView"></div>
                        <br/>
                        <b>Long Description</b>
                        <div id="longDescView"></div>
                    </div>
                    <div class="modal-footer">
                            <button id="manageBtn"  class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Update Modal -->
        <div  class="modal fade" id="updateModal"  role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><div id="countryUpdateTitle"></div></h4>
                        <button class="close" data-dismiss="modal">&times;</button>
                        
                    </div>
                    <div class="modal-body">
                        <form>
                            <input type="text" class="form-control" value="" placeholder="CountryName..." id="countryNameUpdate"><br/>
                            <textarea class="form-control" id="shortDescUpdate" value="" placeholder="Short Country Description"></textarea><br/>
                            <textarea class="form-control" id="longDescUpdate" value="" placeholder="Short Country Description"></textarea><br/>
                            <button id="updateBtn" data-dismiss="modal" class="btn btn-primary btn-block">Update</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    	<script type="text/javascript" src="js/bootstrap.js"></script>
    	<script type="text/javascript" src="js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" src="js/myjs.js"></script>
        
    </body>
</html>