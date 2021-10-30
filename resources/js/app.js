require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Vue from 'vue'

import antiBriberyCourse from './components/anti_bribery_course.vue'
import dataProtectionTrainingCourse from './components/DataProtectionTrainingCourse.vue'
import declarationQuiz from './components/declarationQuiz.vue'
import displayScreenEquipmentTrainingCourse from './components/displayScreenEquipmentTrainingCourse.vue'
import dpaa from './components/Dpaa.vue'
import dynamicCourse from './components/Dynamic_course.vue'
import dynamicLegislation from './components/Dynamic_legislation.vue'
import dynamicQuiz from './components/Dynamic_quiz.vue'
import fcaComplianceOne from './components/FCAComplianceOne.vue'
import fcaComplianceTwo from './components/FCAComplianceTwo.vue'
import fcaTreatingCustomersFairlyTrainingCourse from './components/FCATreatingCustomersFairlyTrainingCourse.vue'
import gdaCourse from './components/GDACourse.vue'
import gdgCourse from './components/GDGCourse.vue'
import ghastc from './components/ghastc.vue'
import hazardousSubstancesAndWorkingAtHeight from './components/hazardoussubstancesandworkingatheight.vue'
import healthSafetyInTheWorkplaceTraining from './components/healthsafetyintheworkplacetraining.vue'
import noiseVibrationAndVehicleSafetyTrainingCourse from './components/Noisevibrationandvehiclesafetytrainingcourse.vue'
import riskAssessmentTrainingCourse from './components/riskassessmenttrainingcourse.vue'
import vcAssessment from './components/VCAssessment.vue'
import qualityHealthSafetyEnvironmentalCourse from './components/qualityHealthSafetyEnvironmentalCourse.vue'
import workplaceSafetyAndWelfareTrainingCourse from './components/workplacesafetyandwelfaretrainingcourse.vue'

const app = new Vue({
    el: '#app',
    components: {
        displayScreenEquipmentTrainingCourse,
        dynamicCourse,
        dynamicQuiz,
        dynamicLegislation,
        dpaa,
        fcaComplianceOne,
        declarationQuiz,
        qualityHealthSafetyEnvironmentalCourse,
        fcaComplianceTwo,
        antiBriberyCourse,
        vcAssessment,
        gdaCourse,
        gdgCourse,
        dataProtectionTrainingCourse,
        ghastc,
        healthSafetyInTheWorkplaceTraining,
        fcaTreatingCustomersFairlyTrainingCourse,
        hazardousSubstancesAndWorkingAtHeight,
        riskAssessmentTrainingCourse,
        workplaceSafetyAndWelfareTrainingCourse,
        noiseVibrationAndVehicleSafetyTrainingCourse,
    }
});
