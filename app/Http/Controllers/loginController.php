<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class loginController extends Controller
{
    public function show(Request $request)
    {
        $this->validate( $request , [
            'email' => ['required', 'string', 'email' ],
            'password' => ['required', 'string' ]
            //, 'g-recaptcha-response' => 'required|captcha'
        ]   );
        $Uemail=$request->email;
        $Upassword=$request->password;
        $user=User::where('password','=',$Upassword)->where('email','=',$Uemail)->get();
        if($user === null)
        {

            return redirect()->view('/login')->with('message','the email or the password unvalidate');
        }
        // $user=User::where('email',$Uemail)->get();
        // $user=User::where('id',$id);
// dd($user);
// MyModel::where('field', 'foo')->value('id')
            $id=User::where('email',$Uemail)->value('id');
            // dd($id);
            $is_editor=User::where('email',$Uemail)->value('is_editor');


            $is_reviewer=User::where('email',$Uemail)->value('is_reviewer');
            // var_dump($is_reviewer);
            // dd($id);
            $is_author=User::where('email',$Uemail)->value('is_author');

            $is_manager=User::where('email',$Uemail)->value('is_manager');

// dd($is_reviewer);
            //  dd($is_editor);
        if($is_editor!== null)
        {
            return redirect()->route('editor.profile')->with('user',$user);
        }
        elseif($is_reviewer!== NULL)
        {
            return redirect()->route('reviewer.profile')->with('user',$user);
        }
        elseif($is_author!== NULL)
        {
            return redirect()->route('author.profile')->with('user',$user);
        }
        elseif($is_manager!== NULL)
        {
            return redirect()->route('manager.profile')->with('user',$user);
        }
        else
        {
            return redirect()->back();
        }
    }



}

