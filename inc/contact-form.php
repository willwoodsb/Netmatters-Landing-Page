<?php
session_start();


// initialise variables
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
    if (isset($values["cname"])) {
        if (empty($values["cname"])) {
            $values["cname"] = null;
        }
    }
    
    if (isset($values["consent"])) {
        if ($values["consent"] == "on") {
            $values["consent"] = "yes";
        }
    } else {
        $values["consent"] = "no";
    }
    if (isset($values["tel-num"])) {
        if (!preg_match("/^(\+\d{12}|\d{11}|\+\d{2}-\d{3}-\d{7})$/", $values["tel-num"]) && empty($errors["tel-num"])) {
            $errors["tel-num"] = "Please enter a valid phone number";
        }
    }
    
    if (!filter_var($values["email"], FILTER_VALIDATE_EMAIL) && empty($errors["email"])) {
        $errors["email"] = "Please enter a valid email";
    }

    if (sizeof($values) == 3) {
        $_SESSION['email-errors'] = $errors;
        // insert values into table 
        if (empty(implode('', $errors))) {
            add_email($values);
        } else {
            $_SESSION['success'] = false;
            $_SESSION['email-values'] = $values;
        } 
    } else {
        $_SESSION['contact-errors'] = $errors;
        // insert values into table 
        if (empty(implode('', $errors))) {
            add_contact($values);
        } else {
            $_SESSION['success'] = false;
            $_SESSION['contact-values'] = $values;
        }   
    }
}
header('Location:'.$_SERVER['HTTP_REFERER']);
exit;



function add_contact($values) {
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
        $_SESSION['success'] = true;
    } catch (Exception $e) {
        $_SESSION['success'] = false;
    }
}

function add_email($values) {
    include('connection.php');
    try {
        $results = $db->prepare("
            INSERT INTO `emaillist` (`name`, `email`, `mconsent`) 
            VALUES (?, ?, ?);
        ");
        $results->bindParam(1, $values["name"], PDO::PARAM_STR);
        $results->bindParam(2, $values["email"], PDO::PARAM_STR);
        $results->bindParam(3, $values["consent"], PDO::PARAM_STR);

        $results->execute();
        $_SESSION['success'] = true;
    } catch (Exception $e) {
        $_SESSION['success'] = false;
    }
}






