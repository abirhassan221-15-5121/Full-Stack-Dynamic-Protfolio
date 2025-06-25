<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Navbar Example</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
    }

    
    nav {
      background-color: #1f2937; 
      color: white;
      padding: 15px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .logo {
      font-size: 22px;
      font-weight: bold;
    }

    .nav-links {
      display: flex;
      gap: 25px;
    }

    .nav-links a {
      color: white;
      text-decoration: none;
      font-size: 16px;
      transition: color 0.3s ease;
    }

    .nav-links a:hover {
      color: #60a5fa; 
    }

    
    @media (max-width: 600px) {
      .nav-links {
        display: none; 
      }
    }
  </style>
</head>
<body>

  <nav>
    <div class="logo">Abir Portfolio</div>
    <div class="nav-links">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact</a>
    </div>
  </nav>

</body>
</html>
