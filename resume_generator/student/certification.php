
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
           #img1 img{
                width: 100px;
                height:100px;
                margin:0px 10px 10px 10px;
                transition:3s;
            }
            #img1{
                display:flex;
            }
            #img1 img:hover{
                width: 250px;
                height:250px;
            }
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
                margin:-550px 0px 0px 0px;
            }
            #img1{
                display:block;
            }
           }
        </style>
    </head>
    <body>

          <?php
             include("include/sidemenu.php");
          ?>
         <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 marg">
            
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin:10px 0px 0px 0px;">
                
                <div class="panel panel-default"  style=" box-shadow: 10px 10px 10px #333;">
                      <div class="panel-heading">
                            <h3 class="panel-title">Add Certificates</h3>
                      </div>
                      <div class="panel-body">

                              <?php
                                include("certificate1.php");
                              ?>
                            
                            
                      </div>
                      <a href="language.php" class="glyphicon glyphicon-arrow-right" id="icon" aria-hidden="true"></a>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="img1">
                <?php
                    
                     require("dbcon.php");
                    //  $id=$_SESSION["id"];
                     $name=$_SESSION["uname"];
                     $sql="select * from studphoto1 where name='$name'";
                     $res=mysqli_query($link,$sql);
                     if(mysqli_num_rows($res)>0)
                     {
                        while($row=mysqli_fetch_array($res))
                        {
                            ?><img src="<?php echo $row["path"]; ?>"><?php
                            
                        }
                     }
                ?>
                
            </div>

            </div>
         </div>
         
          
        <!-- jQuery -->
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
