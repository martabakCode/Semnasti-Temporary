<?php

namespace App\Exports;

use App\Models\Registrant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class RegistrantExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function headings(): array
    {
        return [
            'ID',
            'Code',
            'Email',
            'Nama',
            'Asal Instansi',
            'No Telp',
            'Status Pembayaran',
            'Tanggal Pembayaran',
            'Penerima pembayaran',
            'Konfirmasi Kedatangan',
            'Status Kehadiran',
            'Tanggal Pendaftaran'

        ];
    }
    public function collection()
    {
        return Registrant::all();
    }
}
