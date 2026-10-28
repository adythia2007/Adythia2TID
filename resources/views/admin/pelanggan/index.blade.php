<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adythia — Portfolio & Developer CV</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bg-main: #0b0f19;
            --bg-card: rgba(22, 31, 49, 0.75);
            --accent-cyan: #00f2fe;
            --accent-blue: #4facfe;
            --text-muted: #94a3b8;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-main);
            color: #f1f5f9;
            min-height: 100vh;
        }

        /* Ambient Glow Background Effect */
        .glow-bg {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: -1;
            overflow: hidden;
            pointer-events: none;
        }
        .glow-1 {
            position: absolute; top: -10%; left: 15%;
            width: 450px; height: 450px;
            background: radial-gradient(circle, rgba(0, 242, 254, 0.12) 0%, rgba(0, 0, 0, 0) 70%);
            filter: blur(90px);
        }
        .glow-2 {
            position: absolute; top: 45%; right: 10%;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(79, 172, 254, 0.1) 0%, rgba(0, 0, 0, 0) 70%);
            filter: blur(100px);
        }

        /* Glassmorphism Navbar */
        .navbar-glass {
            background: rgba(11, 15, 25, 0.85);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, var(--accent-cyan), var(--accent-blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Hero Profile Box */
        .hero-avatar {
            width: 110px; height: 110px;
            border-radius: 50%;
            border: 2px solid var(--accent-cyan);
            box-shadow: 0 0 25px rgba(0, 242,