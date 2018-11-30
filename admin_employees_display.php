<?php
    
    include "includes/admin_header.php";
?>
<?php
    include "db.php";
?>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Plain Page</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Plain Page</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <?php

                                    $res=mysqli_query($connection,"select *from employees" );
                                    echo "<table class='table table-border'>";
                                    echo "<tr>";
                                    echo "<th>";echo "Fullname";echo "</th>";
                                    echo "<th>";echo "username";echo "</th>";
                                    echo "<th>";echo "email";echo "</th>";
                                    echo "<th>";echo "status";echo "</th>";
                                    echo "<th>";echo "Approve";echo "</th>";
                                    echo "<th>";echo "Not Approve";echo "</th>";
                                    echo "</tr>";
                                    while ($row=mysqli_fetch_array($res)) {
                                        echo "<tr>";
                                        echo "<td>";echo $row["fullname"];echo "</td>";
                                        echo "<td>";echo $row["username"];echo "</td>";
                                        echo "<td>";echo $row["email"];echo "</td>";
                                        echo "<td>";echo $row["status"];echo "</td>";
                                        echo "<td>";?><a href="employee_approve.php?id=<?php echo $row["id"]?>">
                                            approve
                                        </a> <?php echo "</td>";
                                        echo "<td>";?><a href="employee_notapprove.php?id=<?php echo $row["id"]?>">
                                            not approve
                                        </a> <?php echo "</td>";
                                        
                                         echo "</tr>";
                                    }
                                    echo "</table>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


       <?php
    
        include "includes/admin_footer.php";
?>