<?php
session_start();
include("../../includes/conexion.php");

if (!isset($_SESSION['idEstudiante'])) {
    header("Location: ../../auth/login.html");
    exit();
}

$idExamen = 6; // Examen del módulo 1
$limite_preguntas = 15; // Cantidad que quieres mostrar

// 🔹 Seleccionar 15 preguntas aleatorias de las disponibles
$sql = "
    SELECT p.idPreguntas, p.texto_pregunta, r.idRespuestas, r.texto_respuesta
    FROM Preguntas p
    JOIN Respuestas r ON p.idPreguntas = r.idPreguntas
    WHERE p.idExamen = ?
    ORDER BY RAND()
";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idExamen);
$stmt->execute();
$result = $stmt->get_result();

// Organizar por pregunta
$Preguntas = [];
while ($row = $result->fetch_assoc()) {
    $Preguntas[$row['idPreguntas']]['texto'] = $row['texto_pregunta'];
    $Preguntas[$row['idPreguntas']]['Respuestas'][] = [
        'id' => $row['idRespuestas'],
        'texto' => $row['texto_respuesta']
    ];
}

// 🔸 Cortar el array a solo 15 preguntas aleatorias
$preguntas_aleatorias = array_slice($Preguntas, 0, $limite_preguntas, true);
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="../../assets/img/icons/icons_leccion/Icon_Commission_Story.svg" type="image/x-icon">
<link rel="stylesheet" href="../../assets/css/pages/modulos/modulo_6/examen_modulo_6.css?v=1.0">
<link rel="stylesheet" href="../../assets/fonts/font.css?v=1.0">
<title>DevOps - Examen del Módulo 5</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Cultura <br> DevOps</h1>
        </div>
        <nav>
            <ul>
                <li>
                    <form action="../../pages/modulos/modulo_6/modulo_6_introduccion.php" method="POST" onsubmit="return confirm('¿Estas seguro que quieres salir del examen?, si sales perderas tus respuestas.');">
                        <button class="botones" type="submit">Introduccion Modulo 6</button>
                    </form>
                </li>
                <li>
                    <form action="../../pages/modulos/modulo_6/panel_de_estudio_6.html" method="POST" onsubmit="return confirm('¿Estas seguro que quieres salir del examen?, si sales perderas tus respuestas.');">
                        <button class="botones" type="submit">Panel de estudios</button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>
<div class="contenedor-abuela">
    <div class="contenedor-madre">
        <div class="contenedor-hija">
            <div class="titulo_examen">
                <h2>🧩 Examen del Módulo 6 🧩</h2>
                <p>Realiza el siguiente examen seleccionando un solo inciso en cada paregunta.</p>
            </div>
        </div>
    </div>
</div>

<div class="contenedor-abuelo">
    <div class="contenedor-padre">
        <div class="contenedor-hijo">
            <div class="examen">
                <form id="form_examen" action="procesar_examen_6.php" method="POST">
                <?php foreach ($preguntas_aleatorias as $idPreguntas => $p): ?>
                    <div class="pregunta">
                        <div class="container">
                        <div class="columna">
                        <p><strong><?= htmlspecialchars($p['texto']) ?></strong></p>
                        <?php 
                        // Mezclar el orden de las respuestas cada vez
                        shuffle($p['Respuestas']); 
                        foreach ($p['Respuestas'] as $r): 
                        ?>
                        <label>
                            <input type="radio" name="pregunta_<?= $idPreguntas ?>" value="<?= $r['id'] ?>">
                            <?= htmlspecialchars($r['texto']) ?>
                        </label><br>
                        <?php endforeach; ?>
                        </div></div>
                    </div>
                    <?php endforeach; ?>
                    <button class="botones" type="submit">Enviar examen</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    <script src="../../assets/js/modulo_6/validar_examen/validar_examen_6.js?v=1.0"></script>
</body>
</html>
