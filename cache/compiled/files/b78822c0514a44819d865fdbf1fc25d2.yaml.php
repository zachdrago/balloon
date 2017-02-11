<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/www/sites/grav/root/user/config/site.yaml',
    'modified' => 1486537825,
    'data' => [
        'title' => 'Postcards To Ohio',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Kyle Elder',
            'email' => 'postcardstoohio@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
