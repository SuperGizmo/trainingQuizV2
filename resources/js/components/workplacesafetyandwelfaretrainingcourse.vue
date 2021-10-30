<template>
    <div class="col-xs-12 col-sm-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Workplace Safety and Welfare Training Course {{ name }}</h3>
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
                            <label for="address">Address</label>
                            <textarea type="text" class="form-control" v-model="address" name="address" placeholder="Your Address"></textarea>
                        </div>
                    </div>
                    <input type="submit" v-on:click="submitOne" class="btn btn-success col-xs-12" name="submit">
                </div>
                <div v-if="two == true">
                    <h2>Introduction</h2>
                    <p>Welcome and thank you for taking part in this training presentation.</p>
                    <p>All employers have a responsibility to make sure that their workplace is a safe place and all employees must be provided with the necessary training to be able to safely carry out tasks and procedures.</p>
                    <p>This section looks at some of the most common causes of accidents in the workplace so that you can understand how to prevent and avoid them.</p>
                    <h2>Slips, Trips and Falls</h2>
                    <p>Statistics show slipping and tripping to be the single most common cause of major injury in UK workplaces and they are often the initiators of accidents attributed to other causes, such as some machinery accidents, scalding and falls from height.</p>
                    <p>Causes of slips include floor contamination (the majority of floors become slippery once something has been spilled on them), loose mats and rugs, sloping surfaces and spillages.</p>
                    <p>Causes of trips include trailing electrical cables, objects obstructing walkways (around a fifth of all slip and trip accidents are blamed on people falling over some sort of obstruction), uneven surfaces, loose floorboards or floor coverings and sudden changes in surface levels, such as ramps or steps.</p>
                    <p>Falls are the single biggest cause of workplace deaths and are one of the main causes of major injuries. Many serious, and even fatal, workplace injuries are caused by falls below head height, such as from a ladder or from standing on a chair.</p>
                    <p>In 2018/2019, 147 workers were killed as a result of a workplace accident; falls from heights were responsible for 40 deaths. Source: RIDDOR - HSE website under statistics.</p>
                    <p>In 2015/2016, 144 workers were killed as a result of a workplace accident; falls from heights were responsible for 26%.</p>
                    <p>The Health and Safety Executive has identified a range of human factors contributing to slip and trip accidents. Risk assessments and control measures must take into account these human factors, which include:</p>
                    <ul>
                        <li>Poor perception of risk.</li>
                        <li>Lack of awareness of slip and trip hazards.</li>
                        <li>Failure to clean up spillages.</li>
                        <li>Failure to report slip and trip incidents.</li>
                        <li>Inadequate action on reported problems.</li>
                        <li>Lack of understanding of health and safety problems.</li>
                    </ul>
                    <p>There are a number of prevention methods that can be used to eradicate the likelihood of slips, trips and falls in the workplace.</p>
                    <p>In regards to slips, the first step is to identify where the contamination comes from and prevent if getting on the floor in the first place. For example, floors that are wet from cleaning, leaking pipes, spillages or wet weather.</p>
                    <p>Work activities, such as cleaning and maintenance, can create temporary slip or trip hazards and so should be carefully planned.</p>
                    <p>Ensure that your workplace is well lit as inadequate lighting can make it difficult to spot trip hazards.</p>
                    <p>Seasonal factors can also cause many problems, such as wet walkways and fallen leaves making paths slippery and shorter daylight hours making visibility poor.</p>
                    <p>You may want to consider control measures such as:</p>
                    <ul>
                        <li>Lids or fill lines on containers.</li>
                        <li>Fixing any leaking machines.</li>
                        <li>Drip trays.</li>
                        <li>Screens to stop splashes.</li>
                        <li>Choose an effective cleaning method with the right equipment.</li>
                        <li>Wet floor signs.</li>
                        <li>A clean-as-you-go policy for spills.</li>
                        <li>Sensible, non-slip footwear.</li>
                        <li>Regular maintenance of paving and floorboards etc.</li>
                        <li>Staff training.</li>
                        <li>Good housekeeping.</li>
                        <li>Safe use of ladders.</li>
                        <li>Fall prevention equipment</li>
                    </ul>

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
                    <h2>Electrical Safety</h2>
                    <p>The Health and Safety Executive (HSE) estimates that every year there are around 1000 accidents relating to electricity. Equipment must be installed, used and maintained correctly to help reduce the likelihood of hazards and injuries occurring.</p>
                    <p>There is no visible way to tell whether an electrical cable is live or not so, if you are working near cables, always assume that they are live. Hazards include:</p>
                    <ul>
                        <li>Working near overhead power lines.</li>
                        <li>Coming into contact with power lines, such as if a ladder accidentally touches one.</li>
                        <li>Smoking power tools.</li>
                        <li>Burn, scorch marks or burning smells that indicate a fault.</li>
                        <li>Damaged leads and cables.</li>
                        <li>Faulty or damaged appliances.</li>
                    </ul>
                    <p>The frequency of inspection and testing depends upon the type of equipment and the environment it is used in. Any damaged or broken equipment should be discarded safely.</p>
                    <p>If you come across someone who has had an electric shock, don’t touch them with your bare hands while they are in contact with the electrical current. Try to move the person away from the source using a piece of wood to break contact with the electricity.</p>
                    <P>If the shock is near water, don’t reach into water in which there’s an electrical current or you may be electrocuted.</P>
                    <p>Turn off the power at the mains if possible or unplug the appliance. Do not touch anything made of metal or any object that is wet.</p>
                    <p>Once the area is safe, check the person’s airway and breathing. If they are not breathing, have someone call the emergency services on 999 while you give CPR.</p>
                    <p>An electric shock can cause a serious burn. Even if a burn doesn’t look too bad on the outside, it could be deep and painful. Call 999 for emergency help if the person has burns and/or is unconscious.</p>
                    <p>Always call 999 if you are required to perform CPR.</p>
                    <p>A check-up at your local hospital is advisable even if there were no burns and the person did not lose consciousness.</p>
                    <p>It is advisable to read up on electrical signs so that you can recognise these at a glance.</p>
                    <p>Link for electrical signs <a href="https://www.uksafetystore.com/safety-signs/warning-signs/electrical-safety-signs.html">https://www.uksafetystore.com/safety-signs/warning-signs/electrical-safety-signs.html</a></p>
                    <h2>Fire Safety</h2>
                    <p>Workplace fire can be catastrophic for any organisation. Many businesses will never fully recover from a serious fire.</p>
                    <p>Fires lead to the loss of production time, market share, valuable resources, and customer goodwill.</p>
                    <p>The Regulatory Reform (Fire Safety) Order 2005 requires all employers to take reasonable steps to reduce the risk from fire and make sure people, including employees and members of the public, can escape safely if there is a fire.</p>
                    <p>The key requirement is that everyone must be able to escape safely.</p>
                    <p>For a fire to start, three essential things are needed: a source of ignition, fuel and oxygen. These make up the fire triangle and, if any one of these things is missing, a fire cannot begin.</p>
                    <p>Potential sources of ignition can include smokers’ materials and discarded cigarettes, naked flames, hot surfaces or processes, overheated electrical equipment and faulty or misused electrical equipment.</p>
                    <p>Sources of fuel could include paper and card, plastics, rubbers and foam. Liquids, such as paints and varnishes, can also be flammable as well as gases, such as liquefied petroleum gas.</p>
                    <p>Sources of oxygen include the air around us, some chemicals, oxygen supplies from cylinder storage and pyrotechnics.</p>
                    <p>All premises must have a fire detection and warning system. Fire detection and warning systems are very important and all workers and visitors should be familiar with the procedures for operating them. The alarm may be raised automatically via a detector system, manually by operating a call point or by some other means.</p>
                    <p>Fire escape routes should take people from the premises to a place of safety outside and well away from the area. This designated place should have the ability to be used safely and effectively at all times.</p>
                    <p>In cases of emergency, everyone must be able to escape from danger safely, and all businesses should have evacuation procedures in place to deal with this.</p>
                    <p>Under the fire safety legislation, emergency routes and exits must be provided, where necessary, with adequate emergency lighting.</p>
                    <p>Every employer, owner, manager or occupier of a premises must prepare an emergency plan in case of fire. You should carry out a fire drill at least once per year and record the results as part of your fire risk assessment and evacuation plan.</p>
                    <p>There are five different types of extinguishers for a reason: they each contain substances that counteract different types of fires. The five main types of fire extinguishers are:</p>
                    <ol>
                        <li><strong>Water</strong> – these are suitable for fires involving solid materials like wood, cloth, textiles, plastic, and paper.</li>
                        <li><strong>Powder</strong> – these are suitable for fires involving flammable liquids and electrical fires.</li>
                        <li><strong>Foam</strong> – these are used to fight fires involving solid materials and flammable liquids.</li>
                        <li><strong>Carbon dioxide</strong> – CO2 extinguishers are used to fight fires involving flammable liquid and electrical equipment.</li>
                        <li><strong>Wet chemical</strong> – these extinguishers are designed to combat fires involving cooking oils and fats.</li>
                    </ol>
                    <p>The correct fire extinguisher must be used for the correct type of fire. Using the wrong one, such as water on a fire involving flammable liquids or electrical equipment, can cause a disastrous reaction.</p>
                    <p>Please take time to look at the variety of fire safety signs that are out there so that you can recognise them at a glance.</p>
                    <p>Link for fire safety signs <a href="https://www.firesafe.org.uk/fire-safety-signs/">https://www.firesafe.org.uk/fire-safety-signs/</a></p>

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
                            <li v-if="answerThree.toLowerCase() == 'yes' "  style="display: inline;"><a  href="#" v-on:click="nextThree">Next</a></li>
                        </ul>
                    </nav>
                </div>
                <div v-if="four == true">
                    <h2>Welfare Facilities</h2>
                    <p>The Workplace Health, Safety and Welfare Regulations 1992 require employers to make provision to ensure the health, safety and welfare of employees.</p>
                    <p>Welfare facilities should provide adequate:</p>
                    <ul>
                        <li>Temperature control.</li>
                        <li>Ventilation.</li>
                        <li>Humidity.</li>
                        <li>Lighting.</li>
                        <li>Work space dimensions.</li>
                        <li>Cleanliness.</li>
                        <li>Toilet and Washing Facilities.</li>
                        <li>Rest and Eating Facilities.</li>
                    </ul>
                    <p>Employers must also ensure that employees, and anyone who visits the workplace, do not smoke within the premises or within any area that is substantially enclosed.</p>
                    <h2>First Aid</h2>
                    <p>Under the Health and Safety (First Aid) Regulations 1981 employers must:</p>
                    <ul>
                        <li>Ensure, so far as is reasonably practicable, the health, safety and welfare at work of all employees.</li>
                        <li>Make provision for employees to receive first aid treatment.</li>
                        <li>Ensure equipment and facilities provided are adequate and appropriate.</li>
                        <li>Provide an adequate number of suitable persons to administer first aid to employees who are injured or become ill at work.</li>
                        <li>Appoint a person to take charge of first aid facilities and equipment if the first aider is absent.</li>
                        <li>Appoint, depending on the size and nature of the organisation, a person to take charge of first aid rather than a qualified first aider.</li>
                        <li>Inform employees of first aid provisions, including the location of the equipment, facilities and personnel.</li>
                    </ul>
                    <p>All workplaces should have a first aid kit, although there is no mandatory list of items to include. Instead it depends on what you assess your company’s needs to be and you might choose to include items relevant to your workplace. These are a few examples of first aid items you might include:</p>
                    <ul>
                        <li>A leaflet giving general guidance on first aid.</li>
                        <li>Individually wrapped, sterile plasters of assorted sizes. You can provide hypo-allergenic plasters if necessary.</li>
                        <li>Sterile eye pads.</li>
                        <li>Individually wrapped, sterile, triangular bandages.</li>
                        <li>Safety pins.</li>
                        <li>Individually wrapped, sterile and non-medicated wound dressings in different sizes.</li>
                        <li>A pair of disposable gloves.</li>
                    </ul>
                    <p>Take time to check out the variety of First Aid Safety Signs to ensure that you are familiar with these.</p>
                    <p>Link for First Aid Safety Signs <a href="https://hse.gov.uk/pUbns/priced/l64.pdf">https://hse.gov.uk/pUbns/priced/l64.pdf</a></p>
                    <h2>Workplace Stress</h2>
                    <p>Work related stress develops when a person is unable to cope with the demands being placed on them. Stress can be a significant cause of illness and is known to be linked with high levels of absence, staff turnover and other issues.</p>
                    <p>Research shows the main sources of stress are:</p>
                    <ul>
                        <li><strong>Tasks</strong> – the work is beyond the individual’s capability or capacity or there is a case of information overload or boredom.</li>
                        <li><strong>Relationships</strong> – including interaction with other people, abuse and bullying.</li>
                        <li><strong>Job Role</strong> – there are opposing demands made by different people or there is no clear idea on what is expected. There is little or no recognition for work done, a threat to personal safety or fear of redundancy or dismissal.</li>
                        <li><strong>Environmental Factors</strong> – including noise, heat, lighting and cleanliness.</li>
                    </ul>
                    <p>Preventative measures should include identifying the main risk factors for work-related stress and putting controls in place to prevent them causing concern for employees.</p>

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
                            <li v-if="answerFour.toLowerCase() == 'yes'"  style="display: inline;"><a  href="#"  v-on:click="nextFour">Next</a></li>
                        </ul>
                    </nav>
                </div>

                <div v-if="five == true">
                    <h2>Drugs and Alcohol</h2>
                    <p>Drug misuse refers to the use of illegal drugs and the misuse, whether deliberate or unintentional, of prescribed drugs and substances such as solvents. You could be breaking the law if you knowingly allow drug-related activities in your workplace and you fail to act. You should have a policy in place to deal with drug use at work.</p>
                    <p>People under the influence of drugs may suffer from sudden mood changes, increased irritability, confusion, lack of concentration, slow reaction times, clumsiness and poor vision.</p>
                    <p>The misuse of alcohol can lead to reduced productivity, an increase in taking time off work and an increase in accidents at work. As a result, employers are advised to adopt an alcohol policy in consultation with their staff. Some companies, especially in safety-sensitive industries, use screening and testing as a way of controlling alcohol problems.</p>
                    <p>On average it takes the body 1 hour to process 1 unit of alcohol. (Source: NHS website, common health questions/lifestyle).</p>
                    <h2>Workplace Conflict and Violence</h2>
                    <p>Conflicts and disputes can arise from all sorts of situations, often due to miscommunication or poor leadership skills. If not managed correctly, conflicts can cause physical damage, psychological stress and may lead to employees leaving the company or being dismissed.</p>
                    <p>The Health and Safety Executive’s definition of work-related violence is “Any incident in which a person is abused, threatened or assaulted in circumstances relating to their work”.</p>
                    <p>Workplace harassment is when someone is repeatedly and deliberately abused, threatened or humiliated in circumstances relating to their work.</p>
                    <p>Improvements to prevent workplace conflict and violence may include:</p>
                    <ul>
                        <li>Training Staff.</li>
                        <li>Changing the layout of the workspace.</li>
                        <li>Changing the working hours or job design.</li>
                        <li>Improving the access, lighting or security of the premises.</li>
                        <li>Provide clear policies in relation to harassment and violence, detailing their own responsibilities, as well as those of their workforce</li>
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
                            <li style="display: inline;"><a v-on:click="previousFive"  href="#">Previous</a></li>
                            <li v-if="answerFive.toLowerCase() == 'yes'"  style="display: inline;"><a  href="#"  v-on:click="nextFive">Next</a></li>
                        </ul>
                    </nav>
                </div>


                <div v-if="six == true">
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
                axios.post('/WorkplaceSafetyandWelfareTrainingCourse', formData, config);
            },
        },
        mounted() {
        }
    }
</script>
