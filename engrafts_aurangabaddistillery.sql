-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 16, 2024 at 09:37 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `engrafts_aurangabaddistillery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'aurangabaddistillery@email.com', '#200@ADLLimited$');

-- --------------------------------------------------------

--
-- Table structure for table `enquires`
--

CREATE TABLE `enquires` (
  `id` int(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquires`
--

INSERT INTO `enquires` (`id`, `fname`, `email`, `contact`, `msg`) VALUES
(3, 'Ajeet gupta', 'ajeetgupta2012ajeet@gmail.com', '9559943095', 'Electrician'),
(4, '', '', '', ''),
(5, 'Vivek Randad', 'chetana.emp@gmail.com', '0772203544', 'Dear Sir,\r\nGreetings of Peace from Chetana Empowerment Foundation, Aurangabad,\r\nOurs is an registered NGO in year 2013 and since then working on De-addiction, Mental Wellness and higher Education to the deprived students of our project area.  \r\nSir, we would like to submit our Project Proposal on Value Education for the Students of 8,9 and 10th Std.  \r\nPlease guide us where we can submit this proposal under csr. \r\nThanking you,\r\nRegards,\r\nVivek Randad, \r\nwww.chetana.ngo '),
(6, 'Shailesh pal', 'sleshpal1236@gmail.com', '8401219871', 'I want to know your product'),
(7, 'Sanjay Patidar', 'srompdasai@gmail.com', '8269963095', 'BIOPOTASH'),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, 'Sanjay Patidar', 'srompdasai@gmail.com', '8269963095', 'For purchase biopotash'),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, 'Prathmesh Salunke', 'mahalaxmitrading0101@gmail.com', '9323289696', 'Vendor registration for raw material supplier.Hardware paint electric and chemical.'),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, 'Ajay Prakash Vishwakarma ', 'ajayvishwakarma17081@gmail.com', '8668632487', 'For a Commercial officer '),
(18, 'BALACHANDRA R A ', 'bala.exceed@gmail.com', '7259024260', 'Looking for FLY ASH from distillaries to manufacutre PDM (Potash Derived from Molasses).\r\n\r\nCan lift any quantity.'),
(19, 'BALACHANDRA R A ', 'bala.exceed@gmail.com', '7259024260', 'Respected Sir,\r\n\r\nLooking for FLY ASH from Molasses based Distillery units to produce PDM (Potash Derived from Molasses). \r\nFly ash obtained by burning Spent wash of distillery.\r\n\r\nTried to reach but given contact no not working. \r\n\r\nplease call back ..... or provide your contact no. \r\n\r\nRegards'),
(20, 'BALACHANDRA R A ', 'bala.exceed@gmail.com', '7259024260', 'Respected Sir,\r\n\r\nLooking for FLY ASH from Molasses based Distillery units to produce PDM (Potash Derived from Molasses). \r\nFly ash obtained by burning Spent wash of distillery.\r\n\r\nTried to reach but given contact no not working. \r\n\r\nplease call back ..... or provide your contact no. \r\n\r\nRegards'),
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, 'Balachandra R A', 'bala.exceed@gmail.com', '7259024260', 'Respected Sir\r\n\r\nI am looking for fly ash from diatillery unit for manufacturing Potash. \r\nKindly let me know the quantity available & rates.\r\n\r\nregards'),
(24, 'aurobindo d. kakdiya', 'paceinter@live.com', '9825418203', 'De potash vinnase (DPV)   100 Mt. Requirment'),
(25, '', '', '', ''),
(26, 'Jiten PAtel', 'jitenpatel2712@gmail.com', '9607554400', 'need spent wash ash'),
(27, 'VILAS BATTISE', 'vilasbattise@rediffmail.com', '9158485060', 'Respected Sirji please send details regarding bottling plant'),
(28, 'Sushant Vilas Dange', 'Sushantdange9923@gmail.com', '9923791264', 'Is there any requirement for ethanol frm B and C molasses with good rates '),
(29, 'Dhananjay Kulkarni', 'ckcool01@gmail.com', '9977301285', 'Requirment of Potash agriculture grade\r\nRequested to provide information about percentage of K and prices of product\r\nAny other plant nutrients with please inform\r\nRegards\r\nDhananjay Kulkarni'),
(30, 'Biswajit Biswas ', 'biswasbiswajit716@gmail.com', '8240235700', 'Has Aurangabad Distrilary ltd. been started to produce ethanol '),
(31, '', '', '', ''),
(32, '', '', '', ''),
(33, '', '', '', ''),
(34, '', '', '', ''),
(35, '', '', '', ''),
(37, 'Sachin s patil ', 'sachinpatil539@gmail.com', '9404484981', 'Bio potash inquiry '),
(43, 'Deepak Arunbhai Desale', 'deepakdesale13@gmail.com', '8460032969', 'I am looking for absolute alcohol, \r\nquantity - 100000 litre\r\nspecific gravity - 0.78 to .795 at 15.6 degree Celsius\r\npurity 99.6 % minimum\r\naldehyde content nil\r\nacetone content nil\r\npharma grade\r\nregular requirement 100000 litre'),
(48, 'Laxmi', 'laxmi.n@yatra.com', '', 'Hello Team,\r\n\r\nThis is in regard that we at Yatra Freight Online Services a subsidiary group of Yatra.com are providing Freight as well as custom clearance and transportation services, kindly let us know a good time to connect with you.\r\n\r\nWarmly \r\nLaxmi\r\n8802554502\r\nlaxmi.n@yatra.com'),
(49, '', '', '', ''),
(50, '', '', '', ''),
(51, '', '', '', ''),
(52, 'Arun Ketkar ', 'arun_ketkar@yahoo.co.in', '9869583084', 'Pure ENA for use in medicines and contact mobile number.'),
(53, '', '', '', ''),
(54, '', '', '', ''),
(55, 'Monika Pollak', 'monika.pollak@googlemail.com', '', 'Greetings,\r\n\r\nWe can skyrocket your Google rankings in a short time with completely whitehat links and technical seo service.\r\n\r\nPlease check our profile on fiverr: \r\n\r\nhttps://go.fiverr.com/visit/?bta=570412&brand=fiverrhybrid&landingPage=https2F%2Fwww.fiverr.com2Fdo-wix-wordpress-shopify-website-onpage-and-off-page-seo-optimization \r\n\r\nPlease check tons of 5 star reviews on our Fiverr gig'),
(56, 'deepak singh', 'shrenimservices@gmail.com', '9793903271', 'sir we also take the contract of mee plant evaporation if you have a requirement please call'),
(57, 'Wilbert Hernandez', 'hernandez.wilbert@gmail.com', '(08) 8364 4336', 'Hi,\r\n\r\nThis AI content writer is less than $90 one time payment for lifetime usage. You can write engaging articles, product descriptions, social media posts, emails, company bio, stories, ads, and 57 other content categories in minutes. \r\n\r\nIt is trained by Jasper AI data and 100M articles and scientific journals and uses the same tech (GPT3):\r\n\r\nhttps://appsumo.8odi.net/yRVWQ3'),
(58, 'Genesis Curtis', 'curtis.genesis10@googlemail.com', '0376 2105798', 'Hi aurangabaddistillery.com team,\r\n\r\nI can rank your webpages on the first page (the top 3 rankings) of Google with on page and off page SEO service that follows Google guidelines. Never lose your rankings.\r\n\r\nhttps://go.fiverr.com/visit/?bta=570412&brand=fiverrhybrid&landingPage=https2F%2Fwww.fiverr.com%2Fjeremymass_seo%2Fdo-seo-for-any-website-ranking-in-just-10-days-or-money-back\r\n\r\nMonthly packages include:\r\n\r\nOn Page :\r\n\r\n- Content Optimization\r\n- Images optimization\r\n- Meta Tags and H1,H2 Optimization\r\n- Permalink Set Up\r\n- Fix Broken Links or 404 Errors\r\n- Create XML Sitemap\r\n- Fix Canonical Issue\r\n- Speed Optimization\r\n\r\nOff Page:\r\n\r\n- Omnichannel Marketing\r\n- High quality backlinks from domains with real visitors\r\n\r\n5 keywords ranked on top 3 on Google: $120\r\n10 keywords ranked on top 3 on Google: $230\r\n20 keywords ranked on top 3 on Google: $320\r\n\r\nLet me know if you have any questions. Rank your webpages now.'),
(59, 'Candra Gurley', 'gurley.candra@msn.com', '02.78.49.81.92', 'We created the most advanced AI content creation and optimization tool following SEO practices. It is better than Jasper and SurferSEO. Your content will rank on Google first page. It will plan your content strategy, and create your content.\r\n\r\nhttps://appsumo.8odi.net/QOo623\r\n\r\nNLP content optimization: You can edit your old or new content and get them rank with this tool. \r\n\r\nIt has a plagiarism checker as good as copyscape. \r\n\r\nLifetime licence. 60 days money back guarantee.'),
(60, '', '', '', ''),
(61, 'Prathmesh salunke ', 'prathmeshsalunke77@gmail.com', '9323289696', 'Ena c heavy molasses grade .for export '),
(62, 'Neelam', 'neelam.seth6@gmail.com', '9811107327', 'Alcohol for cosmetic\r\n96 % \r\nOr 84%\r\nAlso , odoriferous alcohol we will  send our perfume base and your company will do the blend and  then send to us possible.'),
(63, 'Emmett Barrera', 'emmett.barrera@msn.com', '06-52760002', 'This message below is written by our AI without manual editing:\r\n\r\nAre you looking for a way to make your content stand out from the crowd and help your website rank higher on Google? Look no further - we have the perfect solution for you. \r\n\r\nIntroducing our AI content writing tool that has over 60 AI content tools, including long form posts, ads, products, poem, descriptions, blog titles, outlines, intros, body, conclusions, ad copy writer, social media content creator, SEO improver, and unique related image generator.\r\nThis AI content writing tool is the perfect way to create content that will stand out and help your website rank higher on Google. It will also generate unique images related to the keywords and descriptions you provide. You can create unlimited content as there is no word limit. \r\n\r\nTake your website to the next level and start creating content that will help it rank higher on Google. Get with the times and start using AI content writing with SEO capabilities today. \r\n\r\nIf you would like to find out more about our AI content writing tool and its capabilities:\r\n\r\nhttps://appsumo.8odi.net/x94kQA\r\n\r\nFeatures in short:\r\n- Lifetime, unlimited words\r\n- 60+ AI content cretion tools\r\n- SEO powered writer, improver and editor\r\n- Ultimate SERP tool: Competitor analysis with top 10 of SERP, analyzes with NLP, and helps create content on them\r\n- Unique image generator\r\n- 60 days money back guarantee\r\n\r\n'),
(64, 'Tressa Beckenbauer', 'tressa.beckenbauer@msn.com', '440-788-1183', 'Last 2 days to grab the best ai writer with GPT-3. Jasper and Surfer SEO alternative.\r\n\r\nThis message below is written by our AI without manual editing:\r\n\r\nAre you looking for a way to make your content stand out from the crowd and help your website rank higher on Google? Look no further - we have the perfect solution for you. \r\n\r\nIntroducing our AI content writing tool that has over 70 AI content tools, including long form posts, ads, products, poem, descriptions, blog titles, outlines, intros, body, conclusions, ad copy writer, social media content creator, SEO improver, and unique related image generator.\r\nThis AI content writing tool is the perfect way to create content that will stand out and help your website rank higher on Google. It will also generate unique images related to the keywords and descriptions you provide. You can create unlimited content as there is no word limit. \r\n\r\nTake your website to the next level and start creating content that will help it rank higher on Google. Get with the times and start using AI content writing with SEO capabilities today. \r\n\r\nIf you would like to find out more about our AI content writing tool and its capabilities:\r\n\r\nhttps://appsumo.8odi.net/x94kQA\r\n\r\nHuman summary: \r\nFeatures in short:\r\n- Lifetime, unlimited words\r\n- 70+ AI content cretion tools\r\n- SEO powered writer, improver and editor\r\n- Ultimate SERP tool: Competitor analysis with top 10 of SERP, analyzes with NLP, and helps create content on them\r\n- Unique image generator\r\n- 60 days money back guarantee\r\n\r\n'),
(65, '', '', '', ''),
(66, '', '', '', ''),
(67, 'Quick Computer Sales and Services', 'qcsaurangabad@gmail.com', '7028703225', '\r\nWE PROVIDE COMPLETE SERVICES \r\n AMC - ANNUAL MAINTENANCE CONTRACT SERVICES \r\nCOMPUTER,LAPTOP,PRINTER,CCTV,CAMERA.\r\n\r\nQuick Computer Sales and Services\r\nContact Number: 7028703225\r\nEmail ID : qcsaurangabad@gmail.com'),
(68, '', '', '', ''),
(69, '', '', '', ''),
(70, '', '', '', ''),
(71, '', '', '', ''),
(72, '', '', '', ''),
(73, 'Gedion Tafere', 'ged5159@gmail.com', '0913515985', 'Dears, \r\nI am Gedion from Ethiopia. I have found and used your product (Alcohol 96%) just before a year and it was good. Hence, i want to buy 2-3 Containers of Alcohol 96% from your company directly. Would you give me best offer please.  For More information you can contact me through WhatApp +251913515985. Thanks '),
(74, 'Franchesca Lawley', 'hacker@autobussrl.com', '0486 63 35 16', 'We have hacked your website aurangabaddistillery.com and extracted your databases. This was due to the security holes you had in your your site/server which have gained us remote control of everything that was on the server. \r\n\r\nOur team is mostly interested in customer, administrative, and employee information which we have extracted through your databases once we got remote control over the server. It still needs to be sorted out but it will be well-organized once finished. First, we will be going through the emails/sms information and contacting the recipient how you held in disregard about their information being exposed to a hacking group when you could have stopped it. This would be detrimental to your personal image with these relationships with these people. Lastly, now that we have information not only will we be monetizing off it with our methods but made public or sold to other people that will do whatever they wish with the information also after we are done.\r\n\r\nNow you can put a stop to this by paying a $3000 fee (0.10 BTC) in bitcoin to the address 37J6b5DADjC5WubZX5PCGNTg2WXjdVa3Fa We will be notified of payment which we will then delete the information we have obtained, patch the hole in the site/server which we got in and remove you from any future targeting in the future. You have 72 hours in doing so after viewing this message or the series of steps will commence. You can obtain bitcoin through such services such as paxful.com or do a search on bing.com'),
(75, 'Ganesh Sonawane', 'ganesh940531@gmail.com', '9284641239', 'My name is Ganesh Sonavane I am BSc Wine Technology. \r\nNow Msc alcohol first year is going on.If you have any job vacancy pls let me know.'),
(76, 'Delores Ritz', 'delores.ritz@hotmail.com', '0650 309 50 85', 'Hi aurangabaddistillery.com team,\r\n\r\nQmy.li Advanced URL Shortener has 90% discount with this coupon code: SAVE90\r\n\r\nLifetime package form one month price of Bitly: https://brnd.li \r\n\r\nQmy.li the ultimate solution for all your link management needs! Better than bitly, linktree, rebrandly. Say goodbye to cluttered and confusing URL links, and say hello to neat, professional, and trackable links.\r\n\r\nAdvanced link shortener\r\nQR code generation & Customization\r\n20+ Tracking pixels support\r\nAdvanced Targeting (Geo, Device, Language)\r\nMultiple domains: qmy.li, brnd.li, bynd.li, linkmybio.in, biolinkr.me, linkme.best, mrkt.best, idiec.com, peynr.com\r\nCustom domains (use your own domain)\r\nAd support and advanced analytics\r\nCampaigns & link rotator & A/B Testing\r\nLink in Bio generator with remove branding feature\r\nCustom splash pages\r\nCTA overlay: contact forms, polls, messages, newsletters, images, coupons, and more\r\nCSV bulk link import & export\r\nAPI\r\nWordpress plugin included\r\nCustom CMS integration guide (easy)\r\nA suite of marketing tools\r\nPowerful integrations: WordPress (plugin included), Zapier, Slack, Shortcuts, Google Analytics, Google Tag Manager, Facebook, Bing, Twitter, Snapchat, Reddit, Linkedin, Pinterest, Quora, TikTok, Adroll, and more...\r\n\r\n\r\nAll of these features are designed to help you improve your online presence and drive conversions.\r\n\r\nQmy.li Advanced URL Shortener is an all-in-one platform that gives you everything you need to manage your links like a pro. \r\n\r\nQmy.li will improve your online presence, drive conversions, or simply keep track of your links. Start using Qmy.li today and take your link management to the next level!\r\n\r\nOur bio links, and custom splash pages will make your links look professional and presented in a way that makes sense for your brand. You can customize your bio links and add content widgets as well as embed widgets.\r\n\r\nBio Link Embeds:\r\n\r\nPayPal Button\r\nWhatsApp Message & Call\r\nPhone\r\nFAQ\r\nRSS Feed\r\nOpenSea NFT\r\nYouTube Embed\r\nFacebook Post\r\nInstagram Post\r\nTweets Embed\r\nSpotify Embed\r\nSoundCloud Embed\r\nApple Music Embed\r\nTikTok Embed\r\nContact Form Embed\r\nNewsletter Embed\r\nProduct Embed (Amazon, Ebay, Etsy, any website)\r\nand more\r\n\r\n\r\nYou can also use our CTA overlays to encourage your visitors to take a specific action, such as signing up for your newsletter, filling out a contact form, or taking a poll.\r\n\r\n\r\nSkyrocket your marketing performance with qmy.li link shortener suite! Qmy.li Advanced URL Shortener has 90% discount with this coupon code: SAVE90'),
(77, 'Manuel Menendez', 'manuel.menendez@tervalis.com', '0767860302', 'Dear sir/madame,\r\n\r\nWe are looking for reliable supplier of vinasses. Trial order 3.000T (full vessel) and recurrent orders to import to Spain\r\n\r\nRegards,\r\nManuel.'),
(78, 'GAWSAVELS', 'Jemephami@kmaill.xyz', '5375068148', '<a href=http://cialiss.top>comprar cialis online</a> Serious Use Alternative 1 lopinavir will increase the level or effect of delavirdine by affecting hepatic intestinal enzyme CYP3A4 metabolism'),
(79, 'Kishor Patil', 'info@biocyll.com', '9970907250', 'Request you to please send us the specifications & quotation of your bio potash . \r\nWe are manufacturers of organic fertilizers, bio fertilizers and Bio stimulants.'),
(80, 'Lovie Orellana', 'hacker@powerup.pl', '08433 97 06 25', 'We have hacked your website aurangabaddistillery.com and extracted your databases. This was due to the security holes you had in your your site/server which have gained us remote control of everything that was on the server. \r\n\r\nOur team is mostly interested in customer, administrative, and employee information which we have extracted through your databases once we got remote control over the server. It still needs to be sorted out but it will be well-organized once finished. First, we will be going through the emails/sms information and contacting the recipient how you held in disregard about their information being exposed to a hacking group when you could have stopped it. This would be detrimental to your personal image with these relationships with these people. Lastly, now that we have information not only will we be monetizing off it with our methods but made public or sold to other people that will do whatever they wish with the information also after we are done.\r\n\r\nNow you can put a stop to this by paying a $3000 fee (0.11 BTC) in bitcoin. You can find our address by visiting https://www.blockchain.com/explorer/addresses/btc/3Hg8FLvfn1TtkziJWmXT7AcE8AmR3Ujket where you can copy and paste the address or scan the QR code. We will be notified of payment which we will then delete the information we have obtained, patch the hole in the site/server which we got in and remove you from any future targeting in the future. You have 72 hours in doing so after viewing this message or the series of steps will commence. You can obtain bitcoin through such services such as paxful.com or do a search on bing.com'),
(81, '', '', '', ''),
(82, '', '', '', ''),
(83, '', '', '', ''),
(84, 'Mahesh V', 'maheshv@raksoftech.com', '9765390625', 'For SAP end-to-end Implementation & support services. \r\nApplication Management Services. SAP Support, SAP Cloud Products, SAP industry-specific solutions, SAP Upgrade & Migration, Custom ABAP Development, Fiori & Embedded Analytics, SAP EWM.\r\n'),
(85, '', '', '', ''),
(86, 'Hitesh Mali ', 'hpengineeringcompanyin@gmail.c', '7977651449', 'We are manufacturer of Stainless steel bubble cap (4inch). We make this item in bulk. If you have any interest to buy from us please reply to this mail. '),
(87, 'AwugJhlU', 'encally@fmaill.xyz', '3857518715', 'Minor 1 hydrochlorothiazide will increase the level or effect of valganciclovir by acidic anionic drug competition for renal tubular clearance <a href=https://levitrax.pics>generic levitra 40mg</a>'),
(88, 'Miles Jakubowski', '9254591772', '', ''),
(89, '', '', '', ''),
(90, '', '', '', ''),
(91, '', '', '', ''),
(92, '???? Get free iPhone 15: http://bendduckrace.com/uploads/go.php ???? hs=e2a749cda557365130bcbb3a4234fc0c*', 'okebepu@merepost.com', 'kwfce4', 'kqzmbl'),
(93, 'Sunil A', 'sunil@caperindia.com', '9987682607', 'Proposal for Warehousing , Logistics services & Procurement.'),
(94, 'Amelia Brown', 'ameliabrown0325@gmail.com', '0338 4570024', 'Hi there,\r\n\r\nWe run a Youtube growth service, where we can increase your subscriber count safely and practically. \r\n\r\n- Guaranteed: We guarantee to gain you 700-1500 new subscribers each month.\r\n- Real, human subscribers who subscribe because they are interested in your channel/videos.\r\n- Safe: All actions are done, without using any automated tasks / bots.\r\n\r\nOur price is just $60 (USD) per month and we can start immediately.\r\n\r\nIf you are interested then we can discuss further.\r\n\r\nKind Regards,\r\nAmelia'),
(95, 'Manoj Tanaji More ', 'manojmore2111@gmail.com', '8010395028', 'Any vacancy available for the job please inform me.\r\nI am completed in Food Technology.\r\n'),
(96, 'Manoj Tanaji More ', 'manojmore2111@gmail.com', '8010395028', 'Any vacancy available for the job please inform me.\r\nI am completed in Food Technology.\r\n'),
(97, 'Amelia Brown', 'ameliabrown0325@gmail.com', '415-618-5103', 'Hi there,\r\n\r\nWe run a YouTube growth service, which increases your number of subscribers safely and practically. \r\n\r\nWe aim to gain you 700+ real human subscribers per month, with all actions safe as they are made manually (no bots).\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately.\r\n\r\nLet me know if you wish to see some of our previous work.\r\n\r\nKind Regards,\r\nAmelia'),
(98, 'Emily Jones', 'emilyjones2250@gmail.com', '3299022676', 'Hi there,\r\n\r\nWe run a Youtube growth service, where we can increase your subscriber count safely and practically. \r\n\r\n- Guaranteed: We guarantee to gain you 700-1500 new subscribers each month.\r\n- Real, human subscribers who subscribe because they are interested in your channel/videos.\r\n- Safe: All actions are done, without using any automated tasks / bots.\r\n\r\nOur price is just $60 (USD) per month and we can start immediately.\r\n\r\nIf you are interested then we can discuss further.\r\n\r\nKind Regards,\r\nEmily'),
(99, 'satish kuamr', 'simjeetk20@gmail.com', '8765346478', 'hello. pls send quote'),
(100, '', '', '', ''),
(101, '', '', '', ''),
(102, '', '', '', ''),
(103, '', '', '', ''),
(104, '', '', '', ''),
(105, 'Emily Jones', 'emilyjones2250@gmail.com', '3209341670', 'Hi there,\r\n\r\nWe run a Youtube growth service, where we can increase your subscriber count safely and practically. \r\n\r\n- Guaranteed: We guarantee to gain you 700-1500 new subscribers each month.\r\n- Real, human subscribers who subscribe because they are interested in your channel/videos.\r\n- Safe: All actions are done, without using any automated tasks / bots.\r\n\r\nOur price is just $60 (USD) per month and we can start immediately.\r\n\r\nIf you are interested then we can discuss further.\r\n\r\nKind Regards,\r\nEmily'),
(106, 'Sunil', 'sunil@caperindia.com', '9987682607', 'Proposal for Warehousing , Logistics services & Procurement'),
(107, 'Amelia Brown', 'ameliabrown0325@gmail.com', '5358503346', 'Hi there,\r\n\r\nWe run a Youtube growth service, where we can increase your subscriber count safely and practically. \r\n\r\n- Guaranteed: We guarantee to gain you 700-1500 new subscribers each month.\r\n- Real, human subscribers who subscribe because they are interested in your channel/videos.\r\n- Safe: All actions are done, without using any automated tasks / bots.\r\n\r\nOur price is just $60 (USD) per month and we can start immediately.\r\n\r\nIf you are interested then we can discuss further.\r\n\r\nKind Regards,\r\nAmelia\r\n\r\nUnsubscribe: https://removeme.click/yt/unsubscribe.php?d=aurangabaddistillery.com'),
(108, 'Emily Jones', 'emilyjones2250@gmail.com', '527202926', 'Hi there,\r\n\r\nWe run a Youtube growth service, where we can increase your subscriber count safely and practically. \r\n\r\n- Guaranteed: We guarantee to gain you 700-1500 new subscribers each month.\r\n- Real, human subscribers who subscribe because they are interested in your channel/videos.\r\n- Safe: All actions are done, without using any automated tasks / bots.\r\n\r\nOur price is just $60 (USD) per month and we can start immediately.\r\n\r\nIf you are interested then we can discuss further.\r\n\r\nKind Regards,\r\nEmily\r\n\r\nUnsubscribe: https://removeme.click/yt/unsubscribe.php?d=aurangabaddistillery.com'),
(109, '', '', '', ''),
(110, '', '', '', ''),
(111, '', '', '', ''),
(112, '', '', '', ''),
(113, 'RAHIM GILANI', 'rahimgilani21@gmail.com', '9824557619', 'EXTRA NEATURAL ALCOHOL 96.2% GIVE ME CIF PRICE LUANDA PORT 40FT. CONTEINER'),
(114, 'Amelia Brown', 'ameliabrown0325@gmail.com', '620422539', 'Hi there,\r\n\r\nWe run a YouTube growth service, which increases your number of subscribers both safely and practically.\r\n\r\nWe go beyond just subscriber numbers. We focus on attracting viewers genuinely interested in your niche, leading to long-term engagement with your content. Our approach leverages optimization, community building, and content promotion for sustainable growth, not quick fixes. Additionally, a dedicated team analyzes your channel and creates a personalized plan to unlock your full potential, all without relying on bots.\r\n\r\nOur packages start from just $60 (USD) per month.\r\n\r\nWould this be of interest?\r\n\r\nKind Regards,\r\nAmelia'),
(115, '', '', '', ''),
(116, 'Amelia Brown', 'ameliabrown12784@gmail.com', '3253063299', 'Hi there,\r\n\r\nWe run a Youtube growth service, where we can increase your subscriber count safely and practically. \r\n\r\n- Guaranteed: We guarantee to gain you 700-1500 new subscribers each month.\r\n- Real, human subscribers who subscribe because they are interested in your channel/videos.\r\n- Safe: All actions are done, without using any automated tasks / bots.\r\n\r\nOur price is just $60 (USD) per month and we can start immediately.\r\n\r\nIf you are interested then we can discuss further.\r\n\r\nKind Regards,\r\nAmelia\r\n\r\nUnsubscribe: https://removeme.click/yt/unsubscribe.php?d=aurangabaddistillery.com'),
(117, '', '', '', ''),
(118, '', '', '', ''),
(119, '', '', '', ''),
(120, '', '', '', ''),
(121, '', '', '', ''),
(122, '', '', '', ''),
(123, '', '', '', ''),
(124, '* * * Unlock Free Spins Today: https://randki.radiomix.pl/uploads/95vdax.php?4dllg * * * hs=e2a749cda557365130bcbb3a4234fc0c*', 'pazapz@mailbox.in.ua', 'povgxf', 'njo8l3'),
(125, '* * * <a href=\"https://randki.radiomix.pl/uploads/95vdax.php?4dllg\">Snag Your Free Gift</a> * * * hs=e2a749cda557365130bcbb3a4234fc0c*', 'pazapz@mailbox.in.ua', '1h8sw7', 'jxmbs5'),
(126, 'crordetty', 'Unfaind@mailsphere.xyz', '5015524683', '<a href=https://enhanceyourlife.mom/>what is priligy dapoxetine</a> The kidneys Kidneys The kidneys are a pair of bean shaped organs located retroperitoneally against the posterior wall of the abdomen on either side of the spine'),
(127, 'Apurva Dave', 'avdave29@gmail.com', '9227095022', 'We have an export enquiry for \r\nProduct - Denatured alcohol  95% for cosmetic use.\r\nPacking - packed in IBC of 1000 L. \r\nQuantity - 1 X 40 FCL every 2 months.\r\nPlease quote your best Price  CIFC5% Dakar.\r\n'),
(128, 'Rajesh ', 'rajeshkithani@gmail.com', '9923637184', 'Pharma grade alcohol \r\nAnd food grade ena \r\nRequired for export '),
(129, 'BIKRAM MOHAPATRA', 'bikrammohapatra556@gmail.com', '9348600384', 'For distributor & c & f in odisha. '),
(130, '', '', '', ''),
(131, '', '', '', ''),
(132, 'Lottie Thompson', 'lottiethompson218@gmail.com', '240614116', 'Hi\r\n\r\nWe operate a Facebook service, which increases your number of fans/followers safely and practically.\r\n\r\nThis can be for a page, a group, or an individual profile.\r\n\r\n- 400+ followers per month.\r\n- Real people who follow your page/group/profile because they are interested in what you do (no bots/fakes)\r\n- No automated techniques, everything is safe and manual.\r\n\r\nOur price is just $60 (USD) per month, with no contract.\r\n\r\nWe also offer an introductory trial, so you can see the process yourself first, risk-free.\r\n\r\nIf you are interested, just reply back and we can discuss further.\r\n\r\nKind Regards,\r\nLottie'),
(133, '', '', '', ''),
(134, '', '', '', ''),
(135, '', '', '', ''),
(136, '', '', '', ''),
(137, 'rahim gilani', 'rahimgilani21@gmail.com', '9824557619', 'extra neutral alcohol ENA 96.2 % GIVE ME CIF PRICE LUANDA PORT'),
(138, '', '', '', ''),
(139, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `img`) VALUES
(4, 'Cooling Tower Section', 'uploads/gallery/-6238025550732045931_121.jpg'),
(5, 'Birds eye view of Distillery Plant', 'uploads/gallery/IMG_20211018_224752.jpg'),
(6, 'Potash Recovery Plant', 'uploads/gallery/IMG_20211018_220133.jpg'),
(7, 'Potash Recovery Plant', 'uploads/gallery/IMG_20211018_215840.jpg'),
(8, 'Bio Digester', 'uploads/gallery/-6238025550732045909_121.jpg'),
(9, 'Reverse Osmosis Plant', 'uploads/gallery/-6238025550732045913_121.jpg'),
(10, 'DM/Softner Plant', 'uploads/gallery/-6238025550732045930_121.jpg'),
(11, 'Potash Plant - MVR Section', 'uploads/gallery/-6238025550732045939_121.jpg'),
(12, 'Potash Plant - Auto vertical filter press', 'uploads/gallery/-6238025550732045954_121.jpg'),
(13, 'Boiler Section', 'uploads/gallery/-6238025550732045958_121.jpg'),
(14, 'Turbine Section - One MW', 'uploads/gallery/-6238025550732045964_121.jpg'),
(15, 'Distillation Section', 'uploads/gallery/-6238025550732045975_121.jpg'),
(16, 'Fermentation Tanks', 'uploads/gallery/-6238025550732045977_121.jpg'),
(17, 'Molasses Storage Tank', 'uploads/gallery/-6238025550732045997_121.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `dateTime` date NOT NULL,
  `report` varchar(255) NOT NULL,
  `reporttype` varchar(255) NOT NULL DEFAULT 'annual-report'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `title`, `dateTime`, `report`, `reporttype`) VALUES
