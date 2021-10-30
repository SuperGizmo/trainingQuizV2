<template>
    <div class="col-xs-12 col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Health & Safety Training Course {{ name }}</h3>
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
                    <button v-on:click="submitOne" class="btn btn-success col-xs-12" name="submit">Submit</button>
                </div>
                <div v-if="two == true">
                    <h2>Introduction</h2>
                    <p>Welcome and thank you for taking part in this training presentation.</p>
                    <h2>Background</h2>
                    <p><strong>The Health and Safety at Work etc. Act 1974,</strong> often referred to as HASWA or HSW, is an Act of Parliament and the main piece of UK health and safety legislation. It places a duty on all employers “to ensure, so far as is reasonably practicable, the health, safety and welfare at work” of all employees and includes work processes (e.g. manual handling, use of display screen equipment), and specific standards such as the controlling, keeping, use and prevention of dangerous substances and controlling certain emissions into the atmosphere (e.g. exposure to chemicals).</p>
                    <p><strong>It also enforces the provision of:</strong></p>
                    <ul>
                    	<li>Safe system of works;</li>
                    	<li>A safe place of work;</li>
                    	<li>Safe equipment, plant and machinery;</li>
                    	<li>Safe and competent people working alongside you, because employers are also liable for their staff and managers;</li>
                    	<li>Carrying our risk assessments as set out in regulations, and taking steps to eliminate or control these risks;</li>
                    	<li>Informing workers fully about all potential hazards associated with any work process, chemical substance or activity, including providing instruction, training and supervision;</li>
                    	<li>Appointing a "competent person” responsible for health and safety (competent persons, such as a head of health and safety, oversee day-to-day safety management, oversee safety inspections, and liaise with staff safety reps);</li>
                    	<li>Providing adequate facilities for staff welfare at work;</li>
                    </ul>
                    <p>Employers’ safety obligations extend to other people too, e.g. contractors, suppliers, temps, casual workers, members of the public, visitors and clients.</p>


                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <button href="#acceptPage" v-on:click="submitTwo" class="btn btn-success col-xs-12" name="acceptTwo" >Accept Page</button>
                    </div>
                    <div v-if="acceptTwo == true" class="form-group" id="questionTwo" style=" margin-top: 95px;">
                        <label id="acceptPage" >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerTwo" type="text" class="form-control" v-model="answerTwo" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li v-if="answerTwo.toLowerCase() == 'yes' "  style="display: inline;"><button v-on:click="nextTwo" class="btn btn-success col-xs-3" type="button">Next</button></li>
                        </ul>
                    </nav>
                </div>
                <div v-if="three == true">
                    <h2>Worker’s responsibilities</h2>
                    <p>Workers are those who work for Contractors and for all projects they will:</p>
                    <ul>
                        <li>Take care of their own health and safety and to others who may be affected by their actions or omissions;</li>
                        <li>Read and understand health and safety information provided to them;</li>
                        <li>Follow site rules;</li>
                        <li>Attend any relevant induction of training courses;</li>
                        <li>Report any accidents, incidents or risks that might be a danger to themselves and others;</li>
                        <li>Liaise with the site safety representative on health and safety matters;</li>
                        <li>Cooperate with others and follow reasonable directions from duty holders.</li>
                    </ul>
                    <p><strong>Management of Health and Safety at Work Regulations 1999 (MHSWR)</strong> were introduced to reinforce the <strong>Health and Safety at Work etc. Act 1974.</strong> The MHSWR places additional duties on employers to assess reasonably foreseeable risks to implement controls so far as reasonably practicable.</p>
                    <p>The introduction of the Health and Safety at Work Act in 1974 had a profound effect on British industry. Since then there have been large reductions in work-related injury and the overall scale of ill health.</p>
                    <p>Between 1974 and 2015:</p>
                    <ul>
                    	<li>Fatal injuries to employees have fallen by 86%</li>
                    	<li>Non-fatal injuries have fallen by 77% (to 2011/12)</li>
                    	<li>Self-reported non-fatal injuries have fallen (since 2000/01)</li>
                    	<li>However – deaths from asbestos-related diseases have increased almost constantly year-on-year with about 10 times as many deaths in 2012 than in 1974, mainly due to exposure to asbestos prior to 1980.</li>
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
                            <li style="display: inline;"><a v-on:click="previousThree" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerThree.toLowerCase() == 'yes' "  style="display: inline;"><button type="button" class="btn btn-success col-xs-3"v-on:click="nextThree">Next</button></li>
                        </ul>
                    </nav>
                </div>
                <div v-if="four == true">
                    <h2>Why do we have Health and Safety Laws?</h2>
                    <p>In order to protect yourself and your staff from illness or injury in the workplace. Employers have a “duty of care” over the health, safety and welfare of their staff in the workplace. The Act specifies the duties that employers have to their staff, to customers and members of the public whilst in the working environment.</p>
                    <h2>Who enforces Health and Safety Law?</h2>
                    <p>The task of ensuring that health and safety at work is enforced between local authorities and the Health and Safety Executive (HSE). The HSE is the independent regulator with a mission to prevent work-related death, injury and ill health in the UK.</p>
                    <ul>
                    	<li>Promotes safer working practices, supports businesses – through free guidance and advice;</li>
                    	<li>Carries out relevant research;</li>
                    	<li>Develops health and safety policy and strategy; and</li>
                    	<li>Ensures compliance with health and safety law through inspections, investigations and prosecutions.</li>
                    </ul>
                    <p>Visit the HSE website for more advice and guidance at <strong><a href="https://www.hse.gov.uk">www.hse.gov.uk</a>.</strong> You can download free leaflets and also subscribe to their news alerts and updates to keep up to date with legislation and findings.</p>
                    <p>You can also visit the Royal Society for the Prevention of Accidents at <strong><a href="https://www.rospa.com">www.rospa.com</a>.</strong></p>
                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#acceptPage" v-on:click="submitFour" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptFour == true" class="form-group" id="questionFour" style=" margin-top: 95px;">
                        <label id="acceptPage">Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerFour" type="text" class="form-control" v-model="answerFour" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousFour" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerFour.toLowerCase() == 'yes'"  style="display: inline;"><button type="button" class="btn btn-success col-xs-3" v-on:click="nextFour">Next</button></li>
                        </ul>
                    </nav>
                </div>
                <div v-if="five == true">

                    <h2>What is a Health and Safety Policy?</h2>
                    <p>
                        A health and safety policy is a written statement by an employer stating the company’s commitment for the protection of the health and safety of employees and to the public. It is an endorsed commitment by management to its employees regarding their health and safety and enables the safety management structure to be publicised.
                    </p>
                    <h2>What is a Health and Safety Procedure and Handbook?</h2>
                    <p>A health and safety procedure is a detailed written document by an employer contained in a handbook outlining the health and safety policy, procedures, responsibilities, and information and includes areas such as:</p>
                    <ul>
                    	<li>Code of Conduct – General H & S Rules;</li>
                    	<li>Working Environment – Housekeeping;</li>
                    	<li>Fire;</li>
                    	<li>First Aid and Accident Reporting;</li>
                    	<li>RIDDOR – Reporting an Incident;</li>
                    	<li>Work Equipment;</li>
                    	<li>Manual Handling;</li>
                    	<li>DSE – Display Screen Equipment;</li>
                    	<li>PPE – Personal Protective Equipment</li>
                    	<li>Electricity;</li>
                    	<li>Hazardous Substances;</li>
                    	<li>Violence and Aggression;</li>
                    	<li>Alcohol and Drugs;</li>
                    	<li>Safety, Signs and Signals;</li>
                    	<li>Road Vehicles – and similar work vehicles;</li>
                    	<li>Confined Spaces;</li>
                    	<li>Working at Height;</li>
                    	<li>Construction, Design and Management Regulations (CDM) 2015 – responsibilities (where applicable).</li>
                    </ul>
                    <p><strong>Whether you are an employee, contractor, supplier, part-time member of staff or agent you should obtain a copy of the health and safety procedure it and ensure you understand all of it. If you have any questions, please ask your manager.</strong></p>
                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#acceptPage" v-on:click="submitFive" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptFive == true" class="form-group" id="questionFive" style=" margin-top: 95px;">
                        <label id="acceptPage">Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerFive" type="text" class="form-control" v-model="answerFive" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousFive" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerFive.toLowerCase() == 'yes' "  style="display: inline;"><button type="button" class="btn btn-success col-xs-3" v-on:click="nextFive">Next</button></li>
                        </ul>
                    </nav>
                </div>
                <div v-if="six == true">

                    <h2>Why is it important to follow safety procedures?</h2>
                    <p>Safety procedures can provide consistency and guidance amongst staff and contractors and help decrease the number of workplace incidents. It is important to have systems in place to show how you plan, organise, control, monitor and review preventative measures and appoint a competent person(s) to help comply with the legal obligations.</p>
                    <h2>What are Approved Codes of Practice</h2>
                    <p>Approved Codes of Practice (ACOPs) are guidance with specific legal standing. They cover a wide range of working practices.</p>
                    <p>Failure to follow an ACOP is not an offence in itself, but an employer will need to be able to show effective methods have been adopted to demonstrate compliance with the law.</p>
                    <p>The ACOPs guidance can be found on the Health and Safety Executive website at <strong><a href="https://www.hse.gov.uk/legislation/legal-status.htm">www.hse.gov.uk/legislation/legal-status.htm</a>.</strong></p>
                    <h2>Why is it important to be safe?</h2>
                    <p>A serious workplace injury, illness or death changes lives forever – for families, friends, communities, and co-workers alike. Human loss and suffering are immeasurable. Occupational injuries and illnesses can provoke major crises for the families in which they occur. You have a responsibility to prevent this.</p>

                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#acceptPage" v-on:click="submitSix" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptSix == true" class="form-group" id="questionSix" style=" margin-top: 95px;">
                        <label id="acceptPage">Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerSix" type="text" class="form-control" v-model="answerSix" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousSix" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerSix.toLowerCase() == 'yes' "  style="display: inline;"><button type="button" class="btn btn-success col-xs-3" v-on:click="nextSix">Next</button></li>
                        </ul>
                    </nav>
                </div>
                <div v-if="seven == true">
                    <h2>What to do next?</h2>
                    <p>You must read and understand your organisations/principals Health and Safety Policy and Procedure and sign the declaration to confirm that you fully understand the health and safety arrangements and your responsibilities and obligations to ensure their compliance.</p>
                    <p>You must follow any procedures for the monitoring of and effective ongoing safety management of employees and contractors.</p>
                    <p>The Health and Safety Information for Employees Regulations 1989, requires employers to either display the HSE-approved law poster or to provide each of their workers with the equivalent leaflet.</p>
                    <p>It includes basic health and safety information, standard procedures along with who is responsible in your organisation for health and safety provisions. It must be easily viewed by employees.</p>
                    <p><strong>Remember:</strong> <em>Everyone has the right to come home to their families healthy and safe at the end of the working day.</em></p>



                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#acceptPage" v-on:click="submitSeven" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptSeven == true" class="form-group" id="questionSeven" style=" margin-top: 95px;">
                        <label id="acceptPage">Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerSeven" type="text" class="form-control" v-model="answerSeven" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousSeven" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerSeven.toLowerCase() == 'yes'"  style="display: inline;"><button type="button" class="btn btn-success col-xs-3" v-on:click="nextSeven">Next</button></li>
                        </ul>
                    </nav>
                </div>

                <div v-if="eight == true">
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
                this.eight = false;
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

                axios.post('/general-health-and-safety-training-course', formData, config);

            },


        },

        mounted() {
        }
    }
</script>
