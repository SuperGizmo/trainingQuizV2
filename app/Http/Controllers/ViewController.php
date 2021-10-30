<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home() {
        return view('home');
    }
    public function disclaimer() {
        return view('disclaimer');
    }
    public function PrivacyNotice() {
        return view('PrivacyNotice');
    }
    public function Antimoney() {
        return view('Antimoney');
    }
    public function antiBriberyCourse() {
        return view('antiBriberyCourse');
    }
    public function GDACourse() {
        return view('GDACourse');
    }
    public function DeclarationQuiz() {
        return view('DeclarationQuiz');
    }
    public function GDGCourse() {
        return view('GDGCourse');
    }
    public function DataProtectionTrainingCourse() {
        return view('DataProtectionTrainingCourse');
    }
    public function ghastc() {
        return view('ghastc');
    }
    public function HealthSafetyintheWorkplaceTraining() {
        return view('HealthSafetyintheWorkplaceTraining');
    }
    public function FCATreatingCustomersFairlyTrainingCourse() {
        return view('FCATreatingCustomersFairlyTrainingCourse');
    }
    public function QualityHealthSafetyEnvironmentalCourse() {
        return view('QualityHealthSafetyEnvironmentalCourse');
    }
    public function DisplayScreenEquipmentTrainingCourse() {
        return view('DisplayScreenEquipmentTrainingCourse');
    }
    public function HazardousSubstancesandWorkingatHeight() {
        return view('HazardousSubstancesandWorkingatHeight');
    }
    public function RiskAssessmentTrainingCourse() {
        return view('RiskAssessmentTrainingCourse');
    }
    public function WorkplaceSafetyandWelfareTrainingCourse() {
        return view('WorkplaceSafetyandWelfareTrainingCourse');
    }
    public function NoiseVibrationAndVehicleSafetyTrainingCourse() {
        return view('NoiseVibrationAndVehicleSafetyTrainingCourse');
    }
}
