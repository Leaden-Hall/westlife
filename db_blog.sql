/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.7.19 : Database - westlife
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`westlife` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `westlife`;

/*Table structure for table `albums` */

DROP TABLE IF EXISTS `albums`;

CREATE TABLE `albums` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `albums_title_unique` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `albums` */

/*Table structure for table `blogs` */

DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `blogs_title_unique` (`title`),
  KEY `blogs_published_by_foreign` (`published_by`),
  CONSTRAINT `blogs_published_by_foreign` FOREIGN KEY (`published_by`) REFERENCES `users` (`username`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `blogs` */

insert  into `blogs`(`id`,`title`,`summary`,`logo`,`content`,`published_by`,`created_at`,`updated_at`) values (4,'Westlife’s Mark Feehily: ‘Mariah Carey once told me off for smoking!’','For 14 years Mark Feehily was the quiet one with the big voice in Westlife. It’s almost two decades since Westlife and Mariah Carey teamed up for their epic cover version of Phil Collins’ Against All Odds and, in that time, it’s safe to say Mark’s seen it all','images/blog1.jpg','For 14 years Mark Feehily was the quiet one with the big voice in Westlife.\r\n\r\nIt’s almost two decades since Westlife and Mariah Carey teamed up for their epic cover version of Phil Collins’ Against All Odds and, in that time, it’s safe to say Mark’s seen it all.\r\n\r\nFrom huge success, overzealous fans and heartbreak to partying with Simon Cowell and being left out in the cold after helping the band shift 55million records, Mark still insists ‘there was a lot to learn post-Westlife’.\r\n\r\n\r\nAnd, while he doesn’t see Shane Filan, Nicky Byrne or Kian Egan all that often, Mark, 37, says the Westlife boys are still close.\r\n\r\nThere’s not a lot of time to think about the past, anyway; with new music to keep him busy, as well as an upcoming tour with Mariah, 47, herself and a happy relationship that’s got him itching to start a family, it’s fair to say that, these days, he’s in a very special world of his own.\r\n\r\nYou’re going on tour with Mariah Carey! How does it feel?\r\n\r\nIt feels amazing. I’ve been a fan of hers since I was a kid and, going back to when Westlife worked with her, people often ask us what was our favourite moment of being in the band. Others might say singing for the Pope, but for me it was always meeting and working with Mariah. But also, as a singer who has a Christmas record out, to be on these huge gigs with the queen of Christmas, you couldn’t ask for a better position to be in.\r\n\r\nWhat are you looking forward to most about going on tour?\r\n\r\nI’ve made a Christmas record and my first album was darker pop, but with this I got to hand-pick the genre. So I’m really excited for people to hear the songs and to perform in front of the big Mariah audience. I’m also excited for people to see that I’m actually a really happy and bright person!\r\n\r\nYou’re about to release a new album. Do you still worry about how people will react to new material after all these years?\r\n\r\nYou’ll always worry in case people hate it! But I reckon if enough people think that, you’re doing something right. In Westlife, we’d say, ‘If we p*** that many people off, fine, but we’ve also got loads of fans’. Most acts have a lot of people who hate their music, but it’s not all bad. If you’re getting a reaction, it means there’s something there. The worst is if people don’t react at all!\r\n\r\nWhat are your best memories of being in Westlife?\r\n\r\nThere were so many moments where we’d huddle in the corner of a club, at a gig or backstage and we’d be like, ‘Is this actually happening? They’ve flown us and our mothers on a private jet, to the Vatican, to meet the Pope and perform for him. What is going on?’\r\n\r\n\r\nRead more at http://www.celebsnow.co.uk/celebrity-news/westlifes-mark-feehily-mariah-carey-told-off-smoking-715259#odG6ZFyWwdIUSTAJ.99','thanh','2018-04-28 23:48:28','2018-04-28 23:48:28'),(5,'Westlife to split after 14 years','The Irish boyband are calling it a day after 20 top five hits, but are planning a farewell arena tour and album. Perhaps terrified at the prospect of having to compete for critical attention with the Stone Roses, Westlife have decided to call it a day.','images/blog2.jpg','The Irish boyband, which was formed in 1998 and has inflicted more than 20 top five hits on the general public since then, will no longer be releasing records as relentlessly creative, not to mention downright influential, as Unbreakable, Fool Again and Flying Without Wings. We must, however, keep our champagne corked for now – the band are threatening a farewell arena tour and greatest hits album before they are finally on their way.\r\n\r\nWestlife have sold more than 40m albums during their career and the tour will be a chance for their fans to hear some of those 14 No 1 hits nobody can quite recall the name of for one last time. After that, the foursome, which comprises Nicky Byrne, 33, Shane Filan, 32, Mark Feehily, 31, and Kian Egan, 31, have promised to explore \"new ventures\". Whether this means a sonic exploration along the fringes of underground electronica or just some charity work and crap solo albums remains to be seen.Unfortunately for those of us trying to spin a news story out of this event, there are no reported fights, affairs or even creative differences to attribute the split to. Rather, it seems their parting is \"amicable\" and quite possibly based around the fact they can\'t believe they\'re still getting away with this rubbish after 14 years so best quit while they\'re ahead.\r\n\r\nIn a statement, the group said: \"Over the years, Westlife has become so much more to us than just a band. Westlife are a family.\"\r\n\r\nSigns that all was not well in the Westlife camp came when the band split with their label boss, Simon Cowell, earlier this year. Byrne said at the time: \"We signed to Simon back in 1998 and he was brilliant, but then came the development of X Factor and American Idol. Simon became famous himself and his interests went that way rather than on Westlife. We almost felt a little bit unloved with Simon Cowell, if I was to be honest.\"A band source reportedly told the Sun: \"There\'s no bad blood in the band, they\'re still great pals. But all good things come to an end and they are all keen to do their own thing. It\'s not something they have done lightly as they are still at the top of their game. They could carry on making albums into their old age the way their career has gone, but none of them want to do that.\"\r\n\r\nLet\'s be thankful for small mercies. Until the 2016 reunion tour, that is.','thanh','2018-02-05 23:48:28','2018-04-28 23:48:28'),(6,'\'The best news I have heard in a long time!\' Westlife fans sent into meltdown after Louis Walsh \'CONFIRMS\' the band will reunite','They were one of the UK\'s biggest boybands, leaving fans devastated by their split in 2012 after 14 years together.\r\n\r\nBut Louis Walsh has sent Westlife fans wild after revealing the group are set to reunite.\r\n','images/blog3.jpg','They were one of the UK\'s biggest boybands, leaving fans devastated by their split in 2012 after 14 years together.\r\n\r\nBut Louis Walsh has sent Westlife fans wild after revealing the group are set to reunite.\r\n\r\nThe 65-year-old Irish music mogul told RSVP Live magazine on Thursday that a reunion for the Flying Without Wings singers was definitely on the cards, despite having no idea when such a reunion would be.\r\nconic: Westlife were one of the biggest boybands in the UK in it\'s heyday, releasing thirteen number one singles\r\n\r\n\'I WILL BE HAPPY IF WESTLIFE GET BACK TOGETHER ALL FIVE OF YEAHS!\' one fan exclaimed, while another added: \'Just nearly had heart palpatations finding Westlife are having a reunion.\'\r\n\r\nA third wrote: \'Louis Walsh confirming Westlife are getting back together? If they are that\'s the best news I\'ve heart in a long time.\'\r\n\r\nBandmate Nicky Byrne both fulled and dispelled the rumours, first tweeting a denial saying: \'Shame this Westlife news is not true, they were always my guilty pleasure...\'\r\n\r\nLater the singer and TV presenter ramped up the nostalgia by tweeting a video of the band attempting to film a promotional clip for their fans in the Phillippines, eventually descending into fits of laughter. \r\nWestlife were one of the UK\'s biggest boybands, first breaking onto the scene in 1999 with Swear It Again, leading to 13 UK Number One singles and ten Top Ten UK albums.\r\n\r\nFans were distraught when the group decided to split in 2011, embarking on a farewell tour to celebrate their 14 years in the music business.\r\n\r\nThe group became a foursome, made up of Nicky Byrne, Kian Egan, Mark Feehily and Shane Filan, in 2004 following the departure of Brian McFadden.\r\n\r\nRepresentatives for Louis and Nicky have been contacted for comment.  \r\n','thanh','2017-03-28 23:51:48','2018-04-28 23:51:48'),(7,'This is why the CIA used Westlife to interrogate prisoners','\"So I say a little prayer, and hope my dreams will take me there, where the skies are blue to see you once again, my love.\"\r\n\r\nThat\'s the chorus of Westlife\'s 2000 single My Love from their album Coast to Coast.','images/blog4.jpg','\"So I say a little prayer, and hope my dreams will take me there, where the skies are blue to see you once again, my love.\"\r\n\r\nThat\'s the chorus of Westlife\'s 2000 single My Love from their album Coast to Coast.\r\n\r\nYou might well enjoy hearing the ballad a few times in a day. But full volume continuously for days on end?\r\n\r\nFor Suleiman Abdullah, a Tanzanian captured by the CIA, it was used in interrogation.\r\n\r\nIn a report called \"Out of the Darkness\", the American Civil Liberties Union claims the track formed part of \"enhanced interrogation techniques\", otherwise known as torture. It was played on repeat to try and break Abdullah down.\r\n\r\n\"His interrogators would intersperse a syrupy song called My Love with heavy metal, played on repeat at ear-splitting volume,\" explains the report.\r\n\r\n\"They told Suleiman, a newly-wed fisherman, that they were playing the love song especially for him.\"For more than a month, Suleiman was subjected to techniques designed to psychologically destroy him.\r\n\r\nThe report claims his torturers doused him with ice-cold water, beat him and slammed him into walls.\r\n\r\nThey interrogated him about what he was doing in Somalia, where he was captured and the names of people, all but one of whom he had never heard of.\r\n\r\n\"The music pounded constantly as part of a scheme to assault prisoners\' senses,\" says the report.\r\n\r\n\"It stopped only when a CD skipped or needed changing. When that happened, prisoners would call to one another in a desperate attempt to find out who was being held alongside them.\"\r\n\r\nThe brain is not able to copeBut just as music has the power to be psychologically damaging, it also has the power to heal and inspire people.','thanh','2016-06-11 23:51:48','2018-04-28 23:51:48'),(10,'An enjoyable chat with Mark from Westlife','WESTLIFE’S REIGN WILL COME TO AN END IN 2012 AND HERE IS AN INTERVIEW WITH MARK FROM THAT BAND TALKING ABOUT THE FUTURE AND THE PAST AND SOME OTHER STUFF (INCLUDING BAKING) TOO','images/blog5.jpg','How are you?\r\nI am good thank you.\r\n\r\nExciting. What’s been happening apart from your band – the only band I ever really loved – splitting up?\r\nErm, well this week we’ve been doing loads of promo but it actually hasn’t been crazy busy. Apart from that we’ve just been sitting around…\r\n\r\nIs it a bit like when you know you’re leaving a job and you’re working your notice period so you’re not really working as hard?\r\nWell there have been moments like that, I have to admit. Let’s just say we didn’t take Lorraine Kelly as seriously as we might usually have done.\r\n\r\nPerhaps in your final moments as a band you’ll experience the carefree abandon you missed during your living years. Maybe it will all make sense far too late, a bittersweet glimpse of what might have been.\r\nWell there’s definitely a feeling that a weight has been lifted, in a sense, and I think that there have been many moments throughout our career that would have been more enjoyed if it was that way. There was a pressure that we put on ourselves and maybe it was a pressure that we should have tried to hide a bit more. With the business side of things and the boring side of things it’s important to be driven, but maybe that came through a bit much in the music. But since we announced the split and it’s been done, I’ve felt that it was a bit like coming out – now it’s over, you feel a big weight off your shoulders and you can begin to enjoy yourself.\r\n\r\nBlimey. So are you relieved it’s over?\r\nI think everybody’s relieved that we’ve got to where we are and it’s all amicable. Nobody really knew exactly what was going to happen and that created this tension. Nobody quite knew how it was going to unfold, and how we were going to manage the end of the band.','thanh','2015-09-03 23:53:50','2018-04-28 23:53:50'),(11,'Shane Filan doesn\'t speak to Brian McFadden','Shane Filan has ruled out Brian McFadden returning to Westlife in the future because he\'s not in contact with the former band member.Shane Filan has ruled out having Brian McFadden back in Westlife because they don\'t speak.\r\n\r\n','images/blog6.jpg','The 38-year-old singer says he sees the Irish band as just four now - completed by original members Mark Feehily, Nicky Byrne and Kian Egan - and should the \'Flying Without Wings\' hitmakers ever reunite they won\'t be inviting Brian along because they\'ve lost contact since he quit in 2004.\r\n\r\nShane told The Sun newspaper: \"I haven\'t seen Brian in 10 years. We\'ve just lost touch, it\'s like going to school with somebody and then not speaking.\r\n\r\n\"I wouldn\'t speak to him to reminisce, not all all. We all had a good relationship with Brian then he just left the band very early on and I don\'t think we would ever reunite with him.\r\n\r\n\"I honestly see Westlife as being four people now - the four people who started and finished Westlife are what I consider the band.\r\n\r\n\"Brian has been out of the band longer than he was in it.\r\n\r\n\"If we ever reunited down the line it would only be the four of us.\"\r\n\r\nThe group\'s manager Louis Walsh perviously predicted that a Westlife reunion will happen - but without Brian.\r\n\r\nThe \'X Factor\' judge wants the \"Fab Four\", Shane, Mark, Nicky and Kian to be involved in any reformation, not the 37-year-old singer - who left to pursue solo projects - despite Brian saying \"never say never\" to rejoining his former bandmates in the future.\r\n\r\nLouis said recently: \"Brian won\'t be involved, it will be the Fab Four. Totally.\r\n\r\n\"The four of them just see them themselves as Westlife.\"\r\n\r\nThe entertainment professional wants it to be just the four of them because they\'ll be \"happy\", and said it\'s more convenient considering three of them all live in the same town.\r\n\r\nWhen asked if Brian begged to be included, Louis replied: \"No, I prefer a happy band and four happy people.\r\n\r\n\"They all know each other, they all respect each other.\r\n\r\n\"Three of them live in the same town in Sligo, so it makes more sense.\"\r\n\r\nWestlife split in 2012 after 14 years together.\r\n\r\nThey sold over 50 million records worldwide and landed 14 number one singles in the UK.','thanh','2014-12-11 23:53:50','2018-04-28 23:53:50'),(12,'Mark Feehily plans to work harder in 2018','Mark Feehily thinks it is too soon for Westlife to reform and thinks he and the rest of the boys should wait until the time is right.\r\nMark Feehily\'s New Year\'s resolution is to work hard and say \"yes\" to every opportunity offered to him.\r\n\r\n\r\n','images/blog7.jpg','The former Westlife singer Mark made a return to music in 2017, releasing his first festive album, titled \'Christmas\' and supporting Mariah Carey on her \'All I Want For Christmas\' UK tour.\r\n\r\nMark has been writing new songs for a new solo studio album and is wanted for some stage roles in musicals and he has made it his mission to stay busy because when he\'s not working he can get \"stuck in a rut\" at his home in Sligo, Ireland.\r\n\r\nSpeaking exclusively to BANG Showbiz, he said: \"I think my resolutions for 2018 are to keep myself very, very busy. One thing I\'ve learnt over the years since Westlife finished is that it\'s all well and good to have your own time and not be busy but I feel that I\'m happier when I\'m busy. To keep saying \'yes\' to things and keep working very hard, because I think if I just sit at home in Ireland that\'s when I kind of get stuck in a rut. I\'m going to keep moving and keep going at all times.\r\n\r\n\"There are some very exciting projects in the pipeline for next year, but there are a couple of opportunities which are outside the recording side of entertainment. I\'ve been getting a lot of acting offers for theatre and that\'s something that\'s always excited me. Myself the rest of the lads met through theatre before the Westlife thing, that\'s how we all got to know each other. It\'s about finding the right part or role, I wouldn\'t want to just jump into \'Grease\' in the West End I want to do something that\'s a challenge to me and that I would have to really work hard at. I like the idea of something that\'s going to stretch me and something that I\'m going to have to work really hard at doing.\"\r\n\r\nMark, 37, is certain he will make a new album for 2018 but he\'ll be doing it more for his own personal satisfaction rather than to sell lots of copies.The \'Flying Without Wings\' hitmaker is adamant chart success isn\'t important to him now because he and the rest of Westlife - Shane Filan, Nicky Byrne and Kian Egan - were lucky enough to have 14 UK number ones before they disbanded in 2012.\r\n\r\nMark said: \"To me success isn\'t about chart positions, I\'m not going to judge my albums on chart positions or sales figures like we did in Westlife. I\'ve left that behind with Westlife, it\'s not that I don\'t want to sell s**t loads of records but it doesn\'t make my record a failure. That\'s important for me. Selling a million records doesn\'t always fulfil you. I want artistic fulfilment and personal fulfillment.\"\r\n\r\nMark\'s new album \'Christmas\' is out now.','thanh','2018-04-28 23:53:50','2018-04-28 23:53:50'),(14,'Westlife celebrate success with hits album','To mark fourteen years of success in the music industry, Westlife are releasing their Greatest Hits on November 21.\r\n\r\nHaving sold over 44 million records worldwide, had 14 number one singles and 7 number one albums, Westlife are treating their fans to a special compilation of their hit records.','images/blog8.jpg','To mark fourteen years of success in the music industry, Westlife are releasing their Greatest Hits on November 21.\r\n\r\nHaving sold over 44 million records worldwide, had 14 number one singles and 7 number one albums, Westlife are treating their fans to a special compilation of their hit records.\r\n\r\nSpeaking about the upcoming album the band said: \"We’re incredibly proud of what we’ve achieved.\"Westlife are celebrating fourteen years in the music industry with a Greatest Hits album.\r\n\r\nThey added: \"We are looking forward to releasing our Greatest Hits as a special thank you to our fans who have supported us throughout our career.”\r\n\r\nThe specific tracklisting will be released at a later date, but fans can preorder the album from Monday from Amazon and HMV.\r\n\r\nVersions will include a standard CD featuring the Greatest Hits plus brand new tracks and there’ll also be a 2CD/DVD deluxe version including the Greatest Hits, brand new tracks and video footage.Back on track with a new album\r\nSince then, life is looking up for Shane, after the band\'s original manager Louis Walsh landed the 35-year-old with a record deal which meant he could go it alone as a solo artist with a new album and a sell-out tour.\r\n\r\nHe\'s also released his autobiography My Side of Life which is a revealing look into his \"white-knuckle, roller coaster ride\" of a life.Mark Feehily is in the catering biz\r\n \r\nMark Feehily was Westlife\'s lead singer, along with fellow bandmate Shane Filan, but since the group disbanded, he has fallen below the radar.\r\n\r\nSplitting from his fiance Kevin McDaid in 2012, the 34-year-old piled on the pounds, and announced he was entering a French detox and weightloss camp in 2014.\r\n\r\nNow, Mark has started his own catering business which sees him serving food and hot drinks from the back of a van as he travels to festivals and events around the UK and Ireland.But while many fans are shocked that the singer is getting his hands dirty in the catering biz, fear not, because Mark has now announced plans for his solo career.\r\n\r\nHis new album will debut a \"darker, more soulful, electronic sound\" and is scheduled for release later this year.','thanh','2018-09-28 23:53:51','2018-04-28 23:53:51');

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` int(10) unsigned NOT NULL,
  `commenter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_blog_id_foreign` (`blog_id`),
  KEY `comments_commenter_foreign` (`commenter`),
  CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_commenter_foreign` FOREIGN KEY (`commenter`) REFERENCES `users` (`username`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `comments` */

/*Table structure for table `galleries` */

DROP TABLE IF EXISTS `galleries`;

CREATE TABLE `galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `galleries_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `galleries` */

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gallery_id` int(10) unsigned NOT NULL,
  `caption` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_gallery_id_foreign` (`gallery_id`),
  CONSTRAINT `images_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `images` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_04_21_022055_create_subscriptions_table',1),(4,'2018_04_21_022233_create_galleries_table',1),(5,'2018_04_21_022357_create_images_table',1),(6,'2018_04_21_022614_create_albums_table',1),(7,'2018_04_21_022703_create_songs_table',1),(8,'2018_04_21_022916_create_blogs_table',1),(9,'2018_04_21_023259_create_comments_table',1),(10,'2018_04_21_024355_create_permissions_table',1),(11,'2018_04_21_024842_create_roles_table',1),(12,'2018_04_21_031501_create_roles_permission_table',1),(13,'2018_04_21_031821_create_users_roles_table',1),(14,'2018_04_26_011550_create_tours_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_title_unique` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

/*Table structure for table `roles_permissions` */

DROP TABLE IF EXISTS `roles_permissions`;

CREATE TABLE `roles_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `roles_id` int(10) unsigned NOT NULL,
  `permissions_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `roles_permissions_roles_id_foreign` (`roles_id`),
  KEY `roles_permissions_permissions_id_foreign` (`permissions_id`),
  CONSTRAINT `roles_permissions_permissions_id_foreign` FOREIGN KEY (`permissions_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `roles_permissions_roles_id_foreign` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles_permissions` */

/*Table structure for table `songs` */

DROP TABLE IF EXISTS `songs`;

CREATE TABLE `songs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `albums_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `songs_albums_id_foreign` (`albums_id`),
  CONSTRAINT `songs_albums_id_foreign` FOREIGN KEY (`albums_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `songs` */

/*Table structure for table `subscriptions` */

DROP TABLE IF EXISTS `subscriptions`;

CREATE TABLE `subscriptions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscriptions_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `subscriptions` */

/*Table structure for table `tours` */

DROP TABLE IF EXISTS `tours`;

CREATE TABLE `tours` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tours` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`email`,`password`,`verify`,`remember_token`,`created_at`,`updated_at`) values (1,'thanh','thanhnguyenduy.dev@gmail.com','$2y$10$WLl0LvJQPKcb3Aa26jthc.wIEUEm6mC4v7Wg1fZ4A4w8JQ9u23pQq',0,NULL,'2018-04-28 23:19:31','2018-04-28 23:19:31');

/*Table structure for table `users_roles` */

DROP TABLE IF EXISTS `users_roles`;

CREATE TABLE `users_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(10) unsigned NOT NULL,
  `roles_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_roles_users_id_foreign` (`users_id`),
  KEY `users_roles_roles_id_foreign` (`roles_id`),
  CONSTRAINT `users_roles_roles_id_foreign` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `users_roles_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users_roles` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
