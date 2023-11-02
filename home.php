<?php
require_once("src/PhotoRepository.php");

$photos = [];
$photosPerPage = 8;
$photosCount = 0;
$pagesCount = 0;

$currentPage = isset($_GET['p']) ? (int) $_GET['p'] : 1;
$startItems = ($currentPage > 1) ? $currentPage * $photosPerPage - $photosPerPage : 0;

$photos = findPhotos($startItems, $photosPerPage);

$photosCount = count($photos);
$pages = ceil($photosCount / $photosPerPage);

if ($photosCount == 0 && $currentPage > 1) {
    header('Location:index.php');
}

require_once('views/HomePage.php');