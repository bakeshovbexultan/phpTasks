<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <?php
            $users = [
                [
                    'name' => 'Sunny A.',
                    'position' => 'Lead Author',
                    'profession' => '(UI/UX Expert)',
                    'twitter_link' => 'https://twitter.com/@myplaneticket',
                    'twitter_login' => '@myplaneticket',
                    'wrapbootstrap_link' => 'https://wrapbootstrap.com/user/myorange',
                    'pop_up' => 'Contact Sunny',
                    'img_src' => 'img/demo/authors/sunny.png',
                    'is_banned' => false,
                ],
                [
                    'name' => 'Jos K.',
                    'position' => 'Partner &amp; Contributor',
                    'profession' => '(ASP.NET Developer)',
                    'twitter_link' => 'https://twitter.com/@atlantez',
                    'twitter_login' => '@atlantez',
                    'wrapbootstrap_link' => 'https://wrapbootstrap.com/user/Walapa',
                    'pop_up' => 'Contact Jos',
                    'img_src' => 'img/demo/authors/josh.png',
                    'is_banned' => false,
                ],
                [
                    'name' => 'Jovanni L.',
                    'position' => 'Partner &amp; Contributor',
                    'profession' => '(PHP Developer)',
                    'twitter_link' => 'https://twitter.com/@lodev09',
                    'twitter_login' => '@lodev09',
                    'wrapbootstrap_link' => 'https://wrapbootstrap.com/user/lodev09',
                    'pop_up' => 'Contact Jovanni',
                    'img_src' => 'img/demo/authors/jovanni.png',
                    'is_banned' => true,
                ],
                [
                    'name' => 'Roberto R.',
                    'position' => 'Partner &amp; Contributor',
                    'profession' => '(Rails Developer)',
                    'twitter_link' => 'https://twitter.com/@sildur',
                    'twitter_login' => '@sildur',
                    'wrapbootstrap_link' => 'https://wrapbootstrap.com/user/sildur',
                    'pop_up' => 'Contact Roberto',
                    'img_src' => 'img/demo/authors/roberto.png',
                    'is_banned' => true,
                ],
            ];
        ?>
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                            <?php foreach($users as $user): ?>
                                <div class="<?php echo $user['is_banned'] ? 'banned' : ''; ?> rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                    <img src="<?= $user['img_src'];?>" alt="<?= $user['name']; ?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                    <div class="ml-2 mr-3">
                                        <h5 class="m-0">
                                            <?= $user['name']; ?> <?= $user['profession']; ?>
                                            <small class="m-0 fw-300">
                                                <?= $user['position']; ?>
                                            </small>
                                        </h5>
                                        <a href="<?= $user['twitter_link']; ?>" class="text-info fs-sm" target="_blank"><?= $user['twitter_login']; ?></a> -
                                        <a href="<?= $user['wrapbootstrap_link']; ?>" class="text-info fs-sm" target="_blank" title="<?= $user['pop_up']; ?>"><i class="fal fa-envelope"></i></a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
