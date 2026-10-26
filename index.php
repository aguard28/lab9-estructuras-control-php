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
    <!-- 0.3 Meta tag con la huella -->
    <meta name="lab9-huella" content="<?= $huella ?>">
    <title>Laboratorio 9 - Alvaro Guardia</title>
</head>
<body>
    <!-- 0.4 Autor -->
    <p id="autor">Autor: <?= $nombreCompleto ?></p>

    <!-- 0.5 Main con id exacto -->
    <main id="lab9-guardia">
        <section>
            <h2>Ejercicio 0: Datos y Tipos</h2>
            <!-- 0.6 Tabla con id ej0-tipos y orden OBLIGATORIO -->
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
            // Constantes de precios
            const PRECIO_NINO = 3.00;
            const PRECIO_JOVEN = 4.50;
            const PRECIO_ADULTO = 7.00;
            const PRECIO_JUBILADO = 3.50;

            // Determinar categoría y precio base
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

            // Lógica de miércoles
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
    </main>

    <!-- 0.7 Footer -->
    <footer id="firma">
        Lab 9 · <?= NOMBRE . " " . APELLIDO ?> · Semilla <?= SEMILLA ?>
    </footer>
</body>
</html>