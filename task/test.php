<?php

require('Client.php');
require('GrantType/IGrantType.php');
require('GrantType/AuthorizationCode.php');

const CLIENT_ID     = "99b2713b-0454-45bd-9e81-e2db9e2ae94a";
const CLIENT_SECRET = "zpBRnb87Z9qHhsPxcWG4JFZ4BRWUfcF9Jj_JnkqUJTM";

const REDIRECT_URI           = 'https://localhost/php/task/test.php';
const AUTHORIZATION_ENDPOINT = 'https://auth.brightspace.com/oauth2/auth';
const TOKEN_ENDPOINT         = 'https://auth.brightspace.com/core/connect/token';

$client = new OAuth2\Client(CLIENT_ID, CLIENT_SECRET);
if (!isset($_GET['code']))
{
    $auth_url = $client->getAuthenticationUrl(AUTHORIZATION_ENDPOINT, REDIRECT_URI);
    header('Location: ' . $auth_url);
    die('Redirect');
}
else
{
    $params = array('code' => $_GET['code'], 'redirect_uri' => REDIRECT_URI);
    $response = $client->getAccessToken(TOKEN_ENDPOINT, 'authorization_code', $params);
    echo "<pre>";
    print_r($response);
}

$client->setAccessToken('eyJhbGciOiJSUzI1NiIsImtpZCI6ImFlMGRlOWZjLWMwM2MtNGI1Zi1iZTQzLWMyMzNkMTg2NzQxNCIsInR5cCI6IkpXVCJ9.eyJuYmYiOjE3MDU0MjAwMzEsImV4cCI6MTcwNTQyMzYzMSwiaXNzIjoiaHR0cHM6Ly9hcGkuYnJpZ2h0c3BhY2UuY29tL2F1dGgiLCJhdWQiOiJodHRwczovL2FwaS5icmlnaHRzcGFjZS5jb20vYXV0aC90b2tlbiIsInN1YiI6IjMzMSIsInRlbmFudGlkIjoiMGE2OWY4YmItMTc2MC00NzQ5LWI1NWItMGYxNmFhOGNhZDVmIiwiYXpwIjoiOTliMjcxM2ItMDQ1NC00NWJkLTllODEtZTJkYjllMmFlOTRhIiwic2NvcGUiOiJjb3JlOio6KiB1c2VyczoqOioiLCJqdGkiOiIxMDViZTA0Zi02YzFmLTQ3ZWItOTRhZC04YzkyMDViYzAyMWYifQ.qq_uDNJ94NPXDSroGeIXsKaQFvB5hsW-NG9J_ldq1nqCyHa6sgrFZBnivYb9H9y6hSC54HWcYEni4e-4aIeqikryjbolzloNQXQTNU19tuKXGG7HuqI6oZldwNP1BHF-Jssz0CQd3JqDNzq3WA0dOBgDlHqdjZIUhkDQSOzYxAhbOgxbmh74qxRyQOwQXPm12LlK1NncpTPI2V1xgJUI0eC8azVV7Vxs-uN04VtfQBxxjEPOlYgkXhOtVQwFcQxY7Mjj4wymezLMm9Db8WzoaWZ_tcYGU3OaMYKQ2CjDC8nexQbsIEJMnNgfTyrLGtdqxQ4JURQZosWlC2vvX1VKDw');
$data= $client->fetch('https://learn.thecorporategovernanceinstitute.com/d2l/api/lp/1.43/users/whoami');
 

if(!empty($data)){
   echo "<pre>";
 print_r($data);
 
}
