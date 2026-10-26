<?php
// 0.1 Constantes
const SEMILLA = 903;
const NOMBRE = "Alvaro";
const APELLIDO = "Guardia";

// 0.2 Variables con las fórmulas exactas
$nombreCompleto = NOMBRE . " " . APELLIDO;
$edad = 8 + (SEMILLA % 70);
$dia = (SEMILLA % 7) + 1;
$mes = (SEMILLA % 12) + 1;
$nota1 = 40 + (SEMILLA % 61);
$nota2 = 40 + ((SEMILLA * 3) % 61);
$nota3 = 40 + ((SEMILLA * 7) % 61);
$monto = 20 + (SEMILLA % 181);
$esMiembro = (SEMILLA % 2) == 0;
$hora = SEMILLA % 24;
$huella = (SEMILLA * 13 + 91) % 1000;
$descuento = SEMILLA * 0.001;
$vacio = null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="lab9-huella" content="<?= $huella ?>">
    <title>Laboratorio 9 - Alvaro Guardia</title>
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 50%; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h1 style="color: #2c3e50;">Laboratorio 9 - Estructuras de Control</h1>

    <p id="autor">Autor: <?= $nombreCompleto ?></p>

    <main id="lab9-guardia">
        
        <section>
            <h2>Ejercicio 0: Datos y Tipos</h2>
            <table id="ej0-tipos">
                <thead>
                    <tr>
                        <th>Variable</th>
                        <th>Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>$nombreCompleto</td><td><?= gettype($nombreCompleto) ?></td></tr>
                    <tr><td>$edad</td><td><?= gettype($edad) ?></td></tr>
                    <tr><td>$esMiembro</td><td><?= gettype($esMiembro) ?></td></tr>
                    <tr><td>$descuento</td><td><?= gettype($descuento) ?></td></tr>
                    <tr><td>$vacio</td><td><?= gettype($vacio) ?></td></tr>
                </tbody>
            </table>
        </section>

        <section>
            <h2>Ejercicio 1: Boleto de cine</h2>
            <?php
            const PRECIO_NINO = 3.00;
            const PRECIO_JOVEN = 4.50;
            const PRECIO_ADULTO = 7.00;
            const PRECIO_JUBILADO = 3.50;

            if ($edad < 12) {
                $categoria = "Niño";
                $precio = PRECIO_NINO;
            } elseif ($edad <= 17) {
                $categoria = "Joven";
                $precio = PRECIO_JOVEN;
            } elseif ($edad <= 59) {
                $categoria = "Adulto";
                $precio = PRECIO_ADULTO;
            } else {
                $categoria = "Jubilado";
                $precio = PRECIO_JUBILADO;
            }

            $esMiercoles = ($dia == 3);
            $precioFinal = $esMiercoles ? $precio * 0.5 : $precio;
            $textoMiercoles = $esMiercoles ? "Sí" : "No";
            ?>
            
            <p id="ej1-res">
                Categoría: <?= $categoria ?> | 
                Precio final: B/. <?= number_format($precioFinal, 2) ?> | 
                Miércoles 50%: <?= $textoMiercoles ?>
            </p>
        </section>

        <section>
            <h2>Ejercicio 2: Notas</h2>
            <?php
            $promedio = ($nota1 + $nota2 + $nota3) / 3;

            if ($promedio >= 90) {
                $letra = "A";
            } elseif ($promedio >= 80) {
                $letra = "B";
            } elseif ($promedio >= 70) {
                $letra = "C";
            } elseif ($promedio >= 60) {
                $letra = "D";
            } else {
                $letra = "F";
            }

            $estado = ($promedio >= 70) ? "Aprobado" : "Reprobado";
            $cuadroHonor = ($promedio >= 90 && $nota1 >= 80 && $nota2 >= 80 && $nota3 >= 80) ? "Sí" : "No";
            ?>

            <p id="ej2-res" class="resultado <?= $estado === 'Aprobado' ? 'ok' : 'error' ?>">
                Promedio: <?= number_format($promedio, 2) ?> | 
                Letra: <?= $letra ?> | 
                Estado: <?= $estado ?> | 
                Cuadro de honor: <?= $cuadroHonor ?>
            </p>
        </section>

    </main>

    <footer id="firma">
        Lab 9 · <?= NOMBRE . " " . APELLIDO ?> · Semilla <?= SEMILLA ?>
    </footer>
</body>
</html>     </p>
        </section>

    </main>

    <!-- 0.7 Footer -->
    <footer id="firma">
        Lab 9 · <?= NOMBRE . " " . APELLIDO ?> · Semilla <?= SEMILLA ?>
    </footer>
</body>
</html>