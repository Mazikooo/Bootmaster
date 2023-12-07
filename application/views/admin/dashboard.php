<div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Menu Template Bootstrap</h5>
                                            <p class="m-b-0">Admin</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>


                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Basic table card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Bootstrap Template</h5>
                                               
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                                        <li><i class="fa fa-trash close-card"></i></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="card-block table-border-style">
                                            
                                                <div class="table-responsive">

                                                <?php echo $this->session->flashdata('not'); ?>
                                              <a href="<?php echo site_url('templateadmin/add');?>" class="btn btn-mat waves-effect waves-light btn-primary mb-3">Tambah Template</a>

                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nama</th>
                                                                <th>Tipe</th>
                                                                <th>Deskripsi</th>
                                                              
                                                                <th>Gambar</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        <?php 
                                                            $no=1;
                                                            foreach($template as $val){ ?>

                                                             <tr>
                                                                <th><?php echo $no;?></th>
                                                                <th><?php echo $val->nama;?></th>
                                                                <th><?php echo $val->tipe;?></th>
                                                                <th><?php echo $val->deskripsi;?></th>
                                                                
                                                                <th><img src="<?php echo base_url('uploads/'.$val->gambar);?>" width="150" height="110"></th>
                                                                <th>
                                                        <a href="<?php echo site_url('Templateadmin/get_id/'.$val->id);?>" type="button" class="btn btn-mat waves-effect waves-light btn-success">Edit</a>
                                                        <a href="<?php echo site_url('Templateadmin/hapus/'.$val->id);?>" onclick="return confirm('yakin akan hapus data ini ??')" type="button" class="btn btn-mat waves-effect waves-light btn-danger">Hapus</a>
                                                        </div>                          
                                                                </th>
                                                            </tr>
                                                            <?php $no++ ; }?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Basic table card end -->


                                       
                                        <!-- Background Utilities table end -->
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->

                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>