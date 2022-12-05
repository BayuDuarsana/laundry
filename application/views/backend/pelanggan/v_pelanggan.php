<div class="container-fluid" >

    <?php 
        if (!empty($this->session->flashdata('info'))) {?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat</strong> <?= $this->session->flashdata('info')?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php }
    ?>

    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo base_url('pelanggan/tambah') ?>" class="btn btn-primary">Tambah Pelanggan</a> <br><br>
        </div>
    </div>

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800" ><?= $judul;?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $judul;?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID</th>
                            <th>Nama Pelanggan</th>
                            <th>Alamat</th>
                            <th>No. Telepon</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                            $no = 1;
                            foreach ($data as $row) :?>
                                <tr>
                                    <td><?= $no++;?></td>
                                    <td><?= $row->id_pelanggan;?></td>
                                    <td><?= $row->nama;?></td>
                                    <td><?= $row->alamat;?></td>
                                    <td><?= $row->no_telp;?></td>
                                    <td>
                                        <a href="<?php echo base_url('pelanggan/edit/'.$row->id_pelanggan) ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?php echo base_url('pelanggan/delete/'.$row->id_pelanggan) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus?');">Hapus</a>
                                    </td>
                                </tr>
                        <?php endforeach?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>    