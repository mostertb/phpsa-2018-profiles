<?php
namespace mostertb\PHPSA2018Profiles;

use mostertb\PHPSA2018Profiles\Profiles\AbstractProfile;
use mostertb\PHPSA2018Profiles\Profiles\BradMostertProfile;

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
            new BradMostertProfile()
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