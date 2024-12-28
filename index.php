<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laragon Dev Environment</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4F5B93; /* PHP Purple */
            --secondary-color: #8892BF; /* Lighter PHP Purple */
            --background-color: #ECEFF1; /* Light Background */
            --dark-background-color: #2B2D42; /* Dark Background */
            --card-bg: #FFFFFF;
            --dark-card-bg: #3C3E52;
            --text-color: #333333;
            --dark-text-color: #E0E0E0;
            --shadow-color: rgba(0, 0, 0, 0.1);
            --dark-shadow-color: rgba(0, 0, 0, 0.5);
            --hover-color: #CFD8DC;
            --dark-hover-color: #4A4B5C;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            position: relative;
            transition: background-color 0.3s ease, color 0.3s ease;
            padding: 20px;
        }

        .dark-mode {
            background-color: var(--dark-background-color);
            color: var(--dark-text-color);
        }

        .container {
            width: 90%;
            max-width: 1100px;
            background: var(--card-bg);
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 10px 30px var(--shadow-color);
            transition: background 0.3s ease, box-shadow 0.3s ease;
        }

        .dark-mode .container {
            background: var(--dark-card-bg);
            box-shadow: 0 10px 30px var(--dark-shadow-color);
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 30px;
            animation: fadeIn 1.5s ease-out;
            flex-wrap: wrap;
            gap: 20px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .logo img {
            width: 60px;
            animation: bounce 1s infinite alternate;
        }

        .logo h1 {
            font-size: 2.2rem;
            color: var(--primary-color);
            animation: slideIn 1s ease-out;
        }

        .system-info {
            background-color: var(--hover-color);
            padding: 15px;
            border-radius: 8px;
            font-size: 0.9rem;
            color: var(--text-color);
            transition: background-color 0.3s ease;
            animation: fadeIn 1s ease-out;
        }

        .dark-mode .system-info {
            background-color: var(--dark-hover-color);
            color: var(--dark-text-color);
        }

        .projects {
            margin-top: 30px;
            animation: fadeIn 2s ease-out;
        }

        .projects h2 {
            margin-bottom: 20px;
            font-size: 1.8rem;
            color: var(--secondary-color);
            animation: slideIn 1.5s ease-out;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .project-card {
            background: var(--card-bg);
            border: 1px solid var(--hover-color);
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 5px 15px var(--shadow-color);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeIn 1.5s ease-out;
        }

        .dark-mode .project-card {
            background: var(--dark-card-bg);
            border-color: var(--dark-hover-color);
            box-shadow: 0 5px 15px var(--dark-shadow-color);
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px var(--shadow-color);
            border-color: var(--primary-color);
        }

        .dark-mode .project-card:hover {
            box-shadow: 0 10px 20px var(--dark-shadow-color);
        }

        .project-card a {
            text-decoration: none;
            color: var(--secondary-color);
            font-weight: 600;
        }

        .cta-button {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 20px;
            background: var(--primary-color);
            color: #fff;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 600;
            text-align: center;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .cta-button:hover {
            background: #3A4B78;
            transform: scale(1.05);
        }

        .toggle-dark-mode {
            position: fixed;
            top: 20px;
            right: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            z-index: 100;
        }

        .toggle-dark-mode input {
            display: none;
        }

        .toggle-dark-mode label {
            background-color: #FFF; /* Keep background bright */
            border: 2px solid var(--primary-color);
            border-radius: 25px;
            padding: 8px;
            cursor: pointer;
            width: 60px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
            transition: border-color 0.3s ease;
        }

        .toggle-dark-mode label:hover {
            border-color: #3A4B78;
        }

        .toggle-dark-mode label img {
            width: 18px;
            height: 18px;
        }

        /* Animations */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateX(-50px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes bounce {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="toggle-dark-mode">
        <input type="checkbox" id="dark-mode-toggle">
        <label for="dark-mode-toggle">
            <img src="https://cdn.icon-icons.com/icons2/565/PNG/512/clear-sun_icon-icons.com_54320.png" alt="Light Mode" id="light-icon">
            <img src="https://cdn.icon-icons.com/icons2/1674/PNG/512/moon_111148.png" alt="Dark Mode" id="dark-icon" style="display: none;">
        </label>
    </div>

    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="logo.svg" alt="Laragon Logo">
                <h1>Laragon</h1>
            </div>
            <div class="system-info">
                <p>PHP Version: <?php echo phpversion(); ?> <span><a title="phpinfo()" href="/?q=info">info</a></span></p>
                <p>Server: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
                <p>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></p>
            </div>
        </div>
        <div class="projects">
            <p> Welcome back <b>Habibi!</b> nice to meet you!</p>
            <h2>Your Projects</h2>
            <div class="projects-grid">
                <?php
                $docRoot = $_SERVER['DOCUMENT_ROOT'];
                $directories = array_filter(glob($docRoot . '/*'), 'is_dir');
                foreach ($directories as $dir) {
                    $folderName = basename($dir);
                    echo "<div class='project-card'><a href='/$folderName'>$folderName</a></div>";
                }
                ?>
            </div>
        </div>
        <a href="https://laragon.org/docs" class="cta-button" target="_blank">Get Started</a>
    </div>
    <script>
        document.getElementById("dark-mode-toggle").addEventListener("change", function () {
            document.body.classList.toggle("dark-mode");
            const darkMode = document.body.classList.contains("dark-mode");
            document.getElementById("light-icon").style.display = darkMode ? "none" : "inline";
            document.getElementById("dark-icon").style.display = darkMode ? "inline" : "none";
        });
    </script>
</body>
</html>
