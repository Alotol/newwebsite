<?php

namespace App\Http\Controllers;

use App\Models\Coures;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $count = 5 ;
        if(request()->has('item_count')){
            $count = request()->item_count;
        }
        $courses = Coures::orderBy('id','desc')->paginate($count);

        if(request()->has('name')){
            $courses = Coures::orderBy('id','desc')->where('name','like', '%'.request()->name.'%')->paginate($count);
        }






// dd($courses);
      return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:20',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:png,jpg,png,jpeg,gif,svg',
            'descrption' => 'required|max:400'
        ]);

        $ex = $request->file('image')->getClientOriginalExtension();
        $imagename = 'course_'.time().rand().'.'.$ex ;
        $request->file('image')->move(public_path('uploads/image'), $imagename);

        // dd($request->all());

        Coures::create([
            'name' =>  $request->name,
            'price' => $request->price,
            'image' => $imagename,
            'descrption' => $request->descrption,
        ]);

        return redirect()->route('courses.index')->with('mag' , 'Course Added Successfully')->with('type','success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $courses = Coures::find($id);
        $courses = Coures::findOrFail($id);
        // dd($courses);
        return view('courses.edit',compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:20',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:png,jpg,png,jpeg,gif,svg',
            'descrption' => 'required|max:400'
        ]);

        $ss = array();
        if( $request->hasFile('name')){
            $ss['name'] = $request->name;
        }
        if( $request->hasFile('price')){
            $ss['price'] = $request->price;
        }
        if( $request->hasFile('descrption')){
            $ss['descrption'] = $request->descrption;
        }


            // $courses = Coures::find($id);
            // $imagename = $courses->image;

// dd($courses);
        if( $request->hasFile('image')){
            $ex = $request->file('image')->getClientOriginalExtension();
            $imagename = 'course_'.time().rand().'.'.$ex ;
            $request->file('image')->move(public_path('uploads/image'), $imagename);
            $ss['image'] = $imagename;
        }


        // dd($request->all());

        Coures::find($id)->update($ss);

        return redirect()->route('courses.index')->with('mag' , 'Course Added Successfully')->with('type','success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Coures::destroy($id);
        return redirect()->route('courses.index')->with('mag' , 'Course Delete Successfully')->with('type','danger');

    }
}
