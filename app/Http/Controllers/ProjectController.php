<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return "list of projects";
    }

    public function create()
    {
        return "create project page";
    }

    public function store(Request $request)
    {
        return "store new project";
    }

    public function show($id)
    {
        return "show project " . $id;
    }

    public function edit($id)
    {
        return "edit project " . $id;
    }

    public function update(Request $request, $id)
    {
        return "update project " . $id;
    }

    public function destroy($id)
    {
        return "delete project " . $id;
    }
}