<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email']; 

    $phoneNumber = $_POST['phoneNumber'];
    $dateOfBirth = $_POST['dateOfBirth']; 

    $gender = $_POST['gender'];
    $address = $_POST['address'];

    // Basic input validation
    if (empty($firstName) || empty($lastName) || empty($email) || empty($phoneNumber) || empty($dateOfBirth) || empty($gender) || empty($address)) {
        
        header("Location: index.php?error=All fields are required");
        exit;
    }

    // Sanitize input data 
    $firstName = htmlspecialchars($firstName);
    $lastName = htmlspecialchars($lastName);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $phoneNumber = filter_var($phoneNumber, FILTER_SANITIZE_NUMBER_INT);
    $address = htmlspecialchars($address);

    // Process data (e.g., store in database, send email)

    echo "<h2>Form Submitted Successfully</h2>";
    echo "<p>First Name: " . $firstName . "</p>";
    echo "<p>Last Name: " . $lastName . "</p>";
    echo "<p>Email Address: " . $email . "</p>";
    echo "<p>Gender: " . $gender . "</p>";
    echo "<p>Phone number: " . $phoneNumber . "</p>";
    echo "<p>Date of Birth: " . $dateOfBirth . "</p>";
    echo "<p>Address: " . $address . "</p>";
    
    

} else {
    header("Location: index.php");
    exit;
}
?>