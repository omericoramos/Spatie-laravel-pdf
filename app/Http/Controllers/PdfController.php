<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Spatie\LaravelPdf\Enums\Format;
use Spatie\LaravelPdf\Facades\Pdf;

class PdfController extends Controller
{
    public function generatePdfSaveToStorage()
    {
        $users = User::all();
        Pdf::view('userList', compact('users'))->save(storage_path('app/public/users.pdf'));
        return View('userListView',compact('users'));
    }

    public function generatePdfView(){
        $users = User::all();
        return Pdf::view('userList', compact('users'))
        ->format(Format::A4)
        ->name('users.pdf');
    }

}
