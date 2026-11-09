<?php
// Contact form handler for Curlot Beauty.
// Set your receiving address below. Requires a server with PHP mail() configured.
$to = "your-email@example.com";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit;
}

// Strip line breaks from header fields to prevent header injection
$clean = function ($v) { return trim(str_replace(["\r", "\n"], " ", strip_tags($v ?? ""))); };

$name    = $clean($_POST["name"] ?? "");
$email   = filter_var($_POST["email"] ?? "", FILTER_VALIDATE_EMAIL);
$message = trim(strip_tags($_POST["message"] ?? ""));

if ($name === "" || !$email || $message === "") {
    http_response_code(400);
    exit;
}

$subject = "Curlot Beauty contact form: $name";
$body    = "Name: $name\nEmail: $email\n\nMessage:\n$message\n";
$headers = "From: no-reply@" . ($_SERVER["SERVER_NAME"] ?? "localhost") . "\r\n" .
           "Reply-To: $email\r\n";

if (mail($to, $subject, $body, $headers)) {
    http_response_code(200);
} else {
    http_response_code(500);
}
