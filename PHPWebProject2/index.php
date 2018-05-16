
<?php
    $nadpis = "C-čko";
    $aktivna = "domov";
    include 'header.php';
?>

<?php
/* change character set to utf8 */
if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $conn->error);
    exit();
}

$sql = "SELECT id, nadpis, text, created FROM novinky ORDER BY created DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
<div class="card-columns">
    <?php
    while($row = $result->fetch_assoc()) {
    ?>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?=$row["nadpis"]?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?=$row["id"]?>
            </h6>
            <p class="card-text">
                <?=$row["text"]?>
            </p>
            <h5 class="card-title">
                <?=$row["created"]?>
            </h5>
        </div>
    </div>
    <?php
    }
    ?>
</div><?php
    } else {
    echo "0 results";
    }
    $conn->close();
?>
    <?php include 'footer.php';?> 