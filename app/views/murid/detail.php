<div class="container mt-5">

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['murid']['nama']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data['murid']['nip']; ?></h6>
    <p class="card-text"><?= $data['murid']['email']; ?></p>
    <p class="card-text"><?= $data['murid']['jurusan']; ?></p>
    <a href="<?= BASEURL; ?>murid" class="card-link">Kembali</a>
  </div>
</div>
</div>