<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zetech University</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="zetech.css">
</head>
<body>
    <header>
        <div class="container">
            <img src="PHOTS/091db446-aa66-4c3c-9baa-bca2244507fa.png" alt="University Logo" class="logo">
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#departments">Departments</a></li>
                    <li><a href="#admissions">Admissions</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="container">
            <h1>Welcome to Zetech University</h1>
            <p>Your future starts here.</p>
            <a href="#admissions" class="cta">Apply Now</a>
        </div>
    </section>

    <section id="about" class="about-us">
        <div class="container">
            <h2>About Us</h2>
            <p>Zetech University has a rich history of academic excellence and a commitment to providing a well-rounded education.</p>
        </div>
    </section>

    <section id="departments" class="departments">
        <div class="container">
            <h2>Our Departments</h2>
            <div class="department-list">
                <div class="department">
                    <h3>Computer Science</h3>
                    <p>Learn cutting-edge technologies and innovate the future.</p>
                </div>
                <div class="department">
                    <h3>Business Administration</h3>
                    <p>Prepare for leadership roles in the global market.</p>
                </div>
                <!-- Add more departments as needed -->
            </div>
        </div>
    </section>

    <section id="admissions" class="admissions">
        <div class="container">
            <h2>Admissions</h2>
            <p>Join our community of scholars. Apply today!</p>
            <a href="apply.html" class="cta">Apply Now</a>
        </div>
     </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = htmlspecialchars($_POST['name']);
                    $email = htmlspecialchars($_POST['email']);
                    $message = htmlspecialchars($_POST['message']);

                    // Email to send the form data to
                    $to = "admin@zetechuniversity.com";
                    $subject = "New Contact Message from $name";
                    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
                    $headers = "From: $email";

                    // Check if email is valid and send the email
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        if (mail($to, $subject, $body, $headers)) {
                            echo "<p>Thank you, your message has been sent.</p>";
                        } else {
                            echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
                        }
                    } else {
                        echo "<p>Invalid email address. Please enter a valid email.</p>";
                    }
                }
            ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <br><br>
                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Type your message here" required></textarea>
                <br><br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Zetech University. All rights reserved.</p>
            <p><a href="privacy.html">Privacy Policy</a> | <a href="terms.html">Terms of Service</a></p>
        </div>
    </footer>
</body>
</html>
