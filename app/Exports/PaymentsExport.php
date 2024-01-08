<?php

namespace App\Exports;

use App\Models\Payments;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithDefaultStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Style;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PaymentsExport implements FromQuery, WithMapping, WithHeadings, ShouldAutoSize, WithStyles
{
    public function styles(Worksheet $sheet)
    {
        $rows = $sheet->getHighestRow();
        $columns = $sheet->getHighestColumn();

        for ($row = 2; $row <= $rows; $row++) {
            for ($col = 'A'; $col <= $columns; $col++) {
                $sheet->getStyle("{$col}{$row}")
                    ->getAlignment()
                    ->setHorizontal(Alignment::HORIZONTAL_CENTER);
            }
        }
        return [
            1    => [
                'font' => ['size' => 12, 'bold' => true],
                'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER], // Center-align text
                'padding' => ['top' => 5, 'right' => 5, 'bottom' => 5, 'left' => 5], // Add padding
            ],
        ];
    }
    public function headings(): array
    {
        return [
            [
                'Student name',
                'Parent name',
                'Parent number',
                'Parent email',
                'School name',
                'Age',
                'Course',
                'Price',
                'Time slot',
                'Promo',
                'Payment ID',
                'Status',
                'Date'
            ],
        ];
    }
    public function query()
    {
        return Payments::query();
    }
    public function map($i): array
    {
        $age =  "$i->age years";
        $price =  "$i->price EGP";
        if (preg_match('/Sec-([\d]+):.*?([\d]+:[\d]+-[ \d]+:[\d]+ [ap]m)/', $i->time, $matches)) {
            $section = 'Sec-' . $matches[1];
            $time = $matches[2];
        }
        $time = $i->time ? $section . " " . $time : "Not Selected";
        if (str_contains($i->parent_number, '+')) {
            $parent_number = str_replace('+', '+ ', $i->parent_number);
        }
        return [
            $i->student_name,
            $i->parent_name,
            $parent_number ?? $i->parent_number,
            $i->parent_email,
            $i->school_name,
            $age,
            $i->course,
            $price,
            $time,
            $i->promo,
            $i->payment_id,
            $i->status,
            $i->updated_at,
        ];
    }
}
