<?php
$page_title   = "Masukan & Saran - Satpol PP Kabupaten Kubu Raya";
$current_page = "masukan-saran";

$pesan_sukses = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Logika proses masukan & saran ke database/email bisa di sini
    $pesan_sukses = true;
}

require_once 'header.php';
?>

<!-- Hero Section (Standar) -->
<section class="relative w-full h-[420px] overflow-hidden bg-primary">
    <div class="absolute inset-0 z-0">
        <div class="w-full h-full bg-cover bg-center opacity-40" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDeLFcmlZFAAz_hMeL_QUSPC8jKtQ92hHlpNJ6jNit6O75bieL7n-wp9UORrGQJJA4F5lQDrx834Y5SeICCBpluVl5deDrc37tnDSQsZKSAQNTgH_zJ_uwD7nJ7LfYwJUpZQa0HaTwHkaA2eUFV0rrgiFVFPEI4OhydFI5vnG62ZJcWjld_VDISdss5nfGwnxjNqlXuUuUITsUEd98qp8De-j545Wqw_lPBxfDRAdDYi26IGSWis0U8zEUg98nPbroyurk5oIJvnYY5');"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-primary/70 via-primary/60 to-primary"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center">
        <nav class="flex items-center gap-2 text-slate-400 text-xs font-medium mb-6">
            <a href="beranda.php" class="hover:text-accent transition-colors">Beranda</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-slate-300">Interaksi</span>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-accent">Masukan &amp; Saran</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Layanan Pengaduan</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
            Masukan &amp; <span class="text-accent">Saran</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-sm md:text-base leading-relaxed">
            Sampaikan aspirasi, keluhan, keluhan masyarakat, atau saran Anda untuk mewujudkan ketertiban di Kabupaten Kubu Raya.
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

    <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">
        <!-- Info Kontak (Kiri) -->
        <div class="lg:col-span-2 space-y-8">
            <div>
                <h2 class="text-2xl font-extrabold text-primary dark:text-white mb-4">Hubungi Kami</h2>
                <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed mb-6">
                    Setiap laporan pengaduan, masukan, dan saran yang Anda berikan sangat berarti bagi kami. Kami menjamin kerahasiaan data pelapor.
                </p>
            </div>
            
            <div class="space-y-4">
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center flex-shrink-0">
                        <span class="material-symbols-outlined">location_on</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-800 dark:text-white text-sm mb-1">Kantor Satpol PP</h4>
                        <p class="text-xs text-slate-500 leading-relaxed">Jl. Arteri Supadio, Sungai Raya, Kab. Kubu Raya, Kalimantan Barat 78391</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-xl bg-green-500/10 text-green-600 flex items-center justify-center flex-shrink-0">
                        <span class="material-symbols-outlined">call</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-800 dark:text-white text-sm mb-1">Telepon & WhatsApp</h4>
                        <p class="text-xs text-slate-500 leading-relaxed">(0561) 1234567<br>0812-3456-7890 (WA Pengaduan)</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-xl bg-accent/10 text-accent flex items-center justify-center flex-shrink-0">
                        <span class="material-symbols-outlined">mail</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-800 dark:text-white text-sm mb-1">Email Layanan</h4>
                        <p class="text-xs text-slate-500 leading-relaxed">pengaduan@satpolpp.kuburayakab.go.id</p>
                    </div>
                </div>
            </div>

            <!-- Jam Operasional -->
            <div class="bg-slate-50 dark:bg-slate-800 rounded-2xl p-6 border border-slate-100 dark:border-slate-700 mt-8">
                <h4 class="font-bold text-primary dark:text-white text-sm mb-4 border-b border-slate-200 dark:border-slate-700 pb-2">Jam Operasional Layanan</h4>
                <ul class="space-y-2 text-xs text-slate-600 dark:text-slate-400">
                    <li class="flex justify-between"><span>Senin - Kamis</span> <span class="font-bold text-slate-800 dark:text-slate-200">08:00 - 15:00</span></li>
                    <li class="flex justify-between"><span>Jumat</span> <span class="font-bold text-slate-800 dark:text-slate-200">08:00 - 11:30</span></li>
                    <li class="flex justify-between"><span>Layanan Darurat</span> <span class="font-bold text-red-500">24 Jam</span></li>
                </ul>
            </div>
        </div>

        <!-- Form Pengaduan (Kanan) -->
        <div class="lg:col-span-3">
            <?php if ($pesan_sukses): ?>
            <!-- Pesan Sukses -->
            <div class="bg-green-50 dark:bg-green-900/20 border-2 border-green-500 rounded-3xl p-8 text-center shadow-lg shadow-green-500/10 h-full flex flex-col justify-center items-center">
                <div class="w-20 h-20 bg-green-500 text-white rounded-full flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-4xl">check_circle</span>
                </div>
                <h3 class="text-2xl font-extrabold text-green-600 dark:text-green-400 mb-2">Laporan Diterima!</h3>
                <p class="text-slate-600 dark:text-slate-300 max-w-sm">Terima kasih atas laporan atau masukan Anda. Tim kami akan segera menindaklanjutinya.</p>
                <a href="masukan-saran.php" class="inline-block mt-6 px-6 py-2.5 bg-green-600 text-white rounded-xl font-bold hover:bg-green-700 transition-colors">Buat Laporan Baru</a>
            </div>
            <?php else: ?>
            <!-- Form Input -->
            <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-3xl shadow-xl p-8">
                <h3 class="text-xl font-bold text-primary dark:text-white mb-6">Formulir Penyampaian</h3>
                
                <form method="POST" action="" class="space-y-5" enctype="multipart/form-data">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-xs font-bold text-slate-600 dark:text-slate-300 mb-2">Nama Lengkap <span class="text-red-500">*</span></label>
                            <input type="text" name="nama" required class="w-full bg-slate-50 dark:bg-slate-800 border-0 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary transition-all dark:text-white text-sm" placeholder="Nama Anda">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-600 dark:text-slate-300 mb-2">No. HP / WhatsApp <span class="text-red-500">*</span></label>
                            <input type="tel" name="telepon" required class="w-full bg-slate-50 dark:bg-slate-800 border-0 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary transition-all dark:text-white text-sm" placeholder="0812...">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-xs font-bold text-slate-600 dark:text-slate-300 mb-2">Email <span class="text-xs font-normal text-slate-400">(Opsional)</span></label>
                        <input type="email" name="email" class="w-full bg-slate-50 dark:bg-slate-800 border-0 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary transition-all dark:text-white text-sm" placeholder="alamat@email.com">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-600 dark:text-slate-300 mb-2">Jenis Penyampaian <span class="text-red-500">*</span></label>
                        <select name="jenis" required class="w-full bg-slate-50 dark:bg-slate-800 border-0 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary transition-all dark:text-white text-sm font-medium">
                            <option value="">-- Pilih Jenis --</option>
                            <option value="Pengaduan Masyarakat">Pengaduan Gangguan Ketertiban</option>
                            <option value="Pelanggaran Perda">Laporan Pelanggaran Perda</option>
                            <option value="Saran & Masukan">Saran & Masukan Pelayanan</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-600 dark:text-slate-300 mb-2">Lokasi Kejadian <span class="text-xs font-normal text-slate-400">(Jika berupa pengaduan)</span></label>
                        <input type="text" name="lokasi" class="w-full bg-slate-50 dark:bg-slate-800 border-0 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary transition-all dark:text-white text-sm" placeholder="Detail jalan, kecamatan, atau patokan lokasi">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-600 dark:text-slate-300 mb-2">Isi Pesan / Laporan <span class="text-red-500">*</span></label>
                        <textarea name="pesan" rows="5" required class="w-full bg-slate-50 dark:bg-slate-800 border-0 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary transition-all dark:text-white text-sm resize-none" placeholder="Ceritakan detail keluhan atau masukan Anda di sini..."></textarea>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-600 dark:text-slate-300 mb-2">Lampiran Bukti <span class="text-xs font-normal text-slate-400">(Foto/Video maks 5MB)</span></label>
                        <input type="file" name="lampiran" class="w-full bg-slate-50 dark:bg-slate-800 border-0 rounded-xl px-4 py-2 focus:ring-2 focus:ring-primary transition-all dark:text-white text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-bold file:bg-primary/10 file:text-primary hover:file:bg-primary hover:file:text-white cursor-pointer">
                    </div>

                    <div class="pt-4">
                        <button type="submit" class="w-full bg-primary hover:bg-primary/90 text-white font-extrabold py-4 rounded-xl transition-all shadow-xl shadow-primary/20 flex items-center justify-center gap-2">
                            Kirim Pesan <span class="material-symbols-outlined">send</span>
                        </button>
                    </div>
                </form>
            </div>
            <?php endif; ?>
        </div>
    </div>

</main>

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pb-8 flex justify-end">
    <p class="text-slate-400 text-xs italic">Terakhir Diperbarui: 27 April 2026</p>
</div>
<?php require_once 'footer.php'; ?>
