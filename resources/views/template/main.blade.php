<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title') - {{ config('site.COMPANY_NAME') }}</title>
    <script src="https://use.fontawesome.com/92f0a9e47b.js"></script>
    <!-- Bootstrap -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <script>
        window.Laravel = {!! json_encode([
			'csrfToken' => csrf_token(),
		]) !!};
    </script>
    @if(config('site.SITE_ID') == "1")
        <style>
            a {
                color: #6b7787 !important;
            }

            a:hover {
                color: #6b7787 !important;
            }

            .panel-heading {
                background-color: #6b7787 !important;
                color: #ffffff !important;
            }

            .nav > li > a:hover,
            .nav > li > a:focus {
                background-color: #6b7787 !important;
                color: #ffffff !important;
            }

            .btn-success,
            .btn-success:hover {
                background-color: #6b7787 !important;
                border-color: #101010;
                color: #ffffff !important;
            }
        </style>
    @endif
    @if(config('site.SITE_ID') == "2" || config('site.SITE_ID') == "3")
        <style>
            a {
                color: #333 !important;
            }

            a:hover {
                color: #333 !important;
            }

            #navbar > ul > li > a {
                color: #fff !important;
            }

            .navbar-header > a {
                color: #fff !important;
            }
        </style>
    @endif

</head>
<body>
<?php
$pages = [
    ['name' => 'Asbestos Awareness Training Course', 'url' => '/Course/View/AsbestosAwarenessTrainingCourse'],
    ['name' => 'Asbestos Awareness Quiz', 'url' => '/Quiz/View/AsbestosAwarenessQuiz'],
    ['name' => 'Display Screen Equipment (DSE) Training Course', 'url' => '/DisplayScreenEquipmentTrainingCourse'],
    ['name' => 'Risk Assessment Training Course', 'url' => '/RiskAssessmentTrainingCourse'],
    ['name' => 'Hazardous Substances and Working at Height', 'url' => '/HazardousSubstancesandWorkingatHeight'],
    ['name' => 'FCA Compliance Training Course 1', 'url' => '/Course/View/FCAComplianceTrainingCourseOne'],
    ['name' => 'FCA Compliance Training Course 2 - Introducer', 'url' => '/Course/View/FCAComplianceTrainingCourseOne'],
    ['name' => 'Anti-Bribery Training Course', 'url' => '/Anti-Bribery-Course'],
//			['name' => 'Green Deal Assessor Training Course', 'url' => '/GDACourse'],
//			['name' => 'Green Deal General Training Course', 'url' => '/GDGCourse'],
    ['name' => 'Anti-Money Laundering Quiz', 'url' => '/Quiz/View/Anti-Money'],
    ['name' => 'General Health and Safety Quiz', 'url' => '/Quiz/View/GeneralHealthAndSafety'],
    ['name' => 'Level 2 Health & Safety in the Workplace Training', 'url' => '/HealthSafetyintheWorkplaceTraining'],
    ['name' => 'General Data Protection Regulation Quiz', 'url' => '/Quiz/View/GeneralDataProtectionRegulationQuiz'],
    ['name' => 'General Knowledge Quiz', 'url' => '/Quiz/View/GeneralKnowledge'],
    ['name' => 'Treating Customers Fairly Quiz', 'url' => '/Quiz/View/TreatingCustomersFairly'],
    ['name' => 'Vulnerable Customers Quiz', 'url' => '/Quiz/View/VCAssessment'],
    ['name' => 'FCA Treating Customers Fairly Training Course', 'url' => '/FCATreatingCustomersFairlyTrainingCourse'],
    ['name' => 'FCA Anti -Bribery Training Course', 'url' => '/Anti-Bribery-Course'],
    ['name' => 'Anti Money Laundering & Financial Crime Training Course', 'url' => '/Course/View/AntiMoneyLaunderingAndFinancialCrimeTrainingCourse'],
    ['name' => 'General Data Protection Regulation Course', 'url' => '/Course/View/GeneralDataProtectionRegulationCourse'],
    ['name' => 'General Health and Safety Training Course', 'url' => '/general-health-and-safety-training-course'],
    ['name' => 'Manual Handling Health & Safety Training Course', 'url' => '/Course/View/ManualHandlingHealthAndSafetyTraining'],
//			['name' => 'Green Deal Quiz', 'url' => '/green-deal-quiz'],
    ['name' => 'Manual Handling Health & Safety Quiz', 'url' => '/Quiz/View/ManualHandlingHealthAndSafetyQuiz'],
    ['name' => 'Complaints Handling Training Course', 'url' => '/Course/View/ComplaintsHandling'],
    ['name' => 'Complaints Handling Training Quiz', 'url' => '/Quiz/View/ComplaintsHandling'],
    ['name' => 'Financial Promotions Training Course', 'url' => '/Course/View/FinancialPromotionsTrainingCourse'],
    ['name' => 'Anti-Bribery Training Quiz', 'url' => '/Quiz/View/AntiBribery'],
//			['name' => 'Green Deal Quiz', 'url' => '/Quiz/View/green-deal-quiz'],
    ['name' => 'Credit Card Processing Quiz', 'url' => '/Quiz/View/CreditCardProcessingQuiz'],
    ['name' => 'Credit Card Processing Competency Training', 'url' => '/Course/View/CreditCardProcessingCompetencyTraining'],
    ['name' => 'Workplace Safety and Welfare Training Course', 'url' => '/WorkplaceSafetyandWelfareTrainingCourse'],
    ['name' => 'Noise Vibration And Vehicle Safety Training Course', 'url' => '/NoiseVibrationAndVehicleSafetyTrainingCourse'],
    ['name' => 'Register of Data Protection Legislation', 'url' => '/Legislation/View/RegisterofDataProtectionLegislation'],
    ['name' => 'Register of Environmental Legislation', 'url' => '/Legislation/View/RegisterofEnvironmentalLegislation'],
    ['name' => 'Register of Electrical Legislation', 'url' => '/Legislation/View/RegisterofElectricalLegislation'],
    ['name' => 'Register of Gas Legislation', 'url' => '/Legislation/View/RegisterofGasLegislation'],
    ['name' => 'Register of Health and Safety Legislation', 'url' => '/Legislation/View/RegisterofHealthandSafetyLegislation'],
    ['name' => 'Senior Managers and Certification Scheme Training Course', 'url' => '/Course/View/SeniorManagersandCertificationSchemeTrainingCourse'],
    ['name' => 'Working in Confined Spaces Training Course', 'url' => '/Course/View/WorkinginConfinedSpacesTrainingCourse'],
    ['name' => 'Working in Confined Spaces Quiz', 'url' => '/Quiz/View/WorkingInConfinedTrainingCoursesQuiz'],
    ['name' => 'Quality, Health and Safety, Environmental Training Course', 'url' => '/Quality-Health-Safety-Environmental-Course'],
    ['name' => 'Declaration Quiz', 'url' => 'DeclarationQuiz'],
    ['name' => 'Alcohol and Drugs Tool Box Talk', 'url' => '/Course/View/AlcoholandDrugsToolBoxTalk'],
    ['name' => 'Asbestos Tool Box Talk', 'url' => '/Course/View/AsbestosToolBoxTalk'],
    ['name' => 'COSHH Toolbox Talk', 'url' => '/Course/View/COSHHToolboxTalk'],
    ['name' => 'Electricity on Site Tool Box Talk', 'url' => '/Course/View/ElectricityonSiteToolBoxTalk'],
    ['name' => 'Ladders Tool Box Talk', 'url' => '/Course/View/LaddersToolBoxTalk'],
    ['name' => 'Manual Handling Tool Box Talk', 'url' => '/Course/View/ManualHandlingToolBoxTalk'],
    ['name' => 'Personal Protective Equipment Tool Box Talk', 'url' => '/Course/View/PersonalProtectiveEquipmentToolBoxTalk'],
    ['name' => 'Portable Hand Held Electrical Tools Tool Box Talk', 'url' => '/Course/View/PortableHandHeldElectricalToolsToolBoxTalk'],
    ['name' => 'Risk Assessments and Method Statements Tool Box Talk', 'url' => '/Course/View/RiskAssessmentsandMethodStatementsToolBoxTalk'],
    ['name' => 'Slips Trips and Falls Tool Box Talk', 'url' => '/Course/View/SlipsTripsandFallsToolBoxTalk'],
];
?>
@include('template.top_nav', ['pages', $pages])
@include('template.jumbotron')
<div class="container">
    <div class="row">
        @include('template.side_nav')
        @yield('page_content')
    </div>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-xs-12">
                    <strong>Registered Address:</strong> {{ config('site.COMPANY_ADDRESS') }} - @if(config('site.COMPANY_REG') != "")
                        <strong>Company Reg:</strong> {{ config('site.COMPANY_REG') }} - @endif<strong>Call us
                        on:</strong> {{ config('site.COMPANY_NUMBER') }}
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
