<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function member(){
        return view('member');
    }



    public function insertMember(Request $request){

        $cv1 = $request->file('cv1'); /*menyimpan data file yang diupload ke variabel $file */
        $card1 = $request->file('card1');

	    $file1 = time()."_".$cv1->getClientOriginalName();
        $file2 = time()."_".$card1->getClientOriginalName();

	    $tujuan_upload = 'data_file'; /*isi dengan nama folder tempat kemana file diupload */
	    $cv1->move($tujuan_upload,$file1);
        $card1->move($tujuan_upload,$file2);

        Member::create([
            'namagroup' => Auth::user()->namagroup,
            'namemember'=> $request->namemember,
            'email1'=> $request->email1,
            'whatsapp1'=> $request->whatsapp1,
            'line1'=> $request->line1,
            'github1'=>$request->github1,
            'place1'=>$request->place1,
            'date1'=>$request->date1,
            'cv1'=> $file1,
            'card1'=> $file2,
        ]);

        return redirect(route('dashboard'));
    }

    public function dashboard(){
        $members = Member::where('namagroup','like', Auth::user()->namagroup)->get();
        return view('dashboard', ['members' => $members]);
    }

    public function viewdataleader(){
        $users = User::all(); //all itu mengambil seluruh data, $member declare var
        return view('viewdataleader', ['users' => $users]);
    }

    public function viewdataleadercard(){
        $users = User::all(); //all itu mengambil seluruh data, $member declare var
        return view('viewdataleadercard', ['users' => $users]);
    }

    public function viewdataadmin(){
        $members = Member::all(); //all itu mengambil seluruh data, $member declare var
        return view('viewdataadmin', ['members' => $members]);

        $users = User::all(); //all itu mengambil seluruh data, $member declare var
        return view('viewdataadmin', ['users' => $users]);
    }

    public function viewdataedit(){
        $members = Member::all(); //all itu mengambil seluruh data, $member declare var
        return view('viewdataedit', ['members' => $members]);
    }

    public function getDataById($id){
        $member = Member::find($id);
        return view('updatemember' ,['member' => $member]);

    }

    public function updatemember(Request $request, $id){
        $member = Member::find($id);

        $cv1 = $request->file('cv1'); /*menyimpan data file yang diupload ke variabel $file */
        $card1 = $request->file('card1');

	    $file1 = time()."_".$cv1->getClientOriginalName();
        $file2 = time()."_".$card1->getClientOriginalName();

	    $tujuan_upload = 'data_file'; /*isi dengan nama folder tempat kemana file diupload */
	    $cv1->move($tujuan_upload,$file1);
        $card1->move($tujuan_upload,$file2);

        $member->namemember = $request->namemember;
        $member->email1 = $request->email1;
        $member->whatsapp1 = $request->whatsapp1;
        $member->line1 = $request->line1;
        $member->github1 = $request->github1;
        $member->place1 = $request->place1;
        $member->date1 = $request->date1;
        $member->cv1 = $request->cv1;
        $member->card1 = $request->card1;

        $member -> save();

        $member -> update([
            'namemember' => $request->namemember,
            'email1' => $request->email1,
            'whatsapp1' => $request->whatsapp1,
            'line1' => $request->line1,
            'github1' => $request->github1,
            'place1' => $request->place1,
            'date1' => $request->date1,
            'cv1' => $file1,
            'card1' => $file2,
        ]);
        return redirect(route('viewdataedit'));
    }
}
