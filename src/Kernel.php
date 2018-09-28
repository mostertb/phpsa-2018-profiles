<?php

namespace mostertb\PHPSA2018Profiles;

use mostertb\PHPSA2018Profiles\Profiles\AbstractProfile;
use mostertb\PHPSA2018Profiles\Profiles\AlbertSchermanProfile;
use mostertb\PHPSA2018Profiles\Profiles\BradMostertProfile;
use mostertb\PHPSA2018Profiles\Profiles\GerhardNiemandProfile;
use mostertb\PHPSA2018Profiles\Profiles\MichaelDanckwertsProfile;
use mostertb\PHPSA2018Profiles\Profiles\JadonBrownProfile;
use mostertb\PHPSA2018Profiles\Profiles\LeePelserProfile;
use mostertb\PHPSA2018Profiles\Profiles\TshiamoBhudaProfile;
use mostertb\PHPSA2018Profiles\Profiles\TonyMackProfile;
use mostertb\PHPSA2018Profiles\Profiles\RossvanWykProfile;

class Kernel
{
    /**
     * @var AbstractProfile[]
     */
    private $profiles;

    /**
     * Kernel constructor.
     */
    public function __construct()
    {
        $this->profiles = array(
            new BradMostertProfile(),
            new MichaelDanckwertsProfile(),
            new AlbertSchermanProfile(),
            new JadonBrownProfile(),
            new GerhardNiemandProfile(),
            new LeePelserProfile(),
            new TshiamoBhudaProfile(),
            new TonyMackProfile(),
            new RossvanWykProfile()
        );
    }

    /**
     * @return AbstractProfile[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }
}
