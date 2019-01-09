<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;

class GenerateIndex
{
  public function handle(Jigsaw $jigsaw)
  {
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

      file_put_contents($jigsaw->getDestinationPath() . '/index.json', json_encode($blogData));
      
      file_put_contents($jigsaw->getDestinationPath() . '/index.json', json_encode($projectData));
  }
}
