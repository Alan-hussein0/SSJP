<?php

namespace App\Http\Controllers;

use App\Models\Editor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class EditorController extends Controller
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
        if ($user->editor == null) {
            $editor = Editor::create([
             'address' => 'Damascus',
             'user_id'	 => $id,
             'gender' => 'Male',
             'bio'	 => 'bio',
             'skype' => 'https://www.skype.com',
             'phone'=>'+09',
             'photo'=>'ui-sam.jfif',
            ]);

         }
         return view('editor.profile')->with('user',$user);
    }

    public function update(Request $request )
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



        $user = Auth::user();

        if ($request->has('photo')) {
            $photo = $request->photo;
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('/photo/profile/',$newPhoto);
            $user->editor->photo ='/photo/profile/'.$newPhoto ;
        }

        $user->name = $request->name ;
        $user->editor->address = $request->address ;
        $user->editor->gender = $request->gender ;
        $user->editor->skype = $request->skype ;
        $user->editor->phone = $request->phone ;
        $user->editor->bio = $request->bio ;
        $user->save();
        $user->editor->save();

     //   dd($request->all());
        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
            $user->save();
        }

     return redirect()->back();

    }

    public function destroy(Editor $editor)
    {
        //
    }
}
