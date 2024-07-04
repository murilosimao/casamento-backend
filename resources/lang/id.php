<?php

return [
    /**
     * AuthManager.
     */
    \Core\Auth\AuthManager::NAME => [

        'failed' => ':email atau :password salah.',
    ],

    /**
     * Time.
     */
    \Core\Support\Time::NAME => [

        'y' => 'ano(s)',
        'm' => 'mes(es)',
        'd' => 'dia(s)',
        'h' => 'hora(s)',
        'i' => 'minuto(s)',
        's' => 'segundos',

        'ago' => 'atrás.',
        'recently' => 'recentemente.',
    ],

    /**
     * Validator.
     */
    \Core\Valid\Validator::NAME => [
        'request' => [
            'required' => ':field é obrigatório!.',
            'email' => ':field não é válido!.',
            'dns' => ':field não é válido!.',
            'url' => ':field não é válido!.',
            'uuid' => ':field não é um UUID!.',
            'int' => ':field deve ser um número inteiro!.',
            'float' => ':field deve ser um número decimal!.',
            'min' => ':field deve ter no mínimo: :attribute caracteres',
            'max' => ':field deve ter no máximo: :attribute caracteres',
            'sama' => ':field não corresponde a :attribute',
            'unik' => ':field já existe!.',
        ],

        'file' => [
            'required' => ':field é obrigatório!.',
            'min' => ':field deve ter no mínimo: :attribute caracteres',
            'max' => ':field deve ter no máximo: :attribute caracteres',
            'mimetypes' => ':field permitido: :attribute',
            'mimes' => ':field permitido: :attribute',
            'unsafe' => ':field foi considerado inseguro!.',
            'corrupt' => ':field não foi carregado corretamente!.',
        ],
    ]
];
