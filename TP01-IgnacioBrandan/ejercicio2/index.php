<?php
    require_once('html/encabezado.html');
    $litrosDeNafta = mt_rand(10, 50);
    $naftaSuper = 125.90;
    const IVA = 1.21;

    $totalSinDescuento = $litrosDeNafta * $naftaSuper;
    $descuento = $totalSinDescuento * 0.10;

    $totalAPagar = $totalSinDescuento - $descuento;
    $totalSinIva = $totalAPagar * 0.79;
    $monto_IVA = $totalAPagar * 0.21;
?>
<main>
    <section class="ticket__container">
        <article class="ticket__header">
            <p>Cant./Precio Unit.</p>
            <p>IMPORTE</p>
        </article>
        <article class="ticket__body">
            <section class="ticket__body-row">
                <section><p>Nafta Super XXI</p>
                    <p><?php echo $litrosDeNafta. ' X '.$naftaSuper; ?></p>
                </section>
                <p><?php echo number_format($totalSinDescuento, 2, ',', '.'); ?></p>
            </section>
            <section class="ticket__body-row">
                <p>Descuento 10%</p>
                <p><?php echo number_format($descuento, 2, ',', '.');  ?></p>
            </section>
            <section class="ticket__body-row">
                <p>Total sin iva</p>
                <p><?php echo number_format($totalSinIva, 2, ',', '.');  ?></p>
            </section>
            <section class="ticket__body-row">
                <p>IVA 21.00%</p>
                <p><?php echo number_format($monto_IVA, 2, ',', '.');  ?></p>
            </section>
            <section class="ticket__body-row">
                <p>Total:</p>
                <p><?php echo number_format($totalAPagar, 2, ',', '.');  ?></p>
            </section>
        </article>
    </section>
</main>
<?php
    require_once('html/pie.html');
?>