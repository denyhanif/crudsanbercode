<?php

namespace App\Http\Controllers;
use App\Models\Answer;
use App\Modles\Questions;
use Illuminate\Http\Request;

class JawbanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // $data = Jawaban::show($id);
        // dd($data);
        $pertanyaan = Pertanyaan::show($id);
        $pertanyaan_id = $pertanyaan->id;
        $jawaban = Jawaban::show($pertanyaan_id);
        // dd($jawaban);
        return view('items.create-jawaban', compact('pertanyaan', 'jawaban'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $isi = $request->input('isi');
        $data = [
            'isi' => $isi,
            'question_id' => $id
        ];
        $store = Jawaban::save($data);
        return redirect('/jawaban/' . $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
