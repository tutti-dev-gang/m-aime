<?php

namespace App\Http\Controllers\Parameters;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    Interest,
};

class InterestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $interests = Interest::all();
        return Inertia::render('Interests/Index', [
            'auth' => [
                'user' => Auth::user(),
                'type' => Auth::user()->type,
            ],
            'interests' => $interests,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){        
        return Inertia::render('Interests/Create', [
            'auth' => [
                'user' => Auth::user(),
                'type' => Auth::user()->type,
            ],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
            $request->validate([
                'name' => 'required|string|max:255',
            ]);
    
            Interest::create([
                'name' => $request->name,
            ]);
    
            return redirect()->route('interests.index')->with('success', 'Interest created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function show(Interest $interest){
        return Inertia::render('Interests/Show', [
            'auth' => [
                'user' => Auth::user(),
                'type' => Auth::user()->type,
            ],
            'interest' => $interest,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function edit(Interest $interest){
        return Inertia::render('Interests/Edit', [
            'auth' => [
                'user' => Auth::user(),
                'type' => Auth::user()->type,
            ],
            'interest' => $interest,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Interest $interest){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $interest->update([
            'name' => $request->name,
        ]);

        return redirect()->route('interests.index')->with('success', 'Interest updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interest $interest){
        $interest->delete();
        return redirect()->route('interests.index')->with('success', 'Interest deleted.');
    }
}
