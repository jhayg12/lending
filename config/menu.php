<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Navigation Menu
    |--------------------------------------------------------------------------
    |
    | This array is for Navigation menus of the backend.  Just add/edit or
    | remove the elements from this array which will automatically change the
    | navigation.
    |
    */

    // SIDEBAR LAYOUT - MENU

    'sidebar' => [
        [
            'title' => 'Application Management',
            'link' => '#',
            'active' => 'admin/application-management*',
            'icon' => 'icon-fa icon-fa-file',
            'children' => [
                [
                    'title' => 'Apply All',
                    'link' => '/admin/application-management/apply',
                    'active' => 'admin/application-management/apply',
                ],
                [
                    'title' => 'Component Management',
                    'link' => '/admin/application-management/component',
                    'active' => 'admin/application-management/component',
                ],
            ]
        ],
        [
            'title' => 'Collection Management',
            'link' => '#',
            'active' => 'admin/collection-management*',
            'icon' => 'icon-fa icon-fa-th-large',
            'children' => [
                [
                    'title' => 'Collection Case',
                    'link' => '/admin/collection-management/case',
                    'active' => 'admin/collection-management/case',
                ],
                [
                    'title' => 'Case Allocation',
                    'link' => '/admin/dashboard/ecommerce',
                    'active' => 'admin/dashboard/ecommerce',
                ],
                [
                    'title' => 'Call Records',
                    'link' => '/admin/dashboard/basic',
                    'active' => 'admin/dashboard/basic',
                ],
                [
                    'title' => 'Recording',
                    'link' => '/admin/dashboard/ecommerce',
                    'active' => 'admin/dashboard/ecommerce',
                ],
                [
                    'title' => 'Collection Personnel',
                    'link' => '/admin/dashboard/basic',
                    'active' => 'admin/dashboard/basic',
                ],
            ]
        ],
        [
            'title' => 'System Report',
            'link' => '#',
            'active' => 'admin/report*',
            'icon' => 'icon-fa icon-fa-bar-chart',
            'children' => [
                [
                    'title' => 'Financial Statements',
                    'link' => '/admin/dashboard/basic',
                    'active' => 'admin/dashboard/basic',
                    'children' => [
                        [
                            'title' => 'Loan Detail',
                            'link' => '/admin/dashboard/ecommerce',
                            'active' => 'admin/dashboard/ecommerce',
                        ],
                        [
                            'title' => 'Repayment Detail',
                            'link' => '/admin/dashboard/ecommerce',
                            'active' => 'admin/dashboard/ecommerce',
                        ],
                    ]
                ],
                [
                    'title' => 'Operational Reports',
                    'link' => '/admin/dashboard/ecommerce',
                    'active' => 'admin/dashboard/ecommerce',
                    'children' => [
                        [
                            'title' => 'Platform Daily Statistics',
                            'link' => '/admin/dashboard/ecommerce',
                            'active' => 'admin/dashboard/ecommerce',
                        ],
                        [
                            'title' => 'Customer Information',
                            'link' => '/admin/dashboard/ecommerce',
                            'active' => 'admin/dashboard/ecommerce',
                        ],
                        [
                            'title' => 'Loan Repayment',
                            'link' => '/admin/dashboard/ecommerce',
                            'active' => 'admin/dashboard/ecommerce',
                        ],
                        [
                            'title' => 'Loan Overdue',
                            'link' => '/admin/dashboard/ecommerce',
                            'active' => 'admin/dashboard/ecommerce',
                        ],
                        [
                            'title' => 'Overdue Rate Report',
                            'link' => '/admin/dashboard/ecommerce',
                            'active' => 'admin/dashboard/ecommerce',
                        ],
                    ]
                ],
            ]
        ],
        [
            'title' => 'Operation Management',
            'link' => '#',
            'active' => 'admin/operation*',
            'icon' => 'icon-fa icon-fa-cogs',
            'children' => [
                [
                    'title' => 'Accounts',
                    'link' => '/admin/dashboard/basic',
                    'active' => 'admin/dashboard/basic',
                ],
            ]
        ],
    ],

    // HORIZONTAL MENU LAYOUT -  MENU

    'horizontal' => [
        [
            'title' => 'Dashboard',
            'link' => '#',
            'active' => 'admin/dashboard*',
            'icon' => 'icon-fa icon-fa-dashboard',
            'children' => [
                [
                    'title' => 'Basic',
                    'link' => '/admin/dashboard/basic',
                    'active' => 'admin/dashboard/basic',
                ],
                [
                    'title' => 'Ecommerce',
                    'link' => '/admin/dashboard/ecommerce',
                    'active' => 'admin/dashboard/ecommerce',
                ],
                [
                    'title' => 'Finance',
                    'link' => '/admin/dashboard/finance',
                    'active' => 'admin/dashboard/finance',
                ]
            ]
        ],
        [
            'title' => 'Layouts',
            'link' => '#',
            'active' => 'admin/layouts*',
            'icon' => 'icon-fa icon-fa-th-large',
            'children' => [
                [
                    'title' => 'Sidebar',
                    'link' => '/admin/layouts/sidebar',
                    'active' => 'admin/layouts/sidebar',
                ],
                [
                    'title' => 'Icon Sidebar',
                    'link' => '/admin/layouts/icon-sidebar',
                    'active' => 'admin/layouts/icon-sidebar',
                ],
                [
                    'title' => 'Horizontal Menu',
                    'link' => '/admin/layouts/horizontal-menu',
                    'active' => 'admin/layouts/horizontal-menu',
                ],
            ]
        ],
        [
            'title' => 'Basic UI',
            'link' => '#',
            'active' => 'admin/basic-ui*',
            'icon' => 'icon-fa icon-fa-star',
            'children' => [
                [
                    'title' => 'Buttons',
                    'link' => '/admin/basic-ui/buttons',
                    'active' => 'admin/basic-ui/buttons',
                ],
                [
                    'title' => 'Cards',
                    'link' => '/admin/basic-ui/cards',
                    'active' => 'admin/basic-ui/cards',
                ],
                [
                    'title' => 'Tabs & Accordians',
                    'link' => '/admin/basic-ui/tabs',
                    'active' => 'admin/basic-ui/tabs',
                ],
                [
                    'title' => 'Typography',
                    'link' => '/admin/basic-ui/typography',
                    'active' => 'admin/basic-ui/typography',
                ],
                [
                    'title' => 'Tables',
                    'link' => '/admin/basic-ui/tables',
                    'active' => 'admin/basic-ui/tables',
                ]
            ]
        ],
        [
            'title' => 'Components',
            'link' => '#',
            'active' => 'admin/components*',
            'icon' => 'icon-fa icon-fa-puzzle-piece',
            'children' => [
                [
                    'title' => 'Datatables',
                    'link' => '/admin/components/datatables',
                    'active' => 'admin/components/datatables',
                ],
                [
                    'title' => 'Notifications',
                    'link' => '/admin/components/notifications',
                    'active' => 'admin/components/notifications',
                ],
                [
                    'title'=>' Nestable List',
                    'link'=>'/admin/components/nestable-list',
                    'active'=>'admin/components/nestable-list',
                ],
                [
                    'title'=>'Nestable Tree',
                    'link'=>'/admin/components/nestable-tree',
                    'active'=>'admin/components/nestable-tree',
                ],
                [
                    'title' => 'Image Cropper',
                    'link' => '/admin/components/image-cropper',
                    'active' => 'admin/components/image-cropper',
                ],
                [
                    'title' => 'Image Zoom',
                    'link' => '/admin/components/zoom',
                    'active' => 'admin/components/zoom',
                ],
                [
                    'title' => 'Calendar',
                    'link' => '/admin/components/calendar',
                    'active' => 'admin/components/calendar',
                ],
                [
                    'title' => 'Rating',
                    'link' => '#',
                    'active' => 'admin/components/ratings*',
                    'icon' => 'icon-fa icon-fa-star',
                    'children' => [
                        [
                            'title' => 'Star Ratings',
                            'link' => '/admin/components/ratings/star',
                            'active' => 'admin/components/ratings/star',
                        ],
                        [
                            'title' => 'Bar Ratings',
                            'link' => '/admin/components/ratings/bar',
                            'active' => 'admin/components/ratings/bar',
                        ],
                    ],
                ],
            ]
        ],
        [
            'title' => 'Todo App',
            'link' => '/admin/todos',
            'active' => 'admin/todos*',
            'icon' => 'icon-fa icon-fa-check',
        ],
        [
            'title' => 'Settings',
            'link' => '#',
            'active' => 'admin/settings*',
            'icon' => 'icon-fa icon-fa-cogs',
            'children' => [
                [
                    'title' => 'Social',
                    'link' => '/admin/settings/social',
                    'active' => 'admin/settings/social',
                ],
                [
                    'title' => 'Mail',
                    'link' => 'admin/settings/mail',
                    'active' => 'admin/settings/mail*',
                    'icon' => 'icon-fa icon-fa-mail',
                ],
            ]
        ]
    ]
];
