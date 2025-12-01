<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Form</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="style2.css">

<style>
    body {
        background-color: #868484; 
    }
</style>

</head>
<body>

<div class="form-container">

<form class="row g-3 needs-validation" novalidate>

  <div class="col-md-6">
    <input type="text" class="form-control" placeholder="Ad" required>
    <div class="invalid-feedback">Lütfen ad giriniz.</div>
  </div>

  <div class="col-md-6">
    <input type="text" class="form-control" placeholder="Soyad" required>
    <div class="invalid-feedback">Lütfen soyad giriniz.</div>
  </div>


<div class="col-md-6">
  <label class="form-label">Email</label>
  <input 
      type="email" 
      class="form-control" 
      required
      pattern="^[a-zA-Z0-9._%+-]+@(gmail\.com|outlook\.com|hotmail\.com|yahoo\.com|icloud\.com|yandex\.com)$"
      title="Sadece Gmail, Outlook, Hotmail, Yahoo, iCloud veya Yandex email adresi girilebilir."
      oninput="
        const allowedDomains = ['gmail.com','outlook.com','hotmail.com','yahoo.com','icloud.com','yandex.com'];
        let val = this.value;
        if (val.includes('@')) {
          let parts = val.split('@');
          let domain = parts[1];

          // Yazılan domain izinli bir domain değilse otomatik sil
          if (domain && !allowedDomains.some(d => d.startsWith(domain))) {
            this.value = parts[0] + '@' + domain.replace(/.*/, '');
          }
        }
      "
  >
  <div class="invalid-feedback">
    Sadece belirtilen email servisleri kullanılabilir.
  </div>
</div>

<div class="col-md-6">
  <label class="form-label">Telefon Numarası</label>
  <input 
      type="text" 
      class="form-control" 
      placeholder="05xxxxxxxxx" 
      required
      pattern="^05[0-9]{9}$"
      title="Telefon numarası 05 ile başlamalı ve 11 haneli olmalıdır."
      inputmode="numeric"
      maxlength="11"
      oninput="this.value = this.value.replace(/[^0-9]/g, '')"
  >
  <div class="invalid-feedback">Geçerli bir telefon numarası giriniz.</div>
</div>

  <div class="col-12">
    <label class="form-label">Adres</label>
    <input type="text" class="form-control" required>
    <div class="invalid-feedback">Adres boş bırakılamaz.</div>
  </div>

  <div class="col-12 form-floating">
    <textarea class="form-control" id="floatingTextarea"></textarea>
    <label for="floatingTextarea">Yorum</label>
  </div>

  <div class="col-12 d-flex justify-content-between">
      <button class="btn btn-primary" type="submit">Kayıt</button>
      <button type="button" class="btn btn-secondary" onclick="window.close()">Exit</button>
  </div>

</form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script>
(() => {
  const form = document.querySelector('.needs-validation');

  form.addEventListener('submit', event => {
    if (!form.checkValidity()) {
      event.preventDefault();
      event.stopPropagation();
    } else {
      event.preventDefault();
      alert("Kayıt başarılı!");
      window.close();
    }

    form.classList.add('was-validated');
  });
})();
</script>

</body>
</html>

