<?php

use App\Http\Controllers\ExamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get("/exams", [ExamController::class, 'getAllExams']); 
Route::get("/exams/{id}", [ExamController::class, 'getOneExam']); 
Route::post("/exams", [ExamController::class, 'addAnExam']); 
Route::delete("/exams/{id}", [ExamController::class, 'deleteAnExam']); 
Route::put("/exams/{id}", [ExamController::class, 'updateAnExam']); 