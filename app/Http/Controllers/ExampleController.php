<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Contract\Database;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->example = 'example';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $example = $this->database->getReference($this->example)->getValue();
        return view('example.index', compact('example'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('example.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ref_example = "example";
        $postData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ];
        $postRef = $this->database->getReference($this->example)->push($postData);

        if ($postRef) {
            return redirect('example/index')->with('status', 'Create new successfully');
        } else {
            return redirect('example/index')->with('status', 'Create new fail');
        }
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
        $editData = $this->database->getReference($this->example)->getChild($id)->getValue();
        return view('example.edit', compact('editData','id'));
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
        $updateData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ];
        $this->database->getReference($this->example . '/'. $id)->update($updateData);
        return redirect('example/index')->with('status', 'Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->database->getReference($this->example . '/'. $id)->remove();
        return redirect('example/index')->with('status', 'Delete successfully');
    }
}