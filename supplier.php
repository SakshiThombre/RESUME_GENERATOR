
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
        <script type="text/javascript">
         $(document).ready(function()
        {
              $("#display").on("click", "tbody tr", function (event)
               {
                var values = [];
                var count = 0;
                 $(this).find("td").each(function ()
                 {
                    values[count] = $(this).text();
                    count++;
                 });
                    $('#id').val(values[0]);
                    $('#cname').val(values[1]);
                    $('#addr').val(values[2]);
                    $('#mno').val(values[3]);
                    $('#op1').html(values[4]);
                    $('#op2').html(values[5]);
                    $('#bal').val(values[7]);

                });
        });
            </script>
    <body>
    <?php include("heading.html");?>
        <div class="container-fluid">
            <?php 
                    include("dbcon.php");
                    include("suppliersave.php");
                    include("search.php");
            ?>
        </div>
        <?php include("sidemenu1.php"); ?>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 maincontent"> 
            <!----------------   Panel Start   --------------->
            <div class="panel panel-default contentinside">
            <div class="panel-heading"><B>SUPPLIER</B></div>
            <!----------------   Panel Body Start   --------------->
            <div class="panel-body">
                <ul class="nav nav-tabs ">
                    <li role="presentation"><a href="#add"><B>ADD SUPPLIER</B></a></li>
                </ul>
                 <!----------------   Add Customer Start   ---------------> 
                <div id="add" class="switchgroup">
                <div class="panel panel-default">
                <div class="panel-body">             
                    <form class="form-horizontal"  role="form" method="post">    
                            <div class="form-group">  
                                <label class="control-label col-sm-2" for="suppid">Supplier ID</label>  
                                  <?php
                                     $result=mysqli_query($dbcon,"select max(id) from tblsupplier");
                                     $id=1;
                                     if($res=mysqli_fetch_array($result))
                                    {
                                     $id=$res[0]+1;
                                    }
                                 ?> 
                                <div class="col-sm-4"> 
	                                <input id="id" type="text" name="txtId" class="form-control" value="<?php echo $id; ?>">  
	                            </div>  
	                        </div>  
	                        <div class="form-group">  
	                            <label class="control-label col-sm-2" for="custname">Supplier Name</label>  
	                                <div class="col-sm-4">            
	                                    <input id="sname" type="text" name="txtName" class="form-control" placeholder="Enter Name">  
                                    </div> 
                            </div>    
                            <div class="form-group">  
	                            <label class="control-label col-sm-2" for="addr">Address</label>  
	                                <div class="col-sm-4">            
	                                    <input id="addr"type="text"  name="txtAddr"class="form-control" placeholder="Enter Address">  
                                    </div> 
                            </div>  
                            <div class="form-group">  
	                            <label class="control-label col-sm-2" for="mno">Mobile No</label>  
	                                <div class="col-sm-4">            
	                                    <input id="mno" type="text" name="txtMno"class="form-control" placeholder="Enter Mobile Number">  
                                    </div> 
                            </div>  
                            <div class="form-group">  
                                <label class="control-label col-sm-2" for="state">State</label>
                                    <div class="col-sm-4">            
                                        <select class="form-control" name="cmbState">
                                        <option id="op1" value="Select State">Select State</option> 
                                        <?php
                                            $result=mysqli_query($dbcon,"select DISTINCT state from tblstate");
                                            while($res=mysqli_fetch_array($result))
                                        {
                                            echo "<option value='".$res[0]."'>".$res[0]."</option>";
                                        
                                        }
                                        ?>
                                        </select> 
                                    </div> 
                            </div>    
                            <div class="form-group">  
	                            <label class="control-label col-sm-2" for="city">City</label>  
	                            <div class="col-sm-4">            
                                    <select class="form-control" name="cmbCity">
                                    <option id="op2" value="Select City">Select City</option> 
                                     <?php
                                        $result=mysqli_query($dbcon,"select DISTINCT city from tblcity");
                                        while($res=mysqli_fetch_array($result))
                                       {
                                        echo "<option value='".$res[0]."'>".$res[0]."</option>";
                                      
                                       }
                                        ?>
                                    </select> 
                                </div> 
                            </div>
                            <div class="form-group">  
                                <label class="control-label col-sm-2" for="bal">Balance</label>  
	                                <div class="col-sm-4"> 
	                                    <input id="bal" type="text" name="txtBal"class="form-control"  placeholder="Enter Balance">  
	                                </div>  
                            </div>   
         	                <div class="form-group">  
                                <div class="col-xs-offset-2 col-xs-6">  
	                                <button type="submit" class="btn btn-primary" name="submit">Save</button>  
                                    <button type="reset" class="btn btn-default" name="reset">Reset</button>
                                </div>  
                            </div>     
	                    </form> 
                    </div> 
                </div>
            </div>
            <!----------------   Add Customer Ends   --------------->
        <div class="form-group input-group col-md-offset-3 col-md-4">
        <input type="search" name="search" id="search" class="form-control" placeholder="search here">
            <span class="input-group-addon ">
                <i class="glyphicon glyphicon-search"></i>
            </span>
        </div>
            <!----------------   Display Customer Data List start   --------------->
            <div id="list" class="switchgroup">
                <table class="table table-striped table-bordered" id="display" name="display">
                    <tr>
                        <th style="text-align:center;">ID</th>
                        <th style="text-align:center;">NAME</th>
                        <th style="text-align:center;">ADDRESS</th>
                        <th style="text-align:center;">MOBILE NO.</th>
                        <th style="text-align:center;">STATE</th>
                        <th style="text-align:center;">CITY</th>
                        <th style="text-align:center;">BALANCE</th>
                        <th style="text-align:center;">OPTION</th>
                    </tr>
                    <?php 
                        $result=mysqli_query($dbcon,"select * from tblsupplier");
                        while($res=mysqli_fetch_array($result))
                        {
                         echo '<tr id="t1">';
                         echo '<td style="text-align:center;">'.$res['Id'].'</td>';
                         echo '<td style="text-align:center;">'.$res['Sname'].'</td>';
                         echo '<td style="text-align:center;">'.$res['Address'].'</td>';
                         echo '<td style="text-align:center;">'.$res['Mno'].'</td>';
                         echo '<td style="text-align:center;">'.$res['State'].'</td>';
                         echo '<td style="text-align:center;">'.$res['City'].'</td>';
                         echo '<td style="text-align:center;">'.$res['Bal'].'</td>';
                         echo '<td style="text-align:center;"><a onClick=\"javascript: return confirm("Are you sure you want to delete record");\"  href="suppliersave.php?action=remove&id='.$res['Id'].'" class="btn btn-danger" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>';
                         echo '</tr>';
                        }
                    ?>     
                    </table>
                    </div>
                    <!----------------   Display Customer List ends   --------------->
                </div>
                <!----------------   Panel Body Ends   --------------->
            </div>
        </div> 
	</div>
</body>
</html>
