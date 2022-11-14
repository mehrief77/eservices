<div class="container-fluid">

  <!-- membuat search -->
  <div class="navbar-form navbar-right">
    <?php echo form_open('jasa/Dashboard_jasa/search/') ?>
    <input type="text" name="keyword" placeholder="search">
    <input type="submit" name="submit_search" value="search" class="btn sm btn-success">
    <?php echo form_close() ?>
  </div> <br>

  <!-- membuat slide -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url('assets\img\pekerja.jpg') ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets\img\pekerja1.jpg') ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets\img\pekerja2.jpg') ?>" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="row text-center mt-4">
    <?php foreach ($jasa as $js) : ?>

      <!-- kodingan utk menghiden sesuia kondisi -->
      <div class="card ml-3 mb-3 <?= ($js->status == "Persiapan" || $js->status == "Berangkat" || $js->status == "Bekerja"  ? "disablePointer"  : null) ?>" style="width: 16rem; ">
        <img src="<?php echo base_url() . 'uploads/' . $js->gambar ?>" class="img-thumbnail" alt="...">
        <div class="card-body">

          <!-- utk mencetak nama sepatu maka diambil nama field dari database toko_online -->
          <h5 class="card-title mb-1"><?php echo $js->nama_tkg ?></h5>
          <small><?php echo $js->keahlian ?></small><br>
          <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($js->harga_tkg, 0, ',', '.') ?></span>

          <!-- membuat button tambah kekeranjang dengan menggunakan indikator id brg  -->


          <a href="<?= base_url(); ?>/Dashboard/tambah_ke_pesan/<?= $js->id_tkg ?>" class="btn btn-primary btn-sm ">Pesan Jasa Pekerja</a>
          <?php echo anchor('jasa/Dashboard_jasa/detail/' . $js->id_tkg, '<div class="btn btn-success btn-sm">Detail</div>')  ?>
        </div>
      </div>

    <?php endforeach; ?>
  </div>
</div>