<?php

namespace mostertb\PHPSA2018Profiles\Profiles;

class DylanHarbourProfile extends AbstractProfile
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Dylan Harbour';
    }

    /**
     * @return string
     */
    public function getBiography()
    {
        return "I've been a PHP dev for over 10 years. \n
        Currently working at ROAM (Ringier One Africa Media) in Woodstock, Cape Town\n
        I believe in the benefits of Frameworks, especially Laravel.\n
        Passionate about innovation in Africa, photography and making things in both the physical and digital realm.";
    }

    /**
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'dylanharbour';
    }

    /**
     * @return string
     */
    public function getTwitterUsername()
    {
        return 'dylanharbour';
    }

    /**
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://avatars2.githubusercontent.com/u/21034071?s=460&v=4';
    }
}
