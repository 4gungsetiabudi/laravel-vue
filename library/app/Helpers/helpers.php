<?php

//set time created at to catalog table -> index.blade.php
    function convert_date($value) {
        return date('H:i:s - d M Y', strtotime($value));
    }
?>