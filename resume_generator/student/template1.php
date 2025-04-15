
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
                height:fit-content;
                background-color:#ededed;
                padding:30px 30px 20px 40px ;
                color:#051650;

            }
            .c1 img{
                width:200px;
                height:250px;
                margin-left:20px;
            }
            .c1 h4{
               padding: 15px 0px 0px 0px;
            }
            .c1 span{
                padding:10px 0px 0px 0px;
            }
            .c2{
                font-size:50px;
                font-family:informatic;
                color:#051650;
                margin:0px 0px 0px -40px;
                display:flex;
                align-items:center;
            }
            .c3{
                background-color:#051650;
                color:white;
                margin-left:-56px;
                padding-left:50px;
            }
            #p1{
                padding:0px 100px 20px 20px;
            }
            .c3 h4{
                padding:10px 0px 10px 20px;
            }
            #b1{
                padding:30px 0px 20px 30px;
            }
            .c4{
                padding:40px 50px 0px 30px;
                text-align:justify;
            }
            .c6{
                margin-top:20px;
            }
           
            .c7{
                height:50px;
                margin:50px 0px 0px 400px;
                background-color:#051650;
            }
            h4{
                color:#051650;
            }
            #s1{
                font-size:25px;
                margin:20px 0px 0px 5px;
            }
            .m2{
                padding:0px 0px 0px 50px;
            }
            .m3{
                padding:30px 0px 0px 20px;
            }
            .c5{
                margin-top:0px;
            }

        </style>
    </head>
    <body>
          
      
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 c1">
             
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
                              
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 m3">
                                    <h4><b>CONTACT</b></h4>
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

                                
                                
                                        <span class="glyphicon glyphicon-envelope" aria-hidden="true">
                                        <?php echo $email; ?>
                                        </span> <br>
                                        
                                        
                                            
                                        <span class="glyphicon glyphicon-earphone" aria-hidden="true">
                                            <?php echo $mob; ?>
                                        </span> <br>
                             
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

                                            <span class="glyphicon glyphicon-map-marker" aria-hidden="true">
                                                    <?php  echo $pin."-";echo $city.",".$state;?>
                                            </span><br>

                                            <?php
                            $sql="select *from tbllinks where id='$id'";
                            $res=mysqli_query($link,$sql);
                            if(mysqli_num_rows($res)>0)
                            {
                            
                                while($row=mysqli_fetch_array($res))
                                {       ?>                                   
                                            <span class="glyphicon glyphicon-link e1" aria-hidden="true">
                                            <span id="p2"> <?php echo $row["media"]."(".$row["links"].")";?></span>
                                        </span> <br>
                                        <?php
                                }
                            }
                        ?>

                                           
                                
                              </div>
           
          </div>
          
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 c2">

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
                <b id="b1"><?php  echo $_SESSION["uname"]."|";  ?></b>
                <span id="s1"> <?php echo $pro; ?></span>
          </div>
          
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8  c3">
               <h4 style="color:white"><b>PROFILE</b></h4>
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
          
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8  c4">
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
          
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 c5">
             
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
                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c6">
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

                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top:10px">
                <ul>
                    <h4><b>INTEREST</b></h4>
                    <?php
                            $sql="select *from tblhobbies where id='$id'";
                            $res=mysqli_query($link,$sql);
                                if(mysqli_num_rows($res)>0)
                            {
                            
                                while($row=mysqli_fetch_array($res))
                                {                                          
                                        echo"<li>".$row["habbies"]."</li>";
                                }
                            }
                        ?>
                        </ul>
                </div>
                
                
             
          </div>
          
         
         <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 m2 ">
           <ul> <h4><b>EDUCATION</b></h4></ul>
          
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
         
         <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" style="margin:20px 0px 0px 40px;">
         <ul>
                    <h4><b>LANGUAGES</b></h4>
                    <?php
                            $sql="select *from tblang where id='$id'";
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
         

         
         
         <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 c7">
            <hr>
         </div>
         
     
        
         
         
          
          
          
          
          
          
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
