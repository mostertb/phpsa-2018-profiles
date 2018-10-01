<?php
namespace mostertb\PHPSA2018Profiles\Profiles;

/**
 * Class OutieDorflingProfile
 * @package mostertb\PHPSA2018Profiles\Profiles
 */
class OutieDorflingProfile extends AbstractProfile
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Outie Dorfling';
    }

    /**
     * @return string
     */
    public function getBiography()
    {
        return 'https://cheekibreeki.ru';
    }

    /**
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'Dorfling';
    }

    /**
     * @return null|string
     */
    public function getProfileImageURL()
    {
        return 'https://avatars1.githubusercontent.com/u/7113608';
    }
}
