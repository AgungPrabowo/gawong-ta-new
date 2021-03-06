<?php $this->load->view($header);?>
    <?php $this->load->view($menu);?>
        <div class="main-panel">
            <?php $this->load->view($navbar);?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- <div class="col-md-4">
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
                        </div> -->
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">Daftar Karyawan</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <div class="form-group">
                                    <a href="" class="btn btn-primary btn-fill" data-toggle="modal" data-target="#insertModal"><i class="nc-icon nc-simple-add"></i> Tambah</a> 
                                    </div>
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
                                                <td><a href="" class="btn btn-info btn-simple btn-link" data-toggle="modal" data-target="#editModal<?=$value['id'];?>"><i class="fa fa-edit"></i></a> 
                                                    <a href="" class="btn btn-danger btn-simple btn-link" data-toggle="modal" data-target="#trashModal<?=$value['id'];?>"><i class="fa fa-trash"></i></a> 
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

            
            <?php foreach($karyawan->result_array() as $value):?>
            <!-- Mini Modal -->
                <div class="modal fade modal-mini modal-primary" id="trashModal<?=$value['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header justify-content-center">
                                <div class="modal-profile">
                                    <i class="nc-icon nc-bulb-63"></i>
                                </div>
                            </div>
                            <form action="<?=site_url();?>/karyawan/delete/<?=$value['id'];?>" method="post">
                            <div class="modal-body text-center">
                                <p>Apakah kamu yakin?</p>
                                <input type="hidden" name="id" value="<?=$value['id'];?>">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link btn-simple" data-dismiss="modal">Tidak</button>
                                <button type="submit" class="btn btn-link btn-simple">Ya</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--  End Modal -->

            <div class="modal fade modal-big modal-primary" id="editModal<?=$value['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-center">
                            <div class="modal-profile">
                                <i class="nc-icon nc-ruler-pencil"></i>

                            </div>
                        </div>
                        <div class="modal-body text-center">
                            <form action="<?=site_url();?>/karyawan/edit" method="post">
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <select name="user_id" class="form-control">
                                                <option value="">Pilih Email</option>
                                                <?php 
                                                    foreach($users->result_array() as $user): 
                                                        if($user['id'] == $value['user_id']):
                                                            $selected = 'selected';
                                                        else:
                                                            $selected = '';
                                                        endif;
                                                ?>
                                                <option value="<?=$user['id'];?>" <?=$selected;?>><?=$user['email'];?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-1">
                                        <div class="form-group">
                                            <input type="hidden" name="id" value="<?=$value['id'];?>">
                                            <input type="text" name="ktp" class="form-control" placeholder="KTP" value="<?=$value['ktp'];?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nama_depan" placeholder="Nama Depan" value="<?=$value['nama_depan'];?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nama_belakang" placeholder="Nama Belakang" value="<?=$value['nama_belakang'];?>"  required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="posisi" value="<?=$value['posisi'];?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" placeholder="No Handphone" value="<?=$value['phone'];?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <select name="jenis_kelamin" class="form-control" required>
                                                <option value="">Pilih Jenis Kelamin</option>
                                                <?php
                                                    foreach($kelamin as $val):
                                                        if($val == $value['jenis_kelamin']):
                                                            $selected = 'selected';
                                                        else:
                                                            $selected = '';
                                                        endif;
                                                ?>
                                                <option value="<?=$val;?>" <?=$selected;?>><?=$val;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-1">
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="tgl_lahir" value="<?=$value['tgl_lahir'];?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <select name="agama" class="form-control" required>
                                                <option value="">Pilih Agama</option>
                                                <?php
                                                 foreach($agama as $val): 
                                                    if($val == $value['agama']):
                                                        $selected = 'selected';
                                                    else:
                                                        $selected = '';
                                                    endif;
                                                 ?>
                                                <option value="<?=$val;?>" <?=$selected;?>><?=strtoupper($val);?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-1">
                                        <div class="form-group">
                                            <select name="status" class="form-control" required>
                                                <option value="">Pilih Status</option>
                                                <?php 
                                                    foreach($status as $val):
                                                        if($val == $value['status']):
                                                            $selected = 'selected';
                                                        else:
                                                            $selected = '';
                                                        endif;
                                                ?>
                                                <option value="<?=$val;?>" <?=$selected;?>><?=strtoupper($val);?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea rows="10" cols="10" class="form-control" placeholder="Alamat Lengkap" name="alamat"><?=$value['alamat'];?></textarea required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--  End Modal -->
            <?php endforeach;?>

                        <!-- Mini Modal -->
                        <div class="modal fade modal-big modal-primary" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-center">
                            <div class="modal-profile">
                                <i class="nc-icon nc-simple-add"></i>
                            </div>
                        </div>
                        <div class="modal-body text-center">
                            <form action="<?=site_url();?>/karyawan/insert" method="post">
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <select name="user_id" class="form-control">
                                                <option value="">Pilih Email</option>
                                                <?php foreach($users->result_array() as $user): ?>
                                                <option value="<?=$user['id'];?>"><?=$user['email'];?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-1">
                                        <div class="form-group">
                                            <input type="text" name="ktp" class="form-control" placeholder="KTP" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nama_depan" placeholder="Nama Depan" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nama_belakang" placeholder="Nama Belakang" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="posisi">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" placeholder="No Handphone" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <select name="jenis_kelamin" class="form-control" required>
                                                <option value="">Pilih Jenis Kelamin</option>
                                                <?php foreach($kelamin as $val):?>
                                                <option value="<?=$val;?>"><?=$val;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-1">
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="tgl_lahir" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <select name="agama" class="form-control" required>
                                                <option value="">Pilih Agama</option>
                                                <?php foreach($agama as $val): ?>
                                                <option value="<?=$val;?>"><?=strtoupper($val);?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-1">
                                        <div class="form-group">
                                            <select name="status" class="form-control" required>
                                                <option value="">Pilih Status</option>
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
            </div>
            <!--  End Modal -->

        </div>
    </div>
<?php $this->load->view($footer);?>
