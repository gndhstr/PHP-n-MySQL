<?php
include "../configs/koneksi.php";
$query = "SELECT * FROM agents";
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
                    <th>Working Area</th>
                    <th>Commision</th>
                    <th>Phone</th>
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
                        <td><?php echo $data["AGENT_CODE"];?></td>
                        <td><?php echo $data["AGENT_NAME"];?></td>
                        <td><?php echo $data["WORKING_AREA"];?></td>
                        <td><?php echo $data["COMMISSION"];?></td>
                        <td><?php echo $data["PHONE_NO"];?></td>
                        </tr>
                        <?php $no++;
                    } ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>