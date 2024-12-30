
<?php
require 'config.php'; // Include your Supabase connection setup

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $names = $_POST['names'];
    $id_number = $_POST['id_number'];
    $hired_date = $_POST['hired_date'];
    $residence = $_POST['residence'];
    $phone_number = $_POST['phone_number'];
    $responsible_id = $_POST['responsible_id'] ?? null;
    $responsible_phone_number = $_POST['responsible_phone_number'] ?? null;
    $contract_file = base64_encode(file_get_contents($_FILES['contract_file']['tmp_name']));
    $driving_license_file = base64_encode(file_get_contents($_FILES['driving_license_file']['tmp_name']));

    // Prepare the data payload for Supabase
    $data = [
        "names" => $names,
        "id_number" => $id_number,
        "hired_date" => $hired_date,
        "residence" => $residence,
        "phone_number" => $phone_number,
        "responsible_id" => $responsible_id,
        "responsible_phone_number" => $responsible_phone_number,
        "contract_file" => $contract_file,
        "driving_license_file" => $driving_license_file
    ];

    // Supabase API endpoint for inserting into the "reports" table
    $url = $supabaseUrl . "/rest/v1/drivers";

    try {
        // Execute the cURL request to insert the data
        $response = executeCurl($url, 'POST', $data);
    
        // Decode the response to check for success
        $decodedResponse = json_decode($response, true);
    
        if (isset($decodedResponse['error'])) {
            // Redirect with an error message
            $message = urlencode("Error: " . $decodedResponse['error']['message']);
            header("Location: ../insert-driver.html?message=$message");
            exit();
        } else {
            // Redirect with a success message
            $message = urlencode("Report submitted successfully.");
            header("Location: ../insert-driver.html?message=$message");
            exit();
        }
    } catch (Exception $e) {
        // Redirect with an exception error message
        $message = urlencode("An error occurred: " . $e->getMessage());
        header("Location: ../insert-driver.html?message=$message");
        exit();
    }
    
}
?>
