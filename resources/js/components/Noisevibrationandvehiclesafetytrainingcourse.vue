<template>
    <div class="col-xs-12 col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Noise, Vibration and Vehicle Safety Training Course {{ name }}</h3>
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
                            <input type="text" class="form-control" v-model="position" name="position" placeholder="Position" value="">
                        </div>
                        <div class="form-group col-xs-12">
                            <label for="address">Address</label>
                            <textarea type="text" class="form-control" v-model="address" name="address" placeholder="Your Address"></textarea>
                        </div>
                    </div>
                    <input type="submit" v-on:click="submitOne" class="btn btn-success col-xs-12" name="submit">
                </div>
                <div v-if="two == true">
                    <h2>Introduction</h2>
                    <p>Welcome and thank you for taking part in this training presentation.</p>
                    <p>Loud noises at work, whether constant or intermittent, can create permanent hearing problems and so it is important that you know how to deal with the risks correctly.</p>
                    <p>Vibration, such as from hand-held equipment, can also cause health problems and so should be carefully monitored and the appropriate procedures followed.</p>
                    <p>This section of the course looks at the health and safety procedures surrounding noise and vibration at work as well as information on using work vehicles safely.</p>
                    <h2>Noise</h2>
                    <p>Many things at work can cause loud noise, including tools and equipment, whether continuous or in short bursts. Noise-induced hearing loss tends to build up over time and can leave permanent damage or a ringing or buzzing noise in the ear.</p>
                    <p>Employers have a legal duty to ensure that your hearing is not damaged at work by isolating or reducing the amount of noise in the workplace. They should also inform you of the risks and provide information and hearing protection where needed.</p>
                    <p>The hearing protection you may be provided with includes ear defenders, earmuffs or earplugs. It should be worn at all times when indicated to do so, either by instruction or signage.</p>
                    <p>Hearing protection must be worn when the noise is above 85dB, making hearing protection essential for these work activities.</p>
                    <p>HSE have produced a noise exposure calculators which can help you work out your daily noise exposure, weekly noise exposures, and estimate the performance of hearing protection.</p>
                    <p style="font-weight:bold">Methods for reducing and controlling noise include:</p>
                    <ul>
                        <li>Using a different, quieter work process.</li>
                        <li>Replace the noisy work equipment with something quieter.</li>
                        <li>Isolate vibrating machinery from their surroundings.</li>
                        <li>Build enclosures, barriers or screens around equipment.</li>
                        <li>Use sound-absorptive materials within the building.</li>
                        <li>Design the workflow to keep noisy machinery in areas away from where people spend most of their time.</li>
                        <li>Limit the amount of time spent in noisy areas.</li>
                        <li>Regularly maintain equipment to prevent worn or faulty parts.</li>
                        <li>Issue hearing protection to employees who must work on or near noisy equipment.</li>
                    </ul>
                    <h2>Employer Responsibilities</h2>
                    <p>Employers are required to undertake a risk assessment to eliminate or, where elimination is not reasonably practicable, reduce exposure to noise to as low a level as is reasonably practicable.</p>
                    <p>They must delegate Hearing Protection Zones in the workplace where employees are likely to be exposed at or above the upper exposure action values.</p>
                    <p>Employers must provide health surveillance for any employee likely to be exposed at or above the upper exposure action value or any individual who may be particularly sensitive or have existing damage.</p>
                    <p>They must also provide information, instruction and training to any employee who is exposed to noise at or above the lower exposure action value.</p>
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
                    <h2>Vibration</h2>
                    <p>The prolonged use of equipment and tools that expose your hands to vibration can cause permanent health problems. The most common problems are hand-arm vibration syndrome (HAVS) and vibration white finger.</p>
                    <p>HAVS comes from the use of hand-held power tools and is the cause of significant ill-health, such as painful and disabling disorders of the blood vessels, nerves and joints. If you have any symptoms of HAVS then you must inform your employer immediately. Symptoms include:</p>
                    <ul>
                        <li>Restrictive movement in your hands.</li>
                        <li>Loss of sense of touch.</li>
                        <li>Loss of grip.</li>
                        <li>Pins and needles.</li>
                        <li>Severe numbness.</li>
                        <li>Feeling coldness.</li>
                        <li>Carpal tunnel syndrome.</li>
                    </ul>
                    <h2>Employer and Employee Responsibilities</h2>
                    <p>Employers must assess the risks from vibration and ensure control measures are put in place to reduce the risk to as low as is practicable. Employers must also:</p>
                    <ul>
                        <li>Train employees in the safe use of equipment</li>
                        <li>Monitor the safe use of equipment.</li>
                        <li>Monitor exposure to vibration.</li>
                        <li>Keep all vibratory tools well maintained.</li>
                        <li>Consider anti-vibration gloves.</li>
                    </ul>
                    <h2>Employees should:</h2>
                    <ul>
                        <li>Use the equipment safely.</li>
                        <li>Keep hands warm.</li>
                        <li>Relax grip as this reduces pressure on muscles.</li>
                        <li>Follow all instructions from the employer.</li>
                    </ul>
                    <h2>Risk Assessment</h2>
                    <p>A specialist risk assessment may be needed if your workplace presents particularly significant hazards due to vibration. Examples of equipment that may cause HAVS include:</p>
                    <ul>
                        <li>Hand-held power tools.</li>
                        <li>Rock drills.</li>
                        <li>Electric drills.</li>
                        <li>Disc cutters.</li>
                        <li>Angle grinders.</li>
                        <li>Sanders.</li>
                        <li>Circular saws.</li>
                        <li>Planers.</li>
                        <li>Wacker plates.</li>
                        <li>Strimmers.</li>
                        <li>Jet washers.</li>
                    </ul>
                    <p>As part of the guidance from HSE which supports the Control of Vibration at Work Regulations 2005 they have produced a calculator to assist in calculating exposures for hand-arm vibration.</p>
                    <h2>Vehicle Risks</h2>
                    <p>Site vehicles and plant can cause injury to both the operator and anyone nearby. Accidents are often caused due to loss of control, people falling when climbing in or out of the vehicle, accidental operation, when reversing or from being crushed between the vehicle and a structure. Many accidents are due to the operator having a restricted view and so extra mirrors are often fitted.</p>
                    <p>Types of vehicle to look out for may include:</p>
                    <ul>
                        <li>Excavators.</li>
                        <li>Dumpers.</li>
                        <li>Cranes.</li>
                        <li>Forklifts.</li>
                        <li>Rigs.</li>
                        <li>HGVs and lorries.</li>
                        <li>Cars and vans.</li>
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
                            <li v-if="answerThree.toLowerCase() == 'yes' "  style="display: inline;"><a href="#"v-on:click="nextThree">Next</a></li>
                        </ul>
                    </nav>
                </div>
                <div v-if="four == true">
                    <h2>Reducing the Risks from Vehicles</h2>
                    <p>To reduce the risks presented by workplace vehicles:</p>
                    <ul>
                        <li>Ensure that the vehicle is the right one for the job.</li>
                        <li>Ensure vehicles are regularly maintained, repaired and inspected.</li>
                        <li>Use seat belts and restraints that are safe and fit the wearer correctly.</li>
                        <li>Ensure a safe access route in and out of the vehicle’s cab to prevent falling.</li>
                        <li>Use restraints and roll cages etc to prevent injury in case of the vehicle overturning.</li>
                        <li>Ensure the vehicle is coloured brightly so that it is easily seen.</li>
                        <li>Use lights so the operator can drive safely and has good visibility.</li>
                        <li>Install a warning system, such as horns and lights, to alert people nearby to the presence of the vehicle.</li>
                        <li>Ensure there are safety barriers or guards to protect people from dangerous parts of the vehicle.</li>
                        <li>Fit mirrors and CCTV to enable safe manoeuvring.</li>
                    </ul>
                    <h2>Pedestrian-Vehicle Conflict</h2>
                    <p>The best ways to manage safety between mobile plant and people on foot include:</p>
                    <ul>
                        <li>Use separate routes for plant and people.</li>
                        <li>Use separate entrances for plant and people.</li>
                        <li>Use one-way systems.</li>
                        <li>Ban reversing.</li>
                        <li>Use a signaller.</li>
                        <li>Ensure all lights are working.</li>
                        <li>Stay out of plant and vehicle areas unless you need to be there.</li>
                        <li>Wear high visibility clothing.</li>
                        <li>Report anything that you think is dangerous.</li>
                        <li>Use hand signals for plant operators.</li>
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
                                <label for="position">Position in Company</label>
                                <input type="text" class="form-control" v-model="position" name="position" placeholder="Position" value="">
                            </div>
                            <div class="form-group col-xs-12">
                                <label for="address">Address</label>
                                <textarea type="text" class="form-control" v-model="address" name="address" id="address" placeholder="Your Address"></textarea>
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
                formData.append("position", this.position);

                axios.post('/NoiseVibrationAndVehicleSafetyTrainingCourse', formData, config);

            },


        },

        mounted() {
        }
    }
</script>
