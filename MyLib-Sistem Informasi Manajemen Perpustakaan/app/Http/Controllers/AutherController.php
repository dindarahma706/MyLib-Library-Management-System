<?php

namespace App\Http\Controllers;

use App\Models\auther;
use App\Http\Requests\StoreautherRequest;
use App\Http\Requests\UpdateautherRequest;

class AutherController extends Controller
{
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auther.index', [
            'authors' => auther::Paginate(5)
        ]);
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auther.create');
    }

    /**
     *
     * @param  \App\Http\Requests\StoreautherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreautherRequest $request)
    {
        auther::create($request->validated());

        return redirect()->route('authors');
    }
    /**
     *
     * @param  \App\Models\auther  $auther
     * @return \Illuminate\Http\Response
     */
    public function edit(auther $auther)
    {
        return view('auther.edit', [
            'auther' => $auther
        ]);
    }

    /**
     *
     * @param  \App\Http\Requests\UpdateautherRequest  $request
     * @param  \App\Models\auther  $auther
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateautherRequest $request, $id)
    {
        $auther = auther::find($id);
        $auther->name = $request->name;
        $auther->save();

        return redirect()->route('authors');
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        auther::findorfail($id)->delete();
        return redirect()->route('authors');
    }
}
