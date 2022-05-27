<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::paginate(2);
        return view('admin/about/index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/about/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $icon = $request->file('image');
        $nama_foto = time()."_".$icon->getClientOriginalName();
        $tujuan_upload = 'image_skill';
        $icon->move($tujuan_upload,$nama_foto);


        $item = Skill::create([
            'name' => $request->name,
            'icon' => $nama_foto,
            'level' => $request->level,
        ]);
        $item->save();


        // $createskill = Skill::create($request->all());
        // $createskill->save();
        return redirect('/skill');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = Skill::where('id', $id)->get();
        return view('admin.about.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Skill::where('id', $request->id)->update([
            'name' => $request->name,
            'level' => $request->level,
        ]);
        return redirect('/skill');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Skill::where('id', $id)->delete();
        return redirect()->back();
    }
}

    // public function update(Request $request, $id)
    // {
    //     $items = Item::findOrFail($id);
    //     $items->update([
    //         'name' => $request->name,
    //         'quantity' => $request->quantity,
    //     ]);

    //     return redirect('/');
    // }
