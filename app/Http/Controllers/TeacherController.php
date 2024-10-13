<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherStoreRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $teachers = Teacher::all();
       
        return view('teacher.index', ['teacher' => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherStoreRequest $request)
    {
        $requestData = $request->all();
    
   if($request->hasFile('image')){
    try{
        $file =  $request->file('image');
        $imageName = time(). '-'. $file->getClientOriginalName();
        $file->move(public_path('images'), $imageName);
        $requestData['image'] = $imageName;
    } catch (\Exception $e){
        return back()->withErrors(['image' => 'Rasmni yuklashda xato bor']);
    }
   }
        
    
        // Malumotlarni bazaga qo'shish
        Teacher::create($requestData);  
    
        // Yo'naltirish
        return redirect()->route('teachers.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        
        return view('teacher.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
          // ID bo'yicha o'qituvchini topish
        return view('teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
       
        $teacher->update($request->all());
        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
       
         if($teacher){
            $teacher->delete();
         };
         return redirect()->route('teachers.index');
    }
}
