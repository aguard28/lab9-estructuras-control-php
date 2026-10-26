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
        
        <!-- EJERCICIO 0 -->
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

        <!-- EJERCICIO 1 -->
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

        <!-- EJERCICIO 2 -->
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

        <!-- EJERCICIO 3 -->
        <section>
            <h2>Ejercicio 3: Día de la semana</h2>
            <?php
            switch ($dia) {
                case 1: $nombreDia = "Lunes"; break;
                case 2: $nombreDia = "Martes"; break;
                case 3: $nombreDia = "Miércoles"; break;
                case 4: $nombreDia = "Jueves"; break;
                case 5: $nombreDia = "Viernes"; break;
                case 6: $nombreDia = "Sábado"; break;
                case 7: $nombreDia = "Domingo"; break;
                default: $nombreDia = "Desconocido";
            }

            switch ($dia) {
                case 1:
                case 2:
                case 3:
                case 4:
                case 5:
                    $tipoDia = "Laboral";
                    break;
                case 6:
                case 7:
                    $tipoDia = "Fin de semana";
                    break;
                default:
                    $tipoDia = "Desconocido";
            }
            ?>

            <p id="ej3-res">
                Día: <?= $nombreDia ?> | Tipo: <?= $tipoDia ?>
            </p>
        </section>

        <!-- EJERCICIO 4 -->
        <section>
            <h2>Ejercicio 4: Mes y estación</h2>
            <?php
            // Primer match: nombre del mes
            $nombreMes = match ($mes) {
                1 => "Enero",
                2 => "Febrero",
                3 => "Marzo",
                4 => "Abril",
                5 => "Mayo",
                6 => "Junio",
                7 => "Julio",
                8 => "Agosto",
                9 => "Septiembre",
                10 => "Octubre",
                11 => "Noviembre",
                12 => "Diciembre",
                default => "Desconocido"
            };

            // Segundo match: estación en Panamá
            $estacion = match ($mes) {
                12, 1, 2, 3, 4 => "Seca",
                5, 6, 7, 8, 9, 10, 11 => "Lluviosa",
                default => "Desconocida"
            };
            ?>

            <p id="ej4-res">
                Mes: <?= $nombreMes ?> | Estación: <?= $estacion ?>
            </p>
        </section>
        <section>
            <h2>Ejercicio 5: Caja de la tienda</h2>
            <?php
            const ITBMS = 0.07;

            // 1. Porcentaje de descuento por monto (orden de mayor a menor)
            if ($monto >= 150) {
                $pct = 15;
            } elseif ($monto >= 100) {
                $pct = 10;
            } elseif ($monto >= 50) {
                $pct = 5;
            } else {
                $pct = 0;
            }

            // 2. Si es miembro, sumar 5 puntos porcentuales
            if ($esMiembro) {
                $pct += 5;
            }

            // 3. Calcular base
            $base = $monto - ($monto * $pct / 100);

            // 4. Recargo nocturno con operador ||
            $esNocturno = ($hora >= 22 || $hora < 6);
            if ($esNocturno) {
                $base = $base * 1.03;
            }
            $textoNocturno = $esNocturno ? "Sí" : "No";

            // 5. Calcular total con ITBMS
            $total = $base + ($base * ITBMS);
            ?>

            <p id="ej5-monto">Monto de compra: B/. <?= number_format($monto, 2) ?></p>
            <p id="ej5-descuento">Descuento aplicado: <?= $pct ?>%</p>
            <p id="ej5-recargo">Recargo nocturno: <?= $textoNocturno ?></p>
            <p id="ej5-total">Total a pagar: B/. <?= number_format($total, 2) ?></p>
        </section>
    </main>

    <footer id="firma">
        Lab 9 · <?= NOMBRE . " " . APELLIDO ?> · Semilla <?= SEMILLA ?>
    </footer>
</body>
</html>