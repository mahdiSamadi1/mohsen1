<?php

namespace App\Http\Middleware;

use Closure;

class TransformationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $input   = $request->all();

        array_walk_recursive($input, function(&$val, $key) use(&$input){
            $val = replacePersianDigistWithEnglish($val);
        });

        // Masked Input for comma in currency inputs
//        array_walk_recursive($input, function(&$val, $key) use(&$input){
//        	if (in_array($key, ['mablagh'])) {
//        		$val = preg_replace("/,/", "", $val);
//        	}
//        });

        $request->replace($input);

        return $next($request);
    }
}
