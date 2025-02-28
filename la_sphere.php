<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Sphère</title>
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
        }
        img {
            width: 100px;
            height: 100px;
            transition: transform 0.5s ease;
        }
        img:hover {
            transform: rotate(360deg);
        }
        form {
            margin-top: 20px;
        }
        input[type="text"], input[type="submit"] {
            padding: 10px;
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        @keyframes clickAnimation {
            0% { transform: scale(1); }
            50% { transform: scale(0.95); }
            100% { transform: scale(1); }
        }
        .click-animation {
            animation: clickAnimation 0.3s ease;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calcul de l'aire de la surface ou du volume d'une sphère</h1>
        <img src="sphere.png" alt="Sphère" title="Sphère">
        <form method="post" action="la_sphere2.php" onsubmit="animateButton(event)">
            <p>
                <label>
                    <input type="radio" name="sphere" value="aire"> Aire
                </label>
                <label>
                    <input type="radio" name="sphere" value="volume" checked> Volume
                </label>
                <br>
                Rayon en cm: <input type="text" name="rayon">
                <input type="submit" value="Envoyer" id="submitBtn">
            </p>
        </form>
    </div>

    <script>
        function animateButton(event) {
            event.preventDefault(); // Empêche la soumission immédiate du formulaire
            const button = document.getElementById('submitBtn');
            button.classList.add('click-animation'); // Ajoute l'animation

            // Soumet le formulaire après l'animation
            setTimeout(() => {
                event.target.submit();
            }, 300); // Correspond à la durée de l'animation (0.3s)
        }
    </script>
</body>
</html>