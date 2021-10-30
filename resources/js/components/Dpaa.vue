<template>
<div class="col-xs-12 col-sm-9">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Data Protection Quiz</h3>
        </div>
        <div class="panel-body">
            <div v-if="secondSubmit == false">
                <p>Please fill in the form below and then click submit to start the questionnaire.</p>
                <p>
                    This is Scored out of a possible 14.
                </p>
                <p>
                    Choose the one best answer to each question
                </p>
                <div class="col-xs-6">
                    <div class="form-group col-xs-12">
                        <label for="name">Name</label>
                        <input type="text" v-model="name" class="form-control" name="name" placeholder="Name" value="">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="contactNumber">Contact Number</label>
                        <input type="text" class="form-control" v-model="contactNumber" name="contactNumber" placeholder="Contact Number" value="">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" v-model="company" name="company" placeholder="Company" value="">
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group col-xs-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" v-model="email" name="email" placeholder="Email" value="">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="position">Position in Company</label>
                        <input type="text" class="form-control" v-model="position" name="position" placeholder="Position" value="">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="address">Address</label>
                        <textarea type="text" class="form-control" v-model="address" name="address" placeholder="Your Address"></textarea>
                    </div>
                </div>
                <input type="submit" v-on:click="submit" v-if="firstSubmit == false" class="btn btn-success col-xs-12" name="submit">
            </div>
            <div v-if="secondSubmit == true">
                <div class="alert alert-success">
                    Thank you, Quiz sent!
                </div>
            </div>
        </div>
    </div>
    <div v-if="firstSubmit == true && secondSubmit == false">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-default" v-for="question in questions">
                    <div class="panel-heading">Question {{ question.number }}:</div>
                    <div class="panel-body">
                        <p><strong v-html="question.question"></strong></p>
                        <select v-model="question.answer_number" :name="'question_' + question.number" class="form-control" >
                            <option  v-for="answer in question.answers" :value="answer.number">{{ answer.answer }}</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <input type="submit" class="btn btn-success col-xs-12" v-on:click="send" name="submit">
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {

    data() {
        return {
            name: '',
            email: '',
            contactNumber: '',
            company: '',
            address: '',
            position: '',

            questions: [
                {
                    number : 1,
                    answer_number: "",
                    question : 'What year was the Data Protection Act first created?',
                    answers : [
                        {answer: '1984', number: 1},{answer: '1988', number: 2},{answer: '1998', number: 3}],
                },
                {
                    number : 2,
                    answer_number: "",
                    question : 'What is the person in charge of data in an organisation called? ',
                    answers : [{answer: 'Data Controller', number: 1},{answer: 'Data Subject', number: 2},{answer: 'Data Processor', number: 3}],
                },
                {
                    number : 3,
                    answer_number: "",
                    question : 'Whose logo is this?<br /><img class="img-responsive" src="/images/site/ico-logo.gif">',
                    answers : [{answer: 'Information Commissioner’s Organisation', number: 1},{answer: 'Information Commissioner’s Office', number: 2},{answer: 'Information Corporation Office', number: 3}],
                },
                {
                    number : 4,
                    answer_number: "",
                    question : 'How many Data Protection principles are there?',
                    answers : [{answer: '6', number: 1},{answer: '8', number: 2},{answer: '9', number: 3}],
                },
                {
                    number : 5,
                    answer_number: "",
                    question : 'Name 1 country outside of EEA who have an adequate level of protection rating by ICO?',
                    answers : [{answer: 'Australia', number: 1},{answer: 'Germany', number: 2},{answer: 'New Zealand', number: 3}],
                },
                {
                    number : 6,
                    answer_number: "",
                    question : 'How many days do you have to respond to a Subject Access Request?',
                    answers : [{answer: '20', number: 1},{answer: '30', number: 2},{answer: '40', number: 3}],
                },
                {
                    number : 7,
                    answer_number: "",
                    question : 'Personal data is defined as?',
                    answers : [{answer: 'Data relating to a living individual who can be identified by that data.', number: 1},{answer: 'Data relating to a living or deceased individual who can be identified by that data.', number: 2},{answer: 'Data relating to a living individual who may or may not be identified by that data.', number: 3}],
                },
                {
                    number : 8,
                    answer_number: "",
                    question : 'Which one of the following is “sensitive” personal data?',
                    answers : [{answer: 'Name', number: 1},{answer: 'Age', number: 2},{answer: 'Trade Union Membership', number: 3}],
                },
                {
                    number : 9,
                    answer_number: "",
                    question : 'What can you charge up to for a Subject Access Request?',
                    answers : [{answer: '£5.00', number: 1},{answer: '£10.00', number: 2},{answer: '£20.00', number: 3}],

                },
                {
                    number : 10,
                    answer_number: "",
                    question : 'The 4th Data Protection Principle requires that personal data is accurate, and where it is deemed to be inaccurate, the individual concerned has the right to?',
                    answers : [{answer: 'Apply for a court order to rectify, block, erase or destroy the information', number: 1},{answer: 'Sue the company holding the data', number: 2},{answer: 'The individual has no rights in this instance', number: 3}],
                },
                {
                    number : 11,
                    answer_number: "",
                    question : 'What does GDPR stand for?',
                    answers : [{answer: 'General Data Policies and Regulations', number: 1},{answer: 'General Data Protection Regulation', number: 2},{answer: 'General Data Protection Rights', number: 3}],
                },
                {
                    number : 12,
                    answer_number: "",
                    question : 'When does the new GDPR come into practice and become enforceable?',
                    answers : [{answer: 'It doesn’t, it is only optional', number: 1},{answer: '25th May 2019', number: 2},{answer: '25th May 2018', number: 3}],
                },
                {
                    number : 13,
                    answer_number: "",
                    question : 'The GDPR will replace the Data Protection Directive of 1995?',
                    answers : [{answer: 'True', number: 1},{answer: 'False', number: 2},{answer: 'It will actually run alongside it', number: 3}],
                },
                {
                    number : 14,
                    answer_number: "",
                    question : 'Which one of these statements is incorrect?',
                    answers : [{answer: 'Withdrawing consent should be as easy as giving it', number: 1},{answer: 'You must document and evidence consent and record who, when, how, and what you told people', number: 2},{answer: 'Consent requests do not have to be kept separate from other terms and conditions', number: 3}],
                },
            ],
            firstSubmit: false,
            secondSubmit: false,
        }
    },

    methods: {
        submit: function() {
            if(this.name !== "" && this.email !== ""){
                this.firstSubmit = true
            }
        },

        send: function() {

            const config = {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'X-CSRF-TOKEN': window.Laravel.csrfToken
                }
            };

            var questions = JSON.stringify(this.questions);

            var formData = new FormData();
            formData.append("name", this.name);
            formData.append("email", this.email);
            formData.append("contactNumber", this.contactNumber);
            formData.append("company", this.company);
            formData.append("address", this.address);
            formData.append("position", this.position);
            formData.append("questions", questions);

            axios.post('/dataProtectionActAssessmentV2', formData, config);

            this.secondSubmit = true
        },


    },

    mounted() {
        console.log('Component mounted.')
    }
}
</script>
