<?php
function bulan($str)
{
    switch($str)
    {
        case 1 : 
            return 'Januari';
            break;
        case 2 : 
            return 'Februari';
            break;
        case 3 : 
            return 'Maret';
            break;
        case 4 : 
            return 'April';
            break;
        case 5 : 
            return 'Mei';
            break;
        case 6 : 
            return 'Juni';
            break;
        case 7 : 
            return 'Juli';
            break;
        case 8 : 
            return 'Agustus';
            break;
        case 9 : 
            return 'September';
            break;
        case 10 : 
            return 'Oktober';
            break;
        case 11 : 
            return 'November';
            break;
        case 12 : 
            return 'Desember';
            break;


    }
}

function jumlahHari($tahun,$bulan)
{
    return cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);
}
function selisihHari($tg1,$tg2)
{
    $dt1 = date_create($tg1);
    $dt2 = date_create($tg2);
    $telat = date_diff($dt1, $dt2);
    return $telat;
}
?>