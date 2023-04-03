<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
     public function index(Question $question)
    {
        return view('questions/index')->with(['questions' => $question->getByLimit()]);
       //blade内で使う変数'questions'と設定。'questions'の中身にgetを使い、インスタンス化した$questionを代入。
    }
    
    public function create(Category $category)
    {
        return view('questions/create')->with(['categories' => $category->get()]);
    }
    
    public function show(question $question)
    {
        return view('questions/show')->with(['question' => $question]);
    }
    public function store(Request $request, Question $question)
    {
        $input = $request['question'];
        $question->user_id = Auth::id();
        $question->fill($input)->save();
        return redirect('/questions/' . $question->id);
    }
}
