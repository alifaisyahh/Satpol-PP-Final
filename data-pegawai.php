<?php
$page_title   = "Data Pegawai - Satpol PP Kabupaten Kubu Raya";
$current_page = "data-pegawai";
require_once 'header.php';

$pegawai = [
    [
        'id'        => 1,
        'nama'      => 'H. Sukiman, S.Sos., M.Si.',
        'jabatan'   => 'Kepala Satuan Polisi Pamong Praja',
        'pangkat'   => 'Pembina Utama Muda',
        'golongan'  => 'IV/c',
        'nip'       => '197204121998031005',
        'pendidikan'=> 'S2 Ilmu Administrasi',
        'foto'      => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC_KkDUFdcqUkTUwrgTMQqTWm8Ab1VDm3EdUuvn6GNAjYEa2jkjlCqbKCFFgIivzQ0tbX_7GFit-YSSIH0uJTgD8ebtq3IDVTyH4_nd9ZgCOBTHVWP17IzUwDjbfuIe1R0DVuQWLp5V1VQVS8AazBJTiDyzWQff2PXE5srqrp3qVZJFSmJMnQGjCEUyKoDks6iwNLYgaSBoFYGLiKHJZCNG4Iuyk8faHqu-v45FbMOtOwukU_YhK-g0xyAbHq0u31tDx9gDCFqO1uxQ',
        'bidang'    => 'Pimpinan',
    ],
    [
        'id'        => 2,
        'nama'      => 'Drs. Ahmad Fauzi, M.M.',
        'jabatan'   => 'Sekretaris',
        'pangkat'   => 'Pembina',
        'golongan'  => 'IV/a',
        'nip'       => '196812051994031003',
        'pendidikan'=> 'S2 Manajemen',
        'foto'      => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBduJDsl5l4muB6I-wIUVgwmUyPYgbT5gJTd2CKPeKSktjkMDSJGkdMJAlCu90lO8F18KMfGTirgQcad2UEyxP1arlguAnKvBiY-UevEtPcpAPfJLz60x7IPLrr7v1Wz4FOUMysh8QesL_q967F2fyXOZ9VwwUO9HmaBDfP0OWTQQKU8xvEYvU5KpPb0Totznmq0kIA82ONDqQHGwV7hxhtyo5U1CokK8I2BCnZpUqfprMHw7kImAiVLScwN_c6_qTOMel-xYaQLGvH',
        'bidang'    => 'Sekretariat',
    ],
    [
        'id'        => 3,
        'nama'      => 'Hendra Wijaya, S.H.',
        'jabatan'   => 'Kepala Bidang Ketertiban Umum',
        'pangkat'   => 'Penata Tk. I',
        'golongan'  => 'III/d',
        'nip'       => '197905152003121002',
        'pendidikan'=> 'S1 Hukum',
        'foto'      => 'https://lh3.googleusercontent.com/aida-public/AB6AXuA-ks630M-tPvVapmS5nKdCzIHBTpUwFJuRuP7Dd-ylOf9pMp7-lonYsQn18x8V2gbFoiyluwcmwat2yV2BI2ANz_12aT_-G-jiJYOznYYjKAoo3JkZIuZW5TUH1VRuW2OyS0Fx8RX0G3m_n9dEnVZiRVccsp-yf2WCNehAGPx-epMHaKtJ2gAO4K1Poq0PWN1JzXyUNXT51g3BK9go12OHoN3ATeRJ_Ob70CGqoMdbm-DX_8M47h5boBZj_jFPCLsgtKYbPnAJimKk',
        'bidang'    => 'Ketertiban Umum',
    ],
    [
        'id'        => 4,
        'nama'      => 'Siti Rahayu, S.AP.',
        'jabatan'   => 'Kepala Bidang Penegakan Perda',
        'pangkat'   => 'Penata Tk. I',
        'golongan'  => 'III/d',
        'nip'       => '198103222005012001',
        'pendidikan'=> 'S1 Administrasi Publik',
        'foto'      => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB9y7q4WfcFlbiviJpNVWwzP8ALe9zUIhznmoNcYAaeCv3HMssYzIiOXBPtRadRwkQ4wOe7cYiRhTZZp_RoicMPgUJx2QsaOBXW-0ubHy34ctorF749FA10EnNzXvssrDPIUiWsvycFdvg-dehpY0DaCJnvgZnHWJ0QLPPpsYP1V-OgOanZEzOuMhcnCaLF4cFChEJp6pVkOlnZ8-BiYwQU4MqwFwXS6A5MbLZJBBJU_YdvfwZW25cD0CMWVns3e9RMjWrEjXCbl3OO',
        'bidang'    => 'Penegakan Perda',
    ],
    [
        'id'        => 5,
        'nama'      => 'Budi Santoso, S.Sos.',
        'jabatan'   => 'Kepala Bidang PPNS',
        'pangkat'   => 'Penata',
        'golongan'  => 'III/c',
        'nip'       => '198507182008011003',
        'pendidikan'=> 'S1 Sosial',
        'foto'      => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCXLZ1NCI-vbbz76ottq7AyXQ93gGjsvfcklEZDFg0MRuLtn2BpmyrOaoteBDZuY0ma55cYAwKcHDMI0iB92NZjDTa-4z3Uxz5Wv8OqCtiN3ExvT1SMd5sFYZ4N9rhxrP2hKcgIOw5um-t_zAOddegS_knoH1DJ1iKvffS83KgsapSzyLFqhiMCqTYtP85xAOwl3tc_V3RydWQrqK0osujxvPVhpXfy5o_4_meWOZjNriRsNLo8wepBfLop8qNFmbu7U77OSnpW82Ip',
        'bidang'    => 'PPNS',
    ],
    [
        'id'        => 6,
        'nama'      => 'Dewi Anggraini, S.Pd.',
        'jabatan'   => 'Kepala Bidang Linmas',
        'pangkat'   => 'Penata',
        'golongan'  => 'III/c',
        'nip'       => '198209302007012002',
        'pendidikan'=> 'S1 Pendidikan',
        'foto'      => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBZcR0iBVcwDA6pBRh8-SUeQy_5lnbVuw7dk20Mdj-iJwm7mjj0MH2epYcQBT4JAZaEvHiCGllH0bN6dYEJrcfrFKRyn6JROkTiEiJAZtGRjmgD01VkDpWViWdC3D90wbwsK3DRCyoSVIwf4VQu3tSxhvJCtRrxygpB1ithwTPDHt_pKRB-c7pmFZVGvp9J1sinX-HoD5Xo6E6kAMB4SasYIJ9qpIhaCugrB-YBXVBaRLnY42xcIukyES3TASZhyzzgV5zWtkglUWSA',
        'bidang'    => 'Linmas',
    ],
    [
        'id'        => 7,
        'nama'      => 'Rudi Hartono, S.H.',
        'jabatan'   => 'Kasubag Umum & Kepegawaian',
        'pangkat'   => 'Penata Muda Tk. I',
        'golongan'  => 'III/b',
        'nip'       => '199001152012011002',
        'pendidikan'=> 'S1 Hukum',
        'foto'      => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCPr4yUWSvyEqzUwd1mA78qJrRIpaxLldNVASIODsshMN_l7DOLysIdYK14kFs7OTEpAzdPXB0sr15vYD5oTuEj5yxmD86wQ-E2hF45oYR0KAlASHgG1nGS_KIptK5m6w1-iwjx8JLMGQGlnjA9JteXDwzhyP5Gf-JB_4a7vWLpon3EB119XQBjdy3LvpnjI3IA4PKRlLSIrHi3HkbeSJ39mqGuiz6uHGg9oyPntKVddEB5KCiip_ZkVD9FJ18bJwRmKSBy3WdxF3SX',
        'bidang'    => 'Sekretariat',
    ],
    [
        'id'        => 8,
        'nama'      => 'Maya Sari, S.E.',
        'jabatan'   => 'Kasubag Keuangan & Perencanaan',
        'pangkat'   => 'Penata Muda Tk. I',
        'golongan'  => 'III/b',
        'nip'       => '199205282013012003',
        'pendidikan'=> 'S1 Ekonomi',
        'foto'      => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAd8dpClf1bLpByi65PXTPjGlWzLZL-SHIOv55KdP0_6yHW1jAWiBXNNBNNKBGBvxJ5doQeU-PJZRXg2-yTtLmHcEVFe21-bABSe0l4xBt88wGwGd4adsTuixxitvWh4vF_4QDF_qQ6DfJuasXDNJ5mxYkP1iymEAaYzNuldhcRNFhKOuchvk7t8pJCgalC34s9SXfeUhOo9X9QY8mCotX9wstos5_d41LgepTAhrqdFG1UVEdm7pp-lvM0VAROzEGkjh3JmjuMhNbE',
        'bidang'    => 'Sekretariat',
    ],
];

