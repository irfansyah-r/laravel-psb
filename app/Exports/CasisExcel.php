<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CasisExcel implements FromCollection, WithHeadings
{
	public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection()
    {
    	return collect($this->data);
    }

    public function headings(): array
    {
        return [
            'ID Calon Siswa',
            'ID User',
            'NISN',
            'Nomor Registrasi',
            'Nama',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Nomor KK',
            'Alamat Sesuai KK',
            'Alamat Domisili',
            'Asal Sekolah',
            'Nomor Seri Ijazah',
            'Nomor Seri SKHUN',
            'Nama Ayah',
            'Tempat Lahir Ayah',
            'Tanggal Lahir Ayah',
            'Pendididkan Ayah',
            'Pekerjaan Ayah',
            'Penghasilan Ayah',
            'Nomor Telepon Ayah',
            'Nama Ibu',
            'Tempat Lahir Ibu',
            'Tanggal Lahir Ibu',
            'Pendididkan Ibu',
            'Pekerjaan Ibu',
            'Penghasilan Ibu',
            'Nomor Telepon Ibu',
            'Status Tempat Tinggal',
            'Nama Wali',
            'Tempat Lahir Wali',
            'Tanggal Lahir Wali',
            'Pendididkan Wali',
            'Pekerjaan Wali',
            'Penghasilan Wali',
            'Hubungan dengan Wali',
            'Nomor Telepon Wali',
            'Validasi',
            'Keterangan',
        ];
    }
}

?>