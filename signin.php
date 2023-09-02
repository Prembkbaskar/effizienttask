<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "effizient_db";

// Connect to the MySQL database
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check the connection
if ($conn->connect_error) {
    die('Connection error: ' . $conn->connect_error);
}

// Get the information from the form
$email = $_POST["email"];
    $fullName = $_POST["fullName"];
    $age = $_POST["age"];
    $education = $_POST["education"];
    $Institutename = $_POST["Institutename"];
    $study = $_POST["study"];
    $workExperience = $_POST["workExperience"];
    $admittedInstitute = $_POST["admittedInstitute"];
    $secondInstitute = $_POST["secondInstitute"];
    $countryApplyingFrom = $_POST["countryApplyingFrom"];
    $futureGoals = $_POST["futureGoals"];
    $listeningScore = $_POST["listeningScore"];
    $readingScore = $_POST["readingScore"];
    $speakingScore = $_POST["speakingScore"];
    $writingScore = $_POST["writingScore"];
    $tuitionPayment = $_POST["tuitionPayment"];
    $tuitionAmount = $_POST["tuitionAmount"];
    $gicStatus = $_POST["gicStatus"];
    $gicAmount = $_POST["gicAmount"];

// Insert the information into the MySQL database
$sql = "INSERT INTO student_info (email, fullName, age, education, Institutename, study, workExperience,admittedInstitute,secondInstitute, countryApplyingFrom, futureGoals, listeningScores, readingScores , speakingScores , writingScores ,tuitionPayment,tutionAmount, gicStatus,gicAmount)
VALUES ('$email', '$fullName', '$age', '$education', '$Institutename', '$study', '$workExperience', '$admittedInstitute ','$secondInstitute' ,'$countryApplyingFrom', '$futureGoals', '$listeningScores','$readingScores','$speakingScores' , '$writingScores','$tuitionPayment', ' $tutionAmount' , '$gicStats', ' $gicAmount')";

$result = $conn->query($sql);

// Check if the query was successful
if ($result === TRUE) {
    // Send an email to the user
    $to = $email;
    $subject = 'Your Student Information';
    $message = 'Your student information has been successfully submitted.';

    mail($to, $subject, $message);

    echo 'Your information has been submitted successfully.';
} else {
    echo 'An error occurred.';
}

// Close the connection to the MySQL database
$conn->close();

?>
