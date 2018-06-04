<?php

namespace CodeOrange\TurbolinksLocation;
use Closure;
use Illuminate\Http\Request;

/**
 * Class TurbolinksLocation
 * @package CodeOrange\TurbolinksLocation
 *
 * Sets the Turbolinks-Location header on every request, so it always works for redirects
 */
class TurbolinksLocation {
	public function handle(Request $request, Closure $next) {
		return $next($request)->header('Turbolinks-Location', $request->url());
	}
}
