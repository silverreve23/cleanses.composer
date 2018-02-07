<?php

namespace SBKInfo\Cleanes\Commands;

use Illuminate\Console\Command;

class CleanesCommand extends Command{

	protected $signature = "make:cleanes {class}";
    private $pathCleanses = null;
    private $stubCleanseClass = null;
    
	protected $description = 'Command description.';

	public function __construct(){

		parent::__construct();
        
        $this->pathCleanses = base_path(
            'database/cleanses'
        );

	}

	public function handle(){

		$message = "\nCreate cleanse started!\n";
        
		$this->info($message);
        $this->createClass();
        

	}
     
    private function createClass(){
        
        $class = $this->argument('class');
        
        $nameCleanseClass = $this->pathCleanses
            .'/'
            .$class
            .'.php';
        
        $message = 'Error! This class name exist!';
        
        if(file_exists($this->pathCleanses))
            if(!file_exists($nameCleanseClass)){
                
                $message = "Create cleanse finished!\n";
        
                file_put_contents(
                    $nameCleanseClass, 
                    $this->stubCleanseClass
                );
                
                $this->info($message);
                
            }
            else
                $this->error($message);
        
        
    }

}
