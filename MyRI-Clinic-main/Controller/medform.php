
<?php
include("../config/database.php");

if (isset($_POST["submit"])) {
    $fullname = $_POST["fullname"];
    $grade_section = $_POST["grade_section"];
    $birthdate = $_POST["birthdate"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];
    $address = $_POST["address"];
    $parent = $_POST["parent"];
    $contact = $_POST["contact"];
    $asthma = $_POST["asthma"];
    $epilepsy = $_POST["epilepsy"];
    $food = $_POST["foodallergy"];
    $foodcause = $_POST["food_allergies"];
    $insect = $_POST["insectallergy"];
    $insectcause = $_POST["insect_bites"];
   

    if ($food == "no" && $insect == "no") {
        $stmt = $conn->prepare("INSERT INTO medicalform(fullname, grade_section,
            birthdate, age, gender,height,_weight,
            _address,parent,contact,asthma,epilepsy,
            food,insect) 
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param(
            "sssisiisssssss",
            $fullname,
            $grade_section,
            $birthdate,
            $age,
            $gender,
            $height,
            $weight,
            $address,
            $parent,
            $contact,
            $asthma,
            $epilepsy,
            $food,
            $insect
        );
        $stmt->execute();
        echo "<script>alert('Record Added');
            window.location.href = '../view/pages/medicalform.php';
            </script>";
    } else if ($food == "no") {
        $stmt = $conn->prepare("INSERT INTO medicalform (fullname, grade_section,
            birthdate, age, gender,height, _weight,
            _address,parent,contact,asthma,epilepsy,
            food,insect,insectcause) 
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param(
            "sssisiissssssss",
            $fullname,
            $grade_section,
            $birthdate,
            $age,
            $gender,
            $height,
            $weight,
            $address,
            $parent,
            $contact,
            $asthma,
            $epilepsy,
            $food,
            $insect,
            $insectcause
        );
        $stmt->execute();
        echo "<script>alert('Record Added');
            window.location.href = '../view/pages/medicalform.php';
            </script>";
    } else if ($insect == "no") {
        $stmt = $conn->prepare("INSERT INTO medicalform (fullname, grade_section,
            birthdate, age, gender,height,_weight,
            _address,parent,contact,asthma,epilepsy,
            food,foodcause,insect) 
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param(
            "sssisiissssssss",
            $fullname,
            $grade_section,
            $birthdate,
            $age,
            $gender,
            $height,
            $weight,
            $address,
            $parent,
            $contact,
            $asthma,
            $epilepsy,
            $food,
            $foodcause,
            $insect
        );
        $stmt->execute();

        echo "<script>alert('Record Added');
            window.location.href = '../view/pages/medicalform.php';
            </script>";
    } else {
        $stmt = $conn->prepare("INSERT INTO medicalform (fullname, grade_section,
            birthdate, age, gender,height, _weight,
            _address,parent,contact,asthma,epilepsy,
            food,foodcause,insect,insectcause)
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param(
            "sssisiisssssssss",
            $fullname,
            $grade_section,
            $birthdate,
            $age,
            $gender,
            $height,
            $weight,
            $address,
            $parent,
            $contact,
            $asthma,
            $epilepsy,
            $food,
            $foodcause,
            $insect,
            $insectcause
        );
        $stmt->execute();

        echo "<script>alert('Record Added');
            window.location.href = '../view/pages/medicalform.php';
            </script>";
    }
}
