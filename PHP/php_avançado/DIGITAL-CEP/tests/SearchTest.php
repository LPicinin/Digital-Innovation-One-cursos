<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Luish\DigitalCep\Search;

final class SearchTest extends TestCase
{
    public function testSimpleGetAdressFromZipCodeDefaultUsage()
    {
        $esperado = [
            'cep' => "19500-000",
            'logradouro' => "",
            'complemento' => "",
            'bairro' => "",
            'localidade' => "Martinópolis",
            'uf' => "SP",
            'ibge' => "3529203",
            'gia' => "4406",
            'ddd' => "18",
            'siafi' => "6685"
        ];
        $search = new Search();
        $resultado = $search->getAdressFromZipCode('19500000');

        $this->assertEquals($esperado, $resultado);
    }

    /**
     * @dataProvider dadosTest
     */
    public function testGetAdressFromZipCodeDefaultUsage(string $input, array $esperado)
    {
        $search = new Search();
        $resultado = $search->getAdressFromZipCode($input);

        $this->assertEquals($esperado, $resultado);
        //exit;
    }
    public function dadosTest(): array
    {
        return [
            "Martinópolis" => [
                "19500000", [
                    'cep' => "19500-000",
                    'logradouro' => "",
                    'complemento' => "",
                    'bairro' => "",
                    'localidade' => "Martinópolis",
                    'uf' => "SP",
                    'ibge' => "3529203",
                    'gia' => "4406",
                    'ddd' => "18",
                    'siafi' => "6685"
                ]
            ],
            "Endereço praça da Sé" => [
                "01001000", [
                    'cep' => "01001-000",
                    'logradouro' => "Praça da Sé",
                    'complemento' => "lado ímpar",
                    'bairro' => "Sé",
                    'localidade' => "São Paulo",
                    'uf' => "SP",
                    'ibge' => "3550308",
                    'gia' => "1004",
                    'ddd' => "11",
                    'siafi' => "7107"
                ]
            ]
        ];
    }
}

//vendor/bin/phpunit tests/ --colors=always