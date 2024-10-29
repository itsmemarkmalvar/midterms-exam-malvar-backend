<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        try {
            $books = Book::all();
            return response()->json($books);
        } catch (\Exception $e) {
            \Log::error('Error fetching books: ' . $e->getMessage());
            \Log::error('Stack trace: ' . $e->getTraceAsString());
            return response()->json(['error' => 'Failed to fetch books: ' . $e->getMessage()], 500);
        }
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_year' => 'required|integer|min:1800|max:' . (date('Y') + 1),
            'genre' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        try {
            $book = Book::create($validated);
            return response()->json($book, 201);
        } catch (\Exception $e) {
            \Log::error('Error creating book: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to create book'], 500);
        }
    }

    public function show($id)
    {
        return response()->json(Book::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_year' => 'required|integer|min:1800|max:' . (date('Y') + 1),
            'genre' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        try {
            $book = Book::findOrFail($id);
            $book->update($validated);
            return response()->json($book);
        } catch (\Exception $e) {
            \Log::error('Error updating book: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to update book: ' . $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $book = Book::findOrFail($id);
            $book->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            \Log::error('Error deleting book: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to delete book'], 500);
        }
    }
} 