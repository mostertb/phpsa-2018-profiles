<?php
require_once __DIR__ . '/../vendor/autoload.php';

$kernel = new mostertb\PHPSA2018Profiles\Kernel();
?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>PHP South Africa 2018 Profiles</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" ></script>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>PHP South Africa 2018 Attendee Profiles</h1>

            <h2>About</h2>
            <p>
                Once again this year, a core theme at the <a href="http://phpsouthafrica.com" target="_blank">PHP SA 2018 Conference</a>
                has been the importance of getting involved in OpenSource projects. This is why we have dusted off our yearly
                humorous educational project.
            </p>

            <p>
                If you have been thinking about getting involved in OpenSource but the whole exercise seems daunting, we invite
                you to sign up a <a href="https://github.com/" target="_blank">GitHub Account</a> and submit a
                <a href="https://help.github.com/articles/about-pull-requests/" target="_blank">Pull Request</a> to the
                the <a href="https://github.com/mostertb/phpsa-2018-profiles">phpsa-2018-profiles</a> project (the code that generates this
                page) as a way to get you started.
            </p>

            <h2>Why?</h2>
            <p>
                The main idea is to provide a safe environment in which to practice the mechanics of contributing to a GitHub
                project in order to break down one more barrier between you and one of the world's most addictive hobbies.<br>
                If you're already an open source contributor/maintainer, this is also a great platform to recommend projects
                for other attendee to get involved in.
            </p>
            <p>
                By submitting a profile, you also get an opportunity introduce yourself and jump into the all-important "Hallway Track"
            </p>
            <p>
                Most importantly, though, its fun to hack away at some code over the week
            </p>

            <p>
                Once you've gotten your feet wet by submitting your first pull request, we recommend that you go have a
                look at Digital Ocean's <a href="https://hacktoberfest.digitalocean.com/" target="_blank">Hacktoberfest</a>
                initiative
            </p>

            <p>You may also want to look at <strong>TODO.md</strong> in this project if you'd like to continue to contribute here...</p>

            <h2>Prizes!</h2>

            <h3>Stickers</h3>
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="thumbnail">
                        <img src="https://cdn.shopify.com/s/files/1/0051/4802/products/sticker-large_512x512.jpg?v=1368814212" alt="GitHub Stickers">
                        <div class="caption text-center">
                            This year we have stickers! Once you have had your Pull Request accepted, go say hi to Brad Mostert
                            and he'll give you a GitHub sticker. <br>
                        </div>
                    </div>
                </div>
            </div>

            <h3>JetBrains License</h3>
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <p class="text-center">
                        The best submission to this project will win a 1-Year JetBrains license valid for any of their IDEs.
                        In order to qualify for this prize, you need to open pull requests that do more than simply add your
                        profile information
                    </p>
                </div>
            </div>



            <h2>History</h2>
            <p>So this is the fourth time we are doing this... Its a PHP SA tradition now</p>

            <h4>2015</h4>
            <p>
                At the PHP Craft Conference 2015 the contributors of this project played a little joke.
            </p>
            <p>
                The 2015 conference organisers had decided to hold a competition to win a
                <a href="https://www.jetbrains.com/phpstorm/" target="_blank">JetBrains PHPStorm</a> license. To enter,
                attendees simply had to submit a Pull Request... to any OpenSource project. So we created a project!
            </p>
            <p>
                <strong>Everyone was disqualified... :)</strong>
            </p>

            <h4>2016</h4>
            <p>
                At the 2016 conference we tried to go legitimate to see if we could get away with it. We did. Zander was grumpy
                with us. It was hilarious
            </p>

            <h4>2017</h4>
            <p>
                In 2017 the Cape Town conference attendees absolutly knocked the project out the park:
                <a href="http://www.phpsa2017profiles.co.za/public/" target="_blank">PHP SA 2017 Profiles</a>.
                This year the aim is to outdo last year
            </p>


            <h2>Contents</h2>
            <div class="list-group">
                <?php
                foreach($kernel->getProfiles() as $index => $profile){
                    echo '<a href="#'.$profile->getSlug().'" class="list-group-item">'.$profile->getName().'</a>'.PHP_EOL;
                }
                ?>
            </div>


            <h2>Bios</h2>
            <?php
            foreach($kernel->getProfiles() as $index => $profile){
                $fullname = $profile->getName();
                ?>
                <div class="media">
                    <div class="media-left">

                        <a name="<?php echo $profile->getSlug(); ?>">
                            <img class="media-object" width="64" height="64" src="<?php echo $profile->getProfileImageURL(); ?>" alt="<?php echo $fullname;?>">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $fullname; ?></h4>
                        <p>
                            <?php echo $profile->getBiography(); ?>
                        </p>
                        <?php
                        if (!empty($profile->getGitHubUsername())){
                            ?>
                            <p>
                                <strong>GitHub Homepage:</strong>
                                <a href="https://github.com/<?php echo $profile->getGitHubUsername();?>" target="_blank">
                                    <?php echo $profile->getGitHubUsername() ?>
                                </a>
                            </p>
                            <?php
                        } // end Github Homepage

                        if(count($profile->getMaintainedProjects()) > 0){
                            echo "<h5>Projects</h5>";
                            echo "<ul>";
                            foreach ($profile->getMaintainedProjects() as $name => $url){
                                echo '<li><a href="'.$url.'" target="_blank">'.$name.'</a></li>';
                            }
                            echo "</ul>";
                        } // end Maintained Projects

                        if(count($profile->getInvolvedProjects()) > 0){
                            echo "<h5>Involved In</h5>";
                            echo "<ul>";
                            foreach ($profile->getInvolvedProjects() as $name => $url){
                                echo '<li><a href="'.$url.'" target="_blank">'.$name.'</a></li>';
                            }
                            echo "</ul>";
                        } // end Involved Projects
                        ?>
                    </div>
                </div>

                <hr>
                <?php
            } // end bio foreach
            ?>
        </div>
    </div>
</div>

</body>
</html>

