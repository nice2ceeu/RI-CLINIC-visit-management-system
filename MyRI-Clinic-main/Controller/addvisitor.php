<?php
include("../config/database.php");

if (isset($_POST["submit"])) {
    $fullname = $_POST["fullname"];
    $purpose = $_POST["purpose"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];

    if ($fullname == "" || $purpose == "" || $checkin == "" || $checkout == "") {
        echo "<script>alert('Please fill all Fields');
        window.location.href = '../view/pages/visitor.php';
        </script>";
    } else {

        $date = date("Y-m-d");

        $stmt = $conn->prepare("INSERT INTO visitors (fullname, purpose, checkin, checkout, _date) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $fullname, $purpose, $checkin, $checkout, $date);
        $stmt->execute();

        echo "<script>
            alert('Visitor added');
            window.location.href = '../view/pages/visitor.php';
        </script>";
    }
}
