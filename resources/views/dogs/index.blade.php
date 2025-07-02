<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>一覧</h1>
    <a href="{{route('dogs.create')}}">新規作成</a>
    <ul>
        @foreach($dogs as $dog)
            <li>
                {{$dog->name}}ちゃんは{{$dog->age}}歳の{{$dog->type}}です。
                <a href="{{route('dogs.edit',$dog->id)}}">編集</a>
                <form action="{{route('dogs.destroy',$dog->id)}}" method="post" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('本当に削除しますか？')">削除</button>
                </form>
            </li>
        @endforeach
    </ul>
    @if (session('success'))
        <p style="color:green">{{session('success')}}</p>
    @endif
</body>
</html>