<?php

namespace AppBundle\File;

class FileUploader
{	
	private $filePath;
	private $file_web_path;

	public function __construct($filePath, $file_web_path){
		$this->filePath = $filePath;
		$this->file_web_path = $file_web_path;
	}

	public function upload($subject){
		$file = $subject->getHeaderImage();

        $filename = md5(uniqid()).'.'.$file->guessExtension();

        $file->move(
        	//$this->getParameter('kernel.root_dir').'/../web/uploads',
        	$this->filePath,
        	$filename
        ); 

        //$article->setHeaderImage($this->getParameter('kernel.root_dir').'/../web/uploads/'.$filename);
        $subject->setHeaderImage($this->file_web_path.'/'.$filename);

        return $subject;
	}
}