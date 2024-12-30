<?php
require 'config.php'; // Include your Supabase connection setup

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $payment_date = $_POST['payment_date'];
    $driver_names = $_POST['driver_names'];
    $plate_number = $_POST['plate_number'];
    $amount = $_POST['amount'];
    $comment = $_POST['comment'] ?? '';

    // Prepare the data payload for Supabase
    $data = [
        'payment_date' => $payment_date,
        'driver_names' => $driver_names,
        'plate_number' => $plate_number,
        'amount' => (float)$amount,
        'comment' => $comment
    ];

    // Supabase API endpoint for inserting into the "reports" table
    $url = $supabaseUrl . "/rest/v1/reports";

    try {
        // Execute the cURL request to insert the data
        $response = executeCurl($url, 'POST', $data);
    
        // Decode the response to check for success
        $decodedResponse = json_decode($response, true);
    
        if (isset($decodedResponse['error'])) {
            // Redirect with an error message
            $message = urlencode("Error: " . $decodedResponse['error']['message']);
            header("Location: ../insert-report.html?message=$message");
            exit();
        } else {
            // Redirect with a success message
            $message = urlencode("Report submitted successfully.");
            header("Location: ../insert-report.html?message=$message");
            exit();
        }
    } catch (Exception $e) {
        // Redirect with an exception error message
        $message = urlencode("An error occurred: " . $e->getMessage());
        header("Location: ../insert-report.html?message=$message");
        exit();
    }
}
?>
