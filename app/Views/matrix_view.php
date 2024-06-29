<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix Calculation Result</title>
</head>
<body>
    <h1>Matrix Calculation Result</h1>

    <h2>Matrix:</h2>
    <table border="1">
        <?php foreach ($matrix as $row): ?>
            <tr>
                <?php foreach ($row as $value): ?>
                    <td><?php echo $value; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Diagonal Sums:</h2>
    <p>Diagonal 1: <?php echo $diagonal1; ?></p>
    <p>Diagonal 2: <?php echo $diagonal2; ?></p>

    <h2>Result:</h2>
    <p><?php echo $diagonal1; ?> - <?php echo $diagonal2; ?> = <?php echo $result; ?></p>
</body>
</html>
