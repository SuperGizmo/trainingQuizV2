<template>
    <div class="col-xs-12 col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Level 2 Health & Safety in the Workplace Training {{ name }}</h3>
            </div>
            <div class="panel-body">
                <div v-if="one == false">
                    <p>Please fill in the form below and then click submit to start the course.</p>
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
                            <label for="position">Position in Company</label>
                            <input type="text" class="form-control" v-model="position" name="position"
                                   placeholder="Position" value="">
                        </div>
                        <div class="form-group col-xs-12">
                            <label for="address">Address</label>
                            <textarea type="text" class="form-control" v-model="address" name="address"
                                      placeholder="Your Address"></textarea>
                        </div>
                    </div>
                    <input type="submit" v-on:click="submitOne" class="btn btn-success col-xs-12" name="submit">
                </div>
                <div v-if="two == true">
                    <h2>Introduction</h2>
                    <p>Welcome and thank you for taking part in this training presentation.</p>
                    <h2>Background</h2>
                    <p>This training course is suitable for workers of all abilities and is intended as a “foundation”
                        level course, designed to maintain learners’ health and safety knowledge. By law, a basic
                        knowledge of health and safety is essential for all employees in all industries to ensure that
                        workplace risks are recognised and managed effectively.</p>
                    <p>Under Section 2 of the Health and Safety at Work Act 1974, employers have a duty to provide
                        training for their employees to ensure, so far as is reasonably practicable, their health and
                        safety at work.</p>
                    <p>The Level 2 health and safety in the workplace course is designed to provide employees with the
                        requisite knowledge, or refresher training, needed in order to provide a safe working
                        environment within your organisation. This includes an understanding of legal responsibilities,
                        accident prevention and an overview of some of the key areas of workplace health and safety.</p>
                    <p>This course aims to provide learners with a knowledge of basic health and safety procedures,
                        understand the responsibilities of employers and employees under health and safety legislation,
                        understand the importance of undertaking a risk assessment to prevent and control hazards, know
                        how to follow the correct safety procedures in the workplace and understand the hazards and
                        ill-health effects associated with specific work activities and processes.</p>
                    <h2>Introduction to Health and Safety Law</h2>
                    <p>According to statistics from the Health and Safety Executive, in 2015/16, an estimated 621,000
                        injuries occurred at work and around 1.3 million are suffering from a work-related illness (new
                        or long standing).</p>
                    <p>Over half of the fatal injuries to workers were of three kinds:</p>
                    <ol>
                        <li>Fall from height</li>
                        <li>Contact with moving machinery and</li>
                        <li>Being struck by a vehicle</li>
                    </ol>
                    <p>Slips, trips and falls made up more than half of all reported major injuries and contributed to
                        an estimated loss of three million working days.</p>
                    <p>These statistics show that good health and safety practice in the workplace is imperative. This
                        course aims to provide you with an overview of the essential health and safety topics so that
                        you can keep your workplace safe and protect yourself from harm.</p>


                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click
                        the "Accept Page" button and then fill out the short question. If you would need extra
                        information please contact {{ contactName }} on {{ companyNumber }} or email <a
                            v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <button href="#" v-on:click="submitTwo" class="btn btn-success col-xs-12">Accept Page</button>
                    </div>
                    <div v-if="acceptTwo == true" class="form-group" id="questionTwo" style=" margin-top: 95px;">
                        <label>Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click
                            next</p>
                        <input name="answerTwo" type="text" class="form-control" v-model="answerTwo"
                               placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li v-if="answerTwo.toLowerCase() == 'yes' " style="display: inline;">
                                <button v-on:click="nextTwo" class="btn btn-success col-xs-3" type="button">Next
                                </button>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div v-if="three == true">
                    <h2>Benefits of Health and Safety</h2>
                    <p>Applying health and safety procedures to your workplace will bring many benefits:</p>
                    <ul>
                        <li>Reduced costs and risks; employee absence and turnover rates are lower, accidents are fewer
                            and the threat of legal actions is lessened.
                        </li>
                        <li>Improved standing among suppliers and partners.</li>
                        <li>A better reputation for corporate responsibility among investors, customers and
                            communities.
                        </li>
                        <li>Increased productivity; employees are healthier, happier and more motivated.</li>
                        <li>Employees will feel safe whilst at work and recognise that their employer takes health and
                            safety seriously.
                        </li>
                    </ul>
                    <h2>Common Workplace Accidents</h2>
                    <p>The biggest cause of fatalities is working at heights but accidents are also commonly caused
                        by:</p>
                    <ul>
                        <li>Slips and Trips.</li>
                        <li>Manual Handling.</li>
                        <li>Being struck by a moving vehicle.</li>
                        <li>Becoming trapped in a confined space.</li>
                        <li>Exposure to hazardous substances.</li>
                    </ul>
                    <p>Some of these risks are more common in certain workplaces than others, making a risk assessment
                        an essential part of your health and safety procedures.</p>
                    <p>All employers have a legal duty to ensure that all risks are assessed, controlled and monitored
                        so that their employees remain safe from harm.</p>
                    <h2>Factors that Impact on Health and Safety</h2>
                    <p>Factors that need to be taken into consideration vary from one workplace to the next, but may
                        include:</p>
                    <p><strong>Occasional hazards</strong> – all workplaces have hazards that are specifically
                        associated with the job. That means everyone in the workplace unavoidably creates hazards by
                        carrying out work activities. For example, risks posed by working with a handheld tool, working
                        near asbestos, or carrying out wet work.</p>
                    <p><strong>Environmental hazards</strong> – these are related specifically to the working
                        environment. They usually affect everyone and are difficult to avoid, such as dusty, warm, cold
                        or noisy conditions as well as working around toxic substances or ionising radiation.</p>
                    <p><strong>Human factors</strong> – these are related to the way a person behaves or carries out
                        tasks at work, and are often the biggest cause of accidents. Hazards created by humans are
                        usually caused by failure to follow good health and safety practices. For example, carelessness,
                        rushing or lack of training.</p>
                    <h2>The Health and Safety at Work Act 1974</h2>
                    <p>Under the Health and Safety at Work, etc Act 1974, employers must prepare, implement and revise a
                        written Health and Safety Policy where there are 5 or more employees in the company.</p>
                    <p>Employers must assess the risk to employees, customers and any other people who could be affected
                        by their activities and ensure that effective control measures are put in place to protect these
                        people from harm.</p>
                    <p>Control measures must be adequate and regularly reviewed to make sure that they are still
                        effective.</p>
                    <p>Employers must have access to competent health and safety advice and ensure that they consult
                        employees about their risks at work, as well as informing them on current preventative and
                        protective measures.</p>

                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click
                        the "Accept Page" button and then fill out the short question. If you would need extra
                        information please contact {{ contactName }} on {{ companyNumber }} or email <a
                            v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitThree" class="btn btn-success col-xs-12">Accept Page</a>
                    </div>
                    <div v-if="acceptThree == true" class="form-group" id="questionThree" style=" margin-top: 95px;">
                        <label>Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click
                            next</p>
                        <input name="answerThree" type="text" class="form-control" v-model="answerThree"
                               placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousThree" class=" col-xs-3" href="#">Previous</a>
                            </li>
                            <li v-if="answerThree.toLowerCase() == 'yes' " style="display: inline;">
                                <button type="button" class="btn btn-success col-xs-3" v-on:click="nextThree">Next
                                </button>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div v-if="four == true">
                    <h2>Employees also have duties under health and safety legislation. As an employee:</h2>
                    <ul>
                        <li>You must take reasonable care of your own health and safety and that of other people who may
                            be affected by your work.
                        </li>
                        <li>Under the Management of Health and Safety at Work Regulations 1999 (MHSWR), you must inform
                            your employer of any danger to health and safety posed by a work activity.
                        </li>
                        <li>You must inform your employer of any shortcomings in their protection arrangements.</li>
                        <li>You must co-operate with your employer’s health and safety arrangements.</li>
                    </ul>
                    <p>Employers with fewer than 5 employees are exempt from the requirement to have a written Health
                        and Safety policy, although it is still recommended that you keep an up to date record of your
                        findings.</p>
                    <p>Where an employer has multiple sites, the total number of employees is added together to
                        determine whether there are 5 or more.</p>
                    <p>Employers with 5 or more employees must have a written policy.</p>
                    <h2>Health and Safety Regulations</h2>
                    <p>Alongside the Health and Safety at Work Act there are numerous regulations that cover individual
                        health and safety topics. Some of these will be relevant to your workplace and so must be
                        consulted by a competent person. For example:</p>
                    <ul>
                        <li>The Control of Asbestos Regulations 2012</li>
                        <li>The Control of Substances Hazardous to Health Regulations 2002</li>
                        <li>The Work at Height Regulations 2005</li>
                        <li>The Health and Safety (First Aid) Regulations 1981</li>
                        <li>The Health and Safety (Display Screen Equipment) Regulations 1992</li>
                        <li>The Manual Handling Operations Regulations 1992</li>
                    </ul>
                    <p>The competent person is the individual that carries out the risk assessment and should have an
                        understanding of HSE guidance. Their role is to develop an action plan, known which information
                        to obtain for the risk assessment, seek help when needed, and record all results.</p>
                    <h2>The Health and Safety Executive</h2>
                    <p>HSE stands for Health and Safety Executive and is the government body responsible for overseeing
                        workplace health and safety in the UK.</p>
                    <p>The role of the HSE is to:</p>
                    <ul>
                        <li>Advise on any health and safety matters.</li>
                        <li>Conduct any serious accident investigations.</li>
                        <li>Inspect workplaces.</li>
                    </ul>
                    <p>The HSE also has several legal powers and can:</p>
                    <ul>
                        <li>Demand entry to the workplace without giving any notice to do so.</li>
                        <li>Prosecute any company, employer or employee.</li>
                        <li>Issue Prohibition or Improvement notices which have to be followed.</li>
                    </ul>
                    <p>An inspector’s role is to:</p>
                    <ul>
                        <li>Investigate (when accidents have happened or a complaint is made) whether people are at
                            risk, to find out if something has gone wrong.
                        </li>
                        <li>Require you to take action to control risks properly if you are not already complying with
                            the law.
                        </li>
                        <li>Take appropriate enforcement action in relation to any non-compliance, ranging from advice
                            on stopping dangerous work activities to potentially taking prosecutions where people are
                            put at serious risk.
                        </li>
                        <li>Provide advice and guidance to help you comply with the law and avoid injuries and ill
                            health at work.
                        </li>
                    </ul>
                    <h2>The Health and Safety Executive</h2>
                    <p>In the majority of cases, the HSE will give verbal or informal written advice to those who
                        require attention.</p>
                    <p>In these cases where legal requirements are not being met, an improvement notice can be issued by
                        the HSE, requiring specified actions to be taken within a certain time limit.</p>
                    <p>Where an imminent risk exists, a prohibition notice will be issued, banning a certain activity
                        until the risk is properly controlled.</p>
                    <p>In extreme cases, where serious injury or death has occurred due to health and safety failings,
                        HSE inspectors can prosecute businesses to ensure adequate provision of health and safety.</p>


                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click
                        the "Accept Page" button and then fill out the short question. If you would need extra
                        information please contact {{ contactName }} on {{ companyNumber }} or email <a
                            v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitFour" class="btn btn-success col-xs-12">Accept Page</a>
                    </div>
                    <div v-if="acceptFour == true" class="form-group" id="questionFour" style=" margin-top: 95px;">
                        <label>Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click
                            next</p>
                        <input name="answerFour" type="text" class="form-control" v-model="answerFour"
                               placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousFour" class=" col-xs-3" href="#">Previous</a>
                            </li>
                            <li v-if="answerFour.toLowerCase() == 'yes'" style="display: inline;">
                                <button type="button" class="btn btn-success col-xs-3" v-on:click="nextFour">Next
                                </button>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div v-if="five == true">
                    <h2>Health Hazards</h2>
                    <p>Every workplace will require an individual risk assessment as each occupation has its own
                        hazards. For example:</p>
                    <ul>
                        <li>Office workplaces may want to focus more on display screen equipment, fire safety, slips,
                            trips and falls and ergonomics.
                        </li>
                        <li>Construction sites will need more focus on manual handling, working at height, asbestos,
                            safety signs and demolition.
                        </li>
                        <li>Clinical workplaces need to focus on hazardous substances, first aid procedures, and
                            infection control.
                        </li>
                    </ul>
                    <p>You can contact the HSE or visit the HSE website to learn more about individual workplaces and
                        find more in-depth guidance on each of the health and safety topics.</p>
                    <h2>Personal Protective Equipment</h2>
                    <p>Personal Protective Equipment, or PPE, is all equipment which is intended to be worn or held by a
                        person at work and which protects the wearer against one or more risks to their health or
                        safety.</p>
                    <p>Your workplace’s risk assessment will determine what PPE is needed. However, PPE should only be
                        used as a last resort when all other control measures have been considered.</p>
                    <p>PPE should also be:</p>
                    <ul>
                        <li>Provided free of charge to employees by the employer.</li>
                        <li>Properly assessed before use to ensure it is suitable.</li>
                        <li>Maintained and stored properly.</li>
                        <li>Provided with instructions on how to use it safely.</li>
                        <li>Used correctly by employees.</li>
                        <li>Worn at all times when needed.</li>
                        <li>Appropriate for the risks involved.</li>
                    </ul>
                    <p>Examples of PPE that you may need are:</p>
                    <ul>
                        <li>Safety glasses or goggles.</li>
                        <li>A hard hat.</li>
                        <li>A face mask or visor.</li>
                        <li>Safety boots.</li>
                        <li>Gloves or mitts.</li>
                        <li>Overalls or boiler suit.</li>
                        <li>Earplugs or ear defenders.</li>
                        <li>Breather equipment.</li>
                        <li>High-visibility clothing.</li>
                    </ul>
                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click
                        the "Accept Page" button and then fill out the short question. If you would need extra
                        information please contact {{ contactName }} on {{ companyNumber }} or email <a
                            v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitFive" class="btn btn-success col-xs-12">Accept Page</a>
                    </div>
                    <div v-if="acceptFive == true" class="form-group" id="questionFive" style=" margin-top: 95px;">
                        <label>Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click
                            next</p>
                        <input name="answerFive" type="text" class="form-control" v-model="answerFive"
                               placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousFive" class=" col-xs-3" href="#">Previous</a>
                            </li>
                            <li v-if="answerFive.toLowerCase() == 'yes'" style="display: inline;">
                                <button type="button" class="btn btn-success col-xs-3" v-on:click="nextFive">Next
                                </button>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div v-if="six == true">
                    <h2>RIDDOR 2013</h2>
                    <p>Under certain circumstances, recording and reporting accidents and ill-health at work is a legal
                        requirement under The Reporting of Injuries, Diseases and Dangerous Occurrences Regulations 2013
                        (RIDDOR).</p>
                    <p>It requires employers, and other people who are in control of work premises, to report and keep
                        records of:</p>
                    <ul>
                        <li>Work-related deaths.</li>
                        <li>Specified serious injuries.</li>
                        <li>Cases of diagnosed industrial disease.</li>
                        <li>Certain “dangerous occurrences” (near miss incidents).</li>
                    </ul>
                    <p>RIDDOR gives two types of injuries that must be reported if the person was at work when they
                        happened. These are specified injuries and accidents that result in more than 7 calendar days
                        off work, excluding the day of the accident. For example, fractures, amputation, dislocation,
                        loss of sight, chemical burns or electrical injury.</p>
                    <p>If you have an accident at work then report it to your supervisor, manager or employer straight
                        away.</p>
                    <p>You must also report any injuries to members of the public or people who are not at work if they
                        are injured following an accident that rises out of, or in connection with, your workplace and
                        are taken from the scene of an accident to hospital for treatment.</p>
                    <p>If the injured person was already at a hospital, the report only needs to be made if the injury
                        is a specified injury.</p>

                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click
                        the "Accept Page" button and then fill out the short question. If you would need extra
                        information please contact {{ contactName }} on {{ companyNumber }} or email <a
                            v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitSix" class="btn btn-success col-xs-12">Accept Page</a>
                    </div>
                    <div v-if="acceptSix == true" class="form-group" id="questionSix" style=" margin-top: 95px;">
                        <label>Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click
                            next</p>
                        <input name="answerSix" type="text" class="form-control" v-model="answerSix"
                               placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousSix" class=" col-xs-3"
                                                            href="#">Previous</a></li>
                            <li v-if="answerSix.toLowerCase() == 'yes'" style="display: inline;">
                                <button type="button" class="btn btn-success col-xs-3" v-on:click="nextSix">Next
                                </button>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div v-if="seven == true">
                    <div>
                        <h2>Summary</h2>
                        <p>This e learning course has introduced you to the importance of upholding health and safety at
                            work.</p>
                        <p>The most common workplace accidents include slips and trips, strain caused by manual
                            handling, being struck by moving vehicles, being trapped in a confined space, and exposure
                            to hazardous substances. Hazards may be occupational, environmental, or human.</p>
                        <p>The Health and Safety Executive (HSE) is the government body responsible for overseeing
                            workplace health and safety in the UK. They have the authority to inspect workplaces,
                            conduct investigations, offer advice on health and safety, and issue notices.</p>
                        <p>Employees may need to wear personal protective equipment to protect themselves from hazards,
                            although PPE should only be used if other control measures are insufficient in minimising
                            risks.</p>
                        <p>Certain work-related accidents and ill-health must be reported to RIDDOR. If you have an
                            accident, report it to senior staff right away.</p>
                        <p>If your details below are correct, please click on the submit bar below to submit your
                            details.</p>
                        <p><strong>If you have any other questions or need any other support. Please call {{
                                contactName
                            }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></strong>
                        </p>
                        <p><strong>In any case, we shall be in touch to establish any other support.</strong></p>
                        <div class="col-xs-6">
                            <div class="form-group col-xs-12">
                                <label for="name">Name</label>
                                <input type="text" v-model="name" class="form-control" id="name" name="name"
                                       placeholder="Name" value="">
                            </div>
                            <div class="form-group col-xs-12">
                                <label for="contactNumber">Contact Number</label>
                                <input type="text" class="form-control" v-model="contactNumber" id="contactNumber"
                                       name="contactNumber" placeholder="Contact Number" value="">
                            </div>
                            <div class="form-group col-xs-12">
                                <label for="company">Company</label>
                                <input type="text" class="form-control" v-model="company" id="company" name="company"
                                       placeholder="Company" value="">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group col-xs-12">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" v-model="email" name="email" id="email"
                                       placeholder="Email" value="">
                            </div>
                            <div class="form-group col-xs-12">
                                <label for="address">Address</label>
                                <textarea type="text" class="form-control" v-model="address" name="address" id="address"
                                          style="height: 114px" placeholder="Your Address"></textarea>
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

        }
    },
    props: ['contactName', 'companyNumber', 'adminEmail'],

    methods: {
        submitOne: function () {
            if (this.name !== "" && this.email !== "") {
                this.one = true;
                this.two = true;
            }
        },
        submitTwo: function () {
            this.acceptTwo = true;
        },
        nextTwo: function () {
            this.acceptTwo = false;
            this.answerTwo = '';
            this.two = false;
            this.three = true;
        },
        previousTwo: function () {
            this.two = false;
            this.one = true;
        },

        submitThree: function () {
            this.acceptThree = true;
        },
        nextThree: function () {
            this.acceptThree = false;
            this.answerThree = '';
            this.three = false;
            this.four = true;
        },
        previousThree: function () {
            this.three = false;
            this.two = true;
        },

        submitFour: function () {
            this.acceptFour = true;
        },
        nextFour: function () {
            this.acceptFour = false;
            this.answerFour = '';
            this.four = false;
            this.five = true;
        },
        previousFour: function () {
            this.four = false;
            this.three = true;
        },

        submitFive: function () {
            this.acceptFive = true;
        },
        nextFive: function () {
            this.acceptFive = false;
            this.answerFive = '';
            this.five = false;
            this.six = true;
        },
        previousFive: function () {
            this.five = false;
            this.four = true;
        },

        submitSix: function () {
            this.acceptSix = true;
        },
        nextSix: function () {
            this.acceptSix = false;
            this.answerSix = '';
            this.six = false;
            this.seven = true;
        },
        previousSix: function () {
            this.six = false;
            this.five = true;
        },

        submitSeven: function () {
            this.acceptSeven = true;
        },
        nextSeven: function () {
            this.acceptSeven = false;
            this.answerSeven = '';
            this.seven = false;
            this.eight = true;
        },
        previousSeven: function () {
            this.seven = false;
            this.six = true;
        },

        submitForm: function () {
            this.seven = false;
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
            axios.post('/HealthSafetyintheWorkplaceTraining', formData, config);
        },
    },
    mounted() {
    }
}
</script>
