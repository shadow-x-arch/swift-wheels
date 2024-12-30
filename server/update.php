<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'];
    $data = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone']
    ];
    $url = "$supabaseUrl/rest/v1/texas?id=eq.$id";
    $response = executeCurl($url, "PATCH", $data);
    
    if (curl_getinfo($ch, CURLINFO_HTTP_CODE) == 200) {
        setMessage('Record updated successfully!');
    } else {
        setMessage('Error updating record: ' . $response);
    }
    header('Location: crud.php');
    exit();
}
?>
