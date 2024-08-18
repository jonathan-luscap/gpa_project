<?php
session_start();

$userLoggedIn = isset($_SESSION['user_id']);

if ($userLoggedIn) {
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
} else {
    header("Cache-Control: public, max-age=3600");
}