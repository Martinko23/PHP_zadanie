<?php
$nadpis = "Vysledky";
$aktivna = "vysledky";
include 'header.php';
?>

<br />
<h1>Poradie uchádzačov o ubytovanie C-Blok </h1>
<br />

<?php

/* change character set to utf8 */
if (!$conn->set_charset("utf8")) {
printf("Error loading character set utf8: %s\n", $conn->error);
exit();
}
$sql = "SELECT id, rocnik, fakulta, created, floor(vzdialenost / priemer) AS skore FROM formular ORDER BY skore DESC, created ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">Ročník</th>
            <th scope="col">Fakulta</th>
            <th scope="col">Počet bodov</th>
        </tr>
    </thead>
    <tbody><?php
        // output data of each row
    $i=1;
        while($row = $result->fetch_assoc()) {
        ?>
        <tr class="<?=$i < 11 ? 'table-success' : ''?>">
            <th scope="row">
                <?=$i++?></th>
            <td><?=$row["id"] ?></td>
            <td><?=$row["rocnik"] ?></td>
            <td><?=$row["fakulta"] ?></td>
            <td><?=$row["skore"] ?></td>
        </tr>
        <?php
        }
        } else {
        echo "0 results";
        }
        $conn->close();
        ?>
    </tbody>
</table>
<?php include 'footer.php';?>
