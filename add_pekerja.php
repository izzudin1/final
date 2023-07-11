<?php
include('db_conn.php'); 
if(isset($_POST['nokp'])) {    
    $id = $_POST['id'];
    $namapekerja = $_POST['namapekerja'];
    $nokp = $_POST['nokp'];
    $jantina = $_POST['jantina'];
	$nohp = $_POST['nohp'];
    $sql = "INSERT INTO senaraipekerja (id, namapekerja, nokp, jantina, nohp)
    VALUES ('$id', '$namapekerja', '$nokp', '$jantina', '$nohp')";
    $result = mysqli_query($conn, $sql); 
    if ($result)
        echo "<script>alert('Berjaya ditambah')</script>";
    else 
        echo "<script>alert('Tidak berjaya ditambah')</script>";
    echo "<script>window.location='home.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styling/style3.css">
</head>
<body>
<div class="nav">
        <button><a href="home.php">BACK</a></button>
    </div>
    <center>
    <div class="addform">
        <caption>ADD MAKLUMAT</caption>
    <form action="add_pekerja.php" method="POST">
        <table>
        <tr>
                <td class=warna> ID </td> 
        </tr>
        <tr>
                <td> <input required type="text" name="id" placeholder="1"> </td>
        </tr>        
        <tr>
                <td class=warna> Nama Pekerja </td>
        </tr>
        <tr>
                <td> <input required type="text" name="namapekerja" placeholder="NAMA PEKERJA"> </td>
        </tr>
        <tr>
                <td class=warna> No Kad Pengenalan </td>
        </tr>
        <tr>
                <td> <input required type="text" name="nokp" placeholder="NO KAD PENGENALAN"></td>
        </tr>
        <tr>
                <td class=warna> Jantina</td>
        </tr>
        <tr>
                <td> <input required type="text" name="jantina" placeholder="JANTINA"></td>
        </tr>
        <tr>
                <td class=warna> Nombor Telefon</td>
        </tr>
        <tr>
                <td> <input required type="text" name="nohp" placeholder="NOMBOR TELEFON"></td>
        </tr>
        </table>
        <div class="buttonnav">
        <button class="add" type="submit">ADD</button>
        <input class="clear" type="reset">
        </div>
    </form>
    </div>
    </center>
</body>
</html>