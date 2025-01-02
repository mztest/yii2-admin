<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\bootstrap5\Dropdown;

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
            <div class="card-header">
                <div class="card-header">
                    <div class="dropdown float-right">
                        <a href="#" data-bs-toggle="dropdown" class="dropdown-toggle">菜单 <b class="caret"></b></a>
                        <?php
                        echo Dropdown::widget([
                            'items' => $this->params['nav-items'],
                        ]);
                        ?>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?= $content ?>
            </div>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>
