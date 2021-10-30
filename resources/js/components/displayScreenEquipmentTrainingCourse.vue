<template>
    <div class="col-xs-12 col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Display Screen Equipment Training Course {{ name }}</h3>
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
                            <label for="address">Address</label>
                            <textarea type="text" class="form-control" v-model="address" name="address" style="height: 114px" placeholder="Your Address"></textarea>
                        </div>
                    </div>
                    <input type="submit" v-on:click="submitOne" class="btn btn-success col-xs-12" name="submit">
                </div>
                <div v-if="two == true">
                    <h2>Introduction</h2>
                    <p>Welcome and thank you for taking part in this training presentation.</p>
                    <h2>Background</h2>

                    <p>Display Screen Equipment (DSE) is a device or equipment that has an alphanumeric or graphic display screen, regardless of the display process involved and includes both conventional display screens and those used in laptops, touch-screens, mobile phones and other similar devices.</p>

                    <p>Computer workstations or equipment can be associated with musculoskeletal disorders which may affect the neck, shoulder, back or arm pain, as well as with fatigue and eyestrain.</p>

                    <p>Surveys have found that a high proportion of DSE workers report aches, pains or eye discomfort. These aches and pains are sometimes called upper limb disorders (ULDs) which can include a range of medical conditions. Most of these conditions do not indicate any serious ill health, but it makes sense to avoid them as far as possible.</p>
                    <p>Consultation involves employers not only giving information to employees, but also listening to them and taking account of what they say before making health and safety decisions.</p>
                    <p><strong>The Health and Safety (Display Screen Equipment) Regulations 1992</strong> aim to protect the health of people who work with DSE. The Regulations were introduced because DSE has become one of the most common kinds of work equipment. The Regulations only place duties on employers in respect of employees (or self-employed persons working in the employer’s undertaking, or contractors), who regularly use DSE as a significant part of their normal work. These workers are known as DSE users.</p>

                    <p>DSE Regulations do not apply to workers who use DSE infrequently or for short periods of time however this information should be made available for all. Employers have more general duties under other legislation, such as the Health and Safety at Work etc Act 1974, which requires work activities to be undertaken in a way that does not create risks to others, such as children or the public. These are supplemented by the Management of Health and Safety at Work Regulations 1999 which require an assessment of the risks arising from work activities, including how they affect the health and safety of others not in their employment but who may be affected by the work.</p>

                    <p><strong>The Regulations require employers, if they have DSE users, to:</strong></p>
                    <ul>
                        <li>Analyse workstations, and assess and reduce risks</li>
                        <li>Employers need to look at:
                            <ol>
                                <li>the whole workstation including equipment, furniture, and the work environment</li>
                                <li>the job being done</li>
                                <li>any special needs of individual staff; and</li>
                                <li>where risks are identified, take steps to reduce them</li>
                            </ol>
                        </li>
                        <li>Ensure workstations meet minimum requirements</li>
                        <li>Plan work so there are breaks or changes of activity</li>
                        <li>On request arrange eye tests, and provide spectacles if special ones for DSE use are needed</li>
                        <li>Provide health and safety training and information</li>
                        <li>Review the assessment when the user or DSE changes</li>
                    </ul>
                    <p>This doesn’t mean that DSE work is risky or that it should be ignored. ULDs can be avoided if users follow effective practice, set up their workstations properly and take breaks during prolonged use. By just taking a few simple precautions, work with DSE can be more comfortable and productive.</p>
                    <p>Regular breaks are suggested as there is no specific guidance on how long and how often breaks should be for DSE users it is advisable to break up long spells of DSE work. Frequent short breaks are better than infrequent longer ones; 5-10 minute breaks every hour are better than 20 minutes every 2 hours. Ideally, users should have some choice about when to take breaks.</p>
                    <p>Most jobs provide opportunities to pause from DSE work to do other tasks, such as filing or copying. If there are no such natural changes of activity in your job, your employer should plan for you to have rest breaks. It is best if breaks or changes of activity allow the user to get up from their workstation and move around, or at least stretch and change posture.</p>
                    <p>Extensive research has found little evidence that DSE work causes any permanent damage to eyes. However, long spells of DSE work can lead to tired eyes, discomfort, temporary short-sightedness and headaches. DSE work is visually demanding, so it can make you aware of eyesight problems not noticed before (including changes in eyesight that happen with age). You can help your eyes by ensuring your screen is well positioned and properly adjusted that lighting conditions are suitable, and by taking regular breaks from screen work. Designated users must have work stations assessed and correct any defects.</p>
                    <p>You are entitled to ask your employer to provide an eye test if you are an employee who habitually uses DSE as a significant part of your normal day to day work. This is a full eye and eyesight test by an optometrist (or a doctor).</p>
                    <p>Your employer may only have to pay for spectacles if the test shows you need special corrective appliances (normally basic spectacles) that are prescribed for the distance the screen is viewed at. If an ordinary prescription is suitable for your DSE work, your employer does not have to pay for your spectacles.</p>
                    <p>Portable DSE such as laptops and handheld devices are subject to the Regulations if in prolonged use for work purposes. People who habitually use portable DSE should be trained in how to minimise risks for example by:</p>

                    <ul>
                        <li>Sitting comfortably</li>
                        <li>Making sure there is space under the desk to move legs</li>
                        <li>Adopting good posture by adjusting chairs and other furniture</li>
                        <li>Angling the screen so it is easy to read and taking frequent breaks</li>
                        <li>Placing the portable DSE on a firm surface at a comfortable height</li>
                        <li>Adjusting the screen and lighting to avoid reflections and glare</li>
                        <li>Adjusting curtains or blinds to prevent intrusive light</li>
                        <li>Using a laptop stand</li>
                        <li>Placing the mouse within easy reach</li>
                        <li>Supporting your forearms on the desk. Forearms should be approximately horizontal and the user’s eyes should be the same height as the top of the screen.</li>
                        <li>Not gripping the mouse too tightly</li>
                        <li>Resting fingers lightly on the buttons and do not press them hard</li>
                        <li>Making sure the screen surface is clean</li>
                        <li>Selecting colours that are easy on the eye (avoid red text on a blue background, or vice-versa)</li>
                        <li>Breaks and changes of activity</li>
                        <li>Looking into the distance from time to time, and blink often</li>
                        <li>Stretching and changing position</li>
                        <li>Contributing to risk assessments</li>
                        <li>Understanding how to report problems</li>
                    </ul>

                    <p>If you are a DSE user and think you have health problems connected with your work, it’s best to talk to your supervisor, manager or safety representative first. Employers have a duty to consult their employees or employee representatives on health and safety issues. Employers should encourage early reporting of health problems, help sufferers obtain treatment they need, and help them return to work.</p>


                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <button href="#" v-on:click="submitTwo" class="btn btn-success col-xs-12" >Accept Page</button>
                    </div>
                    <div v-if="acceptTwo == true" class="form-group" id="questionTwo" style=" margin-top: 95px;">
                        <label >Short question</label>
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
                    <h2>General</h2>
                    <p>
                        Most people with epilepsy are completely unaffected by DSE. A few who suffer from photo-sensitive epilepsy and are susceptible to flickering lights and striped patterns may be affected in some circumstances. But even they can often work successfully with DSE without provoking an attack.
                    </p>
                    <p>
                        It is rare that working with DSE causes skin disorders. A few people have experienced irritation, rashes or other skin problems when working with DSE. The exact cause is not known, but it seems possible that a combination of dry air, static electricity and individual susceptibility may be involved. If this is the case, increasing the humidity or allowing more fresh air into the room may help.
                    </p>
                    <p>
                        You don’t necessarily need to stop working with DSE if you are pregnant. If you are anxious about DSE or about work generally during pregnancy, you should talk to your doctor.
                    </p>
                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitThree" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptThree == true" class="form-group" id="questionThree" style=" margin-top: 95px;">
                        <label >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerThree" type="text" class="form-control" v-model="answerThree" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousThree" href="#">Previous</a></li>
                            <li v-if="answerThree.toLowerCase() == 'yes' "  style="display: inline;"><a href="#"v-on:click="nextThree">Next</a></li>
                        </ul>
                    </nav>
                </div>
                <div v-if="four == true">
                    <h2>What to do next?</h2>
                    <p>You must read and understand your firm’s/principals Health and Safety Policy and Procedure and sign the declaration to confirm that you fully understand the health and safety arrangements and your responsibilities and obligations to ensure their compliance.
                    </p>
                    <p>
                        You must follow any procedures for the monitoring of and effective ongoing safety management of employees and contractors.
                    </p>
                    <p>
                        Display the health and safety poster which is a standard design that must by law be publicly situated if you take on any staff. It includes basic health and safety information, standard procedures along with who is responsible in your organisation for health and safety provisions. It must be readable and easily viewed by employees.
                    </p>
                    <p>
                        Remember DSE assessments need to be reviewed when;
                    </p>
                    <ul>
                        <li>major changes are made to the equipment, furniture, work environment or software;</li>
                        <li>users change workstations;</li>
                        <li>the nature of work tasks change considerably;</li>
                        <li>it is thought that the controls in place may be causing other problems.</li>
                    </ul>
                    <p>
                        <strong>Remember:</strong> <em>Everyone has the right to come home to their families healthy and safe at the end of the working day.</em>
                    </p>
                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitFour" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptFour == true" class="form-group" id="questionFour" style=" margin-top: 95px;">
                        <label >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerFour" type="text" class="form-control" v-model="answerFour" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousFour" href="#">Previous</a></li>
                            <li v-if="answerFour.toLowerCase() == 'yes'"  style="display: inline;"><a href="#" v-on:click="nextFour">Next</a></li>
                        </ul>
                    </nav>
                </div>

                <div v-if="five == true">
                    <div>
                        <h2>Summary</h2>
                        <p>Many thanks for taking the time to read this training course, which we hope has helped to educate you on Health and Safety.</p>
                        <p><strong>If you have any other questions or need any other support. Please call {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></strong></p>
                        <p><strong>In any case, we shall be in touch to establish any other support.</strong></p>
                        <p>If your details below are correct, please click on the submit bar below to send your details.</p>

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
                acceptFive: false,
                answerFive: '',

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


            submitFive: function(){
                this.acceptFive = true;
            },
            nextFive: function(){
                this.acceptFive = false;
                this.answerFive = '';
                this.five = false;
                this.six = true;
            },
            previousFive: function(){
                this.five = false;
                this.four = true;
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

                axios.post('/DisplayScreenEquipmentTrainingCourse', formData, config);

            },


        },

        mounted() {
        }
    }
</script>
