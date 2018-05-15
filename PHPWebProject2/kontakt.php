
<?php 
    $nadpis = "Kontakt";
    $aktivna = "kontakt";
    include 'header.php';
?>

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
</form>

    <?php include 'footer.php';?>
