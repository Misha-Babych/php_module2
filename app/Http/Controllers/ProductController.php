<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Логіка для відображення списку товарів
    }

    public function filter(Request $request)
    {
        // Логіка для фільтрації товарів
    }

    public function confirmDelete($id)
    {
        // Логіка для підтвердження вилучення товару
    }

    public function delete($id)
    {
        // Логіка для вилучення товару
    }
}
