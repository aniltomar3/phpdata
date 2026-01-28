<?php

require('Client.php');
require('GrantType/IGrantType.php');
require('GrantType/AuthorizationCode.php');

const CLIENT_ID     = "99b2713b-0454-45bd-9e81-e2db9e2ae94a";
const CLIENT_SECRET = "zpBRnb87Z9qHhsPxcWG4JFZ4BRWUfcF9Jj_JnkqUJTM";

const REDIRECT_URI           = 'https://www.stg.thecorporategovernanceinstitute.com/oauth_redirect/';
const AUTHORIZATION_ENDPOINT = 'https://auth.brightspace.com/oauth2/auth';
const TOKEN_ENDPOINT         = 'https://auth.brightspace.com/core/connect/token';

$client = new OAuth2\Client(CLIENT_ID, CLIENT_SECRET);
// if (!isset($_GET['code']))
// {
//     $auth_url = $client->getAuthenticationUrl(AUTHORIZATION_ENDPOINT, REDIRECT_URI);
//     header('Location: ' . $auth_url);
//     die('Redirect');
// }
// else
// {
//     $params = array('code' => $_GET['code'], 'redirect_uri' => REDIRECT_URI);
//     $response = $client->getAccessToken(TOKEN_ENDPOINT, 'authorization_code', $params);
//     echo "<pre>";
//     print_r($response);
// }

$client->setAccessToken('eyJhbGciOiJSUzI1NiIsImtpZCI6ImFlMGRlOWZjLWMwM2MtNGI1Zi1iZTQzLWMyMzNkMTg2NzQxNCIsInR5cCI6IkpXVCJ9.eyJuYmYiOjE3MDU0MTU4MzksImV4cCI6MTcwNTQxOTQzOSwiaXNzIjoiaHR0cHM6Ly9hcGkuYnJpZ2h0c3BhY2UuY29tL2F1dGgiLCJhdWQiOiJodHRwczovL2FwaS5icmlnaHRzcGFjZS5jb20vYXV0aC90b2tlbiIsInN1YiI6IjMzMSIsInRlbmFudGlkIjoiMGE2OWY4YmItMTc2MC00NzQ5LWI1NWItMGYxNmFhOGNhZDVmIiwiYXpwIjoiOTliMjcxM2ItMDQ1NC00NWJkLTllODEtZTJkYjllMmFlOTRhIiwic2NvcGUiOiJjb3JlOio6KiB1c2VyczoqOioiLCJqdGkiOiI5OGY0MmQwZC04OWZhLTRmNzEtYWU4OC05MjJhZGEwOGE4OGYifQ.qnXkzr-G-3bWguvT1RvczLqM7KfVIF6JtaHpNnPRd5xMNGe0-4Z18b54ABRAG9Pm8k5tAOXZ7FvSiZw-nYDjJ7SH-As328tptEfy4COwcGKOkZjucunTmHFpld_I-GBbWVW52nVfoh8ORrKd8RYjMeyJy77Npuhr-zibkJR15xKKWL9RbaWz-zVLwDA8GegoUDyGgNSN5r897MkYYNfpjjrMVe1YLwWzoRUWxOpsESY_FBunazM-mndgzl_LMdyd4ktC44UOwnFNRTqRFYhMkB3LbReZNhMoPe451gqi-79bmUIUeewfw7FhEu0MRuTkYdxaIZMyMeiWodkKnHx5SQ');
$data= $client->fetch('https://learn.thecorporategovernanceinstitute.com/d2l/api/lp/1.43/users/whoami');
 

if(!empty($data)){
   echo "<pre>";
 print_r($data);
 
}
