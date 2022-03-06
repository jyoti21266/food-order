<?php include("partials/menu.php"); ?>
         
        <!--main section -->
       
             <h1 class="banner">DASHBOARD</h1>
            
              
               
               <div data-aos="fade-left">
     <div class="wrapper-box text-center banner1">
               <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM tbl_category";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count = mysqli_num_rows($res);
                    ?>
                    <div class="text1">
                   <div class="wrapper-head"><?php echo $count;?></div>
                   <div class="wrapper-body"><i class="fas fa-utensils"></i> Category</div></div>
            </div>
               </div>
               <div data-aos="fade-right">
               <div class="wrapper-box text-center banner2">
               <?php 
                        //Sql Query 
                        $sql2 = "SELECT * FROM tbl_food";
                        //Execute Query
                        $res2 = mysqli_query($conn, $sql2);
                        //Count Rows
                        $count2 = mysqli_num_rows($res2);
                    ?>
                  <div class="text1">
                   <div class="wrapper-head"><?php echo $count2;?></div>
                   <div class="wrapper-body"><i class="fas fa-hamburger"></i> Foods</div>
                      </div>
                   
            </div>
            <div class="overlay"></div>
               </div>
             
               <div data-aos="fade-left">
               <div class="wrapper-box text-center banner3">

               <?php 
                        //Sql Query 
                        $sql3 = "SELECT * FROM tbl_order";
                        //Execute Query
                        $res3 = mysqli_query($conn, $sql3);
                        //Count Rows
                        $count3 = mysqli_num_rows($res3);
                    ?>
                    <div class="text1">
                   <div class="wrapper-head"><?php echo $count3;?></div>
                   <div class="wrapper-body"><i class="fas fa-truck-loading"></i>  Total Orders</div>
</div>
               </div>
            </div>
            <div data-aos="fade-right">
               <div class="wrapper-box text-center banner4">
               <?php 
                        //Creat SQL Query to Get Total Revenue Generated
                        //Aggregate Function in SQL
                        $sql4 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered'";

                        //Execute the Query
                        $res4 = mysqli_query($conn, $sql4);

                        //Get the VAlue
                        $row4 = mysqli_fetch_assoc($res4);
                        
                        //GEt the Total REvenue
                        $total_revenue = $row4['Total'];

                    ?>
                  <div class="text1">
                   <div class="wrapper-head"><i class="fas fa-rupee-sign"></i><?php echo $total_revenue;?></div>
                   <div class="wrapper-body"><i class="fas fa-coins"></i>  Total purchase</div>
</div>
               </div>
            </div>
            </div>
           </div>
       
        <!--main section ends -->

 
   