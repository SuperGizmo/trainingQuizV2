<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\SendQuizController;
use App\Http\Controllers\ViewQuizController;
use App\Http\Controllers\ViewCourseController;
use App\Http\Controllers\SendCourseController;
use App\Http\Controllers\SendLegislationController;
use App\Http\Controllers\ViewLegislationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ViewController::class, 'home']);
Route::get('/disclaimer', [ViewController::class, 'disclaimer']);
Route::get('/PrivacyNotice', [ViewController::class, 'PrivacyNotice']);
Route::get('/Anti-Money', [ViewController::class, 'Antimoney']);
Route::get('/Anti-Bribery-Course', [ViewController::class, 'antiBriberyCourse']);
Route::get('/GDACourse', [ViewController::class, 'GDACourse']);
Route::get('/DeclarationQuiz', [ViewController::class, 'DeclarationQuiz']);
Route::post('/DeclarationQuiz', [QuizController::class, 'DeclarationQuiz']);
Route::get('/GDGCourse', [ViewController::class, 'GDGCourse']);
Route::get('/DataProtectionTrainingCourse', [ViewController::class, 'DataProtectionTrainingCourse']);
Route::get('/general-health-and-safety-training-course', [ViewController::class, 'ghastc']);
Route::get('/HealthSafetyintheWorkplaceTraining', [ViewController::class, 'HealthSafetyintheWorkplaceTraining']);
Route::post('/HealthSafetyintheWorkplaceTraining', [QuizController::class, 'HealthSafetyintheWorkplaceTraining']);
Route::get('/FCATreatingCustomersFairlyTrainingCourse', [ViewController::class, 'FCATreatingCustomersFairlyTrainingCourse']);
Route::post('/FCATreatingCustomersFairlyTrainingCourse', [QuizController::class, 'SendFCATreatingCustomersFairlyTrainingCourse']);
Route::get('/Quality-Health-Safety-Environmental-Course', [ViewController::class, 'QualityHealthSafetyEnvironmentalCourse']);
Route::post('/Quality-Health-Safety-Environmental-Course', [QuizController::class, 'QualityHealthSafetyEnvironmentalCourse']);

