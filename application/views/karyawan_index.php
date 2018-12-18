<?php $this->load->view($header);?>
    <?php $this->load->view($menu);?>
        <div class="main-panel">
            <?php $this->load->view($navbar);?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">Tambah Karyawan</h4>
                                </div>
                                <div class="card-body ">
                                    <form action="<?=site_url();?>/karyawan/insert" method="post">
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <select name="user_id" class="form-control">
                                                        <option value="">Pilih</option>
                                                        <?php foreach($users->result_array() as $user): ?>
                                                        <option value="<?=$user['id'];?>"><?=$user['email'];?></option>
                                                        <?php endforeach;?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">KTP</label>
                                                    <input type="text" name="ktp" class="form-control" placeholder="KTP" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Nama Depan</label>
                                                    <input type="text" class="form-control" name="nama_depan" placeholder="Nama Depan" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" name="nama_belakang" placeholder="Nama Belakang" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Posisi</label>
                                                    <input type="text" class="form-control" name="posisi">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" name="phone" placeholder="No Handphone" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Jenis Kelamin</label>
                                                    <select name="jenis_kelamin" class="form-control" required>
                                                        <option value="">Pilih</option>
                                                        <option value="laki-laki">Laki-Laki</option>
                                                        <option value="perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Tanggal Lahir</label>
                                                    <input type="date" class="form-control" name="tgl_lahir" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Agama</label>
                                                    <select name="agama" class="form-control" required>
                                                        <option value="">Pilih</option>
                                                        <?php foreach($agama as $val): ?>
                                                        <option value="<?=$val;?>"><?=strtoupper($val);?></option>
                                                        <?php endforeach;?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select name="status" class="form-control" required>
                                                        <option value="">Pilih</option>
                                                        <?php foreach($status as $val):?>
                                                        <option value="<?=$val;?>"><?=strtoupper($val);?></option>
                                                        <?php endforeach;?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <textarea rows="10" cols="10" class="form-control" placeholder="Alamat Lengkap" name="alamat"></textarea required>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">Daftar Karyawan</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Posisi</th>
                                            <th>Phone</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Aksi</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $i = 1;
                                                foreach($karyawan->result_array() as $value):
                                            ?>
                                            <tr>
                                                <td><?=$i++;?></td>
                                                <td><?=$value['nama_depan'].' '.$value['nama_belakang'];?></td>
                                                <td><?=$value['posisi'];?></td>
                                                <td><?=$value['phone'];?></td>
                                                <td><?=$value['tgl_lahir'];?></td>
                                                <td><a href="" class="btn btn-info btn-simple btn-link"><i class="fa fa-edit"></i></a> 
                                                    <a href="" class="btn btn-danger btn-simple btn-link"><i class="fa fa-trash"></i></a> 
                                                    <a href="" class="btn btn-primary btn-simple btn-link"><i class="fa fa-search"></i></a> 
                                                </td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
<?php $this->load->view($footer);?>
