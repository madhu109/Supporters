<?php
include 'db.php';
session_start();
header('Content-Type: application/json');
if (!isset($_SESSION['user_id'])) { echo json_encode(['ok'=>false,'error'=>'not_logged_in']); exit; }

$sender_id = (int)$_SESSION['user_id'];
$receiver_id = (int)$_POST['receiver_id'];
$message = $conn->real_escape_string($_POST['message']);

$sql = "INSERT INTO messages (sender_id, receiver_id, message) VALUES ($sender_id, $receiver_id, '$message')";
if ($conn->query($sql)) {
  echo json_encode(['ok'=>true]);
} else {
  echo json_encode(['ok'=>false,'error'=>$conn->error]);
}
?>