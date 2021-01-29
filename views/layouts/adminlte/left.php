<?php

use mdm\admin\components\Helper;

$menuItems = [
    ['label' => Yii::t('app', 'Dasbor'), 'url' => ['/dasbor/index'], 'icon' => 'tachometer-alt','active' => Yii::$app->controller->id === 'dasbor'],
    ['label' => Yii::t('app', 'Visualizations'), 'url' => ['/visualization/index'], 'icon' => 'images','active' => Yii::$app->controller->id === 'visualization'],
    ['label' => Yii::t('app', 'Requests'), 'url' => ['/request/index'], 'icon' => 'thumbtack','active' => Yii::$app->controller->id === 'request'],
    
    ['label' => Yii::t('app', 'Referensi'), 'url' => '#', 'options' => ['class' =>'treeview'], 'icon' => 'folder-open', 'submenu' => true,
        'items' => [
            ['label' => Yii::t('app', 'Ref 1'), 'url' => ['/referensi/kode-bank/index'], 'icon' => 'piggy-bank','active' => Yii::$app->controller->id === 'referensi/kode-bank'],
        ]
    ],
    ['label' => 'Pengaturan', 'url' => '#', 'options' => ['class' => 'header']],
    ['label' => Yii::t('app', 'RBAC'), 'url' => '#', 'options' => ['class' =>'treeview'], 'icon' => 'cogs', 'submenu' => true,
        'items' => [
            ['label' => Yii::t('app', 'Pengguna'), 'url' => ['/user/admin'], 'icon' => 'users','active' => Yii::$app->controller->id === 'admin'],
            ['label' => Yii::t('app', 'Penugasan'), 'url' => ['/admin/assignment'], 'icon' => 'tasks','active' => Yii::$app->controller->id === 'assignment'],
            ['label' => Yii::t('app', 'Jabatan'), 'url' => ['/admin/role'], 'icon' => 'id-badge','active' => Yii::$app->controller->id === 'role'],
            ['label' => Yii::t('app', 'Hak Akses'), 'url' => ['/admin/permission'], 'icon' => 'handshake','active' => Yii::$app->controller->id === 'permission'],
            ['label' => Yii::t('app', 'Rute'), 'url' => ['/admin/route'], 'icon' => 'plug','active' => Yii::$app->controller->id === 'route'],
        ]
    ]
];
$menuItems = Helper::filter($menuItems);
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget([
            'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
            'items' => $menuItems
        ]);?>

    </section>

</aside>
