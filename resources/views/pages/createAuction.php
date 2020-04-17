<?php
function generate_random_token()
{
    return bin2hex(openssl_random_pseudo_bytes(32));
}
session_start();
session_regenerate_id(true);

if (!isset($_SESSION['csrf'])) {
    $_SESSION['csrf'] = generate_random_token();
}

$loggedin = true;
$admin = false;
$signUpPage = false;
$createAuctionPage = true;
$displaySearch = true;

// Content variables
$speciesName = "";
$name = "";
$description = "";
$category = 0;
$age = "";
$startingPrice = "";
$buyoutPrice = "";
// skils...
$color = 0;
$devStage = 0;
// images...

include('../templates/common/header.php');
include('../templates/auctions/createAuction.php');
include('../templates/common/footer.php');

?>