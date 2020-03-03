<?php
namespace App\Http\Middleware;

//use App\Article;
use Closure;
use Illuminate\Contracts\Auth\Guard;

class SellerMiddleware
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->getUser()->type !== "2" && $this->auth->getUser()->type !== "1") {
            //abort(403, 'Unauthorized action.');
            return redirect()->route('dashboard')->with('message','Unauthorized action');
        }

        return $next($request);
    }
}