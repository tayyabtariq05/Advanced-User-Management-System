<?php
include_once 'connect.php';

if(isset($_POST['save']))
{    
    // 1. Capture and Clean Data [cite: 31, 32]
    $email = trim($_POST['Email']);
    $first_name = trim($_POST['Firstname']);
    $last_name  = trim($_POST['Lastname']);
    $Age        = $_POST['Age'];
    $gender     = isset($_POST['Gender']) ? $_POST['Gender'] : '';

    // 2. CHECK FOR DUPLICATE EMAIL
    // We prepare a select statement to see if this email is already in the database 
    $checkEmail = $conn->prepare("SELECT Email FROM registration WHERE Email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();

    if ($result->num_rows > 0) {
        // If rows > 0, the email exists!
        echo "<p style='color:orange; font-weight:bold;'>Error: This email is already registered. Please use a different one.</p>";
    } else {
        // 3. PROCEED TO INSERT (If no duplicate found)
        $stmt = $conn->prepare("INSERT INTO registration (Firstname, Lastname, Age, Email, Gender) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $first_name, $last_name, $Age, $email, $gender);

        if ($stmt->execute()) {
            echo "<p style='color:green;'>New record created successfully!</p>";
            
            // Email logic [cite: 31]
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

    // 4. Cleanup
    $checkEmail->close();
    $conn->close();
}
?>