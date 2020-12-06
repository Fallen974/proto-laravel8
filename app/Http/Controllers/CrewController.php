<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use Illuminate\Http\Request;

class CrewController extends Controller
{
    public function getdb()
    {
        $crewdata = Crew::orderBy('id', 'asc')->paginate(10)->setPath('/backend/crew');
        return view('pages.home',compact('crewdata'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crewdata = Crew::orderBy('id', 'asc')->paginate(10)->setPath('/backend/crew');
        return view('pages.crew.crew',compact('crewdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.crew.create');
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
            'crewFirstName' => 'required',
            'crewLastName' => 'required',
            'crewJob' => 'required',
            'crewPicture' => 'required',
        ]);

            $imageStored = $request->file('crewPicture');
            $picName = rand() .'.'.$imageStored->getClientOriginalExtension();
            $imageStored->move(public_path('images'),$picName);

            $data_form = array(
                'crewFirstName' => $request->crewFirstName,
                'crewLastName' => $request->crewLastName,
                'crewJob' => $request->crewJob,
                'crewPicture' => $picName,
            );

        Crew::create($data_form);
        return redirect()->back()->with('success','Membre ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crewdata = Crew::find($id);
        return view('pages.crew.crew',compact('crewdata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crewdata = Crew::find($id);
        return view('pages.crew.edit', compact('crewdata'));
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
            'crewFirstName' => 'required',
            'crewLastName' => 'required',
            'crewJob' => 'required',
            'crewPicture' => 'required',
        ]);

        $imageStored = $request->file('crewPicture');
        $picName = rand() .'.'.$imageStored->getClientOriginalExtension();
        $imageStored->move(public_path('images'),$picName);

        $data_form = array(
            'crewFirstName' => $request->crewFirstName,
            'crewLastName' => $request->crewLastName,
            'crewJob' => $request->crewJob,
            'crewPicture' => $picName,
        );


        Crew::where('id',$id)->update($data_form);
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
        Crew::where('id',$id)->delete();
        return redirect()->back()->with('success','Suppression reussie');
    }
}
