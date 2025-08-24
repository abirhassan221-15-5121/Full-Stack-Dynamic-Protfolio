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
      scroll-behavior: smooth;
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
      letter-spacing: 1px;
    }

    .nav-links {
      display: flex;
      gap: 25px;
    }

    .nav-links a {
      color: white;
      text-decoration: none;
      font-size: 16px;
      font-weight: 500;
      transition: color 0.3s ease, transform 0.2s;
    }

    .nav-links a:hover {
      color: #60a5fa;
      transform: translateY(-2px);
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
      padding: 100px 20px;
      text-align: center;
      background: linear-gradient(135deg, #3b82f6, #2563eb);
      color: white;
    }

    .hero img {
      width: 170px;
      height: 170px;
      border-radius: 50%;
      margin-bottom: 20px;
      border: 5px solid white;
      box-shadow: 0 0 15px rgba(0,0,0,0.4);
      transition: transform 0.3s ease;
    }

    .hero img:hover {
      transform: scale(1.08);
    }

    .hero h1 {
      font-size: 42px;
      margin-bottom: 10px;
    }

    .hero p {
      font-size: 18px;
      max-width: 700px;
      margin: 0 auto 20px;
    }

    .btn {
      display: inline-block;
      background: white;
      color: #2563eb;
      padding: 12px 25px;
      border-radius: 25px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .btn:hover {
      background: #1f2937;
      color: white;
    }

    /* Section base */
    section {
      padding: 80px 20px;
      text-align: center;
    }

    section h2 {
      font-size: 32px;
      margin-bottom: 40px;
      color: #1f2937;
      position: relative;
      display: inline-block;
    }

    section h2::after {
      content: '';
      width: 60%;
      height: 3px;
      background: #2563eb;
      position: absolute;
      bottom: -8px;
      left: 20%;
      border-radius: 4px;
    }

    /* About */
    .about-card {
      max-width: 900px;
      margin: auto;
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      line-height: 1.7;
    }

    /* Skills */
    .skills-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 20px;
      max-width: 900px;
      margin: auto;
    }

    .skill {
      background: white;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
      font-weight: 600;
      color: #2563eb;
      transition: transform 0.3s ease;
    }

    .skill:hover {
      transform: translateY(-8px);
      background: #2563eb;
      color: white;
    }

    /* Projects */
    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px;
      max-width: 1000px;
      margin: auto;
    }

    .project {
      background: white;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: transform 0.3s ease;
    }

    .project img {
      width: 100%;
      height: 160px;
      object-fit: cover;
    }

    .project h3 {
      font-size: 20px;
      padding: 15px;
    }

    .project p {
      font-size: 15px;
      padding: 0 15px 20px;
      color: #4b5563;
    }

    .project:hover {
      transform: translateY(-8px);
    }

    /* Contact */
    .contact-form {
      max-width: 600px;
      margin: auto;
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #d1d5db;
      border-radius: 8px;
      font-size: 16px;
    }

    .contact-form button {
      background: #2563eb;
      color: white;
      border: none;
      padding: 12px 25px;
      border-radius: 25px;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .contact-form button:hover {
      background: #1f2937;
    }

    /* Footer */
    .footer {
      background-color: #1f2937;
      color: #9ca3af;
      text-align: center;
      padding: 25px;
      font-size: 14px;
    }

    .socials {
      margin-top: 10px;
    }

    .socials a {
      margin: 0 10px;
      color: #9ca3af;
      font-size: 20px;
      text-decoration: none;
      transition: color 0.3s;
    }

    .socials a:hover {
      color: #60a5fa;
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
      <div></div><div></div><div></div>
    </div>
    <div class="nav-links" id="navLinks">
      <a href="#home">Home</a>
      <a href="#about">About</a>      
      <a href="#skills">Skills</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact</a>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="hero" id="home">
    <img src="{{ asset('image/bg-img.jpg') }}" alt="Your Photo" />
    <h1>MD. Abir Hassan</h1>
    <p>I’m a passionate developer with experience in Java, Web Development, and Compiler Design. Welcome to my portfolio site!</p>
    <a href="#projects" class="btn">See My Work</a>
  </div>

  <!-- About Section -->
  <section id="about">
    <h2>About Me</h2>
    <div class="about-card">
      <p>
        I'm currently pursuing my BSc in Computer Science. I love working on both frontend and backend projects,
        and I enjoy building user-focused applications.  
        I have built several personal and academic projects including games, web tools,
        and compiler-related apps using Flex and Bison.
      </p>
    </div>
  </section>

  <!-- Skills Section -->
  <section id="skills">
    <h2>Skills</h2>
    <div class="skills-grid">
      <div class="skill">Java</div>
      <div class="skill">HTML & CSS</div>
      <div class="skill">JavaScript</div>
      <div class="skill">Laravel</div>
      <div class="skill">MySQL</div>
      <div class="skill">Git & GitHub</div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects">
    <h2>Projects</h2>
    <div class="projects-grid">
      <div class="project">
        <img src="{{ asset('image/yt-img.jpg') }}" alt="Project 1">
        <h3> Game</h3>
        <p>A Java-based Flappy Bird game with improved graphics and smooth animations.</p>
      </div>
      <div class="project">
        <img src="{{ asset('image/tg-img.jpg') }}" alt="Project 2">
        <h3>robotic Project</h3>
        <p>A compiler built using Flex and Bison with full documentation and error handling.</p>
      </div>
      <div class="project">
        <img src="{{ asset('image/er-img.jpg') }}"alt="Project 3">
        <h3>Portfolio Website</h3>
        <p>My personal portfolio website built with HTML, CSS, and Laravel Blade templates.</p>
      </div>
      

      <div class="project">
        <img src="{{ asset('image/qq-img.jpg') }}" alt="Project 2">
        <h3>Portfolio cover Project</h3>
        <p>A compiler built using Flex and Bison with full documentation and error handling.</p>
      </div>


      <div class="project">
        <img src="{{ asset('image/uu-img.jpg') }}" alt="Project 2">
        <h3>Creative  Project</h3>
        <p>A compiler built using Flex and Bison with full documentation and error handling.</p>
      </div>
      <div class="project">
        <img src="{{ asset('image/rr-img.jpg') }}" alt="Project 2">
        <h3>Graphic Designer Project</h3>
        <p>A compiler built using Flex and Bison with full documentation and error handling.</p>
      </div>
      



    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <h2>Contact Me</h2>
    <div class="contact-form">
      <form>
        <input type="text" placeholder="Your Name" required>
        <input type="email" placeholder="Your Email" required>
        <textarea rows="5" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <div class="footer">
    © 2025 MD. Abir Hassan | All Rights Reserved
    <div class="socials">
      <a href="#">🌐</a>
      <a href="#">🐦</a>
      <a href="#">💼</a>
      <a href="#">📷</a>
    </div>
  </div>

  <!-- Script for Toggle Menu -->
  <script>
    function toggleMenu() {
      document.getElementById('navLinks').classList.toggle('active');
    }
  </script>

</body>
</html>
