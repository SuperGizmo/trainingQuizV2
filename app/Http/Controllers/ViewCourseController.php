<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewCourseController extends Controller
{

  public function duskTests(){
    return ['ManualHandlingHealthAndSafetyTraining','AntiMoneyLaunderingAndFinancialCrimeTrainingCourse'];
  }


// Start Course
// public function Pages(){
//   return [
//     [
//       'id' => 1,
//       'content' => ''
//     ],
//   ];
// }

// public function Data(){
//   return [
//     'title' => '',
//     'course' => '',
//     'pagesUrl' => '/Course/View/Pages/',
//     'sendUrl' => '/Course/Send',
//     'pages' => [
//       $this->Pages()
//     ],
//     'courseTopics' => '',
//   ];
// }

// public function Course(){
//   return view('course.course')->with($this->Data());
// }
// End Course


// Start Course
 public function SlipsTripsandFallsToolBoxTalkPages(){
   return [
     [
       'id' => 1,
       'content' => '<p><strong>Reason - </strong>Every year, many injuries occur through slips, trips and falls.</p>
        <p><strong>Why - </strong>Most of these injuries are easily preventable with a little care.</p>
        <p><strong>Outline - </strong>This talk will cover the causes and prevention of slips, trips and falls.</p>
        <p><strong>Why do they occur?</strong></p>
        <p>1. Most injuries from slips, trips and falls occur because of poor housekeeping.</p>
        <p>2. Many items left on the ground, such as coiled cables, hand tools, lengths of pipe or timber, will trip someone if not moved to a safe position.</p>
        <p>3. Spilt substances, such as oils and greases, will form a slip hazard if not immediately cleaned up.</p>
        <p>4. General debris, such as brick and block fragments, can quickly accumulate and form a tripping hazard if it is not cleaned up as it is created.</p>
        <p>5. Trailing cables are another frequent cause of tripping.</p>
        <p>6. Mud left on the rungs of a ladder by the previous user will be a slipping and falling hazard for the next person.</p>
        <p>7. Reduced levels of natural light, for example during winter afternoons, can easily increase the tripping hazards if adequate access lighting is not provided. Tools, equipment and materials which are visible in full daylight might be hidden in semi-darkness.</p>
        <p><strong><em>Q: What can you do in your job to reduce tripping hazards?</em></strong></p>
        <p><strong>What can you do about it?</strong></p>
        <p>1. Clear up waste materials as you create them. Lightweight waste should be bagged or bundled, and nails removed from waste timber.</p>
        <p>2. Do not leave tools, equipment or unused materials lying about on the floor.</p>
        <p>3. If you are using substances which could possibly spill, ensure that you have a means of effectively clearing up the spillage.</p>
        <p>4. As far as possible, route cables for power tools above head height. If cables have to be routed at floor level, try to avoid crossing pedestrian walkways.</p>
        <p>5. If the site is muddy, scrape mud off your boots before climbing ladders or walking anywhere else where it might be a danger to others.</p>
        <p>6. Be aware of the increased risks of tripping as the level of natural light fades; ensure that all tools, equipment and materials are stored in a safe location.</p>
        <p><strong><em>Q: What would be an effective way of clearing up spilt liquid?</em></strong></p>
        <p><strong>REMEMBER </strong>TIDY UP AS YOU GO, YOUR CARELESSNESS COULD CAUSE SERIOUS INJURIES TO SOMEONE ELSE.</p>
        <p><strong>Do you have any questions for me?</strong></p>
        <p><em>Further information</em></p>
        <p>&bull; <em>Construction Site Safety </em>(GE 700) &ndash; Modules A8, A11 and F1</p>
        <p>&bull; <em>Site Safety Simplified </em>(GE 706) &ndash; Chapter 4</p>
        <p>&bull; HSE &ndash; INDG225 (Rev 1) Preventing slips, trips and falls at work</p>'
     ],
   ];
 }

 public function SlipsTripsandFallsToolBoxTalkData(){
   return [
     'title' => 'Slips, Trips and Falls Tool Box Talk',
     'course' => 'Slips, Trips and Falls Tool Box Talk',
     'pagesUrl' => '/Course/View/Pages/SlipsTripsandFallsToolBoxTalk',
     'sendUrl' => '/Course/Send',
     'pages' => [
       $this->SlipsTripsandFallsToolBoxTalkPages()
     ],
     'courseTopics' => '',
   ];
 }

 public function SlipsTripsandFallsToolBoxTalkCourse(){
   return view('course.course')->with($this->SlipsTripsandFallsToolBoxTalkData());
 }
// End Course


// Start Course
 public function RiskAssessmentsandMethodStatementsToolBoxTalkPages(){
   return [
     [
       'id' => 1,
       'content' => '<p><strong>Reason - </strong>Work must be planned and carried out in a safe manner.</p>
        <p><strong>Why </strong>The construction industry continues to have an unacceptable accident record.</p>
        <p><strong>Outline </strong>This talk will cover what risk assessments and method statements mean to you.</p>
        <p><strong>Risk assessments</strong></p>
        <p>1. All employers have a legal duty to prepare risk assessments for work activities that could</p>
        <p>foreseeably result in injury to any person or damage to equipment.</p>
        <p>2. Risk assessments outline the ways in which the job could result in injury or damage and the measures put in place to ensure that the chance of anything going wrong is eliminated or reduced to an acceptable level.</p>
        <p>3. Employers with five or more employees must have written risk assessments.</p>
        <p>4. If there are fewer than five employees, the risk assessments must still be carried out although there is no legal duty to write them down.</p>
        <p>5. Employers also have a legal duty to communicate the findings of the risk assessment to operatives who may be affected by it.</p>
        <p>6. Therefore, depending upon the size of your company, you should either be told, or be asked to read, what the risks and control measures are for each job that you carry out.</p>
        <p>7. There is no specified way for laying out a risk assessment so you must familiarise yourself with the way your employers lay out theirs.</p>
        <p>8. In many cases, the risk assessments will form the basis for a method statement.</p>
        <p><strong><em>Q: What would you expect to find in a risk assessment?</em></strong></p>
        <p><strong><em>Q: If your company has five or more employees, how should its risk assessments be</em></strong></p>
        <p><strong><em>presented?</em></strong></p>
        <p><strong>Method statements</strong></p>
        <p>1. Method statements are a written list of operations, to be carried out in a specified sequence, in order to complete a work activity in a safe manner.</p>
        <p>2. Everyone involved in a job for which a method statement has been written should read it and sign as having understood its contents.</p>
        <p>3. Well-written method statements address all the hazards present and plan the work so that the risk of accident is eliminated or reduced to an acceptable level.</p>
        <p>4. Method statements are developed from the risk assessments for the same job so that operatives can read what hazards have been considered and how the risk of accidents has been overcome.</p>
        <p><strong><em>Q: Why do many method statements also include the risk assessment?</em></strong></p>
        <p><strong>Do you have any questions for me?</strong></p>
        <p><em>Further information</em></p>
        <p>&bull; <em>Construction Site Safety </em>(GE 700) &ndash; Module A7</p>
        <p>&bull; <em>Site Safety Simplified </em>(GE 706) <em>&ndash; </em>Chapter 3</p>
        <p>&bull; HSE &ndash; INDG163 (Rev 2) Five steps to risk assessment</p>
        <p>&bull; HSE &ndash; HSG65 Successful health and safety management</p>'
     ]
   ];
 }

 public function RiskAssessmentsandMethodStatementsToolBoxTalkData(){
   return [
     'title' => 'Risk Assessments and Method Statements Tool Box Talk',
     'course' => 'Risk Assessments and Method Statements Tool Box Talk',
     'pagesUrl' => '/Course/View/Pages/RiskAssessmentsandMethodStatementsToolBoxTalk',
     'sendUrl' => '/Course/Send',
     'pages' => [
       $this->RiskAssessmentsandMethodStatementsToolBoxTalkPages()
     ],
     'courseTopics' => '',
   ];
 }

 public function RiskAssessmentsandMethodStatementsToolBoxTalkCourse(){
   return view('course.course')->with($this->RiskAssessmentsandMethodStatementsToolBoxTalkData());
 }
// End Course


// Start Course
 public function PortableHandHeldElectricalToolsToolBoxTalkPages(){
   return [
     [
       'id' => 1,
       'content' => '<p><strong>Reason - </strong>Electrical tools face harsh conditions on site &ndash; when misused, they get damaged and become dangerous.</p>
        <p><strong>Why - </strong>In one year, there were 194 reported incidents of electric shock involving portable electric tools.</p>
        <p><strong>Outline - </strong>This talk will cover before-use checks, use of electric tools and hazards.</p>
        <p><strong>Before-use checks</strong></p>
        <p>1. Make sure the casing isn&rsquo;t damaged &ndash; if it is, don&rsquo;t use it.</p>
        <p>2. Make sure that all cables, plugs or connectors are sound and not damaged.</p>
        <p>3. Use tools on correct power supply as instructed on the maker&rsquo;s label. Only 110 volt tools are permitted on site.</p>
        <p>4. Check for a current PAT test sticker.</p>
        <p>5. Ensure the cable is long enough to reach your work without straining it.</p>
        <p><strong><em>Q: What are two things you should check before using a portable electric tool?</em></strong></p>
        <p><strong>Using portable electric tools</strong></p>
        <p>1. Portable electric tools should only be used for their designated purpose.</p>
        <p>2. Ensure switches are working correctly before connecting to the power supply.</p>
        <p>3. Wear eye protection if there is any risk to your eyes.</p>
        <p>4. Disconnect tools when not in use or making adjustments.</p>
        <p>5. Electric power tools should be regularly inspected and maintained by a competent electrician.</p>
        <p><strong><em>Q: When drilling, when should you wear eye protection?</em></strong></p>
        <p><strong>Hazards</strong></p>
        <p>1. If possible, keep power cables off the floor. They may get damaged, cause someone to trip or trail through water.</p>
        <p>2. Electrical tools often present a noise hazard &ndash; wear hearing protection if necessary.</p>
        <p>3. Avoid standing on a damp or wet surface when using electrical equipment. Keep equipment clean and dry.</p>
        <p>4. Never connect a portable electric tool to a lighting socket.</p>
        <p>5. Don&rsquo;t use blunt, worn or damaged bits and accessories.</p>
        <p>6. Portable electrical tools which have become wet should be allowed to dry then checked by a competent person for electrical safety before being used again.</p>
        <p>7. Some hand-held tools can cause hand-arm vibration.</p>'
     ],
     [
       'id' => 2,
       'content' => '<p><strong><em>Q: What are three potential hazards when using portable electrical tools?</em></strong></p>
        <p><strong>Do you have any questions for me?</strong></p>
        <p><strong>Questions for you</strong></p>
        <p><strong><em>Q: What voltage tools should be used on site?</em></strong></p>
        <p><strong><em>Q: Who should inspect and maintain portable electric tools?</em></strong></p>
        <p><strong>REMEMBER </strong>LOOK AFTER PORTABLE ELECTRICAL TOOLS AND THEY WILL LOOK AFTER YOU.</p>
        <p><em>Further information</em></p>
        <p>&bull; <em>Construction Site Safety </em>(GE 700) &ndash; Modules D6 and E4</p>
        <p>&bull; <em>Site Safety Simplified </em>(GE 706) &ndash; Chapter 11</p>
        <p>&bull; HSE &ndash; HSG141 Electrical safety on construction sites</p>'
     ],
   ];
 }

 public function PortableHandHeldElectricalToolsToolBoxTalkData(){
   return [
     'title' => 'Portable Hand Held Electrical Tools, Tool Box Talk',
     'course' => 'Portable Hand Held Electrical Tools, Tool Box Talk',
     'pagesUrl' => '/Course/View/Pages/PortableHandHeldElectricalToolsToolBoxTalk',
     'sendUrl' => '/Course/Send',
     'pages' => [
       $this->PortableHandHeldElectricalToolsToolBoxTalkPages()
     ],
     'courseTopics' => '',
   ];
 }

 public function PortableHandHeldElectricalToolsToolBoxTalkCourse(){
   return view('course.course')->with($this->PortableHandHeldElectricalToolsToolBoxTalkData());
 }
// End Course


// Start Course
 public function PersonalProtectiveEquipmentToolBoxTalkPages(){
   return [
     [
       'id' => 1,
       'content' => '<p><strong>Reason - </strong>The dangers arising from many hazardous activities can only be controlled by the use or wearing of PPE.</p>
        <p><strong>Why - </strong>In many cases, it is not possible to completely eliminate hazards by other means.</p>
        <p><strong>Outline - </strong>This talk will cover the measures necessary to ensure that the use of PPE is effective.</p>
        <p><strong>What is PPE?</strong></p>
        <p>1. PPE is equipment or clothing worn to protect the user from known hazards in the workplace.</p>
        <p>2. In construction, the most commonly worn items of PPE are safety helmets, high visibility clothing and safety footwear.</p>
        <p>3. Other examples of PPE are respirators, safety harnesses, ear-plugs, safety goggles, protective gloves and also some clothing.</p>
        <p><strong>Limitations</strong></p>
        <p>1. PPE will only protect the user.</p>
        <p>2. It must be used in accordance with the manufacturer&rsquo;s instructions and any training provided; do not misuse PPE.</p>
        <p>3. The actual level of effectiveness is difficult to assess.</p>
        <p>4. It must be in good condition to be fully effective; do not mistreat PPE, your health or life might depend upon it.</p>
        <p><strong><em>Q: How much can your employer charge you for PPE?</em></strong></p>
        <p><strong>What your employer must do</strong></p>
        <p>1. Assess the risks to employees&rsquo; health and safety arising from the work activities.</p>
        <p>2. Try to organise work activities so that PPE is not necessary.</p>
        <p>3. Where PPE is necessary, select appropriate items that suit the wearer and are &rsquo;CE marked&rsquo;.</p>
        <p>4. Supply employees with the necessary PPE at no cost.</p>
        <p>5. Train employees to use it and explain its limitations, where this is necessary, and the implications of not using it.</p>
        <p>6. Ensure compatibility if more than one item of PPE is worn.</p>
        <p>7. Ensure that PPE is maintained where appropriate.</p>
        <p>8 Replace defective or lost PPE, at no cost to the user.</p>'
     ],
     [
       'id' => 2,
       'content' => '<p><strong><em>Q: What factors will determine the life of a safety helmet?</em></strong></p>
        <p><strong>What you must do</strong></p>
        <p>1. Use PPE in accordance with instructions and training given.</p>
        <p>2. Return PPE to its storage, where provided, after use.</p>
        <p>3. Take reasonable care of your PPE and report its loss or any damage to it to your employer.</p>
        <p>4. Never work without PPE when it is known to be necessary.</p>
        <p><strong><em>Q: In which ways do you think that wearing PPE could increase the dangers to you?</em></strong></p>
        <p><strong>Do you have any questions for me?</strong></p>
        <p><strong>Questions for you</strong></p>
        <p><strong><em>Q: What should you do if you find an item of your PPE is damaged?</em></strong></p>
        <p><strong><em>Q: What should you look for on any item of PPE to confirm that it has been made to the required standard?</em></strong></p>
        <p><strong>REMEMBER </strong>PPE CAN BE A LIFE-SAVER: USE IT PROPERLY AND LOOK AFTER IT, AND IT SHOULD LOOK AFTER YOU.</p>
        <p><em>Further information</em></p>
        <p>&bull; <em>Construction Site Safety </em>(GE 700) &ndash; B2</p>
        <p>&bull; <em>Site Safety Simplified </em>(GE 706) &ndash; Chapter 16</p>
        <p>&bull; HSE &ndash; HSG150 Health and safety in construction</p>
        <p>&bull; HSE &ndash; L25 Personal protective equipment at work</p>'
     ],
   ];
 }

 public function PersonalProtectiveEquipmentToolBoxTalkData(){
   return [
     'title' => 'Personal Protective Equipment Tool Box Talk',
     'course' => 'Personal Protective Equipment Tool Box Talk',
     'pagesUrl' => '/Course/View/Pages/PersonalProtectiveEquipmentToolBoxTalk',
     'sendUrl' => '/Course/Send',
     'pages' => [
       $this->PersonalProtectiveEquipmentToolBoxTalkPages()
     ],
     'courseTopics' => '',
   ];
 }

 public function PersonalProtectiveEquipmentToolBoxTalkCourse(){
   return view('course.course')->with($this->PersonalProtectiveEquipmentToolBoxTalkData());
 }
// End Course


// Start Course
 public function ManualHandlingToolBoxTalkPages(){
   return [
     [
       'id' => 1,
       'content' => '<p><strong>Reason - </strong>Every year, a significant proportion of all injuries at work are caused by manual handling.</p>
        <p><strong>Why - </strong>Get it wrong today and you&rsquo;ll suffer the consequences tomorrow.</p>
        <p><strong>Outline - </strong>This talk will cover considerations and good techniques for manual handling.</p>
        <p><strong>Considerations for manual handling</strong></p>
        <p>1. Always use mechanical handling methods instead of manual handling if possible, e.g. forklifts or pallet trucks, etc.</p>
        <p>2. Know your capabilities, only tackle jobs you can handle.</p>
        <p>3. Can you handle the load yourself, or do you need assistance?</p>
        <p>4. Is there a clear walkway with good lighting to the work area?</p>
        <p><strong><em>Q: What checks should you carry out before lifting?</em></strong></p>
        <p>5. Where possible, establish the weight of the load before starting to lift.</p>
        <p>6. Wear gloves to protect against cuts and puncture wounds.</p>
        <p>7. Wear safety boots or shoes to protect from falling loads.</p>
        <p>8. Carry out a trial lift by rocking the load from side to side, then try lifting it a small way to get a &lsquo;feel&rsquo; for it.</p>
        <p><strong><em>Q: What PPE should you wear and why?</em></strong></p>
        <p><strong>Good handling technique</strong></p>
        <p>1. Stand reasonably close to the load, feet hip-width apart, one foot slightly forward pointing in the direction you&rsquo;re going.</p>
        <p>2. Bend your knees and keep your back straight.</p>
        <p>3. Get a secure grip on the load.</p>
        <p>4. Breathe in before lifting as this helps to support the spine.</p>
        <p><strong><em>Q: Describe how you would lift an object safely.</em></strong></p>
        <p>5. Use a good lifting technique, keep your back straight and lift using your legs.</p>
        <p>6. Keep the load close to your body.</p>
        <p>7. Don&rsquo;t carry a load that obscures your vision.</p>
        <p>8. Lift slowly and smoothly.</p>'
     ],
     [
       'id' => 2,
       'content' => '<p><strong><em>Q: What checks should you carry out before moving off with a load?</em></strong></p>
        <p>9. Avoid jerky movements.</p>
        <p>10. Avoid twisting your body when lifting or carrying a load.</p>
        <p>11. When lifting to a height from the floor, do it in two stages.</p>
        <p>12. When two or more people lift a load, one person must give directions to co-ordinate the lift.</p>
        <p><strong><em>Q: When two or more people are lifting a load, what should happen?</em></strong></p>
        <p>&bull; <strong>Note to supervisor: </strong>Now inform your workforce of the company policy regarding manual handling.</p>
        <p><strong>Do you have any questions for me?</strong></p>
        <p><strong>Questions for you</strong></p>
        <p><strong><em>Q: What should be your first consideration before manual handling?</em></strong></p>
        <p><strong><em>Q: What should you do to help support your spine?</em></strong></p>
        <p><strong><em>Q: Name two hazards when lifting and carrying.</em></strong></p>
        <p><strong>REMEMBER </strong>POOR MANUAL HANDLING TECHNIQUES CAN CAUSE SERIOUS INJURIES.</p>
        <p><em>Further information</em></p>
        <p>&bull; <em>Construction Site Safety </em>(GE 700) &ndash; Module B7</p>
        <p>&bull; <em>Site Safety Simplified </em>(GE 706) &ndash; Chapter 17</p>
        <p>&bull; HSE &ndash; HSG60 Upper limb disorders in the workplace</p>
        <p>&bull; HSE &ndash; INDG143 (Rev 2) Getting to grips with manual handling</p>
        <p>&bull; HSE &ndash; L23 (Pub. 2004) Manual handling</p>'
     ],
   ];
 }

 public function ManualHandlingToolBoxTalkData(){
   return [
     'title' => 'Manual Handling Tool Box Talk',
     'course' => 'Manual Handling Tool Box Talk',
     'pagesUrl' => '/Course/View/Pages/ManualHandlingToolBoxTalk',
     'sendUrl' => '/Course/Send',
     'pages' => [
       $this->ManualHandlingToolBoxTalkPages()
     ],
     'courseTopics' => '',
   ];
 }

 public function ManualHandlingToolBoxTalkCourse(){
   return view('course.course')->with($this->ManualHandlingToolBoxTalkData());
 }
// End Course


// Start Course
 public function LaddersToolBoxTalkPages(){
   return [
     [
       'id' => 1,
       'content' => '<p><strong>Reason - </strong>Ladders are probably the most used and misused pieces of access equipment.</p>
        <p><strong>Why - </strong>Use ladders safely to prevent accidents.</p>
        <p><strong>Outline - </strong>This talk will cover before-use checks, use of ladders, the associated hazards and</p>
        <p>restrictions.</p>
        <p><strong>Before-use checks</strong></p>
        <p>1. Ladders must be stored correctly and inspected regularly.</p>
        <p>2. Check for splits or cracks in the stiles and rungs.</p>
        <p>3. Ensure that none of the rungs are missing or loose.</p>
        <p>4. Don&rsquo;t use painted ladders, paint can hide damaged parts.</p>
        <p>5. Report defects, label as defective and remove from site.</p>
        <p><strong><em>Q: What checks should you carry out before use?</em></strong></p>
        <p><strong>Use of ladders</strong></p>
        <p>1. Only light work of a short duration, with a low risk of falling, should be carried out from a ladder.</p>
        <p>2. Ladders should be set on a firm base and lean at the correct angle which is <strong>one </strong>unit out to <strong>four </strong>units up.</p>
        <p>3. Ladders must be tied near the top and extend a safe distance above the landing stage, unless a hand-hold is provided.</p>
        <p>4. If it can&rsquo;t be secured at the top, it may be possible to secure it at the bottom by tying it to stakes driven into the ground.</p>
        <p><strong><em>Q: At what angle should a ladder be placed?</em></strong></p>
        <p>5. Ensure your footwear is free from excessive mud or grease before you climb up the ladder.</p>
        <p>6. When climbing up or down, use both hands on the stiles. Always face the ladder.</p>
        <p>7. Don&rsquo;t overreach from a ladder, always move it.</p>
        <p><strong><em>Q: How can the stability of the ladder be improved?</em></strong></p>
        <p><strong>Hazards</strong></p>
        <p>1. Don&rsquo;t stand a ladder on a drum, box or other unstable base.</p>
        <p>2. Never attempt to repair broken ladders.</p>
        <p>3. Never carry loads up ladders &ndash; use a hoist.</p>
        <p>4. Ladder rungs must not be used as improvised ramps.</p>
        <p>5. When using metal or metal-reinforced ladders, make sure there are no electrical hazards in the near vicinity.</p>'
     ],
     [
       'id' => 2,
       'content' => '<p><strong><em>Q: What precautions should you take when using a metal ladder?</em></strong></p>
        <p><strong>Restrictions</strong></p>
        <p>1. Health and safety law on work at height requires that careful consideration is given before the use of a ladder is approved.</p>
        <p>2. You may find that you are not now allowed to use a ladder to do a job for which you have used one in the past.</p>
        <p><strong>Do you have any questions for me?</strong></p>
        <p><strong>Questions for you</strong></p>
        <p><strong><em>Q: What would you do on finding a defective ladder?</em></strong></p>
        <p><strong><em>Q: What is the correct way to climb a ladder?</em></strong></p>
        <p>&bull; <strong>Note to supervisor</strong>: Now inform your workforce of the company policy regarding the use of ladders.</p>
        <p><em>Further information</em></p>
        <p>&bull; <em>Construction Site Safety </em>(GE 700) &ndash; Module C2</p>
        <p>&bull; <em>Site Safety Simplified </em>(GE 706) &ndash; Chapter 5</p>
        <p>&bull; HSE &ndash; HSG150 Health and safety in construction</p>'
     ],
   ];
 }

 public function LaddersToolBoxTalkData(){
   return [
     'title' => 'Ladders Tool Box Talk',
     'course' => 'Ladders Tool Box Talk',
     'pagesUrl' => '/Course/View/Pages/LaddersToolBoxTalk',
     'sendUrl' => '/Course/Send',
     'pages' => [
       $this->LaddersToolBoxTalkPages()
     ],
     'courseTopics' => '',
   ];
 }

 public function LaddersToolBoxTalkCourse(){
   return view('course.course')->with($this->LaddersToolBoxTalkData());
 }
// End Course


// Start Course
 public function ElectricityonSiteToolBoxTalkPages(){
   return [
     [
       'id' => 1,
       'content' => '<p><strong>Reason - </strong>Unseen, unheard, electricity can cause death or serious injury without warning.</p>
        <p><strong>Why - </strong>Your body is an extremely good conductor of electricity &ndash; don&rsquo;t find out the hard way.</p>
        <p><strong>Outline - </strong>This talk will cover underground cables and overhead power lines.</p>
        <p><strong>Underground cables</strong></p>
        <p>1. Before digging, check plans provided by the local electricity company, telephone company and cable TV company.</p>
        <p>2. Before digging, use a cable-locating device that is in good working order. Ensure you are trained to use it.</p>
        <p>3. Assume all cables are live, unless your supervisor tells you they are dead.</p>
        <p>4. Hand dig trial holes to expose cables, look for marker tape or tiles above the cables. Continue using the cable locator to establish exact location.</p>
        <p>5. Don&rsquo;t assume that a buried cable will run in a straight line between two known points.</p>
        <p><strong><em>Q: Before digging, name two things that must be done.</em></strong></p>
        <p>6. When exposed, protect the cable from damage and support it.</p>
        <p>7. If the cable is accidentally damaged, keep everyone clear until the electricity company has inspected it.</p>
        <p>8. During back-filling, ensure marker tapes or tiles are replaced.</p>
        <p>9. If using power tools to break up concrete surfaces, avoid over penetration as the cable may be directly underneath.</p>
        <p><strong><em>Q: What action would you take if you accidentally damaged an underground electric cable?</em></strong></p>
        <p><strong>REMEMBER </strong>PLAN &ndash; LOCATE &ndash; DIG.</p>
        <p><strong>Overhead power lines</strong></p>
        <p>1. Until it is proved different, treat all overhead lines as live and dangerous.</p>
        <p>2. Ensure you know the maximum clearance distances specified by the electricity company.</p>
        <p>3. Do not bypass &lsquo;goal posts&rsquo;, barriers or other warnings.</p>
        <p>4. Check your route is clear of overhead power lines before moving a mobile scaffold tower or metal ladder.</p>'
     ],
     [
       'id' => 2,
       'content' => '<p><strong><em>Q: Who should you ask what the safe working distance is?</em></strong></p>
        <p>5. If signalling, always keep power lines in view. Guide plant under power lines where &lsquo;goal posts&rsquo; have been erected.</p>
        <p>6. Ensure you observe special precautions laid down by the electricity company before working under overhead lines.</p>
        <p>7. If erecting scaffolding adjacent to power lines, ensure the poles are handled a safe distance away.</p>
        <p>8. Don&rsquo;t stack materials or operate tippers under power lines, it will reduce the safe clearance and can result in arcing.</p>
        <p><strong><em>Q: When erecting scaffolding close to power lines, what precautions must you take?</em></strong></p>
        <p><strong>Do you have any questions for me?</strong></p>
        <p><strong>Questions for you</strong></p>
        <p><strong><em>Q: What must you remember during back-filling?</em></strong></p>
        <p><strong><em>Q: As a signaller, what must you always keep in view?</em></strong></p>
        <p><strong>REMEMBER </strong>DON&rsquo;T LET A &lsquo;LIVE&rsquo; TAKE A &lsquo;LIFE&rsquo;!</p>
        <p><em>Further information</em></p>
        <p>&bull; <em>Construction Site Safety </em>(GE 700) &ndash; Modules E2 and E4</p>
        <p>&bull; <em>Site Safety Simplified </em>(GE 706) &ndash; Chapters 7 and 11</p>
        <p>&bull; HSE &ndash; GS6 Avoidance of danger from overhead electrical lines</p>
        <p>&bull; HSE &ndash; HSG47 Avoiding danger from underground services</p>'
     ],
   ];
 }

 public function ElectricityonSiteToolBoxTalkData(){
   return [
     'title' => 'Electricity on Site Tool Box Talk',
     'course' => 'Electricity on Site Tool Box Talk',
     'pagesUrl' => '/Course/View/Pages/ElectricityonSiteToolBoxTalk',
     'sendUrl' => '/Course/Send',
     'pages' => [
       $this->ElectricityonSiteToolBoxTalkPages()
     ],
     'courseTopics' => '',
   ];
 }

 public function ElectricityonSiteToolBoxTalkCourse(){
   return view('course.course')->with($this->ElectricityonSiteToolBoxTalkData());
 }
// End Course


// Start Course
 public function COSHHToolboxTalkPages(){
   return [
     [
       'id' => 1,
       'content' => '<p><strong>Reason - </strong>Hazardous substances can be used in, or created by, construction processes.</p>
        <p><strong>Why -&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Ignore a hazardous substance today and you may wish you hadn&rsquo;t by tomorrow. If you are not sure, <strong>ask</strong>.</p>
        <p><strong>Outline - </strong>This talk will cover risk assessment, hazards, control measures and safe use of &nbsp;&nbsp;&nbsp;substances.</p>
        <p><strong>Risk assessment</strong></p>
        <p>1. A competent person must carry out a risk assessment to decide whether:</p>
        <p>&bull; Exposure to a substance can be avoided</p>
        <p>&bull; Alternative work methods can reduce exposure</p>
        <p>&bull; A less hazardous substance can be used.</p>
        <p>2. Any substance with a hazard warning label has the potential to cause harm &ndash; the risk must be assessed before it is used.</p>
        <p><strong><em>Q: Before using a substance, what should you consider?</em></strong></p>
        <p><strong>Hazards</strong></p>
        <p>1. How you could be affected by a hazardous substance through:</p>
        <p>&bull; Ingestion &ndash; eating contaminated food</p>
        <p>&bull; Inhalation &ndash; breathing harmful dust or fumes</p>
        <p>&bull; Absorption &ndash; chemicals entering through cuts, etc.</p>
        <p>2.<strong> Examples</strong> of hazardous substances:</p>
        <ul>
            <li>Water Treatment Chemicals</li>
            <li>Paints</li>
            <li>Ink & Adhesive Cleaners</li>
            <li>Degreasing Agents</li>
            <li>Treatment Pens</li>
            <li>Pesticides</li>
        </ul>
        <p>3. Don&rsquo;t mix chemicals or substances unless it is a safe and authorised process.</p>
        <p><strong><em>Q: Name the three ways a substance can enter your body.</em></strong></p>
        <p><strong>Control measures</strong></p>
        <p>1. When using hazardous substances, wear the correct PPE.</p>
        <p>2. Know how to look after and use PPE correctly.</p>
        <p>3. Know where washing and first-aid facilities are.</p>
        <p>4. Ensure hazardous substances are put back into a secure location after &ndash; do not leave on site.</p>
        <p>5. Don&rsquo;t store hazardous substances above head height.</p>'
     ],
     [
       'id' => 2,
       'content' => '<p><strong><em>Q: Where should substances be put at the end of a shift?</em></strong></p>
        <p><strong>Safe use of substances</strong></p>
        <p>1. Make sure you are trained to use hazardous substances.</p>
        <p>2. Read and comply with the COSHH assessment and the instructions on the product label.</p>
        <p>3. Don&rsquo;t eat, drink or smoke when handling substances.</p>
        <p>4. Don&rsquo;t expose workers to fumes, dust, gas or other dangers from hazardous substances due to your work.</p>
        <p>5. Always wash at the end of each shift and before eating.</p>
        <p><strong><em>Q: Where can you obtain information about the hazardous substance you are using?</em></strong></p>
        <p><strong>Do you have any questions for me?</strong></p>
        <p><strong>Questions for you</strong></p>
        <p><strong><em>Q: What can you wear to protect against substances?</em></strong></p>
        <p><strong><em>Q: Name five hazardous substances you may find on site.</em></strong></p>
        <p><strong>REMEMBER - </strong>KNOW WHAT PPE TO WEAR TO PROTECT AGAINST THE HAZARD.</p>
        <p><em>Further information</em></p>
        <p>&bull; HSE &ndash; HSG97 A step by step guide to COSHH assessment</p>
        <p>&bull; HSE &ndash; HSG193 COSHH essentials</p>
        '
     ],
   ];
 }

 public function COSHHToolboxTalkData(){
   return [
     'title' => 'COSHH Toolbox Talk',
     'course' => 'COSHH Toolbox Talk',
     'pagesUrl' => '/Course/View/Pages/COSHHToolboxTalk',
     'sendUrl' => '/Course/Send',
     'pages' => [
       $this->COSHHToolboxTalkPages()
     ],
     'courseTopics' => '',
   ];
 }

 public function COSHHToolboxTalkCourse(){
   return view('course.course')->with($this->COSHHToolboxTalkData());
 }
// End Course


// Start Course
 public function AsbestosToolBoxTalkPages(){
   return [
     [
       'id' => 1,
       'content' => '<p><strong>Reason - </strong>Up to 3,000 people a year, from all industries, die from asbestos-related diseases.</p>
        <p><strong>Why -</strong>Be aware of asbestos &ndash; it could kill you.</p>
        <p><strong>Outline -</strong>This talk will cover where you will find asbestos, how it can affect you and hazardous work.</p>
        <p><strong>Where you will find asbestos</strong></p>
        <p>1. Insulation and sprayed coatings used for:</p>
        <p>&bull; Boilers, plant and pipework hidden in underfloor ducting</p>
        <p>&bull; Fire protection to steelwork, hidden behind false ceilings</p>
        <p>&bull; Thermal and acoustic insulation of buildings</p>
        <p>&bull; Some textured coatings and paints</p>
        <p>&bull; Friction materials such as brake linings and clutch plates</p>
        <p>&bull; Gaskets and packings in engines, heating and ventilation systems.</p>
        <p><strong><em>Q: Where will you find insulation and sprayed coatings?</em></strong></p>
        <p>2. Insulating board used in the following places:</p>
        <p>&bull; Fire protection to doors, protected exits and steelwork</p>
        <p>&bull; Claddings on walls and ceilings</p>
        <p>&bull; Internal walls, partitions and suspended ceiling tiles.</p>
        <p><strong><em>Q: Where will you find insulating boards?</em></strong></p>
        <p>3. Asbestos cement, which is found as:</p>
        <p>&bull; Corrugated roofing and cladding sheets of buildings</p>
        <p>&bull; Flat sheets for partitions, cladding and door facings</p>
        <p>&bull; Rainwater gutters and downpipes.</p>
        <p><strong><em>Q: Where will you find asbestos cement?</em></strong></p>
        <p><strong>How asbestos can affect you</strong></p>
        <p>1. Asbestos breaks into tiny, long, sharp fibres. They can get lodged and scar the lungs, causing asbestosis or fibrosis.</p>
        <p>2. Asbestos fibres may also cause lung cancer.</p>
        <p>3. It can also cause mesothelioma, a cancer of the inner lining of the chest wall. This cancer is incurable.</p>
        <p>4. Smokers are at much greater risk of asbestos-related diseases.</p>'
     ],
       [
           'id' => 2,
           'content' => '<p><strong><em>Q: In what ways can asbestos fibres affect you?</em></strong></p>
            <p><strong>Hazardous work</strong></p>
            <p>1. Anyone working on building repair and refurbishment are considered most at risk.</p>
            <p>2. Old buildings constructed in the 1950s and 60s may have many forms of asbestos-containing materials used in them.</p>
            <p>3. The removal of roofing felts, old floor tiles, textured paints and plasters containing asbestos can be hazardous.</p>
            <p>4. If you think you&rsquo;ve come across asbestos, stop work and tell your supervisor or foreman.</p>
            <p><strong><em>Q: What are some of the hazardous work areas?</em></strong></p>
            <p>&bull; <strong>Note to supervisor: </strong>Now inform your workforce of the company policy regarding the discovery of suspected asbestos.</p>
            <p><strong>Do you have any questions for me?</strong></p>
            <p><strong>Questions for you</strong></p>
            <p><strong><em>Q: What would you do if you thought that you had discovered asbestos materials in your work area?</em></strong></p>
            <p><strong><em>Q: What diseases can exposure to asbestos cause?</em></strong></p>
            <p><strong>REMEMBER </strong>IF YOU SUSPECT ASBESTOS, STOP WORK IMMEDIATELY AND TELL YOUR SUPERVISOR.</p>
            <p><em>Further information</em></p>
            <p>&bull; <em>Construction Site Safety </em>(GE 700) &ndash; Module B8</p>
            <p>&bull; <em>Site Safety Simplified </em>(GE 706) &ndash; Chapter 15</p>
            <p>&bull; HSE &ndash; HSG210 Asbestos essentials task manual</p>
            <p>&bull; HSE &ndash; INDG188 Asbestos alert</p>
            <p>&bull; HSE &ndash; INDG289 Working with asbestos in buildings</p>'
       ]
   ];
 }

 public function AsbestosToolBoxTalkData(){
   return [
     'title' => 'Asbestos Tool Box Talk',
     'course' => 'Asbestos Tool Box Talk',
     'pagesUrl' => '/Course/View/Pages/AsbestosToolBoxTalk',
     'sendUrl' => '/Course/Send',
     'pages' => [
       $this->AsbestosToolBoxTalkPages()
     ],
     'courseTopics' => '',
   ];
 }

 public function AsbestosToolBoxTalkCourse(){
   return view('course.course')->with($this->AsbestosToolBoxTalkData());
 }
// End Course



// Start Course
 public function AlcoholandDrugsToolBoxTalkPages(){
   return [
     [
       'id' => 1,
       'content' => '<p><strong>Reason - </strong>Statistics show that alcohol and drug use are increasing on site. This leads to accidents.</p>
            <p><strong>Why - </strong>Make sure it doesn&rsquo;t happen on this site.</p>
            <p><strong>Outline - </strong>This talk will cover the effects of alcohol and drugs on your safety and others.</p>
            <p><strong>Alcohol</strong></p>
            <p>1. In a high-risk industry like ours, alcohol and work do not mix well.</p>
            <p>2. Alcohol is a drug that depresses parts of the brain function. When working on site you require all of your brain functions to save you from injury.</p>
            <p>3. If you&rsquo;re found to be intoxicated with drink, you won&rsquo;t be allowed on site. You may end up losing your job.</p>
            <p>4. Don&rsquo;t get drunk the night before and expect to work safely on site the next day. Alcohol may take more time than you think to work out of your system.</p>
            <p><strong><em>Q: What effect can alcohol have on you?</em></strong></p>
            <p>5. Many drivers who are killed in a road accident are over the legal alcohol in blood limit.</p>
            <p>6. If you drink, don&#39;t drive.</p>
            <p>7. Some workplace fatal accidents are alcohol-related.</p>
            <p>8. Keep your head clear &ndash; leave your drinking sessions to social events, where you can&rsquo;t cause injury to yourself or others.</p>
            <p>9. Get a bad reputation for drinking and you may not get another job as you&rsquo;ll be seen as a liability.</p>
            <p><strong><em>Q: What could be the result of being under the influence of alcohol on site?</em></strong></p>
            <p><strong>Drugs</strong></p>
            <p>1. You are far more likely to have an accident on site when under the influence of drugs.</p>
            <p>2. Drugs prescribed by your doctor could make you unfit for work, as can illegal drugs.</p>
            <p>3. You may feel you don&rsquo;t have a drug problem &ndash; that it&rsquo;s got nothing to do with you. But if you get hurt, it&rsquo;s a bit late to wonder what the other person was on.</p>
            <p>4. If you know somebody is on drugs, tell your supervisor &ndash; help to stamp it out.</p>
            <p>5. Signs to look for: watery eyes, pinpoint or dilated pupils, running nose, constant sniffing, tight lips, sores, ulcers, trembling, fatigue and irritability. If you see it, report it.</p>'
     ],
     [
       'id' => 2,
       'content' => '<p><strong><em>Q: What are the signs of somebody who is on drugs?</em></strong></p>
            <p>6. All drugs can affect your ability to work safely.</p>
            <p>7. Some effects of drugs: slow reaction times, clumsiness, poor decision-making and distorted vision.</p>
            <p>8. Don&#39;t take &lsquo;E&rsquo;s &ndash; &lsquo;E&rsquo; stands for &lsquo;Ex-employee&rsquo;.</p>
            <p>9. If you get offered drugs, say no, you&rsquo;d rather work safely!</p>
            <p>10. Drugs and work don&rsquo;t mix. Don&rsquo;t let it become a problem.</p>
            <p><strong><em>Q: If you took drugs, what effect could it have on you and your workmates?</em></strong></p>
            <p>&bull; <strong>Note to supervisor: </strong>Now inform your workforce of the company policy regarding alcohol and drug misuse.</p>
            <p><strong>Do you have any questions for me?</strong></p>
            <p><strong>Questions for you</strong></p>
            <p><strong><em>Q: How long does a pint of beer take to get out of your system?</em></strong></p>
            <p><strong><em>Q: What would you do if you saw a person taking drugs?</em></strong></p>
            <p><em>Further information</em></p>
            <p>&bull; <em>Construction Site Safety </em>(GE 700) &ndash; Module F4</p>
            <p>&bull; <em>Site Safety Simplified </em>(GE 706) &ndash; Chapter 14</p>
            <p>&bull; HSE &ndash; INDG91 (Rev 2) Drug misuse at work</p>
            <p>&bull; HSE &ndash; INDG240 Don&rsquo;t mix it!</p>'
     ],
   ];
 }

 public function AlcoholandDrugsToolBoxTalkData(){
   return [
     'title' => 'Alcohol and Drugs Tool Box Talk',
     'course' => 'Alcohol and Drugs Tool Box Talk',
     'pagesUrl' => '/Course/View/Pages/AlcoholandDrugsToolBoxTalk',
     'sendUrl' => '/Course/Send',
     'pages' => [
       $this->AlcoholandDrugsToolBoxTalkPages()
     ],
     'courseTopics' => '',
   ];
 }

 public function AlcoholandDrugsToolBoxTalkCourse(){
   return view('course.course')->with($this->AlcoholandDrugsToolBoxTalkData());
 }
// End Course


// Start WorkinginConfinedSpacesTrainingCourse Course
  public function WorkinginConfinedSpacesTrainingCoursePages(){
    return [
      [
        'id' => 1,
        'content' => '<h2>Introduction</h2>
        <p>
          Welcome and thank you for taking part in this training presentation.
        </p>
        <p>
          Every year a number of people are killed or seriously injured due to working in confined spaces, often because they are unaware of the dangers, poorly trained or do not have the correct safety equipment.
        </p>
        <p>
          This Working in Confined Spaces training course has been designed as an introduction to the topic so learners can understand more about safe work practices, suitable control measures and what the law says in regards to staying safe at work.
        </p>
        <p>
          This course is suitable for anyone whose work requires them to enter a confined space, including employees, managers, supervisors and rescuers. The course is designed as an introduction to working safely in confined spaces and so no pre-requisite training is needed.
        </p>
        <p>
          Many workplaces contain areas that are considered confined spaces because while they are not necessarily designed for people, they are large enough for workers to enter and perform certain jobs. A confined space also has limited or restricted means for entry or exit and is not designed for continuous occupancy.
        </p>
        <p>
          A confined space is any area which is substantially enclosed and where there are risks to health and safety from hazardous substances or hazardous conditions. If you, or your employees, are required to work under such conditions then regular training is recommended.
        </p>
        <p>
          This e-learning course provides awareness education. Depending on your company risk assessment, further training may be required to complete the all-round skills and knowledge to carry this forward practically in your organisation.
        </p>'
      ],
      [
        'id' => 2,
        'content' => '<h2>Confined Spaces Legislation</h2>
        <p>
          Confined spaces can present many dangers to those required to work in them. This can be due to the work activity, external factors, or the general nature of the confined space itself.
        </p>
        <p>
          Because of these dangers, employers have a legal responsibility to ensure that their employees are protected from harm. This includes carrying out a risk assessment and providing adequate emergency procedures. Employees also have a responsibility to ensure they are following any safety procedures set out.
        </p>
        <p>
          This training course aims to provide an introduction to working in confined spaces. It will explain the legal requirements surrounding this and how to carry out your job role safely.
        </p>
        <h2>
          What is a Confined Space?
        </h2>
        <p>
          The Health and Safety Executive defines a confined space as “a place which is substantially enclosed (though not always entirely), and where serious injury can occur from hazardous substances or conditions within the space or nearby (e.g. lack of oxygen).”
        </p>
        <p>
          A few examples of confined spaces include:
        </p>
        <ul>
          <li>Vats.</li>
          <li>Storage tanks.</li>
          <li>Silos.</li>
          <li>Sewers.</li>
          <li>Ship holds.</li>
          <li>Tanks.</li>
          <li>Vaults.</li>
          <li>Manholes.</li>
          <li>Lofts.</li>
        </ul>
        <p>
          However, a confined space is not necessarily enclosed on all sides, small, or difficult to work in, difficult to get in or out of, or a place where people don’t regularly work.
        </p>
        <p>
          Confined spaces that may be less obvious, but can be equally as dangerous, include:
        </p>
        <ul>
          <li>Open top chambers and vats.</li>
          <li>Combustion chambers in furnaces, etc.</li>
          <li>Ductwork.</li>
          <li>Tunnels, boreholes and wells.</li>
          <li>Excavations and trenches.</li>
          <li>Unventilated or poorly ventilated rooms.</li>
          <li>Cargo holds and freight containers.</li>
          <li>Cold storage rooms.</li>
        </ul>
        <p>
          Furthermore, sometimes a place that is not usually considered a confined space may become one under certain conditions.
        </p>
        <p>
          It’s important that these are also considered.
        </p>
        <p>
          For example, when there’s a change in the conditions inside or outside the space during welding which may consume some of the oxygen in the air and make the area hazardous. In this case, the status of the space will change depending on the circumstances.
        </p>'
      ],
      [
        'id' => 3,
        'content' => '
          <h2>
            Health and Safety Legislation
          </h2>
          <p>
            There are various pieces of health and safety legislation that relate to working in confined spaces.
          </p>
          <p>
            Under the <strong>Health and Safety at Work, etc. Act 1974,</strong> employers must assess the risks to employees, customers, and any other people who could be affected by their activities. They must also ensure that effective control measures are put in place to protect these people from harm.
          </p>
          <p>
            This legislation applies to anyone whose work involves, confined, or potentially confined spaces. Employers must, by law, assess the risks and ensure controls are in place to protect their workers from hazards to their health and safety.
          </p>
          <p>
            The <strong>Management of Health and Safety at Work Regulations 1999</strong> further require employers to carry out risk assessments, make appropriate arrangements to control the risks and ensure that workers are fully trained to carry out their jobs safely.
          </p>
          <p>
            Employers with fewer than five employees are exempt from the requirement to have a written health and safety policy, although it is still recommended that they keep an up-to-date record of the findings. This is beneficial if asked to show compliance with the law.
          </p>
          <h2>
            The Confined Spaces Regulations 1997
          </h2>
          <p>
            The Confined Spaces Regulations apply when the risk assessment has identified that there are risks of serious injury due to work in confined spaces.
          </p>
          <p>
            More specifically, the Confined Spaces Regulations contain the following requirements:
          </p>
          <ul>
            <li>No person at work shall enter a confined space to carry out work for any purpose unless it is not possible to carry out the job in any other way.</li>
            <li>No person at work shall enter or work in a confined space unless they are following a safe system of work.</li>
          </ul>
          <p>
            These regulations also state that no person at work should enter or work in a confined space unless:
          </p>
          <ul>
            <li>They have been appropriately trained to do so.</li>
            <li>There are suitable emergency rescue arrangements in place.</li>
          </ul>
          <p>
            Emergency arrangements must be suitable and sufficient and they must not put the rescuer in danger.
          </p>
          <p>
            Resuscitation equipment must also be available if it may be needed during emergency rescues.
          </p>
          <p>
            It’s the employer’s responsibility to ensure compliance with these requirements laid down by the regulations. It’s the employee’s responsibility to follow any health and safety procedures implemented.
          </p>
          <p>
            However, the Confined Spaces Regulations do not apply in some situations, namely:
          </p>
          <ul>
            <li>Activities on board a ship.</li>
            <li>Activities below ground in a mine.</li>
            <li>Diving operations.</li>
          </ul>
          <p>
            Each of these work activities has their own set of regulations with which to comply.
          </p>
          <h2>
            Other Related Legislation
          </h2>
          <p>
            Other legislation may also apply to your workplace depending on where the confined space is situated and which tasks are being carried out.
          </p>
          <p>
            For example, if the machinery you use has confined spaces within it where work is carried out, then the <strong>Provision and use of Work Equipment Regulations 1998 (PUWER)</strong> become relevant. This regulation requires employers to ensure that the equipment chosen is maintained correctly and that workers are protected from hazards while using it.
          </p>
          <p>
            If employees need to wear protective equipment for entering a confined space, then the <strong>Personal Protective Equipment at Work Regulations 1992</strong> apply. This requires employers to provide appropriate protective clothing and equipment for their employees.
          </p>
          <h2>
            Employee Responsibilities
          </h2>
          <p>
            As well as employers, employees also have duties under health and safety legislation.
          </p>
          <p>
            As an employee:
          </p>
          <ul>
            <li>You must take reasonable care of your own health and safety and that of other people who may be affected by your work.</li>
            <li>Under the Management of Health and Safety at Work Regulations 1999 (MHSWR), you must inform your employer of any danger to health and safety posed by a work activity.</li>
            <li>You must inform your employer of any shortcomings in the protection arrangements.</li>
            <li>You must cooperate with your employer’s health and safety arrangements.</li>
          </ul>
          <h2>
            What is a Risk Assessment?
          </h2>
          <p>
            Risk assessments are an essential component of good health and safety practices. They are important for all workplaces, from offices to warehouses, and are particularly vital for work in confined spaces.
          </p>
          <p>
            Confined spaces can be very dangerous, so it’s important that the risks are considered and controlled. It’s the role of the competent person (someone who is trained in the process) to conduct risk assessments and communicate their findings and control measures.
          </p>
          <p>
            This section of the course explains the essential steps in the risk assessment process so you understand the hazards and the appropriate control measures.
          </p>
          <p>
            A risk assessment is simply a careful examination of what in a workplace could cause harm to people. This is so that employers can see if they have taken enough precautions, or need to do more, to prevent their employees from harm.
          </p>
          <p>
            Under the Health and Safety at Work etc. Act 1974, employers are legally required to assess the risk in their workplace so that they can implement a plan to control the risks.
          </p>
          <p>
            The risk assessment process has five components:
          </p>
          <ol>
            <li>Identify the hazards.</li>
            <li>Decide who might be harmed and how.</li>
            <li>Evaluate the risks and decide on precautions.</li>
            <li>Record your findings and implement them.</li>
            <li>Review your assessment and update if necessary.</li>
          </ol>'
      ],
      [
        'id' => 4,
        'content' => '<p>When carrying out a risk assessment, it’s important to make use of all relevant information available about the confined space.
          </p>
          <p>
            For example, there may be information from engineering drawings, working plans, or data about relevant soil or geological conditions. This information will help to identify the hazards.
          </p>
          <p>
            Every aspect of the confined space needs to be considered, including its general condition, its dimensions, what substances may or may not be present, any contamination, and what could cause a problem.
          </p>
          <p>
            As an employee, you should be consulted when your employer is assessing the risks connected with entering or working in a confined space. This is because you are much more likely to know more about the working conditions than your employer does.
          </p>
          <h2>
            Step 1: Identify the hazards
          </h2>
          <p>
            The first step of a risk assessment is to identify the hazards in the confined space. Techniques for identifying hazards include:
          </p>
          <ul>
            <li><strong>Workplace observation.</strong> This involves looking at the confined space and assessing if there are any obvious hazards. Is it substantially or totally enclosed? Is there a risk of loss of consciousness, drowning, asphyxiation, fire or explosion due to the conditions present?</li>
            <li><strong>Feedback from employees.</strong> What do you think the dangers are? Have you encountered any risks while entering or working in the confined space?</li>
            <li><strong>Check manufacturers’</strong> instructions or data sheets. What does the machinery’s manufacturer recommend? Do they outline any hazards from use?</li>
            <li><strong>Review accident and ill health records.</strong> Have there been any accidents or near misses due to work in a confined space?</li>
          </ul>
          <p>
            Hazards may already be present in the confined space, while others may arise from work you carry out. Employers should consider every part of the work activity.
          </p>
          <h2>
            The Dangers of Confined Spaces
          </h2>
          <p>
            Hazards can arise in confined spaces for many different reasons. It’s therefore important that all of these are considered as part of the risk assessment and that everyone is aware of them.
          </p>
          <p>
            Oxygen deficiency can make breathing difficult, if not impossible. Examples include:
          </p>
          <ul>
            <li>Naturally occurring gases, where there is a reaction between some soils and the oxygen in the atmosphere.</li>
            <li>Carbon dioxide production, where groundwater reacts with limestone chippings and displaces the oxygen in the air.</li>
            <li>Burning operations, like welding, which consume oxygen.</li>
            <li>In ships’ holds, freight containers and lorries, etc., as a result of the cargo reacting with oxygen inside the space.</li>
            <li>Inside steel tanks and vessels when rust forms.</li>
          </ul>
          <p>
            Poisonous gases, fumes or vapours can lead to asphyxia or unconsciousness if not carefully controlled.
          </p>
          <p>
            They can:
          </p>
          <ul>
            <li>Build up in sewers, manholes, and pits connected to the system due to naturally occurring gases or from contaminated ground or leaks.</li>
            <li>Enter tanks or vessels from connecting pipes.</li>
            <li>Leak into trenches and pits located in contaminated land, such as old refuse tips and old gas works.</li>
          </ul>
          <p>
            Poisonous gases, fumes, and vapours are often a result of:
          </p>
          <ul>
            <li>Sludge or deposits that have been disturbed by cleaning.</li>
            <li>Not isolating fumes or vapours correctly.</li>
            <li>Using cleaning chemicals which affect the atmosphere or react with other substances present in the area.</li>
          </ul>
          <p>
            Liquids and solids pose a hazard as they can suddenly and quickly fill a confined space or release gases into it when disturbed.
          </p>
          <p>
            This may be a result of the work you are carrying out or inadvertently from a nearby process.
          </p>
          <p>
            Free-flowing solids, such as grain, sugar, flour, and coal dust, can also partially solidify or “bridge” in silos, causing blockages which can collapse unexpectedly. If a person is working in the area, they may be submerged by the solid and unable to breathe.
          </p>
          <p>
            If a liquid flows into the confined space it can lead to drowning or other serious health effects, depending on its corrosivity or toxicity. Note that drowning can occur in any depth of liquid.
          </p>
          <p>
            Fire and explosions can be caused by flammable substances, dusts, chemicals, fumes, or an excess of oxygen in the atmosphere if exposed to a source of ignition, like a spark or a source of heat.
          </p>
          <p>
            Residues left in tanks, or remaining on internal surfaces, can give off gas, fumes or vapours and so are particularly at risk from fire or explosion. Any confined space where dust is present in high concentrations is also at risk, such as flour silos.
          </p>
          <p>
            As well as being a potential source of ignition, hot working conditions can also cause health problems to workers. Hot conditions can dangerously increase body temperature and cause heat stroke or unconsciousness, particularly if the person has to wear heavy protective clothing. This can occur due to exposure to hot works, a heat source, or the sun.
          </p>'
      ],
      [
        'id' => 5,
        'content' => '<h2>Step 2: Decide who might be harmed and how</h2>
        <p>
          This step of the risk assessment involves looking at each specific hazard and then identifying the people who may be harmed by them.
        </p>
        <p>
          These people may be:
        </p>
        <ul>
          <li>Specific groups of employees.</li>
          <li>Customers.</li>
          <li>Visitors.</li>
          <li>Members of the public nearby.</li>
        </ul>
        <p>
          Some employees have particular requirements, such as younger workers, expectant mothers, or people with disabilities.
        </p>
        <p>
          Temporary workers, part-time workers, or sub-contractors need further consideration as they are likely to have limited knowledge of the conditions and dangers in the confined space.
        </p>
        <h2>
          Who is Most at Risk?
        </h2>
        <p>
          Some examples of people whose work may involve confined spaces are:
        </p>
        <ul>
          <li>Firefighters and police officers</li>
          <li>Miners.</li>
          <li>Construction workers.</li>
          <li>Installers of insulation.</li>
          <li>Water and sewer workers.</li>
          <li>Search and rescue workers.</li>
          <li>Plant workers.</li>
          <li>Aircrew.</li>
          <li>Military personnel.</li>
          <li>Shipbuilders.</li>
          <li>Vehicle painters.</li>
          <li>Tunnellers.</li>
          <li>Labourers and groundworkers.</li>
          <li>Engineers.</li>
        </ul>
        <h2>
          Step 3: Evaluate the risks and decide on precautions
        </h2>
        <p>
          For work in confined spaces, the first control should be to try and avoid work in confined spaces altogether.
        </p>
        <p>
          If work in the confined space cannot be avoided, then how can the risks be controlled so that harm is unlikely?
        </p>
        <p>
          Options include:
        </p>
        <ul>
          <li>Using a less risky work process.</li>
          <li>Preventing access to the confined space.</li>
          <li>Reorganising work to reduce the need for going into a confined space.</li>
          <li>Issuing personal protective equipment.</li>
          <li>Involving and training staff to ensure the precautions will work in practice and don’t introduce new hazards.</li>
        </ul>
        <h2>
          Step 4: Record your findings and implement them
        </h2>
        <p>
          It is recommended that the findings of the risk assessment are written down, even though, where there are fewer than five employees, this is not required by law.
        </p>
        <p>
          Having written findings means you can frequently look back on them. It also shows that all the risks have been considered.
        </p>
        <p>
          The findings need to show that:
        </p>
        <ul>
          <li>A proper check was made.</li>
          <li>You have considered who might be affected.</li>
          <li>You have dealt with all the obvious significant hazards, taking into account the number of people who could be involved.</li>
          <li>The precautions are reasonable and the remaining risk is low.</li>
          <li>Staff or their representatives have been involved.</li>
        </ul>
        <h2>
          Step 5: Review your assessment and Update if necessary
        </h2>
        <p>
          Employers should check on a regular basis whether there have been any changes in the workplace that may affect the risk assessment.
        </p>
        <p>
          This involves considering:
        </p>
        <ul>
          <li>Are there any improvements still to be made?</li>
          <li>Has there been employee feedback?</li>
          <li>Has anything been learnt from accidents and near misses?</li>
          <li>Has any new equipment or machinery been introduced?</li>
          <li>Are there any new employees that require training?</li>
        </ul>
        <p>
          The risk assessment then needs to be reviewed and updated in order to take into account what has been learnt.
        </p>'
      ],
      [
        'id' => 6,
        'content' => '<h2>Control Measures</h2>
        <p>
          After the risks have been considered, suitable control measures then need to be implemented.
        </p>
        <p>
          This is so that the identified hazards can be controlled so far as is reasonably practicable.
        </p>
        <p>
          This section of the course explains legal requirements surrounding control measures. It outlines what is needed from a safe system of work and various other control measures.
        </p>
        <p>
          Control measures are actions that can be taken to reduce the potential of exposure to a hazard.
        </p>
        <p>
          In regards to confined spaces, control measures should reduce the likelihood of harm to those who enter or work in the confined space.
        </p>
        <p>
          If the risk assessment has identified risks of serious injury from work in confined spaces, then the Confined Spaces Regulations 1997 apply and controls must be implemented to reduce the risk.
        </p>
        <p>
          The regulations require you to:
        </p>
        <ul>
          <li>In the first instance, avoid entry to confined spaces.</li>
          <li>If entry to a confined space is unavoidable, follow a safe system of work.</li>
          <li>Put in place adequate emergency arrangements before the work starts (these should be implemented by employers).</li>
        </ul>
        <h2>
          Avoiding Entering Confined Spaces
        </h2>
        <p>
          Before implementing control measures, you should first look at trying to avoid the need to enter the confined space in the first place.
        </p>
        <p>
          Ask yourself:
        </p>
        <ul>
          <li>Can the work be carried out in a different way?</li>
          <li>Can the work be planned differently?</li>
          <li>Is the work really necessary?</li>
        </ul>
        <p>
          You may be able to modify the work activity, or modify the confined space, so that entry isn’t necessary.
        </p>
        <p>
          Remember, the first action you should take is avoiding the need for work within the confined space.
        </p>
        <p>
          There are many ways that you can avoid entering confined spaces. Some example are:
        </p>
        <ul>
          <li><strong>Blockages</strong> can be cleared in silos by using remotely operated rotating flail devices, vibrators, or air purgers.</li>
          <li><strong>Remote cameras</strong> can be used for internal inspection of vessels.</li>
          <li><strong>Testing the atmosphere</strong> or <strong>sampling the contents</strong> of the confined space can be done from outside the space by using appropriate long tools and probes.</li>
          <li><strong>Cleaning a confined space,</strong> or removing residues from it, can be done from the outside using water, jetting, steam or chemical cleaning, long-handled tools, or in-place cleaning systems.</li>
        </ul>
        <h2>
          Safe Systems of Work
        </h2>
        <p>
          If entry into a confined space cannot be avoided, the regulations state that workers must follow a <strong>safe system of work.</strong>
        </p>
        <p>
          A safe system of work is simply a procedure that defines the safe methods of working, taking into account the hazards identified in the risk assessment.
        </p>
        <p>
          The regulations also state that a safe system of work for confined spaces must be implemented and written down to serve as a formal record that all hazards have been considered in advance.
        </p>
        <p>
          Employers should use the results of the risk assessment to identify what precautions are needed to reduce the risk of injury. These precautions will depend on the nature of the confined space, the associated risks, and the work involved.
        </p>
        <p>
          All employees are responsible for putting the safe system of work into practice and working in accordance with safe procedures. You must be properly trained and instructed in how to work safely and follow this at all times.
        </p>
        <p>
          Here are some safe systems of work for working in confined spaces.
        </p>'
      ],
      [
        'id' => 7,
        'content' => '<h2>Appointment of a supervisor:</h2>
        <p>
          Supervisors should be given responsibility to make sure that the necessary precautions are taken, to check safety at each stage, and may need to remain present while work is underway.
        </p>
        <p>
          The degree of supervision should be based on the findings of the risk assessment.
        </p>
        <p>
          <strong>Employers need to consider whether people are suitable for work:</strong>
        </p>
        <p>
          You must have adequate training and experience for working in confined spaces to ensure that you are competent and can work safely.
        </p>
        <p>
          Employers also need to consider any particular requirements of their employees. For example, does someone suffer from claustrophobia, are they fit to wear breathing apparatus, or do they have a health condition that makes work in a confined space difficult? All these things must be taken into account.
        </p>
        <p>
          Where the risk assessment highlights exceptional constraints due to the space’s physical layout, for example, if it isn’t very wide, individuals need to be of a suitable build to easily enter and leave the confined space.
        </p>
        <p>
          The safe system of work should take into consideration the following areas:
        </p>
        <p>
          <strong>Isolation:</strong><br />
          Isolation of mechanical and electrical equipment is essential if it could otherwise operate, or be operated, inadvertently. If gas, fumes, or vapours could enter the confined space then you will need to isolate the pipework. In all cases, a check should be made to ensure isolation is effective.
        </p>
        <p>
          <strong>Cleaning before entry:</strong><br />
          This may be necessary to ensure fumes don’t develop from existing residues while the work is being done.
        </p>
        <p>
          <strong>Size of the entrance:</strong><br />
          Is the entry to the confined space big enough to allow workers, wearing all the necessary protective equipment, to climb in and out easily and provide ready access and exit in an emergency?
        </p>
        <p>
          There should always be a safe way in and out of the confined space which is free of obstructions.
        </p>
        <p>
          A good supply of fresh air is vital in confined spaces to ensure you can breathe easily, healthily, and safely.
        </p>
        <p>
          It may be possible to increase the number of openings to the confined space and therefore improve natural ventilation. If this can’t be done, then mechanical ventilation may be needed to make sure there’s an adequate supply of fresh air. Fresh air should be drawn from a point where it’s not contaminated.
        </p>
        <p>
          Mechanical ventilation is essential where portable gas cylinders and diesel-fuelled equipment are used inside the confined space. This is due to the dangers from the build-up of engine exhaust fumes.
        </p>
        <p>
          Carbon monoxide in the exhaust from petrol-fuelled engines is also incredibly dangerous. As a result, this kind of machinery should never be used in a confined space.
        </p>
        <p>
          Testing the air may be necessary to check that the air is free from toxic and flammable vapours, and ensure that it is fit for workers to breathe.
        </p>
        <p>
          Testing should be carried out by a competent person using a suitable gas detector. This must be correctly calibrated.
        </p>
        <p>
          Where the risk assessment indicates that conditions in the confined space may change over the course of the work activity, continuous monitoring of the air may be needed.
        </p>
        <p>
          The atmosphere in a confined space can often be tested from the outside, without the need for entry, by drawing samples through a long probe. This should be the preferred method so as to avoid the need for entering the confined space.
        </p>
        <p>
          There may also be a need for special tools and lighting.
        </p>
        <p>
          Any equipment provided for use in a confined space must be suitable for its intended purpose. The risk assessment will identify what and where equipment is needed.
        </p>
        <p>
          Non-sparking tools and specially protected lighting are essential where flammable or potentially explosive atmospheres are likely.
        </p>
        <p>
          In certain confined spaces, such as inside metal tanks, suitable precautions to prevent electric shocks should be taken This includes the use of extra low voltage equipment (typically less than 25 V) and, where necessary, residual current devices.
        </p>
        <p>
          Fire prevention is an important consideration for a safe system of work.
        </p>
        <p>
          Wherever possible, flammable and combustible materials should not be stored in confined spaces that have not been specifically created or allocated for that purpose.
        </p>
        <p>
          If flammable materials accumulate as a result of work activities, remove them from the confined space as soon as possible and before they become a fire hazard.
        </p>
        <p>
          <strong>Lightning:</strong><br />
          Adequate and suitable lighting, including emergency lighting, should be provided for work in all confined spaces. It may need to be protected against knocks, or be waterproof, depending on the space’s conditions.
        </p>
        <p>
          Lighting should be specially protected if used in an explosive or flammable atmosphere. This is because the heat it produces can be a potential source of ignition for a fire or explosion.
        </p>
        <p>
          Certain confined spaces may also require special breathing apparatus.
        </p>
        <p>
          So far as is reasonably practicable, a confined space should be safe to work in without the need for personal protective equipment (PPE) and respiratory protective equipment (RPE).
        </p>
        <p>
          PPE and RPE should be a last resort, except for rescue work (including the work of the emergency services) because its use can make movement more difficult, it can make work in hot temperatures more risky, and it can be heavy for the user to wear.
        </p>
        <p>
          However, breathing apparatus is essential if the air inside the space cannot be made fit to breathe because of gas, fumes, vapours, or a lack of oxygen.
        </p>
        <p>
          Note that you should never try to “sweeten” the air in a confined space with oxygen as this can greatly increase the risk of a fire or explosion. Oxygen above the normal concentration in air may also have a toxic effect if inhaled.
        </p>
        <p>
          Adequate communication systems are essential for working in confined spaces.
        </p>
        <p>
          These are needed to enable communication between people inside and outside the confined space and to quickly summon help in an emergency.
        </p>
        <p>
          The system can be based on speech, tugs on a rope, a phone, or a radio etc. The aim is to ensure messages can be related easily, rapidly, and unambiguously between the relevant people.
        </p>
        <p>
          <strong>Raising the alarm:</strong><br />
          Consider how the alarm will be raised in an emergency. Does someone need to be positioned outside the confined space to keep watch and to communicate with anyone inside, raise the alarm quickly in an emergency, and take charge of the rescue procedures?
        </p>
        <p>
          Emergency arrangements should be in place for all work.
        </p>
        <p>
          These will need to cover all necessary rescue equipment, training, and practice drills. The arrangements should be in place before anyone enters or works in a confined space.
        </p>
        <p>
          Finally, employers need to consider working time, particularly whether there should be a limit on the time period that you’re allowed to work in the confined space.
        </p>
        <p>
          For example, work may become difficult or unsafe if you’re required to wear RPE, if the confined space is very small and movement is severely restricted, or if there are extremes of temperature or humidity.
        </p>
        <p>
          For a large confined space with multiple entry points, a logging or tally system may be necessary to check everyone in and out of the confined space and to control their duration of entry.
        </p>'
      ],
      [
        'id' => 8,
        'content' => '<h2>Permit to Work</h2>
        <p>
          A permit to work system is a formal written system. It’s usually required where there is a reasonably foreseeable risk of serious injury in entering or working in the confined space.
        </p>
        <p>
          The permit to work system is an essential part of the risk assessment process.
        </p>
        <h2>
          Whey is a permit to work necessary?
        </h2>
        <p>
          A permit to work ensures all elements of a safe system of work are in place before people are allowed to enter or work in a confined space.
        </p>
        <p>
          It is also a means of communication between site management, supervisors, and those carrying out the hazardous work. This is because a permit to work ensures that people are aware of the hazards and know that the confined space is considered safe. It therefore signals that work can begin.
        </p>
        <p>
          However, a permit to work is not simply permission to carry out a dangerous job. Everyone must be appropriately trained.
        </p>
        <p>
          A permit to work must have the following features:
        </p>
        <ul>
          <li>Clear identification of who may authorise particular jobs and who is responsible for specifying the necessary precautions. For example, in regards to isolation, air testing and emergency arrangements.</li>
          <li>Ensuring that contractors engaged to carry out work are included.</li>
          <li>Training and instruction in the issue of permits.</li>
          <li>Monitoring and auditing to make sure that the system works as intended.</li>
        </ul>
        <p>
          Put simply, the permit is a detailed document which authorises certain people to carry out specific work at a specific site at a certain time. It also sets out the main precautions needed to complete the job safely.
        </p>
        <h2>
          Emergency Procedures
        </h2>
        <p>
          Working in confined spaces is dangerous and, as a result, it’s essential that there are procedures in place in the event of an emergency.
        </p>
        <p>
          Under the Confined Spaces Regulations, employers must have emergency procedures in place before work in a confined space begins. They need to be able to show that they’ve considered the risks and have a rescue plan in place, should one be needed.
        </p>
        <p>
          This section of the course looks at the key components needed in an emergency plan and how to make sure it’s suitable and effective.
        </p>
        <p>
          If something goes wrong inside a confined space, then you may rapidly be exposed to serious and immediate danger. Therefore, effective arrangements for raising the alarm and carrying out emergency rescue operations are essential.
        </p>
        <p>
          Emergency arrangements depend on two aspects:
        </p>
        <ol>
          <li>The specific risks identified in the risk assessment.</li>
          <li>The likelihood of an emergency rescue being required.</li>
        </ol>
        <p>
          The Confined Spaces Regulations has an Approved Code of Practice, which details the requirements of a confined space emergency procedure.
        </p>
        <p>
          These are:
        </p>
        <ul>
          <li>Emergency procedures need to be suitable and sufficient.</li>
          <li>Emergency procedures must be in place before any person enters a confined space.</li>
          <li>If necessary, the arrangements must take into account the equipment needed for resuscitation procedures after the rescue.</li>
        </ul>
        <p>
          You should never just rely on the public emergency services alone. Having suitable emergency procedures in place is vital.
        </p>
        <p>
          To be suitable and sufficient, the arrangements for rescue and resuscitation should cover:
        </p>
        <ul>
          <li>Rescue and resuscitation equipment.</li>
          <li>Raising the alarm and rescue.</li>
          <li>Safeguarding the rescuers.</li>
          <li>Fire safety.</li>
          <li>Control of plant.</li>
          <li>First aid.</li>
          <li>Public emergency services.</li>
          <li>Training</li>
        </ul>
        <h2>
          Communication
        </h2>
        <p>
          In an emergency, it’s vital that information can be communicated from inside the confined space to outside.
        </p>
        <p>
          Without a level of communication, emergency rescue procedures wouldn’t be able to begin.
        </p>
        <p>
          For communication, you need to consider:
        </p>
        <ul>
          <li>How the emergency can be communicated from inside the space to outside.</li>
          <li>The type of system that will be used, such as a tug rope, radio, or phone.</li>
          <li>How often the communication system is tested.</li>
          <li>Which communication systems will be used when the premises are closed, at night, during weekends or for shift workers.</li>
        </ul>
        <h2>
          Rescue and Resuscitation Equipment
        </h2>
        <p>
          Suitable rescue and resuscitation equipment should be provided if the risk assessment has deemed it necessary.
        </p>
        <p>
          If resuscitation has been identified as a likely consequence, appropriate training should also be provided to enable resuscitation procedures to be carried out.
        </p>
        <p>
          Rescue equipment will often include lifelines and lifting equipment, additional sets of breathing apparatus, and first aid equipment.
        </p>
        <p>
          All equipment must be properly maintained and kept in good working condition. All rescuers need to be fully trained in how to use it correctly.
        </p>
        <p>
          “Self-rescue” equipment, such as breathing apparatus, may be appropriate in situations where there will be time for the worker to react to an anticipated emergency situation.
        </p>
        <h2>
          Capabilities of Rescuers
        </h2>
        <p>
          In order to carry out an emergency rescue, rescuers must:
        </p>
        <ul>
          <li>Be properly trained and sufficiently fit to carry out the rescue.</li>
          <li>Always be ready to attend to an emergency.</li>
          <li>Be capable of using all rescue equipment.</li>
          <li>Be protected against the cause of the emergency, such as any substances hazardous to health.</li>
        </ul>
        <p>
          Multiple fatalities have occurred when rescuers have been overcome by the same conditions that have affected the people they have tried to rescue.
        </p>
        <p>
          As a result, it’s important that you ensure the appropriate protection measures are in place.
        </p>
        <h2>
          Fire Safety
        </h2>
        <p>
          Where there is a risk of fire in the confined space, appropriate fire extinguishers may need to be kept at the space’s entry point.
        </p>
        <p>
          In some confined spaces, a sprinkler system may be appropriate.
        </p>
        <p>
          In the event of a fire, the emergency services should be called in case the fire cannot be contained or extinguished.
        </p>
        <p>
          Remember that flammable substances can collect in confined spaces. This makes a fire or explosion likely if they are exposed to a source of ignition, like a flame or spark.
        </p>'
      ],
      [
        'id' => 9,
        'content' => '<h2>Shut Down</h2>
        <p>
          Employers should consider whether, in the event of an emergency, it would be necessary to shut down any adjacent plant before attempting the rescue.
        </p>
        <p>
          Shut down may be required if:
        </p>
        <ul>
          <li>The plant is the cause of the emergency.</li>
          <li>Safe entry can’t be gained without the plant being shut down.
        </ul>
        <p>
          First Aid Procedures
        </p>
        <p>
          All workplaces must have adequate first aid procedures in place.
        </p>
        <p>
          In an emergency, it’s important that appropriate first aid equipment is on hand to treat injuries until professional medical help arrives.
        </p>
        <p>
          You should always have trained first aiders on site who are competent to make proper use of any first aid equipment.
        </p>
        <p>
          It’s also important that you know who has the responsibility for contacting the emergency services, should professional medical help be required.
        </p>
        <p>
          Emergency Services
        </p>
        <p>
          In regards to contacting the emergency services consider:
        </p>
        <ul>
          <li>What are the procedures for making the local emergency services aware of an incident?</li>
          <li>What information about the dangers in the confined space should be given to them upon arrival?</li>
          <li>Who has the responsibility for contacting the emergency services?
        </ul>
        <p>
          Consider whether the emergency services need to be notified before work in a confined space is undertaken.
        </p>
        <p>
          However, reliance on the emergency services alone will not be sufficient to comply with the regulations. Employers must put in place their own adequate emergency arrangements before work commences.
        </p>
        <p>
          Communication, Education, and Training
        </p>
        <p>
          The law requires all employers to provide appropriate and adequate training for their employees.
        </p>
        <p>
          This means:
        </p>
        <ul>
          <li>You should understand the risks posed by workplace hazards and how they can be reduced or eliminated.</li>
          <li>Managers need to know enough about health and safety to determine priorities and assess the performance of other employees.
        </ul>
        <p>
          Employers may need to appoint competent people to help make sure that employees are adequately trained and instructed.
        </p>
        <p>
          Everyone involved in emergency procedures must be suitably trained and receive refresher training on a regular basis, ideally every year as good practice.
        </p>
        <p>
          Training should include:
        </p>
        <ul>
          <li>An awareness of the Confined Spaces Regulations.</li>
          <li>An understanding of safe systems of work.</li>
          <li>The likely causes of an emergency.</li>
          <li>The use of rescue equipment.</li>
          <li>The check procedures to be followed when using apparatus.</li>
          <li>Testing of emergency equipment.</li>
          <li>Identifying defects and failures in equipment.</li>
          <li>Initiating an emergency response.</li>
          <li>Instruction on how to shut down plants as appropriate.</li>
          <li>Resuscitation procedures.</li>
          <li>Emergency first-aid</li>
          <li>Use of fire-fighting equipment.</li>
          <li>Liaison with emergency services.</li>
          <li>Rescue techniques.</li>
        </ul>
        <p>
          Training also needs to take into account:
        </p>
        <ul>
          <li>The practical use of safety features and equipment.</li>
          <li>The identification of defects.</li>
          <li>Where appropriate, it should involve demonstrations and practical exercises.</li>
        </ul>
        <p>
        You need to be familiar with both equipment and procedures before you work in confined spaces.
        </p>
        <p>
          Refresher training should be taken as frequently as is deemed appropriate.
        </p>'
      ],
    ];
  }

  public function WorkinginConfinedSpacesTrainingCourseData(){
    return [
      'title' => 'Working in Confined Spaces Training Course',
      'course' => 'Working in Confined Spaces Training Course',
      'pagesUrl' => '/Course/View/Pages/WorkinginConfinedSpacesTrainingCourse/',
      'sendUrl' => '/Course/Send',
      'pages' => [
        $this->WorkinginConfinedSpacesTrainingCoursePages()
      ],
      'courseTopics' => 'What is a Confined Space|The Confined Spaces Regulations 1997|Other related legislation|Workplace Stress|Employee responsibilities|The Dangers of Confined Spaces|Identifying the Hazards|Permit to Work|Safe Systems of Work|Emergency Procedures',
    ];
  }

  public function WorkinginConfinedSpacesTrainingCourse(){
    return view('course.course')->with($this->WorkinginConfinedSpacesTrainingCourseData());
  }
// End Course


// Start Course
  public function SeniorManagersandCertificationSchemeTrainingCoursePages(){
    return [
      [
        'id' => 1,
        'content' => '<h2>Introduction</h2>
        <p>Welcome and thank you for taking part in this e-learning training presentation.</p>
        <p>This is a guide to implementing the Senior Managers and Certification Regime (SM&CR) and training needs to be provided to Senior Managers, Certification Staff and other Conduct Rules staff on how the Conduct Rules apply to their roles. Training is required at least annually thereafter and training attendance should be recorded in employee CPD records.</p>'
      ],
      [
        'id' => 2,
        'content' => '<h2>What is the Senior Managers and Certification Regime?</h2>
        <p>The Senior Managers and Certification Regime (SM&CR) replaces the Approved Persons Regime (APR), changing how people working in financial services are regulated. In March 2016 the Financial Conduct Authority replaced the APR with the SM&CR for banking firms but the original legislation didn’t cover solo-regulated firms and so it is now extending this to all firms authorised to provide financial services under the FSMA from the 9th December 2019.</p>
        <p>Solo-regulated firms include credit brokers, insurance intermediaries and mortgage brokers for example.</p>
        <p>An Approved Person is an individual in a key position in a regulated consumer credit firm that needs to be authorised under the Approved Persons Regime and subject to a “fit and proper” test in order to perform a controlled function. An example of a Controlled Function is CF1 (Director). The APR will continue to apply in full until the start of the new regime.</p>
        <p>The SM&CR doesn’t require firms to change their governance structure or hire new people to fill specific roles and it won’t apply to Appointed Representatives – they will continue to be subject to the Approved Persons Regime.</p>
        <p>The aim of the SM&CR is to reduce harm to consumers and strengthen market integrity by making individuals more accountable for their conduct and competence. It affects almost every firm the FCA regulate, from very small firms and those with limited permissions to some of the largest global firms.</p>
        <p>The rules affect many more staff than the predecessor Approved Persons Regime (APR) which applied to a more limited set of Board members, senior executives and a few risk-taking staff.</p>
        <p>The new “regime” is actually not a single regime but three overlapping ones consisting of:</p>
        <ol>
        <li><strong>Senior Managers Regime</strong> – covers the senior people within the firm who perform Senior Manager Functions- these people need to be approved by the FCA.</li>
        <li><strong>Certification Regime</strong> – covers employees who are not Senior Managers but who carry out “significant harm” functions, known as Certification Functions.</li>
        <li><strong>Conduct Rules</strong> – these are the standards of behaviour applicable to individuals performing financial services activities in firms; they comprise Individual Conduct Rules and Senior Manager Conduct Rules.</li>
        </ol>
        <p>Typically, a person could be subject to either the Senior Managers Regime or the Certification Regime though in theory both can apply to the same person. The Conduct Rules meanwhile, applies across the board, except to a limited set of staff (for example administrative, support or other ancillary staff) whose jobs don’t involve regulated activities.</p>
        <p>It is proportionate to the size of the firm and there are 3 distinct tiers under the SM&CR:</p>
        <ol>
        <li><strong>Core:</strong> firms in this tier will have to comply with the baseline requirements</li>
        <li><strong>Enhanced:</strong> this will apply to a small number of firms whose size, complexity and potential impact on consumers or markets warrants more attention. These firms will have extra requirements.</li>
        <li><strong>Limited Scope:</strong> this will apply to firms who already have exemptions under the Approved Persons Regime. This includes limited permission consumer credit firms.</li>
        </ol>
        <p>In this training course we are only looking at Core and Limited Scope firms.</p>
        <p>The Financial Conduct Authority believe this is a catalyst for change and an opportunity to establish healthy cultures and effective governance in firms by encouraging greater individual accountability and setting a new standard of personal conduct.</p>
        <p>The SM&CR aims to:</p>
        <ul>
        <li>Encourage a culture of staff at all levels taking personal responsibility for their actions</li>
        <li>Make sure firms and staff clearly understand and can demonstrate where responsibility lies</li>
        </ul>'
      ],
      [
        'id' => 3,
        'content' => '<h2>Senior Management Functions (SMFs)</h2>
        <p>A Senior Management Function (SMF) is a new type of controlled function under (FSMA) Financial Services and Markets Act 2000). These functions apply to UK-authorised firms and EEA Branches.</p>
        <p>People who hold these functions are called Senior Managers. They are the most senior people in a firm with the greatest potential to cause harm or impact upon market integrity.</p>
        <p>The FCA make particular functions SMFs so that they know who a firm’s most senior decision makers are, and to make sure firms clearly allocate responsibilities to those key individuals.</p>
        <p>Anyone who performs an SMF needs to be approved by the FCA before they can start their role.</p>
        <p>The SMFs only apply if you have someone doing these jobs or the SMF is a “Required Function”. For example, if you are not required to have an MLRO (Money Laundering Reporting Officer), then you don’t need to appoint someone as a result of the SM&CR.</p>
        <p>“Required Functions” are functions that some firms are required to have. For example, some types of firms must have a Compliance Oversight Function. If your firm isn’t required to have people in these roles, then the SM&CR doesn’t change this.</p>'
      ],
      [
        'id' => 4,
        'content' => '<p>There are 6 SMFs within the Core SMR, and these are set out as follows:</p>
        <p><strong>SMFs for Core Firms</strong></p>
        <p><strong>Governing Functions</strong></p>

        <p> </p>
        <p><strong>Function Name</strong></p>
        <p>SMF1 – Chief Executive</p>
        <p><strong>Description</strong></p>
        <p>
        This is the person(s) with responsibility, under the immediate authority of the governing body, for the conduct of the whole of the business (or relevant activities). Note: Although the Chief Executive is the most senior member of an executive team, it does not mean that a firm’s governing body cannot allocate specific responsibilities to other Senior Members. Previously CF3 – Chief Executive.
        </p>
        <p> </p>
        <p><strong>Function Name</strong></p>
        <p>SM3 – Executive Director</p>
        <p><strong>Description</strong></p>
        <p>
        A director of a firm, other than a Non-Executive Director. Previously CF1 – Director
        </p>
        <p> </p>
        <p><strong>Function Name</strong></p>
        <p>SMF27 – Partner</p>
        <p><strong>Description</strong></p>
        <p>
        A partner in a firm, other than a limited partner in a partnership registered under the Limited Partnership Act 1907. Previously CF4 – Partner.
        </p>
        <p> </p>
        <p><strong>Function Name</strong></p>
        <p>SMF9 – Chair</p>
        <p><strong>Description</strong></p>
        <p>
        The person with responsibility for chairing, and overseeing the performance of the role of the governing body of the firm. Previously CF2 – Non-Executive Director.
        </p>
        <p> </p>
        <p><strong>Function Name</strong></p>
        <p>SMF16 – Compliance Oversight</p>
        <p><strong>Description</strong></p>
        <p>
        This is the person responsible for the compliance function in the firm and reporting to the governing body on this. Previously CF10 – Compliance Oversight.
        </p>
        <p> </p>
        <p><strong>Function Name</strong></p>
        <p>SMF17 – MLRO</p>
        <p><strong>Description</strong></p>
        <p>
        This is the person who has responsibility for overseeing the firm’s compliance with the FCA’s rules on systems and controls against money laundering. Previously CF11 – Money Laundering Reporting Officer (MLRO).
        </p>
        <p> </p>
        <p>The SMF9 – Chair is the only approved function that can be held by a Non-Executive Director (NED). Other NEDS currently approved to hold the CF2 function under the APR will no longer need to be approved by the FCA, and their existing approval will lapse at the start of the new regime.</p>
        <p>These NEDs will, however, still be subject to the FCA Conduct Rules, fit and proper requirements and regulatory reference rules.</p>
        <p>Someone can cover for a Senior Manager without being approved for a maximum of 12 weeks and will only be allowed where the absence of the Senior Manager is temporary or reasonably unforeseen.</p>
        <p>It is possible to hold more than one SMF and the need for this will be determined by the governance structure of the firm.</p>
        <p>There are 3 SMFs within the <strong>Limited Scope</strong> tier and these are set out as follows:</p>
        <p><strong>SMFs for Limited Scope Firms</strong></p>
        <p><strong>Required Functions</strong></p>
        <p><strong>Function Name</strong></p>
        <p>SMF29 – Limited Scope Function</p>
        <p><strong>Description</strong></p>
        <p>
        This was called the Apportionment and Oversight Function (CF8) under the APR. It is the person who deals with apportionment of responsibilities under SYSC 4.4.3R and oversees the establishment and maintenance of controls under SYSC 4.1.1.R. Previously CF8 Apportionment & Oversight.
        </p>
        <p> </p>
        <p><strong>Function Name</strong></p>
        <p>SMF16 Compliance Oversight</p>
        <p><strong>Description</strong></p>
        <p>
        This is the person responsible for the compliance function in the firm and reporting to the governing body on this. Previously CF10 – Compliance Oversight.
        </p>
        <p> </p>
        <p><strong>Function Name</strong></p>
        <p>SMF17 – Money Laundering Reporting Officer</p>
        <p><strong>Description</strong></p>
        <p>
        This is the person who has responsibility for overseeing the firm’s compliance with the FCA’s rules on systems and controls against money laundering. Previously CF11 – Money Laundering Reporting Officer (MLRO).
        </p>
        <p> </p>
        <p>So, for a firm that is a Limited Permission Consumer Credit firm that has a CF8 under the Approved Persons Regime it requires SMF29 – Limited Scope Function (which is the same as the Apportionment and Oversight Function under the APR).</p>
        <p>Fitness and Propriety</p>
        <p>A firm will need to assess the fitness and propriety of all Senior Managers, Non-Executive Directors and Certification staff on recruitment and thereafter on an ongoing basis, at least annually.  A firm will need to ensure that this assessment includes:</p>
        <p>&emsp;&emsp;Honesty, integrity and reputation</p>
        <p>&emsp;&emsp;Competence and capability including and relevant FCA training and competency requirements</p>
        <p>&emsp;&emsp;Financial soundness</p>'
      ],
      [
        'id' => 5,
        'content' => '<h2>Criminal Records Checks</h2>
        <p>Firms and candidates for SMFs need to declare if a candidate has a criminal record (to the maximum extent allowed by law). A firm will carry out criminal record checks as part of the application for approval of a Senior Manager to ensure that the information provided by the candidate is accurate and complete as criminal records need to be declared for candidates for SMFs. The Firm will also carry out criminal record checks on Non-Executive Directors who are not Senior Managers.</p>
        <p>
            It is important to note that a standard DBS check needs to be carried out and NOT a basic DBS check as this is the fullest information that a firm is able to lawfully obtain as per SUP 10C.10.16R of the FCA Handbook. There are only two DBS checks that you can obtain.
        </p>
        <ol>
            <li>BASIC Disclosure Scotland criminal check which will only outline common law convictions and those relevant under criminal legislation in Scotland.</li>
            <li>
            STANDARD Disclosure & Barring Service check which is what the FCA want you to undertake and covers common law, unspent criminal cautions (which do not show on a Disclosure Scotland), and unspent criminal convictions as per the Police and Criminal Evidence Act.
            </li>
        </ol>
        <p>A firm may register with the Disclosure and Barring Service (DBS) in order to carry out these checks.</p>
        <p>Although a firm is not required to carry out criminal record checks for Certification staff it may opt to carry out these checks on staff where it is legally allowed to do so.</p>
        <h2>Regulatory References</h2>
        <p>A firm will request a regulatory reference for Senior Managers, Certification Function Employees and Non-Executive Director candidates from all past employers covering the last 6 years.</p>
        <p>A firm will also provide regulatory references to requesting firms relating to its previous employees. In line with its record keeping requirements, a firm will retain records, for a period of 6 years, on all its current and previous employees including any disciplinary action taken due to breaches of the Conduct Rules or any findings that the person was not fit and proper.  A firm will update any regulatory references where new, significant information comes to light.</p>
        <h2>Overseas Senior Managers</h2>
        <p>There is no territorial limitation on the Senior Managers Regime. This means that it will apply to anyone who performs a Senior Manager role, whether they are based in the UK or overseas.</p>
        <h2>Outsourcing under the SMR</h2>
        <p>If your firm relies on a third party for the operational functions of the firm, your firm is still fully responsible for carrying out all of its regulatory obligations. While you may outsource the function, you can’t outsource accountability for this function.</p>
        <h2>Statements of Responsibilities (SoRs)</h2>
        <p>A SoR is a single document that every Senior Manager will need to have, clearly setting out their role and responsibilities. This is required under FSMA.</p>
        <p>SoRs need to set out what Senior Managers are responsible and accountable for, rather than how they carry out those responsibilities. A SoR needs to be self-contained and not refer to other documents. SoRs should be succinct and clear without unnecessary detail.</p>
        <p>If a Senior Manager holds multiple SMFs at the same firm they will only need one SoR, but this must clearly describe all of their responsibilities. If a Senior Manager holds multiple SMFs across different firms within a group, they will need one SoR per firm.</p>
        <p>An SoR will need to be submitted to the FCA when applying for a Senior Manager to be approved and this needs to be kept up to date, and resubmitted if there is a significant change to a Senior Manager’s responsibilities.</p>
        <h2>The Duty of Responsibility</h2>
        <p>Every Senior Manager will have a Duty of Responsibility under FSMA. This means that if a firm breaches one of the FCA requirements, the Senior Manager responsible for that area could be held accountable. If they didn’t take reasonable steps to prevent or stop the breach.</p>
        <p>The burden of proof lies with the FCA to show that the Senior Manager didn’t take the steps a person in their position could reasonable be expected to take to avoid the firm’s breach occurring.</p>
        <p>When deciding whether to take action against someone based on the Duty of Responsibility, the FCA will look at all the circumstances of the case. This includes the seriousness of the breach, the person’s position, responsibilities, and the need to use enforcement powers effectively and proportionately. These criteria are published in the Decision Procedure and Penalties Manual (DEPP).</p>
        <p>Sometimes it will be appropriate to take action against a Senior Manager, sometimes against a firm, and sometimes against both. These decisions will be made on a case-by-case basis, applying the criteria set out in DEPP.</p>
        '
      ],
      [
        'id' => 6,
        'content' => '<h2>Prescribed Responsibilities (PRs)</h2>
        <p>PRs are specific responsibilities defined in SYSC 24 of the FCA Handbook that a firm must give to a Senior Manager. They are in addition to the inherent responsibilities that are an essential part of a Senior Manager’s role. The FCA prescribe these responsibilities to make sure a Senior Manager is accountable for key conduct and prudential risks.</p>
        <p>There are 5 Prescribed Responsibilities that must be given to Senior Managers which are as follows:</p>
        <ol>
        <li>Performance by the firm of its obligations under the SMR, including implementation and oversight.</li>
        <li>Performance by the firm of its obligations under the Certification Regime.</li>
        <li>Performance by the firm of its obligations in respect of notifications and training of the Conduct Rules.</li>
        <li>Responsibility for the firm’s policies and procedures for countering the risk that the firm might be used to further financial crime.</li>
        <li>Responsibility for the firm’s compliance with CASS (if applicable).</li>
        </ol>
        <p>CASS (Client Asset Sourcebook) is for firms who hold and control client’s money or custody asset and is unlikely to be relevant to your firm.</p>
        <p>A Limited Scope firm does not need to assign any Prescribed Responsibilities.</p>
        <h2>Things to consider:</h2>
        <p>Does my firm have individuals who will perform relevant Senior Management Functions (SMFs)?</p>
        <p>Which PRs apply to my firm?</p>
        <p>Which Senior Manager should be allocated each PR?</p>
        <p>Is the PR clearly included in their SoR?</p>
        <h2>Certification Regime</h2>
        <p>Certification covers specific functions that aren’t Senior Management Functions, but can have a significant impact on customers, the firm and/or market integrity. The FCA won’t approve these people, but firms will need to check and confirm (certify) at least once a year that these people are suitable to do their job. The Certification Regime is a requirement under FSMA and is set out in SYSC 27 of the FCA Handbook.</p>
        <p>If a role meets the definition of a Certification Function, then a firm needs to make sure that anyone doing that role has been certified. This means the firm must check and confirm that the person is fit and proper to do the job, and issue them with a certificate. </p>
        <p>An example of an individual that needs to be certified is a person who advises on investments and mortgages.</p>
        <p>These individuals will need to be certified as they are undertaking a function that requires qualifications and so meet one of the defined Certification Functions. Their managers will also need to be certified (except those who are Senior Managers).</p>
        <p>This certification must be done at least once a year, and firms should take into account whether the individual:</p>
        <ul>
        <li>Has obtained a qualification</li>
        <li>Has undergone, or is undergoing, training</li>
        <li>Possesses a level of competence</li>
        </ul>
        <p>Certificates issued by firms should:</p>
        <ul>
        <li>State that the authorised person is satisfied that the persons is a fit and proper person to perform the Certification Function</li>
        <li>Set out the aspects of the firm’s business in which the individual will be involved</li>
        </ul>
        <p>One objective of the Certification Regime is to reinforce that firms, rather than the regulator, are responsible for making sure their staff are fit and proper.</p>
        <p>The whole SM&CR applies on a legal entity basis and firms will need to consider their Certification staff on this basis.</p>
        <p>THE CERTIFICATION REGIME PR DOESN’T APPLY TO LIMITED SCOPE FIRMS.</p>
        <p>The FCA will publish details of certified employees on the Financial Services Register and publish and maintain a directory of certified and assessed person, so consumers and professionals can check the details of key individuals working in financial services. Firms must submit their directory persons data using the FCA’s Connect System under the heading “Directory Persons” in the Application section of Connect.</p>
        <p>Firms are responsible for the timely and accurate reporting of this information on an ongoing basis. SUP16 Annex 47BG contains all of the relevant rules.</p>
        <p>THE CERTIFICATION REGIME PRESCRIBED RESPONSIBILITIES DOESN’T APPLY TO LIMITED SCOPE FIRMS.</p>'
      ],
      [
        'id' => 7,
        'content' => '<h2>Certification Functions</h2>
        <p>Certification Functions apply where the firm has individuals performing relevant roles. This means it is possible that in very small firms there will be no one in the Certification Regime if there are only a handful of senior individuals (who will be Senior Managers) supported by administrative staff. If a sole trader has no employees, then the Certification Regime won’t apply to them.</p>
        <p>The Certification Regime only applies to employees of firms. This definition covers individuals seconded to the firm and contractors but doesn’t apply to Non-Executive Directors, for example.</p>
        <p>The definition in FSMA of an employee includes anyone who personally provides, or is under an obligation to provide, services to the firm in question under an arrangement made between the firm and person providing the services or another person, and is subject to (or to the right of) supervision, direction or control by the firm as to the manner in which those services are provided. This may include, for example, advisers employed by a firm on a contract basis.</p>
        <p>The following functions will be Certification Functions under the SM&CR.</p>
        <p><strong>Certification Function</strong></p>
        <p><strong>Significant Management Function (current CF29)</strong></p>
        <p><strong>Propriety traders</strong></p>
        <p><strong>CASS Operational Oversight Function (current CF10a)</strong></p>
        <p><strong>Overview</strong></p>
        <p>This includes individuals with significant responsibility for a business unit. More details in SYSC 27.7.</p>
        <p>These important roles can seriously impact the way the firm conducts its business and are not limited to revenue-generating business areas.</p>
        <p>All proprietary traders are covered by the Certification Regime.</p>
        <p>The CASS Operational Oversight Certification Function covers oversight of the operational effectiveness of a firm’s systems and controls for client money and assets.</p>
        <p><strong>Certification Function</strong></p>
        <p><strong>Functions subject to qualifications</strong></p>
        <p><strong>Overview</strong></p>
        <p>This includes, for example, mortgage advisers, retail investment advisers and pension transfer specialists. The full list is set out in the FCA Training and Competence Sourcebook.</p>
        <p><strong>Certification Function</strong></p>
        <p><strong>The client dealing function</strong></p>
        <p><strong>Overview</strong></p>
        <p>This function will be expanded from the current CF30 function to apply to any person dealing in or arranging investments with clients, including retail and professional clients and eligible counterparties.</p>
        <p>This will include:</p>
        <p>Financial advisers</p>
        <p>People who are involved in corporate finance business</p>
        <p>People who are involved in dealing or arranging deals in investments</p>
        <p>Investment managers</p>
        <p><strong>Certification Function</strong></p>
        <p><strong>Anyone who supervises or manages Certified Functions (directly or indirectly) but isn’t a Senior Manager</strong></p>
        <p><strong>Overview</strong></p>
        <p>This will make sure that people who supervise certified employees are held to the same standard of accountability.</p>
        <p>It also makes sure a clear chain of accountability between junior certified employees and the Senior Manager ultimately responsible for that area. For example, if a firm employs a customer-facing financial adviser, every manager above them in the same chain of responsibility will have to be certified (until the Senior Manager approved under the SMR is reached).</p>
        <p><strong>Certification Function</strong></p>
        <p><strong>Material Risk Takers</strong></p>
        <p><strong>Overview</strong></p>
        <p>The concept of Material Risk Takers (also known as Remuneration Code staff) already exists for firms under the remuneration rules (SYSC 19).</p>
        <p>They are a category of staff that all firms under AIFMD, UCITS, IFPRU and BIPRU are already required to identify under the FCA remuneration regime.</p>
        </p>These firms need to consider all types of risk when identifying their Material Risk Takers, including those of a prudential, operational, conduct and reputational nature. All of these Material Risk Takers will be covered by this certification function.</p>
        <p><strong>Certification Function</strong></p>
        <p><strong>Algorithmic Trading</strong></p>
        <p><strong>Overview</strong></p>
        <p>It is unlikely your firm will be involved in this area.</p>
        <p>Not all of the functions above will apply to all firms and firms are only required to apply those that are relevant.</p>
        <p>If these roles don’t apply to your firm then you won’t have any Certified Staff. You don’t need to apply the Certification Regime.</p>
        <p>Not all of the functions in this table will apply to all firms and firms are only required to apply those that are relevant.</p>
        <p>If these roles don’t apply to your firm then you won’t have any Certified Staff. You don’t need to apply the Certification Regime.</p>
        <h2>Performing more than one Certification Function</h2>
        <p>If someone performs more than one Certification Function, a firm must certify that person is fit and proper to carry out each function. For example, someone might carry out a function requiring a qualification and also carry out the Significant Management Function. There might be different competencies required for the different functions, so firms must assess that the person is fit and proper to do each role (but this could be done as part of a single assessment process).</p>
        <h2>Senior Managers and the Certification Function</h2>
        <p>If a Senior Manager is performing a Certification Function that is very different to what they are doing as a Senior Manager, they must also be certified. We expect that this will be uncommon in larger firms in practice.</p>
        <p>On example where this may happen is in a financial advice firm. A Senior Manager performing the SMF3 – Executive Direction function, who also meets the definition of the Client Dealing Function or a function requiring qualifications, would need to be certified for these Certification Functions. In this situation, firms may choose to undertake a combined fitness and propriety assessment for both the Senior Management Function and the Certification Function.</p>'
      ],
      [
        'id' => 8,
        'content' => '<h2>Conduct Rules</h2>
        <p>There are basic standards of behaviour that apply to all individuals performing financial services activities in firms – not just approved individuals. These can be found in the COCON chapter of the FCA Handbook.</p>
        <p>Firms need to train their staff on the Conduct Rules and how they apply to them and a Senior Manager is required to be allocated the PR for this.</p>
        <p>Senior Managers and Certification Staff will need to have been trained, and abide by the Conduct Rules from the start of the new regime. Firms will have 12 months to put in place processes to comply with the training and reporting requirements, and train their other staff on the Conduct Rules. Staff that perform roles connected to financial services activities will need to be trained.</p>
        <p>Firms will need to report breaches of Conduct Rules resulting in disciplinary action to the Financial Conduct Authority every year, and within 7 days if the person is a Senior Manager.</p>
        <p>The Conduct Rules apply to a firm’s regulated and unregulated financial services activities (including any related ancillary activities – ie an activity carried on in connection with a regulated activity).</p>
        <p>There are two tiers of the Conduct Rules – <strong>Individual Conduct Rules</strong> and <strong>Senior Manager Conduct Rules.</strong></p>
        <p>The Individual Conduct Rules are the basic standards of behaviour that apply to all individuals performing financial services activities in the Firm, whereas the Senior Manager Conduct Rules are additional standards for Senior Managers only.</p>'
      ],
      [
        'id' => 9,
        'content' => '<h2>Individual Conduct Rules</h2>
        <p>The firm will determine which individuals the Conduct Rules will apply to and will expect those individual to adhere to them. Typically, in a firm the Individual Conduct Rules would apply to:</p>
        <ul>
        <li>All Senior Managers</li>
        <li>All Certified Functions (a function performed by employees who could pose a risk of significant harm to the firm or its customers). The FCA do not approve people for these functions.</li>
        <li>All Non-Executive Directors who are not Senior Managers</li>
        <li>All other employees except ancillary staff. Ancillary staff are employees such as cleaners, receptionists, catering staff and security staff.</li>
        </ul>
        <h2>First Tier – Individual Conduct Rules</h2>
        <ol>
        <li>You must act with integrity.</li>
        <li>You must act with due care, skill and diligence.</li>
        <li>You must be open and cooperative with the FCA, the PRA and other regulators.</li>
        <li>You must pay due regard to the interests of customers and treat them fairly</li>
        <li>You must observe proper standards of market conduct</li>
        </ol>
        <h2>Senior Manager Conduct Rules</h2>
        <p>All senior managers within the firm are required to additionally adhere to the Senior Manager Conduct Rules. Senior Managers are people who perform a SMF and these people need FCA approval to do their jobs.</p>
        <p>These are additional Conduct Rules that apply to all Senior Managers. Firms need to train Senior Managers so they understand what the Conduct Rules are and how they apply to them.</p>
        <p>Firms will need to report breaches of all individual and Senior Manager Conduct Rules by Senior Managers resulting in disciplinary action to the FCA within 7 days.</p>
        <h2>Second Tier – Senior Manager Conduct Rules</h2>
        <p style="padding-left: 20px">SC1.You must take reasonable steps to ensure that the business of the firm for which you are responsible is controlled effectively</p>
        <p style="padding-left: 20px">SC2. You must take reasonable steps to ensure that the business of the firm for which you are responsible complies with the relevant requirements and standards of the regulatory system</p>
        <p style="padding-left: 20px">SC3. You must take reasonable steps to ensure that any delegation of your responsibilities is to an appropriate person and that you oversee the discharge of the delegated responsibility effectively.</p>
        <p style="padding-left: 20px">SC4. You must disclose appropriately any information of which the FCA or PRA would reasonably expect notice.</p>
        <p>Those individuals who are subject to the rules in COCON must ensure that they have an awareness and broad understanding of the specific rules which are relevant to your work.</p>'
      ]
    ];
  }

  public function SeniorManagersandCertificationSchemeTrainingCourseData(){
    return [
      'title' => 'Senior Managers and Certification Scheme Training Course',
      'course' => 'SeniorManagersandCertificationSchemeTrainingCourse',
      'pagesUrl' => '/Course/View/Pages/SeniorManagersandCertificationSchemeTrainingCourse',
      'sendUrl' => '/Course/Send',
      'pages' => [
        $this->SeniorManagersandCertificationSchemeTrainingCoursePages()
      ],
      'courseTopics' => 'SM&CR What is it?|SM&CR Tiers|Senior Management Functions|Statements of Responsibility|Prescribed Responsibilities|Duty of Responsibility|Senior Managers Regime|Certification Regime|Individual Conduct Rules|Senior Manager Conduct Rules',
    ];
  }

  public function SeniorManagersandCertificationSchemeTrainingCourse(){
    return view('course.course')->with($this->SeniorManagersandCertificationSchemeTrainingCourseData());
  }
