<?php
include 'config/database.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>

<h2>Halaman List User</h2>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Nama</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['nama'] ?></td>
</tr>
<?php } ?>

</table>