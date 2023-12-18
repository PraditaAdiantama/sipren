<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PresensiController extends Controller
{
    public function classes(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "class" => "string|min:1|required",
            'grade' => "string|min:1|required",
        ]);

        if ($validator->fails()) return response()->json([
            'errors' => $validator->errors()
        ], 500);

        $classes = DB::table('kelas')->where('nama_kelas', 'LIKE', '%' . $request->grade . ' ' . $request->class . '%')->get();

        return response()->json([
            'classes' => $classes,
            'class' => $request->class,
            'grade' => $request->grade
        ], 201);
    }

    public function subjects(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'class_id' => "exists:kelas,id|required|integer",
            'productive_id' => "exists:productives,id|nullable|integer",
            'normada_id' => "exists:normadas,id|nullable|integer",
        ]);

        if ($validator->fails()) return response()->json([
            'errors' => $validator->errors()
        ], 500);

        $subjects = [
            'productives' => [
                'pic',
                'pcc',
                'jarkom'
            ],
            'normada' => [
                'bahasa indonesia',
                'bahasa inggris',
                'pkk',
            ]
        ];

        return response()->json([
            'subjects' => $subjects
        ]);
    }
}
