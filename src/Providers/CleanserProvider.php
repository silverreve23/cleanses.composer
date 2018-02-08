<?php

namespace SBKInfo\Cleanses\Providers;

use Illuminate\Support\ServiceProvider;
use SBKInfo\Cleanses\Commands\CleanserMakeCommand;
use SBKInfo\Cleanses\Commands\CleanserRunCommand;

class CleanserProvider extends ServiceProvider{

	use \SBKInfo\Cleanses\Traits\CleanserProviderTrait;

	protected $commands = array(
		CleanserMakeCommand::class,
		CleanserRunCommand::class,
	);

	public function boot(){

		if($this->app->runningInConsole())
	        $this->commands($this->commands);

	}

}
