<?php
require 'config.php'; // Include your Supabase connection setup

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $date = $_POST['date'];
    $supervisor_names = $_POST['supervisor_names'];
    $plate_number = $_POST['plate_number'];
    $amount = $_POST['amount'];
    $status = $_POST['status'];
    $comment = $_POST['comment'] ?? '';
    $location = $_POST['location'];
    $garage_fees = $_POST['garage_fees'];

    // Prepare the data payload for Supabase
    $data = [
        'date' => $date,
        'supervisor_names' => $supervisor_names,
        'plate_number' => $plate_number,
        'amount' => (float)$amount,
        'status' => $status,
        'comment' => $comment,
        'location' => $location,
        'garage_fees' => (float)$garage_fees,
    ];

    // Supabase API endpoint for inserting into the "reports" table
    $url = $supabaseUrl . "/rest/v1/expenses";

    try {
        // Execute the cURL request to insert the data
        $response = executeCurl($url, 'POST', $data);
    
        // Decode the response to check for success
        $decodedResponse = json_decode($response, true);
    
        if (isset($decodedResponse['error'])) {
            // Redirect with an error message
            $message = urlencode("Error: " . $decodedResponse['error']['message']);
            header("Location: ../insert-garage.html?message=$message");
            exit();
        } else {
            // Redirect with a success message
            $message = urlencode("Report submitted successfully.");
            header("Location: ../insert-garage.html?message=$message");
            exit();
        }
    } catch (Exception $e) {
        // Redirect with an exception error message
        $message = urlencode("An error occurred: " . $e->getMessage());
        header("Location: ../insert-garage.html?message=$message");
        exit();
    }
}
?>
