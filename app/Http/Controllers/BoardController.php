<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Board;

class BoardController extends Controller
{
    public function showBoard() {
        $posts = Board::with('user')->latest()->get();

        return view('board.index', compact('posts'));
    }

    public function showCreate() {
        return view('board.create');
    }

    public function create(Request $request) {
        Board::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::user()->id,
        ]);

        return redirect('board')->with('게시글 생성에 성공했습니다.');
    }
}
