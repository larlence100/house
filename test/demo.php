<?php

include_once "wxBizDataCrypt.class.php";


$appid = 'wxd60a9da2a894158b';
$sessionKey = '2xZ4uM7tmfTs+AbrkNhb3g==';

$encryptedData="hj9Bljobl57kPJfnEqqOL 
T3nT0f7Yciaby9YqlyBiVVF5cj4W6bNX5ClxrEfKIObZClJ7L 
KUsZW2sOQDCixzX3C3dhn71h2C5XLwuYztGuJvPU9/qw8b8NY1oIxtSz8x4OCpQFisT76hcyxupLzUmZrdk zsj8W3F5iChNW7SgLx0kMoKEJHMODnq/EmVYAhUYoSIhxOJij4xy/GgRQZfJKQJDgaKQyfRdGzRxEBGy45CyLrlnrea9OGg aX0pTYtChUz2khWNfuiEmoz658WPumiuNqSzkgV1S8xLcGF eBJ89udYcksbgWu/IUhikFNhfk5UKxFUH2gQILHsMxdMI2dcqFvk7C7eYbI2FY/ycJKPwopKWG31pR/dHzrGd4xtRCLuq47BWx8un4wBa8G6rdEngn8Uwka5DdTvMS2Ykak17VPSrHWt5AWrDSIFNr9IuHNBLQaERKab3V7tig==";

$iv = 'z44+QpsazCPpi9h6rJMEBg==';

$pc = new WXBizDataCrypt($appid, $sessionKey);
$errCode = $pc->decryptData($encryptedData, $iv, $data );

if ($errCode == 0) {
    print($data . "\n");
} else {
    print($errCode . "\n");
}
