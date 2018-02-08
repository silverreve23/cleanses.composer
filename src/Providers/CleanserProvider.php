<?php

namespace SBKInfo\Cleanses\Providers;

use Illuminate\Support\ServiceProvider;
use SBKInfo\Cleanses\Commands\CleanserCommand;

class CleanserProvider extends ServiceProvider{

	use \SBKInfo\Cleanses\Traits\CleanserProviderTrait;

	protected $commands = array(
		CleanesCommand::class
	);

	public function boot(){

		if($this->app->runningInConsole())
	        $this->commands($this->commands);

	}

}
