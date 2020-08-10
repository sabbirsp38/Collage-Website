<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?> 
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>
                <div class="block"> 
                    <?php 
                if (isset($_GET['delid'])) {
                  $did = $_GET['delid'];
                  $query = "DELETE FROM tbl_user WHERE id='$did'";
                   $db-> delete($query);
                }
               
           ?> 





                    <table class="data display datatable" id="example">
                    <thead>
                        <tr class="odd gradeX">
                            <td>SN</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Phone Number</td>
                            <td>Email</td>
                            <td>Membership</td>
                            <td>Member ID</td>
                            <th>Remove User</th>
                            
                        </tr>
                    </thead>
                    <tbody>

                        <?php 

                        $query = "select * from tbl_user order by id desc";
                        $contact = $db->select($query);
                        if ($contact) {
                            $i=0;
                        while ($result= $contact -> fetch_assoc()) {
                            $i++;


                    ?>

                        <tr class="even gradeC">
                            <td><?php echo $i;  ?></td>
                            <td><?php echo $result['name']; ?></td>
                            <td><?php echo $result['last_name']; ?></td>
                            <td><?php echo $result['user_number']; ?></td>
                            <td><?php echo $result['u_email']; ?></td>
                            <td><?php echo $result['member']; ?></td>
                            <td><?php echo $result['id_number']; ?></td>
                            <td> <a onclick="return confirm('Are you sure to DELETE!');" 

                         href="?delid=<?php echo $result['id']; ?> ?>  ">Delete</a></td>
                            
                        </tr>
                        <?php  }} ?>
                        
                    </tbody>
                </table>
               </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
<?php include 'inc/foter.php'; ?>  

<script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();

            $('.datatable').dataTable();
            setSidebarHeight();


        });
    </script>
