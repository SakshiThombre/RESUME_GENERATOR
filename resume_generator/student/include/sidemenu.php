
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
                background-image:url("../img/back1.jpg");
                background-size:100% 100%;
            }
             #d1{
                height:800px;
                /* background-color:#59A9B5; */
             }
            
             #d2{
                display:flex;
                height:100px;
                width:100px;
                border-radius:360px;
                background-color:white;
                box-shadow:5px 5px 3px #438797;
                margin:20px 0px 30px 10px;
             }
             a b{
                text-decoration:none;
                display:block;
                margin: 0px 0px 0px 0px;
                color:Black;
                /* text-align:center; */
                font-size:15px;
                padding:8px;
             }
            
             #i1{
                margin:40px 0px 0px 30px;
                font-size:20px;
             }
             #myDIV{
                padding-top:10px;
                padding-left:300px;
                display:none;
             }
             @media screen and (max-width: 400px) {
               
                #myDIV{
                    overflow:scroll;
                    padding-left:0px;
                }
                #myDIV::-webkit-scrollbar{
                            display: none;
                }
                #i1{
                margin:130px 0px 0px 0px;
                 }
                 
             }
            
           
        </style>
    </head>
    <body>
         <script>
            function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "flex";
            } else {
                x.style.display = "none";
            }
            }
         </script>
         <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="d1">
            
          
         <span class="glyphicon glyphicon-list" id="i1" aria-hidden="true" onclick="myFunction()"></span>    
         <span class="glyphicon glyphicon-off"  aria-hidden="true"  onclick="logout()"
                 style="color:black; font-size: 20px; margin-left:10px;"
                 ></span>
                 
                  <script>          
                  function logout(){
                      ans=confirm("Do you want logout...")
                      if(ans)
                      {
                            open("../logout.php","_self"); 
                      }
                      else
                      {
                            alert("You click cancel...");
                      }
                     }
                </script>
                
         <div id="myDIV">
                <a href="education.php"><b>Education</b></a>
                <a href="softskill.php"><b>Softskill</b></a>
                <a href="hardskill.php"><b>TechnicalSkill</b></a>
                <a href="experience.php"><b>Experience</b></a>
                <a href="certification.php"><b>Certification</b></a>
                <a href="language.php"><b>Language</b></a>
                <a href="links.php"><b>Links</b></a>
                <a href="personal.php"><b>Personal</b></a>
                <a href="hobbies.php"><b>Hobbies</b></a>
                <a href="upload.php"><b>Photo</b></a>
                <a href="report.php"><b>Report</b></a>
                <a href="template.php"><b>Template</b></a>
                <a href="index.php"><b>Objective</b></a>
               
           </div>    
         </div>
         <?php
            include("header.php");
         ?>
         
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
