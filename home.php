<?php
include ('db_conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styling/style.css">
    
</head>

<body>
    <div class="nav">
        <h1>selamat datang</h1>

        <button><a href="add_pekerja.php">ADD</a></button>
        <button class="logout"><a href="logout.php">logout</a></button>
    </div>
    <center>
        <table>
            <caption>SENARAI PEKERJA</caption>
            <tr>
                <td class="head">ID</td>
                <td class="head">NAMA PEKERJA</td>
                <td class="head">NO KP</td>
                <td class="head">JANTINA</td>
                <td class="head">NO HP</td>
                <td class="head"></td>
            </tr>
            <?php
            $sql = "SELECT * FROM senaraipekerja ORDER BY id ASC";
            $data = mysqli_query($conn, $sql);
            $bil = 1;
            while ($pekerja = mysqli_fetch_array($data)){
                ?>
                <tr>
                  
                    <td><?php echo $pekerja['id']; ?></td>
                    <td><?php echo $pekerja['namapekerja']; ?></td>
                    <td><?php echo $pekerja['nokp']; ?></td>
                    <td><?php echo $pekerja['jantina']; ?></td>
                    <td><?php echo $pekerja['nohp']; ?></td>
                    <td>
                        <button class="operation"><a href="update.php?nokp=<?php echo $pekerja['nokp'];?>">UPDATE</a></button>
                        <button class="operation"><a href="delete.php?nokp=<?php echo $pekerja['nokp'];?>">DELETE</a></button>
                    </td> 
                </tr> 
            <?php $bil = $bil + 1; 
            } 
            ?> 
        </table>
    </center>
</body>

</html>