// End Course


// Start Course
  public function AsbestosAwarenessTrainingCoursePages(){
    return [
      [
        'id' => 1,
        'content' => '<h2>Introduction</h2>
        <p>Welcome and thank you for taking part in this training presentation.</p>
        <p>Asbestos is an incredibly harmful substance that causes serious ill-health to anyone who disturbs it. For this reason, anyone who is likely to disturb asbestos in their work must have an awareness of the correct health and safety procedures to follow.</p>
        <p>Asbestos may be present in buildings that were built, or refurbished up until the year 2000. This course raises the awareness of the dangers associated with asbestos so that the risk of exposure can be reduced. We look at the applicable legislation, main hazards, risk reduction measures and key responsibilities of the individual.</p>
        <p>This online course does not qualify you to work with asbestos containing materials, additional training is required for working on, removing or repairing asbestos materials, however such training includes the need for asbestos awareness and this course does cover the asbestos awareness element of that training.</p>'
      ],[
        'id' => 2,
        'content' => '<h2>Asbestos Legislation – Introduction</h2>
        <p>The Act & Regulations that you must read and follow include:</p>
        <p style="margin-left: 26px; font-weight: bold">1. Health & Safety at Work Act 1974 (HWSA)</p>
        <p>Under the Act employers have a duty to provide safe workplaces and safe systems of work. Employees have duties to protect themselves and others and to assist their employer in complying with the Act and other safety legislation.</p>
        <p>NOTE: HWSA is not specific to asbestos but covers all workplace health and safety law.</p>
        <p style="margin-left: 26px; font-weight: bold">2. Management of Health and Safety at Work Regulations 1999 (MHSWR)</p>
        <p>Requires all risks to be assessed before any work commences.</p>
        <p>Written assessments must be produced, ensuring that employees carrying out the work have full information on any potential hazards and risks and are able to plan and carry out work safety.</p>
        <p>MHSWR has existed since 1992 and was amended in 1999. It is not specific to asbestos but covers all workplace hazards.</p>
        <p style="margin-left: 26px; font-weight: bold">3. Control of Asbestos Regulations 2012 (CAR)</p>
        <p>These are the current regulations that specifically concern exposure to asbestos in the UK. These regulations place specific duties on employers (including self-employed) to reduce exposure to employees and all others who may be at risk of exposure to asbestos.</p>
        <p><strong>Regulation 10 of the Control of Asbestos Regulations 2012</strong> states that any employee liable to be exposed to asbestos must be given adequate information, instruction and training to ensure they can safeguard themselves and other employees and carry out their work effectively.</p>
        <p>Specific responsibilities under The Control of Asbestos Regulations 2012 include:</p>
        <ul>
        <li>Preventing exposure to the fibre or, where not possible, make sure it is kept as low as reasonably practicable.</li>
        <li>Keeping exposure below a certain control limit.</li>
        <li>Presuming that all materials contain asbestos unless there is evidence to the contrary.</li>
        <li>Keeping an up to date written record of the location and condition of any asbestos materials or presumed asbestos-containing materials.</li>
        <li>Ensuring written records are sufficient to allow another person to identify the materials.</li>
        <li>Assessing the risk of anyone being exposed to fibres from these materials.</li>
        </ul>
        <p style="margin-left: 26px; font-weight: bold">1. Duty to Manage Asbestos:</p>
        <p>This defines requirements for building owners or occupiers and employers to identify asbestos materials in buildings to either manage them safely or remove them prior to work being carried out which may disturb them.</p>
        <p style="margin-left: 26px; font-weight: bold">2. Licensed Works:</p>
        <p>This deals with work on or removal of the higher risk asbestos containing materials including asbestos insulation products, sprayed asbestos coatings and asbestos insulation board. Such work must only be carried out by companies who hold an asbestos license issued by the Health and Safety Executive (HSE) and this requires an additional training course.</p>
        <p style="margin-left: 26px; font-weight: bold">3. Non-Licensed Works:</p>
        <p>This deals with work on lower risk asbestos containing materials which can be carried out by non-licensed companies and workers such as asbestos floor tiles, gaskets, asbestos cement products etc. However, all such work must also comply with CAR2012 and include training, equipment and in some cases the work is classed as Notifiable Non-Licensed Work (NNLW) requiring notification to the HSE, medical surveillance and record keeping. This also requires an additional training course.</p>'
      ],[
        'id' => 3,
        'content' => '<h2>Why is Asbestos Dangerous?</h2>
        <p>Asbestos was used in a wide variety of building products and was used extensively in the building and construction industry between the 1950’s and the mid 1980’s.</p>
        <p>Asbestos in all its forms was finally banned in 1999 but there are still millions of building and facilities including industrial, commercial and domestic, which contain asbestos materials. Many people today think that they are free from the risks associated with asbestos, as it has been banned for so long. However, the NHS advise that asbestos still remains in many buildings even today, with an estimated half a million buildings still thought to contain asbestos. This means it can still provide a risk to present day workers.</p>
        <p>When materials that contain asbestos are disturbed or damaged, fibres are released into the air. When these fibres are inhaled they can cause serious diseases. These diseases will not affect you immediately; they often take a long time to develop, but once diagnosed, it is often too late to do anything. This is why it is important that you protect yourself now.</p>
        <p>Asbestos is made up of tiny fibres which can be released when asbestos containing materials are disturbed. These airborne fibres can be inhaled and cause asbestos related diseases.</p>
        <p>The health effects from asbestos exposure were not fully understood for many decades as the symptoms of asbestos related diseases can take many years, even decades, to develop.</p>
        <h2>Asbestos Key Considerations</h2>
        <p>We have seen that asbestos contains fibres, which can cause health problems. Asbestos fibres enter the body through inhalation and even ingestion through eating and drinking.</p>
        <p>The fibres released by asbestos are very small and cannot be seen with the naked eye. Because of their size and shape they can easily enter the respiratory system and penetrate into the air sacs (alveoli) deep within the lungs.</p>
        <p>Although they are very small they are too long to be removed easily by the body’s defence mechanism, causing scarring to the lung tissue.</p>
        <p>The fibres are long lasting and can become embedded in the lungs for many years. The presence of these fibres can cause cancers both within the lungs and the pleura, the lining of the lungs and in rarer cases the abdomen.</p>
        <p>Exposure to asbestos can lead to a number of dangerous diseases. It is important to remember that the people who are exposed to asbestos often show symptoms of diseases only at a later stage after the initial exposure.</p>
        <p>There are many potentially fatal diseases linked to asbestos, the most common are:</p>
        <p><strong>Asbestosis</strong><br />
        This is a scarring of the lung tissue and is a disease that progresses slowly. As mentioned by the advisory committee on Asbestos, 1979, “The fibrosis of the lungs caused by asbestos dusts which may or may not be associated with fibrosis of the outer and inner layer of the pleura” is called Asbestosis. This disease has a latency period of about 10-60 years.</p>
        <p><strong>Lung Cancer</strong><br />
        Asbestos exposure can cause Lung Cancer, medically termed as “Bronchial Carinoma” and it occurs in the air passage that bring air in to the lungs. This disease has a latency period of 20-30 years from the time of the first exposure.</p>
        <p><strong>Mesothelioma of the pleura or peritoneum</strong><br />
        This disease can have a latency period of 30-40 years from the time of first exposure. It causes cancer of the cells lining the lungs, ribs and abdominal organs.</p>
        <p>It is particularly linked to Crocidolite and Amosite and in many cases can develop after relatively low exposures.</p>
        <p>Along with the three fatal diseases caused by asbestos exposure there are a number of non-fatal conditions, which although non-fatal can have a range of health effects.</p>
        <p>These diseases are:</p>
        <ol>
        <li>Pleural Thickening.</li>
        <li>Pleural Plaques.</li>
        <li>Asbestos Warts/Corns.</li>
        <li>Pleural Effusions.</li>
        </ol>
        <p>The risk of developing asbestos related diseases increases in proportion to levels of asbestos exposure. However, if a person who has been exposed to asbestos is also a smoker, it significantly increases their chances of developing lung cancer.</p>
        <p>Due to its widespread use in construction in the UK (asbestos is all its forms were finally banned in 1999), workers in the construction, demolition and building maintenance trades are at greater risk from asbestos exposure.</p>'
      ],[
        'id' => 4,
        'content' => '<h2>Different Types of Asbestos</h2>
        <p>Asbestos is a term for a group of minerals made of microscopic fibres which are mattered together to form a solid rock like appearance.</p>
        <p>Asbestos is a naturally occurring mineral which is found throughout the world and is obtained from asbestos bearing rocks which are crushed to extract the fibres. Typically, 30 tonnes of asbestos bearing rock will produce approximately one tonne of asbestos fibres.</p>
        <p>Asbestos used in the UK was imported from countries which had large natural deposits of asbestos.</p>
        <p>Each asbestos type has a slightly different structure that gives rise to a range of physical and chemical properties.</p>
        <p>There are 6 types of naturally occurring fibrous asbestos. Amongst these, three are more common and widely used:</p>
        <p style="font-weight: bold;">Chrysotile or White Asbestos:</p>
        <p>This is the most commonly found type of asbestos. It was also known as White asbestos due to the colour that it exhibited when the mineral was mined. It was widely used in the construction and many other industries, applications included textiles, cement pipes and sheets, fire proofing and even clothes.</p>
        <p style="font-weight: bold;">Amosite or Brown Asbestos:</p>
        <p>After Chrysotile, it is the second most widely used type of asbestos. It was referred to as Brown asbestos because the fibres when mined were brown in colour. Used extensively for insulation purposes.</p>
        <p style="font-weight: bold;">Crocidolite or Blue Asbestos:</p>
        <p>This is a rarer type of asbestos and when mined the fibres are blue in colour. It was widely used to make insulation and fire-resistant products. It is the strongest, most flexible and has the best acid resistance of the asbestos types and was used for a variety of specialist applications.</p>
        <p>There are three other less common types of Asbestos fibre which have had limited use but are found only occasionally. They are; Anthophyllite, Actinolite and Tremolite.</p>
        <p>Asbestos containing materials (ACMs) contain one or more types of asbestos in varying percentages. Asbestos is usually mixed with other minerals to make products and so the natural colours of the asbestos types are not normally visible in the finished product.</p>
        <p>Identification of ACMs can therefore only be made by taking a sample of the material and analysing it in an approved laboratory.</p>
        <p>If the ACMs are disturbed or damaged, they can release asbestos fibres which, as you have seen in the previous section can lead to a number of asbestos related diseases.</p>
        <p>Early in the last century as asbestos became more popular the long-term health effects were not fully understood. With no real Health and Safety Legislation in place at that time, asbestos usage continued to grow.</p>
        <p>The reasons asbestos was so popular in those days is that it has a very high mechanical strength. It has good heat, electricity and sound insulation properties, it also exhibits good resistance to fire and chemicals. It was one of the most valuable and popular resources in the construction industry.</p>
        <p>With the advent of sophisticated medical and research facilities, the effect of asbestos on the body became known.</p>
        <p>The introduction of the Health and Safety at Work Act, 1974 increased pressure on the government to ban asbestos, which led to a decline in asbestos use. Finally, the government banned Crocidolite and Amosite in the year 1985. The use of Chrysotile continued, as it was seen as less dangerous. By the 1990s even the use of Chrysotile was seen as unacceptable and it too was banned in 1999.</p>
        <p style="font-weight: bold;">Uses of Asbestos</p>
        <p>Asbestos was used throughout the construction industry from the 1860’s up until 1999 in building materials and products for new buildings and the refurbishment of old buildings.</p>
        <p>Asbestos in all forms were finally banned in 1999. So only buildings constructed from the year 2000 onwards can be presumed to be asbestos free. However, caution should still be applied to buildings that were modified or constructed around this date.</p>'
      ],[
        'id' => 5,
        'content' => '<p style="font-weight: bold;">Risk of asbestos fibre release</p>
        <p>Friable means the ease which a material can be crumbled into dust/debris.</p>
        <p>In order of most friable to least friable:</p>
        <p><strong>Highest Risk (Most Friable)</strong></p>
        <ol>
        <li>Loose asbestos.</li>
        <li>Sprayed coatings.</li>
        <li>Thermal insulation.</li>
        <li>Asbestos Insulation Board (AIB).</li>
        </ol>
        <p><strong>Lowest Risk (Least Friable)</strong></p>
        <ol>
        <li>Paper, felt and cardboard.</li>
        <li>Textiles, ropes and cardboard.</li>
        <li>Cement products.</li>
        <li>Textured coatings.</li>
        <li>Bitumen, resins and mastics.</li>
        <li>Flooring.</li>
        <li>Reinforced PVC & composite.</li>
        </ol>
        <p style="font-weight: bold;">Loose insulation</p>
        <p>Loose insulation can be made up of small particles, fibres, foam and other materials and refers to:</p>
        <p style="margin-left: 26px; font-weight: bold">1. Bulk Loose Fill:</p>
        <p>This is rarely found but was sometimes used as DIY loft insulation and also as fire stop packing around cables between floors in buildings.</p>
        <p style="margin-left: 26px; font-weight: bold">2. Bulk Fibre-filled mattresses and quilts and blankets:</p>
        <p>Mattresses and quilts used for thermal insulation for industrial boilers were filled with loose asbestos. These products were filled with Crocidolite or Chrysotile.</p>
        <p style="margin-left: 26px; font-weight: bold">3. Soft Bag-Type products:</p>
        <p>Paper bags/sacks were loosely filled with asbestos and used for sound insulation under floors and in walls. These products may also contain Crocidolite or Chrysotile.</p>
        <p style="font-weight: bold;">Sprayed Coatings</p>
        <p>Sprayed coating consisted of a high percentage of asbestos usually missed with a cement binder, applied to a beam, ceilings and the underside of floors by means of a spray gun. Sprayed coatings were used mainly for fire protection and insulation.</p>
        <p><strong>Types:</strong></p>
        <p>Sprayed coatings can be categorised into three types depending on the way it has been applied:</p>
        <ol>
        <p>Dry.</p>
        <p>Wet.</p>
        <p>Trowelled Finish.</p>
        </ol>
        <p><strong>Uses:</strong></p>
        <ol>
        <li>Sprayed coatings were used as fire protection on steel and reinforced concrete beams.</li>
        <li>They were applied to the underside of the roofs and sometimes the inside of walls of buildings to provide thermal insulation and as anti-condensation barriers.</li>
        <li>They were also used for acoustic attenuation in theatres and halls.</li>
        </ol>
        <p style="font-weight: bold;">Asbestos Content Levels:</p>
        <p>Sprayed coatings contained a substantial amount of asbestos – approximately 55 – 85%.</p>
        <p>Crocidolite was used in sprayed coatings until the year 1962, but was gradually replaced by Amosite.</p>
        <p>The use of asbestos in sprayed coatings was completely stopped in the year 1974.</p>
        <p style="font-weight: bold;">Thermal Insulation</p>
        <p>Thermal insulation refers to materials that are used to reduce the rate of heat transfer. Asbestos was used for thermal insulation because of its excellent heat insulation property.</p>
        <p><strong>Uses:</strong></p>
        <ol>
        <li>Asbestos was commonly hand mixed in buckets and hand applied to pipes and boilers (asbestos hard-set lagging).</li>
        <li>Manufactured, pre-formed sections were also widely used as insulation to pipes, boilers and steam vessels.</li>
        </ol>
        <p style="font-weight: bold;">Asbestos Content:</p>
        <p>All three common types of asbestos were used in thermal insulation products. The use of Crocidolite was phased out in the 1960’s. The use of thermal insulation ceased in about 1980. The presence of asbestos in thermal insulation varied from 6-85%.</p>
        <p><strong>Asbestos Insulation Board (AIB) was a widely used product</strong></p>
        <p><strong>Types:</strong></p>
        <ol>
        <li>Asbestolux: it was a type of AIB that contained between 16 – 40% asbestos. Crocidolite was also used in the manufacture of these boards but only until the year 1965.</li>
        <li>Supalux: it was introduced as a non-asbestos substitute board. It is usually asbestos free, however, occasionally some boards have been found to have small amounts of asbestos contamination as they were sometimes manufactured on the same machinery as AIB.</li>
        </ol>
        <p><strong>Uses:</strong></p>
        <p>AIB were used extensively in the building industry until they were finally banned in 1985.</p>
        <p>Uses:</p>
        <ol>
        <li>Ceiling tiles.</li>
        <li>Partition walls and wall boards.</li>
        <li>Boards above and below windows.</li>
        <li>Firebreaks.</li>
        <li>Soffit boards.</li>
        <li>Bath panels.</li>
        <li>Boarding in lofts.</li>
        </ol>
        <p><strong>Asbestos Content:</strong></p>
        <p>AIB generally contain between 15-25% asbestos. Usually, they contain Amosite or a mixture of Amosite and Chrysotile. Older boards manufactured before 1965 can also contain Crocidolite.</p>
        <p><strong>Asbestos was widely used in the manufacture of Textiles</strong></p>
        <p>Here are some of the textile products made from it.</p>
        <p><strong>Ropes, Yarns and Cloths</strong></p>
        <p><strong>Uses:</strong></p>
        <ol>
        <li>Asbestos yarn (thread) was used to produce ropes. Ropes were used as seals on boiler doors and in many types of plant and machinery. They were useful because of their thermal insulation and fire-resistant properties.</li>
        <li>Cloths include fire-resistant blankets, mattresses and protective curtains, gloves, aprons, overalls etc. The asbestos in these materials provides thermal insulation and fire protection.</li>
        </ol>'
      ],[
        'id' => 6,
        'content' => '<p><strong>Asbestos Content:</strong></p>
        <p>Crocidolite and Chrysotile were commonly used in the manufacture of ropes and yarns due to the length and flexibility of the fibres. Since 1970 onwards, Chrysotile only was used.</p>
        <p>For Cloths, all types of asbestos have been used in the past. Asbestos content is usually 100% in the above applications, unless combined with other fibres.</p>
        <p><strong>Gaskets, Washers and Strings</strong></p>
        <p><strong>Uses:</strong></p>
        <p>Gaskets and washers were used in domestic hot water boilers, industrial power and chemical plants. Strings were used for sealing hot water radiators.</p>
        <p style="font-weight: bold">Asbestos Content:</p>
        <p>These products have asbestos content of nearly 100%. Fibre release is usually low and occurs if the products are handled or damaged.</p>
        <p style="font-weight: bold">Asbestos Cement</p>
        <p>Mixing asbestos with cement produced an extremely strong product, particularly attractive to the building industry. Many different asbestos cement products were produced.</p>
        <p style="font-weight: bold">Asbestos Cement – Profiled Sheets</p>
        <p style="font-weight: bold">Uses:</p>
        <p>This type of cement product was used for roofing, wall cladding, permanent shuttering and cooling tower elements.</p>
        <p style="font-weight: bold">Asbestos Content:</p>
        <p>The asbestos content in this product is about 10-15%. Chrysotile was the most common type of asbestos used in the manufacture of asbestos cement, however up to 1965 some products contained a small amount of Crocidolite and in the early 1970’s Amosite. Chrysotile only was used from 1980 onwards.</p>
        <p style="font-weight: bold">Asbestos Cement - Semi-Compressed Flat Sheet and Partition Board</p>
        <p style="font-weight: bold">Uses:</p>
        <p>This product was used to partition farm buildings, in panels for housing, bath panels, wall and ceiling linings, portable buildings for weather boarding.</p>
        <p style="font-weight: bold">Asbestos Content:</p>
        <p>The asbestos content was similar to that of profiled sheets. They contain 10-25% Chrysotile and some Amosite for asbestos wood used for fire doors etc. Composite panels contain up to 4% Chrysotile or Crocidolite.</p>
        <p style="font-weight: bold">Asbestos Cement - Fully Compressed Flat Tiles, Sheets and Boards</p>
        <p style="font-weight: bold">Uses:</p>
        <p>The locations of use for these products were similar to the previous type; they were also used for applications where stronger materials were required for cladding, decking and roof slates.</p>
        <p style="font-weight: bold">Asbestos Content:</p>
        <p>Asbestos content is similar to that of profiled sheets.</p>
        <p style="font-weight: bold">Asbestos Cement - Pre-formed moulded Products and Extruded products</p>
        <p style="font-weight: bold">Uses:</p>
        <p>These products were used for cable troughs, conduits, cisterns, drains, flue pipes, rainwater goods, fencing, windowsills, drawing boards, extraction hoods etc.</p>
        <p style="font-weight: bold">Asbestos Content:</p>
        <p>Again, it is similar to that of Profiled Sheets.</p>
        <p style="font-weight: bold">Examples of Asbestos Cement in Use</p>
        <p>Now that you know about the types of cement products and the asbestos content in each type, take a look at the places where they are used. As you can see, there are various applications for asbestos cement:</p>
        <ol>
        <li>Corrugated Roofing Sheets.</li>
        <li>Soffit Boards.</li>
        <li>Boiler Flue Pipes.</li>
        <li>Corrugated wall panels, guttering and drainage pipes.</li>
        </ol>
        <p>Asbestos cement products make up the largest group of asbestos containing materials in the UK. These are just a few popular uses, there are many other types and uses.</p>
        <p style="font-weight: bold">Textured Coatings</p>
        <p>Asbestos was used in the form of textured coatings for renovating or refurbishing rooms.</p>
        <p style="font-weight: bold">Uses:</p>
        <p>Textured coatings were used to produce decorative finishes on ceilings and walls. In the past, they have had various trade names such as “Artex”.</p>
        <p style="font-weight: bold">Asbestos Content:</p>
        <p>Textured coatings contained about 3-5% Chrysotile. Manufacture ceased in 1984, however due to extensive stockpiles, coatings containing asbestos were still widely available up to the 1990s.</p>
        <p>Generally, the asbestos fibres are well contained in the matrix, however some release of fibres can occur when coatings are sanded down or removed by scraping.</p>
        <p style="font-weight: bold">Reinforced Composites</p>
        <p>Composites are materials that are engineered from two or more materials possessing different physical or chemical properties.</p>
        <p>Reinforced composites are materials that have special mechanical properties thereby increasing the strength of that material.</p>
        <p>Reinforced plastics and Resin composites are examples of reinforced composites.</p>
        <p style="font-weight: bold">Uses:</p>
        <p>Reinforced composites were used as panels, for cladding and for thermoplastic flooring. They were also used for toilet cisterns, seats, window sills, car batteries and as brakes and clutches in machines.</p>
        <p style="font-weight: bold">Asbestos Content:</p>
        <p>Reinforced plastics contain about 1-10% Chrysotile, whereas resins reinforced with woven Chrysotile cloth usually contain about 20-50% asbestos. Amphiboles were used for specialist applications such as car batteries, Crocidolite for acid resistance and Amosite for toilet Cisterns.</p>
        <p>There are two types of flooring: PV Vinyl and Thermoplastic floor tiles. The asbestos content of thermoplastic floor tiles is up to 25%. The asbestos content of vinyl is normally 7% Chrysotile.</p>
        <p style="font-weight: bold">Asbestos Applications – Bitumen, Resins & Mastics</p>
        <p>Bitumen, Resins & Mastics have several essential applications:</p>
        <p style="margin-left: 26px; font-weight: bold">1. Bitumen Products:</p>
        <p style="margin-left: 36px;">These products were used for roofing felts and shingles (roof tiles), gutter linings, flashings and bitumen damp proof course (DPC). They were also applied on metals. The asbestos content in bitumen products is about 8% Chrysotile.</p>
        <p style="margin-left: 26px; font-weight: bold">2. Resins:</p>
        <p style="margin-left: 36px;">Asbestos resins were commonly used in the manufacture of brakes and clutches in plant and machinery. Asbestos content was typically 30-70%. Sometimes resins were reinforced with woven Chrysotile cloth and contain 20-50% asbestos.</p>
        <p style="margin-left: 26px; font-weight: bold">3. Mastics:</p>
        <p style="margin-left: 36px;">Bitumen mastics and adhesives were used for floor tiles and wall coverings. Adhesives contained a small amount of Chrysotile asbestos only. They were available up until 1992.</p>
        <p>Now, let us see how the applications that you saw on the previous pages have been categorised on the basis of their risk level.</p>
        <p style="font-weight: bold">High Risk:</p>
        <ol>
        <li>Loose Asbestos.</li>
        <li>Sprayed Insulation.</li>
        <li>Thermal Insulation.</li>
        </ol>
        <p style="font-weight: bold">Medium Risk:</p>
        <ol>
        <li>AIB.</li>
        <li>Paper, Felt and Cardboard.</li>
        <li>Textiles, Ropes and Yarns.</li>
        </ol>
        <p style="font-weight: bold">Low Risk:</p>
        <ol>
        <li>Cement Products.</li>
        <li>Textured Coatings.</li>
        <li>Reinforced PVC and composite products.</li>
        <li>Bitumen, Resins & Mastics.</li>
        </ol>
        <p>You now know about the various applications of ACMs in buildings.</p>
        <p>All quoted percentages are approximate.</p>
        <p>Finally, let us look at the locations and descriptions of various products that contains asbestos found in a typical building. </p>'
      ],[
        'id' => 7,
        'content' => '<p><strong>Air Handling Systems:</strong><br />
        Lagging<br />
        Gaskets<br />
        Anti-Vibration Gaiter</p>
        <p><strong>Boiler, Vessels and Pipework:</strong><br />
        Textured Coatings<br />
        Panelling to vertical and horizontal beams<br />
        Boiler Flue<br />
        Rope Seal on boiler access hatch and between cast iron boiler casting<br />
        Paper lining inside steel boiler casing<br />
        Gasket in Pipe and vessel Joints<br />
        Lagging on boiler<br />
        Damaged lagging and associated debris</p>
        <p><strong>Ceilings:</strong><br />
        Ceiling Tiles<br />
        Spray Coating to ceiling, walls or beams and columns<br />
        Brake clutch linings<br />
        Water Tank</p>
        <p><strong>Domestic Appliances:</strong><br />
        Caposil insulation blocks/panels, paper and string seals on radiator<br />
        Gaskets, Rope Seals & Panels in domestic boilers<br />
        String seals on radiators</p>
        <p><strong>Flooring Materials:</strong><br />
        Panel behind heater</p>
        <p><strong>Interior Walls/Panels:</strong><br />
        Heater cupboard around domestic boiler<br />
        Partition Walls<br />
        Panel on Access hatch to service riser<br />
        Bath Panel<br />
        Panel beneath window<br />
        Panel lining service riser and floor<br />
        Panel behind electrical equipment<br />
        Loose asbestos inside partition walls<br />
        Loose asbestos inside ceiling<br />
        Panel on or inside fire door<br />
        Panel lining to lift shaft<br />
        Lagging on boiler pipework</p>
        <p><strong>Roof and Exterior Walls:</strong><br />
        Roof Sheets, Slates and Tiles<br />
        Facia and Soffit Boards<br />
        Wall Cladding<br />
        Guttering and Drainpipe<br />
        Panel beneath window<br />
        Roofing felt and coating to metal wall cladding</p>
        <p><strong>Other</strong><br />
        Fire Blanket<br />
        Paper lining under non asbestos pipe lagging<br />
        Floor tiles, linoleum and paper backing lining to suspended floor</p>'
      ],[
        'id' => 8,
        'content' => '<p>Asbestos Exposure – Avoid the risk of exposure</p>
        <p>Under CAR2012 the duty-holder, who is usually the building owner or occupier but could also be a contractor on a construction or demolition site, must, along with other requirements, take reasonable steps to find out if there are asbestos containing materials in their buildings and produce an asbestos register which provides information such as the type, location and condition of the ACMs (including presumed ACMs).</p>
        <p>This is an important part of the duty holders’ asbestos management plan.</p>
        <p>The asbestos register is usually produced as part of an asbestos survey report.</p>
        <p>The Duty Holder must also inform or make this information available to anyone who is liable to work on or disturb the materials.</p>
        <p>If you are asked to undertake any work on a building or site where asbestos may be present (that could be any building built before 2000), you must ask for information concerning the possible presence of asbestos and check the register or have someone such as your supervisor or manager check for the presence of asbestos before coming the work.</p>
        <p>If no information is available then do not proceed. It may require a survey or inspection of the specific areas by a qualified asbestos surveyor.</p>
        <p>If asbestos (or presumed asbestos) is present then it may have to be taken care of by suitably trained workers and possibly licensed contractors. Or the work planned in a way to avoid contact or disturbance of the ACM.</p>
        <p>For ongoing use and maintenance of buildings, an Asbestos Management Survey is required. For refurbishment and demolition a Refurbishment or Demolition Survey is required.</p>
        <p>They all have different purposes and different levels of inspection. However, asbestos surveys cannot be 100% accurate and there may be an area that was concealed or inaccessible at the time of the survey. So you must always be vigilant and be aware that ACMs may be discovered during your work.</p>
        <p style="font-weight: bold;">Asbestos Exposure – Discovery of Presumed ACMs</p>
        <p>Now, suppose while you’re working, you encounter materials that you suspect might contain asbestos containing materials. In that case there are certain procedures you must follow:</p>
        <ol>
        <li>You must stop work immediately.</li>
        <li>The area should be isolated and no one allowed to enter.</li>
        <li>Warning signs may need to be displayed to warn people of the danger.</li>
        <li>Your line or building manager should be contacted immediately.</li>
        <li>Any suspected asbestos containing materials will need to be dealt with by trained and possible HSE licensed contractors depending on the type of material.</li>
        <li>If it is suspected that any airborne fibres have been released, air monitoring by an approved asbestos laboratory must be carried out.</li>
        </ol>
        <p style="font-weight: bold;">Asbestos Exposure – Emergency Procedures</p>
        <p>If you accidentally disturb or damage suspect materials, then further emergency procedures will need to be followed:</p>
        <p><strong>Identify:</strong> The immediate area where the incident occurred must be identified.</p>
        <p><strong>Isolate:</strong> The area will need to be isolated and access prevented to other persons.</p>
        <p><strong>Remove Contaminated Clothing:</strong> Any clothing suspected to have been contaminated with asbestos dust must be carefully removed. This contaminated clothing should be double wrapped in polythene bags and arrangements must be made to dispose of it as asbestos waste.</p>
        <p><strong>Shower if Affected:</strong> Any affected workers should proceed to the nearest washing facility and wash thoroughly, preferably taking a shower.</p>
        <p><strong>Contact Manager:</strong> The line or building manager must be contacted immediately.</p>
        <p><strong>Evaluate:</strong> The incident will need to be evaluated so that procedures can be put in place to prevent any future incidents occurring.</p>
        <p><strong>Carry Out Lab Tests:</strong> If it is suspected that airborne asbestos fibres may have been released, air tests will need to be carried out by an approved laboratory.</p>
        <p><strong>Repair:</strong> Any damaged asbestos containing materials will need to be repaired or removed using trained licensed asbestos contractors.</p>
        <p><strong>Update:</strong> The asbestos register needs to be updated.</p>
        <p style="font-weight: bold;">REMINDER: THIS AWARENESS COURSE DOES NOT QUALIFY YOU TO WORK WITH ASBESTOS IN ANY WAY.</p>
        <p>If you intend to work with asbestos you must have additional training.</p>
        <p>Asbestos workers must be certified under the BOHS proficiency modules for the relevant area of asbestos work.</p>
        <p><strong>Remember:</strong> <i>Everyone has the right to come home to their families healthy and safe at the end of the working day.</i></p>'
      ],
    ];
  }

  public function AsbestosAwarenessTrainingCourseData(){
    return [
      'title' => 'Asbestos Awareness Training Course',
      'course' => 'AsbestosAwarenessTrainingCourse',
      'pagesUrl' => '/Course/View/Pages/AsbestosAwarenessTrainingCourse',
      'sendUrl' => '/Course/Send',
      'pages' => [
        $this->AsbestosAwarenessTrainingCoursePages()
      ],
      'courseTopics' => 'Control of Asbestos Regulations 2012 (CAR)|What is asbestos|Why asbestos materials can be harmful|Undertaking an asbestos Risk Assessment|Understanding the measures needed to eliminate or reduce the risks|Asbestos Exposure – Emergency Procedures|Uses of Asbestos|Asbestos Applications',
    ];
  }

  public function AsbestosAwarenessTrainingCourse(){
    return view('course.course')->with($this->AsbestosAwarenessTrainingCourseData());
  }