(7, 'Corporate Information', '2000-08-01', 'uploads/reports/Corporate_Information.pdf', 'policies-and-codes '),
(8, 'Prospectus', '2016-09-22', 'uploads/reports/Prospectus.pdf', 'policies-and-codes '),
(9, 'Code of Conduct', '2018-09-29', 'uploads/reports/Code_of_Conduct.pdf', 'policies-and-codes '),
(10, 'Annual Report 2014-2015', '2015-09-02', 'uploads/reports/Annual_Accounts_2014-15.pdf', 'annual-report'),
(11, 'Annual Report 2015-2016', '2016-03-31', 'uploads/reports/Annual_Accounts_2015-16.pdf', 'annual-report'),
(12, 'Annual Report 2016-2017', '2017-03-31', 'uploads/reports/Annual_Accounts_2016-17.pdf', 'annual-report'),
(13, 'Half Year September 2017', '2017-11-13', 'uploads/reports/Half_year_Sept17.pdf', 'half-year-notice'),
(14, 'AGM notice 2017', '2017-11-13', 'uploads/reports/meeting_notice_13112017.pdf', 'agm-notice'),
(15, 'Financial Result 2018', '2018-03-31', 'uploads/reports/Financial Result 31st March, 2018.pdf', 'financial-result'),
(16, 'Board meeting May 2018', '2018-05-25', 'uploads/reports/meeting_notice_25052018.pdf', 'board-meeting-notice'),
(17, 'Board meeting November 2018', '2018-11-13', 'uploads/reports/meeting_notice_13112018.pdf', 'board-meeting-notice'),
(18, 'Half Year September 2018', '2018-11-13', 'uploads/reports/Half_year_Sept18.pdf', 'half-year-notice'),
(19, 'Financial Result 2019', '2019-03-31', 'uploads/reports/Financial Result 30th May, 2019.pdf', 'financial-result '),
(20, 'AGM notice 2019', '2019-09-28', 'uploads/reports/Notice of AGM 2018-19.pdf', 'agm-notice'),
(21, 'Financial Result 2020', '2020-03-31', 'uploads/reports/Financial Result 31st March 2020.pdf', 'financial-result'),
(22, 'AGM notice 2021', '2021-09-30', 'uploads/reports/Notice of AGM 2020-21.pdf', 'agm-notice'),
(23, 'Annual Report 2020-2021', '2021-09-30', 'uploads/reports/Annual Report 2020-21.pdf', 'annual-report'),
(24, 'Financial Result 2021', '2021-03-31', 'uploads/reports/Financial Result 31st March 2021.pdf', 'financial-result'),
(25, 'ADL Postal Ballot Notice 2017', '2017-12-31', 'uploads/reports/ADL_Postal_Ballot_Notice.pdf', 'voting-result'),
(27, 'ADL Postal Ballot Notice 2020', '2020-11-20', 'uploads/reports/ADL_Postal_Ballot_Notice_2020.pdf', 'voting-result'),
(28, 'Annual Report 2017-2018', '2018-03-31', 'uploads/reports/ADL_Annual_Report_2018.pdf', 'annual-report'),
(29, 'Annual Report 2018-2019', '2019-03-31', 'uploads/reports/Annual Report 2018-19_.pdf', 'annual-report'),
(30, 'Annual Report 2019-2020', '2020-03-31', 'uploads/reports/Annual Report 2019-20.pdf', 'annual-report'),
(31, 'Scrutinized Report AGM 2020', '2020-09-29', 'uploads/reports/Scrutinizer Report of ADL AGM 2020.pdf', 'voting-result'),
(32, 'Share Holding Pattern 31.03.2020', '2020-03-31', 'uploads/reports/Share_Holding_Pattern_31.03.2020.pdf', 'share-holding-pattern'),
(33, 'Share Holding Pattern 31.03.2021', '2021-03-31', 'uploads/reports/Share_Holding_Pattern_31.03.2021.pdf', 'share-holding-pattern'),
(34, 'Voting results AGM 2018', '2018-03-31', 'uploads/reports/Voting_results_AGM2018.pdf', 'voting-result'),
(36, 'Board meeting November 2017', '2017-11-05', 'uploads/reports/Board meeting November 2017.pdf', 'board-meeting-notice'),
(37, 'Board meeting May 2019', '2019-05-05', 'uploads/reports/Board meeting May 2019.pdf', 'board-meeting-notice'),
(38, 'AGM notice 2018', '2018-09-30', 'uploads/reports/Notice of AGM 2017-18.pdf', 'agm-notice'),
(39, 'AGM notice 2020', '2020-09-30', 'uploads/reports/Notice of AGM 2020.pdf', 'agm-notice'),
(40, 'EOGM 2022', '2022-04-30', 'uploads/reports/Notice of EOGM-30.04.2022.pdf', 'agm-notice'),
(41, 'Archival Policy', '2022-04-29', 'uploads/reports/ARCHIVAL POLICY.pdf', 'policies-and-codes'),
(42, 'CSR Policy', '2022-04-29', 'uploads/reports/CSR POLICY.pdf', 'policies-and-codes'),
(43, 'Familarization Programme', '2022-04-29', 'uploads/reports/FAMILARIZATION PROGRAMME.pdf', 'policies-and-codes'),
(44, 'Policy on Materiality of the Event', '2022-04-29', 'uploads/reports/POLICY ON MATERIALITY OF THE EVENT.pdf', 'policies-and-codes'),
(45, 'Preservation Policy', '2022-04-29', 'uploads/reports/PRESERVATION POLICY.pdf', 'policies-and-codes'),
(46, 'Prevention of Sexual Harassment Policy', '2022-04-29', 'uploads/reports/SEXUAL HARASSMENT POLICY.pdf', 'policies-and-codes'),
(47, 'Voting Result EOGM 2022', '2022-04-30', 'uploads/reports/VOTING RESULT-EOGM-30.04.2022.pdf', 'voting-result'),
(48, 'Scrutinized Report EOGM 2022', '2022-04-30', 'uploads/reports/SCRUTINIZER REPORT-EOGM-30.04.2022.pdf', 'voting-result'),
(49, 'Financial Result 2022', '2022-03-31', 'uploads/reports/ADL_Financial Results_March 22.pdf', 'financial-result'),
(50, 'AGM notice 2022', '2022-09-30', 'uploads/reports/Notice of 22nd AGM.pdf', 'agm-notice'),
(54, 'Annual Return 2021-2022', '2022-09-30', 'uploads/reports/Annual Return-2021-2022.pdf', 'annual-report'),
(55, 'Annual Return 2020-2021', '2021-09-30', 'uploads/reports/Annual Return-2020-2021.pdf', 'annual-report'),
(56, 'Annual Report 2021-2022', '2022-09-30', 'uploads/reports/Annual Report and Notice of AGM-2021-22.pdf', 'annual-report'),
(57, 'Share Holding pattern 30.09.2017', '2017-09-30', 'uploads/reports/Share Holding Pattern- 30 sep 2017.pdf', 'share-holding-pattern'),
(58, 'Share Holding Pattern 30.09.2018', '2018-09-30', 'uploads/reports/Share Holding Pattern- 30 sep 2018.pdf', 'share-holding-pattern'),
(59, 'Share Holding Pattern 30.09.2019', '2019-09-30', 'uploads/reports/Share Holding Pattern- 30 sep 2019.pdf', 'share-holding-pattern'),
(60, 'Share Holding Pattern 30.09.2020', '2020-09-30', 'uploads/reports/Share Holding Pattern- 30 sep 2020.pdf', 'share-holding-pattern'),
(61, 'Share Holding Pattern 30.09.2021', '2021-09-30', 'uploads/reports/Share Holding Pattern- 30 sep 2021.pdf', 'share-holding-pattern'),
(62, 'Share Holding Pattern 31.03.2017', '2017-03-31', 'uploads/reports/Share Holding Pattern- 31 march 2017.pdf', 'share-holding-pattern'),
(63, 'Share Holding Pattern 31.03.2018', '2018-03-31', 'uploads/reports/Share Holding Pattern- 31 march 2018.pdf', 'share-holding-pattern'),
(64, 'Share Holding Pattern 31.03.2019', '2019-03-31', 'uploads/reports/Share Holding Pattern- 31 march 2019.pdf', 'share-holding-pattern'),
(65, 'Share Holding Pattern 31.03.2022', '2022-03-31', 'uploads/reports/Share Holding Pattern- 31 march 2022.pdf', 'share-holding-pattern'),
(66, 'Initial Disclosure 2022', '2022-04-09', 'uploads/reports/ADL - Initial Disclosure  09.04.2022.pdf', 'policies-and-codes'),
(67, 'Regulation 74 2022', '2022-04-09', 'uploads/reports/ADL- Regulation 74 09.04.2022.pdf', 'policies-and-codes'),
(68, 'Non applicability of regulation 27(2) 2022', '2022-04-09', 'uploads/reports/ADL_Non applicability of regulation 27(2) 09.04.2022.pdf', 'policies-and-codes'),
(69, 'RECONCILIATION OF SHARE CAPITAL AUDIT 2022', '2022-04-09', 'uploads/reports/ADLRCA-09.04.2022.pdf', 'policies-and-codes'),
(70, 'Appointment of Dilip Mutalik as Independent Director 2020', '2020-08-24', 'uploads/reports/Appointment of DilipMutalik ID 24.08.2020.pdf', 'policies-and-codes'),
(71, 'Auditor appointment intimation 2022', '2022-05-02', 'uploads/reports/Auditor Appointment Intimation-02.05.2022.pdf', 'policies-and-codes'),
(72, 'EOGM Proceedings 2022', '2022-05-02', 'uploads/reports/AURDIS - EOGM Proceeding-02.05.2022.pdf', 'policies-and-codes'),
(73, 'Compliance certificate for quarter end June 2022', '2022-06-30', 'uploads/reports/AURDIS_COMPLIANCE_CERTIFICATE_FOR_THE_QUARTER_ENDED_JUNE_2022_signed-30.06.2022.pdf', 'policies-and-codes'),
(74, 'Regulation 74(5) 2022', '2022-06-30', 'uploads/reports/AURDIS_Regulation 74(5)_signed-30.06.2022.pdf', 'policies-and-codes'),
(75, 'RECONCILIATION OF SHARE CAPITAL AUDIT REPORT 2022', '2022-06-30', 'uploads/reports/AURDISRSC-30.06.2022.pdf', 'policies-and-codes'),
(76, 'Covid impact disclosure 2020', '2020-07-20', 'uploads/reports/Covid Impact Disclosure 20.07.2020.pdf', 'policies-and-codes'),
(77, 'Death of Director intimation 2020', '2020-07-20', 'uploads/reports/Death of Director intimation 20.07.2020.pdf', 'policies-and-codes'),
(78, 'Disclosure under regulations 29(2) SEBI regulations (2011) 2021', '2021-10-18', 'uploads/reports/DisclosuresunderRegulation29(2)ofSEBI(SAST)Regulations2011 18.10.2021.pdf', 'policies-and-codes'),
(79, 'Intimation of CS appointment', '2020-09-29', 'uploads/reports/Intimation of CS Appointment 29.09.2020.pdf', 'policies-and-codes'),
(80, 'Intimation Certificate under Regulation 40(9) Of the SEBI Regulations (2015) 2022', '2022-04-09', 'uploads/reports/INTIMATIONADLRC40-09.04.2022.pdf', 'policies-and-codes'),
(81, 'Intimation regulation (7) 2022', '2022-04-11', 'uploads/reports/IntimationRegulation7-11.04.2022.pdf', 'policies-and-codes'),
(82, 'Intimation under regulation 10(6) of SAST 2021', '2021-10-16', 'uploads/reports/Intimationunderregulation10(6)ofSAST 16.10.2021.pdf', 'policies-and-codes'),
(83, 'Intimation under regulation 10(7) of SEBI regulations (2011) 2021', '2021-10-29', 'uploads/reports/Intimationunderregulation10(7)ofSEBI(SAST)regulations2011 29.10.2021.pdf', 'policies-and-codes'),
(84, 'Investors grievance contact details', '2021-09-30', 'uploads/reports/INVESTOR GRIEVANCE CONTACT DETAILS.pdf', 'policies-and-codes'),
(85, 'Non applicability of regulation 23(9) 2022', '2022-09-25', 'uploads/reports/Nonapplicabilityofregulation23(9)-25.09.2022.pdf', 'policies-and-codes'),
(86, 'Post board meeting intimation 2022', '2022-09-08', 'uploads/reports/Postboardmeetingintimation-08.09.2022.pdf', 'policies-and-codes'),
(87, 'Prior intimation of board meeting 2022', '2022-10-29', 'uploads/reports/Priorintimationoftheboardmeeting-29.10.2022.pdf', 'policies-and-codes'),
(88, 'Reconstitution of committees intimation 2020', '2022-08-18', 'uploads/reports/Reconstitution of Committees Intimation-18.08.2020.pdf', 'policies-and-codes'),
(89, 'SAST disclosure 2020', '2020-05-31', 'uploads/reports/SAST Disclosure-31.05.2020.pdf', 'policies-and-codes'),
(90, 'SEBI information 10(5)', '2021-10-09', 'uploads/reports/SEBIintomation105  09.10.2021.pdf', 'policies-and-codes'),
(91, 'Appointment of CS and Compliance officer', '2022-11-01', 'uploads/reports/Stock Exchange Intimation under reg 30 of sebi lodr 2015 for Appointment of CS and Compliance Officer.pdf', 'policies-and-codes'),
(92, 'Resignation of CS and Compliance officer', '2022-11-01', 'uploads/reports/Stock Exchange Intimation under Reg 30 of SEBI lodr 2015 for Resignation of CS and Compliance officer.pdf', 'policies-and-codes'),
(93, 'Board Meeting November 2022', '2022-11-14', 'uploads/reports/Intimation of Board Meeting For approval of Financial result signed.pdf', 'board-meeting-notice'),
(95, 'Board Meeting November 2022 Intimation', '2022-11-14', 'uploads/reports/Intimation of Board Meeting For approval of Financial result signed (1).pdf', 'board-meeting-notice'),
(96, 'Appointment of independent director', '2022-11-14', 'uploads/reports/Appointment of ID_Avinash Salunkhe.pdf', 'policies-and-codes'),
(97, 'Financial result September 2022', '2022-11-14', 'uploads/reports/Financial Results Sept 2022.pdf', 'financial-result'),
(98, 'Share holding pattern 30.09.2022', '2022-09-30', 'uploads/reports/Shareholding Pattern 30.09.2022.pdf', 'share-holding-pattern'),
(99, 'Share Holding pattern 31.3.2023', '2023-03-31', 'uploads/reports/Shareholding Pattern 31.03.2023.pdf', 'share-holding-pattern'),
(100, 'Financial result 2023', '2023-03-31', 'uploads/reports/Financial Results 2023.pdf', 'financial-result'),
(101, 'Board meeting May 2023', '2023-05-31', 'uploads/reports/Board Meeting May 2023.pdf', 'board-meeting-notice'),
(104, 'Annual Returns 2022-2023', '2023-08-31', 'uploads/reports/Annual Return 2022-2023.pdf', 'annual-returns'),
(105, 'ADL INTIMATION', '2023-08-16', 'uploads/reports/ADL INTIMATION.pdf', 'policies-and-codes'),
(106, 'ADL INTIMATION 1', '2023-08-31', 'uploads/reports/ADL INTIMATION 1.pdf', 'policies-and-codes'),
(107, 'Annual Report 2022-2023', '2023-08-31', 'uploads/reports/Annual Report 2022-2023.pdf', 'annual-report'),
(108, 'AGM notice 2023', '2023-01-31', 'uploads/reports/AGM Notice 2023.pdf', 'agm-notice'),
(109, 'ADL intimation', '2023-09-08', 'uploads/reports/ADLINTIMATION.pdf', 'policies-and-codes'),
(110, 'Voting result AGM 2023', '2023-09-30', 'uploads/reports/Voting Results of AGM 2023.pdf', 'voting-result'),
(111, 'ADL Intimation', '2023-11-13', 'uploads/reports/ADLINT_1.PDF', 'policies-and-codes'),
(112, 'ADL Meeting outcome 2023', '2023-11-13', 'uploads/reports/ADLOUTCOME.pdf', 'policies-and-codes'),
(113, 'Board meeting 2023', '2023-11-13', 'uploads/reports/Board Meeting November 2023.pdf', 'board-meeting-notice'),
(114, 'ADL Postal Ballot Notice 2023', '2023-11-27', 'uploads/reports/ADL Postal Ballot Notice.pdf', 'agm-notice'),
(115, 'Aurangabad Distillery Limited Intimation', '2023-11-27', 'uploads/reports/ADLINTIMATION NEW.pdf', 'policies-and-codes'),
(116, 'Signed imitation of NSE', '2024-01-23', 'uploads/reports/Signed Intimation of NSE.pdf', 'policies-and-codes'),
(117, 'Intimation of appointment of Compliance officer', '2024-01-23', 'uploads/reports/ADLIntimationofAppointmentofComplianceofficer.pdf', 'policies-and-codes'),
(118, 'Intimation under 74(5) of SEBI', '2024-01-23', 'uploads/reports/ADL Intimation under 74 (5) of the SEBI (Depositories and Participants) Regulations 2018.pdf', 'policies-and-codes'),
(119, 'Reconciliation of Share capital', '2024-01-23', 'uploads/reports/ADLReconciliationofShareCapitalAuditSigned.pdf', 'policies-and-codes'),
(120, 'Compliance certificate for Quarter end', '2024-01-23', 'uploads/reports/AURDIS_COMPLIANCE_CERTIFICATE_FOR_THE_QUARTER_ENDED_December_2023_signed.pdf', 'policies-and-codes'),
(121, 'Intimation of Evoting with report', '2024-01-23', 'uploads/reports/ADLIntimationofEvotingwithScrutinizerReportfinal.pdf', 'policies-and-codes'),
(122, 'ADL notice final', '2024-01-23', 'uploads/reports/ADLNOTICEFINAL.pdf', 'policies-and-codes'),
(123, 'Environment clearance for 30KLPD to 90KLPD', '2024-04-29', 'uploads/reports/Environmental Clearance for Expansion 30 KLPD to 90 KLPD.pdf', 'policies-and-codes'),
(124, 'Extension EC letter', '2024-04-29', 'uploads/reports/Extension EC Letter.pdf', 'policies-and-codes'),
(125, 'MPCB', '2024-04-29', 'uploads/reports/DOC-20231229-WA0140..pdf', 'policies-and-codes'),
(126, 'Financial result 2023 2024', '2024-05-25', 'uploads/reports/Financial result 2023-24.pdf', 'financial-result'),
(127, 'Post BM Intimation_Outcome_Ack', '2024-05-25', 'uploads/reports/Post BM Intimation_Outcome_Ack.pdf', 'adl-postal'),
(128, 'ADLIntimation_Full result_ack (2)', '2024-05-25', 'uploads/reports/ADLIntimation_Full result_ack (2).pdf', 'policies-and-codes'),
(129, 'ADLIntimation_Full result_ack_outcome', '2024-05-25', 'uploads/reports/ADLIntimation_Full result_ack_outcome.pdf', 'policies-and-codes'),
(130, 'ADLIntimation_Full result', '2024-05-25', 'uploads/reports/ADLIntimation_Full result.pdf', 'policies-and-codes'),
(131, 'ADLINTIMATIONCS_Ack_XBRL', '2024-05-25', 'uploads/reports/ADLINTIMATIONCS_Ack_XBRL.pdf', 'policies-and-codes'),
(132, 'Change of Compliance officer_Signed', '2024-05-25', 'uploads/reports/Change of Compliance officer_Signed.pdf', 'policies-and-codes'),
(133, 'ADLINTIMATIONCS_Ack', '2024-05-25', 'uploads/reports/ADLINTIMATIONCS_Ack.pdf', 'policies-and-codes'),
(134, 'Certificate under Regulation 74(5) ', '2024-07-13', 'uploads/reports/AURDIS-Certificate under Regulation 74(5) of the SEBI (Depositories and Participants) Regulations, 2018.pdf', 'policies-and-codes'),
(135, 'NSE Acknowledgement', '2024-07-13', 'uploads/reports/AURDIS-Certificate under Regulation 74(5) of the SEBI (Depositories and Participants) Regulations, 2018_Acknowledgement.pdf', 'policies-and-codes'),
(136, 'ADL - Reconciliation of Share Capital June 2024', '2024-07-17', 'uploads/reports/ADL - Reconciliation of Share Capital June 2024.pdf', 'policies-and-codes'),
(137, 'Intimation of Board Meeting for approval of Bonus and ASC', '2024-08-28', 'uploads/reports/Intimation of Board Meeting for approval of Bonus and ASC.pdf', 'board-meeting-notice'),
(138, 'Annual report 2023- 2024', '2024-09-06', 'uploads/reports/Aurangabad Distillery Limited AR 2023-24 (06.09.2024).pdf', 'annual-report'),
(139, 'AGM notice 2024', '2024-09-06', 'uploads/reports/1. ADL- Notice of AGM.pdf', 'agm-notice'),
(140, 'Proxy form and attendance sheet', '2024-09-06', 'uploads/reports/3. AURDIS - Proxy Form & Attendence Slip.pdf', 'policies-and-codes'),
(141, 'SH13 and SH14', '2024-09-06', 'uploads/reports/SH-13 & SH-14.pdf', 'policies-and-codes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquires`
--
ALTER TABLE `enquires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquires`
--
ALTER TABLE `enquires`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
