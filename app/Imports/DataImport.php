<?php

namespace App\Imports;

use App\Models\DaftarArsip;
use Maatwebsite\Excel\Concerns\ToModel;

class DataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DaftarArsip([
            'rak' => $row[1],
            'boks' => $row[2],
            'indeks' => $row[3],
            'masalah' => $row[4],
            'kecamatan' => $row[5],
            'tahun' => $row[6],
            'keterangan' => $row[7],
        ]);
    }
}
