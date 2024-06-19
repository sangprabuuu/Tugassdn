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
            font-family: Poppins, sans-serif;
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

        #portfolio {
            max-width: 1200px;
            margin: 0 auto;
        }

        h2 {
                text-align: center;
                margin-bottom: 40px;
                color: #EB09B3;
        }

        .portfolio-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            color: #EB09B3;
        }

        .portfolio-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            width: calc(33.333% - 40px);
            box-shadow: 10px 10px 54px rgba(0, 0, 0, 0.1);
            color: #EB09B3;
            box-sizing: border-box;
            text-align: center;
        }

        .portfolio-item img {
            max-width: 100%;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .portfolio-item h3 {
            margin: 0 0 10px;
        }

        .portfolio-item p {
            margin: 0;
            color: #666;
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
        <?php
        // Include database connection
        include 'config/koneksi.php'; // Ensure this path is correct

        // Check if the connection is established
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Query to get portfolio items
        $query = "SELECT * FROM produk WHERE kategori='Portofolio'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            echo '<section id="portfolio">
                    <h2>PORTOFOLIO WORKGANK</h2>
                    <div class="portfolio-grid">';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="portfolio-item">
                        <img src="./admin/img/' . $row['gambar'] . '" alt="' . $row['nama_produk'] . '">
                        <h3>' . $row['nama_produk'] . '</h3>
                        <p>' . $row['deskripsi'] . '</p>
                      </div>';
            }
            echo '    </div>
                  </section>';
        } else {
            echo '<p>No portfolio items found.</p>';
        }

        // Close the connection
        mysqli_close($conn);
        ?>
    </main>
    <script>
        // script.js
        // Add JavaScript here if needed for further interactivity
    </script>
</body>

</html>
