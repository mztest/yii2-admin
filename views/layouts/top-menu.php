<?php
/* @var $this \yii\web\View */
/* @var $content string */

$controller = $this->context;
$menus = $controller->module->menus;
$route = $controller->route;
foreach ($menus as $i => $menu) {
    $menus[$i]['active'] = strpos($route, trim((string)$menu['url'][0], '/')) === 0;
}
$this->params['nav-items'] = $menus;
$this->params['top-menu'] = true;
?>
<?php $this->beginContent($controller->module->mainLayout) ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <?= $content ?>
            </div>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>
