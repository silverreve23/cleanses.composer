<?php

namespace SBKInfo\Cleanes\Providers;

use Illuminate\Support\ServiceProvider;

class CleanesProvider extends ServiceProvider{

	use SBKInfo\Cleanes\Traits\CleanesProviderTrait;

	protected $commands = array(
		'SBKInfo\Cleanes\Commands\CleanesCommand::class'
	);

	public function boot(){

		if($this->app->runningInConsole())
	        $this->commands($commands);

	}

}
