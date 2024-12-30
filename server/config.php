<?php
// Start the session and define the connection settings
session_start();

function setMessage($message) {
    $_SESSION['message'] = $message;
}

$supabaseUrl = 'https://buknofwdefxjmojrwrcz.supabase.co';
$supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImJ1a25vZndkZWZ4am1vanJ3cmN6Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3MzQ0ODMxOTksImV4cCI6MjA1MDA1OTE5OX0.iFSOibxZ-uYZ_-9ArzwnmJJw0Ll2cI2W2lqSbbk1xGk';

function executeCurl($url, $method, $data = null) {
    global $supabaseKey;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "apikey: $supabaseKey",
        "Authorization: Bearer $supabaseKey",
        "Content-Type: application/json"
    ]);

    if ($data) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    }

    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}
?>
