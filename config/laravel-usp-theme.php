<?php

$rota_menu = (env('APP_FULANO') ?? 'livros');

$submenu1 = [
    [
        'text' => '<i class="fas fa-atom"></i>  SubItem 1',
        'url' => config('app.url') . '/subitem1',
    ],
    [
        'text' => 'SubItem 2',
        'url' => config('app.url') . '/subitem2',
        'can' => 'admin',
    ],
    [
        'text' => 'SubItem 3',
        'url' => config('app.url') . '/subitem3',
    ],
];

$submenu1_alessandrooliveira = [
    [
        'text' => '<i class="fas fa-book"></i>  Livros',
        'url' => config('app.url') . '/livros_alessandrooliveira',
    ],
    [
        'text' => '<i class="fas fa-plus"></i>  Novo livro',
        'url' => config('app.url') . '/livros_alessandrooliveira/create',
    ],
];

$submenu1_livrosvictor = [
    [
        'text' => '<i class="fas fa-book"></i>  Livros',
        'url' => config('app.url') . '/livrosvictor',
    ],
    [
        'text' => '<i class="fas fa-plus"></i>  Novo livro',
        'url' => config('app.url') . '/livrosvictor/create',
    ],
];

$submenu2 = [
    [
        'text' => 'SubItem 1',
        'url' => config('app.url') . '/subitem1',
    ],
    [
        'text' => 'SubItem 2',
        'url' => config('app.url') . '/subitem2',
        'can' => 'admin',
    ],
];

return [
    'title' => config('app.name'),
    'dashboard_url' => config('app.url'),
    'logout_method' => 'POST',
    'logout_url' => config('app.url') . '/logout',
    'login_url' => config('app.url') . '/login',
    'menu' => [
        [
            'text' => '<i class="fas fa-home"></i> Home',
            'url' => config('app.url') . '/' . $rota_menu,
        ],
        [
            'text' => 'Cadastrar livro',
            'url' => config('app.url') . '/' . $rota_menu . '/create',
        ],
        [
            'text' => 'Acervo',
            'url' => config('app.url') . '/' . $rota_menu,
        ],
        [
            'text' => 'Item 3',
            'url' => config('app.url') . '/item3',
            'can' => 'admin',
        ],
        [
            'text' => '<i class="fas fa-bomb"></i> Alessandro Oliveira',
            'submenu' => $submenu1_alessandrooliveira,
        ],
        [
            'text' => '<i class="fas fa-bomb"></i> Livros Victor',
            'submenu' => $submenu1_livrosvictor,
        ],           
        /*/[
            'text' => 'SubMenu1',
            'submenu' => $submenu1,
        ],
        [
            'text' => 'SubMenu2',
            'submenu' => $submenu2,
            'can' => 'admin',
        ],
        /*/
    ],
    'right_menu' => [
        [
            'text' => '<i class="fas fa-cog"></i>',
            'title' => 'Configurações',
            'target' => '_blank',
            'url' => config('app.url') . '/item1',
        ],
    ],
];