// End Course






// Start Course
  public function FinancialPromotionsTrainingCoursePages(){
    return [
      [
        'id' => 1,
        'content' => '<h2>Introduction</h2>
        <p>Welcome and thank you for taking part in this e-learning training presentation.</p>
        <h2>What is a Financial Promotion?</h2>
        <p>The FCA handbook covers this area in PERG 8 and CONC 3 and defines a financial promotion as an “invitation or inducement to engage in investment activity”.</p>
        <p>In other words, it covers anything that promotes your brand or your firm’s products, and any communication that invites or attempts to persuade customers to buy the products you market.</p>
        <p>This includes products promoted by “appointed representatives”. The principal firm takes regulatory responsibility for the appointed representative, and must ensure it meets FCA requirements and is responsible for any materials they produce.</p>
        <p>Separate to the FCA, the Advertising Standards Authority (ASA) is the UK’s independent advertising regulator. The ASA makes sure ads across UK media stick to the advertising rules (the Advertising Codes).</p>
        <p>The Committee of Advertising Practice (CAP) is the sister organisation of the ASA and is responsible for writing the Advertising Codes. The ASA and CAP are committed to regulating in a way that is transparent, proportionate, targeted, evidence-based, consistent and accountable.<p>'
      ],[
        'id' => 2,
        'content' => '<h2>Types of Financial Promotions</h2>
        <p>The FCA recognise that there are two types of financial promotion.</p>
        <p><strong>Real Time and</strong> and<br>
        <strong>Non-Real Time</strong>
        <p><strong>Real Time Financial Promotions</strong> are then divided into <strong>solicited</strong> or <strong>unsolicited</strong> real time financial promotions.</p>
        <p><strong>Real Time Financial Promotions</strong><br>
        This is made in the course of a personal visit, telephone conversation or other interactive dialogue.</p>
        <p>The very fact of a conversation taking place for example would mean two or more persons were interacting with each other.</p>
        <p>If the interactive dialogue takes place by means of the exchange of letters or e-mails or in a publication, the communication will be deemed to be <strong>Non-Real Time</strong>.</p>
        <p><strong>Solicited v Unsolicited Real Time Financial Promotions</strong></p>
        <p>A <strong>Real Time Financial Promotion</strong> is <strong>solicited</strong> where it is made in the course of a personal visit, telephone conversation or other interactive dialogue which was initiated by or takes place in response to an express request from the recipient.</p>
        <p>A <strong>Real Time Financial Promotion</strong> is <strong>unsolicited</strong> where a person has not expressly requested a call, visit or dialogue</p>
        <p><strong>Non-Real Time Financial Promotion</strong><br />
        This is NOT made in the course of a personal visit, telephone conversation or other interactive dialogue. Most communications made in written or pictorial form will not offer scope for interaction. The most likely exception to this is where persons are expected to respond immediately.</p>
        <p><em>Examples of these are promotions made by:</em></p>
        <p>
        Letter<br />
        E-mail<br />
        Publication such as a newspaper, journal, magazine or other periodical publication<br />
        Website<br />
        Television or radio programme<br />
        Teletext Service
        </p>
        <p>In other words a <strong>Non-Real Time Financial Promotion</strong> is made to or directed at more than one recipient in identical terms (save for details of the recipient’s identity); and is made or directed by a way of a system which in the normal course is or creates a record of the financial promotion which is available to the recipient to refer to at a later time; and is made by way of a system which in the normal course does not enable or require the recipient to respond to it immediately.</p>'
      ],[
        'id' => 3,
        'content' => '<h2>Information in a Financial Promotion</h2>
        <p>The FCA expects firms to provide customers with all information necessary to make an informed choice about the service provided by the firm. In particular:</p>
        <ul>
        <li>
        A firm must ensure that a communication or a financial promotion is clear, fair, and not misleading;
        </li>
        <li>
        A firm must ensure that each communication and each financial promotion;
        <p>
        is accurate;<br />
        uses plain and intelligible language;<br />
        specifies the name of the person making the communication or communicating the financial promotion of the person on whose behalf the financial promotions is made; and<br />
        in the case of a communication or financial promotion in relation to credit broking, specifies the name of the lender (where it is known).
        </p>
        </li>
        </ul>
        <h2>Adverts and promotions which mention loans, credit or finance</h2>
        <p>The rules set out in the FCA Handbook cover any published advertising of products which are regulated by the Consumer Credit Act. An advert is “published” every time it is made available to the public, and includes advertising in all media channels, including social media.</p>
        <p>The FCA will review advertising and promotions which mention loans, credit or finance and act against companies that are not complying with the rules.</p>
        <h2>In the main body of the advert, you must show:</h2>
        <ul>
        <li>
        A representative APR or a representative example if the advert contains or implies any “triggers” (statements which mean the advert is legally required to show additional information).
        </li>
        <li>
        That “credit is subject to application and status”.
        </li>
        <li>
        A clear explanation (not in small print) of any terms of the offer including any purchase price thresholds for the credit to be available.
        </li>
        </ul>
        <h2>You must also show (this can be in a status disclosure in the advert):</h2>
        <ul>
        <li>The legal name of the firm/advertiser as it appears in the Financial Services Register and not merely a trading name.</li>
        <li>The role of the advertiser and status.</li>
        <li>The full postal address of the advertiser/s if the advert shows a rate of interest or the cost of credit. There are some exclusions to doing this if, for example, the advert is on TV, radio, or shown in the advertisers\' premises.</li>
        <li>The extent of your independence – whether we only use products from one lender or from a panel of lenders.</li>
        </ul>
        <h2>For adverts and promotions in general:</h2>
        <p>
        <ul>
        <li>You must not say or imply that credit is available to customers regardless of their financial circumstances or status.</li>
        <li>Any statements you make must be accurate, appropriate and will be understood by the people the advert is aimed at (or are likely to see it).</li>
        <li>You must give a balanced view of the benefits and risks of the loan, credit or finance.</li>
        <li>(For websites) you have considered the overall customer journey through the different pages and areas (including pop-ups, menus and drop-down boxes in terms of when and how products and their details are shown).</li>
        </ul>'
      ],[
        'id' => 4,
        'content' => '<h2>Showing a representative APR or representative example if an advert contains a \'trigger\'</h2>
        <p>If an advert shows or implies certain aspects of a loan or credit product (referred to as ‘triggers’), it is likely it will need to include a “representative APR” or a “representative example”.</p>
        <h2>What is a representative APR?</h2>
        <p>This is the APR at or below which you reasonably expect, at the date your advert or promotion is published, that at least 51% of loan agreements will be entered into as a result of the advert or promotion.</p>
        <h2>When we need to show a representative APR</h2>
        <p>If our advert or promotion:</p>
        <ul>
        <li>includes an incentive to apply for credit (for example, \'available on Buy Now, Pay Later\'), or statements about the speed or ease of getting credit; or</li>
        <li>an indication that the credit is available to someone who might otherwise consider their access to credit restricted; or</li>
        <li>an indication that credit is available on more favourable terms (either for a limited period or generally) than corresponding terms applied in any other case or by any other lenders e.g. by making a comparison such as ‘low monthly repayments’, ‘low cost loans; or</li>
        <li>an indication that the way in which credit is offered is more favourable (either for a limited period or generally) than corresponding ways used in any other case or by lenders. </li>
        </ul>
        <h2>Prominence of the representative APR</h2>
        <p>The Representative APR must be more prominent than the incentive or any indication (as stated further above). Prominence must be assessed in the context of the advertisement as a whole i.e. positioning of text, font size, font colour, background medium including relative colouring and surrounding information.</p>
        <p>The representative APR must:</p>
        <ul>
        <li>Be written as "[number] % APR" (all the same size) and stated as "representative"</li>
        <li>State "variable" if subject to change</li>
        <li>Be quoted to one decimal place</li>
        <li>Example: 12.9 % APR representative (fixed)</li>
        </ul>'
      ],[
        'id' => 5,
        'content' => '
        <h2>What a representative example is</h2>
        <p>A representative example provides details of a loan or credit product so that a customer can compare the suitability and affordability of a loan in comparison to other products on the market.  It must show the information set out in the table below and be headed ‘Representative Example’:</p>
        <h2>REPRESENTATIVE EXAMPLE</h2>
        <table border="0" cellpadding="0" cellspacing="0">
        <tr>
        <td>Cash Price</td>
        <td>£XXXX</td>
        </tr>
        <tr>
        <td>Deposit Amount (if applicable)</td>
        <td>£XXXX</td>
        </tr>
        <tr>
        <td>Total Amount of Credit</td>
        <td>£XXXX</td>
        </tr>
        <tr>
        <td>Duration of the Agreement</td>
        <td>XX months</td>
        </tr>
        <tr>
        <td>Amount of each repayment of credit</td>
        <td>£XX</td>
        </tr>
        <tr>
        <td>Annual rate of Interest</td>
        <td>XX% (Fixed or Variable)</td>
        </tr>
        <tr>
        <td>Representative APR XX%</td>
        <td></td>
        </tr>
        <tr>
        <td>Total Amount Payable</td>
        <td>£XXXX</td>
        </tr>
        <tr>
        <td>The nature and amount of any other charge included</td>
        <td></td>
        </tr>
        <tr>
        <td>in the total charge for credit (if applicable)</td>
        <td>£XXX</td>
        </tr>
        <p>The example can be structured as a table or list, with each piece of information taking equal prominence. You cannot, for example, show the monthly repayments in a larger font and the other info in a smaller font.</p>
        <p><strong>NB:</strong> If the repayments are made monthly then the advertisement should refer to the monthly amount and not a weekly amount.</p>'
      ],[
        'id' => 6,
        'content' => '<h2>When you need to show a representative example</h2>
        <p>A representative example must be shown if an advert or promotion:</p>
        <ul>
        <li>mentions the cost of the credit/ loan such as the interest rate, including the phrase ‘Interest free’, 0% or any fee related to the credit.</li>
        <li>shows a representative APR which has not been triggered by an incentive to buy using a loan or credit, (for example, ‘available on Buy Now, Pay Later’)</li>
        </ul>
        <h2>Displaying the representative example</h2>
        <p>The representative example must be shown more prominently than any of the triggers shown above (the eye must be drawn to it). Prominence must be looked at in the context of the advertisement as a whole i.e. positioning of text, font size, font colour, background colours, imagery and surrounding information.</p>
        <h2>What happens where you have media advertising which references finance and you have restricted space?</h2>
        <p>For example, this may include social media or a short television or radio advertisement of 10 seconds. This form of advertising limits the explanation that you can give to a customer. Here you have to be careful as you really need to mention that you are a credit broker and not a lender and you need to make it clear and concise to the consumer.</p>
        <p>Pre-clearance for TV and radio advertising can be carried out by the ASA.</p>
        <p>The vast majority of TV and radio ads are pre-cleared before they are broadcast.</p>
        <p>Under their licences broadcasters must take reasonable steps to ensure that the ads they broadcast stick to the UK Code of Broadcast Advertising.</p>
        <p>To help them do this, the broadcasters have established and funded two pre-clearance centres:</p>
        <ul>
        <li>Clearcast for television commercials.</li>
        <li>Radiocentre for radio ads.</li>
        </ul>
        <p>The tone of advertising should not trivialise taking out a loan. Although it might be a legitimate description of the application process, a disproportionate emphasis on speed and ease of access compared to interest rates is likely to be considered problematic. This is because such an approach might encourage consumers to make an ill-considered or rushed decision about borrowing.</p>
        <p>When assessing the responsibility of ads, the ASA is likely to consider issues such as the undue emphasis on speed and ease of access, the targeting of vulnerable groups and whether the ad could be seen to trivialise taking out a loan. On that last point, the purpose of the loan might be a key factor in the ASA’s assessment of complaints, but the creative treatment might also play a role, for example, the use of animation, puppets, humour etc.</p>
        <p>The Copy Advice team is happy to help with any questions and review copy for consumer credit ads in relation to non-technical matters. You can call them on 0207 492 2100.</p>'
      ],[
        'id' => 7,
        'content' => '<h2>What can happen if you don’t follow the advertising rules and regulations</h2>
        <p>Regulators can and do take action when adverts breach the rules and don’t follow guidelines. This can include fines, censure and prosecutions. There are also the costs to withdraw an advert or stop an advertising campaign, and it can cause reputational damage.</p>
        <h2>Use Systems and Controls</h2>
        <p>You should use systems and controls to make sure that:</p>
        <ul>
        <li>People designing and approving promotions understand the rules</li>
        <li>Promotions remain clear, fair and not misleading over time</li>
        <li>You monitor promotions and keep adequate records</li>
        <li>You review complaints and apply lessons learned to future promotions</li>
        </ul>
        <p>It is usual to have a Financial Promotions Procedure in place including an approval checklist and sign-off procedure. From this there should be a register of financial promotion activity and evidence of approval for adverts, stationery, websites, or social media.</p>
        <p>Senior management should implement a robust approval process and register for financial promotions, and the approval process should include a competent “financial promotions” person.</p>'
      ]
    ];
  }

  public function FinancialPromotionsTrainingCourseData(){
    return [
      'title' => 'Financial Promotions Training Course',
      'course' => 'FinancialPromotionsTrainingCourse',
      'pagesUrl' => '/Course/View/Pages/FinancialPromotionsTrainingCourse',
      'sendUrl' => '/Course/Send',
      'pages' => [
        $this->FinancialPromotionsTrainingCoursePages()
      ],
      'courseTopics' => 'What is a Financial Promotion|Types of Financial Promotion|Real Time and Non-Real Time|Information in a Promotion|Representative Example|APR Rate|ASA and CAP|Systems and Controls',
    ];
  }

  public function FinancialPromotionsTrainingCourse(){
    return view('course.course')->with($this->FinancialPromotionsTrainingCourseData());
  }
// End Course





// Start Course
  public function CreditCardProcessingCompetencyTrainingPages(){
    return [
      [
        'id' => 1,
        'content' => '<h2>Introduction</h2>
        <p>Welcome and thank you for taking part in this e-learning training presentation.</p>
        <h2>Credit Card Processing</h2>
        <p>If your firm has the facility to process credit card details from customers then it is important that this is carried out safely in order to protect the company and also the cardholder.</p>
        <p>This training course covers the main areas when processing credit cards and helps you to understand the risks involved and to employ methods to prevent fraud and chargebacks along with reporting instances of potential fraud.</p>
        <p>Paying by credit card is always safer for the customer than paying by cash or debit card as the customer is protected by Section 75 of the Consumer Credit Act and they are effectively insured. Cash or debit cards carry more risk for the customer. If they buy goods or services on their credit card, Section 75 can give them extra protection if things go wrong.</p>'
      ],
      [
        'id' => 2,
        'content' => '<h2>What is Fraud?</h2>
        <p>Fraud refers to an international act by one or more individuals among management (management fraud), those charged with governance, employees (employee fraud), or third parties involving the use of deception to obtain an unjust or illegal advantage.</p>
        <p>It is important to understand the risks and processes associated with credit card transactions in order to reduce the possibility of fraud.</p>
        <h2>A CNP Transaction</h2>
        <p>This is where the cardholder is not present (CNP) and their card is not present in your place of business and applies to transactions over the phone or via the internet.</p>
        <p>Transactions over the phone are higher risk. These are sometimes called MOTO (Mail Order/Telephone Order) transactions. As the customer is not visible they are more likely to get away with committing fraud and CNP fraud is the biggest type of fraud in the UK today. However, that said, not all fraudsters will be determined enough to call up as they may be afraid to arouse suspicion.</p>
        <p>MOTO transactions are performed by keying in the card number and the expiry date. The card cannot be swiped or inserted. If the card is swiped or inserted, the terminal will perform a regular credit (or debit) transaction, not a MOTO transaction.</p>
        <h2>A Chargeback</h2>
        <p>This is where the cardholder disputes the transaction ever took place or is unhappy with the service or product. The bank will present the business with a chargeback which they can contest. However, ultimately if the cardholder’s application for a chargeback is successful then the cardholder will have to be reimbursed and It is the business which will make this payment not the bank.</p>'
      ],
      [
        'id' => 3,
        'content' => '<h2>What you can do to prevent chargebacks?</h2>
        <p>If you follow certain procedures, you can prevent some of these chargebacks.</p>
        <p>For example, you can obtain important information from the card owner during some or all cardholder-not-present transactions. This can include:</p>
        <ul>
        <li>Cardholder’s name as it appears on the card</li>
        <li>Card expiration date (month, year) as it appears on the card</li>
        <li>Billing address</li>
        <li>Card security code (3 digit security on the back of the card)</li>
        <li>Phone number and/or email address</li>
        <li>Account Number</li>
        </ul>
        <p>Once the transaction has been carried out successfully you should not store credit card details anywhere in the business. Processing cards is the responsibility of the payment service provider.</p>
        <p>Only the legitimate cardholder can carry out a transaction and so for example a husband cannot use his wife’s or partners card.</p>
        <p>You can process a payment if the customer’s billing address is different. The customer information and shipping address can be different from the billing address however you just want to make sure they actually know the billing information to prevent someone from finding a credit card on the street, picking it up and using it. When the “bill to” and “ship to” addresses are different and the customer is asking for expedited shipping, there’s a higher possibility for fraud. Different billing and shipping addresses are not always a sure sign of fraud (for example, honest customers may order items as gifts), but for all large orders that fit this profile take extra care.</p>
        <p>The risks to a business are minimized by the kind of work that you do. If you were selling high value items then the risk would be higher but if you are mostly dealing with smaller value items then this is not an attractive proposition to fraudsters. However, this does not mean that you should not be vigilant as fraud and chargebacks can still occur.</p>
        <p>If in doubt about a transaction do not process it and report your suspicions to your line manager.</p>'
      ],
      [
        'id' => 4,
        'content' => '<h2>Customer Disputes</h2>
        <p>Disputes are more common with over-the-phone transactions because you aren’t dealing with the customer face-to-face. The customer isn’t seeing the product in person, and you likely haven’t built a personal relationship with him/her. Examples of customer disputes include:</p>
        <p>Billing for goods or services without customer authorization.<br />
        Billing for goods or services before shipment.<br />
        Goods or services not being what the customer expected.<br />
        Dispute over refunds or returns between the customer and vendor.</p>
        <p>To avoid customer disputes, describe the goods or services in detail so the customers know exactly what they are getting, bill the customer after the order has gone through and shipped, and have a clear return policy. Disputes will likely happen — despite your best efforts to eliminate them — but try to curb them as much as possible.</p>
        <p style="font-weight: bold;">Can you refund a credit card different to the one used for payment?</p>
        <p>No. If you pay with a credit card under anti-money laundering rules, refunds on goods and services bought by credit card must be recredited to the same credit card. Refunds can’t be made in cash or transferred to a third party.</p>'
      ],
      [
        'id' => 5,
        'content' => '<h2>Clear Desk Policy</h2>
        <p>The clear desk and clear screen policy refers to practices related to ensuring that sensitive information, both in digital and physical format, and assets (e.g., notebooks, mobile phones, tablets, etc.) are not left unprotected at personal and public workplaces when they are not in use, or when someone leaves their workstation, either for a short time or at the end of the day.</p>
        <p>Since information and assets at a workstation are in one of their most vulnerable places (subject to disclosure or unauthorised use), the adoption of a clear desk and clear screen policy is one of the top strategies to utilize when trying to reduce the risk of security breaches.</p>
        <h2>CVV2 (Card Verification Value)</h2>
        <p>This is often used to describe the 3-digit card security code on the back of the card that appears after the 4-digit number in the signature panel and these must never be stored anywhere. This is very important and the banks merchant guide emphasises this repeatedly.</p>
        <p>This is a security feature which insures that the card holder actually has the credit card in their hand as the code shouldn’t be known to anyone other than the card holder. So, it’s essentially a way of counteracting credit card fraud and by asking for this as part of the identification procedure it shows that you are actively trying to prevent fraudulent transactions occurring.</p>
        <h2>Financial Crime Procedures</h2>
        <p>Carrying out Credit Card Processing and protecting against fraud forms part of your firm’s financial crime policies and procedures and so you should also familiarise yourself with your firm’s Money Laundering Policy and Procedures, Financial Crime Risk Assessment Procedure, HMT Sanctions Procedure, Anti Bribery Policy and Procedure, Gifts and Hospitality Procedure, General Data Protection Policy and Procedures and Whistleblowing Procedure.</p>
        <p>You should consider completing other related training courses and quizzes that also appear on this e-learning site as there are various different fraud types and scams which may affect your company and having a greater knowledge will help you to minimise the risks.</p>'
      ],
    ];
  }

  public function CreditCardProcessingCompetencyTrainingData(){
    return [
      'title' => 'Credit Card Processing Competency Training',
      'course' => 'CreditCardProcessingCompetencyTraining',
      'pagesUrl' => '/Course/View/Pages/CreditCardProcessingCompetencyTraining',
      'sendUrl' => '/Course/Send',
      'pages' => [
        $this->CreditCardProcessingCompetencyTrainingPages()
      ],
      'courseTopics' => 'Credit Card Processing|CNP Transactions|Chargebacks|Card Verification Value|Reporting Instances of Fraud|Awareness of Fraud Risks|Clear Desk Policy|Financial Crime Procedures',
    ];
  }

  public function CreditCardProcessingCompetencyTrainingCourse(){
    return view('course.course')->with($this->CreditCardProcessingCompetencyTrainingData());
  }
// End Course

// Start Course
  public function AntiMoneyLaunderingAndFinancialCrimeTrainingCoursePages(){
    return [
      [
        'id' => 1,
        'content' => '
        <h2>Introduction</h2>
        <p>Welcome and thank you for taking part in this e-learning training presentation.</p>
        <h2>What is Financial Crime?</h2>
        <p>Financial crime is any kind of criminal conduct relating to money or to financial services or markets, including any offence involving:</p>
        <ol>
        <li>fraud or dishonesty; or</li>
        <li>misconduct in, or misuse of information relating to, a financial market; or</li>
        <li>handling the proceeds of crime; or</li>
        <li>the financing of terrorism;</li>
        </ol>'
      ],[
        'id' => 2,
        'content' => '<h2>How can a company be affected by financial crime?</h2>
        <p>Any financial organisation which has financial activity as part of their day to day business may be affected by Financial Crime. </p>
        <p>Financial Crime and Cyber Crime are now among the biggest threats to UK businesses.</p>
        <p>The impact of crimes include:</p>
        <ul>
        <li>Direct financial losses</li>
        <li>Costs to replace damaged equipment and premises</li>
        <li>Lost time spent dealing with the crime</li>
        <li>Lost customers and damaged reputation</li>
        <li>Increased insurance premiums</li>
        <li>Affected staff and the wider community</li>
        <li>The risk of being a repeat victim</li>
        </ul>
        <h2>Types of Financial Crime</h2>
        <ul>
        <li><strong>Money Laundering:</strong> The processing of these criminal proceeds to disguise their illegal origin.</li>
        <li><strong>Fraud and Benefit Fraud:</strong>  wrongful or criminal deception intended to result in financial or personal gain.</li>
        <li><strong>Bribery:</strong> The offering, giving, receiving, or soliciting of any item of value to influence the actions of an official or other person in charge of a public or legal duty.</li>
        <li><strong>Corruption:</strong> dishonest or fraudulent.</li>
        </ul>
        <h2>What is NCA?</h2>
        <p>The National Crime Agency. Their role is to protect the public by disrupting and bringing to justice those serious and organised criminals who present the highest risk in the UK. The NCA was formed after SOCA (Serious Organised Crime Agency) was disbanded and became fully operational on the 7th October 2013.</p>'
      ],[
        'id' => 3,
        'content' => '<h2>Money Laundering</h2>
        <p>The UK Money Laundering Regulations 2007 came into effect on the 15th December 2007. Money Laundering is the process by which criminally obtained money or other assets (criminal property) are exchanged for ‘clean’ money or other assets with no obvious link to their criminal origins.</p>
        <p>The primary money laundering offences are:</p>
        <ul>
        <li>Concealing, disguising, converting, transferring criminal property or removing it from the UK;</li>
        <li>Entering into or becoming concerned in an arrangement which you know or suspect facilitates the acquisition, retention, use or control of criminal property by or on behalf of another person; or</li>
        <li>Acquiring, using or possessing criminal property</li>
        </ul>
        <p>There are three stages to money laundering:</p>
        <ol>
        <li><strong>Placement:</strong>  the process of placing criminal property into the financial system. This might be done by breaking up large sums of cash into smaller amounts or by using a series of financial instruments (such as cheques or money orders) which are deposited at different locations.</li>
        <li><strong>Layering:</strong>  the process of moving money that has been placed in the financial system in order to obscure its criminal origin. This is usually achieved through multiple complex transactions, often involving complicated offshore company structures and trusts.</li>
        <li><strong>Integration:</strong>  once the origin of the money is disguised it ultimately must reappear in the financial system as legitimate funds. This process involves investing the money in legitimate businesses and other investments such as property purchases or setting up trusts.</li>
        </ol>
        <h2>Why are the laws important to you?</h2>
        <p>You have obligations under the Anti-Money Laundering regime to spot and report money laundering and terrorist financing. Failure to meet these obligations can lead to criminal penalties, substantial fines, disciplinary action by the regulators and untold damage to your own and the Company’s reputation.</p>
         <h2>How to recognise potential money launderers</h2>
        <ul>
        <li>A transaction is unusually large given the clients financial profile. For example, they are offering a full and final settlement of £10,000 but are unemployed. </li>
        <li>The customer refuses to disclose the source of funds which have been used in the full and final settlement.</li>
        <li>The explanation for the transaction involved may not be credible. </li>
        <li>The customer lives in another country.</li>
        </ul>'
      ],[
        'id' => 4,
        'content' => '<h2>What should you do to safeguard against money laundering?</h2>
        <p>You must carry out appropriate checks on all applicants to verify their identity on the basis of documents, data or information obtained from a reliable independent source. This is called Customer Due Diligence (CDD). For example you ask customers to provide ID and proof of address in the form of a passport and driving license.</p>
        <p>For transactions over £10,000 you must make checks of the source of the fund by requesting and checking photographic ID, proof of address and proof of funds e.g. bank statement. You must also record these checks and save the documents where appropriate.</p>
        <h2>What should you do if you suspect money laundering?</h2>
        <p>If you know or have reasonable grounds for knowing or suspecting that your client is engaged in money laundering or funding terrorism, you must disclose this as soon as practicable. You must report your suspicions to the Money Laundering Reporting Officer (MLRO) – which could be a director or the Compliance Manager.</p>
        <p>The report would be confidential and in the form of a Suspicious Activity Report (SAR). Under no circumstances should you record such reports on a customer’s file or tell anyone about your suspicion report.</p>
        <p>It is every employee’s responsibility to be aware who the MLRO is and report any suspicious activity. Failure to disclose knowledge or suspicion is an offence punishable by up to five years imprisonment and unlimited fines.</p>
        <h2>What do you tell the customer?</h2>
        <p>Once disclosure has happened, you can’t let the client know. Advising the customer is called ‘tipping off’ and is a criminal offence, punishable by up to two years imprisonment.</p>
        <p>You should also refrain from discussing this with your colleagues and management.</p>'
      ],[
        'id' => 5,
        'content' => '<h2>Benefit Fraud</h2>
        <p>Benefit fraud is when someone obtains a state benefit they are not entitled to or deliberately fails to report a change in their personal circumstances. </p>
        <p>It is estimated that benefit fraud costs the UK approximately £900 million per year. </p>
        <p>Why do people commit benefit fraud? Possible reasons could be:</p>
        <ul>
        <li>Greed- to pay for lavish items</li>
        <li>To make ends meet and/or pay debts</li>
        <li>To fund criminal activity</li>
        </ul>
        <h2>What happens if someone is found to have committed benefit fraud?</h2>
        <ul>
        <li>They may be taken to court and/or</li>
        <li>asked to pay a penalty between £350 and £5,000 </li>
        <li>Their benefits may be reduced or stopped</li>
        <li>They will be asked to pay back the overpaid benefit</li>
        </ul>
        <h2>How to recognise benefit fraud</h2>
        <p>
        Customer states they are working and their benefits statement states they are not. <br>
        The customer states they are living with a partner but their benefit statements list them as living alone. <br>
        The customer states they are working cash in hand and are claiming job seekers allowance.
        </p>
        <h2>What to do if you suspect benefit fraud</h2>
        <p>If you know or have reasonable grounds for knowing or suspecting that your client is committing benefit fraud. You must report your suspicions to your Compliance Manager.</p>'
      ]
    ];
  }

  public function AntiMoneyLaunderingAndFinancialCrimeTrainingCourseData(){
    return [
      'title' => 'Anti Money Laundering And Financial Crime Training Course',
      'course' => 'AntiMoneyLaunderingAndFinancialCrimeTraining',
      'pagesUrl' => '/Course/View/Pages/AntiMoneyLaunderingAndFinancialCrimeTrainingCourse',
      'sendUrl' => '/Course/Send',
      'pages' => [
        $this->AntiMoneyLaunderingAndFinancialCrimeTrainingCoursePages()
      ],
      'courseTopics' => 'What is Financial Crime|National Crime Agency|Stages of Money Laundering|What is a MLRO|Types of Financial Crime|What is Money Laundering|Suspicious Activity Report|Benefit Fraud',
    ];
  }

  public function AntiMoneyLaunderingAndFinancialCrimeTrainingCourse(){
    return view('course.course')->with($this->AntiMoneyLaunderingAndFinancialCrimeTrainingCourseData());
  }
// End Course


// Start Course

  public function ManualHandlingHealthAndSafetyTrainingCoursePages(){
    return [
      [
        'id' => 1,
        'content' => '<h2>Introduction</h2>
        <p>Manual handling accidents accounted for around 20% of workplace accidents. Using improper techniques when pushing, pulling or lifting heavy objects or machinery can lead to accidents, as well as other factors that stop the person from handling the load safely.</p>
        <p>For this reason, it’s essential that you understand the correct manual handling procedures in order to avoid injury.</p>
        <p>Furthermore, a high proportion of people who work on computers report aches, pains, or eye discomfort. Health and safety for workstations is therefore essential. There are certain procedures that must be followed to make people’s work stations ergonomic.</p>
        <p>This section of the course looks at both manual handling and workplace ergonomics so you understand how to maintain safety.</p>
        <h2>Manual Handling</h2>
        <p>Manual handling is any action involving physical effort to move or support an object or person by:</p>
        <ul>
        <li>Lifting</li>
        <li>Pushing</li>
        <li>Pulling</li>
        <li>Manoeuvring</li>
        <li>Steadying</li>
        <li>Carrying</li>
        <li>Transporting</li>
        </ul>'
      ],[
        'id' => 2,
        'content' => '<h2>The Manual Handling Operations Regulations</h2>
        <p>The Manual Handling Operations Regulations 1992 state that employers are required to ensure that a suitable and sufficient assessment of all manual handling operations is undertaken.</p>
        <p>If risk of a manual handling injury is foreseen, then the employer should:</p>
        <ul>
        <li>First attempt to avoid the need for employees to undertake any manual handling operations at work which involve a risk of them being injured.</li>
        <li>Secondly, if manual handling cannot be avoided, assess all the manual handling operations and identify the risks.</li>
        <li>Take appropriate steps to reduce the risk of injury to employees arising from manual handling operations.</li>
        <li>Provide employees with information on the weight of each load and the heaviest side of any load whose centre of gravity is not positioned centrally.</li>
        </ul>
        <p>The regulations require employees to:</p>
        <ul>
        <li>Follow appropriate systems of work laid down for their safety.</li>
        <li>Make proper use of equipment provided for their safety.</li>
        <li>Co-operate with their employer on health and safety matters.</li>
        <li>Inform their employer if hazardous handling activities are identified.</li>
        <li>Take care to ensure their activities to do not put others at risk.</li>
        </ul>
        <h2>Manual Handling Injuries</h2>
        <p>The most common types of manual handling injuries are:</p>
        <ul>
        <li>Sprains and strains.</li>
        <li>Contusions.</li>
        <li>Lacerations.</li>
        <li>Fractures.</li>
        </ul>
        <p>Injuries to the back are the most common, including Musculoskeletal Disorders (MSDs), such as upper and lower limb pain, joint pain and repetitive strain injuries. Injuries to fingers, thumbs, arms and hands also occur frequently due to poor manual handling practice.</p>'
      ],[
        'id' => 3,
        'content' => '<h2>Manual Handling Best Practice</h2>
        <p>When planning control measures, the HSE provides the following hierarchy to follow:</p>
        <ol>
        <li><strong>Elimination</strong> – redesign the job so that the hazard is removed or eliminated.</li>
        <li><strong>Substitution</strong> – replace the process with a less hazardous one.</li>
        <li><strong>Engineering controls</strong> – use work equipment or other measures to prevent injury where you cannot avoid manual handling.</li>
        <li><strong>Administrative controls</strong> – identify and implement the procedures needed to work safely.</li>
        <li><strong>Personal Protective Equipment</strong> – only after all the previous measures have been tried, and found ineffective in controlling risks to a reasonably practicable level, must personal protective equipment (PPE) be used.</li>
        </ol>
        <h2>Reducing the Risks</h2>
        <p>Consideration should also be given to automation or mechanisation of the handling operation, the effectiveness of which is greater if it can be incorporated into the original design for the process.</p>
        <p>However, although avoiding manual handling is important, it is of little benefit if the resultant risks are greater than the original risks from manual handling. For example, if introducing a fork lift truck create new hazards not originally considered.</p>
        <p>Mechanisation options could include:</p>
        <ul>
        <li>Lift trucks, such as fork lifts, reach trucks and side loaders.</li>
        <li>Cranes and hoists.</li>
        <li>Conveyor systems.</li>
        <li>Powered pallet trucks.</li>
        <li>Pneumatic transfer systems.</li>
        <li>Pumped pipe work systems.</li>
        <li>Gravity feed systems.</li>
        </ul>
        <p>Improvements in the flow and storage of products and materials will help to reduce the risk of injury to employees. Splitting the load up into smaller lighter loads will also reduce the risk.</p>
        <p>Where heavy items must be moved in and out of storage, the optimum position for storage is around waist height.</p>
        <p>Design the working area so that the distances materials need to be carried are reduced, as this will improve productivity as well as reduce the risks of injury.</p>
        <p>Reducing the need to open doors while carrying loads will make similar improvements.</p>
        <p>PPE may be necessary in some situations.</p>
        <p>If a manual handling activity still needs to be carried out then a specific manual handling risk assessment should be carried using the TILE method:</p>
        <p>
        Task<br />
        Individual<br />
        Load<br />
        Environment
        </p>
        <h2>Lifting</h2>
        <p>If you are planning to lift something, think about it first. Where is the load going to be placed? Will help be needed with the load?</p>
        <ul>
        <li>Remove obstructions, such as discarded wrapping materials, and for a long lift consider resting the load midway on a table or bench to change grip.</li>
        <li>Keep the load close to your body for as long as possible while lifting and keep the heaviest side of the load next to your body.</li>
        <li>Adopt a stable position. Your feet should be apart with one leg slightly forward to maintain your balance.</li>
        <li>Get a good hold, ideally with the heaviest side of the load next to your body. This may be better than gripping it tightly with hands only.</li>
        <li>Start in a good posture. At the start of a lift, it is best to slightly squat using your back, hips and knees rather than bending over using your back only.</li>
        <li>Avoid twisting the back or leaning sideways, especially while your back is bent. Shoulders should be kept level and facing in the same direction as your hips.</li>
        <li>Keep your head up when handling and look ahead, not down at the load, once it has been held securely.<li>
        </ul>'
      ],[
        'id' => 4,
        'content' => '<h2>Lowering</h2>
        <p>There is a HSE diagram that provides guidelines for the maximum weight for lifting and lowering in relation to each height of the body. You can find this on the internet and it is worth studying this.</p>
        <p>The guideline maximum weights are less if handling with arms extended or at high or low levels, as that is where injuries are most likely.</p>
        <p>If the load is passed between zones then the lower weight must be selected. For example, if a man is lowering a load from head height, the total weight should not exceed 5kg. If a man is lowering a weight from shoulder height, then it must not exceed 10kg.</p>
        <p>If the weight you are moving exceeds the weight in the boxed zone, then a risk assessment is recommended.</p>
        <h2>Pushing and Pulling</h2>
        <p>When pushing or pulling a load:</p>
        <ul>
        <li>You should try to push rather than pull. You must be able to see over it and control steering and stopping.</li>
        <li>Avoid working alone when negotiating a slope or ramp.</li>
        <li>Be aware that moving an object over uneven surfaces requires greater forces.</li>
        <li>To make it easier to push or pull, you should keep your feet well away from the load and go not faster than walking speed.</li>
        <li>Aids, such as barrows and trolleys, should have handles at a height between the shoulders and the waist.</li>
        <li>Devices should be well maintained with wheels that runs smoothly.</li>
        <li>When purchasing new equipment, ensure it is fit for purpose.</li>
        </ul>
        <h2>Ergonomics</h2>
        <p>Ergonomics refer to the “fit” between people and their work environment. An ergonomic workplace ensures that tasks, equipment, and the environment accommodate the comfort and needs of each individual worker.</p>
        <p>It reduces accidents, injury, and ill-health, and improves productivity.</p>
        <p>Injuries that may be caused by poor ergonomics include:</p>
        <ul>
        <li>Musculoskeletal disorders (MSDs).</li>
        <li>Repetitive strain injuries (RSIs).</li>
        <li>Upper limb disorders (ULDs).</li>
        <li>Visual discomfort.</li>
        <li>Stress.</li>
        </ul>
        <h2>Display Screen Equipment</h2>
        <p>The main legislation covering the use of Display Screen Equipment (DSE) is the Health and Safety (Display Screen Equipment) Regulations 1992. Ensuring that employees use DSE correctly and according to regulations will ensure that any associated health problems are minimised.</p>
        <p>The regulations cover:</p>
        <ul>
        <li>Computer hardware.</li>
        <li>Software.</li>
        <li>The workstation.</li>
        <li>Peripheral equipment.</li>
        <li>The individual using the DSE.</li>
        </ul>
        <p>The employer should undertake a DSE risk assessment and follow the recommendations given in the regulations. Employees should be told to report any problems as soon as they occur so that changes can be made.</p>'
      ],[
        'id' => 5,
        'content' => '<h2>Workstations</h2>
        <p>Workstations should be designed in a way that prevents strain:</p>
        <ul>
        <li>Chairs should be stable and adjustable in height and tilt with padded seats.</li>
        <li>Employees should be able to sit with feet flat on the floor or on a footrest if they need extra support.</li>
        <li>Keyboards should be clean, legible, and titled at an angle that makes it comfortable to use without needing to lean or stretch. Wrists should be supported by a rest on the desk so they don’t have to twist or bend unnecessarily.</li>
        <li>Employees should be able to use the mouse with a relaxed arm and straight wrist. They should not have to reach.</li>
        <li>Monitors should be positioned at a height where the user’s eyes are level with the position 2” – 3” below the top. They should also be positioned in a location that avoids glare and should have the brightness and contrast adjusted to a comfortable level.</li>
        <li>The workstation should allow for space to move and stretch.</li>
        </ul>
        <p>To reduce the risks posed by workstations:</p>
        <ul>
        <li>Change your posture regularly.</li>
        <li>Break up display screen work with other activities.</li>
        <li>Organise the workstation effectively.</li>
        <li>Maintain a good working environment.</li>
        <li>Take regular breaks from using the screen.</li>
        <li>Report any signs and symptoms of ill-health.</li>
        <li>Ensure all staff are trained in the risks and how they can be minimised.</li>
        </ul>
        <h2>Housekeeping</h2>
        <p>Good housekeeping procedures are essential for all workplaces and help to keep slip and trip hazards to a minimum. Good housekeeping will also reduce the risk of injury from damaged electrical appliances, falling items and dirty environments.</p>
        <p>Tidying up is perhaps the simplest way of reducing hazards. Ensure that everyone tidies up as they work so that corridors and walkways are kept clear and spillages are cleared up straight away.</p>
        <p>Safe storage and stacking of items is vital to prevent objects falling from height and striking workers. Items may fall off shelves or out of cupboards if they are not stored safely. Best practice means not overloading storage facilities and storing the heaviest items lower down so that they are less likely to fall and cause injury.</p>
        <p>Maintenance of equipment is important to ensure people are not at risk from electrical injuries from using damaged appliances or broke equipment. Do daily visual checks on all equipment before you use it to ensure that it is safe and discard anything that is defective.</p>
        <h2>Safe Systems of Work</h2>
        <p>A Safe System of Work (SSoW) is a particular way of working that has been designed to eliminate or reduce the risks to health and safety. Your workplace may implement a safe system of work that involves:</p>
        <ul>
        <li>Ensuring the work environment is suitable for the task.</li>
        <li>Ensuring work equipment is safe, in good condition and suitable for the task.</li>
        <li>Wearing PPE for specific tasks.</li>
        <li>Training staff in safe procedures.</li>
        <li>Only allowing authorised workers to operate certain machinery.</li>
        <li>Carrying out regular maintenance on machinery and equipment.</li>
        </ul>'
      ],
    ];
  }

  public function ManualHandlingHealthAndSafetyTrainingCourseData(){
    return [
      'title' => 'Manual Handling Health & Safety Training Course',
      'course' => 'ManualHandlingHealthAndSafetyTraining',
      'pagesUrl' => '/Course/View/Pages/ManualHandlingHealthAndSafetyTraining',
      'sendUrl' => '/Course/Send',
      'pages' => [
        $this->ManualHandlingHealthAndSafetyTrainingCoursePages()
      ],
      'courseTopics' => 'The Manual Handling Operations Regulations|Manual handling injuries|Manual handling best practice|Lifting, lowering, pushing and pulling|Ergonomics|Display screen equipment|Workstations|Housekeeping|Safe systems of work',
    ];
  }

  public function ManualHandlingHealthAndSafetyTrainingCourse(){
    return view('course.course')->with($this->ManualHandlingHealthAndSafetyTrainingCourseData());
  }
// End Course


// Start Course

//    public function GeneralDataProtectionRegulationCoursePages(){
//        return [
//            [
//                'id' => 1,
//                'content' => '<h2>Introduction</h2>
//        <p>Welcome and thank you for taking part in this e-learning training presentation which will help to raise awareness of the risks and impact of GDPR regulations within your organisation.</p>
//        <h2>What is GDPR?</h2>
//        <p>The GDPR stands for the General Data Protection Regulation which come into practice and become enforceable on the 25th May 2018.</p>
//        <p>The GDPR replace the Data Protection Directive of 1995 which underpins the Data Protection Act 1998.</p>
//        <p>There is greater focus on transparency, control, accountability and governance by firms.</p>
//        <p>There are also greater powers by the regulator.</p>
//        <p>As previously with the Data Protection Act, the Information Commissioners Office (ICO) is the UK’s independent authority set up to uphold information rights in the public interest, promoting openness by public bodies and data privacy for individuals. If you handle “personal data” about individuals you have a number of legal obligations and one of these obligations is to register your firm with the ICO. Personal data means data which relates to a living individual who can be identified by that data.</p>
//        <p>The way organisations handle customer data is becoming increasingly more significant particularly as technology advances. A major landmark that highlights this is Facebook after it admitted that a company linked to President Donald Trump’s campaign had access and improperly stored a huge trove of its user data.</p>
//        <p>Was Facebook transparent enough with its users about how their information would be used? Should it have done more to keep tabs on how third parties were using data?</p>
//        <p>Your organisation may not be as large as Facebook, but the principles still remain the same.</p>
//        <p>If you already follow good practice with data protection then it is likely you will continue to do so without breaching any major areas of the new GDPR. The main change is the “Opting In” for Direct Marketing. If you want to send a customer additional information about other products and services then the customer must now give their advanced permission.</p>
//        <p>There are two separate obligations. One concerns the right of individuals to be informed of what you do with their personal information and why. The other obligation concerns the legal basis in which you process personal information. You shouldn’t put these two together. It will then be easier to verify both your obligations.</p>
//        <p>Here are some common questions and answers that will help you understand your responsibilities in this area. (Firms should also consider seeking their own legal advice and or research the ICO guidance on GDPR).</p>'
//            ],[
//                'id' => 2,
//                'content' => '<h2>We carry out Electronic mail marketing, has anything changed?</h2>
//        <p>The Privacy and Electronic Communications Regulations 2003 (PECR) sits beneath GDPR Consent and provides rules about sending marketing and advertising by electronic means, such as by telephone, fax, email, text and picture or video message, or by using an automated calling system. PECR also include other rules relating to cookies, telephone directories, traffic data, location data and security breaches.</p>
//        <p>PECR were designed to complement the Data Protection Act, and the EU is therefore in the process of replacing this with a new ePrivacy Regulation (ePR) that is more in line with the GDPR, but until this is finalised and comes into effect then organisations must continue to comply with both regimes.</p>
//        <p>The most important thing to remember is that you can only carry out unsolicited electronic marketing if the person you’re targeting has given you their permission.</p>
//        <p>However, there is an exception to this rule. Known as the “soft opt-in” it applies if the following conditions are met;</p>
//        <ul>
//        <li>Where you’ve obtained a person’s details in the course of a sale or negotiations for a sale of a product or service:</li>
//        <li>Where the messages are only marketing similar products or services; and</li>
//        <li>Where the person is given a simple opportunity to refuse marketing when their details are collected, and if they don’t opt out at this point, are given a simple way to do so in future messages.</li>
//        </ul>
//        <p>When you send an electronic marketing message, you must tell the recipient who you are and provide a valid contact address.</p>'
//            ],[
//                'id' => 3,
//                'content' => '<h2>We carry out Door Canvassing and Telecan, has anything changed?</h2>
//        <p>The ICO states that a company can contact a customer but it must be in the least intrusive way to generate a lead.</p>
//        <p>This has been interpreted as-</p>
//        <p>Door Canvass:</p>
//        <ul>
//        <li>Any customers that agree to an appointment will sign a <u>consent form</u> for the canvasser – This will be evidence that the customer has given permission for a salesman to visit.</li>
//        <li>Any customer who states that they <u>do not want a visit or to be canvassed again</u> will have this information put on file to prevent any further communication – companies should document the address that should not be canvassed on their data system.</li>
//        </ul>
//        <p>Telecan:</p>
//        <ul>
//        <li>All leads must be screened by the lead generator <u><strong>and</strong></u> the retailer <u>prior</u> to a potential customer being canvassed. <u><strong>Currently</strong></u> only the lead generator company screens, however under the new legislation <u><strong>it is the retailers responsibility</strong></u> to ensure that no TPS customers are called and Directors will be liable if this happens. Firms are already fined by the ICO and Trading Standards for this activity – under the new regulation <u><strong>individual directors will be held accountable.</strong></u></li>
//        <li>Any customers stating that they do not wish to be called again will have this information put on file to prevent any further communication – this must be documented on your data system to evidence you have acknowledged this.</li>
//        </ul>
//        <p>You may consider that there could be a concern that the original communication/canvassing (prior to 25th May 2018) is deemed to be intrusive – however this is open to opinion and if measures/systems are implemented to evidence the process you use (now and then) to canvass, if a customer makes a complaint to the ICO or yourself, then this may be considered sufficient under the rules of GDPR.</p>
//        <p>All firms should consider the best type of system to store data for <u>their</u> business – this may be electronic or something as simple as a spreadsheet – <u>which ever you have or choose it must be safe and secure and your staff must be trained to use it and understand the implications of loss of data/security if not operated correctly.</u></p>'
//            ],[
//                'id' => 4,
//                'content' => '<h2>How do I contact my existing database of customers?</h2>
//        <p>A database can be split into 2 camps – “Customers” and “Potential Customers”.</p>
//        <p>“Customers” – These are people that have purchased goods from you.</p>
//        <p>“Potential Customers” – These are people that have contacted you for a quote or you have bought leads from a 3rd party or door/telecan.</p>
//        <p>“Customers” - that have purchased goods from you and they have a warranty/guarantee for the goods they purchased – it is reasonable to say you need to keep their data in case of a remedial issue or complaints – if you remarket them on 25th May 2018 and after you would need to gain their consent for the future – if a customer objects then you should explain you need their data in case they need to speak to you about their product or want to buy something else. You may wish to send your customers a letter about this change. From the 25th May 2018 you must be mindful that you don’t have consent from the customer so you should ensure all staff are trained appropriately in marketing them and gaining consent. As with any marketing – if the data is many years old then it may not be current so you could be putting resources into something that may be costly.</p>
//        <p>“Potential Customers” – you may wish to contact these people. There are rules about text or email, which can be found in the ICO guide at <a href="https://www.ico.org.uk">www.ico.org.uk</a> – this group of people you do not have consent from and you do not have a relationship with them – you may have already contacted them in the past and made a note to call them in a years’ time – if it is the 25th May 2018 or after then you should consider only communicating in writing. You must consider the age of this data too as if it is a number of years old then it may not be current and would be a waste of time to market it.</p>'
//            ],[
//                'id' => 5,
//                'content' => '<h2>Have contracts with data processors and third-party suppliers been amended to include the provisions of GDPR?</h2>
//        <p>If you share data with other third-parties then it is important to have Service Level Agreements and bespoke agreements in place to ensure all parties comply with the GDPR and that when obtaining consent to process/market data it is clear, unambiguous and easily withdrawn.</p>
//        <p>You should also be able to demonstrate that sufficient due diligence has been carried out on suppliers (including IT suppliers) to ensure compliance with GDPR.</p>
//        <h2>Proposed Consent Wording – Give me an example?</h2>
//        <p><strong>This is an example covering a customer registering an appliance they have purchased in order to trigger a free warranty.</strong></p>
//        <p>“Registering your appliance helps us provide our service delivery more quickly if you contact us for assistance, for example to arrange an engineer to visit your home to carry out a repair. We and XYZ Warranty Ltd will be able to contact you by phone, post, text or email if we have important information about your appliance or its guarantee. We will contact you with offers or information that are directly related to your appliance. Providing us with your details means you agree you are happy to receive these messages. We will look after your information and it will only be used as described in our Privacy Policy”.</p>
//        <p><strong>This meets ICO Guidance requirements which is: In summary, we recommend that your marketing campaigns are always permission-based and you explain clearly what person’s details will be used for. Provide a simple way for them to opt out of marketing messages and have a system in place for dealing with complaints.</strong></p>'
//            ],[
//                'id' => 6,
//                'content' => '<h2>Where can I go to find out more about GDPR?</h2>
//        <p>It is on the Information Commissioners Office (ICO) website. If you go to <a href="https://www.ico.org.uk">www.ico.org.uk</a> you can view the regulations. Tel: 0303 123 1113 ext. 632</p>
//        <h2>Do I have to be registered with ICO?</h2>
//        <p>Yes. If you carry out regulated activities then you will collect and handle data. For most firms the charge is just £35 per annum.</p>
//        <h2>What is a SAR?</h2>
//        <p>This stands for Subject Access Request. When you are collecting personal information on a customer, they have the rights to request access to the information that you hold on them, including rectifying inaccurate data.</p>
//        <h2>Can you charge if a customer requests access to their information?</h2>
//        <p>Prior to the GDPR yes, usually £10.00. After the GDPR goes live then this should be provided free of charge. There are exceptions, such as if the customer is requesting excessive information in which case a reasonable charge can be made, although the amount is not defined in the GDPR and so you have to justify the payment.</p>
//        <h2>If a customer wants to purchase a product on finance – do they have to positively opt in for you to use their personal data?</h2>
//        <p>If the processing of the data is “necessary” for a contract then you DO NOT need to get separate consent. In other words, if the customer wants to purchase a product on finance, and in order to do that you need their information to carry out the credit search etc., then it is "necessary" to carry out that process in order to prepare the finance documents and so you don’t need a positive opt in. There is no assumption they have opted in or out - the processing is "necessary" and therefore you do not need to get separate consent.</p>
//        <p>Another example is an individual shopping around for car insurance requests a quotation. The insurer needs to process certain data in order to prepare the quotation. The processing is "necessary" for a contract and so you do not need to obtain separate consent.</p>
//        <p>A further example is that a customer can choose to sign into a service, sign into a newsletter etc., no opting in or special consent is required to obtain this data.</p>'
//            ],[
//                'id' => 7,
//                'content' => '<h2>With regards to registering an appliance so that the warranty can be serviced? How does that work?</h2>
//        <p>If the customer has to register an appliance for the warranty to begin on a product they have purchased then again this is acceptable. However, if you want to then use their data to market them other completely separate and non-related information and follow up on their interest you will require an OPT IN consent from the customer.</p>
//        <p><strong>A customer has a right to request the deletion or removal of personal data. They call you up and ask you to remove their details relating to a finance agreement that is currently still within its term. Is that okay to do?</strong></p>
//        No. A customer has a right to request the deletion or removal of personal data where there is no compelling reason for its continued processing. In this scenario there is a reason to maintain that data and it will carry with it a retention period.</p>
//        <h2>What is a Retention Period?</h2>
//        <p>This is a period of time when it is reasonable to retain data. A common period is 6 years + 1. However, the period is not defined by the GDPR. For example, a property may require external wall insulation and the guarantee is for 25 years. This is a long period of time, but it is not unreasonable to want to keep that data for 25 years in case there are any problems that occur during the period the guarantee is in place. There may also be finance in place and a loan repayment period of 25 years. The Retention Period would therefore be 25 years + 1 in this example. An organisation should create a Data Retention and Disposal Policy that conforms with the GDPR.</p>
//        <p><strong>We want to revise and update our existing Password Policy to ensure it is GDPR compliant. Is there any special rules GDPR has e.g. regarding format (special characters etc.) as we want to incorporate these?</strong></p>
//        <p>There is no one size fits all. Each firm must design and organise their security to fit the nature of the personal data they hold. There is a Practical Guide which says each user must have and use their own username and password; each user must have an account that has permissions appropriate to the job they are carrying out at the time. Have strong passwords and enforce regular password changes. Passwords or other access should be cancelled immediately if a staff member leaves the organisation or is absent for long periods.</p>
//        <h2>What to do if you suspect a breach of data protection?</h2>
//        <p>If you suspect a security breach has occurred or may have occurred you must report your suspicions to the person within your organisation who has been allocated the Data Protection Officer (DPO) responsibilities. The DPO will be responsible for reporting any breaches to the ICO and registering these on the internal Breaches Register.</p>'
//            ],[
//                'id' => 8,
//                'content' => '<h2>Summary</h2>
//        <p>It is your organisation’s responsibility to implement the GDPR requirements. This is likely to include creating and/or revising your Data Retention and Disposal Policy; GDPR Policy and Procedure; Subject Access Request Procedure; Privacy Notice and Password Policy.</p>
//        <p>The purpose of this is to ensure that your organisation meets its legal, statutory and regulatory requirements under the GDPR which includes third party suppliers. You will also need to ensure suppliers are up to date with the new regulations, request to see their policies and if necessary help with training and awareness in this area.</p>
//        <p>This includes what personal data you hold; where it came from; who you share it with; legal basis for processing it; what format it is in; who is responsible for it and access levels. You should also look at the key risks that you have identified in relation to GDPR and create an action plan as to how to mitigate those risks. You may also need to identify any IT changes which may need to take place.</p>'
//            ]
//        ];
//    }

  public function GeneralDataProtectionRegulationCoursePages(){
    return [
      [
        'id' => 1,
        'content' => '<h2>Introduction</h2>
            <p>
                Welcome and thank you for taking part in this e-learning training presentation which will help to raise awareness of the risks and impact of GDPR regulations within your organisation.
            </p>
            <h2>
                What is GDPR?
            </h2>
            <p>
                The GDPR stands for the General Data Protection Regulation and is a legal framework that sets guidelines for the collection and processing of personal information from individuals.
            </p>
            <h2>
                Background to the GDPR
            </h2>
            <p>
                The GDPR replaced the Data Protection Directive of 1995 which underpinned the Data Protection Act 1998 providing a greater focus on transparency, control, accountability and governance by firms and greater powers by the regulator.
            </p>
            <p>
                Passed by the European Union in April of 2016, the GDPR had far reaching global impact on data security. No matter where you were based, any organisation that did business with EU citizens had to comply with the GDPR’s expanded and more stringent data protection rules by <strong>May 25th, 2018</strong>.
            </p>
            <p>
                The UK voted to leave the EU in 2016 and officially left the trading bloc – it’s nearest and biggest trading partner – on 31st January 2020. However, both sides agreed to keep many things the same until 31st December 2020, to allow enough time to agree to the terms of a new trade deal.
            </p>
            <p>
                The GDPR was an EU Regulation and from the <strong>1st January 2021</strong> no longer applies to the UK. However, if your organisation operates inside the UK, you will need to comply with UK data protection law. The GDPR has been incorporated into UK data protection law as the UK GDPR – so in practice there is little change to the core data protection principles, rights and obligations found in the EU GDPR.
            </p>
            <p>
                The EU GDPR may also still apply directly if your firm operates in the European Economic Area (EEA), offers goods or services to individuals in the EEA, or monitors the behaviour of individuals in the EEA.
            </p>
            <p>
                The EU GDPR will still apply to any organisations in Europe who send the UK data, so they may need to help on deciding how to transfer personal data to the UK in line with the UK GDPR, if the trade deal bridge ends without adequacy.
            </p>
            <p>
                The Data Protection Act 2018 (DPA 2018) continues to apply. The provisions of the EU GDPR were incorporated directly into UK law at the end of the transition period. The UK GDPR sits alongside the DPA 2018 with some technical amendments so that it works in a UK-only context.
            </p>
            <p>
                The Guide to the UK GDPR is part of the ICO’s <a href="https://ico.org.uk/for-organisations/guide-to-data-protection/" rel="noopener" target="_blank">Guide to Data Protection</a>. It is for Data Protection Officers (DPOs) and others who have day-to-day responsibility for data protection and it explains the general data protection regime that applies to most UK businesses and organisations and covers the UK General Data Protection Regulation (UK GDPR), tailored by the Data Protection Act 2018. It explains each of the data protection principles, rights and obligations and summarises the key points which are contained in this policy and procedure.
            </p>
            <p>
                The Information Commissioners Office (ICO) is the UK’s independent authority set up to uphold information rights in the public interest, promoting openness by public bodies and data privacy for individuals. If you handle “personal data” about individuals you have a number of legal obligations and one of these obligations is to register your firm with the ICO. Personal data means data which relates to a living individual who can be identified by that data.
            </p>
            <p>
                The ICO will not be the regulator for any European-specific activities caught by the EU version of the GDPR, although they hope to continue working closely with European supervisory authorities.
            </p>
            <p>
                The UK government will continue to work towards maintaining close working relationships between the ICO and other countries’ supervisory authorities once the transition period ends.
            </p>
            <p>
                The way organisations handle customer data is becoming increasingly more significant particularly as technology advances.
            </p>
            <p>
            If you already follow good practice with data protection then it is likely you will continue to do so without breaching any major areas of the new UK GDPR. The main change is the “Opting In” for Direct Marketing. If you want to send a customer additional information about other products and services then the customer must now give their advanced permission.
            </p>
            <p>
                There are two separate obligations. One concerns the right of individuals to be informed of what you do with their personal information and why. The other obligation concerns the legal basis in which you process personal information. You shouldn’t put these two together. It will then be easier to verify both your obligations.
            </p>
'
      ],[
        'id' => 2,
        'content' => '<h2>The UK GDPR Principles</h2>
            <p>
                The UK GDPR requires that personal data shall be: -
            </p>
            <p>
                a) Processed lawfully, fairly and in a transparent manner in relation to individuals
            </p>
            <p>
                b) Collected for specified, explicit and legitimate purposes and not further processed in a manner that is incompatible with those purposes; further processing for archiving purposes in the public interest, scientific or historical research purposes or statistical purposes shall not be considered to be incompatible with the initial purposes
            </p>
            <p>
                c) Adequate, relevant and limited to what is necessary in relation to the purposes for which they are processedvd) Accurate and, where necessary, kept up to date; every reasonable step must be taken to ensure that personal data that are inaccurate, having regard to the purposes for which they are processed, are erased or rectified without delay
            </p>
            <p>
                e) Kept in a form which permits identification of data subjects for no longer than is necessary for the purposes for which the personal data are processed; personal data may be stored for longer periods insofar as the personal data will be processed solely for archiving purposes in the public interest, scientific or historical research purposes or statistical purposes subject to implementation of the appropriate technical and organisational measures required by the UK GDPR in order to safeguard the rights and freedoms of individuals
            </p>
            <p>
                f) Processed in a manner that ensures appropriate security of the personal data, including protection against unauthorised or unlawful processing and against accidental loss, destruction or damage, using appropriate technical or organisational measures
            </p>
            <p>
                The controller shall be responsible for, and be able to demonstrate, compliance with the principles and requires that firms show how they comply with the principles, detailing and summarising the measures and controls that they have in place to protect personal information and mitigate the risks of processing.
            </p>
            <h2>
                Electronic Mail Marketing
            </h2>
            <p>
                The Privacy and Electronic Communications Regulations 2003 (PECR) sits beneath UK GDPR Consent and provides rules about sending marketing and advertising by electronic means, such as by telephone, fax, email, text and picture or video message, or by using an automated calling system. PECR also include other rules relating to cookies, telephone directories, traffic data, location data and security breaches.
            </p>
            <p>
                PECR were designed to complement the Data Protection Act, the most important thing to remember is that you can only carry out unsolicited electronic marketing if the person you’re targeting has given you their permission.
            </p>
            <p>
                However, there is an exception to this rule. Known as the “soft opt-in” it applies if the following conditions are met;
            </p>
            <ul>
                <li>Where you’ve obtained a person’s details in the course of a sale or negotiations for a sale of a product or service:</li>
                <li>Where the messages are only marketing similar products or services; and</li>
                <li>Where the person is given a simple opportunity to refuse marketing when their details are collected, and if they don’t opt out at this point, are given a simple way to do so in future messages.</li>
            </ul>
            <p>
                When you send an electronic marketing message, you must tell the recipient who you are and provide a valid contact address.
            </p>
