
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
                $("#data").on("click","tr",function(event){
                    var values=[];
                    var count=0;
                    $(this).find("td").each(function(){
                        values[count]=$(this).text();
                        count++;
                    });
                    $("#txtsr").val(values[0]);
                    $("#txts").val(values[1]);
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
            
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin:50px 0px 0px 0px;">
                
                <div class="panel panel-default"  style=" box-shadow: 10px 10px 10px #333;">
                      <div class="panel-heading">
                            <h3 class="panel-title">Add Experience</h3>
                      </div>
                      <div class="panel-body">
                            
                        <form action="experiencesave.php" method="POST" role="form" >
                            <?php
                                $id=$_SESSION["id"];
                                $sql="select max(srno) from tblexperience where id='$id'";
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

                                    <div class="form-group" style="display:none;">
                                        <label for="">Sr.no:</label>
                                        <input type="text" class="form-control" id="txtsr" name="txtsr"
                                        value="<?php echo $rowcount; ?>" placeholder="Input field">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="txts" name="txts" placeholder="Experience">
                                    </div>
                                   
                                <button type="submit" name="btnsave" id="btnsave" class="btn btn-default">Save</button>
                            </form>
                            
                      </div>
                </div>


            </div>
            <style>
                #thdelete{
                    width:50px;

                }
              
            </style>
            
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="margin:50px 0px 0px 0px;">
                
                <div class="panel panel-default"  style=" box-shadow: 10px 10px 10px #333;">
                      <div class="panel-heading">
                            <h3 class="panel-title">Experience</h3>
                      </div>
                      <div class="panel-body">
                      <table class="table table-bordered table-hover" id="data">
                                <thead>
                                    <tr>
                                        <th  style="display:none;">Sr.No</th>
                                        <th>Experience</th>
                                        <th id="thdelete">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql="select *from tblexperience where id='$id'";
                                $res=mysqli_query($link,$sql);
                                if(mysqli_num_rows($res)>0)
                                {
                                    while($row=mysqli_fetch_array($res))
                                    {
                                        ?>
                                        <tr>
                                            <td style="display:none"><?php echo $row["srno"]; ?></td>
                                            <td><?php echo $row["experience"]; ?></td>
                                            <td>
                                            <a href="experiencesave.php?btndelete=delete&srno=<?php echo $row["srno"]; ?>" type="button" class="btn btn-danger">
                                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                            </a>

                                            </td>
                                        </tr>

                                        <?php
                                    }
                                }
                            ?>
                                </tbody>
                            </table>

                      </div>
                      <a href="certification.php" class="glyphicon glyphicon-arrow-right" id="icon" aria-hidden="true"></a>
                </div>
               
            </div>
            
        </div>

        <!-- jQuery -->
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
