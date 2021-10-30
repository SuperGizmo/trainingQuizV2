<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use Illuminate\Http\Request;
use App\Mail\admin_Dynamic_Quiz;
use App\Mail\customer_Dynamic_Quiz;
use Illuminate\Support\Facades\Mail;

class SendQuizController extends Controller
{
  public function sendQuiz(Request $request){

    $this->saveAnswers($request);

    $user_answers = [];
    $number = 0;


    foreach(json_decode($request->questions) as $question){
      if(isset($question->answer_number) && $question->answer_number == $question->answer){
        $number = $number + 1;
      }
    }


    $percent = ($number / count(json_decode($request->questions))) * 100;
    $percent = substr($percent, 0, 5);
    $status = $this->status($percent);

    Mail::to($request->email)->queue(new customer_Dynamic_Quiz($request, $percent, $status));

    if(env('ADMIN_EMAIL') != ""){
      Mail::to(env('ADMIN_EMAIL'))->queue(new admin_Dynamic_Quiz($request, $percent, $status));
    }
    if(env('ADMIN_EMAIL_TWO') != ""){
      Mail::to(env('ADMIN_EMAIL_TWO'))->queue(new admin_Dynamic_Quiz($request, $percent, $status));
    }
    if(env('ADMIN_EMAIL_THREE') != ""){
      Mail::to(env('ADMIN_EMAIL_THREE'))->queue(new admin_Dynamic_Quiz($request, $percent, $status));
    }
    if(env('ADMIN_EMAIL_FOUR') != ""){
      Mail::to(env('ADMIN_EMAIL_FOUR'))->queue(new admin_Dynamic_Quiz($request, $percent, $status));
    }
    if(env('ADMIN_EMAIL_FIVE') != ""){
      Mail::to(env('ADMIN_EMAIL_FIVE'))->queue(new admin_Dynamic_Quiz($request, $percent, $status));
    }
  }

  public function saveAnswers($request){
    $answer = new Answers;
    $answer->site_id = env('SITE_ID');
    $answer->data = \GuzzleHttp\json_encode($request->all());
    $answer->save();
  }

  public function status($percent){
    if($percent >= 0 && $percent <= 50){
      return "poor";
    }elseif($percent >= 51 && $percent <= 69){
      return "Average";
    }elseif($percent >= 70 && $percent <= 89){
      return "Good";
    }elseif($percent >= 90 && $percent <= 99){
      return "Very Good";
    }elseif($percent == 100){
      return "Excellent";
    }
  }
}