'
      ],[
        'id' => 3,
        'content' => '<h2>Door Canvassing and Telecan</h2>
            <p>
                A company can contact a customer but it must be in the least intrusive way to generate a lead.
            </p>
            <p>
                Door Canvass:
            </p>
            <ul>
                <li>Any customers that agree to an appointment will sign a <u>consent form</u> for the canvasser – This will be evidence that the customer has given permission for a salesman to visit.</li>
                <li>Any customer who states that they <u>do not want a visit or to be canvassed again</u> will have this information put on file to prevent any further communication – companies should document the address that should not be canvassed on their data system.</li>
            </ul>
            <p>
                Telecan:
            </p>
            <ul>
                <li>All leads must be screened by the lead generator <u><strong>and</strong></u> the retailer <u>prior</u> to a potential customer being canvassed. <u><strong>It is the retailers responsibility</strong></u> to ensure that no TPS customers are called and Directors will be liable if this happens.</li>
                <li>Any customers stating that they do not wish to be called again will have this information put on file to prevent any further communication – this must be documented on your data system to evidence you have acknowledged this.</li>
            </ul>
            <p>
                All firms should consider the best type of system to store data for <u>their</u> business – this may be electronic or something as simple as a spreadsheet – <u>which ever you have or choose it must be safe and secure and your staff must be trained to use it and understand the implications of loss of data/security if not operated correctly.</u>
            </p>
            <p style="font-weight: bold;">
                Contacting my existing database of customers
            </p>
            <p>
                A database can be split into 2 camps – “Customers” and “Potential Customers”.
            </p>
            <p>
                “Customers” – These are people that have purchased goods from you.
            </p>
            <p>
                “Potential Customers” – These are people that have contacted you for a quote or you have bought leads from a 3rd party or door/telecan.
            </p>
            <p>
                “Customers” - that have purchased goods from you and they have a warranty/guarantee for the goods they purchased – it is reasonable to say you need to keep their data in case of a remedial issue or complaints – if you remarket them you would need to gain their consent for the future – if a customer objects then you should explain you need their data in case they need to speak to you about their installation or want to buy something else. You must be mindful that you don’t have consent from the customer so you should ensure all staff are trained appropriately in marketing them and gaining consent. As with any marketing – if the data is many years old then it may not be current so you could be putting resources into something that may be costly.
            </p>
            <p>
                “Potential Customers” – you may wish to contact these people. There are rules about text or email, which can be found in the ICO guide at www.ico.org.uk – this group of people you do not have consent from and you do not have a relationship with them – you may have already contacted them in the past and made a note to call them in a years’ time – you should consider only communicating in writing. You must consider the age of this data too as if it is a number of years old then it may not be current and would be a waste of time to market it.
            </p>
            <p style="font-weight: bold;">
                Have contracts with data processors and third-party suppliers been amended to include the provisions of UK GDPR?
            </p>
            <p>
                If you share data with other third-parties then it is important to have Service Level Agreements and bespoke agreements in place to ensure all parties comply with the UK GDPR and that when obtaining consent to process/market data it is clear, unambiguous and easily withdrawn.
            </p>
            <p>
                You should also be able to demonstrate that sufficient due diligence has been carried out on suppliers (including IT suppliers) to ensure compliance with UK GDPR.
            </p>

'
      ],[
        'id' => 4,
        'content' => '<h2>Proposed Consent Wording</h2>
            <p style="font-weight: bold;">
                Example
            </p>
            <p>
                “Registering your appliance helps us provide our service delivery more quickly if you contact us for assistance, for example to arrange an engineer to visit your home to carry out a repair. We and XYZ Warranty Ltd will be able to contact you by phone, post, text or email if we have important information about your appliance or its guarantee. We will contact you with offers or information that are directly related to your appliance. Providing us with your details means you agree you are happy to receive these messages. We will look after your information and it will only be used as described in our <u>Privacy Policy</u>”.
            </p>
            <p style="font-weight: bold;">
                This meets ICO Guidance requirements which is: In summary, we recommend that your marketing campaigns are always permission-based and you explain clearly what person’s details will be used for. Provide a simple way for them to opt out of marketing messages and have a system in place for dealing with complaints.
            </p>
            <h2>
                Where can I go to find out more about UK GDPR?
            </h2>
            <p>
                It is on the Information Commissioners Office (ICO) website right now. If you go to www.ico.org.uk you can view the regulations.
            </p>
            <h2>
                Do I have to be registered with ICO?
            </h2>
            <p>
                Yes. If you collect and handle data. For most firms the charge is only a small amount per annum.
            </p>
            <h2>
                What is a SAR?
            </h2>
            <p>
                This stands for Subject Access Request. When you are collecting personal information on a customer, they have the rights to request access to the information that you hold on them, including rectifying inaccurate data.
            </p>
            <h2>
                Can you charge if a customer requests access to their information?
            </h2>
            <p>
                This should be provided free of charge. There are exceptions, such as if the customer is requesting excessive information in which case a reasonable charge can be made, although the amount is not defined in the UK GDPR and so you have to justify the payment.
            </p>
            <h2 >
                If a customer wants to purchase a product on finance – do they have to positively opt in for you to use their personal data?
            </h2>
            <p>
                If the processing of the data is “necessary” for a contract then you DO NOT need to get separate consent. In other words, if the customer wants to purchase a product on finance, and in order to do that you need their information to carry out the credit search etc., then it is "necessary" to carry out that process in order to prepare the finance documents and so you don\'t need a positive opt in. There is no assumption they have opted in or out - the processing is "necessary" and therefore you do not need to obtain separate consent.
            </p>
            <p>
                Another example is an individual shopping around for car insurance requests a quotation. The insurer needs to process certain data in order to prepare the quotation. The processing is "necessary" for a contract and so you do not need to obtain separate consent.
            </p>
            <p>
                A further example is that a customer can choose to sign into a service, sign into a newsletter etc., no opting in or special consent is required to obtain this data.
            </p>
            <h2>
                With regards to registering an appliance so that the warranty can be serviced? How does that work?
            </h2>
            <p>
                If the customer has to register an appliance for the warranty to begin on a product they have purchased then again this is acceptable. However, if you want to then use their data to market them other completely separate and non-related information and follow up on their interest you will require an OPT IN consent from the customer.
            </p>
            <h2>
                A customer has a right to request the deletion or removal of personal data. They call you up and ask you to remove their details relating to a finance agreement that is currently still within its term. Is that okay to do?
            </h2>
            <p>
                No. A customer has a right to request the deletion or removal of personal data where there is no compelling reason for its continued processing. In this scenario there is a reason to maintain that data and it will carry with it a retention period.
            </p>'
      ],[
        'id' => 5,
        'content' => '<h2>Retention Periods</h2>
            <p>
                This is a period of time when it is reasonable to retain data. A common period is 6 years + 1. However, the period is not defined by the UK GDPR. For example, a property may require external wall insulation and the guarantee is for 25 years. This is a long period of time, but it is not unreasonable to want to keep that data for 25 years in case there are any problems that occur during the period the guarantee is in place. The Retention Period would therefore be 25 years + 1 in this example. An organisation should create a Data Retention and Disposal Policy that conforms with the UK GDPR.
            </p>
            <h2>
                Password Policy to ensure it is UK GDPR compliant.
            </h2>
            <p>
                There are no special rules and no one size fits all. Each firm must design and organise their security to fit the nature of the personal data they hold. There is a Practical Guide which says each user must have and use their own username and password; each user must have an account that has permissions appropriate to the job they are carrying out at the time. Have strong passwords and enforce regular password changes. Passwords or other access should be cancelled immediately if a staff member leaves the organisation or is absent for long periods.
            </p>
            <h2>
                Data Protection Breaches
            </h2>
            <p>
                If you suspect a security breach has occurred or may have occurred you must report your suspicions to the person within your organisation who has been allocated the Data Protection Officer (DPO) responsibilities. The DPO will be responsible for reporting any breaches to the ICO and registering these on the internal Breaches Register.
            </p>
            <h2>
                Summary
            </h2>
            <p>
                It is your organisation’s responsibility to implement the UK GDPR requirements. This is likely to include creating and/or revising your Data Retention and Disposal Policy; GDPR Policy and Procedure; Subject Access Request Procedure; Privacy Notice and Password Policy.
            </p>
            <p>
                The purpose of this is to ensure that your organisation meets its legal, statutory and regulatory requirements under the UK GDPR which includes third party suppliers. You will also need to ensure suppliers are up to date with the regulations, request to see their policies and if necessary help with training and awareness in this area.
            </p>
            <p>
                This includes what personal data you hold; where it came from; who you share it with; legal basis for processing it; what format it is in; who is responsible for it and access levels. You should also look at the key risks that you have identified in relation to UK GDPR and create an action plan as to how to mitigate those risks. You may also need to identify any IT changes which may need to take place.
            </p>
        '
      ]
    ];
  }

  public function GeneralDataProtectionRegulationCourseData(){
    return [
      'title' => 'General Data Protection Regulation Course',
      'course' => 'GeneralDataProtectionRegulationCourse',
      'pagesUrl' => '/Course/View/Pages/GeneralDataProtectionRegulationCourse',
      'sendUrl' => '/Course/Send',
      'pages' => [
        $this->GeneralDataProtectionRegulationCoursePages()
      ],
//      'courseTopics' => 'What is GDPR|What is PECR|Consent Wording|Retention Periods|What is ICO|Sharing Data|Reporting Breaches|SAR',
      'courseTopics' => 'What is ICO|The UK GDPR Principles|What is PECR|Sharing Data|Consent Wording|Reporting Breaches|Retention Periods|Subject Access Request (SAR)',
    ];
  }

  public function GeneralDataProtectionRegulationCourse(){
    return view('course.course')->with($this->GeneralDataProtectionRegulationCourseData());
  }
