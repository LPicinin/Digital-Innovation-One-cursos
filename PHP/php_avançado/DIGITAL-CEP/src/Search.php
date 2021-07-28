<?php

namespace Luish\DigitalCep;

use Luish\DigitalCep\ws\ViaCep;

class Search
{


    public function getAdressFromZipCode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);
        return $this->getFromServer($zipCode);
    }

    private function getFromServer(string $zipCode): ?array
    {
        $get = new ViaCep();

        return $get->get($zipCode);
    }
}
