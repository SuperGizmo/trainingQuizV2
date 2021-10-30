<template>
<div class="col-xs-12 col-sm-9">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Anti-Bribery Course {{ name }}</h3>
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
                <p>Training is necessary for effective anti-corruption compliance. This learning programme looks at the UK Bribery Act, which has far-reaching powers that apply to all organisations. The penalties for committing a bribery offence can be very severe, so it’s essential that you understand how to minimise the risks.</p>
                <p>All firms are at risk under the Bribery Act as offences don’t only arise when giant corporations compete to win overseas government contracts. Your firm has policies covering such mundane matters as business gifts, working lunches and corporate hospitality and you need to understand their relevance and importance.</p>
                <p>It is important that The Financial Conduct Authority places a responsibility on all regulated firms to make sure that the firm cannot be used to further financial crime including bribery that is also subject to the Bribery Act 2010.</p>
                <p>Your firm is committed to doing business ethically, with the highest standards of integrity, and expects its employees, self-employed ‘advisers’ or ‘consultants’ and business partners to work to these standards.</p>
                <p>The good news is that many organisations will face little or no risk of bribery, especially if their business is undertaken primarily in the UK. A company that operates overseas tends to have a higher risk.</p>
                <p>The Bribery Act is not concerned with fraud, theft, books and record offences, Companies Act offences, money laundering offences or competition law.</p>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#acceptPage" v-on:click="submitTwo" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptTwo == true" class="form-group" id="questionTwo" style=" margin-top: 95px;">
                    <label id="acceptPage" >Short question</label>
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
                <h2>Anti-Bribery Principles:</h2>
                <ol>
                    <li><strong>Proportionality</strong> – the action that you take should be proportionate to the size of your business and the risks that you face.</li>
                    <li><strong>Top Level Commitment</strong> – a top down approach and senior management involvement is a must.</li>
                    <li><strong>Risk Assessment</strong> – analyse the risks involved in your industry and try to mitigate them.</li>
                    <li><strong>Due Diligence</strong> – perform background and credit checks and know your customer.</li>
                    <li><strong>Communication</strong> – training, awareness and policy dissemination ensures staff involvement.</li>
                    <li><strong>Monitoring and Review</strong> – perform frequent gap analysis and process audits to ensure they are working, fit for purpose and effective.</li>
                </ol>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#acceptPage" v-on:click="submitThree" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptThree == true" class="form-group" id="questionThree" style=" margin-top: 95px;">
                    <label id="acceptPage" >Short question</label>
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
                <h2>Bribery and Corruption – serious economic crimes</h2>
                <p>Corruption is one of the biggest global issues of our time. It’s estimated to increase  the cost of doing business worldwide by around 10%. But it’s not just business that bears the cost. Every bribe paid serves to perpetuate a web of corruption which keeps millions of the world’s poorest and most vulnerable people trapped in poverty.</p>
                <p>Governments are becoming increasingly aware of this fact and are taking tough action. You only need to consider the record $490 million fine handed to GlaxoSmithKline to see how seriously this issue is being taken.</p>
                <p>Unfortunately, it seems that in some countries nothing gets done without backhanders being paid in one form or another.</p>


                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#acceptPage" v-on:click="submitFour" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptFour == true" class="form-group" id="questionFour" style=" margin-top: 95px;">
                    <label id="acceptPage" >Short question</label>
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
                <h2>Bribery</h2>
                <p>The Bribery Act 2010, which came into force on 1st July 2011, sets out the circumstances in which individuals may commit an offence of bribery. Generally, these are:</p>
                <ul>
                    <li>Offering a bribe</li>
                    <li>Promising to pay a bribe</li>
                    <li>Giving a bribe</li>
                    <li>Asking for a bribe</li>
                    <li>Agreeing to receive a bribe</li>
                    <li>Receiving a bribe</li>
                </ul>
                <p>In these cases a bribe is a payment (or other advantage) given to a person with the intention that they will act in an improper way. For example, to encourage someone to award a contract to one firm over another or to overlook matters such as poor credit history when giving advice.</p>
                <p>It is also an offence to give, offer, promise, ask for, agree to receive or receive a payment as a reward for improper acts that have already happened. It doesn’t even matter if the person who carried out the improper act understood that it was improper at the time.</p>
                <p>Finally, it would also be an offence to act in an improper way if you thought you might receive anything, even if it hasn’t been offered, and you haven’t asked.</p>
                <p style="font-weight: bold;">If you are offered any kind of gift or payment you must report this to Principal of your Firm. Any gift, payment or hospitality valued at over £50 should be recorded in your Gift & Hospitality Register (£50 has been discussed and agreed by the firm and its advisers as being a reasonable maximum value to accept without being constituted as an influencing factor. If in individual circumstances you consider that a gift of lower value might not be proper then you should report this and seek further advice from your compliance officer).</p>
                <p>Often such gifts may be intended innocently, for example, relationship building, corporate away days, or a thank you from a third party where you were genuinely doing your job. It is essential, however innocent you think they are, to follow this policy to make it clear that you accepted the gift or payment in good faith.</p>
                <p>Please remember though that genuine hospitality or similar business expenditure that is reasonable is completely acceptable. It is only where the hospitality was really a cover for bribing someone, would the authorities look at such things as the level of hospitality offered, the way in which is was provided and the level of influence the person receiving it had on the business decision in question. But, as a general proposition, hospitality or promotional expenditure which is proportionate and reasonable given the sort of business you do is very unlikely to engage the Act. So, for example, you can continue to provide tickets to concerts or sporting events, take clients to dinner, offer gifts to clients as a reflection of your good relations, or pay for reasonable travel expenses in order to demonstrate your goods or services to clients if that is reasonable and proportionate for your business.</p>



                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#acceptPage" v-on:click="submitFive" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptFive == true" class="form-group" id="questionFive" style=" margin-top: 95px;">
                    <label id="acceptPage" >Short question</label>
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
                <h2>Reporting Bribery</h2>
                <p>If you are offered a gift, hospitality, or any other kind of advantage that you think may be intended to influence you, or you suspect that another person may be engaged in any kind of bribery, you must report this immediately.</p>
                <p>To report a suspicion of bribery please put together all the information that you have and send it to the person responsible within your firm.</p>
                <p>If you are concerned about any repercussions of making a report then you should refer to the Whistleblowing Policy of the FCA for information on alternative methods of making a report.</p>
                <p>All notifications made will be handled with strict confidentiality. However, please note that there may be circumstances in which your firm are required to reveal an individual’s identity, for example where they are compelled to do so by law and therefore anonymity cannot be guaranteed.</p>
                <p>All notifications relating to other employees within the Firm will be handled in line with the Public Interest Disclosure Act 1998.</p>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#acceptPage" v-on:click="submitSix" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptSix == true" class="form-group" id="questionSix" style=" margin-top: 95px;">
                    <label id="acceptPage" >Short question</label>
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
                <h2>Subsequent Investigation</h2>
                <p>Your firm is committed to supporting regulators and law enforcement officers in the prevention of bribery and other financial crime.</p>
                <p>All employees are expected to cooperate fully with any investigations; however, employees must also recognise that laws and procedures may apply to the disclosure of information and should therefore contact your compliance officer before disclosing information about customers or employees when contacted directly by law enforcement officers.</p>
                <p>Failure to notify an appropriate person about criminal actions of which you are aware, in breach of this policy, may be considered to be a contractual breach leading to disciplinary actions.</p>
                <p>The Government has also produced detailed guidance about the Bribery Act and the procedures that organisations can put in place to prevent bribery, as well as a set of illustrative case studies which you may find of further assistance available at: <a href="https://www.gov.uk/government/publications/bribery-act-2010-guidance">https://www.gov.uk/government/publications/bribery-act-2010-guidance</a></p>


                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }}</div>
                <div class="form-group">
                    <a href="#acceptPage" v-on:click="submitSeven" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptSeven == true" class="form-group" id="questionSeven" style=" margin-top: 95px;">
                    <label id="acceptPage" >Short question</label>
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
                <h2>Summary</h2>
                <p><strong>If you have any other questions or need any other support. Please call {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></strong></p>
                <p><strong>In any case, we shall be in touch to establish any other support.</strong></p>
                <p>If your details below are correct, please click on the submit bar below to send your details.</p>

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

            axios.post('/anti_bribery_course', formData, config);

            this.eight = false;
            this.last = true;
        },


    },

    mounted() {
        console.log('Component mounted.')
    }
}
</script>
