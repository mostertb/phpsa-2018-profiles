<?php

namespace mostertb\PHPSA2018Profiles;

use mostertb\PHPSA2018Profiles\Profiles\AbstractProfile;
use mostertb\PHPSA2018Profiles\Profiles\AlbertSchermanProfile;
use mostertb\PHPSA2018Profiles\Profiles\AndreSmithProfile;
use mostertb\PHPSA2018Profiles\Profiles\BernhardBreytenbachProfile;
use mostertb\PHPSA2018Profiles\Profiles\BradMostertProfile;
use mostertb\PHPSA2018Profiles\Profiles\DylanHarbourProfile;
use mostertb\PHPSA2018Profiles\Profiles\GerhardNiemandProfile;
use mostertb\PHPSA2018Profiles\Profiles\LeRouxEnslinProfile;
use mostertb\PHPSA2018Profiles\Profiles\MattVoslooProfile;
use mostertb\PHPSA2018Profiles\Profiles\MichaelDanckwertsProfile;
use mostertb\PHPSA2018Profiles\Profiles\MichaelGoodenProfile;
use mostertb\PHPSA2018Profiles\Profiles\JadonBrownProfile;
use mostertb\PHPSA2018Profiles\Profiles\LeePelserProfile;
use mostertb\PHPSA2018Profiles\Profiles\OutieDorflingProfile;
use mostertb\PHPSA2018Profiles\Profiles\RossvanWykProfile;
use mostertb\PHPSA2018Profiles\Profiles\SarelvdWaltProfile;
use mostertb\PHPSA2018Profiles\Profiles\TshiamoBhudaProfile;
use mostertb\PHPSA2018Profiles\Profiles\TonyMackProfile;
use mostertb\PHPSA2018Profiles\Profiles\WilliamStamProfile;
use mostertb\PHPSA2018Profiles\Profiles\PuffyProfile;
use mostertb\PHPSA2018Profiles\Profiles\FrancoSchwimProfile;

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
            new MichaelGoodenProfile(),
            new BradMostertProfile(),
            new MichaelDanckwertsProfile(),
            new AlbertSchermanProfile(),
            new JadonBrownProfile(),
            new GerhardNiemandProfile(),
            new LeePelserProfile(),
            new TshiamoBhudaProfile(),
            new TonyMackProfile(),
            new RossvanWykProfile(),
            new AndreSmithProfile(),
            new LeRouxEnslinProfile(),
            new DylanHarbourProfile(),
            new WilliamStamProfile(),
            new MattVoslooProfile(),
            new PuffyProfile(),
            new SarelvdWaltProfile(),
            new BernhardBreytenbachProfile(),
            new FrancoSchwimProfile(),
            new OutieDorflingProfile(),
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
