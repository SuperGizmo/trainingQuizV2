Hi {{ config('site.ADMIN_NAME')}},<br />
<br />
{{ $name }} has completed the Declaration Quiz. Please see their details below:<br />
<br />
Name: {{ $name }}<br />
Email: {{ $email }}<br />
Contact Number: {{ $contactNumber }}<br />
Company: {{ $company }}<br />
Address: {{ $address }}<br />
<br />
Percentage: {{ $percent }}%<br />
Rating: {{ $status }}<br /><br /><br /><br />
Certificate Download: <a href="{{ $pdf }}">here</a><br />
If the above link does not work, copy and paste this link {{ $pdf }}
<h2>Quality</h2>
Question 1: Do you have a formal Quality Management System (QMS)?
Answer: @if(isset($questions[1]) && $questions[1] == 0 ) Please Select @endif @if(isset($questions[1]) && $questions[1] == 1 )Yes @endif @if(isset($questions[1]) && $questions[1] == 2 )No @endif <br /><br />
Question 2: Do you have a signed and dated Quality Management Policy Statement?
Answer:@if(isset($questions[2]) && $questions[2] == 0 ) Please Select @endif @if(isset($questions[2]) && $questions[2] == 1 )Yes @endif @if(isset($questions[2]) && $questions[2] == 2 )No @endif <br /><br />
Question 3: Are your Quality Management Policies and Procedures reviewed at least on an annual basis?
Answer:@if(isset($questions[3]) && $questions[3] == 0 ) Please Select @endif @if(isset($questions[3]) && $questions[3] == 1 )Yes @endif @if(isset($questions[3]) && $questions[3] == 2 )No @endif <br /><br />
Question 4: Do you have a nominated Quality Representative who has responsibility for Quality Management within your company?
Answer:@if(isset($questions[4]) && $questions[4] == 0 ) Please Select @endif @if(isset($questions[4]) && $questions[4] == 1 )Yes @endif @if(isset($questions[4]) && $questions[4] == 2 )No @endif <br /><br />
Question 5: Can you demonstrate compliance with the Construction, Design and Management Regulations (CDM) 2015?
Answer:@if(isset($questions[5]) && $questions[5] == 0 ) Please Select @endif @if(isset($questions[5]) && $questions[5] == 1 )Yes @endif @if(isset($questions[5]) && $questions[5] == 2 )No @endif <br /><br />
Question 6: Have you identified all permit and licensing requirements applicable to the scope of services provided?
Answer:@if(isset($questions[6]) && $questions[6] == 0 ) Please Select @endif @if(isset($questions[6]) && $questions[6] == 1 )Yes @endif @if(isset($questions[6]) && $questions[6] == 2 )No @endif <br /><br />
Question 7: Does your company use processes or systems for the management and control of documented information?
Answer:@if(isset($questions[7]) && $questions[7] == 0 ) Please Select @endif @if(isset($questions[7]) && $questions[7] == 1 )Yes @endif @if(isset($questions[7]) && $questions[7] == 2 )No @endif <br /><br />
Question 8: Does your company have documented processes for the control and production of quality control plans and procedures, inspection and testing documentation and for the assurance of the competence of staff involved?
Answer:@if(isset($questions[8]) && $questions[8] == 0 ) Please Select @endif @if(isset($questions[8]) && $questions[8] == 1 )Yes @endif @if(isset($questions[8]) && $questions[8] == 2 )No @endif <br /><br />
<h2>Health and Safety</h2>
Question 1: Do you have a formal Health and Safety Management System (HSMS)?
Answer:@if(isset($questions[9]) && $questions[9] == 0 ) Please Select @endif @if(isset($questions[9]) && $questions[9] == 1 )Yes @endif @if(isset($questions[9]) && $questions[9] == 2 )No @endif <br /><br />
Question 2: Do you have a signed and dated Health and Safety Policy Statement?
Answer:@if(isset($questions[10]) && $questions[10] == 0 ) Please Select @endif @if(isset($questions[10]) && $questions[10] == 1 )Yes @endif @if(isset($questions[10]) && $questions[10] == 2 )No @endif <br /><br />
Question 3: Are your Health and Safety Policies and Procedure reviewed at least on an annual basis?
Answer:@if(isset($questions[11]) && $questions[11] == 0 ) Please Select @endif @if(isset($questions[11]) && $questions[11] == 1 )Yes @endif @if(isset($questions[11]) && $questions[11] == 2 )No @endif <br /><br />
Question 4: Do you have a nominated person who has delegated responsibility for workplace and product safety?
Answer:@if(isset($questions[12]) && $questions[12] == 0 ) Please Select @endif @if(isset($questions[12]) && $questions[12] == 1 )Yes @endif @if(isset($questions[12]) && $questions[12] == 2 )No @endif <br /><br />
Question 5: Do you have control measures in place to reduce/remove identified Health and Safety Risks?
Answer:@if(isset($questions[13]) && $questions[13] == 0 ) Please Select @endif @if(isset($questions[13]) && $questions[13] == 1 )Yes @endif @if(isset($questions[13]) && $questions[13] == 2 )No @endif <br /><br />
Question 6: Does your company have a communication process to provide guidance to workforce on workplace safety issues?
Answer:@if(isset($questions[14]) && $questions[14] == 0 ) Please Select @endif @if(isset($questions[14]) && $questions[14] == 1 )Yes @endif @if(isset($questions[14]) && $questions[14] == 2 )No @endif <br /><br />
Question 7: Does your company develop and implement initiatives to improve workplace safety?
Answer:@if(isset($questions[15]) && $questions[15] == 0 ) Please Select @endif @if(isset($questions[15]) && $questions[15] == 1 )Yes @endif @if(isset($questions[15]) && $questions[15] == 2 )No @endif <br /><br />
Question 8: Does the company have arrangements in place for investigating and reporting of Accidents and Incidents and Near Misses in their worksites?
Answer:@if(isset($questions[16]) && $questions[16] == 0 ) Please Select @endif @if(isset($questions[16]) && $questions[16] == 1 )Yes @endif @if(isset($questions[16]) && $questions[16] == 2 )No @endif <br /><br />
<h2>Environmental</h2>
Question 1: Do you have a formal Environmental Management System (EMS)?
Answer:@if(isset($questions[17]) && $questions[17] == 0 ) Please Select @endif @if(isset($questions[17]) && $questions[17] == 1 )Yes @endif @if(isset($questions[17]) && $questions[17] == 2 )No @endif <br /><br />
Question 2: Do you have a signed and dated Environmental Policy?
Answer:@if(isset($questions[18]) && $questions[18] == 0 ) Please Select @endif @if(isset($questions[18]) && $questions[18] == 1 )Yes @endif @if(isset($questions[18]) && $questions[18] == 2 )No @endif <br /><br />
Question 3: Are your Environmental Policies and Procedure reviewed at least on an annual basis?
Answer:@if(isset($questions[19]) && $questions[19] == 0 ) Please Select @endif @if(isset($questions[19]) && $questions[19] == 1 )Yes @endif @if(isset($questions[19]) && $questions[19] == 2 )No @endif <br /><br />
Question 4: Do you have a nominated Environmental Representative?
Answer:@if(isset($questions[20]) && $questions[20] == 0 ) Please Select @endif @if(isset($questions[20]) && $questions[20] == 1 )Yes @endif @if(isset($questions[20]) && $questions[20] == 2 )No @endif <br /><br />
Question 5: During the last 12 months has your Company received any formal warnings or cautions regarding permit non-compliance issues?
Answer:@if(isset($questions[21]) && $questions[21] == 0 ) Please Select @endif @if(isset($questions[21]) && $questions[21] == 1 )Yes @endif @if(isset($questions[21]) && $questions[21] == 2 )No @endif <br /><br />
Question 6: Do you have a formal process for recording, reporting and investigating environmental incidents and near misses?
Answer:@if(isset($questions[22]) && $questions[22] == 0 ) Please Select @endif @if(isset($questions[22]) && $questions[22] == 1 )Yes @endif @if(isset($questions[22]) && $questions[22] == 2 )No @endif <br /><br />
Question 7: Do you have a formal environmental risk assessment procedure that identifies environmental risks and defines associated control measures?
Answer:@if(isset($questions[23]) && $questions[23] == 0 ) Please Select @endif @if(isset($questions[23]) && $questions[23] == 1 )Yes @endif @if(isset($questions[23]) && $questions[23] == 2 )No @endif <br /><br />
Question 8: Do you have a Carbon Management Procedure?
Answer:@if(isset($questions[24]) && $questions[24] == 0 ) Please Select @endif @if(isset($questions[24]) && $questions[24] == 1 )Yes @endif @if(isset($questions[24]) && $questions[24] == 2 )No @endif <br /><br />
Question 9: Do you train your staff on quality, health and safety and environmental issues and induct new and existing workers into these processes?
Answer:@if(isset($questions[25]) && $questions[25] == 0 ) Please Select @endif @if(isset($questions[25]) && $questions[25] == 1 )Yes @endif @if(isset($questions[25]) && $questions[25] == 2 )No @endif <br /><br />
<h4>Declaration Statement</h4>
By submitting this information you confirm that you have answered all the questions truthfully and to the best of your knowledge.