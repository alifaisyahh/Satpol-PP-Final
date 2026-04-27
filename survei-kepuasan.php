<?php
$page_title   = "Survei Kepuasan - Satpol PP Kabupaten Kubu Raya";
$current_page = "survei-kepuasan";

$pesan_sukses = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Proses form survei
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
            <span class="text-accent">Survei Kepuasan</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Interaksi Publik</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
            Survei <span class="text-accent">Kepuasan</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-sm md:text-base leading-relaxed">
            Partisipasi Anda sangat berarti untuk meningkatkan kualitas pelayanan publik Satpol PP Kabupaten Kubu Raya.
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

    <?php if ($pesan_sukses): ?>
    <!-- Pesan Sukses -->
    <div class="bg-green-50 dark:bg-green-900/20 border-2 border-green-500 rounded-3xl p-8 text-center shadow-lg shadow-green-500/10 mb-12">
        <div class="w-20 h-20 bg-green-500 text-white rounded-full flex items-center justify-center mx-auto mb-6">
            <span class="material-symbols-outlined text-4xl">check_circle</span>
        </div>
        <h3 class="text-2xl font-extrabold text-green-600 dark:text-green-400 mb-2">Terima Kasih!</h3>
        <p class="text-slate-600 dark:text-slate-300">Penilaian survei kepuasan Anda telah berhasil dikirim. Kritik dan saran yang Anda berikan akan menjadi bahan evaluasi perbaikan kami.</p>
        <a href="survei-kepuasan.php" class="inline-block mt-6 px-6 py-2.5 bg-green-600 text-white rounded-xl font-bold hover:bg-green-700 transition-colors">Isi Survei Baru</a>
    </div>
    <?php else: ?>

    <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-3xl shadow-xl p-8 md:p-12">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-extrabold text-primary dark:text-white mb-3">Indeks Kepuasan Masyarakat (IKM)</h2>
            <p class="text-slate-500 dark:text-slate-400 text-sm">Mohon kesediaannya untuk mengisi kuesioner di bawah ini dengan jujur. Data Anda akan kami rahasiakan dan hanya digunakan untuk keperluan peningkatan layanan.</p>
        </div>

        <form method="POST" action="" class="space-y-8">
            
            <!-- Data Diri (Opsional) -->
            <div class="bg-slate-50 dark:bg-slate-800/50 rounded-2xl p-6 border border-slate-100 dark:border-slate-800">
                <h3 class="text-sm font-bold uppercase tracking-widest text-primary dark:text-white mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined text-[18px]">person</span> Profil Responden <span class="text-xs text-slate-400 normal-case tracking-normal font-normal">(Opsional)</span>
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-600 dark:text-slate-300 mb-2">Nama Lengkap</label>
                        <input type="text" name="nama" class="w-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary transition-all dark:text-white" placeholder="Masukkan nama Anda">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 dark:text-slate-300 mb-2">Jenis Kelamin</label>
                        <select name="jk" class="w-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary transition-all dark:text-white">
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 dark:text-slate-300 mb-2">Usia</label>
                        <input type="number" name="usia" class="w-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary transition-all dark:text-white" placeholder="Contoh: 30">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 dark:text-slate-300 mb-2">Pendidikan Terakhir</label>
                        <select name="pendidikan" class="w-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary transition-all dark:text-white">
                            <option value="">-- Pilih Pendidikan --</option>
                            <option value="SD/Sederajat">SD/Sederajat</option>
                            <option value="SMP/Sederajat">SMP/Sederajat</option>
                            <option value="SMA/Sederajat">SMA/Sederajat</option>
                            <option value="D3">D3</option>
                            <option value="S1">S1</option>
                            <option value="S2/S3">S2/S3</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Kuisioner Utama -->
            <div>
                <h3 class="text-sm font-bold uppercase tracking-widest text-primary dark:text-white mb-6 flex items-center gap-2 border-b border-slate-100 dark:border-slate-800 pb-3">
                    <span class="material-symbols-outlined text-[18px]">rule</span> Kuesioner Kepuasan
                </h3>
                
                <?php
                $pertanyaan = [
                    "Bagaimana pendapat Anda tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?",
                    "Bagaimana pendapat Anda tentang kemudahan prosedur pelayanan di instansi ini?",
                    "Bagaimana pendapat Anda tentang kecepatan waktu dalam memberikan pelayanan?",
                    "Bagaimana pendapat Anda tentang kewajaran biaya/tarif dalam pelayanan?",
                    "Bagaimana pendapat Anda tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan?",
                    "Bagaimana pendapat Anda tentang kompetensi/kemampuan petugas dalam pelayanan?",
                    "Bagaimana pendapat Anda perilaku petugas dalam pelayanan terkait kesopanan dan keramahan?",
                    "Bagaimana pendapat Anda tentang penanganan pengaduan pengguna layanan?",
                ];
                
                foreach ($pertanyaan as $index => $tanya): 
                    $no = $index + 1;
                ?>
                <div class="mb-8 bg-slate-50 dark:bg-slate-800/20 p-6 rounded-2xl border border-slate-100 dark:border-slate-800">
                    <p class="font-bold text-primary dark:text-white mb-4 text-sm"><span class="text-accent mr-2">Q<?php echo $no; ?>.</span> <?php echo $tanya; ?></p>
                    <div class="grid grid-cols-1 sm:grid-cols-4 gap-3">
                        <label class="relative cursor-pointer">
                            <input type="radio" name="q<?php echo $no; ?>" value="4" class="peer sr-only" required>
                            <div class="w-full text-center py-3 rounded-xl border-2 border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-600 dark:text-slate-400 font-bold text-sm hover:border-primary/50 transition-all peer-checked:bg-primary peer-checked:border-primary peer-checked:text-white">
                                Sangat Baik
                            </div>
                        </label>
                        <label class="relative cursor-pointer">
                            <input type="radio" name="q<?php echo $no; ?>" value="3" class="peer sr-only">
                            <div class="w-full text-center py-3 rounded-xl border-2 border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-600 dark:text-slate-400 font-bold text-sm hover:border-primary/50 transition-all peer-checked:bg-primary peer-checked:border-primary peer-checked:text-white">
                                Baik
                            </div>
                        </label>
                        <label class="relative cursor-pointer">
                            <input type="radio" name="q<?php echo $no; ?>" value="2" class="peer sr-only">
                            <div class="w-full text-center py-3 rounded-xl border-2 border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-600 dark:text-slate-400 font-bold text-sm hover:border-primary/50 transition-all peer-checked:bg-accent peer-checked:border-accent peer-checked:text-white">
                                Kurang Baik
                            </div>
                        </label>
                        <label class="relative cursor-pointer">
                            <input type="radio" name="q<?php echo $no; ?>" value="1" class="peer sr-only">
                            <div class="w-full text-center py-3 rounded-xl border-2 border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 text-slate-600 dark:text-slate-400 font-bold text-sm hover:border-primary/50 transition-all peer-checked:bg-red-500 peer-checked:border-red-500 peer-checked:text-white">
                                Tidak Baik
                            </div>
                        </label>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>

            <!-- Pesan Tambahan -->
            <div>
                <label class="block text-sm font-bold text-primary dark:text-white mb-2">Kritik, Saran, atau Harapan (Opsional)</label>
                <textarea name="saran" rows="4" class="w-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary transition-all dark:text-white resize-none" placeholder="Tuliskan masukan Anda di sini..."></textarea>
            </div>

            <!-- Tombol Kirim -->
            <button type="submit" class="w-full bg-accent hover:bg-orange-600 text-white font-extrabold text-lg py-4 rounded-xl transition-all shadow-xl shadow-accent/20 flex items-center justify-center gap-2">
                Kirim Survei <span class="material-symbols-outlined">send</span>
            </button>

        </form>
    </div>

    <?php endif; ?>
</main>

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pb-8 flex justify-end">
    <p class="text-slate-400 text-xs italic">Terakhir Diperbarui: 27 April 2026</p>
</div>
<?php require_once 'footer.php'; ?>
