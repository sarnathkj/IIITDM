<div class="cbp-l-inline">
    <div class="cbp-l-inline-left">
        <img src="assets/img/team/img4-md.jpg" alt="Dashboard" class="cbp-l-project-img">
    </div>

    <div class="cbp-l-inline-right">
        <div class="cbp-l-inline-title text-uppercase margin-bottom-60">B. Tech - Computer Engineering</div>
        
        <!--Basic Table-->
        <div class="panel panel-green margin-bottom-40">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-tasks"></i> Batches</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Batch Year</th>
                        <th>Chart</th>
                    </tr>
                </thead>
                
                <tbody>
                    
                    <?php
                        $path = $_SERVER['DOCUMENT_ROOT'];
                        $path .= '/databaseConnection.php';
                        include($path);
                        
                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        $sql = "SELECT DISTINCT batch_id FROM students_profile WHERE programme_id=1";
                        $result = mysqli_query($conn, $sql);
                        $i=1;
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>$i</td>";
                            
                            $inner_sql = "SELECT year FROM batch WHERE id=".$row['batch_id'];
                            $inner_result = mysqli_query($conn, $inner_sql);
                            $batch = mysqli_fetch_assoc($inner_result);
                                
                            echo "<td>".$batch['year']."</td>";
                            echo '<td><a href=viewStudents.php?batch_id='.$row['batch_id'].'&programme_id=1><span class="label label-success">View List</span></a></td>';
                            echo "</tr>";
                            $i++;
                        }
                        mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
        <!--End Basic Table-->
        
    </div>
</div>
