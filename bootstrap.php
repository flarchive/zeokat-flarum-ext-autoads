<?php
/*
 * (c) Zeokat
 */

namespace Zeokat\AddAdsData;

use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
    $events->subscribe(Listener\AddAdsJSData::class);
};
