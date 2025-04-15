
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
                height:650px;
                background-image:url("img/back1.avif");
                background-size:100% 100%;  
            background-repeat:no-repeat;
           }
           #b1{
            margin:10px 0px 10px 0px;
            background-color:rgb(209, 216, 218);
            font-weight:bold;
            border-radius:50px;
            box-shadow:2px 2px 3px #333;
           }
           #h1{
            font-family:Arial;
            margin:0px -55px 0px 55px;
            padding:26px 10px 26px 10px;
            background-color:rgb(221, 225, 227);
            box-shadow:3px 3px 3px #438797;
            text-align:center;
           }
           .panel-body{
            padding:30px 20px 30px 20px;
           }
           #d3{
            display: flex;
            font-size:16px;
            padding-top:30px;
           }
           #s1{
            color:blue;
            font-family:Papyrus;
            font-weight:bold;
           }
           #d5{
            font-family:Lucida Console;
            margin-top:40px;
           }
           @media screen and (max-width: 400px) {
            body {
                background-image:none;
            }
            #h1{
            margin:0px 0px 0px 0px;
            padding:20px 10px 20px 10px;
           }
            }
        </style>
    </head>
    <body>
          
          
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">          
                    <div class="page-header">
                    <h4 id="h1"><b>CREATE YOUR RESUME</b></h4>
                    </div>              
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    
                </div>
          

          </div>
          
            
        
        
        
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            
            <div class="panel panel-default" id="d5" style="box-shadow:3px 3px 3px #438797">
                  <div class="panel-heading">
                        <h3 class="panel-title" style="text-align:center;"><b>LOGIN</b></h3>
                  </div>
                  <div class="panel-body">
                       
                       <form action="checklogin.php" method="POST" role="form">
                      
                        <div class="form-group">
                            <!-- <label for="">Id:-</label> -->
                            <input type="text" class="form-control" id="txtid" name="txtid" placeholder="Enter your ID">
                        </div>
                       
                        <div class="form-group">
                            <!-- <label for="">Pass:-</label> -->
                            <input type="text" class="form-control" id="txtpass" name="txtpass" placeholder="Enter your PASSWORD">
                        </div>
                        
                       
                        <button type="submit" name="btnlogin" class="btn btn-default" id="b1">Submit</button>
                         
                        
                         
                       </form>
                       
                  </div>
            </div>
            
            <!-- <div class="well" style="box-shadow:3px 3px 3px #438797">              -->
            <div class="container" id="d3">
            <p style="font-family:Lucida Console;">Not your account?</p>&nbsp;<a href="newreg.php" type="button"  ><span id="s1"> Create here</span></button> 
        </div>         
            <!-- </div>
             -->
            
        </div>


        
        
        
          
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
