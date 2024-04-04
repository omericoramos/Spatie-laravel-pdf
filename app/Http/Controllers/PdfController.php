<?php

namespace App\Http\Controllers;

use App\Actions\GeneratePdfAction;
use Illuminate\Contracts\View\View;
use Spatie\LaravelPdf\PdfBuilder;

class PdfController extends Controller
{
    public function __construct(
        private GeneratePdfAction $generatePdfAction = new GeneratePdfAction()
    ) {
    }
    public function generatePdfSaveToStorage(): View
    {
        $users = $this->generatePdfAction->generatePdfSaveToStorage();
        return View('userListView', compact('users'));
    }

    public function generatePdfView(): PdfBuilder
    {
        return $this->generatePdfAction->generatePdfView();
    }

    public function generatePdfAndDownload(): PdfBuilder
    {
       return $this->generatePdfAction->generatePdfAndDownload();
    }
}
