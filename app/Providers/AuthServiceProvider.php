<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        'App\User' => 'App\Policies\UserPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('allow-quiz', function($user, $quiz){
            if($user->hasQuizAttempt($quiz->id)) {
                if (!$user->canRetakeQuiz($quiz->id)) {
                    return false;
                }
            }
             return true;
        });

        $gate->define('quiz-active', function($user, $quiz){
            if($quiz->active|| $user->admin)
                return true;
            else return false;
        });

        $gate->define('survey-active', function($user, $survey){
            if($survey->active|| $user->admin)
                return true;
            else return false;
        });
        $gate->define('submission-active', function($user, $submission){
            if($submission->active|| $user->admin)
                return true;
            else return false;
        });
        $gate->define('peerevaluation-active', function($user, $peerevaluation){
            if($peerevaluation->active || $user->admin)
                return true;
            else return false;
        });
    }
}
