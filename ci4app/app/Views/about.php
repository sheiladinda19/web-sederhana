<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Tentang Web</h1>
    <p>Web ini berfungsi sebagai alat monitoring IoT</p>
    <p>
        Akan ditampilkan berbagai device IoT yang tersedia di perusahaan beserta detailnya, berupa
        <ul>
            <li>Nama Device</li>
            <li>Gambar Device</li>
            <li>Nama Device</li>
            <li>Jumlah Device</li>
            <li>Status Device</li>
        </ul>
    </p>
</div>
<?= $this->endsection(); ?>