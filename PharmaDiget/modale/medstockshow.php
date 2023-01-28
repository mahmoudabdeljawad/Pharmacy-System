<?php  
                                    include "include/conn.php";
                                    if(isset($_POST['search'])){
                                        $SEARCH=$_POST['search'];
                                        $sql="SELECT * FROM medicines_stock WHERE CONCAT(NAME,GENERIC_NAME,SUPPLIER_NAME) LIKE '%$SEARCH%'";
                                        $query=mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($query)){
                                            ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['ID'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['NAME'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['PACKING'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['GENERIC_NAME'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['BATCH_ID'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['EXPIRY_DATE'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['SUPPLIER_NAME'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['QUANTITY'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['MRP'] ?>
                                        </td>
                                        <td>
                                            <a href="crud/delete.php?deleteid3=<?php echo $row['ID'] ?>">
                                                <button type="button" class="btn btn-danger"><i class="fa fa-trash "aria-hidden="true"></i>
                                            </button></a>

                                                <a href="updatemedstock.php?id=<?php echo $row['ID']; ?>">
                                                <button type="button" class="btn btn-success" ><i class="fa fa-pencil "aria-hidden="true">
                                                 </i></button></a>

                                        </td>
                                     
                                    </tr>
                                    <?php
                                        }}
                                        else if(isset($_POST['ots'])){
                                           $date= date("Y-m-d");
                                                $sql="SELECT * from medicines_stock where QUANTITY = 0 ";
                                                $query=mysqli_query($conn,$sql);
                                                while($row=mysqli_fetch_assoc($query)){
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $row['ID'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['NAME'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['PACKING'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['GENERIC_NAME'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['BATCH_ID'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['EXPIRY_DATE'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['SUPPLIER_NAME'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['QUANTITY'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['MRP'] ?>
                                                        </td>
                                                        <td>
                                            <a href="crud/delete.php?deleteid3=<?php echo $row['ID'] ?>">
                                                <button type="button" class="btn btn-danger"><i class="fa fa-trash "aria-hidden="true"></i>
                                            </button></a>

                                                <a href="updatemedstock.php?id=<?php echo $row['ID']; ?>">
                                                <button type="button" class="btn btn-success" ><i class="fa fa-pencil "aria-hidden="true">
                                                 </i></button></a>

                                        </td>
            
            
                                                       
            
            
            
                                                    </tr>
                                                    <?php
                                                }
                                        }else if(isset($_POST['exp'])){
                                            $date= date("Y-m-d");
                                                 $sql="SELECT * from medicines_stock where EXPIRY_DATE <= '$date' ";
                                                 $query=mysqli_query($conn,$sql);
                                                 while($row=mysqli_fetch_assoc($query)){
                                                     ?>
                                                     <tr>
                                                         <td>
                                                             <?php echo $row['ID'] ?>
                                                         </td>
                                                         <td>
                                                             <?php echo $row['NAME'] ?>
                                                         </td>
                                                         <td>
                                                             <?php echo $row['PACKING'] ?>
                                                         </td>
                                                         <td>
                                                             <?php echo $row['GENERIC_NAME'] ?>
                                                         </td>
                                                         <td>
                                                             <?php echo $row['BATCH_ID'] ?>
                                                         </td>
                                                         <td>
                                                             <?php echo $row['EXPIRY_DATE'] ?>
                                                         </td>
                                                         <td>
                                                             <?php echo $row['SUPPLIER_NAME'] ?>
                                                         </td>
                                                         <td>
                                                             <?php echo $row['QUANTITY'] ?>
                                                         </td>
                                                         <td>
                                                             <?php echo $row['MRP'] ?>
                                                         </td>
                                                         <td>
                                             <a href="crud/delete.php?deleteid3=<?php echo $row['ID'] ?>">
                                                 <button type="button" class="btn btn-danger"><i class="fa fa-trash "aria-hidden="true"></i>
                                             </button></a>
 
                                                 <a href="updatemedstock.php?id=<?php echo $row['ID']; ?>">
                                                 <button type="button" class="btn btn-success" ><i class="fa fa-pencil "aria-hidden="true">
                                                  </i></button></a>
 
                                         </td>
             
             
                                                        
             
             
             
                                                     </tr>
                                                     <?php
                                                 }
                                         }
                                        
                                        else {
                                        $sql="SELECT * FROM medicines_stock ";
                                        $query=mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($query)){
                                                  ?>
                                        <tr>
                                            <td>
                                                <?php echo $row['ID'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['NAME'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['PACKING'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['GENERIC_NAME'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['BATCH_ID'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['EXPIRY_DATE'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['SUPPLIER_NAME'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['QUANTITY'] ?>
                                            </td>
                                            <td>
                                                <?php echo $row['MRP'] ?>
                                            </td>
                                            <td>
                                            <a href="crud/delete.php?deleteid3=<?php echo $row['ID'] ?>">
                                                <button type="button" class="btn btn-danger"><i class="fa fa-trash "aria-hidden="true"></i>
                                            </button></a>

                                                <a href="updatemedstock.php?id=<?php echo $row['ID']; ?>">
                                                <button type="button" class="btn btn-success" ><i class="fa fa-pencil "aria-hidden="true">
                                                 </i></button></a>

                                        </td>


                                            <?php }
                                            } ?>



                                        </tr>