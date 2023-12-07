<div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Edit Member</h5>
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
                                                        <h5>Informasi Member</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <form class="form-material" method="post" name="sentmessage" action="<?php echo site_url('member/aksi_edit'); ?>" enctype="multipart/form-data">
                                                            
                                                        <div class="form-group form-primary">
                                                                <input type="hidden" id="id" name="id"  class="form-control" value="<?php echo $member->id; ?>" required="">
                                                                <span class="form-bar"></span>
                                                                
                                                            </div>

                                                        <div class="form-group form-primary">
                                                                <input type="text" id="username" name="username"  class="form-control" value="<?php echo $member->username; ?>" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Username</label>
                                                            </div>

                                                            <div class="form-group form-primary">
                                                                <input type="email" id="email" name="email"  class="form-control" value="<?php echo $member->email; ?>" required="">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Email</label>
                                                            </div>

                                                            
                                                                    
                                                                        <div>
                                                                            <button class="btn btn-primary py-2 px-4" type="submit">Simpan</button>
                                                                        </div>     
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                       
                                        </div>
                                                       