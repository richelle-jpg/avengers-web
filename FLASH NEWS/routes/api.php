<?php

// Check if connection parameter exists and is set to true
if (isset($_GET['connection']) && $_GET['connection'] == 'True') {
    // Respond with Connection True and Success True
    $response = array(
        'Connection' => 'True',
        'Mobile_Connection' => 'Established',
        'Success' => 'True'
    );
    // Convert response to JSON format
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // If connection parameter is not set to True, respond with an error message
    $response = array(
        'error' => 'Invalid request. Please set connection=True.'
    );
    // Convert response to JSON format
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>