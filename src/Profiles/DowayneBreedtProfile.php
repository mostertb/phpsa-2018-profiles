<?php

namespace mostertb\PHPSA2018Profiles\Profiles;

use Ornicar\GravatarBundle\GravatarApi;

class DowayneBreedtProfile extends AbstractProfile
{

    /**
     * Provides the full name of the person that the profile is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Dowayne Breedt Profile.';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return "Sysadmin @ Afrihost. I am trying to git gud. I do lots of debugging.";
    }

    public function getGitHubUsername()
    {
        return 'DowayneB';
    }

    public function getMaintainedProjects()
    {
        return array();
    }

    public function getInvolvedProjects()
    {
        return array();
    }

    public function getProfileImageURL()
    {
        $gvApi = new GravatarApi();

        return $gvApi->getUrl('dowaynebreedt@gmail.com');
    }

    public function getTwitterUsername()
    {
        return '@breedt_dowayne';
    }
}
