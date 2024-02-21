<?php

namespace App\Http\Controllers\Scheduling;

use App\Http\Controllers\Controller;
use App\Http\Requests\Scheduling\EventRequest;
use App\Models\Categories\Category;
use App\Models\Scheduling\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        $events     = Event::orderBy('created_at')->with('categories')->get();
        $event      = new Event();
        return view('auth.scheduling.events.index', [
            'events'     => $events,
            'event'      => $event,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        $event = Event::create(
            $request->except('category_id')
                + ['code' => uniqueCode()]
                + ['slug' => generateUrl($request->name)]
        );

        $event->countries()->attach($request->category_id);

        return response()->json(
            [
                'success' => __('Data stored successfuly')
            ],
            200
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
