<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm phim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Thêm phim mới</h2>
        <a href="{{ route('movies.index') }}" class="btn btn-secondary mb-3">Quay lại</a>

        <form action="{{ route('movies.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Tiêu đề phim</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">URL video</label>
                <input type="text" name="video_url" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Thể loại</label>
                <input type="text" name="category" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Năm phát hành</label>
                <input type="number" name="release_year" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Thêm phim</button>
        </form>
    </div>
</body>
</html>
