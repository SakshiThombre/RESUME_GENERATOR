
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
           body{
            /* background-color:#E2F3F9; */
            background-image:url("img/b5.webp");
            background-size:100% 100%;
            background-repeat:no-repeat;
            height:650px;
           }
           #b1{
            box-shadow:2px 2px 3px #333;
            background-color:rgb(224, 228, 230);
            font-weight:bold;
            border:1px solid #fff;
           }
           #d4{
            display:flex;
           }
           #h1{
            /* margin-left:-150px; */
            font-family:Lucida Console;
            background-color:rgb(237, 244, 245);
            padding:10px;
            box-shadow:3px 3px 3px rgb(20, 21, 21);
            text-align:center;
           }
           #d3{
            margin:30px 0px 0px 110px;
            font-family:Lucida Console;

           }
           /* #b2{
            padding:10px;
           } */
           #d2{
            height:600px;
            /* background-color:rgba(242, 249, 251, 0.99); */
           }
           @media screen and (max-width: 400px) {
            body{
                background-image:none;
            }
            #d3{
            margin:5px 0px 0px -50px;
           }
           }
           
        </style>
        <script>
        function chkform() {
            let cname = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz ";
            let name = document.getElementById("txtname").value;
            for (i = 0; i < name.length; i++) {
                let ch = name.charAt(i);
                if (cname.indexOf(ch) == -1) {
                    alert("Invalid name");
                    return false;
                }
            }

            let mobno = document.getElementById("txtmob").value;
            if (mobno.length !== 10) {
                alert("Mobile no must be have 10 digits......");
                return false;
            }

            let pass = document.getElementById("txtpass").value;
            if (pass.length < 8) {
                alert("Invalid password.....");
                return false;
            }


            let repass = document.getElementById("txtrpass").value;
            if (pass !== repass) {
                alert("Repass is not matched to password....");
                return false;
            }
            return true;

        }
    </script>

    </head>
    <body>
         
      
      
            
           <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" id="d4">
            <div class="page-header" >
              <h4 id="h1"><b>Register here</b></h4>
              
            </div>

            
            <!-- <img src="img/b6.png" class="img-responsive" alt="Image"> -->
            
           </div>
           
            
      
         
           <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="d3">
                 
                 <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10" style="margin:10px 0px 0px 60px;">
                 <div class="panel panel-info " id="d2" style="box-shadow:3px 3px 3pxrgb(20, 23, 23);">
                      <!-- <div class="panel-heading">
                            <h3 class="panel-title"><b>New Registration</b></h3>
                      </div> -->
                      <div class="panel-body">
                                <form action="savenewreg.php" method="POST" role="form" onsubmit="return chkform()">  
                                    
                                <?php
                                $sql="select max(id) from tblstudent";
                                $res=mysqli_query($link,$sql);
                                $rowcount=0;
                                if(mysqli_num_rows($res)>0)
                                {
                                    if($row=mysqli_fetch_array($res))
                                    {
                                        $rowcount=$row[0]+1;
                                    }
                                
                                    else
                                    {
                                        $rowcount=1;
                                    }
                                }
                                ?>
                                <div class="form-group">
                                    <label for="">Id:</label>
                                    <input type="number" class="form-control" id="txtid" name="txtid"   value="<?php echo $rowcount; ?>" placeholder="Id">
                                </div>
                            
                                <div class="form-group">
                                    <label for="">Name:</label>
                                    <input type="text" class="form-control" id="txtname" name="txtname" placeholder="Name">
                                </div>
                        
                                <div class="form-group">
                                    <label for="">Email:</label>
                                    <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="Email">
                                </div>
                            
                                <div class="form-group">
                                    <label for="">Mobile:</label>
                                    <input type="text" class="form-control" id="txtmob" name="txtmob" placeholder="Mobile">
                                </div>
                                <div class="form-group">
                                    <label for="">Profession:</label>
                                    <input type="text" class="form-control" id="txtper" name="txtper" placeholder=" Profession">
                                </div>
                            
                                <div class="form-group">
                                    <label for="">Password:</label>
                                    <input type="password" class="form-control" id="txtpass" name="txtpass" placeholder="Password">
                                </div>
                               
                            
                                <div class="form-group">
                                    <label for="">Repass:</label>
                                    <input type="password" class="form-control" id="txtrpass" name="txtrpass" placeholder="Confirm Password">
                                </div>
                            
                                
                            
                                <button type="submit" name="btnsave" class="btn btn-default" id="b1">Save</button>
                            </form>
                            
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
