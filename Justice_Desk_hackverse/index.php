<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JusticeDesk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
  </head>
  
  <body>

	<!-- Top Logo section  -->
	  <div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="index.php">JusticeDesk</a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    	<div class="text">
					    		<span>Email</span>
						    	<span>harikamam@gmail.com</span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text">
						    	<span>Call</span>
						    	<span>Call Us: + 91 XXXXXXXXX</span>
						    </div>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>

	<!-- Content bar -->
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="index.html" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="BNC_Sections.html" class="nav-link">BNC Sections</a></li>
	        	<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
				<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
			  <li class="nav-item"><a href="/JusticeDesk_collage_project/lawer_access/login.php" class="nav-link">Cases list</a></li>
			  </ul>
	      </div>
		
	<form class="form-inline my-2 my-lg-0 ml-auto">
					<input type="text" id="searchBox" class="form-control mr-sm-2" onkeyup="showSuggestions()" placeholder="Search" aria-label="Search">
					<div id="suggestions" class="list-group position-absolute" style="top: 100%; z-index: 1000;"></div>
					<script>
                        let suggestions = {
								"BNS Section 1 - Short title, extent and commencement.": "BNC_SECTIONS/BNCSECTION1.html",
								"BNS Section 2 - Definitions.": "BNC_SECTIONS/BNCSECTION2.HTML",
								"BNS Section 3 - General Explanations and expressions.": "BNC_SECTIONS/BNCSECTION3.HTML",
								"BNS Section 4 - Punishments.": "BNC_SECTIONS/BNCSECTION4.html",
								"BNS Section 5 - Commutation of sentence of death or imprisonment for life.": "BNC_SECTIONS/BNCSECTION5.HTML",
								"BNS Section 6 - Fractions of terms of punishment.": "BNC_SECTIONS/BNCSECTION6.HTML",
								"BNS Section 7 - Sentence may be (in certain cases of imprisonment) wholly or partly rigorous or simple.": "BNC_SECTIONS/BNCSECTION7.html",
								"BNS Section 8 - Amount of fine, liability in default of payment of fine, etc.": "BNC_SECTIONS/BNCSECTION8.HTML",
								"BNS Section 9 - Limit of punishment of offence made up of several offences.": "BNC_SECTIONS/BNCSECTION9.HTML",
								"BNS Section 10 - Punishment of person guilty of one of several offences, the judgment stating that it is doubtful of which.": "BNC_SECTIONS/BNCSECTION10.HTML",
								"BNS Section 11 - Solitary confinement.": "BNC_SECTIONS/BNCSECTION11.HTML",
								"BNS Section 12 - Limit of solitary confinement.": "BNC_SECTIONS/BNCSECTIO12.HTML",
								"BNS Section 13 - Enhanced punishment for certain offences after previous conviction.": "BNC_SECTIONS/BNCSECTION13.HTML",
								"BNS Section 14 - Act done by a person bound, or by mistake of fact believing himself bound, by law": "BNC_SECTIONS/BNCSECTION14.HTML",
								"BNS Section 15 - Act of Judge when acting judicially": "BNC_SECTIONS/BNCSECTION15.HTML",
								"BNS Section 16 - Act done pursuant to the judgment or order of Court": "BNC_SECTIONS/BNCSECTION16.html",
								"BNS Section 17 - Act done by a person justified, or by mistake of fact believing himself, justified, by law": "BNC_SECTIONS/BNCSECTION17.HTML",
								"BNS Section 18 - Accident in doing a lawful act": "BNC_SECTIONS/BNCSECTION18.HTML",
								"BNS Section 19 - Act likely to cause harm, but done without criminal intent, and to prevent other harm": "BNC_SECTIONS/BNCSECTION19.HTML",
								"BNS Section 20 - Act of a child under seven years of age": "BNC_SECTIONS/BNCSECTION20.HTML",
								"BNS Section 21 - Act of a child above seven and under twelve of immature understanding": "BNC_SECTIONS/BNCSECTION21.HTML",
								"BNS Section 22 - Act of a person of mental illness": "BNC_SECTIONS/BNCSECTION022.html",
								"BNS Section 23 - Act of a person incapable of judgment by reason of intoxication caused against his will": "BNC_SECTIONS/BNCSECTION23.HTML",
								"BNS Section 24 - Offence requiring a particular intent or knowledge committed by one who is intoxicated": "BNC_SECTIONS/BNCSECTION24.HTML",
								"BNS Section 25 - Act not intended and not known to be likely to cause death or grievous hurt, done by consent": "BNC_SECTIONS/BNCSECTION25.HTML",
								"BNS Section 26 - Act not intended to cause death, done by consent in good faith for person’s benefit": "BNC_SECTIONS/BNCSECTION26.HTML",
								"BNS Section 27 - Act done in good faith for benefit of child or person with mental illness, by or by consent of guardian": "BNC_SECTIONS/BNCSECTION27.HTML",
								"BNS Section 28 - Consent known to be given under fear or misconception": "BNC_SECTIONS/BNCSECTION28.HTML",
								"BNS Section 29 - Exclusion of acts which are offences independently of harm caused": "BNC_SECTIONS/BNCSECTION29.HTML",
								"BNS Section 30 - Act done in good faith for benefit of a person without consent": "BNC_SECTIONS/BNCSECTION30.HTML",
								"BNS Section 31 - Communication made in good faith": "BNC_SECTIONS/BNCSECTION31.HTML",
								"BNS Section 32 - Act to which a person compelled by threats": "BNC_SECTIONS/BNCSECTION32.HTML",
								"BNS Section 33 - Act causing slight harm": "BNC_SECTIONS/BNCSECTION33.HTML",
								"BNS Section 34 - Things done in private defence": "BNC_SECTIONS/BNCSECTION34.HTML",
								"BNS Section 35 - Right of private defence of the body and of property": "BNC_SECTIONS/BNCSECTION35.HTML",
								"BNS Section 36 - Right of private defence against the act of a person with mental illness, etc": "BNC_SECTIONS/BNCSECTION36.HTML",
								"BNS Section 37 - Acts against which there is no right of private defence": "BNC_SECTIONS/BNCSECTION37.HTML",
								"BNS Section 38 - When the right of private defence of the body extends to causing death": "BNC_SECTIONS/BNCSECTION38.HTML",
								"BNS Section 39 - When such right extends to causing any harm other than death": "BNC_SECTIONS/BNCSECTION39.HTML",
								"BNS Section 40 - Commencement and continuance of the right of private defence of the body": "BNC_SECTIONS/BNCSECTION40.HTML",
								"BNS Section 41 - When the right of private defence of property extends to causing death": "BNC_SECTIONS/BNCSECTION41.HTML",
								"BNS Section 42 - When such right extends to causing any harm other than death": "BNC_SECTIONS/BNCSECTION42.HTML",
								"BNS Section 43 - Commencement and continuance of the right of private defence of property": "BNC_SECTIONS/BNCSECTION43.HTML",
								"BNS Section 44 - Right of private defence against deadly assault when there is risk of harm to innocent person": "BNC_SECTIONS/BNCSECTION44.HTML",
								"BNS Section 45 - Abetment of a thing": "BNC_SECTIONS/BNCSECTION45.HTML",
								"BNS Section 46 - Abettor": "BNC_SECTIONS/BNCSECTION46.HTML",
								"BNS Section 47 - Abetment in India of offences outside India": "BNC_SECTIONS/BNCSECTION47.HTML",
								"BNS Section 48 - Abetment outside India for offence in India": "BNC_SECTIONS/BNCSECTION48.HTML",
								"BNS Section 49 - Punishment of abetment if the act abetted is committed in consequence and where no express provision is made for its punishment": "BNC_SECTIONS/BNCSECTION49.HTML",
								"BNS Section 50 - Punishment of abetment if person abetted does act with different intention from that of abettor": "BNC_SECTIONS/BNCSECTION50.HTML",
								"BNS Section 51 - Liability of abettor when one act abetted and different act done": "BNC_SECTIONS/BNCSECTION51.HTML",
								"BNS Section 52 - Abettor when liable to cumulative punishment for act abetted and for act done": "BNC_SECTIONS/BNCSECTION52.HTML",
								"BNS Section 53 - Liability of abettor for an effect caused by the act abetted different from that intended by the abettor": "BNC_SECTIONS/BNCSECTION53.HTML",
								"BNS Section 54 - Abettor present when offence is committed": "BNC_SECTIONS/BNCSECTION54.HTML",
								"BNS Section 55 - Abetment of offence punishable with death or imprisonment for life": "BNC_SECTIONS/BNCSECTION55.HTML",
								"BNS Section 56 - Abetment of offence punishable with imprisonment": "BNC_SECTIONS/BNCSECTION56.HTML",
								"BNS Section 57 - Abetting commission of offence by the public or by more than ten persons": "BNC_SECTIONS/BNCSECTION57.HTML",
								"BNS Section 58 - Concealing design to commit offence punishable with death or imprisonment for life": "BNC_SECTIONS/BNCSECTION58.HTML",
								"BNS Section 59 - Public servant concealing design to commit offence which it is his duty to prevent": "BNC_SECTIONS/BNCSECTION59.HTML",
								"BNS Section 60 - Concealing design to commit offence punishable with imprisonment": "BNC_SECTIONS/BNCSECTION60.HTML",
								"BNS Section 61 - Criminal conspiracy": "BNC_SECTIONS/BNCSECTION61.HTML",
								"BNS Section 62 - Punishment for attempting to commit offences punishable with imprisonment for life or other imprisonment": "BNC_SECTIONS/BNCSECTION62.HTML",
								"BNS Section 63 - Rape": "BNC_SECTIONS/BNCSECTION63.HTML",
								"BNS Section 64 - Punishment for rape": "BNC_SECTIONS/BNCSECTION64.HTML",
								"BNS Section 65 - Punishment for rape in certain cases": "BNC_SECTIONS/BNCSECTION65.HTML",
								"BNS Section 66 - Punishment for causing death or resulting in persistent vegetative state of victim": "BNC_SECTIONS/BNCSECTION66.HTML",
								"BNS Section 67 - Sexual intercourse by husband upon his wife during separation or by a person in authority": "BNC_SECTIONS/BNCSECTION67.HTML",
								"BNS Section 68 - Sexual intercourse by a person in authority": "BNC_SECTIONS/BNCSECTION68.HTML",
								"BNS Section 69 - Sexual intercourse by employing deceitful means etc": "BNC_SECTIONS/BNCSECTION69.HTML",
								"BNS Section 70 - Gang rape": "BNC_SECTIONS/BNCSECTION70.HTML",
								"BNS Section 71 - Punishment for repeat offenders": "BNC_SECTIONS/BNCSECTION71.HTML",
								"BNS Section 72 - Disclosure of identity of the victim of certain offences, etc": "BNC_SECTIONS/BNCSECTION72.HTML",
								"BNS Section 73 - Printing or publishing any matter relating to Court proceedings without permission.": "BNC_SECTIONS/BNCSECTION73.HTML",
								"BNS Section 74 - Assault or criminal force to woman with intent to outrage her modesty": "BNC_SECTIONS/BNCSECTION74.HTML",
								"BNS Section 75 - Sexual harassment and punishment for sexual harassment": "BNC_SECTIONS/BNCSECTION75.HTML",
								"BNS Section 76 - Assault or use of criminal force to woman with intent to disrobe": "BNC_SECTIONS/BNCSECTION76.HTML",
								"BNS Section 77 - Voyeurism": "BNC_SECTIONS/BNCSECTION77.HTML",
								"BNS Section 78 - Stalking": "BNC_SECTIONS/BNCSECTION78.HTML",
								"BNS Section 79 - Word, gesture or act intended to insult the modesty of a woman": "BNC_SECTIONS/BNCSECTION79.HTML",
								"BNS Section 80 - Dowry death": "BNC_SECTIONS/BNCSECTION80.HTML",
								"BNS Section 81 - Cohabitation caused by a man deceitfully inducing a belief of lawful marriage": "BNC_SECTIONS/BNCSECTION81.HTML",
								"BNS Section 82 - Marrying again during lifetime of husband or wife": "BNC_SECTIONS/BNCSECTION82.HTML",
								"BNS Section 83 - Marriage ceremony fraudulently gone through without lawful marriage": "BNC_SECTIONS/BNCSECTION83.HTML",
								"BNS Section 84 - Enticing or taking away or detaining with criminal intent a married woman": "BNC_SECTIONS/BNCSECTION84.HTML",
								"BNS Section 85 - Husband or relative of husband of a woman subjecting her to cruelty": "BNC_SECTIONS/BNCSECTION85.HTML",
								"BNS Section 86 - Cruelty defined": "BNC_SECTIONS/BNCSECTION86.HTML",
								"BNS Section 87 - Kidnapping, abducting or inducing woman to compel her marriage, etc": "BNC_SECTIONS/BNCSECTION87.HTML",
								"BNS Section 88 - Causing miscarriage": "BNC_SECTIONS/BNCSECTION88.HTML",
								"BNS Section 89 - Causing miscarriage without woman’s consent": "BNC_SECTIONS/BNCSECTION89.HTML",
								"BNS Section 90 - Death caused by act done with intent to cause miscarriage": "BNC_SECTIONS/BNCSECTION90.HTML",
								"BNS Section 91 - Act done with intent to prevent child being born alive or to cause it to die after birth": "BNC_SECTIONS/BNCSECTION91.HTML",
								"BNS Section 92 - Causing death of quick unborn child by act amounting to culpable homicide": "BNC_SECTIONS/BNCSECTION92.HTML",
								"BNS Section 93 - Exposure and abandonment of child under twelve years, by parent or person having care of it": "BNC_SECTIONS/BNCSECTION93.HTML",
								"BNS Section 94 - Concealment of birth by secret disposal of dead body": "BNC_SECTIONS/BNCSECTION94.HTML",
								"BNS Section 95 - Hiring, employing or engaging a child to commit an offence": "BNC_SECTIONS/BNCSECTION95.HTML",
								"BNS Section 96 - Procuration of child": "BNC_SECTIONS/BNCSECTION96.HTML",
								"BNS Section 97 - Kidnapping or abducting child under ten years with intent to steal from its person": "BNC_SECTIONS/BNCSECTION97.HTML",
								"BNS Section 98 - Selling child for purposes of prostitution, etc": "BNC_SECTIONS/BNCSECTION98.HTML",
								"BNS Section 99 - Buying child for purposes of prostitution, etc": "BNC_SECTIONS/BNCSECTION99.HTML",
								"BNS Section 100 - Culpable homicide": "BNC_SECTIONS/BNCSECTION100.HTML",
								"BNS Section 101 - Murder": "BNC_SECTIONS/BNCSECTION101.html",
								"BNS Section 102 - Culpable homicide by causing death of person other than person whose death was intended": "BNC_SECTIONS/BNCSECTION102.html",
								"BNS Section 103 - Punishment for murder": "BNC_SECTIONS/BNCSECTION103.html",
								"BNS Section 104 - Punishment for murder by life-convict": "BNC_SECTIONS/BNCSECTION104.html",
								"BNS Section 105 - Punishment for culpable homicide not amounting to murder": "BNC_SECTIONS/BNCSECTION105.html",
								"BNS Section 106 - Causing death by negligence": "BNC_SECTIONS/BNCSECTION106.HTML",
								"BNS Section 107 - Abetment of suicide of child or person with mental illness": "BNC_SECTIONS/BNCSECTION107.html",
								"BNS Section 108 - Abetment of suicide": "BNC_SECTIONS/BNCSECTION108.html",
								"BNS Section 109 - Attempt to murder": "BNC_SECTIONS/BNCSECTION109.html",
								"BNS Section 110 - Attempt to commit culpable homicide": "BNC_SECTIONS/BNCSECTION110.html",
								"BNS Section 111 - Organised crime": "BNC_SECTIONS/BNCSECTION111.html",
								"BNS Section 112 - Petty organised crime or organised in general": "BNC_SECTIONS/BNCSECTION112.html",
								"BNS Section 113 - Offence of terrorist act": "BNC_SECTIONS/BNCSECTION113.html",
								"BNS Section 114 - Hurt": "BNC_SECTIONS/BNCSECTION114.html",
								"BNS Section 115 - Voluntarily causing hurt": "BNC_SECTIONS/BNCSECTION115.html",
								"BNS Section 116 - Grievous hurt": "BNC_SECTIONS/BNCSECTION116.html",
								"BNS Section 117 - Voluntarily causing grievous hurt": "BNC_SECTIONS/BNCSECTION117.html",
								"BNS Section 118 - Voluntarily causing hurt or grievous hurt by dangerous weapons or means": "BNC_SECTIONS/BNCSECTION118.html",
								"BNS Section 119 - Voluntarily causing hurt or grievous hurt to extort property, or to constrain to an illegal to an act": "BNC_SECTIONS/BNCSECTION119.html",
								"BNS Section 120 - Voluntarily causing hurt or grievous hurt to extort confession, or to compel restoration of property": "BNC_SECTIONS/BNCSECTION120.html",
								"BNS Section 121 - Voluntarily causing hurt or grievous hurt to deter public servant from his duty": "BNC_SECTIONS/BNCSECTION121.html",
								"BNS Section 122 - Voluntarily causing hurt or grievous hurt on provocation": "BNC_SECTIONS/BNCSECTION122.html",
								"BNS Section 123 - Causing hurt by means of poison, etc , with intent to commit an offence": "BNC_SECTIONS/BNCSECTION123.html",
								"BNS Section 124 - Voluntarily causing grievous hurt by use of acid, etc": "BNC_SECTIONS/BNCSECTION124.html",
								"BNS Section 125 - Act endangering life or personal safety of others": "BNC_SECTIONS/BNCSECTION125.html",
								"BNS Section 126 - Wrongful restraint": "BNC_SECTIONS/BNCSECTION126.html",
								"BNS Section 127 - Wrongful confinement": "BNC_SECTIONS/BNCSECTION127.html",
								"BNS Section 128 - Force": "BNC_SECTIONS/BNCSECTION128.html",
								"BNS Section 129 - Criminal force": "BNC_SECTIONS/BNCSECTION129.html",
								"BNS Section 130 - Assault": "BNC_SECTIONS/BNCSECTION130.html",
								"BNS Section 131 - Punishment for assault or criminal force otherwise than on grave provocation": "BNC_SECTIONS/BNCSECTION131.html",
								"BNS Section 132 - Assault or criminal force to deter public servant from discharge of his duty": "BNC_SECTIONS/BNCSECTION132.html",
								"BNS Section 133 - Assault or criminal force with intent to dishonor person, otherwise than on grave provocation": "BNC_SECTIONS/BNCSECTION133.html",
								"BNS Section 134 - Assault or criminal force in attempt to commit theft of property carried by a person": "BNC_SECTIONS/BNCSECTION134.html",
								"BNS Section 135 - Assault or criminal force in attempt wrongfully to confine a person": "BNC_SECTIONS/BNCSECTION135.html",
								"BNS Section 136 - Assault or criminal force on grave provocation": "BNC_SECTIONS/BNCSECTION136.html",
								"BNS Section 137 - Kidnapping": "BNC_SECTIONS/BNCSECTION137.html",
								"BNS Section 138 - Abduction": "BNC_SECTIONS/BNCSECTION138.HTML",
								"BNS Section 139 - Kidnapping or maiming a child for purposes of begging": "BNC_SECTIONS/BNCSECTION139.html",
								"BNS Section 140 - Kidnapping or abducting in order to murder or for ransom etc": "BNC_SECTIONS/BNCSECTION140.html",
								"BNS Section 141 - Importation of girl or boy from foreign country": "BNC_SECTIONS/BNCSECTION141.html",
								"BNS Section 142 - Wrongfully concealing or keeping in confinement, kidnapped or abducted person": "BNC_SECTIONS/BNCSECTION142.html",
								"BNS Section 143 - Trafficking of person": "BNC_SECTIONS/BNCSECTION143.html",
								"BNS Section 144 - Exploitation of a trafficked person": "BNC_SECTIONS/BNCSECTION144.html",
								"BNS Section 145 - Habitual dealing in slaves": "BNC_SECTIONS/BNCSECTION145.html",
								"BNS Section 146 - Unlawful compulsory labour": "BNC_SECTIONS/BNCSECTION146.html",
								"BNS Section 147 - Waging, or attempting to wage war, or abetting waging of war, against the Government of India": "BNC_SECTIONS/BNCSECTION147.HTML",
								"BNS Section 148 - Conspiracy to commit offences punishable by section 145": "BNC_SECTIONS/BNCSECTION148.HTML",
								"BNS Section 149 - Collecting arms, etc , with intention of waging war against the Government of India": "BNC_SECTIONS/BNCSECTION149.HTML",
								"BNS Section 150 - Concealing with intent to facilitate design to wage war": "BNC_SECTIONS/BNCSECTION150.HTML",
								"BNS Section 151 - Assaulting President, Governor, etc , with intent to compel or restrain the exercise of any lawful power": "BNC_SECTIONS/BNCSECTION151.HTML",
								"BNS Section 152 - Acts endangering sovereignty unity and integrity of India": "BNC_SECTIONS/BNCSECTION152.HTML",
								"BNS Section 153 - Waging war against Government of any foreign State at peace with the Government of India": "BNC_SECTIONS/BNCSECTION153.HTML",
								"BNS Section 154 - Committing depredation on territories of foreign State at peace with the Government of India": "BNC_SECTIONS/BNCSECTION154.HTML",
								"BNS Section 155 - Receiving property taken by war or depredation mentioned in sections 153 and 154": "BNC_SECTIONS/BNCSECTION155.HTML",
								"BNS Section 156 - Public servant voluntarily allowing prisoner of state or war to escape": "BNC_SECTIONS/BNCSECTION156.HTML",
								"BNS Section 157 - Public servant negligently suffering such prisoner to escape": "BNC_SECTIONS/BNCSECTION157.HTML",
								"BNS Section 158 - Aiding escape of, rescuing or harbouring such prisoner": "BNC_SECTIONS/BNCSECTION158.HTML",
								"BNS Section 159 - Abetting mutiny, or attempting to seduce a soldier, sailor or airman from his duty": "BNC_SECTIONS/BNCSECTION159.HTML",
								"BNS Section 160 - Abetment of mutiny, if mutiny is committed in consequence thereof": "BNC_SECTIONS/BNCSECTION160.HTML",
								"BNS Section 161 - Abetment of assault by soldier, sailor or airman on his superior officer, when in execution of his office": "BNC_SECTIONS/BNCSECTION161.HTML",
								"BNS Section 162 - Abetment of such assault, if the assault committed": "BNC_SECTIONS/BNCSECTION162.HTML",
								"BNS Section 163 - Abetment of desertion of soldier, sailor or airman": "BNC_SECTIONS/BNCSECTION163.HTML",
								"BNS Section 164 - Harbouring deserter": "BNC_SECTIONS/BNCSECTION164.HTML",
								"BNS Section 165 - Deserter concealed on board merchant vessel through negligence of master": "BNC_SECTIONS/BNCSECTION165.HTML",
								"BNS Section 166 - Abetment of act of insubordination by soldier, sailor or airman": "BNC_SECTIONS/BNCSECTION166.HTML",
								"BNS Section 167 - Persons subject to certain Acts": "BNC_SECTIONS/BNCSECTION167.HTML",
								"BNS Section 168 - Wearing garb or carrying token used by soldier, sailor or airman": "BNC_SECTIONS/BNCSECTION168.HTML",
								"BNS Section 169 - Candidate, electoral right defined": "BNC_SECTIONS/BNCSECTION169.HTML",
								"BNS Section 170 - Bribery": "BNC_SECTIONS/BNCSECTION170.HTML",
								"BNS Section 171 - Undue influence at elections": "BNC_SECTIONS/BNCSECTION171.HTML",
								"BNS Section 172 - Personation at elections": "BNC_SECTIONS/BNCSECTION172.HTML",
								"BNS Section 173 - Punishment for bribery": "BNC_SECTIONS/BNCSECTION173.HTML",
								"BNS Section 174 - Punishment for undue influence or personation at an election": "BNC_SECTIONS/BNCSECTION174.HTML",
								"BNS Section 175 - False statement in connection with an election": "BNC_SECTIONS/BNCSECTION175.HTML",
								"BNS Section 176 - Illegal payments in connection with an election": "BNC_SECTIONS/BNCSECTION176.HTML",
								"BNS Section 177 - Failure to keep election accounts": "BNC_SECTIONS/BNCSECTION177.HTML",
								"BNS Section 178 - Counterfeiting coin, government stamps, currency-notes or bank-notes": "BNC_SECTIONS/BNCSECTION178.HTML",
								"BNS Section 179 - Using as genuine, forged or counterfeit coin, Government stamp, currency-notes or bank notes": "BNC_SECTIONS/BNCSECTION179.HTML",
								"BNS Section 180 - Possession of forged or counterfeit coin, Government stamp, currency-notes or bank-notes": "BNC_SECTIONS/BNCSECTION180.HTML",
								"BNS Section 181 - Making or possessing instruments or materials for forging or counterfeiting coin, Government stamp, currency notes or bank-notes": "BNC_SECTIONS/BNCSECTION181.HTML",
								"BNS Section 182 - Making or using documents resembling currency-notes or bank-notes": "BNC_SECTIONS/BNCSECTION182.HTML",
								"BNS Section 183 - Effacing writing from substance bearing Government stamp, or removing from document a stamp used for it, with intent to cause loss to Government": "BNC_SECTIONS/BNCSECTION183.HTML",
								"BNS Section 184 - Using Government stamp known to have been before used": "BNC_SECTIONS/BNCSECTION184.HTML",
								"BNS Section 185 - Erasure of mark denoting that stamp has been used": "BNC_SECTIONS/BNCSECTION185.HTML",
								"BNS Section 186 - Prohibition of fictitious stamps": "BNC_SECTIONS/BNCSECTION186.HTML",
								"BNS Section 187 - Person employed in mint causing coin to be of different weight or composition from that fixed by law": "BNC_SECTIONS/BNCSECTION187.HTML",
								"BNS Section 188 - Unlawfully taking coining instrument from mint": "BNC_SECTIONS/BNCSECTION188.HTML",
								"BNS Section 189 - Unlawful assembly": "BNC_SECTIONS/BNCSECTION189.HTML",
								"BNS Section 190 - Every member of unlawful assembly guilty of offence committed in prosecution of common object": "BNC_SECTIONS/BNCSECTION190.HTML",
								"BNS Section 191 - Rioting": "BNC_SECTIONS/BNCSECTION191.HTML",
								"BNS Section 192 - Wantonly giving provocation with intent to cause riot- if rioting be committed; if not committed": "BNC_SECTIONS/BNCSECTION192.HTML",
								"BNS Section 193 - Liability of owner, occupier etc , of land on which an unlawful assembly or riot takes place": "BNC_SECTIONS/BNCSECTION193.HTML",
								"BNS Section 194 - Affray": "BNC_SECTIONS/BNCSECTION194.HTML",
								"BNS Section 195 - Assaulting or obstructing public servant when suppressing riot, etc": "BNC_SECTIONS/BNCSECTION195.HTML",
								"BNS Section 196 - Promoting enmity between different groups on ground of religion, race, place of birth, residence, language, etc , and doing acts prejudicial to maintenance of harmony": "BNC_SECTIONS/BNCSECTION196.HTML",
								"BNS Section 197 - Imputations, assertions prejudicial to national integration": "BNC_SECTIONS/BNCSECTION197.HTML",
								"BNS Section 198 - Public servant disobeying law, with intent to cause injury to any person": "BNC_SECTIONS/BNCSECTION198.HTML",
								"BNS Section 199 - Public servant disobeying direction under law": "BNC_SECTIONS/BNCSECTION199.HTML",
								"BNS Section 200 - Punishment for non-treatment of victim": "BNC_SECTIONS/BNCSECTION200.HTML",
								"BNS Section 201 - Public servant framing an incorrect document with intent to cause injury": "BNC_SECTIONS/BNCSECTION201.HTML",
								"BNS Section 202 - Public servant unlawfully engaging in trade": "BNC_SECTIONS/BNCSECTION202.HTML",
								"BNS Section 203 - Public servant unlawfully buying or bidding for property": "BNC_SECTIONS/BNCSECTION203.HTML",
								"BNS Section 204 - Personating a public servant": "BNC_SECTIONS/BNCSECTION204.HTML",
								"BNS Section 205 - Wearing garb or carrying token used by public servant with fraudulent intent": "BNC_SECTIONS/BNCSECTION205.HTML",
								"BNS Section 206 - Absconding to avoid service of summons or other proceeding": "BNC_SECTIONS/BNCSECTION206.HTML",
								"BNS Section 207 - Preventing service of summons or other proceeding, or preventing publication thereof": "BNC_SECTIONS/BNCSECTION207.HTML",
								"BNS Section 208 - Non-attendance in obedience to an order from public servant": "BNC_SECTIONS/BNCSECTION208.HTML",
								"BNS Section 209 - Non-appearance in response to a proclamation under section 82 of Act of 2023": "BNC_SECTIONS/BNCSECTION209.HTML",
								"BNS Section 210 - Omission to produce document to public servant by person legally bound to produce it": "BNC_SECTIONS/BNCSECTION210.HTML",
								"BNS Section 211 - Omission to give notice or information to public servant by person legally bound to give it": "BNC_SECTIONS/BNCSECTION211.HTML",
								"BNS Section 212 - Furnishing false information": "BNC_SECTIONS/BNCSECTION212.HTML",
								"BNS Section 213 - Refusing oath or affirmation when duly required by public servant to make it": "BNC_SECTIONS/BNCSECTION213.HTML",
								"BNS Section 214 - Refusing to answer public servant authorised to question": "BNC_SECTIONS/BNCSECTION214.HTML",
								"BNS Section 215 - Refusing to sign statement": "BNC_SECTIONS/BNCSECTION215.HTML",
								"BNS Section 216 - False statement on oath or affirmation to public servant or person authorised to administer an oath or affirmation": "BNC_SECTIONS/BNCSECTION216.HTML",
								"BNS Section 217 - False information, with intent to cause public servant to use his lawful power to the injury of another person": "BNC_SECTIONS/BNCSECTION217.HTML",
								"BNS Section 218 - Resistance to the taking of property by the lawful authority of a public servant": "BNC_SECTIONS/BNCSECTION218.HTML",
								"BNS Section 219 - Obstructing sale of property offered for sale by authority of public servant": "BNC_SECTIONS/BNCSECTION219.HTML",
								"BNS Section 220 - Illegal purchase or bid for property offered for sale by authority of public servant": "BNC_SECTIONS/BNCSECTION220.HTML",
								"BNS Section 221 - Obstructing public servant in discharge of public functions": "BNC_SECTIONS/BNCSECTION221.HTML",
								"BNS Section 222 - Omission to assist public servant when bound by law to give assistance": "BNC_SECTIONS/BNCSECTION222.HTML",
								"BNS Section 223 - Disobedience to order duly promulgated by public servant": "BNC_SECTIONS/BNCSECTION223.HTML",
								"BNS Section 224 - Threat of injury to public servant": "BNC_SECTIONS/BNCSECTION224.HTML",
								"BNS Section 225 - Threat of injury to induce person to refrain from applying for protection to public servant": "BNC_SECTIONS/BNCSECTION225.HTML",
								"BNS Section 226 - Attempt to commit suicide to compel or restraint exercise of lawful power": "BNC_SECTIONS/BNCSECTION226.HTML",
								"BNS Section 227 - Giving false evidence": "BNC_SECTIONS/BNCSECTION227.HTML",
								"BNS Section 228 - Fabricating false evidence": "BNC_SECTIONS/BNCSECTION228.HTML",
								"BNS Section 229 - Punishment for false evidence": "BNC_SECTIONS/BNCSECTION229.HTML",
								"BNS Section 230 - Giving or fabricating false evidence with intent to procure conviction of capital offence": "BNC_SECTIONS/BNCSECTION230.HTML",
								"BNS Section 231 - Giving or fabricating false evidence with intent to procure conviction of offence punishable with imprisonment for life or imprisonment": "BNC_SECTIONS/BNCSECTION231.HTML",
								"BNS Section 232 - Threatening any person to give false evidence": "BNC_SECTIONS/BNCSECTION232.HTML",
								"BNS Section 233 - Using evidence known to be false": "BNC_SECTIONS/BNCSECTION233.HTML",
								"BNS Section 234 - Issuing or signing false certificate": "BNC_SECTIONS/BNCSECTION234.HTML",
								"BNS Section 235 - Using as true a certificate known to be false": "BNC_SECTIONS/BNCSECTION235.HTML",
								"BNS Section 236 - False statement made in declaration which is by law receivable as evidence": "BNC_SECTIONS/BNCSECTION236.HTML",
								"BNS Section 237 - Using as true such declaration knowing it to be false": "BNC_SECTIONS/BNCSECTION237.HTML",
								"BNS Section 238 - Causing disappearance of evidence of offence, or giving false information to screen offender": "BNC_SECTIONS/BNCSECTION238.HTML",
								"BNS Section 239 - Intentional omission to give information of offence by person bound to inform": "BNC_SECTIONS/BNCSECTION239.HTML",
								"BNS Section 240 - Giving false information respecting an offence committed": "BNC_SECTIONS/BNCSECTION240.HTML",
								"BNS Section 241 - Destruction of document to prevent its production as evidence": "BNC_SECTIONS/BNCSECTION241.HTML",
								"BNS Section 242 - False personation for purpose of act or proceeding in suit or prosecution": "BNC_SECTIONS/BNCSECTION242.HTML",
								"BNS Section 243 - Fraudulent removal or concealment of property to prevent its seizure as forfeited or in execution": "BNC_SECTIONS/BNCSECTION243.HTML",
								"BNS Section 244 - Fraudulent claim to property to prevent its seizure as forfeited or in execution": "BNC_SECTIONS/BNCSECTION244.HTML",
								"BNS Section 245 - Fraudulently suffering decree for sum not due": "BNC_SECTIONS/BNCSECTION245.HTML",
								"BNS Section 246 - Dishonestly making false claim in Court": "BNC_SECTIONS/BNCSECTION246.HTML",
								"BNS Section 247 - Fraudulently obtaining decree for sum not due": "BNC_SECTIONS/BNCSECTION247.HTML",
								"BNS Section 248 - False charge of offence made with intent to injure": "BNC_SECTIONS/BNCSECTION248.HTML",
								"BNS Section 249 - Harbouring offender": "BNC_SECTIONS/BNCSECTION249.HTML",
								"BNS Section 250 - Taking gift, etc. , to screen an offender from punishment": "BNC_SECTIONS/BNCSECTION250.HTML",
								"BNS Section 251 - Offering gift or restoration of property in consideration of screening offender": "BNC_SECTIONS/BNCSECTION251.HTML",
								"BNS Section 252 - Taking gift to help to recover stolen property, etc": "BNC_SECTIONS/BNCSECTION252.HTML",
								"BNS Section 253 - Harbouring offender who has escaped from custody or whose apprehension has been ordered": "BNC_SECTIONS/BNCSECTION253.HTML",
								"BNS Section 254 - Penalty for harbouring robbers or dacoits": "BNC_SECTIONS/BNCSECTION254.HTML",
								"BNS Section 255 - Public servant disobeying direction of law with intent to save person from punishment or property from forfeiture": "BNC_SECTIONS/BNCSECTION255.HTML",
								"BNS Section 256 - Public servant framing incorrect record or writing with intent to save person from punishment or property from forfeiture": "BNC_SECTIONS/BNCSECTION256.HTML",
								"BNS Section 257 - Public servant in judicial proceeding corruptly making report, etc. , contrary to law": "BNC_SECTIONS/BNCSECTION257.HTML",
								"BNS Section 258 - Commitment for trial or confinement by person having authority who knows that he is acting contrary to law": "BNC_SECTIONS/BNCSECTION258.HTML",
								"BNS Section 259 - Intentional omission to apprehend on the part of public servant bound to apprehend": "BNC_SECTIONS/BNCSECTION259.HTML",
								"BNS Section 260 - Intentional omission to apprehend on the part of public servant bound to apprehend person under sentence or lawfully committed": "BNC_SECTIONS/BNCSECTION260.HTML",
								"BNS Section 261 - Escape from confinement or custody negligently suffered by public servant": "BNC_SECTIONS/BNCSECTION261.HTML",
								"BNS Section 262 - Resistance or obstruction by a person to his lawful apprehension": "BNC_SECTIONS/BNCSECTION262.HTML",
								"BNS Section 263 - Resistance or obstruction to lawful apprehension of another person": "BNC_SECTIONS/BNCSECTION263.HTML",
								"BNS Section 264 - Omission to apprehend, or sufferance of escape, on part of public servant, in cases not otherwise, provided for": "BNC_SECTIONS/BNCSECTION264.HTML",
								"BNS Section 265 - Resistance or obstruction to lawful apprehension or escape or rescue in cases not otherwise provided for": "BNC_SECTIONS/BNCSECTION265.HTML",
								"BNS Section 266 - Violation of condition of remission of punishment": "BNC_SECTIONS/BNCSECTION266.HTML",
								"BNS Section 267 - Intentional insult or interruption to public servant sitting in judicial proceeding": "BNC_SECTIONS/BNCSECTION267.HTML",
								"BNS Section 268 - Personation of an assessor": "BNC_SECTIONS/BNCSECTION268.HTML",
								"BNS Section 269 - Failure by person released on bail or bond to appear in court": "BNC_SECTIONS/BNCSECTION269.HTML",
								"BNS Section 270 - Public nuisance": "BNC_SECTIONS/BNCSECTION270.HTML",
								"BNS Section 271 - Negligent act likely to spread infection of disease dangerous to life": "BNC_SECTIONS/BNCSECTION271.HTML",
								"BNS Section 272 - Malignant act likely to spread infection of disease dangerous to life": "BNC_SECTIONS/BNCSECTION272.HTML",
								"BNS Section 273 - Disobedience to quarantine rule": "BNC_SECTIONS/BNCSECTION273.HTML",
								"BNS Section 274 - Adulteration of food or drink intended for sale": "BNC_SECTIONS/BNCSECTION274.HTML",
								"BNS Section 275 - Sale of noxious food or drink": "BNC_SECTIONS/BNCSECTION275.HTML",
								"BNS Section 276 - Adulteration of drugs": "BNC_SECTIONS/BNCSECTION276.HTML",
								"BNS Section 277 - Sale of adulterated drugs": "BNC_SECTIONS/BNCSECTION277.HTML",
								"BNS Section 278 - Sale of drug as a different drug or preparation": "BNC_SECTIONS/BNCSECTION278.HTML",
								"BNS Section 279 - Fouling water of public spring or reservoir": "BNC_SECTIONS/BNCSECTION279.HTML",
								"BNS Section 280 - Making atmosphere noxious to health": "BNC_SECTIONS/BNCSECTION280.HTML",
								"BNS Section 281 - Rash driving or riding on a public way": "BNC_SECTIONS/BNCSECTION281.HTML",
								"BNS Section 282 - Rash navigation of vessel": "BNC_SECTIONS/BNCSECTION282.HTML",
								"BNS Section 283 - Exhibition of false light, mark or buoy": "BNC_SECTIONS/BNCSECTION283.HTML",
								"BNS Section 284 - Conveying person by water for hire in unsafe or overloaded vessel": "BNC_SECTIONS/BNCSECTION284.HTML",
								"BNS Section 285 - Danger or obstruction in public way or line of navigation": "BNC_SECTIONS/BNCSECTION285.HTML",
								"BNS Section 286 - Negligent conduct with respect to poisonous substance": "BNC_SECTIONS/BNCSECTION286.HTML",
								"BNS Section 287 - Negligent conduct with respect to fire or combustible matter": "BNC_SECTIONS/BNCSECTION287.HTML",
								"BNS Section 288 - Negligent conduct with respect to explosive substance": "BNC_SECTIONS/BNCSECTION288.HTML",
								"BNS Section 289 - Negligent conduct with respect to machinery": "BNC_SECTIONS/BNCSECTION289.HTML",
								"BNS Section 290 - Negligent conduct with respect to pulling down, repairing or constructing buildings etc": "BNC_SECTIONS/BNCSECTION290.HTML",
								"BNS Section 291 - Negligent conduct with respect to animal": "BNC_SECTIONS/BNCSECTION291.HTML",
								"BNS Section 292 - Punishment for public nuisance in cases not otherwise provided for": "BNC_SECTIONS/BNCSECTION292.HTML",
								"BNS Section 293 - Continuance of nuisance after injunction to discontinue": "BNC_SECTIONS/BNCSECTION293.HTML",
								"BNS Section 294 - Sale, etc. , of obscene books, etc": "BNC_SECTIONS/BNCSECTION294.HTML",
								"BNS Section 295 - Sale, etc. , of obscene objects to child": "BNC_SECTIONS/BNCSECTION295.HTML",
								"BNS Section 296 - Obscene acts and songs": "BNC_SECTIONS/BNCSECTION296.HTML",
								"BNS Section 297 - Keeping lottery office": "BNC_SECTIONS/BNCSECTION297.HTML",
								"BNS Section 298 - Injuring or defiling place of worship, with intent to insult the religion of any class": "BNC_SECTIONS/BNCSECTION298.HTML",
								"BNS Section 299 - Deliberate and malicious acts, intended to outrage religious feelings of any class by insulting its religion or religious beliefs": "BNC_SECTIONS/BNCSECTION299.HTML",
								"BNS Section 300 - Disturbing religious assembly": "BNC_SECTIONS/BNCSECTION300.HTML",
								"BNS Section 301 - Trespassing on burial places, etc": "BNC_SECTIONS/BNCSECTION301.HTML",
								"BNS Section 302 - Uttering words, etc., with deliberate intent to wound religious feelings": "BNC_SECTIONS/BNCSECTION302.HTML",
								"BNS Section 303 - Theft": "BNC_SECTIONS/BNCSECTION303.HTML",
								"BNS Section 304 - Snatching": "BNC_SECTIONS/BNCSECTION304.HTML",
								"BNS Section 305 - Theft in a dwelling house, or means of transportation or place of worship, etc": "BNC_SECTIONS/BNCSECTION305.HTML",
								"BNS Section 306 - Theft by clerk or servant of property in possession of master": "BNC_SECTIONS/BNCSECTION306.HTML",
								"BNS Section 307 - Theft after preparation made for causing death, hurt or restraint in order to the committing of theft": "BNC_SECTIONS/BNCSECTION307.HTML",
								"BNS Section 308 - Extortion": "BNC_SECTIONS/BNCSECTION308.HTML",
								"BNS Section 309 - Robbery": "BNC_SECTIONS/BNCSECTION309.HTML",
								"BNS Section 310 - Dacoity": "BNC_SECTIONS/BNCSECTION310.HTML",
								"BNS Section 311 - Robbery, or dacoity, with attempt to cause death or grievous hurt": "BNC_SECTIONS/BNCSECTION311.HTML",
								"BNS Section 312 - Attempt to commit robbery or dacoity when armed with deadly weapon": "BNC_SECTIONS/BNCSECTION312.HTML",
								"BNS Section 313 - Punishment for belonging to gang of robbers, dacoits, etc": "BNC_SECTIONS/BNCSECTION313.HTML",
								"BNS Section 314 - Dishonest misappropriation of property": "BNC_SECTIONS/BNCSECTION314.HTML",
								"BNS Section 315 - Dishonest misappropriation of property possessed by deceased person at the time of his death": "BNC_SECTIONS/BNCSECTION315.HTML",
								"BNS Section 316 - Criminal breach of trust": "BNC_SECTIONS/BNCSECTION316.HTML",
								"BNS Section 317 - Stolen property": "BNC_SECTIONS/BNCSECTION317.HTML",
								"BNS Section 318 - Cheating": "BNC_SECTIONS/BNCSECTION318.HTML",
								"BNS Section 319 - Cheating by personation": "BNC_SECTIONS/BNCSECTION319.HTML",
								"BNS Section 320 - Dishonest or fraudulent removal or concealment of property to prevent distribution among creditors": "BNC_SECTIONS/BNCSECTION320.HTML",
								"BNS Section 321 - Dishonestly or fraudulently preventing debt being available for creditors": "BNC_SECTIONS/BNCSECTION321.HTML",
								"BNS Section 322 - Dishonest or fraudulent execution of deed of transfer containing false statement of consideration": "BNC_SECTIONS/BNCSECTION322.HTML",
								"BNS Section 323 - Dishonest or fraudulent removal or concealment of property": "BNC_SECTIONS/BNCSECTION323.HTML",
								"BNS Section 324 - Mischief": "BNC_SECTIONS/BNCSECTION324.HTML",
								"BNS Section 325 - Mischief by killing or maiming animal": "BNC_SECTIONS/BNCSECTION325.HTML",
								"BNS Section 326 - Mischief by injury, inundation, fire or explosive substance, etc": "BNC_SECTIONS/BNCSECTION326.HTML",
								"BNS Section 327 - Mischief with intent to destroy or make unsafe a rail, aircraft, decked vessel or one of twenty tons burden": "BNC_SECTIONS/BNCSECTION327.HTML",
								"BNS Section 328 - Punishment for intentionally running vessel aground or ashore with intent to commit theft, etc": "BNC_SECTIONS/BNCSECTION328.HTML",
								"BNS Section 329 - Criminal trespass and house-trespass": "BNC_SECTIONS/BNCSECTION329.HTML",
								"BNS Section 330 - House-trespass and house-breaking": "BNC_SECTIONS/BNCSECTION330.HTML",
								"BNS Section 331 - Punishment for house-trespass or house breaking": "BNC_SECTIONS/BNCSECTION331.HTML",
								"BNS Section 332 - House-trespass in order to commit offence": "BNC_SECTIONS/BNCSECTION332.HTML",
								"BNS Section 333 - House-trespass after preparation for hurt, assault or wrongful restraint": "BNC_SECTIONS/BNCSECTION333.HTML",
								"BNS Section 334 - Dishonestly breaking open receptacle containing property": "BNC_SECTIONS/BNCSECTION334.HTML",
								"BNS Section 335 - Making a false document": "BNC_SECTIONS/BNCSECTION335.HTML",
								"BNS Section 336 - Forgery": "BNC_SECTIONS/BNCSECTION336.HTML",
								"BNS Section 337 - Forgery of record of Court or of public register, etc": "BNC_SECTIONS/BNCSECTION337.HTML",
								"BNS Section 338 - Forgery of valuable security, will, etc": "BNC_SECTIONS/BNCSECTION338.HTML",
								"BNS Section 339 - Having possession of document described in section 335 or 336, knowing it to be forged and intending to use it as genuine": "BNC_SECTIONS/BNCSECTION339.HTML",
								"BNS Section 340 - Forged document or electronic record and using it as genuine": "BNC_SECTIONS/BNCSECTION340.HTML",
								"BNS Section 341 - Making or possessing counterfeit seal, etc., with intent to commit forgery punishable under section 336": "BNC_SECTIONS/BNCSECTION341.HTML",
								"BNS Section 342 - Counterfeiting device or mark used for authenticating documents described in section 336, or possessing counterfeit marked material": "BNC_SECTIONS/BNCSECTION342.HTML",
								"BNS Section 343 - Fraudulent cancellation, destruction, etc., of will, authority to adopt, or valuable security": "BNC_SECTIONS/BNCSECTION343.HTML",
								"BNS Section 344 - Falsification of accounts": "BNC_SECTIONS/BNCSECTION344.HTML",
								"BNS Section 345 - Property mark": "BNC_SECTIONS/BNCSECTION345.HTML",
								"BNS Section 346 - Tampering with property mark with intent to cause injury": "BNC_SECTIONS/BNCSECTION346.HTML",
								"BNS Section 347 - Counterfeiting a property mark": "BNC_SECTIONS/BNCSECTION347.HTML",
								"BNS Section 348 - Making or possession of any instrument for counterfeiting a property mark": "BNC_SECTIONS/BNCSECTION348.HTML",
								"BNS Section 349 - Selling goods marked with a counterfeit property mark": "BNC_SECTIONS/BNCSECTION349.HTML",
								"BNS Section 350 - Making a false mark upon any receptacle containing goods": "BNC_SECTIONS/BNCSECTION350.HTML",
								"BNS Section 351 - Criminal intimidation": "BNC_SECTIONS/BNCSECTION351.HTML",
								"BNS Section 352 - Intentional insult with intent to provoke breach of peace": "BNC_SECTIONS/BNCSECTION352.HTML",
								"BNS Section 353 - Statements conducing to public mischief": "BNC_SECTIONS/BNCSECTION353.HTML",
								"BNS Section 354 - Act caused by inducing person to believe that he will be rendered an object of the Divine displeasure": "BNC_SECTIONS/BNCSECTION354.HTML",
								"BNS Section 355 - Misconduct in public by a drunken person": "BNC_SECTIONS/BNCSECTION355.HTML",
								"BNS Section 356 - Defamation": "BNC_SECTIONS/BNCSECTION356.HTML",
								"BNS Section 357 - Breach of contract to attend on and supply wants of helpless person": "BNC_SECTIONS/BNCSECTION357.HTML",
								"BNS Section 358 - Repeal and savings": "BNC_SECTIONS/BNCSECTION358.HTML"
								};

								function showSuggestions() {
                                    let input = document.getElementById('searchBox').value.toLowerCase();
                                    let suggestionBox = document.getElementById('suggestions');
                                    suggestionBox.innerHTML = "";
                                
                                    if (input === "") {
                                        suggestionBox.style.display = "none";
                                        return;
                                    }
                                
                                    let filtered = Object.keys(suggestions).filter(item =>
                                        item.toLowerCase().includes(input)
                                    );
                                
                                    if (filtered.length === 0) {
                                        suggestionBox.style.display = "none";
                                    } else {
                                        filtered.forEach(item => {
                                            let div = document.createElement('div');
                                            div.classList.add('list-group-item', 'list-group-item-action');
                                            div.textContent = item;
                                            div.onclick = () => {
                                                window.location.href = suggestions[item];
                                            };
                                            suggestionBox.appendChild(div);
                                        });
                                        suggestionBox.style.display = "block";
                                    }
                                }
					</script>
				</form>
	    </div>
	  </nav>
    <!-- END nav -->


    
	<!-- Home slider -->
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<span class="subheading">Welcome to Legal Help Hub</span>
            <h1 class="mb-4">Your rights, your lawyers—just a click away.</h1>
            <p><a href="services.html" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<span class="subheading">Todays Talent, Tommorow Success</span>
            <h1 class="mb-4">Where legal knowledge meets expert advice.</h1>
            <p><a href="services.html" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>

	<!-- our main features -->
	<section class="ftco-section">
		<div class="container">
		  <div class="row d-flex">
			<div class="col-md-5 order-md-last wrap-about align-items-stretch">
				<div class="wrap-about-border">
					<div class="img" style="background-image: url(images/about.jpg); "></div>
					<div class="text">
						<h3>Our Vision</h3>
						<p>JusticeDesk was created with a vision to make the law approachable and transparent for everyone. By combining technology with legal expertise, we aim to simplify the process of seeking legal help and ensure justice is within everyone’s reach.</p>
						<p><a href="contact.html" class="btn btn-primary py-3 px-4">Contact us</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-7 wrap-about pr-md-4 ftco-animate">
			  <h2 class="mb-4">Our Main Features</h2>
			  <p>The purpose of this platform is to provide comprehensive legal information, offering detailed explanations of laws, legal sections, and acts. It also connects individuals with qualified local lawyers, ensuring personalized legal assistance for those seeking professional help or guidance.</p>
			  <div class="row mt-5">
				<div class="col-lg-6">
				  <div class="services law-library text-center">
					<div class="icon mt-2 d-flex justify-content-center align-items-center"><i class="material-icons">library_books</i></div>
					<div class="text media-body">
					  <h3>Law library</h3>
					  <p>Access detailed legal resources and guides.</p>
					</div>
				  </div>
				  <div class="services advocate-meeting text-center">
					<div class="icon mt-2 d-flex justify-content-center align-items-center"><i class="material-icons">handshake</i></div>
					<div class="text media-body">
					  <h3>Advocate Meetup</h3>
					  <p>Connect with local lawyers for consultations.</p>
					</div>
				  </div>
				</div>
				<div class="col-lg-6">
				  <div class="services secure-communications text-center">
					<div class="icon mt-2 d-flex justify-content-center align-items-center"><i class="material-icons">private_connectivity</i></div>
					<div class="text media-body">
					  <h3>Secure Communications</h3>
					  <p>Private and safe messaging with professionals.</p>
					</div>
				  </div>
				  <div class="services user-dashboard text-center">
					<div class="icon mt-2 d-flex justify-content-center align-items-center"><i class="material-icons">map</i></div>
					<div class="text media-body">
					  <h3>User Dashboard</h3>
					  <p>Track your legal inquiries and appointments.</p>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
	  
	  
	  
		


	<!-- You Always Get the Best Knowledge And Guidance -->
	<section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_3.jpg);">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-0">You Always Get the Best Knowledge And Guidance</h2>
          </div>
        </div>	
    	</div>
    </section>
	<section class="ftco-counter" id="section-counter">
    	<div class="container">
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="wrapper">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="705">0</strong>
		                <span>Cases Completed</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="809">0</strong>
		                <span>Satisfied Customer</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="335">0</strong>
		                <span>Awards Received</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="35">0</strong>
		                <span>Years of Experienced</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>




	<!-- Our Best Provisions -->
    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4">Our Best Provisions</h2>
					<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-lg-4 d-flex">
					<div class="services-2 noborder-left text-center ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="material-icons">gavel</span></div>
						<div class="text media-body">
							<h3>Criminal law</h3>
							<p>Deals with offenses against the state and societal justice.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-flex">
					<div class="services-2 text-center ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="material-icons">balance</span></div>
						<div class="text media-body">
							<h3>Civil law</h3>
							<p>Governs disputes between individuals or organizations, not criminal acts.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-flex">
					<div class="services-2 text-center ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="material-icons">family_restroom</span></div>
						<div class="text media-body">
							<h3>Family law</h3>
							<p>Addresses legal matters involving marriage, divorce, child custody, adoption.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-flex">
					<div class="services-2 noborder-left noborder-bottom text-center ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="material-icons">business</span></div>
						<div class="text media-body">
							<h3>Corporate law</h3>
							<p>Regulates businesses, including formation, mergers, acquisitions, and corporate governance.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-flex">
					<div class="services-2 text-center noborder-bottom ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="material-icons">church</span></div>
						<div class="text media-body">
							<h3>Religious law</h3>
							<p>Laws based on religious beliefs, guiding moral and spiritual practices.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 d-flex">
					<div class="services-2 text-center noborder-bottom ftco-animate">
						<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="material-icons">account_balance</span></div>
						<div class="text media-body">
							<h3>Administrative law</h3>
							<p>Governs the activities of administrative agencies and governmental regulations.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		



		<!-- You Always Get the Best Knowledge And Guidance -->
	<section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-3 mb-md-0">You Always Get the Best Knowledge And Guidance</h2>
          </div>
          <div class="col-lg-3 col-md-4 ftco-animate">
          	<p class="mb-0"><a href="#request_a_quote" class="btn btn-white py-3 px-4">Request Quote</a></p>
          </div>
        </div>	
    	</div>
    </section>



	<!-- Our Trusted Advocates -->
	<section class="ftco-section ftco-no-pb">
			<div class="container-fluid px-0">
				<div class="row no-gutters justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Trusted Advocates</h2>
            <p>advocates are dedicated professionals who provide expert legal advice and unwavering support to help you navigate complex legal challenges</p>
            <p></p>
          </div>
        </div>
				<div class="row no-gutters">
    			<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/law\ 1.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="lawyer profiles\RajeshSharma1.html">Advocate Rajesh K.S
							</a></h3>
	    					<span>Family lawyer</span><br>
							<span><strong>Experience:</strong> 10+ Years</span><br>
							<span>Tirupati</span>
	    				</div>
    				</div>
  				</div>
  				<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/law\ 2.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="lawyer profiles/RickyChopra2.html">Advocate Ricky Chopra</a></h3>
	    					<span>Civil</span><br>
							<span><strong>Experience:</strong> 7+ Years</span><br>
							<span>Bangalore</span>
	    				</div>
    				</div>
  				</div>

    			<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/law\ 3.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="lawyer profiles/SunilKumarBakshi3.html">Advocate Sunil Kumar Bakshi</a></h3>
	    					<span>Civil</span><br>
							<span><strong>Experience:</strong> 12+ Years</span><br>
							<span>chennai</span>
	    				</div>
    				</div>
    			</div>
					<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/law\ 4.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="lawyer profiles/KaushalGupta4.html">
								Advocate Rajesh Rai</a></h3>
	    					<span>Customer court</span><br>
							<span><strong>Experience:</strong> 12+ Years</span><br>
							<span>chennai</span>
	    				</div>
    				</div>
  				</div>
  				<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/law\ 5.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="lawyer profiles/VirushkaVarma5.html">Advocate Virushka Varma</a></h3>
	    					<span>Civil</span><br>
							<span><strong>Experience:</strong> 9+ Years</span><br>
							<span>Tirupati</span>
	    				</div>
    				</div>
  				</div>
  				<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/law\ 6.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="lawyer profiles/RajeevNigam6.html">
								Advocate Rajeev Nigam</a></h3>
	    					<span>Divorce</span><br>
							<span><strong>Experience:</strong> 10+ Years</span><br>
							<span>Bangalore</span>
	    				</div>
    				</div>
  				</div>
  				<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/law\ 7.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="Ravijadhav7.html">Advocate Ravi Jadhav</a></h3>
	    					<span>Criminal</span><br>
							<span><strong>Experience:</strong> 10+ Years</span><br>
							<span>krishna</span>
	    				</div>
    				</div>
  				</div>
  				<div class="col-md-3">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/law\ 8.jpg);">
    					<div class="overlay"></div>
    					<a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
	    				<div class="text text-center p-4">
	    					<h3><a href="AnshulGupta8.html">Advocate Anshul Gupta</a></h3>
	    					<span>Divorce</span><br>
							<span><strong>Experience:</strong> 10+ Years</span><br>
							<span>kadapa</span>
	    				</div>
    				</div>
  				</div>
    		</div>
			</div>
	</section>


	<!-- request a quote -->


    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" id="request_a_quote" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-end">
    			<div class="col-md-6 py-5 px-md-5">
    				<div class="py-md-5">
		          <div class="heading-section heading-section-white ftco-animate mb-5">
		            <h2 class="mb-4">Request A Advocate</h2>
		            <p>If interested, join and bring a lawyer to ensure proper legal guidance and representation.</p>
		          </div>
		          <form action="register.php" method="POST" class="appointment-form ftco-animate">
		    				<div class="d-md-flex">
			    				<div class="form-group">
			    					<input type="text" name="firstName" class="form-control" placeholder="First Name" required>
			    				</div>
			    				<div class="form-group ml-md-4">
			    					<input type="text" name="lastName" class="form-control" placeholder="Last Name" required>
			    				</div>
		    				</div>
		    				<div class="d-md-flex">
		    					<div class="form-group">
			    					<div class="form-field">
		        					<div class="select-wrap">
		                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                    <select name="Select_type_of_case" id="Select_type_of_case" class="form-control" required>
		                    	<option value="">Type of case</option>
		                       <option style="color: black"value="constitution_of_india">Constitution of India</option>
  								<option style="color: black" value="Indian Penal Code (IPC), 1860">Indian Penal Code (IPC), 1860</option>
  								<option style="color: black"value="crpc">Criminal Procedure Code (CrPC), 1973</option>
  								<option style="color: black"value="indian_contract_act">Indian Contract Act, 1872</option>
  								<option style="color: black"value="indian_divorce_act">Indian Divorce Act, 1869</option>
  								<option style="color: black"value="hindu_marriage_act">Hindu Marriage Act, 1955</option>
  								<option style="color: black"value="indian_successsion_act">Indian Succession Act, 1925</option>
  								<option style="color: black"value="factories_act">Factories Act, 1948</option>
  								<option style="color: black"value="industrial_disputes_act">Industrial Disputes Act, 1947</option>
  								<option style="color: black"value="minimum_wages_act">Minimum Wages Act, 1948</option>
  								<option style="color: black"value="hindu_successsion_act">Hindu Succession Act, 1956</option>
  								<option style="color: black"value="muslim_personal_law">Muslim Personal Law (Shariat) Application Act, 1937</option>
  								<option style="color: black"value="indian_evidence_act">Indian Evidence Act, 1872</option>
  								<option style="color: black"value="environmental_protection_act">Environmental Protection Act, 1986</option>
  								<option style="color: black"value="water_pollution_act">Water (Prevention and Control of Pollution) Act, 1974</option>
  								<option style="color: black"value="air_pollution_act">Air (Prevention and Control of Pollution) Act, 1981</option>
  								<option style="color: black"value="companies_act">Companies Act, 2013</option>
  								<option style="color: black"value="patents_act">Patents Act, 1970</option>
  								<option style="color: black"value="copyright_act">Copyright Act, 1957</option>
  								<option style="color: black"value="gst_act">Goods and Services Tax (GST) Act, 2017</option>
  								<option style="color: black"value="income_tax_act">Income Tax Act, 1961</option>
		                    </select>
		                  </div>
			              </div>
			    				</div>
		    					<div class="form-group ml-md-4">
			    					<input type="text" class="form-control" name="phone" placeholder="Phone" required>
			    				</div>
		    				</div>
		    				<div class="d-md-flex">
		    					<div class="form-group">
			              <textarea name="message" id="" cols="30" rows="2" class="form-control" placeholder="Message" required></textarea>
			            </div>
			            <div class="form-group ml-md-4">
			              <input type="submit" value="Request A Quote" class="btn btn-white py-3 px-4">
			            </div>
		    				</div>
		    			</form>
		    		</div>
    			</div>
        </div>
    	</div>
    </section>


	<!-- Recent Cases -->
	<section class="ftco-section bg-light">	
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Recent</span> Cases</h2>
            <p>Recent cases stand as the echoes of modern disputes, their resolution shaping the course of justice. Each case unfolds like a tale, weaving the threads of law, humanity, and consequence</p>
          </div>
        </div>
				<div class="row">
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/case\ 1.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">26</span>
                  <span class="mos">June</span>
                  <span class="yr">1995</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">O.J. Simpson Case (1995)</a></h3>
                <p>One of the most famous trials in American history, O.J. Simpson was charged with the murders of his ex-wife, Nicole Brown Simpson, and her friend, Ronald Goldman.

				</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/case\ 2.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">26</span>
                  <span class="mos">June</span>
                  <span class="yr">2011</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Casey Anthony Trial (2011)</a></h3>
                <p>Casey Anthony was accused of murdering her two-year-old daughter, Caylee Anthony,  in a case that captured widespread media attention.The trial raised questions about forensic</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/case\ 3.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">26</span>
                  <span class="mos">June</span>
                  <span class="yr">2007</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Amanda Knox Case (2007)</a></h3>
                <p>Amanda Knox, an American student studying abroad in Italy, was accused of murdering her roommate, Meredith Kercher. The case involved complex legal proceedings</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
			</div>
	</section>


	<!-- Clients code  -->
	<section class="ftco-section testimony-section">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4">Our Clients Say</h2>
					<p>Our clients' feedback speaks volumes about the effectiveness and quality of our services. We pride ourselves on providing the best legal assistance, and their testimonials reflect our dedication to making legal processes smooth and understandable for everyone</p>
				</div>
			</div>
			<div class="row ftco-animate justify-content-center">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img" style="background-image: url(images/person_1.jpg)">
								</div>
								<div class="text pl-4">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>This website  : The services offered by This website are highly efficient and user-friendly. I am </p>
									<p class="name">Aarav Patel</p>
									<span class="position">Employe</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img" style="background-image: url(images/person_2.jpg)">
								</div>
								<div class="text pl-4">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>This website  : A great platform for legal services. It's easy to navigate, and the assistance provided wa</p>
									<p class="name">Ravi Verma</p>
									<span class="position">Businesman</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img" style="background-image: url(images/person_3.jpg)">
								</div>
								<div class="text pl-4">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>This website  : I found the information on the website to be extremely helpful. It made legal processes feel</p>
									<p class="name">Ravi Kumar</p>
									<span class="position">Entrepreneur</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img" style="background-image: url(images/person_4.jpg)">
								</div>
								<div class="text pl-4">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>This website  : Highly recommend it! The process is smooth, and I received excellent legal advice within minutes.</p>
									<p class="name">Vijay Sharma</p>
									<span class="position">Consultant</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap d-flex">
								<div class="user-img" style="background-image: url(images/person_5.png)">
								</div>
								<div class="text pl-4">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
									<p>This website  : It's an excellent resource for legal services. Clear, concise, and very user-friendly.</p>
									<p class="name">Vikram Singh</p>
									<span class="position">Entrepreneur</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- footer -->
		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-2">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Obulavaripalli,Annamayya, Andhra Pradesh</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+ 91 XXXXXXXXX</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">harikamam@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Cases</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/case\ 1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">O.J. Simpson Case (1995)</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 26, 1995</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/case\ 2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Casey Anthony Trial (2011)</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 26, 2011</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="index.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="about.html"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="BNC_Sections.html"><span class="ion-ios-arrow-round-forward mr-2"></span>BNC Sections</a></li>
                <li><a href="services.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="contact.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>