// End Course



// Start Course
  public function FCAComplianceTrainingCourseOnePages(){
    return [
      [
        'id' => 1,
        'content' => '
        <h2>Introduction</h2>
        <p>Welcome and thank you for taking part in this e-learning training course.</p>
        <p>We are very pleased to be working with you to provide loans to customers and by offering finance you should improve your level of sales, service and credibility.</p>
        <p>Offering finance is a great way to increase average order values, reduce cancellations and generate more money by providing your customers with affordability, convenience, payment flexibility and peace of mind.</p>
        <p>Within these pages we will familiarise you with certain areas of the finance industry and help you to understand your role and how important it is to treat customers fairly and ensure finance is sold correctly. Our aim in producing this training course is to break down key areas into easy to understand sections and to support your practices when working with finance to ensure at all times you recognise and meet the FCA Requirements.</p>
        <p>It is important that you complete all the sections to demonstrate that you have read and fully understood everything and if you have any questions or queries then please do not hesitate to ask.</p>
        <p>The FCA is the Financial Conduct Authority and is the financial regulatory body in the United Kingdom that regulates financial firms providing services to consumers and maintains the integrity of the UK’s financial markets. It handles regulated credit activities and like most financial products and services, there are very strict rules when it comes to advertising, promoting and selling loans and credits. These come from the Consumer Credit Act and the FCA Handbook. </p>
        <p>The role of the Financial Conduct Authority is to:</p>
        <ul>
        <li style="color: red;">Issue “permissions” to sell, broker or lend finance</li>
        <li style="color: red;">Regulate and monitor the practices of companies in order to ensure standards are met</li>
        <li style="color: red;">Monitor complaints through the Financial Ombudsman Service</li>
        <li style="color: red;">Protect customers against scams and unfair contracts</li>
        <li style="color: red;">Ensure customers are treated fairly</li>
        <li style="color: red;">Protect vulnerable customers</li>
        </ul>
        <p>Becoming directly authorised and regulated by the Financial Conduct Authority is a long and complicated process and can take around 8 months to complete with many detailed questions asked during this time including checking the fitness and suitability of the directors and shareholders.</p>
        <p>Not everyone is able or capable of obtaining FCA Authorisation and so it is important when undertaking any finance arrangement that you understand the governance of the finance industry, in particular taking the principles, procedures and relevant processes seriously.</p>'
      ],[
        'id' => 2,
        'content' => '<h2>What our partnership means</h2>
        <p>Our partnership means that you are able to provide loans and credit agreements either through a lender or panel of credit lenders and act under our authorisation to sell them. Our firm is described as a credit broker and acts as a “go between” in order to facilitate the loan between the lender and the customer.</p>
        <p>Our firm’s values, and so your values, are that we act fairly, ethically and openly at all times and make sure the loans are promoted, advertised and sold appropriately and we act within the law. For example, it is important that the customer understands who is providing the loan and your relationship and association with our company.</p>
        <p>Every customer should fully understand their obligations and legal rights, and not be misled in any way or felt under pressure to take out a loan or make a decision to borrow quickly.</p>
        <p>You must use customer data you collect on our behalf appropriately and only advertise and sell the loans in a way which is legal and complies with regulations.</p>'
      ],[
        'id' => 3,
        'content' => '<h2>Consumer Credit Act & Consumer Credit Directive</h2>
        <p>These laws and regulations cover how companies selling customer credit must act, the information they provide, how they are categorised, and the protection the law gives to consumers.</p>
        <p>Customers must be provided with a verbal and written “adequate explanation” of the loan, which covers the general purpose of the loan, repayments, the customers legal right to withdraw from the agreement after they have signed it, and the consequences of not keeping up repayments.</p>
        <p>The “Your Loan Explained” section of a credit agreement document helps to provide an adequate explanation to the customer which is supplied by the lender.</p>
        <p>If speaking to a customer to support the adequate explanation it is essential that you provide the information in a clear, concise and easy to understand way, ensuring you follow the Treating Customers Fairly Procedure, which also includes Vulnerable Customers.</p>
        <p>Customers have a legal right to withdraw, without giving reasons, from their loan agreement. They have a mandatory 14 days cooling off period to do this, starting from the day after the loan agreement is signed by the lender or when it has been confirmed in writing, if this is later.</p>
        <p>Unless otherwise set out in your contract, a customer withdrawing from the loan agreement does not cancel the purchase they have made from you. The customer will need to make separate arrangements, if any, to make payment or return the goods and services provided.</p>'
      ],[
        'id' => 4,
        'content' => '<h2>Customer’s right to make a claim for faulty or unsatisfactory goods and services</h2>
        <p>This is called “a claim under section 75 of the Consumer Credit Act”.</p>
        <p>If a customer believes goods and services bought using a loan are faulty or unsatisfactory (sometimes referred to as “not of merchantable quality”), they can make a claim against the company that provided the loan.</p>
        <h2>Customer’s right to make a claim if finance has been mis-sold.</h2>
        <p>This is called “a claim under section 56 of the Consumer Credit Act”.</p>
        <p>If a customer believes they have been disadvantaged financially because they were not given the full facts, or were given misleading facts about the loan they took out, they can make a claim against the company that provided the loan.</p>'
      ],[
        'id' => 5,
        'content' => '<h2>Treating Customers Fairly otherwise known as TCF</h2>
        <p>We are committed to meeting customer expectations of performance, quality, price and delivery in all that we do. Treating Customers Fairly must now remain central to your conduct, and you must put the well-being of your customers at the heart of how you deal with them.</p>
        <p>TCF has six key customer outcomes that you need to demonstrate that you have delivered and we require you to achieve:</p>
        <p style="color: red;"><strong>Outcome 1</strong> – CULTURE<br />
        Consumers must be confident that they are dealing with a firm or individual where the fair treatment of customers is central to the corporate culture.</p>
        <p style="color: red;"><strong>Outcome 2</strong> – MARKETING<br />
        Products and services marketed and sold must be designed to meet the needs of identified consumer groups and targeted accordingly.</p>
        <p style="color: red;"><strong>Outcome 3</strong> – INFORMATION<br />
        Consumers must be provided with clear information and kept appropriately informed, before, during and after the point of sale.</p>
        <p style="color: red;"><strong>Outcome 4</strong> – ADVICE<br />
        Where consumers receive advice, the advice must be suitable and takes account of their circumstances.</p>
        <p style="color: red;"><strong>Outcome 5</strong> – PRODUCT<br />
        Consumers must be provided with products that perform as they have been led to expect, and the associated service is of an acceptable standard.</p>
        <p style="color: red;"><strong>Outcome 6</strong> – BARRIERS<br />
        Consumers must not face unreasonable post-sale barriers to change products, switch providers, submit claims or make a complaint.</p>
        <p>These six outcomes serve as the basis for treating customers fairly.</p>'
      ],[
        'id' => 6,
        'content' => '<h2>Vulnerable Customers</h2>
        <p>It is likely when selling finance that along the way you meet a vulnerable customer. We need to make sure that you can recognise the signs and signals at the beginning and then have a process to deal with the circumstances of the individuals.</p>
        <p>Firstly, let’s identify what we mean by a vulnerable customer?</p>
        <p>These may be people affected by Dementia. In the UK for example 800,000 people live with dementia and this is expected to double in the next 40 years.</p>
        <p>It could perhaps be somebody who has suffered a bereavement who isn’t really in the right state of mind, particularly when it comes down to making complex financial decisions.</p>
        <p>It could be even be people perhaps preparing parents to go into a care home and having to pay the fees associated with that.</p>
        <p>It comes down to us leading the way in which vulnerable people are dealt with.</p>'
      ],[
        'id' => 7,
        'content' => '<h2>Other people may be affected by the following:</h2>
        <p style="color: red;">Mental Health Issues</p>
        <p style="color: red;">Serious or Chronic Illness</p>
        <p style="color: red;">Experiencing Serious Stressful Events</p>
        <p style="color: red;">Non-English Speakers</p>
        <p style="color: red;">Deaf/Blind</p>
        <p style="color: red;">Recently Bereaved</p>
        <p style="color: red;">Age awareness</p>
        <p style="color: red;">Bi-Polar</p>
        <p style="color: red;">Under the influence of drink or drugs</p>
        <p style="color: red;">Post-Traumatic Stress Disorder</p>
        <h2>Characteristics to look out for may include the following:</h2>
        <p style="color: red;">The customer may repeat themselves</p>
        <p style="color: red;">Say “YES” before you have explained everything</p>
        <p style="color: red;">Ask unrelated questions</p>
        <p style="color: red;">Seem distracted or wander off the topic</p>
        <p style="color: red;">They tell you they have a history of mental and health issues</p>
        <p style="color: red;">May seem agitated or confused about you being there</p>
        <p style="color: red;">Appear not to understand everything even when you have explained something a couple of times<p>'
      ],[
        'id' => 8,
        'content' => '<h2>What to do under any of these circumstances?</h2>
        <p>There are actions that you should consider, and although not an exhaustive list, sometimes common sense needs to be applied. For example:</p>
        <p style="color: red;">Ask the customer to invite a friend or family member to be there</p>
        <p style="color: red;">Leave the appointment</p>
        <p style="color: red;">Re-appoint when they have a friend or family member to sit with them</p>
        <p style="color: red;">Document the response of the customer and why you consider they may be vulnerable</p>
        <p style="color: red;">Ask the customer to repeat back to you their understanding of the sale and product</p>
        <p style="color: red;">Don’t rush, speak clearly always remain professional</p>
        <p style="color: red;">Please advise your line manager</p>
        <p>Remember it could be your relative or a close friend and so treat the customer with respect and don’t always just go for the sale.</p>
        <p>By the way, you should not assume that a person who is vulnerable or who has a mental capacity issue cannot make an informed decision as this could be seen as discrimination.</p>'
      ],[
        'id' => 9,
        'content' => '<h2>Your Role and Responsibilities:</h2>
        <ul>
        <li style="color: red;">Provide clear, concise and truthful information</li>
        <li style="color: red;">Identify the person and the firm at the outset and make clear the purpose of the communication</li>
        <li style="color: red;">Clearly state the service you offer and the relationship with our firm and the lender</li>
        <li style="color: red;">Complete relevant documentation in the correct manner and order</li>
        <li style="color: red;">Take responsibility for your own knowledge</li>
        <li style="color: red;">Follow all relevant processes and policies</li>
        <li style="color: red;">Be aware that you are responsible for what you say and do</li>
        <li style="color: red;">Any savings or benefits of the product MUST NOT be linked to the loan</li>
        <li style="color: red;">Take appropriate action if you consider the customer to be “vulnerable”</li>
        <li style="color: red;">Before leaving your customer ensure they fully understand the finance product</li>
        </ul>
        <p>As part of our obligations monitoring calls will be made to your customers in order to check that the sales process is being carried out correctly.</p>
        <h2>Visiting Consumers in their Home</h2>
        <p>If your activities involve visiting a consumer in their home, then the FCA expects all of us to have tight controls and systems in place.</p>
        <p>For example:</p>
        <ul>
        <li style="color: red;">You must obtain consent for the visit from the consumer;</li>
        <li style="color: red;">For the consent to be given, the information to the customer must have been given in a clear, concise and fair way by the sales person;</li>
        <li style="color: red;">You need to identify the person and the firm at the outset and make clear the purpose of the communication;</li>
        <li style="color: red;">Ensure an appropriate time of day for the visit;</li>
        <li style="color: red;">State the services the firm is authorised to offer;</li>
        <li style="color: red;">State any relationship which is relevant to the services offered. In other words, make it clear if you are acting as an associate.</li>
        </ul>
        <p>It is also important that you document this process, otherwise if it isn’t written down it is seen the FCA as not happening, and so evidence will be required.</p>
        <p>You should inform our firm of all sales staff visiting consumers in their home so that we always have up to date information and ensure that they carry out the relevant training courses to ensure awareness and competence. You may also decide to carry out a Disclosure and Barring Service (DBS) check on staff to prevent unsuitable people from working with vulnerable groups. This is not a requirement, just a recommendation.</p>'
      ],[
        'id' => 10,
        'content' => '<h2>Getting your adverts and promotions approved</h2>
        <p>If you are planning on undertaking any advertising or promotional activity relating to the finance then you must inform us in advance and obtain written approval to ensure that you fully comply with the Financial Promotions Rules and Regulations around the advertising of loans and credit. This includes your website, social media and any internal as well as external materials.</p>
        <p>We are here to help and assist you to ensure you remain compliant throughout and avoid any fines and prosecutions and remember:</p>
        <ul>
        <li>All adverts must be clear, fair and not misleading and be in plain and easy to understand language;</li>
        <li>As an advertiser you must be able to substantiate any claims you make;</li>
        <li>Advertising and marketing communications must be legal, decent, honest, truthful, responsible, and must not mislead or offend.</li>
        </ul>
        <h2>Data Protection and the General Data Protection Regulation</h2>
        <p>The General Data Protection Regulation (GDPR) replaced the Data Protection Act 1998 on the 25th May 2018 and defines UK law on the processing of personal data. Personal data is any data you collect that can identify a living individual.</p>
        <p>There is greater focus now on transparency, control, accountability and governance by firms when handling customers data and also greater powers by the regulator. The way organisations handle customer data is becoming increasingly more significant particularly as technology advances. A major landmark that highlights this is Facebook after it admitted that a company linked to President Donald Trump’s campaign had access and improperly stored a huge trove of its user data.</p>
        <p>Was Facebook transparent enough with its users about how their information would be used? Should it have done more to keep tabs on how third parties were using data?</p>
        <p>Your organisation may not be as large as Facebook, but the principles still remain the same.</p>
        <p>If you help a customer apply for a loan you will be collecting and storing their personal data on the lender’s behalf as some of this data is used to make a decision about their creditworthiness and to administer their loan.</p>
        <p>You have a legal obligation to protect your customer’s personal information and you should register with ICO which stands for the Information Commissioners Office and deals with issues about data protection.</p>
        <p>Before commencing the sale of finance please ensure you are covered and protected and understand the GDPR principles and you should consider seeking your own legal advice and or research the ICO guidance on GDPR.</p>'
      ],[
        'id' => 11,
        'content' => '<h2>Anti-Money Laundering or AML</h2>
        <p>Money laundering means exchanging money or assets that were obtained criminally for money or other assets that are “clean”. The clean money or assets don’t have an obvious link with any criminal activity. Money laundering also includes money that’s used to fund terrorism, however it’s obtained.</p>
        <p>The Proceeds of Crime Act contains the principal money laundering legislation in the UK and deals with a wide range of matters relevant to UK law on proceeds of crime issues.</p>
        <p>You must be aware of AML and put in place certain control measures in order to prevent you or your business being used for money laundering which includes nominating a person to inform us if you know or suspect that another person is laundering money or financing terrorism. You don’t need any proof or evidence just a reasonable suspicion.</p>
        <h2>Complaints</h2>
        <p>A complaint is an indication of dissatisfaction and can be made by a customer in writing or verbally.</p>
        <p>There are strict regulatory rules and requirements around how complaints about financial products and services are handled and we publish our complaints handling procedure on our website and have to report to the FCA any complaints that we receive.</p>
        <p>If you receive a complaint regarding finance then you must pass it to us within the same business day that you receive it and complete any actions that we give you to solve a complaint in the timescale agreed at the time.</p>
        <p>We must make reasonable efforts to settle the complaint or dispute about the product or service.</p>
        <p>The Financial Ombudsman Service can become involved to settle a complaint if a customer is not satisfied with the response from a financial provider about their products and services, but we should be given the opportunity to settle it before they become involved.</p>'
      ]
    ];
  }

  public function FCAComplianceTrainingCourseOneData(){
    return [
      'title' => 'FCA Compliance Training Course One',
      'course' => 'FCAComplianceTrainingCourseOne',
      'pagesUrl' => '/Course/View/Pages/FCAComplianceTrainingCourseOne',
      'sendUrl' => '/Course/Send',
      'pages' => [
        $this->FCAComplianceTrainingCourseOnePages()
      ],
      'courseTopics' => 'Consumer Credit Act & Consumer Credit Directive|Treating Customers Fairly|Vulnerable Customers|Visiting Consumers in their Home|Financial Promotions|Data Protection|Anti-Money Laundering|Complaints Handling',
    ];
  }

  public function FCAComplianceTrainingCourseOne(){
    return view('course.course')->with($this->FCAComplianceTrainingCourseOneData());
  }
