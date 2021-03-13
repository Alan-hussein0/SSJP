<?php

namespace App\Http\Controllers;

use App\Models\Reviewer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Research;
use App\Models\User;

class ReviewerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user();
        $id=Auth::id();
        if ($user->reviewer == null) {
            $reviewer = Reviewer::create([
             'address' => 'Damascus',
             'user_id'	 => $id,
             'gender' => 'Male',
             'bio'	 => 'bio',
             'skype' => 'https://www.skype.com',
             'phone'=>'+09',
             'photo'=>'ui-sam.jfif',
            ]);

         }
         return view('reviewer.profile')->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reviewer  $reviewer
     * @return \Illuminate\Http\Response
     */
    public function show(Reviewer $reviewer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reviewer  $reviewer
     * @return \Illuminate\Http\Response
     */
    public function edit(Reviewer $reviewer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reviewer  $reviewer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required',
            'adress' => 'required',
            'gender'    => 'required',
            'bio'	   => 'required',
            'skype'=>'required',
            'phone'=>'required',
            'photo'=>'required|image'
        ]);


            $user=User::find($id)->get();
      //  $user = Auth::user();

        if ($request->has('photo')) {
            $photo = $request->photo;
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('/photo/profile/',$newPhoto);
            $user->reviewer->photo ='/photo/profile/'.$newPhoto ;
        }

        $user->name = $request->name ;
        $user->reviewer->address = $request->address ;
        $user->reviewer->gender = $request->gender ;
        $user->reviewer->skype = $request->skype ;
        $user->reviewer->phone = $request->phone ;
        $user->reviewer->bio = $request->bio ;
        $user->save();
        $user->reviewer->save();

     //   dd($request->all());
        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
            $user->save();
        }

     return redirect()->back();
    }






    public function download($id)
    {
        $research=Research::find($id);
        $fileName=$research->word_file;
        //$file = public_path() . "/download/info.docx";

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // .pdf -> application/pdf
    //
    // .doc -> application/msword
    //
    // .docx -> application/vnd.openxmlformats-officedocument.wordprocessingml.document
    //
    // .xls -> application/vnd.ms-excel
    //
    // .xlsx -> application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
    //
    // .gif -> image/gif
    //
    // .png -> image/png
    //
    // .jpeg -> image/jpg
    //
    // .jpg -> image/jpg
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        $headers = array(
            'Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        );

        return response()->download($fileName, 'filename.docx', $headers);
    }








    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reviewer  $reviewer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reviewer $reviewer)
    {
        //
    }
}
