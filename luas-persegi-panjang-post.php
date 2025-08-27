<form method="POST">
    <label for="p">Panjang</label>
    <input type="text" name="p">
    <label for="l">Lebar</label>
    <input type="text" name="l">
    <input type="submit" value="hitung">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $p = $_POST['p'];
    $l = $_POST['l'];
    echo "Luas persegi panjang = ".$p*$l;
}
