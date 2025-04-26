<?php include 'layouts/header.php'; ?>

<div class="container mt-5">
<?php
if (isset($_GET['birthdate'])) {
    $birthdate = $_GET['birthdate'];
    $date = new DateTime($birthdate);
    $month_day = $date->format('m-d');

    $xml = simplexml_load_file('signos.xml');

    $signo = null;
    foreach ($xml->signo as $s) {
        $start = DateTime::createFromFormat('m-d', (string)$s->data_inicio)->format('m-d');
        $end = DateTime::createFromFormat('m-d', (string)$s->data_fim)->format('m-d');

        // Trata intervalo que cruza o ano (ex: Capricórnio)
        if (($month_day >= $start && $month_day <= $end) || ($start > $end && ($month_day >= $start || $month_day <= $end))) {
            $signo = $s;
            break;
        }
    }

    if ($signo) {
        echo "<h2>Seu signo é: {$signo->nome}</h2>";
        echo "<p><strong>Características:</strong> {$signo->caracteristicas}</p>";
    } else {
        echo "<p>Signo não encontrado. Verifique a data de nascimento.</p>";
    }
}
?>
</div>

<?php include 'layouts/footer.php'; ?>
