<footer class="bg-primary text-slate-300 pt-20 w-full">
    <div class="w-full px-6 md:px-12 lg:px-20 pb-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

            <!-- Alamat & Kontak -->
            <div class="space-y-6">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined">shield</span>
                    </div>
                    <h2 class="text-xl font-bold text-white tracking-tighter">
                        SATPOL PP <br/>
                        <span class="text-xs font-normal opacity-60">Kubu Raya</span>
                    </h2>
                </div>
                <ul class="space-y-4">
                    <li class="flex gap-3">
                        <span class="material-symbols-outlined text-accent">location_on</span>
                        <span class="text-sm">Jl. Arteri Supadio, Sungai Raya, Kab. Kubu Raya, Kalimantan Barat 78391</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="material-symbols-outlined text-accent">call</span>
                        <span class="text-sm">(0561) 1234567</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="material-symbols-outlined text-accent">mail</span>
                        <span class="text-sm">satpolpp@kuburaykab.go.id</span>
                    </li>
                </ul>
            </div>

            <!-- Tautan Cepat -->
            <div class="flex flex-col items-start lg:items-center">
                <div>
                    <h4 class="text-white font-bold mb-6 text-lg">Tautan Cepat</h4>
                    <ul class="space-y-4">
                        <?php
                        $footer_tautan = [
                            'Portal Pemkab Kubu Raya',
                            'Layanan Pengaduan (LAPOR!)',
                            'Sistem Informasi Pegawai',
                            'Transparansi Anggaran',
                            'Peta Lokasi Kantor',
                        ];
                        foreach ($footer_tautan as $link): ?>
                        <li><a class="text-sm hover:text-white transition-colors" href="#"><?php echo htmlspecialchars($link); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- Lokasi & Sosial Media -->
            <div class="space-y-6">
                <h4 class="text-white font-bold mb-6 text-lg">Lokasi &amp; Sosial Media</h4>
                <div class="w-full h-40 bg-slate-800 rounded-2xl overflow-hidden relative">
                    <div class="w-full h-full bg-slate-700 flex items-center justify-center">
                        <div class="text-center z-10">
                            <span class="material-symbols-outlined text-3xl mb-1 opacity-40">map</span>
                            <p class="text-[10px] font-medium opacity-50">Kubu Raya, West Kalimantan</p>
                        </div>
                        <img alt="Map" class="absolute inset-0 w-full h-full object-cover opacity-30"
                             src="https://lh3.googleusercontent.com/aida-public/AB6AXuDgucSBNm0qSEQc55-kNgxiECorzuQaVinq5kSSuc2P7cDzGUv0KOJXNkgI_f0cY_Tu4MIx9EtWWe0gIsmvwfmTSV-FBSjwF79nmAbvd6vdWClzEoN4HCyC1VpvpRua-fH3-AJkFmJK4b3Le7rRvUzHA7I5AUcYW1l75hAuAHLVzjQcLACCmmFzvAWSUqw6_H6JQadRoUijv3d2JeSY7GF5b5_uCq6GlY9oJ8CihHS9TeKz1ZhrRsCEsUwP1cgSxr9xO5IBkwWLPN1T"/>
                    </div>
                </div>
                <div class="flex gap-4">
                    <?php
                    $sosmed_icons = [
                        'https://lh3.googleusercontent.com/aida-public/AB6AXuD2r-cQVSQDm7d1ehUsyvvFf3H_TEJi4TJKiQbHCqrSCR5om9pHmGOYyUpFs2C43pyfNqd3ihxvqM4BbYGjB40GgdA3g25SgaHsjNKECuIUnllEoc8f0rp1pmBgIyCIUwGkOlopJplVQ4SR-wCTaopnWiKR3cLs7AAt-eoPhL0FxuE3pt81NCPAH2TJ5DdP1hOWo42nATdAkm5C752ze4mD0Er-m8g9x95oUO065TLlafR8TaN6CvrXbwiRXGgsEXX5tzV9IaxOPcH5',
                        'https://lh3.googleusercontent.com/aida-public/AB6AXuAvjNw757WQJ88SjxZxET3PAVLr22yseQUsaOqo-5FJofChObIDq8z9GbBLg1ficiqE6i09LIL_X6O4lTjEjtp2JfvNfW2Uksb-ry09c7xb_j_9PAbbKswe9ZLU771L6HS0Zyox1jgVUCUQuSrkyZSLC_IKROsqix9gJm2TcpbGk4AAD5Xe0rfrwrI_7SDp0D_69IgnENeHZqrrQvIoJXIRI1j-22CYi3wwiBGCFf0WSAaIK3rkD-eUcf1RMjWWPrHMSKKkFs-j085W',
                        'https://lh3.googleusercontent.com/aida-public/AB6AXuDL57Dl2do5RkQ_q5PeSPsGxLfRkPujo91dMD2jlOsQCjQVuPLNJAAtsixpeOtLQaOl4_3lcn5SWcVI1EIuk5jF2eSY8OdH6Ns7RjAOG-nRmy6n5eD2dxYt2FkF_bcxYuBoO-d09hOrSR5FecedUn9BgWYlC8xr6E6-HPvN4J_x9Z7u_oubvtsmjQWPckJggmeF_amhx2K8BGy9vdLn4E5ytAGjSOmqpQjcwfdAQ9Sq7fP8w1knJMbt1FlWq69z10n_zROFC0NwLDvj',
                        'https://lh3.googleusercontent.com/aida-public/AB6AXuCwb6YcZooteoW5Qududu0A1IiebtYbgeS67CZk8i4AeXcA6S9vkHaq0sO7Z9WxkFcMYnwffnKW7_aEBwlxM3ZyMIprO5huU7ypUgwaHk0LFjz31-KV3nhn0nsbmdxfF34t9kFZBUDOgWzwy5TJvc6GaEw6WPUl7bYXf5FT4sdeJ_E3SPAGkHlGnYJ8AuvTuxRRa4plRmhercB_zSzhYtUTB9ib1t-WlDrGHmx8Bo3DRrR00uh5i3zwITEvJ-vNKw_xa5t2yitukVs6',
                    ];
                    foreach ($sosmed_icons as $icon_url): ?>
                    <a class="w-10 h-10 bg-white/5 hover:bg-white/10 rounded-full flex items-center justify-center transition-colors" href="#">
                        <img class="w-5 h-5 opacity-70" src="<?php echo $icon_url; ?>"/>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>

    <!-- Copyright Bar -->
    <div class="border-t border-white/10 py-8 w-full px-6 md:px-12 lg:px-20">
        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-xs opacity-60">&copy; <?php echo date('Y'); ?> Pemerintah Kabupaten Kubu Raya. Hak Cipta Dilindungi Undang-Undang.</p>
            <div class="flex gap-6">
                <a class="text-xs opacity-60 hover:opacity-100" href="#">Kebijakan Privasi</a>
                <a class="text-xs opacity-60 hover:opacity-100" href="#">Syarat &amp; Ketentuan</a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>