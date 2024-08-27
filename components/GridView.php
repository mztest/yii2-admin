<?php
/**
 * Author: guoxiaosong
 * At: 2024-08-26
 */

namespace mdm\admin\components;

class GridView extends \yii\grid\GridView
{
    public $tableOptions = ['class' => 'table table-hover'];
    public $pager = [
        'class' => \yii\bootstrap5\LinkPager::class,
    ];
}