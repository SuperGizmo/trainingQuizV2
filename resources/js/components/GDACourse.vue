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
                    <p>The Green Deal was a government scheme launched in 2013 that provided loans to households to finance energy-efficient home improvements. The loan aimed to be paid back through the savings made on energy bills.</p>

                    <p>The Green Deal scheme was implemented and run by the Green Deal Finance Company (“GDFC”) with the aim to help spread payments for the upfront cost of energy-efficiency measures, such as solid wall insulation, boilers and double glazing.</p>

                    <p>The GDFC was a not-for-profit company aimed to support the Green Deal by buying the loans from Green Deal Providers, who agreed loans to consumers. This allowed Green Deal Providers to sell more energy efficient products, whilst not having to finance the loans that they originated. The GDFC was part financed by DECC and in July 2015 the Government said that it would provide no further funding to the GDFC and so Green Deal was suspended, although all the systems remained in place.</p>

                    <p>On the 15th January 2017, Greenstone Finance and Aurium Capital Markets (“Aurium”) announced the acquisition of the business and assets of the GDFC, as well as its existing loan book and under the new ownership Greenstone Finance has assembled a new management team to run the business and operations for the GDFC and will continue to service the existing Green Deal loans and commence financing of new Green Deal loans.</p>

                    <p>The first “new” Green Deal Plan was processed on the 18th May 2017.</p>



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
                            <li v-if="answerTwo.toLowerCase() == 'yes' "  style="display: inline;"><button v-on:click="nextTwo" class="btn btn-success col-xs-3" type="button">Next</button></li>
                        </ul>
                    </nav>
                </div>
                <div v-if="three == true">
                    <h2>Main Benefits of a Green Deal Plan</h2>
                    <p>The following are the <strong>main benefits</strong> for customers financing their home energy improvements through a Green Deal Plan:</p>
                    <ul>
                        <li>This is the <strong>Government led</strong> Green Deal scheme;</li>
                        <li>They will benefit from a <strong>warmer and more energy efficient home, with reduced upfront costs;</strong></li>
                        <li>Plan repayments are <strong>hassle-free</strong> because they are added automatically to their existing electricity bill;</li>
                        <li>The plan is linked to their property, so when they move house the <strong>plan remains with the property it is benefitting;</strong></li>
                        <li>The <strong>interest rates charged are competitive;</strong></li>
                        <li>The <strong>eligibility criteria are simple;</strong></li>
                        <li>The cost of the loan will, <strong>in part, be paid for</strong> via the energy savings achieved;</li>
                        <li>Depending on the energy efficiency improvements being made, the repayment term may be <strong>up to 25 years</strong> enabling more <strong>affordable monthly repayments;</strong></li>
                        <li>All Green Deal Plan home improvements are <strong>guaranteed for the expected lifetime of the measure.</strong></li>
                    </ul>




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
                            <li v-if="answerThree.toLowerCase() == 'yes' "  style="display: inline;"><button type="button" class="btn btn-success col-xs-3"v-on:click="nextThree">Next</button></li>
                        </ul>
                    </nav>
                </div>
                <div v-if="four == true">
                    <h2>Key Points of a Green Deal Plan</h2>

                    <ol>
                        <li>The improvements to the home will be financed through a Green Deal Plan;</li>
                        <li>A Green Deal Plan is a loan attached to your electricity meter rather than to an individual; </li>
                        <li>Plan repayments are the obligation of the person who is the Bill Payer at any point in time and if the individual who pays the electricity bill moves out, the Green Deal Plan remains behind, attached to the meter. The new Bill Payer assumes responsibility for ongoing Plan repayments, but importantly, not for any arrears built-up by other Bill Payers;</li>
                        <li>If the owner decides to sell the property, they are required to disclose to the buyer if a Green Deal Plan is attached to the property.  Similarly, a landlord renting to a new tenant must do the same;</li>
                        <li>The estimated plan repayments should be less than, or equal to, the expected monthly energy savings which means that the energy bills overall should not increase, however the energy savings will depend on the energy usage within the home and this is only an estimate. The actual energy bill will depend on the energy tariff, usage, the weather temperature etc.</li>
                        <li>As the repayments for this plan are made through the electricity bill, the bill payer will need to go through a credit application check to ensure that they are able to cover the repayments;</li>
                        <li>An independent assessor will contact them, as part of the post installation quality checks under the Green Deal Plan, to solicit a customer’s feedback regarding the installed measure.</li>
                        <li>An additional page is added to the EPC, which clearly shows that a property has a GD plan. The land registry will also show that the property has got a GD plan.</li>
                    </ol>

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
                        <input name="answerFour" type="text" class="form-control" v-model="answerFour" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousFour" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerFour.toLowerCase() == 'yes'"  style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextFour">Next</button></li>
                        </ul>
                    </nav>
                </div>
                <div v-if="five == true">

                    <h2>Key Eligibility Criteria</h2>
                    <p style="font-weight: bold;">
                        Eligible Measures under Green Deal Plans
                    </p>
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

                    <p style="font-weight: bold;">
                        Eligibility Requirements for Green Deal Plans
                    </p>

                    <ul>
                        <li>Minimum age of 18 years old;</li>
                        <li>Maximum age of 75 years old;</li>
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
                        <input name="answerFive" type="text" class="form-control" v-model="answerFive" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousFive" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerFive.toLowerCase() == 'yes' "  style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextFive">Next</button></li>
                        </ul>
                    </nav>
                </div>
                <div v-if="six == true">

                    <h2>Role of the GDAO (Green Deal Assessor Organisation)</h2>

                    <ul>
                        <li>The Role of the GDAO is very similar to the role of the Accreditation Scheme for Domestic or Commercial Energy Assessors.</li>
                        <li>GDAOs are responsible for ensuring that the Green Deal Assessors (GDAs) that are contracted to them, are suitably qualified, have valid insurance for their GDAs.</li>
                        <li>GDAOs must also have robust and well documented management systems in place, undertake audits (both on the work of the GDA and on internal processes) and deal with customer complaints.</li>
                        <li>The function of the GDAO is to undertake management and monitoring to ensure the high-quality and compliant delivery of Green Deal advice.</li>
                    </ul>

                    <h2>Green Deal Assessor or Green Deal Advisor (GDA)</h2>

                    <p>The role of a Green Deal Assessor is to carry out a Green Deal “qualifying assessment” and produce a Green Deal Advice Report which is a requirement for any person who wishes to take out a Green Deal Plan in order to pay for the installation of energy efficient measures at their property. The role of a Green Deal Assessor is not to “sell” measures but to carry out an assessment and develop Green Deal quotes.</p>




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
                            <li style="display: inline;"><a v-on:click="previousSix" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerSix.toLowerCase() == 'yes' "  style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextSix">Next</button></li>
                        </ul>
                    </nav>
                </div>
                <div v-if="seven == true">

                    <h2>Auditing</h2>

                    <ul>
                        <li>For the purpose of determining ongoing compliance with the Rule of Registration, the GDAO and its GDAs shall undergo surveillance visits. Surveillance takes three forms;
                            <ol>
                                <li>Witnessed assessment of the Green Deal Advice Service.</li>
                                <li>Annual surveillance of management systems and processes.</li>
                                <li>Green Deal Advice Report audits undertaken remotely.</li>
                            </ol>
                        </li>
                        <li>GDAO audits the GDA.</li>
                        <li>Certification scheme audits the GDAO.</li>
                    </ul>

                    <h2>Witness Assessment</h2>

                    <ul>
                        <li>On top of internal auditing a GDAO will be required to undertake a witness assessment.</li>

                        <li>A sample of the GDAs operating will be subject to witnessed assessments by the appropriate body.</li>

                        <li>It is likely to be a live assessment which will be conducted in a mock location/situation and the cost will be billed to the Assessor.</li>

                        <li>If a GDA is found to not comply with the requirements of the Specification for organisations providing the Green Deal Advice Service, then it can be notified of the non-compliance which may necessitate carrying out further witnessed assessments.</li>

                        <li>The GDA shall be responsible for all charges of witness assessments.</li>

                        <li>The GDA must demonstrate corrections to non-conformities within 2 weeks, failure to do so may result in de-authorisation of the GDA.</li>
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
                            <li style="display: inline;"><a v-on:click="previousSeven" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerSeven.toLowerCase() == 'yes'"  style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextSeven">Next</button></li>
                        </ul>
                    </nav>
                </div>
                <div v-if="eight == true">

                    <h2>Before Green Deal Assessment</h2>

                    <ul>

                        <li>Checking EPC Validity and Suitability.</li>

                        <li>An EPC shall be considered suitable for Green Deal purposes it if fulfils the conditions in this clause:
                            <ol>
                                <li>It has been lodged and is valid as per the requirements for EPBD in the relevant country.</li>

                                <li>It has been lodged after 1 April 2012 (in England and Wales) or after 1 October 2012 (in Scotland).</li>

                                <li>The GDA is satisfied that there have been no changes.</li>
                            </ol>
                        </li>
                    </ul>

                    <h2>During the Green Deal Assessment</h2>

                    <p>The GDA assigned to the job by the Organisation shall ensure:</p>

                    <ul>
                        <li>That the customer (or their assigned appointed representative) is present at the property before entering the property.</li>

                        <li>Shall show identification.</li>

                        <li>For empty/void properties, a landlord can issue a prior authorisation to an Organisation stating that the GDA carry out the Green Deal Assessment without the customer or appointed representative needing to be present.</li>

                        <li>The GDA shall confirm the physical scope of the assessment (e.g. whole/part of building and if non-domestic, level of the building) with the customer.</li>
                    </ul>




                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitEight" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptEight == true" class="form-group" id="questionEight" style=" margin-top: 95px;">
                        <label >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerEight" type="text" class="form-control" v-model="answerEight" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousEight" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerEight.toLowerCase() == 'yes' " id="buttonEight" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextEight">Next</button></li>
                        </ul>
                    </nav>
                </div>


                <div v-if="nine == true">

                    <h2>While on Site and before beginning the Assessment</h2>

                    <p style="font-weight: bold;">The GDA shall ensure that the customer is informed or reminded of:</p>
                    <ol>
                        <li>What the Green Deal Assessment is for and how it can be used to obtain a quote for a Green Deal Plan.</li>

                        <li>How long the visit is likely to take and, if it requires more than one GDA or more than one visit, who each GDA is and what they will be responsible for?</li>

                        <li>What organisation the GDA(s) are working for and whether they are operating independently or tied to any Green Deal Provider for the purposes of that assessment.</li>

                        <li>Any charges associated with the assessment and on what basis they are being charged.</li>

                        <li>Clarify that, in cases where the customer has requested any other services that fall outside the Service described in this Specification, that these services are not part of the Green Deal Assessment, may not be impartial and are not subject to certification under this Specification.</li>

                        <li>If, where appropriate, an existing EPC certificate has been identified and whether the EPC is valid and suitable or a new EPC will be produced.</li>

                        <li>The scope of the assessment and the visual inspection/access that it requires, including information recorded for monitoring and compliance purposes (such as photographs and site notes).</li>
                        <li>What information will be required from the customer (e.g. historic energy use information to allow the occupancy assessment to be undertaken), what it will be used for and who will have access to the information recorded.</li>

                        <li>What the outputs of the assessment will be e.g. provision of the Green Deal Advice Report and the expected timing of those outputs.</li>

                        <li>Whether there are any potential subsidies available (subject to meeting any eligibility criteria).</li>

                        <li>How they can contact the ESAS in England and Wales or the ESSAC network in Scotland to find out about subsidies and obtain any further relevant advice.</li>

                        <li>The GDA shall take questions from the customer, and record any, which are material to the provision of the Green Deal Advice Service.</li>
                    </ol>



                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitNine" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptNine == true" class="form-group" id="questionNine" style=" margin-top: 95px;">
                        <label >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerNine" type="text" class="form-control" v-model="answerNine" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousNine" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerNine.toLowerCase() == 'yes'" id="buttonNine" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextNine">Next</button></li>
                        </ul>
                    </nav>
                </div>


                <div v-if="ten == true">

                    <h2>Information Collection</h2>

                    <ul>
                        <li>The Green Deal Assessor shall check that a valid domestic EPC is lodged.</li>

                        <li>In cases where an existing valid domestic EPC is deemed to be inaccurate, or not wholly applicable, to the property on the day of the Green Deal Assessment visit, the Assessor will produce a new EPC.</li>

                        <li>In cases where no valid domestic EPC exists for the property, or where it is not possible to retrieve the valid domestic EPC data from the Registry, the GDA shall use the RdSAP assessment procedure to produce and lodge a new domestic EPC.</li>

                        <li>The GDA shall use Approved Software to carry out the Occupancy Assessment (OA).</li>

                        <li>Explain to the customer the purpose and scope of the Occupancy Assessment and associated advice if the customer requests more information than has already been provided.</li>

                        <li>Ask the Occupier the questions mandated in the Approved Software and enter data as required.</li>

                        <li>Identify the actual energy use for the household as reflected in existing energy bills.</li>

                        <li>Make an assessment of whether the standard predictions in the EPC for the property reflect actual use by the current householder, or whether they are higher or lower than typical use.</li>

                        <li>Explain the results of the OA, in particular the GDA must explain the household factors that make a difference e.g. number of occupants, hours at home each day, thermostat setting and annual energy bill.</li>

                        <li>Make an assessment of the likely suitability of Green Deal package to the current householder and communicate this.</li>

                        <li>Discuss possible packages of measures appropriate to the customer and potential energy savings.</li>

                        <li>Explain to the householder any ways to save today and other ways to avoid waste in the home suggested on the Occupancy Assessment.</li>

                        <li>Provide behavioural advice on any other free and low cost ways to reduce energy use, which are relevant to the customer.</li>

                        <li>Explain what the Green Deal Improvement Package Tool does and that the package of measures chosen in the Green Deal Advice Report can be adjusted later by a Green Deal Provider or Green Deal Assessor without needing to re-do the assessment.</li>

                        <li>Where the property is unoccupied, the GDA shall use the input values for a typical household living in that property, as provided for by the Approved Software.</li>

                        <li>Explain what possible subsidies may be available to domestic customers at the current time i.e. ECO.</li>

                        <li>Explain the availability of relevant incentives, and where the customer can find out more about them.</li>

                        <li>Guide the customer to further sources of advice (usually the ESAS in England and Wales or the ESSAC network in Scotland) if he/she is unable to answer a particular question.</li>
                    </ul>




                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitTen" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptTen == true" class="form-group" id="questionTen" style=" margin-top: 95px;">
                        <label >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerTen" type="text" class="form-control" v-model="answerTen" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousTen" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerTen.toLowerCase() == 'yes'" id="buttonTen" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextTen">Next</button></li>
                        </ul>
                    </nav>
                </div>


                <div v-if="eleven == true">

                    <h2>Providing Initial Feedback</h2>

                    <ul>
                        <li>At the end of the Green Deal Assessment, the GDA shall present the indicative finding and recommendations generated by Approved Software to the customer, including the impact of the specific occupancy patterns and use will have on energy savings and the recommendations arising from the EPC.</li>

                        <li>For complex and non-domestic assessments it may not be possible to present findings during the assessment visit. In such cases the organisation shall ensure follow up advice is provided with the Green Deal Advice Report.</li>

                        <li>The Green Deal Assessor shall carry out the activities in this clause before concluding the assessment visit.</li>

                        <li>Ask the customer if they have any questions or feedback regarding the Green Deal Assessment visit and the recommendations discussed.</li>

                        <li>Explain to the customer that<ol>
                            <li>If any changes are made to the property after the Green Deal Assessment visit which might affect the recommendations or estimated energy bill savings in the final Green Deal.</li>
                            <li>Advice Report, a Green Deal Provider may not be able to use the Green Deal Advice Report to provide a quote for a Green Deal Plan.</li>
                            <li>Relevant post-assessment changes would include the installation of energy efficiency improvements, or any structural additions or alterations that would change the energy demand for the building.</li>
                            <li>Inform the customer who they can contact if they have any follow up questions once they receive the final Green Deal Advice Report.</li></ol></li>

                    </ul>



                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitEleven" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptEleven == true" class="form-group" id="questionEleven" style=" margin-top: 95px;">
                        <label >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerEleven" type="text" class="form-control" v-model="answerEleven" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousEleven" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerEleven.toLowerCase() == 'yes'" id="buttonEleven" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextEleven">Next</button></li>
                        </ul>
                    </nav>
                </div>


                <div v-if="twelve == true">

                    <h2>Post Green Deal Assessment Visit</h2>

                    <ul>
                        <li>Following the Green Deal Assessment the Organisation shall carry out the activities in this clause.</li>

                        <li>Ensure that site notes, photographs and any other supporting evidence relating to the Occupancy Assessment are stored for records.</li>

                        <li>Ensure that the customer has received the final Green Deal Advice Report according to any requirements in the Framework Regulations or Green Deal Code of Practice.</li>

                        <li>Ensure that the customer has been given the opportunity to discuss the Green Deal Advice Report with the GDA who produced it, or if in exceptional circumstances that is not possible, with another GDA who is competent to interpret the GDAR for that customer.</li>
                    </ul>




                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitTwelve" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptTwelve == true" class="form-group" id="questionTwelve" style=" margin-top: 95px;">
                        <label >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerTwelve" type="text" class="form-control" v-model="answerTwelve" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousTwelve" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerTwelve.toLowerCase() == 'yes'" id="buttonTwelve" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextTwelve">Next</button></li>
                        </ul>
                    </nav>
                </div>


                <div v-if="thirteen == true">

                    <h2>Tied Assessors and Independent Assessors</h2>

                    <p>A Tied Assessor works for a single Green Deal Provider and is likely to be employed whereas an Independent Assessor operates their own separate and independent business as a sole trader/partnership or limited company and has no direct connection with one individual organisation. </p>

                    <p>It should be made clear to the customer whether or not the Assessor is acting independently of, or tied to, any organisation to obtain a quote for a Green Deal Plan. The customer for example is under no obligation to apply for a quote from a Green Deal Provider who has used a Tied Assessor.</p>

                    <p>Tied Assessors should remain impartial when carrying out Green Deal assessments, in accordance with the Green Deal Assessor Services Specification.</p>

                    <p>The Green Deal Assessment shall provide impartial advice to customers as prescribed by law in the Energy Act 2011, the Framework Regulations and the Green Deal Code of Practice.</p>

                    <p>The customer who has commissioned the assessment must receive the following information in writing prior to a Green Deal Assessment visit to the property:</p>

                    <p>The background to the Green Deal Assessment and what is necessary to take out a Green Deal Plan; the basic scope and process of the Green Deal Assessment; what the customer can expect will be involved (dependent on the sector and complexity of the property) including:</p>

                    <ol>
                        <li>That the output of the assessment will be a Green Deal Advice Report which is portable, ie it may be taken to any Green Deal Provider to request a quote for the installation of measures;</li>

                        <li>Which organisation the Green Deal Assessor, who carries out the assessment, would be working for, and whether they are operating independently or tied to any Green Deal Provider for the purposes of the assessment;</li>

                        <li>Any charges and terms and conditions associated with the provision of the service and how they should be paid/met;</li>

                        <li>Who will have access to the information collected as part of the Green Deal Assessment.</li>
                    </ol>






                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitThirteen" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptThirteen == true" class="form-group" id="questionThirteen" style=" margin-top: 95px;">
                        <label >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerThirteen" type="text" class="form-control" v-model="answerThirteen" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousThirteen" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerThirteen.toLowerCase() == 'yes'" id="buttonThirteen" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextThirteen">Next</button></li>
                        </ul>
                    </nav>
                </div>


                <div v-if="fourteen == true">

                    <h2>Additional Requirements of a Green Deal Assessor</h2>

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
                        <a href="#" v-on:click="submitFourteen" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptFourteen == true" class="form-group" id="questionFourteen" style=" margin-top: 95px;">
                        <label >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerFourteen" type="text" class="form-control" v-model="answerFourteen" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousFourteen" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerFourteen.toLowerCase() == 'yes'" id="buttonFourteen" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextFourteen">Next</button></li>
                        </ul>
                    </nav>
                </div>


                <div v-if="fifteen == true">


                    <h2>Visiting Consumers in their Home</h2>

                    <p>If your activities involve visiting a consumer in their home, then you are expected to have tight controls and systems in place.</p>

                    <p>For example:</p>
                    <ul style="color: #f00;">
                        <li style="color: #f00;">You must obtain consent for the visit from the consumer;</li>

                        <li style="color: #f00;">For the consent to be given, the information to the customer must have been given in a clear, concise and fair way by the sales person;</li>

                        <li style="color: #f00;">You need to identify the person and the firm at the outset and make clear the purpose of the communication;</li>

                        <li style="color: #f00;">Ensure an appropriate time of day for the visit;</li>

                        <li style="color: #f00;">State the services the firm is authorised to offer in relation to the Green Deal;</li>

                        <li style="color: #f00;">State any relationship which is relevant to the services offered. In other words make it clear if you are acting as an associate.</li>
                    </ul>

                        <p>It is also important that you can evidence this, and so make sure it is written down.</p>

                        <p>Staff visiting consumers in their home will also need to undergo a Disclosure and Barring Service (DBS) check to prevent unsuitable people from working with vulnerable groups. </p>




                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitFifteen" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptFifteen == true" class="form-group" id="questionFifteen" style=" margin-top: 95px;">
                        <label >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerFifteen" type="text" class="form-control" v-model="answerFifteen" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousFifteen" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerFifteen.toLowerCase() == 'yes'" id="buttonFifteen" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextFifteen">Next</button></li>
                        </ul>
                    </nav>
                </div>


                <div v-if="sixteen == true">

                    <h2>Vulnerable Customers</h2>

                    <p>It is likely that during the course of your business you meet a vulnerable customer. You need to make sure that you can recognise the signs and signals at the beginning and then have a process to deal with the circumstances of the individuals.</p>

                    <p>Firstly, let’s identify what is meant by a vulnerable customer?</p>

                    <p>These may be people affected by Dementia. In the UK for example 800,000 people live with dementia and this is expected to double in the next 40 years.</p>

                    <p>It could perhaps be somebody who has suffered a bereavement who isn’t really in the right state of mind, particularly when it comes down to making complex financial decisions.</p>

                    <p>It could even be people perhaps preparing parents to go into a care home and having to pay the fees associated with that.</p>

                    <p>It comes down to leading the way in which vulnerable people are dealt with.</p>





                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitSixteen" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptSixteen == true" class="form-group" id="questionSixteen" style=" margin-top: 95px;">
                        <label >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerSixteen" type="text" class="form-control" v-model="answerSixteen" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousSixteen" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerSixteen.toLowerCase() == 'yes'" id="buttonSixteen" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextSixteen">Next</button></li>
                        </ul>
                    </nav>
                </div>


                <div v-if="seventeen == true">
                    <h2>Other people who may be affected by the following:</h2>

                    <ul style="width: 50%; float: left; display: inline;">
                        <li style="list-style: none; color: #f00">Mental Health Issues</li>
                        <li style="list-style: none; color: #f00">Serious or Chronic Illness</li>
                        <li style="list-style: none; color: #f00">Non-English Speakers</li>
                        <li style="list-style: none; color: #f00">Recently Bereaved</li>
                        <li style="list-style: none; color: #f00">Bi-Polar</li>
                        <li style="list-style: none; color: #f00">Post-Traumatic Stress Disorder</li>
                    </ul>
                    <ul style="width: 50%; float: left; display: inline;">
                        <li style="list-style: none; color: #f00">Experiencing Serious Stressful Events</li>
                        <li style="list-style: none; color: #f00">Deaf/Blind</li>
                        <li style="list-style: none; color: #f00">Age awareness</li>
                        <li style="list-style: none; color: #f00">Under the influence of drink or drugs</li>
                    </ul>
                    <br style="clear: both;">

                    <h2>Characteristics to look out for may include the following:</h2>

                    <p style="color: #f00">The customer may repeat themselves</p>
                    <p style="color: #f00">Say “YES” before you have explained everything</p>
                    <p style="color: #f00">Ask unrelated questions</p>
                    <p style="color: #f00">Seem distracted or wander off the topic</p>
                    <p style="color: #f00">They tell you they have a history of mental and health issues</p>
                    <p style="color: #f00">May seem agitated or confused about you being there</p>
                    <p style="color: #f00">Appear not to understand everything even when you have explained something a couple of times</p>



                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitSeventeen" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptSeventeen == true" class="form-group" id="questionSeventeen" style=" margin-top: 95px;">
                        <label >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerSeventeen" type="text" class="form-control" v-model="answerSeventeen" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousSeventeen" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerSeventeen.toLowerCase() == 'yes'" id="buttonSeventeen" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextSeventeen">Next</button></li>
                        </ul>
                    </nav>
                </div>


                <div v-if="eighteen == true">


                    <h2>What to do under any of these circumstances?</h2>

                    <p>There are actions that you should consider, and although not an exhaustive list, sometimes common sense needs to be applied. For example:</p>

                    <p style="color: #f00;">Ask the customer to invite a friend or family member to be there</p>

                    <p style="color: #f00;">Leave the appointment</p>

                    <p style="color: #f00;">Re-appoint when they have a friend or family member to sit with them</p>

                    <p style="color: #f00;">Document the response of the customer and why you consider they may be vulnerable</p>

                    <p style="color: #f00;">Ask the customer to repeat back to you their understanding of the sale and product</p>

                    <p style="color: #f00;">Don’t rush, speak clearly always remain professional</p>

                    <p style="color: #f00;">Please advise your line manager</p>

                    <p>Remember it could be your relative or a close friend and so treat the customer with respect and don’t always just go for the sale. </p>

                    <p>By the way, you should not assume that a person who is vulnerable or who has a mental capacity issue cannot make an informed decision as this could be seen as discrimination.</p>




                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitEighteen" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptEighteen == true" class="form-group" id="questionEighteen" style=" margin-top: 95px;">
                        <label >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerEighteen" type="text" class="form-control" v-model="answerEighteen" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousEighteen" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerEighteen.toLowerCase() == 'yes'" id="buttonEighteen" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextEighteen">Next</button></li>
                        </ul>
                    </nav>
                </div>


                <div v-if="nineteen == true">

                    <h2>Data Protection</h2>

                    <p>The Data Protection Act defines UK law on the processing of personal data. Personal data is any data you collect that can identify a living individual.</p>

                    <p>A Green Deal Participant must comply with the requirements of the Data Protection Act 1998 in respect of personal data obtained pursuant to, or in connection with, the Green Deal.</p>

                    <p>You have a legal obligation to protect your customer’s personal information and if you have not already done so it is recommended that you register with ICO which stands for the Information Commissioners Office and deals with issues about data protection.</p>

                    <p>Any obligation in the Green Deal Code of Practice to collect, store or disclose information which contains personal data has effect subject to the Data Protection Act 1998.</p>

                    <p>All the data by the Assessor and the GD organisation should be held for a minimum of 6 years.</p>




                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitNineteen" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptNineteen == true" class="form-group" id="questionNineteen" style=" margin-top: 95px;">
                        <label >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerNineteen" type="text" class="form-control" v-model="answerNineteen" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousNineteen" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerNineteen.toLowerCase() == 'yes'" id="buttonNineteen" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextNineteen">Next</button></li>
                        </ul>
                    </nav>
                </div>


                <div v-if="twenty == true">

                    <h2>Anti-Money Laundering or AML</h2>

                    <p>Money laundering means exchanging money or assets that were obtained criminally for money or other assets that are “clean”. The clean money or assets don’t have an obvious link with any criminal activity. Money laundering also includes money that’s used to fund terrorism, however it’s obtained.</p>

                    <p>The Proceeds of Crime Act contains the principal money laundering legislation in the UK and deals with a wide range of matters relevant to UK law on proceeds of crime issues.</p>

                    <p>You must be aware of AML and put in place certain control measures in order to prevent you or your business being used for money laundering which includes nominating a person to inform us if you know or suspect that another person is laundering money or financing terrorism. You don’t need any proof or evidence just a reasonable suspicion.</p>





                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitTwenty" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptTwenty == true" class="form-group" id="questionTwenty" style=" margin-top: 95px;">
                        <label >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerTwenty" type="text" class="form-control" v-model="answerTwenty" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousTwenty" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerTwenty.toLowerCase() == 'yes'" id="buttonTwenty" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextTwenty">Next</button></li>
                        </ul>
                    </nav>
                </div>


                <div v-if="twentyone == true">

                    <h2>Complaints</h2>

                    <p>A complaint is an indication of dissatisfaction and can be made by a customer in writing or verbally.</p>

                    <p>There are strict rules and requirements around how complaints about green deal and financial products and services are handled.</p>

                    <p>There are two complaints procedures, one relating specifically to the Green Deal Code of Practice and one relating to the Financial Conduct Authority. You can have a complaint that does not directly relate to the financing of a green deal plan and could be in connection with the conduct of an assessor for example and so two courses of handling a complaint are available.</p>

                    <p>In both of these instances there is an Alternative Dispute Resolution (ADR) – or arbitration – this became UK law on the 1st October 2015 for all businesses that sell to consumers. This means that when a matter remains in dispute, a firm is legally compelled to give the consumer the contact details to the Financial Ombudsman Service (FOS where the dispute relates to finance, or the Ombudsman Service where it is non-financial).</p>

                    <p>If you receive a complaint regarding green deal then you must pass it to the Green Deal Provider within the same business day that you receive it and complete any actions that you are given to solve a complaint in the timescale agreed at the time. A GDP must respond/acknowledge the complaint within 7 days and in writing.</p>

                    <p>Everyone involved must make reasonable efforts to settle the complaint or dispute about the product or service.</p>

                    <p>A Green Deal Assessor or Green Deal Installer must cooperate with any investigation into its activities.</p>





                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitTwentyone" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptTwentyone == true" class="form-group" id="questionTwentyone" style=" margin-top: 95px;">
                        <label >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerTwentyone" type="text" class="form-control" v-model="answerTwentyone" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousTwentyone" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerTwentyone.toLowerCase() == 'yes'" id="buttonTwentyone" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextTwentyone">Next</button></li>
                        </ul>
                    </nav>
                </div>


                <div v-if="twentytwo == true">

                    <h2>Non-Compliance</h2>

                    <p>The Green Deal Provider will try to resolve any non-compliance issues and will use its best endeavours to work with suppliers to resolve matters and encourage everyone to do their best and work within the Green Deal Code of Practice and FCA Regulations. Any non-compliance will be documented, filed and dated. In the unlikely event that non-compliance is of such a serious nature that we cannot reach a suitable resolution then as a last resort Disciplinary Action may have to be taken and reported to the relevant Green Deal Certification Body.</p>

                    <p>I understand and accept that I have completed this training course and that I understand all of its content and then I must comply with the Green Deal Code of Practice when carrying out Green Deal assessments and act in accordance with applicable consumer protection legislation and the Frameworks Regulations and produce accurate Green Deal Advice Reports.</p>

                    <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                    <div class="form-group">
                        <a href="#" v-on:click="submitTwentytwo" class="btn btn-success col-xs-12" >Accept Page</a>
                    </div>
                    <div v-if="acceptTwentytwo == true" class="form-group" id="questionTwentytwo" style=" margin-top: 95px;">
                        <label >Short question</label>
                        <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                        <input name="answerTwentytwo" type="text" class="form-control" v-model="answerTwentytwo" placeholder="Answer">
                    </div>
                    <nav>
                        <ul class="pager">
                            <li style="display: inline;"><a v-on:click="previousTwentytwo" class=" col-xs-3"  href="#">Previous</a></li>
                            <li v-if="answerTwentytwo.toLowerCase() == 'yes'" id="buttonTwentytwo" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextTwentytwo">Next</button></li>
                        </ul>
                    </nav>
                </div>


                <div v-if="twentythree == true">
                    <div>
                        <h2>Summary</h2>
                        <p>I understand and accept that I have completed this training course and that I understand all of its content and then I must comply with the Green Deal Code of Practice when carrying out Green Deal assessments and act in accordance with applicable consumer protection legislation and the Frameworks Regulations and produce accurate Green Deal Advice Reports.</p>
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


                ten: false,
                acceptTen: false,
                answerTen: '',


                eleven: false,
                acceptEleven: false,
                answerEleven: '',


                Twelve: false,
                acceptTwelve: false,
                answerTwelve: '',


                thirteen: false,
                acceptThirteen: false,
                answerThirteen: '',


                fourteen: false,
                acceptFourteen: false,
                answerFourteen: '',


                fifteen: false,
                acceptFifteen: false,
                answerFifteen: '',


                sixteen: false,
                acceptSixteen: false,
                answerSixteen: '',


                seventeen: false,
                acceptSeventeen: false,
                answerSeventeen: '',


                eighteen: false,
                acceptEighteen: false,
                answerEighteen: '',


                nineteen: false,
                acceptNineteen: false,
                answerNineteen: '',


                twenty: false,
                acceptTwenty: false,
                answerTwenty: '',


                twentyone: false,
                acceptTwentyone: false,
                answerTwentyone: '',


                twentytwo: false,
                acceptTwentytwo: false,
                answerTwentytwo: '',


                twentythree: false,
                acceptTwentythree: false,
                answerTwentythree: '',



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
                this.ten = true;
            },
            previousNine: function(){
                this.nine = false;
                this.eight = true;
            },


            submitTen: function(){
                this.acceptTen = true;
            },
            nextTen: function(){
                this.acceptTen = false;
                this.answerTen = '';
                this.ten = false;
                this.eleven = true;
            },
            previousTen: function(){
                this.ten = false;
                this.nine = true;
            },


            submitEleven: function(){
                this.acceptEleven = true;
            },
            nextEleven: function(){
                this.acceptEleven = false;
                this.answerEleven = '';
                this.eleven = false;
                this.twelve = true;
            },
            previousEleven: function(){
                this.eleven = false;
                this.ten = true;
            },


            submitTwelve: function(){
                this.acceptTwelve = true;
            },
            nextTwelve: function(){
                this.acceptTwelve = false;
                this.answerTwelve = '';
                this.twelve = false;
                this.thirteen = true;
            },
            previousTwelve: function(){
                this.twelve = false;
                this.eleven = true;
            },


            submitThirteen: function(){
                this.acceptThirteen = true;
            },
            nextThirteen: function(){
                this.acceptThirteen = false;
                this.answerThirteen = '';
                this.thirteen = false;
                this.fourteen = true;
            },
            previousThirteen: function(){
                this.thirteen = false;
                this.twelve = true;
            },


            submitFourteen: function(){
                this.acceptFourteen = true;
            },
            nextFourteen: function(){
                this.acceptFourteen = false;
                this.answerFourteen = '';
                this.fourteen = false;
                this.fifteen = true;
            },
            previousFourteen: function(){
                this.fourteen = false;
                this.thirteen = true;
            },


            submitFifteen: function(){
                this.acceptFifteen = true;
            },
            nextFifteen: function(){
                this.acceptFifteen = false;
                this.answerFifteen = '';
                this.fifteen = false;
                this.sixteen = true;
            },
            previousFifteen: function(){
                this.fifteen = false;
                this.fourteen = true;
            },


            submitSixteen: function(){
                this.acceptSixteen = true;
            },
            nextSixteen: function(){
                this.acceptSixteen = false;
                this.answerSixteen = '';
                this.sixteen = false;
                this.seventeen = true;
            },
            previousSixteen: function(){
                this.sixteen = false;
                this.fifteen = true;
            },


            submitSeventeen: function(){
                this.acceptSeventeen = true;
            },
            nextSeventeen: function(){
                this.acceptSeventeen = false;
                this.answerSeventeen = '';
                this.seventeen = false;
                this.eighteen = true;
            },
            previousSeventeen: function(){
                this.seventeen = false;
                this.sixteen = true;
            },


            submitEighteen: function(){
                this.acceptEighteen = true;
            },
            nextEighteen: function(){
                this.acceptEighteen = false;
                this.answerEighteen = '';
                this.eighteen = false;
                this.nineteen = true;
            },
            previousEighteen: function(){
                this.eighteen = false;
                this.seventeen = true;
            },


            submitNineteen: function(){
                this.acceptNineteen = true;
            },
            nextNineteen: function(){
                this.acceptNineteen = false;
                this.answerNineteen = '';
                this.nineteen = false;
                this.twenty = true;
            },
            previousNineteen: function(){
                this.nineteen = false;
                this.eighteen = true;
            },


            submitTwenty: function(){
                this.acceptTwenty = true;
            },
            nextTwenty: function(){
                this.acceptTwenty = false;
                this.answerTwenty = '';
                this.twenty = false;
                this.twentyone = true;
            },
            previousTwenty: function(){
                this.twenty = false;
                this.nineteen = true;
            },


            submitTwentyone: function(){
                this.acceptTwentyone = true;
            },
            nextTwentyone: function(){
                this.acceptTwentyone = false;
                this.answerTwentyone = '';
                this.twentyone = false;
                this.twentytwo = true;
            },
            previousTwentyone: function(){
                this.twentyone = false;
                this.twenty = true;
            },


            submitTwentytwo: function(){
                this.acceptTwentytwo = true;
            },
            nextTwentytwo: function(){
                this.acceptTwentytwo = false;
                this.answerTwentytwo = '';
                this.twentytwo = false;
                this.twentythree = true;
            },
            previousTwentytwo: function(){
                this.twentytwo = false;
                this.twentyone = true;
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


                this.twentythree = false;
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

                axios.post('/GDACourse', formData, config);

            },


        },

        mounted() {
        }
    }
</script>
