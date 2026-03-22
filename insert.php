<?php
include_once 'connect.php';

if(isset($_POST['save']))
{    
    $email = trim($_POST['Email']);
    $first_name = trim($_POST['Firstname']);
    $last_name  = trim($_POST['Lastname']);
    $Age        = $_POST['Age'];
    $gender     = isset($_POST['Gender']) ? $_POST['Gender'] : '';

    $checkEmail = $conn->prepare("SELECT Email FROM registration WHERE Email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();

    if ($result->num_rows > 0) {
        echo "<p style='color:orange; font-weight:bold;'>Error: This email is already registered. Please use a different one.</p>";
    } else {
        $stmt = $conn->prepare("INSERT INTO registration (Firstname, Lastname, Age, Email, Gender) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $first_name, $last_name, $Age, $email, $gender);

        if ($stmt->execute()) {
            echo "<p style='color:green;'>New record created successfully!</p>";
            
            $to      = "tayyabtariqawan30@gmail.com"; 
            $subject = "New Secure Registration";
            $message = "User $first_name has registered successfully.";
            $headers = "From: $email"; 
            mail($to, $subject, $message, $headers);
        } else {
            echo "Database Error: " . $stmt->error;
        }
        $stmt->close();
    }

    $checkEmail->close();
    $conn->close();
}
?>
