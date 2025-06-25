<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About - Abir Hassan</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            color: #1f2937;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            border-radius: 10px;
            text-align: center;
        }

        h1 {
            color: #2563eb;
            font-size: 36px;
            margin-bottom: 10px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 4px solid #2563eb;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            margin-bottom: 20px;
        }

        .skills {
            margin-top: 30px;
        }

        .skills h2 {
            font-size: 24px;
            color: #374151;
            margin-bottom: 15px;
        }

        .skill-list {
            list-style: none;
            padding: 0;
        }

        .skill-list li {
            display: inline-block;
            background-color: #e0f2fe;
            color: #0369a1;
            padding: 10px 20px;
            margin: 8px;
            border-radius: 20px;
            font-weight: 500;
        }
    </style>
</head>
<body>

<div class="container">
    <img src="{{ asset('images/IMG_3631.jpeg') }}" alt="Abir Hassan">
    <h1>MD. Abir Hassan</h1>
    <p>
        I am a passionate and hardworking Computer Science student with a strong interest in software development,
        compiler construction, and web technologies. I enjoy solving problems and building creative projects that
        combine logic with design. This portfolio showcases some of my best work.
    </p>

    <div class="skills">
        <h2>My Skills</h2>
        <ul class="skill-list">
            <li>Java</li>
            <li>HTML & CSS</li>
            <li>Flex & Bison</li>
            <li>Laravel</li>
            <li>MySQL</li>
            <li>Git & GitHub</li>
        </ul>
    </div>
</div>

</body>
</html>
