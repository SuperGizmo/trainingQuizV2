<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewLegislationController extends Controller
{
  
  public function duskTests(){
    return ['',''];
  } 
  
  // // Start Legislation
  // 
  // public function Links(){
  //   return [
  //     [
  //       'id' => 1,
  //       'content' => ''
  //     ],
  //   ];
  // }
  // 
  // public function Data(){
  //   return [
  //     'title' => '',
  //     'Legislation' => '',
  //     'LinksUrl' => '/Legislation/View/Links/',
  //     'sendUrl' => '/Legislation/Send',
  //     'Links' => [
  //       $this->Links()
  //     ],
  //     'LegislationTopics' => '',
  //   ];
  // }
  // 
  // public function Legislation(){
  //   return view('Legislation.Legislation')->with($this->Data());
  // }
  // 
  // // End Legislation
  
  
  
  // Start Legislation
  public function RegisterofDataProtectionLegislationLinks(){
    return [
      [
        'id' => 1,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'ICO Website',
        'links' => [
          'http://www.legislation.gov.uk/ukpga/1998/29',
          'https://ico.org.uk/for-organisations/data-protection-act-2018'
        ],
        'summary' => 'Data Protection Act 2018 (DPA) which replaces the Data Protection Act 1998. It is important that the DPA 2018 and the General Data Protection Regulation (GDPR) are read side by side. The DPA 2018 has a part dealing with processing that does not fall within EU law, for example, where it is related to immigration.',
      ],
      [
        'id' => 2,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'ICO Website',
        'links' => [
          'http://www.legislation.gov.uk/ukpga/2000/36/contents',
          'http://www.legislation.gov.uk/all?title=freedom%20of%20information',
          'https://assets.publishing.service.gov.uk/government/uploads/system/uploads/attachment_data/file/235286/0033.pdf'],
        'summary' => 'Freedom of Information Act (FOIA). This gives a person the right to access recorded information held by public sector organisations. Anyone can request information – there are no restrictions on your age, nationality or where you live. ',
      ],
      [
        'id' => 3,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'ICO Website',
        'links' => [
          'http://www.legislation.gov.uk/uksi/2003/2426/contents/made',
          'https://www.legislation.gov.uk/uksi/2018/1189/made',
          'http://www.legislation.gov.uk/uksi/2018/1396/introduction/made',
          'https://eur-lex.europa.eu/LexUriServ/LexUriServ.do?uri=OJ:L:2013:173:0002:0008:en:PDF',
        ],
        'summary' => 'The Privacy and Electronic Communications (EC Directive) Regulations 2003 (PECR). The PECR sit alongside the Data Protection Act and the GDPR. They give people specific privacy rights in relation to electronic communications. There are specific rules on: marketing calls, emails, texts and faxes; cookies (and similar technologies).',
      ],
      [
        'id' => 4,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'ICO Website',
        'links' => [
          'https://eur-lex.europa.eu/legal-content/EN/TXT/PDF/?uri=CELEX:32016R0679&from=EN',
        ],
        'summary' => 'General Data Protection Regulation (GDPR). Passed by the European Union in April of 2016, the GDPR has far reaching global impact on data security. No matter where you are based, any organisation that does business with EU citizens must comply with the GDPR’s expanded and more stringent data protection rules from May 25th 2018.',
      ],
      [
        'id' => 5,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'ICO Website',
        'links' => [
          'http://www.legislation.gov.uk/uksi/2004/3391/contents/made',
        ],
        'summary' => 'Environmental Information Regulations 2004 (EIR). This is a UK Statutory Instrument (SI 2004 No. 3391) that provides a statutory right of access to environmental information held by UK public authorities. The regulations came into force on 1st January 2005.',
      ],
      [
        'id' => 6,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'ICO Website',
        'links' => [
          'http://www.legislation.gov.uk/uksi/2009/3157/contents/made',
          'https://ico.org.uk/media/about-the-ico/policies-and-procedures/2782/inspire_regulations_2009_and_the_role_of_the_ico.pdf',
          'https://assets.publishing.service.gov.uk/government/uploads/system/uploads/attachment_data/file/235286/0033.pdf',
        ],
        'summary' => 'The Inspire Regulations 2009. These came into force on the 31st December 2009. The Regulations which derive from a European Directive (INSPIRE Directive 2007/2/EC) create a right to discover and view spatial datasets (eg map data).',
      ],
      [
        'id' => 7,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'ICO Website',
        'links' => [
          'https://eur-lex.europa.eu/legal-content/EN/TXT/PDF/?uri=CELEX:32014R0910&from=EN',
        ],
        'summary' => 'eIDAS Regulation. The UK eIDAS Regulations were amended in May 2018 to reflect changes to the Commissioner’s investigative powers. The changes are set out in the Data Protection Act 2018 (in Schedule 19 paragraph 406).',
      ],
      [
        'id' => 8,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'ICO Website',
        'links' => [
          'http://www.legislation.gov.uk/uksi/2015/1415/contents/made',
        ],
        'summary' => 'Re-use of Public Sector Information Regulations.',
      ],
      [
        'id' => 9,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'ICO Website',
        'links' => [
          'http://www.legislation.gov.uk/uksi/2018/506/introduction/made',
          'https://eur-lex.europa.eu/legal-content/EN/TXT/?uri=CELEX:32018R0151',
        ],
        'summary' => 'The Network and Information Systems Regulations 2018. The ICO regulates relevant digital service providers (RDSPs) under NIS Regulations 2018.',
      ],
      [
        'id' => 10,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'ICO Website',
        'links' => [
          'http://www.legislation.gov.uk/ukpga/2016/25/contents/made',
        ],
        'summary' => 'Investigatory Powers Act 2016. This Act sets out the extent to which certain investigatory powers may be used to interfere with privacy.',
      ],
    ];
  }
  
  public function RegisterofDataProtectionLegislationData(){
    return [
      'title' => 'Register of Data Protection Legislation',
      'heading' => 'The Role of the Information Commissioner’s Office (ICO) is to uphold information rights in the public interest. This is the legislation that is covered by ICO.',
      'Legislation' => 'Register of Data Protection Legislation',
      'LinksUrl' => '/Legislation/View/Links/RegisterofDataProtectionLegislation',
      'sendUrl' => '/Legislation/Send',
      'Links' => [
        $this->RegisterofDataProtectionLegislationLinks()
      ]
    ];
  }
  
  public function RegisterofDataProtectionLegislation(){
    return view('Legislation.Legislation')->with($this->RegisterofDataProtectionLegislationData());
  }
  // End Legislation
  
  
  
  // Start Legislation
  public function RegisterofEnvironmentalLegislationLinks(){
      return [
          [
              'id' => 1,
              'date' => '25/6/2021',
              'originator' => 'David Mooney',
              'source' => 'Environmental Protection Act 1990 (EPA) including The Environmental Protection (Duty of Care) Regulations 1991',
              'links' => [
                  'http://www.legislation.gov.uk/ukpga/1990/43/contents',
                  'https://www.legislation.gov.uk/uksi/1991/2839/contents/made'
              ],
              'summary' => 'This is an Act of Parliament of the United Kingdom that as of 2008 defines, within England and Wales and Scotland, the fundamental structure and authority for waste management and control of emissions into the environment. This is the main legislation governing waste disposal. Section 34(10 of the Environmental Protection Act 1990 imposes a duty of care on any person who imports, produces, carries, keeps, treats or disposes of controlled waste or, as a broker, has control of such waste.',
          ],
          [
              'id' => 2,
              'date' => '25/6/2021',
              'originator' => 'David Mooney',
              'source' => 'Gov. UK. Environmental Management',
              'links' => [
                  'https://www.gov.uk/topic/environmental-management'
              ],
              'summary' => 'General Guidance Manuals on Air Quality; Assessing environmental impact; Boating; Chemicals; Environmental permits; Environmental risk management; Fisheries and rod licensing; Flooding and coastal change; Forestry; Land management; Marine; Nuclear regulation; Oil spills; Oil storage; Waste; Water; Wildlife and habitat conservation.',
          ],
          [
              'id' => 3,
              'date' => '25/6/2021',
              'originator' => 'David Mooney',
              'source' => 'International Organisation for Standardization ISO 14001',
              'links' => [
                  'https://www.iso.org/home.html'
              ],
              'summary' => 'ISO 14001 sets the standard for Environmental Management Systems. If you want to reduce waste management costs and demonstrate your commitment to protect the environment then ISO 14001 certification is the main standard.',
          ],
          [
              'id' => 4,
              'date' => '25/6/2021',
              'originator' => 'David Mooney',
              'source' => 'Anti-Pollution Works Regulations 1999.',
              'links' => [
                  'http://www.legislation.gov.uk/uksi/1999/1006/contents/made'
              ],
              'summary' => 'These Regulations came into force on 29th April 1999 and apply to England and Wales. They prescribe the contents of anti-pollution works notices serviced under section 161A of the Water Resources Act 1991.',
          ],
          [
              'id' => 5,
              'date' => '25/6/2021',
              'originator' => 'David Mooney',
              'source' => 'The new Waste Electrical and Electronic Equipment recycling WEEE Directive 2012/19/EU',
              'links' => [
                  'http://ec.europa.eu/environment/waste/weee/index_en.htm',
                  'https://www.gov.uk/electricalwaste-producer-supplier-responsibilities',
                  'http://www.hse.gov.uk/waste/waste-electrical.htm',
              ],
              'summary' => 'This entered into force on 13th August 2012 and became effective on 14/2/2014. EU legislation restricting the use of hazardous substances in electrical and electronic equipment (RoHS Directive 2002/95/EC) entered into force in February 2003.',
          ],
          [
              'id' => 6,
              'date' => '25/6/2021',
              'originator' => 'David Mooney',
              'source' => 'Clean Air Strategy 2019.',
              'links' => [
                  'https://www.gov.uk/government/publications/clean-air-strategy-2019',
                  'https://www.gov.uk/government/publications/clean-air-strategy-2019/clean-air-strategy-2019-executive-summary',
              ],
              'summary' => 'This strategy sets out government plans for dealing with all sources of air pollution, making our air healthier to breathe, protecting nature and boosting the economy.',
          ],
          [
              'id' => 7,
              'date' => '25/6/2021',
              'originator' => 'David Mooney',
              'source' => 'Climate Change Act 2008',
              'links' => [
                  'https://www.instituteforgovernment.org.uk/sites/default/files/climate_change_act.pdf',
                  'https://www.gov.uk/guidance/climate-change',
              ],
              'summary' => 'The Climate Change Act sets legally binding targets to reduce carbon dioxide emissions in the UK by at least 80% by 2050, from 1990 levels. It became an Act of Parliament in 2008.',
          ],
          [
              'id' => 8,
              'date' => '25/6/2021',
              'originator' => 'David Mooney',
              'source' => 'Clean Neighbourhoods and Environment Act 2005',
              'links' => [
                  'https://www.legislation.gov.uk/ukpga/2005/16/contents'
              ],
              'summary' => 'The Bill was published on the 8th December 2004 and received Royal Assent on 7th April 2005.  It relates to nuisance vehicles, litter, advertisements, waste  and noise.',
          ],
          [
              'id' => 9,
              'date' => '25/6/2021',
              'originator' => 'David Mooney',
              'source' => 'Natural Environment and Rural Communities Act 2006 (NERC Act 2006)',
              'links' => [
                  'http://www.legislation.gov.uk/ukpga/2006/16/contents'
              ],
              'summary' => 'An Act to make provision about bodies concerned with the natural environment and rural communities; it requires local authorities and government departments to have regard to the purposes of conserving biodiversity in a manner that is consistent with the exercise of their normal functions such as policy and decision-making.',
          ],
          [
              'id' => 10,
              'date' => '25/6/2021',
              'originator' => 'David Mooney',
              'source' => 'Control of Pollution Act 1974 (COPA)',
              'links' => [
                  'http://www.legislation.gov.uk/ukpga/1974/40'
              ],
              'summary' => 'The aim of the Act is to deal with a variety of environmental issues, including waste on land, water pollution, abandoned mines, noise pollution and the prevention of atmospheric pollution.',
          ],
          [
              'id' => 11,
              'date' => '25/6/2021',
              'originator' => 'David Mooney',
              'source' => 'The Energy Information Regulations 2011',
              'links' => [
                  'http://www.legislation.gov.uk/uksi/2011/1524/contents/made'
              ],
              'summary' => 'These Regulations implement Community legislation on energy labelling and market surveillance regarding energy-related products which have a significant direct or indirect impact on the consumption of energy and other resources. The Regulations, among other things, set out the requirements which must be met by a supplier when supplying a product and the responsibilities of dealers when selling products.',
          ],
          [
              'id' => 12,
              'date' => '25/6/2021',
              'originator' => 'David Mooney',
              'source' => 'Pollution Prevention and Control Act 1999',
              'links' => [
                  'https://www.legislation.gov.uk/ukpga/1999/24/contents'
              ],
              'summary' => 'This Act applies to England, Scotland and Wales and established standards, objectives or requirements in relation to emissions.',
          ],
          [
              'id' => 13,
              'date' => '25/6/2021',
              'originator' => 'David Mooney',
              'source' => 'The Waste (England and Wales) Regulations 2011',
              'links' => [
                  'http://www.legislation.gov.uk/uksi/2011/988/contents/made'
              ],
              'summary' => 'These regulations came into force on the 28th March 2011 and require businesses to confirm that they have applied the waste management hierarchy when transferring waste and include a declaration to this effect on their waste transfer note or consignment note.',
          ],
          [
              'id' => 14,
              'date' => '25/6/2021',
              'originator' => 'David Mooney',
              'source' => 'The Controlled Waste (England and Wales) Regulations 2012',
              'links' => [
                  'http://www.legislation.gov.uk/uksi/2012/811/contents/made'
              ],
              'summary' => 'These regulations classify waste as household waste, industrial waste or commercial waste for the purposes of Part 2 of the Environmental Protection Act 1990 (“the Act”) and in consequence determine the meaning of “controlled waste” for the purposes of Part 2 of the Act (the definition of “controlled waste” is in section 75(4)).',
          ],
          [
              'id' => 15,
              'date' => '25/6/2021',
              'originator' => 'David Mooney',
              'source' => 'Producer Responsibility Obligations (Packaging Waste) Regulations 2007',
              'links' => [
                  'https://www.legislation.gov.uk/uksi/2007/871/contents/made'
              ],
              'summary' => 'These regulations, which came into force in 1997, were the first of a range of measures introduced to make the producers of waste financially responsible for its recycling and disposal; they also introduced recycling and recovery targets for packaging waste to meet the EU Directive requirements. They apply to organisations that have a turnover exceeding £2 million per annum, handle over 50 tonnes of packaging materials, perform a relevant packaging “activity” and, supply to another stage in the packaging chain or to the end user.',
          ],
          [
              'id' => 16,
              'date' => '25/6/2021',
              'originator' => 'David Mooney',
              'source' => 'The Hazardous Waste (England and Wales) Regulations 2005',
              'links' => [
                  'https://www.legislation.gov.uk/uksi/2005/894/contents/made'
              ],
              'summary' => 'These regulations set out the regime for the control and tracking of the movement of hazardous waste for the purpose of implementing the Hazardous Waste Directive (Directive 91/689/EC). The Regulations extend to England Wales although the only provisions that apply to Wales are modifications to the Environmental Protection Act 1990 contained in Part 11.',
          ],
          [
              'id' => 17,
              'date' => '25/6/2021',
              'originator' => 'David Mooney',
              'source' => 'The Hazardous Waste (Wales) Regulations 2005',
              'links' => [
                  'https://www.legislation.gov.uk/wsi/2005/1806/contents'
              ],
              'summary' => '
These Regulations set out the regime for the control and tracking of the movement of hazardous waste for the purpose of implementing the Hazardous Waste Directive (Directive 91/689/EC). The Regulations apply in relation to Wales.',
          ],
          [
              'id' => 18,
              'date' => '25/6/2021',
              'originator' => 'David Mooney',
              'source' => 'The Hazardous Waste (Northern Ireland) Regulations 2005',
              'links' => [
                  'https://www.legislation.gov.uk/nisr/2005/300/contents/made'
              ],
              'summary' => 'These Regulations set out the regime for the control and tracking of the movement of hazardous waste for the purpose of implementing the Hazardous Waste Directive (Directive 91/689/EC) in Northern Ireland.',
          ],
          [
              'id' => 19,
              'date' => '25/6/2021',
              'originator' => 'David Mooney',
              'source' => 'The List of Wastes (England) Regulations 2005',
              'links' => [
                  'https://www.legislation.gov.uk/uksi/2005/895/contents/made'
              ],
              'summary' => 'The List of Wastes Regulations 2005, as amended transposes the Council Decision on the list of wastes and list of hazardous waste, otherwise known as the European Waste Catalogue (EWC) into England. The European Waste Catalogue is made up of approximately 650 different codes divided into 20 chapters, each of which contain a number of sub-categories.',
          ],
          [
              'id' => 20,
              'date' => '25/6/2021',
              'originator' => 'David Mooney',
              'source' => 'The Special Waste Regulations 1996',
              'links' => [
                  'https://www.legislation.gov.uk/uksi/1996/972/contents/made'
              ],
              'summary' => 'These Regulations set out procedures to be followed when disposing of, carrying and receiving special waste. The regulations are the principal piece of legislation covering special waste arising in Scotland. Elsewhere in the UK and the EC, Special Waste is referred to as hazardous waste and managing and regulating it is essential to minimise any effects on the environment.',
          ],
      ];
  }
  
  public function RegisterofEnvironmentalLegislationData(){
    return [
      'title' => 'Register of Environmental Legislation',
      'heading' => 'As part of an Environmental Management System you should record all appropriate laws and regulations aimed at protecting the environment from harmful actions.',
      'Legislation' => 'Register of Environmental Legislation',
      'LinksUrl' => '/Legislation/View/Links/RegisterofEnvironmentalLegislation',
      'sendUrl' => '/Legislation/Send',
      'Links' => [
        $this->RegisterofEnvironmentalLegislationLinks()
      ]
    ];
  }
  
  public function RegisterofEnvironmentalLegislation(){
    return view('Legislation.Legislation')->with($this->RegisterofEnvironmentalLegislationData());
  }
  // End Legislation
  
  
  
  // Start Legislation
  public function RegisterofGasLegislationLinks(){
    return [
      [
        'id' => 1,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Gas Safety (Installation and Use) Regulations 2018 (GSIUR)',
        'links' => [
          'http://www.legislation.gov.uk/uksi/2018/139/made',
          'http://www.hse.gov.uk/pubns/books/l56.htm',
          'http://www.legislation.gov.uk/uksi/1998/2451/contents/made'
        ],
        'summary' => 'These Regulations came into force on 6th April 2018 and amend the Gas Safety (Installation and Use) Regulations 1998. This Approved Code of Practice and guidance gives advice on how to meet the requirements of GSIUR and the amending regulations. The guidance is for anyone who may have a duty under the Gas Safety (Installation and Use) Regulations 1998.',
      ],
      [
        'id' => 2,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Pipelines Safety Regulations 1996 (PSR)',
        'links' => [
          'http://www.hse.gov.uk/gas/domestic/',
          'http://www.legislation.gov.uk/uksi/1996/825/contents/made'
        ],
        'summary' => 'These Regulations impose requirements on pipelines for purposes of health and safety. The requirements, with certain exceptions, cover any pipe or system of pipes for conveying fluids; this includes pipes supplying gas to premises (ie transmission pipes, distribution mains and service pipes) but excludes anything downstream of an emergency control (eg installation pipework, meters and other fittings, as covered by GSIUR).',
      ],
      [
        'id' => 3,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Gas Safety (Rights of Entry) Regulations 1996',
        'links' => [
          'http://www.legislation.gov.uk/uksi/1996/2535/made'
        ],
        'summary' => 'These regulations came into force on 1st November 1996 and apply to England, Scotland and Wales. They provide public gas transporters and relevant authorities with the right to enter premises in order to prevent gas escapes, examine an disconnect gas fitting and other related purposes.',
      ],
      [
        'id' => 4,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Gas Act 1986 and 1995 (GA)',
        'links' => [
          'https://www.legislation.gov.uk/ukpga/1986/44/contents',
          'https://www.legislation.gov.uk/ukpga/1995/45/contents'
        ],
        'summary' => 'The Gas Act 1995 updated provisions in the Gas Act 1986, including new licensing arrangements for public gas transporters and permitting competition in the domestic gas market. A number of safety issues are both directly and indirectly addressed, including detailed provisions (some new), inserted into the Gas Act 1986 (under Schedule 2B – the “gas code”) by the 1995 Act – GA 1995 Schedule 2 refers. These provisions include duties to notify connection/disconnection of service pipes, and disconnection of meters in certain circumstances; maintenance of service pipes; duties on public gas transporters in relation to certain gas escapes, and entry powers in specified circumstances.',
      ],
      [
        'id' => 5,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'The Gas and Electricity (Consumer Complaints Handling Standards) 2008',
        'links' => [
          'http://www.legislation.gov.uk/uksi/2008/1898/made'
        ],
        'summary' => 'These regulations came into force on 1st October 2008. These regulations do not apply to Northern Ireland. A simple plan before the work starts is usually enough to show that you have thought about health and safety.',
      ],
      [
        'id' => 6,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Smart Meter Installation Code of Practice (SMICoP)',
        'links' => [
          'http://www.smicop.co.uk/SitePages/Home.aspx'
        ],
        'summary' => 'The SMICoP specifies the minimum standards for Code Members to follow in relation to the customer facing aspects of the installation of Smart Metering Systems.',
      ],
      [
        'id' => 7,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Meter Asset Manager Code of Practice (MAMCoP)',
        'links' => [
          'https://www.ofgem.gov.uk/ofgem-publications/42356/4970-mamcopfinal.pdf',
          'https://www.ofgem.gov.uk/publications-and-updates/meter-asset-manager-code-practice'
        ],
        'summary' => 'The MAMCoP was first published in 2005; it was administered by Ofgem and advised by an industry expert group. It sets out the requirements for Meter Asset Managers (MAM) that wish to be accredited under the MAMCoP Registration scheme.',
      ],
      [
        'id' => 8,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Boiler Plus 2018',
        'links' => [
          'https://assets.publishing.service.gov.uk/government/uploads/system/uploads/attachment_data/file/718569/Boiler_Plus_Factsheet_v3.pdf'
        ],
        'summary' => 'Introduced in England by the Department for Business Energy and Industrial Strategy (BEIS) in April 2018, Boiler Plus set new minimum performance standards for domestic gas boilers and made fitting timers and room thermostats a requirement to reduce energy costs for consumers. Although Gas Safe registered installers haven’t had to undertake any additional training to comply with Boiler Plus, it is obviously important they understand the different options within the legislation.',
      ],
      [
        'id' => 9,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Institution of Gas Engineer and Managers - Standards',
        'links' => [
          'https://www.igem.org.uk/technical-standards/standards/)'
        ],
        'summary' => 'IGEMUP/1, 1A & 1B, Strength testing, tightness testing and direct purging each standard covers industrial commercial and domestic testing and purging requirements.<br />
          IGEMUP/2, Installation of pipework on industrial and commercial premises.<br />
          IGEMUP/7, Gas installations in timber-framed and light steel buildings.<br />
          IGEMUP/10, Installation of flued gas appliances in industrial and commercial premises incorporating specific requirements for appliances fired by bio-fuels. To Purchase.',
      ],
      [
        'id' => 10,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'UKLPG – Code of Practice 22, Design Installation and testing of LPG Piping Systems',
        'links' => [
          'https://www.uklpg.org/shop/codes-of-practice/code-of-practice-22'
        ],
        'summary' => 'Comprehensive code for LPG pipework above ground and below ground; updated in 2012; covers temperature, pressure and pipe sizing considerations; covers pipework assemblies, fittings etc. Guidance on construction of carbon, steel, copper and polyethylene pipework; provides guidance on UK legislation; covers the testing and installation of pipework. To Purchase.',
      ],
      [
        'id' => 11,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'IGEM/G/11 – The Gas Industry Unsafe Situations Procedure (GIUSP)',
        'links' => [
          'http://registeredgasengineer.co.uk/technical/igemg11-the-gas-industry-unsafe-situations-procedure/'
        ],
        'summary' => 'Institution of Gas Engineers and Managers have taken ownership of the Gas Industry Unsafe Situations Procedure (GIUSP) which provides guidance to trained competent operatives on how to deal with various situations which currently, or may in the future affect safety. It is now known as IGEM/G/11.',
      ],
      [
        'id' => 12,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Gas Safety (Management) Regulations 1996 (as amended) (GSMR)',
        'links' => [
          'http://www.legislation.gov.uk/uksi/1996/551/contents/made'
        ],
        'summary' => 'These Regulations deal with the management of the safe flow of gas (defined as any substance in a gaseous state which consists wholly or mainly of methane), whether in a single system or a network of connected systems. The Regulations make it unlawful for gas to be conveyed in a system or network without a safety case being prepared by the conveyor and accepted by HSE. The Regulations cover requirements for emergency response to and investigation of gas escapes.',
      ],
      [
        'id' => 13,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Gas Appliances (Safety) Regulations 1995 (GASR)',
        'links' => [
          'http://www.legislation.gov.uk/uksi/1995/1629/contents/made'
        ],
        'summary' => 'All new appliances burning gaseous fuel used for cooking, heating, hot water production, refrigeration, lighting or washing and having, where applicable, a normal water temperature not exceeding 105 degrees Celsius, are subject to the Gas Appliances (Safety) Regulations 1995, and must bear CE marking and be safe. However, gas appliances specifically designed for use in an industrial process carried out on industrial premises are not subject to the Gas Appliances (Safety) Regulations 1995, but must still be safe and bear the CE marking in conformity with other applicable Regulations which implement other EC directives, eg on machinery and pressure.',
      ],
      [
        'id' => 14,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Building Regulations and Building Standards (Scotland) Regulations',
        'links' => [
          'https://www.gov.uk/government/collections/approved-documents',
          'http://www.legislation.gov.uk/ssi/2004/406/contents/made'
        ],
        'summary' => 'Building Regulations address various aspects of building design/construction, including health and safety, energy conservations and the welfare and convenience of disabled people.',
      ],
      [
        'id' => 15,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Pressure Systems Safety Regulations 2000 (PSSR)',
        'links' => [
          'http://www.legislation.gov.uk/uksi/2000/128/contents/made'
        ],
        'summary' => 'The aim of these Regulations is to prevent serious injury from the hazard of stored energy, as a result of the failure of a pressure system, or one of its component parts. This guidance should be read in conjunction with the publication L82 A guide to the Pipelines Safety Regulations 1996. PSSR places duties on designers, manufacturers, importers, suppliers, installers and users (or owners in the case of mobile systems) of pressure systems. The Regulations also place certain duties on Competent Persons.',
      ]
    ];
  }
  
  public function RegisterofGasLegislationData(){
    return [
      'title' => 'Register of Gas Legislation',
      'heading' => 'As part of a Gas Work Management System this is a record of all appropriate legislative, regulatory, policy requirements and codes of practice, which are relevant to gas works.',
      'Legislation' => 'Register of Gas Legislation',
      'LinksUrl' => '/Legislation/View/Links/RegisterofGasLegislation',
      'sendUrl' => '/Legislation/Send',
      'Links' => [
        $this->RegisterofGasLegislationLinks()
      ]
    ];
  }
  
  public function RegisterofGasLegislation(){
    return view('Legislation.Legislation')->with($this->RegisterofGasLegislationData());
  }
  // End Legislation
  
  
  
  // Start Legislation
  public function RegisterofHealthandSafetyLegislationLinks(){
    return [
      [
        'id' => 1,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'The Health and Safety at Work etc. Act 1974',
        'links' => [
          'https://www.legislation.gov.uk/ukpga/1974/37',
          'http://www.hse.gov.uk/legislation/hswa.htm'
        ],
        'summary' => 'Main piece of UK health and safety legislation. This is used to secure the health and safety and welfare of persons at work, and for protecting others against risks to health of safety. Provide training, H & S Procedure and Handbook.',
      ],
      [
        'id' => 2,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'The Management of Health and Safety at Work Regulations 1999 (MHSWR)',
        'links' => [
          'https://www.legislation.gov.uk/uksi/1999/3242/contents/made'
        ],
        'summary' => 'The regulations were introduced to reinforce the Health and Safety at Work etc Act 1974. The MHSWR places duties on employers and employees including those who are clients, designers, principal contractors or other contractors. The duties overlap with those of CDM but where they go beyond CDM (for example concerning young people and expectant mothers) additional measures will be needed to comply fully with MHSWR.',
      ],
      [
        'id' => 3,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'The Health and Safety (Display Screen Equipment) Regulations 1992',
        'links' => [
          'http://www.legislation.gov.uk/uksi/1992/2792/contents/made',
          'http://www.hse.gov.uk/pubns/indg36.pdf'
        ],
        'summary' => 'These are the main regulations that aim to protect the health of people who work with DSE and ensure they use DSE correctly. We provide a training course and guidance on minimising risks in this area. Report any problems as soon as they occur so that changes can be made. Training and education.',
      ],
      [
        'id' => 4,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Construction (Design and Management) Regulations 2015 (CDM)',
        'links' => [
          'http://www.legislation.gov.uk/uksi/2015/51/contents/made',
          'http://www.hse.gov.uk/pubns/books/l153.htm'
        ],
        'summary' => 'Came into force on 6th April 2015, replacing CDM 2007. This places responsibilities on duty holders, including designers and contractors, and make them accountable for the consideration and management of health and safety on construction sites. This publication provides guidance on the legal requirements for CDM 2015 and describes the law that applies to the whole construction process on all construction projects from concept to completion.',
      ],
      [
        'id' => 5,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Construction Phase Plan (CPP)',
        'links' => [
          'http://www.hse.gov.uk/construction/cdm/faq/ccp.htm'
        ],
        'summary' => 'A CPP should be drawn up and be proportionate to the size and scale of the job. A simple plan before the work starts is usually enough to show that you have thought about health and safety.',
      ],
      [
        'id' => 6,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'RIDDOR – Reporting of Injuries, Diseases and Dangerous Occurrences Regulations 2013',
        'links' => [
          'http://www.legislation.gov.uk/uksi/2013/1471/contents/made',
          'http://www.hse.gov.uk/riddor/'
        ],
        'summary' => 'RIDDOR. These Regulations require employers to report specified occupational injuries, diseases and dangerous events to HSE. Certain gas incident are reportable by suppliers of gas through fixed pipe distribution systems/LPG suppliers, and gas installers are required to report certain dangerous gas appliances to HSE.',
      ],
      [
        'id' => 7,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'The Manual Handling Operations Regulations 1992',
        'links' => [
          'http://www.legislation.gov.uk/uksi/1992/2793/contents/made',
          'http://www.hse.gov.uk/pubns/books/l23.htm'
        ],
        'summary' => 'These Regulations state that employers are required to ensure that a suitable and sufficient assessment of all manual handling operations is undertaken. A training course and guidance on minimising risks in this area should be provided.',
      ],
      [
        'id' => 8,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'The Regulatory Reform (Fire Safety) Order 2005',
        'links' => [
          'http://www.legislation.gov.uk/uksi/2005/1541/contents/made',
          'http://www.hse.gov.uk/toolbox/fire.htm'
        ],
        'summary' => 'Taking reasonable steps to reduce the risk from fire and make sure people can escape safely if there is a fire.',
      ],
      [
        'id' => 9,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'The Workplace (Health, Safety and Welfare) Regulations 1992 (WHSR)',
        'links' => [
          'http://www.legislation.gov.uk/uksi/1992/3004/contents/made',
          'http://www.hse.gov.uk/pubns/books/l24.htm'
        ],
        'summary' => 'Requires employers to make provisions to ensure the health, safety and welfare of employees.',
      ],
      [
        'id' => 10,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Health and Safety (First Aid) Regulations 1981',
        'links' => [
          'http://www.legislation.gov.uk/uksi/1981/917/made',
          'http://www.hse.gov.uk/firstaid/legislation.htm'
        ],
        'summary' => 'Makes provision for employees to receive first aid treatment.',
      ],
      [
        'id' => 11,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Control of Substances Hazardous to Health Regulations 2002 (COSHH)',
        'links' => [
          'http://www.legislation.gov.uk/uksi/2002/2677/regulation/7/made',
          'http://www.hse.gov.uk/nanotechnology/coshh.htm'
        ],
        'summary' => 'Every work place is required to assess the risks and ensure that suitable control measures are put in place. Employees should be aware of the hazardous substances they work with and substance exposure limits.',
      ],
      [
        'id' => 12,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Work at Height Regulations 2005',
        'links' => [
          'http://www.legislation.gov.uk/uksi/2005/735/contents/made',
          'http://www.hse.gov.uk/work-at-height/the-law.htm'
        ],
        'summary' => 'To prevent death and injury caused by a fall from height. Make sure training and work is properly planned, supervised and carried out by competent people including right type of equipment.',
      ],
      [
        'id' => 13,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'HSE (Health and Safety Executive)',
        'links' => [
          'https://www.hse.gov.uk/'
        ],
        'summary' => 'This organisation oversee workplace health and safety in the UK.',
      ],
      [
        'id' => 14,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Control of Asbestos Regulations 2012',
        'links' => [
          'http://www.legislation.gov.uk/uksi/2012/632/contents/made',
          'http://www.hse.gov.uk/asbestos/regulations.htm
'
        ],
        'summary' => 'This came into force on the 6th April 2012, updating previous asbestos regulations to take account of the European Commission’s view that the UK had not fully implemented the EU Directive on exposure to asbestos (Directive 2009/148/EC). It covers managing and working with asbestos and the regulations give minimum standards for protecting employees from risks associated with exposure to asbestos.',
      ],
      [
        'id' => 15,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'The Personal Protective Equipment Regulations 2002 and the Personal Protective Equipment at Work Regulations 1992 (as amended)',
        'links' => [
          'http://www.legislation.gov.uk/uksi/2002/1144/contents/made',
          'http://www.hse.gov.uk/toolbox/ppe.htm'
        ],
        'summary' => 'The Personal Protective Equipment at Work Regulations 1992 are a set of regulations created under the Health and Safety at Work etc. Act 1974 which came into force in Great Britain on 1st January 1993. The regulations place a duty on every employer to ensure that suitable personal protective equipment is provided to employees who may be exposed to a risk to their health or safety while at work.',
      ],
      [
        'id' => 16,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Control of Noise at Work Regulations 2006',
        'links' => [
          'http://www.legislation.gov.uk/uksi/2005/1643/contents/made',
          'http://www.hse.gov.uk/NOISE/REGULATIONS.HTM'
        ],
        'summary' => 'The Control of Noise at Work Regulations 2005 (the Noise Regulations) came into force for all industry sectors in Great Britain on 6 April 2006 (except for the music and entertainment sectors where they came into force on 6 April 2008). The aim of the Noise Regulations is to ensure that workers\' hearing is protected from excessive noise at their place of work.',
      ],
      [
        'id' => 17,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Control of Lead Regulations 2002 (CLAW)',
        'links' => [
          'http://www.legislation.gov.uk/uksi/2002/2676/contents/made',
          'http://www.hse.gov.uk/lead/'
        ],
        'summary' => 'Working with lead can put your health at risk, causing symptoms including headaches, stomach pains and anaemia. Other serious health effects include kidney damage, nerve and brain damage and infertility.<Br /><Br />
        The Control of Lead at Work Regulations 2002 (CLAW) place a duty on employers to prevent, or where this is not reasonably practicable, to control employee exposure to lead.',
      ],
      [
        'id' => 18,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Provision and Use of Work Equipment Regulations 1998 (PUWER)',
        'links' => [
          'http://www.hse.gov.uk/work-equipment-machinery/puwer.htm',
          'http://www.legislation.gov.uk/uksi/1998/2306/made'
        ],
        'summary' => 'These Regulations, often abbreviated to PUWER, place duties on people and companies who own, operate or have control over work equipment. PUWER also places responsibilities on businesses and organisations whose employees use work equipment, whether owned by them or not. PUWER outlines requirements for equipment provide for use at work.',
      ],
      [
        'id' => 19,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Lifting Operations and Lifting Equipment Regulations (LOLER)',
        'links' => [
          'http://www.hse.gov.uk/work-equipment-machinery/loler.htm',
          'http://www.legislation.gov.uk/uksi/1998/2307/contents/made'
        ],
        'summary' => 'These regulations (often abbreviated to LOLER) place duties on people and companies who own, operate or have control over lifting equipment. This includes all businesses and organisations whose employees use equipment, whether owned by them or not. In most cases lifting equipment is also work equipment so the Provision and Use of Work Equipment Regulations (PUWER) will also apply (including inspection and maintenance).',
      ],
      [
        'id' => 20,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Electricity at Work Regulations 1989',
        'links' => [
          'http://www.legislation.gov.uk/uksi/1989/635/contents/made',
          'http://www.hse.gov.uk/pubns/books/hsr25.htm'
        ],
        'summary' => 'These regulations impose health and safety requirements with respect to electricity at work. It is relevant to all work activities and premises except certain offshore installations and particular ships. It will also be of interest and practical help primarily to engineers (including those involved in design, construction, operation or maintenance of electrical systems and equipment), technicians and their managers.',
      ],
      [
        'id' => 21,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Pressure Systems Safety Regulations 2000 (PSSR)',
        'links' => [
          'http://www.legislation.gov.uk/uksi/2000/128/contents/made',
          'http://www.hse.gov.uk/pubns/books/l122.htm'
        ],
        'summary' => 'The aim of these Regulations is to prevent serious injury from the hazard of stored energy, as a result of the failure of a pressure system, or one of its component parts.',
      ],
      [
        'id' => 22,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Health and Safety (Safety Signs and Signals) Regulations 1996 (SSR)',
        'links' => [
          'https://www.legislation.gov.uk/uksi/1996/341/contents/made',
          'http://www.hse.gov.uk/pubns/books/l64.htm'
        ],
        'summary' => 'These Regulations implement an EC Directive on the minimum requirements for the provision of safety and/or health signs at work. Under these Regulations, safety signs complying with specified descriptions must be provided where the risk assessment made under regulation 3 of the Management of Health and Safety at Work Regulations 1999 indicates that (residual) risks cannot be avoided or controlled in other ways.',
      ],
      [
        'id' => 23,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'Dangerous Substances and Explosive Atmospheres Regulations 2002 (DSEAR)',
        'links' => [
          'http://www.legislation.gov.uk/uksi/2002/2776/contents/made',
          'http://www.hse.gov.uk/fireandexplosion/dsear.htm'
        ],
        'summary' => 'These Regulations impose requirements for the purpose of eliminating or reducing risks to safety from fire, explosion or other events arising from the hazardous properties of a ‘dangerous substance’ in connection with work. This includes flammable gases, such as natural gas, propane and butane.',
      ],
      [
        'id' => 24,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'The Confined Spaces Regulations 1997',
        'links' => [
            'http://www.legislation.gov.uk/uksi/1997/1713/made',
            'http://www.hse.gov.uk/confinedspace/'
        ],
        'summary' => 'These Regulations apply when the risk assessment has identified that there are risks of serious injury due to work in confined spaces. The HSE defines a confined space as “a place which is substantially enclosed (though not always entirely), and where serious injury can occur from hazardous substances or conditions within the space or nearby (e.g. lack of oxygen).”',
      ],
      [
        'id' => 25,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'The Working Time Regulations 1998',
        'links' => [
            'http://www.legislation.gov.uk/uksi/1998/1833/contents/made',
            'https://www.hse.gov.uk/contact/faqs/workingtimedirective.htm'
        ],
        'summary' => 'The Working Time Directive was implemented into UK law through the Working Time Regulations 1998 (WTR’s). Principally aimed at safeguarding the health and safety of workers in the workplace, the Regulations provided a myriad of rights to workers such as the right to paid annual leave, the right to daily and weekly rest breaks to name a few. The Working Time Regs also impose a maximum on a worker’s weekly working hours of 48 hours. An employer has to keep a record of hours that an employee works.',
      ],
      [
        'id' => 26,
        'date' => '25/6/2021',
        'originator' => 'David Mooney',
        'source' => 'The Classification Labelling & Packaging of Chemicals 2015',
        'links' => [
            'http://www.legislation.gov.uk/uksi/2015/21/pdfs/uksi_20150021_en.pdf#:~:text=The%20Classification%2C%20Labelling%20and%20Packaging%20of%20Chemicals%20%28Amendments,control%20of%20classification%2C%20packaging%20and%20labelling%20of%20
https://www.hse.gov.uk/chemical-classification/legal/clp-regulation.htm'
        ],
        'summary' => 'The main objective of these regulations is to ensure suppliers of hazardous chemicals provide sufficient information on hazards of chemicals that they supply, so as to mitigate the risk of accidents happening in the workplace. Labels are there to help identify hazardous chemicals, and explain what the hazards are and how to avoid them. Packaging is also important to ensure that chemicals are stored and disposed of safely.',
      ]
    ];
  }
  
  public function RegisterofHealthandSafetyLegislationData(){
    return [
      'title' => 'Register of Health and Safety Legislation',
      'heading' => 'As part of a Health and Safety Management System records of all appropriate legislative, regulatory, policy requirements and codes of practice, which are relevant to the H & S aspects of its activities, products and services should be available',
      'Legislation' => 'Register of Health and Safety Legislation',
      'LinksUrl' => '/Legislation/View/Links/RegisterofHealthandSafetyLegislation',
      'sendUrl' => '/Legislation/Send',
      'Links' => [
        $this->RegisterofHealthandSafetyLegislationLinks()
      ]
    ];
  }
  
  public function RegisterofHealthandSafetyLegislation(){
    return view('Legislation.Legislation')->with($this->RegisterofHealthandSafetyLegislationData());
  }
  // End Legislation
}
