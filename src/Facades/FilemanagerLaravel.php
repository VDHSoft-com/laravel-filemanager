<?php 

namespace VDHSoft\FilemanagerLaravel\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class FilemanagerLaravel extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'FilemanagerLaravel'; }
 
}