<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class JpJsonResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);

          //JSONでない場合はそのまま
          if (!$response instanceof JsonResponse) {
            return $response;
          }
 
        // Unicodeエスケープさせないようにオプションを追加        
        $response->setEncodingOptions($response->getEncodingOptions() | JSON_UNESCAPED_UNICODE);
 
        return $response;
    }
}
