<?php

namespace app;

class CreateDataArray
{
    private string $storagePath;
    function __construct()
    {
        $this->storagePath = dirname(__DIR__);
    }
    public function process(): array
    {

        $Data=[];

        $destination = $this->storagePath .'/storage/transactions_sample.csv' ;

        if($file = fopen($destination, "r"))
        {
            while (($row = fgetcsv($file)) !== false) {
                $Data[] = $row;

            }
        }


        fclose($file);
        return $Data;

    }
}