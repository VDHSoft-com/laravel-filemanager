<?php

namespace VDHSoft\FilemanagerLaravel;

class FilemanagerLaravel
{
	public static function Filemanager($extraConfig = null){
		return new Filemanager($extraConfig);
	}

}
