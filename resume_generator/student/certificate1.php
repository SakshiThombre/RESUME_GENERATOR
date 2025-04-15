
                 <div>
                        <form action="csave1.php" method="POST" role="form" enctype="multipart/form-data">
                        <?php
                                $name=$_SESSION["uname"];
                                $sql="select max(id) from studphoto1 where name='$name'";
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
                               <label for="">Id:</label>
                               <input type="text" class="form-control" id="txtid" name="txtid"  value="<?php echo $rowcount; ?>"placeholder="Input field">
                           </div>

                           <div class="form-group">
                               <input type="file" class="form-control" id="txtfile" name="txtfile" placeholder="Input field">
                           </div>
                        
                          
                       <button type="submit" name="btnsave" id="btnsave" class="btn btn-default">Upload</button>
                      </form>
                            
                    </div>
              