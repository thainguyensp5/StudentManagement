<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $students = Student::all();
        // return view('student', ['students'=>$students, 'layout'=>'index'],);

            $students = DB::table('students')->paginate(5);
            return view('student', ['students'=>$students,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = DB::table('students')->paginate(5);
        return view('student', ['students'=>$students,'layout'=>'create']);
        
        // $students = Student::all();
        // return view('student', ['students'=>$students, 'layout'=>'create']);
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $image = $request->file('image');
        $imageName = time(). '.' .$image->extension();
        $image->move(public_path('images'),$imageName);
        $student = new Student();
        $student->image = $imageName;
        // $student->image=$request->file('image')->store('image','public');

        $student->cne = $request->input('cne');
        $student->firstName = $request->input('firstName');
        $student->lastName = $request->input('lastName');
        $student->age = $request->input('age');
        $student->address = $request->input('address');

        // if($request->hasFile('image')) {
        //     $file =$request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('uploads/image/', $filename);
        //     $student->image = $filename;
        // }else {
        //     return $request;
        //     $student->image='';
        // }
        $student->save();
        return redirect('/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $student = Student::find($id)->paginate(1);
        // $students = Student::all();
        // return view('student', ['student'=>$student,'students'=>$students,'layout'=>'show']);
        
        // $student = DB::select('select * from students where id=?', [$id]);
        $student =DB::table('students')->find($id);
        $students = DB::table('students')->paginate(5);
        return view('student', ['student' =>$student,'students' =>$students, 'layout'=>'show']);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $student = Student::find($id);
        // $students = Student::all();
        // return view('student', ['students'=>$students,'student'=>$student, 'layout'=>'edit']);

        $student = DB::table('students')->find($id);
        $students = DB::table('students')->paginate(5);
        return view('student', ['student'=>$student, 'students'=>$students,'layout'=>'edit']);

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

        $image = $request->file('image');
        $imageName = time(). '.' .$image->extension();
        $image->move(public_path('images'),$imageName);
        $student = Student::find($id);

        $student->image = $imageName;
        
        // $student->image = $request->input('image');
        
        $student->cne = $request->input('cne');
        $student->firstName = $request->input('firstName');
        $student->lastName = $request->input('lastName');
        $student->age = $request->input('age');
        $student->address = $request->input('address');
        $student->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $posts = DB::table('students')->where('firstName', 'like', '%'.$search.'%')->paginate(5);
        return view('student', ['students'=>$posts, 'layout'=>'index'],);
        
        // $data = Student::select("firstName")->where("firstName","LIKE","%{$request->terms}%")->get();
        // return redirect('/', ['students'=>$data]);

    }
}
