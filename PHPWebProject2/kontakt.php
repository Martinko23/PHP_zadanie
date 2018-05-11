
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
        echo("Meno " . $name). 
            ("Email " . $email). 
            ("Mobil " . $phone).
            ("Poznámka " . $msg). '<br />';
	}
}
?>


<form action="#" method="post" name="form" class="form-box">
    <label for="name">Meno :</label>
    <input type="text" name="name" class="inp" placeholder="Napíšte svoje Meno" required><br>
    <br>
    <label for="email">Email :</label>
    <input type="email" name="email" class="inp" placeholder="Napíšte svoj Email" required><br>
    <br>
    <label for="phone">Mobil :</label>
    <input type="tel" name="phone" class="inp" placeholder="Napíšte svoje Číslo" required><br>
    <br>
    <label for="message">Správa pre podporu :</label><br>
    <textarea name="msg" class="msg-box" placeholder="Napíšte svoju Správu" required></textarea><br>
    <br>
    <input type="submit" name="submit" value="Odoslať" class="sub-btn">
</form>

<?php include 'footer.php';?>