<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container" style="max-width: 600px;">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Tambah Portofolio Baru</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('fortofolio.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Judul Project</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Upload Gambar (Bonus)</label>
                        <input type="file" name="gambar" class="form-control" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Link Project (Opsional)</label>
                        <input type="url" name="link" class="form-control" placeholder="https://...">
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('fortofolio.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>