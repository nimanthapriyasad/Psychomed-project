<?php

namespace App\Http\Controllers;
  
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
  
class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
  
        $botman->hears('{message}', function($botman, $message) {
  
            if ($message == 'Hi') {
                $this->askName($botman);
            }
            else if ($message == 'I am fine'){
                $this->firstQ($botman);
            }
            else if ($message == 'Ok'){
                $this->secondQ($botman);
            }
            else{
                $botman->reply("Write 'Hi'...");
            }
  
        });
  
        $botman->listen();
    }
  
    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {
  
            $name = $answer->getText();
  
            $this->say('How are you '.$name.'?');
        });
    }

    public function firstQ($botman)
    {
        $botman->ask('Good to hear that. How was your day mate?', function(Answer $answer) {
  
            $name = $answer->getText();
            
            if ($answer == 'Good') {
                $this->say('Nice. Sign up with Psychomed to get our services.');
            }else if ($answer == 'Bad') {
                $this->say("Ooops! Don't be sorrow. Sign up with Psychomed to get our services.");
            }
  
            
        });
    }
    public function secondQ($botman)
    {
        $botman->ask('Thank you!', function(Answer $answer) {
  
            $name = $answer->getText();
  
            $this->say('');
        });
    }
}