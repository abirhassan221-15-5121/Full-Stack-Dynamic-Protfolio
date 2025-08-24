<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About - Abir Hassan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #2563eb, #38bdf8);
            color: #1f2937;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .container {
            max-width: 1000px;
            background-color: white;
            padding: 50px 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        img {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            border: 5px solid #2563eb;
            box-shadow: 0 6px 15px rgba(0,0,0,0.3);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        img:hover { transform: scale(1.08); }

        h1 {
            color: #1f2937;
            font-size: 40px;
            margin-bottom: 10px;
        }

        h1 span { color: #2563eb; }

        p {
            font-size: 18px;
            line-height: 1.7;
            margin: 20px auto;
            max-width: 750px;
            color: #4b5563;
        }

        section {
            margin-top: 50px;
        }

        section h2 {
            font-size: 26px;
            color: #1f2937;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        section h2::after {
            content: '';
            position: absolute;
            width: 60%;
            height: 3px;
            background: #2563eb;
            left: 20%;
            bottom: -8px;
            border-radius: 5px;
        }

        .skill-list, .card-list {
            list-style: none;
            padding: 0;
        }

        .skill-list li, .card {
            display: inline-block;
            background: #e0f2fe;
            color: #0369a1;
            padding: 12px 24px;
            margin: 10px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 16px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .skill-list li:hover {
            background: #2563eb;
            color: white;
            transform: translateY(-5px);
            box-shadow: 0 6px 16px rgba(0,0,0,0.2);
        }

        .card {
            border-radius: 15px;
            padding: 20px;
            max-width: 280px;
            text-align: left;
            vertical-align: top;
        }

        .card:hover {
            background: #2563eb;
            color: white;
            transform: translateY(-5px);
        }

        .contact {
            margin-top: 40px;
            padding: 20px;
            background: #f1f5f9;
            border-radius: 15px;
        }

        .contact a {
            text-decoration: none;
            color: #2563eb;
            font-weight: bold;
        }

        .contact a:hover {
            color: #1e40af;
        }
    </style>
</head>
<body>

<div class="container">
    <img src="{{ asset('image/bg-img.jpg') }}" alt="Abir Hassan">
    <h1>MD. <span>Abir Hassan</span></h1>
    <p>
        I am a passionate and hardworking <b>Computer Science student</b> with strong interest in 
        <b>software development, compiler construction, and web technologies</b>.  
        I enjoy solving problems and building creative projects that combine logic with design.  
        This portfolio showcases some of my best work and achievements.
    </p>

    <!-- Skills Section -->
    <section>
        <h2>My Skills</h2>
        <ul class="skill-list">
            <li>Java</li>
            <li>HTML & CSS</li>
            <li>Flex & Bison</li>
            <li>Laravel</li>
            <li>MySQL</li>
            <li>Git & GitHub</li>
        </ul>
    </section>

    <!-- Education Section -->
    <section>
        <h2>Education</h2>
        <div class="card-list">
            <div class="card">
                <h3>BSc in Computer Science</h3>
                <p>XYZ University, 2021 - Present</p>
                <p>Focused on Software Engineering, Compiler Design & Web Technologies.</p>
            </div>
            <div class="card">
                <h3>Higher Secondary</h3>
                <p>ABC College, 2018 - 2020</p>
                <p>Science background with Physics, Chemistry, Mathematics & ICT.</p>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section>
        <h2>Experience</h2>
        <div class="card-list">
            <div class="card">
                <h3>Java Game Developer</h3>
                <p>Developed Flappy Bird game with enhanced graphics and scoring system.</p>
            </div>
            <div class="card">
                <h3>Compiler Construction</h3>
                <p>Built academic projects using Flex & Bison (lexical analysis + parsing).</p>
            </div>
        </div>
    </section>

    <!-- Hobbies Section -->
    <section>
        <h2>Hobbies</h2>
        <ul class="skill-list">
            <li>Problem Solving</li>
            <li>UI/UX Design</li>
            <li>Gaming</li>
            <li>Traveling</li>
            <li>Reading Books</li>
        </ul>
    </section>

    <!-- Contact Section -->
    <section class="contact">
        <h2>Contact Me</h2>
        <p>Email: <a href="mailto:abir@example.com">abir@example.com</a></p>
        <p>GitHub: <a href="https://github.com/yourusername" target="_blank">github.com/yourusername</a></p>
        <p>LinkedIn: <a href="https://linkedin.com/in/yourusername" target="_blank">linkedin.com/in/yourusername</a></p>
    </section>
</div>

</body>
</html>
