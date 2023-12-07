
<div class="pcoded-main-container">
              <div class="pcoded-wrapper">
                  <nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                              <div class="main-menu-header">
                                  <img class="img-80 img-radius" src="<?php echo base_url('assets/admin/images/profil.png')?>" alt="User-Profile-Image">
                                  <div class="user-details">
                                      <span id="more-details"><?php echo $this->session->userdata('userName'); ?><i class="fa fa-caret-down"></i></span>
                                  </div>
                              </div>
        
                              <div class="main-menu-content">
                                  <ul>
                                      <li class="more-details">
                                          <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                          <a href="#!"><i class="ti-settings"></i>Settings</a>
                                          <a href="<?php echo site_url('loginadmin/logout'); ?>"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="p-15 p-b-0">
                              <form class="form-material">
                                  <div class="form-group form-primary">
                                      <input type="text" name="footer-email" class="form-control" required="">
                                      <span class="form-bar"></span>
                                      <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                                  </div>
                              </form>
                          </div>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Menu</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li>
                                  <a href="<?php echo site_url('loginadmin/dashboard'); ?>" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-support"></i><b>D</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                             
                        
                              <li>
                                  <a href="<?php echo site_url('templateadmin'); ?>" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-upload"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Template</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li>
                                  <a href="<?php echo site_url('admin'); ?>" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-hand-open"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Admin</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>

                              <li>
                                  <a href="<?php echo site_url('member'); ?>" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-hand-open"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Member</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
        
                          </ul>
        
                          </ul>
        
                      </div>
                  </nav>
                  
