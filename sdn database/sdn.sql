-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2018 at 09:03 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sdn`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `sN` int(20) NOT NULL AUTO_INCREMENT,
  `From` varchar(50) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Textarea` varchar(600) NOT NULL,
  PRIMARY KEY (`sN`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sN`, `From`, `Subject`, `Textarea`) VALUES
(1, 'bolajiogidan@gmail.com', 'Finding out more', 'We are interested in knowing more about the system please. Thanks'),
(2, 'bj@gmail.com', 'Finder', 'More information needed please.');

-- --------------------------------------------------------

--
-- Table structure for table `flowtable`
--

CREATE TABLE IF NOT EXISTS `flowtable` (
  `sN` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sourceIp` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `securityStatus` varchar(50) NOT NULL,
  `updateStatus` varchar(50) NOT NULL,
  UNIQUE KEY `sN` (`sN`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `flowtable`
--

INSERT INTO `flowtable` (`sN`, `sourceIp`, `action`, `securityStatus`, `updateStatus`) VALUES
(1, '::1', 'Forward Packet to Destination', 'Whitelist', 'Updated 17-07-12 09:46:03'),
(2, '127.0.0.1', 'Forward Packet to Destination', 'Whitelist', 'Updated 18-07-26 07:40:15');

-- --------------------------------------------------------

--
-- Table structure for table `ipaddress`
--

CREATE TABLE IF NOT EXISTS `ipaddress` (
  `sN` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Ip` varchar(50) NOT NULL,
  UNIQUE KEY `sN` (`sN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `malicious`
--

CREATE TABLE IF NOT EXISTS `malicious` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `subject` varchar(200) NOT NULL,
  `textarea` text NOT NULL,
  `spamicity` float NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subject` (`subject`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `malicious`
--

INSERT INTO `malicious` (`id`, `subject`, `textarea`, `spamicity`, `dateTime`) VALUES
(47, 'Nigerian National Petroleum Corporation (NNPC)	 accountant general', 'Dear sir,\r\nI am Alhaji Ahmed Bulus, an accountant general with the Nigerian National Petroleum Corporation (NNPC), and also the chairman of contract award committee Proposal Private and Strictly Confidential (CAC). I was well informed of your stronghold in business over the years, an incentive that induced me writing you to seek your ability at sustaining the conclusion of a pending transaction for our mutual benefit.\r\nWe have put in place instrument of payment for US$32M (THIRTY-TWO MILLION US Dollars only), which is now in a dedicated account with the Central Bank of Nigeria (CBN). The above fund came from the over-invoicing of contracts awarded to a consurtium of foreign firms in 1994 for the construction of the Eleme/Chemical and Liquefied Natural gas plant in Port-Harcourt worth US$1.2 Billion. The contract has been executed and the original contractors paid in full. Hence, the US$32M in question is therefore free to be transferred overseas upon proper application without any risk whatsoever.\r\nIN THE COURSE OF DISCHARGING MY DUTIES, I DISCOVERED THAT SOME GOVERNMENT OFFICIALS IN THE PAST, COMMITTED SOME IRREGULARITIES IN THE FORM OF OVER INVOICED CONTRACT VALUES WHICH EVENTUALLY GO INTO THEIR PRIVATE BANK ACCOUNTS. WHAT INTERESTED ME MOST AND FOR WHICH REASON I AM WRITING YOU IS THAT THIS PARTICULAR CONTRACT WAS AWARDED TO A FOREIGN CONTRACTOR WHICH WASOVER ESTIMATED TO THE TUNE OF US$32million (thirty-two million dollars) IN OUR RECORDS HAS BEEN COMPLETED AND COMMISSIONED. THIS CONTRACTOR HAS RECEIVED FULL PAYMENT FOR THE CONTRACT EXECUTED FOR MY CORPORATION, LEAVING BEHIND THE SUM OF US$32million WHICH REPRESENTS THE OVER ESTIMATED CONTRACT VALUE CURRENTLY LYING AT THE CENTRAL BANK OF NIGERIA.\r\nBECAUSE OF THE HASTE WITH WHICH THE LAST GOVERNMENT WAS REMOVED FROM OFFICE, THESE MEN HAD NO CHANCE TO COLLECT THIS MONEY BEFORE LEAVING OFFICE. BUT AS A RESULT OF UPDATED PAYMENT ADVISE AT THE CENTRAL BANK, IT HAS BEEN AWAITING TRANSFER TO A FOREIGN ACCOUNT. IN MY REPORT, I RECOMMENDED THAT THIS FUND SHOULD BE PAID BUT ON THE CONDITION THAT THE CONTRACTOR SHOULD BE INFORMED.\r\nMY RECOMMENDATION WAS ACCEPTED AND THERE WAS A MANDATE TO GET IN TOUCH WITH THE FOREIGN CONTRACTOR, BUT SINCE THE CONTRACTOR HAS BEEN FULLY PAID FOR THE JOB, I NOW WANT TO DIVERT THIS MONEY TO ANOTHER FOREIGN ACCOUNT.\r\nDue to the nature of accrual of this fund, it has to be applied for by a foreign contractor/company and payment can only be made into a foreign account hence this contact is necessary to accomplish this deal. You (or your company) shall be compensated with 30% of the amount as the account owner, 5% shall be used for the reimbursement of all expenses that will be incurred by both parties during the course of this financial transaction.\r\nThe remaining 65% is for us.\r\nWe shall urgently require of you the following by fax or email:\r\n1.Name, Telephone and/or Fax Numbers of beneficiary\r\n2.Name, and full address of the company.\r\n3.Complete particulars of the bank account where you wish the funds to be transferred. This should include the account number, bank, address, the telephone, fax and telex number of the bank.\r\nMy colleagues and I have had some fruitful discussions with relevant top officials of both the Federal Ministry of Finance (FMF) and the Central Bank of Nigeria (CBN) and they have agreed to cooperate with the transfer. An application for fund transfer shall be made at the appropriate Ministries in favour of the beneficiary (you or your company). Thereafter, your company shall be officially regarded as having executed the contract for the Nigerian National Petroleum company (NNPC) for which payment is being made.\r\nThis process makes the operation legal and according to the law of the Federal Republic of Nigeria.\r\nHowever, before further details of this laudable transaction will be revealed to you. I must be convinced of your integrity, transparency and honest, because this is highly, business transaction that requires someone with experience, exposure and more than average means of livelihood. please treat this transaction as strictly confidential as we are civil servants who would not want any exposure.\r\nBe expecting your soonest reply. PLEASE CONTACT ME THROUGH MY PRIVATE TEL/FAX NUMBER 234-1-7741519 Email: ahmedbulus@zdnetmail.com AND I WILL FURNISH YOU WITH THE FULL DETAILS OF THE TRANSACTION.\r\nBest Regards.\r\nALHAJI AHMED BULUS\r\n', 0.947457, '2018-11-05 04:49:04'),
(46, 'DO NOT BE SURPRISED RECEIVING THIS IMPORTANT MEMO', 'ATTN: DO NOT BE SURPRISED RECEIVING THIS IMPORTANT MEMO, AN INFLUENTIAL TOP GOVERNMENT FUNCTIONAIRE GAVE ME YOUR NAME AND ASSURED ME OF YOUR TRANSPERANCY. THE TRAUMA, HUMILIATION AND DEPRIVATION WHICH I AND MY FAMILY HAVE SUFFERED SINCE THE DEATH OF MY FATHER, THE LATE GENERAL SANI ABACHA HAS KEPT ME IN FOCUS ON SEARCHING OUT THE POSSIBILITIES OF SAFE GUARDING THE COLOSAL SUMS OF MONEY MY DECEASED FATHER LEFT BEHIND. \r\nPRESENTLY MY ELDER BROTHER MOHAMMED ABACHA CANNOT BE REACHED BECAUSE HE IS UNDER DETENTION ON THE ORDER OF THE FEDERAL GOVERNMENT. AT THE MOMENT I HAVE THIRTY THREE MILLION UNITED STATES DOLLARS (US$33,000,000.00) CURRENTLY DEPOSITED IN A SECURITY COMPANY IN HOLLAND. I WILL BE SENDING SOMEBODY THERE FOR BOTH OF YOU TO WORK TOGETHER IN DUE COURSE. WITH THE PRESENT DISPENSATION OF THE FEDERAL GOVERNMENT OF NIGERIA, ALL MONIES KEPT BY MY DECEASED FATHER ARE ATTEMPTED TO BE RECOVERED BY THE PRESENT ADMINISTRATION. ON THIS NOTE I DESIRE AN URGENT ATTENTION TO ASSISST ME SECURE THE AFORESAID SUM IN ANY BANK ACCOUNT YOU MAY FURNISH ME WITH. \r\nWE WOULD AVAIL OURSELVES OF A TOTAL LOSS OF THE WHOLE SUM DEPENDING ON YOUR PROMPTNESS TO FURNISH ME WITH THIS REQUIRED INFORMATION WHICH WILL ENABLE ME FACILITATE INSTRUCTIONS AND SIGNAL TO THE SECURITY COMPANY FOR EXPEDIENT TRANSFER OF THIS FUNDS TO YOUR ACCOUNT. \r\nFOR YOU PROVIDING ME WITH THIS ACCOUNT AND AS WELL PARTAKING IN THIS TRANSACTION I WILL OBLIGE YOU WHAT EVER YOU DESIRE ON REQUEST OR TO BE MORE SPECIFIC I WILL OBLIGE YOU 30% OF THE TOTAL SUM.THE SUBSEQUENT CHARGES THAT MIGHT BE INCURRED BY OURSELVES SHALL BE BUDGETED TO BE ABSOLVED AS 10% WHILE A BALANCE OF 60% SHALL BE MAIN FOR MY FAMILY AND MY SELF. \r\nTHE URGENCY THIS OFFER DESIRES SHALL BE TREATED WITH ALL PROMPTNESS AS ANY DAY THAT PASSES BY POSSES A BIGGER TREAT. YOU MUST UNDERSTAND THAT THIS TRANSACTION SHOULD BE TREATED WITH ALL SECRECY, AS IT WILL AMOUNT TO CONIVIANCE IF CONFIDENTIALITY IS NOT MAINTAINED. PLEASE CONTACT ME through e-mail emeka123ng@yahoo.com , AS SOON AS YOU RECEIVE THIS MESSAGE ON YOUR PREPAREDNESS TO ASSIST ME. \r\nREGARDS, \r\nABBAH ABACHA\r\n', 0.590138, '2018-11-05 04:46:50'),
(44, 'Introduction', 'Introduction\r\nI am a Nigerian presently on attachment in United Kingdom, but at the same time the chairman of contract review panel who is interested in importation of goods into Nigeria with funds which are presently trapped in Nigeria. In order to commence this business, we solicit your assistance to enable us transfer into your account the said trapped funds The source of this fund is as follows: During the last Regime here in Nigeria, some Government Officials set up companies and awarded themselves contracts which were grossly over-invoiced in various ministries. The present Government set up a contract Review Panel and we have identified a lot of inflated contract funds which are presently floating in the Central Bank of Nigeria ready for payment. However, by virtue of our position as civil servants and members of this panel, we cannot acquire this money in our names. I have therefore, been delegated as a matter of trust by my colleagues of the panel to look for an overseas partner into whose account we would transfer the sum of US$21,500,000.00 (Twenty One Million, Five Hundred Thousand United. States Dollars) Hence we are writing you this letter. \r\nYours Faithfully,\r\nAde.&#8195;\r\n', 0.988924, '2018-11-05 04:41:46'),
(45, 'URGENT BUSINESS PROPOSAL', 'This letter may come to you as a surprise since it is coming from someone you have not met before. However, we decided to contact you based on a satisfactory information we had about your business person as regard business information concerning your country and the safety of our funds in a steady economy such as that of your country compared to our country Nigeria Africa.\r\nI am a civil adviser currently working with the monitoring committee overseeing the winding up of the petroleum trust fund(PTF). Myself and my close and trusted colleagues need your assistance in the transfer of US$25 million into any reliable Account you may nominate overseas. This fund was generated from over-invoicing of contracts executed by the PTF under the administration of the past military government.\r\nThese were discovered while we were reviewing the PTF accounts. From Our discoveries, these contracts have been executed and the contractors in question were all paid. The difference of US$25,000,000 being the over-invoiced amount is the funds, we want your corporate entity to help us receive.\r\nWhat we want from you is a good and reliable company or personal Account into which we shall transfer this fund. Details should include the following:\r\n 1. Name of Bank\r\n 2. Address of Bank with Fax & Tel.\r\n 3. Account Number\r\n 4. Beneficiary/Signatory to Account (Account Name)\r\nUpon the Successful crediting of your account. The fund will be shared as follows:\r\n 1. 20% for you and your assistance\r\n 2. 75% for myself & my Colleagues\r\n 3. 5% for contingency expenses\r\nPlease after your first reply through e-mail I will want us to continue further communication by fax and telephone for confidential purpose. We wish to assure you that your involvement should you decide to assist us, will be well protected, and also, this business, proposal is 100% risk free as we have put a whole lot into it.\r\nThank you for your anticipated cooperation while we look forward to a mutually benefiting business relationship with you. Please when replying to my e-mail kindly include your telephone, fax number and mobile telephone numbers preferably extremely private numbers where we can reach you any time of the day. Please be aware that a high level of confidentiality and trust is required in this business.\r\nYou can reach me on my confidential Fax number 234-1- 7596791. \r\nMALIK MADAKI\r\n', 0.754498, '2018-11-05 04:44:30'),
(43, 'CONTRACT NNPC', 'The Group General Manager,\r\nExploration & Exploitation Division\r\nNigerian National Petroleum Corporation\r\nFalomo Office Complex, Lagos - Nigeria.\r\nDear Sir,\r\nRE - CONTRACT NO. NNPC/PED/A9600-KPW-96.\r\nCONSTRUCTION OF KADUNA-PORT HARCOURT-WARRI OIL PIPELINES NETWORKS AND INSTALLATION OF HEAVY DUTY DRILLING PLANTS AND OFFSHORE OILRIGS FOR THE NNPC CRUDE EXPLORATION.\r\nWe refer to your circular no. NNPC/PED/472/99 of July 14th 1999 and we wish to apply for the payment of our contractual sum of USD$32,000,000.00 (Thirty - Two Million United States Dollars Only). This represents payment due and payable to us on the NNPC contract number: NNPC/PED/A9600-KPW-96. Please pay the sum of US$32,000,000.00 including interest at 10% per annum from 13th January 1997 to date of final payment.\r\nKindly remit the above amount in full via Telegraphic Transfer (T.T) to our bankers underneath:\r\nBANK NAME &ADDRESS:\r\nSWIFT CODE & TELEX OF BANK:\r\nACCOUNT NO.:\r\nBENEFICIARY:\r\nWe wish you to expedite action on this to enable us update our record with your Corporation.\r\nThank you for your usual cooperation.\r\nYours faithfully,\r\nOlu Mighty.Nigeria.\r\n', 0.910107, '2018-11-05 04:41:01'),
(41, 'PERSON SPECIFICATION', 'PERSON SPECIFICATION FOR AN ADMINISTRATOR\r\nThe ideal candidate will be able to demonstrate that they have the necessary administrative, technical skills, experience and competence to immediately add value to the work of the Company, Team and Clients and to ensure the timely delivery of delegated tasks and quality services under general supervision only. The appointee will:\r\n•	Possess very well developed interpersonal and communication skills and be able to give evidence of their ability to empathise, both face to face and by telephone, with those experiencing financial difficulties \r\n•	Be results oriented and client focused.\r\n•	Be able to provide examples of having worked on their own initiative and in teams in the 	past.\r\n•	Be capable of exercising a high degree of delegated responsibility.\r\n•	Have good organizational, and technical skills relevant to the role with the 	ability to 	problem solve, pay attention to detail and deliver work to a high standard and to tight 	deadlines.\r\nEssential Education Qualifications, Attainments and Experience \r\n•	Good general level of education\r\n•	Have a high degree of computer literacy - to include competence in the following Microsoft applications - word processing, spreadsheets, databases, file management, e-mail and the internet.\r\n•	At least three year’s relevant and acceptable work experience in an Administrative /Office work environment.\r\n•	Excellent numeracy skills with knowledge and skills in the preparation and maintenance of proper financial records and banking procedures and reporting on same.\r\nThank you.\r\nMatthew,\r\nNigeria\r\n', 0.997554, '2018-11-05 04:32:39'),
(42, 'congratulation', 'Good day to you over there sir, how are you and the family? I was directed to inform you by the entire member of the family that at the last annual meeting of the family member all the family of Ikuolepaye has concluded that as it is the next turn of our family to produce the next ruler of our community then decided to choose you as the next king of our town. \r\nDue to this effect, all members of the family have concluded that you should come home latest 21st of next month and that all member of the family and the entire community member will join you at Muritala Mohamed Airport Lagos to officially welcome you, I congratulate you once more. \r\nThanks\r\nYours Faithfully,\r\nAde Omoba.\r\n', 1, '2018-11-05 04:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `packet`
--

CREATE TABLE IF NOT EXISTS `packet` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `subject` varchar(200) NOT NULL,
  `textarea` text NOT NULL,
  `spamicity` float NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subject` (`subject`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `packet`
--

INSERT INTO `packet` (`id`, `subject`, `textarea`, `spamicity`, `dateTime`) VALUES
(7, 'Festival', 'ARGUNGU INTERNATIONAL FISHING AND CULTURAL FESTIVAL\r\nAs Argungu International Fishing and Cultural Festival comes to an end today, it has been revealed that the annual cultural and communal celebration gulped over N100m, all from the private sector without the Kebbi state government which is the host, spending any money.\r\nThis disclosure was made yesterday at the Fadan Matan, Avennue of the Kanbachi event by the chief consultant to the festival, Mr. Abel Akinosi who described the development as a welcome one, stressing that it is good omen for the festival, which he said has good prospect for private investors who stand to gain tremendously due to the festival’s mass appeal. \r\n“You can see for yourself that it has been a very wonderful event and this is the first time we are having a totally private sector driven festival and I am very happy personally that it has turned out well. You can see the crowd and the participation of the private sector, which shows that we are taken the festival to greater heights”, said Akinosi.\r\nYour Faithfully’\r\nMr. Abiodun Adejaiye.\r\n', 0.0297536, '2018-11-05 04:34:09'),
(8, 'REBRANDING', 'The concept of rebranding my country Nigeria is gradually turning out like the concept of power elusive and transient. Everybody seems to appreciate it, yet none seems to grasp it in its entirety.\r\nAccording to members of a state group in the country, branding is a multidimensional concept that is much more than a name or a symbol, design, image. To him, a brand is a bundle of benefits, a promise made certain consumer expectations all the time. His fellow compatriots added that it is not necessarily what we say it is, it exists in the mind of the consumer.\r\nHow is your country? I hope the political power tussle over the presidential election, is a thing of the past now.\r\nThere is a weather change over here, it is now the raining season. Hope to hear from you.\r\nGregory\r\nLagos, Nigeria.\r\n', 0.255464, '2018-11-05 04:35:41'),
(9, '21st CENTURY', 'The world is changing declared a man at is thirties, the old man said ‘hay boy it is change already.\r\nNearly every aspect of our life has an influence of the development around of now; we all are surprise at the uncontrolled manner that can’t just be explained. Where are we going from here, the center can no longer hold and the things are falling apart.\r\nThe world is only waiting for you to change before you can change the world around you.\r\nJason,\r\nRepublic of Ireland.\r\n', 0.00809598, '2018-11-05 04:36:33'),
(10, 'Correspondence ', 'Records Office staff must deal promptly and accurately with many different types of correspondence. In-coming correspondence will reach the Records Office in a number of different ways. Some will come through the traditional mail, some by hand, and some by telex, fax or\r\nelectronic mail. There will also be differences in the way in which items are addressed. Some will be addressed to a ministry, department or agency and some to individuals either by name or by title of office. Other items may be inadequately or illegibly addressed. A smaller number ofitems will bear security or privacy markings, such as ‘confidential’ or ‘personal.’ Some mail may contain cheques, money or other valuables which will need to be carefully recorded and accounted for in the Records Office.\r\nThank you\r\nDr. I. A. OLADOSU \r\n', 0.462426, '2018-11-05 04:37:54'),
(11, 'REQUEST FOR ASSISTANCE - STRICTLY CONFIDENTIAL.', 'I am Chiedu Boglo, the son of a retired General in the Nigerian Army and a former minister. I came to know of you in my search for a reliable person to handle a very confidential transaction, which involves the transfer of a huge sum of money to a foreign account. There were series of contracts executed by a Consortium of Multinational for the ministry in which my father was minister in our country. The original values of these contracts were deliberately over-invoiced to the tune of forty-one Million United States Dollars (US$41,000,000.00). The over-invoiced sum he purposed to acquire for himself after retirement. Unfortunately, things took another turn. I will explain more to you when you show your interest to assist me. Consequently, I am looking for someone who will help us (my father and I) to receive the money on our behalf. Needless to say, the trust reposed on you at this juncture is enormous. In return, we have agreed to offer you 20% of the total transferred sum. While we shall take 75% and the balance 5% has been set aside to take care of any expenses you shall incure in the process of the transfer of this fund. \r\nYou must however NOTE that this transaction is subject to the following terms and conditions; (i) Our conviction of your transparent honesty. (ii) That you would treat this transaction with utmost secrecy and confidentiality. (iii) That the funds would be transferred to an account over which you have absolute control. Modalities have been worked out at the highest levels to make for the immediate transfer of the funds within 10 working days, subject to your satisfaction of the above stated terms. Our assurance is that your role is 100% risk-free. To accord this transaction the legality it deserves and for mutual security of the funds, the whole approval procedures will be officially and legally processed with your name or the name of your company you may nominate as the bonafide beneficiary. Kindly, respond to this mail with a view to my giving you more information. Please, do send your acceptance via my E-mail address. Also, include in your mail you private/confidential telephone and fax number to enable me reach you as soon as I get your response. Thank you very much as I anticipate your response. \r\nYours faithfully, \r\nPrince Chiedu Boglo. \r\n', 0.398664, '2018-11-05 04:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `suspicious`
--

CREATE TABLE IF NOT EXISTS `suspicious` (
  `sN` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL,
  `spamicity` float NOT NULL,
  UNIQUE KEY `sN` (`sN`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=237 ;

--
-- Dumping data for table `suspicious`
--

INSERT INTO `suspicious` (`sN`, `token`, `spamicity`) VALUES
(1, '10.1.1.27', 0.4),
(2, '209.11.24.18', 0.4),
(3, 'abacha', 0.643038),
(4, 'About', 0.247848),
(5, 'account', 0.210984),
(6, 'after ', 0.19774),
(7, 'all', 0.400717),
(8, 'And', 0.5),
(9, 'another', 0.299898),
(10, 'app2.incamail.com ', 0.4),
(11, 'are', 0.404241),
(12, 'Around', 0.188409),
(13, 'assist', 0.588847),
(14, 'assistance', 0.367453),
(15, 'assisting', 0.278509),
(16, 'Avenue', 0.418797),
(17, 'banks', 0.884474),
(18, 'bear', 0.631763),
(19, 'because', 0.574936),
(20, 'Been', 0.290097),
(21, 'bit', 0.325398),
(22, 'blood', 0.650312),
(23, 'brother', 0.403703),
(24, 'Bsarowiwa', 0.4),
(25, 'build', 0.600475),
(26, 'buma', 0.4),
(27, 'cameroun', 0.4),
(28, 'Can', 0.312889),
(29, 'cash', 0.873771),
(30, 'charset', 0.418608),
(31, 'communigate', 0.063232),
(32, 'Community', 0.191612),
(33, 'compliments', 0.788651),
(34, 'contact', 0.344489),
(35, 'content-length', 0.4),
(36, 'content-type', 0.504267),
(37, 'continent.i', 0.4),
(38, 'country', 0.567406),
(39, 'crude', 0.99),
(40, 'Cut', 0.260218),
(41, 'dear', 0.63135),
(42, 'death', 0.450768),
(43, 'decided', 0.330228),
(44, 'Died', 0.267542),
(45, 'different', 0.178152),
(46, 'directory', 0.035289),
(47, 'dishonest', 0.4),
(48, 'Duagther', 0.4),
(49, 'duped', 0.4),
(50, 'email', 0.629081),
(51, 'enable', 0.147084),
(52, 'Enter', 0.582309),
(53, 'esmtp', 0.265983),
(54, 'f.g.n', 0.4),
(55, 'faithfully', 0.99),
(56, 'Family', 0.829646),
(57, 'father', 0.336835),
(58, 'feel', 0.66135),
(59, 'find', 0.471956),
(60, 'For', 0.5),
(61, 'form', 0.730756),
(62, 'fortune', 0.772404),
(63, 'frank', 0.124571),
(64, 'Free', 0.780215),
(65, 'friend', 0.516164),
(66, 'friends', 0.633362),
(67, 'frist', 0.4),
(68, 'From', 0.5),
(69, 'gen', 0.53662),
(70, 'get', 0.492677),
(71, 'good', 0.173185),
(72, 'Got', 0.196101),
(73, 'gotten', 0.26486),
(74, 'great', 0.449061),
(75, 'had', 0.15326),
(76, 'Handle', 0.334309),
(77, 'hanging', 0.164434),
(78, 'has ', 0.259176),
(79, 'have', 0.359958),
(80, 'Hbp', 0.4),
(81, 'helo', 0.244761),
(82, 'help', 0.302014),
(83, 'hence', 0.366699),
(84, 'high', 0.663674),
(85, 'his', 0.227545),
(86, 'home', 0.581532),
(87, 'http', 0.548432),
(88, 'inbox', 0.173055),
(89, 'incamail.com', 0.4),
(90, 'information', 0.420252),
(91, 'Inheritance', 0.4),
(92, 'inherited', 0.01),
(93, 'instinct', 0.4),
(94, 'interested', 0.391291),
(95, 'International', 0.684648),
(96, 'internet.to', 0.4),
(97, 'into', 0.216187),
(98, 'introduce', 0.405458),
(99, 'Invest', 0.836338),
(100, 'investment', 0.845059),
(101, 'jnr', 0.4),
(102, 'ken', 0.4),
(103, 'Killed', 0.093331),
(104, 'kind', 0.11172),
(105, 'kindest', 0.4),
(106, 'king', 0.31596),
(107, 'Kings', 0.079005),
(108, 'late', 0.174078),
(109, 'lawyer', 0.469894),
(110, 'leave', 0.161066),
(111, 'Left', 0.838522),
(112, 'let', 0.207959),
(113, 'library', 0.185197),
(114, 'like', 0.3885),
(115, 'Live', 0.508366),
(116, 'lives', 0.367248),
(117, 'may', 0.34251),
(118, 'meanwhile', 0.056058),
(119, 'mime-version', 0.509602),
(120, 'mother', 0.302956),
(121, 'motive', 0.4),
(122, 'move', 0.235861),
(123, 'Myself', 0.194178),
(124, 'name', 0.61548),
(125, 'need', 0.278103),
(126, 'neighbuoring', 0.4),
(127, 'Nene', 0.4),
(128, 'new', 0.515291),
(129, 'nigeria', 0.944398),
(130, 'now', 0.530203),
(131, 'Off', 0.485437),
(132, 'ogoni', 0.4),
(133, 'oil', 0.281685),
(134, 'old', 0.250427),
(135, 'One', 0.428388),
(136, 'only', 0.356824),
(137, 'order', 0.627015),
(138, 'our', 0.726535),
(139, 'Out', 0.336092),
(140, 'overload', 0.01),
(141, 'parents', 0.334237),
(142, 'parents.my', 0.4),
(143, 'Partner', 0.770574),
(144, 'people', 0.359768),
(145, 'plain', 0.071131),
(146, 'planing', 0.4),
(147, 'Please', 0.589846),
(148, 'pleasure', 0.698442),
(149, 'possession', 0.222359),
(150, 'preasure', 0.4),
(151, 'Princess', 0.4),
(152, 'princessbuma', 0.4),
(153, 'pro', 0.777873),
(154, 'prominent', 0.99),
(155, 'Reason', 0.225823),
(156, 'receive', 0.862871),
(157, 'received', 0.499875),
(158, 'relation', 0.631763),
(159, 'Relationship', 0.33157),
(160, 'republic', 0.353529),
(161, 'response', 0.347992),
(162, 'response.our', 0.4),
(163, 'Reveal', 0.713276),
(164, 'rivers', 0.4),
(165, 'royal', 0.729885),
(166, 'safekeeping', 0.99),
(167, 'Sani', 0.4),
(168, 'saro', 0.4),
(169, 'saro-wiwa', 0.4),
(170, 'sarowiwa', 0.4),
(171, 'School', 0.542239),
(172, 'since', 0.082654),
(173, 'sincere', 0.99),
(174, 'single', 0.136755),
(175, 'Smtp', 0.26414),
(176, 'some', 0.183924),
(177, 'someone', 0.265988),
(178, 'spam', 0.239049),
(179, 'Squander', 0.4),
(180, 'state', 0.338597),
(181, 'stay', 0.367084),
(182, 'stories', 0.395793),
(183, 'Strong', 0.945377),
(184, 'subject', 0.5),
(185, 'such', 0.237435),
(186, 'sun', 0.294089),
(187, 'Taken', 0.446225),
(188, 'tells', 0.088933),
(189, 'text', 0.54941),
(190, 'that', 0.345789),
(191, 'The', 0.5),
(192, 'therefore', 0.197946),
(193, 'they', 0.184376),
(194, 'three', 0.389346),
(195, 'Through', 0.590138),
(196, 'tired', 0.313369),
(197, 'tittle', 0.4),
(198, 'two', 0.175036),
(199, 'Unknown', 0.496866),
(200, 'urgent', 0.435678),
(201, 'urgently.my', 0.4),
(202, 'us-ascii', 0.082989),
(203, 'venice.example.com', 0.4),
(204, 'very', 0.23549),
(205, 'virtually', 0.660371),
(206, 'was', 0.173933),
(207, 'What', 0.18115),
(208, 'when', 0.191378),
(209, 'which', 0.126521),
(210, 'who', 0.307476),
(211, 'Will', 0.370922),
(212, 'with', 0.5),
(213, 'wiwa', 0.4),
(214, 'would', 0.319851),
(215, 'Write', 0.413948),
(216, 'www.incamail.com? ', 0.4),
(217, 'x-priority', 0.776826),
(218, 'x-suffix', 0.4),
(219, 'yahoo.com.au', 0.4),
(220, 'year', 0.401182),
(221, 'years', 0.41682),
(222, 'you', 0.5),
(223, 'Younde', 0.4),
(224, 'younger', 0.941466),
(225, 'your', 0.53137),
(226, 'Yours', 0.700611),
(228, 'Lagos', 0.875622),
(229, 'Assistance', 0.869565),
(230, 'Urgent', 0.869215),
(231, 'Bear', 0.868132),
(232, 'Relative', 0.866197),
(233, 'Family', 0.862069),
(234, 'Arrangement', 0.860294),
(235, 'Fax', 0.931818),
(236, 'Banking', 0.644351);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `sN` int(11) NOT NULL AUTO_INCREMENT,
  `userId` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `mName` varchar(50) NOT NULL,
  `eMail` varchar(50) NOT NULL,
  `phoneNo` int(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` varchar(50) NOT NULL,
  UNIQUE KEY `sN` (`sN`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sN`, `userId`, `lName`, `fName`, `mName`, `eMail`, `phoneNo`, `password`, `userType`) VALUES
(1, 'admin', 'a', 'd', 'm', 'adm', 80, 'a', 'admin'),
(3, 'user', 'u', 'u', 'u', 'u', 880, 'u', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE IF NOT EXISTS `usertype` (
  `sN` int(11) NOT NULL AUTO_INCREMENT,
  `userType` varchar(50) NOT NULL,
  UNIQUE KEY `sN` (`sN`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`sN`, `userType`) VALUES
(1, 'admin'),
(2, 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
