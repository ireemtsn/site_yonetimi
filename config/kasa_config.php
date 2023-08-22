<?php
if (isset($_POST['tutar'])) {
    require_once('config.php');
    $tutar = $_POST['tutar'];    
    $daire_sorgusu = "SELECT daire_id, daire_no FROM daireler";
    $daire_sonuc = $mysqli->query($daire_sorgusu);
   
    if ($daire_sonuc->num_rows > 0) {
        while ($row = $daire_sonuc->fetch_assoc()) {
            $daire_id = $row['daire_id'];
            $daire_no = $row['daire_no'];
            echo $daire_id . $daire_no;
   
            $sql = "INSERT INTO aidatlar (daire_id, tutar, tarih) VALUES ($daire_id, $tutar, NOW())";

            if ($mysqli->query($sql) === TRUE) {
                echo "Aidat başarıyla eklendi. Daire No: $daire_no, Tutar: $tutar<br>";
            } else {
                echo "Hata: " . $sql . "<br>" . $mysqli->error;
            }
        }
    } else {
        echo "Daire bulunamadı.";
    }

    $mysqli->close();
}



