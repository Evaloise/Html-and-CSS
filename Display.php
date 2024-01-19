<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Display Resume</title>

</head>

<body>
    <?php
    // Retrieve details from URL parameters
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $email = $_GET['email'];
    $course = $_GET['course'];
    $institution = $_GET['institution'];
    $start_date = $_GET['start_date'];
    $end_date = $_GET['end_date'];
    $about = $_GET['about'];
    $skill1 = $_GET['skill1'];
    $skill2 = $_GET['skill2'];
    $skill3 = $_GET['skill3'];
    $skill4 = $_GET['skill4'];
    ?>

    <header id="header">
        <!-- Display name and title (if applicable) -->
        <h1><?php echo $firstname . ' ' . $lastname; ?></h1>
    </header>

    <main>
        <article id="mainLeft">
            <section>
                <h2>CONTACT</h2>
                <!-- Display contact information -->
                <p class="email">Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>

            </section>
            <section>
                <h2>SKILLS</h2>
                <!-- Display skills -->
                <ul>
                    <li><?php echo $skill1; ?></li>
                    <li><?php echo $skill2; ?></li>
                    <li><?php echo $skill3; ?></li>
                    <li><?php echo $skill4; ?></li>
                </ul>
            </section>
            <section>
                <h2>EDUCATION</h2>
                <!-- Display education information -->
                <h3><?php echo $course; ?></h3>
                <p><?php echo $institution; ?></p>
                <p><?php echo "Start Date: " . $start_date . " - End Date: " . $end_date; ?></p>
            </section>
        </article>
        <article id="mainRight">
            <section>
                <h2>ABOUT</h2>
                <!-- Display about section -->
                <p><?php echo $about; ?></p>
            </section>
        </article>
    </main>
</body>
</html>