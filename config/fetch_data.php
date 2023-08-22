<?php
// fetch_data.php

$connect = mysqli_connect("localhost", "root", "", "site_yonetimi");

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET') {
    $filter_aidatlar = array(
        ':aidat_id' => "%" . $_GET['aidat_id'] . "%",
        ':tarih' => "%" . $_GET['tarih'] . "%",
        ':tutar' => "%" . $_GET['tutar'] . "%",
        ':odendi_mi' => "%" . $_GET['odendi_mi'] . "%"
    );


    $query = "
        SELECT
    e.ev_sahibi_adi AS evsahibi,
    d.daire_no AS daireno,
    a.aidat_id AS aidatid,
    a.daire_id AS daireid,
    a.tarih AS tarih,
    a.tutar AS tutar,
    a.odendi_mi AS odendimi
        FROM
    aidatlar AS a,
    daireler AS d,
    ev_sahipleri AS e
        WHERE
    a.daire_id = d.daire_id
    AND d.ev_sahibi_id = e.ev_sahibi_id
    AND a.tarih LIKE ? 
    AND a.tutar LIKE ? 
    AND a.odendi_mi LIKE ? 
        ORDER BY
    a.aidat_id DESC;
";

    $statement = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($statement, 'sss', $filter_aidatlar[':tarih'], $filter_aidatlar[':tutar'], $filter_aidatlar[':odendi_mi']);
    mysqli_stmt_execute($statement);
    $result = mysqli_stmt_get_result($statement);
    $output = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = array(
            'ev_sahibi_adi'=> $row["evsahibi"],
            'daire_no' => $row['daireno'],  
            'aidat_id' => $row['aidatid'],
            'daire_id' => $row['daireid'],
            'tarih' => $row['tarih'],
            'tutar' => $row['tutar'],
            'odendi_mi' => $row['odendimi'],
        );
    }
    header("Content-Type: application/json");
    echo json_encode($output);
} else if ($method == "POST") {
    $data = array(
        ':daire_id' => $_POST['daire_id'],
        ':tarih' => $_POST["tarih"],
        ':tutar' => $_POST["tutar"],
        ':odendi_mi' => $_POST["odendi_mi"],
    );   






    $query = "INSERT INTO aidatlar (daire_id, tarih, tutar, odendi_mi) VALUES (?, ?, ?, ?)";
    $statement = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($statement, 'isss', $data[':daire_id'], $data[':tarih'], $data[':tutar'], $data[':odendi_mi']);
    mysqli_stmt_execute($statement);
} else if ($method == 'PUT') {
    parse_str(file_get_contents("php://input"), $_PUT);
    $data = array(
        ':aidat_id' => $_PUT['aidat_id'],
        ':daire_id' => $_PUT['daire_id'],
        ':tarih' => $_PUT['tarih'],
        ':tutar' => $_PUT['tutar'],
        ':odendi_mi' => $_PUT['odendi_mi'],
    );

    $query = "
    UPDATE aidatlar 
    SET daire_id = ?, 
        tarih = ?, 
        tutar = ?, 
        odendi_mi = ? 
    WHERE aidat_id = ?
  ";
    $statement = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($statement, 'isssi', $data[':daire_id'], $data[':tarih'], $data[':tutar'], $data[':odendi_mi'], $data[':aidat_id']);
    mysqli_stmt_execute($statement);
} else if ($method == "DELETE") {
    parse_str(file_get_contents("php://input"), $_DELETE);
    $aidat_id = $_DELETE["aidat_id"];
    $query = "DELETE FROM aidatlar WHERE aidat_id = ?";
    $statement = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($statement, 'i', $aidat_id);
    mysqli_stmt_execute($statement);
}

mysqli_close($connect);
?>