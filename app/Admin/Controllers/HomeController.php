<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('Dashboard')
            ->description('Description...')
            ->row(Dashboard::title())
//            ->breadcrumb(
//                ['text' => '首页', 'url' => '/admin'],
//                ['text' => '用户管理', 'url' => '/admin/users'],
//                ['text' => '编辑用户']
//            )
            ->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                    $column->append(Dashboard::dependencies());
                    $column->append(Dashboard::dependencies());
                    $column->row(function(Row $row) {
                        $row->column(6, '444');
                        $row->column(6, '555');
                    });
                });
            });
    }
}
