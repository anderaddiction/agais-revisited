<?php

namespace App\Imports\Documents;

use App\Models\Documents\Document;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class DocumentImport implements ToModel, WithHeadingRow, WithValidation, SkipsEmptyRows
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $document = Document::create([
            'code'         => uniqueCode(),
            'name'         => $row['name'],
            'acronym'      => $row['acronym'],
            'status'       => 1,
            'slug'         => generateUrl($row['name']),
            'note'         => $row['note'] ? $row['note'] : 'N/A',
        ]);

        $document->countries()->attach(explode(',', $row['country_id']), ['document_id' => $document->id]);

        return $document;
    }

    public function rules(): array
    {
        return [
            'file'        => 'mimes:xlsx,csv',
            'name'        => 'required|unique:documents,name',
            'acronym'     => 'required',
            'country_id'  => 'required',
            'note'        => 'nullable',
        ];
    }
}
