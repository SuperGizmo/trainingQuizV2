<template>
<div class="col-xs-12 col-sm-9">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Green Deal General Training Course {{ name }}</h3>
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
                <p>This training course is designed to provide you with an overview of the green deal and the many procedures and areas that are involved so that you have a better understanding of your role and responsibilities. It is not exhaustive and it does not cover for example the workings of any individual software system, processing of green deal paperwork, log in details, payment processes etc., which need to be discussed directly with your Green Deal Provider.</p>


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
                <h2>What is the Green Deal?</h2>
                <p>
                    The Green Deal was a government scheme launched in 2013 that provided loans to households to finance energy-efficient home improvements. The loan aimed to be paid back through the savings made on energy bills.
                </p>

                <p>
                    The Green Deal scheme was implemented and run by the Green Deal Finance Company (&ldquo;GDFC&rdquo;) with the aim to help spread payments for the upfront cost of energy-efficiency measures, such as solid wall insulation, boilers and double glazing.
                </p>

                <p>
                    The GDFC was a not-for-profit company aimed to support the Green Deal by buying the loans from Green Deal Providers, who agreed loans to consumers. This allowed Green Deal Providers to sell more energy efficient products, whilst not having to finance the loans that they originated. The GDFC was part financed by DECC and in July 2015 the Government said that it would provide no further funding to the GDFC and so Green Deal was suspended, although all the systems remained in place.
                </p>

                <p>
                    On the 15th January 2017, Greenstone Finance and Aurium Capital Markets (&rdquo;Aurium&ldquo;) announced the acquisition of the business and assets of the GDFC, as well as its existing loan book and under the new ownership Greenstone Finance has assembled a new management team to run the business and operations for the GDFC and will continue to service the existing Green Deal loans and commence financing of new Green Deal loans.
                </p>

                <p>
                    The first &rdquo;new&ldquo; Green Deal Plan was processed on the 18th May 2017.
                </p>
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
                <h2>Main Benefits of a Green Deal Plan</h2>
                <p>
                    The following are the <strong>main benefits</strong> for customers financing their home energy improvements through a Green Deal Plan:
                </p>
                <ul>
                    <li>They will benefit from a warmer and more energy efficient home, with reduced upfront costs;</li>
                    <li>Plan repayments are hassle-free because they are added automatically to their existing electricity bill;</li>
                    <li>The plan is linked to their property, so when they move house the plan remains with the property it is benefitting;</li>
                    <li>The interest rates charged are competitive;</li>
                    <li>The eligibility criteria are simple;</li>
                    <li>The cost of the loan will, in part, be paid for via the energy savings achieved;</li>
                    <li>Depending on the energy efficiency improvements being made, the repayment term may be up to 25 years enabling more affordable monthly repayments;</li>
                    <li>All Green Deal Plan home improvements are guaranteed for the expected lifetime of the measure.</li>
                </ul>
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
                <h2>Key Points of a Green Deal Plan</h2>
                <ol>
                    <li>The improvements to the home will be financed through a Green Deal Plan;</li>
                    <li>A Green Deal Plan is a loan attached to an electricity meter rather than to an individual;</li>
                    <li>Plan repayments are the obligation of the person who is the Bill Payer at any point in time and if the individual who pays the electricity bill moves out, the Green Deal Plan remains behind, attached to the meter. The new Bill Payer assumes responsibility for ongoing Plan repayments, but importantly, not for any arrears built-up by other Bill Payers;</li>
                    <li>If the owner decides to sell the property, they are required to disclose to the buyer if a Green Deal Plan is attached to the property.  Similarly, a landlord renting to a new tenant must do the same;</li>
                    <li>The estimated plan repayments should be less than, or equal to, the expected monthly energy savings which means that the energy bills overall should not increase, however the energy savings will depend on the energy usage within the home and this is only an estimate. The actual energy bill will depend on the energy tariff, usage, the weather temperature etc.</li>
                    <li>As the repayments for this plan are made through the electricity bill, the bill payer will need to go through a credit application check to ensure that they are able to cover the repayments;</li>
                    <li>An independent assessor will contact them, as part of the post installation quality checks under the Green Deal Plan, to solicit a customer’s feedback regarding the installed measure.</li>
                    <li>An additional page is added to the EPC, which clearly shows that a property has a GD plan. The land registry will also show that the property has got a GD plan.</li>
                </ol>

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
                <h2>Electricity Suppliers and Selling a &ldquo;green deal&rdquo; property</h2>
                <p>
                    If the homeowner sells their home the existence of the Green Deal must be disclosed to the buyer. If the buyer of the home does not feel comfortable taking over the Green Deal loan, they might want to renegotiate the terms of sale or the homeowner could consider repaying the Green Deal off early as part of the conveyance. If someone has just moved into a house with a Green Deal attached to it, the person who pays the electricity bill pays the money back. So, if someone is a tenant in a rented property, they’ll be paying back the costs - not the landlord. This is because the tenant can expect to benefit from lower energy costs.  If someone moves into a property with a Green Deal, the landlord or seller must show a copy of the Energy Performance Certificate - this will explain what improvements have been made and how much is needed to repay.
                </p>
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
                <h2>Switching Electricity Suppliers</h2>
                <p>
                    In most cases customers can still switch energy suppliers if they have taken out a Green Deal loan, as all of the big providers (British Gas, EDF, Eon, Npower, Scottish Power and SSE) are part of the scheme. There are a handful of small energy suppliers that can't be switched to, as they are not part of the scheme, and so the customer should check before switching. 
                </p>
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
                <h2>What is a Green Deal Provider?</h2>
                <p>Green Deal Providers arrange Green Deal Plans, provide finance, and arrange for the installation of the agreed energy efficiency improvements through an authorised installer.</p>

                <p>
                    The Green Deal Provider is responsible for:
                </p>

                <ul>
                    <li>Offering a Green Deal Plan to customers, based on recommendations from an accredited Assessor Organisation.</li>
                    <li>Handling general customer queries (not including complaints).</li>
                    <li>Arranging for the installation of energy efficiency improvements, carried out by an authorised Installer; and</li>
                    <li>Ongoing obligations in relation to Green Deal Plans, including providing an Insurance Backed Guarantee for each measure, dealing with customer complaints and providing information when a new bill payer moves into a property with a Green Deal.</li>
                </ul>

                <p>
                    The Green Deal Plan sets out the financial terms of the agreement and includes consumer protections, such as warranties, to cover the energy efficiency improvements and installation. Only an authorised Provider can offer a Green Deal Plan.
                </p>

                <p>
                    Green Deal Providers must operate to high standards and they will ultimately speak to the customer in order to ensure they understand that they are entering into a credit agreement and to explain and discuss the payment plan, interest rate, APR, term of the loan, savings estimates, cooling off period, golden rule and give them the chance to ask any questions.
                </p>

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
                <h2>What is a Green Deal Installer?</h2>
                <p>
                    Once a property has had an assessment and the finance for the measures has been approved, the next step will be installation of the Green Deal measure(s) as agreed.
                </p>
                <p>
                    Only an authorised Green Deal Installer can install energy efficiency improvements under the Green Deal finance mechanism. Installers may specialise in one or multiple measures and need to be PAS2030 accredited.
                </p>

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
                <h2>Arranging for the Installation of the Energy Efficient Measure(s)</h2>
                <p>
                    This is carried out by the Green Deal Installer by following a sequence of actions undertaken in installing one or more EEM products or systems which includes, but is not limited to the following:
                </p>
                <ul>
                    <li>EEM Design</li>
                    <li>Location Specific EEM design</li>
                    <li>Installation Method Statement</li>
                    <li>Installation Process Management</li>
                    <li>Installation Equipment and Tools</li>
                    <li>Calibration</li>
                    <li>Handling and Storage of Materials and Supplies</li>
                    <li>Engagement of Sub Contractors</li>
                    <li>Commissioning</li>
                    <li>Handover</li>
                    <li>Installation Process Management and Records</li>
                    <li>Claims of Conformity</li>
                    <li>Process Continuity Plan</li>
                    <li>Internal Audit and Corrective Plan</li>
                </ul>

                <p>
                    Only authorised Installers will be able to identify themselves as “Green Deal Installers” and use the Green Deal Quality Mark.
                </p>

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
                <h2>What is a Green Deal Assessor or Advisor?</h2>
                <p>
                    A Green Deal assessment is the first step for consumers to enter into a Green Deal Plan, and can only be carried out by an authorised Green Deal Assessor. Following the Green Deal Assessment visit, a Green Deal Advice Report is produced which outlines the energy efficiency measures that can form a basis for the Green Deal Improvement Package.
                </p>
                <p>
                A Green Deal Assessor is a Green Deal Approved organisation that is certified by an accredited Green Deal Certification Body against the Assessor Specification. A Green Deal Assessor can be a sole trader but they must still be certified by a Green Deal Certification Body.
                </p>
                <p>
                A Green Deal Assessor may work independently or be part of a larger organisation. All Green Deal Assessors must comply with the Green Deal Code of Practice at all times and ensure that all Green Deal Advisors working on their behalf also comply with the relevant requirements.
                </p>

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
                <h2>Tied Assessors and Independent Assessors</h2>
                <p>
                    A Tied Assessor works for a single Green Deal Provider and is likely to be employed whereas an Independent Assessor operates their own separate and independent business as a sole trader/partnership or limited company and has no direct connection with one individual organisation.
                </p>
                <p>
                    It should be made clear to the customer whether or not the Assessor is acting independently of, or tied to, any organisation to obtain a quote for a Green Deal Plan. The customer for example is under no obligation to apply for a quote from a Green Deal Provider who has used a Tied Assessor.
                </p>
                <p>
                    Tied Assessors should remain impartial when carrying out Green Deal assessments, in accordance with the Green Deal Assessor Services Specification.
                </p>
                <p>
                    The Green Deal Assessment shall provide impartial advice to customers as prescribed by law in the Energy Act 2011, the Framework Regulations and the Green Deal Code of Practice.
                </p>

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
                <h2>What is a GDAO or Green Deal Assessor Organisation?</h2>
                <p>
                    The role of the GDAO is very similar to the role of the Accreditation Scheme for Domestic or Commercial Energy Assessors.
                </p>
                <p>
                    GDAOs are responsible for ensuring that the GDAs that are contracted to them, are suitably qualified, have valid insurance for their GDAs.
                </p>
                <p>
                    GDAO must also have robust and well documented management systems in place, undertake audits (both on the work of the GDA and on internal processes) and deal with customer complaints.
                </p>
                <p>
                    The function of the GDAO is to undertake management and monitoring to ensure the high-quality and complaint delivery of Green Deal advice.
                </p>
                <p>
                    The GDAO and its Green Deal Advisors will undergo surveillance visits which include:
                </p>

                <ol>
                    <li>Witnessed assessment of the Green Deal Advice Service;</li>
                    <li>Annual surveillance of management systems and processes;</li>
                    <li>Green Deal Advice Report audits undertaken remotely.</li>
                </ol>

                <p>
                    GDAO audits the GDA.
                </p>
                <p>
                    Certification scheme audits the GDAO.
                </p>


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
                <h2>4 simple steps to getting a Green Deal Plan</h2>

                <ol>
                    <li><strong>Assessment</strong> - A customer will need to get a Green Deal Assessment carried out on their home, by a Green Deal Assessor. The Assessor will produce a Green Deal Advice Report consisting of an Occupancy Assessment (OA) and an Energy Performance Certificate (EPC) recommending energy saving improvements and indicating whether they are expected to pay for themselves through reduced energy bills. The customer simply makes an appointment for a time that suits them best and an Assessor will visit their property to carry out an energy-efficient assessment. During the assessment, the assessor must mention to the customer that he is getting paid for this assessment, this is in line with the Code of Practice.</li>
                    <li><strong>The Plan</strong> – A Green Deal Provider will provide a quote for a Green Deal Plan, setting out the measures the customer has decided to have installed, the repayments and the interest rates that will be charged. If the customer is happy with the quote then the Green Deal Provider will help them complete the credit application for the Green Deal Plan.</li>
                    <li><strong>Installation</strong> – Once the credit application has been accepted, the customer will receive a Green Deal Plan Document pack which the customer will need to review, sign and return to the Green Deal Provider for the application to be finalised. Once finalised, the Green Deal Provider will arrange for one of the accredited Green Deal Installers to fit the energy efficient measures.</li>
                    <li><strong>Repayment</strong> – The Green Deal Plan repayments will automatically be added to the customer’s electricity bill allowing them to enjoy the benefits of the energy efficient improvements.</li>
                </ol>


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
                    <li>Maximum age of 75 years;</li>
                    <li>Property must be a fixed address in England, Wales or Scotland;</li>
                    <li>No County Court Judgments in the previous 2 years or bankruptcy in the previous 5 years;</li>
                    <li>Consent to having a credit check performed;</li>
                    <li>If a landlord, must receive consent from the tenant;</li>
                    <li>If a tenant, must receive permission from the landlord;</li>
                    <li>Should have a good credit history.</li>
                </ul>

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
                <h2>Permissions required when promoting or selling Green Deal finance?</h2>
                <p>If promoting and selling finance, authorisation is required in some form from the FCA as you are carrying out a regulated activity.</p>
                <p>You may require one of the following permissions:</p>
                <p>Full Permission Credit Broking<br />
                    Green Deal Broking<br />
                    Appointed Representative (AR)<br />
                    Introducer Appointed Representative (IAR)</p>
                <p>Or you could require NONE at all if you are not involved in the finance process.</p>
                <p>This is a complicated area and your exact relationship, approach and responsibilities to the green deal should be discussed with your Green Deal Provider.</p>

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
                <h2>What is the Green Deal Code of Practice?</h2>
                <p>
                    The Green Deal Code of Practice underpins the Green Deal scheme. This is the Code of Practice for Green Deal Providers, Green Deal Assessors, Green Deal Installers and Certification Bodies issued by the Secretary of State for Business, Energy and Industrial Strategy under regulation 10 of the Green Deal Framework (Disclosure, Acknowledgement, Redress etc.) Regulations 2012.
                    </p>
                <p>Each Provider is required to obtain Full Permission FCA Authorisation and pass a “Fitness Test” before they can be registered as being a participant in the Green Deal. Once registered, the Code is designed to ensure that all Green Deal participants operate fairly, transparently and effectively so that consumers signing up to the Green Deal can be confident that they are taking part in a properly regulated scheme that will provide them with real benefits.
                </p>
                <p>The key benefits of the Code are clear.
                </p>
                <p>For consumers, these include:</p>

                <ul>
                    <li>Confidence that the people they are dealing with have appropriate training, qualifications and customer service procedures in place; and</li>
                    <li>A clear process for dealing with complaints which includes a designated independent Green Deal Ombudsman.</li>
                </ul>

                <p>
                    For Green Deal Providers and Assessors, the key benefits include:
                </p>
                <ul>
                    <li>Participation in a robust scheme that stipulates high standards for all those involved;</li>
                    <li>Clear procedures for every stage; and</li>
                    <li>Use of Green Deal marketing material.</li>
                </ul>

                <p>Participants’ compliance with the Code is monitored through various methods, including compliance check visits, mystery shopping and analysis of complaints information.
                </p>

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
                <h2>What is the Green Deal Quality Mark?</h2>
                <p>
                    A Green Deal Participant or Certification Body must comply with any advertising and promotional advice provided within the Green Deal Quality Mark requirements and guidelines. It must use the Green Deal Quality Mark on identifying documentation and any marketing materials in relation to the Green Deal in accordance with the requirements of the Green Deal Quality Mark License and relevant guidance issued by the Secretary of State.
                </p>

                <p>The Quality Mark should not be used in a way that is misleading or inappropriate or that suggests it is authorised in relation to services or functions that are unrelated to the Green Deal or are not covered by its authorisation.
                </p>

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
                <h2>What are the Framework Regulations?</h2>
                <p>
                    These are regulations approved by parliament that create an authorisation regime to regulate the conduct of key players in the assessment, provision and installation of energy efficiency improvements under Green Deal Plans. The Regulations also include conditions that must be met when a Green Deal Plan is established; requirements to ensure that people moving into or acquiring an interest are made aware of a Green Deal plan in advance; and provision for enforcement.
                </p>

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
                <h2>What is the Green Deal Arrangement Agreement (GDAA)?</h2>
                <p>
                    The Green Deal Arrangements Agreement (GDAA) is a multi-party agreement between electricity suppliers and Green Deal Providers. It sets out the governance for payment collection and remittance of Green Deal charges. All Green Deal Providers must be a party to the GDAA in order to create Green Deal Plans.
                </p>

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
                <h2>What is the Golden Rule?</h2>
                <p>
                    The Golden Rule principle is that the amount of instalments should not exceed the estimated savings and duration of the charge must not exceed the estimated lifetime of the measure.
                </p>
                <h2>What is the Energy Company Obligation (ECO)?</h2>
                <p>
                    It is an obligation of a Green Deal Participant that they must inform customers that additional support in the form of subsidies for the installation of one or more improvements may be available under ECO funding for householders in receipt of certain income-related benefits and that further information on these offers and the eligibility criteria for support can be obtained via the Energy Savings Advice Service. The customer’s eligibility is shown at the assessment stage by using the approved software.
                </p>
                <p>
                    Where a customer is eligible for ECO support, a Green Deal Provider must, if it is able to do so, offer the customer a subsidised offer to installation of improvements for which ECO subsidy is available and before any offer a Green Deal Plan to a customer.
                </p>

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
                <h2>What is the Energy Saving Advice Service?</h2>
                <p>
                    A Green Deal Provider must include the contact details of the Energy Saving Advice Service or Home Energy Scotland Advice Service (as applicable) in its promotional material and information provided to customers regarding the Green Deal in accordance with the requirements of the Green Deal Quality Mark requirements and guidelines.
                </p>
                <p>
                    Where, for any reason, a Green Deal Provider is not able to offer an improver a Green Deal Plan in respect of some or all of the improvements which have been recommended for the property in a Green Deal Advice Report, it must give the improver the contact details of the Energy Saving Advice Service or Home Energy Scotland Service (as applicable).
                </p>

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
                <h2>What is the Financial Conduct Authority (FCA)?</h2>
                <p>
                    Providers are actively acting as lenders and therefore require authorisation in order to operate from the FCA. A Green Deal Provider and anyone else promoting or selling finance must comply with the strict rules and regulations of the FCA, whose responsibilities include:
                </p>

                <ul>
                    <li>Issuing “permissions” to sell/broker/lend</li>
                    <li>Regulating and monitoring the practices of companies</li>
                    <li>Monitoring escalated financial complaints (FOS) – Financial Ombudsman Service</li>
                    <li>Protecting the customer against scams/unfair contracts</li>
                    <li>Ensuring customers are treated fairly</li>
                    <li>Protecting those that are “vulnerable”</li>
                </ul>

                <h2>What is PAS 2030?</h2>

                <p>
                    This is a specification for the installation of energy efficiency measures in existing buildings and assists installers in complying with its requirements in full to demonstrate that their installation processes are capable of providing installation of energy efficiency improvement measures to specification and in accordance with the customer’s expectations.
                </p>

                <p>
                    A Green Deal Installer must be PAS2030 certified.
                </p>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitTwentythree" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptTwentythree == true" class="form-group" id="questionTwentythree" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input name="answerTwentythree" type="text" class="form-control" v-model="answerTwentythree" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousTwentythree" class=" col-xs-3"  href="#">Previous</a></li>
                        <li v-if="answerTwentythree.toLowerCase() == 'yes'" id="buttonTwentythree" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextTwentythree">Next</button></li>
                    </ul>
                </nav>
            </div>


            <div v-if="twentyfour == true">
                <h2>What is the Green Deal and Oversight Registration Body (GD ORB)?</h2>
                <p>
                    The Green Deal Oversight and Registration Body (GD ORB), on behalf of the Secretary of State, manages the authorisation scheme for participants in the Green Deal and is responsible for a number of functions aimed at providing effective administration and oversight of the scheme.
                </p>

                <p>
                    The GD ORB is responsible for maintaining a register of all authorised Green Deal Providers, Certification Bodies, Assessors and Installers, maintaining the Green Deal Code of Practice and controlling the use of the Quality Mark; ongoing monitoring of Green Deal Participants against the Code of Practice; producing an annual Green Deal report; and gathering evidence of non-compliance and referring participants to the Ombudsman or the Secretary of State where appropriate and imposing sanctions when directed.
                </p>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitTwentyfour" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptTwentyfour == true" class="form-group" id="questionTwentyfour" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input name="answerTwentyfour" type="text" class="form-control" v-model="answerTwentyfour" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousTwentyfour" class=" col-xs-3"  href="#">Previous</a></li>
                        <li v-if="answerTwentyfour.toLowerCase() == 'yes'" id="buttonTwentyfour" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextTwentyfour">Next</button></li>
                    </ul>
                </nav>
            </div>


            <div v-if="twentyfive == true">
                <h2>What is approved software?</h2>
                <p>
                    In order to produce a Green Deal Advice Report and comply with the Green Deal Code of Practice regarding the provision of quotes for Green Deal Plans a Green Deal Provider must ensure assessors use approved software such as eTech, Quidos, ECMK, Elmhurst, NHER, Stroma etc. From the information gained at the assessment and from the software calculations a GDAR can be produced for a customer and a Green Deal quote developed.
                </p>
                <h2>
                    Marketing and Sales
                </h2>
                <p>
                    All Green Deal sales must be carried out in accordance with all applicable consumer protection legislation, the FCA (where applicable), the ASA Codes and the Green Deal Code of Practice.
                </p>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitTwentyfive" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptTwentyfive == true" class="form-group" id="questionTwentyfive" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input name="answerTwentyfive" type="text" class="form-control" v-model="answerTwentyfive" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousTwentyfive" class=" col-xs-3"  href="#">Previous</a></li>
                        <li v-if="answerTwentyfive.toLowerCase() == 'yes'" id="buttonTwentyfive" style="display: inline;"><button type="button" class="btn btn-success col-xs-3"name="nextButton" v-on:click="nextTwentyfive">Next</button></li>
                    </ul>
                </nav>
            </div>


            <div v-if="twentysix == true">
                <h2>Any information provided to a customer should:</h2>
                <ul>

                    <li>Be clear, fair, jargon free and impartial;</li>
                    <li>Indicate that independent and impartial advice is available and provide the contact details to access that advice;</li>
                    <li>Make clear what service is being offered in relation to the Green Deal;</li>
                    <li>Promote and display the Green Deal Quality Mark correctly;</li>
                    <li>Outline where a firm uses Tied Assessors;</li>
                    <li>Ensure the firm’s legal name, trading name and postal address (as it appears on the Financial Register) is included in all financial promotions and communications, referred to as the Status Disclosure (where applicable);</li>
                    <li>Ensure a customer is not induced into entering a Green Deal Plan by misleading claims;</li>
                    <li>Ensure redress information is clearly displayed regarding complaints.</li>
                </ul>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitTwentysix" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptTwentysix == true" class="form-group" id="questionTwentysix" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input name="answerTwentysix" type="text" class="form-control" v-model="answerTwentysix" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousTwentysix" class=" col-xs-3"  href="#">Previous</a></li>
                        <li v-if="answerTwentysix.toLowerCase() == 'yes'" id="buttonTwentysix" style="display: inline;"><button type="button" class="btn btn-success col-xs-3"name="nextButton" v-on:click="nextTwentysix">Next</button></li>
                    </ul>
                </nav>
            </div>


            <div v-if="twentyseven == true">
                <h2>Lead Generators</h2>
                <p>
                    Only purchase sales leads from large and reputable lead generators;<br />
                    Check they are FCA authorised and any other authority;<br />
                    Check they are registered with ICO;<br />
                    Check and retain sales scripts;<br />
                    Check any customer consents to the call;<br />
                    Check the customer did not indicate by any means that they did not wish to be contacted in any way;<br />
                    Check the Lead Generator made it clear that any personal information may be passed on;<br />
                    Check they observe the PECR rules and comply with TPS rules to avoid nuisance calls;<br />
                    Monitor calls;<br />
                    Train the Lead Generators;<br />
                    Enter into an Agreement with clear terms and conditions.
                </p>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitTwentyseven" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptTwentyseven == true" class="form-group" id="questionTwentyseven" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input name="answerTwentyseven" type="text" class="form-control" v-model="answerTwentyseven" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousTwentyseven" class=" col-xs-3"  href="#">Previous</a></li>
                        <li v-if="answerTwentyseven.toLowerCase() == 'yes'" id="buttonTwentyseven" style="display: inline;"><button type="button" class="btn btn-success col-xs-3"name="nextButton" v-on:click="nextTwentyseven">Next</button></li>
                    </ul>
                </nav>
            </div>


            <div v-if="twentyeight == true">
                <h2>Getting your adverts and promotions approved</h2>
                <p>
                    If you are planning on undertaking any advertising or promotional activity relating to the green deal then you must inform your Green Deal Provider in advance and obtain written approval to ensure that you fully comply with the rules around advertising the green deal. This includes your website and any internal as well as external materials.
                </p>
                <p>
                    Everyone want to help and assist you to ensure you remain compliant throughout and avoid any fines and prosecutions and remember:
                </p>
                <ul>
                    <li style="color:#f00;" >All adverts must be clear, fair and not misleading and be in plain and easy to understand language;</li>
                    <li style="color:#f00;" >You must be able to substantiate any claims you make;</li>
                    <li style="color:#f00;" >Advertising and marketing communications must be legal, decent, honest, truthful, responsible, and must not mislead or offend.</li>
                </ul>
                <h2>Your Role and Responsibilities:</h2>

                <ul>
                    <li>Provide clear, concise and truthful information;</li>
                    <li>Identify the person and the firm at the outset and make clear the purpose of the communication;</li>
                    <li>Clearly state the service you offer and the relationship with our firm;</li>
                    <li>Complete relevant software documentation in the correct manner;</li>
                    <li>Take responsibility for your own knowledge;</li>
                    <li>Follow all relevant processes and policies;</li>
                    <li>Be aware that you are responsible for what you say and do;</li>
                    <li>Take appropriate action if you consider the customer to be “vulnerable”;</li>
                    <li>Before leaving the customer ensure they fully understand the process.</li>
                </ul>
                <p>
                    As part of our obligations monitoring calls will be made to your customers in order to check that the sales process is being carried out correctly.
                </p>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitTwentyeight" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptTwentyeight == true" class="form-group" id="questionTwentyeight" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input name="answerTwentyeight" type="text" class="form-control" v-model="answerTwentyeight" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousTwentyeight" class=" col-xs-3"  href="#">Previous</a></li>
                        <li v-if="answerTwentyeight.toLowerCase() == 'yes'" id="buttonTwentyeight" style="display: inline;"><button type="button" class="btn btn-success col-xs-3"name="nextButton" v-on:click="nextTwentyeight">Next</button></li>
                    </ul>
                </nav>
            </div>


            <div v-if="twentynine == true">
                <h2>Visiting Consumers in their Home</h2>
                <p>
                    If your activities involve visiting a consumer in their home, then you are expected to have tight controls and systems in place.
                </p>
                <p>
                    For example:
                </p>

                <ul>
                    <li style="color: #f00">You must obtain consent for the visit from the consumer;</li>
                    <li style="color: #f00">For the consent to be given, the information to the customer must have been given in a clear, concise and fair way by the sales person;</li>
                    <li style="color: #f00">You need to identify the person and the firm at the outset and make clear the purpose of the communication;</li>
                    <li style="color: #f00">Ensure an appropriate time of day for the visit;</li>
                    <li style="color: #f00">State the services the firm is authorised to offer in relation to the Green Deal;</li>
                    <li style="color: #f00">State any relationship which is relevant to the services offered. In other words make it clear if you are acting as an associate.</li>
                </ul>

                <p>
                    It is also important that you can evidence this, and so make sure it is written down.
                </p>
                <p>
                    Staff visiting consumers in their home will also need to undergo a Disclosure and Barring Service (DBS) check to prevent unsuitable people from working with vulnerable groups.
                </p>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitTwentynine" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptTwentynine == true" class="form-group" id="questionTwentynine" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input name="answerTwentynine" type="text" class="form-control" v-model="answerTwentynine" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousTwentynine" class=" col-xs-3"  href="#">Previous</a></li>
                        <li v-if="answerTwentynine.toLowerCase() == 'yes'" id="buttonTwentynine" style="display: inline;"><button type="button" class="btn btn-success col-xs-3"name="nextButton" v-on:click="nextTwentynine">Next</button></li>
                    </ul>
                </nav>
            </div>


            <div v-if="thirty == true">
                <h2>Treating Customers Fairly otherwise known as TCF</h2>
                <p>
                    You should be committed to meeting customer expectations of performance, quality, price and delivery in all that you do. Treating Customers Fairly must now remain central to your conduct, and you must put the well-being of your customers at the heart of how you deal with them.
                </p>

                <p>
                    TCF has six key customer outcomes that you need to demonstrate that you have delivered and you are required to achieve:
                </p>

                <p><strong>Outcome 1</strong> – CULTURE<br />
                    Consumers must be confident that they are dealing with a firm or individual where the fair treatment of customers is central to the corporate culture.</p>

                <p><strong>Outcome 2</strong> – MARKETING<br />
                    Products and services marketed and sold must be designed to meet the needs of identified consumer groups and targeted accordingly.
                </p>

                <p><strong>Outcome 3</strong> – INFORMATION<br />
                    Consumers must be provided with clear information and kept appropriately informed, before, during and after the point of sale.
                </p>

                <p><strong>Outcome 4</strong> – ADVICE<br />
                    Where consumers receive advice, the advice must be suitable and takes account of their circumstances.
                </p>

                <p><strong>Outcome 5</strong> – PRODUCT<br />
                    Consumers must be provided with products that perform as they have been led to expect, and the associated service is of an acceptable standard.</p>

                <p><strong>Outcome 6</strong> – BARRIERS<br />
                    Consumers must not face unreasonable post-sale barriers to change products, switch providers, submit claims or make a complaint.
                </p>

                <p>These six outcomes serve as the basis for treating customers fairly.</p>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitThirty" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptThirty == true" class="form-group" id="questionThirty" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input name="answerThirty" type="text" class="form-control" v-model="answerThirty" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousThirty" class=" col-xs-3"  href="#">Previous</a></li>
                        <li v-if="answerThirty.toLowerCase() == 'yes'" id="buttonThirty" style="display: inline;"><button type="button" class="btn btn-success col-xs-3"name="nextButton" v-on:click="nextThirty">Next</button></li>
                    </ul>
                </nav>
            </div>


            <div v-if="thirtyone == true">
                <h2>Vulnerable Customers</h2>
                <p>
                    It is likely that during the course of your business you meet a vulnerable customer. You need to make sure that you can recognise the signs and signals at the beginning and then have a process to deal with the circumstances of the individuals.
                </p>

                <p>
                    Firstly, let’s identify what is meant by a vulnerable customer?
                </p>

                <p>
                    These may be people affected by Dementia. In the UK for example 800,000 people live with dementia and this is expected to double in the next 40 years.
                </p>

                <p>
                    It could perhaps be somebody who has suffered a bereavement who isn’t really in the right state of mind, particularly when it comes down to making complex financial decisions.
                </p>

                <p>
                    It could even be people perhaps preparing parents to go into a care home and having to pay the fees associated with that.
                </p>

                <p>
                    It comes down to leading the way in which vulnerable people are dealt with.
                </p>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitThirtyone" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptThirtyone == true" class="form-group" id="questionThirtyone" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input name="answerThirtyone" type="text" class="form-control" v-model="answerThirtyone" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousThirtyone" class=" col-xs-3"  href="#">Previous</a></li>
                        <li v-if="answerThirtyone.toLowerCase() == 'yes'" id="buttonThirtyone" style="display: inline;"><button type="button" class="btn btn-success col-xs-3"name="nextButton" v-on:click="nextThirtyone">Next</button></li>
                    </ul>
                </nav>
            </div>


            <div v-if="thirtytwo == true">
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
                    <a href="#" v-on:click="submitThirtytwo" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptThirtytwo == true" class="form-group" id="questionThirtytwo" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input name="answerThirtytwo" type="text" class="form-control" v-model="answerThirtytwo" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousThirtytwo" class=" col-xs-3"  href="#">Previous</a></li>
                        <li v-if="answerThirtytwo.toLowerCase() == 'yes'" id="buttonThirtytwo" style="display: inline;">
                            <button type="button" class="btn btn-success col-xs-3"name="nextButton" v-on:click="nextThirtytwo">Next</button>
                        </li>
                    </ul>
                </nav>
            </div>


            <div v-if="thirtythree == true">
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
                    <a href="#" v-on:click="submitThirtythree" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptThirtythree == true" class="form-group" id="questionThirtythree" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input name="answerThirtythree" type="text" class="form-control" v-model="answerThirtythree" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousThirtythree" class=" col-xs-3"  href="#">Previous</a></li>
                        <li v-if="answerThirtythree.toLowerCase() == 'yes'" id="buttonThirtythree" style="display: inline;">
                            <button type="button" class="btn btn-success col-xs-3"name="nextButton" v-on:click="nextThirtythree">Next</button>
                        </li>
                    </ul>
                </nav>
            </div>






            <div v-if="thirtyfour == true">
                <h2>Data Protection</h2>
                <p>The Data Protection Act defines UK law on the processing of personal data. Personal data is any data you collect that can identify a living individual.</p>

                <p>A Green Deal Participant must comply with the requirements of the Data Protection Act 1998 in respect of personal data obtained pursuant to, or in connection with, the Green Deal.</p>

                <p>If you help a customer apply for a loan you could be perceived as collecting and storing their personal data on the lender’s behalf as some of this data is used to make a decision about their creditworthiness and to administer their loan.</p>

                <p>You have a legal obligation to protect your customer’s personal information and if you have not already done so it is recommended that you register with ICO which stands for the Information Commissioners Office and deals with issues about data protection.</p>

                <p>Any obligation in the Green Deal Code of Practice to collect, store or disclose information which contains personal data has effect subject to the Data Protection Act 1998.</p>

                <p>All the data by the Assessor and the GD organisation should be held for a minimum of 6 years.</p>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitThirtyfour" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptThirtyfour == true" class="form-group" id="questionThirtyfour" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input name="answerThirtyfour" type="text" class="form-control" v-model="answerThirtyfour" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousThirtyfour" class=" col-xs-3"  href="#">Previous</a></li>
                        <li v-if="answerThirtyfour.toLowerCase() == 'yes'" id="buttonThirtyfour" style="display: inline;"><button type="button" class="btn btn-success col-xs-3"name="nextButton" v-on:click="nextThirtyfour">Next</button></li>
                    </ul>
                </nav>
            </div>


            <div v-if="thirtysix == true">
                <h2>Anti-Money Laundering or AML</h2>
                <p>Money laundering means exchanging money or assets that were obtained criminally for money or other assets that are “clean”. The clean money or assets don’t have an obvious link with any criminal activity. Money laundering also includes money that’s used to fund terrorism, however it’s obtained.</p>

                <p>The Proceeds of Crime Act contains the principal money laundering legislation in the UK and deals with a wide range of matters relevant to UK law on proceeds of crime issues.</p>

                <p>You must be aware of AML and put in place certain control measures in order to prevent you or your business being used for money laundering which includes nominating a person to inform us if you know or suspect that another person is laundering money or financing terrorism. You don’t need any proof or evidence just a reasonable suspicion.</p>


                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitThirtysix" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptThirtysix == true" class="form-group" id="questionThirtysix" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input name="answerThirtysix" type="text" class="form-control" v-model="answerThirtysix" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousThirtysix" class=" col-xs-3"  href="#">Previous</a></li>
                        <li v-if="answerThirtysix.toLowerCase() == 'yes'" id="buttonThirtysix" style="display: inline;"><button type="button" class="btn btn-success col-xs-3"name="nextButton" v-on:click="nextThirtysix">Next</button></li>
                    </ul>
                </nav>
            </div>


            <div v-if="thirtyseven == true">
                <h2>Complaints</h2>
                <p>A complaint is an indication of dissatisfaction and can be made by a customer in writing or verbally.</p>

                <p>There are strict rules and requirements around how complaints about green deal and financial products and services are handled.</p>

                <p>There are two complaints procedures, one relating specifically to the Green Deal Code of Practice and one relating to the Financial Conduct Authority. You can have a complaint that does not directly relate to the financing of a green deal plan and could be in connection with a faulty measure for example and so two courses of handling a complaint are available.</p>

                <p>In both of these instances there is an Alternative Dispute Resolution (ADR) – or arbitration – this became UK law on the 1st October 2015 for all businesses that sell to consumers. This means that when a matter remains in dispute, a firm is legally compelled to give the consumer the contact details to the Financial Ombudsman Service (FOS where the dispute relates to finance, or the Ombudsman Service where it is non-financial).</p>

                <p>If you receive a complaint regarding green deal then you must pass it to the Green Deal Provider within the same business day that you receive it and complete any actions that you are given to solve a complaint in the timescale agreed at the time. A GDP must respond/acknowledge the complaint with 7 days and in writing.</p>

                <p>Everyone involved must make reasonable efforts to settle the complaint or dispute about the product or service.</p>

                <p>A Green Deal Assessor or Green Deal Installer must cooperate with any investigation into its activities.</p>

                <p>The Financial Ombudsman Service can become involved to settle a complaint if a customer is not satisfied with the response from a financial provider about their products and services.</p>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitThirtyseven" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptThirtyseven == true" class="form-group" id="questionThirtyseven" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input name="answerThirtyseven" type="text" class="form-control" v-model="answerThirtyseven" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousThirtyseven" class=" col-xs-3"  href="#">Previous</a></li>
                        <li v-if="answerThirtyseven.toLowerCase() == 'yes'" id="buttonThirtyseven" style="display: inline;"><button type="button" class="btn btn-success col-xs-3"name="nextButton" v-on:click="nextThirtyseven">Next</button></li>
                    </ul>
                </nav>
            </div>


            <div v-if="thirtyeight == true">
                <h2>Health and Safety</h2>

                <p>The Green Deal Provider has a Health and Safety Procedure GDPP020 and Quality Manual GD02 which should be read in conjunction with each other. These are both designed to be compliant with the requirements of PAS2030, the latest version of the Green Deal Code of Practice and to ensure that installations meet customer needs and expectations through the Green Deal.</p>

                <p>The aim is to ensure installers and assessors work safety and avoid accidents by providing a framework within which a safe method of work can be established. It is therefore important that you read the advice given in both these documents before you undertake any work.</p>

                <p>You are required to sign and return the declaration issued with both these handbooks stating that you have read and understand them and you accept your organisation’s responsibilities with respect to health and safety.</p>

                <p>These handbooks will be reviewed annually and supplementary information distributed to all installers and assessors.</p>





                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitThirtyeight" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptThirtyeight == true" class="form-group" id="questionThirtyeight" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input name="answerThirtyeight" type="text" class="form-control" v-model="answerThirtyeight" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousThirtyeight" class=" col-xs-3"  href="#">Previous</a></li>
                        <li v-if="answerThirtyeight.toLowerCase() == 'yes'" id="buttonThirtyeight" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextThirtyeight">Next</button></li>
                    </ul>
                </nav>
            </div>


            <div v-if="thirtynine == true">
                <h2>Construction, Design and Management Regulations (CDM) 2015 – responsibilities</h2>
                <p>The Construction (Design and Management) (CDM) Regulations 2015 cover a very broad range of construction activities such as building, civil engineering, construction work, demolition, site preparation, site clearance, renovation, decoration, installation, maintenance, and dismantling of structure.</p>

                <p>Under the CDM Regulations, legal duties apply to the following duty holders; Clients, Designers, Contractors and Workers for all construction projects even for simple, short duration work. Additional duty holders called “Principal Designer” and “Principal Contractor” are legally required to be appointed when projects involve or are likely to involve more than one Contractor working on the project at any time. CDM applies to both non-domestic and domestic premises.</p>

                <p>Although the Green Deal Provider is not involved in construction, or design, it is definitely involved in the management of contractors as a Provider.</p>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitThirtynine" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptThirtynine == true" class="form-group" id="questionThirtynine" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input name="answerThirtynine" type="text" class="form-control" v-model="answerThirtynine" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousThirtynine" class=" col-xs-3"  href="#">Previous</a></li>
                        <li v-if="answerThirtynine.toLowerCase() == 'yes'" id="buttonThirtynine" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextThirtynine">Next</button></li>
                    </ul>
                </nav>
            </div>


            <div v-if="fourty == true">
                <h2>Worker’s responsibilities</h2>
                <p>Workers are those who work for Contractors and for all projects they will:</p>
                <ul>
                    <li>Take care of their own Health and Safety and to others who may be affected by their actions.</li>
                    <li>Read and understand Health and Safety information provided to them.</li>
                    <li>Follow site rules.</li>
                    <li>Attend any relevant induction of training courses.</li>
                    <li>Report any accidents, incidents or risks that might be a danger to themselves and others.</li>
                    <li>Liaise with the site safety representative on health and safety matters.</li>
                    <li>Cooperate with others and follow reasonable directions from duty holders.</li>
                </ul>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitFourty" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptFourty == true" class="form-group" id="questionFourty" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input name="answerFourty" type="text" class="form-control" v-model="answerFourty" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousFourty" class=" col-xs-3"  href="#">Previous</a></li>
                        <li v-if="answerFourty.toLowerCase() == 'yes'" id="buttonFourty" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextFourty">Next</button></li>
                    </ul>
                </nav>
            </div>


            <div v-if="fourtyone == true">
                <h2>Non-Compliance</h2>
                <p>
                    The Green Deal Provider will try to resolve any non-compliance issues and will use its best endeavours to work with suppliers to resolve matters and encourage everyone to do their best and work within the Green Deal Code of Practice and FCA Regulations. Any non-compliance will be documented, filed and dated. In the unlikely event that non-compliance is of such a serious nature that we cannot reach a suitable resolution then as a last resort Disciplinary Action may have to be taken and reported to the relevant Green Deal Certification Body.
                </p>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitFourtyone" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptFourtyone == true" class="form-group" id="questionFourtyone" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input name="answerFourtyone" type="text" class="form-control" v-model="answerFourtyone" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousFourtyone" class=" col-xs-3"  href="#">Previous</a></li>
                        <li v-if="answerFourtyone.toLowerCase() == 'yes'" id="buttonFourtyone" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextFourtyone">Next</button></li>
                    </ul>
                </nav>
            </div>


            <div v-if="fourtytwo == true">
                <h2>Summary</h2>
                <p>
                    Many thanks for taking the time to read this training presentation, which it is hoped has helped you understand the Green Deal.
                </p>
                <p>
                    Your attendance on the course confirms you have read, understood and completed the Green Deal General Training Course and understood the contents.
                </p>
                <p>
                    If you have any other questions or need any other support, please call {{ companyNumber }}
                </p>

                <div class="alert alert-danger" role="alert">Have you read and fully understood this section? Click the "Accept Page" button and then fill out the short question. If you would need extra information please contact {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></div>
                <div class="form-group">
                    <a href="#" v-on:click="submitFourtytwo" class="btn btn-success col-xs-12" >Accept Page</a>
                </div>
                <div v-if="acceptFourtytwo == true" class="form-group" id="questionFourtytwo" style=" margin-top: 95px;">
                    <label >Short question</label>
                    <p>If you have read the above document, please type "yes" into the box below and then click next</p>
                    <input name="answerFourtytwo" type="text" class="form-control" v-model="answerFourtytwo" placeholder="Answer">
                </div>
                <nav>
                    <ul class="pager">
                        <li style="display: inline;"><a v-on:click="previousFourtytwo" class=" col-xs-3"  href="#">Previous</a></li>
                        <li v-if="answerFourtytwo.toLowerCase() == 'yes'" id="buttonFourtytwo" style="display: inline;"><button type="button" class="btn btn-success col-xs-3" href="#" v-on:click="nextFourtytwo">Next</button></li>
                    </ul>
                </nav>
            </div>


            <div v-if="fourtythree == true">
                <div>
                    <h2>Summary</h2>
                    <p>I understand and accept that I have completed this training course and that I understand all of its content and then I must comply with the Green Deal Code of Practice when carrying out Green Deal assessments and act in accordance with applicable consumer protection legislation and the Frameworks Regulations and produce accurate Green Deal Advice Reports.</p>
                    <p><strong>If you have any other questions or need any other support. Please call {{ contactName }} on {{ companyNumber }} or email <a v-bind:href="adminEmail">{{ adminEmail }}</a></strong></p>
                    <p><strong>In any case, we shall be in touch to establish any other support.</strong></p>
                    <p>If your details below are correct, please click on the submit bar below to send your details.</p>

                    <div class="col-xs-6" v-if="fourtythree == true">
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
                    <div class="col-xs-6" v-if="fourtythree == true">
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


            twentyfour: false,
            acceptTwentyfour: false,
            answerTwentyfour: '',


            twentyfive: false,
            acceptTwentyfive: false,
            answerTwentyfive: '',


            twentysix: false,
            acceptTwentysix: false,
            answerTwentysix: '',


            twentyseven: false,
            acceptTwentyseven: false,
            answerTwentyseven: '',


            twentyeight: false,
            acceptTwentyeight: false,
            answerTwentyeight: '',


            twentynine: false,
            acceptTwentynine: false,
            answerTwentynine: '',


            thirty: false,
            acceptThirty: false,
            answerThirty: '',


            thirtyone: false,
            acceptThirtyone: false,
            answerThirtyone: '',


            thirtytwo: false,
            acceptThirtytwo: false,
            answerThirtytwo: '',


            thirtythree: false,
            acceptThirtythree: false,
            answerThirtythree: '',


            thirtyfour: false,
            acceptThirtyfour: false,
            answerThirtyfour: '',


            thirtysix: false,
            acceptThirtysix: false,
            answerThirtysix: '',


            thirtyseven: false,
            acceptThirtyseven: false,
            answerThirtyseven: '',


            thirtyeight: false,
            acceptThirtyeight: false,
            answerThirtyeight: '',


            thirtynine: false,
            acceptThirtynine: false,
            answerThirtynine: '',


            fourty: false,
            acceptFourty: false,
            answerFourty: '',


            fourtyone: false,
            acceptFourtyone: false,
            answerFourtyone: '',


            fourtytwo: false,
            acceptFourtytwo: false,
            answerFourtytwo: '',


            fourtythree: false,
            acceptFourtythree: false,
            answerFourtythree: '',




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


        submitTwentyfour: function(){
            this.acceptTwentyfour = true;
        },
        nextTwentyfour: function(){
            this.acceptTwentyfour = false;
            this.answerTwentyfour = '';
            this.twentyfour = false;
            this.twentyfive = true;
        },
        previousTwentyfour: function(){
            this.twentyfour = false;
            this.twentythree = true;
        },


        submitTwentyfive: function(){
            this.acceptTwentyfive = true;
        },
        nextTwentyfive: function(){
            this.acceptTwentyfive = false;
            this.answerTwentyfive = '';
            this.twentyfive = false;
            this.twentysix = true;
        },
        previousTwentyfive: function(){
            this.twentyfive = false;
            this.twentyfour = true;
        },


        submitTwentysix: function(){
            this.acceptTwentysix = true;
        },
        nextTwentysix: function(){
            this.acceptTwentysix = false;
            this.answerTwentysix = '';
            this.twentysix = false;
            this.twentyseven = true;
        },
        previousTwentysix: function(){
            this.twentysix = false;
            this.twentyfive = true;
        },


        submitTwentyseven: function(){
            this.acceptTwentyseven = true;
        },
        nextTwentyseven: function(){
            this.acceptTwentyseven = false;
            this.answerTwentyseven = '';
            this.twentyseven = false;
            this.twentyeight = true;
        },
        previousTwentyseven: function(){
            this.twentyseven = false;
            this.twentysix = true;
        },


        submitTwentyeight: function(){
            this.acceptTwentyeight = true;
        },
        nextTwentyeight: function(){
            this.acceptTwentyeight = false;
            this.answerTwentyeight = '';
            this.twentyeight = false;
            this.twentynine = true;
        },
        previousTwentyeight: function(){
            this.twentyeight = false;
            this.twentyseven = true;
        },


        submitTwentynine: function(){
            this.acceptTwentynine = true;
        },
        nextTwentynine: function(){
            this.acceptTwentynine = false;
            this.answerTwentynine = '';
            this.twentynine = false;
            this.thirty = true;
        },
        previousTwentynine: function(){
            this.twentynine = false;
            this.twentyeight = true;
        },


        submitThirty: function(){
            this.acceptThirty = true;
        },
        nextThirty: function(){
            this.acceptThirty = false;
            this.answerThirty = '';
            this.thirty = false;
            this.thirtyone = true;
        },
        previousThirty: function(){
            this.thirtyone = false;
            this.twentynine = true;
        },


        submitThirtyone: function(){
            this.acceptThirtyone = true;
        },
        nextThirtyone: function(){
            this.acceptThirtyone = false;
            this.answerThirtyone = '';
            this.thirtyone = false;
            this.thirtytwo = true;
        },
        previousThirtyone: function(){
            this.thirtyone = false;
            this.thirty = true;
        },


        submitThirtytwo: function(){
            this.acceptThirtytwo = true;
        },
        nextThirtytwo: function(){
            this.acceptThirtytwo = false;
            this.answerThirtytwo = '';
            this.thirtytwo = false;
            this.thirtythree = true;
        },
        previousThirtytwo: function(){
            this.thirtytwo = false;
            this.thirtyone = true;
        },


        submitThirtythree: function(){
            this.acceptThirtythree = true;
        },
        nextThirtythree: function(){
            this.acceptThirtythree = false;
            this.answerThirtythree = '';
            this.thirtythree = false;
            this.thirtyfour = true;
        },
        previousThirtythree: function(){
            this.thirtythree = false;
            this.thirtytwo = true;
        },


        submitThirtyfour: function(){
            this.acceptThirtyfour = true;
        },
        nextThirtyfour: function(){
            this.acceptThirtyfour = false;
            this.answerThirtyfour = '';
            this.thirtyfour = false;
            this.thirtysix = true;
        },
        previousThirtyfour: function(){
            this.thirtyfour = false;
            this.thirtythree = true;
        },


        submitThirtysix: function(){
            this.acceptThirtysix = true;
        },
        nextThirtysix: function(){
            this.acceptThirtysix = false;
            this.answerThirtysix = '';
            this.thirtysix = false;
            this.thirtyseven = true;
        },
        previousThirtysix: function(){
            this.thirtysix = false;
            this.thirtyfour = true;
        },


        submitThirtyseven: function(){
            this.acceptThirtyseven = true;
        },
        nextThirtyseven: function(){
            this.acceptThirtyseven = false;
            this.answerThirtyseven = '';
            this.thirtyseven = false;
            this.thirtyeight = true;
        },
        previousThirtyseven: function(){
            this.thirtyseven = false;
            this.thirtysix = true;
        },


        submitThirtyeight: function(){
            this.acceptThirtyeight = true;
        },
        nextThirtyeight: function(){
            this.acceptThirtyeight = false;
            this.answerThirtyeight = '';
            this.thirtyeight = false;
            this.thirtynine = true;
        },
        previousThirtyeight: function(){
            this.thirtyeight = false;
            this.thirtyseven = true;
        },


        submitThirtynine: function(){
            this.acceptThirtynine = true;
        },
        nextThirtynine: function(){
            this.acceptThirtynine = false;
            this.answerThirtynine = '';
            this.thirtynine = false;
            this.fourty = true;
        },
        previousThirtynine: function(){
            this.thirtynine = false;
            this.thirtyeight = true;
        },


        submitFourty: function(){
            this.acceptFourty = true;
        },
        nextFourty: function(){
            this.acceptFourty = false;
            this.answerFourty = '';
            this.fourty = false;
            this.fourtyone = true;
        },
        previousFourty: function(){
            this.fourty = false;
            this.thirtynine = true;
        },


        submitFourtyone: function(){
            this.acceptFourtyone = true;
        },
        nextFourtyone: function(){
            this.acceptFourtyone = false;
            this.answerFourtyone = '';
            this.fourtyone = false;
            this.fourtytwo = true;
        },
        previousFourtyone: function(){
            this.fourtyone = false;
            this.fourty = true;
        },


        submitFourtytwo: function(){
            this.acceptFourtytwo = true;
        },
        nextFourtytwo: function(){
            this.acceptFourtytwo = false;
            this.answerFourtytwo = '';
            this.fourtytwo = false;
            this.fourtythree = true;
        },
        previousFourtytwo: function(){
            this.fourtytwo = false;
            this.fourtyone = true;
        },


        submitFourtythree: function(){
            this.acceptFourtythree = true;
        },
        nextFourtythree: function(){
            this.acceptFourtythree = false;
            this.answerFourtythree = '';
            this.fourtythree = false;
            this.fourtyfour = true;
        },
        previousFourtythree: function(){
            this.fourtythree = false;
            this.fourtytwo = true;
        },




        submitForm: function() {


            this.fourtythree = false;
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

            axios.post('/GDGCourse', formData, config);

        },


    },

    mounted() {
    }
}
</script>
