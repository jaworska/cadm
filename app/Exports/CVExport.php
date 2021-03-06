<?php

namespace App\Exports;

use App\CV;
use App\Offer;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class CVExport implements FromCollection ,WithHeadings,ShouldAutoSize
{
    protected $offer;

    public function __construct(Offer $offer = null)
    {
        $this->offer = $offer;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        if(!$this ->offer)
            $cvs = CV::all();
        else
            $cvs = $this -> offer -> cvs;

        $collection = new Collection();
        foreach ($cvs as $key => $cv){
            $collection[] = [
                'name' => $cv -> name,
                'phone' => $cv -> phone,
                'email' => $cv -> email,
                'offer' => $cv -> offer -> title,
                'cv' => env('APP_URL').Storage::url($cv -> file),
                'term_1' => $cv -> term_1,
                'term_2' => $cv -> term_2,
                'term_3' => $cv -> term_3,

            ];
        }

        return $collection -> sortBy('offer');
    }
    public function headings(): array
    {
        return [
            'Imię',
            'Telefon',
            'Email',
            'Oferta',
            'CV',
            'Zgoda 1',
            'Zgoda 2',
            'Zgoda 3',
        ];
    }
}
