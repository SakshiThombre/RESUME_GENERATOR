
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
            *{
                margin:0px;
                padding:0px;
                /* color:white; */
            }
            .img1{
                 width:100%;
                 height:250px;
            }
            .c1{
                background-color:#242124;
                height:fit-content;
                color:white;
               
            }
            #p1{
                color:white;
            }
            .s1{
                padding:15px 0px 10px 20px;
                color:gold;
            }
            .c2{
                padding:0px 20px 0px 20px;
            }
            h4{
                color:gold;
            }
            .m1{
                background-color:gold;
                height:250px;
            }
            .m2{
                padding:10px 0px 0px 80px;
            }
           #b1{
            font-size:45px;
            font-family:Lucida Console;
           }
           #s1{
              font-size:25px;
              font-family:Courier New;
           }
          .m3{
            padding:15px 70px 0px 80px;
          }
          #p2{
            font-family:Verdana;
          }
          .m4{
                padding:20px 70px 0px 80px;
          }
          #u1{
            padding-left:30px;
          }
          @media screen and (max-width:400px){
            .m3{
            padding:100px 5px 0px 5px;
            text-align:justify:
          }
          .m4{
            padding-top:170px;
          }
          #m5{
            padding-top:0px;
          }
          }
         
        </style>
    </head>
    <body>
           
           <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 c1" style="padding:0px;">
                  
                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px;">
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
                                ?>
                                <img src="<?php echo $row[1]; ?>" class="img-responsive img1" alt="Image">
                                <?php
                            }
                            }
                        ?>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px">
                     <hr>
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

                                           
                                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px">
                                           <span class="glyphicon glyphicon-home s1" aria-hidden="true">
                                                <span id="p1">
                                                    <?php  echo $pin."-";echo $city.",".$state;?>
                                                </span>
                                            </span>
                                           </div>
                                           
                              
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
                                               
                                       <?php
                            $sql="select *from tbllinks where id='$id'";
                            $res=mysqli_query($link,$sql);
                            if(mysqli_num_rows($res)>0)
                            {
                            
                                while($row=mysqli_fetch_array($res))
                                {       ?>                                   
                                            <span class="glyphicon glyphicon-link s1" aria-hidden="true">
                                            <span id="p1"> <?php echo $row["media"]."(".$row["links"].")";?></span>
                                        </span> <br>
                                        <?php
                                }
                            }
                        ?>
                             

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c2">
                    <hr>
                                    <ul>
                                        <h4><b>SOFTSKILLS</b></h4>
                                        <?php
                                                $sql="select *from tblsoft where id='$id'";
                                                $res=mysqli_query($link,$sql);
                                                    if(mysqli_num_rows($res)>0)
                                                {
                                                
                                                    while($row=mysqli_fetch_array($res))
                                                    {                                          
                                                            echo"<li>".$row["2"]."</li>";
                                                    }
                                                }
                                            ?>
                                    </ul>
                </div>

                   
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c2">
                    <hr>
                    <ul><h4><b>LANGUAGE</b></h4></ul>
                        <UL>
                            <?php
                                            $sql="select *from tblang where id='$id'";
                                            $res=mysqli_query($link,$sql);
                                            if(mysqli_num_rows($res)>0)
                                            {
                                                while($row=mysqli_fetch_array($res))
                                                {                                          
                                                        echo $row["language"]."<br>";
                                                }
                                            }
                                        ?>
                            </UL>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c2">
                    <hr>
                                    <ul>
                                        <h4><b>TECHNICALSKILL</b></h4>
                                        <?php
                                                $sql="select *from tblHARD where id='$id'";
                                                $res=mysqli_query($link,$sql);
                                                    if(mysqli_num_rows($res)>0)
                                                {
                                                
                                                    while($row=mysqli_fetch_array($res))
                                                    {                                          
                                                            echo"<li>".$row["2"]."</li>";
                                                    }
                                                }
                                            ?>
                                    </ul>
                </div>
                
                

           </div>
           
           <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" style="padding:0px">
                 
                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 m1" style="padding:0px">
                    
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 m2" >
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
                                <span id="s1"> <?php echo $pro; ?></span>
                           </div>
                          
                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 m3">
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
                                    <p id="p2">
                                        <?php echo $obj;  ?>
                                    </p>
                           </div>

                 </div>
                 
                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 m4">
                     <ul><h4 style="padding-top:40px"><b>EXPERIENCE</b></h4></ul>
                     <ul id="u1">
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
                    </ul>
                 </div>
                 
                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 m4 " id="m5">
                                     <ul><h4><b>EDUCATION</b></h4></ul>
                                        <?php
                                            $sql="select *from tbleducationo where id='$id'";
                                            $res=mysqli_query($link,$sql);
                                            if(mysqli_num_rows($res)>0)
                                            {
                                                while($row=mysqli_fetch_array($res))
                                                {
                                                    ?>
                                                    <ul id="u1">
                                                       
                                                        <li><?php echo"<b>".$row[2]."(".$row[4].")<br></b>"; ?>
                                                        <?php echo"".$row[3]."-".$row[5]."<br>"; ?></li>
                                                   </ul>

                                                    <?php
                                                }
                                            }
                                        ?>
                 </div>

                 </div>
                 
                                 
              
               
           </div>
           
           
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
