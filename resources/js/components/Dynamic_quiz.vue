<template>
  <div class="col-xs-12 col-sm-9">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">{{ quizTitle }}</h3>
      </div>
      <div class="panel-body">
        <div v-if="secondSubmit == false">
          <p>Please fill in the form below and then click submit to start the questionnaire.</p>
          <p>
            This is Scored out of a possible {{ questions.length }}.
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
          <button class="btn btn-primary" @click.prevent="showAnswers = true" v-if="showAnswers == false" >Click to reveal your answers</button>
          <div v-if="showAnswers == true">
            <div class="panel panel-default" v-for="question in questions">
              <div class="panel-heading">Question {{ question.id }}:</div>
              <div class="panel-body">
                <p><strong v-html="question.question"></strong></p>
                <div v-for="answer in question.answers">
                  <div v-bind:class="
                  question.answer == question.answer_number && question.answer == answer.number ? 'alert alert-success' :
                  question.answer != question.answer_number && question.answer == answer.number ? 'alert alert-success' :
                  question.answer != question.answer_number && question.answer_number == answer.number ? 'alert alert-danger' : 'alert alert-blank'
                  " v-html="answer.answer"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div v-if="firstSubmit == true && secondSubmit == false">
      <div class="row">
        <div class="col-xs-12">
          <div class="panel panel-default" v-for="question in questions">
            <div class="panel-heading">Question {{ question.id }}:</div>
            <div class="panel-body">
              <p><strong  v-html="question.question"></strong></p>
              <select v-model="question.answer_number" :name="'question_' + question.number" class="form-control" >
                <option v-for="answer in question.answers" :value="answer.number">{{ answer.answer }}</option>
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

      questions: [],

      firstSubmit: false,
      secondSubmit: false,
      showAnswers: false,
    }
  },
  props: ['quizTitle', 'quizQuiz', 'questionsUrl', 'sendUrl'],
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
      formData.append("quizQuiz", this.quizQuiz);
      formData.append("quizTitle", this.quizTitle);

      axios.post(this.sendUrl, formData, config);

      this.secondSubmit = true
    },
    getQuestions: function(){
      const config = {
        headers: {
          'Content-Type': 'multipart/form-data',
          'X-CSRF-TOKEN': window.Laravel.csrfToken
        }
      };
      axios.get(this.questionsUrl).then(response => {
        this.questions = response.data;
      }, response => {
      });
    }
  },
    // computed: {
    //     answers: function () {

    //         let answers = [];

    //         console.log('length', this.questions.length)

    //         for(i = 0; i < this.questions.length; i++){
    //         //     console.log(this.questions[i])
    //         //     // answers.push(this.questions[i].answer)
    //         }
    //         console.log('answers',answers);
    //       // return this.message.split('').reverse().join('')
    //     }
    // },
    mounted() {
    	this.getQuestions()
      console.log('Component mounted.')
    }
  }
  </script>