// Filter bidang unik untuk tab filter
$bidang_list = array_unique(array_column($pegawai, 'bidang'));
sort($bidang_list);
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
            <span class="text-slate-300">Profil</span>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-accent">Data Pegawai</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Profil Instansi</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
            Data <span class="text-accent">Pegawai</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-sm md:text-base leading-relaxed">
            Daftar aparatur sipil negara dan tenaga pendukung Satuan Polisi Pamong Praja Kabupaten Kubu Raya.
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

    <!-- Statistik -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-14">
        <?php
        $stats = [
            ['icon' => 'groups',     'label' => 'Total Pegawai',    'value' => count($pegawai)],
            ['icon' => 'badge',      'label' => 'Pejabat Struktural', 'value' => 6],
            ['icon' => 'workspace_premium', 'label' => 'Gol. IV',  'value' => 2],
            ['icon' => 'school',     'label' => 'S1 / S2',          'value' => count($pegawai)],
        ];
        foreach ($stats as $s): ?>
        <div class="bg-white dark:bg-slate-900 rounded-2xl p-6 shadow-sm border border-slate-100 dark:border-slate-800 flex items-center gap-4">
            <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary flex-shrink-0">
                <span class="material-symbols-outlined"><?= $s['icon'] ?></span>
            </div>
            <div>
                <p class="text-2xl font-extrabold text-primary dark:text-white"><?= $s['value'] ?></p>
                <p class="text-xs text-slate-500 font-medium"><?= $s['label'] ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Filter Bidang -->
    <div class="flex items-center gap-2 flex-wrap mb-10" id="filter-container">
        <button onclick="filterBidang('semua')" data-filter="semua"
            class="filter-btn active px-5 py-2 rounded-full text-sm font-bold border-2 border-primary bg-primary text-white transition-all">
            Semua
        </button>
        <?php foreach ($bidang_list as $b): ?>
        <button onclick="filterBidang('<?= htmlspecialchars($b) ?>')" data-filter="<?= htmlspecialchars($b) ?>"
            class="filter-btn px-5 py-2 rounded-full text-sm font-bold border-2 border-slate-200 text-slate-600 hover:border-primary hover:text-primary transition-all">
            <?= htmlspecialchars($b) ?>
        </button>
        <?php endforeach; ?>
    </div>

    <!-- Grid Pegawai -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="pegawai-grid">
        <?php foreach ($pegawai as $p): ?>
        <div class="pegawai-card bg-white dark:bg-slate-900 rounded-2xl overflow-hidden shadow-sm border border-slate-100 dark:border-slate-800 hover:shadow-xl transition-all group cursor-pointer"
             data-bidang="<?= htmlspecialchars($p['bidang']) ?>"
             onclick="openPegawaiModal(<?= $p['id'] ?>)">
            <!-- Foto -->
            <div class="relative h-52 overflow-hidden bg-slate-100 dark:bg-slate-800">
                <img src="<?= htmlspecialchars($p['foto']) ?>"
                     alt="Foto <?= htmlspecialchars($p['nama']) ?>"
                     class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" />
                <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <span class="absolute top-3 right-3 bg-accent text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">
                    Gol. <?= htmlspecialchars($p['golongan']) ?>
                </span>
            </div>
            <!-- Info -->
            <div class="p-5">
                <p class="text-[10px] font-bold uppercase tracking-widest text-accent mb-1"><?= htmlspecialchars($p['bidang']) ?></p>
                <h3 class="text-sm font-extrabold text-primary dark:text-white leading-tight mb-1 group-hover:text-accent transition-colors"><?= htmlspecialchars($p['nama']) ?></h3>
                <p class="text-xs text-slate-500 font-medium mb-3 line-clamp-2"><?= htmlspecialchars($p['jabatan']) ?></p>
                <div class="flex items-center gap-1.5 text-xs text-slate-400">
                    <span class="material-symbols-outlined text-sm">school</span>
                    <?= htmlspecialchars($p['pendidikan']) ?>
                </div>
                <div class="mt-3 pt-3 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                    <span class="text-xs text-slate-400"><?= htmlspecialchars($p['pangkat']) ?></span>
                    <span class="text-primary text-xs font-bold flex items-center gap-1 group-hover:gap-2 transition-all">
                        Detail <span class="material-symbols-outlined text-sm">chevron_right</span>
                    </span>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</main>

