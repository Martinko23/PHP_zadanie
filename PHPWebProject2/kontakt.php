<?php
$nadpis = "Kontakt";
$aktivna = "kontakt";
include 'header.php';
?>

<h2>Kontaktné údaje</h2>
<br>
<h4>Adresa:</h4>
Katolícka univerzita v Ružomberku
<br>Ubytovacie a stravovacie zariadenia
<br>Hrabovská cesta 1/A
<br>034 01 Ružomberok
<br>
<br><h4>Telefón:</h4>
telefón: +421 44 430 46 93
<br>
<br><h4>Email:</h4>
email: ubytovanie@ku.sk
<br>
<br><h4>Úradné hodiny:</h4>
Utorok:  7:00 - 11:00 a 12:00 - 13:30 hod. Hrabovská cesta 1/A
<br>Štvrtok: 7:00 - 11:00 a 12:00 - 13:30 hod. Hrabovská cesta 1/A
<br>
<br><h4>Riaditeľka:</h4>
Mgr. Renáta Šrámeková
    <br>email: renata.sramekova@ku.sk
<br>
<br><h5>Samostatný referent:</h5>
Martin Piatko
    <br>email: martin.piatko@ku.sk
<br>
<br><h3>Kontaktný formulár:</h3>
<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$msg=$_POST['msg'];
{
$to = "23matoo23@gmail.com";
$subject = 'the subject';
$message = ("Meno " . $name).
("Email " . $email).
("Mobil " . $phone).
("Poznámka " . $msg). '<br />';
$headers = 'From: '. $email . "\r\n" .
'Reply-To: '.$email . "\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
}
}
?>

<form action="#" method="post" name="form" class="form-box">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="mane">Meno</label>
                <input type="text" name="name" class="form-control" id="meno" placeholder="Meno">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Email">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="phone">Mobil</label>
                <input type="text" name="phone" class="form-control" id="mobil" placeholder="Mobil">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="message">Správa</label>
                <textarea type="text" name="msg" class="form-control" id="msg" placeholder="Správa" rows="3"></textarea>
                <br>
            </div>
        </div>
    </div>
    <input type="submit" name="submit" value="Odoslať" class="btn btn-primary" />
</form>
<?php include 'footer.php';?>
