<?php
require 'config.php'; // Include your Supabase connection setup

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $date = $_POST['date'];
    $plate_number = $_POST['plate_number'];
    $amount = $_POST['amount'];
    $fines_number = $_POST['fines_number']; 
    $status = $_POST['status']; 
    $payed_by = $_POST['payed_by'];
    $comment = $_POST['comment'] ?? '';

    // Prepare the data payload for Supabase
    $data = [
        'date' => $date,
        'plate_number' => $plate_number,
        'amount' => (float)$amount,
        'fines_number' => $fines_number,
        'status' => $status,
        'payed_by' => $payed_by,
        'comment' => $comment
    ];

    // Supabase API endpoint for inserting into the "reports" table
    $url = $supabaseUrl . "/rest/v1/fines";

    try {
        // Execute the cURL request to insert the data
        $response = executeCurl($url, 'POST', $data);
    
        // Decode the response to check for success
        $decodedResponse = json_decode($response, true);
    
        if (isset($decodedResponse['error'])) {
            // Redirect with an error message
            $message = urlencode("Error: " . $decodedResponse['error']['message']);
            header("Location: ../insert-fine.php?message=$message");
            exit();
        } else {
            // Redirect with a success message
            $message = urlencode("Report submitted successfully.");
            header("Location: ../insert-fine.php?message=$message");
            exit();
        }
    } catch (Exception $e) {
        // Redirect with an exception error message
        $message = urlencode("An error occurred: " . $e->getMessage());
        header("Location: ../insert-fine.php?message=$message");
        exit();
    }
}
?>
