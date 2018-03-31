<?php

/*
 * (c) Zeokat
 */

namespace Zeokat\AddAdsData\Listener;

use Flarum\Event\ConfigureClientView;
use Illuminate\Contracts\Events\Dispatcher;

class AddAdsJSData
{
    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureClientView::class, [$this, 'addAssets']);
    }
    
    public function addAssets(ConfigureClientView $event)
    {
        if ($event->isForum()) {
            $ads_script = '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>';
            $event->view->addHeadString($ads_script);
        }
    }
}
