<?php
include "connect.php";
?>
<style>
    table,
    td,
    th {
        border: 1px solid;
        text-align: center;
        padding: o;
        margin: 0;
    }

    th {
        background-color: grey;
        font-size: 25px;
    }

    tr {
        font-size: 19px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }
</style>
<table>
    <tr>
        <th>Name</th>
        <th>Sex</th>
        <th>Country</th>
        <th>Email</th>
    </tr>
    <?php
    $query = mysqli_query($conn, "select * from users");
    while ($row = mysqli_fetch_array($query)) {

    ?>
        <tr>
            <td><?php echo $row['Name']; ?> </td>
            <td><?php echo $row['sex']; ?> </td>
            <td><?php echo $row['country']; ?> </td>
            <td><?php echo $row['email']; ?> </td>
        </tr>
    <?php  } ?>
</table>