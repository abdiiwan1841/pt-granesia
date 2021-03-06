<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('flash');  ?>

    <div class="card">
        <div class="card-body">
            <table class="table table-hover table-bordered table-striped table-sm" id="dataTable">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No Order</th>
                        <th scope="col">Jenis Pekerjaan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach($showOrder as $order) :
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td class="text-uppercase"><?= $order['no_order'] ?></td>
                        <td class="text-capitalize"><?= $order['jenis_pekerjaan'] ?></td>
                        <td><a href="<?= base_url('Admum/lapdetail') ?>/<?= $order['id_order'] ?>"
                                class="badge badge-success">Buat Laporan</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- End of Main Content -->