<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class UserController extends Controller
{
    protected $task;

    public function __construct()
    {
        $this->task = new Crud(); 
    }

    public function index()
    {
        $res['tasks'] = $this->task->all();
        return view('components.index', $res); 
    }

    // Show Create Form
    public function create()
    {
        return view('components.create');
    }

    // Store new user
    public function store(Request $request)
    {
        $request->validate([
            'fristname' => 'required|string',
            'lastname' => 'required|string',
            'age' => 'required|integer',
        ]);

        $this->task->create($request->all());
        return redirect()->route('index')->with('message', 'User added successfully!');
    }

    // Show Edit Form
    public function edit($id)
    {
        $task = Crud::findOrFail($id);
        return view('components.edit', compact('task'));
    }

    // Update existing user
    public function update(Request $request, $id)
    {
        $request->validate([
            'fristname' => 'required|string',
            'lastname' => 'required|string',
            'age' => 'required|integer',
        ]);

        $task = Crud::findOrFail($id);
        $task->update($request->all());
        return redirect()->route('index')->with('message', 'User updated successfully!');
    }

    // Delete user
    public function delete($id)
    {
        $task = Crud::findOrFail($id);
        $task->delete();
        return redirect()->route('index')->with('message', 'User deleted successfully!');
    }
}
