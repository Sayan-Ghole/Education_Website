<?php

namespace App\Http\Controllers;

use App\Models\TopicAdmin;
use Illuminate\Http\Request;

class TopicAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topic = TopicAdmin::get();
        return view('admin/topics/topic_show',compact('topic'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin/topics/topic_create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // print_r($request->all());
        // $top = new TopicAdmin;
        // $top -> course_id= $request->courseId;
        // $top -> title= $request->topicName;
        // $top -> description= $request->topicDescription;

        // $top->save();

        $request->validate([
            'courseId'=>'required',
            'topicName'=>'required',
            'topicDescription'=>'required',
        ]);

        TopicAdmin::create([
            "course_id"=> $request->courseId,
            "title"=> $request->topicName,
            "description"=>  $request->topicDescription,

        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $TopicAdmin = TopicAdmin::find($id);
        return view('admin/topics/showTopic_data', compact('TopicAdmin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit = TopicAdmin::find($id);

        return view('admin/topics/editTopic_data', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $object = TopicAdmin::find($id);

        $object -> course_id= $request->courseId;
        $object -> title= $request->topicName;
        $object -> description	= $request->topicDescription	;
        $object->update();

            return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $object = TopicAdmin::find($id);
        $object->delete();
        return redirect()->back();
    }
}
