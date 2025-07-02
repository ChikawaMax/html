<!DOCTYPE html>
<html>
<head><title>本の編集</title></head>
<body>
    <h1>本の編集</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>タイトル:
            <input type="text" name="title" value="{{ old('title', $book->title) }}" required>
            @error('title')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </label><br>

        <label>著者:
            <input type="text" name="author" value="{{ old('author', $book->author) }}" required>
            @error('author')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </label><br>

        <label>説明:
            <textarea name="description">{{ old('description', $book->description) }}</textarea>
            @error('description')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </label><br>

        <button type="submit">保存</button>
    </form>
</body>
</html>
