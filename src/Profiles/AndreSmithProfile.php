<?php

namespace mostertb\PHPSA2018Profiles\Profiles;

class AndreSmithProfile extends AbstractProfile
{
    /**
     * Provides the full name of the person that the profile is about
     *
     * @return string
     */
    public function getName()
    {
        return 'Andre Smith';
    }

    /**
     * Provides a paragraph of text about the person that the profile is about
     *
     * @return string
     */
    public function getBiography()
    {
        return <<<BIO
Andre does Symfony development for MiWay Insurance. <br>
He has recently started to explore VUE JS, and has been taking part in slowly introducing VUE JS into existing projects has is working on. 
BIO;
    }

    public function getProfileImageURL()
    {
        return 'https://s.gravatar.com/avatar/c49672e997092d9eb1a56670f099d0c2?s=80';
    }

    public function getGitHubUsername()
    {
        return 'smithandre';
    }

    public function getTwitterUsername()
    {
        return '@Cyberbeast';
    }
}
