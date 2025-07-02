<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDogRequest;
use App\Models\Dog;
use Illuminate\Http\Request;

class DogController extends Controller
{
    public function index()
    {
        $dogs = Dog::all();
        return view('dogs.index', compact('dogs'));
    }
    public function create()
    {
        return view('dogs.create');
    }
    public function store(StoreDogRequest $request)
    {
        Dog::create($request->only('name', 'type', 'age'));
        return redirect()->route('dogs.index')->with('success', 'ワンちゃんの情報を登録しました。');
    }

    public function edit(Dog $dog)
    {
        return view('dogs.edit', compact('dog'));
    }

    public function update(StoreDogRequest $request, Dog $dog)
    {
        $dog->update($request->only('name', 'type', 'age'));
        return redirect()->route('dogs.index')->with('success', 'ワンちゃんの情報を更新しました。');
    }

    public function destroy(Dog $dog)
    {
        $dog->delete();
        return redirect()->route('dogs.index')->with('success', 'ワンちゃん情報を削除しました。');
    }
}