// End Course





// Start Course
  public function FCAComplianceTrainingCourseTwoPages(){
    return [
      [
        'id' => 1,
        'content' => '<h2>Introduction</h2>
        <p>Welcome and thank you for taking part in this e-learning training course.</p>
        <p>We are very pleased to be working with you to provide loans to customers and by having access to a finance facility you should improve your level of sales, service and credibility.</p>
        <p>Having access to a finance facility is a great way to increase average order values, reduce cancellations and generate more money by providing your customers with affordability, convenience, payment flexibility and peace of mind.</p>
        <p>Within these pages we will familiarise you with certain areas of the finance industry and help you to understand your role and how important it is to treat customers fairly and ensure finance is promoted and sold correctly. Our aim in producing this training course is to break down key areas into easy to understand sections and to support your practices when working with us to ensure at all times you recognise and meet the FCA Requirements.</p>
        <p>It is important that you complete all the sections to demonstrate that you have read and fully understood everything and if you have any questions or queries then please do not hesitate to ask.</p>
        <p>The FCA is the Financial Conduct Authority and is the financial regulatory body in the United Kingdom that regulates financial firms providing services to consumers and maintains the integrity of the UK’s financial markets. It handles regulated credit activities and like most financial products and services, there are very strict rules when it comes to advertising, promoting and selling loans and credits. These come from the Consumer Credit Act and the FCA Handbook.</p>
        <p>The role of the Financial Conduct Authority is to:</p>
        <ul>
        <li style="color: red;">Issue “permissions” to sell, broker or lend finance</li>
        <li style="color: red;">Regulate and monitor the practices of companies in order to ensure standards are met</li>
        <li style="color: red;">Monitor complaints through the Financial Ombudsman Service</li>
        <li style="color: red;">Protect customers against scams and unfair contracts</li>
        <li style="color: red;">Ensure customers are treated fairly</li>
        <li style="color: red;">Protect vulnerable customers</li>
        </ul>
        <p>Becoming directly authorised and regulated by the Financial Conduct Authority is a long and complicated process and can take around 8 months to complete with many detailed questions asked during this time including checking the fitness and suitability of the directors and shareholders.</p>
        <p>Not everyone is able or capable of obtaining FCA authorisation and so it is important when undertaking any finance arrangement that you understand the governance of the finance industry, in particular taking the principles, procedures and relevant processes seriously.</p>'
      ],
      [
        'id' => 2,
        'content' => '<h2>What our partnership means:</h2>
        <p>Our partnership means that our firm is able to provide loans and credit agreements to customers through a lender or panel of credit lenders and act under our FCA authorisation to sell them. Our firm is described as a credit broker and acts as a “go between” in order to facilitate the loan between the lender and the customer.</p>
        <p>In our partnership our firm is classed as “the Principal firm” and your organisation is classed as “an IAR”, or Introducer Appointed Representative”.</p>
        <p>Our firm’s values are that we act fairly, ethically and openly at all times and make sure the loans are promoted, advertised and sold appropriately and we act within the law. For example, it is important that the customer understands who is providing the loan and your relationship and association with our firm.</p>
        <p>Every customer should fully understand their obligations and legal rights, and not be misled in any way or felt under pressure to take out a loan or make a decision to borrow quickly.</p>
        <p style="color: red;">It is important that you understand and accept that you provide a “pure client introduction” and do not maintain a client relationship in relation to regulated financial activities. You are only required to provide a simple introduction and so you are likely to pass on contact details to our firm.</p>
        <p>Our firm takes on the regulatory responsibility for the IAR and must ensure it meets FCA requirements.</p>
        <p>Your firm is limited to effecting introductions and distributing “non-real time” financial promotions which relates to the financial products or services that we offer through our lenders.</p>
        <p>You must use customer data you collect and pass on appropriately.</p>'
      ],
      [
        'id' => 3,
        'content' => '<h2>Consumer Credit Act & Consumer Credit Directive</h2>
        <p>These laws and regulations cover how companies selling customer credit must act, the information they provide, how they are categorised, and the protection the law gives to consumers.</p>
        <p>Customers must be provided with a verbal and written “adequate explanation” of the loan, which covers the general purpose of the loan, repayments, the customers legal right to withdraw from the agreement after they have signed it, and the consequences of not keeping up repayments.</p>
        <p>The “Your Loan Explained” section of a credit agreement document helps to provide an adequate explanation to the customer which is supplied by the lender and not something you would be involved with.</p>
        <p>Customers have a legal right to withdraw, without giving reasons, from their loan agreement. They have a mandatory 14 days cooling off period to do this, starting from the day after the loan agreement is signed by the lender or when it has been confirmed in writing, if this is later.</p>
        <p>Unless otherwise set out in the contract, a customer withdrawing from the loan agreement does not cancel the purchase they have made from you. The customer will need to make separate arrangements, if any, to make payment or return the goods and services provided.</p>'
      ],
      [
        'id' => 4,
        'content' => '<h2>Customer’s right to make a claim for faulty or unsatisfactory goods and services</h2>
        <p>This is called “a claim under section 75 of the Consumer Credit Act”.</p>
        <p>If a customer believes goods and services bought using a loan are faulty or unsatisfactory (sometimes referred to as “not of merchantable quality”), they can make a claim against the company that provided the loan.</p>
        <h2>Customer’s right to make a claim if finance has been mis-sold.</h2>
        <p>This is called “a claim under section 56 of the Consumer Credit Act”.</p>
        <p>If a customer believes they have been disadvantaged financially because they were not given the full facts, or were given misleading facts about the loan they took out, they can make a claim against the company that provided the loan.</p>'
      ],
      [
        'id' => 5,
        'content' => '<h2>Treating Customers Fairly otherwise known as TCF</h2>
        <p>We are committed to meeting customer expectations of performance, quality, price and delivery in all that we do. Treating Customers Fairly must now remain central to your conduct, and even though you are simply introducing the customer to ourselves you must put the well-being of your customers at the heart of how you deal with them.</p>
        <p>TCF has six key customer outcomes that you need to demonstrate that you have delivered and we require you to achieve:</p>
        <p style="color: red;"><strong>Outcome 1</strong> – CULTURE<br />
        Consumers must be confident that they are dealing with a firm or individual where the fair treatment of customers is central to the corporate culture.</p>
        <p style="color: red;"><strong>Outcome 2</strong> – MARKETING<br />
        Products and services marketed and sold must be designed to meet the needs of identified consumer groups and targeted accordingly.</p>
        <p style="color: red;"><strong>Outcome 3</strong> – INFORMATION<br />
        Consumers must be provided with clear information and kept appropriately informed, before, during and after the point of sale.</p>
        <p style="color: red;"><strong>Outcome 4</strong> – ADVICE<br />
        Where consumers receive advice, the advice must be suitable and takes account of their circumstances. (In this instance you will not be providing financial advice).</p>
        <p style="color: red;"><strong>Outcome 5</strong> – PRODUCT<br />
        Consumers must be provided with products that perform as they have been led to expect, and the associated service is of an acceptable standard.</p>
        <p style="color: red;"><strong>Outcome 6</strong> – BARRIERS<br />
        Consumers must not face unreasonable post-sale barriers to change products, switch providers, submit claims or make a complaint.</p>
        <p>These six outcomes serve as the basis for treating customers fairly.</p>'
      ],
      [
        'id' => 6,
        'content' => '<h2>Vulnerable Customers</h2>
        <p>Although you will not be selling finance it is likely when visiting customers that along the way you meet a vulnerable customer. We need to make sure that you can recognise the signs and signals at the beginning and then have a process to deal with the circumstances of the individuals.</p>
        <p>Firstly, let’s identify what we mean by a vulnerable customer?</p>
        <p>These may be people affected by Dementia. In the UK for example 800,000 people live with dementia and this is expected to double in the next 40 years.</p>
        <p>It could perhaps be somebody who has suffered a bereavement who isn’t really in the right state of mind, particularly when it comes down to making decisions.</p>
        <p>It could even be people perhaps preparing parents to go into a care home and having to pay the fees associated with that.</p>
        <p>It comes down to us leading the way in which vulnerable people are dealt with.</p>'
      ],
      [
        'id' => 7,
        'content' => '<h2>Other people may be affected by the following:</h2>
        <p style="color: red;">Mental Health Issues</p>
        <p style="color: red;">Serious or Chronic Illness</p>
        <p style="color: red;">Experiencing Serious Stressful Events</p>
        <p style="color: red;">Non English Speakers</p>
        <p style="color: red;">Deaf/Blind</p>
        <p style="color: red;">Recently Bereaved</p>
        <p style="color: red;">Age awareness</p>
        <p style="color: red;">Bi-Polar</p>
        <p style="color: red;">Under the influence of drink or drugs</p>
        <p style="color: red;">Post-Traumatic Stress Disorder</p>
        <h2>Characteristics to look out for may include the following:</h2>
        <p style="color: red;">The customer may repeat themselves</p>
        <p style="color: red;">Say “YES” before you have explained everything</p>
        <p style="color: red;">Ask unrelated questions</p>
        <p style="color: red;">Seem distracted or wander off the topic</p>
        <p style="color: red;">They tell you they have a history of mental and health issues</p>
        <p style="color: red;">May seem agitated or confused about you being there</p>
        <p style="color: red;">Appear not to understand everything even when you have explained something a couple of times</p>
        <h2>What to do under any of these circumstances?</h2>
        <p>There are actions that you should consider, and although not an exhaustive list, sometimes common sense needs to be applied. For example:</p>
        <p style="color: red;">Ask the customer to invite a friend or family member to be there</p>
        <p style="color: red;">Leave the appointment</p>
        <p style="color: red;">Re-appoint when they have a friend or family member to sit with them</p>
        <p style="color: red;">Document the response of the customer and why you consider they may be vulnerable</p>
        <p style="color: red;">Ask the customer to repeat back to you their understanding of the sale and product</p>
        <p style="color: red;">Don’t rush, speak clearly always remain professional</p>
        <p style="color: red;">Please advise your line manager</p>
        <p>Remember it could be your relative or a close friend and so treat the customer with respect and don’t always just go for the sale.</p>
        <p>By the way, you should not assume that a person who is vulnerable or who has a mental capacity issue cannot make an informed decision as this could be seen as discrimination.</p>'
      ],
      [
        'id' => 8,
        'content' => '<h2>Your Role and Responsibilities:</h2>
        <ul>
        <li style="color: red;">Provide clear, concise and truthful information</li>
        <li style="color: red;">Identify the person and the firm at the outset and make clear the purpose of the communication</li>
        <li style="color: red;">Clearly state the service you offer and the relationship with our firm and the lender – you are an introducer and just simply introducing our firm to the customer as a finance provider if the customer expresses an interest in a finance option</li>
        <li style="color: red;">Take responsibility for your own knowledge</li>
        <li style="color: red;">Follow all relevant processes and policies</li>
        <li style="color: red;">Be aware that you are responsible for what you say and do</li>
        <li style="color: red;">Any discussion or explanation of finance MUST NOT take place – that is our responsibility</li>
        <li style="color: red;">Take appropriate action if you consider the customer to be “vulnerable”</li>
        <li style="color: red;"><u>Before leaving your customer ensure they fully understand everything</u></li>
        </ul>
        <p>As part of our obligations monitoring calls will be made to your customers in order to check that the sales process is being carried out correctly and that you are not providing financial advice.</p>
        <h2>Visiting Consumers in their Home</h2>
        <p>If your activities involve visiting a consumer in their home, then the FCA expects all of us to have tight controls and systems in place.</p>
        <p>For example:</p>
        <ul>
        <li style="color: red;">You must obtain consent for the visit from the consumer;</li>
        <li style="color: red;">For the consent to be given, the information to the customer must have been given in a clear, concise and fair way by the sales person;</li>
        <li style="color: red;">You need to identify the person and the firm at the outset and make clear the purpose of the communication;</li>
        <li style="color: red;">Ensure an appropriate time of day for the visit;</li>
        <li style="color: red;">State the services the firm is authorised to offer;</li>
        <li style="color: red;">State any relationship which is relevant to the services offered. In other words, make it clear you are acting as an introducer only for finance and that’s where your association with finance ends.</li>
        </ul>
        <p>You should inform our firm of all sales staff visiting consumers in their home so that we always have up to date information and ensure that they carry out the relevant training courses to ensure awareness and competence. You may also decide to carry out a Disclosure and Barring Service (DBS) check on staff to prevent unsuitable people from working with vulnerable groups. This is not a requirement, just a recommendation.</p>'
      ],
      [
        'id' => 9,
        'content' => '<h2>Getting your adverts and promotions approved</h2>
        <p>If you are planning on undertaking any advertising or promotional activity that mentions finance in any way then you must inform us in advance and obtain written approval to ensure that you fully comply with the Financial Promotions Rules and Regulations around the advertising of loans and credit. This includes your website and any internal as well as external materials.</p>
        <p>We are here to help and assist you to ensure you remain compliant throughout and avoid any fines and prosecutions and remember:</p>
        <ul>
        <li style="color: red;">All adverts must be clear, fair and not misleading and be in plain and easy to understand language;</li>
        <li style="color: red;">As an advertiser, you must be able to substantiate any claims you make;</li>
        <li style="color: red;">Advertising and marketing communications must be legal, decent, honest, truthful, responsible, and must not mislead or offend.</li>
        </ul>'
      ],
      [
        'id' => 10,
        'content' => '<h2>Data Protection and the General Data Protection Regulation</h2>
        <p>The General Data Protection Regulation (GDPR) replaced the Data Protection Act 1998 on the 25th May 2018 and defines UK law on the processing of personal data. Personal data is any data you collect that can identify a living individual.</p>
        <p>There is greater focus now on transparency, control, accountability and governance by firms when handling customers data and also greater powers by the regulator. The way organisations handle customer data is becoming increasingly more significant particularly as technology advances. A major landmark that highlights this is Facebook after it admitted that a company linked to President Donald Trump’s campaign had access and improperly stored a huge trove of its user data.</p>
        <p>Was Facebook transparent enough with its users about how their information would be used? Should it have done more to keep tabs on how third parties were using data?</p>
        <p>Your organisation may not be as large as Facebook, but the principles still remain the same.</p>
        <p>If you pass on customer information then you will be collecting and storing their personal data on the lender’s behalf as some of this data is used to make a decision about their creditworthiness and to administer their loan.</p>
        <p>You have a legal obligation to protect your customer’s personal information and you should register with ICO which stands for the Information Commissioners Office and deals with issues about data protection.</p>
        <p>Before commencing the promotion of finance please ensure you are covered and protected and understand the GDPR principles and you should consider seeking your own legal advice and or research the ICO guidance on GDPR.</p>'
      ],
      [
        'id' => 11,
        'content' => '<h2>Anti-Money Laundering or AML</h2>
        <p>Money laundering means exchanging money or assets that were obtained criminally for money or other assets that are “clean”. The clean money or assets don’t have an obvious link with any criminal activity. Money laundering also includes money that’s used to fund terrorism, however it’s obtained.</p>
        <p>The Proceeds of Crime Act contains the principal money laundering legislation in the UK and deals with a wide range of matters relevant to UK law on proceeds of crime issues.</p>
        <p>You must be aware of AML and put in place certain control measures in order to prevent you or your business being used for money laundering which includes nominating a person to inform us if you know or suspect that another person is laundering money or financing terrorism. You don’t need any proof or evidence just a reasonable suspicion.</p>'
      ],
      [
        'id' => 12,
        'content' => '<h2>Complaints</h2>
        <p>A complaint is an indication of dissatisfaction and can be made by a customer in writing or verbally.</p>
        <p>There are strict regulatory rules and requirements around how complaints about financial products and services are handled and we publish our complaints handling procedure on our website and have to report to the FCA any complaints that we receive.</p>
        <p>If you receive a complaint, which also relates to finance, then you must pass it to us within the same business day that you receive it and complete any actions that we give you to solve a complaint in the timescale agreed at the time.</p>
        <p>We must make reasonable efforts to settle the complaint or dispute about the product or service.</p>
        <p>The Financial Ombudsman Service can become involved to settle a complaint if a customer is not satisfied with the response from a financial provider about their products and services, but we should be given the opportunity to settle it before they become involved.</p>'
      ]
    ];
  }

  public function FCAComplianceTrainingCourseTwoData(){
    return [
      'title' => 'FCA Compliance Training Course Two',
      'course' => 'FCAComplianceTrainingCourseTwo',
      'pagesUrl' => '/Course/View/Pages/FCAComplianceTrainingCourseTwo',
      'sendUrl' => '/Course/Send',
      'pages' => [
        $this->FCAComplianceTrainingCourseTwoPages()
      ],
      'courseTopics' => 'Role of the Financial Conduct Authority|Consumer Credit Act & Consumer Credit Directive|Role and Responsibilities of an Introducer|Treating Customers Fairly|Vulnerable Customers|Visiting Consumers in their Home|Data Protection|Anti-Money Laundering|Complaints Handling',
    ];
  }

  public function FCAComplianceTrainingCourseTwo(){
    return view('course.course')->with($this->FCAComplianceTrainingCourseTwoData());
  }
