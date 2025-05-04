<?php

namespace Callmeaf\SocialBot\App\Exports\Web\V1;

use Callmeaf\SocialBot\App\Models\SocialBot;
use Callmeaf\SocialBot\App\Repo\Contracts\SocialBotRepoInterface;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomChunkSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Excel;

class SocialBotsExport implements FromCollection,WithHeadings,Responsable,WithMapping,WithCustomChunkSize
{
    use Exportable;

    /**
     * It's required to define the fileName within
     * the export class when making use of Responsable.
     */
    private $fileName = '';

    /**
     * Optional Writer Type
     */
    private $writerType = Excel::XLSX;

    /**
     * Optional headers
     */
    private $headers = [
        'Content-Type' => 'text/csv',
    ];

    private SocialBotRepoInterface $socialbotRepo;
    public function __construct()
    {
        $this->socialbotRepo = app(SocialBotRepoInterface::class);
        $this->fileName = $this->fileName ?: \Base::exportFileName(model: $this->socialbotRepo->getModel()::class,extension: $this->writerType);
    }

    public function collection()
    {
        if(\Base::getTrashedData()) {
            $this->socialbotRepo->trashed();
        }

        $this->socialbotRepo->latest()->search();

        if(\Base::getAllPagesData()) {
            return $this->socialbotRepo->lazy();
        }

        return $this->socialbotRepo->paginate();
    }

    public function headings(): array
    {
        return [
           // 'status',
        ];
    }

    /**
     * @param SocialBot $row
     * @return array
     */
    public function map($row): array
    {
        return [
            // $row->status?->value,
        ];
    }

    public function chunkSize(): int
    {
        return \Base::config('export_chunk_size');
    }
}
