<?php
session_start();

require_once __DIR__ . '/models/DB.php';
require_once __DIR__ . '/models/Courts.php';
require_once __DIR__ . '/models/Comments.php';
require_once __DIR__ . '/models/test_input.php';
require_once __DIR__ . '/models/handle_header_form.php';
handle_header_form();

$page = 'Single Court page';
$systemErrors = [];

// $all_courts = 
$court_id = $_GET['id'];
if($court_id == null) {
    header('Location: page_404_controler.php');
} 
// proveri da li je id pogresan
// else if()

$comments = new Comments();

if(isset($_POST['add_comment'])) {
    // validate comment
    // COMMENT: not empty, min 30 max 100 characters, trim
    if (empty($_POST['comment'])) {
        $systemErrors['comment_err'] = "* Comment is required";
      } 
      else {
        $comment = test_input($_POST["comment"]);
        if(strlen($comment) < 30 || strlen($comment) > 100) {
            $systemErrors['comment_err'] = '* Comment must contain between 30 and 100 chars.';
        }
    }
    // validate rating
    if (empty($_POST['rating'])) {
        $systemErrors['rating_err'] = "* Rating is required";
    } else {
        $rating = $_POST['rating'];

        if(!is_numeric($rating) || ($rating - intval($rating) != 0 || $rating > 5 || $rating < 1)){ 
            $systemErrors['rating_err'] = "* You must enter whole number from 1 to 5";
        } 
    }

    if (count($systemErrors) == 0) {
        $comments->add_comment($court_id, $comment, $rating, $_SESSION['username']);
        $comment = '';
        $rating = '';
    }

}


$court = Courts::get_one_by_id($court_id);
$user_comments = $comments->get_all_comments($court_id);


require __DIR__ . '/views/_layout/v-header.php';

require __DIR__ . '/views/v-single_court.php';

require __DIR__ . '/views/_layout/v-footer.php';