<?php

namespace SBKInfo\Cleanses\Commands;

use Illuminate\Console\Command;

class CleanserRunCommand extends Command{

	protected $signature = "db:cleanser {class}";
    private $pathCleanses = null;
    
	protected $description = 'Run cleanser class.';

	public function __construct(){

		parent::__construct();
        
        $this->pathCleanses = base_path(
            'database/cleanses'
        );

	}

	public function handle(){

		$message = "\nRun cleanse started!\n";
        
		$this->info($message);
		$this->runClass();
        

	}
    
    private function runClass(){
        
        $class = $this->argument('class');
        
        require_once 
            $this->pathCleanses
            .'/'
            .$class
            .'.php';
        
        $class = new $class();
        $class->run();
        
        $message = "Run cleanse finished!\n";
        $this->info($message);
        
    }

}
