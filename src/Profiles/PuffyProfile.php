<?php

namespace mostertb\PHPSA2018Profiles\Profiles;

class PuffyProfile extends AbstractProfile
{

  public function getName()
  {
    return "Puffy";
  }

  public function getBiography()
  {
    return 'Puffy (Grant Gordon) is the Lead Developer and Technical Director for a small South African ISP.';
  }

  public function getProfileImageURL()
  {
    return 'https://omnomnom.co.za/img/puffy.png';
  }

  public function getGitHubUsername()
  {
    return 'PuffyZA';
  }

  public function getTwitterUsername()
  {
    return '@PuffyZA';
  }

}
