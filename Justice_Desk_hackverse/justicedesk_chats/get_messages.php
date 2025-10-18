<?php
include 'db.php';
session_start();
header('Content-Type: application/json');
if (!isset($_SESSION['user_id'])) { echo json_encode([]); exit; }

$my_id = (int)$_SESSION['user_id'];
$other_id = isset($_GET['other_id']) ? (int)$_GET['other_id'] : 0;

$sql = "SELECT m.*, u.name as sender_name FROM messages m
        JOIN users u ON m.sender_id = u.id
        WHERE (sender_id=$my_id AND receiver_id=$other_id) OR (sender_id=$other_id AND receiver_id=$my_id)
        ORDER BY timestamp ASC";

$res = $conn->query($sql);
$out = [];
while($r = $res->fetch_assoc()) $out[] = $r;
echo json_encode($out);
?>