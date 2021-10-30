<template>
    <div class="col-xs-12 col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Risk Assessment Training Course {{ name }}</h3>
            </div>
            <div class="panel-body">
                <div v-if="one == false">
                    <p>Please fill in the form below and then click submit to start the course.</p>
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
                            <input type="text" class="form-control" v-model="position" name="position"
                                   id="position" placeholder="Position" value="">
                        </div>
                        <div class="form-group col-xs-12">
                            <label for="address">Address</label>
                            <textarea type="text" class="form-control" v-model="address" name="address" style="height: 114px" placeholder="Your Address"></textarea>
                        </div>
                    </div>
                    <input type="submit" v-on:click="submitOne" class="btn btn-success col-xs-12" name="submit">
                </div>
                <div v-if="two == true">
                    <h2>Introduction</h2>
                    <p>Welcome and thank you for taking part in this training presentation.</p>
                    <p>This training course explains what a risk assessment is and that a sufficient and suitable risk assessment is essential for all workplaces, regardless of the profession or environment.</p>
                    <p>Employers have a legal duty to ensure that the risks are assessed, managed and monitored so that their employees remain safe from harm.</p>
                    <p>Employers under the Management of Health and Safety at Work Regulations 1999, the minimum
                        they must do is:</p>
                    <ul>
                        <li>identify what could cause injury or illness in the business (hazards)</li>
                        <li>decide how likely it is that someone could be harmed and how seriously (the risk)</li>
                        <li>take action to eliminate the hazard, or if this isn&#39;t possible, control the risk</li>
                        <li>Assessing risk is just one part of the overall process used to control risks in your workplace.</li>
                    </ul>
                    <p>
                        The law states that a risk assessment must be &#39;suitable and sufficient&#39;, ie it should show that:
                    </p>
                    <ul>
                        <li>a proper check was made</li>
                        <li>you asked who might be affected</li>
                        <li>you dealt with all the obvious significant risks, taking into account the number of people who could be involved</li>
                        <li>the precautions are reasonable, and the remaining risk is low</li>
                        <li>you involved your workers or their representatives in the process</li>
                        <li>The level of detail in a risk assessment should be proportionate to the risk and appropriate to the nature of the work. Insignificant risks can usually be ignored, as can risks arising from routine activities associated with life in general, unless the work activity compounds or significantly alters those risks. Your risk assessment should only include what you could reasonably be expected to know - you are not expected to anticipate unforeseeable risks.</li>
                    </ul>
                    <p>This section of the course looks at each of the vital elements of a risk assessment so that you can carry out an assessment of your own workplace.</p>
                    <h2>What is a Risk Assessment?</h2>
                    <p>A risk assessment is simply a careful examination of what in your work could cause harm to people, so that you can weigh up whether you have taken enough precautions or should do more to prevent harm.</p>
                    <p>Employers are legally required to assess the risks in their workplace so that they can put in place a plan to control the risks.</p>
                    <p>The main steps of a risk assessment are:</p>
                    <ol>
                        <li>Identify the hazards.</li>
                        <li>Consider who might be harmed and how.</li>
                        <li>Evaluate the risks and decide on precautions.</li>
                        <li>Record your significant findings and implement them.</li>
                        <li>Review your assessment and update if necessary.</li>
                    </ol>
                    <p>The following key terms are used when talking about risk assessments:</p>
                    <p><strong>Reasonably practicable</strong> – the risk assessment should be realistic and possible to achieve with the resources available in your workplace.</p>
                    <p><strong>Suitable and sufficient</strong> – the risk assessment must be tailored towards the tasks at hand and be thorough enough to ensure there are no discrepancies.</p>
                    <p><strong>Competent person</strong> – the person that carries out the risk assessment should understand HSE guidance, develop an action plan, know which information to obtain for the risk assessment, seek help when needed and record all the results.</p>
                    <p><strong>Hierarchy of control</strong> – the order in which control measures should be implemented.</p>

                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#acceptPage" v-on:click="submitTwo" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptTwo == true" class="form-group" id="questionTwo" style=" margin-top: 95px;">
                        <label id="acceptPage" >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerTwo" type="text" class="form-control" v-model="answerTwo" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li v-if="answerTwo.toLowerCase() == 'yes' "  style="display: inline;"><a v-on:click="nextTwo" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
                <div v-if="three == true">
                    <h2>Step 1 – Identify the Hazards</h2>
                    <p>The first step of the risk assessment is to identify the hazards. Techniques for identifying hazards include:</p>
                    <ul>
                        <li>Work place observation.</li>
                        <li>Feedback from employees.</li>
                        <li>Checking manufacturer’s instructions or data sheets.</li>
                        <li>Reviewing accident and ill health records.</li>
                        <li>Take account of non-routine operations.</li>
                        <li>Remember to think about long-term hazards to health.</li>
                        <li>Visit the HSE website for practical guidance and how to control them.</li>
                    </ul>
                    <h2>Step 2 – Decide who might be Harmed and How</h2>
                    <p>This step involves looking at each specific hazard and then identifying the people who may be harmed by them. These people may be:</p>
                    <ul>
                        <li>Specific groups of employees.</li>
                        <li>Customers.</li>
                        <li>Visitors.</li>
                        <li>Members of the public.</li>
                    </ul>
                    <p>Some employees have particular requirements, such as:</p>
                    <ul>
                        <li>Young workers.</li>
                        <li>Expectant mothers.</li>
                        <li>People with disabilities.</li>
                        <li>People who are not at work all the time.</li>
                        <li>Part-time workers</li>
                        <li>Sub-contractors.</li>
                    </ul>
                    <h2>Step 3 – Evaluate the Risks</h2>
                    <p>The next step is to evaluate the risks and decide whether the hazard can be eliminated. If not, how can you control the risks so that the likelihood of harm is reduced? Options include:</p>
                    <ul>
                        <li>Trying a less risky option.</li>
                        <li>Preventing access to the hazard.</li>
                        <li>Re-organising work to reduce exposure.</li>
                        <li>Issuing personal protective equipment.</li>
                        <li>Involving and training staff to ensure the precautions will work in practice and don’t introduce new hazards.</li>
                    </ul>


                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#acceptPage" v-on:click="submitThree" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptThree == true" class="form-group" id="questionThree" style=" margin-top: 95px;">
                        <label id="acceptPage" >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerThree" type="text" class="form-control" v-model="answerThree" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousThree" href="#">Previous</a></li>
                            <li v-if="answerThree.toLowerCase() == 'yes' "  style="display: inline;"><a v-on:click="nextThree" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
                <div v-if="four == true">
                    <h2>Step 4 – Record your Findings and Implement Them</h2>
                    <p>It is recommended that your risk assessment findings are written down, even though where there are less than 5 employees this is not required by law.</p>
                    <p>You need to be able to show that:</p>
                    <ul>
                        <li>A proper check was made.</li>
                        <li>You have considered who might be affected.</li>
                        <li>You have dealt with all the obvious significant hazards, taking into account the number of people who could be involved.</li>
                        <li>The precautions are reasonable and the remaining risk is low.</li>
                        <li>Staff or their representatives have been involved.</li>
                    </ul>
                    <h2>Step 5 – Review and Update</h2>
                    <p>Check on a regular basis whether there have been any changes in the workplace that may affect your risk assessment. For example:</p>
                    <ul>
                        <li>Are there any improvements still to be made?</li>
                        <li>Has there been employee feedback?</li>
                        <li>Have you learnt anything from accidents and near misses?</li>
                        <li>Has any new equipment or machinery been introduced?</li>
                        <li>Do you have any new employees that require training?</li>
                    </ul>


                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#acceptPage" v-on:click="submitFour" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptFour == true" class="form-group" id="questionFour" style=" margin-top: 95px;">
                        <label id="acceptPage" >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerFour" type="text" class="form-control" v-model="answerFour" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousFour" href="#">Previous</a></li>
                            <li v-if="answerFour.toLowerCase() == 'yes'"  style="display: inline;"><a v-on:click="nextFour" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
                <div v-if="five == true">
                    <div>
                        <h2>Summary</h2>
                        <p>Many thanks for taking the time to read this training course, which we hope has helped to educate you on Health and Safety.</p>
                        <p><strong>If you have any other questions or need any other support. Please call {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></strong></p>
                        <p><strong>In any case, we shall be in touch to establish any other support.</strong></p>
                        <p>If your details below are correct, please click on the submit bar below to submit your details.</p>
                        <div class="col-xs-6">
                            <div class="form-group col-xs-12">
                                <label for="name">Name</label>
                                <input  type="text" v-model="name" class="form-control" id="name" name="name" placeholder="Name" value="">
                            </div>
                            <div class="form-group col-xs-12">
                                <label for="contactNumber">Contact Number</label>
                                <input type="text" class="form-control" v-model="contactNumber" id="contactNumber" name="contactNumber" placeholder="Contact Number" value="">
                            </div>
                            <div class="form-group col-xs-12">
                                <label for="company">Company</label>
                                <input type="text" class="form-control" v-model="company" id="company" name="company" placeholder="Company" value="">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group col-xs-12">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" v-model="email" name="email" id="email" placeholder="Email" value="">
                            </div>
                            <div class="form-group col-xs-12">
                                <label for="position">Position in Company</label>
                                <input type="text" class="form-control" v-model="position" name="position"
                                       id="position" placeholder="Position" value="">
                            </div>
                            <div class="form-group col-xs-12">
                                <label for="address">Address</label>
                                <textarea type="text" class="form-control" v-model="address" name="address" id="address" style="height: 114px" placeholder="Your Address"></textarea>
                            </div>
                        </div>
                        <input type="submit" v-on:click="submitForm" class="btn btn-success col-xs-12" name="submit">
                    </div>
                </div>
                <div class="alert alert-success" v-if="last == true">
                    Thank you, Your details have been sent!
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

                one: false,
                last: false,

                two: false,
                acceptTwo: false,
                answerTwo: '',

                three: false,
                acceptThree: false,
                answerThree: '',

                four: false,
                acceptFour: false,
                answerFour: '',

                five: false,
            }
        },
        props: ['contactName', 'companyNumber', 'adminEmail'],

        methods: {
            submitOne: function() {
                if(this.name !== "" && this.email !== ""){
                    this.one = true;
                    this.two = true;
                }
            },
            submitTwo: function(){
                this.acceptTwo = true;
            },
            nextTwo: function(){
                this.acceptTwo = false;
                this.answerTwo = '';
                this.two = false;
                this.three = true;
            },
            previousTwo: function(){
                this.two = false;
                this.one = true;
            },

            submitThree: function(){
                this.acceptThree = true;
            },
            nextThree: function(){
                this.acceptThree = false;
                this.answerThree = '';
                this.three = false;
                this.four = true;
            },
            previousThree: function(){
                this.three = false;
                this.two = true;
            },

            submitFour: function(){
                this.acceptFour = true;
            },
            nextFour: function(){
                this.acceptFour = false;
                this.answerFour = '';
                this.four = false;
                this.five = true;
            },
            previousFour: function(){
                this.four = false;
                this.three = true;
            },

            submitForm: function() {
                this.five = false;
                this.last = true;

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
                formData.append("position", this.position);
                axios.post('/RiskAssessmentTrainingCourse', formData, config);
            },
        },
        mounted() {
        }
    }
</script>
