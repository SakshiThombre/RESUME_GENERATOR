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
            .c1{
                height:300px;
                font-size:50px;
                font-family:informatic;
                display:flex;
                align-items:center;
                justify-content:center;
            }
            .c2{
                height:300px;
                background-color:violet;
            }
            .c2 img{
                width:100%;
                height:300px;
            }
            .c3{
                background-color:#242124;
                height:fit-content;
                color:#8e8e8e;
            }
            #p1{
                padding:30px 0px 0px 0px;
            } 
            h4{
                color:#12e193;
                padding:20px 10px 10px 0px;
            }
            .e1{
                color:#12e193;
                font-weight:bold;
            }
            #p2{
                color:#8e8e8e;
            }
            .m1{
                padding:50px 10px 10px 10px;
            }
            .m4{
                padding-top:10px;
            }
            .m5{
                padding-top:10px;
            }
            .last{
                background-color:#12e193;
                height:50px;
            }
            #s1{
                margin:85px 0px 0px -300px;
                font-size:25px;
                color:#242124;
                font-family: "Lucida Console", Courier, monospace;
            }
            .m9{
                padding:0px;
            }
            @media screen and (max-width:400px){
                .c1{
                    height:150px;
                font-size:30px;
                }
                #s1{
                margin:100px 0px 0px -220px;
                }
            }
           
        </style>
    </head>
    <body>
        
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 c1" style="padding-right:100px;">
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
            <b><?php echo $_SESSION["uname"];?></b> <br>
            <span id="s1"> <?php echo"[".$pro."]"; ?></span>
           
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 c2" style="padding:0px;">
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
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c3">
              
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                   
                   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
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


                   
                   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                       <ul><h4><b>EDUCATION</b></h4>
                       </ul>
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

                
                   
                   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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

                   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul>
                        <h4><b>TECHNICALSKILLS</b></h4>
                        <?php
                                $sql="select *from tblhard where id='$id'";
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
                 
               


                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 m9"  >
                   
                   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  m5">
                      <ul> <h4><b>CONTACT</b></h4></ul>
                                     
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
                                                                    $pin=$row["4"];
                                                                    $city=$row["2"];
                                                                    $state=$row["3"];
                                                                
                                                                }
                                                            }

                                                ?>
                                    <ul>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                
                                                <span class="glyphicon glyphicon-earphone e1" aria-hidden="true">
                                                    <span id="p2"><?php echo $mob; ?></span>
                                                </span> <br>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <span class="glyphicon glyphicon-envelope e1" aria-hidden="true">
                                                     <span id="p2"> <?php echo $email; ?></span>
                                                    </span> <br>
                                                </div>  
                                                
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <span class="glyphicon glyphicon-map-marker e1" aria-hidden="true">
                                                     <span id="p2"> <?php echo $pin."-".$city.",".$state; ?></span>
                                                    </span> <br>
                                                </div>  

                                </ul>

                                                  
                   </div>


                   
                   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  m4">
                    <ul > <h4><b>EXPERIENCE</b></h4></ul>
                            <ul id="u1">
                                <?php
                                    $sql="select *from tblexperience where id='$id'";
                                    $res=mysqli_query($link,$sql);
                                    if(mysqli_num_rows($res)>0)
                                    {
                                        while($row=mysqli_fetch_array($res))
                                        {                                          
                                                echo $row["experience"]."<br><br><br>";
                                        }
                                    }
                                ?>
                            </ul>
                   </div>
                   
                   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top:-50px;">
                    <UL> <h4 style="padding-bottom:0px;"><b>LANGUAGES</b></h4></UL>
                    <UL>
                    <?php
                                    $sql="select *from tblang where id='$id'";
                                    $res=mysqli_query($link,$sql);
                                    if(mysqli_num_rows($res)>0)
                                    {
                                        while($row=mysqli_fetch_array($res))
                                        {                                          
                                                echo $row["language"].",";
                                        }
                                        echo".";
                                    }
                                ?>
                    </UL>
                   </div>
                   
                   
              </div> 
                      
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 last">
              
        </div>
        
                 
                
               
       
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
