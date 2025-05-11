
<?php
    include("../config/database.php");

    if(isset($_POST['submit'])){
        $id = $_POST['id'];

        $stmt = $conn->prepare("Delete FROM medicalform WHERE id = ?");
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            echo "<script>alert('Record Deleted');
            window.location.href ='../view/pages/studentlist.php'</script>";
            
        } else {
            echo "<script>alert('Failed to Delete');
            window.location.href ='../view/pages/studentlist.php'
            </script>";
            
        }

        $stmt->close();
        
    }

?>