// End Course




// Start Course
  public function ComplaintsHandlingPages(){
    return [
      [
        'id' => 1,
        'content' => '<h2>Introduction</h2>
        <p>Welcome and thank you for taking part in this e-learning training presentation which will help to familiarise you with certain areas of complaints handling and understand how you can receive, refer, investigate and respond to complaints effectively to ensure at all times you recognise and meet the Financial Conduct Authority requirements.</p>'
      ],
      [
        'id' => 2,
        'content' => '<h2>What is a complaint?</h2>
        <p>This is defined in the FCA Handbook as any oral or written expression of dissatisfaction, whether justified or not, from, or on behalf of, a person about the provision of, or failure to provide, a financial service or a redress determination, which:</p>
        <p style="padding-left: 20px;">(a) Alleges that the complainant has suffered (or may suffer) financial loss, material distress or material inconvenience; and</p>
        <p style="padding-left: 20px;">(b) Relates to an activity of that respondent, or of any other respondent with whom that respondent has some connection marketing or providing financial services or products, which comes under the jurisdiction of the Financial Ombudsman Service.</p>
        <h2>Why would a customer complain?</h2>
        <p>If a customer is unhappy with a financial product, service or advice given then they can complain.</p>
        <p>A complaint is an indication of dissatisfaction and can be made by a customer in writing or verbally. Aggressive and complaining customers are inevitable for all businesses at some point, the key is how to resolve the complaint that truly separates your business from the competition.</p>
        <p>Professional management of complaints will result in higher customer retention rates and ensure your relationship with your customers remain positive. Data suggests that nine out of ten times, a customer will continue doing business with your firm after a slip up – but only if you wholly fix the situation the first time.</p>'
      ],
      [
        'id' => 3,
        'content' => '<h2>Are there any guidelines?</h2>
        <p>There are strict regulatory rules and requirements around how complaints about financial products, services and advice are handled and the FCA says:</p>
        <ul>
        <li>Effective and transparent procedures for the reasonable and prompt handling of complaints must be established, implemented and maintained.</li>
        <li>   These procedures should allow complaints to be made by any reasonable means and recognise complaints are requiring resolution.</li>
        <li>These procedures should take into account the nature, scale and complexity of the firm’s business, ensure that lessons learned are effectively applied in future complaint handling, for example by;
        <p><em>Relaying to the individuals in the firm who handled the complaint and using it in their training and development;</em></p>
        <p><em>Analysing any patterns concerning complaints received by the firm and using this in training and development of the individuals dealing with complaints in the firm.</em></p></li>
        <li>A firm must put in place appropriate management controls and take reasonable steps to ensure that in handling complaints it identifies and remedies any recurring or systemic problems, for example, by:
        <p><em>Analysing the causes of individual complaints so as to identify root causes common to types of complaints;</em></p>
        <p><em>Considering whether such root causes may also affect other processes or products, including those not directly complained of; and</em></p>
        <p><em>Correcting, where reasonable to do so, such root causes.</em></p></li>
        </ul>
        <p>The Financial Conduct Authority does not investigate individual complaints, but the financial firms they regulate must have procedures in place for resolving disputes with their customers and respond to them within certain deadlines.</p>
        <p>This means that every firm must have a straightforward, transparent and fair complaints process for the reasonable and prompt handling of complaints and treat customers fairly. Good complaints handling is good for business.</p>'
      ],
      [
        'id' => 4,
        'content' => '<h2>Where are the complaints handling rules published?</h2>
        <p>The complaints handling rules are published as part of the Financial Conduct Authority’s Handbook – in the section called Dispute Resolution: complaints.</p>
        <p>These rules – sometimes referred to as the “DISP” rules – set out the procedures and requirements that businesses must follow when handling complaints from consumers.</p>
        <h2>What does good complaint handling mean?</h2>
        <ol>
        <li>Getting it right</li>
        <li>Being customer focused</li>
        <li>Being open and accountable</li>
        <li>Acting fairly and proportionately</li>
        <li>Putting things right</li>
        <li>Seeking continuous improvement</li>
        </ol>
        <p>It goes without saying that you should try to manage the complaint with a customer, engage with the customer and listen to their issues whilst managing your emotions, identifying the customer needs and effectively responding to them.</p>
        <p>A firm must also take account of the needs of vulnerable customers, those with additional needs or special access requirements when handling a complaint.</p>'
      ],
      [
        'id' => 5,
        'content' => '<h2>Dealing with a Complaint</h2>
        <ul>
        <li>Listen;</li>
        <li>Recognise triggers;</li>
        <li>Put yourself in the customer’s shoes;</li>
        <li>Don’t be defensive;</li>
        <li>Be composed at all times;</li>
        <li>Don’t take criticisms personally;</li>
        <li>Offer an apology even if the disservice is not your fault;</li>
        <li>Show empathy by using such phrases as: “I can understand how you feel”, “I appreciate what you’re saying”</li>
        <li>Review account history;</li>
        <li>What would make the customer happy? What do we need to do to resolve matters?</li>
        <li>Don’t be constrained by process when trying to resolve a complaint;</li>
        <li>Put the customer before the process;</li>
        <li>If you can’t make the decision – seek advice from your Manager;</li>
        <li>Check if the customer is happy with your proposed action e.g.</li>
        <li><strong>“Are you happy I have resolved this for you?”</strong></li>
        <li><strong>“Does this explain everything?”</strong></li>
        <li><strong>“Do you have any further questions regarding this matter?”</strong></li>
        <li><strong>“Have I explained everything for you?”</strong></li>
        </ul>'
      ],
      [
        'id' => 6,
        'content' => '<h2>How does someone make a complaint?</h2>
        <p>There are 4 simple steps a customer can follow to make a complaint:</p>
        <h2>Step 1: Contact the firm directly</h2>
        <p>This is usually better to do in writing and as soon as possible.</p>
        <p>A firm regulated by the FCA must respond to the complaint in writing just to let them know they have received the complaint and ensure a final response is provided in writing within 8 weeks telling the customer whether the complaint has been successful or why they need more time to look into it.</p>
        <h2>Step 2: Make the complaint yourself</h2>
        <p>Making a complaint to a firm or the Financial Ombudsman Service is a free, simple process as opposed to using a claim handler where there is likely to be cost.</p>
        <h2>Step 3: Contact the Financial Ombudsman Service</h2>
        <p>If a customer is not happy with the firm’s response, they reject the complaint or a customer does not hear from the firm within 8 weeks, the Financial Ombudsman Service (FOS) may be able to help.</p>
        <p>It is a free, independent service for settling disputes between financial services firms and their customers. It can deal with complaints about a wide range of financial matters and will ask the financial firm to explain what it thinks happened and then decide whether to uphold the complaint.</p>
        <p>It is important that a customer contacts the FOS within 6 months of receiving a final response from a firm, or it may not be able to deal with the complaint.</p>
        <p>Providing Alternative Dispute Resolution (ADR) – or arbitration – became UK law on the 1st October 2015 for all businesses that sell to consumers. This means that when a matter remains in dispute, a firm is legally compelled to give the consumer the contact details to the FOS where the dispute relates to finance.</p>
        <h2>Step 4: Take the matter to court</h2>
        <p>If a customer does not want to accept a decision by the FOS, and the customer has not used an independent complaints scheme, then as a last resort they may be able to take the case to court.</p>'
      ],
      [
        'id' => 7,
        'content' => '<h2>What is a Complaints Handling Procedure?</h2>
        <p>A firm should be given the opportunity to resolve a complaint before it escalates.</p>
        <p>A Complaints Handling Procedure demonstrates a firm’s commitment to treating customers fairly and sets out the step-by-step procedures that a firm must follow when handling complaints from customers and includes requirements on acknowledging and responding to complaints, the time limits for dealing with complaints and record-keeping and reporting.</p>
        <p>It is fairly detailed, and there are several steps depending on how quickly the complaint is resolved which is why it is important to outline these areas to all parties concerned, including staff and customers.</p>
        <p>A firm may produce an internal complaints procedure, outlining how their staff should respond; and an external complaints procedure, that would usually feature on a website, outlining the process a customer would expect to receive after lodging a complaint.</p>
        <p>A larger firm would likely have more detailed procedures than a smaller firm and in general the complaints process should:</p>
        <ul>
        <li>Outline the main person responsible to deal with complaints.</li>
        <li>Explain clearly where to complain.</li>
        <li>Include any requirements set out by the FCA for dealing with complaints.</li>
        <li>Detail time limits for dealing with complaints, including a prompt written acknowledgement providing early reassurance that it has received the complaint and is dealing with it: and</li>
        <li>Ensure the complainant is kept informed thereafter of the progress of the measures being taken for the complaint’s resolution.</li>
        <li>Capture details and all the evidence available and the particular circumstances of the complaint.</li>
        <li>Capture details about complaints which say or suggest the mental capacity of the customer was in question.</li>
        <li>Make a summary of the complaints process available – a “how to complain” leaflet works well.</li>
        <li>Aim to resolve complaints at the earliest possible opportunity.</li>
        <li>Make sure customers are aware that they can refer unresolved disputes to the Financial Ombudsman Service.</li>
        <li>Include logging and tracking of all complaints, so that any trends can be identified.</li>
        </ul>
        <h2>What are the time periods for handling a complaint?</h2>
        <p>Complaints that can be settled satisfactorily within three business days can be treated differently. The reasoning being that if a firm is able to resolve a complaint within this time period then this should ensure fewer consumers have to take their complaints further.</p>
        <p>If a complaint is resolved therefore during this three-day period, then the firm are required to send their customers a simple template message called a “Summary Resolution Communication (SRC)” which will also inform the complainant of their right to take their complaint to the Financial Ombudsman Service.</p>
        <p>Complaints not settled within three business days are expected to be settled within 8 weeks of the receipt of the complaint.</p>
        <p>If after 8 weeks the firm is still not in a position to make a response, then they must write to the customer giving a reason for the delay and an indication when they expect to provide a full and final response. At this point the details of the FOS should also be enclosed.</p>
        <p>Once an investigation is complete, a letter must be sent to the complainant which is either a “Final Response” or an “Offer Letter”.</p>
        <p>Firms are required to report complaints to the FCA.</p>'
      ],
      [
        'id' => 8,
        'content' => '<h2>Complaints Log</h2>
        <p>This is an internal record of any complaints received by a firm. A firm is required to periodically report details of complaints to the FCA and the log will enable them to collate this information. The log should be always up to date and any complaint dealt with in accordance with the complaints handling procedure.</p>
        <p>You must also ensure the customer is complaining about your firm. The customer may be expressing their dissatisfaction regarding another company and these would not be dealt with in the same way. These complaints still need to be logged but will be noted as a “third party” complaint, you will advise the customer to direct their complaint to the company they are referring to.</p>
        <h2>Complaints Management Form</h2>
        <p>This is an internal Complaints Form capturing the customer details, details of the complaint, investigation details, recommended actions, recommended solutions and communications history.</p>
        <p>Typically, this would also include template Acknowledgement Letters, Ongoing Communication Letters, Final Response Letters, including details of the FOS where necessary.</p>
        <p>This enables any complaint to be followed in a uniformed and standardised manner with processes and easy step by step instructions that can be utilised by any member of staff.</p>
        <h2>Management Information</h2>
        <p>A firm must also put in place appropriate management controls and take reasonable steps to ensure that in handling complaints it identifies and remedies any recurring problems by analysing the causes of individual complaints and correcting them.</p>
        <h2>When is a complaint resolved?</h2>
        <p>A complaint is resolved where the complainant has indicated acceptance of a response from the respondent, with neither the response nor acceptance having to be in writing.</p>
        <p>Where the respondent considers a complaint to be resolved under this section, the respondent must promptly send the complainant a written “summary resolution communication” containing the details as outlined in the FCA Handbook.</p>'
      ]
    ];
  }

  public function ComplaintsHandlingData(){
    return [
      'title' => 'Complaints Handling Training Course',
      'course' => 'ComplaintsHandling',
      'pagesUrl' => '/Course/View/Pages/ComplaintsHandling',
      'sendUrl' => '/Course/Send',
      'pages' => [
        $this->ComplaintsHandlingPages()
      ],
      'courseTopics' => 'What is a Complaint|Dealing with Complaints|Time periods for Complaints settlement|Complaints Handling Procedure|Complaints Log|Complaints Management Form|Financial Ombudsman Service (FOS)|Summary Resolution Communication',
    ];
  }

  public function ComplaintsHandling(){
    return view('course.course')->with($this->ComplaintsHandlingData());
  }
// End Course

}
