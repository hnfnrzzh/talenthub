<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Post;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $totalNews = Post::count();
        $totalCategories = Kategori::count();
        $totalUsers = User::count();

        return view('admin.dashboard', compact('totalNews', 'totalCategories', 'totalUsers'));
    }

    public function manageNews()
    {
        // Logic untuk mengambil data berita
        return view('admin.news');
    }

    public function manageCategories()
    {
        // Logic untuk mengambil data kategori
        return view('admin.categories');
    }

    public function manageRegions()
    {
        // Logic untuk mengambil data kategori
        return view('admin.regions');
    }

    public function manageUsers()
    {
        return view('admin.users');
    }

    public function settings()
    {
        // Logic untuk mengambil data pengaturan
        return view('admin.settings');
    }
}