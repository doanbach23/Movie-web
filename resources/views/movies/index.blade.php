<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý phim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Danh sách phim</h2>
        <a href="{{ route('movies.create') }}" class="btn btn-success mb-3">Thêm phim</a>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Thể loại</th>
                    <th>Năm phát hành</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->id }}</td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->category }}</td>
                    <td>{{ $movie->release_year }}</td>
                    <td>
                        <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-primary btn-sm">Sửa</a>
                        <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
