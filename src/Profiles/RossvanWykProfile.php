<?php
namespace mostertb\PHPSA2018Profiles\Profiles;

/**
 * Class RossvanWykProfile
 * @package mostertb\PHPSA2018Profiles\Profiles
 */
class RossvanWykProfile extends AbstractProfile
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Ross van Wyk';
    }

    /**
     * @return string
     */
    public function getBiography()
    {
        return 'Ross also just wants a sticker... :P';
    }

    /**
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'Owkkuri';
    }


    /**
     * @return string
     */
    public function getTwitterUsername()
    {
        return '@owkkuri';
    }

    /**
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://avatars1.githubusercontent.com/u/234763';
    }


}
