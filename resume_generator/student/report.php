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
           .img1{
             width:150px;
             height:150px;
             margin:10px 0px 10px 20px;
           }
           .c1{
            text-align:center;
            font-size:40px;
            font-family:informatic;
            padding-bottom:20px;
           }
          
           #icon{
            font-size:30px;
            padding:10px;
            text-decoration:none;
            color:black;
           }

           .per1{
            margin:-170px 0px 0px 280px;
           }
           .c3{
            margin:20px 0px 0px 50px;
           }
           .m1 {
            padding:0px 0px 50px 0px;
           }
           .m2{
            margin: 30px 0px 0px 30px;
           }
           .m5{
            width:90%;
            padding:30px 0px 30px 0px;
           }
           .m10{
            margin:30px 0px 0px 50px;
           }


           @media only screen and  (max-width:400px){

            .m1 {
                padding:0px 0px 50px 0px;
            }
            .per1{
            margin:0px 0px 0px 0px;
           }
           .c3{
            margin:20px 0px 0px 0px;
           }

           .m10{
            margin:30px 0px 0px 0px;
           }
           .m2{
            margin: 10px 0px 0px 0px;
           }
           .s1{
            margin-top:20px;
           }
           }
        </style>
    </head>
    <body>
          
          
    
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 c1">           
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
                                            <h2><b><?php echo $_SESSION["uname"]; ?></b>
                                            </h2> 
                                            <h4><?php echo $email; ?> | <?php echo $mob; ?>
                                            </h4>
                    </div>

         
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 m1">
                                
                    
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  m5">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 c2">
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
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
                                    

                            
                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7  per1">
                            <p><b><u>Personal :</u></b></p>
                                <?php
                                            $id=$_SESSION["id"];
                                        $sql="select * from tblpersonal where id='$id'";
                                            $res=mysqli_query($link,$sql);
                                            if(mysqli_num_rows($res)>0)
                                            {
                                                if($row=mysqli_fetch_array($res))
                                                {
                                                    echo"Address :".$row["1"]."<br>";
                                                    echo"City :".$row["2"]."<br>";
                                                    echo"State :".$row["3"]."<br>";
                                                    echo"Pin :".$row["4"]."<br>";
                                                    echo"Gender :".$row["5"]."<br>";
                                                    echo"Birth :".$row["6"]."<br>";
                                                }
                                            }
                                        ?>
                            </div>
                                        </div>
                            
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c3">
                        <b><p><u>Education :</u></p></b>
                        <table class="table table-bordered table-hover" id="data">
                                            <thead>
                                                <tr>
                                                    <th style="display:none;">Sr.No</th>
                                                    <th>Edu Name</th>
                                                    <th>University</th>
                                                    <th>PassYear</th>
                                                    <th>Result</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $sql="select *from tbleducationo where id='$id'";
                                            $res=mysqli_query($link,$sql);
                                            if(mysqli_num_rows($res)>0)
                                            {
                                                while($row=mysqli_fetch_array($res))
                                                {
                                                    ?>
                                                    <tr>
                                                        <td style="display:none;"><?php echo $row[1]; ?></td>
                                                        <td><?php echo $row[2]; ?></td>
                                                        <td><?php echo $row[3]; ?></td>
                                                        <td><?php echo $row[4]; ?></td> 
                                                        <td><?php echo $row[5]; ?></td>
                                                    </tr>

                                                    <?php
                                                }
                                            }
                                        ?>
                                            </tbody>
                        </table>
                    </div>

                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  m10" >
                    <p ><b><u>Experience :</u></b></p>
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
                    
                   
                  
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  m2">
                                
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 s1">
                                    <p id="p1"><b><u>Softskills :</u></b></p>
                                                <?php
                                                    $sql="select *from tblsoft where id='$id'";
                                                    $res=mysqli_query($link,$sql);
                                                    if(mysqli_num_rows($res)>0)
                                                    {
                                                        while($row=mysqli_fetch_array($res))
                                                        {                                          
                                                                echo $row["skill"]."<br>";
                                                        }
                                                    }
                                                ?>
                                </div>

                                
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3  s1">
                                    <p id="p1"><b><u>Technicalskills :</u></b></p>
                                                <?php
                                                    $sql="select *from tblhard where id='$id'";
                                                    $res=mysqli_query($link,$sql);
                                                    if(mysqli_num_rows($res)>0)
                                                    {
                                                        while($row=mysqli_fetch_array($res))
                                                        {                                          
                                                                echo $row["skill"]."<br>";
                                                        }
                                                    }
                                                ?>
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3  s1">
                                    <p id="p1"><b><u>Language :</u></b></p>
                                    
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
                                    
                                </div>

                                
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3  s1">
                                    <p id="p1"><b><u>Media links</u></b></p>
                                        <?php
                                            $sql="select *from tbllinks where id='$id'";
                                            $res=mysqli_query($link,$sql);
                                            if(mysqli_num_rows($res)>0)
                                            {
                                                while($row=mysqli_fetch_array($res))
                                                {
                                                    
                                                        echo $row[2]."-"; 
                                                        echo $row[3]."<br>"; 
                                                
                                                }
                                            }
                                        ?>
                                </div>
                            
                  </div>
                        
                   
                </div>
                    
              

         </div>
         <a href="template.php" class="glyphicon glyphicon-arrow-right" id="icon" aria-hidden="true"></a>       


        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
