<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use App\Models\ModelBook;
use App\Models\User;

class BookController extends Controller
{
    private $objUser;
    private $objBook;

    public function __construct()
    {
        $this->objUser = new User();
        $this->objBook = new ModelBook();
    }

    public function index()
    {
        $book = $this->objBook->all();
        return view('index', compact('book'));
    }

    public function create()
    {
        $users = $this->objUser->all();
        return view('create', compact('users'));
    }

    public function store(BookRequest $request)
    {
        $cad = $this->objBook->create([
            'title' => $request->title,
            'pages' => $request->pages,
            'price' => $request->price,
            'id_user' => $request->id_user,
        ]);

        if ($cad) {
            return redirect('books');
        }
    }

    public function show(string $id)
    {
        $book = $this->objBook->find($id);

        if (!$book) {
            return response()->view('errors.404', [], 404);
        }

        return view('show', compact('book'));
    }

    public function edit(string $id)
    {
        $book = $this->objBook->find($id);
        $users = $this->objUser->all();
        return view('create', compact('book', 'users'));
    }

    public function update(BookRequest $request, string $id)
    {
        $book = $this->objBook->find($id);

        if (!$book) {
            return response()->view('errors.404', [], 404);
        }

        $update = $this->objBook->where(['id' => $id])->update([
            'title' => $request->title,
            'pages' => $request->pages,
            'price' => $request->price,
            'id_user' => $request->id_user,
        ]);

        if ($update) {
            return redirect('books');
        } else {
            return redirect()->route('books.edit', $id)->with('error', 'Failed to update the book');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
