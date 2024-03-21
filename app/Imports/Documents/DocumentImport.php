<?php

namespace App\Imports\Documents;

use App\Models\Documents\Document;
use Maatwebsite\Excel\Concerns\ToModel;

class DocumentImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Document([
            //
        ]);
    }
}
