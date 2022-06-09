<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'company' => ' CoPasModifDev.',
    'baseUrl' => '',
    'title' => 'CoPasModifDev.',
    'description' => 'Portofolio & Docs',
    'contact_email' => 'ahmadfadlydziljalal@gmail.com',
    'collections' => [],
    'selected' => function($page, $section){
        return Str::contains($page->getPath(), $section) ? 'active' : '';
    }
];
