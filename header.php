<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title><?php echo htmlspecialchars($page_title ?? 'Satpol PP Kabupaten Kubu Raya'); ?></title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#002147",
                        "accent": "#f97316",
                        "background-light": "#f5f7f8",
                        "background-dark": "#0f1823",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .mega-menu {
            display: none;
        }

        .group:hover .mega-menu {
            display: block;
        }

        .masonry-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            grid-auto-rows: 200px;
            gap: 1rem;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">

    <!-- Sticky Header -->
    <header class="sticky top-0 z-50 w-full bg-white/90 dark:bg-background-dark/90 backdrop-blur-md border-b border-primary/10 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">

                <!-- Logo -->
                <div class="flex items-center gap-3">
                    <a href="beranda.php" class="flex items-center gap-3 group">
                        <img src="assets/images/logo-satpolpp.png" alt="Logo Satpol PP Kabupaten Kubu Raya" class="w-12 h-14 object-contain drop-shadow-md group-hover:scale-105 transition-transform duration-200">
                        <div>
                            <h1 class="text-lg font-extrabold leading-none text-primary dark:text-slate-100 uppercase tracking-tighter">Satpol PP</h1>
                            <p class="text-xs font-medium text-primary/60 dark:text-slate-400">Kabupaten Kubu Raya</p>
                        </div>
                    </a>
                </div>

                <!-- Mega Menu Navigation -->
                <nav class="hidden lg:flex items-center gap-8">
                    <?php
                    // Tentukan halaman aktif
                    $current_page = $_GET['page'] ?? basename($_SERVER['PHP_SELF'], '.php');

                    // Kelompok halaman yang termasuk dalam menu "Profil"
                    $profil_pages = ['visi-misi', 'tupoksi', 'struktur-organisasi', 'data-pegawai'];
                    $profil_active = in_array($current_page, $profil_pages);

                    // Kelompok halaman yang termasuk dalam menu "Standar Pelayanan"
                    $pelayanan_pages = ['maklumat-pelayanan', 'sop'];
                    $pelayanan_active = in_array($current_page, $pelayanan_pages);

                    // Helper: tandai menu aktif berdasarkan $current_page
                    $nav_active = function ($page) use ($current_page) {
                        return ($current_page ?? '') === $page
                            ? 'text-primary dark:text-white text-sm font-bold transition-all border-b-2 border-primary'
                            : 'text-sm font-semibold hover:text-primary transition-colors';
                    };
                    ?>
                    <a class="<?php echo $nav_active('beranda'); ?>" href="beranda.php">Beranda</a>

                    <!-- Profil -->
                    <div class="group relative py-7">
                        <button class="flex items-center gap-1 text-sm font-semibold hover:text-primary transition-colors <?php echo $profil_active ? 'text-primary dark:text-white border-b-2 border-primary font-bold' : ''; ?>">
                            Profil <span class="material-symbols-outlined text-sm">expand_more</span>
                        </button>
                        <div class="mega-menu absolute top-full left-0 w-64 bg-white dark:bg-slate-800 shadow-xl rounded-b-xl border-t-2 border-primary p-4 animate-in fade-in slide-in-from-top-2">
                            <ul class="space-y-3">
                                <li><a class="block text-sm hover:text-primary py-1 <?php echo $current_page === 'visi-misi' ? 'text-primary font-bold' : ''; ?>" href="visi-misi.php">Visi &amp; Misi</a></li>
                                <li><a class="block text-sm hover:text-primary py-1 <?php echo $current_page === 'struktur-organisasi' ? 'text-primary font-bold' : ''; ?>" href="struktur-organisasi.php">Struktur Organisasi</a></li>
                                <li><a class="block text-sm hover:text-primary py-1 <?php echo $current_page === 'tupoksi' ? 'text-primary font-bold' : ''; ?>" href="tupoksi.php">Tugas Pokok &amp; Fungsi</a></li>
                                <li><a class="block text-sm hover:text-primary py-1 <?php echo $current_page === 'data-pegawai' ? 'text-primary font-bold' : ''; ?>" href="data-pegawai.php">Data Pegawai</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Berita -->
                    <a class="<?php echo $nav_active('berita'); ?>" href="berita.php">Berita</a>

                    <!-- Program -->
                    <a class="<?php echo $nav_active('program'); ?>" href="program.php">Program</a>

                    <!-- Standar Pelayanan -->
                    <div class="group relative py-7">
                        <button class="flex items-center gap-1 text-sm font-semibold hover:text-primary transition-colors <?php echo $pelayanan_active ? 'text-primary dark:text-white border-b-2 border-primary font-bold' : ''; ?>">
                            Standar Pelayanan <span class="material-symbols-outlined text-sm">expand_more</span>
                        </button>
                        <div class="mega-menu absolute top-full left-0 w-64 bg-white dark:bg-slate-800 shadow-xl rounded-b-xl border-t-2 border-primary p-4">
                            <ul class="space-y-3">
                                <li><a class="block text-sm hover:text-primary py-1 <?php echo $current_page === 'maklumat-pelayanan' ? 'text-primary font-bold' : ''; ?>" href="maklumat-pelayanan.php">Maklumat Pelayanan</a></li>
                                <li><a class="block text-sm hover:text-primary py-1 <?php echo $current_page === 'sop' ? 'text-primary font-bold' : ''; ?>" href="sop.php">SOP</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Media Informasi -->
                    <?php
                    $media_pages = ['layanan', 'pengumuman', 'agenda', 'produk-hukum', 'infografis', 'galeri-foto'];
                    $media_active = in_array($current_page, $media_pages);
                    ?>
                    <div class="group relative py-7">
                        <button class="flex items-center gap-1 text-sm font-semibold hover:text-primary transition-colors <?php echo $media_active ? 'text-primary dark:text-white border-b-2 border-primary font-bold' : ''; ?>">
                            Media Informasi <span class="material-symbols-outlined text-sm">expand_more</span>
                        </button>
                        <div class="mega-menu absolute top-full left-0 w-64 bg-white dark:bg-slate-800 shadow-xl rounded-b-xl border-t-2 border-primary p-4">
                            <ul class="space-y-3">
                                <li><a class="block text-sm hover:text-primary py-1 <?php echo $current_page === 'layanan' ? 'text-primary font-bold' : ''; ?>" href="layanan.php">Layanan</a></li>
                                <li><a class="block text-sm hover:text-primary py-1 <?php echo $current_page === 'pengumuman' ? 'text-primary font-bold' : ''; ?>" href="pengumuman.php">Pengumuman</a></li>
                                <li><a class="block text-sm hover:text-primary py-1 <?php echo $current_page === 'agenda' ? 'text-primary font-bold' : ''; ?>" href="agenda.php">Agenda</a></li>
                                <li><a class="block text-sm hover:text-primary py-1 <?php echo $current_page === 'produk-hukum' ? 'text-primary font-bold' : ''; ?>" href="produk-hukum.php">Produk Hukum</a></li>
                                <li><a class="block text-sm hover:text-primary py-1 <?php echo $current_page === 'infografis' ? 'text-primary font-bold' : ''; ?>" href="infografis.php">Infografis</a></li>
                                <li><a class="block text-sm hover:text-primary py-1 <?php echo $current_page === 'galeri-foto' ? 'text-primary font-bold' : ''; ?>" href="galeri-foto.php">Galeri Foto</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Interaksi -->
                    <?php
                    $interaksi_pages = ['survei-kepuasan', 'masukan-saran'];
                    $interaksi_active = in_array($current_page, $interaksi_pages);
                    ?>
                    <div class="group relative py-7">
                        <button class="flex items-center gap-1 text-sm font-semibold hover:text-primary transition-colors <?php echo $interaksi_active ? 'text-primary dark:text-white border-b-2 border-primary font-bold' : ''; ?>">
                            Interaksi <span class="material-symbols-outlined text-sm">expand_more</span>
                        </button>
                        <div class="mega-menu absolute top-full right-0 w-64 bg-white dark:bg-slate-800 shadow-xl rounded-b-xl border-t-2 border-primary p-4">
                            <ul class="space-y-3">
                                <li><a class="block text-sm hover:text-primary py-1 <?php echo $current_page === 'survei-kepuasan' ? 'text-primary font-bold' : ''; ?>" href="survei-kepuasan.php">Survei Kepuasan</a></li>
                                <li><a class="block text-sm hover:text-primary py-1 <?php echo $current_page === 'masukan-saran' ? 'text-primary font-bold' : ''; ?>" href="masukan-saran.php">Masukan &amp; Saran</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </header>