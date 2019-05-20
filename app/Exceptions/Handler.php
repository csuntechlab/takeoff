<?php
namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

// Build Response
use App\Exceptions\BuildResponse\BuildResponse;

// Exceptions
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Illuminate\Auth\Access\AuthorizationException;
use  Illuminate\Database\QueryException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        if ($e instanceof HttpException || $e instanceof NotFoundHttpException || $e instanceof ModelNotFoundException) {
            $message = 'Resource could not be resolved';
            $stats_code = 409;
            return BuildResponse::build_response($message, $stats_code);
        } else if ($e instanceof AccessDeniedHttpException || $e instanceof AuthorizationException) {
            $message = 'Unauthorized access.';
            $stats_code = 409;
            return BuildResponse::build_response($message, $stats_code);
        } else if ($e instanceof QueryException) {
            $message = 'Unable to resolve Resource.';
            $stats_code = 409;
            return BuildResponse::build_response($message, $stats_code);
        }
        return parent::render($request, $e);
    }
}
