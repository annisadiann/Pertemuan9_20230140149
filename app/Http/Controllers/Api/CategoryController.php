<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    // GET /api/category
    public function index()
    {
        try {
            $categories = Category::all();
            return response()->json([
                'message' => 'Categories retrieved successfully',
                'data' => $categories
            ], 200);
        } catch (\Throwable $e) {
            Log::error('Gagal mengambil data category', ['message' => $e->getMessage()]);
        }
    }

    // POST /api/category
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
            ]);

            $category = Category::create($validated);

            return response()->json([
                'message' => 'Category berhasil ditambahkan!',
                'data' => $category
            ], 201);
        } catch (\Throwable $e) {
            Log::error('Gagal menambah category', ['message' => $e->getMessage()]);
        }
    }

    // GET /api/category/{id}
    public function show(int $id)
    {
        try {
            $category = Category::find($id);

            if (!$category) {
                return response()->json(['message' => 'Category tidak ditemukan'], 404);
            }

            return response()->json([
                'message' => 'Category retrieved successfully',
                'data' => $category
            ], 200);
        } catch (\Throwable $e) {
            Log::error('Gagal mengambil data category', ['message' => $e->getMessage()]);
        }
    }

    // PUT /api/category/{id}
    public function update(Request $request, int $id)
    {
        try {
            $category = Category::find($id);

            if (!$category) {
                return response()->json(['message' => 'Category tidak ditemukan'], 404);
            }

            $validated = $request->validate([
                'name' => 'required|string|max:255',
            ]);

            $category->update($validated);

            return response()->json([
                'message' => 'Category berhasil diupdate!',
                'data' => $category
            ], 200);
        } catch (\Throwable $e) {
            Log::error('Gagal update category', ['message' => $e->getMessage()]);
        }
    }

    // DELETE /api/category/{id}
    public function destroy(int $id)
    {
        try {
            $category = Category::find($id);

            if (!$category) {
                return response()->json(['message' => 'Category tidak ditemukan'], 404);
            }

            $category->delete();

            return response()->json([
                'message' => 'Category berhasil dihapus!'
            ], 204);
        } catch (\Throwable $e) {
            Log::error('Gagal hapus category', ['message' => $e->getMessage()]);
        }
    }
}