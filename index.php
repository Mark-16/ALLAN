<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnCall</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.html">
            <img  src="IMAGES/On.jpg" alt="Website Logo">
            </a>
        </div>
        <nav class="navigation">
        <ul class="nave">
                <li><a href="index.php">Home</a></li>
                <li><a href="Aboutus.php">About Us</a></li>
                <li><a href="Aboutus.php#serve">Our Services</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <button type="submit">Search</button>
        </div>
    </header>

<div class="container">
        <h2>Service Request Form</h2>
        <form action="process_request.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number:</label>
                <input type="tel" id="mobile" name="mobile" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" required></textarea>
            </div>
            <div class="form-group">
                <label for="service">Service:</label>
                <select id="service" name="service" required>
                    <option value="">Select a Service</option>
                    <option value="Plumbing">Plumbing</option>
                    <option value="Electrical">Electrical</option>
                    <option value="Cleaning">Cleaning</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit Request">
            </div>
        </form>
    </div>
</body>
</html>