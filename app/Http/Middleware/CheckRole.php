<?php

namespace CodeDelivery\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role) //aqui adicionamos um parametro para o middleware
    {
        //Se ele n�o estiver autenticado, ser� redirecionado para a tela do login
        if(!Auth::check())
        {
            return redirect('/auth/login');
        }

        if(Auth::user()->role <> $role)  //se a role do usu�rio autenticado bate com a $role que passamos
        {
            return redirect('/auth/login');
        }


        return $next($request);
    }
}
