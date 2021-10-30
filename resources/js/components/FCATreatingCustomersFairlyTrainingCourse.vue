<template>
<div class="col-xs-12 col-sm-9">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">FCA Treating Customers Fairly Training Course {{ name }}</h3>
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
                <p>Welcome and thank you for taking part in this on-line e-learning training presentation.</p>
                <h2>Treating Customers Fairly otherwise known as TCF</h2>
                <p>We are committed to meeting customer expectations of performance, quality, price and delivery in all that we do. Treating Customers Fairly must now remain central to your conduct, and you must put the well-being of your customers at the heart of how you deal with them.</p>
                <p>TCF has six key customer outcomes that you need to demonstrate that you have delivered and we require you to achieve:</p>
                <p style="color: red;"><strong>Outcome 1</strong> – CULTURE<br />
                Consumers must be confident that they are dealing with a firm or individual where the fair treatment of customers is central to the corporate culture.</p>
                <p style="color: red;"><strong>Outcome 2</strong> – Outcome 2 – MARKETING<br />
                Products and services marketed and sold must be designed to meet the needs of identified consumer groups and targeted accordingly.</p>
                <p style="color: red;"><strong>Outcome 3</strong> – INFORMATION<br />
                Consumers must be provided with clear information and kept appropriately informed, before, during and after the point of sale.</p>
                <p style="color: red;"><strong>Outcome 4</strong> – ADVICE<br />
                Where consumers receive advice, the advice must be suitable and takes account of their circumstances.</p>
                <p style="color: red;"><strong>Outcome 5</strong> – PRODUCT<br />
                Consumers must be provided with products that perform as they have been led to expect, and the associated service is of an acceptable standard.</p>
                <p style="color: red;"><strong>Outcome 6</strong> – BARRIERS<br />
                Consumers must not face unreasonable post-sale barriers to change products, switch providers, submit claims or make a complaint.</p>
                <p>These six outcomes serve as the basis for treating customers fairly and every firm aims to fully understand its customer’s requirements and provide products and services to meet those needs.</p>
                <p>Whilst acting on behalf of your firm it is important that you attempt to answer customer questions and enquiries within the scope of your responsibilities. It is important that you conduct business with due skill, care and diligence and ensure you give appropriate advice to the customer.</p>


                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please call {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
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

                <h2>Vulnerable Customers</h2>
                <p>Vulnerable Customers goes hand in hand with Treating Customers Fairly.</p>
                <p>Firstly, let’s identify what we mean by a Vulnerable Customer?</p>
                <p>These may be people affected by Dementia. In the UK for example 800,000 people live with dementia and this is expected to double in the next 40 years.</p>
                <p>It could perhaps be somebody who has suffered a bereavement who isn’t really in the right state of mind, particularly when it comes down to making complex financial decisions.</p>
                <p>It could be somebody perhaps preparing parents to go into a care home and having to pay the fees associated with that.</p>
                <p>It really comes down to you leading the way in which vulnerable people are dealt with.</p>
                <p>Other people may be affected by the following:</p>
                <ul style="color: red;">
                    <li>Mental Health Issues</li>
                    <li>Serious or Chronic Illness</li>
                    <li>Experiencing Serious Stressful Events</li>
                    <li>Non-English Speakers</li>
                    <li>Deaf/Blind</li>
                    <li>Recently Bereaved</li>
                    <li>Age awareness</li>
                    <li>Bi-Polar</li>
                    <li>Under the influence of drink or drugs</li>
                    <li>Post-Traumatic Stress Disorder</li>
                </ul>
                <p style="font-weight: bold;">Characteristics to look out for may include the following:</p>
                <ul style="color: red;">
                    <li>The customer may repeat themselves</li>
                    <li>Say “YES” before you have explained everything</li>
                    <li>Ask unrelated questions</li>
                    <li>Seem distracted or wander off the topic</li>
                    <li>They tell you they have a history of mental and health issues</li>
                    <li>May seem agitated or confused</li>
                    <li>Appear not to understand everything even when you have explained something a couple of times</li>
                </ul>
                <h2>What to do under any of these circumstances?</h2>
                <p>There are actions that you should consider, and although not an exhaustive list, sometimes common sense needs to be applied. For example:</p>
                <ul style="color: red;">
                    <li>Ask the customer to invite a friend or family member to be present</li>
                    <li>Re-appoint the phone call when they have a friend or family member to sit with them</li>
                    <li>Document the response of the customer and why you consider they may be vulnerable</li>
                    <li>Ask the customer to repeat back to you their understanding of the sale and product</li>
                    <li>Don’t rush, speak clearly always remain professional</li>
                    <li>Please advise your line manager</li>
                </ul>
                <p>Remember it could be your relative or a close friend and so treat the customer with respect and don’t always just go for the sale.</p>
                <p>By the way, you should not assume that a person who is vulnerable or who has a mental capacity issue cannot make an informed decision as this could be seen as discrimination.</p>
                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please call {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
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

                    <h2>Your Role and Responsibilities:</h2>
                    <ul>
                        <li>Provide clear, concise and truthful information</li>
                        <li>Identify you and your firm at the outset and make clear the purpose of the communication</li>
                        <li>Clearly state the service you offer</li>
                        <li>Complete relevant call and information in the correct manner and order</li>
                        <li>Take responsibility for your own knowledge</li>
                        <li>Follow all relevant processes and policies</li>
                        <li>Be aware that you are responsible for what <strong style="text-decoration: underline">you</strong> say and do</li>
                        <li>Take appropriate action if you consider the customer to be “vulnerable”</li>
                        <li style="text-decoration: underline">Before ending the call ensure the customer fully understands everything and the different options available to them</li>
                    </ul>
                    <p>As part of your firm’s obligations monitoring calls will be made to your customers in order to check that the sales process is being carried out correctly.</p>
                    <p>Remember stress can affect state of mind and the ability to manage effectively and vulnerability can come in a range of guises, can be temporary, sporadic or permanent in nature and therefore your response is crucial to the customer’s experience.</p>
                    <p>You do not need to be an expert, but you do need to know how to react and respond to these situations.</p>
                    <h2>Don’t Judge</h2>
                    <p>It’s also important not to make judgements about how a person is thinking and behaving. You may feel that certain aspects of their thinking and behaviour are making their problems worse. For example, they may be drinking too much alcohol.</p>
                    <p>However, pointing this out will not be particularly helpful to them. Reassurance, respect and support can help someone during these difficult periods.</p>
                    <h2>Logging details of vulnerable customers</h2>
                    <p>Where a customer has been identified as vulnerable then these calls should be documented and passed on to your line manager.</p>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please call {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
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
                <h2>Summary</h2>
                <p>Many thanks for taking the time to read this training course, which we hope has helped to educate you on Treating Customers Fairly and Vulnerable Customers.</p>
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
                        <textarea type="text" class="form-control" v-model="address" name="address" id="address" style="height: 114px" placeholder="Your Address"></textarea>
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



            axios.post('/FCATreatingCustomersFairlyTrainingCourse', formData, config);

            this.five = false;
            this.last = true;
        },


    },

    mounted() {
        console.log('Component mounted.')
    }
}
</script>
