
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
        <style>
            #K1{
                /* background-color:#438797; */
                font-size:50px;
                color:black;
                text-shadow:2px 2px 4px #fff;
                text-align:center;
                font-family:informatic;
            }
            .k1{
                margin:0px 0px 0px 0px;
                font-size:50px;
            }
            @media screen and (max-width: 400px) {
               .k1{
                  margin:-800px 0px 0px 0px;
                  font-size:10px;
               }
            }
        </style>
    </head>
    <body>
    
          <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" id="K1">
            
              <?php
                $uname="";
                if(isset($_SESSION["uname"]))
                {
                    $uname=$_SESSION["uname"];
                }
                else
                {
                    echo "<script>open('./index.php','_self')</script>";
                }

              ?>

                        <?php
                            $id=$_SESSION["id"];
                            $sql="select * from tblstudent where id='$id'";
                            $res=mysqli_query($link,$sql);
                            if(mysqli_num_rows($res)>0)
                            {
                                if($row=mysqli_fetch_array($res))
                                {
                                $pro=$row["profession"];
                                }
                            }
                        ?>

              <div class="page-header k1">
                <h1><b><?php echo "".$uname; ?>|</b><small style="color:black;"><?php echo $pro;?></small></h1>
              </div>
            
          </div>
          
            
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
