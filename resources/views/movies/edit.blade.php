<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa phim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Chỉnh sửa phim</h2>
        <a href="{{ route('movies.index') }}" class="btn btn-secondary mb-3">Quay lại</a>
        
        <form action="{{ route('movies.update', $movie->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Tiêu đề phim</label>
                <input type="text" name="title" class="form-control" value="{{ $movie->title }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Mô tả</label>
                <textarea name="description" class="form-control">{{ $movie->description }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Ảnh bìa (URL)</label>
                <input type="text" name="thumbnail" class="form-control" value="{{ $movie->thumbnail }}">
            </div>
            <div class="mb-3">
                <label class="form-label">URL video</label>
                <input type="text" name="video_url" class="form-control" value="{{ $movie->video_url }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Thể loại</label>
                <input type="text" name="category" class="form-control" value="{{ $movie->category }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Năm phát hành</label>
                <input type="number" name="release_year" class="form-control" value="{{ $movie->release_year }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
        </form>
    </div>
</body>
</html>
