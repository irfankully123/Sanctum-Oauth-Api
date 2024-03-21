<?php

namespace App\Http\Controllers\Api\V1;


use App\Models\Todo;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use App\Http\Resources\Api\V1\TodoResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;



class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): AnonymousResourceCollection
    {
        return TodoResource::collection(Todo::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostTodoRequest $request): TodoResource
    {
        $todo = Todo::create($request->validated());
        return new TodoResource($todo);
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo): TodoResource
    {
        return new TodoResource($todo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTodoRequest $request, Todo $todo): TodoResource
    {
        $todo->update($request->validated());

        return new TodoResource($todo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
    }
}
