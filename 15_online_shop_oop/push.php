<?php
    curl_setopt_array($ch = curl_init(), array(
    CURLOPT_URL => "https://api.pushover.net/1/messages.json",
    CURLOPT_POSTFIELDS => array(
    "token" => "abc123",
    "user" => "user123",
    "message" => "hello world",
    ),
    CURLOPT_SAFE_UPLOAD => true,
    ));
    curl_exec($ch);
    curl_close($ch);
