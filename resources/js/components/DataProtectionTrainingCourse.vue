<template>
    <div class="col-xs-12 col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Data Protection Training Course {{ name }}</h3>
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
                    <h2>Background</h2>
                    <p>The Data Protection Act controls how your personal information is used by organisations, businesses or the government. Everyone responsible for using data has to follow strict rules called “data protection principles” and they must make sure the information is:</p>
                    <ul>
                        <li>Used fairly and lawfully</li>
                        <li>Used for limited, specifically stated purposes</li>
                        <li>Used in a way that is adequate, relevant and not excessive</li>
                        <li>Accurate</li>
                        <li>Kept for no longer than is absolutely necessary</li>
                        <li>Handled according to people’s data protection rights</li>
                        <li>Kept safe and secure</li>
                        <li>Not transferred outside the European Economic Area (EEA) without adequate protection</li>
                    </ul>
                    <p>There is a stronger legal protection for more sensitive information, such as:</p>
                    <ul>
                        <li>Ethnic backgrounds</li>
                        <li>Political Opinions</li>
                        <li>Religious Beliefs</li>
                        <li>Health</li>
                        <li>Sexual Health</li>
                        <li>Criminal Records</li>
                        <li>Trade Union Memberships</li>
                    </ul>
                    <p>The Data Protection Act was first introduced in 1984 and was later revised in 1998, hence the (1998) that often appears in brackets.</p>
                    <p>The Data Protection Act 1984 introduced basic rules of registration for users of data and rights of access to that data for individuals to which it related. These rules and rights were revised and superseded by the Data Protection Act 1998 which came into force on the 1st March 2000. The new Data Protection Act established eight principles as a code of good information handling practice, which registered data users were required to comply with.</p>



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
                            <li v-if="answerTwo == 'yes' "  style="display: inline;"><button v-on:click="nextTwo" class="btn btn-success col-xs-3" type="button">Next</button></li>
                        </ul>
                    </nav>
                </div>
                <div v-if="three == true">
                    <h2>The eight data protection principles</h2>
                    <ol>
                        <li>Personal Data shall be process fairly and lawfully.</li>
                        <li>Personal Data shall be obtained only for one or more specified and lawful purposes, and shall not be further processed in any manner incompatible with that purpose or those purposes.</li>
                        <li>Personal Data shall be adequate, relevant and not excessive in relation to the purpose or purposes for which they are processed.</li>
                        <li>Personal Data shall be accurate and, where necessary, kept up to date.</li>
                        <li>Personal Data processed for any purpose or purposes shall not be kept for longer than is necessary for that purpose or those purposes.</li>
                        <li>Personal Data shall be processed in accordance with the rights of data subjects under this Act.</li>
                        <li>Appropriate technical and organisational measures shall be taken against unauthorised or unlawful processing of personal data and against accidental loss or destruction of, or damage to, personal data.</li>
                        <li>Personal Data shall not be transferred to a country or territory outside the European Economic Area unless that country or territory ensures an adequate level of protection for the rights and freedoms of data subjects in relation to the processing of personal data.</li>
                    </ol>
                    <p>The name of the office was changed from the Data Protection Registrar to the Data Protection Commissioner. Notification replaced the registration scheme established by the 1984 Act.</p>
                    <p>In January 2001 the office was given the added responsibility of the Freedom of Information Act and changed its name to the Information Commissioner’s Office (ICO).</p>
                    <p>ICO is now the UK’s independent authority set up to uphold information rights in the public interest, promoting openness by public bodies and data privacy for individuals. If you handle “personal data” about individuals you have a number of legal obligations under the Data Protection Act and one of these obligations is to register the firm with the ICO. An application form is completed on line and the firm is required to provide information about its activities and the purpose of its data processing and it is required to pay a small nominal fee each year for small organisations.</p>
                    <p>Personal data means data which relates to a living individual who can be identified by that data.</p>
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
                            <li style="display: inline;"><a v-on:click="previousThree" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerThree == 'yes' "  style="display: inline;"><button type="button" class="btn btn-success col-xs-3"v-on:click="nextThree">Next</button></li>
                        </ul>
                    </nav>
                </div>
                <div v-if="four == true">
                    <h2>Organisations can ensure Data Protection and Information Security policies are adhered to by putting in place the following:</h2>
                    <p>Having a named member of staff responsible for Data Protection;</p>
                    <p>
                        Training staff;<br />
                        Secure disposal of information, particularly paper based;<br />
                        Clear Desk Policy – preventing loss of data by shredding and not displaying personal information;<br />
                        Report Breaches – to your Line Manager;<br />
                        Publish Privacy Notice on website;<br />
                        Audits;<br />
                        Password and Access Control to computers;<br />
                        Producing and regularly reviewing Data Protection Procedure and Data Retention Policy
                    </p>
                    <p>The General Data Protection Regulation (GDPR) (Regulation (EU) 2016/679) is a regulation by which the European Parliament, the Council of the European Union and the European Commission intends to strengthen and unify data protection for all individuals within the European Union (EU). These are new data protection rules that for example address the export of personal data outside the EU. The GDPR aims primarily to give control back to citizens and residents over their personal data and becomes enforceable from 25th May 2018. The Data Protection Act 1998 will be superseded by this new legislation. It introduces tougher fines for non-compliance and breaches and gives people more say over what companies can do with their data. It also makes data protection rules more or less identical throughout the EU.</p>
                    <p>Bear in mind many companies like Facebook and Google swap access to people’s data for use of their services. The current legislation was enacted before the internet and cloud technology created new ways of exploiting data, and the GDPR seeks to address that.</p>
                    <p>The GDPR will apply in all EU member states from the 25th May 2018 and because GDPR is a regulation, not a directive, the UK does not need to draw up new legislation – instead, it will apply automatically. While it came into force on 24th May 2016, after all parts of the EU agreed to the final text, businesses and organisations have until 25th May 2018 until the law actually applies to them.</p>
                    <p>The GDPR applies to “Controllers” and “Processors” of data.</p>
                    <p>A Data Controller states how and why personal data is processed.</p>
                    <p>A Data Processor is the part doing the actual processing of the data.</p>
                    <p>It is like a controller would be any organisation, from a profit-seeking company to a charity or government. A processor could be an IT firm doing the actual data processing.</p>
                    <p>Even if the controllers and processors are based outside the EU, the GDPR will still apply to them so long as they’re dealing with data belonging to EU residents.</p>
                    <p>Consent must be an active, affirmative action by the data subject, rather than the passive acceptance under some current models that allow for pre-ticked boxes or opt-outs.</p>
                    <p>Controllers must keep a record of how and when an individual gave consent, and that individual may withdraw their consent whenever they want. If an organisation’s current model for obtaining consent doesn’t meet these new rules, then they will have to bring these up to scratch or stop collecting data under that model when the GDPR applies in 2018.</p>
                    <p>The EU has substantially expanded the definition of personal data under the GDPR. To reflect the types of data organisations now collect about people, online identifiers such as IP addresses now qualify as personal data. Other data, like economic, cultural or mental health information, are also considered personally identifiable information.</p>
                    <p>Anything that counted as personal data under the Data Protection Act also qualifies as personal data under the GDPR.</p>
                    <p>People can reasonably access the data that are stored on them and controllers must generally respond within one month, and in any event within 40 calendar days of receiving it, and controllers and processors must be transparent about how they collect data, what they do with it, and how they process it, and must be clear (using plain language) in explaining these things to people.</p>
                    <p>People have a right to access any information a company holds on them, and the right to know why that data is being processed, how long it’s stored for, and who gets to see it. Where possible, data controllers should provide secure, direct access for people to review what information a controller stores about them. Individuals also have the right to demand that their data is deleted if it’s no longer necessary to the purpose for which it was collected.</p>
                    <p>Having the right to get a copy of the information that is held about you is known as a subject access request. This right of subject access means that you can make a request to any organisation processing your personal data and a small charge can be made.</p>
                    <p>It is an organisation’s responsibility to inform the data protection authority of any data breach that risks people’s rights and freedoms within 72 hours of the organisation becoming aware of it. The UK Authority is the Information Commissioner’s Office.</p>
                    <p>The UK government put forward a new Data Protection Bill in August 2017 that largely mirrors GDPR’s own requirements. Once passed, this legislation will seek to answer the question of how the UK will protect data once GDPR no longer applies after Brexit – by basically copying the European legislation into British law. Our country should be “whitelisted” as a safe place to transfer EU data. This is essential for businesses that transfer data between the UK and EU.</p>
                    <p>The European Commission has decided that certain countries have an adequate level of protection for personal data. Currently, the following countries are considered as having adequate protection.</p>
                    <p>
                        Andorra<br />
                        Argentina<br />
                        Canada<br />
                        Faroe Islands<br />
                        Guernsey<br />
                        Isle of Man<br />
                        Israel<br />
                        Jersey<br />
                        New Zealand<br />
                        Switzerland<br />
                        Uruguay<br />
                        USA (under Safe Harbor)
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
                            <li style="display: inline;"><a v-on:click="previousFour" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerFour == 'yes'"  style="display: inline;"><button type="button" class="btn btn-success col-xs-3" v-on:click="nextFour">Next</button></li>
                        </ul>
                    </nav>
                </div>
                <div v-if="five == true">

                    <h2>Things you can do to further improve your knowledge and understanding:</h2>
                    <p>Request and read and understand your firm’s Data Protection Policy.</p>
                    <p>Carry out the Data Protection Quiz.</p>
                    <p>Browse the internet and learn more about Data Protection.</p>





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
                            <li style="display: inline;"><a v-on:click="previousFive" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerFive == 'yes' "  style="display: inline;"><button type="button" class="btn btn-success col-xs-3" v-on:click="nextFive">Next</button></li>
                        </ul>
                    </nav>
                </div>


                <div v-if="six == true">
                    <div>
                        <h2>Summary</h2>
                        <p>Many thanks for taking the time to read this training course, which we hope has helped to educate you on Data Protection.</p>
                        <p>If you have any other questions or need any other support. Please call FCA Compliance Services on 07887 552 442 or email <a href="mailto:fcacomplianceservices@gmail.com">fcacomplianceservices@gmail.com</a>.</p>
                        <p>In any case, we shall be in touch to establish any other support.</p>
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


                six: false,
                acceptSix: false,
                answerSix: '',
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
            submitTwentythree: function(){
                this.acceptTwentythree = true;
            },
            nextTwentythree: function(){
                this.acceptTwentythree = false;
                this.answerTwentythree = '';
                this.twentythree = false;
                this.twentyfour = true;
            },
            previousTwentythree: function(){
                this.twentythree = false;
                this.twentytwo = true;
            },
            submitForm: function() {
                this.six = false;
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
                axios.post('/DataProtectionTrainingCourse', formData, config);
            },
        },
        mounted() {
        }
    }
</script>
