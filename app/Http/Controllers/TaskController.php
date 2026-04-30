<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index($project)
    {
        return "tasks for project " . $project;
    }
}