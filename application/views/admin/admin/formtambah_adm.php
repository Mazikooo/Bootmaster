<div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Tambah Admin</h5>
                                            <p class="m-b-0">Admin</p>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                  
                                    <!-- Page body start -->
                                    <div class="page-body">
                                       
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Informasi Admin</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form class="form-material" method="post" name="sentmessage" action="<?php echo site_url('admin/save'); ?>" enctype="multipart/form-data">
                                                            
                                                        <div class="form-group form-primary">
                                                                <input type="text" id="username" name="username"  class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Username</label>
                                                                <?php echo form_error('username', '<small class="text-danger">', '</small>'); ?>
                                        <?php if (isset($error)) { ?>
                                            <small class="text-danger"><?php echo $error; ?></small>
                                        <?php } ?>
                                                            </div>

                                                        <div class="form-group form-primary">
                                                                <input type="password" id="nama" name="password"  class="form-control" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Password</label>
                                                                <?php echo form_error('password', '<small class="text-danger">', '</small>'); ?>
                                                            </div>

                                                           
                                                                        <div>
                                                                            <button class="btn btn-primary py-2 px-4" type="submit">Simpan</button>
                                                                        </div>     
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                       
                                        </div>
                                                       