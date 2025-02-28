<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Sphère - Résultat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #000;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Aire ou volume d'une sphère, le résultat:</h1>
        <h2>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $rayon = $_POST['rayon'];
                if (strcmp($_POST['sphere'], "aire") == 0) {
                    $resultat = 4 * 3.14 * $rayon * $rayon;
                    echo "Aire = $resultat cm²";
                } elseif (strcmp($_POST['sphere'], "volume") == 0) {
                    $resultat = (4/3) * 3.14 * $rayon * $rayon * $rayon;
                    echo "Volume = $resultat cm³";
                }
            }
            ?>
        </h2>
    </div>
</body>
</html>