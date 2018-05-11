
<?php
    $nadpis = "Žiadosť";
    $aktivna = "ziadost";
    include 'header.php';
?>

<?php
function tofloat($num) {
    $dotPos = strrpos($num, '.');
    $commaPos = strrpos($num, ',');
    $sep = (($dotPos > $commaPos) && $dotPos) ? $dotPos : 
        ((($commaPos > $dotPos) && $commaPos) ? $commaPos : false);
    
    if (!$sep) {
        return floatval(preg_replace("/[^0-9]/", "", $num));
    } 

    return floatval(
        preg_replace("/[^0-9]/", "", substr($num, 0, $sep)) . '.' .
        preg_replace("/[^0-9]/", "", substr($num, $sep+1, strlen($num)))
    );
}

if(isset($_POST['submit'])){
    $meno=mysqli_real_escape_string($conn, $_POST['meno']);
    $priezvisko=mysqli_real_escape_string($conn,$_POST['priezvisko']);
    $rc=mysqli_real_escape_string($conn,$_POST['rc']);
    $datumnarodenia=date("Y-m-d H:i:s", strtotime($_POST['datumnarodenia']));
    $mobil=mysqli_real_escape_string($conn,$_POST['mobil']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $pohlavie=mysqli_real_escape_string($conn,$_POST['pohlavie']);
    $rocnik=mysqli_real_escape_string($conn,$_POST['rocnik']);
    $fakulta=mysqli_real_escape_string($conn,$_POST['fakulta']);
    $vzdialenost=(int) $_POST['vzdialenost'];
    $priemer=tofloat($_POST['priemer']);
    $poznamky=mysqli_real_escape_string($conn,$_POST['poznamky']);
    $sql = "INSERT INTO formular (meno, priezvisko, rc, datumnarodenia, mobil, email, pohlavie, rocnik, vzdialenost, priemer, poznamky)
VALUES ('{$meno}','{$priezvisko}','{$rc}','{$datumnarodenia}','{$mobil}','{$email}','{$pohlavie}','{$rocnik}',{$vzdialenost},{$priemer},'{$poznamky}')";
    echo "<pre>" . $sql . "</pre>";
    $result = $conn->query($sql);
    if(!$result) echo mysqli_error($conn);
    echo "Zapíšte si svoj ID kód : " .$conn->insert_id. "<br />";
}

?>

<form action="#" method="post" name="form">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="meno">Meno</label>
                <input type="text" name="meno" class="form-control" id="formGroupExampleInput" placeholder="Meno">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="priezvisko">Priezvisko</label>
                <input type="text" name="priezvisko" class="form-control" id="formGroupExampleInput" placeholder="Priezvisko">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="rc">Rodné číslo</label>
                <input type="text" name="rc" class="form-control" id="formGroupExampleInput" placeholder="Rodné číslo">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="datumnarodenia">Dátum narodenia</label>
                <input type="date" name="datumnarodenia" class="form-control" id="formGroupExampleInput" placeholder="Dátum narodenia">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="mobil">Mobil</label>
                <input type="text" name="mobil" class="form-control" id="formGroupExampleInput" placeholder="Mobil">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="formGroupExampleInput" placeholder="Email">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">

            <label for="pohlavie">Pohlavie</label>
            <select name="pohlavie" id="formGroupExampleInput" class="form-control" required>
                <option selected disabled>Vyberte svoje pohlavie</option>
                <option value="muz">Muž</option>
                <option value="zena">Žena</option>
            </select><br />
        </div>


        <div class="col">
            <label for="rocnik">Ročník</label>
            <input type="text" name="rocnik" class="form-control" id="formGroupExampleInput" placeholder="Ročník">
        </div>
    </div>

    <div class="row">
        <div class="col">

            <label for="fakulta">Fakulta</label>
            <select name="fakulta" id="fakulta" class="form-control" required>
                <option selected disabled>Vyberte svoju fakultu</option>
                <option value="pf">Pedagogická fakulta</option>
                <option value="ff">Filozofická fakulta</option>
                <option value="tf">Teologická fakulta</option>
                <option value="fz">Zdravotnícka fakulta</option>
            </select><br />

        </div>

        <div class="col">
            <div class="form-group">
                <label for="vzdialenost">Vzdialenosť</label>
                <input type="text" name="vzdialenost" class="form-control" id="formGroupExampleInput" placeholder="Vzdialenosť">
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col">
            <div class="form-group">
                <label for="priemer">Priemer</label>
                <input type="text" name="priemer" class="form-control" id="formGroupExampleInput" placeholder="Priemer">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="poznamky">Poznámka</label>
                <input type="text" name="poznamky" class="form-control" id="formGroupExampleInput" placeholder="Poznámka">
                <br>

            </div>
        </div>
    </div>
    <input type="submit" name="submit" value="Odoslať" class="sub-btn" />
</form>









<form action="#" method="post" name="form" class="form-box">

    <label for="meno">Meno :</label>
    <input type="text" name="meno" class="inp" placeholder="Napíšte svoje Meno" required><br>
    <br>

    <label for="priezvisko"> Priezvisko :</label>
    <input type="text" name="priezvisko" class="inp" placeholder="Napíšte svoje Priezvisko" required><br>
    <br>

    <label for="rc">Rodné číslo :</label>
    <input type="text" name="rc" class="inp" placeholder="Napíšte svoje Rodné čislo" required><br>
    <br>

    <label for="datumnarodenia">Dátum narodenia :</label>
    <input type="date" name="datumnarodenia" class="inp" placeholder="Napíšte svoj Dátum narodenia " required><br>
    <br>

    <label for="mobil">Mobil :</label>
    <input type="text" name="mobil" class="inp" placeholder="Napíšte svoj mobil " required><br>
    <br>

    <label for="email">Email :</label>
    <input type="text" name="email" class="inp" placeholder="Napíšte svoj email " required><br>
    <br>

    <label for="pohlavie">Pohlavie :</label>
    <select name="pohlavie" id="pohavie" class="inp" required>
        <option disabled>Vyberte svoje pohlavie</option>
        <option value="muz">Muž</option>
        <option value="zena">Žena</option>
    </select><br />
    <br>

    <label for="rocnik">Ročník :</label>
    <input type="text" name="rocnik" class="inp" placeholder="Napíšte svoj " required><br>
    <br>

    <label for=" ">Fakulta :</label>
    <select name="fakulta" id="fakulta" class="inp" required>
        <option disabled>Vyberte svoju fakultu:</option>
        <option value="pf">Pedagogická fakulta</option>
        <option value="ff">Filozofická fakulta</option>
        <option value="tf">Teologická fakulta</option>
        <option value="fz">Zdravotnícka fakulta</option>
    </select><br />
    <br>

    <label for="vzdialenost"> Vzdialenosť v KM :</label>
    <input type="text" name="vzdialenost" class="inp" placeholder="Napíšte svoje " required><br>
    <br>

    <label for="priemer">Priemer :</label>
    <input type="text" name="priemer" class="inp" placeholder="Napíšte svoje " required><br>
    <br>

    <label for="poznamky">Poznámka :</label><br>
    <textarea name="msg" class="sub-btn" placeholder="Napíšte svoju Správu" required></textarea>
    <br>
    <input type="submit" name="submit" value="Odoslať" class="sub-btn" />
</form>


<?php include 'footer.php';?>