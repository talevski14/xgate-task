<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ViewController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('due_date')) {
            $projects = Http::get("http://127.0.0.1:8001/api/projects?due_date=" . $request->due_date)->json();
        } else {
            $projects = Http::get("http://127.0.0.1:8001/api/projects")->json();
        }
        $categories = Http::get("http://127.0.0.1:8001/api/categories")->json();
        if ($request->has('status')) {
            $tasks = Http::get("http://127.0.0.1:8001/api/tasks?status=" . $request->status)->json();
        } else if ($request->has('category_id')) {
            $tasks = Http::get("http://127.0.0.1:8001/api/tasks?category_id=" . $request->category_id)->json();
        } else {
            $tasks = Http::get("http://127.0.0.1:8001/api/tasks")->json();
        }

        return view('dashboard', compact('projects', 'categories', 'tasks'));
    }

    public function create_category(Request $request)
    {
        return view("category");
    }

    public function create_project(Request $request)
    {
        return view("project");
    }

    public function create_task(Request $request)
    {
        $projects = Http::get("http://127.0.0.1:8001/api/projects")->json();
        $categories = Http::get("http://127.0.0.1:8001/api/categories")->json();

        return view("task", compact('projects', 'categories'));
    }
}
