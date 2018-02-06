<?php

namespace SBKInfo\Cleanes\Commands;

use Illuminate\Console\Command;

class CleanesCommand extends Command{

	protected $name = 'make:cleanes';
	protected $description = 'Command description.';

	public function __construct(){

		parent::__construct();

	}

	public function handle(){

		$message = "Cleanes started!";

		echo $this->newLine(
			$this->color($message, 'red')
		);

	}

}
