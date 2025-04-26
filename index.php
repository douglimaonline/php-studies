<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descubra Seu Signo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Descubra Seu Signo</h1>
        <form action="show_zodiac_sign.php" method="GET">
            <div class="mb-3">
                <label for="birthdate" class="form-label">Data de Nascimento:</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate" required>
            </div>
            <button type="submit" class="btn btn-primary">Descobrir Signo</button>
        </form>
    </div>
    <?php include 'layouts/footer.php'; ?>
</body>
</html>
