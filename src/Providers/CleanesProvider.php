<?php

namespace SBKInfo\Cleanes\Providers;

use Illuminate\Support\ServiceProvider;
use SBKInfo\Cleanes\Commands\CleanesCommand;

class CleanesProvider extends ServiceProvider{

	use \SBKInfo\Cleanes\Traits\CleanesProviderTrait;

	protected $commands = array(
		CleanesCommand::class
	);

	public function boot(){

		if($this->app->runningInConsole())
	        $this->commands($this->commands);

	}

}
