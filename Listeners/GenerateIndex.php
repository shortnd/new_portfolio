<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;

class GenerateIndex
{
  public function handle(Jigsaw $jigsaw)
  {
    $file = $jigsaw->getDestinationPath() . '/index.json';
    $blogData = collect($jigsaw->getCollection('blog')->map(function ($page) use ($jigsaw) {
          return [
              'title' => $page->title,
              'link' => rightTrimPath($jigsaw->getConfig('baseUrl'))  . $page->getPath(),
              'snippet' => $page->excerpt(),
          ];
      }))->values();

      file_put_contents($file, json_encode($blogData));
      
      $projectData = collect($jigsaw->getCollection('projects')->map(function ($page) use ($jigsaw) {
          return [
              'title' => $page->title,
              'link' => rightTrimPath($jigsaw->getConfig('baseUrl'))  . $page->getPath(),
              'snippet' => $page->excerpt(),
            ];
        })->values());
        
        file_put_contents($file, json_encode($projectData));
      
  }
}
