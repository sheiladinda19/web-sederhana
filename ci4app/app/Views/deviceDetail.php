<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Detail Barang</h1>
    <div class="card" style="width: 18rem;">
        <img src="/img/<?= $device['device_img'] ?>" class="card-img-top" alt="$device['device_slug']" width=100px>
        <div class="card-body">
            <h5 class="card-title"><?= $device['device_name'] ?></h5>
            <p class="card-text">Device Brand: <?= $device['device_brand'] ?></p>
            <p class="card-text">Device Quantity: <?= $device['device_quantity'] ?></p>
            <a href="/" class="btn btn-primary">Back Home</a>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>