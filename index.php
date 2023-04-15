<?php

$url = "https://block.io/ip_echo";

// Initialize cURL
$curl = curl_init();

// Set the cURL options
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Execute the GET request
$response = curl_exec($curl);

// Check for cURL errors
if(curl_errno($curl)){
    echo 'Error: ' . curl_error($curl);
} else {
    // Print the response
    echo $response;
}

// Close cURL
curl_close($curl);

?>
