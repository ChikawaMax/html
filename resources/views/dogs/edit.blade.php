<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>編集</h1>

    <form action="{{route('dogs.update',$dog->id)}}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label>名前：
                <input type="text" name="name" value="{{old('name',$dog->name)}}" required />
            </label>
            @error('name')
                <p style="color: red">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label>犬種：
                <input type="text" name="type" value="{{old('type',$dog->type)}}" required />
            </label>
            @error('type')
                <p style="color: red">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label>年齢：
                <input type="number" name="age" value="{{old('age',$dog->age)}}" required />
            </label>
            @error('age')
                <p style="color: red">{{$message}}</p>
            @enderror
        </div>
        <input type="submit" value="編集" />
    </form>

    <a href="/dogs">戻る</a>
</body>
</html>