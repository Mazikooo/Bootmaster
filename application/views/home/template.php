<div class="page-section banner-seo-check">

    <div class="wrap bg-image" style="background-image: url('<?php echo base_url('assets/home/img/bg_pattern.svg'); ?>');">

      <div class="container text-center">
        <div class="row justify-content-center wow fadeInUp">
          <div class="col-lg-8">
            <h2 class="mb-4">Cari Template Anda</h2>
            <form action="#">
              <input type="text" class="form-control" placeholder="Cari Template..">
              <button type="submit" class="btn btn-success">Search</button>
            </form>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .wrap -->
  </div> <!-- .page-section -->
  
  <?php $no=1; foreach($template as $val){?>
  <div class="page-section" id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <span class="subhead"><?php echo $val->tipe; ?></span>
          <h2 class="title-section"><?php echo $val->nama; ?></h2>
          <div class="divider"></div>

          <p><?php echo $val->deskripsi; ?></p>
          
          <a href="<?php echo $val->link; ?>" class="btn btn-primary mt-3">Download</a>
        </div>
        <div class="col-lg-6 py-3 wow fadeInRight">
          <div class="img-fluid py-3 text-center">
            <img src="<?php echo base_url('uploads/'.$val->gambar);?>" width="370" height="250" alt="">
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->
  <?php $no++; } ?>