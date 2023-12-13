<?php

namespace App\Http\Controllers;

//import Model "post"
use App\Models\aulia;
use Illuminate\Contracts\View\View as ViewView;
//return type view
use Illuminate\view\view;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;
//import DB
use Illuminate\Support\Facades\DB;

//import facade "storage"
use Illuminate\Support\Facades\Storage;

class inkacontroller extends Controller
{
    public function index(): View
    {
        //get aulia
        $aulias = aulia::latest()->paginate(5);

        //render view wirh posts
        return view('aulias.index', compact('aulias'));
    }
    public function tampil(): View
    {
        //get aulia
        $aulias = aulia::latest()->paginate(5);

        //render view wirh posts
        return view('tampil', compact('aulias'));
    }
    

    public function show(string $id): view
    {
        //get aulia by id
        $aulias = aulia::FindOrFail($id);

        //render view with post
        return view('aulias.show', compact('aulias'));
    }
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $aulias = aulia::findOrFail($id);

        //delete image
        Storage::delete('public/aulias/'.$aulias->image);

        //delete post
        $aulias->delete();

        //redirect to index
        return redirect()->route('aulias.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
    public function edit(string $id): View
    {
        //get post by ID
        $aulias = aulia::findOrFail($id);

        //render view with post
        return view('aulias.edit', compact('aulias'));
    }
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        //get aulia by ID
        $aulias = aulia::findOrFail($id);

        //check if image is uploaded
        if($request->hasfile('image')){

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/aulias', $image->hashName());

            //upload old image
            Storage::delete('public/aulias', $image->hashName());

            //update  aulia with new image
            $aulias->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content
            ]);

        }else {
            
            //update aulia without image
            $aulias->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        }

        //redirect to index
        return redirect()->route('aulias.index')->with(['success' => 'Data Berhasil Diubah !']);
    }
    public function create(): View
    {
        return view('aulias.create');
    }
    
    public function search (Request $request)
    {
        $search = $request->search;
        $aulias = DB::table('aulias')
        ->where('title','like', "%" .$search."%")
        ->paginate();
        return view('tampil', compact('aulias'));
    }
    public function store (Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request,[
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/aulias', $image->hashName());

        //create post
        aulia::create([
            'image'     =>$image->hashName(),
            'title'     =>$request->title,
            'content'   =>$request->content
        ]);

        //redirect to index
        return redirect()->route('aulias.index')->with(['success' => 'Data Berhasil Disimpan']);
    }
}
