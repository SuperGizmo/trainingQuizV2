<?php

namespace App\Http\Controllers;

use App\Mail\tcf;
use App\Mail\gkv2;
use App\Mail\fcaone;
use App\Mail\fcatwo;
use App\Mail\GDACourse;
use App\Mail\GDGCourse;
use App\Mail\Antimoney;
use App\Models\Answers;
use App\Mail\VCAssessment;
use App\Mail\customer_tcf;
use App\Mail\customer_gkv2;
use Illuminate\Http\Request;
use App\Mail\customer_fcaone;
use App\Mail\customer_fcatwo;
use App\Mail\Generalknowledge;
use App\Mail\antiBriberyCourse;
use App\Mail\customer_GDACourse;
use App\Mail\customer_GDGCourse;
use App\Mail\customer_VCAssessment;
use Illuminate\Support\Facades\Mail;
use App\Mail\customer_antiBriberyCourse;
use App\Mail\DataProtectionTrainingCourse;
use App\Mail\admin_RiskAssessmentTrainingCourse;
use App\Mail\GeneralHealthandSafetyTrainingCourse;
use App\Mail\customer_RiskAssessmentTrainingCourse;
use App\Mail\customer_DataProtectionTrainingCourse;
use App\Mail\admin_HealthSafetyintheWorkplaceTraining;
use App\Mail\admin_DisplayScreenEquipmentTrainingCourse;
use App\Mail\customer_HealthSafetyintheWorkplaceTraining;
use App\Mail\admin_HazardousSubstancesandWorkingatHeight;
use App\Mail\customer_GeneralHealthandSafetyTrainingCourse;
use App\Mail\customer_DisplayScreenEquipmentTrainingCourse;
use App\Mail\admin_WorkplaceSafetyandWelfareTrainingCourse;
use App\Mail\customer_HazardousSubstancesandWorkingatHeight;
use App\Mail\admin_FCATreatingCustomersFairlyTrainingCourse;
use App\Mail\customer_WorkplaceSafetyandWelfareTrainingCourse;
use App\Mail\customer_FCATreatingCustomersFairlyTrainingCourse;
use App\Mail\admin_NoiseVibrationAndVehicleSafetyTrainingCourse;
use App\Mail\customer_NoiseVibrationAndVehicleSafetyTrainingCourse;

use App\Mail\customer_QualityHealthSafetyEnvironmentalCourse;
use App\Mail\admin_QualityHealthSafetyEnvironmentalCourse;

use App\Mail\admin_DeclarationQuiz;
use App\Mail\customer_DeclarationQuiz;

class QuizController extends Controller
{

