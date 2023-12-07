<div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Edit Template</h5>
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
                                                        <h5>Informasi Template</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form class="form-material" method="post" name="sentmessage" action="<?php echo site_url('templateadmin/aksi_edit'); ?>" enctype="multipart/form-data">
                                                            
                                                        <div class="form-group form-primary">
                                                                <input type="hidden" id="id" name="id"  class="form-control" value="<?php echo $template->id; ?>" required="">
                                                                <span class="form-bar"></span>
                                                                
                                                            </div>

                                                        <div class="form-group form-primary">
                                                                <input type="text" id="nama" name="nama"  class="form-control" value="<?php echo $template->nama; ?>" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Nama Template</label>
                                                            </div>

                                                            <div class="form-group form-primary">
                                                                <input type="text" id="tipe" name="tipe"  class="form-control" value="<?php echo $template->tipe; ?>" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Tipe</label>
                                                            </div>

                                                            <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Deskripsi</label>
                                                                            <div class="col-sm-10">
                                                                                <textarea rows="5" cols="5" class="form-control" id="deskripsi" name="deskripsi" 
                                                                                placeholder="Deskripsi"><?php echo $template->deskripsi; ?></textarea>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group form-primary">
                                                                <input type="text" id="link" name="link"   class="form-control" value="<?php echo $template->link; ?>" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Link</label>
                                                            </div>

                                                            <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Demo Template</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="file" class="form-control" id="gambar" name="gambar" value="<?php echo $template->gambar; ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <button class="btn btn-primary py-2 px-4" type="submit">Simpan</button>
                                                                        </div>     
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                       
                                        </div>
                                                       