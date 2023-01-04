<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public  function index(){
        return view('listings.index', [
            'listings' => Listing::latest()->
            filter(request(['tag', 'search']))->
            simplePaginate(6)
        ]);
    }

    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    public function create(){
        return view('listings.create');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'manufacturer' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('imgs', 'public');
        }

        Listing::create($formFields);

        return redirect('/');
    }

}