Route::prefix('Course')->group(function () {
    Route::prefix('View')->group(function () {
        Route::get('ManualHandlingHealthAndSafetyTraining', [ViewCourseController::class, 'ManualHandlingHealthAndSafetyTrainingCourse']);
        Route::get('AntiMoneyLaunderingAndFinancialCrimeTrainingCourse', [ViewCourseController::class, 'AntiMoneyLaunderingAndFinancialCrimeTrainingCourse']);
        Route::get('GeneralDataProtectionRegulationCourse', [ViewCourseController::class, 'GeneralDataProtectionRegulationCourse']);
        Route::get('FCAComplianceTrainingCourseOne', [ViewCourseController::class, 'FCAComplianceTrainingCourseOne']);
        Route::get('FCAComplianceTrainingCourseTwo', [ViewCourseController::class, 'FCAComplianceTrainingCourseTwo']);
        Route::get('ComplaintsHandling', [ViewCourseController::class, 'ComplaintsHandling']);
        Route::get('FinancialPromotionsTrainingCourse', [ViewCourseController::class, 'FinancialPromotionsTrainingCourse']);
        Route::get('CreditCardProcessingCompetencyTraining', [ViewCourseController::class, 'CreditCardProcessingCompetencyTrainingCourse']);
        Route::get('AsbestosAwarenessTrainingCourse', [ViewCourseController::class, 'AsbestosAwarenessTrainingCourse']);
        Route::get('SeniorManagersandCertificationSchemeTrainingCourse', [ViewCourseController::class, 'SeniorManagersandCertificationSchemeTrainingCourse']);
        Route::get('WorkinginConfinedSpacesTrainingCourse', [ViewCourseController::class, 'WorkinginConfinedSpacesTrainingCourse']);
        Route::get('AlcoholandDrugsToolBoxTalk', [ViewCourseController::class, 'AlcoholandDrugsToolBoxTalkCourse']);
        Route::get('AsbestosToolBoxTalk', [ViewCourseController::class, 'AsbestosToolBoxTalkCourse']);
        Route::get('COSHHToolboxTalk', [ViewCourseController::class, 'COSHHToolboxTalkCourse']);
        Route::get('ElectricityonSiteToolBoxTalk', [ViewCourseController::class, 'ElectricityonSiteToolBoxTalkCourse']);
        Route::get('LaddersToolBoxTalk', [ViewCourseController::class, 'LaddersToolBoxTalkCourse']);
        Route::get('ManualHandlingToolBoxTalk', [ViewCourseController::class, 'ManualHandlingToolBoxTalkCourse']);
        Route::get('PersonalProtectiveEquipmentToolBoxTalk', [ViewCourseController::class, 'PersonalProtectiveEquipmentToolBoxTalkCourse']);
        Route::get('PortableHandHeldElectricalToolsToolBoxTalk', [ViewCourseController::class, 'PortableHandHeldElectricalToolsToolBoxTalkCourse']);
        Route::get('RiskAssessmentsandMethodStatementsToolBoxTalk', [ViewCourseController::class, 'RiskAssessmentsandMethodStatementsToolBoxTalkCourse']);
        Route::get('SlipsTripsandFallsToolBoxTalk', [ViewCourseController::class, 'SlipsTripsandFallsToolBoxTalkCourse']);

        Route::prefix('Pages')->group(function () {
            Route::get('FinancialPromotionsTrainingCourse', [ViewCourseController::class, 'FinancialPromotionsTrainingCoursePages']);
            Route::get('ManualHandlingHealthAndSafetyTraining', [ViewCourseController::class, 'ManualHandlingHealthAndSafetyTrainingCoursePages']);
            Route::get('AntiMoneyLaunderingAndFinancialCrimeTrainingCourse', [ViewCourseController::class, 'AntiMoneyLaunderingAndFinancialCrimeTrainingCoursePages']);
            Route::get('GeneralDataProtectionRegulationCourse', [ViewCourseController::class, 'GeneralDataProtectionRegulationCoursePages']);
            Route::get('FCAComplianceTrainingCourseOne', [ViewCourseController::class, 'FCAComplianceTrainingCourseOnePages']);
            Route::get('FCAComplianceTrainingCourseTwo', [ViewCourseController::class, 'FCAComplianceTrainingCourseTwoPages']);
            Route::get('ComplaintsHandling', [ViewCourseController::class, 'ComplaintsHandlingPages']);
            Route::get('CreditCardProcessingCompetencyTraining', [ViewCourseController::class, 'CreditCardProcessingCompetencyTrainingPages']);
            Route::get('AsbestosAwarenessTrainingCourse', [ViewCourseController::class, 'AsbestosAwarenessTrainingCoursePages']);
            Route::get('SeniorManagersandCertificationSchemeTrainingCourse', [ViewCourseController::class, 'SeniorManagersandCertificationSchemeTrainingCoursePages']);
            Route::get('WorkinginConfinedSpacesTrainingCourse', [ViewCourseController::class, 'WorkinginConfinedSpacesTrainingCoursePages']);

            Route::get('AlcoholandDrugsToolBoxTalk', [ViewCourseController::class, 'AlcoholandDrugsToolBoxTalkPages']);
            Route::get('AsbestosToolBoxTalk', [ViewCourseController::class, 'AsbestosToolBoxTalkPages']);
            Route::get('COSHHToolboxTalk', [ViewCourseController::class, 'COSHHToolboxTalkPages']);
            Route::get('ElectricityonSiteToolBoxTalk', [ViewCourseController::class, 'ElectricityonSiteToolBoxTalkPages']);
            Route::get('LaddersToolBoxTalk', [ViewCourseController::class, 'LaddersToolBoxTalkPages']);
            Route::get('ManualHandlingToolBoxTalk', [ViewCourseController::class, 'ManualHandlingToolBoxTalkPages']);
            Route::get('PersonalProtectiveEquipmentToolBoxTalk', [ViewCourseController::class, 'PersonalProtectiveEquipmentToolBoxTalkPages']);
            Route::get('PortableHandHeldElectricalToolsToolBoxTalk', [ViewCourseController::class, 'PortableHandHeldElectricalToolsToolBoxTalkPages']);
            Route::get('RiskAssessmentsandMethodStatementsToolBoxTalk', [ViewCourseController::class, 'RiskAssessmentsandMethodStatementsToolBoxTalkPages']);
            Route::get('SlipsTripsandFallsToolBoxTalk', [ViewCourseController::class, 'SlipsTripsandFallsToolBoxTalkPages']);

        });
    });
    Route::post('Send', [SendCourseController::class, 'sendCourse']);
});

