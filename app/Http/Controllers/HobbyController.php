<?php


namespace App\Http\Controllers;

use App\Models\Hobby_user;
use Illuminate\Http\Request;

class HobbyController extends Controller
{
    // public function index()
    // {
    //     return view('hobby_plan/user/new/index');
    // }
    
    
public function home() { return view('hobby_plan/home');}
public function user_new() { return view('hobby_plan/user_new');}
public function hob() { return view('hobby_plan/hob');}
public function plan() { return view('hobby_plan/plan');}
public function plan_hobby() { return view('hobby_plan/plan_hobby');}
public function plan_hobby_success() { return view('hobby_plan/plan_hobby_success');}
public function plan_feeling() { return view('hobby_plan/plan_feeling');}
    
      public function store(Request $request)
    {
        // バリデーション（入力チェック）
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'address' => 'required|max:100',
            'email' => 'required|email|max:100',
            'gender' => 'required|integer',
            'password' => 'required|max:100',
            'method' => 'required|max:100',
        ]);
        // 新しいユーザーインスタンスの作成
        $Hobby_user = new Hobby_User;
        // バリデーションされたデータでユーザー情報を更新し、保存
        $Hobby_user->fill($validatedData)->save();
        // リダイレクト
        return redirect('/hobby_questionnaire');
    }
}
