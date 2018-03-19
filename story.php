<?php
session_start();

$word1 = trim(htmlspecialchars($_SESSION['word'][1]));
$word2 = trim(htmlspecialchars($_SESSION['word'][2]));
$word3 = trim(htmlspecialchars($_SESSION['word'][3]));
$word4 = trim(htmlspecialchars($_SESSION['word'][4]));
$word5 = trim(htmlspecialchars($_SESSION['word'][5]));
if(empty($word1)) {
    header("location:play.php?p=1");
    exit;
} else if(empty($word2)) {
    header("location:play.php?p=2");
    exit;
} else if(empty($word3)) {
    header("location:play.php?p=3");
    exit;
} else if(empty($word4)) {
    header("location:play.php?p=4");
    exit;
} else if(empty($word5)) {
    header("location:play.php?p=5");
    exit;
}

include 'inc/header.php';

echo '<h1>My Treehouse Story</h1>';

echo '<p>There once was a(n) ' . $word1;
echo ' programmer named ' . $word2; 
echo '. </p>';
echo '<p>This ' .  $word3; 
echo ' programmer used Treehouse to learn to ' . $word4;
echo ' the ' . $word5 . '.</p>';

echo ' <a class="btn btn-default btn-lg" href="inc/cookie.php?save" role="button">Save Story</a>';
echo ' <a class="btn btn-default btn-lg" href="play.php" role="button">Play Again</a>';
echo ' <a class="btn btn-default btn-lg" href="index.php" role="button">Other Stories</a>';


include 'inc/footer.php';