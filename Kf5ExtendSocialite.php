<?php

namespace SocialiteProviders\Kf5;

use SocialiteProviders\Manager\SocialiteWasCalled;

class Kf5ExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('kf5', __NAMESPACE__.'\Provider');
    }
}
