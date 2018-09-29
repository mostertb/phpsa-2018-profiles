<?php
namespace mostertb\PHPSA2018Profiles\Profiles;

use GPH\Api\DefaultApi;

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
        $randNo = mt_rand(0,3);
        $messages = [
            0 => "Sysadmin @ Afrihost. I love the intersection of PHP and bash, which, in my opinion, are the best languages.",
            1 => "Sysadmin @ Afrihost. Also an aspiring developer, doing as many projects as possible in my spare time, to solve problems, or just have fun.",
            2 => "Sysadmin @ Afrihost. Learning more about PHP every day, trying to git gud.",
            3 => base64_encode("Sysadmin @Afrihost . Those chairs were super uncomfortable.. Was I the only one to internally Geek out that Michael is a Symfony core Dev?"),
            ];
        return $messages[$randNo];
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
        return "https://cdn.afrihost.com/images/team/dowayne_bd.jpg";
    }

    public function getTwitterUsername()
    {
        return '@breedt_dowayne';
    }
}
