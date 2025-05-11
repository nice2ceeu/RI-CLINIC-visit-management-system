<main class='uppercase mt-22 px-8.5'>
                <table class='w-full poppins'>
                <thead class='[&>tr>th]:px-4 text-left [&>tr>th]:pb-22'>
                <tr class=''>
                    <th>ID</th>
                    <th>FULL NAME</th>
                    <th>Grade & Section</th>
                    <th>Gender</th>
                    <th>Guardian</th>
                    <th>Form</th>
                    <th>Remove</th>
                </tr>
                </thead>
                <tbody
                class='text-left [&>tr]:odd:bg-[#a8a8a829] [&>tr>td]:px-4 [&>tr>td]:py-4.5'>";

<?php
include('../config/database.php');
if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];

    try {
        $stmt = $conn->prepare("SELECT * FROM medicalform WHERE fullname = ?");
        $stmt->bind_param("s", $fullname);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
          
            $_id = htmlspecialchars($row['id']);
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['fullname']) . "</td>";
            echo "<td>" . htmlspecialchars($row['grade_section']) . "</td>";
            echo "<td>" . htmlspecialchars($row['gender']) . "</td>";
            echo "<td>" . htmlspecialchars($row['parent']) . "</td>";
            echo "<td>";
            echo    <form action='../view/pages/medicalinformation.php' method='POST'>
                <input type='hidden' name='id' value='" . $_id . "'>
                <button type='submit' name='submit'><span style='color: green;'>View</span></button>
                </form>
                </td>";
            echo "<td><form action='delete.php' method='POST'>
                <input type='hidden' name='id' value='" . $_id . "'>
                <button type='submit' name='submit'><span style='color: red;'>Delete</span></button>
                </form>
                </td>";
                
        } else {
            echo "<script>alert('No User Found');
                    window.location.href = '../view/pages/studentlist.php';
                </script>";
        }
    } catch (mysqli_sql_exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
        </tbody>
    </table>
</main>