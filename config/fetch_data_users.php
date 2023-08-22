<?php

//fetch_data_users.php

$connect = mysqli_connect("localhost", "root", "", "site_yonetimi");

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET') {
    $user_name = "%" . $_GET['user_name'] . "%";
    $user_email = "%" . $_GET['user_email'] . "%";
    $user_password = "%" . $_GET['user_password'] . "%";
    $user_role = "%" . $_GET['user_role'] . "%";
    $daire_id = "%" . $_GET['daire_id']. "%";

    $query = "SELECT * FROM users WHERE user_name LIKE ? AND user_email LIKE ? AND user_password LIKE ? AND user_role LIKE ? AND daire_id LIKE ? ORDER BY user_id DESC";

    $statement = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($statement, 'sssss', $user_name, $user_email, $user_password, $user_role, $daire_id);
    mysqli_stmt_execute($statement);
    $result = mysqli_stmt_get_result($statement);

    $output = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = array(
            'user_id' => $row['user_id'],
            'user_name' => $row['user_name'],
            'user_email' => $row['user_email'],
            'user_password' => $row['user_password'],
            'user_role' => $row['user_role'],
            'daire_id' => $row['daire_id']
        );
    }
    header("Content-Type: application/json");
    echo json_encode($output);
}

if ($method == "POST") {
    $user_name = $_POST['user_name'];
    $user_email = $_POST["user_email"];
    $user_password = $_POST["user_password"];
    $user_role = $_POST["user_role"];

    $query = "INSERT INTO users (user_name, user_email, user_password, user_role) VALUES (?, ?, ?, ?)";
    $statement = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($statement, 'ssss', $user_name, $user_email, $user_password, $user_role);
    mysqli_stmt_execute($statement);
}

if ($method == 'PUT') {
    parse_str(file_get_contents("php://input"), $_PUT);

    $user_id = $_PUT['user_id'];
    $user_name = $_PUT['user_name'];
    $user_email = $_PUT['user_email'];
    $user_password = $_PUT['user_password'];
    $user_role = $_PUT['user_role'];

    $query = "UPDATE users SET user_name = ?, user_email = ?, user_password = ?, user_role = ? WHERE user_id = ?";
    $statement = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($statement, 'ssssi', $user_name, $user_email, $user_password, $user_role, $user_id);
    mysqli_stmt_execute($statement);
}

if ($method == "DELETE") {
    parse_str(file_get_contents("php://input"), $_DELETE);
    $user_id = $_DELETE["user_id"];
    $query = "DELETE FROM users WHERE user_id = ?";
    $statement = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($statement, 'i', $user_id);
    mysqli_stmt_execute($statement);
}

mysqli_close($connect);

?>
