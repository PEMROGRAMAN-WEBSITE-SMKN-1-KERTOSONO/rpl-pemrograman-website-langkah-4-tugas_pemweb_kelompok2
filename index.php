<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Form Data Diri Modern | Pendaftaran</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Google Font: Inter untuk tampilan modern & bersih -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    <!-- Font Awesome 6 (Free Icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(145deg, #e0eafc 0%, #cfdef3 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1.5rem;
            position: relative;
        }

        /* Efek background abstract modern */
        body::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: radial-gradient(circle at 20% 30%, rgba(255,255,255,0.25) 0%, rgba(0,0,0,0.02) 80%);
            pointer-events: none;
        }

        /* Kartu utama */
        .form-card {
            max-width: 640px;
            width: 100%;
            background: rgba(255, 255, 255, 0.96);
            backdrop-filter: blur(0px);
            border-radius: 2rem;
            box-shadow: 0 25px 45px -12px rgba(0, 0, 0, 0.25), 0 8px 18px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            transition: transform 0.25s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(255,255,255,0.5);
        }

        .form-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 30px 50px -15px rgba(0, 0, 0, 0.3);
        }

        /* Header dengan gradien & judul */
        .card-header {
            background: linear-gradient(135deg, #1A2A4F 0%, #0F1A2F 100%);
            padding: 2rem 2rem 1.8rem 2rem;
            text-align: center;
            position: relative;
        }

        .card-header h1 {
            font-size: 1.9rem;
            font-weight: 700;
            letter-spacing: -0.3px;
            color: white;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .card-header h1 i {
            font-size: 2rem;
            color: #FFD966;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
        }

        .card-header p {
            color: #B9C7DD;
            font-weight: 400;
            font-size: 0.95rem;
            margin-top: 8px;
        }

        /* Decorative line */
        .header-glow {
            height: 4px;
            width: 80px;
            background: #FFD966;
            margin: 0.9rem auto 0 auto;
            border-radius: 4px;
        }

        /* Body form */
        .form-body {
            padding: 2rem 2rem 2rem 2rem;
        }

        /* Grup input modern */
        .input-group {
            margin-bottom: 1.6rem;
            position: relative;
        }

        .input-group label {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            color: #1E2A44;
            margin-bottom: 8px;
            letter-spacing: -0.2px;
        }

        .input-group label i {
            width: 20px;
            color: #3A5C8F;
            font-size: 1rem;
        }

        .input-group input {
            width: 100%;
            padding: 0.9rem 1rem 0.9rem 2.8rem;
            font-size: 1rem;
            font-family: 'Inter', monospace;
            background: #F9FAFF;
            border: 1.5px solid #E2E8F0;
            border-radius: 1.2rem;
            transition: all 0.2s ease;
            color: #0A1C2F;
            font-weight: 500;
            outline: none;
        }

        /* icon absolute dalam input */
        .input-group .input-icon {
            position: absolute;
            left: 1rem;
            bottom: 0.95rem;
            color: #8A9DC0;
            font-size: 1.1rem;
            transition: color 0.2s;
            pointer-events: none;
        }

        /* penyesuaian padding kiri karena ada icon */
        .input-group input {
            padding-left: 2.8rem;
        }

        .input-group input:focus {
            border-color: #3A6EA5;
            background: white;
            box-shadow: 0 4px 12px rgba(58, 110, 165, 0.15);
        }

        .input-group input:focus + .input-icon {
            color: #3A6EA5;
        }

        /* efek validasi modern (tooltip tidak ditampilkan asli, tapi fokus bagus) */
        /* tombol submit */
        .submit-wrapper {
            margin-top: 2rem;
            text-align: center;
        }

        .btn-submit {
            background: linear-gradient(100deg, #1F3A60 0%, #0E2946 100%);
            border: none;
            padding: 1rem 1.8rem;
            width: 100%;
            border-radius: 3rem;
            font-size: 1.05rem;
            font-weight: 600;
            font-family: 'Inter', sans-serif;
            color: white;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            cursor: pointer;
            transition: all 0.25s;
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.1);
            letter-spacing: 0.3px;
        }

        .btn-submit i {
            font-size: 1.2rem;
            transition: transform 0.2s;
        }

        .btn-submit:hover {
            background: linear-gradient(100deg, #284B73 0%, #153453 100%);
            transform: scale(1.01);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }

        .btn-submit:hover i {
            transform: translateX(4px);
        }

        .btn-submit:active {
            transform: scale(0.98);
        }

        /* Toast notifikasi modern (custom) */
        .toast-message {
            position: fixed;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%) translateY(100px);
            background: #1F2937;
            backdrop-filter: blur(12px);
            background: rgba(25, 35, 55, 0.95);
            color: white;
            padding: 0.8rem 1.8rem;
            border-radius: 60px;
            font-weight: 500;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            transition: transform 0.3s cubic-bezier(0.2, 0.9, 0.4, 1.1);
            border-left: 4px solid #FFD966;
            pointer-events: none;
        }

        .toast-message.show {
            transform: translateX(-50%) translateY(0);
        }

        .toast-message i {
            font-size: 1.2rem;
            color: #FFD966;
        }

        /* Responsive untuk mobile */
        @media (max-width: 550px) {
            .form-body {
                padding: 1.5rem;
            }
            .card-header h1 {
                font-size: 1.5rem;
            }
            .input-group input {
                padding: 0.8rem 1rem 0.8rem 2.5rem;
                font-size: 0.95rem;
            }
            .input-group .input-icon {
                bottom: 0.85rem;
                left: 0.9rem;
            }
            .btn-submit {
                padding: 0.85rem 1.5rem;
            }
        }

        /* small fix untuk input number (hp) */
        input[type="tel"] {
            letter-spacing: 0.3px;
        }

        /* shadow halus */
        .form-card {
            transition: all 0.2s;
        }
    </style>
</head>
<body>

<div class="form-card">
    <div class="card-header">
        <h1>
            <i class="fas fa-user-astronaut"></i> 
            Data Diri
        </h1>
        <div class="header-glow"></div>
        <p>Lengkapi informasi dengan benar</p>
    </div>
    <div class="form-body">
        <!-- Form dengan action javascript (prevent default) dan menampilkan data -->
        <form id="modernForm" action="#" method="post">
            <!-- Nama Lengkap -->
            <div class="input-group">
                <label><i class="fas fa-user-pen"></i> Nama Lengkap</label>
                <input type="text" id="fullname" name="fullname" placeholder="cth: Ahmad Fauzan Pratama" required autocomplete="name">
                <i class="fas fa-user input-icon"></i>
            </div>

            <!-- Alamat -->
            <div class="input-group">
                <label><i class="fas fa-location-dot"></i> Alamat</label>
                <input type="text" id="address" name="address" placeholder="Jl. Merdeka No. 123, Jakarta" required autocomplete="street-address">
                <i class="fas fa-map-pin input-icon"></i>
            </div>

            <!-- Email -->
            <div class="input-group">
                <label><i class="fas fa-envelope"></i> Email</label>
                <input type="email" id="email" name="email" placeholder="nama@example.com" required autocomplete="email">
                <i class="fas fa-envelope input-icon"></i>
            </div>

            <!-- No. HP -->
            <div class="input-group">
                <label><i class="fas fa-phone-alt"></i> No. Handphone</label>
                <input type="tel" id="phone" name="phone" placeholder="0812 3456 7890" required autocomplete="tel">
                <i class="fas fa-mobile-alt input-icon"></i>
            </div>

            <!-- Tombol Submit -->
            <div class="submit-wrapper">
                <button type="submit" class="btn-submit">
                    <span>Kirim Data</span>
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Toast container notifikasi -->
<div id="toastMsg" class="toast-message">
    <i class="fas fa-check-circle"></i>
    <span id="toastText">Data berhasil dikirim</span>
</div>

<script>
    (function() {
        const form = document.getElementById('modernForm');
        const toast = document.getElementById('toastMsg');
        const toastTextSpan = document.getElementById('toastText');

        // Fungsi untuk menampilkan notifikasi temporary
        function showToast(message, isError = false) {
            // set icon dan warna sesuai status (sukses / error)
            const iconEl = toast.querySelector('i');
            if (isError) {
                iconEl.className = 'fas fa-exclamation-triangle';
                toast.style.borderLeftColor = '#F97316';
                toast.style.background = 'rgba(180, 50, 30, 0.95)';
            } else {
                iconEl.className = 'fas fa-check-circle';
                toast.style.borderLeftColor = '#FFD966';
                toast.style.background = 'rgba(25, 35, 55, 0.95)';
            }
            toastTextSpan.innerText = message;
            // tampilkan toast
            toast.classList.add('show');
            // hilangkan setelah 3 detik
            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        }

        // Fungsi validasi sederhana (email & no hp)
        function validateForm(fullname, address, email, phone) {
            if (!fullname.trim()) {
                showToast('❌ Nama lengkap tidak boleh kosong', true);
                return false;
            }
            if (fullname.trim().length < 3) {
                showToast('Nama minimal 3 karakter', true);
                return false;
            }
            if (!address.trim()) {
                showToast('Alamat tidak boleh kosong', true);
                return false;
            }
            if (!email.trim()) {
                showToast('Email wajib diisi', true);
                return false;
            }
            // validasi email sederhana
            const emailPattern = /^[^\s@]+@([^\s@]+\.)+[^\s@]+$/;
            if (!emailPattern.test(email.trim())) {
                showToast('Format email tidak valid (contoh: nama@domain.com)', true);
                return false;
            }
            if (!phone.trim()) {
                showToast('Nomor handphone tidak boleh kosong', true);
                return false;
            }
            // validasi nomor hp: minimal 8 digit, maks 15, hanya angka, spasi, +, - (bisa mengandung spasi)
            const phoneClean = phone.replace(/[\s\-\(\)\+]/g, '');
            if (!/^\d+$/.test(phoneClean) || phoneClean.length < 8 || phoneClean.length > 15) {
                showToast('No. HP harus 8-15 digit angka (boleh spasi/+/ -)', true);
                return false;
            }
            return true;
        }

        // Event submit form
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            // ambil nilai input
            const fullname = document.getElementById('fullname').value;
            const address = document.getElementById('address').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;

            // validasi
            if (!validateForm(fullname, address, email, phone)) {
                return; // stop jika gagal
            }

            // Jika sukses, tampilkan data dalam notifikasi modern + console (opsional)
            // Bisa juga menampilkan ringkasan
            const namaRingkas = fullname.length > 25 ? fullname.substring(0, 22) + '...' : fullname;
            showToast(`✅ Terima kasih, ${namaRingkas}! Data tersimpan.`, false);
            
            // Optional: Log ke console untuk simulasi pengiriman ke server
            console.log('===== DATA DIRI TERKIRIM =====');
            console.log(`Nama Lengkap : ${fullname}`);
            console.log(`Alamat       : ${address}`);
            console.log(`Email        : ${email}`);
            console.log(`No. Handphone: ${phone}`);
            console.log('==============================');
            
            // Bisa juga reset form? (opsional: jangan reset agar user melihat data yang dikirim, tapi jika ingin dibersihkan hilangkan komen dibawah)
            // form.reset(); 
            // Untuk pengalaman lebih baik, tidak direset agar data tidak hilang tiba-tiba, tapi bisa fokus ke nama.
            // tambahan efek fokus ringan ke tombol? tidak diperlukan.
            // Jika ingin melakukan simulasi request, bisa ditambahkan disini.
        });

        // Tambahkan interaksi tambahan: validasi realtime tidak mengganggu, hanya membantu user
        // efek smooth pada input
        const inputs = document.querySelectorAll('.input-group input');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.01)';
                this.parentElement.style.transition = 'transform 0.1s';
            });
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
            });
        });
    })();
</script>
</body>
</html>