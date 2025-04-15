
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
              $(function(){
                     $("#data").on("click",function(event){
                            var value=[];
                            var count=1;
                            $(this).find("li").each(function(){
                                   value[count]=$(this).text();
                                   count++;
                            });
                            $("#txtaddress").val(value[1]);
                            $("#txtcity").val(value[2]);
                            $("#txtstate").val(value[3]);
                            $("#txtpin").val(value[4]);
                            $("#txtms").val(value[5]);
                            $("#txtgen").val(value[6]);
                            $("#txtbirth").val(value[7]);
                     });
              });

       </script>
       <style>
          #btnsave{
             border-radius:5px;
             background-color:#D3D3D3;
             border:1px solid #fff;
             box-shadow:2px 2px 2px #333;
           }
           #icon{
            font-size:30px;
            padding:10px;
            text-decoration:none;
            color:black;
           }
           .marg{
            margin:50px 0px 0px 0px;
           }
           @media screen and (max-width: 400px) {
            .marg{
                margin:-600px 0px 0px 0px;
            }
           }
       </style>

    </head>
    <body>

          <?php
             include("include/sidemenu.php");
          ?>
         <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 marg">
            
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin:35px 0px 0px 0px;">
                
                <div class="panel panel-default" style=" box-shadow: 10px 10px 10px #333;">
                      <div class="panel-heading">
                            <h3 class="panel-title">Personal</h3>
                      </div>
                      <div class="panel-body">
                            
                            <form action="personalsave.php" method="POST" role="form" >
                            <?php
                                $id=$_SESSION["id"];
                                $sql="select max(srno) from tbllinks where id='$id'";
                                $res=mysqli_query($link,$sql);
                                $rowcount=0;
                                if(mysqli_num_rows($res)>0)
                                {
                                    if($row=mysqli_fetch_array($res))
                                    {
                                        $rowcount=$row[0]+1;
                                    }
                                }
                                else
                                {
                                    $rowcount=1;
                                }

                            ?>
                                   
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="txtaddress" name="txtaddress" placeholder="Address">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" id="txtcity" name="txtcity" placeholder="City">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="txtstate" name="txtstate" placeholder="State">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="txtpin" name="txtpin" placeholder="Pincode">
                                    </div>
                                    <div class="form-group">
                                         <select name="txtgen" id="txtgen">
                                            <option value="Male">Male</option>
                                            <option value="Female">Femail</option>
                                         </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="txtbirth" name="txtbirth" placeholder="Birth Date">
                                    </div>
                                   
                                <button type="submit" name="personalsave" id="btnsave" class="btn btn-default">Save</button>
                            </form>
                            
                      </div>
                </div>


            </div>
       
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" style="margin:35px 0px 0px 0px;">
                
                <div class="panel panel-default" style=" box-shadow: 10px 10px 10px #333;">
                      <div class="panel-heading">
                            <h3 class="panel-title">Personal</h3>
                      </div>
                      <div class="panel-body">
                          <ul class="list-group list1" id="data">
                                <?php
                                $id=$_SESSION["id"];
                               $sql="select * from tblpersonal where id='$id'";
                                $res=mysqli_query($link,$sql);
                                if(mysqli_num_rows($res)>0)
                                {
                                    if($row=mysqli_fetch_array($res))
                                    {
                                        echo"<li class='list-group-item'>".$row["1"]."</li>";
                                        echo"<li class='list-group-item'>".$row["2"]."</li>";
                                        echo"<li class='list-group-item'>".$row["3"]."</li>";
                                        echo"<li class='list-group-item'>".$row["4"]."</li>";
                                        echo"<li class='list-group-item'>".$row["5"]."</li>";
                                        echo"<li class='list-group-item'>".$row["6"]."</li>";
                                    }
                                }
                            ?>
                            </ul>
                      </div>
                      <a href="hobbies.php" class="glyphicon glyphicon-arrow-right" id="icon" aria-hidden="true"></a>
                </div>
                
            </div>
            
        </div>

        <!-- jQuery -->
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
