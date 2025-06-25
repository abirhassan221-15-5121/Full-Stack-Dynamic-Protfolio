<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact - Abir Hassan</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #2563eb;
            margin-bottom: 30px;
        }

        .contact-info {
            text-align: center;
            margin-bottom: 40px;
        }

        .contact-info p {
            margin: 5px 0;
            font-size: 16px;
            color: #374151;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: 600;
            margin-bottom: 5px;
        }

        input, textarea {
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #cbd5e0;
            border-radius: 6px;
            font-size: 16px;
        }

        button {
            padding: 12px;
            background-color: #2563eb;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background-color: #1e40af;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Contact Me</h1>

    <div class="contact-info">
        <p><strong>Name:</strong> MD. Abir Hassan</p>
        <p><strong>Email:</strong> abir@example.com</p>
        <p><strong>Phone:</strong> +8801XXXXXXXXX</p>
        <p><strong>Location:</strong> Dhaka, Bangladesh</p>
    </div>

    <form action="#" method="POST">
        {{-- In Laravel, use @csrf --}}
        @csrf
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Your Message</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
    </form>
</div>

</body>
</html>
