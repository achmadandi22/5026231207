<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Honda Indonesia | Linktree</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="Pertemuan5_Linktree.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet" />
</head>

<body>


  <div class="icon-header">
    <div style="margin-right: 250px;">
      <button class="btn" id="bell-btn">
        <i class="bi bi-bell-fill"></i>
      </button>
    </div>
    <div style="margin-left: 250px;">
      <button class="btn" id="share-btn">
        <i class="bi bi-three-dots"></i>
      </button>
    </div>
  </div>


  <div id="subscribe-modal" class="modal-custom" style="display: none;">
    <div class="modal-content-custom text-center">
      <button class="btn-close float-end" id="close-modal"></button>
      <img src="image/logohonda.png" alt="Honda Logo" width="50" class="mb-3" />
      <h5><strong>Subscribe to hondaisme</strong></h5>
      <p>Stay up to date with everything important.</p>
      <input type="email" class="form-control mb-3" placeholder="Email" />
      <button class="btn btn-dark w-100 mb-3">Subscribe</button>
      <p style="font-size: 0.8rem;">
        By subscribing, you agree to Linktree’s
        <a href="#">T&Cs</a> and <a href="#">Privacy Notice</a>,
        and to your contact details being shared with hondaisme.
      </p>
    </div>
  </div>


  <div id="share-modal" class="modal-custom" style="display: none;">
    <div class="modal-content-custom text-center">
      <button class="btn-close float-end" id="close-share-modal"></button>
      <img src="image/logohondaisme.jpg" alt="Honda Indonesia Share" class="mb-3" style="width: 100%; border-radius: 15px;" />


      <div class="d-flex justify-content-around mb-3 fs-4">
        <a href="#" title="Copy Link"><i class="bi bi-link-45deg"></i></a>
        <a href="https://x.com/intent/post?text=Check%20out%20this%20Linktree!%20-%20https%3A%2F%2Flinktr.ee%2Fhondaisme%3Futm_source%3Dlinktree_profile_share&ltsid=411ea1d8-0879-440c-baed-05b5ab30a954"
          target="_blank" title="X"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/sharer.php?u=https://linktr.ee/hondaisme?utm_source=linktree_profile_share&ltsid=411ea1d8-0879-440c-baed-05b5ab30a954"
          target="_blank" title="Facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://api.whatsapp.com/send/?text=Check+out+this+Linktree%21+-+https%3A%2F%2Flinktr.ee%2Fhondaisme%3Futm_source%3Dlinktree_profile_share&type=custom_url&app_absent=0"
          target="_blank" title="WhatsApp"><i class="bi bi-whatsapp"></i></a>
        <a href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2FshareArticle%2F%3Furl%3Dhttps%3A%2F%2Flinktr.ee%2Fhondaisme%3Futm_source%3Dlinktree_profile_share%26ltsid%3D411ea1d8-0879-440c-baed-05b5ab30a954"
          target="_blank" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
      </div>

      <button class="btn btn-dark w-100 mb-2">Sign up free</button>

      <a href="https://linktr.ee/?utm_source=linktree&utm_medium=profile&utm_content=hondaisme&utm_campaign=ShareModalAccount&tofexp=ShareModalVariant&cta=findoutmore"
        target="_blank" class="btn btn-outline-secondary w-100 mb-2">
        Find out more
      </a>


      <div class="d-flex justify-content-between mt-3" style="font-size: 0.8rem;">
        <a href="#">Report Linktree</a>
        <a href="#">Privacy notice</a>
      </div>
    </div>
  </div>


  <div class="container text-center py-2">
    <div class="logo">
      <img src="image/logohonda.png" alt="Honda Logo" />
    </div>
    <h3 class="mb-4 fw-bold">Honda Indonesia</h3>

    <div class="container">
      <a href="https://www.honda-indonesia.com/" target="_blank" class="btn btn-honda">
        <i class="icon-btn">🌐</i> Website Honda Indonesia
      </a>
      <a href="https://www.youtube.com/watch?si=ZRu4YwdHhNbjodi8&v=w1Zyu498eu0&feature=youtu.be" target="_blank"
        class="btn btn-honda">
        <i class="icon-btn">🔋</i> Honda e:HEV System
      </a>
      <a href="https://api.whatsapp.com/send/?phone=%2B6281110676332&text&type=phone_number&app_absent=0"
        target="_blank" class="btn btn-honda">
        <i class="icon-btn">💬</i> Hani on WhatsApp (Honda Personal Assistant)
      </a>
      <a href="https://pud.honda-indonesia.com/" target="_blank" class="btn btn-honda">
        <i class="icon-btn">📢</i> Informasi Recall
      </a>
      <a href="https://ecare.honda-indonesia.com/" target="_blank" class="btn btn-honda">
        <i class="icon-btn">🛠</i> Honda e-Care
      </a>
      <a href="https://www.honda-indonesia.com/trendsetter" target="_blank" class="btn btn-honda">
        <i class="icon-btn">🔥</i> Trendsetter
      </a>
    </div>

    <div class="social-icons mt-4">
      <a href="https://www.facebook.com/hondaisme" target="_blank"><img
          src="https://cdn-icons-png.flaticon.com/512/145/145802.png" alt="Facebook" /></a>
      <a href="https://www.youtube.com/user/HondaIndonesia" target="_blank"><img
          src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="YouTube" /></a>
    </div>
  </div>


  <script>

    function setupModal(triggerId, modalId, closeBtnId) {
      const trigger = document.getElementById(triggerId);
      const modal = document.getElementById(modalId);
      const closeBtn = document.getElementById(closeBtnId);

      if (trigger && modal && closeBtn) {
        trigger.addEventListener("click", () => {
          modal.style.display = "flex";
        });

        closeBtn.addEventListener("click", () => {
          modal.style.display = "none";
        });

        window.addEventListener("click", (e) => {
          if (e.target === modal) {
            modal.style.display = "none";
          }
        });
      }
    }


    setupModal("bell-btn", "subscribe-modal", "close-modal");
    setupModal("share-btn", "share-modal", "close-share-modal");


    const copyBtn = document.getElementById("copy-link-btn");
    if (copyBtn) {
      copyBtn.addEventListener("click", () => {
        const link = "https://linktr.ee/hondaisme";
        navigator.clipboard.writeText(link).then(() => {
          copyBtn.innerHTML = '<i class="bi bi-clipboard-check"></i> Link Tersalin!';
          setTimeout(() => {
            copyBtn.innerHTML = '<i class="bi bi-clipboard"></i> Copy Linktree';
          }, 2000);
        }).catch(() => {
          alert("Gagal menyalin link.");
        });
      });
    }
  </script>

</body>

</html>