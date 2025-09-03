<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Seek Balance Organization</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Seek Balance Organization">
<meta name="author" content="Fred Nora">

<!-- Google Fonts for modern typography -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="icon" href="../assets/img/polard8.png" type="image/x-icon">
<link href="../assets/css/gramado.css" rel="stylesheet">

<style>
    body {
        font-family: 'Roboto', Arial, sans-serif;
        background: linear-gradient(135deg, #faf8ef 0%, #e0eafc 100%);
        margin: 0;
        min-height: 100vh;
    }
    .gramado-nav {
        position: sticky;
        top: 0;
        background: rgba(255,255,255,0.9);
        backdrop-filter: blur(8px);
        box-shadow: 0 2px 12px rgba(0,0,0,0.04);
        padding: 0.5rem 1.5rem;
        z-index: 100;
        display: flex;
        align-items: center;
    }
    .gramado-nav ul {
        list-style: none;
        display: flex;
        gap: 2rem;
        margin: 0;
        padding: 0;
    }
    .gramado-nav li a {
        text-decoration: none;
        color: #333;
        font-weight: 500;
        transition: color .2s;
    }
    .gramado-nav li a:hover {
        color: #2e7d32;
    }

    .logo {
        width: 40px;
        height: 40px;
        margin-right: 1rem;
        border-radius: 50%;
    }

    .core {
        max-width: 450px;
        margin: 3rem auto;
        padding: 2rem;
        background: rgba(255,255,255,0.97);
        border-radius: 1rem;
        box-shadow: 0 8px 32px rgba(44,123,123,0.13);
        text-align: center;
        animation: fadeIn 1.4s;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px);}
      to { opacity: 1; transform: translateY(0);}
    }

    .core h1 {
        font-size: 2.2rem;
        font-weight: 700;
        color: #2e7d32;
        margin-bottom: 1.2rem;
        letter-spacing: .03em;
    }

    .directory-list {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.1rem;
        margin: 2rem 0;
    }
    @media (min-width: 520px) {
        .directory-list {
            grid-template-columns: 1fr 1fr;
        }
    }
    .card-link {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1rem 0.5rem;
        background: #e0f7fa;
        border-radius: 0.6rem;
        box-shadow: 0 2px 8px rgba(44,123,123,0.07);
        color: #00695c;
        font-size: 1.18rem;
        font-weight: 500;
        text-decoration: none;
        transition: background 0.2s, transform 0.2s;
    }
    .card-link:hover {
        background: #b2ebf2;
        transform: scale(1.04);
        color: #2e7d32;
    }

    .button {
        margin-top: 1.5rem;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: #2e7d32;
        color: #fff;
        border: none;
        border-radius: 0.5rem;
        padding: 0.8rem 1.2rem;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        box-shadow: 0 2px 8px rgba(44,123,123,0.09);
        transition: background 0.2s;
    }
    .button:hover {
        background: #388e3c;
    }
    .button img {
        vertical-align: middle;
    }
</style>
</head>

<body>
    <!-- Navigation bar with logo -->
    <nav class="gramado-nav">
        <img class="logo" src="../assets/img/polard8.png" alt="Logo">
        <ul>
            <li><a href="#section-4">User</a></li>
            <li><a href="#section-3">Online communication</a></li>
            <li><a href="#section-2">Business</a></li>
            <li><a href="#section-1">Developer</a></li>
        </ul>
    </nav>

    <div class="core">
        <h1>Seek Balance Organization</h1>
        <div class="directory-list">
        <?php
            $cwd = getcwd();
            $filename_list = scandir($cwd);
            foreach ($filename_list as $filename)
            {
                if (is_dir($filename) && ctype_alnum($filename))
                {
                    // Adding an icon for visual enhancement (font-awesome or SVG possible)
                    echo '<a class="card-link" href="/' . htmlspecialchars($filename) . '/index.html">'
                            . '<span style="margin-right:.6rem;">📁</span>' . htmlspecialchars($filename) . '/'
                        . '</a>';
                }
            }
        ?>
        </div>
        <a class="button" href="https://github.com/seekbalance/seekbalance.github.io" target="_blank">
            <img width="20" height="20" src="https://github.com/fluidicon.png" alt="GitHub"> See code at GitHub
        </a>
    </div>
    <script src="../assets/js/gramado.js"></script>
</body>
</html>