Route::prefix('Legislation')->group(function () {
    Route::prefix('View')->group(function () {
        Route::get('RegisterofDataProtectionLegislation', [ViewLegislationController::class, 'RegisterofDataProtectionLegislation']);
        Route::get('RegisterofEnvironmentalLegislation', [ViewLegislationController::class, 'RegisterofEnvironmentalLegislation']);
        Route::get('RegisterofGasLegislation', [ViewLegislationController::class, 'RegisterofGasLegislation']);
        Route::get('RegisterofHealthandSafetyLegislation', [ViewLegislationController::class, 'RegisterofHealthandSafetyLegislation']);
        Route::prefix('Links')->group(function () {
            Route::get('RegisterofDataProtectionLegislation', [ViewLegislationController::class, 'RegisterofDataProtectionLegislationLinks']);
            Route::get('RegisterofEnvironmentalLegislation', [ViewLegislationController::class, 'RegisterofEnvironmentalLegislationLinks']);
            Route::get('RegisterofGasLegislation', [ViewLegislationController::class, 'RegisterofGasLegislationLinks']);
            Route::get('RegisterofHealthandSafetyLegislation', [ViewLegislationController::class, 'RegisterofHealthandSafetyLegislationLinks']);
        });
    });
    Route::post('Send', [SendLegislationController::class, 'sendLegislation']);
});

Route::prefix('Quiz')->group(function () {
    Route::prefix('View')->group(function () {
        Route::get('ManualHandlingHealthAndSafetyQuiz', [ViewQuizController::class, 'ManualHandlingHealthAndSafetyQuiz']);
        Route::get('GeneralDataProtectionRegulationQuiz', [ViewQuizController::class, 'GeneralDataProtectionRegulationQuiz']);
        Route::get('ComplaintsHandling', [ViewQuizController::class, 'ComplaintsHandling']);
        Route::get('AntiBribery', [ViewQuizController::class, 'AntiBriberyQuiz']);
        Route::get('Anti-Money', [ViewQuizController::class, 'AntiMoneyQuiz']);
        Route::get('green-deal-quiz', [ViewQuizController::class, 'GreenDealQuiz']);
        Route::get('GeneralHealthAndSafety', [ViewQuizController::class, 'GeneralHealthAndSafetyQuiz']);
        Route::get('GeneralKnowledge', [ViewQuizController::class, 'GeneralKnowledge']);
        Route::get('TreatingCustomersFairly', [ViewQuizController::class, 'TreatingCustomersFairlyQuiz']);
        Route::get('VCAssessment', [ViewQuizController::class, 'VCAssessmentQuiz']);
        Route::get('CreditCardProcessingQuiz', [ViewQuizController::class, 'CreditCardProcessingQuiz']);
        Route::get('AsbestosAwarenessQuiz', [ViewQuizController::class, 'AsbestosAwarenessQuiz']);
        Route::get('WorkingInConfinedTrainingCoursesQuiz', [ViewQuizController::class, 'WorkingInConfinedTrainingCoursesQuiz']);
        Route::prefix('Questions')->group(function () {
            Route::get('ManualHandlingHealthAndSafetyQuiz', [ViewQuizController::class, 'ManualHandlingHealthAndSafetyQuizQuestions']);
            Route::get('GeneralDataProtectionRegulationQuiz', [ViewQuizController::class, 'GeneralDataProtectionRegulationQuizQuestions']);
            Route::get('ComplaintsHandling', [ViewQuizController::class, 'ComplaintsHandlingQuestions']);
            Route::get('AntiBribery', [ViewQuizController::class, 'AntiBriberyQuestions']);
            Route::get('Anti-Money', [ViewQuizController::class, 'AntiMoneyQuestions']);
            Route::get('green-deal-quiz', [ViewQuizController::class, 'GreenDealQuestions']);
            Route::get('GeneralHealthAndSafety', [ViewQuizController::class, 'GeneralHealthAndSafetyQuestions']);
            Route::get('GeneralKnowledgeQuestions', [ViewQuizController::class, 'GeneralKnowledgeQuestions']);
            Route::get('TreatingCustomersFairlyQuestions', [ViewQuizController::class, 'TreatingCustomersFairlyQuestions']);
            Route::get('VCAssessmentQuestions', [ViewQuizController::class, 'VCAssessmentQuestions']);
            Route::get('CreditCardProcessingQuizQuestions', [ViewQuizController::class, 'CreditCardProcessingQuizQuestions']);
            Route::get('AsbestosAwareness', [ViewQuizController::class, 'AsbestosAwarenessQuestions']);
            Route::get('WorkingInConfinedTrainingCoursesQuiz', [ViewQuizController::class, 'WorkingInConfinedTrainingCoursesQuizQuestions']);
        });
    });
    Route::post('Send', [SendQuizController::class, 'sendQuiz']);
});

