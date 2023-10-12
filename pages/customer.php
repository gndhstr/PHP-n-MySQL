<?php
include "../configs/koneksi.php";
$query = "SELECT * FROM customer";
$result = $conn->query($query);

?>
<div class="bg-warning">
    <div class="container pt-dev">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Working Area</th>
                    <th>Country</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($result) > 0) { ?>
                    <?php
                    $no = 1;
                    while ($data = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $data["CUST_CODE"];?></td>
                        <td><?php echo $data["CUST_NAME"];?></td>
                        <td><?php echo $data["CUST_CITY"];?></td>
                        <td><?php echo $data["WORKING_AREA"];?></td>
                        <td><?php echo $data["CUST_COUNTRY"];?></td>
                        <td><?php echo $data["GRADE"];?></td>
                        </tr>
                        <?php $no++;
                    } ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>