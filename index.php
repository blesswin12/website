<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #4facfe, #00f2fe);
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        header {
            background: #333;
            color: #fff;
            padding: 15px 0;
        }
        h1 {
            margin: 0;
        }
        nav {
            margin-top: 10px;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #00f2fe;
            font-weight: bold;
        }
        section {
            padding: 40px 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <h1>My Awesome Website</h1>
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </nav>
    </div>
</header>

<section id="home" class="container">
    <h2>Welcome to My Website</h2>
    <p>This is a simple one-page website created using HTML and CSS. Explore and learn!</p>
</section>

<section id="about" class="container">
    <h2>About Me</h2>
    <p>I am passionate about web development and enjoy building websites that are functional and visually appealing.</p>
</section>

<section id="contact" class="container">
    <h2>Contact Me</h2>
    <p>Email: <a href="mailto:dineshbharathi806@gmail.com">dineshbharathi806@gmail.com</a></p>
</section>

<footer>
    <p>&copy; 2025 My Website. All rights reserved.</p>
</footer>

</body>
</html>
