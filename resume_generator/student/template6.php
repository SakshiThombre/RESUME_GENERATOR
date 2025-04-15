
<?php
   require("dbcon.php");
   session_start();
?>
<?php    
                            require("dbcon.php");
                            $id=$_SESSION["id"];
                            
                            $name=$_SESSION["uname"];
                            $sql="select * from studphoto where id='$id' and name='$name'";
                            $res=mysqli_query($link,$sql);
                            if(mysqli_num_rows($res)>0)
                            {
                            if($row=mysqli_fetch_array($res))
                            {
                                    $img =$row[1];
                            }
                            }
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
           
           .c1{
                 width:250px;
                 height:250px;
                 border-radius:360px;
                 background-size:100% 100%;
                margin:0px 0px 0px 0px;

            }
            hr{
                background-color:#438797;
                height:3px;
            }
            .c4{
                z-index:6;
            }
            .c3{
                background-color:#438797;
                height:85px;
                margin-top:-60px;
            }
            .c5{
                background-color:#59A9B5;
                 height:85px;
                 margin-top:-60px;
                 padding:0px 0px 0px 100px;

            }
            .c6{
                display:flex;
            }
            .c2{
                padding:140px 0px 0px 0px;
            }
            #b1{
               font-size:30px;
               font-family:Verdana, Arial, Helvetica, sans-serif;
            }
            #s1{
                  font-size:20px;
            }
            .k1{
                padding:10px 0px 25px 0px;
            }
            .m1{
                padding:10px 0px 25px 20px;
            }
            .main1{
                margin-top:30px;
            }
            @media screen and (max-width:400px){
                .c2{
                padding:0px 0px 0px 0px;
                }
             
                .c1{
                 width:100px;
                 height:100px;
                }
                #b1{
                    margin:0px 0px 0px 0px;
                }
                #s1{
                    padding-left:-100px;
                }
            }
           
        </style>
    </head>
    <body>
         
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 c4">                              
                    <img src="<?php echo $img; ?>" class="img-responsive c1" alt="Image">                               
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 c2">
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
                                <b id="b1"><?php  echo $_SESSION["uname"]."<br>";  ?></b>
            </div>
            
            
         </div>
         
         
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  c6">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 c3">
                    
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 c5">
                    <span id="s1"> <b><?php echo $pro; ?></b></span>

                </div>
         </div>
         
         <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 main1">
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 k1">
                <h4><b>CONTACTO</b></h4>
                <hr>
                    <?php
                                    $id=$_SESSION["id"];
                                $sql="select * from tblstudent where id='$id'";
                                    $res=mysqli_query($link,$sql);
                                    if(mysqli_num_rows($res)>0)
                                    {
                                        if($row=mysqli_fetch_array($res))
                                        {
                                            $mob=$row["3"];
                                            $email=$row["2"];
                                        }
                                    }
                                ?>

                                <?php
                                $id=$_SESSION["id"];
                                $sql="select * from tblpersonal where id='$id'";
                                $res=mysqli_query($link,$sql);
                                if(mysqli_num_rows($res)>0)
                                {
                                    if($row=mysqli_fetch_array($res))
                                    {
                                        $pin=$row["pincode"];
                                        $add=$row["address"];
                                        $city=$row["city"];
                                        $state=$row["state"];
                                    }
                                }
                            ?>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px;">
                                       <span class="glyphicon glyphicon-envelope s1" aria-hidden="true">
                                        <span id="p1"><?php echo $email; ?></span>
                                        </span> <br>
                                        
                                       </div>
                                       
                                        
                                            
                                       
                                       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px">
                                       <span class="glyphicon glyphicon-earphone s1" aria-hidden="true">
                                            <span id="p1">
                                            <?php echo $mob; ?>
                                            </span>
                                        </span> <br>
                                       </div>

                                       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px">
                                           <span class="glyphicon glyphicon-home s1" aria-hidden="true">
                                                <span id="p1">
                                                    <?php  echo $pin."-";echo $city.",".$state;?>
                                                </span>
                                            </span>
                                        </div>

            </div>
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 k1">
                   <h4><b>PROFILE SUMMARY</b></h4>
                   <hr>
                   <?php
                                $id=$_SESSION["id"];
                                $sql="select * from tblobjective where id='$id'";
                                $res=mysqli_query($link,$sql);
                                if(mysqli_num_rows($res)>0)
                                {
                                    if($row=mysqli_fetch_array($res))
                                    {
                                    $obj=$row["obj"];
                                    }
                                }
                            ?>
                            <p id="p1">
                                <?php echo $obj;  ?>
                            </p>
              </div>
              

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 k1">
                <h4><b>SOFTSKILLS</b></h4>
                <hr>
                                <?php
                                    $sql="select *from tblsoft where id='$id'";
                                    $res=mysqli_query($link,$sql);
                                        if(mysqli_num_rows($res)>0)
                                    {
                                    
                                        while($row=mysqli_fetch_array($res))
                                        {       ?>                           
                                        
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true">
                                            <?php  echo $row["2"]; ?>
                                        </span>
                                                <br>
                                                <?php
                                        }
                                    }
                                ?>
              </div>
              

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 k1">
                <h4><b>LANGUAGES</b></h4>
                <hr>
                                <?php
                                    $sql="select *from tblang where id='$id'";
                                    $res=mysqli_query($link,$sql);
                                        if(mysqli_num_rows($res)>0)
                                    {
                                    
                                        while($row=mysqli_fetch_array($res))
                                        {       ?>                           
                                        
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true">
                                            <?php  echo $row["2"]; ?>
                                        </span>
                                                <br>
                                                <?php
                                        }
                                    }
                                ?>
              </div>
              
           
         </div>

         
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 main1">
             
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 m1">
                <h4><b> PROFESSIONAL EXPERIENCE</b></h4>
                <hr>
                                    <?php
                                        $sql="select *from tblexperience where id='$id'";
                                        $res=mysqli_query($link,$sql);
                                        if(mysqli_num_rows($res)>0)
                                        {
                                            while($row=mysqli_fetch_array($res))
                                            {                                          
                                                    echo $row["experience"]."<br><br>";
                                            }
                                        }
                                    ?>
             </div>

             
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 m1">
                <h4><b>EDUCATION</b></h4>
                <hr>
                <?php
                    $sql="select *from tbleducationo where id='$id'";
                    $res=mysqli_query($link,$sql);
                    if(mysqli_num_rows($res)>0)
                    {
                        while($row=mysqli_fetch_array($res))
                        {
                            ?>
                            <ul>
                                
                                <li><?php echo"<b>".$row[2]."(".$row[4].")<br></b>"; ?>
                                <?php echo"".$row[3]."-".$row[5]."<br>"; ?></li>
                        </ul>

                            <?php
                        }
                    }
                ?>
             </div>
             
             
         </div>
         
         
         
         
         
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
