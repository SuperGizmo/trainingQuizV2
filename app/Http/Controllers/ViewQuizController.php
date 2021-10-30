<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewQuizController extends Controller
{
  
  // Start Quiz 
  public function Quiz(){
    return view('quiz.quiz')->with($this->Data());
  }
  
  public function Questions(){
    return [
      [
        'id' => 1,
        'question' => '',
        'answers' => [
          ['answer' => '','number' => 1],
          ['answer' => '','number' => 2],
          ['answer' => '','number' => 3]
        ],
        'answer' => 2
      ],
    ];
  }
  
  public function Data(){
    return [
      'title' => '',
      'quiz' => '',
      'questionsUrl' => '/Quiz/View/Questions/',
      'sendUrl' => '/Quiz/Send'
    ];
  }

  // Start Quiz
  public function WorkingInConfinedTrainingCoursesQuiz(){
    return view('quiz.quiz')->with($this->WorkingInConfinedTrainingCoursesQuizData());
  }

  public function WorkingInConfinedTrainingCoursesQuizQuestions(){
    return [
      [
        'id' => 1,
        'question' => 'If protective equipment needs to be worn when working in a confined space, which regulations apply?',
        'answers' => [
          ['answer' => 'Management of Health and Safety at Work Regulations 1999','number' => 1],
          ['answer' => 'Personal Protective Equipment at Work Regulations 1992','number' => 2],
          ['answer' => 'Provision and Use of Work Equipment Regulations 1998','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 2,
        'question' => 'When should emergency procedures be put in place?',
        'answers' => [
          ['answer' => 'At the start of each calendar year','number' => 1],
          ['answer' => 'When an emergency rescue is required','number' => 2],
          ['answer' => 'Before any persons enters a confined space','number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 3,
        'question' => 'What does a Safe System of Work do?',
        'answers' => [
          ['answer' => 'It permits workers to enter any confined space','number' => 1],
          ['answer' => 'It replaces the need for a risk assessment','number' => 2],
          ['answer' => 'It details the procedures needed to carry out work','number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 4,
        'question' => 'Why should you appoint a supervisor before work in the confined space begins?',
        'answers' => [
          ['answer' => 'So that the responsibilities lie with one person','number' => 1],
          ['answer' => 'To ensure the Safe System of Work is understood and is being followed correctly','number' => 2],
          ['answer' => 'To make sure PPE is handed out to each worker as they enter the space','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 5,
        'question' => 'Which one of the following is included in the definition of a confined space?',
        'answers' => [
          ['answer' => 'An area that is substantially enclosed','number' => 1],
          ['answer' => 'An area that is very small','number' => 2],
          ['answer' => 'An area that is entirely enclosed','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 6,
        'question' => 'Which of the following will NOT improve ventilation and the ability to breath safely in a confined space?',
        'answers' => [
          ['answer' => 'Issue breathing apparatus to workers','number' => 1],
          ['answer' => 'Use a mechanical ventilation aid','number' => 2],
          ['answer' => 'Sweeten the air with oxygen','number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 7,
        'question' => 'What is the purpose of a communications system?',
        'answers' => [
          ['answer' => 'To enable quick communication between the people inside and outside the confined space in case of emergency','number' => 1],
          ['answer' => 'To allow easy communication between everyone within the confined space','number' => 2],
          ['answer' => 'So that workers don’t need to leave the confined space and can easily ask for more supplies when needed','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 8,
        'question' => 'Which of the following does NOT need to be included within the emergency procedures?',
        'answers' => [
          ['answer' => 'How to raise the alarm','number' => 1],
          ['answer' => 'First aid arrangements','number' => 2],
          ['answer' => 'Site transport facilities','number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 9,
        'question' => 'What should the first control measure always be?',
        'answers' => [
          ['answer' => 'Issue personal protective equipment','number' => 1],
          ['answer' => 'Provide training for workers','number' => 2],
          ['answer' => 'Avoid work in the confined space altogether','number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 10,
        'question' => 'In which of these atmospheres is a fire or explosion likely?',
        'answers' => [
          ['answer' => 'Where there are sludgy deposits','number' => 1],
          ['answer' => 'Where cleaning chemicals are used','number' => 2],
          ['answer' => 'Where there is a lot of dust in the air','number' => 3]
        ],
        'answer' => 3
      ],
    ];
  }

  public function WorkingInConfinedTrainingCoursesQuizData(){
    return [
      'title' => 'Working in Confined Spaces Quiz',
      'quiz' => 'WorkingInConfinedTrainingCoursesQuiz',
      'questionsUrl' => '/Quiz/View/Questions/WorkingInConfinedTrainingCoursesQuiz',
      'sendUrl' => '/Quiz/Send'
    ];
  }
  
  // Start Quiz
  public function AsbestosAwarenessQuiz(){
    return view('quiz.quiz')->with($this->AsbestosAwarenessData());
  }
  
  public function AsbestosAwarenessQuestions(){
    return [
      [
        'id' => 1,
        'question' => 'What does ACMs stand for?',
        'answers' => [
          ['answer' => 'Asbestos Cement Membranes','number' => 1],
          ['answer' => 'Asbestos Containing Materials','number' => 2],
          ['answer' => 'Asbestos Coating Membranes','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 2,
        'question' => 'The symptoms of asbestos disease can occur when?',
        'answers' => [
          ['answer' => 'Immediately following initial exposure','number' => 1],
          ['answer' => 'Generally, 10 to 60 years after first exposure','number' => 2],
          ['answer' => 'Never','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 3,
        'question' => 'All forms of asbestos were finally banned in the United Kingdom in what year?',
        'answers' => [
          ['answer' => '1962','number' => 1],
          ['answer' => '1985','number' => 2],
          ['answer' => '1999','number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 4,
        'question' => 'What should you do if you arrive at a building to carry out maintenance work and you do not know if asbestos is present where you plan to work?',
        'answers' => [
          ['answer' => 'Go ahead and start work','number' => 1],
          ['answer' => 'Ask to see the asbestos register and check it out','number' => 2],
          ['answer' => 'Carry on with the work and tell the client when you have finished','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 5,
        'question' => 'What should you do if while working in a building you discover damaged material that you suspect may be asbestos?',
        'answers' => [
          ['answer' => 'Stop work, isolate the area and inform your manager/client immediately','number' => 1],
          ['answer' => 'Carry on and clean up afterwards','number' => 2],
          ['answer' => 'Stop work, clean up the damage and then carry on','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 6,
        'question' => 'Suspect building materials must be presumed to contain asbestos when?',
        'answers' => [
          ['answer' => 'Never, under any circumstances','number' => 1],
          ['answer' => 'Never, unless they have a similar colour to white, brown or blue asbestos','number' => 2],
          ['answer' => 'Always, unless there is a sample report from an accredited laboratory to prove otherwise','number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 7,
        'question' => 'Which of the following properties is TRUE for asbestos?',
        'answers' => [
          ['answer' => 'It is man made','number' => 1],
          ['answer' => 'It is not fire resistant','number' => 2],
          ['answer' => 'It is a natural insulator','number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 8,
        'question' => 'Decorative textured coatings (such as Artex) may contain which types of Asbestos?',
        'answers' => [
          ['answer' => 'Chrysotile','number' => 1],
          ['answer' => 'Amosite and Crocidolite','number' => 2],
          ['answer' => 'Amosite and Chrysotile','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 9,
        'question' => 'What does asbestos awareness training teach you?',
        'answers' => [
          ['answer' => 'To use and fit a face-mask','number' => 1],
          ['answer' => 'To deal with asbestos waste','number' => 2],
          ['answer' => 'Where you might find asbestos and how to reduce your risk of exposure','number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 10,
        'question' => 'Mesothelioma is an asbestos related disease:',
        'answers' => [
          ['answer' => 'Which is no longer common due to the banning of asbestos','number' => 1],
          ['answer' => 'Which can be caused through exposure to low levels of airborne asbestos','number' => 2],
          ['answer' => 'Which is not fatal.','number' => 3]
        ],
        'answer' => 2
      ],
    ];
  }
  
  public function AsbestosAwarenessData(){
    return [
      'title' => 'Asbestos Awareness Quiz',
      'quiz' => 'AsbestosAwareness',
      'questionsUrl' => '/Quiz/View/Questions/AsbestosAwareness',
      'sendUrl' => '/Quiz/Send'
    ];
  }
  
  // Start Quiz 
  public function CreditCardProcessingQuiz(){
    return view('quiz.quiz')->with($this->CreditCardProcessingQuizData());
  }
  
  public function CreditCardProcessingQuizQuestions(){
    return [
      [
        'id' => 1,
        'question' => 'What do the initials CNP stand for?',
        'answers' => [
          ['answer' => 'Cardholder not paying','number' => 1],
          ['answer' => 'Cardholder not present','number' => 2],
          ['answer' => 'Credit not provided','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 2,
        'question' => 'Which one of these does not correctly describe a chargeback?',
        'answers' => [
          ['answer' => 'It is a refund where the cardholder is unhappy with the service or product','number' => 1],
          ['answer' => 'It is where the cardholder approves a transaction','number' => 2],
          ['answer' => 'It is a refund where the cardholder disputes a transaction took place','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 3,
        'question' => 'Where is the safest place for a business to store credit card details?',
        'answers' => [
          ['answer' => 'In a file on your desktop which is password protected','number' => 1],
          ['answer' => 'In a cloud-based data storage system that is encrypted and trusted','number' => 2],
          ['answer' => 'You should not store credit card details.','number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 4,
        'question' => 'Which of these policies is not linked to Credit Card Processing?',
        'answers' => [
          ['answer' => 'General Data Protection Regulation Policies','number' => 1],
          ['answer' => 'Health and Safety Policies','number' => 2],
          ['answer' => 'Financial Crime Policies','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 5,
        'question' => 'Instances of potential fraud should be reported in confidence to?',
        'answers' => [
          ['answer' => 'Your line manager','number' => 1],
          ['answer' => 'Information Commissioners Office (ICO)','number' => 2],
          ['answer' => 'The Health and Safety Executive (HSe)','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 6,
        'question' => 'Which section of the Consumer Credit Act gives protection to a customer using a credit card?',
        'answers' => [
          ['answer' => 'Section 56','number' => 1],
          ['answer' => 'Section 57','number' => 2],
          ['answer' => 'Section 75','number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 7,
        'question' => 'What does MOTO stand for?',
        'answers' => [
          ['answer' => 'Mail Order/Telephone Order transactions','number' => 1],
          ['answer' => 'Mail Order Trading Operations standards','number' => 2],
          ['answer' => 'Marketing Organisation and Telephone Order standards','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 8,
        'question' => 'What does CVV stand for?',
        'answers' => [
          ['answer' => 'Card Verification Value','number' => 1],
          ['answer' => 'Credit Verification Value','number' => 2],
          ['answer' => 'Crime Verification Value','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 9,
        'question' => 'Can you refund a credit card different to the one used for payment?',
        'answers' => [
          ['answer' => 'No','number' => 1],
          ['answer' => 'Yes','number' => 2]
        ],
        'answer' => 1
      ],
    ];
  }
  
  public function CreditCardProcessingQuizData(){
    return [
      'title' => 'Credit Card Processing Quiz',
      'quiz' => 'CreditCardProcessingQuiz',
      'questionsUrl' => '/Quiz/View/Questions/CreditCardProcessingQuizQuestions',
      'sendUrl' => '/Quiz/Send'
    ];
  }
  
  // Start Quiz 
  public function VCAssessmentQuiz(){
    return view('quiz.quiz')->with($this->VCAssessmentData());
  }
  public function VCAssessmentQuestions(){
    return [
      [
        'id' => 1,
        'question' => 'Which of the below could be a sign of a customer’s vulnerability?',
        'answers' => [
          ['answer' => 'Speaking quite fast', 'number' => 1],
          ['answer' => 'Asking you to repeat most things that you have said', 'number' => 2],
          ['answer' => 'Being very decisive', 'number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 2,
        'question' => 'Which Act is applicable to dealing with vulnerable customers?',
        'answers' => [
          ['answer' => 'The Mental Health Act', 'number' => 1],
          ['answer' => 'The Data Protection Act', 'number' => 2],
          ['answer' => 'The Health and Safety at Work Act', 'number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 3,
        'question' => 'Vulnerable Customers goes hand in hand with?',
        'answers' => [
          ['answer' => 'Information Security ', 'number' => 1],
          ['answer' => 'Selling products & services', 'number' => 2],
          ['answer' => 'Treating Customers Fairly', 'number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 4,
        'question' => 'Name a category that is NOT really related to vulnerable customers?',
        'answers' => [
          ['answer' => 'Elderly', 'number' => 1],
          ['answer' => 'Overweight', 'number' => 2],
          ['answer' => 'Low Income', 'number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 5,
        'question' => 'Choose one of the following that would NOT help a vulnerable customer?',
        'answers' => [
          ['answer' => 'Explain – avoid jargon and use layman’s terms when explaining complex or technical information', 'number' => 1],
          ['answer' => 'Reiterate – always put yourself in the customers’ shoes and show them that you have listened and understood what they have said', 'number' => 2],
          ['answer' => 'Rigid – always have one set approach with each and every customer', 'number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 6,
        'question' => 'A customer mentions to you that their Husband recently passed away. What do you do?',
        'answers' => [
          ['answer' => 'Offer your sympathy and carry on with the call as normal', 'number' => 1],
          ['answer' => 'Advise them that you are now unable to carry on with the call as they have identified themselves as being vulnerable', 'number' => 2],
          ['answer' => 'Offer your sympathy and proceed at a slower pace, ensuring the customer understands what you are discussing and that they are capable of making decisions at this time', 'number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 7,
        'question' => 'The customer you have been speaking to has agreed to the product/service that you are offering but has displayed signs of being hard of hearing through the conversation.<br /><br />What could you do to ensure that their vulnerability has been noted and addressed?',
        'answers' => [
          ['answer' => 'Send everything you have discussed out in writing to the customer and sign them up after they have had time to read through everything', 'number' => 1],
          ['answer' => 'Nothing, if they have agreed over the phone they must have heard what you were saying', 'number' => 2],
          ['answer' => 'Ask to speak to another member of the family and disclose everything you have discussed with the customer to see if the family member agrees also', 'number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 8,
        'question' => 'Which one of these is NOT a written indicator that a customer may be vulnerable?',
        'answers' => [
          ['answer' => 'Many spelling errors', 'number' => 1],
          ['answer' => 'Confusion in content', 'number' => 2],
          ['answer' => 'Poor handwriting', 'number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 9,
        'question' => 'Which one of these is NOT a verbal indicator that a customer may be vulnerable?',
        'answers' => [
          ['answer' => 'Confusion', 'number' => 1],
          ['answer' => 'Asking questions', 'number' => 2],
          ['answer' => 'Asking non-relevant questions', 'number' => 3]
        ],
        'answer' => 2

      ],
      [
        'id' => 10,
        'question' => 'If you identify someone as being vulnerable, you can deal with a third-party on their behalf without asking permission?',
        'answers' => [
          ['answer' => 'True', 'number' => 1],
          ['answer' => 'False', 'number' => 2],
          ['answer' => 'It depends', 'number' => 3]
        ],
        'answer' => 2
      ],
    ];
  }
  
  public function VCAssessmentData(){
    return [
      'title' => 'Vulnerable Customers Assessment Quiz',
      'quiz' => 'VCAssessment',
      'questionsUrl' => '/Quiz/View/Questions/VCAssessmentQuestions',
      'sendUrl' => '/Quiz/Send'
    ];
  }
  
  // Start Treating Customers Fairly Assessment Quiz 
  public function TreatingCustomersFairlyQuiz(){
    return view('quiz.quiz')->with($this->TreatingCustomersFairlyData());
  }
  
  public function TreatingCustomersFairlyQuestions(){
    return [
      [
        'id' => 1,
        'question' => 'Treating Customers Fairly (TCF) is about?',
        'answers' => [
          ['answer' => 'Creating satisfied customers', 'number' => 1],
          ['answer' =>'Providing clear and transparent services or products to customers', 'number' => 2],
          ['answer' =>'Treating every customer in the same way', 'number' => 3]
        ],
        'answer' => 2
      ],[   
        'id' => 2,
        'question' => 'How many desired outcomes are there for TCF?',
        'answers' => [
          ['answer' => '5', 'number' => 1],
          ['answer' =>'8', 'number' => 2],
          ['answer' =>'6', 'number' => 3]
        ],
        'answer' => 3
      ],[   
        'id' => 3,
        'question' => 'Whose logo is this?<br /><img class="img-responsive" src="/images/site/fca_logo.jpg">',
        'answers' => [
          ['answer' => 'Financial Ombudsman Service', 'number' => 1],
          ['answer' =>'Financial Services Compensation Scheme', 'number' => 2],
          ['answer' =>'Financial Conduct Authority', 'number' => 3]
        ],
        'answer' => 3
      ],[   
        'id' => 4,
        'question' => 'TCF stands for?',
        'answers' => [
          ['answer' => 'Treating Consumers Fairly', 'number' => 1],
          ['answer' =>'Testing Customers Fairly', 'number' => 2],
          ['answer' =>'Treating Customers Fairly', 'number' => 3]
        ],
        'answer' => 3
      ],[
        'id' => 5,
        'question' => 'Name one area of your organisation where TCF should be applied?',
        'answers' => [
          ['answer' => 'When dealing with our suppliers', 'number' => 1],
          ['answer' =>'When promoting marketing materials and sales information to customers', 'number' => 2],
          ['answer' =>'When negotiating with our suppliers', 'number' => 3]
        ],
        'answer' => 2
      ],[   
        'id' => 6,
        'question' => 'TCF is the practical realisation of one of the FCA’s core principles:<br /><br />“A Firm must pay due regard to the interests of its customers and treat them fairly”.',
        'answers' => [
          ['answer' => 'True', 'number' => 1],
          ['answer' =>'False', 'number' => 2],
          ['answer' =>'Trick question as there are no TCF principles', 'number' => 3]
        ],
        'answer' => 1
      ],[   
        'id' => 7,
        'question' => 'A customer raises a complaint with you. What do you do?',
        'answers' => [
          ['answer' => 'Tell them there is no point complaining because you have been through everything with them already and there are no solutions', 'number' => 1],
          ['answer' =>'Give them your regulator and Financial Ombudsman Service details', 'number' => 2],
          ['answer' =>'Provide them with your complaints procedure and full contact details', 'number' => 3]
        ],
        'answer' => 3
      ],[   
        'id' => 8,
        'question' => 'A customer asks who you are and what you do. What do you do?',
        'answers' => [
          ['answer' => 'Provide them with your full name, company name and explain the nature of the business and the reason for your call', 'number' => 1],
          ['answer' =>'Give them your first name and advise you will explain everything else as you go along', 'number' => 2],
          ['answer' =>'Advise that you cannot give them any details over the phone.', 'number' => 3]
        ],
        'answer' => 1
      ],[   
        'id' => 9,
        'question' => 'Choose an example that demonstrates your organisations commitment and adherence to the FCA Treating Customers Fairly regime?',
        'answers' => [
          ['answer' => 'Recruiting and training staff with appropriate values and skills', 'number' => 1],
          ['answer' =>'Rewarding and remunerating staff for volume of sales', 'number' => 2],
          ['answer' =>'Cross selling finance products to maximise sales', 'number' => 3]
        ],
        'answer' => 1

      ],[   
        'id' => 10,
        'question' => 'Identify one of the TCF consumer outcomes the FCA wishes firms to consider?',
        'answers' => [
          ['answer' => 'TCF is not always central to the expectations of our firms conduct', 'number' => 1],
          ['answer' =>'Products and Services may go wrong from time to time and so our organisation is not always responsible for the outcome', 'number' => 2],
          ['answer' =>'Where consumers receive advice, the advice is suitable and takes account of their circumstances', 'number' => 3]
        ],
        'answer' => 3
      ],
    ];
  }

  public function TreatingCustomersFairlyData(){
    return [
      'title' => 'Treating Customers Fairly Quiz ',
      'quiz' => 'TreatingCustomersFairly',
      'questionsUrl' => '/Quiz/View/Questions/TreatingCustomersFairlyQuestions',
      'sendUrl' => '/Quiz/Send'
    ];
  }

  // Start Quiz 
  public function GeneralKnowledge(){
    return view('quiz.quiz')->with($this->GeneralKnowledgeData());
  }

  public function GeneralKnowledgeQuestions(){
    return [
      [
        'id' => 1,
        'question' => 'Treating Customers Fairly (TCF) is about?',
        'answers' => [
          ['answer' => 'Creating satisfied customers', 'number' => 1],
          ['answer' => 'Providing clear and transparent services or products to customers', 'number' => 2],
          ['answer' => 'Treating every customer in the same way', 'number' => 3]
        ],
        'answer' => 2
      ],[
        'id' => 2,
        'question' => 'How many desired outcomes are there for TCF?',
        'answers' => [
          ['answer' => '5', 'number' => 1],
          ['answer' => '8', 'number' => 2],
          ['answer' => '6', 'number' => 3]
        ],
        'answer' => 3
      ],[
        'id' => 3,
        'question' => 'Whose logo is this?<br /><img class="img-responsive" src="/images/site/fca_logo.jpg">',
        'answers' => [
          ['answer' => 'Financial Ombudsman Service', 'number' => 1],
          ['answer' => 'Financial Services Compensation Scheme', 'number' => 2],
          ['answer' => 'Financial Conduct Authority', 'number' => 3]
        ],
        'answer' => 3
      ],[
        'id' => 4,
        'question' => 'What does the FCA do?',
        'answers' => [
          ['answer' => 'They regulate the financial services industry to ensure firms stick to the rules', 'number' => 1],
          ['answer' => 'Protect retailers', 'number' => 2],
          ['answer' => 'Fine retailers', 'number' => 3]
        ],
        'answer' => 1
      ],[
        'id' => 5,
        'question' => 'TCF stands for?',
        'answers' => [
          ['answer' => 'Treating Consumers Fairly', 'number' => 1],
          ['answer' => 'Testing Customers Fairly', 'number' => 2],
          ['answer' => 'Treating Customers Fairly', 'number' => 3]
        ],
        'answer' => 3
      ],[
        'id' => 6,
        'question' => 'When does a customer make their first repayment on a loan?',
        'answers' => [
          ['answer' => '7 days after signing the agreement', 'number' => 1],
          ['answer' => '14 days after signing the agreement', 'number' => 2],
          ['answer' => '1 month after installation', 'number' => 3]
        ],
        'answer' => 3
        
      ],[
        'id' => 7,
        'question' => 'How can you check a customer’s understanding of the credit agreement?',
        'answers' => [
          ['answer' => 'Ask them open questions about the credit agreement', 'number' => 1],
          ['answer' => 'At the end of the loan tell them about the credit agreement section by section after you have completed it', 'number' => 2],
          ['answer' => 'You don\'t need to check that they understand as that\'s not your responsibility', 'number' => 3]
        ],
        'answer' => 1
      ],[
        'id' => 8,
        'question' => 'Can you offer these agreements on commercial properties?',
        'answers' => [
          ['answer' => 'Yes', 'number' => 1],
          ['answer' => 'No', 'number' => 2],
          ['answer' => 'Maybe', 'number' => 3]
        ],
        'answer' => 2
      ],[
        'id' => 9,
        'question' => 'What is the withdrawal period and how long does it last?',
        'answers' => [
          ['answer' => 'Customer can withdraw from the agreement within 7 days', 'number' => 1],
          ['answer' => 'Customer can withdraw from the agreement within 10 days', 'number' => 2],
          ['answer' => 'Customer can withdraw from the agreement within 14 days', 'number' => 3]
        ],
        'answer' => 3
      ],[
        'id' => 10,
        'question' => 'Can a customer settle their account early?',
        'answers' => [
          ['answer' => 'Yes', 'number' => 1],
          ['answer' => 'No', 'number' => 2],
          ['answer' => 'Maybe', 'number' => 3]
        ],
        'answer' => 1
      ],[
        'id' => 11,
        'question' => 'Which of the following would be classed as a vulnerable customer?',
        'answers' => [
          ['answer' => 'Bi Polar', 'number' => 1],
          ['answer' => 'Rude and abrupt', 'number' => 2],
          ['answer' => 'Annoying', 'number' => 3]
        ],
        'answer' => 1
      ],[
        'id' => 12,
        'question' => 'What actions can you take if you identify a customer as vulnerable?',
        'answers' => [
          ['answer' => 'Ask the customer to have a friend or family member sit in', 'number' => 1],
          ['answer' => 'Don’t take any action and ignore the issue', 'number' => 2],
          ['answer' => 'Proceed regardless', 'number' => 3]
        ],
        'answer' => 1
      ],[
        'id' => 13,
        'question' => 'What do you believe your role/responsibilities to be? (From a customer perspective)?',
        'answers' => [
          ['answer' => 'Earn as much as possible', 'number' => 1],
          ['answer' => 'Be aware you are responsible for what you say and do', 'number' => 2],
          ['answer' => 'Embellish the sales script', 'number' => 3]
        ],
        'answer' => 2
      ],[
        'id' => 14,
        'question' => 'A customer raises a complaint with you. Do you?',
        'answers' => [
          ['answer' => 'Tell them there is no point complaining because you have been through everything with them already and there are no other solutions', 'number' => 1],
          ['answer' => 'Give them your regulator and Financial Ombudsman Service details', 'number' => 2],
          ['answer' => 'Provide them with your complaints procedure and full contact details', 'number' => 3]
        ],
        'answer' => 3
      ],[
        'id' => 15,
        'question' => 'A customer asks who you are and what you do. Do you?',
        'answers' => [
          ['answer' => 'Provide them with your full name, company name and explain the nature of the business and the reason for the call', 'number' => 1],
          ['answer' => 'Give them your first name and advise you will explain everything else as you go along', 'number' => 2],
          ['answer' => 'Advise them that you cannot give details over the phone.', 'number' => 3]
        ],
        'answer' => 1
      ],
    ];
  }

  public function GeneralKnowledgeData(){
    return [
      'title' => 'General Knowledge Quiz – Questions and Answers',
      'quiz' => 'GeneralKnowledgeQuiz',
      'questionsUrl' => '/Quiz/View/Questions/GeneralKnowledgeQuestions',
      'sendUrl' => '/Quiz/Send'
    ];
  }

  // Start General Health and Safety Quiz
  public function GeneralHealthAndSafetyQuiz(){
    return view('quiz.quiz')->with($this->GeneralHealthAndSafetyData());
  }
  public function GeneralHealthAndSafetyQuestions(){
    return [
      [
        'id' => 1,
        'question' => 'What year is associated with the Health and Safety at Work etc. Act?',
        'answers' => [
          ['answer' => '1972','number' => 1],
          ['answer' => '1974','number' => 2],
          ['answer' => '1976','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 2,
        'question' => 'Why do we have Health and Safety Laws?',
        'answers' => [
          ['answer' => 'To protect you and staff from illness or injury in the workplace','number' => 1],
          ['answer' => 'We don’t have Health and Safety Laws','number' => 2],
          ['answer' => 'To protect you from fraudulent transactions in the workplace','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 3,
        'question' => 'Which one of the following are common causes of accidents at work?',
        'answers' => [
          ['answer' => 'Being struck by a moving vehicle','number' => 1],
          ['answer' => 'Cold weather','number' => 2],
          ['answer' => 'Poor Diet','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 4,
        'question' => 'When should you wear PPE?',
        'answers' => [
          ['answer' => 'At all times during work','number' => 1],
          ['answer' => 'When needed and according to the work activity','number' => 2],
          ['answer' => 'On arrival at work','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 5,
        'question' => 'Which of these is the most likely potential trip hazard?',
        'answers' => [
          ['answer' => 'Ladders','number' => 1],
          ['answer' => 'Spillages','number' => 2],
          ['answer' => 'Electrical Cables','number' => 3],
        ],
        'answer' => 3
      ],
      [
        'id' => 6,
        'question' => 'Which one of the following is likely to cause work related stress?',
        'answers' => [
          ['answer' => 'Friendly colleagues','number' => 1],
          ['answer' => 'Low staff turnover','number' => 2],
          ['answer' => 'Little recognition for the work being done','number' => 3],
        ],
        'answer' => 3
      ],
      [
        'id' => 7,
        'question' => 'Which one of the following is the first step in a risk assessment?',
        'answers' => [
          ['answer' => 'Review the assessment','number' => 1],
          ['answer' => 'Identify the hazards','number' => 2],
          ['answer' => 'Decide who might be harmed','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 8,
        'question' => 'Which one of the following is an injury commonly associated with manual handling?',
        'answers' => [
          ['answer' => 'Musculoskeletal disorders','number' => 1],
          ['answer' => 'Headaches','number' => 2],
          ['answer' => 'Burns','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 9,
        'question' => 'Which one of the following will help to prevent ill-health whilst working at a desk?',
        'answers' => [
          ['answer' => 'Stretching to reach the mouse','number' => 1],
          ['answer' => 'Using lighting that reflects off the screen','number' => 2],
          ['answer' => 'Using a chair that is adjustable in height and tilt','number' => 3],
        ],
        'answer' => 3
      ],
      [
        'id' => 10,
        'question' => 'When should you NOT use a tower scaffold?',
        'answers' => [
          ['answer' => 'In strong winds','number' => 1],
          ['answer' => 'With stabilisers','number' => 2],
          ['answer' => 'As an alternative to a ladder','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 11,
        'question' => 'How many points of contact should you maintain with a ladder at all times?',
        'answers' => [
          ['answer' => 'One','number' => 1],
          ['answer' => 'Two','number' => 2],
          ['answer' => 'Three','number' => 3],
        ],
        'answer' => 3
      ],
    ];
  }

  public function GeneralHealthAndSafetyData(){
    return [
      'title' => 'General Health and Safety Quiz',
      'quiz' => 'GeneralHealthAndSafetyQuiz',
      'questionsUrl' => '/Quiz/View/Questions/GeneralHealthAndSafety',
      'sendUrl' => '/Quiz/Send'
    ];
  }

  // Start Green Deal Quiz 
  public function GreenDealQuiz(){
    return view('quiz.quiz')->with($this->GreenDealData());
  }
  public function GreenDealQuestions(){
    return [
      [
        'id' => 1,
        'question' => 'Can a customer take out a green deal finance plan if they are with any electricity supplier?',
        'answers' => [
          ['answer' => 'yes','number' => 1],
          ['answer' => 'no','number' => 2],
          ['answer' => 'They don\'t need to be with an electricity supplier','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 2,
        'question' => 'A Green Deal Provider (GDP) processes the loan for the customer and as a GDP they are acting in the capacity of what?',
        'answers' => [
          ['answer' => 'Lender','number' => 1],
          ['answer' => 'Credit Broker','number' => 2],
          ['answer' => 'Energy Supplier','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 3,
        'question' => 'What is the interest rate on a green deal loan?',
        'answers' => [
          ['answer' => '8.67% Fixed','number' => 1],
          ['answer' => '8.67% Variable','number' => 2],
          ['answer' => '6.96% Fixed','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 4,
        'question' => 'In what year was the green deal first launched?',
        'answers' => [
          ['answer' => '2013','number' => 1],
          ['answer' => '2015','number' => 2],
          ['answer' => '2017','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 5,
        'question' => 'What has been developed, that underpins the Green Deal scheme, that sets out the criteria that Providers, Assessors and Installers must follow in order to operate under the Green Deal banner?',
        'answers' => [
          ['answer' => 'Green Deal Advice Report','number' => 1],
          ['answer' => 'Green Deal Code of Practice','number' => 2],
          ['answer' => 'Green Deal Participant Register','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 6,
        'question' => 'The Green Deal Golden Rule checks that the total first year repayments do not exceed the total first year savings?',
        'answers' => [
          ['answer' => 'True','number' => 1],
          ['answer' => 'False','number' => 2],
          ['answer' => 'There is no such thing as the Golden Rule with the Green Deal','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 7,
        'question' => 'A Green Deal Assessment is carried out by a Domestic Energy Assessor?',
        'answers' => [
          ['answer' => 'True','number' => 1],
          ['answer' => 'False','number' => 2]
        ],
        'answer' => 2
      ],
      [
        'id' => 8,
        'question' => 'Name one key point of a Green Deal Plan?',
        'answers' => [
          ['answer' => 'Unlike a traditional loan this loan is available to anyone','number' => 1],
          ['answer' => 'It is a loan attached to the property and repayments are made from the estimated savings via the electricity meter','number' => 2],
          ['answer' => 'It is not a loan as any repayments are repaid through the energy savings','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 9,
        'question' => 'What is PAS2030?',
        'answers' => [
          ['answer' => 'PAS 2030 (Publicly Available Specification) is a specification for the installation of energy efficiency measures in existing buildings for Green Deal','number' => 1],
          ['answer' => 'This is a form of software used in producing a Green Deal Advice Report','number' => 2],
          ['answer' => 'This is part of the Advertising Standards Authority rules and regulations','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 10,
        'question' => 'What should I do if I receive a complaint in connection with the Green Deal?',
        'answers' => [
          ['answer' => 'Report the complaint to the Financial Ombudsman','number' => 1],
          ['answer' => 'Don\'t report it just add it to the Complaints Log','number' => 2],
          ['answer' => 'Follow the Green Deal Code of Practice and report the complaint to the Green Deal Provider as soon as you become aware','number' => 3]
        ],
        'answer' => 3
      ],
    ];
  }

  public function GreenDealData(){
    return [
      'title' => 'Green Deal Quiz',
      'quiz' => 'GreenDealQuiz',
      'questionsUrl' => '/Quiz/View/Questions/green-deal-quiz',
      'sendUrl' => '/Quiz/Send'
    ];
  }


  // Start Quiz ManualHandlingHealthAndSafetyQuiz
  public function ManualHandlingHealthAndSafetyQuiz(){
    return view('quiz.quiz')->with($this->ManualHandlingHealthAndSafetyQuizData());
  }

  public function ManualHandlingHealthAndSafetyQuizQuestions(){
    return [
      [
        'id' => 1,
        'question' => 'What year is associated with the Manual Handling Operations Regulations?',
        'answers' => [
          ['answer' => '1991','number' => 1],
          ['answer' => '1992','number' => 2],
          ['answer' => '1993','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 2,
        'question' => 'Which of these is NOT a common type of manual handling injury?',
        'answers' => [
          ['answer' => 'Sprains and strains','number' => 1],
          ['answer' => 'Fractures','number' => 2],
          ['answer' => 'Dust particles in the eyes','number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 3,
        'question' => 'When heavy items must be moved in and out or storage, what is the optimum position for storage?',
        'answers' => [
          ['answer' => 'Around waist height','number' => 1],
          ['answer' => 'Around floor height','number' => 2],
          ['answer' => 'Around head height','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 4,
        'question' => 'When should you wear PPE?',
        'answers' => [
          ['answer' => 'At all times during work','number' => 1],
          ['answer' => 'When needed and according to the work activity','number' => 2],
          ['answer' => 'On arrival at work','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 5,
        'question' => 'Which one of these is NOT a Safe System of Work (SSoW)?',
        'answers' => [
          ['answer' => 'Ensuring the work environment is suitable for the task','number' => 1],
          ['answer' => 'Ensuring work equipment is safe, in good condition and suitable for the task','number' => 2],
          ['answer' => 'Assuming staff are already trained in safety procedures','number' => 3],
          ['answer' => 'Only allowing authorised workers to operate certain machinery','number' => 4]
        ],
        'answer' => 3
      ],
      [
        'id' => 6,
        'question' => 'Which one of the following is NOT a good housekeeping procedure?',
        'answers' => [
          ['answer' => 'Tidying up','number' => 1],
          ['answer' => 'Safe storage and stacking of items','number' => 2],
          ['answer' => 'Maintenance of equipment','number' => 3],
          ['answer' => 'Overloading storage facilities','number' => 4]
        ],
        'answer' => 4
      ],
      [
        'id' => 7,
        'question' => 'Which one of the following is the first step in a risk assessment?',
        'answers' => [
          ['answer' => 'Review the assessment','number' => 1],
          ['answer' => 'Identify the hazards','number' => 2],
          ['answer' => 'Decide who might be harmed','number' => 3],
          ['answer' => 'Evaluate the risks','number' => 4]
        ],
        'answer' => 2
      ],
      [
        'id' => 8,
        'question' => 'Which one of the following is an injury commonly associated with manual handling?',
        'answers' => [
          ['answer' => 'RSIs (Repetitive Strain Injury)','number' => 1],
          ['answer' => 'Headaches','number' => 2],
          ['answer' => 'Burns','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 9,
        'question' => 'Which one of the following will help to prevent ill-health whilst working at a desk?',
        'answers' => [
          ['answer' => 'Stretching to reach the mouse','number' => 1],
          ['answer' => 'Using lighting that reflects off the screen','number' => 2],
          ['answer' => 'Having a flat, non-tilt keyboard','number' => 3],
          ['answer' => 'Using a chair that is adjustable in height and tilt','number' => 4]
        ],
        'answer' => 4
      ],
      [
        'id' => 10,
        'question' => 'What is the main legislation called covering the use of computers?',
        'answers' => [
          ['answer' => 'Health and Safety (Display Screen Equipment) Regulations 1992','number' => 1],
          ['answer' => 'The Manual Handling Operations Regulations 1992','number' => 2],
          ['answer' => 'Control of Substances Hazardous to Health Regulations 2002','number' => 3],
          ['answer' => 'Work at Height Regulations 2005','number' => 4]
        ],
        'answer' => 1
      ],
    ];
  }

  public function ManualHandlingHealthAndSafetyQuizData(){
    return [
      'title' => 'Manual Handling Health & Safety Quiz',
      'quiz' => 'ManualHandlingHealthAndSafety',
      'questionsUrl' => '/Quiz/View/Questions/ManualHandlingHealthAndSafetyQuiz',
      'sendUrl' => '/Quiz/Send'
    ];
  }

  // Start Anti Bribery Quiz
  public function AntiBriberyQuiz(){
    return view('quiz.quiz')->with($this->AntiBriberyData());
  }

  public function AntiBriberyQuestions(){
    return [
      [
        'id' => 1,
        'question' => 'In what year did the Bribery Act come into Force?',
        'answers' => [
          ['answer' => '2010','number' => 1],
          ['answer' => '2011','number' => 2],
          ['answer' => '2012','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 2,
        'question' => 'Does a firm need to employ consultants or solicitors to provide advice on the risks they face, the procedures your firm should adopt, or the level of due diligence your firm should take?',
        'answers' => [
          ['answer' => 'Yes','number' => 1],
          ['answer' => 'No','number' => 2],
          ['answer' => 'This is not relevant to my firm','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 3,
        'question' => 'Can I provide hospitality, promotional or other business expenditure under the Act?',
        'answers' => [
          ['answer' => 'Yes','number' => 1],
          ['answer' => 'No','number' => 2],
          ['answer' => 'Don’t Know','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 4,
        'question' => 'Which of the following statements most accurately describes one of the main objectives of the Bribery Act?',
        'answers' => [
          ['answer' => 'Stopping companies that are competing for major government contracts from engaging in price-fixing.','number' => 1],
          ['answer' => 'Stopping corrupt individuals from accepting cash in return for acting improperly in their employment','number' => 2],
          ['answer' => 'Preventing crooked company directors from siphoning funds away from the hands of shareholders.','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 5,
        'question' => 'Does your firm have a documented Anti-Bribery Procedure?',
        'answers' => [
          ['answer' => 'Yes','number' => 1],
          ['answer' => 'No','number' => 2],
          ['answer' => 'Don’t Know','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 6,
        'question' => 'If you suspect or if you are concerned that there has been any breach of the firm’s anti-bribery policy then what should you do?',
        'answers' => [
          ['answer' => 'Nothing','number' => 1],
          ['answer' => 'Report this information to your compliance officer, or the person responsible for compliance.','number' => 2],
          ['answer' => 'Tell your friends and family when you get home.','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 7,
        'question' => 'Which one of these examples is a Bribery offence?',
        'answers' => [
          ['answer' => 'Disproportionate gifts or hospitality','number' => 1],
          ['answer' => 'Receiving a sales bonus','number' => 2],
          ['answer' => 'Receiving a pension on top of my salary','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 8,
        'question' => 'How many Anti-Bribery Principles are there?',
        'answers' => [
          ['answer' => '6','number' => 1],
          ['answer' => '7','number' => 2],
          ['answer' => '8','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 9,
        'question' => 'Which one of these is Not an Anti-Bribery Principle?',
        'answers' => [
          ['answer' => 'Proportionality – the action that you take should be proportionate to the size of your business and the risks that you face.','number' => 1],
          ['answer' => 'Due Diligence – perform background and credit checks and know your customer.','number' => 2],
          ['answer' => 'Treating Customers Fairly – Consumers are provided with clear information and kept appropriately informed before, during and after the point of sale.','number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 10,
        'question' => 'What is the minimum amount of money that must be recorded on your Gift and Hospitality Register?',
        'answers' => [
          ['answer' => '£20','number' => 1],
          ['answer' => '£30','number' => 2],
          ['answer' => '£50','number' => 3]
        ],
        'answer' => 3
      ],
    ];
  }

  public function AntiBriberyData(){
    return [
      'title' => 'Anti-Bribery Training Quiz',
      'quiz' => 'AntiBriberyQuiz',
      'questionsUrl' => '/Quiz/View/Questions/AntiBribery',
      'sendUrl' => '/Quiz/Send'
    ];
  }


  // Start Anti Money Laundering Quiz
  public function AntiMoneyQuiz(){
    return view('quiz.quiz')->with($this->AntiMoneyQuizData());
  }

  public function AntiMoneyQuestions(){
    return [
      [
        'id' => 1,
        'question' => 'What does MLRO stand for?',
        'answers' => [
          ['answer' => 'Money Laundering Reporting Officer','number' => 1],
          ['answer' => 'Money Laundering Registration Office','number' => 2],
          ['answer' => 'Money Laundering Requirements Officer','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 2,
        'question' => 'In terms of Client Due Diligence, give an example of one area that we must undertake?',
        'answers' => [
          ['answer' => 'Explain that calls are recorded for monitoring purposes','number' => 1],
          ['answer' => 'Identify the client and verify his or her identity','number' => 2],
          ['answer' => 'Carry out an affordability assessment','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 3,
        'question' => 'What two pieces of evidence do we require to prove a client’s ID?',
        'answers' => [
          ['answer' => 'Birth and Marriage Certificate','number' => 1],
          ['answer' => 'Passport and Driving License','number' => 2],
          ['answer' => 'Credit Card and Bank Account Details','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 4,
        'question' => 'What does PEP stand for with regards to Anti-Money Laundering?',
        'answers' => [
          ['answer' => 'Private Exposed Person','number' => 1],
          ['answer' => 'Politically Exposed Person','number' => 2],
          ['answer' => 'Personal Equity Plan','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 5,
        'question' => 'How long are records maintained after the end of the relationship with the client?',
        'answers' => [
          ['answer' => '4 years','number' => 1],
          ['answer' => '5 years','number' => 2],
          ['answer' => '10 years','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 6,
        'question' => 'Which of the below Acts does not govern money laundering and terrorist funding in the UK?',
        'answers' => [
          ['answer' => 'The Proceeds of Crime Act 2002.','number' => 1],
          ['answer' => 'Serious Organised Crime & Police Act 2005','number' => 2],
          ['answer' => 'Data Protection Act 1998','number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 7,
        'question' => 'What does SAR stand for?',
        'answers' => [
          ['answer' => 'Suspended Activity Restriction','number' => 1],
          ['answer' => 'Suspicious Activity Report','number' => 2],
          ['answer' => 'Suspect Archive Report','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 8,
        'question' => 'List one type of financial crime?',
        'answers' => [
          ['answer' => 'Corruption','number' => 1],
          ['answer' => 'Not treating a customer fairly','number' => 2],
          ['answer' => 'Breaching Data Protection','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 9,
        'question' => 'NCA is the acronym for?',
        'answers' => [
          ['answer' => 'National Crime Agency','number' => 1],
          ['answer' => 'Nationwide Crime Association','number' => 2],
          ['answer' => 'National Organised Crime Association','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 10,
        'question' => 'Which one of the following is money laundering defined by the Proceeds of Crime Act?',
        'answers' => [
          ['answer' => 'Integration','number' => 1],
          ['answer' => 'Filtering','number' => 2],
          ['answer' => 'Cleaning','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 11,
        'question' => 'The UK Money Laundering Regulations 2007 came into effect on?',
        'answers' => [
          ['answer' => 'December 25, 2001','number' => 1],
          ['answer' => 'April 17, 2008','number' => 2],
          ['answer' => 'December 15, 2007','number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 12,
        'question' => 'The NCA was formed after SOCA was disbanded – what date did the NCA become fully operational?',
        'answers' => [
          ['answer' => '17th October 2011','number' => 1],
          ['answer' => '7th October 2013','number' => 2],
          ['answer' => '27th December 2012','number' => 3]
        ],
        'answer' => 2
      ],
    ];
  }

  public function AntiMoneyQuizData(){
    return [
      'title' => 'Anti-Money Laundering Training Quiz',
      'quiz' => 'AntiMoneyQuiz',
      'questionsUrl' => '/Quiz/View/Questions/Anti-Money',
      'sendUrl' => '/Quiz/Send'
    ];
  }




  // Start Quiz General Data Protection Regulation Quiz
  public function GeneralDataProtectionRegulationQuiz(){
    return view('quiz.quiz')->with($this->GeneralDataProtectionRegulationQuizData());
  }

  public function GeneralDataProtectionRegulationQuizQuestions(){
    return [
      [
        'id' => 1,
        'question' => 'What does the GDPR replace?',
        'answers' => [
          ['answer' => 'Data Protection Act 1998','number' => 1],
          ['answer' => 'It doesn’t replace anything and runs alongside the DPA','number' => 2],
          ['answer' => 'Criminal Finances Act 2017','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 2,
        'question' => 'What is the person in charge of data in an organisation called?',
        'answers' => [
          ['answer' => 'Data Controller','number' => 1],
          ['answer' => 'Data Subject','number' => 2],
          ['answer' => 'Data Processor','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 3,
        'question' => 'Whose logo is this? <br /> <img src="http://fcacomplianceservices.com/images/site/ico-logo.gif">',
        'answers' => [
          ['answer' => 'Information Commissioner’s Organisation','number' => 1],
          ['answer' => 'Information Commissioner’s Office','number' => 2],
          ['answer' => 'Information Corporation Office','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 4,
        'question' => 'What does the Privacy and Electronic Communications Regulations 2003 do?',
        'answers' => [
          ['answer' => 'Nothing, this was replaced by the GDPR','number' => 1],
          ['answer' => 'Provides rules about sending marketing and advertising by post','number' => 2],
          ['answer' => 'Provides rules about sending marketing and advertising by electronic means','number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 5,
        'question' => 'If you share data with other third parties what should you do?',
        'answers' => [
          ['answer' => 'Nothing. They are responsible for processing their own data','number' => 1],
          ['answer' => 'Ensure you have an agreement in place to ensure both parties comply with the GDPR','number' => 2],
          ['answer' => 'Inform the ICO as soon as possible','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 6,
        'question' => 'It is recommended that any marketing campaign is always permission-based with the addition of a simple “opt out” option?',
        'answers' => [
          ['answer' => 'True','number' => 1],
          ['answer' => 'False','number' => 2],
          ['answer' => 'True, but only if it is carried out by post','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 7,
        'question' => 'Personal data is defined as?',
        'answers' => [
          ['answer' => 'Data relating to a living individual who can be identified by that data.','number' => 1],
          ['answer' => 'Data relating to a living or deceased individual who can be identified by that data.','number' => 2],
          ['answer' => 'Data relating to a living individual who may or may not be identified by that data.','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 8,
        'question' => 'What does SAR stand for? This is where the customer has the rights to request access to their information.',
        'answers' => [
          ['answer' => 'Subject Access Retention','number' => 1],
          ['answer' => 'Status Act Retention.','number' => 2],
          ['answer' => 'Subject Access Request.','number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 9,
        'question' => 'What is a Retention Period?',
        'answers' => [
          ['answer' => 'A period of time when it is reasonable to retain data','number' => 1],
          ['answer' => 'A period of time the ICO can hold a person for breaching the GDPR','number' => 2],
          ['answer' => 'A period of time allocated to investigate a security breach','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 10,
        'question' => 'Which one of the following statements is correct in connection with GDPR?',
        'answers' => [
          ['answer' => 'It applies to all companies processing and holding personal data of data subjects residing in the EU','number' => 1],
          ['answer' => 'It applies to data held only in electronic format','number' => 2],
          ['answer' => 'It applies only to larger organisations with over 20 employees','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 11,
        'question' => 'What does GDPR stand for?',
        'answers' => [
          ['answer' => 'General Data Policies and Regulations','number' => 1],
          ['answer' => 'General Data Protection Regulation','number' => 2],
          ['answer' => 'General Data Protection Rights','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 12,
        'question' => 'When does the new GDPR come into practice and become enforceable?',
        'answers' => [
          ['answer' => 'It doesn’t, it is only optional','number' => 1],
          ['answer' => '25th May 2019','number' => 2],
          ['answer' => '25th May 2018','number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 13,
        'question' => 'If the processing of the data is “necessary” in order to carry out a contract then do you need to get separate consent?',
        'answers' => [
          ['answer' => 'Yes','number' => 1],
          ['answer' => 'No','number' => 2],
          ['answer' => 'No, and I can also market other completely separate services to them','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 14,
        'question' => 'Which one of these statements is incorrect?',
        'answers' => [
          ['answer' => 'Withdrawing consent should be as easy as giving it','number' => 1],
          ['answer' => 'You must document and evidence consent and record who, when, how, and what you told people','number' => 2],
          ['answer' => 'Consent requests do not have to be kept separate from other terms and conditions','number' => 3]
        ],
        'answer' => 3
      ],
    ];
  }

  public function GeneralDataProtectionRegulationQuizData(){
    return [
      'title' => 'General Data Protection Regulation Quiz',
      'quiz' => 'GeneralDataProtectionRegulationQuiz',
      'questionsUrl' => '/Quiz/View/Questions/GeneralDataProtectionRegulationQuiz',
      'sendUrl' => '/Quiz/Send'
    ];
  }



  // Start Quiz ManualHandlingHealthAndSafetyQuiz
  public function ComplaintsHandling(){
    return view('quiz.quiz')->with($this->ComplaintsHandlingData());
  }

  public function ComplaintsHandlingQuestions(){
    return [
      [
        'id' => 1,
        'question' => 'When did providing Alternative Dispute Resolution (ADR) – or arbitration – become UK law?',
        'answers' => [
          ['answer' => 'September 2015','number' => 1],
          ['answer' => 'October 2015','number' => 2],
          ['answer' => 'November 2015','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 2,
        'question' => 'What is a Complaints Handling Procedure?',
        'answers' => [
          ['answer' => 'This is a procedure relating to the handling of customer data', 'number' => 1],
          ['answer' => 'A step-by-step procedure that a firm must follow when handling complaints from customers','number' => 2],
          ['answer' => 'This is a staff grievance procedure','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 3,
        'question' => 'What period of time should a complaint reasonably be resolved within?',
        'answers' => [
          ['answer' => '8 weeks','number' => 1],
          ['answer' => '10 weeks','number' => 2],
          ['answer' => '12 weeks','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 4,
        'question' => 'What does the FOS stand for?',
        'answers' => [
          ['answer' => 'Financial Organisation Society', 'number' => 1],
          ['answer' => 'Financial Ombudsman Service','number' => 2],
          ['answer' => 'Final Offer Settlement','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 5,
        'question' => 'Does your firm have a documented Complaints Handling Procedure?',
        'answers' => [
          ['answer' => 'Yes', 'number' => 1],
          ['answer' => 'No','number' => 2],
          ['answer' => 'Don\'t Know','number' => 3],
        ],
        'answer' => 1
      ],
      [
        'id' => 6,
        'question' => 'What is a Complaints Log?',
        'answers' => [
          ['answer' => 'This is something a customer must provide to a firm when making an initial complaint','number' => 1],
          ['answer' => 'This is an internal record of any complaints received by a firm','number' => 2],
          ['answer' => 'This is something a firm must provide a customer when the complaint has been resolved','number' => 3]
        ],
        'answer' => 2
      ],
      [
        'id' => 7,
        'question' => 'Which of these FCA “rules” about complaints procedures is incorrect?',
        'answers' => [
          ['answer' => 'Ensure that lessons learned are effectively applied in future complaints handling','number' => 1],
          ['answer' => 'Reasonable and prompt handling of complaints must be established, implemented and maintained', 'number' => 2],
          ['answer' => 'Procedures are not necessary with 5 or less employees','number' => 3]
        ],
        'answer' => 3
      ],
      [
        'id' => 8,
        'question' => 'In the FCA Handbook where are the complaints handling rules published?',
        'answers' => [
          ['answer' => 'DISP','number' => 1],
          ['answer' => 'CONC','number' => 2],
          ['answer' => 'SUP','number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 9,
        'question' => 'In what period of time is it important for a customer to contact the FOS (if necessary) after receiving a final response from a firm?',
        'answers' => [
          ['answer' => '6 months','number' => 1],
          ['answer' => '8 months','number' => 2],
          ['answer' => 'No time limit, they can contact them anytime', 'number' => 3]
        ],
        'answer' => 1
      ],
      [
        'id' => 10,
        'question' => 'If a customer does not want to accept a decision by the FOS, then as a last resort what may they do?',
        'answers' => [
          ['answer' => 'Take the case the court','number' => 1],
          ['answer' => 'Take the case to another ombudsman','number' => 2],
          ['answer' => 'Take the case to the Financial Conduct Authority','number' => 3]
        ],
        'answer' => 1
      ],
    ];
  }

  public function ComplaintsHandlingData(){
    return [
      'title' => 'Complaints Handling Quiz',
      'quiz' => 'ComplaintsHandling',
      'questionsUrl' => '/Quiz/View/Questions/ComplaintsHandling',
      'sendUrl' => '/Quiz/Send'
    ];
  }
}
