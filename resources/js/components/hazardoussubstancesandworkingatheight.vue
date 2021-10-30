<template>
    <div class="col-xs-12 col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Hazardous Substances and Working at Height {{ name }}</h3>
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
                            <textarea type="text" class="form-control" v-model="address" name="address" style="height: 114px" placeholder="Your Address"></textarea>
                        </div>
                    </div>
                    <input type="submit" v-on:click="submitOne" class="btn btn-success col-xs-12" name="submit">
                </div>
                <div v-if="two == true">
                    <h2>Introduction</h2>
                    <p>Welcome and thank you for taking part in this training presentation.</p>
                    <p>Hazardous substances have the potential to cause harm in all types of workplaces. Some can cause serious health problems, including occupational dermatitis and asthma. In fact, thousands of people in the UK suffer from asthma triggered or made worse by working with hazardous substances.</p>
                    <p>Working at height also has the potential to harm people, or even lead to death, if not carried out safely. They account for around 29% of work-related fatalities.</p>
                    <p>Both of these risks are easily manageable with adequate knowledge of the hazards and their control measures.</p>


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
                    <h2>Hazardous Substances</h2>
                    <p>
                        Hazardous substances can take many forms and, for this reason, sometimes even the most everyday of substances can be harmful. Common hazardous substances found in the workplace include:
                    </p>
                    <ul>
                        <li>Chemicals or products containing chemicals.</li>
                        <li>Fumes.</li>
                        <li>Dust.</li>
                        <li>Vapours and mists.</li>
                        <li>Nanotechnology.</li>
                        <li>Gases.</li>
                        <li>Biological agents.</li>
                    </ul>

                    <h2>Ill-Health from Hazardous Substances</h2>
                    <p>
                        Hazardous substances can have a variety of ill-health effects on those who have exposure to them. For example:
                    </p>
                    <ul>
                        <li>Skin problems, such as dermatitis.</li>
                        <li>Respiratory problems.</li>
                        <li>Asthma.</li>
                        <li>Occupational cancer.</li>
                        <li>Lung disease.</li>
                    </ul>
                    <p>Substances such as paint, varnish and dusts can also, if stored incorrectly, cause a fire or explosion and chemical spills or leaks can also result in serious environmental pollution and damage.</p>

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
                            <li style="display: inline;"><a v-on:click="previousThree"  href="#">Previous</a></li>
                            <li v-if="answerThree.toLowerCase() == 'yes' "  style="display: inline;"><a href="#" v-on:click="nextThree">Next</a></li>
                        </ul>
                    </nav>
                </div>
                <div v-if="four == true">
                    <h2>Routes of Entry</h2>
                    <p>The route of entry is the way in which a hazardous substance enters the body and causes harm. The main routes of entry are:</p>
                    <ul>
                        <li>Inhalation.</li>
                        <li>Skin absorption.</li>
                        <li>Injection.</li>
                        <li>Eye contact, such as from splashes or vapours in the eye.</li>
                        <li>Ingestion.</li>
                    </ul>

                    <h2>Control Measures</h2>
                    <p>Under the Control of Substances Hazardous to Health Regulations 2002 (COSHH), every workplace is required to assess the risks and ensure that suitable controls are put in place.</p>
                    <p>If it is not reasonably practicable to prevent exposure to the hazardous substance, then COSHH requires employers to follow a hierarchy of control measures. The hierarchy is as follows:</p>
                    <ol>
                        <li>Designs and use appropriate work processes, systems and engineering controls and provide and use suitable work equipment and materials.</li>
                        <li>Control exposure to a hazardous substance at its source e.g. by introducing adequate ventilation systems.</li>
                        <li>Provide suitable personal protective equipment as a last resort where adequate control of exposure to a substance cannot be achieved by other means.</li>
                    </ol>

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
                            <li style="display: inline;"><a v-on:click="previousFour"  href="#">Previous</a></li>
                            <li v-if="answerFour.toLowerCase() == 'yes'"  style="display: inline;"><a href="#" v-on:click="nextFour">Next</a></li>
                        </ul>
                    </nav>
                </div>

                <div v-if="five == true">
                    <h2>Training Employees</h2>
                    <p>Employees should be made aware of:</p>
                    <ul>
                        <li>The hazardous substances they work with, including the names of the substances, the health risks they pose and have access to any safety data sheets that apply.</li>
                        <li>The substance exposure limits and any health risks that might arise from using them.</li>
                        <li>The main findings of the COSHH risk assessment and the results of any exposure monitoring or health surveillance.</li>
                        <li>How to follow control measures and the importance of reporting any faults they discover in the control measures.</li>
                        <li>How to use items of PPE that are provided.</li>
                        <li>The emergency procedures that should be followed.</li>
                        <li>The CLP safety pictograms (red diamonds).</li>
                    </ul>

                    <h2>Working at Height</h2>
                    <p>Falls from height are one of the most common causes of injury in construction and account for many fatalities among building workers.</p>
                    <p>The Health and Safety Executive names some common working at height tasks where risks are present. These include:</p>
                    <ul>
                        <li>Gutter cleaning.</li>
                        <li>Putting up displays.</li>
                        <li>Minor roof work.</li>
                        <li>Shelf stacking.</li>
                        <li>Window cleaning.</li>
                        <li>Unloading a vehicle.</li>
                        <li>Machine maintenance.</li>
                    </ul>
                    <p>The main legislation for working at height is the Work at Height Regulations 2005, which cover a wide range of activities. Some of the work at height activities represented by the regulations include:</p>
                    <ul>
                        <li>Using a ladder or stepladder.</li>
                        <li>Working on a flat, scaffold or mobile elevated platform.</li>
                        <li>Working on the back of a lorry.</li>
                        <li>Working in areas where someone can fall from an edge, through an opening or through a fragile surface.</li>
                        <li>Working at ground level close to an opening, hole in the ground or an excavation that someone could fall into.</li>
                    </ul>
                    <h2>Working at Height Risk Assessment</h2>
                    <p>The Work at Height Regulations 2005 state that the following factors need to be considered in the risk assessment:</p>
                    <ul>
                        <li>The working conditions and the risks to the safety of persons at the place where the work equipment is to be used.</li>
                        <li>In the case of work equipment for access and egress, the distance to be negotiated.</li>
                        <li>The distance and consequences of a potential fall.</li>
                        <li>The duration and frequency of use.</li>
                        <li>The need for easy and timely evacuation and rescue in an emergency.</li>
                        <li>Any additional risk posed by the use, installation or removal of that work equipment or by evacuation and rescue from it.</li>
                        <li>Whether the work equipment is appropriate to the nature of the work being performed and the foreseeable loadings.</li>
                        <li>Whether the work equipment allows passage without risk.</li>
                    </ul>
                    <h2>Reducing the Risks</h2>
                    <p>In the first instance, employers should always try to avoid the need for working at height. If it is not possible to avoid working at height, then measures should be taken to ensure that the risks are reduced.</p>
                    <p>Measures could include:</p>
                    <ul>
                        <li>Airbags located as close as possible to the working area. Note that they do not work as effectively if the fall distance is too great.</li>
                        <li>Safety nets with adequate clearance under the nets to prevent injury to those falling into them.</li>
                        <li>Fall arrest harnesses with clearance from the ground to allow the shock absorbing lanyard or inertia reel to deploy.</li>
                    </ul>

                    <p>A Working At Heights - Permit to Work allows you and a contractor to consider and record all the hazards connected with the work they are going to conduct along with the necessary precautions that must be taken. By considering these hazards, the opportunity for accidents is greatly reduced and, therefore, the permit will help to protect the health & safety of employees and contractors.</p>

                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitFive" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptFive == true" class="form-group" id="questionFive" style=" margin-top: 95px;">
                        <label >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerFive" type="text" class="form-control" v-model="answerFive" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousFive"  href="#">Previous</a></li>
                            <li v-if="answerFive.toLowerCase() == 'yes'"  style="display: inline;"><a href="#" v-on:click="nextFive">Next</a></li>
                        </ul>
                    </nav>
                </div>


                <div v-if="six == true">
                    <h2>Access Equipment</h2>
                    <p>Work equipment should be provided where work at height cannot be avoided. Ensure that employees are sufficiently trained in how to use any new work equipment so that they do not introduce new hazards.</p>
                    <p>In some instances a valid license may be required dependant on site requirements such as an IPAF. This proves to the end user you have received suitable training and have relevant experience using powered access equipment.</p>
                    <h2>Tower scaffolds</h2>
                    <ul>
                        <li>Tower scaffolds must rest on firm level ground with the located castors or base plate properly supported. Never use bricks or building blocks to take the weight of the tower.</li>
                        <li>Install stabilisers or outriggers when advised to do so in the instruction manual.</li>
                        <li>Never erect a tower to a height above that recommended by the manufacturer.</li>
                        <li>Always provide a safe way to get to and from the work platform and provide edge protection on all working platforms used for storing materials.</li>
                        <li>Never use a tower in strong winds, as a support for ladders, trestles or other access equipment, with broken or missing parts or with incompatible components.</li>
                        <li>Never move a tower while people or materials are on the tower or in windy conditions.</li>
                    </ul>
                    <h2>Mobile Elevating Work Platforms (MEWP)</h2>
                    <p>Before using mobile elevating work platforms, think about:</p>
                    <ul>
                        <li>How high the job is from the ground and whether you have the appropriate MEWP for the job.</li>
                        <li>The ground conditions and consider the risk of the MEWP becoming unstable or overturning.</li>
                        <li>Whether the operators are trained and competent.</li>
                        <li>Whether the MEWP could be caught on any protruding features, such as steelwork, tree branches or power lines. If there is passing traffic do you need to take actions to prevent collisions?</li>
                        <li>Whether harnesses are necessary.</li>
                        <li>Whether the MEWP has been examined, inspected and maintained as required by the manufacturers’ instructions. Visual checks should also be carried out daily.</li>
                    </ul>

                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitSix" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptSix == true" class="form-group" id="questionSix" style=" margin-top: 95px;">
                        <label >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerSix" type="text" class="form-control" v-model="answerSix" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousSix"  href="#">Previous</a></li>
                            <li v-if="answerSix.toLowerCase() == 'yes'"  style="display: inline;"><a href="#" v-on:click="nextSix">Next</a></li>
                        </ul>
                    </nav>
                </div>

                <div v-if="seven == true">
                    <h2>Ladders</h2>
                    <h2>What are the Differences Between the Classes?</h2>
                    <p>It is important to understand the difference between ladder classes and the types of jobs these are suitable for so that you are safe when using the ladder and if using them in a commercial environment, insurers may not pay out if the wrong ladder is used. Class 1 is suitable for Industrial jobs, with a maximum static vertical load of 175kg, making them the most heavy-duty products under BS2037 standard.</p>
                    <p>EN131 has replaced Class 2, and is suitable for trade use and has a maximum static vertical load of 150kg. For work on a building site insurers would insist on either a Class 1 or EN131 ladder to be used, rather than a Domestic class product. Class 3 is a domestic standard, suitable for home DIY use and with a maximum static vertical load of 125kg. We would typically only recommend a domestic class product if it is something that will be used infrequently. If you require a product for use every day we would highly recommend a trade or industrial class product.</p>
                    <p>Ladders and access equipment are regulated by different standards, typically broken down by material and product types, so understanding the most suitable classification can be a little confusing.</p>
                    <p>Timber ladders and steps for instance are covered by a different British standard (BS1129), which is again broken into classes, Class 1 (Industrial – 175kg maximum load) and Class 2 (Trade – 150kg maximum load). In the same way as above Cltructions. Visual checks should also be carried out daily.ass 2 has been replaced by EN131, so some timber ladders will be EN131, while the majority are manufactured to Class 1.</p>
                    <p>The other main category that is subject to British and European standards is loft ladders. The British standard of BS7553 is split into two categories, Class G (General use – 100kg maximum load) and Class H (Heavy use – 150kg maximum load). This British standard has been superseded with a new European standard EN14975 (150kg).</p>
                    <p>Finally, many step stools are tested to the European standard EN14183.</p>
                    <h2>Classes Relating to Material</h2>
                    <p>Below are some additional classes that correspond to the material in which the ladder is manufactured from.</p>
                    <ul>
                      <li>BS 1129:1990 (British) applies to wooden ladders and stepladders.</li>
                      <li>BS 2037:1990 (British) applies to metal ladders and stepladders.</li>
                      <li>BS EN 131:1993 (European) applies to metal and wooden ladders and stepladders.</li>
                    </ul>
                    <p>Ladders should only be used when the risk assessment shows that the use of other, safer work equipment is not justified or feasible.</p>
                    <p>Generally, a ladder or stepladder should only be used for work for up to 30 minutes in one position and for work that involves lifting no more than 10kg up the ladder.</p>
                    <p>Leaning ladders must be prevented from slipping or moving by securing the stiles at a suitable point, such as near the top or bottom of the ladder. Where this is not possible, an effective ladder stability device should be used. As a last resort the ladder should be footed.</p>
                    <p>Stepladder users should always ensure the steps face the work activity so as to avoid overturning.</p>
                    <p>When using ladders or step ladders:</p>
                    <ul>
                        <li>Always rest the ladder on a firm, level surface and a clean, non-slippery floor.</li>
                        <li>Never rest a ladder on movable objects like pallets or bricks.</li>
                        <li>When climbing or working from a ladder, maintain 3 points of contact i.e. both feet and one hand.</li>
                        <li>Ensure the ladder or stepladder rungs or steps are level.</li>
                        <li>Do not exceed the stated load of the ladder.</li>
                        <li>Do not over reach. Keep your belt buckle inside the stiles and both feet on the rung throughout the task.</li>
                        <li>The top 3 rungs of a leaning ladder provide a handhold so never work off them.</li>
                        <li>Use tool belts to avoid holding items when climbing.</li>
                        <li>Always have one hand free to grip the ladder if something has to be carried.</li>
                        <li>To help prevent a leaning ladder from slipping, it should be positioned at an angle of 75 degrees i.e.1 unit out for every 4 units up.</li>
                        <li>Make sure the top of a leaning ladder rests against a solid surface. For example a wall and not plastic guttering.</li>
                        <li>Ensure a stepladder is fully open and any locking devices are fully engaged before using.</li>
                        <li>Ensure the weather is suitable and especially do not use in strong or gusty wind.</li>
                        <li>All ladders and stepladders should have a pre-use check every day, including conditions of feet, stiles and rungs.</li>
                    </ul>
                    <h2>Stepladders</h2>
                    <p>Stepladders are suitable for light work of short duration when other work equipment is not appropriate. Be sure to:</p>
                    <ul>
                        <li>Use platform steps over swing-back steps where possible.</li>
                        <li>Check the condition of the steps before use.</li>
                        <li>Use the ladders on firm, level ground.</li>
                        <li>Ensure the ladder is fully extended before use.</li>
                        <li>Never over reach.</li>
                        <li>Never stand on the top third of the ladder unless it is designed to be used in this way.</li>
                    </ul>

                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitSeven" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptSeven == true" class="form-group" id="questionSeven" style=" margin-top: 95px;">
                        <label >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerSeven" type="text" class="form-control" v-model="answerSeven" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousSeven"  href="#">Previous</a></li>
                            <li v-if="answerSeven.toLowerCase() == 'yes'"  style="display: inline;"><a href="#" v-on:click="nextSeven">Next</a></li>
                        </ul>
                    </nav>
                </div>

                <div v-if="eight == true">
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

                six: false,
                acceptSix: false,
                answerSix: '',

                seven: false,
                acceptSeven: false,
                answerSeven: '',

                eight: false,
                acceptEight: false,
                answerEight: '',

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

            submitSix: function(){
                this.acceptSix = true;
            },
            nextSix: function(){
                this.acceptSix = false;
                this.answerSix = '';
                this.six = false;
                this.seven = true;
            },
            previousSix: function(){
                this.six = false;
                this.five = true;
            },

            submitSeven: function(){
                this.acceptSeven = true;
            },
            nextSeven: function(){
                this.acceptSeven = false;
                this.answerSeven = '';
                this.seven = false;
                this.eight = true;
            },
            previousSeven: function(){
                this.seven = false;
                this.six = true;
            },

            submitEight: function(){
                this.acceptEight = true;
            },
            nextEight: function(){
                this.acceptEight = false;
                this.answerEight = '';
                this.eight = false;
                this.nine = true;
            },
            previousEight: function(){
                this.six = false;
                this.seven = true;
            },

            submitForm: function() {
                this.eight = false;
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
                axios.post('/HazardousSubstancesandWorkingatHeight', formData, config);
            },
        },
        mounted() {
        }
    }
</script>
