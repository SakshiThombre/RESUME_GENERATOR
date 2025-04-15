
<?php
  require("dbcon.php");
  session_start();
?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <style>
              #btnsave{
             border-radius:5px;
             background-color:#D3D3D3;
             border:1px solid #fff;
             box-shadow:2px 2px 2px #333;
           }
           #icon{
            font-size:30px;
            padding:10px;
            text-decoration:none;
            color:black;
           }
           .marg{
            margin:50px 0px 0px 0px;
           }
           @media screen and (max-width: 400px) {
            .marg{
                margin:-600px 0px 0px 0px;
            }
           }
         </style>
    </head>
    <body>

          <?php
             include("include/sidemenu.php");
          ?>
         <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 marg">
            
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" style="margin:50px 0px 0px 0px;">
                
                <div class="panel panel-default" style=" box-shadow: 10px 10px 10px #333;">
                      <div class="panel-heading">
                            <h3 class="panel-title">Profile Photo</h3>
                      </div>
                      <div class="panel-body">
                        
                        <form action="uploadfilesave.php" method="POST" role="form" enctype="multipart/form-data">
                           
                                    <div class="form-group" style="display:none;">
                                        <label for="">Id:</label>
                                        <input type="text" class="form-control" id="txtaddress" name="txtaddress" placeholder="Input field">
                                    </div>

                                    <div class="form-group">
                                        <input type="file" class="form-control" id="txtfile" name="txtfile" placeholder="Upload photo">
                                    </div>
                                 
                                   
                                <button type="submit" name="btnsave"  id="btnsave" class="btn btn-default">Upload</button>
                        </form>
                            
                      </div>
                      <a href="report.php" class="glyphicon glyphicon-arrow-right" id="icon" aria-hidden="true"></a>
                </div>


            </div>
       
          
            
        </div>

        <!-- jQuery -->
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
