<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;

class GenerateIndex
{
  public function handle(Jigsaw $jigsaw)
  {
    $file = $jigsaw->getDestinationPath() . '/index.json';
    $allDate = null;
    $blogData = collect($jigsaw->getCollection('blog')->map(function ($page) use ($jigsaw) {
          return [
              'title' => $page->title,
              'link' => rightTrimPath($jigsaw->getConfig('baseUrl'))  . $page->getPath(),
              'snippet' => $page->excerpt(),
          ];
      }))->values();
      
      $projectData = collect($jigsaw->getCollection('projects')->map(function ($page) use ($jigsaw) {
          return [
              'title' => $page->title,
              'link' => rightTrimPath($jigsaw->getConfig('baseUrl'))  . $page->getPath(),
              'snippet' => $page->excerpt(),
            ];
        })->values());

        $allData = $blogData->merge($projectData);
        file_put_contents($file, json_encode($allData));
      
  }
}
