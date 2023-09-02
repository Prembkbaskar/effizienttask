<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
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

    // Database connection (replace with your database credentials)
    $conn = new mysqli("localhost", "root", "", "effizient_db");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert data into the database
    $sql = "INSERT INTO student_info (email, fullName, age, education, Institutename, study, workExperience,admittedInstitute,secondInstitute, countryApplyingFrom, futureGoals, listeningScores, readingScores , speakingScores , writingScores ,tuitionPayment,tutionAmount, gicStatus,gicAmount)
    VALUES ('$email', '$fullName', '$age', '$education', '$Institutename', '$study', '$workExperience', '$admittedInstitute ','$secondInstitute' ,'$countryApplyingFrom', '$futureGoals', '$listeningScores','$readingScores','$speakingScores' , '$writingScores','$tuitionPayment', ' $tutionAmount' , '$gicStats', ' $gicAmount')";
    
    // Create a prepared statement
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters to the statement
        $stmt->bind_param("ssssssssssssssssss", $email, $fullName, $age, $education, $Institutename, $study, $workExperience, $admittedInstitute, $secondInstitute, $countryApplyingFrom, $futureGoals, $listeningScore, $readingScore, $speakingScore, $writingScore, $tuitionPayment, $tuitionAmount, $gicStatus, $gicAmount);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error in preparing the statement: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
// Send an email to the user
$to = $email;
$subject = 'Thank you for your submission';
$message = 'Your information has been successfully submitted. Thank you for your interest in our services.';
mail($to, $subject, $message);

?>

//start the session
require_once('db_config.php');
session_start();
$db = new Database();
//check whether the button is clicked or not
if(isset($_POST['signup']))
{
    // check whether the bix are empty or not
    if(!empty($_POST['username'])   &&  !empty($_POST['email'])    &&   !empty($_POST['password']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        echo $username." ".$email." ".$password; 

        $stmt = $db->connection->prepare("INSERT INTO information (username, email, password) VALUES (:user, :email, :passw)");
        $stmt->bindParam(':user', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':passw', $password);
        $stmt->execute();
        header("location: index.html");
    }  
}


?>