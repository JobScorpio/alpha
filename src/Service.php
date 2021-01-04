<?php
// +----------------------------------------------------------------------
// | AdMarketing [ WE ONLY DO WHAT IS NECESSARY ]
// +----------------------------------------------------------------------
// | Copyright (c) 2021 http://e.wavate.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Scorpio < libinkiss@yeah.net >
// +----------------------------------------------------------------------
namespace Alpha;

use think\Service as BaseService;

class Service extends BaseService{
    public function boot(){
        $this->app->event->listen('HttpRun', function(){
            $this->app->middleware->add(MultiApp::class);
        });
    }
}