<?php

$connect = mysqli_connect("localhost", "root", "", "site_yonetimi");

if (!$connect) {
    die("Veritabanı bağlantısı başarısız: " . mysqli_connect_error());
}

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET') {
    $daire_no = "%" . $_GET['daire_no'] . "%";
    $blok_id = "%" . $_GET['blok_id'] . "%";
    $ev_sahibi_id = "%" . $_GET['ev_sahibi_id'] . "%";
    $kiraci_id = "%" . $_GET['kiraci_id'] . "%";
    $daire_id = "%" . $_GET['daire_id']. "%";

    $query = "SELECT * FROM daireler WHERE daire_no LIKE ? AND blok_id LIKE ? AND ev_sahibi_id LIKE ? AND kiraci_id LIKE ? AND daire_id LIKE ? ORDER BY daire_id DESC";

    $statement = mysqli_prepare($connect, $query);
    if (!$statement) {
        die("Sorgu hazırlanamadı: " . mysqli_error($connect));
    }
    
    mysqli_stmt_bind_param($statement, 'sssss', $daire_no, $blok_id, $ev_sahibi_id, $kiraci_id, $daire_id);
    mysqli_stmt_execute($statement);
    $result = mysqli_stmt_get_result($statement);

    $output = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = array(
            'daire_no' => $row['daire_no'],
            'blok_id' => $row['blok_id'],
            'ev_sahibi_id' => $row['ev_sahibi_id'],
            'kiraci_id' => $row['kiraci_id'],
            'daire_id' => $row['daire_id']
        );
    }
    header("Content-Type: application/json");
    echo json_encode($output);
}

if ($method == "POST") {
    $daire_no = $_POST['daire_no'];
    $blok_id = $_POST["blok_id"];
    $ev_sahibi_id = $_POST["ev_sahibi_id"];
    $kiraci_id = $_POST["kiraci_id"];

    $query = "INSERT INTO daireler (daire_no, blok_id, ev_sahibi_id, kiraci_id) VALUES (?, ?, ?, ?)";
    $statement = mysqli_prepare($connect, $query);
    if (!$statement) {
        die("Sorgu hazırlanamadı: " . mysqli_error($connect));
    }
    
    mysqli_stmt_bind_param($statement, 'iiii', $daire_no, $blok_id, $ev_sahibi_id, $kiraci_id);
    mysqli_stmt_execute($statement);
}

if ($method == 'PUT') {
    parse_str(file_get_contents("php://input"), $_PUT);

    $daire_id = $_PUT['daire_id'];
    $daire_no = $_PUT['daire_no'];
    $blok_id = $_PUT['blok_id'];
    $ev_sahibi_id = $_PUT['ev_sahibi_id'];
    $kiraci_id = $_PUT['kiraci_id'];

    $query = "UPDATE daireler SET daire_no = ?, blok_id = ?, ev_sahibi_id = ?, kiraci_id = ? WHERE daire_id = ?";
    $statement = mysqli_prepare($connect, $query);
    if (!$statement) {
        die("Sorgu hazırlanamadı: " . mysqli_error($connect));
    }
    
    mysqli_stmt_bind_param($statement, 'iiiii', $daire_no, $blok_id, $ev_sahibi_id, $kiraci_id, $daire_id);
    mysqli_stmt_execute($statement);
}

if ($method == "DELETE") {
    parse_str(file_get_contents("php://input"), $_DELETE);
    $daire_id = $_DELETE["daire_id"];
    $query = "DELETE FROM daireler WHERE daire_id = ?";
    $statement = mysqli_prepare($connect, $query);
    if (!$statement) {
        die("Sorgu hazırlanamadı: " . mysqli_error($connect));
    }
    
    mysqli_stmt_bind_param($statement, 'i', $daire_id);
    mysqli_stmt_execute($statement);
}

mysqli_close($connect);

?>
