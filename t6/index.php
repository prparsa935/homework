<?php
// Array containing card data
$storeArray = array(
    array("Title 1", "This is the description for the first card."),
    array("Title 2", "Here is some information for the second card."),
    array("Title 3", "Details for the third card go here."),
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Cards</title>
    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin: 20px;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 250px;
            background-color: #f9f9f9;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
        .card h3 {
            margin: 0;
            color: #333;
            font-size: 1.5em;
        }
        .card p {
            color: #555;
            margin-top: 10px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="card-container">
        <?php foreach ($storeArray as $card) : ?>
            <div class="card">
                <h3><?= htmlspecialchars($card[0]); ?></h3>
                <p><?= htmlspecialchars($card[1]); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>