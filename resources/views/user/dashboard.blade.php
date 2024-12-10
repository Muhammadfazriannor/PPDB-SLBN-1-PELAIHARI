<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLBN 1 Pelaihari</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #1a1a2e, #16213e);
            color: #f4f4f4;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background: linear-gradient(90deg, #0f3460, #16213e);
            color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        .header .logo {
            font-size: 1.8em;
            font-weight: bold;
        }

        .header nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .header nav a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .hero {
            text-align: center;
            padding: 60px 20px;
            background: linear-gradient(to bottom, rgba(21, 21, 48, 0.9), rgba(10, 10, 23, 0.9)), 
                url('https://via.placeholder.com/1920x1080') no-repeat center center/cover;
            color: white;
        }

        .hero h1 {
            font-size: 3em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }

        .hero p {
            font-size: 1.3em;
            margin-bottom: 30px;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
        }

        .hero button {
            padding: 12px 25px;
            font-size: 1em;
            margin: 0 15px;
            background: linear-gradient(to right, #0093e9, #80d0c7);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0, 147, 233, 0.5);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .hero button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 147, 233, 0.7);
        }

        .about {
            text-align: center;
            padding: 40px 20px;
            background: linear-gradient(to bottom, #1e1e2f, #2b2b3e);
            color: #d1d1d1;
        }

        .about h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .about p {
            font-size: 1.2em;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.8;
        }

        .categories {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 40px 0;
            padding: 20px;
            background: linear-gradient(to bottom, #0f3460, #1c1c2d);
        }

        .categories .category {
            background: linear-gradient(to bottom, #16213e, #0f3460);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            color: white;
            font-size: 1.2em;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.5);
        }

        .categories .category:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.7);
        }

        footer {
            text-align: center;
            padding: 20px;
            background: linear-gradient(90deg, #0f3460, #1a1a2e);
            color: white;
        }

        footer p {
            margin: 0;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">SLBN 1 Pelaihari</div>
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="PPDB">Pendaftar</a>
            <a href="#">Contact</a>
            <a href="#">Login</a>
        </nav>
    </header>

    <section class="hero">
        <h1>Selamat Datang di SLBN 1 Pelaihari</h1>
        <p>Empowering inclusive education with care and commitment.</p>
        <button>Learn More</button>
        <button>Get Involved</button>
    </section>

    <section class="about">
        <h2>About Us</h2>
        <p>
            SLBN 1 Pelaihari is a school dedicated to providing quality education to students with special needs. Our mission is to create an inclusive and supportive learning environment that nurtures the potential of every child.
        </p>
    </section>

    <section class="categories">
        <div class="category">Elementary Program</div>
        <div class="category">Middle School Program</div>
        <div class="category">High School Program</div>
    </section>

    <footer>
        <p>&copy; 2024 SLBN 1 Pelaihari. All rights reserved.</p>
    </footer>
</body>
</html>
