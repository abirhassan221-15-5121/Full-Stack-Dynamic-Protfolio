<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Abir Hassan - Portfolio</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f9fafb;
      color: #1f2937;
    }

    /* Navbar */
    nav {
      background-color: #1f2937;
      color: white;
      padding: 15px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .logo {
      font-size: 24px;
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

    .hamburger {
      display: none;
      flex-direction: column;
      gap: 5px;
      cursor: pointer;
    }

    .hamburger div {
      width: 25px;
      height: 3px;
      background-color: white;
    }

    /* Hero Section */
    .hero {
      padding: 60px 20px;
      text-align: center;
      background: linear-gradient(to right, #3b82f6, #2563eb);
      color: white;
    }

    .hero img {
      width: 160px;
      height: 160px;
      border-radius: 50%;
      margin-bottom: 20px;
      border: 4px solid white;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
    }

    .hero h1 {
      font-size: 40px;
      margin-bottom: 10px;
    }

    .hero p {
      font-size: 18px;
      max-width: 700px;
      margin: 0 auto;
    }

    /* About Section */
    .about {
      padding: 60px 20px;
      text-align: center;
    }

    .about h2 {
      font-size: 32px;
      margin-bottom: 20px;
    }

    .about p {
      font-size: 17px;
      max-width: 800px;
      margin: 0 auto;
      line-height: 1.6;
    }

    /* Footer */
    .footer {
      background-color: #1f2937;
      color: #9ca3af;
      text-align: center;
      padding: 20px;
      font-size: 14px;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .nav-links {
        display: none;
        position: absolute;
        top: 60px;
        left: 0;
        background-color: #1f2937;
        width: 100%;
        flex-direction: column;
        align-items: center;
        padding: 20px 0;
      }

      .nav-links.active {
        display: flex;
      }

      .hamburger {
        display: flex;
      }

      .hero h1 {
        font-size: 28px;
      }

      .hero p {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav>
    <div class="logo">Abir Portfolio</div>
    <div class="hamburger" onclick="toggleMenu()">
      <div></div>
      <div></div>
      <div></div>
    </div>
    <div class="nav-links" id="navLinks">
      <a href="#home">Home</a>
      <a href="{{url('/about')}}">About</a>      
      <a href="#projects">Projects</a>
      <a href="#contact">Contact</a>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="hero" id="home">
    <img src="https://via.placeholder.com/160" alt="Your Photo" />
    <h1>MD. Abir Hassan</h1>
    <p>I’m a passionate developer with experience in Java, Web Development, and Compiler Design. Welcome to my portfolio site!</p>
  </div>

  <!-- About Section -->
  <div class="about" id="about">
    <h2>About Me</h2>
    <p>
      I'm currently pursuing my BSc in Computer Science. I love working on both frontend and backend projects, and I enjoy building user-focused applications.
      I have built several personal and academic projects including games, web tools, and compiler-related apps using Flex and Bison.
    </p>
  </div>

  <!-- Footer -->
  <div class="footer">
    © 2025 MD. Abir Hassan | All Rights Reserved
  </div>

  <!-- Script for Toggle Menu -->
  <script>
    function toggleMenu() {
      const nav = document.getElementById('navLinks');
      nav.classList.toggle('active');
    }
  </script>

</body>
</html>
