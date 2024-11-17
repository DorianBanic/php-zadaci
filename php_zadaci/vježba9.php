<?php
$now = new DateTime();
$trenutni_dan = $now->format('N'); // (1 = ponedjeljak, 7 = nedjelja)
$trenutno_vrijeme = $now->format('H:i'); // sati:minute
$trenutni_datum = $now->format('m-d'); // mjesec i dan 

$praznici = array("01-01", "12-25", "12-26");

function je_ducan_otvoren($trenutni_dan, $trenutno_vrijeme, $trenutni_datum, $praznici)
{
    if (in_array($trenutni_datum, $praznici)) {
        return "Dućan je zatvoren zbog državnog praznika!";
    }

    if ($trenutni_dan == 7) {
        return "Dućan je zatvoren, danas je nedjelja.";
    }

    if ($trenutni_dan == 6) {
        if ($trenutno_vrijeme >= "09:00" && $trenutno_vrijeme <= "14:00") {
            return "Dućan je otvoren, radno vrijeme subotom je od 9 do 14.";
        } else {
            return "Dućan je zatvoren, subotom radi od 9 do 14.";
        }
    }

    if ($trenutni_dan >= 1 && $trenutni_dan <= 5) {
        if ($trenutno_vrijeme >= "08:00" && $trenutno_vrijeme <= "20:00") {
            return "Dućan je otvoren, radno vrijeme je od 8 do 20.";
        } else {
            return "Dućan je zatvoren, radno vrijeme je od 8 do 20.";
        }
    }

    return "Nevažeći dan ili vrijeme!";
}

echo je_ducan_otvoren($trenutni_dan, $trenutno_vrijeme, $trenutni_datum, $praznici);
