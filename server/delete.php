<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
    $id = $_POST['id'];
    $url = "$supabaseUrl/rest/v1/texas?id=eq.$id";
    $response = executeCurl($url, "DELETE");
    
    if (curl_getinfo($ch, CURLINFO_HTTP_CODE) == 204) {
        setMessage('Record deleted successfully!');
    } else {
        setMessage('Error deleting record: ' . $response);
    }
    header('Location: crud.php');
    exit();
}
?>
