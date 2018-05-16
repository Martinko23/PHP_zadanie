<?php
$nadpis = "Kontakt";
$aktivna = "kontakt";
include 'header.php';
?>

<h3>Adresa:</h3>
Katolícka univerzita v Ružomberku
<br>Ubytovacie a stravovacie zariadenia
<br>Hrabovská cesta 1/A
<br>034 01 Ružomberok
<br>
<br><h3>Telefón:</h3>
telefón: +421 44 430 46 93
<br>
<br><h3>Email:</h3>
email: ubytovanie/zavinac/ku.sk
<br>
<br><h3>Úradné hodiny:</h3>
Utorok:  7:00 - 11:00 a 12:00 - 13:30 hod. Hrabovská cesta 1/A
<br>Štvrtok: 7:00 - 11:00 a 12:00 - 13:30 hod. Hrabovská cesta 1/A
<br>
<br><h3>Riaditeľka:</h3>
Mgr. Renáta Šrámeková
    <br>email: renata.sramekova@ku.sk
<br>
<br><h3>Samostatný referent:</h3>
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
                <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Meno">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="formGroupExampleInput" placeholder="Správa pre podporu">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="phone">Mobil</label>
                <input type="text" name="phone" class="form-control" id="formGroupExampleInput" placeholder="Mobil">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="message">Poznámka</label>
                <textarea type="text" name="msg" class="form-control" id="exampleFormControlTextarea1" placeholder="Poznámka" rows="3"></textarea>
                <br>
            </div>
        </div>
    </div>
    <input type="submit" name="submit" value="Odoslať" class="btn btn-primary" />
</form><?php include 'footer.php';?>
