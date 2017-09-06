<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require "models/SearchModel.php";

$find = new SearchArt();

// Start list articles
$search = (!empty($_GET["search"])) ? $_GET["search"] : "";

$page = (!empty($_GET["page"])) ? $_GET["page"] : 1;
$ipp = 2;
$start = $ipp*$page-$ipp; 

$list = $find->getAll($search, $start, $ipp);
// Get count articles
$count = $find->countArticles($search);
$nrPages = ceil($count/$ipp);
?>