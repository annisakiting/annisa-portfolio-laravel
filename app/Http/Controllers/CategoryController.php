<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    // 1. Menampilkan daftar kategori
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.categories.index', compact('categories'));
    }

    // 2. Menampilkan form tambah kategori
    public function create()
    {
        return view('admin.categories.create');
    }

    // 3. Menyimpan kategori baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        DB::transaction(function () use ($request) {
            $iconPath = $request->file('icon')->store('categories', 'public');
            
            Category::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'icon' => $iconPath,
            ]);
        });

        return redirect()->route('admin.categories.index')->with('success', 'Kategori berhasil ditambahkan!');
    }

    // 4. Menampilkan form edit kategori
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    // 5. Menyimpan perubahan kategori (Update)
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        DB::transaction(function () use ($request, $category) {
            if ($request->hasFile('icon')) {
                // Hapus icon lama sebelum ganti baru
                Storage::disk('public')->delete($category->icon);
                $category->icon = $request->file('icon')->store('categories', 'public');
            }

            $category->name = $request->name;
            $category->slug = Str::slug($request->name);
            $category->save();
        });

        return redirect()->route('admin.categories.index')->with('success', 'Kategori berhasil diperbarui!');
    }

    // 6. Menghapus kategori
    public function destroy(Category $category)
    {
        DB::transaction(function () use ($category) {
            Storage::disk('public')->delete($category->icon);
            $category->delete();
        });

        return redirect()->route('admin.categories.index')->with('success', 'Kategori berhasil dihapus!');
    }
}