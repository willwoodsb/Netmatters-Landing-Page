<?php
session_start();


// initialise variables
$fnameErr = $emailErr = $lnameErr = $subErr = $telNumErr = $messErr = "";
$values = $errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $key => $post) {
        $values[$key] = trim(filter_input(INPUT_POST, $key, FILTER_SANITIZE_STRING));
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
    if (empty($values["cname"])) {
        $values["cname"] = null;
    }
    if (isset($values["consent"])) {
        if ($values["consent"] == "on") {
            $values["consent"] = "yes";
        }
    } else {
        $values["consent"] = "no";
    }
    if (!preg_match("/^(\+\d{12}|\d{11}|\+\d{2}-\d{3}-\d{7})$/", $values["tel-num"]) && empty($errors["tel-num"])) {
        $errors["tel-num"] = "Please enter a valid phone number";
    }
    if (!filter_var($values["email"], FILTER_VALIDATE_EMAIL) && empty($errors["email"])) {
        $errors["email"] = "Please enter a valid email";
    }
    $_SESSION['errors'] = $errors;
    // insert values into table 
    if (empty(implode('', $errors))) {
        if(add_entry($values)) {
            $_SESSION['success'] = true;
        } 
    } else {
        $_SESSION['success'] = false;
        $_SESSION['values'] = $values;
    }
}

header('Location: ../contact-us.php#contact-form');

function add_entry($values) {
    include('connection.php');
    try {
        $results = $db->prepare("
            INSERT INTO `contact` (`name`, `cname`, `email`, `tel-num`, `subject`, `message`, `mconsent`) 
            VALUES (?, ?, ?, ?, ?, ?, ?);
        ");
        $results->bindParam(1, $values["name"], PDO::PARAM_STR);
        $results->bindParam(2, $values["cname"], PDO::PARAM_STR);
        $results->bindParam(3, $values["email"], PDO::PARAM_STR);
        $results->bindParam(4, $values["tel-num"], PDO::PARAM_STR);
        $results->bindParam(5, $values["subject"], PDO::PARAM_STR);
        $results->bindParam(6, $values["message"], PDO::PARAM_STR);
        $results->bindParam(7, $values["consent"], PDO::PARAM_STR);

        $results->execute();
    } catch (Exception $e) {
        echo $e->getMessage();
        return false;
    }
    return true;
}







