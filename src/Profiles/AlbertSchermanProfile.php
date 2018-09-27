<?php
namespace mostertb\PHPSA2018Profiles\Profiles;

class AlbertSchermanProfile extends AbstractProfile
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Albert Scherman';
    }

    /**
     * @return string
     */
    public function getBiography()
    {
        return 'Experienced Product Developer with a demonstrated history of working in the information technology <br>' .
            'and services industry. That line was suggested by LinkedIn and I think it\'s good. Skilled in MVC <br>' .
            'Frameworks, HTML, Cascading Style Sheets (CSS), Web Applications, PHP, WordPress, and XML. Beginner <br>' .
            'with TDD but getting there. Can composer and bootstrap fluently. Love learning new things.';
    }

    /**
     * @return string
     */
    public function getGitHubUsername()
    {
        return 'Bird87ZA';
    }

    /**
     * @return string
     */
    public function getProfileImageURL()
    {
        return 'https://s.gravatar.com/avatar/b56da12914666133adf26afa31afaef2?s=80';
    }

    /**
     * @return string
     */
    public function getTwitterUsername()
    {
        return '@A_Scherman';
    }

    /**
     * @return array
     */
    public function getInvolvedProjects()
    {
        return [
            'cakephp/cakephp' => 'https://github.com/cakephp/cakephp',
            'FriendsOfCake/awesome-cakephp' => 'https://github.com/FriendsOfCake/awesome-cakephp',
        ];
    }
}