  public function NoiseVibrationAndVehicleSafetyTrainingCourse(Request $request){

    Mail::to($request->email)->queue(new customer_NoiseVibrationAndVehicleSafetyTrainingCourse($request));
    if(env('ADMIN_EMAIL') != ""){
      Mail::to(env('ADMIN_EMAIL'))->queue(new admin_NoiseVibrationAndVehicleSafetyTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_TWO') != ""){
      Mail::to(env('ADMIN_EMAIL_TWO'))->queue(new admin_NoiseVibrationAndVehicleSafetyTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_THREE') != ""){
      Mail::to(env('ADMIN_EMAIL_THREE'))->queue(new admin_NoiseVibrationAndVehicleSafetyTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_FOUR') != ""){
      Mail::to(env('ADMIN_EMAIL_FOUR'))->queue(new admin_NoiseVibrationAndVehicleSafetyTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_FIVE') != ""){
      Mail::to(env('ADMIN_EMAIL_FIVE'))->queue(new admin_NoiseVibrationAndVehicleSafetyTrainingCourse($request));
    }
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }

  public function RiskAssessmentTrainingCourse(Request $request){

    Mail::to($request->email)->queue(new customer_RiskAssessmentTrainingCourse($request));
    if(env('ADMIN_EMAIL') != ""){
      Mail::to(env('ADMIN_EMAIL'))->queue(new admin_RiskAssessmentTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_TWO') != ""){
      Mail::to(env('ADMIN_EMAIL_TWO'))->queue(new admin_RiskAssessmentTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_THREE') != ""){
      Mail::to(env('ADMIN_EMAIL_THREE'))->queue(new admin_RiskAssessmentTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_FOUR') != ""){
      Mail::to(env('ADMIN_EMAIL_FOUR'))->queue(new admin_RiskAssessmentTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_FIVE') != ""){
      Mail::to(env('ADMIN_EMAIL_FIVE'))->queue(new admin_RiskAssessmentTrainingCourse($request));
    }
  }

  public function WorkplaceSafetyandWelfareTrainingCourse(Request $request){

    Mail::to($request->email)->queue(new customer_WorkplaceSafetyandWelfareTrainingCourse($request));
    if(env('ADMIN_EMAIL') != ""){
      Mail::to(env('ADMIN_EMAIL'))->queue(new admin_WorkplaceSafetyandWelfareTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_TWO') != ""){
      Mail::to(env('ADMIN_EMAIL_TWO'))->queue(new admin_WorkplaceSafetyandWelfareTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_THREE') != ""){
      Mail::to(env('ADMIN_EMAIL_THREE'))->queue(new admin_WorkplaceSafetyandWelfareTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_FOUR') != ""){
      Mail::to(env('ADMIN_EMAIL_FOUR'))->queue(new admin_WorkplaceSafetyandWelfareTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_FIVE') != ""){
      Mail::to(env('ADMIN_EMAIL_FIVE'))->queue(new admin_WorkplaceSafetyandWelfareTrainingCourse($request));
    }
  }



  public function HazardousSubstancesandWorkingatHeight(Request $request){

    Mail::to($request->email)->queue(new customer_HazardousSubstancesandWorkingatHeight($request));
    if(env('ADMIN_EMAIL') != ""){
      Mail::to(env('ADMIN_EMAIL'))->queue(new admin_HazardousSubstancesandWorkingatHeight($request));
    }
    if(env('ADMIN_EMAIL_TWO') != ""){
      Mail::to(env('ADMIN_EMAIL_TWO'))->queue(new admin_HazardousSubstancesandWorkingatHeight($request));
    }
    if(env('ADMIN_EMAIL_THREE') != ""){
      Mail::to(env('ADMIN_EMAIL_THREE'))->queue(new admin_HazardousSubstancesandWorkingatHeight($request));
    }
    if(env('ADMIN_EMAIL_FOUR') != ""){
      Mail::to(env('ADMIN_EMAIL_FOUR'))->queue(new admin_HazardousSubstancesandWorkingatHeight($request));
    }
    if(env('ADMIN_EMAIL_FIVE') != ""){
      Mail::to(env('ADMIN_EMAIL_FIVE'))->queue(new admin_HazardousSubstancesandWorkingatHeight($request));
    }
  }

  public function HealthSafetyintheWorkplaceTraining(Request $request){

    Mail::to($request->email)->queue(new customer_HealthSafetyintheWorkplaceTraining($request));

    if(env('ADMIN_EMAIL') != ""){
      Mail::to(env('ADMIN_EMAIL'))->queue(new admin_HealthSafetyintheWorkplaceTraining($request));
    }
    if(env('ADMIN_EMAIL_TWO') != ""){
      Mail::to(env('ADMIN_EMAIL_TWO'))->queue(new admin_HealthSafetyintheWorkplaceTraining($request));
    }
    if(env('ADMIN_EMAIL_THREE') != ""){
      Mail::to(env('ADMIN_EMAIL_THREE'))->queue(new admin_HealthSafetyintheWorkplaceTraining($request));
    }
    if(env('ADMIN_EMAIL_FOUR') != ""){
      Mail::to(env('ADMIN_EMAIL_FOUR'))->queue(new admin_HealthSafetyintheWorkplaceTraining($request));
    }
    if(env('ADMIN_EMAIL_FIVE') != ""){
      Mail::to(env('ADMIN_EMAIL_FIVE'))->queue(new admin_HealthSafetyintheWorkplaceTraining($request));
    }
  }

  public function SendFCATreatingCustomersFairlyTrainingCourse(Request $request){

    Mail::to($request->email)->queue(new customer_FCATreatingCustomersFairlyTrainingCourse($request));

    if(env('ADMIN_EMAIL') != ""){
      Mail::to(env('ADMIN_EMAIL'))->queue(new admin_FCATreatingCustomersFairlyTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_TWO') != ""){
      Mail::to(env('ADMIN_EMAIL_TWO'))->queue(new admin_FCATreatingCustomersFairlyTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_THREE') != ""){
      Mail::to(env('ADMIN_EMAIL_THREE'))->queue(new admin_FCATreatingCustomersFairlyTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_FOUR') != ""){
      Mail::to(env('ADMIN_EMAIL_FOUR'))->queue(new admin_FCATreatingCustomersFairlyTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_FIVE') != ""){
      Mail::to(env('ADMIN_EMAIL_FIVE'))->queue(new admin_FCATreatingCustomersFairlyTrainingCourse($request));
    }
  }


  public function saveAnswers($request){
    $answer = new Answers;
    $answer->site_id = env('SITE_ID');
    $answer->data = \GuzzleHttp\json_encode($request->all());
    $answer->save();
  }

  public function sendFCAOne(Request $request){

    $this->saveAnswers($request);

    Mail::to($request->email)->queue(new customer_fcaone($request));

    if(env('ADMIN_EMAIL') != ""){
      Mail::to(env('ADMIN_EMAIL'))->queue(new fcaone($request));
    }
    if(env('ADMIN_EMAIL_TWO') != ""){
      Mail::to(env('ADMIN_EMAIL_TWO'))->queue(new fcaone($request));
    }
    if(env('ADMIN_EMAIL_THREE') != ""){
      Mail::to(env('ADMIN_EMAIL_THREE'))->queue(new fcaone($request));
    }
    if(env('ADMIN_EMAIL_FOUR') != ""){
      Mail::to(env('ADMIN_EMAIL_FOUR'))->queue(new fcaone($request));
    }
    if(env('ADMIN_EMAIL_FIVE') != ""){
      Mail::to(env('ADMIN_EMAIL_FIVE'))->queue(new fcaone($request));
    }
  }


  public function sendFCATwo(Request $request){

    $this->saveAnswers($request);

    Mail::to($request->email)->queue(new customer_fcatwo($request));

    if(env('ADMIN_EMAIL') != ""){
      Mail::to(env('ADMIN_EMAIL'))->queue(new fcatwo($request));
    }
    if(env('ADMIN_EMAIL_TWO') != ""){
      Mail::to(env('ADMIN_EMAIL_TWO'))->queue(new fcatwo($request));
    }
    if(env('ADMIN_EMAIL_THREE') != ""){
      Mail::to(env('ADMIN_EMAIL_THREE'))->queue(new fcatwo($request));
    }
    if(env('ADMIN_EMAIL_FOUR') != ""){
      Mail::to(env('ADMIN_EMAIL_FOUR'))->queue(new fcatwo($request));
    }
    if(env('ADMIN_EMAIL_FIVE') != ""){
      Mail::to(env('ADMIN_EMAIL_FIVE'))->queue(new fcatwo($request));
    }
  }


  public function sendanti_bribery_course(Request $request){

    $this->saveAnswers($request);

    Mail::to($request->email)->queue(new customer_antiBriberyCourse($request));

    if(env('ADMIN_EMAIL') != ""){
      Mail::to(env('ADMIN_EMAIL'))->queue(new antiBriberyCourse($request));
    }
    if(env('ADMIN_EMAIL_TWO') != ""){
      Mail::to(env('ADMIN_EMAIL_TWO'))->queue(new antiBriberyCourse($request));
    }
    if(env('ADMIN_EMAIL_THREE') != ""){
      Mail::to(env('ADMIN_EMAIL_THREE'))->queue(new antiBriberyCourse($request));
    }
    if(env('ADMIN_EMAIL_FOUR') != ""){
      Mail::to(env('ADMIN_EMAIL_FOUR'))->queue(new antiBriberyCourse($request));
    }
    if(env('ADMIN_EMAIL_FIVE') != ""){
      Mail::to(env('ADMIN_EMAIL_FIVE'))->queue(new antiBriberyCourse($request));
    }
  }

  public function sendGDACourse(Request $request){

    $this->saveAnswers($request);

    Mail::to($request->email)->queue(new customer_GDACourse($request));

    if(env('ADMIN_EMAIL') != ""){
      Mail::to(env('ADMIN_EMAIL'))->queue(new GDACourse($request));
    }
    if(env('ADMIN_EMAIL_TWO') != ""){
      Mail::to(env('ADMIN_EMAIL_TWO'))->queue(new GDACourse($request));
    }
    if(env('ADMIN_EMAIL_THREE') != ""){
      Mail::to(env('ADMIN_EMAIL_THREE'))->queue(new GDACourse($request));
    }
    if(env('ADMIN_EMAIL_FOUR') != ""){
      Mail::to(env('ADMIN_EMAIL_FOUR'))->queue(new GDACourse($request));
    }
    if(env('ADMIN_EMAIL_FIVE') != ""){
      Mail::to(env('ADMIN_EMAIL_FIVE'))->queue(new GDACourse($request));
    }
  }


  public function sendGDGCourse(Request $request){

    $this->saveAnswers($request);

    Mail::to($request->email)->queue(new customer_GDGCourse($request));

    if(env('ADMIN_EMAIL') != ""){
      Mail::to(env('ADMIN_EMAIL'))->queue(new GDGCourse($request));
    }
    if(env('ADMIN_EMAIL_TWO') != ""){
      Mail::to(env('ADMIN_EMAIL_TWO'))->queue(new GDGCourse($request));
    }
    if(env('ADMIN_EMAIL_THREE') != ""){
      Mail::to(env('ADMIN_EMAIL_THREE'))->queue(new GDGCourse($request));
    }
    if(env('ADMIN_EMAIL_FOUR') != ""){
      Mail::to(env('ADMIN_EMAIL_FOUR'))->queue(new GDGCourse($request));
    }
    if(env('ADMIN_EMAIL_FIVE') != ""){
      Mail::to(env('ADMIN_EMAIL_FIVE'))->queue(new GDGCourse($request));
    }
  }

  public function sendDataProtectionTrainingCourse(Request $request){
    $this->saveAnswers($request);
    Mail::to($request->email)->queue(new customer_DataProtectionTrainingCourse($request));

    if(env('ADMIN_EMAIL') != ""){
      Mail::to(env('ADMIN_EMAIL'))->queue(new DataProtectionTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_TWO') != ""){
      Mail::to(env('ADMIN_EMAIL_TWO'))->queue(new DataProtectionTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_THREE') != ""){
      Mail::to(env('ADMIN_EMAIL_THREE'))->queue(new DataProtectionTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_FOUR') != ""){
      Mail::to(env('ADMIN_EMAIL_FOUR'))->queue(new DataProtectionTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_FIVE') != ""){
      Mail::to(env('ADMIN_EMAIL_FIVE'))->queue(new DataProtectionTrainingCourse($request));
    }
  }

  public function sendGeneralHealthandSafetyTrainingCourse(Request $request){
    $this->saveAnswers($request);
    Mail::to($request->email)->queue(new customer_GeneralHealthandSafetyTrainingCourse($request));

    if(env('ADMIN_EMAIL') != ""){
      Mail::to(env('ADMIN_EMAIL'))->queue(new GeneralHealthandSafetyTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_TWO') != ""){
      Mail::to(env('ADMIN_EMAIL_TWO'))->queue(new GeneralHealthandSafetyTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_THREE') != ""){
      Mail::to(env('ADMIN_EMAIL_THREE'))->queue(new GeneralHealthandSafetyTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_FOUR') != ""){
      Mail::to(env('ADMIN_EMAIL_FOUR'))->queue(new GeneralHealthandSafetyTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_FIVE') != ""){
      Mail::to(env('ADMIN_EMAIL_FIVE'))->queue(new GeneralHealthandSafetyTrainingCourse($request));
    }
  }

  public function DisplayScreenEquipmentTrainingCourse(Request $request){

    Mail::to($request->email)->queue(new customer_DisplayScreenEquipmentTrainingCourse($request));
    if(env('ADMIN_EMAIL') != ""){
      Mail::to(env('ADMIN_EMAIL'))->queue(new admin_DisplayScreenEquipmentTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_TWO') != ""){
      Mail::to(env('ADMIN_EMAIL_TWO'))->queue(new admin_DisplayScreenEquipmentTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_THREE') != ""){
      Mail::to(env('ADMIN_EMAIL_THREE'))->queue(new admin_DisplayScreenEquipmentTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_FOUR') != ""){
      Mail::to(env('ADMIN_EMAIL_FOUR'))->queue(new admin_DisplayScreenEquipmentTrainingCourse($request));
    }
    if(env('ADMIN_EMAIL_FIVE') != ""){
      Mail::to(env('ADMIN_EMAIL_FIVE'))->queue(new admin_DisplayScreenEquipmentTrainingCourse($request));
    }
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

    public function QualityHealthSafetyEnvironmentalCourse(Request $request){

        Mail::to($request->email)->queue(new customer_QualityHealthSafetyEnvironmentalCourse($request));
        if(env('ADMIN_EMAIL') != ""){
            Mail::to(env('ADMIN_EMAIL'))->queue(new admin_QualityHealthSafetyEnvironmentalCourse($request));
        }
        if(env('ADMIN_EMAIL_TWO') != ""){
            Mail::to(env('ADMIN_EMAIL_TWO'))->queue(new admin_QualityHealthSafetyEnvironmentalCourse($request));
        }
        if(env('ADMIN_EMAIL_THREE') != ""){
            Mail::to(env('ADMIN_EMAIL_THREE'))->queue(new admin_QualityHealthSafetyEnvironmentalCourse($request));
        }
        if(env('ADMIN_EMAIL_FOUR') != ""){
            Mail::to(env('ADMIN_EMAIL_FOUR'))->queue(new admin_QualityHealthSafetyEnvironmentalCourse($request));
        }
        if(env('ADMIN_EMAIL_FIVE') != ""){
            Mail::to(env('ADMIN_EMAIL_FIVE'))->queue(new admin_QualityHealthSafetyEnvironmentalCourse($request));
        }
    }




    public function DeclarationQuiz(Request $request){

        $answers = [
            1 => 1,
            2 => 1,
            3 => 1,
            4 => 1,
            5 => 1,
            6 => 1,
            7 => 1,
            8 => 1,
            9 => 1,
            10 => 1,
            11 => 1,
            12 => 1,
            13 => 1,
            14 => 1,
            15 => 1,
            16 => 1,
            17 => 1,
            18 => 1,
            19 => 1,
            20 => 1,
            21 => 2,
            22 => 1,
            23 => 1,
            24 => 1,
            25 => 1,
        ];

        $user_answers = [];
        $number = 0;
        $user_answers[1] = $request->question_1;
        $user_answers[2] = $request->question_2;
        $user_answers[3] = $request->question_3;
        $user_answers[4] = $request->question_4;
        $user_answers[5] = $request->question_5;
        $user_answers[6] = $request->question_6;
        $user_answers[7] = $request->question_7;
        $user_answers[8] = $request->question_8;
        $user_answers[9] = $request->question_9;
        $user_answers[10] = $request->question_10;
        $user_answers[11] = $request->question_11;
        $user_answers[12] = $request->question_12;
        $user_answers[13] = $request->question_13;
        $user_answers[14] = $request->question_14;
        $user_answers[15] = $request->question_15;
        $user_answers[16] = $request->question_16;
        $user_answers[17] = $request->question_17;
        $user_answers[18] = $request->question_18;
        $user_answers[19] = $request->question_19;
        $user_answers[20] = $request->question_20;
        $user_answers[21] = $request->question_21;
        $user_answers[22] = $request->question_22;
        $user_answers[23] = $request->question_23;
        $user_answers[24] = $request->question_24;
        $user_answers[25] = $request->question_25;

        foreach($answers as $k => $answer){
            if(isset($user_answers[$k]) && $user_answers[$k] == $answer){
                $number += 1;
            }
        }

        $percent = ($number / count($answers)) * 100;

        $percent = substr($percent, 0, 5);

        $status = $this->status($percent);

        Mail::to($request->email)->queue(new customer_DeclarationQuiz($request, $percent, $status));

        if(env('ADMIN_EMAIL') != ""){
            Mail::to(env('ADMIN_EMAIL'))->queue(new admin_DeclarationQuiz($request, $percent, $status, $user_answers));
        }
        if(env('ADMIN_EMAIL_TWO') != ""){
            Mail::to(env('ADMIN_EMAIL_TWO'))->queue(new admin_DeclarationQuiz($request, $percent, $status, $user_answers));
        }
        if(env('ADMIN_EMAIL_THREE') != ""){
            Mail::to(env('ADMIN_EMAIL_THREE'))->queue(new admin_DeclarationQuiz($request, $percent, $status, $user_answers));
        }
        if(env('ADMIN_EMAIL_FOUR') != ""){
            Mail::to(env('ADMIN_EMAIL_FOUR'))->queue(new admin_DeclarationQuiz($request, $percent, $status, $user_answers));
        }
        if(env('ADMIN_EMAIL_FIVE') != ""){
            Mail::to(env('ADMIN_EMAIL_FIVE'))->queue(new admin_DeclarationQuiz($request, $percent, $status, $user_answers));
        }
    }

}
