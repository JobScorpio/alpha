<?php
// +----------------------------------------------------------------------
// | AdMarketing [ WE ONLY DO WHAT IS NECESSARY ]
// +----------------------------------------------------------------------
// | Copyright (c) 2021 http://e.wavate.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Scorpio < libinkiss@yeah.net >
// +----------------------------------------------------------------------
namespace Alpha;

use think\App;

class MultiApp{

    /** @var App */
    protected $app;

    /**
     * 应用名称
     * @var string
     */
    protected $name;

    /**
     * 应用名称
     * @var string
     */
    protected $appName;

    /**
     * 应用路径
     * @var string
     */
    protected $path;

    public function __construct(App $app){
        echo 'MultiApp';
        exit;
    }
}
