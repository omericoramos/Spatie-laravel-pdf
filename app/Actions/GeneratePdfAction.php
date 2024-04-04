<?php 

declare(strict_types=1);

namespace App\Actions;

use Illuminate\Database\Eloquent\Collection;
use Spatie\LaravelPdf\Enums\Format;
use Spatie\LaravelPdf\Facades\Pdf;
use Spatie\LaravelPdf\PdfBuilder;

class GeneratePdfAction
{
    public function __construct(
        private GetDataUserAction $getDataUserAction = new GetDataUserAction()
    )
    {
        
    }

    public function generatePdfSaveToStorage(): Collection
    {
        Pdf::view('userList', ['users' => $this->getDataUserAction->getUsers()])->save(storage_path('app/public/users.pdf'));
        return $this->getDataUserAction->getUsers();
    }

    public function generatePdfView(): PdfBuilder
    {
        return Pdf::view('userList', ['users' => $this->getDataUserAction->getUsers()])
        ->format(Format::A4)
            ->name('users.pdf');
    }

    public function generatePdfAndDownload(): PdfBuilder
    {
        
        return Pdf::view('userList', ['users' => $this->getDataUserAction->getUsers()])
        ->format(Format::A4)
            ->name('users.pdf')
            ->download();
    }
}