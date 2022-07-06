<?php

$postOptions = array(
'http_errors' => false,
'form_params' => array(
'client_id' => $clientId,
'client_secret' => $clientSecret,
'code' => $authorizationCode,
'redirect_uri' => $redirectUri,
'grant_type' => 'authorization_code'
)
);

$url = 'https://login.microsoftonline.com/common/oauth2/v2.0/token';

$client = new Client();
$response = $client->request('POST', $url, $postOptions);
$response = $response->getBody()->__toString();

$response = json_decode($response);
return $response->access_token;