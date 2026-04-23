<?php
$page_title   = "Produk Layanan - Satpol PP Kabupaten Kubu Raya";
$current_page = "produk-layanan";
require_once 'header.php';
?>

<!-- Hero Section -->
<section class="relative w-full h-[420px] overflow-hidden bg-primary">
    <div class="absolute inset-0 z-0">
        <div class="w-full h-full bg-cover bg-center opacity-40"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDeLFcmlZFAAz_hMeL_QUSPC8jKtQ92hHlpNJ6jNit6O75bieL7n-wp9UORrGQJJA4F5lQDrx834Y5SeICCBpluVl5deDrc37tnDSQsZKSAQNTgH_zJ_uwD7nJ7LfYwJUpZQa0HaTwHkaA2eUFV0rrgiFVFPEI4OhydFI5vnG62ZJcWjld_VDISdss5nfGwnxjNqlXuUuUITsUEd98qp8De-j545Wqw_lPBxfDRAdDYi26IGSWis0U8zEUg98nPbroyurk5oIJvnYY5');"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-primary/70 via-primary/60 to-primary"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center">
        <nav class="flex items-center gap-2 text-slate-400 text-xs font-medium mb-6">
            <a href="beranda.php" class="hover:text-accent transition-colors">Beranda</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-slate-300">Standar Pelayanan</span>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-accent">Produk Layanan</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Standar Pelayanan</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
            Produk <span class="text-accent">Layanan</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-sm md:text-base leading-relaxed">
            Seluruh jenis layanan yang tersedia bagi masyarakat dari Satuan Polisi Pamong Praja Kabupaten Kubu Raya.
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-14">

    <!-- ===== SECTION PENGANTAR ===== -->
    <section id="pengantar">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white text-center mb-8">Tentang Produk Layanan</h2>

        <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-8 shadow-sm space-y-4">
            <!-- ============================================================ -->
            <!-- EDIT TEKS PENGANTAR DI SINI                                  -->
            <!-- ============================================================ -->
            <p class="text-slate-700 dark:text-slate-300 text-sm leading-relaxed">
                Satpol PP Kabupaten Kubu Raya menyelenggarakan berbagai <strong class="text-primary dark:text-white">produk layanan publik</strong> yang bertujuan untuk menjaga ketertiban umum, ketenteraman masyarakat, dan menegakkan peraturan daerah secara profesional dan humanis.
            </p>
            <div class="h-px bg-slate-100 dark:bg-slate-800"></div>
            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                Seluruh produk layanan berikut dapat diakses oleh seluruh masyarakat Kabupaten Kubu Raya <strong class="text-primary dark:text-white">tanpa dipungut biaya apapun</strong> sesuai ketentuan peraturan perundang-undangan yang berlaku.
            </p>
        </div>
    </section>

    <!-- ===== SECTION DAFTAR PRODUK ===== -->
    <section id="daftar-produk">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white text-center mb-8">Daftar Produk Layanan</h2>

        <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-8 shadow-sm space-y-5">
            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                Berikut adalah produk layanan yang diselenggarakan oleh Satpol PP Kabupaten Kubu Raya:
            </p>

            <!-- ============================================================ -->
            <!-- EDIT DAFTAR PRODUK LAYANAN DI SINI                           -->
            <!-- Setiap item: 'judul', 'desc'                                  -->
            <!-- ============================================================ -->
            <?php
            $produk_list = [
                [
                    'judul' => 'Penanganan Pengaduan Masyarakat',
                    'desc'  => 'Layanan penerimaan dan penanganan laporan masyarakat terkait pelanggaran peraturan daerah, gangguan ketertiban umum, dan permasalahan sosial di wilayah Kabupaten Kubu Raya.',
                ],
                [
                    'judul' => 'Patroli dan Pengamanan Wilayah',
                    'desc'  => 'Layanan patroli rutin dan pengamanan wilayah untuk menjaga ketertiban umum dan ketenteraman masyarakat, serta mencegah terjadinya pelanggaran peraturan daerah.',
                ],
                [
                    'judul' => 'Penegakan Peraturan Daerah',
                    'desc'  => 'Penertiban dan penegakan peraturan daerah secara humanis dan profesional, termasuk penindakan pelanggaran PKL, bangunan liar, dan pelanggaran perda lainnya.',
                ],
                [
                    'judul' => 'Pengamanan Kegiatan',
                    'desc'  => 'Layanan bantuan pengamanan untuk kegiatan masyarakat, instansi pemerintah, dan kegiatan sosial kemasyarakatan atas permohonan yang diajukan sesuai prosedur.',
                ],
                [
                    'judul' => 'Rekomendasi Izin Usaha',
                    'desc'  => 'Pemberian rekomendasi dari Satpol PP terkait aspek ketertiban dan ketentraman untuk pengajuan izin usaha tertentu yang memerlukan keterangan dari aparat ketertiban.',
                ],
                [
                    'judul' => 'Pemberdayaan dan Pembinaan Linmas',
                    'desc'  => 'Pemberdayaan Satuan Perlindungan Masyarakat (Linmas) dalam rangka mendukung ketertiban umum di tingkat desa dan kelurahan di seluruh Kabupaten Kubu Raya.',
                ],
                [
                    'judul' => 'Surat Keterangan Catatan Ketertiban',
                    'desc'  => 'Penerbitan surat keterangan yang menyatakan tidak ada catatan pelanggaran ketertiban umum atas nama pemohon, yang diperlukan untuk berbagai keperluan administrasi.',
                ],
            ];
            ?>
            <div class="space-y-3">
                <?php foreach ($produk_list as $i => $item): ?>
                <div class="flex gap-4 items-start border border-slate-100 dark:border-slate-700 rounded-xl p-4 hover:border-primary/20 transition-colors">
                    <span class="flex-shrink-0 w-7 h-7 bg-primary text-white text-xs font-black rounded-lg flex items-center justify-center mt-0.5"><?php echo $i + 1; ?></span>
                    <div>
                        <p class="text-sm font-bold text-primary dark:text-white mb-1"><?php echo htmlspecialchars($item['judul']); ?></p>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed"><?php echo htmlspecialchars($item['desc']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== SECTION INFORMASI KONTAK ===== -->
    <section id="kontak">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white text-center mb-8">Informasi Pelayanan</h2>

        <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-8 shadow-sm space-y-6">
            <!-- ============================================================ -->
            <!-- EDIT INFORMASI KONTAK DAN JAM LAYANAN DI SINI                -->
            <!-- ============================================================ -->
            <div>
                <p class="text-sm font-bold text-primary dark:text-slate-300 uppercase tracking-widest mb-2">Jam Pelayanan</p>
                <div class="h-px bg-slate-100 dark:bg-slate-800 mb-4"></div>
                <div class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                    <div class="flex justify-between">
                        <span>Senin – Kamis</span>
                        <span class="font-bold text-primary dark:text-white">07.30 – 16.00 WIB</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Jumat</span>
                        <span class="font-bold text-primary dark:text-white">07.30 – 11.30 WIB</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Sabtu – Minggu</span>
                        <span class="text-slate-400">Tutup</span>
                    </div>
                </div>
            </div>

            <div class="h-px bg-slate-100 dark:bg-slate-800"></div>

            <div>
                <p class="text-sm font-bold text-primary dark:text-slate-300 uppercase tracking-widest mb-2">Lokasi Kantor</p>
                <div class="h-px bg-slate-100 dark:bg-slate-800 mb-4"></div>
                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                    Jl. Arteri Supadio, Sungai Raya, Kabupaten Kubu Raya, Kalimantan Barat
                </p>
            </div>

            <div class="h-px bg-slate-100 dark:bg-slate-800"></div>

            <div>
                <p class="text-sm font-bold text-primary dark:text-slate-300 uppercase tracking-widest mb-2">Kontak</p>
                <div class="h-px bg-slate-100 dark:bg-slate-800 mb-4"></div>
                <p class="text-slate-600 dark:text-slate-400 text-sm">Telepon: <strong class="text-primary dark:text-white">(0561) 000-000</strong></p>
                <p class="text-slate-600 dark:text-slate-400 text-sm">Email: <strong class="text-primary dark:text-white">satpolpp@kuburajakab.go.id</strong></p>
            </div>
        </div>
    </section>

</main>

<!-- Terakhir Diperbarui -->
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pb-6 flex justify-end">
    <p class="text-slate-400 text-xs italic">Terakhir Diperbarui: 23 April 2026</p>
</div>

<?php require_once 'footer.php'; ?>
