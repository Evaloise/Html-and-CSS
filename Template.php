<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "template";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $institution = $_POST['institution'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $about = $_POST['about'];
    $skill1 = $_POST['skill1'];
    $skill2 = $_POST['skill2'];
    $skill3 = $_POST['skill3'];
    $skill4 = $_POST['skill4'];

    // Insert user details into persinfo table
    $sql = "INSERT INTO users (`first name`, `last name`, email) VALUES ('$firstname', '$lastname', '$email')";
    $conn->query($sql);

    // Insert user details into user_resume table
    $sql_resume = "INSERT INTO personalinfo (`first name`, `last name`, email, course, institution, start_date, end_date, about, skill1, skill2, skill3, skill4) 
                   VALUES ('$firstname', '$lastname', '$email', '$course', '$institution', '$start_date', '$end_date', '$about', '$skill1', '$skill2', '$skill3', '$skill4')";
    if ($conn->query($sql_resume) === TRUE) {
        // Redirect to a new page to display the resume
        header("Location: display_resume.php?firstname=$firstname&lastname=$lastname&email=$email&course=$course&institution=$institution&start_date=$start_date&end_date=$end_date&about=$about&skill1=$skill1&skill2=$skill2&skill3=$skill3&skill4=$skill4");
        exit();
    } else {
        echo "Error: " . $sql_resume . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Resume</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <!-- Add input fields according to the template -->
        First Name: <input type="text" name="firstname" required><br>
        Last Name: <input type="text" name="lastname" required><br>
        Email: <input type="text" name="email" required><br>
        Course: <input type="text" name="course" required><br>
        Institution: <input type="text" name="institution" required><br>
        Start Date: <input type="text" name="start_date" required><br>
        End Date: <input type="text" name="end_date" required><br>
        About: <textarea name="about" required></textarea><br>
        Skill 1: <input type="text" name="skill1" required><br>
        Skill 2: <input type="text" name="skill2" required><br>
        Skill 3: <input type="text" name="skill3" required><br>
        Skill 4: <input type="text" name="skill4" required><br>

        <input type="submit" name="submit" value="Save Details">
    </form>
</body>
</html>