Route::get('/DisplayScreenEquipmentTrainingCourse', [ViewController::class, 'DisplayScreenEquipmentTrainingCourse']);
Route::post('/DisplayScreenEquipmentTrainingCourse', [QuizController::class, 'DisplayScreenEquipmentTrainingCourse']);
Route::get('/HazardousSubstancesandWorkingatHeight', [ViewController::class, 'HazardousSubstancesandWorkingatHeight']);
Route::post('/HazardousSubstancesandWorkingatHeight', [QuizController::class, 'HazardousSubstancesandWorkingatHeight']);
Route::get('/RiskAssessmentTrainingCourse', [ViewController::class, 'RiskAssessmentTrainingCourse']);
Route::post('/RiskAssessmentTrainingCourse', [QuizController::class, 'RiskAssessmentTrainingCourse']);
Route::get('/WorkplaceSafetyandWelfareTrainingCourse', [ViewController::class, 'WorkplaceSafetyandWelfareTrainingCourse']);
Route::post('/WorkplaceSafetyandWelfareTrainingCourse', [QuizController::class, 'WorkplaceSafetyandWelfareTrainingCourse']);
Route::get('/NoiseVibrationAndVehicleSafetyTrainingCourse', [ViewController::class, 'NoiseVibrationAndVehicleSafetyTrainingCourse']);
Route::post('/NoiseVibrationAndVehicleSafetyTrainingCourse', [QuizController::class, 'NoiseVibrationAndVehicleSafetyTrainingCourse']);
Route::post('/anti_bribery_course', [QuizController::class, 'sendanti_bribery_course']);
Route::post('/VCAssessment', [QuizController::class, 'sendVCAssessment']);
Route::post('/GDACourse', [QuizController::class, 'sendGDACourse']);
Route::post('/GDGCourse', [QuizController::class, 'sendGDGCourse']);
Route::post('/GDQ', [QuizController::class, 'sendGDQ']);
Route::post('/DataProtectionTrainingCourse', [QuizController::class, 'sendDataProtectionTrainingCourse']);
Route::post('/general-health-and-safety-training-course', [QuizController::class, 'sendGeneralHealthandSafetyTrainingCourse']);

//Route::get('/test/{pdf}', function($pdf){
//    $hash = md5(uniqid().'ec457d0a974c48d5685a7efa03d137dc8bbde7e3'.microtime());
//    $data = [
//        'logo' => config('app.url') . config('site.JUMBOTRON_LOGO'),
//        'company_name' => config('site.NAME'),
//        'name' => 'Daniel Lambert',
//        'course' => 'FCA Compliance Training Course 1',
//        'course_topics' => [
//            'What is the Green Deal and Main Benefits and Key Points of a Green Deal Plan',
//            'Electricity Suppliers and Switching',
//            'What is a Green Deal Provider, Installer and Assessor',
//            'Tied Assessors and Independent Assessors',
////            'Key Eligibility Criteria for Green Deal Plans',
////            'The Green Deal Code of Practice & Framework Regulations',
////            'The Green Deal Arrangements Agreement',
////            'Green Deal Golden Rule',
////            'Energy Saving Advice Service',
////            'Financial Conduct Authority and Permissions',
////            'Green Deal and Oversight Registration Body (GD ORB)',
////            'Financial Promotions',
////            'Treating Customers Fairly and Vulnerable Customers',
////            'Complaints',
////            'Data Protection and Anti-Money Laundering',
////            'Health and Safety'
//        ],
//        'company_address' => config('site.COMPANY_ADDRESS'),
//        'company_number' => config('site.COMPANY_NUMBER'),
//        'percent' => 100,
//        'status' => 'good'
//    ];
//    if($pdf == "no"){
//        return view('pdf.certificate')->with($data);
//    }
//    $pdf = PDF::loadView('pdf.certificate', $data);
//    $pdf->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
//    return $pdf->stream();
//    $url = "/invoices/$hash.pdf";
//    Storage::put("public".$url, $pdf->stream());
//    return $url;
//});
