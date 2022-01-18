<?php $this->load->view('admin/header') ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tambah Admin</h3>
            </div>
            <div class="box-body">
                <form data-parsley-validate action="<?php echo base_url('admin/simpanadmin') ?>" method="post" enctype="multipart/form-data">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" type="text" name="username" value="<?php echo (!empty($admin[0]->username)) ? $admin[0]->username : '' ?>" required><br>
                            <label>Password</label>
                            <input class="form-control" type="text" name="password" value="<?php echo (!empty($admin[0]->password)) ? $admin[0]->password : '' ?>" required><br>
                        </div>
                        <div class="form-group">
                            <label></label>
                            <button class="btn btn-info" type="submit">Simpan</button>
                            <a class="btn btn-default" href="<?php echo base_url('admin/daftaradmin') ?>">Kembali</a>
                        </div>
                    </div>


            </div>


            </form>
        </div>
    </div>
</div>
</div>
<?php $this->load->view('admin/footer') ?>