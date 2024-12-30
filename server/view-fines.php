<?php
ini_set('memory_limit', '1G'); // Increase memory limit
require 'config.php'; // Include the file that fetches the data

function fetchfines($limit, $offset) {
    global $supabaseUrl;
    global $supabaseKey;

    $url = "$supabaseUrl/rest/v1/fines?limit=$limit&offset=$offset";
    $response = executeCurl($url, 'GET');
    $data = json_decode($response, true);

    if (isset($data['error'])) {
        return ['error' => $data['error']['message']];
    }

    return $data;
}

$batchSize = 100; // Number of records to fetch at a time
$offset = 0;
$records = [];

while (true) {
    $batch = fetchfines($batchSize, $offset);
    if (isset($batch['error'])) {
        $records = $batch; // if there's an error, stop fetching
        break;
    }
    if (empty($batch)) {
        break; // no more records to fetch
    }
    $records = array_merge($records, $batch);
    $offset += $batchSize;
}
?>
