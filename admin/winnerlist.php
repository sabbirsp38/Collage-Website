<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?> 
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>
                <div class="block"> 
                   





                    <table class="data display datatable" id="example">
                    <thead>
                        <tr class="odd gradeX">
                            <td>SN</td>
                            <td>Name</td>
                            <td>Phone Number</td>
                            <th>Amount</th>
                            <th>Time</th>
                            
                        </tr>
                    </thead>
                    <tbody>

                        <?php 

                        $query = "select * from tbl_winner order by id desc";
                        $contact = $db->select($query);
                        if ($contact) {
                            $i=0;
                        while ($result= $contact -> fetch_assoc()) {
                            $i++;


                    ?>

                        <tr class="even gradeC">
                            <td><?php echo $i;  ?></td>
                            <td><?php echo $result['name']; ?></td>
                            <td><?php echo $result['user_number']; ?></td>
                            <td><?php echo $result['amount']; ?></td>
                            <td><?php echo $result['time']; ?></td>
                            
                            
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
