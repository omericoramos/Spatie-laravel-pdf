<nav>
    <ul class="flex">
        <li class="mx-4 hover:text-rose-500 text-lg"><a href="{{ route('generatePdfView') }}" target="_blank">Visualizar pdf</a></li>
        <li class="mx-4 hover:text-rose-500 text-lg"><a href="{{ route('generatePdfSaveToStorage') }}">Salvar pdf na pasta storage</a></li>
        <li class="mx-4 hover:text-rose-500 text-lg"><a href="{{ route('generatePdfAndDownload') }}">Baixar pdf da lista</a></li>
    </ul>
</nav>