<!-- Modal Detail Pegawai -->
<div id="pegawai-modal" class="fixed inset-0 z-[9999] bg-black/70 backdrop-blur-sm flex items-center justify-center hidden p-4">
    <div class="relative bg-white dark:bg-slate-900 rounded-2xl shadow-2xl w-full max-w-lg overflow-hidden">
        <!-- Close -->
        <button onclick="closePegawaiModal()"
            class="absolute top-4 right-4 z-10 w-9 h-9 bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 rounded-xl flex items-center justify-center transition-colors">
            <span class="material-symbols-outlined text-slate-600 dark:text-slate-300">close</span>
        </button>

        <!-- Header foto -->
        <div class="relative h-48 bg-primary overflow-hidden">
            <img id="modal-foto" src="" alt="" class="w-full h-full object-cover object-top opacity-40" />
            <div class="absolute inset-0 flex items-end p-6">
                <div>
                    <p id="modal-bidang" class="text-accent text-xs font-bold uppercase tracking-widest mb-1"></p>
                    <h2 id="modal-nama" class="text-white text-xl font-extrabold leading-tight"></h2>
                    <p id="modal-jabatan" class="text-slate-300 text-sm mt-1"></p>
                </div>
            </div>
        </div>

        <!-- Detail Info -->
        <div class="p-6 space-y-4">
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-slate-50 dark:bg-slate-800 rounded-xl p-4">
                    <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">NIP</p>
                    <p id="modal-nip" class="text-sm font-bold text-primary dark:text-white font-mono"></p>
                </div>
                <div class="bg-slate-50 dark:bg-slate-800 rounded-xl p-4">
                    <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Golongan</p>
                    <p id="modal-golongan" class="text-sm font-bold text-primary dark:text-white"></p>
                </div>
                <div class="bg-slate-50 dark:bg-slate-800 rounded-xl p-4">
                    <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Pangkat</p>
                    <p id="modal-pangkat" class="text-sm font-bold text-primary dark:text-white"></p>
                </div>
                <div class="bg-slate-50 dark:bg-slate-800 rounded-xl p-4">
                    <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Pendidikan</p>
                    <p id="modal-pendidikan" class="text-sm font-bold text-primary dark:text-white"></p>
                </div>
            </div>
            <div class="bg-primary/5 border border-primary/10 rounded-xl p-4 flex items-center gap-3">
                <div class="w-9 h-9 bg-primary/10 rounded-xl flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-sm">account_tree</span>
                </div>
                <div>
                    <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400">Bidang</p>
                    <p id="modal-bidang-detail" class="text-sm font-bold text-primary dark:text-white"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Kirim data ke JS
