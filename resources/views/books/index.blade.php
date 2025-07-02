<!DOCTYPE html>
<html>
<head><title>本一覧</title></head>
<body>
    <h1>本の一覧</h1>
    <a href="{{ route('books.create') }}">＋ 本を追加</a>
    <ul>
        @foreach ($books as $book)
            <li>
                {{ $book->title }} - {{ $book->author }}
                <a href="{{ route('books.edit', $book->id) }}">編集</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('本当に削除しますか？')">削除</button>
                </form>
            </li>
        @endforeach
    </ul>
    @if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

</body>
</html>
