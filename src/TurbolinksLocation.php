<?php

namespace CodeOrange\TurbolinksLocation;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * Class TurbolinksLocation
 * @package CodeOrange\TurbolinksLocation
 *
 * Sets the Turbolinks-Location header on every request, so it always works for redirects
 */
class TurbolinksLocation {
	public function handle(Request $request, Closure $next) {
		$response = $next($request);
		if($response instanceof BinaryFileResponse || $response instanceof StreamedResponse) {
			return $response;
		}
		return $response->header('Turbolinks-Location', $request->fullUrl());
	}
}
