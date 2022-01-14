<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function adminparticipant(){
        $users = User::all(); //all itu mengambil seluruh data, $member declare var
        return view('adminparticipant', ['users' => $users]);
    }

    public function admindashboard(){
        $users = User::all(); //all itu mengambil seluruh data, $member declare var
        return view('admindashboard', ['users' => $users]);

    }

    public function bukti(){
        $admins = Admin::all(); //all itu mengambil seluruh data, $member declare var
        return view('bukti', ['admins' => $admins]);
    }

    public function delete($id){
        User::destroy($id);
        return redirect(route('adminparticipant'));
    }

    public function uploadData(Request $request){

        $bukti = $request->file('bukti'); /*menyimpan data file yang diupload ke variabel $file */

	    $filebukti = time()."_".$bukti->getClientOriginalName();

	    $tujuan_upload = 'data_file'; /*isi dengan nama folder tempat kemana file diupload */
	    $bukti->move($tujuan_upload,$filebukti);


        Admin::create([
            'bukti'=> $filebukti,
        ]);

        return redirect(route('payment'));
    }

    public function uploadverify(Request $request){
        User::create([
            'verify'=> $request->verify,
        ]);
        return redirect(route('admindashboard'));
    }

}

