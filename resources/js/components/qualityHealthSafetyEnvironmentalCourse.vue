<template>
    <div class="col-xs-12 col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Quality, Health and Safety, Environmental Training Course {{ name }}</h3>
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
                                   id="position" placeholder="Position" value="">
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
                    <p>
                        Welcome and thank you for taking part in this e-learning training presentation.
                    </p>
                    <h2>Quality, Health & Safety and Environmental Management</h2>
                    <p>
                        It is important that any organisation providing installations can demonstrate that they have a
                        level of business integrity and ethics and at a minimum have a documented Quality, Health &
                        Safety and Environmental Management System that they follow to meet the requirements of any
                        legislation and codes of practice showing commitment to all aspects of the work it undertakes.
                    </p>
                    <p>
                        This training course helps you to understand some of the main requirements and responsibilities.
                    </p>
                    <h2>Quality Management System (QMS)</h2>
                    <p>
                        The specification and accreditation required for the installation of energy efficiency measures
                        in existing buildings (PAS – Publicly Available Specification) was commissioned by the
                        Department for Business, Energy & Industrial Strategy (BEIS) and documents the range of measures
                        and necessary design and installation processes, management process and service provision for
                        energy efficiency improvements made to existing UK residential and commercial properties.
                    </p>
                    <p>
                        A Quality Management System (QMS) should contain all the documents, records, legislation and
                        procedures to ensure quality in all aspects of work undertaken and ideally this should be
                        assured by an accreditation body. A formal document control process should be in place including
                        issuing and withdrawal of documents, document archiving, secure disposal of confidential
                        documentation and a master list of controlled documents.
                    </p>
                    <p>
                        There should be a documented process for Quality Control which would include the management of
                        documentation and processes for completion of agreed contractual work and specifications of how
                        long the handover records will be retained. Internal audit inspections should take place that
                        are regularly programmed with a register retained for any outstanding issues raised through
                        audit in order to close out non-conformities from previous audits.
                    </p>
                    <h2>Quality Management Policy Statement</h2>
                    <p>
                        Your organisation should have a policy statement that is reviewed at least on an annual basis
                        and is signed and endorsed by a senior management representative. The policy should relate to
                        the company activities and the period for review documented.
                    </p>
                    <h2>Nominated Quality Representative</h2>
                    <p>
                        Your organisation should appoint someone with the competency requirements who is ultimately
                        responsible for the Quality Management System.
                    </p>
                    <h2>Construction, Design and Management Regulations (CDM) 2015</h2>
                    <p>
                        An organisation should be able to demonstrate compliance with the Construction, Design and
                        Management Regulations (CDM). The CDM Regulations cover the management of health, safety and
                        welfare when carrying out construction projects and applies to the whole construction process.
                        Areas to be considered include:
                    </p>
                    <ol>
                        <li>Sensibly plan the work so the risks involved are managed from start to finish;</li>
                        <li>Have the right people for the right job at the right time;</li>
                        <li>Have the right information about the risks and how they are being managed;</li>
                        <li>Communicate the information about the risks and how they are managed;</li>
                        <li>Consult and engage with workers about risks and how they are being managed;</li>
                        <li>Document overall and individual duties, and the processes around discharging/handover.</li>
                    </ol>
                    <p>
                        Although you may not carry out any major construction or installation work, boilers, CWI, IWI
                        and Loft Insulation are fairly typical under the Energy Company Obligation scheme, you must
                        still document your processes for meeting and discharging your duties under CDM 2015 which
                        should include Health and Safety Procedures, Quality Manual and a procedure for monitoring and
                        effective ongoing safety management of contractors.
                    </p>
                    <p>
                        Your company should identify all applicable licenses and permits for the scope of services it
                        provides and ensure contractors dispose of all waste in a legal and proper manner.
                    </p>
                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click
                        the "Accept Page" button and then fill out the short question. If you would need extra
                        information please contact {{ contactName }} on {{ companyNumber }} or email <a
                            v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <button href="#acceptPage" v-on:click="submitTwo" class="btn btn-success col-xs-12">Accept
                            Page
                        </button>
                    </div>
                    <div v-if="acceptTwo == true" class="form-group" id="questionTwo" style=" margin-top: 95px;">
                        <label id="acceptPage">Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click
                            next</p>
                        <input name="answerTwo" type="text" class="form-control" v-model="answerTwo"
                               placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li v-if="answerTwo == 'yes' " style="display: inline;"><a v-on:click="nextTwo" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div v-if="three == true">
                    <h2>Environmental Management System (EMS)</h2>
                    <p>
                        An organisation should have a documented management system in place which mitigates your
                        environmental impact and is aligned to the principles of ISO14001. The system requires you to
                        have a working knowledge of applicable legislations, standards and codes of practice and to
                        demonstrate statutory compliance.
                    </p>
                    <h2>Environmental Policy Statement</h2>
                    <p>
                        Your company should have an Environmental Policy Statement as part of its Environmental
                        Management System that is endorsed by a senior management representative and which relates to
                        your activities and is signed and reviewed at least on an annual basis. This will identify,
                        assess and manage environmental risks identified in your supply chain/subcontractors along with
                        having a formal process for recording, reporting and investigating environmental incidents and
                        near misses.
                    </p>
                    <p>
                        You should utilise a variety of sources to ensure the content of the EMS is appropriate and up
                        to date and maintain a register of appropriate legislation and sign up to a subscription for
                        legislations with gov.uk.
                    </p>
                    <p>
                        When it comes to the scope of services associated with your installation work you should manage
                        the Aspects and Impacts of this. This would include completing an Aspects and Impacts Register
                        and Risk Assessment with control measures put in place to reduce/remove identified environmental
                        risk.
                    </p>
                    <p>
                        You should also be able to provide the number of environmental incidents and near misses per
                        calendar year, including those that relate to sub-contractors working on your behalf.
                    </p>
                    <h2>Nominated Environmental Representative</h2>
                    <p>
                        You should have a nominated representative within your organisation to assist you with the
                        identification and management of environmental responsibilities.
                    </p>
                    <p>
                        The person should be suitably qualified with relevant experience and it should be their
                        responsibility to identify environmental laws and regulations which apply to your business and
                        ensure there is a procedure to comply with them.
                    </p>
                    <h2>Waste Management and Permits</h2>
                    <p>
                        You should have processes or systems in place to manage waste produced as a result of your
                        activities on site so that it is managed in a controlled way. A Waste Management Procedure would
                        typically form part of an Environmental Management System and it is likely you would complete a
                        Waste Transfer Note and have a Waste Transfer License.
                    </p>
                    <p>
                        Any waste that has been created inside the customer’s home, usually packaging and the removal of
                        old parts, must be disposed of using a licensed waste company in a legal and proper manner. Any
                        waste stored on site should be stored and handled correctly and within certain documented
                        guidelines and procedures which includes solid wastes, waste water, materials handling, storage
                        and spill control.
                    </p>
                    <p>
                        You should make a list of the environmental permits which your company requires to have in place
                        to undertake the activities.
                    </p>
                    <p>
                        Waste can also relate to internal office waste, such as paper shredding, ink cartridges, old
                        office equipment, recycling bins and so this should also be identified and any risks mitigated.
                    </p>
                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click
                        the "Accept Page" button and then fill out the short question. If you would need extra
                        information please contact {{ contactName }} on {{ companyNumber }} or email <a
                            v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#acceptPage" v-on:click="submitThree" class="btn btn-success col-xs-12">Accept Page</a>
                    </div>
                    <div v-if="acceptThree == true" class="form-group" id="questionThree" style=" margin-top: 95px;">
                        <label id="acceptPage">Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click
                            next</p>
                        <input name="answerThree" type="text" class="form-control" v-model="answerThree"
                               placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousThree" href="#">Previous</a></li>
                            <li v-if="answerThree == 'yes'" style="display: inline;"><a href="#" v-on:click="nextThree">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div v-if="four == true">
                    <p>Health and Safety Management System (HSMS)</p>
                    <p>
                        The Health and Safety at Work etc. Act 1974, often referred to as HASAW or HSW, is an Act of
                        Parliament and the main piece of UK health and safety legislation. It places a duty on all
                        employers “to ensure, so far as is reasonably practicable, the health, safety and welfare at
                        work” of all employees and includes work processes (e.g. manual handling, use of display screen
                        equipment), and specific standards such as the controlling, keeping, use and prevention of
                        dangerous substances and controlling certain emissions into the atmosphere (e.g. exposure to
                        chemicals).
                    </p>
                    <h2>Health and Safety Policy Statement</h2>
                    <p>
                        Your company should have a clear Health and Safety Policy Statement relating to the provision of
                        health and safety in the workplace which extends to not only workers but also third parties and
                        people who are not employed but may be affected by your activities. This should be signed by a
                        senior member of staff and reviewed at least on an annual basis.
                    </p>
                    <p>
                        Your company should then have a communication process to provide guidance to the workforce on
                        workplace safety issues. This can be achieved in a number of ways such as supplying a copy of
                        the Health and Safety Procedures and Handbook, providing initial and ongoing training and
                        encouraging all employees and suppliers to participate in all elements of health and safety
                        management. An up to date organisational chart with individual duties and responsibilities will
                        help along with implementing initiatives such as fortnightly toolbox talks around the office,
                        posters around the office enforcing the health and safety message, and internal health and
                        safety updates and extracts from related bulletins and articles. Regular management meetings
                        with minutes recorded discussing areas for improvement will also help you evidence your approach
                        to this.
                    </p>
                    <p>
                        Your company should also have established and documented processes to ensure compliance to legal
                        and other legislative requirements that are applicable.
                    </p>
                    <p>
                        You should sign up to the HSE Legislative Notification Service in order to keep in touch with
                        any potential alerts, notices and advisories issued by HSE and maintain a register and
                        documented procedure which specifically details a process for ensuring compliance to legislative
                        requirements and Health and Safety Legal Changes.
                    </p>
                    <h2>Nominated Health and Safety Representative</h2>
                    <p>
                        A person should be chosen within your organisation who has the delegated responsibility for
                        workplace and products safety. The person responsible should hold a recognised Health and Safety
                        Qualification or alternatively appoint a qualified Health and Safety Consultant in order to
                        provide specialised advice and responsibility.
                    </p>
                    <p>
                        Areas to consider are formal health and safety targets and objectives and introducing measures
                        and procedures to reduce/remove identified Health and Safety Risks.
                    </p>
                    <p>
                        Risk assessments should be used that are not templates, but site specific and developed in
                        advance of any installation and read and understood by all operatives involved in the work on
                        that day. The company Installation Methods Procedure outlines how all installations should be
                        carried out in an appropriate manner and that hazards should be identified and documented
                        pre-installation and on a Method Statement. Additional evidence is in the form of the Permit to
                        Work Procedure and Permit to Work Forms and Driver Risk Assessments.
                    </p>
                    <h2>Personal Protective Equipment (PPE)</h2>
                    <p>
                        These should be issued free of charge to all workers (migrant workers, contract/labour, full
                        time) that may be exposed to workplace hazards. A PPE Issue Record Sheet should be used in
                        conjunction with a Personal Protective Equipment Policy. It is necessary for each employee to
                        sign and date the sheet each time a new item of PPE is issued.
                    </p>
                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click
                        the "Accept Page" button and then fill out the short question. If you would need extra
                        information please contact {{ contactName }} on {{ companyNumber }} or email <a
                            v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#acceptPage" v-on:click="submitFour" class="btn btn-success col-xs-12">Accept Page</a>
                    </div>
                    <div v-if="acceptFour == true" class="form-group" id="questionFour" style=" margin-top: 95px;">
                        <label id="acceptPage">Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click
                            next</p>
                        <input name="answerFour" type="text" class="form-control" v-model="answerFour"
                               placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousFour" href="#">Previous</a></li>
                            <li v-if="answerFour == 'yes'" style="display: inline;"><a href="#" v-on:click="nextFour">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div v-if="five == true">
                    <h2>Hazardous Substances</h2>
                    <p>
                        COSHH is the law that requires employers to control substances that are hazardous to health. A
                        company must prevent or reduce workers exposure to hazardous substances by providing
                        information, instruction and training for employees and others and you should have a clear
                        Hazardous Substances Procedure that also demonstrates that you have assessed the hazards
                        associated with applicable chemicals and/or hazardous substances by putting in place a
                        collection of documents that has been divided into categories to ensure someone can quickly and
                        easily find the file needed.
                    </p>
                    <p>
                        There should be a system and directive in place for the correct handling and storage of
                        hazardous substances and goods.
                    </p>
                    <h2>Injury in the workplace and Reporting of Injuries, Diseases and Dangerous Occurrences
                        (RIDDOR)</h2>
                    <p>
                        In the event of an injury in the workplace a company must be able to demonstrate that they have
                        adequate emergency first aid facilities on site. This can include medical points and qualified
                        first aid personnel that are easily identified. An accident book should be used to report
                        accidents to members of staff.
                    </p>
                    <p>
                        Arrangements must be in place for investigating and report of Accidents and Near Misses. A
                        nominated person should report all accidents and incidents as part of an Accident and Incident
                        Reporting Investigation Procedure and a procedure for incident reporting and the requirements
                        under RIDDOR regulations are detailed.
                    </p>
                    <h2>Induction, Training and Awareness</h2>
                    <p>
                        An organisation should communicate it’s quality, environmental and health and safety
                        requirements effectively and induct new and existing workers into these processes when they
                        first start on site. This should include employees, sub-contractors, self-employed and visitors.
                    </p>
                    <p>
                        The purpose of the induction policy for staff is to ensure that all employees have the benefit
                        of a properly structured induction programme that will help them to integrate into their role in
                        the organisation quickly and effectively.
                    </p>
                    <p>
                        The purpose of the induction policy for workers/subcontractors is to ensure they are selected
                        and approved to ensure that work carried out is in compliance with the appropriate standards and
                        within the current versions of the Code of Practices and regulations.
                    </p>
                    <p>
                        An organisation should identify the training standards and all work activities relating to their
                        scope of service that requires formal training and deliver that training in order to ensure the
                        competency to carry out the tasks that your business requires and identify where staff may
                        require further training or are suitable for advancement.
                    </p>
                    <p>
                        At a minimum you should provide your staff with your Environmental, Health and Safety and
                        Quality Management Policies and Procedures in writing and then through one to one meetings and
                        training courses effectively deploy these polices.
                    </p>
                    <p>
                        Any training certificates should be checked and validated on a regular basis.
                    </p>
                    <h2>Audits</h2>
                    <p>
                        An organisation should be able to demonstrate that it’s quality, environmental and health and
                        safety management systems have been audited, at least on an annual basis, and achieve an
                        acceptable level of achievement.
                    </p>
                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click
                        the "Accept Page" button and then fill out the short question. If you would need extra
                        information please contact {{ contactName }} on {{ companyNumber }} or email <a
                            v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#acceptPage" v-on:click="submitFive" class="btn btn-success col-xs-12">Accept Page</a>
                    </div>
                    <div v-if="acceptFive == true" class="form-group" id="questionFive" style=" margin-top: 95px;">
                        <label id="acceptPage">Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click
                            next</p>
                        <input name="answerFive" type="text" class="form-control" v-model="answerFive"
                               placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousFive" href="#">Previous</a></li>
                            <li v-if="answerFive == 'yes'" style="display: inline;"><a href="#" v-on:click="nextFive">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div v-if="six == true">
                    <div>
                        <h2>Summary</h2>
                        <p>Many thanks for taking the time to read this training course, which we hope has helped to
                            educate you.</p>
                        <p><strong>If you have any other questions or need any other support. Please call {{
                                contactName
                            }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></strong>
                        </p>
                        <p><strong>In any case, we shall be in touch to establish any other support.</strong></p>
                        <p>If your details below are correct, please click on the submit bar below to submit your
                            details.</p>
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
                                <label for="position">Position in Company</label>
                                <input type="text" class="form-control" v-model="position" name="position"
                                       id="position" placeholder="Position" value="">
                            </div>
                            <div class="form-group col-xs-12">
                                <label for="address">Address</label>
                                <textarea type="text" class="form-control" v-model="address" name="address" id="address"
                                          style="" placeholder="Your Address"></textarea>
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
            position: '',
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

        }
    },

    watch: {
        answerTwo: function () {
            this.answerTwo = this.answerTwo.toLowerCase();
        },

        answerThree: function () {
            this.answerThree = this.answerThree.toLowerCase();
        },

        answerFour: function () {
            this.answerFour = this.answerFour.toLowerCase();
        },

        answerFive: function () {
            this.answerFive = this.answerFive.toLowerCase();
        },
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

        submitForm: function () {
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
            axios.post('/Quality-Health-Safety-Environmental-Course', formData, config);
        },
    },
    mounted() {
    }
}
</script>
