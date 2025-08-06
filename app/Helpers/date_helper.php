<?php
    function format_tanggal_indonesia($tanggal)
    {
        $fmt = new \IntlDateFormatter(
            'id_ID',
            \IntlDateFormatter::FULL,
            \IntlDateFormatter::NONE,
            'Asia/Jakarta',
            \IntlDateFormatter::GREGORIAN
        );

        $timestamp = strtotime($tanggal);
        return $fmt->format($timestamp); // Contoh: Rabu, 6 Agustus 2025
    }
?>