<!DOCTYPE html>
<html>
<head><title>本を追加</title></head>
<body>
    <h1>本を追加</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label>タイトル: <input type="text" name="title" required>
            @error('title')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </label><br>
        <label>著者: <input type="text" name="author" required>
            @error('author')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </label><br>
        <label>説明: <textarea name="description"></textarea>
            @error('description')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </label><br>
        <button type="submit">保存</button>
    </form>
</body>
</html>
