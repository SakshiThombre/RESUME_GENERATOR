<?php
   session_start();
   require("dbcon.php");
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
            ?>
            <?php $img=$row[1]; ?>
            <?php
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
                height:fit-content;
                padding:50px;
                background-color:black;
            }
            .c2{
                height:fit-content;
                padding:100px;
                width:99%;
                background-image: linear-gradient( to bottom right, #848482,#926F34,gray);
            }
            .c3{
                margin-top:245px;
                height:73%;
                background-color: white;
            }
            .c4{
                 width:250px;
                 height:250px;
                 border-radius:360px;
                 background-size:100% 100%;
                margin:-100px 0px 0px 0px;

            }
            .c5{
                margin:-380px 0px 0px 0px;
                color:WHITE;
            }
            #p1{
                padding:20px;
            }
            h4{
                background-color:brown;
                color:white;
                padding:10px 0px 10px 0px;
            }
            #b1{
                font-size:50px;
                color:#2B1700;
            }
            #s1{
                font-size:25px;
                color:#613613;
            }
            .c6{
                padding:30px 0px 0px 50px;
            }
            .c7{
                margin-top:10px;
                color:#2B1700;
            }
            @media screen and (max-width:400px){
                .c4{
                 width:150px;
                 height:150px;
                 margin:-100px 0px 0px 40px;
                }
                .c5{
                margin:-280px 0px 0px 0px;
                color:WHITE;
                }
            }
           
           
        </style>
    </head>
    <body>
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c1">
             
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c2" style="padding:0px">
                
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 c3" style="padding:0px:">

                        <img src="<?php  echo $img; ?>" class="img-responsive c4" alt="Image">
                        

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c5">
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


                            
                             <?php echo $email."<br>"; ?>
                             <?php  echo $mob."<br>" ?>
                            <?php  echo $pin."-".$city.",".$state."<br>";?>


                            <?php
                            $sql="select *from tbllinks where id='$id'";
                            $res=mysqli_query($link,$sql);
                            if(mysqli_num_rows($res)>0)
                            {
                            
                                while($row=mysqli_fetch_array($res))
                                {       ?>                                   
                                            <span id="p2"> <?php echo $row["media"]."(".$row["links"].")<br>";?></span>
                                        <?php
                                }
                            }
                        ?>

                        </div>


                       
                        
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px">
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

                        
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px">
                            <h4><b>EDUCATION</b></h4>
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

                        
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px">
                            <h4><b>SOFTSKILLS</b></h4>
                            <ul>
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
                        
                        
                        
                </div>

                
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="padding:0px">
                      
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  c6">
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
                        
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c7">
                            <ul><h4><b>TECHNICALSKILLS</b></h4>
                            </ul>
                                <ul id="u1">
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


                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c7">
                                <ul>   <h4><b>Experience</b></h4></ul>
                                <ul>
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

                        
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c8">
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
                                        echo",";
                                    }
                                ?>
                            </UL>
                        </div>
                        
                        
                      
                </div>
                
                  
             </div>
             
        </div>
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
