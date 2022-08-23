<?php
    require_once('html/encabezado.html');
    $empleado = 'Juan Pablo Pepe';
    const APORTE_JUBILATORIO = 0.13;
    const OBRA_SOCIAL = 3.5;
    const TITULO = 0.10;
    $sueldoBasico = mt_rand(70000 , 90000);
    $calculoTitulo = $sueldoBasico * TITULO;
    $sueldoBruto = $sueldoBasico + $calculoTitulo;
    $calculoAporte = $sueldoBruto * APORTE_JUBILATORIO;
    $calculoObraSocial = ($sueldoBruto * OBRA_SOCIAL) / 100;
    $sueldoNeto = ($sueldoBruto - $calculoAporte) - $calculoObraSocial;
?>
<main>
    <table>
        <caption>
            Empleado/a: <?php echo $empleado; ?>
        </caption>
        <thead>
            <th>Concepto</th>
            <th>Ingresos</th>
            <th>Descuentos</th>
        </thead>
        <tbody>
            <tr>
                <td>Sueldo Basico</td>
                <td><?php echo '$'. number_format($sueldoBasico, 2, ',', '.'); ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Titulo</td>
                <td><?php echo '$'. number_format($calculoTitulo, 2, ',', '.'); ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Aporte jubilatorio</td>
                <td></td>
                <td><?php echo '$'. number_format($calculoAporte, 2, ',', '.'); ?></td>
            </tr>
            <tr>
                <td>Obra Social</td>
                <td></td>
                <td><?php echo '$'. number_format($calculoObraSocial, 2, ',', '.'); ?></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">Sueldo Neto: <?php echo '$'. number_format($sueldoNeto, 2, ',', '.'); ?></td>
            </tr>
        </tfoot>
    </table>
</main>
<?php
    require_once('html/pie.html');
?>