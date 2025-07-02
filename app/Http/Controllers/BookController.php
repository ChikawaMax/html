<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all(); //DBから全件取得
        return view('books.index', compact('books')); //bladeに全件渡す
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(StoreBookRequest $request)
    {
        //DBに保存
        Book::create($request->only(['title', 'author', 'description']));
        //一覧画面に移動 + 完了メッセージ表示
        return redirect()->route('books.index')->with('success', '本を登録しました。');
    }

    public function edit(Book $book)
    {
        //bookを引数にして、編集画面を表示
        return view('books.edit', compact('book'));
    }

    public function update(StoreBookRequest $request, Book $book)
    {
        //DBに保存
        $book->update($request->only(['title', 'author', 'description']));
        //一覧画面に移動 + 完了メッセージ表示
        return redirect()->route('books.index')->with('success', '本を更新しました。');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', '本を削除しました。');
    }
}
