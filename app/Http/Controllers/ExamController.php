<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    // GET ALL EXAMS 
    public function getAllExams() {
        $exams = Exam::all(); 

        return response()->json($exams); 
    }

    // GET ONE EXAM 
    public function getOneExam($id) {
        $exam = Exam::find($id); 

        if(!$exam) return response()->json(["Message" => "Could not find the exam"], 404); 

        return response()->json($exam); 
    }

    // ADD AN EXAM 
    public function addAnExam(Request $request) {
        $exam = Exam::create([
            'startDate' => $request->input('startDate'), 
            'endDate' => $request->input('endDate') 
        ]); 

        return response()->json(["Message" => "Exam added successfully", $exam], 201); 
    }

    // DELETE AN EXAM 
    public function deleteAnExam($id) {
        $exam = Exam::find($id); 

        if(!$exam) return response()->json(["Message" => "Could not find exam!"], 404); 

        $exam->delete(); 

        return response()->json(["Message" => "Deleted Exam"], 201);
    }

    // UPDATE AN EXAM 
    public function updateAnExam(Request $request, $id) {
        $exam = Exam::find($id); 

        if(!$exam) return response()->json(["Message" => "Could not find exam!"], 404);

        $exam->update($request->only(['startDate', 'endDate'])); 

        return response()->json($exam); 
    }
}
