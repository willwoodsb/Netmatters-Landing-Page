<?php


// initialise variables
$fnameErr = $emailErr = $lnameErr = $subErr = $telNumErr = $messErr = "";
$values = [];
$errors = [];
$errArray = [];
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $key => $post) {
        $values[$key] = clean_data($post);
        $errors[$key] = "";
        if (empty($values[$key]) && $key != "cname") {
            $errors[$key] = "Please enter ";
            switch ($key) {
                case "name":
                case "email": 
                    $errors[$key] .= 'your ' . $key . '.';
                    break;
                case "subject":
                case "message":
                    $errors[$key] .= 'a ' . $key . '.';
                    break;
                case "tel-num":
                    $errors[$key] .= 'your telephone number';
                    break;
            }
        }
    }
    if (!preg_match("/^(\+\d{12}|\d{11}|\+\d{2}-\d{3}-\d{7})$/", $values["tel-num"]) && empty($errors["tel-num"])) {
        $errors["tel-num"] = "Please enter a valid phone number";
    }
    if (!filter_var($values["email"], FILTER_VALIDATE_EMAIL) && empty($errors["email"])) {
        $errors["email"] = "Please enter a valid email";
    }
    if (empty(implode('', $errors))) {
        // do shit 
    }
}


function clean_data($data) {
    $data = strip_tags($data);
    $data = trim($data);
    return $data;
}


