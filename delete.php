<?php
 include('db_conn.php');
 $nokp = $_GET['nokp'];
 $sql = "DELETE FROM senaraipekerja WHERE nokp= '$nokp'";
 $result = mysqli_query($conn, $sql);
 if ($result)
     echo "<script>alert('Berjaya dipadam')</script>";
else 
   echo "<script>alert('Tidak berjaya padam rekod')</script>";
echo "<script>window.location='home.php'</script>";
?>
