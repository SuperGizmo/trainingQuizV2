<template>
    <div class="col-xs-12 col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Declaration Quiz</h3>
            </div>
            <div class="panel-body">
                <div v-if="secondSubmit == false">
                    <p>Please fill in the form below and then click submit to start the questionnaire.</p>
                    <p>
                        Choose the one best answer to each question
                    </p>
                    <div class="col-xs-6">
                        <div class="form-group col-xs-12">
                            <label for="name">Name</label>
                            <input type="text" v-model="name" class="form-control" name="name" placeholder="Name"
                                   value="">
                        </div>
                        <div class="form-group col-xs-12">
                            <label for="contactNumber">Contact Number</label>
                            <input type="text" class="form-control" v-model="contactNumber" name="contactNumber"
                                   placeholder="Contact Number" value="">
                        </div>
                        <div class="form-group col-xs-12">
                            <label for="company">Company</label>
                            <input type="text" class="form-control" v-model="company" name="company"
                                   placeholder="Company" value="">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group col-xs-12">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" v-model="email" name="email" placeholder="Email"
                                   value="">
                        </div>
                        <div class="form-group col-xs-12">
                            <label for="address">Address</label>
                            <textarea type="text" class="form-control" v-model="address" name="address"
                                      style="height: 114px" placeholder="Your Address"></textarea>
                        </div>
                    </div>
                    <input type="submit" v-on:click="submit" v-if="firstSubmit == false"
                           class="btn btn-success col-xs-12" name="submit">
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
                    <h2>Quality</h2>
                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 1:</div>
                        <div class="panel-body">
                            <p><strong>Do you have a formal Quality Management System (QMS)?</strong></p>
                            <select v-model="question_1" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 2:</div>
                        <div class="panel-body">
                            <p><strong>Do you have a signed and dated Quality Management Policy Statement?</strong></p>
                            <select v-model="question_2" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 3:</div>
                        <div class="panel-body">
                            <p><strong>Are your Quality Management Policies and Procedures reviewed at least on an
                                annual basis?</strong></p>
                            <select v-model="question_3" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 4:</div>
                        <div class="panel-body">
                            <p><strong>Do you have a nominated Quality Representative who has responsibility for Quality
                                Management within your company?</strong></p>
                            <select v-model="question_4" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 5:</div>
                        <div class="panel-body">
                            <p><strong>Can you demonstrate compliance with the Construction, Design and Management
                                Regulations (CDM) 2015?</strong></p>
                            <select v-model="question_5" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 6:</div>
                        <div class="panel-body">
                            <p><strong>Have you identified all permit and licensing requirements applicable to the scope
                                of services provided?</strong></p>
                            <select v-model="question_6" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 7:</div>
                        <div class="panel-body">
                            <p><strong>Does your company use processes or systems for the management and control of
                                documented information?</strong></p>
                            <select v-model="question_7" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 8:</div>
                        <div class="panel-body">
                            <p><strong>Does your company have documented processes for the control and production of
                                quality control plans and procedures, inspection and testing documentation and for the
                                assurance of the competence of staff involved?</strong></p>
                            <select v-model="question_8" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->
                    <h2>Health and Safety</h2>

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 1:</div>
                        <div class="panel-body">
                            <p><strong>Do you have a formal Health and Safety Management System (HSMS)?</strong></p>
                            <select v-model="question_9" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 2:</div>
                        <div class="panel-body">
                            <p><strong>Do you have a signed and dated Health and Safety Policy Statement?</strong></p>
                            <select v-model="question_10" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 3:</div>
                        <div class="panel-body">
                            <p><strong>Are your Health and Safety Policies and Procedure reviewed at least on an annual
                                basis?</strong></p>
                            <select v-model="question_11" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 4:</div>
                        <div class="panel-body">
                            <p><strong>Do you have a nominated person who has delegated responsibility for workplace and
                                product safety?</strong></p>
                            <select v-model="question_12" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 5:</div>
                        <div class="panel-body">
                            <p><strong>Do you have control measures in place to reduce/remove identified Health and
                                Safety Risks?</strong></p>
                            <select v-model="question_13" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 6:</div>
                        <div class="panel-body">
                            <p><strong>Does your company have a communication process to provide guidance to workforce
                                on workplace safety issues?</strong></p>
                            <select v-model="question_14" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 7:</div>
                        <div class="panel-body">
                            <p><strong>Does your company develop and implement initiatives to improve workplace
                                safety?</strong></p>
                            <select v-model="question_15" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 8:</div>
                        <div class="panel-body">
                            <p><strong>Does the company have arrangements in place for investigating and reporting of
                                Accidents and Incidents and Near Misses in their worksites?</strong></p>
                            <select v-model="question_16" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->
                    <h2>Environmental</h2>

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 1:</div>
                        <div class="panel-body">
                            <p><strong>Do you have a formal Environmental Management System (EMS)?</strong></p>
                            <select v-model="question_17" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 2:</div>
                        <div class="panel-body">
                            <p><strong>Do you have a signed and dated Environmental Policy?</strong></p>
                            <select v-model="question_18" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 3:</div>
                        <div class="panel-body">
                            <p><strong>Are your Environmental Policies and Procedure reviewed at least on an annual
                                basis?</strong></p>
                            <select v-model="question_19" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 4:</div>
                        <div class="panel-body">
                            <p><strong>Do you have a nominated Environmental Representative?</strong></p>
                            <select v-model="question_20" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 5:</div>
                        <div class="panel-body">
                            <p><strong>During the last 12 months has your Company received any formal warnings or
                                cautions regarding permit non-compliance issues?</strong></p>
                            <select v-model="question_21" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 6:</div>
                        <div class="panel-body">
                            <p><strong>Do you have a formal process for recording, reporting and investigating
                                environmental incidents and near misses?</strong></p>
                            <select v-model="question_22" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 7:</div>
                        <div class="panel-body">
                            <p><strong>Do you have a formal environmental risk assessment procedure that identifies
                                environmental risks and defines associated control measures?</strong></p>
                            <select v-model="question_23" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 8:</div>
                        <div class="panel-body">
                            <p><strong>Do you have a Carbon Management Procedure?</strong></p>
                            <select v-model="question_24" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->

                    <!-- Start Question -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Question 9:</div>
                        <div class="panel-body">
                            <p><strong>Do you train your staff on quality, health and safety and environmental issues
                                and induct new and existing workers into these processes?</strong></p>
                            <select v-model="question_25" class="form-control">
                                <option value="0" selected="">Please Select</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Question -->
                </div>
            </div>
            <div clas="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Declaration Statement</div>
                    <div class="panel-body">
                        <p>
                            By submitting this information you confirm that you have answered all the questions
                            truthfully and to the best of your knowledge.
                        </p>
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
            firstSubmit: false,
            secondSubmit: false,
            question_1: "0",
            question_2: "0",
            question_3: "0",
            question_4: "0",
            question_5: "0",
            question_6: "0",
            question_7: "0",
            question_8: "0",
            question_9: "0",
            question_10: "0",
            question_11: "0",
            question_12: "0",
            question_13: "0",
            question_14: "0",
            question_15: "0",
            question_16: "0",
            question_17: "0",
            question_18: "0",
            question_19: "0",
            question_20: "0",
            question_21: "0",
            question_22: "0",
            question_23: "0",
            question_24: "0",
            question_25: "0"
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
          var formData = new FormData();
          formData.append("name", this.name);
          formData.append("email", this.email);
          formData.append("contactNumber", this.contactNumber);
          formData.append("company", this.company);
          formData.append("address", this.address);
          formData.append("question_1", this.question_1);
          formData.append("question_2", this.question_2);
          formData.append("question_3", this.question_3);
          formData.append("question_4", this.question_4);
          formData.append("question_5", this.question_5);
          formData.append("question_6", this.question_6);
          formData.append("question_7", this.question_7);
          formData.append("question_8", this.question_8);
          formData.append("question_9", this.question_9);
          formData.append("question_10", this.question_10);
          formData.append("question_11", this.question_11);
          formData.append("question_12", this.question_12);
          formData.append("question_13", this.question_13);
          formData.append("question_14", this.question_14);
          formData.append("question_15", this.question_15);
          formData.append("question_16", this.question_16);
          formData.append("question_17", this.question_17);
          formData.append("question_18", this.question_18);
          formData.append("question_19", this.question_19);
          formData.append("question_20", this.question_20);
          formData.append("question_21", this.question_21);
          formData.append("question_22", this.question_22);
          formData.append("question_23", this.question_23);
          formData.append("question_24", this.question_24);
          formData.append("question_25", this.question_25);
          axios.post('/DeclarationQuiz', formData, config);
          this.secondSubmit = true
        },
    },

    mounted() {
        console.log('Component mounted.')
    }
}
</script>
