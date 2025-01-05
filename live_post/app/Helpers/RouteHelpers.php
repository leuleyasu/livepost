<?php 

final class RouteHelpers 
{
    
    public static function includeRouteFiles(string $folder){
        $dirIterator = new RecursiveDirectoryIterator(
            __DIR__ . $folder,
            RecursiveDirectoryIterator::SKIP_DOTS | RecursiveDirectoryIterator::FOLLOW_SYMLINKS
        );
        
  $it= new RecursiveIteratorIterator($dirIterator);
  while ($it->valid()) {

if (!$it->isDot()&& 
$it->isReadable()&& $it->isFile()&& $it->current()) {
 
 
 require $it->key();
    # code...
}
$it->next();

    # code...
  }

    }
}

?>