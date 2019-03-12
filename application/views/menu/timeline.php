<div class="timeline">
  <?php foreach ($timeline as $t) { ?>
  <div class="container bulat">
    <div class="content">
      <h5><?php echo $t["kegiatan"]; ?></h5>
      <p><?php 
        $tglMulai = date("D, d/M/Y", strtotime($t['tanggal_mulai']));
        $tglSelesai = date("D, d/M/Y", strtotime($t['tanggal_mulai']));
        echo $tglMulai . " - " . $tglSelesai; 
      ?></p>
    </div>
  </div>
  <?php } ?>
</div>