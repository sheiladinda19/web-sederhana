<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="container">
        <h2>Daftar Komik</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($devices as $key => $device) : ?>
                <tr>
                    <th scope="row"><?= $key ?></th>
                    <td><img src="/img/<?= $device['device_img'] ?>"alt="$device['device_slug']" width=100px></td>
                    <td><?= $device['device_name'] ?></td>
                    <td><?= $device['device_brand'] ?></td>
                    <td><?= $device['device_quantity'] ?></td>
                    <td><?= $device['device_status'] ?></td>
                    <td>
                        <a href="/device/<?= $device['device_slug'] ?>" class="btn btn-success">Details</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
    </div>
<?= $this->endsection(); ?>