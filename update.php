<?php
include('db_conn.php'); 
if(isset($_POST['nokp'])) {    
    $id = $_POST['id'];
    $namapekerja = $_POST['namapekerja'];
    $nokp = $_POST['nokp'];
    $jantina = $_POST['jantina'];
	$nohp = $_POST['nohp'];
    $sql = "UPDATE senaraipekerja SET id='$id',namapekerja='$namapekerja', nokp = '$nokp', jantina = '$jantina', nohp = '$nohp' WHERE nokp = $nokp";
    $result = mysqli_query($conn, $sql); 
    if ($result)
        echo "<script>alert('Berjaya kemaskini')</script>";
    else 
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
    echo "<script>window.location='home.php'</script>";
}
$nokp = $_GET['nokp'];
$sql = "SELECT * FROM senaraipekerja WHERE nokp = '$nokp' ";
$result = mysqli_query($conn, $sql);
while ($pekerja = mysqli_fetch_array($result)) {
    $id = $pekerja['id'];
    $namapekerja = $pekerja['namapekerja'];
    $nokp = $pekerja['nokp'];
    $jantina = $pekerja['jantina'];
    $nohp = $pekerja['nohp'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styling/style4.css">
</head>
<body>
<div class="nav">
        <button><a href="home.php">BACK</a></button>
    </div>
    <center>
        <div class="updateform">
            <caption><b> MAKLUMAT UPDATE <?php echo $namapekerja;?> </b></caption>
        <form action="pekerja.php" method="post">
            <table>
                <tr>
                <td>id:</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="id" value='<?php echo $id;?>'>
                    </td>
                </tr>
                <tr>
                    <td>Nama Pekerja:</td>
                </tr> 
                <tr>
                    <td><input type="text" name="namapekerja" value="<?php echo $namapekerja;?>"></td>
                </tr>
                <tr>
                    <td>Nombor Kad Pengenalan:</td>
                </tr>
                <tr>
                    <td><input class="readonly" readonly type="text" name="nokp" value="<?php echo $nokp;?>"></td>
                </tr>
                <tr>
                <td>Jantina:</td>
                </tr>
                <tr>
                    <td>
                        <input class="readonly" readonly type="text" name="jantina" value='<?php echo $jantina;?>'>
                    </td>
                </tr>
                <tr>
                <td>nohp:</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="nohp" value='<?php echo $nohp;?>'>
                    </td>
                </tr>
                
</table>
            <div class="buttonnav">
            <button class="add" type="submit">UPDATE</button>
            <input class="clear" type="reset">
            </div>
        </form>
        </div>
    </center>
</body>
</html>