<template>
<div class="col-xs-12 col-sm-9">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Green Deal Assessor Training Course {{ name }}</h3>
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
                <h2>Foreword</h2>
                <p>The Green Deal is a Government scheme launched in 2013 set up to reduce the greenhouse gases emitted by the UK’s residential housing stock, which currently accounts for 25% of the UK’s carbon emissions and 12% of the UK’s greenhouse gas emissions. As part of national efforts to meet the UK’s legally binding target to reduce carbon emissions by 35% by 2020, the Green Deal scheme was implemented and run by the Green Deal Finance Company (“GDFC”).</p>
                <p>The GDFC was a not-for-profit company aimed to support the Green Deal by buying the loans from Green Deal Providers, who agreed loans to consumers. This allowed Green Deal Providers to sell more energy efficient products, whilst not having to finance the loans that they originated. The GDFC was part financed by DECC. In July 2015 the Government said that it would provide no further funding to the GDFC and Green Deal was suspended, although all the systems remained in place.</p>
                <p>On the 15th January 2017, Greenstone Finance and Aurium Capital Markets (“Aurium”) announced the acquisition of the business and assets of the GDFC, as well as its existing loan book and under the new ownership Greenstone Finance has assembled a new management team to run the business and operations for the GDFC and will continue to service the existing Green Deal loans and commence financing of new Green Deal loans.</p>



                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitTwo" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptTwo == true" class="form-group" id="questionTwo" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input type="text" class="form-control" v-model="answerTwo" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li v-if="answerTwo.toLowerCase() == 'yes' " id="buttonNext" style="display: inline;"><a v-on:click="nextTwo"  href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
            <div v-if="three == true">
                <h2>Main Benefits of a Green Deal Plan</h2>
                <p>The following are the main benefits for customers financing their home energy improvements through a Green Deal Plan:</p>
                <ul>
                    <li>This is the <strong>Government led</strong> Green Deal scheme;</li>
                    <li>They will benefit from a <strong>warmer and more energy efficient home, with reduced upfront costs;</strong></li>
                    <li>Plan repayments are <strong>hassle-free</strong> because they are added automatically to their existing electricity bill;</li>
                    <li>The plan is linked to their property, so when they move house <strong>the plan remains with the property it is benefitting;</strong></li>
                    <li>The <strong>interest rates charged are competitive;</strong></li>
                    <li>The <strong>eligibility criteria are simple;</strong></li>
                    <li>The cost of the loan will, <strong>in part, be paid for</strong> via the energy savings achieved;</li>
                    <li>Depending on the energy efficiency improvements being made, the repayment term may be <strong>up to 25 years</strong> enabling more <strong>affordable monthly repayments;</strong></li>
                    <li>All Green Deal Plan home improvements are <strong>guaranteed for the expected lifetime of the measure.</strong></li>
                </ul>
                <h2>Key Discussion Points</h2>
                <p>The following are the <strong>key points</strong> of a Green Deal Plan:</p>
                <ol>
                    <li>The improvements to the home will be financed through a Green Deal Plan;</li>
                    <li>A Green Deal Plan is a loan attached to your electricity meter rather than to an individual;</li>
                    <li>Plan repayments are the obligation of the person who is the Bill Payer at any point in time and if the individual who pays the electricity bill moves out, the Green Deal Plan remains behind, attached to the meter. The new Bill Payer assumes responsibility for ongoing Plan repayments, but importantly, not for any arrears built-up by other Bill Payers;</li>
                    <li><strong>If the owner decides to sell the property, they are required to disclose to the buyer if a Green Deal Plan is attached to the property.</strong>  Similarly, a landlord renting to a new tenant must do the same;</li>
                    <li>The estimated plan repayments should be less than, or equal to, the expected monthly energy savings which means that the energy bills overall should not increase, <strong>however the energy savings will depend on the energy usage within the home and this is only an estimate. The actual energy bill will depend on the energy tariff, usage, the weather temperature etc.</strong></li>
                    <li>As the repayments for this plan are made through the electricity bill, the bill payer will need to go through a credit application check to ensure that they are able to cover the repayments;</li>
                    <li>An independent assessor will contact them, as part of the post installation quality checks under the Green Deal Plan, to solicit a customer’s feedback regarding the installed measure.</li>
                </ol>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitThree" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptThree == true" class="form-group" id="questionThree" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input type="text" class="form-control" v-model="answerThree" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousThree"  href="#">Previous</a></li>
                        <li v-if="answerThree.toLowerCase() == 'yes' " id="buttonNext" style="display: inline;"><a href="#" v-on:click="nextThree">Next</a></li>
                    </ul>
                </nav>
            </div>
            <div v-if="four == true">
                <h2>4 simple steps to getting a Green Deal Plan</h2>
                <ol>
                    <li><strong>Assessment</strong> – A customer will need to get a Green Deal Assessment carried out on their home, by a Green Deal Assessor. The Assessor will produce a Green Deal Advice Report recommending energy saving improvements and indicating whether they are expected to pay for themselves through reduced energy bills. The customer simply makes an appointment for a time that suits them best and an Assessor will visit their property to carry out an energy-efficient assessment.</li>
                    <li><strong>The Plan</strong> – A Green Deal Provider will provide a quote for a Green Deal Plan, setting out the measures the customer has decided to have installed, the repayments and the interest rates that will be charged. If the customer is happy with the quote then the Green Deal Provider will help them complete the credit application for the Green Deal Plan.</li>
                    <li><strong>Installation</strong> – Once the credit application has been accepted, the customer will receive a Green Deal Plan Document pack which the customer will need to review, sign and return to the Green Deal Provider for the application to be finalised. Once finalised, the Green Deal Provider will arrange for one of the accredited Green Deal Installers to fit the energy efficient measures.</li>
                    <li><strong>Repayment</strong> – The Green Deal Plan repayments will automatically be added to the customer’s electricity bill allowing them to enjoy the benefits of the energy efficient improvements.</li>
                </ol>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitFour" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptFour == true" class="form-group" id="questionFour" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input type="text" class="form-control" v-model="answerFour" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousFour"  href="#">Previous</a></li>
                        <li v-if="answerFour.toLowerCase() == 'yes'" id="buttonNext" style="display: inline;"><a href="#" v-on:click="nextFour">Next</a></li>
                    </ul>
                </nav>
            </div>
            <div v-if="five == true">
                <h2>Key Eligibility Criteria</h2>
                <p><strong>Eligible Measures under Green Deal Plans</strong></p>
                <ul>
                    <li>New or replacement boiler (condensing, biomass)</li>
                    <li>Solid Wall (internal & external)/Loft/Floor Insulation</li>
                    <li>Cavity Wall Insulation</li>
                    <li>Heating/Hot Water/Lighting Controls</li>
                    <li>Heating System Insulation</li>
                    <li>Ground and air source heat pumps</li>
                    <li>Fan assisted storage heaters</li>
                    <li>Flue gas recover devices</li>
                    <li>Innovative hot water systems</li>
                    <li>Draught proofing</li>
                </ul>
                <p><strong>Eligibility Requirements for Green Deal Plans</strong></p>
                <ul>
                    <li>Minimum age of 18 years old;</li>
                    <li>Property must be a fixed address in England, Wales or Scotland;</li>
                    <li>No County Court Judgments in the previous 2 years or bankruptcy in the previous 5 years;</li>
                    <li>Consent to having a credit check performed;</li>
                    <li>If a landlord, must receive consent from the tenant;</li>
                    <li>If a tenant, must receive permission from the landlord;</li>
                    <li>Should have a good credit history i.e. equivalent to a credit score of 694 with Experian.</li>
                </ul>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitFive" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptFive == true" class="form-group" id="questionFive" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input type="text" class="form-control" v-model="answerFive" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousFive"  href="#">Previous</a></li>
                        <li v-if="answerFive.toLowerCase() == 'yes' " id="buttonNext" style="display: inline;"><a href="#" v-on:click="nextFive">Next</a></li>
                    </ul>
                </nav>
            </div>
            <div v-if="six == true">
                <h2>Role of the Green Deal Assessor</h2>
                <p>The role of a Green Deal Assessor is to carry out a Green Deal “qualifying assessment” and produce a Green Deal Advice Report which is a requirement for any person who wishes to take out a Green Deal Plan in order to pay for the installation of energy efficient measures at their property. The role of a Green Deal Assessor is not to “sell” measures but to carry out an assessment and develop Green Deal quotes.</p>


                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitSix" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptSix == true" class="form-group" id="questionSix" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input type="text" class="form-control" v-model="answerSix" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousSix"  href="#">Previous</a></li>
                        <li v-if="answerSix.toLowerCase() == 'yes' " id="buttonNext" style="display: inline;"><a href="#" v-on:click="nextSix">Next</a></li>
                    </ul>
                </nav>
            </div>
            <div v-if="seven == true">
                <h2>Tied Assessors and Independent Assessors</h2>
                <p>A Tied Assessor works for a single Green Deal Provider and is likely to be employed whereas an Independent Assessor operates their own separate and independent business as a sole trader/partnership or limited company and has no direct connection with one individual organisation. </p>
                <p>It should be made clear to the customer whether or not the Assessor is acting independently of, or tied to, any organisation to obtain a quote for a Green Deal Plan. The customer for example is under no obligation to apply for a quote from a Green Deal Provider who has used a Tied Assessor.</p>
                <p>Tied Assessors should remain impartial when carrying out Green Deal assessments, in accordance with the Green Deal Assessor Services Specification.</p>
                <p>The Green Deal Assessment shall provide impartial advice to customers as prescribed by law in the Energy Act 2011, the Framework Regulations and the Green Deal Code of Practice.</p>
                <p>The customer who has commissioned the assessment must receive the following information in writing prior to a Green Deal Assessment visit to the property:</p>
                <p></p>
                <ol>
                    <li>That the output of the assessment will be a Green Deal Advice Report which is portable, ie it may be taken to any Green Deal Provider to request a quote for the installation of measures;</li>
                    <li>Which organisation the Green Deal Assessor, who carries out the assessment, would be working for, and whether they are operating independently or tied to any Green Deal Provider for the purposes of the assessment;</li>
                    <li>Any charges and terms and conditions associated with the provision of the service and how they should be paid/met;</li>
                    <li>Who will have access to the information collected as part of the Green Deal Assessment.</li>
                </ol>





                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitSeven" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptSeven == true" class="form-group" id="questionSeven" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input type="text" class="form-control" v-model="answerSeven" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousSeven"  href="#">Previous</a></li>
                        <li v-if="answerSeven.toLowerCase() == 'yes' " id="buttonNext" style="display: inline;"><a href="#" v-on:click="nextSeven">Next</a></li>
                    </ul>
                </nav>
            </div>
            <div v-if="eight == true">
                <h2>Requirements of a Green Deal Assessor</h2>
                <p>To act honestly and fairly; not use high pressure sales techniques and notify the customer they have the right to take their assessment to another Green Deal Provider?</p>
                <p>To ensure if it is an Assessor Organisation that the GDAO is certified by a Green Deal Certification Body and is listed on the Green Deal Participant Register. </p>
                <p>If it is an individual Green Deal Assessor then they must be certified against and continue to comply with the requirements of the Assessor Services Specification. The individual must meet the requirements set out in the National Occupational Standards for Green Deal Advisors and be contracted by an authorised GDAO or become certified and authorised Green Deal Assessor as a sole Trader. </p>
                <p>Comply with any requirements specified by their Certification Body regarding compliance with the Green Deal Code of Practice.</p>
                <p>Ensure that it clearly distinguishes in its contact with customers between (i) the impartial assessment of a property in question and recommendations produced via that assessment; and (ii) any additional marketing and sales activities, whether relating to the Green Deal or other products or services.</p>
                <p>Only use approved green deal software to accurately and consistently produce results with occupancy assessment methodology for domestic properties and ensure it complies with the Green Deal Code of Practice.</p>
                <p>Allow regular auditing and random supervision to spot check compliance and monitor performance. If non-compliance is discovered and cannot be resolved then disciplinary action may be taken and the Green Deal Assessor reported to the relevant Green Deal Certification Body.</p>
                <p>Under no circumstances discuss finance with a customer unless it has the appropriate FCA authorisation to do this. Carrying out this activity without being authorised would constitute a substantial breach.</p>
                <p>Where a qualifying assessment is found to be incorrectly completed, or a Green Deal Assessor fails to comply with relevant requirements of the Code of Practice, must offer the customer the option of a new assessment at no additional cost, or a refund of the cost of the original assessment and any associated costs incurred by the customer as a consequence of the incorrect assessment.</p>


                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitEight" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptEight == true" class="form-group" id="questionEight" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input type="text" class="form-control" v-model="answerEight" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousEight"  href="#">Previous</a></li>
                        <li v-if="answerEight.toLowerCase() == 'yes' " id="buttonEight" style="display: inline;"><a href="#" v-on:click="nextEight">Next</a></li>
                    </ul>
                </nav>
            </div>
            <div v-if="nine == true">
                <h2>Summary</h2>
                <p>I understand and accept that I have completed this training course and that I understand all of its content and then I must comply with the Green Deal Code of Practice when carrying out Green Deal assessments and act in accordance with applicable consumer protection legislation and the Frameworks Regulations and produce accurate Green Deal Advice Reports.</p>
                <p><strong>If you have any other questions or need any other support. Please call {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></strong></p>
                <p><strong>In any case, we shall be in touch to establish any other support.</strong></p>

                <p>If your details below are correct, please click on the green submit bar below to submit your details.</p>

                <div class="col-xs-6">
                    <div class="form-group col-xs-12">
                        <label for="name">Name</label>
                        <input type="text" v-model="name" class="form-control" id="name" name="name" placeholder="Name" value="">
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
                        <textarea type="text" class="form-control" v-model="address" name="address" id="address" placeholder="Your Address"></textarea>
                    </div>
                </div>
                <input type="submit" v-on:click="submitForm" class="btn btn-success col-xs-12" name="submit">
            </div>
            <div v-if="last == true">
                <div class="alert alert-success">
                    Thank you, Your details have been sent!
                </div>
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


            nine: false,
            acceptNine: false,
            answerNine: '',

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


        submitNine: function(){
            this.acceptNine = true;
        },
        nextNine: function(){
            this.acceptNine = false;
            this.answerNine = '';
            this.nine = false;
        },
        previousNine: function(){
            this.nine = false;
            this.eight = true;
        },


        submitForm: function() {

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

            axios.post('/GDACourse', formData, config);

            this.nine = false;
            this.last = true;
        },


    },

    mounted() {
        console.log('Component mounted.')
    }
}
</script>
