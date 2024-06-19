<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workgank</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/lg2.png" type="image/png">

</head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("img/bg3.png");
            background-size: cover; 
            background-repeat: no-repeat; 
            background-attachment: fixed; 
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        main {
            padding: 20px;
        }

        #contact {
            max-width: 600px;
            margin: 0 auto;
            background-color:rgb(190, 190, 192);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-info {
            margin-bottom: 20px;
            text-align: center;
        }

        .contact-info p {
            margin: 5px 0;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .contact-form button {
            padding: 10px;
            border: none;
            background-color: #7843E6;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .contact-form button:hover {
            background-color:  #EB09B3;
        }
    </style>
</head>

<body>
<section id="header">
        <a href="#"><img src="img/lg2.png" class="logo" width="100px"></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="portofolio.php">Portofolio</a></li>
                <li><a href="design.php">Design</a></li>
                <li><a href="contackperson.php">Contact Person</a></li>
                <li><a href="login.php"><i class="bi bi-person-fill"></i></a></li>
            </ul>
        </div>
    </section>

    <main>
        <section id="contact">
            <img src="img/WWG.png" width="550px">
            <div class="contact-info">

            </div>
            <form class="contact-form" id="contactForm">
                <input type="text" id="name" placeholder="Nama Anda" required>
                <input type="email" id="email" placeholder="Email Anda" required>
                <textarea id="message" rows="5" placeholder="Pesan Anda" required></textarea>
                <button type="button" onclick="sendMessage()">Kirim Pesan via WhatsApp</button>
            </form>
        </section>
    </main>
    <script>
        function sendMessage() {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;
            const phoneNumber = '6285601511447';

            const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodeURIComponent('Nama: ' + name + '\nEmail: ' + email + '\nPesan: ' + message)}`;
            window.open(whatsappURL, '_blank');
        }
    </script>
</body>

</html>