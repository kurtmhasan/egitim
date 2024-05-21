<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function data()
    {
        $tasks = Task::all();
        return view('front.data', compact('tasks'));

    }
    public function edit($id)
    {

        $kayit = Task::find($id);
        return view('front.edit', compact('kayit'));

    }

    public function kaydet(Request $request){
        $post = new Task();
        $post->gorevAdi=$request->gorevAdi;
        $post->gorevTarih=$request->gorevTarih;
        $post->save();
        return redirect()->back()->with('status', 'Kayıt Başarılı!');
    }
    public function sil($id){
        $task = Task::find($id);
        if (!$task) {
            return redirect()->back()->with('error', 'Görev bulunamadı!');
        }
        $task->delete();
        return redirect()->back()->with('success', 'Görev başarıyla silindi!');
    }
    public function guncelle(Request $request, $id)
    {

        $kayit = Task::find($id);

        if (!$kayit) {
            return redirect()->back()->with('error', 'Görev bulunamadı!');
        }

        $kayit->gorevAdi = $request->gorevAdi;
        $kayit->gorevTarih = $request->gorevTarih;

        $kayit->save();

        return redirect()->route('data')->with('success', 'Görev başarıyla güncellendi!');

    }
}

