<?php include('header.php'); ?>
<?php include('dbconnect.php'); ?>



        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                
                    $query = "SELECT * FROM students";

                    $result = mysqli_query($connection, $query);

                    if(!$result){
                        die("query failed!". mysqli_error());
                    }
                    else{

                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                                <tr>
                                    <td><?php echo $row ['id'] ?></td>
                                    <td><?php echo $row ['first_name'] ?></td>
                                    <td><?php echo $row ['last_name'] ?></td>
                                    <td><?php echo $row ['age'] ?></td>
                                </tr>

                            <?php

                            




                        }
                    }

                ?>


                <!-- <tr>
                    <td>5</td>
                    <td>Jin</td>
                    <td>Gay</td>
                    <td>69</td>
                </tr> -->
            </tbody>

        </table>

<?php include('footer.php'); ?>