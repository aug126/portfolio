<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AboutValidate;
use App\About;

class AdminAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view('admin/about/about-index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.about-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutValidate $request)
    {
        $about = new About;
        $about->title = $request->title;
        $about->text = $request->text;
        $about->icon = $request->icon;
        $about->save();
        return redirect(route('about.index'))->with('success', 'Un nouvel élément a bien été créé.');
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
        $about = About::find($id);
        return view('admin/about/about-edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AboutValidate $request, $id)
    {
        $about = About::find($id);
        $about->icon = $request->icon;
        $about->title = $request->title;
        $about->text = $request->text;
        $about->save();
        return redirect(route('about.index'))->with('success', "L'élément a bien été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        About::find($id)->delete();
        return redirect(route('about.index'))->with('success', "L'élément a bien été supprimé");
    }

    public function apiToGet(Request $request) {
        if ($request->toGet == 'actual')
        {
            return About::all();
        }
        else if ($request->toGet == 'trash')
        {
            
        }
        else if ($request->toGet == 'all')
        {

        }
        return ($request->toGet);
    }
}
