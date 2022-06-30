<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function list() {
        return "tasks";
    }
    public function create() {
        return "New task";
    }
    public function get($id) {
        return "Task ${id}";
    }
    public function update($id) {
        return "Updated ${id}";
    }
    public function delete($id) {
        return "Removed ${id}";
    }
}
