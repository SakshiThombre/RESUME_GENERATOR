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
        <style>
            
           /* .c1 img{
             width:150px; 
             height:200px;
             border:2px solid #333;
             margin:10px;
           }*/
           .c2{
            display:flex;
           }  
           #icon{
            font-size:30px;
            padding:10px;
            text-decoration:none;
            color:black;
           }

          
              #vj{
                     position: relative;
              }
              .vj{
                margin:0px 0px 0px 0px;

              }
              .c2 img{
                     position: relative;
                     width: 200px;
                     height: 200px;
                     border: 2px solid white;
                     border-radius: 5px 5px 5px; 
                     box-shadow: 0px 0px 10px black;
                     transition:3s;
                     margin-top:50px;
              }
              .c2 img:hover{
                     width: 400px;
                     height:400px;
              }
              .c2 a{
                margin:30px;
              }
              @media screen and (max-width: 400px) {
                .c2 img{
                     width: 100px;
                     height: 100px;
                    }
                    .vj{
                        margin:-600px 0px 0px 0px;
                    }
                    .c2{
                        display:flex;
                    }
                    .c2 a{
                        margin:5px;
                    }
              }

        </style>
    </head>
    <body>
            <?php
                 include("include/sidemenu.php");
            ?>
            
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 vj">
                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c2">
                           <a href="template4.php" >
                                <img src="../img/t3.jpg" class="img-responsive" alt="Image">
                            </a>

                            <a href="template3.php" >
                                <img src="../img/t1.jpg" class="img-responsive" alt="Image">
                            </a>

                            <a href="template1.php" >
                                <img src="../img/t5.jpg" class="img-responsive" alt="Image">
                            </a>

            </div>
                           
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c2">
    
            <a href="template2.php" >
                                <img src="../img/t4.jpg" class="img-responsive" alt="Image">
                            </a>
                            <a href="template5.php" >
                                <img src="../img/t2.jpg" class="img-responsive" alt="Image">
                            </a>

                            <a href="template6.php" >
                                <img src="../img/t6.jpg" class="img-responsive" alt="Image">
                            </a>
            </div>
                
              


                <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c2">
                    
                    <a href="template1.php" >
                         <img src="../img/t2.jpg" class="img-responsive" alt="Image">
                     </a>

                     <a href="template1.php" >
                         <img src="../img/t1.jpg" class="img-responsive" alt="Image">
                     </a>

                     <a href="template1.php" >
                         <img src="../img/t5.jpg" class="img-responsive" alt="Image">
                     </a>
                     <a href="template1.php" >
                         <img src="../img/t4.jpg" class="img-responsive" alt="Image">
                     </a>

                                         
                </div>
        -->
       
            
            
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
