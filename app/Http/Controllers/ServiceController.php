<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    // LIST
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.services.index', compact('services'));
    }

    // CREATE PAGE
    public function create()
    {
        if(auth()->user()->role !== 'admin'){
            abort(403);
        }

        return view('admin.services.create');
    }

    // STORE
    public function store(Request $request)
    {
        if(auth()->user()->role !== 'admin'){
            abort(403);
        }

        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image'
        ]);

        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;

        if($request->hasFile('image')){
            $service->image = $request->file('image')->store('services', 'public');
        }

        $service->save();

        return redirect()->route('admin.services.index')->with('success','Service created');
    }

    // EDIT
    public function edit($id)
    {
        if(!in_array(auth()->user()->role, ['admin','editor'])){
            abort(403);
        }

        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        if(!in_array(auth()->user()->role, ['admin','editor'])){
            abort(403);
        }

        $service = Service::findOrFail($id);

        $service->title = $request->title;
        $service->slug = Str::slug($request->title);
        $service->description = $request->description;
        $service->excerpt = $request->excerpt;
        $service->meta_title = $request->meta_title;
        $service->meta_description = $request->meta_description;
        $service->meta_keywords = $request->meta_keywords;

        if(auth()->user()->role === 'admin' && $request->hasFile('image')){
            $service->image = $request->file('image')->store('services', 'public');
        }

        $service->save();

        return redirect()->route('admin.services.index')->with('success','Service updated');
    }

    // DELETE
    public function destroy($id)
    {
        if(auth()->user()->role !== 'admin'){
            abort(403);
        }

        Service::findOrFail($id)->delete();

        return back()->with('success','Service deleted');
    }
}