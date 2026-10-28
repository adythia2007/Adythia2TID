<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adythia — Portfolio & Developer CV</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bg-main: #0b0f19;
            --bg-card: rgba(22, 31, 49, 0.75);
            --accent-cyan: #00f2fe;
            --accent-blue: #4facfe;
            --text-muted: #94a3b8;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-main);
            color: #f1f5f9;
            min-height: 100vh;
        }

        /* Ambient Glow Background Effect */
        .glow-bg {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: -1;
            overflow: hidden;
            pointer-events: none;
        }
        .glow-1 {
            position: absolute; top: -10%; left: 15%;
            width: 450px; height: 450px;
            background: radial-gradient(circle, rgba(0, 242, 254, 0.12) 0%, rgba(0, 0, 0, 0) 70%);
            filter: blur(90px);
        }
        .glow-2 {
            position: absolute; top: 45%; right: 10%;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(79, 172, 254, 0.1) 0%, rgba(0, 0, 0, 0) 70%);
            filter: blur(100px);
        }

        /* Glassmorphism Navbar */
        .navbar-glass {
            background: rgba(11, 15, 25, 0.85);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, var(--accent-cyan), var(--accent-blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Hero Profile Box */
        .hero-avatar {
            width: 110px; height: 110px;
            border-radius: 50%;
            border: 2px solid var(--accent-cyan);
            box-shadow: 0 0 25px rgba(0, 242, 254, 0.3);
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(0, 242, 254, 0.1);
            border: 1px solid rgba(0, 242, 254, 0.3);
            color: var(--accent-cyan);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .pulse-dot {
            width: 8px; height: 8px;
            background-color: var(--accent-cyan);
            border-radius: 50%;
            box-shadow: 0 0 10px var(--accent-cyan);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(0.95); opacity: 0.7; }
            50% { transform: scale(1.3); opacity: 1; }
            100% { transform: scale(0.95); opacity: 0.7; }
        }

        /* Glass Cards */
        .glass-card {
            background: var(--bg-card);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
        }
        .glass-card:hover {
            transform: translateY(-8px);
            border-color: rgba(0, 242, 254, 0.4);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6), 0 0 25px rgba(0, 242, 254, 0.15);
        }

        .img-container {
            position: relative;
            overflow: hidden;
            height: 210px;
            background: #151d2a;
        }
        .img-container img {
            width: 100%; height: 100%; object-fit: cover;
            transition: transform 0.6s ease;
        }
        .glass-card:hover .img-container img {
            transform: scale(1.08);
        }

        .btn-gradient {
            background: linear-gradient(135deg, var(--accent-cyan), var(--accent-blue));
            color: #0b0f19;
            font-weight: 700;
            border: none;
            border-radius: 30px;
            padding: 10px 24px;
            transition: all 0.3s ease;
        }
        .btn-gradient:hover {
            box-shadow: 0 0 20px rgba(0, 242, 254, 0.5);
            color: #0b0f19;
            transform: translateY(-2px);
        }

        .btn-action-edit {
            background: rgba(255, 193, 7, 0.1);
            color: #ffc107;
            border: 1px solid rgba(255, 193, 7, 0.2);
            border-radius: 10px;
        }
        .btn-action-edit:hover {
            background: #ffc107; color: #000;
        }

        .btn-action-delete {
            background: rgba(248, 113, 113, 0.1);
            color: #f87171;
            border: 1px solid rgba(248, 113, 113, 0.2);
            border-radius: 10px;
        }
        .btn-action-delete:hover {
            background: #f87171; color: #fff;
        }

        .badge-tech {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #cbd5e1;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.8rem;
        }

        .social-link {
            width: 40px; height: 40px;
            display: inline-flex; align-items: center; justify-content: center;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-muted);
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .social-link:hover {
            background: var(--accent-cyan);
            color: #0b0f19;
            transform: translateY(-3px);
            box-shadow: 0 0 15px rgba(0, 242, 254, 0.4);
        }

        .footer-link {
            color: var(--text-muted);
            text-decoration: none;
            transition: color 0.2s ease;
        }
        .footer-link:hover {
            color: var(--accent-cyan);
        }
    </style>
</head>
<body>

    <!-- Glow Background -->
    <div class="glow-bg">
        <div class="glow-1"></div>
        <div class="glow-2"></div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-glass sticky-top py-3">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4 d-flex align-items-center gap-2" href="#">
                <i class="bi bi-terminal-fill gradient-text"></i>
                <span>Adythia<span class="gradient-text">.dev</span></span>
            </a>
            <a href="{{ route('fortofolio.create') }}" class="btn btn-gradient btn-sm d-flex align-items-center gap-2">
                <i class="bi bi-plus-lg fs-6"></i> Tambah Project Baru
            </a>
        </div>
    </nav>

    <!-- Header / Profile Section -->
    <header class="py-5 text-center">
        <div class="container">
            <div class="mb-4">
                <img src="https://ui-avatars.com/api/?name=Adythia&background=00f2fe&color=0b0f19&size=128&bold=true" class="hero-avatar" alt="Profile">
            </div>
            <div class="mb-3">
                <span class="status-badge"><span class="pulse-dot"></span> Available for Projects</span>
            </div>
            <h1 class="fw-extrabold display-4 mb-2">Portfolio & <span class="gradient-text">Showcase</span></h1>
            <p class="text-muted mx-auto" style="max-width: 550px; font-size: 1.05rem;">
                Kumpulan project web buatan saya. Menggunakan struktur CRUD dinamis dengan penyimpanan tabel <code>fortofolio_1010</code>.
            </p>

            <div class="d-flex justify-content-center gap-2 mt-4 flex-wrap">
                <span class="badge-tech"><i class="bi bi-filetype-php text-warning me-1"></i> PHP 8+</span>
                <span class="badge-tech"><i class="bi bi-layers-fill text-danger me-1"></i> Laravel</span>
                <span class="badge-tech"><i class="bi bi-database-fill text-info me-1"></i> MySQL 8.0</span>
                <span class="badge-tech"><i class="bi bi-bootstrap-fill text-primary me-1"></i> Bootstrap 5</span>
            </div>
        </div>
    </header>

    <!-- Project List / CRUD Grid -->
    <main class="container pb-4" id="projects">
        @if(session('success'))
            <div class="alert alert-success bg-dark border-success text-success alert-dismissible fade show rounded-4 mb-4 shadow-lg" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom border-secondary border-opacity-25">
            <div>
                <h4 class="fw-bold mb-0">Project Terdaftar</h4>
                <small class="text-muted">Total {{ $portofolios->count() }} item ditemukan</small>
            </div>
            <span class="badge bg-secondary bg-opacity-25 text-light px-3 py-2 rounded-pill font-monospace">
                Tabel: fortofolio_1010
            </span>
        </div>

        <div class="row g-4">
            @forelse ($portofolios as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="glass-card h-100 d-flex flex-column">
                        <div class="img-container">
                            @if($item->gambar)
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}">
                            @else
                                <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center text-muted">
                                    <i class="bi bi-image-fill fs-1 opacity-25 mb-1"></i>
                                    <span class="small opacity-50">No Image Preview</span>
                                </div>
                            @endif
                        </div>
                        <div class="p-4 d-flex flex-column flex-grow-1">
                            <h5 class="fw-bold text-white mb-2">{{ $item->judul }}</h5>
                            <p class="text-muted small flex-grow-1 lh-base" style="color: #94a3b8 !important;">
                                {{ Str::limit($item->deskripsi, 110) }}
                            </p>

                            @if($item->link)
                                <a href="{{ $item->link }}" target="_blank" class="btn btn-sm btn-outline-info rounded-pill w-100 mb-3 d-flex align-items-center justify-content-center gap-1">
                                    <span>Demo / Link Project</span> <i class="bi bi-arrow-up-right-short"></i>
                                </a>
                            @endif

                            <div class="pt-3 border-top border-secondary border-opacity-25 d-flex justify-content-between align-items-center mt-auto">
                                <span class="text-muted opacity-75" style="font-size: 0.75rem;">
                                    <i class="bi bi-calendar3 me-1"></i> {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                                </span>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('fortofolio.edit', $item->id) }}" class="btn btn-sm btn-action-edit px-3">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <form action="{{ route('fortofolio.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus project ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-action-delete px-2">
                                            <i class="bi bi-trash3-fill"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="glass-card text-center py-5 my-3">
                        <i class="bi bi-folder-x fs-1 text-muted opacity-25 mb-3 d-block"></i>
                        <h5 class="text-muted fw-normal">Belum ada data di tabel <code>fortofolio_1010</code>.</h5>
                        <p class="text-muted small">Klik tombol di bawah untuk memasukkan project pertama kamu.</p>
                        <a href="{{ route('fortofolio.create') }}" class="btn btn-gradient btn-sm mt-2">Tambah Project Sekarang</a>
                    </div>
                </div>
            @endforelse
        </div>
    </main>

    <!-- Call to Action Banner -->
    <section class="container my-5">
        <div class="glass-card p-5 text-center position-relative overflow-hidden">
            <div class="position-relative z-1">
                <h3 class="fw-bold mb-2 text-white">Ada Ide Project atau Tawaran Kolaborasi?</h3>
                <p class="text-muted mx-auto mb-4" style="max-width: 580px; font-size: 0.95rem;">
                    Saya selalu terbuka untuk diskusi mengenai pengembangan *full-stack web application*, pengerjaan tugas, maupun proyek *freelance*.
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="mailto:adythia@example.com" class="btn btn-gradient px-4">
                        <i class="bi bi-envelope-fill me-2"></i> Hubungi Saya
                    </a>
                    <a href="https://github.com/adythia2007/Adythia2TID" target="_blank" class="btn btn-outline-light rounded-pill px-4">
                        <i class="bi bi-github me-2"></i> Repository GitHub
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Rich 4-Column Footer -->
    <footer class="mt-5 border-top border-secondary border-opacity-25 pt-5 pb-4" style="background: rgba(11, 15, 25, 0.95);">
        <div class="container">
            <div class="row g-4 mb-5">
                <!-- Col 1: Brand & Profile -->
                <div class="col-lg-4 col-md-6">
                    <a class="navbar-brand fw-bold fs-4 d-flex align-items-center gap-2 mb-3" href="#">
                        <i class="bi bi-terminal-fill gradient-text"></i>
                        <span>Adythia<span class="gradient-text">.dev</span></span>
                    </a>
                    <p class="text-muted small lh-lg mb-4" style="color: #94a3b8 !important;">
                        Platform CV & Portofolio interaktif berbasis Laravel. Dibuat untuk memenuhi kriteria CRUD dinamis dengan integrasi database MySQL 8.0.
                    </p>
                    <div class="d-flex gap-2">
                        <a href="https://github.com/adythia2007" target="_blank" class="social-link" title="GitHub"><i class="bi bi-github"></i></a>
                        <a href="#" class="social-link" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-link" title="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="mailto:adythia@example.com" class="social-link" title="Email"><i class="bi bi-envelope-fill"></i></a>
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold text-white mb-3">Navigasi Hub</h6>
                    <ul class="list-unstyled small d-flex flex-column gap-2 mb-0">
                        <li><a href="#" class="footer-link"><i class="bi bi-chevron-right me-1 text-info small"></i> Beranda</a></li>
                        <li><a href="#projects" class="footer-link"><i class="bi bi-chevron-right me-1 text-info small"></i> Showcase Project</a></li>
                        <li><a href="{{ route('fortofolio.create') }}" class="footer-link"><i class="bi bi-chevron-right me-1 text-info small"></i> Tambah Data</a></li>
                    </ul>
                </div>

                <!-- Col 3: Database & Tech Stack Info -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="fw-bold text-white mb-3">Spesifikasi Sistem</h6>
                    <ul class="list-unstyled small d-flex flex-column gap-2 text-muted mb-0" style="color: #94a3b8 !important;">
                        <li><i class="bi bi-hdd-network text-info me-2"></i> Web Server: <strong>Laragon</strong></li>
                        <li><i class="bi bi-database text-warning me-2"></i> Database: <strong>adythia2tid</strong></li>
                        <li><i class="bi bi-table text-success me-2"></i> Schema: <strong>fortofolio_1010</strong></li>
                        <li><i class="bi bi-code-square text-primary me-2"></i> Framework: <strong>Laravel 10/11</strong></li>
                    </ul>
                </div>

                <!-- Col 4: Status Box -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="fw-bold text-white mb-3">Status Pengembang</h6>
                    <div class="p-3 glass-card rounded-3">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="pulse-dot"></span>
                            <strong class="small text-white">Sistem Aktif & Terhubung</strong>
                        </div>
                        <p class="text-muted mb-0" style="font-size: 0.8rem; color: #94a3b8 !important;">
                            Data portofolio terhubung langsung dengan MySQL Laragon dan penyimpanan media di folder public storage.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright & Back to Top -->
            <div class="pt-4 border-top border-secondary border-opacity-25 d-flex flex-column flex-sm-row justify-content-between align-items-center gap-3">
                <p class="text-muted small mb-0" style="color: #94a3b8 !important;">
                    &copy; {{ date('Y') }} Adythia Portofolio. Built with <i class="bi bi-heart-fill text-danger mx-1"></i> & Laravel.
                </p>
                <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill px-3 py-1 small text-light">
                    <i class="bi bi-arrow-up me-1"></i> Ke Atas
                </a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>