$pegawai_json = json_encode($pegawai);
?>
<script>
var pegawaiData = <?= $pegawai_json ?>;

// ---- Filter ----
function filterBidang(bidang) {
    document.querySelectorAll('.filter-btn').forEach(function(btn) {
        var isActive = btn.dataset.filter === bidang;
        btn.classList.toggle('bg-primary', isActive);
        btn.classList.toggle('text-white', isActive);
        btn.classList.toggle('border-primary', isActive);
        btn.classList.toggle('text-slate-600', !isActive);
        btn.classList.toggle('border-slate-200', !isActive);
    });

    document.querySelectorAll('.pegawai-card').forEach(function(card) {
        if (bidang === 'semua' || card.dataset.bidang === bidang) {
            card.style.display = '';
        } else {
            card.style.display = 'none';
        }
    });
}

// ---- Modal ----
function openPegawaiModal(id) {
    var p = pegawaiData.find(function(x) { return x.id == id; });
    if (!p) return;

    document.getElementById('modal-foto').src        = p.foto;
    document.getElementById('modal-foto').alt        = p.nama;
    document.getElementById('modal-nama').textContent    = p.nama;
    document.getElementById('modal-jabatan').textContent = p.jabatan;
    document.getElementById('modal-bidang').textContent  = p.bidang;
    document.getElementById('modal-bidang-detail').textContent = p.bidang;
    document.getElementById('modal-nip').textContent      = p.nip;
    document.getElementById('modal-golongan').textContent = 'Golongan ' + p.golongan;
    document.getElementById('modal-pangkat').textContent  = p.pangkat;
    document.getElementById('modal-pendidikan').textContent = p.pendidikan;

    var modal = document.getElementById('pegawai-modal');
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closePegawaiModal() {
    document.getElementById('pegawai-modal').classList.add('hidden');
    document.body.style.overflow = '';
}

document.getElementById('pegawai-modal').addEventListener('click', function(e) {
    if (e.target === this) closePegawaiModal();
});

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closePegawaiModal();
});
</script>

<?php
// Terakhir Diperbarui
?>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-6 flex justify-end">
    <p class="text-slate-400 text-xs italic">Terakhir Diperbarui: 23 April 2026</p>
</div>

<?php require_once 'footer.php'; ?>
