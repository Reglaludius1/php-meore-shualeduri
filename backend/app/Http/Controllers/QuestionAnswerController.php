<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveQuestionRequest;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionAnswerController extends Controller
{
    public function create() {
        $this->authorize('approve');

        return view('quizz/create');
    }

    public function save(SaveQuestionRequest $request) {
        $question = new Question();
        $answer = new Answer();

        $question->title = $request->question;
        $question->save();

        $answer->question_id = $question->id;
        $answer->answer1 = $request->answer1;
        $answer->answer2 = $request->answer2;
        $answer->answer3 = $request->answer3;
        $answer->answer4 = $request->answer4;
        $answer->correct_answer = $request->correct_answer;
        $answer->save();

        return redirect()->route('quizz.create');
    }

    public function quizz() {
        $questions = Question::all();

        return view('quizz/quizz', compact('questions'));
    }

    public function results(Request $request) {
        $correct_count = 0;
        $total_count = sizeof($request->input()) - 1;

        $correct_answers = Question::all()->pluck('answer')->pluck('correct_answer');

        for ($index = 1; $index <= $total_count; $index++) {
            if ($request->input()[$index] == $correct_answers[$index - 1]) {
                $correct_count++;
            }
        }

        return view('quizz/results', compact('correct_count', 'total_count'));
    }
}
