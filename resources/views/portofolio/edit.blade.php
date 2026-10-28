<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container" style="max-width: 600px;">
        <div class="card shadow-sm">
            <div class="card-header bg-warning">
                <h4 class="mb-0">Edit Portofolio</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('fortofolio.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Judul Project</label>
                        <input type="text" name="judul" class="form-control" value="{{ $item->judul }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="3" required>{{ $item->deskripsi }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ganti Gambar (Opsional)</label>
                        <input type="file" name="gambar" class="form-control" accept="image/*">
                        @if($item->gambar)
                            <small class="text-muted d-block mt-1">Gambar saat ini: {{ $item->gambar }}</small>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Link Project</label>
                        <input type="url" name="link" class="form-control" value="{{ $item->link }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('fortofolio.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>