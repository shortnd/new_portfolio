<?php

use TightenCo\Jigsaw\Jigsaw;

$events->afterBuild(App\Listeners\GenerateSitemap::class);
