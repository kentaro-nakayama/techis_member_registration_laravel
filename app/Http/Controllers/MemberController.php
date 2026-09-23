<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index() {
        // 会員情報を取得
        $members = Member::all();
        return view('index', compact('members'));
    }

    public function showCreate() {
        return view('create');
    }

    public function createUser(Request $request) {
        // バリデーション処理
        $request->validate([
            'name'=> 'required|string|max: 50',
            'phone_number'=> 'required|max: 20',
            'email'=> 'required|string|max: 255',
        ]);
        // 会員登録処理
        Member::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email'=> $request->email,
        ]);
        return redirect('/');
    }

    public function showEdit($userId) {
        // 編集対象のユーザー情報
        $member = Member::findOrFail($userId);
        return view('edit', compact('member'));
    }

    public function editUser($userId, Request $request) {
        $member = Member::findOrFail($userId);
        $member->update([
            'name'=> $request->name,
            'phone_number'=> $request->phone_number,
            'email'=> $request->email,
        ]);
        return redirect('/');
    }

    public function deleteUser($userId) {
        $member = Member::findOrFail($userId);
        $member->delete();
        return redirect('/');
    }
}
