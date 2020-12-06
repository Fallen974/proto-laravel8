<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function getdb()
    {
        $data = Services::orderBy('id', 'asc')->paginate(10)->setPath('/backend/services');
        return view('pages.home',compact('data'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Services::orderBy('id', 'asc')->paginate(10)->setPath('/backend/services');
        return view('pages.services.services',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.services.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'serviceName' => 'required',
            'serviceSubname' => 'required',
            'serviceLink' => 'required'
        ]);

        Services::create($request->all());
        return redirect()->back()->with('success','Service ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Services::find($id);
        return view('pages.services.services',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Services::find($id);
        return view('pages.services.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'serviceName' => 'required',
            'serviceSubname' => 'required',
            'serviceLink' => 'required',
        ]);


        Services::where('id',$id)->update(request()->except(['_token']));
        return redirect()->back()->with('success','Modification effectuée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Services::where('id',$id)->delete();
        return redirect()->back()->with('success','Suppression reussie');
    }
}
