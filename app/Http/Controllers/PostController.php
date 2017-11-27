<?php

namespace App\Http\Controllers;

use App\Devices;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $items = Devices::select('devices.*')->orderBy('id', 'desc')->get();
        return view('backend.pages.index',compact('items'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'mac' => 'required',
            'ip' => 'required',
            'lastdata' => 'required',
        ]);

        Devices::create($request->all());
        return redirect()->route('itemPost.index')
            ->with('success','Item created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Devices::find($id);
        return view('backend.pages.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Devices::find($id);
        return view('backend.pages.edit',compact('item'));
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
        $this->validate($request, [
            'mac' => 'required',
            'ip' => 'required',
            'lastdata' => 'required',
        ]);

        Devices::find($id)->update($request->all());
        return redirect()->route('itemPost.index')
            ->with('success','Başarılı bir şekilde güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Devices::find($id)->delete();
        return redirect()->route('itemPost.index')
            ->with('success','Başarılı bir şekilde silindi');
    }

}

