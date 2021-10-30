<template>
<div class="col-xs-12 col-sm-9">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Vulnerable Customers Assessment Quiz</h3>
        </div>
        <div class="panel-body">
            <div v-if="secondSubmit == false">
                <p>Please fill in the form below and then click submit to start the questionnaire.</p>
                <p>
                    This is Scored out of a possible 10.
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
                        <p><strong  v-html="question.question"></strong></p>
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
                    question : 'Which of the below could be a sign of a customer’s vulnerability?',
                    answers : [
                        {answer: 'Speaking quite fast', number: 1},{answer: 'Asking you to repeat most things that you have said', number: 2},{answer: 'Being very decisive', number: 3}],
                },
                {
                    number : 2,
                    answer_number: "",
                    question : 'Which Act is applicable to dealing with vulnerable customers?',
                    answers : [{answer: 'The Mental Health Act', number: 1},{answer: 'The Data Protection Act', number: 2},{answer: 'The Health and Safety at Work Act', number: 3}],
                },
                {
                    number : 3,
                    answer_number: "",
                    question : 'Vulnerable Customers goes hand in hand with?',
                    answers : [{answer: 'Information Security ', number: 1},{answer: 'Selling products & services', number: 2},{answer: 'Treating Customers Fairly', number: 3}],
                },
                {
                    number : 4,
                    answer_number: "",
                    question : 'Name a category that is NOT really related to vulnerable customers?',
                    answers : [{answer: 'Elderly', number: 1},{answer: 'Overweight', number: 2},{answer: 'Low Income', number: 3}],
                },
                {
                    number : 5,
                    answer_number: "",
                    question : 'Choose one of the following that would NOT help a vulnerable customer?',
                    answers : [{answer: 'Explain – avoid jargon and use layman’s terms when explaining complex or technical information', number: 1},{answer: 'Reiterate – always put yourself in the customers’ shoes and show them that you have listened and understood what they have said', number: 2},{answer: 'Rigid – always have one set approach with each and every customer', number: 3}],
                },
                {
                    number : 6,
                    answer_number: "",
                    question : 'A customer mentions to you that their Husband recently passed away. What do you do?',
                    answers : [{answer: 'Offer your sympathy and carry on with the call as normal', number: 1},{answer: 'Advise them that you are now unable to carry on with the call as they have identified themselves as being vulnerable', number: 2},{answer: 'Offer your sympathy and proceed at a slower pace, ensuring the customer understands what you are discussing and that they are capable of making decisions at this time', number: 3}],
                },
                {
                    number : 7,
                    answer_number: "",
                    question : 'The customer you have been speaking to has agreed to the product/service that you are offering but has displayed signs of being hard of hearing through the conversation.<br /><br />What could you do to ensure that their vulnerability has been noted and addressed?',
                    answers : [{answer: 'Send everything you have discussed out in writing to the customer and sign them up after they have had time to read through everything', number: 1},{answer: 'Nothing, if they have agreed over the phone they must have heard what you were saying', number: 2},{answer: 'Ask to speak to another member of the family and disclose everything you have discussed with the customer to see if the family member agrees also', number: 3}],
                },
                {
                    number : 8,
                    answer_number: "",
                    question : 'Which one of these is NOT a written indicator that a customer may be vulnerable?',
                    answers : [{answer: 'Many spelling errors', number: 1},{answer: 'Confusion in content', number: 2},{answer: 'Poor handwriting', number: 3}],
                },
                {
                    number : 9,
                    answer_number: "",
                    question : 'Which one of these is NOT a verbal indicator that a customer may be vulnerable?',
                    answers : [{answer: 'Confusion', number: 1},{answer: 'Asking questions', number: 2},{answer: 'Asking non-relevant questions', number: 3}],

                },
                {
                    number : 10,
                    answer_number: "",
                    question : 'If you identify someone as being vulnerable, you can deal with a third-party on their behalf without asking permission?',
                    answers : [{answer: 'True', number: 1},{answer: 'False', number: 2},{answer: 'It depends', number: 3}],
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

            axios.post('/VCAssessment', formData, config);

            this.secondSubmit = true
        },


    },

    mounted() {
        console.log('Component mounted.')
    }
}
</script>
