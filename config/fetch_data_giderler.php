<?php
// fetch_data.php

$connect = mysqli_connect("localhost", "root", "", "site_yonetimi");

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET') {
    $filter_giderler = array(
        ':gider_id' => "%" . $_GET['gider_id'] . "%",
        ':tarih' => "%" . $_GET['tarih'] . "%",
        ':tutar' => "%" . $_GET['tutar'] . "%",
        ':gider_tipi_id' => "%" . $_GET['gider_tipi_id'] . "%"
    );

    $query = "
        SELECT
            gider_id, tarih, tutar, gider_tipi_id 
        FROM 
            giderler  
        WHERE 
            gider_id LIKE :gider_id AND 
            tarih LIKE :tarih AND   
            tutar LIKE :tutar AND 
            gider_tipi_id LIKE :gider_tipi_id
        ORDER BY
            gider_id DESC;
    ";

    $statement = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($statement, 'ssss', $filter_giderler[':gider_id'], $filter_giderler[':tarih'], $filter_giderler[':tutar'], $filter_giderler[':gider_tipi_id']);
    mysqli_stmt_execute($statement);
    $result = mysqli_stmt_get_result($statement);
    $output = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = array(
            'gider_id' => $row['gider_id'],
            'tarih' => $row['tarih'],
            'tutar' => $row['tutar'],
            'gider_tipi_id' => $row['gider_tipi_id'],
        );
    }
    header("Content-Type: application/json");
    echo json_encode($output);
} else if ($method == "POST") {
    $data = array(
        ':gider_id' => $_POST['gider_id'],
        ':tarih' => $_POST["tarih"],
        ':tutar' => $_POST["tutar"],
        ':gider_tipi_id' => $_POST["gider_tipi_id"],
    );

    $query = "INSERT INTO giderler (gider_id, tarih, tutar, gider_tipi_id) VALUES (?, ?, ?, ?)";
    $statement = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($statement, 'ssss', $data[':gider_id'], $data[':tarih'], $data[':tutar'], $data[':gider_tipi_id']);
    mysqli_stmt_execute($statement);
} else if ($method == 'PUT') {
    parse_str(file_get_contents("php://input"), $_PUT);
    $data = array(
        ':gider_id' => $_PUT['gider_id'],
        ':tarih' => $_PUT['tarih'],
        ':tutar' => $_PUT['tutar'],
        ':gider_tipi_id' => $_PUT['gider_tipi_id'],
    );

    $query = "
        UPDATE giderler 
        SET tarih = ?, 
            tutar = ?, 
            gider_tipi_id = ? 
        WHERE gider_id = ?
    ";
    $statement = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($statement, 'sssi', $data[':tarih'], $data[':tutar'], $data[':gider_tipi_id'], $data[':gider_id']);
    mysqli_stmt_execute($statement);
} else if ($method == "DELETE") {
    parse_str(file_get_contents("php://input"), $_DELETE);
    $gider_id = $_DELETE["gider_id"];
    $query = "DELETE FROM giderler WHERE gider_id = ?";
    $statement = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($statement, 'i', $gider_id);
    mysqli_stmt_execute($statement);
}

mysqli_close($connect);
?>
