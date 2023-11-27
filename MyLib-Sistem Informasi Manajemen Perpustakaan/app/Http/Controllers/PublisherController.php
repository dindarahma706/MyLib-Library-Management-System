<?php

namespace App\Http\Controllers;

use App\Models\publisher;
use App\Http\Requests\StorepublisherRequest;
use App\Http\Requests\UpdatepublisherRequest;

class PublisherController extends Controller
{
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('publisher.index', [
            'publishers' => publisher::Paginate(5)
        ]);
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publisher.create');
    }

    /**
     *
     * @param  \App\Http\Requests\StorepublisherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepublisherRequest $request)
    {
        publisher::create($request->validated());
        return redirect()->route('publishers');
    }

    /**
     *
     * @param  \App\Models\publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function edit(publisher $publisher)
    {
        return view('publisher.edit', [
            'publisher' => $publisher
        ]);
    }

    /**
     *
     * @param  \App\Http\Requests\UpdatepublisherRequest  $request
     * @param  \App\Models\publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepublisherRequest $request, $id)
    {
        $publisher = publisher::find($id);
        $publisher->name = $request->name;
        $publisher->save();

        return redirect()->route('publishers');
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        publisher::find($id)->delete();
        return redirect()->route('publishers');
    }
}
