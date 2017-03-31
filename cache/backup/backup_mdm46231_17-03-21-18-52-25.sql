DROP TABLE IF EXISTS `phpboost_articles`;
CREATE TABLE `phpboost_articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL DEFAULT '0',
  `picture_url` varchar(255) NOT NULL,
  `title` varchar(250) NOT NULL DEFAULT '',
  `rewrited_title` varchar(250) DEFAULT '',
  `description` text,
  `contents` text,
  `number_view` int(11) DEFAULT '0',
  `author_user_id` int(11) NOT NULL DEFAULT '0',
  `author_name_displayed` tinyint(1) NOT NULL DEFAULT '1',
  `published` int(1) NOT NULL DEFAULT '0',
  `publishing_start_date` int(11) NOT NULL DEFAULT '0',
  `publishing_end_date` int(11) NOT NULL DEFAULT '0',
  `date_created` int(11) NOT NULL DEFAULT '0',
  `date_updated` int(11) NOT NULL DEFAULT '0',
  `notation_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `sources` text,
  PRIMARY KEY (`id`),
  KEY `id_category` (`id_category`),
  FULLTEXT KEY `title` (`title`),
  FULLTEXT KEY `description` (`description`),
  FULLTEXT KEY `contents` (`contents`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_articles` (`id`, `id_category`, `picture_url`, `title`, `rewrited_title`, `description`, `contents`, `number_view`, `author_user_id`, `author_name_displayed`, `published`, `publishing_start_date`, `publishing_end_date`, `date_created`, `date_updated`, `notation_enabled`, `sources`) VALUES (3,1,'/upload/logo-club.jpg','HISTORIQUE DU CLUB ','historique-du-club','','<span style="font-size: 20px;"><strong><span style="color:#FFA500;">HISTORIQUE</span></strong></span><br />\n<br />\n<span style="font-size: 15px;"><p style="text-align:justify"> Une activité d''aéromodélisme est créée en 1926 par M. Courvoisier sous le nom des Mouettes Sablaises. </p></span><br />\n<br />\n<span style="font-size: 15px;"><p style="text-align:justify"> En 1970 une piste aéromodélisme est inaugurée par M. Mauger, Maire des Sables d''Olonne sur l''emprise de l''aérodrome de "la Lande" géré par l'' Aéroclub de la Vendée. En 1979 après quelques années de sommeil cette activité est relancée, sous l''impulsion de M. Jean Sauvagnac, Jacques Chauvet et Claude Mocquillon. Cette section modélisme de l''Aéroclub de la Vendée, prend le nom d''Aéromodélisme Sablais et adhère à la <a href="http://www.ffam.asso.fr/">Fédération Française d''Aéromolisme</a> sous le n° 262. </p></span><br />\n<br />\n<span style="font-size: 15px;"><p style="text-align:justify"> En 1984 après l''expansion des terrains de camping environnants, M. Lebel Maire du Château d''Olonne nous accorde un terrain de 5 ha au lieu-dit "le Coudriou". En 2002, le club quitte l''Aéroclub de la Vendée et devient une association de loi 1901 et obtient son autonomie.  </p></span><br />\n<br />\n<img src="/upload/coudriou-09-09-1984.jpg" alt="" />',422,3,1,1,0,0,1454170620,1455819643,1,'a:0:{}');
INSERT INTO `phpboost_articles` (`id`, `id_category`, `picture_url`, `title`, `rewrited_title`, `description`, `contents`, `number_view`, `author_user_id`, `author_name_displayed`, `published`, `publishing_start_date`, `publishing_end_date`, `date_created`, `date_updated`, `notation_enabled`, `sources`) VALUES (4,6,'/upload/zone-de-vol.jpg','Sécurité des vols au Coudriou','securite-des-vols-au-coudriou','','<strong><span style="font-size: 20px;"><span style="color:#FFA500;">SECURITE AU COUDRIOU</span></span></strong><br />\n<br />\n<img src="/upload/zone-de-vol.jpg" alt="" /><br />\n<br />\n<span style="font-size: 15px;">Respecter les zones de vol.</span><br />\n<span style="font-size: 15px;">Respecter les postes de pilotage.</span><br />\n<span style="font-size: 15px;">Concerter vous sur le choix de la piste à mettre en service.</span><br />\n<span style="font-size: 15px;">Eviter les vols avions/planeurs avec les voilures tournantes.</span>',293,3,0,1,0,0,1454175120,1455040055,1,'a:0:{}');
INSERT INTO `phpboost_articles` (`id`, `id_category`, `picture_url`, `title`, `rewrited_title`, `description`, `contents`, `number_view`, `author_user_id`, `author_name_displayed`, `published`, `publishing_start_date`, `publishing_end_date`, `date_created`, `date_updated`, `notation_enabled`, `sources`) VALUES (9,3,'/upload/les-4-ls--2015.jpg','Salle de construction d''Olonne','salle-de-construction-d-olonne','La construction des planeurs LS3 des 4 mousquetaires.','<img src="/upload/les-4-ls--2015.jpg" alt="" /><br />\n <span style="font-size: 15px;"><span style="color:#0000FF;">La salle de construction d''Olonne est ouverte tous les mercredis après midi.D''ailleurs 4 planeurs LS 3 de 3.20 d''envergure sont en cours de fabrication par  les 4 mousquetaires ; Arcus Ventus Sirius et Cumulus .  Jipé 3</span></span>',298,5,1,1,0,0,1455020580,1457025796,0,'a:0:{}');
INSERT INTO `phpboost_articles` (`id`, `id_category`, `picture_url`, `title`, `rewrited_title`, `description`, `contents`, `number_view`, `author_user_id`, `author_name_displayed`, `published`, `publishing_start_date`, `publishing_end_date`, `date_created`, `date_updated`, `notation_enabled`, `sources`) VALUES (14,1,'/upload/aerienne-coudriou-1-_custom.jpg','Activités - Nous trouver','activites-nous-trouver','','<span style="font-size: 15px;"><span style="color:#000000;">Actuellement le club compte une centaine d''adhérents. Nous accueillons tous les aéromodélismes débutants ou chevronnés, dès lors que les <a href="/articles/?url=/6-securite/4-securite-des-vols-au-coudriou/">règles de vols soient respectées</a>. Toutes les disciplines sont représentées : avion, motoplaneur, planeur remorqué, hélicoptère et drone. <br />\n<br />\nPour l''apprentissage au pilotage, le club assume l''initiation avec un avion école et une double télécommande.<img src="/upload/514397ecolage-_custom_-_custom.jpg" alt="" /> </span></span><br />\n<br />\n<span style="color:#FFA500;"><span style="font-size: 20px;">Nous trouver :</span></span><br />\n<span style="font-size: 15px;"><span style="color:#000000;">En extérieur : </span></span><br />\n<span style="font-size: 15px;"><span style="color:#000000;">Le club dispose de deux pistes de 105X8 et 80X12 sur un terrain de 5 ha au lieu-dit le<a href="https://www.google.fr/maps/@46.5041858,-1.6873132,731m/data=!3m1!1e3?hl=fr"> Coudriou</a> commune du Château d''Olonne.<br />\nPosition GPS : 46°30'' 14 Nord et 001°41'' 09 Ouest. </span></span><br />\n<img src="/upload/acces-le-coudriou-2-_custom.jpg" alt="" /><br />\n<br />\n<span style="font-size: 15px;"><span style="color:#000000;">En intérieur :</span></span><br />\n<span style="font-size: 15px;"><span style="color:#000000;">La ville des Sables d''Olonne nous accorde deux créneaux hebdomadaires au gymnase des Sauniers pour le vol intérieur (avion, hélicoptère et drone). <br />\nJours et horaires : jeudi de 14 à 17 h 30 et le dimanche de 09 à 12 h 00. Adresse  : impasse des Sauniers LES SABLES D OLONNE. <br />\n  GPS : 46°32''08 Nord et 001°47'' 54 Nord.<br />\n<br />\nSalle de construction :<br />\nNotre salle de construction située sur la commune d''Olonne sur Mer, accueille tous les mercredis de 14 à 18 h 00, les adhérents désirant recevoir des conseils en matière d''assemblage, de construction des aéromodèles. <br />\nAdresse : Rue Pasteur à OLONNE SUR MER. <br />\nGPS :  46°32'' 08 Nord et 001°46'' 30 Ouest</span></span>',289,3,1,1,0,0,1455271560,1458751115,1,'a:0:{}');
INSERT INTO `phpboost_articles` (`id`, `id_category`, `picture_url`, `title`, `rewrited_title`, `description`, `contents`, `number_view`, `author_user_id`, `author_name_displayed`, `published`, `publishing_start_date`, `publishing_end_date`, `date_created`, `date_updated`, `notation_enabled`, `sources`) VALUES (11,4,'/upload/dscn0287.jpg','Souvenir d''une journée Hélico !','souvenir-d-une-journee-helico','','<img src="/upload/dscn0287.jpg" alt="" /><br />\n<span style="font-size: 15px;"><span style="color:#0000FF;">Souvenir d''une journée Hélico sous l''égide de JC ,un vrai hélico est venu se poser sur notre terrain du Coudriou .  </span></span>  <span style="font-size: 15px;"><span style="color:#F04343;">Jipé3</span></span>',272,5,1,1,0,0,1455022680,1462741515,0,'a:0:{}');
INSERT INTO `phpboost_articles` (`id`, `id_category`, `picture_url`, `title`, `rewrited_title`, `description`, `contents`, `number_view`, `author_user_id`, `author_name_displayed`, `published`, `publishing_start_date`, `publishing_end_date`, `date_created`, `date_updated`, `notation_enabled`, `sources`) VALUES (12,5,'/upload/pict0010-_400x225.jpg','Vu du ciel  !','vu-du-ciel','','<img src="/upload/pict0010-_400x225.jpg" alt="" /><br />\r\n<br />\r\n<span style="font-size: 15px;"><span style="color:#0000FF;">Le dernier aéronef à la mode, c''est le drone. En loisir ou en professionnel, il permet beaucoup de chose y compris de faire des photos au terrain du Coudriou.<br />\r\n</span></span><span style="font-size: 15px;"><span style="color:#F04343;">Jipé3</span></span>',197,5,1,1,0,0,1455035760,1462742284,0,'a:0:{}');
INSERT INTO `phpboost_articles` (`id`, `id_category`, `picture_url`, `title`, `rewrited_title`, `description`, `contents`, `number_view`, `author_user_id`, `author_name_displayed`, `published`, `publishing_start_date`, `publishing_end_date`, `date_created`, `date_updated`, `notation_enabled`, `sources`) VALUES (15,1,'/upload/aile-volante_jpg-_custom.jpg','Adhésions et contacts','adhesions-et-contacts','','<span style="font-size: 20px;"><span style="color:#FFA500;">TARIF DES ADHESIONS POUR 2017 </span></span><br />\n<br />\n<br />\n<table class="formatter-table">\n<tr class="formatter-table-row">\n<td class="formatter-table-col"></td>\n<td class="formatter-table-col">Licence FFAM</td>\n<td class="formatter-table-col">CLUB</td>\n<td class="formatter-table-col">TOTAL (ffam+club)</td>\n<td class="formatter-table-col">REVUE FFAM* </td>\n</tr>\n<tr class="formatter-table-row">\n<td class="formatter-table-col">CADET</td>\n<td class="formatter-table-col">8 €</td>\n<td class="formatter-table-col"></td>\n<td class="formatter-table-col">8 €</td>\n<td class="formatter-table-col">10 €</td>\n</tr>\n<tr class="formatter-table-row">\n<td class="formatter-table-col">JUNIOR1</td>\n<td class="formatter-table-col">15 € </td>\n<td class="formatter-table-col"></td>\n<td class="formatter-table-col">15 €</td>\n<td class="formatter-table-col">10 €</td>\n</tr>\n<tr class="formatter-table-row">\n<td class="formatter-table-col">JUNIOR2</td>\n<td class="formatter-table-col">25 €</td>\n<td class="formatter-table-col"></td>\n<td class="formatter-table-col">25 €</td>\n<td class="formatter-table-col">10 €</td>\n</tr>\n<tr class="formatter-table-row">\n<td class="formatter-table-col">ADULTE</td>\n<td class="formatter-table-col">44 €</td>\n<td class="formatter-table-col">30 €</td>\n<td class="formatter-table-col">74 €</td>\n<td class="formatter-table-col">10 €</td>\n</tr>\n</table><br />\n* L''abonnement (4 numéros) à la revue aéromodèles est facultatif. <br />\n<br />\n<span style="font-size: 15px;"><span style="color:#000000;">Carte de membre associé : 30 €. Cette carte est délivrée sur demande à un membre extérieur au club, déjà licencié auprès de la<a href="http://www.ffam.asso.fr/"> FFAM</a>.<br />\n<br />\nLe bulletin d''inscription est disponible <a href="/download/3-documents-publics/"> sur ce lien</a> [/url]</span></span><br />\n<br />\n<br />\n<br />\n<span style="color:#FFA500;"><span style="font-size: 20px;">QUELQUES CONTACTS </span></span><br />\n<br />\n<span style="color:#000000;"><span style="font-size: 15px;">Par mail :aeromodelisme.sablais@laposte.net</span></span><br />\n<br />\n<span style="color:#000000;"><span style="font-size: 15px;">Par téléphone : <br />\n<br />\nLe Président André Berthomé : 06.78.34.56.40<br />\n<br />\n<br />\n </span></span>',420,3,1,1,0,0,1455296820,1482482176,1,'a:0:{}');
INSERT INTO `phpboost_articles` (`id`, `id_category`, `picture_url`, `title`, `rewrited_title`, `description`, `contents`, `number_view`, `author_user_id`, `author_name_displayed`, `published`, `publishing_start_date`, `publishing_end_date`, `date_created`, `date_updated`, `notation_enabled`, `sources`) VALUES (16,2,'/upload/dsc00197.jpg','1 er vol 2016','1-er-vol-2016','','<img src="/upload/dsc00197.jpg" alt="" /><br />\n<span style="font-size: 15px;"><span style="color:#0000FF;"><br />\nEnfin aujourd''hui le 1er vol de l''année 2016 sur le terrain du Coudriou  , bon avec un avion électrique ,l''accu lipo n''a pas apprécié le froid ni d''ailleurs le pilote qui avait les bouts des doigts gelés mais bon ça fait du bien , c''est bon pour le moral  . </span></span> <span style="font-size: 15px;"><span style="color:#F04343;">Jipé3</span></span>',215,5,1,1,0,0,1455661320,1469273077,0,'a:0:{}');
INSERT INTO `phpboost_articles` (`id`, `id_category`, `picture_url`, `title`, `rewrited_title`, `description`, `contents`, `number_view`, `author_user_id`, `author_name_displayed`, `published`, `publishing_start_date`, `publishing_end_date`, `date_created`, `date_updated`, `notation_enabled`, `sources`) VALUES (17,3,'/upload/dsc06872.jpg','Remorquage ','remorquage','','<img src="/upload/dsc06872.jpg" alt="" /><br />\n<span style="color:#0000FF;">Dans l''histoire des planeurs, il y a le remorquage comme pour les vrais, un avion remorqueur tracte un planeur pour le larguer à une bonne hauteur et profiter au maximum des courants ascendants. Lorsque le temps le permet cela se passe comme cela tous les mardi sur le terrain du Coudriou, avis aux amateurs .  </span>  <span style="color:#F04343;">Jipé3</span>',171,5,1,1,0,0,1456178880,1462741740,0,'a:0:{}');
INSERT INTO `phpboost_articles` (`id`, `id_category`, `picture_url`, `title`, `rewrited_title`, `description`, `contents`, `number_view`, `author_user_id`, `author_name_displayed`, `published`, `publishing_start_date`, `publishing_end_date`, `date_created`, `date_updated`, `notation_enabled`, `sources`) VALUES (18,6,'/upload/dsc01176.jpg','Un mot sur la sécurité ','un-mot-sur-la-securite','','<img src="/upload/dsc01176.jpg" alt="" /><br />\n<br />\n<span style="font-size: 15px;"><span style="color:#0000FF;">Pour parler de la sécurité, une réunion d''information a eu lieu en 2015 et une autre est prévue en 2016 pour ceux qui n''auraient pas pu assister à la 1ère. Démarrage des moteurs, précision sur les zones de vol et de pilotage, etc. Notre loisir favori génère quelques dangers, il vaut mieux  prévenir que guérir .</span></span> <span style="font-size: 15px;"><span style="color:#F04343;">Jipé3</span></span>',151,5,1,1,0,0,1456308060,1479722058,0,'a:0:{}');
INSERT INTO `phpboost_articles` (`id`, `id_category`, `picture_url`, `title`, `rewrited_title`, `description`, `contents`, `number_view`, `author_user_id`, `author_name_displayed`, `published`, `publishing_start_date`, `publishing_end_date`, `date_created`, `date_updated`, `notation_enabled`, `sources`) VALUES (21,5,'/upload/antenne-drone.jpg','Des drônes au Coudriou','drones-au-coudriou','','<strong>Le 4 septembre, il y avait aussi des drônes lors du symposium hélicos au Coudriou.</strong><br />\n<br />\n<span style="font-size: 12px;">Sédric (du club de Luçon), récent champion de France de FPV Racing, avait amené quelques uns de ses modèles:<br />\n<br />\n<img src="/upload/table-drone.png" alt="" /><br />\n<br />\n<span style="text-decoration: underline;">Le FPV, qu''est-ce que ç''est ?</span><br />\nFPV (en englais :First Person View) traduit littéralement en français signifie : "vue à la première personne". Un anglicisme de plus me direz-vous. Oui, mais de plus en plus en vogue! On parlera plus couramment de "vol en immersion".<br />\nle principe: Le drône est équipé d''une caméra et d''un système de transmission des images (vue de détail d''un drône avec la caméra au premier plan) :<br />\n<br />\n<img src="/upload/drone-detail.jpg" alt="" /><br />\n<br />\nLes images sont recues par les lunettes portées par l''utilisateur (ici Franck) :<br />\n<br />\n<img src="/upload/fpv-franck.jpg" alt="" /><br />\n <br />\nL''après-midi, sous la direction de Sédric, certains ont pu s''initier au FPV et Jo (et quelques autres) essaya le vol en immersion. Pas évident au début de savoir ou se situe le drône quand on ne voit que ce que la caméra retransmet ....<br />\n<br />\n<img src="/upload/immersion-jo.jpg" alt="" /><br />\n<br />\nC''est pour ça que le FPV doit se pratiquer à deux personnes: un pilote en immersion et un guide qui assurera la sécurité des personnes et des biens.<br />\n<br />\nUn parcours de FPV racer avait été monté dans une partie du terrain :<br />\n<br />\n<img src="/upload/instal-fpv.jpg" alt="" /><br />\n<br />\navec un circuit à parcourir entre des balises (on remarquera les plots au sol qui permettent de se repérer grâce aux images envoyées par la caméra):<br />\n<br />\n<img src="/upload/parcours-racer.jpg" alt="" /><br />\n<br />\nSédric et quelques autres nous ont offert une mini course avec des drônes de type racer (très rapides et particulièrement agiles !):<br />\n<br />\n<img src="/upload/drones-racer.jpg" alt="" /><br />\n<br />\nSédric, particulièrement concentré dans cette discipline extrêmement spectaculaire !<br />\n<br />\n<img src="/upload/sedric.jpg" alt="" /><br />\n<br />\nLes drônes, un sujet d''actualité, avec des engins truffés de haute technologie mais dont l''usage doit respecter les règles en vigueur !<br />\n</span>',89,1,1,1,0,0,1473760800,1473773160,1,'a:0:{}');
DROP TABLE IF EXISTS `phpboost_articles_cats`;
CREATE TABLE `phpboost_articles_cats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `rewrited_name` varchar(250) DEFAULT '',
  `description` text,
  `c_order` int(11) unsigned NOT NULL DEFAULT '0',
  `auth` text,
  `image` varchar(255) NOT NULL,
  `id_parent` int(11) NOT NULL DEFAULT '0',
  `special_authorizations` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_articles_cats` (`id`, `name`, `rewrited_name`, `description`, `c_order`, `auth`, `image`, `id_parent`, `special_authorizations`) VALUES (5,'Drones','drones','Le tout nouveau monde des drones.',5,'','/articles/articles.png',0,0);
INSERT INTO `phpboost_articles_cats` (`id`, `name`, `rewrited_name`, `description`, `c_order`, `auth`, `image`, `id_parent`, `special_authorizations`) VALUES (6,'Sécurité','securite','Sécurité des vols',6,'','/articles/articles.png',0,0);
INSERT INTO `phpboost_articles_cats` (`id`, `name`, `rewrited_name`, `description`, `c_order`, `auth`, `image`, `id_parent`, `special_authorizations`) VALUES (4,'Hélicoptères','helicopteres','Les hélicoptères thermiques ou électriques.',4,'','/articles/articles.png',0,0);
INSERT INTO `phpboost_articles_cats` (`id`, `name`, `rewrited_name`, `description`, `c_order`, `auth`, `image`, `id_parent`, `special_authorizations`) VALUES (3,'Planeurs','planeurs','Le grand domaine des planeurs.',3,'','/articles/articles.png',0,0);
INSERT INTO `phpboost_articles_cats` (`id`, `name`, `rewrited_name`, `description`, `c_order`, `auth`, `image`, `id_parent`, `special_authorizations`) VALUES (2,'Avions','avions','Tout ce qui concerne les avions thermiques ou électriques.',2,'','/articles/articles.png',0,0);
INSERT INTO `phpboost_articles_cats` (`id`, `name`, `rewrited_name`, `description`, `c_order`, `auth`, `image`, `id_parent`, `special_authorizations`) VALUES (1,'Vie du club','vie-du-club','Les événements dans la vie du club.',1,'','/articles/articles.png',0,0);
DROP TABLE IF EXISTS `phpboost_authentication_method`;
CREATE TABLE `phpboost_authentication_method` (
  `user_id` int(11) NOT NULL,
  `method` varchar(32) DEFAULT '',
  `identifier` varchar(128) DEFAULT '',
  `data` text,
  UNIQUE KEY `method` (`method`,`identifier`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (1,'internal',1,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (3,'internal',3,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (4,'internal',4,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (6,'internal',6,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (5,'internal',5,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (7,'internal',7,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (8,'internal',8,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (9,'internal',9,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (10,'internal',10,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (11,'internal',11,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (12,'internal',12,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (13,'internal',13,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (14,'internal',14,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (15,'internal',15,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (16,'internal',16,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (17,'internal',17,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (18,'internal',18,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (19,'internal',19,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (20,'internal',20,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (21,'internal',21,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (22,'internal',22,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (23,'internal',23,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (24,'internal',24,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (25,'internal',25,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (26,'internal',26,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (27,'internal',27,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (30,'internal',30,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (31,'internal',31,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (34,'internal',34,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (35,'internal',35,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (37,'internal',37,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (38,'internal',38,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (39,'internal',39,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (40,'internal',40,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (41,'internal',41,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (42,'internal',42,NULL);
INSERT INTO `phpboost_authentication_method` (`user_id`, `method`, `identifier`, `data`) VALUES (43,'internal',43,NULL);
DROP TABLE IF EXISTS `phpboost_average_notes`;
CREATE TABLE `phpboost_average_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(255) NOT NULL DEFAULT '',
  `id_in_module` int(11) NOT NULL DEFAULT '0',
  `average_notes` varchar(255) NOT NULL DEFAULT '0',
  `number_notes` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS `phpboost_calendar_cats`;
CREATE TABLE `phpboost_calendar_cats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `rewrited_name` varchar(250) DEFAULT '',
  `c_order` int(11) unsigned NOT NULL DEFAULT '0',
  `auth` text,
  `id_parent` int(11) NOT NULL DEFAULT '0',
  `color` varchar(250) DEFAULT '',
  `special_authorizations` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS `phpboost_calendar_events`;
CREATE TABLE `phpboost_calendar_events` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` int(11) NOT NULL DEFAULT '0',
  `start_date` int(11) NOT NULL DEFAULT '0',
  `end_date` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_event`),
  KEY `content_id` (`content_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_calendar_events` (`id_event`, `content_id`, `start_date`, `end_date`, `parent_id`) VALUES (6,6,1472972400,1473004800,0);
INSERT INTO `phpboost_calendar_events` (`id_event`, `content_id`, `start_date`, `end_date`, `parent_id`) VALUES (5,5,1471244400,1471276800,0);
INSERT INTO `phpboost_calendar_events` (`id_event`, `content_id`, `start_date`, `end_date`, `parent_id`) VALUES (3,3,1465646400,1465747200,0);
INSERT INTO `phpboost_calendar_events` (`id_event`, `content_id`, `start_date`, `end_date`, `parent_id`) VALUES (7,7,1463468400,1463497200,0);
INSERT INTO `phpboost_calendar_events` (`id_event`, `content_id`, `start_date`, `end_date`, `parent_id`) VALUES (12,12,1497081600,1497178800,0);
INSERT INTO `phpboost_calendar_events` (`id_event`, `content_id`, `start_date`, `end_date`, `parent_id`) VALUES (13,13,1499583900,1499623500,0);
INSERT INTO `phpboost_calendar_events` (`id_event`, `content_id`, `start_date`, `end_date`, `parent_id`) VALUES (14,14,1502604000,1502647200,0);
INSERT INTO `phpboost_calendar_events` (`id_event`, `content_id`, `start_date`, `end_date`, `parent_id`) VALUES (15,15,1503813600,1503856800,0);
DROP TABLE IF EXISTS `phpboost_calendar_events_content`;
CREATE TABLE `phpboost_calendar_events_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL DEFAULT '0',
  `title` varchar(150) NOT NULL,
  `rewrited_title` varchar(250) DEFAULT '',
  `contents` text,
  `location` varchar(255) DEFAULT NULL,
  `creation_date` int(11) NOT NULL DEFAULT '0',
  `author_id` int(11) NOT NULL DEFAULT '0',
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  `registration_authorized` tinyint(1) NOT NULL DEFAULT '0',
  `max_registered_members` int(11) NOT NULL DEFAULT '-1',
  `last_registration_date` int(11) NOT NULL DEFAULT '0',
  `register_authorizations` text,
  `repeat_number` int(11) NOT NULL DEFAULT '0',
  `repeat_type` varchar(25) NOT NULL DEFAULT 'never',
  PRIMARY KEY (`id`),
  KEY `id_category` (`id_category`),
  FULLTEXT KEY `title` (`title`),
  FULLTEXT KEY `contents` (`contents`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_calendar_events_content` (`id`, `id_category`, `title`, `rewrited_title`, `contents`, `location`, `creation_date`, `author_id`, `approved`, `registration_authorized`, `max_registered_members`, `last_registration_date`, `register_authorizations`, `repeat_number`, `repeat_type`) VALUES (5,0,'Rencontre inter-club avion &quot;Petit gros&quot;','rencontre-inter-club-avion-petit-gros','<img src="/upload/affiche-rencontre-petit-gros-2.jpg" alt="" /><br />\n<br />\nRencontre inter-club avion "petit gros" catégorie "A" électrique ou thermique. Pour tous<br />\nrenseignements contacter : Jean-Christophe Doye : 06.33.58.40.95','',1453740856,3,0,0,0,0,'a:3:{s:2:"r1";i:3;s:2:"r0";i:3;s:3:"r-1";i:3;}',1,'never');
INSERT INTO `phpboost_calendar_events_content` (`id`, `id_category`, `title`, `rewrited_title`, `contents`, `location`, `creation_date`, `author_id`, `approved`, `registration_authorized`, `max_registered_members`, `last_registration_date`, `register_authorizations`, `repeat_number`, `repeat_type`) VALUES (4,0,'Rencontre inter-club','rencontre-inter-club','<strong>- Le Coudriou - Rencontre inter-club -</strong><br />\navion, planeur, hélicoptère et drone.....<br />\npique-nique sur place. Bourse d''échange toute la journée.','',1453740567,3,1,0,0,0,'a:2:{s:2:"r0";i:3;s:2:"r1";i:3;}',1,'never');
INSERT INTO `phpboost_calendar_events_content` (`id`, `id_category`, `title`, `rewrited_title`, `contents`, `location`, `creation_date`, `author_id`, `approved`, `registration_authorized`, `max_registered_members`, `last_registration_date`, `register_authorizations`, `repeat_number`, `repeat_type`) VALUES (3,0,'Rencontre grand planeur remorqué','rencontre-grand-planeur-remorque','Le Coudriou - Rencontre grand planeur remorqué -','',1453740264,3,0,0,0,0,'a:2:{s:2:"r0";i:3;s:2:"r1";i:3;}',1,'never');
INSERT INTO `phpboost_calendar_events_content` (`id`, `id_category`, `title`, `rewrited_title`, `contents`, `location`, `creation_date`, `author_id`, `approved`, `registration_authorized`, `max_registered_members`, `last_registration_date`, `register_authorizations`, `repeat_number`, `repeat_type`) VALUES (2,0,'ANNULATION - brevet &quot;A&quot; et &quot;B&quot;, ailes et rotors. ','annulation-brevet-a-et-b-ailes-et-rotors','<strong>En raison du manque de candidat, cette journée est annulée. </strong><br />\n<s>Epreuve des brevets type A et B avion hélicoptère ou planeur et des ailes et rotor de bronze, argent, or.</s>','',1453740020,3,1,0,0,0,'a:2:{s:2:"r0";i:3;s:2:"r1";i:3;}',1,'never');
INSERT INTO `phpboost_calendar_events_content` (`id`, `id_category`, `title`, `rewrited_title`, `contents`, `location`, `creation_date`, `author_id`, `approved`, `registration_authorized`, `max_registered_members`, `last_registration_date`, `register_authorizations`, `repeat_number`, `repeat_type`) VALUES (1,0,'Rencontre indoor ','rencontre-indoor','Rencontre indoor salle des Sauniers - Avion - hélicoptère - Drones','',1453562620,3,1,0,0,0,'a:2:{s:2:"r0";i:3;s:2:"r1";i:3;}',1,'daily');
INSERT INTO `phpboost_calendar_events_content` (`id`, `id_category`, `title`, `rewrited_title`, `contents`, `location`, `creation_date`, `author_id`, `approved`, `registration_authorized`, `max_registered_members`, `last_registration_date`, `register_authorizations`, `repeat_number`, `repeat_type`) VALUES (6,0,'Symposium hélicoptère','symposium-helicoptere','Symposium hélicoptère et drone au Coudriou.','',1453741085,3,0,0,0,0,'a:2:{s:2:"r0";i:3;s:2:"r1";i:3;}',1,'never');
INSERT INTO `phpboost_calendar_events_content` (`id`, `id_category`, `title`, `rewrited_title`, `contents`, `location`, `creation_date`, `author_id`, `approved`, `registration_authorized`, `max_registered_members`, `last_registration_date`, `register_authorizations`, `repeat_number`, `repeat_type`) VALUES (7,0,'17 mai - Fermeture du terrain','17-mai-fermeture-du-terrain','Mardi 17 mai 2016 le terrain sera fermé.<br />\nLe club procédera à la réfection de la table de montage, des bancs de démarrage et au nettoyage du local.<br />\nL''équipe dirigeante du club.','',1462482199,1,0,0,0,0,'a:2:{s:2:"r0";i:3;s:2:"r1";i:3;}',1,'never');
INSERT INTO `phpboost_calendar_events_content` (`id`, `id_category`, `title`, `rewrited_title`, `contents`, `location`, `creation_date`, `author_id`, `approved`, `registration_authorized`, `max_registered_members`, `last_registration_date`, `register_authorizations`, `repeat_number`, `repeat_type`) VALUES (8,0,'départ','depart','départ','',1478007490,1,1,0,0,0,'a:2:{s:2:"r0";i:3;s:2:"r1";i:3;}',1,'never');
INSERT INTO `phpboost_calendar_events_content` (`id`, `id_category`, `title`, `rewrited_title`, `contents`, `location`, `creation_date`, `author_id`, `approved`, `registration_authorized`, `max_registered_members`, `last_registration_date`, `register_authorizations`, `repeat_number`, `repeat_type`) VALUES (9,0,'Assemblée Générale','assemblee-generale','<span style="font-size: 10px;">L''assemblée générale du club se tiendra le samedi 10 décembre à partir de 16h Salle de l''Amitié, rue Printanière aux Sables d''Olonne.</span>','',1480664614,1,1,0,0,0,'a:2:{s:2:"r0";i:3;s:2:"r1";i:3;}',1,'never');
INSERT INTO `phpboost_calendar_events_content` (`id`, `id_category`, `title`, `rewrited_title`, `contents`, `location`, `creation_date`, `author_id`, `approved`, `registration_authorized`, `max_registered_members`, `last_registration_date`, `register_authorizations`, `repeat_number`, `repeat_type`) VALUES (10,0,'Galette des rois','galette-des-rois','La traditionnelle galette des rois aura lieu le dimanche 15 janvier 2016 à partir de 16 heures, salle de l''amitié rue Printanière aux Sables d''Olonne.','',1481108256,3,1,0,0,0,'a:2:{s:2:"r0";i:3;s:2:"r1";i:3;}',1,'never');
INSERT INTO `phpboost_calendar_events_content` (`id`, `id_category`, `title`, `rewrited_title`, `contents`, `location`, `creation_date`, `author_id`, `approved`, `registration_authorized`, `max_registered_members`, `last_registration_date`, `register_authorizations`, `repeat_number`, `repeat_type`) VALUES (12,0,'Rencontre GPR','rencontre-gpr','Rencontre grand planeur remorqué au Coudriou','',1481108554,3,1,0,0,0,'a:2:{s:2:"r0";i:3;s:2:"r1";i:3;}',1,'never');
INSERT INTO `phpboost_calendar_events_content` (`id`, `id_category`, `title`, `rewrited_title`, `contents`, `location`, `creation_date`, `author_id`, `approved`, `registration_authorized`, `max_registered_members`, `last_registration_date`, `register_authorizations`, `repeat_number`, `repeat_type`) VALUES (13,0,'Interclub et pique-nique club','interclub-et-pique-nique-club','Le 9 juillet 2017 interclub et pique-nique annuel du club au terrain du Coudriou. Vols libres et bourse d''échange toute la journée.','',1481108806,3,1,0,0,0,'a:2:{s:2:"r0";i:3;s:2:"r1";i:3;}',1,'never');
INSERT INTO `phpboost_calendar_events_content` (`id`, `id_category`, `title`, `rewrited_title`, `contents`, `location`, `creation_date`, `author_id`, `approved`, `registration_authorized`, `max_registered_members`, `last_registration_date`, `register_authorizations`, `repeat_number`, `repeat_type`) VALUES (14,0,'Rencontre avion petit gros','rencontre-avion-petit-gros','Rencontre avion petit gros moteur thermique ou électrique. Rencontre ouverte seulement aux avions de catégorie "A" (moins de 25 kg) warbird - avion voltige - maquette.','',1481217376,3,1,0,0,0,'a:2:{s:2:"r0";i:3;s:2:"r1";i:3;}',1,'never');
INSERT INTO `phpboost_calendar_events_content` (`id`, `id_category`, `title`, `rewrited_title`, `contents`, `location`, `creation_date`, `author_id`, `approved`, `registration_authorized`, `max_registered_members`, `last_registration_date`, `register_authorizations`, `repeat_number`, `repeat_type`) VALUES (15,0,'Sardinade','sardinade','Elle revient. Après un an de ballade océane, la sardine Sablaise est de retour au terrain du Coudriou.<br />\nAu menu : sardines et pommes de terre de Noirmoutier.<br />','',1481217649,3,1,0,0,0,'a:2:{s:2:"r0";i:3;s:2:"r1";i:3;}',1,'never');
DROP TABLE IF EXISTS `phpboost_calendar_users_relation`;
CREATE TABLE `phpboost_calendar_users_relation` (
  `event_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  KEY `event_id` (`event_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_calendar_users_relation` (`event_id`, `user_id`) VALUES (5,-1);
INSERT INTO `phpboost_calendar_users_relation` (`event_id`, `user_id`) VALUES (5,-1);
INSERT INTO `phpboost_calendar_users_relation` (`event_id`, `user_id`) VALUES (5,-1);
INSERT INTO `phpboost_calendar_users_relation` (`event_id`, `user_id`) VALUES (5,-1);
INSERT INTO `phpboost_calendar_users_relation` (`event_id`, `user_id`) VALUES (5,-1);
INSERT INTO `phpboost_calendar_users_relation` (`event_id`, `user_id`) VALUES (5,-1);
INSERT INTO `phpboost_calendar_users_relation` (`event_id`, `user_id`) VALUES (5,-1);
INSERT INTO `phpboost_calendar_users_relation` (`event_id`, `user_id`) VALUES (5,-1);
INSERT INTO `phpboost_calendar_users_relation` (`event_id`, `user_id`) VALUES (5,-1);
INSERT INTO `phpboost_calendar_users_relation` (`event_id`, `user_id`) VALUES (5,-1);
INSERT INTO `phpboost_calendar_users_relation` (`event_id`, `user_id`) VALUES (5,-1);
INSERT INTO `phpboost_calendar_users_relation` (`event_id`, `user_id`) VALUES (5,-1);
INSERT INTO `phpboost_calendar_users_relation` (`event_id`, `user_id`) VALUES (5,-1);
INSERT INTO `phpboost_calendar_users_relation` (`event_id`, `user_id`) VALUES (5,-1);
INSERT INTO `phpboost_calendar_users_relation` (`event_id`, `user_id`) VALUES (5,-1);
INSERT INTO `phpboost_calendar_users_relation` (`event_id`, `user_id`) VALUES (5,-1);
INSERT INTO `phpboost_calendar_users_relation` (`event_id`, `user_id`) VALUES (5,-1);
INSERT INTO `phpboost_calendar_users_relation` (`event_id`, `user_id`) VALUES (5,-1);
INSERT INTO `phpboost_calendar_users_relation` (`event_id`, `user_id`) VALUES (5,-1);
DROP TABLE IF EXISTS `phpboost_comments`;
CREATE TABLE `phpboost_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_topic` int(11) NOT NULL DEFAULT '0',
  `message` text,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `pseudo` varchar(255) NOT NULL DEFAULT '',
  `user_ip` varchar(255) NOT NULL DEFAULT '',
  `note` int(11) NOT NULL DEFAULT '0',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_comments` (`id`, `id_topic`, `message`, `user_id`, `pseudo`, `user_ip`, `note`, `timestamp`) VALUES (6,5,'Bonjour á tous , après 34 de bons et loyaux services l''armée me laisse partir á la retraite et c''est avec plaisir que je retrouverais le club qui m''a vu débuter il y 40 ans,bon ma maison de Grosbreuil va encore me prendre du temps mais au moins je serais sur place pour voler avec vous.Rendez vous dèbut juillet.<br />\n<br />\nPierre Larrans',9,'pierre','92.142.80.13',0,1464644030);
INSERT INTO `phpboost_comments` (`id`, `id_topic`, `message`, `user_id`, `pseudo`, `user_ip`, `note`, `timestamp`) VALUES (7,6,'bonjour à tous<br />\nDe retour définitif à Grosbreuil cet été, c''est avec plaisir que je retrouverai le club qui m''a vu débuter il y 40 ans, à bientôt pour de nouvelles aventures modélistiques....<br />\n<br />\nPierre Larrans',9,'pierre','81.49.89.78',0,1464906056);
INSERT INTO `phpboost_comments` (`id`, `id_topic`, `message`, `user_id`, `pseudo`, `user_ip`, `note`, `timestamp`) VALUES (8,7,'Pas mal ! Bonne déduction vous êtes vraiment balaise ,merci a ceux qui mon aide a ça réalisation et longue vie aux warbird!',-1,'Guillaume ','109.211.207.9',0,1469808968);
INSERT INTO `phpboost_comments` (`id`, `id_topic`, `message`, `user_id`, `pseudo`, `user_ip`, `note`, `timestamp`) VALUES (9,8,'superbes photos!',-1,'Visiteur','90.25.8.160',0,1472406539);
INSERT INTO `phpboost_comments` (`id`, `id_topic`, `message`, `user_id`, `pseudo`, `user_ip`, `note`, `timestamp`) VALUES (19,11,'jE NE TROUVE PAS LE POINT GPS dans le plan du site, dommage....<br />\n<br />\nJe viens de le prendre sur google :<br />\n<br />\nN 46 504 041<br />\nW 01 686 040<br />\n<br />\nOUI il est en millième.... si quelqu''un à mieux ?',11,'TONTON85','90.59.106.250',0,1483262135);
INSERT INTO `phpboost_comments` (`id`, `id_topic`, `message`, `user_id`, `pseudo`, `user_ip`, `note`, `timestamp`) VALUES (20,12,'Bien courageux les planeuristes. En ce qui me concerne, il manque encore une dizaine de degrés à la température ambiante .... mais ça va venir !',1,'mipel','2.1.128.121',0,1486670152);
DROP TABLE IF EXISTS `phpboost_comments_topic`;
CREATE TABLE `phpboost_comments_topic` (
  `id_topic` int(11) NOT NULL AUTO_INCREMENT,
  `module_id` varchar(255) NOT NULL DEFAULT '',
  `topic_identifier` varchar(255) NOT NULL DEFAULT 'default',
  `id_in_module` int(11) NOT NULL DEFAULT '0',
  `is_locked` int(11) NOT NULL DEFAULT '0',
  `number_comments` int(11) NOT NULL DEFAULT '0',
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id_topic`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_comments_topic` (`id_topic`, `module_id`, `topic_identifier`, `id_in_module`, `is_locked`, `number_comments`, `path`) VALUES (4,'calendar','default',5,0,0,'/calendar/?url=/0-root/5-rencontre-inter-club-avion-petit-gros/');
INSERT INTO `phpboost_comments_topic` (`id_topic`, `module_id`, `topic_identifier`, `id_in_module`, `is_locked`, `number_comments`, `path`) VALUES (5,'articles','default',14,0,1,'/articles/1-vie-du-club/14-activites-nous-trouver/');
INSERT INTO `phpboost_comments_topic` (`id_topic`, `module_id`, `topic_identifier`, `id_in_module`, `is_locked`, `number_comments`, `path`) VALUES (6,'articles','default',15,0,1,'/articles/1-vie-du-club/15-adhesions-et-contacts/');
INSERT INTO `phpboost_comments_topic` (`id_topic`, `module_id`, `topic_identifier`, `id_in_module`, `is_locked`, `number_comments`, `path`) VALUES (7,'news','default',34,1,1,'/news/0-root/34-encore-un-petit-gros/');
INSERT INTO `phpboost_comments_topic` (`id_topic`, `module_id`, `topic_identifier`, `id_in_module`, `is_locked`, `number_comments`, `path`) VALUES (8,'gallery','default',50,0,1,'/gallery/gallery.php?cat=2&id=50&com=0');
INSERT INTO `phpboost_comments_topic` (`id_topic`, `module_id`, `topic_identifier`, `id_in_module`, `is_locked`, `number_comments`, `path`) VALUES (9,'gallery','default',11,0,0,'/gallery/gallery.php?cat=1&id=11&com=0');
INSERT INTO `phpboost_comments_topic` (`id_topic`, `module_id`, `topic_identifier`, `id_in_module`, `is_locked`, `number_comments`, `path`) VALUES (11,'calendar','default',12,0,1,'/calendar/0-root/12-rencontre-gpr/');
INSERT INTO `phpboost_comments_topic` (`id_topic`, `module_id`, `topic_identifier`, `id_in_module`, `is_locked`, `number_comments`, `path`) VALUES (12,'news','default',70,0,1,'/news/0-root/70-reprise-remorquage/');
DROP TABLE IF EXISTS `phpboost_configs`;
CREATE TABLE `phpboost_configs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL DEFAULT '',
  `value` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (1,'kernel-general-config','O:13:"GeneralConfig":1:{s:34:" AbstractConfigData properties_map";a:12:{s:8:"site_url";s:31:"http://aeromodelisme-sablais.fr";s:9:"site_path";b:0;s:9:"site_name";s:21:"Aéromodélisme Sablais";s:11:"site_slogan";s:33:"Tout ce qui vole nous passionne !";s:16:"site_description";s:142:"Club d''Aéromodélisme basé aux Sables d''Olonne. Pratique des modèles réduits avions, planeurs, hélicoptères, drones en thermique ou électrique.";s:13:"site_keywords";s:106:"aéromodélisme,sablais,avions,planeurs,drones,hélicoptères,modèles-réduits,maquettes,radiocommande,pilotage";s:16:"module_home_page";s:4:"news";s:15:"other_home_page";s:0:"";s:16:"phpboost_version";s:3:"5.0";s:17:"site_install_date";O:4:"Date":2:{s:15:" Date date_time";O:8:"DateTime":3:{s:4:"date";s:26:"2016-02-05 15:35:02.000000";s:13:"timezone_type";i:3;s:8:"timezone";s:12:"Europe/Paris";}s:15:" Date timestamp";N;}s:8:"timezone";s:12:"Europe/Paris";s:19:"admin_unlocking_key";s:12:"1605c1854cdc";}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (2,'kernel-server-environment-config','O:23:"ServerEnvironmentConfig":1:{s:34:" AbstractConfigData properties_map";a:3:{s:21:"url_rewriting_enabled";b:1;s:23:"htaccess_manual_content";s:0:"";s:22:"output_gziping_enabled";b:1;}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (3,'kernel-user-accounts','O:18:"UserAccountsConfig":1:{s:34:" AbstractConfigData properties_map";a:16:{s:20:"registration_enabled";b:1;s:33:"member_accounts_validation_method";s:1:"3";s:15:"welcome_message";s:169:"Bienvenue sur le site. Vous êtes membre du site, vous pouvez accéder à tous les espaces nécessitant un compte utilisateur, éditer votre profil et voir vos contributions.";s:22:"registration_agreement";s:149:"Vous vous apprêtez à vous enregistrer sur le site. Nous vous demandons d''être poli et courtois dans vos interventions.<br />\nMerci, l''équipe du site.";s:28:"unactivated_accounts_timeout";s:2:"20";s:20:"enable_avatar_upload";b:1;s:27:"enable_avatar_auto_resizing";b:1;s:22:"default_avatar_enabled";b:1;s:18:"default_avatar_url";s:13:"no_avatar.png";s:16:"max_avatar_width";s:3:"120";s:17:"max_avatar_height";s:3:"120";s:17:"max_avatar_weight";s:2:"20";s:17:"auth_read_members";a:2:{s:2:"r1";i:1;s:2:"r0";i:1;}s:12:"default_lang";s:6:"french";s:13:"default_theme";s:9:"underline";s:13:"max_pm_number";i:50;}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (4,'kernel-content-formatting','O:23:"ContentFormattingConfig":1:{s:34:" AbstractConfigData properties_map";a:3:{s:14:"default_editor";s:6:"BBCode";s:14:"forbidden_tags";a:0:{}s:13:"html_tag_auth";a:1:{s:2:"r1";i:1;}}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (5,'kernel-graphical-environment-config','O:26:"GraphicalEnvironmentConfig":1:{s:34:" AbstractConfigData properties_map";a:3:{s:21:"visit_counter_enabled";b:1;s:20:"display_theme_author";b:1;s:18:"page_bench_enabled";b:1;}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (6,'kernel-langs','O:11:"LangsConfig":1:{s:34:" AbstractConfigData properties_map";a:1:{s:5:"langs";a:1:{s:6:"french";O:4:"Lang":3:{s:8:" Lang id";s:6:"french";s:15:" Lang activated";b:1;s:20:" Lang authorizations";a:0:{}}}}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (7,'kernel-themes','O:12:"ThemesConfig":1:{s:34:" AbstractConfigData properties_map";a:1:{s:6:"themes";a:4:{s:4:"base";O:5:"Theme":5:{s:15:" Theme theme_id";s:4:"base";s:16:" Theme activated";b:1;s:23:" Theme columns_disabled";O:15:"ColumnsDisabled":8:{s:31:" ColumnsDisabled disable_header";b:0;s:35:" ColumnsDisabled disable_sub_header";b:0;s:36:" ColumnsDisabled disable_top_central";b:0;s:39:" ColumnsDisabled disable_bottom_central";b:0;s:35:" ColumnsDisabled disable_top_footer";b:0;s:31:" ColumnsDisabled disable_footer";b:0;s:37:" ColumnsDisabled disable_left_columns";b:0;s:38:" ColumnsDisabled disable_right_columns";b:0;}s:26:" Theme customize_interface";O:18:"CustomizeInterface":1:{s:36:" CustomizeInterface header_logo_path";s:57:"/images/customization/all_Logo club transparent 90x90.png";}s:21:" Theme authorizations";a:4:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;s:2:"r2";i:1;}}s:9:"underline";O:5:"Theme":5:{s:15:" Theme theme_id";s:9:"underline";s:16:" Theme activated";b:1;s:23:" Theme columns_disabled";O:15:"ColumnsDisabled":8:{s:31:" ColumnsDisabled disable_header";b:0;s:35:" ColumnsDisabled disable_sub_header";b:0;s:36:" ColumnsDisabled disable_top_central";b:0;s:39:" ColumnsDisabled disable_bottom_central";b:0;s:35:" ColumnsDisabled disable_top_footer";b:0;s:31:" ColumnsDisabled disable_footer";b:0;s:37:" ColumnsDisabled disable_left_columns";b:0;s:38:" ColumnsDisabled disable_right_columns";b:0;}s:26:" Theme customize_interface";O:18:"CustomizeInterface":1:{s:36:" CustomizeInterface header_logo_path";s:57:"/images/customization/all_Logo club transparent 90x90.png";}s:21:" Theme authorizations";a:4:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;s:2:"r2";i:1;}}s:6:"oxygen";O:5:"Theme":5:{s:15:" Theme theme_id";s:6:"oxygen";s:16:" Theme activated";b:1;s:23:" Theme columns_disabled";O:15:"ColumnsDisabled":8:{s:31:" ColumnsDisabled disable_header";b:0;s:35:" ColumnsDisabled disable_sub_header";b:0;s:36:" ColumnsDisabled disable_top_central";b:0;s:39:" ColumnsDisabled disable_bottom_central";b:0;s:35:" ColumnsDisabled disable_top_footer";b:0;s:31:" ColumnsDisabled disable_footer";b:0;s:37:" ColumnsDisabled disable_left_columns";b:0;s:38:" ColumnsDisabled disable_right_columns";b:0;}s:26:" Theme customize_interface";O:18:"CustomizeInterface":1:{s:36:" CustomizeInterface header_logo_path";s:0:"";}s:21:" Theme authorizations";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}}s:3:"ams";O:5:"Theme":5:{s:15:" Theme theme_id";s:3:"ams";s:16:" Theme activated";b:1;s:23:" Theme columns_disabled";O:15:"ColumnsDisabled":8:{s:31:" ColumnsDisabled disable_header";b:0;s:35:" ColumnsDisabled disable_sub_header";b:0;s:36:" ColumnsDisabled disable_top_central";b:0;s:39:" ColumnsDisabled disable_bottom_central";b:0;s:35:" ColumnsDisabled disable_top_footer";b:0;s:31:" ColumnsDisabled disable_footer";b:0;s:37:" ColumnsDisabled disable_left_columns";b:0;s:38:" ColumnsDisabled disable_right_columns";b:0;}s:26:" Theme customize_interface";O:18:"CustomizeInterface":1:{s:36:" CustomizeInterface header_logo_path";s:0:"";}s:21:" Theme authorizations";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}}}}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (8,'kernel-modules','O:13:"ModulesConfig":1:{s:34:" AbstractConfigData properties_map";a:1:{s:7:"modules";a:31:{s:6:"BBCode";O:6:"Module":3:{s:17:" Module module_id";s:6:"BBCode";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:7:"TinyMCE";O:6:"Module":3:{s:17:" Module module_id";s:7:"TinyMCE";s:17:" Module activated";b:0;s:25:" Module installed_version";s:5:"5.0.0";}s:15:"QuestionCaptcha";O:6:"Module":3:{s:17:" Module module_id";s:15:"QuestionCaptcha";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:9:"ReCaptcha";O:6:"Module":3:{s:17:" Module module_id";s:9:"ReCaptcha";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:8:"articles";O:6:"Module":3:{s:17:" Module module_id";s:8:"articles";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:8:"calendar";O:6:"Module":3:{s:17:" Module module_id";s:8:"calendar";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:7:"contact";O:6:"Module":3:{s:17:" Module module_id";s:7:"contact";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:7:"connect";O:6:"Module":3:{s:17:" Module module_id";s:7:"connect";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:8:"database";O:6:"Module":3:{s:17:" Module module_id";s:8:"database";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:3:"faq";O:6:"Module":3:{s:17:" Module module_id";s:3:"faq";s:17:" Module activated";b:0;s:25:" Module installed_version";s:5:"5.0.0";}s:5:"forum";O:6:"Module":3:{s:17:" Module module_id";s:5:"forum";s:17:" Module activated";b:0;s:25:" Module installed_version";s:5:"5.0.0";}s:7:"gallery";O:6:"Module":3:{s:17:" Module module_id";s:7:"gallery";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:9:"guestbook";O:6:"Module":3:{s:17:" Module module_id";s:9:"guestbook";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:5:"media";O:6:"Module":3:{s:17:" Module module_id";s:5:"media";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:4:"news";O:6:"Module":3:{s:17:" Module module_id";s:4:"news";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:10:"newsletter";O:6:"Module":3:{s:17:" Module module_id";s:10:"newsletter";s:17:" Module activated";b:0;s:25:" Module installed_version";s:5:"5.0.0";}s:6:"online";O:6:"Module":3:{s:17:" Module module_id";s:6:"online";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:5:"pages";O:6:"Module":3:{s:17:" Module module_id";s:5:"pages";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:4:"poll";O:6:"Module":3:{s:17:" Module module_id";s:4:"poll";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:6:"search";O:6:"Module":3:{s:17:" Module module_id";s:6:"search";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:7:"sitemap";O:6:"Module":3:{s:17:" Module module_id";s:7:"sitemap";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:8:"shoutbox";O:6:"Module":3:{s:17:" Module module_id";s:8:"shoutbox";s:17:" Module activated";b:0;s:25:" Module installed_version";s:5:"5.0.0";}s:5:"stats";O:6:"Module":3:{s:17:" Module module_id";s:5:"stats";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:3:"web";O:6:"Module":3:{s:17:" Module module_id";s:3:"web";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:4:"wiki";O:6:"Module":3:{s:17:" Module module_id";s:4:"wiki";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:13:"LangsSwitcher";O:6:"Module":3:{s:17:" Module module_id";s:13:"LangsSwitcher";s:17:" Module activated";b:0;s:25:" Module installed_version";s:5:"5.0.0";}s:14:"ThemesSwitcher";O:6:"Module":3:{s:17:" Module module_id";s:14:"ThemesSwitcher";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:13:"customization";O:6:"Module":3:{s:17:" Module module_id";s:13:"customization";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:8:"smallads";O:6:"Module":3:{s:17:" Module module_id";s:8:"smallads";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.5";}s:10:"UrlUpdater";O:6:"Module":3:{s:17:" Module module_id";s:10:"UrlUpdater";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}s:8:"download";O:6:"Module":3:{s:17:" Module module_id";s:8:"download";s:17:" Module activated";b:1;s:25:" Module installed_version";s:5:"5.0.0";}}}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (9,'forum','a:15:{s:10:"forum_name";s:14:"PHPBoost forum";s:16:"pagination_topic";i:20;s:14:"pagination_msg";i:15;s:9:"view_time";i:2592000;s:11:"topic_track";i:40;s:9:"edit_mark";i:1;s:14:"no_left_column";i:0;s:15:"no_right_column";i:0;s:17:"activ_display_msg";i:1;s:11:"display_msg";s:21:"[R&eacute;gl&eacute;]";s:19:"explain_display_msg";s:26:"Sujet r&eacute;gl&eacute;?";s:23:"explain_display_msg_bis";s:30:"Sujet non r&eacute;gl&eacute;?";s:22:"icon_activ_display_msg";i:1;s:4:"auth";s:19:"a:1:{s:2:"r2";i:7;}";s:17:"display_connexion";i:0;}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (10,'media','a:6:{s:5:"pagin";i:10;s:10:"nbr_column";i:2;s:8:"note_max";i:5;s:5:"width";i:900;s:6:"height";i:600;s:4:"root";a:10:{s:9:"id_parent";i:-1;s:5:"order";i:1;s:4:"name";s:10:"Multimédia";s:4:"desc";s:78:"<p style="text-align:center"><strong> --- Les vidéos du club --- </strong></p>";s:7:"visible";b:1;s:5:"image";s:9:"media.png";s:9:"num_media";i:1;s:9:"mime_type";i:0;s:6:"active";i:4095;s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:7;}}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (11,'kernel-mail-service','O:17:"MailServiceConfig":1:{s:34:" AbstractConfigData properties_map";a:9:{s:8:"use_smtp";b:0;s:9:"smtp_host";s:0:"";s:9:"smtp_port";i:25;s:10:"smtp_login";s:0:"";s:13:"smtp_password";s:0:"";s:13:"smtp_protocol";s:4:"none";s:19:"default_mail_sender";s:17:"mipel85@gmail.com";s:20:"administrators_mails";a:3:{i:0;s:31:"aeromodelisme.sablais@gmail.com";i:1;s:33:"aeromodelisme.sablais@laposte.net";i:2;s:17:"mipel85@gmail.com";}s:14:"mail_signature";s:0:"";}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (12,'kernel-sessions-config','O:14:"SessionsConfig":1:{s:34:" AbstractConfigData properties_map";a:3:{s:11:"cookie_name";s:7:"session";s:16:"session_duration";s:4:"3600";s:23:"active_session_duration";s:3:"300";}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (13,'kernel-last-use-date','O:17:"LastUseDateConfig":1:{s:34:" AbstractConfigData properties_map";a:3:{s:4:"year";s:4:"2017";s:5:"month";s:2:"03";s:3:"day";i:21;}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (14,'sitemap-config','O:13:"SitemapConfig":1:{s:34:" AbstractConfigData properties_map";a:3:{s:20:"last_generation_date";O:4:"Date":1:{s:15:" Date date_time";O:8:"DateTime":3:{s:4:"date";s:26:"2017-03-19 00:11:41.000000";s:13:"timezone_type";i:3;s:8:"timezone";s:12:"Europe/Paris";}}s:21:"sitemap_xml_life_time";i:3;s:18:"enable_sitemap_xml";b:1;}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (15,'shoutbox-config','O:14:"ShoutboxConfig":1:{s:34:" AbstractConfigData properties_map";a:5:{s:19:"max_messages_number";i:100;s:14:"authorizations";a:3:{s:3:"r-1";i:1;s:2:"r0";i:3;s:2:"r1";i:7;}s:25:"forbidden_formatting_tags";a:25:{i:0;s:5:"title";i:1;s:5:"style";i:2;s:3:"url";i:3;s:3:"img";i:4;s:5:"quote";i:5;s:4:"hide";i:6;s:4:"list";i:7;s:5:"color";i:8;s:7:"bgcolor";i:9;s:4:"font";i:10;s:4:"size";i:11;s:5:"align";i:12;s:5:"float";i:13;s:3:"sup";i:14;s:3:"sub";i:15;s:6:"indent";i:16;s:3:"pre";i:17;s:6:" table";i:18;s:3:"swf";i:19;s:5:"movie";i:20;s:5:"sound";i:21;s:4:"code";i:22;s:4:"math";i:23;s:6:"anchor";i:24;s:7:"acronym";}s:28:"max_links_number_per_message";i:2;s:13:"refresh_delay";i:60000;}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (16,'news-config','O:10:"NewsConfig":1:{s:34:" AbstractConfigData properties_map";a:10:{s:20:"number_news_per_page";s:1:"9";s:27:"number_columns_display_news";s:1:"2";s:25:"display_condensed_enabled";b:1;s:23:"number_character_to_cut";s:3:"128";s:16:"comments_enabled";b:1;s:24:"news_suggestions_enabled";b:1;s:16:"author_displayed";b:1;s:12:"display_type";s:5:"block";s:14:"authorizations";a:3:{s:2:"r1";i:15;s:2:"r0";i:1;s:3:"r-1";i:1;}s:32:"descriptions_displayed_to_guests";b:0;}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (17,'kernel-comments-config','O:14:"CommentsConfig":1:{s:34:" AbstractConfigData properties_map";a:5:{s:14:"authorizations";a:3:{s:2:"r1";i:7;s:2:"r0";i:3;s:3:"r-1";i:3;}s:24:"number_comments_per_page";s:2:"15";s:14:"forbidden_tags";a:0:{}s:17:"max_links_comment";s:1:"2";s:22:"order_display_comments";s:4:"DESC";}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (18,'kernel-maintenance','O:17:"MaintenanceConfig":1:{s:34:" AbstractConfigData properties_map";a:7:{s:7:"enabled";b:0;s:9:"unlimited";b:0;s:8:"end_date";O:4:"Date":1:{s:15:" Date date_time";O:8:"DateTime":3:{s:4:"date";s:26:"2017-01-30 22:31:25.000000";s:13:"timezone_type";i:3;s:8:"timezone";s:12:"Europe/Paris";}}s:7:"message";s:272:"<p style="text-align:center"><span style="font-size: 15px;"><span style="color:#800000;">Aéromodélisme Sablais</span></span><br />\n<br />\n<em><br />\nPour pouvoir améliorer notre site, nous procédons à une maintenance. <br />\nMerci de votre patience.<br />\n</em><br />\n</p>";s:4:"auth";a:0:{}s:16:"display_duration";b:1;s:22:"display_duration_admin";b:1;}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (19,'search-config','O:12:"SearchConfig":1:{s:34:" AbstractConfigData properties_map";a:6:{s:10:"weightings";a:0:{}s:20:"_nb_results_per_page";i:15;s:14:"cache_lifetime";i:30;s:14:"cache_max_uses";i:200;s:22:"unauthorized_providers";a:0:{}s:14:"authorizations";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (20,'newsletter-config','O:16:"NewsletterConfig":1:{s:34:" AbstractConfigData properties_map";a:3:{s:11:"mail_sender";s:17:"mipel85@gmail.com";s:15:"newsletter_name";s:0:"";s:14:"authorizations";a:3:{s:2:"r1";i:63;s:2:"r0";i:35;s:3:"r-1";i:35;}}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (21,'calendar-config','O:14:"CalendarConfig":1:{s:34:" AbstractConfigData properties_map";a:5:{s:21:"items_number_per_page";s:2:"15";s:16:"comments_enabled";b:1;s:24:"members_birthday_enabled";b:0;s:14:"birthday_color";s:7:"#f77c91";s:14:"authorizations";a:3:{s:2:"r1";i:15;s:2:"r0";i:1;s:3:"r-1";i:1;}}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (22,'faq-config','O:9:"FaqConfig":1:{s:34:" AbstractConfigData properties_map";a:5:{s:14:"authorizations";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:3;}s:14:"number_columns";i:4;s:12:"display_mode";s:6:"inline";s:21:"root_cat_display_mode";i:0;s:20:"root_cat_description";s:730:"Bienvenue dans la FAQ !<br /><br /> 2 catégories et quelques questions ont été créées pour vous montrer comment fonctionne ce module. Voici quelques conseils pour bien débuter sur ce module.\n<br /><br /> \n<ul class="formatter-ul">\n<li class="formatter-li">Pour configurer ou personnaliser l''accueil de votre module, rendez vous dans l''<a href="/faq/admin_faq.php">administration du module</a></li>\n<li class="formatter-li">Pour créer des catégories, <a href="/faq/admin_faq_cats.php?new=1">cliquez ici</a> </li>\n<li class="formatter-li">Pour créer des questions, <a href="/faq/management.php?new=1">cliquez ici</a></li>\n</ul>\n<br />Pour en savoir plus, n''hésitez pas à consulter la documentation du module sur le site de PHPBoost.";}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (23,'guestbook-config','O:15:"GuestbookConfig":1:{s:34:" AbstractConfigData properties_map";a:4:{s:14:"items_per_page";i:10;s:14:"forbidden_tags";a:8:{i:0;s:3:"swf";i:1;s:5:"movie";i:2;s:5:"sound";i:3;s:4:"code";i:4;s:4:"math";i:5;s:4:"mail";i:6;s:4:"html";i:7;s:4:"feed";}s:21:"maximum_links_message";i:-1;s:14:"authorizations";a:3:{s:3:"r-1";i:3;s:2:"r0";i:3;s:2:"r1";i:7;}}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (24,'stats-config','O:11:"StatsConfig":1:{s:34:" AbstractConfigData properties_map";a:1:{s:14:"authorizations";a:2:{s:2:"r0";i:1;s:2:"r1";i:1;}}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (25,'kernel-customization-config','O:19:"CustomizationConfig":1:{s:34:" AbstractConfigData properties_map";a:2:{s:12:"favicon_path";s:32:"/Logo club transparent 90x90.png";s:27:"header_logo_path_all_themes";s:57:"/images/customization/all_Logo club transparent 90x90.png";}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (26,'kernel-css-cache-config','O:14:"CSSCacheConfig":1:{s:34:" AbstractConfigData properties_map";a:2:{s:9:"activated";b:1;s:18:"optimization_level";s:4:"high";}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (27,'kernel-writing-pad','O:16:"WritingPadConfig":1:{s:34:" AbstractConfigData properties_map";a:1:{s:7:"content";s:65:"Cet emplacement est réservé pour y saisir vos notes personnelles.";}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (28,'articles-config','O:14:"ArticlesConfig":1:{s:34:" AbstractConfigData properties_map";a:13:{s:24:"number_articles_per_page";s:1:"4";s:26:"number_categories_per_page";s:2:"10";s:24:"number_cols_display_cats";s:1:"2";s:23:"number_character_to_cut";s:3:"160";s:17:"cats_icon_enabled";b:1;s:15:"comments_enable";b:1;s:22:"date_updated_displayed";b:0;s:14:"notation_scale";s:1:"5";s:12:"display_type";s:4:"list";s:14:"authorizations";a:3:{s:2:"r1";i:15;s:2:"r0";i:1;s:3:"r-1";i:1;}s:16:"notation_enabled";b:1;s:32:"descriptions_displayed_to_guests";b:0;s:25:"root_category_description";s:124:"<p style="text-align:center"><strong><span style="font-size: 18px;">Les articles concernant notre club !</span></strong></p>";}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (29,'gallery-config','O:13:"GalleryConfig":1:{s:34:" AbstractConfigData properties_map";a:28:{s:14:"mini_max_width";i:150;s:15:"mini_max_height";i:150;s:9:"max_width";i:800;s:10:"max_height";i:600;s:10:"max_weight";i:1024;s:7:"quality";i:80;s:12:"logo_enabled";b:1;s:4:"logo";s:8:"logo.jpg";s:17:"logo_transparency";i:40;s:24:"logo_horizontal_distance";i:5;s:22:"logo_vertical_distance";i:5;s:14:"columns_number";i:4;s:20:"pics_number_per_page";i:40;s:14:"notation_scale";i:5;s:13:"title_enabled";b:1;s:16:"comments_enabled";b:1;s:16:"notation_enabled";b:0;s:22:"notes_number_displayed";b:0;s:21:"views_counter_enabled";b:1;s:16:"author_displayed";b:1;s:22:"member_max_pics_number";i:100;s:25:"moderator_max_pics_number";i:100;s:21:"pics_enlargement_mode";s:11:"full_screen";s:11:"scroll_type";s:23:"vertical_dynamic_scroll";s:19:"pics_number_in_mini";i:8;s:15:"mini_pics_speed";i:6;s:14:"authorizations";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:11;}s:26:"categories_number_per_page";i:10;}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (30,'pages-config','O:11:"PagesConfig":1:{s:34:" AbstractConfigData properties_map";a:3:{s:20:"count_hits_activated";b:1;s:18:"comments_activated";b:1;s:14:"authorizations";a:3:{s:3:"r-1";i:5;s:2:"r0";i:5;s:2:"r1";i:7;}}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (31,'wiki-config','O:10:"WikiConfig":1:{s:34:" AbstractConfigData properties_map";a:6:{s:9:"wiki_name";s:13:"Wiki PHPBoost";s:24:"number_articles_on_index";i:0;s:27:"display_categories_on_index";b:0;s:12:"hits_counter";b:1;s:10:"index_text";s:734:"Bienvenue sur le module wiki !<br /><br />\nVoici quelques conseils pour bien débuter sur ce module.<br />\n<ul class="formatter-ul">\n<li class="formatter-li">Pour configurer votre module, rendez vous dans l''<a href="/wiki/admin_wiki.php">administration du module</a></li>\n<li class="formatter-li">Pour créer des catégories, <a href="/wiki/post.php?type=cat">cliquez ici</a></li>\n<li class="formatter-li">Pour créer des articles, rendez vous <a href="/wiki/post.php">ici</a></li>\n</ul><br /><br />\nPour personnaliser l''accueil de ce module, <a href="/wiki/admin_wiki.php">cliquez ici</a><br /><br />\nPour en savoir plus, n''hésitez pas à consulter la documentation du module sur le site de <a href="http://www.phpboost.com">PHPBoost</a>.";s:14:"authorizations";a:3:{s:3:"r-1";i:1041;s:2:"r0";i:1299;s:2:"r1";i:4095;}}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (32,'kernel-content-management','O:23:"ContentManagementConfig":1:{s:34:" AbstractConfigData properties_map";a:3:{s:10:"anti_flood";s:1:"0";s:19:"anti_flood_duration";s:1:"7";s:19:"used_captcha_module";s:9:"ReCaptcha";}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (33,'question-captcha-config','O:21:"QuestionCaptchaConfig":1:{s:34:" AbstractConfigData properties_map";a:1:{s:9:"questions";a:2:{i:1;a:2:{s:5:"label";s:23:"Combien font 4 + cinq ?";s:7:"answers";s:6:"9;neuf";}i:2;a:2:{s:5:"label";s:51:"Combien y a-t-il de voyelles dans le mot PHPBoost ?";s:7:"answers";s:6:"2;deux";}}}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (34,'kernel-file-upload-config','O:16:"FileUploadConfig":1:{s:34:" AbstractConfigData properties_map";a:4:{s:36:"authorization_enable_interface_files";a:1:{s:2:"r1";i:1;}s:19:"maximum_size_upload";d:51200;s:24:"enable_bandwidth_protect";b:1;s:21:"authorized_extensions";a:46:{i:0;s:3:"jpg";i:1;s:4:"jpeg";i:2;s:3:"bmp";i:3;s:3:"gif";i:4;s:3:"png";i:5;s:3:"tif";i:6;s:3:"svg";i:7;s:3:"ico";i:8;s:3:"nef";i:9;s:3:"rar";i:10;s:3:"zip";i:11;s:2:"gz";i:12;s:2:"7z";i:13;s:3:"txt";i:14;s:3:"doc";i:15;s:4:"docx";i:16;s:3:"pdf";i:17;s:3:"ppt";i:18;s:3:"xls";i:19;s:3:"odt";i:20;s:3:"odp";i:21;s:3:"ods";i:22;s:3:"odg";i:23;s:3:"odc";i:24;s:3:"odf";i:25;s:3:"odb";i:26;s:3:"xcf";i:27;s:3:"csv";i:28;s:3:"flv";i:29;s:3:"mp3";i:30;s:3:"ogg";i:31;s:3:"mpg";i:32;s:3:"mov";i:33;s:3:"swf";i:34;s:3:"wav";i:35;s:3:"wmv";i:36;s:4:"midi";i:37;s:3:"mng";i:38;s:2:"qt";i:39;s:3:"mp4";i:40;s:3:"mkv";i:41;s:3:"ttf";i:42;s:3:"tex";i:43;s:3:"rtf";i:44;s:3:"psd";i:45;s:3:"iso";}}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (35,'online-config','O:12:"OnlineConfig":1:{s:34:" AbstractConfigData properties_map";a:4:{s:13:"display_order";s:19:"level_display_order";s:23:"number_member_displayed";s:1:"4";s:23:"number_members_per_page";s:2:"20";s:14:"authorizations";a:3:{s:2:"r1";i:1;s:2:"r0";i:1;s:3:"r-1";i:1;}}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (36,'poll-config','O:10:"PollConfig":1:{s:34:" AbstractConfigData properties_map";a:4:{s:11:"cookie_name";s:4:"poll";s:13:"cookie_lenght";i:1;s:29:"displayed_in_mini_module_list";a:1:{i:0;s:1:"3";}s:14:"authorizations";a:3:{s:3:"r-1";i:3;s:2:"r0";i:3;s:2:"r1";i:3;}}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (38,'web-config','O:9:"WebConfig":1:{s:34:" AbstractConfigData properties_map";a:17:{s:11:"nbr_web_max";i:10;s:11:"nbr_cat_max";i:10;s:10:"nbr_column";i:2;s:8:"note_max";i:5;s:14:"authorizations";a:3:{s:2:"r1";i:15;s:2:"r0";i:1;s:3:"r-1";i:1;}s:21:"items_number_per_page";s:2:"15";s:26:"categories_number_per_page";s:2:"10";s:23:"columns_number_per_line";s:1:"3";s:21:"category_display_type";s:7:"summary";s:32:"descriptions_displayed_to_guests";b:0;s:16:"comments_enabled";b:1;s:16:"notation_enabled";b:1;s:14:"notation_scale";s:1:"5";s:25:"root_category_description";s:0:"";s:9:"sort_type";s:4:"name";s:9:"sort_mode";s:3:"ASC";s:23:"partners_number_in_menu";s:1:"5";}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (39,'contact-config','O:13:"ContactConfig":1:{s:34:" AbstractConfigData properties_map";a:10:{s:5:"title";s:35:"Contacter les gestionnaires du site";s:20:"informations_enabled";b:1;s:12:"informations";s:525:"<div class="indent">Bienvenue,<br />\n<br />\n Vous souhaitez obtenir des renseignements sur notre activité, ou nous transmettre des informations, alors n''hésitez pas à nous envoyer un message en remplissant le formulaire ci-dessous. Nous y répondrons dans les meilleurs délais.<br />\n<br />\n<p style="text-align:center"></div><span style="font-size: 10px;"><em>Pour un problème lié au fonctionnement du site, contactez l''administrateur: <strong><a href="mailto:mipel85@gmail.com">mipel85@gmail.com</a></strong></em></span></p>";s:21:"informations_position";s:3:"top";s:23:"tracking_number_enabled";b:1;s:31:"date_in_tracking_number_enabled";b:1;s:29:"sender_acknowledgment_enabled";b:0;s:20:"last_tracking_number";i:20;s:6:"fields";a:4:{i:1;a:12:{s:4:"name";s:12:"Adresse mail";s:10:"field_name";s:13:"f_sender_mail";s:11:"description";s:78:"Votre adresse mail doit être valide pour que vous puissiez obtenir une réponse";s:10:"field_type";s:21:"ContactShortTextField";s:13:"default_value";N;s:15:"possible_values";s:6:"a:0:{}";s:8:"required";i:1;s:9:"displayed";i:1;s:5:"regex";i:4;s:8:"readonly";i:1;s:9:"deletable";i:0;s:13:"authorization";s:46:"a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}";}i:2;a:12:{s:4:"name";s:5:"Objet";s:10:"field_name";s:9:"f_subject";s:11:"description";s:48:"Résumez en quelques mot l''objet de votre demande";s:10:"field_type";s:21:"ContactShortTextField";s:13:"default_value";N;s:15:"possible_values";s:6:"a:0:{}";s:8:"required";i:0;s:9:"displayed";i:1;s:5:"regex";N;s:8:"readonly";i:0;s:9:"deletable";i:0;s:13:"authorization";s:46:"a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}";}i:3;a:12:{s:4:"name";s:15:"Destinataire(s)";s:10:"field_name";s:12:"f_recipients";s:11:"description";s:0:"";s:10:"field_type";s:24:"ContactSimpleSelectField";s:13:"default_value";N;s:15:"possible_values";s:101:"a:1:{s:6:"admins";a:3:{s:10:"is_default";i:1;s:5:"title";s:15:"Administrateurs";s:5:"email";s:0:"";}}";s:8:"required";i:1;s:9:"displayed";i:0;s:5:"regex";N;s:8:"readonly";i:0;s:9:"deletable";i:0;s:13:"authorization";s:46:"a:3:{s:2:"r1";i:1;s:2:"r0";i:1;s:3:"r-1";i:1;}";}i:4;a:12:{s:4:"name";s:7:"Message";s:10:"field_name";s:9:"f_message";s:11:"description";N;s:10:"field_type";s:24:"ContactHalfLongTextField";s:13:"default_value";N;s:15:"possible_values";s:6:"a:0:{}";s:8:"required";i:1;s:9:"displayed";i:1;s:5:"regex";N;s:8:"readonly";i:1;s:9:"deletable";i:0;s:13:"authorization";s:46:"a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}";}}s:14:"authorizations";a:3:{s:2:"r1";i:1;s:2:"r0";i:1;s:3:"r-1";i:1;}}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (40,'smallads','a:10:{s:14:"items_per_page";i:10;s:9:"max_links";i:3;s:9:"list_size";i:1;s:15:"maxlen_contents";i:1000;s:9:"max_weeks";i:8;s:9:"view_mail";i:1;s:7:"view_pm";i:1;s:14:"return_to_list";i:0;s:11:"usage_terms";i:0;s:4:"auth";a:3:{s:3:"r-1";i:8;s:2:"r0";i:8;s:2:"r1";i:31;}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (41,'smallads-config','O:14:"SmalladsConfig":1:{s:34:" AbstractConfigData properties_map";a:10:{s:21:"items_number_per_page";i:10;s:9:"list_size";i:1;s:19:"max_contents_length";i:1000;s:16:"max_weeks_number";i:12;s:20:"display_mail_enabled";b:1;s:18:"display_pm_enabled";b:1;s:22:"return_to_list_enabled";b:0;s:19:"usage_terms_enabled";b:0;s:11:"usage_terms";s:80:"Renseigner ici vos Conditions Générales / Fill in there your general usage terms";s:14:"authorizations";a:3:{s:3:"r-1";i:1;s:2:"r0";i:7;s:2:"r1";i:15;}}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (42,'kernel-authentication-config','O:20:"AuthenticationConfig":1:{s:34:" AbstractConfigData properties_map";a:6:{s:15:"fb_auth_enabled";b:0;s:9:"fb_app_id";s:0:"";s:10:"fb_app_key";s:0:"";s:19:"google_auth_enabled";b:0;s:16:"google_client_id";s:0:"";s:20:"google_client_secret";s:0:"";}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (43,'kernel-security','O:14:"SecurityConfig":1:{s:34:" AbstractConfigData properties_map";a:3:{s:28:"internal_password_min_length";i:6;s:26:"internal_password_strength";s:4:"weak";s:37:"login_and_email_forbidden_in_password";b:0;}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (44,'database-config','O:14:"DatabaseConfig":1:{s:34:" AbstractConfigData properties_map";a:2:{s:36:"database_tables_optimization_enabled";b:1;s:32:"database_tables_optimization_day";i:0;}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (45,'recaptcha-config','O:15:"ReCaptchaConfig":1:{s:34:" AbstractConfigData properties_map";a:2:{s:8:"site_key";s:0:"";s:10:"secret_key";s:0:"";}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (46,'media-config','O:11:"MediaConfig":1:{s:34:" AbstractConfigData properties_map";a:12:{s:21:"items_number_per_page";s:2:"25";s:26:"categories_number_per_page";s:2:"10";s:23:"columns_number_per_line";s:1:"2";s:16:"author_displayed";b:1;s:16:"comments_enabled";b:1;s:16:"notation_enabled";b:1;s:14:"notation_scale";s:1:"5";s:15:"max_video_width";s:3:"900";s:16:"max_video_height";s:3:"570";s:25:"root_category_description";s:0:"";s:26:"root_category_content_type";i:0;s:14:"authorizations";a:3:{s:2:"r1";i:15;s:2:"r0";i:1;s:3:"r-1";i:1;}}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (49,'forum-config','O:11:"ForumConfig":1:{s:34:" AbstractConfigData properties_map";a:16:{s:10:"forum_name";s:27:"Aéromodélisme Sablais forum";s:22:"number_topics_per_page";i:20;s:24:"number_messages_per_page";i:15;s:30:"read_messages_storage_duration";i:30;s:28:"max_topic_number_in_favorite";i:40;s:17:"edit_mark_enabled";b:1;s:22:"multiple_posts_allowed";b:1;s:24:"connexion_form_displayed";b:0;s:20:"left_column_disabled";b:0;s:21:"right_column_disabled";b:0;s:36:"message_before_topic_title_displayed";b:1;s:26:"message_before_topic_title";s:7:"[Réglé]";s:30:"message_when_topic_is_unsolved";s:13:"Sujet réglé ?";s:28:"message_when_topic_is_solved";s:17:"Sujet non réglé ?";s:41:"message_before_topic_title_icon_displayed";b:1;s:14:"authorizations";a:3:{s:3:"r-1";i:129;s:2:"r0";i:131;s:2:"r1";i:139;}}}');
INSERT INTO `phpboost_configs` (`id`, `name`, `value`) VALUES (48,'download-config','O:14:"DownloadConfig":1:{s:34:" AbstractConfigData properties_map";a:16:{s:21:"items_number_per_page";s:2:"15";s:26:"categories_number_per_page";s:2:"10";s:23:"columns_number_per_line";s:1:"3";s:21:"category_display_type";s:7:"summary";s:32:"descriptions_displayed_to_guests";b:0;s:16:"author_displayed";b:1;s:16:"comments_enabled";b:1;s:16:"notation_enabled";b:1;s:14:"notation_scale";s:1:"5";s:25:"root_category_description";s:51:"Bienvenue dans l''espace de téléchargement du site !";s:9:"sort_type";s:16:"number_downloads";s:20:"files_number_in_menu";s:1:"5";s:37:"limit_oldest_file_day_in_menu_enabled";b:0;s:23:"oldest_file_day_in_menu";i:30;s:14:"authorizations";a:3:{s:2:"r1";i:31;s:2:"r0";i:17;s:3:"r-1";i:17;}s:19:"deferred_operations";a:0:{}}}');
DROP TABLE IF EXISTS `phpboost_download`;
CREATE TABLE `phpboost_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `rewrited_name` varchar(255) DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `size` bigint(18) NOT NULL DEFAULT '0',
  `contents` text,
  `short_contents` text,
  `approbation_type` int(1) NOT NULL DEFAULT '0',
  `start_date` int(11) NOT NULL DEFAULT '0',
  `end_date` int(11) NOT NULL DEFAULT '0',
  `creation_date` int(11) NOT NULL DEFAULT '0',
  `updated_date` int(11) NOT NULL DEFAULT '0',
  `author_display_name` varchar(255) DEFAULT '',
  `author_user_id` int(11) NOT NULL DEFAULT '0',
  `number_downloads` int(11) NOT NULL DEFAULT '0',
  `picture_url` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `id_category` (`id_category`),
  FULLTEXT KEY `title` (`name`),
  FULLTEXT KEY `contents` (`contents`),
  FULLTEXT KEY `short_contents` (`short_contents`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_download` (`id`, `id_category`, `name`, `rewrited_name`, `url`, `size`, `contents`, `short_contents`, `approbation_type`, `start_date`, `end_date`, `creation_date`, `updated_date`, `author_display_name`, `author_user_id`, `number_downloads`, `picture_url`) VALUES (2,2,'Règlement intérieur du Club','reglement-interieur-du-club','/upload/reglement-interieur.doc',144384,'Règlement intérieur du Club','',1,0,0,1462485780,1462486087,'',1,0,'/download/download.png');
INSERT INTO `phpboost_download` (`id`, `id_category`, `name`, `rewrited_name`, `url`, `size`, `contents`, `short_contents`, `approbation_type`, `start_date`, `end_date`, `creation_date`, `updated_date`, `author_display_name`, `author_user_id`, `number_downloads`, `picture_url`) VALUES (5,3,'Inscription club','inscription-club','/upload/inscription-club_3b5f2.doc',34304,'<span style="font-size: 15px;">Fiche d''inscription club</span>','',1,0,0,1479724200,1479724200,'',3,24,'/download/download.png');
DROP TABLE IF EXISTS `phpboost_download_cats`;
CREATE TABLE `phpboost_download_cats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `rewrited_name` varchar(250) DEFAULT '',
  `description` text,
  `c_order` int(11) unsigned NOT NULL DEFAULT '0',
  `special_authorizations` tinyint(1) NOT NULL DEFAULT '0',
  `auth` text,
  `image` varchar(255) NOT NULL DEFAULT '',
  `id_parent` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_download_cats` (`id`, `name`, `rewrited_name`, `description`, `c_order`, `special_authorizations`, `auth`, `image`, `id_parent`) VALUES (2,'Documents du Club','documents-du-club','',2,1,'a:2:{s:2:"r1";i:15;s:2:"r0";i:1;}','/download/download.png',0);
INSERT INTO `phpboost_download_cats` (`id`, `name`, `rewrited_name`, `description`, `c_order`, `special_authorizations`, `auth`, `image`, `id_parent`) VALUES (3,'Documents publics','documents-publics','Bulletin d''inscription : <a href="/upload/inscription-club_34b79.doc">inscription club.doc</a>',1,1,'a:3:{s:2:"r1";i:15;s:2:"r0";i:1;s:3:"r-1";i:1;}','/download/download.png',2);
DROP TABLE IF EXISTS `phpboost_errors_404`;
CREATE TABLE `phpboost_errors_404` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `requested_url` varchar(255) NOT NULL,
  `from_url` varchar(255) NOT NULL,
  `times` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`requested_url`,`from_url`)
) ENGINE=MyISAM AUTO_INCREMENT=3534 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_errors_404` (`id`, `requested_url`, `from_url`, `times`) VALUES (3533,'/wp-content/plugins/fancybox-for-wordpress/readme.txt','http://aeromodelisme-sablais.fr/wp-content/plugins/fancybox-for-wordpress/readme.txt',1);
DROP TABLE IF EXISTS `phpboost_events`;
CREATE TABLE `phpboost_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entitled` varchar(255) NOT NULL,
  `description` text,
  `fixing_url` varchar(255) NOT NULL,
  `module` varchar(100) NOT NULL,
  `current_status` tinyint(1) NOT NULL DEFAULT '0',
  `creation_date` int(11) NOT NULL DEFAULT '0',
  `fixing_date` int(11) NOT NULL DEFAULT '0',
  `auth` text,
  `poster_id` int(11) DEFAULT NULL,
  `fixer_id` int(11) DEFAULT NULL,
  `id_in_module` int(11) DEFAULT NULL,
  `identifier` varchar(64) DEFAULT NULL,
  `contribution_type` tinyint(1) NOT NULL DEFAULT '1',
  `type` varchar(64) DEFAULT NULL,
  `priority` tinyint(1) NOT NULL DEFAULT '3',
  PRIMARY KEY (`id`),
  KEY `type_index` (`type`),
  KEY `identifier_index` (`identifier`),
  KEY `module_index` (`module`),
  KEY `id_in_module_index` (`id_in_module`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS `phpboost_faq`;
CREATE TABLE `phpboost_faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) DEFAULT NULL,
  `q_order` int(11) NOT NULL DEFAULT '0',
  `question` varchar(255) NOT NULL,
  `answer` text,
  `author_user_id` int(11) DEFAULT NULL,
  `creation_date` int(11) DEFAULT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_category` (`id_category`),
  FULLTEXT KEY `title` (`question`),
  FULLTEXT KEY `contents` (`answer`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_faq` (`id`, `id_category`, `q_order`, `question`, `answer`, `author_user_id`, `creation_date`, `approved`) VALUES (1,2,1,'Qu''est ce qu''un CMS?','C''est un système de gestion de contenu ou SGC en français (en anglais :  Content Management Systems)',1,1242496334,1);
INSERT INTO `phpboost_faq` (`id`, `id_category`, `q_order`, `question`, `answer`, `author_user_id`, `creation_date`, `approved`) VALUES (2,1,1,'Qu''est-ce que PHPBoost ?','PHPBoost est un CMS (Content Management System ou système de gestion de contenu) français. Ce logiciel permet à n''importe qui de créer son site de façon très simple, tout est assisté. Conçu pour satisfaire les débutants, il devrait aussi ravir les utilisateurs expérimentés qui souhaiteraient pousser son fonctionnement ou encore développer leurs propres modules.',1,1242496518,1);
DROP TABLE IF EXISTS `phpboost_faq_cats`;
CREATE TABLE `phpboost_faq_cats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_parent` int(11) NOT NULL DEFAULT '0',
  `c_order` int(11) unsigned NOT NULL DEFAULT '0',
  `auth` text,
  `name` varchar(255) NOT NULL,
  `description` text,
  `image` varchar(255) NOT NULL,
  `rewrited_name` varchar(250) DEFAULT '',
  `special_authorizations` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_faq_cats` (`id`, `id_parent`, `c_order`, `auth`, `name`, `description`, `image`, `rewrited_name`, `special_authorizations`) VALUES (1,0,1,NULL,'PHPBoost','Des questions sur PHPBoost ?','/faq/faq.png','phpboost',0);
INSERT INTO `phpboost_faq_cats` (`id`, `id_parent`, `c_order`, `auth`, `name`, `description`, `image`, `rewrited_name`, `special_authorizations`) VALUES (2,0,2,NULL,'Dictionnaire','','/faq/faq.png','dictionnaire',0);
DROP TABLE IF EXISTS `phpboost_forum_alerts`;
CREATE TABLE `phpboost_forum_alerts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcat` int(11) NOT NULL DEFAULT '0',
  `idtopic` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `contents` text,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `idmodo` int(11) NOT NULL DEFAULT '0',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS `phpboost_forum_cats`;
CREATE TABLE `phpboost_forum_cats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `last_topic_id` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `auth` text,
  `url` varchar(255) DEFAULT NULL,
  `rewrited_name` varchar(250) DEFAULT '',
  `special_authorizations` tinyint(1) NOT NULL DEFAULT '0',
  `c_order` int(11) unsigned NOT NULL DEFAULT '0',
  `id_parent` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_parent` (`id_parent`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_forum_cats` (`id`, `name`, `description`, `last_topic_id`, `status`, `auth`, `url`, `rewrited_name`, `special_authorizations`, `c_order`, `id_parent`) VALUES (2,'Forum de test','Forum de test',1,0,'a:4:{s:3:"r-1";i:1;s:2:"r0";i:3;s:2:"r1";i:7;s:2:"r2";i:7;}','','forum-de-test',1,2,1);
INSERT INTO `phpboost_forum_cats` (`id`, `name`, `description`, `last_topic_id`, `status`, `auth`, `url`, `rewrited_name`, `special_authorizations`, `c_order`, `id_parent`) VALUES (1,'Catégorie de test','Catégorie de test',1,0,'a:4:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;s:2:"r2";i:7;}','','categorie-de-test',1,1,0);
DROP TABLE IF EXISTS `phpboost_forum_history`;
CREATE TABLE `phpboost_forum_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_id_action` int(11) NOT NULL DEFAULT '0',
  `url` text,
  `timestamp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS `phpboost_forum_msg`;
CREATE TABLE `phpboost_forum_msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idtopic` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `contents` text,
  `timestamp` int(11) NOT NULL DEFAULT '0',
  `timestamp_edit` int(11) NOT NULL DEFAULT '0',
  `user_id_edit` int(11) NOT NULL DEFAULT '0',
  `user_ip` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idtopic` (`idtopic`),
  FULLTEXT KEY `contenu` (`contents`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_forum_msg` (`id`, `idtopic`, `user_id`, `contents`, `timestamp`, `timestamp_edit`, `user_id_edit`, `user_ip`) VALUES (1,1,1,'Message de test sur le forum PHPBoost',1453496326,0,0,'');
DROP TABLE IF EXISTS `phpboost_forum_poll`;
CREATE TABLE `phpboost_forum_poll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idtopic` int(11) NOT NULL DEFAULT '0',
  `question` varchar(255) NOT NULL,
  `answers` text,
  `voter_id` text,
  `votes` text,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS `phpboost_forum_ranks`;
CREATE TABLE `phpboost_forum_ranks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL DEFAULT '',
  `msg` int(11) NOT NULL DEFAULT '0',
  `icon` varchar(255) NOT NULL DEFAULT '',
  `special` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_forum_ranks` (`id`, `name`, `msg`, `icon`, `special`) VALUES (1,'Administrateur',-2,'rank_admin.png',1);
INSERT INTO `phpboost_forum_ranks` (`id`, `name`, `msg`, `icon`, `special`) VALUES (2,'Modérateur',-1,'rank_modo.png',1);
INSERT INTO `phpboost_forum_ranks` (`id`, `name`, `msg`, `icon`, `special`) VALUES (3,'Boosteur Inactif',0,'rank_0.png',0);
INSERT INTO `phpboost_forum_ranks` (`id`, `name`, `msg`, `icon`, `special`) VALUES (4,'Booster Fronde',1,'rank_0.png',0);
INSERT INTO `phpboost_forum_ranks` (`id`, `name`, `msg`, `icon`, `special`) VALUES (5,'Booster Minigun',25,'rank_1.png',0);
INSERT INTO `phpboost_forum_ranks` (`id`, `name`, `msg`, `icon`, `special`) VALUES (6,'Booster Fuzil',50,'rank_2.png',0);
INSERT INTO `phpboost_forum_ranks` (`id`, `name`, `msg`, `icon`, `special`) VALUES (7,'Booster Bazooka',100,'rank_3.png',0);
INSERT INTO `phpboost_forum_ranks` (`id`, `name`, `msg`, `icon`, `special`) VALUES (8,'Booster Roquette',250,'rank_4.png',0);
INSERT INTO `phpboost_forum_ranks` (`id`, `name`, `msg`, `icon`, `special`) VALUES (9,'Booster Mortier',500,'rank_5.png',0);
INSERT INTO `phpboost_forum_ranks` (`id`, `name`, `msg`, `icon`, `special`) VALUES (10,'Booster Missile',1000,'rank_6.png',0);
INSERT INTO `phpboost_forum_ranks` (`id`, `name`, `msg`, `icon`, `special`) VALUES (11,'Booster Fusée',1500,'rank_special.png',0);
DROP TABLE IF EXISTS `phpboost_forum_topics`;
CREATE TABLE `phpboost_forum_topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcat` int(11) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(75) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `nbr_msg` int(9) NOT NULL DEFAULT '0',
  `nbr_views` int(9) NOT NULL DEFAULT '0',
  `last_user_id` int(11) NOT NULL DEFAULT '0',
  `last_msg_id` int(11) NOT NULL DEFAULT '0',
  `last_timestamp` int(11) NOT NULL DEFAULT '0',
  `first_msg_id` int(11) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `aprob` tinyint(1) NOT NULL DEFAULT '0',
  `display_msg` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idcat` (`idcat`,`last_user_id`,`last_timestamp`,`type`),
  FULLTEXT KEY `title` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_forum_topics` (`id`, `idcat`, `title`, `subtitle`, `user_id`, `nbr_msg`, `nbr_views`, `last_user_id`, `last_msg_id`, `last_timestamp`, `first_msg_id`, `type`, `status`, `aprob`, `display_msg`) VALUES (1,2,'Test','Sujet de test',1,1,0,1,1,1453496326,1,0,1,0,0);
DROP TABLE IF EXISTS `phpboost_forum_track`;
CREATE TABLE `phpboost_forum_track` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idtopic` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `track` tinyint(1) NOT NULL DEFAULT '0',
  `pm` tinyint(1) NOT NULL DEFAULT '0',
  `mail` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS `phpboost_forum_view`;
CREATE TABLE `phpboost_forum_view` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idtopic` int(11) NOT NULL DEFAULT '0',
  `last_view_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS `phpboost_gallery`;
CREATE TABLE `phpboost_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcat` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT '',
  `path` varchar(255) DEFAULT '',
  `width` int(9) NOT NULL DEFAULT '0',
  `height` int(9) NOT NULL DEFAULT '0',
  `weight` int(9) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `aprob` tinyint(1) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  `timestamp` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idcat` (`idcat`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (9,1,'Journée hélicoptère','imag0411.jpg',1280,768,269142,1,1,230,1454768447);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (8,1,'Vue d''ensemble','vue-d_ensemble.jpg',800,450,83072,4,1,194,1454745184);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (5,1,'Embraer Xingu de l\\''aéronavale','xingu-en-vol-004-_custom.jpg',374,200,8524,1,1,223,1454688332);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (6,1,'Vue aérienne du Coudriou','coudriou-_custom.jpg',800,545,59384,1,1,263,1454688353);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (10,1,'P 51 mustang','p-51--jean-claude-_custom.jpg',787,400,15919,3,1,210,1455554901);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (11,1,'Formule france 2000 - 2014','ff-2000-032-_custom.jpg',597,400,94685,3,1,445,1455555134);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (12,1,'hiver','dsc00197.jpg',600,399,113073,1,1,144,1456858705);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (13,1,'','maquette-_1-sur-42_-_small.jpg',854,344,63027,3,1,85,1463390626);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (14,1,'','maquette-_8-sur-42_-_small.jpg',725,480,41306,3,1,88,1463390680);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (15,1,'FW 190','maquette-_42-sur-42_-_small.jpg',711,480,38170,3,1,84,1463390751);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (16,1,'','maquette-_29-sur-42_-_custom.jpg',1280,524,26794,3,1,70,1463391132);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (18,1,'warbirds','warbird-_1-sur-1_-_medium_-_small.jpg',854,410,88005,3,1,63,1469799925);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (19,1,'Corsair','warbird-2-_2-sur-9_-_medium_-_small.jpg',721,480,66522,3,1,53,1469799973);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (20,2,'PRB','prb_74520.jpg',1600,1143,103954,1,1,99,1471294646);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (22,2,'IMG_0006.JPG','IMG_0006.JPG',3456,2304,930323,1,1,129,1471296100);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (26,2,'IMG_0090.JPG','IMG_0090.JPG',800,533,59420,1,1,85,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (27,2,'IMG_0426.JPG','IMG_0426.JPG',800,533,46721,1,1,83,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (28,2,'IMG_0019.JPG','IMG_0019.JPG',800,533,97774,1,1,83,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (29,2,'IMG_0066.JPG','IMG_0066.JPG',800,533,27527,1,1,75,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (30,2,'IMG_0455.JPG','IMG_0455.JPG',800,533,10121,1,1,73,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (31,2,'IMG_0021.JPG','IMG_0021.JPG',800,533,92973,1,1,87,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (32,2,'IMG_0255.JPG','IMG_0255.JPG',800,533,52632,1,1,88,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (33,2,'IMG_0163.JPG','IMG_0163.JPG',800,533,69439,1,1,101,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (34,2,'IMG_0451.JPG','IMG_0451.JPG',800,533,57837,1,1,100,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (35,2,'IMG_0287.JPG','IMG_0287.JPG',800,533,60128,1,1,101,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (36,2,'IMG_0039.JPG','IMG_0039.JPG',800,533,55792,1,1,107,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (37,2,'IMG_0078.JPG','IMG_0078.JPG',800,533,66649,1,1,101,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (38,2,'IMG_0249.JPG','IMG_0249.JPG',800,533,43783,1,1,98,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (39,2,'IMG_0388.JPG','IMG_0388.JPG',800,533,43230,1,1,98,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (40,2,'IMG_0073.JPG','IMG_0073.JPG',800,533,85616,1,1,104,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (41,2,'IMG_0480.JPG','IMG_0480.JPG',800,533,39328,1,1,78,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (42,2,'IMG_0148.JPG','IMG_0148.JPG',800,533,34863,1,1,76,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (43,2,'IMG_0043.JPG','IMG_0043.JPG',800,533,77104,1,1,50,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (44,2,'IMG_0362.JPG','IMG_0362.JPG',800,533,31609,1,1,51,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (45,2,'IMG_0013.JPG','IMG_0013.JPG',800,533,115074,1,1,66,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (46,2,'IMG_0443.JPG','IMG_0443.JPG',800,533,8707,1,1,46,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (47,2,'IMG_0421.JPG','IMG_0421.JPG',800,533,45130,1,1,57,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (48,2,'IMG_0029.JPG','IMG_0029.JPG',800,533,98619,1,1,74,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (49,2,'IMG_0288.JPG','IMG_0288.JPG',800,533,46644,1,1,65,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (50,2,'IMG_0208.JPG','IMG_0208.JPG',800,533,17668,1,1,77,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (51,2,'IMG_0468.JPG','IMG_0468.JPG',800,533,61627,1,1,65,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (52,2,'IMG_0336.JPG','IMG_0336.JPG',800,533,85601,1,1,63,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (53,2,'IMG_0038.JPG','IMG_0038.JPG',800,533,82547,1,1,66,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (54,2,'IMG_0418.JPG','IMG_0418.JPG',800,533,9339,1,1,79,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (55,2,'IMG_0374.JPG','IMG_0374.JPG',800,533,42952,1,1,71,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (56,2,'IMG_0275.JPG','IMG_0275.JPG',800,533,32454,1,1,81,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (57,2,'IMG_0077.JPG','IMG_0077.JPG',800,533,103401,1,1,86,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (58,2,'IMG_0170.JPG','IMG_0170.JPG',800,533,85723,1,1,77,1471353185);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (59,2,'IMG_0076.JPG','IMG_0076.JPG',800,533,272431,1,1,71,1471353512);
INSERT INTO `phpboost_gallery` (`id`, `idcat`, `name`, `path`, `width`, `height`, `weight`, `user_id`, `aprob`, `views`, `timestamp`) VALUES (60,1,'','wp_20170224_002-_small_-_mobile.jpg',320,179,50081,3,1,8,1488096108);
DROP TABLE IF EXISTS `phpboost_gallery_cats`;
CREATE TABLE `phpboost_gallery_cats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT '',
  `description` text,
  `auth` text,
  `rewrited_name` varchar(250) DEFAULT '',
  `special_authorizations` tinyint(1) NOT NULL DEFAULT '0',
  `c_order` int(11) unsigned NOT NULL DEFAULT '0',
  `id_parent` int(11) NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_gallery_cats` (`id`, `name`, `description`, `auth`, `rewrited_name`, `special_authorizations`, `c_order`, `id_parent`, `image`) VALUES (1,'Nos photos','Les photos de notre activité.','','nos-photos',0,1,0,'/upload/wp_20170224_002-_small_-_mobile.jpg');
INSERT INTO `phpboost_gallery_cats` (`id`, `name`, `description`, `auth`, `rewrited_name`, `special_authorizations`, `c_order`, `id_parent`, `image`) VALUES (2,'P''TITS GROS - 15/08/2016','Quelques photos de la superbe rencontre P''TITS GROS du 15 août sur le terrain du Coudriou.','','p-tits-gros-15-08-2016',0,2,0,'/upload/vue_ensemble.jpg');
DROP TABLE IF EXISTS `phpboost_group`;
CREATE TABLE `phpboost_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `img` varchar(255) NOT NULL DEFAULT '',
  `color` varchar(6) NOT NULL DEFAULT '',
  `auth` varchar(255) NOT NULL DEFAULT '',
  `members` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS `phpboost_guestbook`;
CREATE TABLE `phpboost_guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contents` text,
  `login` varchar(255) NOT NULL DEFAULT '',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `timestamp` (`timestamp`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_guestbook` (`id`, `contents`, `login`, `user_id`, `timestamp`) VALUES (1,'<span style="font-size: 25px;">Je souhaite une longue et belle vie au nouveau site du club d''aéromodélisme sablais </span>.  Jipé 3','jipé3',5,1454320303);
INSERT INTO `phpboost_guestbook` (`id`, `contents`, `login`, `user_id`, `timestamp`) VALUES (2,'félicitation aux créateurs du nouveau site d''aéromodelisme sablais<br />\ngérard','gérard',17,1455576640);
INSERT INTO `phpboost_guestbook` (`id`, `contents`, `login`, `user_id`, `timestamp`) VALUES (3,'Bravo a nos administrateurs et a Jipé, ca commence a prendre forme.<br />\nDidier.','didier85',4,1455781544);
INSERT INTO `phpboost_guestbook` (`id`, `contents`, `login`, `user_id`, `timestamp`) VALUES (4,'Merci de votre investissement et du travail effectué pour la création du site, il prend déjà sa vitesse de vol.<br />\nBonne visite à vous tous.<br />\nAndré<br />','André',-1,1455792374);
INSERT INTO `phpboost_guestbook` (`id`, `contents`, `login`, `user_id`, `timestamp`) VALUES (5,'Félicitations pour le site et le temps passé merci!!!!      Et a bientôt pour de nouvelle aventure.','Guillaume ',18,1456123380);
INSERT INTO `phpboost_guestbook` (`id`, `contents`, `login`, `user_id`, `timestamp`) VALUES (7,'Merci à nos photographes pour ces magnifiques photos, une belle journée qui restera dans nos memoires, merci également a Jean Christophe qui a organisé cet événement et aux membres du club présent.','Didier',-1,1471421133);
INSERT INTO `phpboost_guestbook` (`id`, `contents`, `login`, `user_id`, `timestamp`) VALUES (8,'Félicitations aux dirigeants du STAFF  qui ont permis aux créateurs de le réaliser , avec excellence.<br />\nMerci','TONTON85',11,1477241822);
INSERT INTO `phpboost_guestbook` (`id`, `contents`, `login`, `user_id`, `timestamp`) VALUES (9,'Íîâûå çèìíèå ïîêðûøêè ÿâëÿþòñÿ çàëîãîì áåçîïàñíîñòè àâòîâëàäåëüöåâ â ñëîæíåéøèõ ðåàëèÿõ îòå÷åñòâåííîé çèìû, êîãäà íåìàëóþ ÷àñòü âðåìåíè ãîðîäñêîé àñôàëüò óêðûò òîëñòûì ñëîåì ñíåãà è ëüäà.<br />\n<br />\nÄàáû èçáåæàòü íåïðèÿòíûõ ñèòóàöèé òèïà ÄÒÏ, çèìíèå ïîêðûøêè íåîáõîäèìî ñòàâèòü ñâîåâðåìåííî. Ó òåõ, êòî åùå íå èçíîñèë ñòàðûé êîìïëåêò ðåçèíû ïðîáëåì îáû÷íî íå ïîÿâëÿåòñÿ.<br />\n<br />\nÀ âîò íîâóþ ðåçèíó ñåé÷àñ êóïèòü äîâîëüíî òðóäíî, âåäü áîëüøàÿ ÷àñòü àâòîìîáèëüíûõ ìàãàçèíîâ íå ìîæåò îáðàäîâàòü êëèåíòà íè öåíàìè íè øèðîòîé âûáîðà.<br />\nÂ èíòåðíåò-ìàãàçèíå <a href="http://belshina.su/">belshina.su</a> âû ìîæåòå íàéòè õîðîøèå øèíû äëÿ ëþáîãî àâòîìîáèëÿ ïî ñàìîé íèçêîé öåíå!','Visiteur',-1,1489596312);
DROP TABLE IF EXISTS `phpboost_internal_authentication`;
CREATE TABLE `phpboost_internal_authentication` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) DEFAULT '',
  `password` varchar(64) DEFAULT '',
  `registration_pass` varchar(30) NOT NULL DEFAULT '0',
  `change_password_pass` varchar(64) NOT NULL DEFAULT '',
  `connection_attemps` tinyint(1) NOT NULL DEFAULT '0',
  `last_connection` int(11) NOT NULL DEFAULT '0',
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (1,'mipel','8af573a80bf0ce58bfe44d7a0af3ce291cc818c87bd8f9117b9eba34a2667a4d',0,'',0,1490118495,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (3,'thierry','d699b102aa3917786f3c94f8fbbf5a6148b8649c41b99d0290a4d88976a1b070','','',0,1490021737,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (4,'didier85','caa0231976b00390337874eb1e3c53d3a6e35c673a305421bd8325e7e995fa42','','',0,1484674398,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (6,'FlyingBill','97131ddf5e9cd859154085534ca96ab41f9ee07b78271fddb337db545048710a','','',0,1486030251,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (5,'jipé3','4501f1aa92d9a806bead3302e7a07fd1b2ae9c6db75abac1a75e0a45edcf1bf8','','',0,1488045973,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (7,'Abbe','9f047f103753f5afdfc6827137cd1ecc1ffcad27e9ba04c0b44ca73fe233ad27','','',0,1465578957,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (8,'andré','763be24be30dec82e069d094f9fbbce9acbdce38c6456ecc55354f612a3642a4','','',0,1454774083,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (9,'pierre','3db0fbfc5cec716e3a9284fcf81fff92fd0491199aba645c6379a8b8793d5e15','','',0,1490010216,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (10,'lagaff','910b548cad30661e7a6c7eb5fc2e96bf454cb9f8ec42ee5a1c7604aec977d5e8','','',0,0,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (11,'TONTON85','44a26a2f8c798ced480d466db2291b5bd28ccaf4705a2ace4593e0d88b08a322','','',0,1480957501,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (12,'Lionel','dc8ab18c12801b307dcd07882636460c9317f619d26daaf4547940c68813705d','','',0,1455621419,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (13,'b''iguane','5ff211471d8899df9abd17ad03bb190a5b6ee4eaf07cafcdcd31816251898805','','',0,0,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (14,'5550eric','dbf8cfeec2beb36804de12cc923017b388411bfead21152dbdea49d8d48b3ca9','','',0,1489347868,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (15,'lamoune','4ee64a2f88410f0774099f91614987390df2a9b626a89b0e44d359bff7db16fd','','',0,0,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (16,'jcmitard','2123bd8e01b742419c0a0a5dd2f7fd47623975c52c3f70b9c0a8c06483de8f35','','',0,1468266059,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (17,'gérard','9d8e8d9ff83c22e49a2852ee86ecb143172e461abf79763c0e94e0a0cf4845d5','','',0,1472158834,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (18,'Guillaume ','be5bfe8d2095b63006c0c86f98f88eee8dbf9354923b0aa418ce6da3891eacb3','','',0,1489615234,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (19,'Albec','e7a40554a1a04acc00dadab4c20e7cfd27dae0cd098b8c1d6d48087c7fbdb9c6','','',0,1455609211,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (20,'chabiluc','e6d513a3497f7e6736b4b52ecee4758d3e16dae62bfcb9ed5207c48b81cfb60a','','',0,0,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (21,'lolo','2a2faa09004d090abb98263a83557a290823370e62b4602fe610266c7134d867','','',0,0,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (22,'jp1','3c71e19e3d8fdaea321cc9efa88790f4dc601b4f38f3a431d2ac8021e74c18b8','','',1,1464100175,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (23,'JIBI','8a2261e9c4ecadd748201d07066ba638a80e09fc35e5bd5833038d5ef4f89424','','',0,1462476312,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (24,'stef85','87c07cfdaf7d64f627a0caaf7518988f1f6dd3d32eb327e4dc843db9766385e7','','5ae710994bd1059',0,1460215731,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (25,'franck','53d83c4953365a8b5b74909cad862ed977211a9c8d98c79b74a0105d6dcc945e','','',0,1475350926,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (26,'jcheli','23aae2501e0832e3d2cc49e2c7d6310a7a72f6b7853ce9da68483ba0fab643ea','','',0,1471588314,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (27,'dboucher','de915877cd749def8b05471ccbdc55ec6f188cfe3364c71ea43c123019d7e9fb','','',0,1460117235,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (30,'MOMO85430','9f4a0e3af9aa2d34f3d14def36e486c51ffe6b5cca8a665b0d5d24f4d25d5fb4','','',0,1481538882,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (31,'GUIOT','227f43ed7d913a0009497614a11acf88c8f7fc86faad666690bb7433a184c523','','',0,1482236349,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (34,'erfreddy1826@gmail.com','6e8b07f071698ce298f906c5068376f3951de8d031313ecd27cda7c6ecc84d2a','','',0,1469963294,0);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (35,'family_godefroy@hotmail.com','6e1a440be8c804cd1b22ae65bbac725718de1cdd11e6062e2f0a09bb7ad617f4','','',3,1479388013,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (37,'dauphing@gmail.com','498b73ced6f2164ff816f2a22e60ff50d3c730ff48cd1efd6812d3058ec81599','','',0,1475579763,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (38,'jeanpolsky','ba12c1a28c5b0a975a7509bd68faf1680b3756eb56c0e251178cc0ec0e36e343','','',0,1476858039,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (39,'jl.bolteau@gmail.com','fd8ee2f3cfbe8646cbc64d491d31666a92c1ece416e94db41ac8ab162bf21864','','',0,1489864818,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (40,'gerard.crochet@orange.fr','f87d6120e138996d4358162df030111380ddd0e5aa8252168133149a1a23aac5','','',0,1484001229,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (41,'charlesferreux@gmail.com','e3a2edbf019ca4dd2abca2766d4dcd7e58c2d5e1c129ca2ebcfc25c68ffac60d','','',0,1484056017,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (42,'jean-claude.talbert@club-internet.fr','90c439b28d0c6a5b2784e7034083efd12c73cdc14084e9ab10732d2499ed8908','','',0,1484412053,1);
INSERT INTO `phpboost_internal_authentication` (`user_id`, `login`, `password`, `registration_pass`, `change_password_pass`, `connection_attemps`, `last_connection`, `approved`) VALUES (43,'pascalnad@hotmail.com','cddc5371712d0c4064d3a7d7e296d512611a57cc83451420b2b49c14deae7f86','','',0,1486076761,1);
DROP TABLE IF EXISTS `phpboost_internal_authentication_failures`;
CREATE TABLE `phpboost_internal_authentication_failures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` varchar(64) DEFAULT '',
  `login` varchar(255) DEFAULT '',
  `connection_attemps` tinyint(1) NOT NULL DEFAULT '0',
  `last_connection` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `session_id` (`session_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_internal_authentication_failures` (`id`, `session_id`, `login`, `connection_attemps`, `last_connection`) VALUES (38,'21939c195983eecd7cb6bda964d46e2bc0bcc62f88a3245d334f7fd25b8ffa4a','pierre.larrans@wanadoo.fr',2,1490004293);
DROP TABLE IF EXISTS `phpboost_keywords`;
CREATE TABLE `phpboost_keywords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `rewrited_name` varchar(250) DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (1,'construction','construction');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (2,'planeur','planeur');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (3,'ls3','ls3');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (4,'/upload/avion-decollage.jpg','upload-avion-decollage-jpg');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (5,'/upload/20130412_143818a.jpg','upload-20130412-143818a-jpg');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (6,'décollage','decollage');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (7,'avion','avion');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (8,'maquette','maquette');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (9,'miniature','miniature');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (10,'concours','concours');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (11,'affiche','affiche');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (12,'indoor','indoor');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (13,'Hélico','helico');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (14,'drône','drone');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (15,'annonces','annonces');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (16,'Stampe','stampe');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (17,'Sauniers','sauniers');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (18,'Tonte','tonte');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (19,'Coudriou','coudriou');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (20,'GPR','gpr');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (21,'planeurs','planeurs');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (22,'remorquage','remorquage');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (23,'remorqués','remorques');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (24,'planeurs-remorqués','planeurs-remorques');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (25,'moto-cross','moto-cross');
INSERT INTO `phpboost_keywords` (`id`, `name`, `rewrited_name`) VALUES (26,'sécurité','securite');
DROP TABLE IF EXISTS `phpboost_keywords_relations`;
CREATE TABLE `phpboost_keywords_relations` (
  `id_in_module` int(11) NOT NULL DEFAULT '0',
  `module_id` varchar(25) DEFAULT '',
  `id_keyword` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_keywords_relations` (`id_in_module`, `module_id`, `id_keyword`) VALUES (9,'articles',3);
INSERT INTO `phpboost_keywords_relations` (`id_in_module`, `module_id`, `id_keyword`) VALUES (9,'articles',2);
INSERT INTO `phpboost_keywords_relations` (`id_in_module`, `module_id`, `id_keyword`) VALUES (9,'articles',1);
INSERT INTO `phpboost_keywords_relations` (`id_in_module`, `module_id`, `id_keyword`) VALUES (11,'articles',13);
INSERT INTO `phpboost_keywords_relations` (`id_in_module`, `module_id`, `id_keyword`) VALUES (12,'articles',14);
INSERT INTO `phpboost_keywords_relations` (`id_in_module`, `module_id`, `id_keyword`) VALUES (27,'news',24);
INSERT INTO `phpboost_keywords_relations` (`id_in_module`, `module_id`, `id_keyword`) VALUES (35,'news',19);
DROP TABLE IF EXISTS `phpboost_media`;
CREATE TABLE `phpboost_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcat` int(11) NOT NULL DEFAULT '0',
  `iduser` int(11) NOT NULL DEFAULT '-1',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL DEFAULT '',
  `contents` text,
  `url` text,
  `mime_type` varchar(255) NOT NULL DEFAULT '0',
  `infos` int(6) NOT NULL DEFAULT '0',
  `width` int(9) NOT NULL DEFAULT '100',
  `height` int(9) NOT NULL DEFAULT '100',
  `counter` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idcat` (`idcat`),
  FULLTEXT KEY `name` (`name`),
  FULLTEXT KEY `contents` (`contents`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_media` (`id`, `idcat`, `iduser`, `timestamp`, `name`, `contents`, `url`, `mime_type`, `infos`, `width`, `height`, `counter`) VALUES (10,0,1,1462518663,'Journée Indoor 2016','Le résumé en photos de la journée Indoor 2016.','/upload/indoor-2016.flv','video/x-flv',2,425,344,473);
INSERT INTO `phpboost_media` (`id`, `idcat`, `iduser`, `timestamp`, `name`, `contents`, `url`, `mime_type`, `infos`, `width`, `height`, `counter`) VALUES (8,0,1,1459843269,'Construction d''un planeur LS3','La construction d''un planeur LS3 aux ateliers d''Olonne Sur Mer.<br />\r\n<br />\r\n<a href="/upload/construction-ls3.flv">http://aeromodelisme-sablais.fr/upload/construction-ls3.flv</a>','../upload/construction-ls3.flv','video/x-flv',2,425,344,809);
DROP TABLE IF EXISTS `phpboost_media_cats`;
CREATE TABLE `phpboost_media_cats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_parent` int(11) NOT NULL DEFAULT '0',
  `c_order` int(11) NOT NULL DEFAULT '0',
  `auth` text,
  `name` varchar(255) NOT NULL DEFAULT '',
  `content_type` int(11) DEFAULT NULL,
  `description` text,
  `image` varchar(255) NOT NULL DEFAULT '',
  `rewrited_name` varchar(250) DEFAULT '',
  `special_authorizations` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS `phpboost_member`;
CREATE TABLE `phpboost_member` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `display_name` varchar(255) NOT NULL DEFAULT '',
  `level` int(1) NOT NULL DEFAULT '0',
  `groups` text,
  `locale` varchar(25) NOT NULL DEFAULT '',
  `theme` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `show_email` int(4) NOT NULL DEFAULT '1',
  `editor` varchar(15) NOT NULL DEFAULT '',
  `timezone` varchar(50) NOT NULL DEFAULT '',
  `registration_date` int(11) NOT NULL DEFAULT '0',
  `posted_msg` int(6) NOT NULL DEFAULT '0',
  `unread_pm` int(6) NOT NULL DEFAULT '0',
  `warning_percentage` int(6) NOT NULL DEFAULT '0',
  `delay_readonly` int(11) NOT NULL DEFAULT '0',
  `last_connection_date` int(11) NOT NULL DEFAULT '0',
  `delay_banned` int(11) NOT NULL DEFAULT '0',
  `autoconnect_key` varchar(64) DEFAULT '',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `login` (`display_name`),
  UNIQUE KEY `display_name` (`display_name`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (1,'mipel',2,'','french','underline','mipel85@gmail.com',1,'BBCode','Europe/Paris',1453496364,0,0,0,0,1490118495,0,'81927865e4fa41e863ebe99d1449bf48071bf9add5ac632dbcbd1bbc799ffacd');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (3,'thierry',2,'r2|r2|r2|r2|r2|r2|r2|r2|','french','base','thierry.serceau@orange.fr',0,'BBCode','Europe/Paris',1453554722,0,0,0,0,1490081034,0,'d79701c733cc4e03fbf7a2f9c065b9c35e98b3dfb331803bbc53e2f1eed30d1a');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (4,'didier85',0,'','french','underline','didier.hochedez57@orange.fr',0,'BBCode','Europe/Paris',1453619727,0,0,0,0,1484674398,0,'f33b539a27daf7da431a36496f67dbff51e236b1d312228a31b0499f083d12bd');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (6,'FlyingBill',0,'','french','underline','billaud.francis@sfr.fr',0,'BBCode','Europe/Paris',1454080927,0,0,0,0,1486030251,0,'5c3bbcba9980846dd38c7449789efb1fab2782340d3c166065945e0465915080');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (5,'jipé3',1,'','french','underline','bruneau.jp@free.fr',0,'BBCode','Europe/Paris',1453923406,0,0,0,0,1490039536,0,'e40fa325af155ddbb9c9031fc4c986d4c78d8526203606218e32457e79dac787');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (7,'Abbe',0,'','french','underline','Alain.blanc11@wanadoo.fr',0,'BBCode','Europe/Paris',1454517605,0,0,0,0,1465578957,0,'e6b7e19ea021ed02b7804dd04c5d183f6b569fd2d53185c922bee9e6f94928b9');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (8,'andré',1,'','french','underline','a.berthome@wanadoo.fr',0,'BBCode','Europe/Paris',1454520769,0,0,0,0,1454774083,0,'');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (9,'pierre',0,'','french','underline','pierre.larrans@wanadoo.fr',0,'BBCode','Europe/Paris',1454778555,0,0,0,0,1490010216,0,'c2716bfca11be27e1f30b47cf94c85456ffa8769ea6d3aaee3c9e44aec1fda26');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (10,'lagaff',0,'','french','underline','lagaff850@msn.com',0,'BBCode','Europe/Paris',1455559973,0,0,0,0,0,0,'');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (11,'TONTON85',0,'','french','underline','devineaure@wanadoo.fr',0,'BBCode','Europe/Paris',1455561179,0,0,0,0,1483261377,0,'59ee4af61c2a697a9930360dea6ba8bfa0a89f74c8327b961aa3f5fb48b377c0');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (12,'Lionel',0,'','french','underline','lionel.tribut@sfr.fr',0,'BBCode','Europe/Paris',1455561213,0,0,0,0,1455621419,0,'');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (13,'b''iguane',0,'','french','underline','nolleau.daniel@wanadoo.fr',0,'BBCode','Europe/Paris',1455563490,0,0,0,0,0,0,'');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (14,'5550eric',0,'','french','underline','e.pois@wanadoo.fr',0,'BBCode','Europe/Paris',1455563821,0,0,0,0,1489347868,0,'');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (15,'lamoune',0,'','french','underline','gilles.menand@gmail.com',0,'BBCode','Europe/Paris',1455564166,0,0,0,0,0,0,'');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (16,'jcmitard',0,'','french','underline','jeanclaude.mitard@gmail.com',0,'BBCode','Europe/Paris',1455567057,0,0,0,0,1468266059,0,'0963b840656ac27a0068db7026421393eb1927aa7f29a05b0cd107ce9a15d980');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (17,'gérard',0,'','french','underline','gigerard85@orange.fr',0,'BBCode','Europe/Paris',1455567589,0,0,0,0,1472158834,0,'bc55fe956038b6fd4735e10bb347ed6b4064309ac8f16b258cebf22b580133fb');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (18,'Guillaume ',0,'','french','underline','Carelle.pineau@laposte.net',0,'BBCode','Europe/Paris',1455603598,0,0,0,0,1490093937,0,'cff44ba05ccc01418f64e8156e82a0829afa0e4ae8203bac0059c14a96a91bef');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (19,'Albec',0,'','french','underline','albec4885@free.fr',0,'BBCode','Europe/Paris',1455607324,0,0,0,0,1455609211,0,'');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (20,'chabiluc',0,'','french','underline','luc.chabirand@sfr.fr',0,'BBCode','Europe/Paris',1455613977,0,0,0,0,0,0,'');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (21,'lolo',0,'','french','underline','loloblanchard@free.fr',0,'BBCode','Europe/Paris',1455622346,0,0,0,0,0,0,'');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (22,'jp1',0,'','french','underline','jps42@free.fr',0,'BBCode','Europe/Paris',1455632177,0,0,0,0,1464100175,0,'fbc34becea6080aa297b794d025fe8c80403efdecb4aa1bc530a0607ccde4913');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (23,'JIBI',0,'','french','underline','jean-bernard.ferre@wanadoo.fr',0,'BBCode','Europe/Paris',1455652172,0,0,0,0,1462476312,0,'');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (24,'stef85',0,'','french','underline','stephane.laisis@sfr.fr',0,'BBCode','Europe/Paris',1455988888,0,0,0,0,1460215731,0,'');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (25,'franck',0,'','french','underline','frank.terrien@orange.fr',0,'BBCode','Europe/Paris',1456061668,0,0,0,0,1475396627,0,'36c25bfda207f86a81532d1c11216745f32d640eb8ec2ae27a076e8b0c0d8ec6');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (26,'jcheli',0,'','french','underline','lafamille.doye@wanadoo.fr',0,'BBCode','Europe/Paris',1456129408,0,0,0,0,1471852110,0,'4dfab8a82e6afcdbecacd9b261df2e2f6484d5442e5c060e598755256581e49f');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (27,'dboucher',0,'','french','underline','mhd-boucher@orange.fr',0,'BBCode','Europe/Paris',1456821528,0,0,0,0,1460117235,0,'');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (30,'MOMO85430',0,'','french','underline','landureau.jean@orange.fr',0,'BBCode','Europe/Paris',1458088973,0,0,0,0,1481538882,0,'bf4532b4df2ea8fb2e971fad5418e8b462845ca7c7c6b2ce5b3e32a7cfd879f4');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (31,'GUIOT',0,'','french','underline','jjg5812@free.fr',0,'BBCode','Europe/Paris',1458112715,0,0,0,0,1483448371,0,'24aecabc68a71d56218502eaab3077db582679aeee47255271f2267ba34955a9');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (34,'Eric',0,'','french','underline','erfreddy1826@gmail.com',0,'BBCode','Europe/Paris',1469963294,0,0,0,0,0,0,'');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (35,'Godefroy Alain',0,'','french','underline','family_godefroy@hotmail.com',1,'BBCode','Europe/Paris',1471679333,0,0,0,0,1479388013,0,'6e0f8ae1076e551e6d53cd938780ad453276c076012cfe403ca65c030abbba50');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (37,'gilles',0,'','french','underline','dauphing@gmail.com',0,'BBCode','Europe/Paris',1475274402,0,0,0,0,1475579763,0,'b41994fe981a12f6f3c14f9d0eab4971ec827e09658ffe25739f62cdfcb5669c');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (38,'jeanpolsky',0,'','french','underline','jean-paul.marguier@orange.fr',0,'BBCode','Europe/Paris',1476858039,0,0,0,0,0,0,'');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (39,'Jean-Luc',0,'','french','underline','jl.bolteau@gmail.com',0,'BBCode','Europe/Paris',1482573460,0,0,0,0,1489864818,0,'57d7047082c1fa14a257b9f94c59fc6848d8e93193017165917a26de02ed36f9');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (40,'Gérard85',0,'','french','underline','gerard.crochet@orange.fr',1,'BBCode','Europe/Paris',1483852187,0,0,0,0,1484001229,0,'7f552812fc26ed331661d79e94d2132a45f34d487afdef4bd5d510399bb110ec');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (41,'C.Ferreux',0,'','french','underline','charlesferreux@gmail.com',0,'BBCode','Europe/Paris',1484056017,0,0,0,0,0,0,'');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (42,'TALBERT Jean-Claude',0,'','french','underline','jean-claude.talbert@club-internet.fr',0,'BBCode','Europe/Paris',1484412053,0,0,0,0,0,0,'');
INSERT INTO `phpboost_member` (`user_id`, `display_name`, `level`, `groups`, `locale`, `theme`, `email`, `show_email`, `editor`, `timezone`, `registration_date`, `posted_msg`, `unread_pm`, `warning_percentage`, `delay_readonly`, `last_connection_date`, `delay_banned`, `autoconnect_key`) VALUES (43,'Pascalnad',0,'','french','underline','pascalnad@hotmail.com',0,'BBCode','Europe/Paris',1486076761,0,0,0,0,0,0,'');
DROP TABLE IF EXISTS `phpboost_member_extended_fields`;
CREATE TABLE `phpboost_member_extended_fields` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `last_view_forum` text,
  `user_website` text,
  `user_msn` text,
  `user_yahoo` text,
  `user_sign` text,
  `register_newsletter` text,
  `user_sex` text,
  `user_born` text,
  `user_avatar` text,
  `user_pmtomail` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (2,'','','','','','','','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (1,'','','','','','','','','/images/avatars/bounce-e3754.jpeg','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (3,'','','','','','','','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (4,'','','','','','','','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (5,'','','','','','','','','/images/avatars/jp3.jpg','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (6,'','','','','',1,'','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (7,'','','','','','','','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (8,'','','','','','','','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (9,'','','','','',1,'','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (10,'','','','','',1,'','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (11,'','','','','','','','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (12,'','','','','','','','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (13,'','','','','','','','','/images/avatars/1455563272040-2579a.jpg','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (14,'','','','','',1,'','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (15,'','','','','',1,'','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (16,'','','','','',1,'','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (17,'','','','','','','','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (18,'','','','','',1,'','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (19,'','','','','',1,'','','/images/avatars/nouveau-2-0b17d.jpg','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (20,'','','','','',1,'','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (21,'','','','','','','','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (22,'','','','','','','','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (23,'','','','','',1,'','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (24,'','','','','',1,'','','/images/avatars/fox-2300-0e52a.jpg','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (25,'','','','','',1,'','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (26,'','','','','',1,'','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (27,'','','','','',1,'','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (28,'','','','','','','','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (29,'','','','','','','','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (30,'','','','','',1,'','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (31,'','','','','',1,'','','','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (34,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,'','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (35,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,'');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (37,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,'/images/avatars/revaddiction-fd47f.jpg','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (38,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,'/images/avatars/dscn7872-0dc1e.JPG','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (39,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,'','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (40,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,'','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (41,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,'','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (42,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,'/images/avatars/win-20161009-14-44-58-pro-2-8b622.jpg','');
INSERT INTO `phpboost_member_extended_fields` (`user_id`, `last_view_forum`, `user_website`, `user_msn`, `user_yahoo`, `user_sign`, `register_newsletter`, `user_sex`, `user_born`, `user_avatar`, `user_pmtomail`) VALUES (43,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,'','');
DROP TABLE IF EXISTS `phpboost_member_extended_fields_list`;
CREATE TABLE `phpboost_member_extended_fields_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `field_name` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `field_type` varchar(255) NOT NULL DEFAULT '',
  `possible_values` text,
  `default_value` text,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `display` tinyint(1) NOT NULL DEFAULT '0',
  `regex` varchar(255) NOT NULL DEFAULT '',
  `freeze` tinyint(1) NOT NULL DEFAULT '0',
  `auth` text,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_member_extended_fields_list` (`id`, `position`, `name`, `field_name`, `description`, `field_type`, `possible_values`, `default_value`, `required`, `display`, `regex`, `freeze`, `auth`) VALUES (1,1,'last_view_forum','last_view_forum','','MemberHiddenExtendedField','s:0:"";','',0,0,0,1,'a:3:{s:2:"r1";i:3;s:2:"r0";i:3;s:3:"r-1";i:2;}');
INSERT INTO `phpboost_member_extended_fields_list` (`id`, `position`, `name`, `field_name`, `description`, `field_type`, `possible_values`, `default_value`, `required`, `display`, `regex`, `freeze`, `auth`) VALUES (2,2,'Site web','user_website','Veuillez renseigner un site web valide (ex : http://www.phpboost.com)','MemberShortTextExtendedField','s:0:"";','',0,0,5,1,'a:3:{s:2:"r1";i:3;s:2:"r0";i:3;s:3:"r-1";i:2;}');
INSERT INTO `phpboost_member_extended_fields_list` (`id`, `position`, `name`, `field_name`, `description`, `field_type`, `possible_values`, `default_value`, `required`, `display`, `regex`, `freeze`, `auth`) VALUES (3,3,'MSN','user_msn','','MemberShortTextExtendedField','s:0:"";','',0,0,4,1,'a:3:{s:2:"r1";i:3;s:2:"r0";i:3;s:3:"r-1";i:2;}');
INSERT INTO `phpboost_member_extended_fields_list` (`id`, `position`, `name`, `field_name`, `description`, `field_type`, `possible_values`, `default_value`, `required`, `display`, `regex`, `freeze`, `auth`) VALUES (4,4,'Yahoo','user_yahoo','','MemberShortTextExtendedField','s:0:"";','',0,0,4,1,'a:3:{s:2:"r1";i:3;s:2:"r0";i:3;s:3:"r-1";i:2;}');
INSERT INTO `phpboost_member_extended_fields_list` (`id`, `position`, `name`, `field_name`, `description`, `field_type`, `possible_values`, `default_value`, `required`, `display`, `regex`, `freeze`, `auth`) VALUES (5,5,'Signature','user_sign','Apparaît sous chacun de vos messages','MemberLongTextExtendedField','s:0:"";','',0,0,0,1,'a:3:{s:2:"r1";i:3;s:2:"r0";i:3;s:3:"r-1";i:2;}');
INSERT INTO `phpboost_member_extended_fields_list` (`id`, `position`, `name`, `field_name`, `description`, `field_type`, `possible_values`, `default_value`, `required`, `display`, `regex`, `freeze`, `auth`) VALUES (6,6,'Newsletter(s) souscrite(s)','register_newsletter','Sélectionnez la(les) newsletter(s) auxquelles vous souhaitez être inscrit','RegisterNewsletterExtendedField','s:0:"";','',0,1,0,0,'a:3:{s:2:"r1";i:3;s:2:"r0";i:3;s:3:"r-1";i:2;}');
INSERT INTO `phpboost_member_extended_fields_list` (`id`, `position`, `name`, `field_name`, `description`, `field_type`, `possible_values`, `default_value`, `required`, `display`, `regex`, `freeze`, `auth`) VALUES (7,7,'Sexe','user_sex','','MemberUserSexExtendedField','s:0:"";','',0,0,0,1,'a:3:{s:2:"r1";i:3;s:2:"r0";i:3;s:3:"r-1";i:2;}');
INSERT INTO `phpboost_member_extended_fields_list` (`id`, `position`, `name`, `field_name`, `description`, `field_type`, `possible_values`, `default_value`, `required`, `display`, `regex`, `freeze`, `auth`) VALUES (8,8,'Date de naissance','user_born','De type JJ/MM/AAAA','MemberUserBornExtendedField','s:0:"";','',0,0,0,1,'a:3:{s:2:"r1";i:3;s:2:"r0";i:3;s:3:"r-1";i:2;}');
INSERT INTO `phpboost_member_extended_fields_list` (`id`, `position`, `name`, `field_name`, `description`, `field_type`, `possible_values`, `default_value`, `required`, `display`, `regex`, `freeze`, `auth`) VALUES (9,9,'Avatar','user_avatar','','MemberUserAvatarExtendedField','s:0:"";','',0,1,0,1,'a:3:{s:2:"r1";i:3;s:2:"r0";i:3;s:3:"r-1";i:2;}');
INSERT INTO `phpboost_member_extended_fields_list` (`id`, `position`, `name`, `field_name`, `description`, `field_type`, `possible_values`, `default_value`, `required`, `display`, `regex`, `freeze`, `auth`) VALUES (10,1,'Notification par mail à la réception d''un MP','user_pmtomail','','MemberUserPMToMailExtendedField','s:0:"";','',0,0,0,1,'a:3:{s:3:"r-1";i:2;s:2:"r0";i:2;s:2:"r1";i:3;}');
DROP TABLE IF EXISTS `phpboost_menus`;
CREATE TABLE `phpboost_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `object` mediumtext,
  `class` varchar(67) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  `block` tinyint(1) NOT NULL DEFAULT '0',
  `position` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `block` (`block`),
  KEY `class` (`class`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_menus` (`id`, `title`, `object`, `class`, `enabled`, `block`, `position`) VALUES (1,'calendar/CalendarModuleMiniMenu','O:22:"CalendarModuleMiniMenu":9:{s:2:"id";s:1:"1";s:5:"title";s:31:"calendar/CalendarModuleMiniMenu";s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}s:7:"enabled";b:0;s:5:"block";s:1:"8";s:8:"position";i:1;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}','CalendarModuleMiniMenu',0,8,1);
INSERT INTO `phpboost_menus` (`id`, `title`, `object`, `class`, `enabled`, `block`, `position`) VALUES (2,'connect/ConnectModuleMiniMenu','O:21:"ConnectModuleMiniMenu":9:{s:2:"id";s:1:"2";s:5:"title";s:29:"connect/ConnectModuleMiniMenu";s:4:"auth";N;s:7:"enabled";b:1;s:5:"block";i:2;s:8:"position";i:1;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}','ConnectModuleMiniMenu',1,2,1);
INSERT INTO `phpboost_menus` (`id`, `title`, `object`, `class`, `enabled`, `block`, `position`) VALUES (4,'gallery/GalleryModuleMiniMenu','O:21:"GalleryModuleMiniMenu":9:{s:2:"id";s:1:"4";s:5:"title";s:29:"gallery/GalleryModuleMiniMenu";s:4:"auth";N;s:7:"enabled";b:1;s:5:"block";i:4;s:8:"position";i:1;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}','GalleryModuleMiniMenu',1,4,1);
INSERT INTO `phpboost_menus` (`id`, `title`, `object`, `class`, `enabled`, `block`, `position`) VALUES (5,'guestbook/GuestbookModuleMiniMenu','O:23:"GuestbookModuleMiniMenu":9:{s:2:"id";s:1:"5";s:5:"title";s:33:"guestbook/GuestbookModuleMiniMenu";s:4:"auth";N;s:7:"enabled";b:1;s:5:"block";i:7;s:8:"position";i:3;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}','GuestbookModuleMiniMenu',1,7,3);
INSERT INTO `phpboost_menus` (`id`, `title`, `object`, `class`, `enabled`, `block`, `position`) VALUES (7,'online/OnlineModuleMiniMenu','O:20:"OnlineModuleMiniMenu":14:{s:36:" OnlineModuleMiniMenu number_visitor";i:0;s:35:" OnlineModuleMiniMenu number_member";i:0;s:38:" OnlineModuleMiniMenu number_moderator";i:0;s:42:" OnlineModuleMiniMenu number_administrator";i:0;s:33:" OnlineModuleMiniMenu total_users";i:0;s:2:"id";s:1:"7";s:5:"title";s:27:"online/OnlineModuleMiniMenu";s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}s:7:"enabled";b:1;s:5:"block";i:8;s:8:"position";i:4;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}','OnlineModuleMiniMenu',1,8,4);
INSERT INTO `phpboost_menus` (`id`, `title`, `object`, `class`, `enabled`, `block`, `position`) VALUES (8,'poll/PollModuleMiniMenu','O:18:"PollModuleMiniMenu":9:{s:2:"id";s:1:"8";s:5:"title";s:23:"poll/PollModuleMiniMenu";s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}s:7:"enabled";b:0;s:5:"block";s:1:"8";s:8:"position";i:5;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}','PollModuleMiniMenu',0,8,5);
INSERT INTO `phpboost_menus` (`id`, `title`, `object`, `class`, `enabled`, `block`, `position`) VALUES (9,'search/SearchModuleMiniMenu','O:20:"SearchModuleMiniMenu":9:{s:2:"id";s:1:"9";s:5:"title";s:27:"search/SearchModuleMiniMenu";s:4:"auth";N;s:7:"enabled";b:1;s:5:"block";i:1;s:8:"position";i:1;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}','SearchModuleMiniMenu',1,1,1);
INSERT INTO `phpboost_menus` (`id`, `title`, `object`, `class`, `enabled`, `block`, `position`) VALUES (11,'stats/StatsModuleMiniMenu','O:19:"StatsModuleMiniMenu":9:{s:2:"id";s:2:"11";s:5:"title";s:25:"stats/StatsModuleMiniMenu";s:4:"auth";a:1:{s:2:"r1";i:1;}s:7:"enabled";b:1;s:5:"block";i:5;s:8:"position";i:1;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}','StatsModuleMiniMenu',1,5,1);
INSERT INTO `phpboost_menus` (`id`, `title`, `object`, `class`, `enabled`, `block`, `position`) VALUES (14,'Navigation','O:9:"LinksMenu":15:{s:4:"type";s:8:"vertical";s:8:"elements";a:13:{i:0;O:13:"LinksMenuLink":13:{s:3:"url";s:18:"/contact/index.php";s:5:"image";s:25:"/contact/contact_mini.png";s:3:"uid";i:1863;s:5:"depth";i:1;s:2:"id";i:0;s:5:"title";s:17:"Contacter le Club";s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}s:7:"enabled";b:0;s:5:"block";i:0;s:8:"position";i:-1;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}i:1;O:13:"LinksMenuLink":13:{s:3:"url";s:15:"/news/index.php";s:5:"image";s:19:"/news/news_mini.png";s:3:"uid";i:1864;s:5:"depth";i:1;s:2:"id";i:0;s:5:"title";s:4:"News";s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}s:7:"enabled";b:0;s:5:"block";i:0;s:8:"position";i:-1;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}i:2;O:13:"LinksMenuLink":13:{s:3:"url";s:19:"/calendar/index.php";s:5:"image";s:27:"/calendar/calendar_mini.png";s:3:"uid";i:1865;s:5:"depth";i:1;s:2:"id";i:0;s:5:"title";s:10:"Calendrier";s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}s:7:"enabled";b:0;s:5:"block";i:0;s:8:"position";i:-1;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}i:3;O:13:"LinksMenuLink":13:{s:3:"url";s:19:"/articles/index.php";s:5:"image";s:27:"/articles/articles_mini.png";s:3:"uid";i:1866;s:5:"depth";i:1;s:2:"id";i:0;s:5:"title";s:16:"Articles du Club";s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}s:7:"enabled";b:0;s:5:"block";i:0;s:8:"position";i:-1;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}i:4;O:13:"LinksMenuLink":13:{s:3:"url";s:20:"/gallery/gallery.php";s:5:"image";s:25:"/gallery/gallery_mini.png";s:3:"uid";i:1867;s:5:"depth";i:1;s:2:"id";i:0;s:5:"title";s:7:"Galerie";s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}s:7:"enabled";b:0;s:5:"block";i:0;s:8:"position";i:-1;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}i:5;O:13:"LinksMenuLink":13:{s:3:"url";s:19:"/smallads/index.php";s:5:"image";s:27:"/smallads/smallads_mini.png";s:3:"uid";i:1868;s:5:"depth";i:1;s:2:"id";i:0;s:5:"title";s:16:"Petites annonces";s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}s:7:"enabled";b:0;s:5:"block";i:0;s:8:"position";i:-1;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}i:6;O:13:"LinksMenuLink":13:{s:3:"url";s:14:"/web/index.php";s:5:"image";s:17:"/web/web_mini.png";s:3:"uid";i:1869;s:5:"depth";i:1;s:2:"id";i:0;s:5:"title";s:9:"Liens web";s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}s:7:"enabled";b:0;s:5:"block";i:0;s:8:"position";i:-1;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}i:7;O:13:"LinksMenuLink":13:{s:3:"url";s:16:"/media/media.php";s:5:"image";s:21:"/media/media_mini.png";s:3:"uid";i:1870;s:5:"depth";i:1;s:2:"id";i:0;s:5:"title";s:10:"Multimédia";s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}s:7:"enabled";b:0;s:5:"block";i:0;s:8:"position";i:-1;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}i:8;O:13:"LinksMenuLink":13:{s:3:"url";s:18:"/sitemap/index.php";s:5:"image";s:25:"/sitemap/sitemap_mini.png";s:3:"uid";i:1871;s:5:"depth";i:1;s:2:"id";i:0;s:5:"title";s:12:"Plan du site";s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}s:7:"enabled";b:0;s:5:"block";i:0;s:8:"position";i:-1;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}i:9;O:13:"LinksMenuLink":13:{s:3:"url";s:18:"/search/search.php";s:5:"image";s:23:"/search/search_mini.png";s:3:"uid";i:1872;s:5:"depth";i:1;s:2:"id";i:0;s:5:"title";s:9:"Recherche";s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}s:7:"enabled";b:0;s:5:"block";i:0;s:8:"position";i:-1;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}i:10;O:13:"LinksMenuLink":13:{s:3:"url";s:14:"/poll/poll.php";s:5:"image";s:19:"/poll/poll_mini.png";s:3:"uid";i:1873;s:5:"depth";i:1;s:2:"id";i:0;s:5:"title";s:8:"Sondages";s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}s:7:"enabled";b:0;s:5:"block";i:0;s:8:"position";i:-1;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}i:11;O:13:"LinksMenuLink":13:{s:3:"url";s:20:"/guestbook/index.php";s:5:"image";s:29:"/guestbook/guestbook_mini.png";s:3:"uid";i:1874;s:5:"depth";i:1;s:2:"id";i:0;s:5:"title";s:10:"Livre d''or";s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}s:7:"enabled";b:0;s:5:"block";i:0;s:8:"position";i:-1;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}i:12;O:13:"LinksMenuLink":13:{s:3:"url";s:19:"/download/index.php";s:5:"image";s:27:"/download/download_mini.png";s:3:"uid";i:1875;s:5:"depth";i:1;s:2:"id";i:0;s:5:"title";s:15:"Téléchargements";s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}s:7:"enabled";b:0;s:5:"block";i:0;s:8:"position";i:-1;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}}s:3:"url";s:1:"/";s:5:"image";s:0:"";s:3:"uid";i:1862;s:5:"depth";i:0;s:2:"id";s:2:"14";s:5:"title";s:10:"Navigation";s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}s:7:"enabled";b:1;s:5:"block";i:7;s:8:"position";i:1;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}','LinksMenu',1,7,1);
INSERT INTO `phpboost_menus` (`id`, `title`, `object`, `class`, `enabled`, `block`, `position`) VALUES (37,'Dates à retenir','O:8:"FeedMenu":15:{s:3:"url";s:0:"";s:9:"module_id";s:8:"calendar";s:4:"name";s:6:"master";s:8:"category";s:1:"0";s:6:"number";i:10;s:8:"begin_at";i:0;s:2:"id";s:2:"37";s:5:"title";s:15:"Dates à retenir";s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}s:7:"enabled";b:1;s:5:"block";i:8;s:8:"position";i:2;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}','FeedMenu',1,8,2);
INSERT INTO `phpboost_menus` (`id`, `title`, `object`, `class`, `enabled`, `block`, `position`) VALUES (25,'Bienvenue','O:11:"ContentMenu":11:{s:7:"content";s:1082:"<p style="text-align:center"><em><span style="color:#000080;">Bienvenue sur le site de l''Aéromodélisme Sablais</span></em><br />\n<br />\nLe club vous propose une structure de notre loisir dans un cadre convivial implanté au Sables d''Olonne sur la côte vendéenne.<br />\n<br />\nLe club d''aéromodélisme sablais exerce ses activités :<br />\n<br />\nEn extérieur au terrain du Coudriou sur la commune du Château d''Olonne avec deux pistes goudronnées  nous pratiquons  l''avion, le planeur, l''hélicoptère et multi-rotor.<br />\n<br />\nEn intérieur « vol indoor » salle des Sauniers à la Chaume - Les Sables d’Olonne.<br />\n<br />\nDans la salle « Centre Jean de La Fontaine » sur la commune d''Olonne-sur-Mer une permanence est assurée tous les mercredis après-midi par les moniteurs du club.<br />\n<br />\nL’Aéromodélisme sablais est affilié à la Fédération Française d’Aéromodélisme sous le numéro 262.<br />\n<br />\nNotre club est agréé « Jeunesse et Sport » il est reconnu centre de formation par notre Fédération.<br />\n<br />\n<img src="/upload/aerienne-coudriou-1-_custom.jpg" alt="" /></p>";s:13:"display_title";b:1;s:2:"id";s:2:"25";s:5:"title";s:9:"Bienvenue";s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}s:7:"enabled";b:1;s:5:"block";i:7;s:8:"position";i:2;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}','ContentMenu',1,7,2);
INSERT INTO `phpboost_menus` (`id`, `title`, `object`, `class`, `enabled`, `block`, `position`) VALUES (50,'ThemesSwitcher/Menu choix de thème','O:28:"ThemesSwitcherModuleMiniMenu":9:{s:2:"id";s:2:"50";s:5:"title";s:34:"ThemesSwitcher/Menu choix de thème";s:4:"auth";N;s:7:"enabled";b:1;s:5:"block";i:8;s:8:"position";i:5;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}','ThemesSwitcherModuleMiniMenu',1,8,5);
INSERT INTO `phpboost_menus` (`id`, `title`, `object`, `class`, `enabled`, `block`, `position`) VALUES (39,'web/Menu Liens Web','O:17:"WebModuleMiniMenu":9:{s:2:"id";s:2:"39";s:5:"title";s:18:"web/Menu Liens Web";s:4:"auth";N;s:7:"enabled";b:0;s:5:"block";s:1:"8";s:8:"position";i:2;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}','WebModuleMiniMenu',0,8,2);
INSERT INTO `phpboost_menus` (`id`, `title`, `object`, `class`, `enabled`, `block`, `position`) VALUES (41,'download/Menu Téléchargements','O:22:"DownloadModuleMiniMenu":9:{s:2:"id";s:2:"41";s:5:"title";s:29:"download/Menu Téléchargements";s:4:"auth";N;s:7:"enabled";b:0;s:5:"block";s:1:"8";s:8:"position";i:3;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}','DownloadModuleMiniMenu',0,8,3);
INSERT INTO `phpboost_menus` (`id`, `title`, `object`, `class`, `enabled`, `block`, `position`) VALUES (43,'smallads/Menu Petites annonces','O:22:"SmalladsModuleMiniMenu":9:{s:2:"id";s:2:"43";s:5:"title";s:30:"smallads/Menu Petites annonces";s:4:"auth";N;s:7:"enabled";b:0;s:5:"block";s:1:"8";s:8:"position";i:4;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}','SmalladsModuleMiniMenu',0,8,4);
INSERT INTO `phpboost_menus` (`id`, `title`, `object`, `class`, `enabled`, `block`, `position`) VALUES (46,'ACTUALITES','O:11:"ContentMenu":11:{s:7:"content";s:129:"<img src="/upload/affiche-angers.jpg" alt="" /><br />\n<br />\n<br />\n<img src="/upload/tt_salon_montaigu_2017_04_22.jpg" alt="" />";s:13:"display_title";b:1;s:2:"id";s:2:"46";s:5:"title";s:10:"ACTUALITES";s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}s:7:"enabled";b:1;s:5:"block";i:8;s:8:"position";s:1:"3";s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}','ContentMenu',1,8,3);
INSERT INTO `phpboost_menus` (`id`, `title`, `object`, `class`, `enabled`, `block`, `position`) VALUES (54,'Météo du Coudriou','O:11:"ContentMenu":11:{s:7:"content";s:722:"<!-- START HTML -->\n\n<div style="width:194px;height:300px;color:#000;border:1px solid #F2F2F2;">\n<iframe height="260" frameborder="0" width="190" scrolling="no" src="http://www.prevision-meteo.ch/services/html/chateau-d-olonne/square" allowtransparency="true"></iframe>\n<a style="text-decoration:none; font-size:0.8em; text-align:center; display:block;" title="Plus de détails" href="http://www.prevision-meteo.ch/meteo/localite/chateau-d-olonne">Plus de détails</style></a>\n\n<div style="background-color: #E8E8E8; margin-top:4px; text-align:center;">\n - Le Pioupiou de Sauveterre -\n<a style="color: blue; font-size: 14px;" href="http://www.pioupiou.fr/308"><u>PIOUPIOU 308</u></style></a>\n</div>\n</div>\n\n<!-- END HTML -->";s:13:"display_title";b:1;s:2:"id";s:2:"54";s:5:"title";s:17:"Météo du Coudriou";s:4:"auth";a:3:{s:3:"r-1";i:1;s:2:"r0";i:1;s:2:"r1";i:1;}s:7:"enabled";b:1;s:5:"block";i:8;s:8:"position";i:1;s:28:" * hidden_with_small_screens";b:0;s:7:"filters";a:1:{i:0;O:16:"MenuStringFilter":1:{s:10:" * pattern";s:1:"/";}}s:11:" * template";N;}','ContentMenu',1,8,1);
DROP TABLE IF EXISTS `phpboost_news`;
CREATE TABLE `phpboost_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL DEFAULT '0',
  `name` varchar(250) NOT NULL DEFAULT '',
  `rewrited_name` varchar(250) DEFAULT '',
  `contents` text,
  `short_contents` text,
  `creation_date` int(11) NOT NULL DEFAULT '0',
  `updated_date` int(11) NOT NULL DEFAULT '0',
  `approbation_type` int(1) NOT NULL DEFAULT '0',
  `start_date` int(11) NOT NULL DEFAULT '0',
  `end_date` int(11) NOT NULL DEFAULT '0',
  `top_list_enabled` tinyint(1) NOT NULL DEFAULT '0',
  `picture_url` varchar(255) NOT NULL,
  `author_user_id` int(11) NOT NULL DEFAULT '0',
  `sources` text,
  PRIMARY KEY (`id`),
  KEY `id_category` (`id_category`),
  FULLTEXT KEY `title` (`name`),
  FULLTEXT KEY `contents` (`contents`),
  FULLTEXT KEY `short_contents` (`short_contents`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_news` (`id`, `id_category`, `name`, `rewrited_name`, `contents`, `short_contents`, `creation_date`, `updated_date`, `approbation_type`, `start_date`, `end_date`, `top_list_enabled`, `picture_url`, `author_user_id`, `sources`) VALUES (27,2,'Retour sur la rencontre planeurs remorqués 11/12 juin','planeurs-remorques','<div class="indent"><br />\nLes 11 et 12 juin, et malgré une météo très capricieuse, tous les pilotes ont pu faire évoluer leurs superbes modèles de planeurs remorqués.<br />\n<br />\nTractés par de gros avions remorqueurs, les planeurs (jusqu''à 6 m d''envergure) ont rejoints le ciel mouvementé du Coudriou. Une centaine de rotations le samedi et environ 80 le dimanche ont permis aux pilotes venus de toute la région de réaliser un douzaine de vols chacun.<br />\n<br />\nSaluons au passage la grande maîtrise  des pilotes de remorqueurs et la virtuosité des planeuristes confrontés à des conditions météo difficiles. Une grande satisfaction pour le club d''avoir pu organiser cette rencontre amicale qui s''est déroulée dans une très bonne ambiance, et qui a été particulièrement appréciée par les participants.<br />\n<br />\nMerci également à tous les bénévoles pour leur implication dans la préparation et l''intendance lors de ces deux journées.<br />\n<br />\nPour découvrir les photos de la rencontre cliquer <span style="color:#F04343;"><a href="https://goo.gl/photos/wrjaNQVv69Wu8BGg6">sur ce lien</a> </span><br />\n<br />\nMipel<br />\n</div>','',1465816740,0,0,0,0,0,'/upload/img_20160611_154431.jpg',1,'a:0:{}');
INSERT INTO `phpboost_news` (`id`, `id_category`, `name`, `rewrited_name`, `contents`, `short_contents`, `creation_date`, `updated_date`, `approbation_type`, `start_date`, `end_date`, `top_list_enabled`, `picture_url`, `author_user_id`, `sources`) VALUES (40,2,'Promenade ?','promenade','<div class="indent"><span style="color:#800000;"><span style="font-size: 13px;">Quand on se promène, on peut ramasser plein de choses: des fleurs, des champignons ou des fruits, c''est selon.<br />\nThierry, lui, préfère ramasser des grandes plumes ..... et la récolte fût bonne cette fois-çi comme nous pouvons le constater!<br />\nEt hop, un de plus.</span></span></div>','',1470819240,0,0,0,0,0,'/upload/img_20160809_151222.jpg',1,'a:0:{}');
INSERT INTO `phpboost_news` (`id`, `id_category`, `name`, `rewrited_name`, `contents`, `short_contents`, `creation_date`, `updated_date`, `approbation_type`, `start_date`, `end_date`, `top_list_enabled`, `picture_url`, `author_user_id`, `sources`) VALUES (37,2,'Un autre &quot;warbird&quot; dans le ciel du Coudriou','un-autre-warbird-dans-le-ciel-du-coudriou','Cette fois, c''est le P47 (1,80m d''envergure) de David qui évoluait dans le ciel du Coudriou.<br />\nMagnifiquement décoré, son moteur 4 temps bien rôdé lui permet d''émettre une sonorité très réaliste et agréable.<br />\nLes passages au radada dans l''axe de la piste et un pilotage tout en finesse  procurent un vrai plaisir lors des évolutions de ce modèle vraiment attachant,<br />\nSouhaitons donc à David de nombreux vols avec sa machine.','',1469969580,0,0,0,0,0,'/upload/p47-de-david.jpg',1,'a:0:{}');
INSERT INTO `phpboost_news` (`id`, `id_category`, `name`, `rewrited_name`, `contents`, `short_contents`, `creation_date`, `updated_date`, `approbation_type`, `start_date`, `end_date`, `top_list_enabled`, `picture_url`, `author_user_id`, `sources`) VALUES (39,2,'Pas touche, je surveille!','pas-touche-je-surveille','<div class="indent"><span style="font-size: 13px;"><span style="color:#800000;">Rien ne vaut un bon petit chien de garde pour surveiller nos affaires.<br />\nVenez donc essayer de prendre mon planeur ou ma radio pour voir !<br />\nMerci à ma chienne Debbie pour sa précieuse collaboration.<br />\n</span><em><span style="color:#3366FF;">Michel</em></span></span></div>','',1470771120,0,0,0,0,0,'/upload/debbie.jpg',1,'a:0:{}');
INSERT INTO `phpboost_news` (`id`, `id_category`, `name`, `rewrited_name`, `contents`, `short_contents`, `creation_date`, `updated_date`, `approbation_type`, `start_date`, `end_date`, `top_list_enabled`, `picture_url`, `author_user_id`, `sources`) VALUES (33,2,'Préparation journée &quot;Petits gros&quot;','preparation-journee-petits-gros','<span style="font-size: 15px;">Certains pilotes préparent activement la journée "Petit gros" du 15 août. <br />\nComme notre ami Jean Claude par exemple, pris en pleine concentration devant son biplan.<br />\nRemarquons au passage le petit tabouret parfaitement adapté à la phase délicate du démontage des haubans !</span><br />\n<br />\n<em>rappel: cette journée n''étant pas un meeting, elle n''est pas ouverte au public.</em>','',1469565540,0,0,0,0,0,'/upload/pitts.jpg',1,'a:0:{}');
INSERT INTO `phpboost_news` (`id`, `id_category`, `name`, `rewrited_name`, `contents`, `short_contents`, `creation_date`, `updated_date`, `approbation_type`, `start_date`, `end_date`, `top_list_enabled`, `picture_url`, `author_user_id`, `sources`) VALUES (34,2,'Encore un &quot;petit gros&quot;','encore-un-petit-gros','<div class="indent">Cettte fois, c''est Guillaume (fan de warbird) qui s''entraîne pour le 15 août !<br />\nSi le gant posé sur l''aile sert à se protéger les doigts lors du démarrage du moteur (par rotation manuelle de l''hélice) quel est le rôle de la pompe à vélo visible à droite ? humm.... on cherche .....<br />\n<br />\nla solution:<br />\nce modèle est equipé d''un train rentrant pneumatique et la pompe permet de remplir le petit réservoir d''air comprimé qui actionne le système.<br />\nEncore fallait-il le savoir !</div>','',1469732340,0,0,0,0,0,'/upload/avion_guillaume.jpg',1,'a:0:{}');
INSERT INTO `phpboost_news` (`id`, `id_category`, `name`, `rewrited_name`, `contents`, `short_contents`, `creation_date`, `updated_date`, `approbation_type`, `start_date`, `end_date`, `top_list_enabled`, `picture_url`, `author_user_id`, `sources`) VALUES (35,2,'Warbirds !','warbirds','<span style="font-size: 15px;"><span style="color:#0000FF;">Pour la prochaine rencontre "P''tits Gros " du 15 août quelques warbirds ont fait des vols de reconnaissance sur le terrain du Coudriou :un Vougth F4U Corsair aux couleurs de l''Aéro-naval cher à notre ami Lionel, un F6F Hellcat et un Focke Wulf FW 190 , cette journée s''annonce  " de toute beauté " Venez nombreux . </span></span> <span style="font-size: 15px;"><span style="color:#F04343;"> Jipé</span></span>','',1469826540,0,0,0,0,0,'/upload/warbird-_1-sur-1_-_medium_-_small.jpg',5,'a:0:{}');
INSERT INTO `phpboost_news` (`id`, `id_category`, `name`, `rewrited_name`, `contents`, `short_contents`, `creation_date`, `updated_date`, `approbation_type`, `start_date`, `end_date`, `top_list_enabled`, `picture_url`, `author_user_id`, `sources`) VALUES (36,2,'La  Madeleine','la-madeleine','<span style="font-size: 15px;">Il ne s''agit pas de celle de Proust, mais d''un lieu mythique où Jean-Luc  et Alain, deux membres du club ont l''habitude de se rendre durant l''été. Nos deux camarades ont ainsi participé à la rencontre de vol de pente organisée par le club local.   Cette magnifique pente se situe sur la commune des Tardets dans les  Pyrénnées Atlantiques. Une pente à découvrir pour les uns ou à redécouvrir pour ceux qui connaissent. </span>','',1469959680,0,0,0,0,0,'/upload/la-madeleine.jpg',3,'a:0:{}');
INSERT INTO `phpboost_news` (`id`, `id_category`, `name`, `rewrited_name`, `contents`, `short_contents`, `creation_date`, `updated_date`, `approbation_type`, `start_date`, `end_date`, `top_list_enabled`, `picture_url`, `author_user_id`, `sources`) VALUES (41,2,'Le stampe de François','le-stampe-de-francois','<span style="color:#800000;"><span style="font-size: 13px;">François est un excellent contructeur et il nous a présenté avec grand plaisir son stampe tout neuf.<br />\nSi le moteur n''a pas voulu démarrer (par timidité sans doute...) devant tant d''admirateurs, on a pu remarquer le soucis du détail et la grande qualité de la décoration.<br />\nOn voit ici le modèle en phase de démontage avec les 4 clés d''ailes qui garantissent la rigidité de l''ensemble.<br />\nA noter également: tout (ou presque) est "fabriqué maison" comme les haubans, tendeurs, rivets et autres. Des mois de travail mais une belle maquette à l''arrivée !<br />\nBravo François pour cette superbe réalisation et à suivre pour les vols d''essais ....</span></span>','',1470985260,0,0,0,0,0,'/upload/stampe-francois.jpg',1,'a:0:{}');
INSERT INTO `phpboost_news` (`id`, `id_category`, `name`, `rewrited_name`, `contents`, `short_contents`, `creation_date`, `updated_date`, `approbation_type`, `start_date`, `end_date`, `top_list_enabled`, `picture_url`, `author_user_id`, `sources`) VALUES (42,2,'Des Petits Gros à foison !','des-petits-gros-a-foison','<div class="indent"><span style="color:#003366;"><span style="font-size: 12px;">Superbe rassemblement inter-club de P''tits Gros ce 15 août au Coudriou.<br />\nGrace à un plateau très fourni, à la qualité des modèles et à l''excellent niveau des pilotes présents, nous avons pu assister à de superbes évolutions sous une chaleur écrasante.<br />\nUne incontestable réussite pour cette magnifique journée.</span><br />\n<br />\nPour le reportage photos, cliquez sur le lien: <a href="/gallery/gallery-2+p-tits-gros-15-08-2016.php"> <span style="color:#800000;"><span style="text-decoration: underline;">journée p''tits gros.</span></a></span></span></div>','',1471292700,0,0,0,0,0,'/upload/vue_ensemble.jpg',1,'a:0:{}');
INSERT INTO `phpboost_news` (`id`, `id_category`, `name`, `rewrited_name`, `contents`, `short_contents`, `creation_date`, `updated_date`, `approbation_type`, `start_date`, `end_date`, `top_list_enabled`, `picture_url`, `author_user_id`, `sources`) VALUES (43,2,'La couverture photo du 15 août ...','la-couverture-photo-du-15-aout','Si la concurrence entre pilotes n''était pas de mise lors de la rencontre du 15 août, ce ne fut pas le cas pour les photographes amateurs présents en nombre sur le terrain.<br />\nSaluons au passage le travail de Thierry qui nous offre par ce lien une sélection des clichés pris sur la journée.<br />\n<br />\n<a href="https://goo.gl/photos/DqKrSJWutTMUUENr8">Pour voir les photos de Thierry, cliquez sur ce lien: <span style="color:#800000;"><span style="text-decoration: underline;">Le reportage de Thierry</a></span></span>','',1471374600,0,0,0,0,1,'/upload/img_0409.jpg',1,'a:0:{}');
INSERT INTO `phpboost_news` (`id`, `id_category`, `name`, `rewrited_name`, `contents`, `short_contents`, `creation_date`, `updated_date`, `approbation_type`, `start_date`, `end_date`, `top_list_enabled`, `picture_url`, `author_user_id`, `sources`) VALUES (44,2,'Un torque spectaculaire !','un-torque-spectaculaire','Le torque est une figure délicate à réaliser qui consiste à mettre son avion à la verticale tout en le tenant le plus près possible du sol. Le torque-roll lui, complètera cette figure par une rotation sur l''axe vertical tout en conservant le modèle bien droit.<br />\nCette photo nous en donne une belle illustration et, croyez-moi, voir ce type d''évolution présentée par un avion de 3 mètres d''envergure si près du sol ne laisse personne indifférent. A savourer sans modération.','',1471375500,0,0,0,0,0,'/upload/img_0362.jpg',1,'a:0:{}');
INSERT INTO `phpboost_news` (`id`, `id_category`, `name`, `rewrited_name`, `contents`, `short_contents`, `creation_date`, `updated_date`, `approbation_type`, `start_date`, `end_date`, `top_list_enabled`, `picture_url`, `author_user_id`, `sources`) VALUES (45,2,'Remerciements !','remerciements','<span style="color:#800000;"><span style="font-size: 12px;">Très impliqué dans l''organisation de la rencontre P''tits Gros du 15 août, notre ami Jean-Christophe remercie, au nom du club, tous les bénévoles qui ont contribué à la réussite de cette journée. Merci également à tous ceux qui ont donné un coup de main ou prété du matériel pour cette rencontre.<br />\nFélicitations aux pilotes et aux clubs qui, par leur sympathique présence, ont rendu cette manifestation particulièrement attractive et conviviale.</span></span>','',1471545540,0,0,0,0,0,'/upload/jc.jpg',1,'a:0:{}');
INSERT INTO `phpboost_news` (`id`, `id_category`, `name`, `rewrited_name`, `contents`, `short_contents`, `creation_date`, `updated_date`, `approbation_type`, `start_date`, `end_date`, `top_list_enabled`, `picture_url`, `author_user_id`, `sources`) VALUES (47,3,'Symposium Hélico du 4 septembre','symposium-helico-du-4-septembre','<span style="font-size: 13px;"><br />\nAvec une participation plus faible que l''année passée, les vols ont été peu fréquents malgré les nombreux modèles d''hélicoptères (thermiques et électriques) présents sur le terrain du Coudriou:<br />\n<br />\n<img src="/upload/raynal.jpg" alt="" /><br />\n<br />\nOn discute technique bien sûr entre copains :<br />\n<br />\n<img src="/upload/arrivee.jpg" alt="" /><br />\n<br />\nOn a pu apprécier la belle démonstration (entre-autre) du Goblin 380 de Didier qui nous avait fait le plaisir de venir de Noirmoutier comme chaque année :<br />\n<br />\n<img src="/upload/didier.jpg" alt="" /><br />\n<br />\nIl y avait aussi des drônes sur le terrain, vous pouvez consulter l''article spécifique ici : <a href="/articles/5-drones/21-drones-au-coudriou/">http://aeromodelisme-sablais.fr/articles/5-drones/21-drones-au-coudriou/</a><br />\n<br />\nMerci à tous les amis des clubs voisins pour leur présence ainsi qu''aux bénévoles du club pour leur aide précieuse dans l''organisation de cette journée.</span>','',1473757200,0,0,0,0,1,'/upload/detail-goblin.png',1,'a:0:{}');
INSERT INTO `phpboost_news` (`id`, `id_category`, `name`, `rewrited_name`, `contents`, `short_contents`, `creation_date`, `updated_date`, `approbation_type`, `start_date`, `end_date`, `top_list_enabled`, `picture_url`, `author_user_id`, `sources`) VALUES (48,0,'Un article spécial drônes','un-article-special-drones','<div class="indent"> <span style="font-size: 13px;">Si le monde des drônes vous intéresse, un article leur est consacré.<br />\nVous pouvez le consulter en suivant le lien ci-dessous :<br />\n<br />\n<a href="/articles/5-drones/21-drones-au-coudriou/">http://aeromodelisme-sablais.fr/articles/5-drones/21-drones-au-coudriou/</a> </span></div>','',1473762300,0,0,0,0,0,'/upload/antenne-drone.jpg',1,'a:0:{}');
INSERT INTO `phpboost_news` (`id`, `id_category`, `name`, `rewrited_name`, `contents`, `short_contents`, `creation_date`, `updated_date`, `approbation_type`, `start_date`, `end_date`, `top_list_enabled`, `picture_url`, `author_user_id`, `sources`) VALUES (72,0,'Spacewalker','spacewalker','<span style="font-size: 15px;">Une magnifique maquette est sortie de l''atelier de construction  de notre camarade Joël. Un an de réflexion, 2.65 m d''envergure, 1.80 m de long pour 11 kg, l''ensemble propulsé par un moteur essence de 55 cm3. Les derniers réglages sont en cours, les prochains vols sont à venirs. Rendez-vous au terrain du coudriou. </span>','',1488055020,0,1,0,0,0,'/upload/wp_20170224_002-_medium.jpg',3,'a:0:{}');
INSERT INTO `phpboost_news` (`id`, `id_category`, `name`, `rewrited_name`, `contents`, `short_contents`, `creation_date`, `updated_date`, `approbation_type`, `start_date`, `end_date`, `top_list_enabled`, `picture_url`, `author_user_id`, `sources`) VALUES (66,2,'PiouPiou story','pioupiou-story','<span style="font-size: 13px;"> <strong>Qu''est-ce qu''un PiouPiou ?</strong><br />\n<br />\nComme la question n''a pas été posée, je vais m''empresser d''y répondre:<br />\nAvec sa taille réduite et ses quelques centaines de grammes, ce drôle d''engin est totalement autonome.<br />\nIl peut être installé même là où il n''y a pas d''électricité car il est doté d''un petit panneau solaire et il nous indiquera toujours la direction et la force du vent. Il se géo-localise tout seul et peut être suivi sur une carte en cas de vol.<br />\nVoici à quoi il ressemble, dans sa version 2017: <p style="text-align:center"><img src="/upload/pioupiou_db542.png" alt="" /></p><br />\nLe piouPiou le plus proche de notre terrain est celui de la plage de Sauveterre, à 12kms environ à vol d''oiseau. Pour consulter les informations quasiment en temps direct, cliquez sur le lien en haut à droite de la page. Pratique pour ceux qui souhaitent avoir les infos de la météo locale avant de se rendre au terrain.</span><br />\nEn photo, le PiouPiou de Sauveterre. Si si, tout en haut du mât!<br />\nMipel','',1481747220,0,0,0,0,0,'/upload/pioupiou-de-sauveterre.jpg',1,'a:1:{s:8:"PiouPiou";s:23:"https://www.pioupiou.fr";}');
INSERT INTO `phpboost_news` (`id`, `id_category`, `name`, `rewrited_name`, `contents`, `short_contents`, `creation_date`, `updated_date`, `approbation_type`, `start_date`, `end_date`, `top_list_enabled`, `picture_url`, `author_user_id`, `sources`) VALUES (68,0,'Info Sauniers ','info-sauniers','<span style="font-size: 15px;"><span style="color:#0000FF;">Un mail émanant des services de la mairie des Sables nous rappelle  : qu''il faut porter des chaussures de sport pour voler dans les salles des Sauniers afin de ne pas abimer le sol fragile , d''utiliser l''éclairage à bon escient et de ne pas oublier d''éteindre !  de ne pas voler tant que l''employé de nettoyage n''a pas fini son travail ! Enfin de ne pas stationner les véhicules sur le terre-plein à droite de l''entrée des salles mais sur le grand parking ou le long de l''allée  !   Merci de votre compréhension !</span></span> <span style="font-size: 15px;"><span style="color:#F04343;">Jipé</span></span>','',1484219940,0,0,0,0,1,'/upload/p1050583-1.jpg',5,'a:0:{}');
INSERT INTO `phpboost_news` (`id`, `id_category`, `name`, `rewrited_name`, `contents`, `short_contents`, `creation_date`, `updated_date`, `approbation_type`, `start_date`, `end_date`, `top_list_enabled`, `picture_url`, `author_user_id`, `sources`) VALUES (70,0,'Reprise remorquage','reprise-remorquage','<span style="font-size: 15px;"><span style="color:#000000;">Après quelques mois d''abstinence, malgré une température peu clémente nous avons avons ouvert la saison "planeur remorqué". Quatre planeuristes ont traqué la bulle dans le ciel du Coudriou avec succès pour les derniers vols. Merci à Daniel notre pilote remorqueur qui a assuré avec brio nos mises en altitude. Un petit vin chaud concocté par René à clôturé cette après-midi.</span></span>','',1486661280,0,1,0,0,1,'/upload/v_738b-_small.jpeg',3,'a:0:{}');
INSERT INTO `phpboost_news` (`id`, `id_category`, `name`, `rewrited_name`, `contents`, `short_contents`, `creation_date`, `updated_date`, `approbation_type`, `start_date`, `end_date`, `top_list_enabled`, `picture_url`, `author_user_id`, `sources`) VALUES (73,0,'Amicale indoor','amicale-indoor','<span style="font-size: 15px;">Belle participation pour ce cru 2017. Ils sont venus, ils sont tous là : La Fléche, St Lô, St Vivien, Moncoutant, Pouzauges, Fontenay le Comte,Luçon, La Roche/yon, Noirmoutier et bien sur les Sablais. Tout ce petit monde à pu échanger sur les différents aspect du vol en salle (drônes, hélicoptères, avions, voltige, maquette...). Toutes les photo de la rencontre sont disponibles <a href="https://goo.gl/photos/5WEhs79arRurH6is7">ici</a></span>','',1490018040,0,1,0,0,1,'/upload/indoor-2017-_large.jpg',3,'a:0:{}');
INSERT INTO `phpboost_news` (`id`, `id_category`, `name`, `rewrited_name`, `contents`, `short_contents`, `creation_date`, `updated_date`, `approbation_type`, `start_date`, `end_date`, `top_list_enabled`, `picture_url`, `author_user_id`, `sources`) VALUES (74,0,'Concours de maquettes Indoor','concours-de-maquettes-indoor','Lors de la rencontre amicale indoor du 19 mars, un concours "Maquettes volantes" était organisé. On a pu y voir des répliques de modèles ayant évolués dans les années 20-30 et parfaitement décorés ainsi que des démonstrations en vols. Notre ami Boris remporte ce concours avec le célèbre Fokker dr-1 triplan.<br />\n<br />\n<a href="/upload/fokker_boris.jpg" data-lightbox="formatter"><img src="/upload/fokker_boris.jpg" alt="" style="max-width:150px;" /></a><br />\n<br />\nIl gagne aussi dans la catégorie "Avions divers" avec une présentation plus surprenante:<br />\n<br />\n<a href="/upload/divers_boris.jpg" data-lightbox="formatter"><img src="/upload/divers_boris.jpg" alt="" style="max-width:150px;" /></a><br />\n<br />\nD''autres modèles exposés:<br />\n<a href="/upload/maquettes_indoor.jpg" data-lightbox="formatter"><img src="/upload/maquettes_indoor.jpg" alt="" style="max-width:150px;" /></a>','',1490091840,0,1,0,0,1,'',1,'a:0:{}');
DROP TABLE IF EXISTS `phpboost_news_cats`;
CREATE TABLE `phpboost_news_cats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `rewrited_name` varchar(250) DEFAULT '',
  `description` text,
  `c_order` int(11) unsigned NOT NULL DEFAULT '0',
  `auth` text,
  `image` varchar(255) NOT NULL,
  `id_parent` int(11) NOT NULL DEFAULT '0',
  `special_authorizations` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_news_cats` (`id`, `name`, `rewrited_name`, `description`, `c_order`, `auth`, `image`, `id_parent`, `special_authorizations`) VALUES (2,'Archives','archives','',1,'a:1:{s:2:"r1";i:15;}','/news/news.png',0,1);
INSERT INTO `phpboost_news_cats` (`id`, `name`, `rewrited_name`, `description`, `c_order`, `auth`, `image`, `id_parent`, `special_authorizations`) VALUES (3,'Inter-clubs','inter-clubs','Les informations sur les rencontres inter-clubs.',2,'','/news/news.png',0,0);
DROP TABLE IF EXISTS `phpboost_newsletter_archives`;
CREATE TABLE `phpboost_newsletter_archives` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stream_id` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL DEFAULT '',
  `contents` text,
  `nbr_subscribers` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL DEFAULT '0',
  `language_type` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS `phpboost_newsletter_streams`;
CREATE TABLE `phpboost_newsletter_streams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `rewrited_name` varchar(250) DEFAULT '',
  `description` text,
  `c_order` int(11) unsigned NOT NULL DEFAULT '0',
  `auth` text,
  `image` varchar(255) NOT NULL,
  `id_parent` int(11) NOT NULL DEFAULT '0',
  `special_authorizations` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_newsletter_streams` (`id`, `name`, `rewrited_name`, `description`, `c_order`, `auth`, `image`, `id_parent`, `special_authorizations`) VALUES (1,'Actualités du site Aéromodélisme Sablais','actualites-du-site-aeromodelisme-sablais','Newsletter mensuelle',1,'','/newsletter/newsletter.png',0,0);
DROP TABLE IF EXISTS `phpboost_newsletter_subscribers`;
CREATE TABLE `phpboost_newsletter_subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '-1',
  `mail` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (1,2,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (2,1,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (3,3,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (4,4,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (5,5,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (6,6,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (7,7,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (8,8,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (9,9,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (10,10,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (11,11,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (12,12,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (13,13,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (14,14,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (15,15,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (16,16,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (17,17,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (18,18,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (19,19,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (20,20,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (21,21,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (22,22,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (23,23,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (24,24,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (25,25,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (26,26,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (27,27,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (28,28,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (29,29,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (30,30,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (31,31,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (32,32,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (34,34,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (35,35,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (36,37,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (37,38,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (38,39,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (39,40,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (40,41,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (41,42,'');
INSERT INTO `phpboost_newsletter_subscribers` (`id`, `user_id`, `mail`) VALUES (42,43,'');
DROP TABLE IF EXISTS `phpboost_newsletter_subscriptions`;
CREATE TABLE `phpboost_newsletter_subscriptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stream_id` int(11) NOT NULL,
  `subscriber_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (6,1,6);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (7,1,9);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (10,1,10);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (13,1,14);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (14,1,15);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (16,1,16);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (19,1,18);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (21,1,19);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (23,1,20);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (25,1,23);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (27,1,24);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (33,1,25);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (34,1,26);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (36,1,27);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (39,1,30);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (40,1,31);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (41,1,32);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (42,1,34);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (44,1,35);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (46,1,36);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (48,1,37);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (50,1,38);
INSERT INTO `phpboost_newsletter_subscriptions` (`id`, `stream_id`, `subscriber_id`) VALUES (52,1,41);
DROP TABLE IF EXISTS `phpboost_note`;
CREATE TABLE `phpboost_note` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(255) NOT NULL DEFAULT '',
  `id_in_module` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `note` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS `phpboost_pages`;
CREATE TABLE `phpboost_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT '',
  `encoded_title` varchar(255) DEFAULT '',
  `contents` text,
  `auth` text,
  `is_cat` int(1) NOT NULL DEFAULT '0',
  `id_cat` int(11) NOT NULL DEFAULT '0',
  `hits` int(11) NOT NULL DEFAULT '0',
  `count_hits` int(1) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  `display_print_link` int(1) NOT NULL DEFAULT '0',
  `activ_com` int(1) NOT NULL DEFAULT '0',
  `redirect` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `title` (`title`),
  FULLTEXT KEY `contents` (`contents`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS `phpboost_pages_cats`;
CREATE TABLE `phpboost_pages_cats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_page` int(11) NOT NULL DEFAULT '0',
  `id_parent` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS `phpboost_pm_msg`;
CREATE TABLE `phpboost_pm_msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idconvers` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `contents` text,
  `timestamp` int(11) NOT NULL DEFAULT '0',
  `view_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idconvers` (`idconvers`,`user_id`,`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS `phpboost_pm_topic`;
CREATE TABLE `phpboost_pm_topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL DEFAULT '',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_id_dest` int(11) NOT NULL DEFAULT '0',
  `user_convers_status` tinyint(1) NOT NULL DEFAULT '0',
  `user_view_pm` int(11) NOT NULL DEFAULT '0',
  `nbr_msg` int(11) NOT NULL DEFAULT '0',
  `last_user_id` int(11) NOT NULL DEFAULT '0',
  `last_msg_id` int(11) NOT NULL DEFAULT '0',
  `last_timestamp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_user` (`user_id`,`user_id_dest`,`user_convers_status`,`last_timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS `phpboost_poll`;
CREATE TABLE `phpboost_poll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) DEFAULT '',
  `answers` text,
  `votes` text,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `archive` tinyint(1) NOT NULL DEFAULT '0',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  `visible` tinyint(1) NOT NULL DEFAULT '0',
  `start` int(11) NOT NULL DEFAULT '0',
  `end` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_poll` (`id`, `question`, `answers`, `votes`, `type`, `archive`, `timestamp`, `visible`, `start`, `end`, `user_id`) VALUES (3,'Comment trouvez-vous notre site ?','Très bien|Correct|A améliorer|Bof|Sans avis','13|3|1|0|1',1,0,1455894001,1,0,0,1);
DROP TABLE IF EXISTS `phpboost_poll_ip`;
CREATE TABLE `phpboost_poll_ip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) NOT NULL DEFAULT '',
  `user_id` int(11) DEFAULT '0',
  `idpoll` int(11) NOT NULL DEFAULT '0',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (1,'90.49.168.100',-1,1,1453553456);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (2,'90.59.37.124',-1,1,1453619433);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (3,'78.227.188.167',-1,1,1453626711);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (4,'81.49.69.51',-1,2,1454778475);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (5,'2.1.83.51',-1,2,1454924136);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (6,'90.49.185.84',-1,3,1455902396);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (7,'2.1.7.188',-1,3,1455925749);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (8,'2.1.62.132',-1,3,1456123030);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (9,'78.227.188.167',-1,3,1456139965);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (10,'78.204.60.26',-1,3,1456238992);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (11,'90.59.40.89',-1,3,1456662536);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (12,'90.55.80.132',-1,3,1457036120);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (13,'90.25.198.87',-1,3,1457125327);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (14,'92.149.175.113',-1,3,1457379640);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (15,'88.140.14.174',-1,3,1457767099);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (16,'90.104.203.220',-1,3,1457789661);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (17,'2.8.172.55',-1,3,1458824598);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (18,'109.211.205.115',-1,3,1460487215);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (19,'80.12.39.127',-1,3,1463298569);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (20,'90.59.221.118',-1,3,1465739539);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (21,'92.142.134.19',-1,3,1475609827);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (22,'90.105.19.138',-1,3,1486719437);
INSERT INTO `phpboost_poll_ip` (`id`, `ip`, `user_id`, `idpoll`, `timestamp`) VALUES (23,'78.231.28.69',-1,3,1489865258);
DROP TABLE IF EXISTS `phpboost_search_index`;
CREATE TABLE `phpboost_search_index` (
  `id_search` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL DEFAULT '0',
  `module` varchar(64) NOT NULL DEFAULT '0',
  `search` varchar(50) NOT NULL DEFAULT '',
  `options` varchar(50) NOT NULL DEFAULT '',
  `last_search_use` int(11) NOT NULL DEFAULT '0',
  `times_used` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_search`),
  UNIQUE KEY `id_user` (`id_user`,`module`,`search`,`options`),
  KEY `last_search_use` (`last_search_use`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS `phpboost_search_results`;
CREATE TABLE `phpboost_search_results` (
  `id_search` int(11) NOT NULL AUTO_INCREMENT,
  `id_content` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `relevance` decimal(10,3) NOT NULL DEFAULT '0.000',
  `link` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_search`,`id_content`),
  KEY `relevance` (`relevance`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS `phpboost_sessions`;
CREATE TABLE `phpboost_sessions` (
  `session_id` varchar(64) NOT NULL DEFAULT '',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(64) NOT NULL DEFAULT '',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  `location_script` varchar(100) NOT NULL DEFAULT '',
  `location_title` varchar(100) NOT NULL DEFAULT '',
  `cached_data` text,
  `token` varchar(64) NOT NULL,
  `data` text,
  PRIMARY KEY (`session_id`),
  KEY `user_id` (`user_id`),
  KEY `timestamp` (`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_sessions` (`session_id`, `user_id`, `ip`, `timestamp`, `location_script`, `location_title`, `cached_data`, `token`, `data`) VALUES ('ae75a079bb2755ee36ca25f229d9d0da4355312eaabfeb91f57c8148897962bc',-1,'163.172.66.178',1490115494,'/calendar/events_list/?table=,filters:{filter1:19/03/2017}','Liste des événements','a:16:{s:7:"user_id";i:-1;s:12:"display_name";s:7:"visitor";s:5:"level";i:-1;s:5:"email";N;s:10:"show_email";b:0;s:6:"locale";s:6:"french";s:5:"theme";s:9:"underline";s:8:"timezone";s:12:"Europe/Paris";s:6:"editor";s:6:"BBCode";s:9:"unread_pm";i:0;s:17:"registration_date";i:0;s:20:"last_connection_date";i:1490115494;s:6:"groups";s:0:"";s:18:"warning_percentage";i:0;s:12:"delay_banned";i:0;s:14:"delay_readonly";i:0;}','aef5d524439049d7','a:0:{}');
INSERT INTO `phpboost_sessions` (`session_id`, `user_id`, `ip`, `timestamp`, `location_script`, `location_title`, `cached_data`, `token`, `data`) VALUES ('ee1e2dc8e3ab0d8a693e9b1acbff6b561e9e0a38070c0d1eb5c10283b62fe412',-1,'40.77.167.0',1490117324,'/sitemap/index.php','Plan du site','a:16:{s:7:"user_id";i:-1;s:12:"display_name";s:7:"visitor";s:5:"level";i:-1;s:5:"email";N;s:10:"show_email";b:0;s:6:"locale";s:6:"french";s:5:"theme";s:9:"underline";s:8:"timezone";s:12:"Europe/Paris";s:6:"editor";s:6:"BBCode";s:9:"unread_pm";i:0;s:17:"registration_date";i:0;s:20:"last_connection_date";i:1490117324;s:6:"groups";s:0:"";s:18:"warning_percentage";i:0;s:12:"delay_banned";i:0;s:14:"delay_readonly";i:0;}','a0617500eceffb36','a:0:{}');
INSERT INTO `phpboost_sessions` (`session_id`, `user_id`, `ip`, `timestamp`, `location_script`, `location_title`, `cached_data`, `token`, `data`) VALUES ('41aa1c56a60ba5b30cbe6c008c0208c6de3926ff8c066ff4b9cf847de30668f9',1,'2.1.212.248',1490118745,'/database/admin_database.php?action=backup&token=b271f8881b6725b9','Gestion base de données','a:28:{s:9:"m_user_id";s:1:"1";s:12:"display_name";s:5:"mipel";s:5:"level";s:1:"2";s:5:"email";s:17:"mipel85@gmail.com";s:10:"show_email";s:1:"1";s:6:"locale";s:6:"french";s:5:"theme";s:9:"underline";s:8:"timezone";s:12:"Europe/Paris";s:6:"editor";s:6:"BBCode";s:9:"unread_pm";s:1:"0";s:10:"posted_msg";s:1:"0";s:17:"registration_date";s:10:"1453496364";s:20:"last_connection_date";s:10:"1490118495";s:6:"groups";s:0:"";s:18:"warning_percentage";s:1:"0";s:12:"delay_banned";s:1:"0";s:14:"delay_readonly";s:1:"0";s:7:"user_id";s:1:"1";s:15:"last_view_forum";s:0:"";s:12:"user_website";s:0:"";s:8:"user_msn";s:0:"";s:10:"user_yahoo";s:0:"";s:9:"user_sign";s:0:"";s:19:"register_newsletter";s:0:"";s:8:"user_sex";s:0:"";s:9:"user_born";s:0:"";s:11:"user_avatar";s:33:"/images/avatars/bounce-e3754.jpeg";s:13:"user_pmtomail";s:0:"";}','b271f8881b6725b9','a:0:{}');
INSERT INTO `phpboost_sessions` (`session_id`, `user_id`, `ip`, `timestamp`, `location_script`, `location_title`, `cached_data`, `token`, `data`) VALUES ('e28a34eceb0350f738b17920cdca294bd82bd7ca4f11c4100b0d9f1112b3c0c8',-1,'164.132.161.36',1490118465,'/news/index.php?url=/0-root/71-rencontre-indoor/&','Erreur','a:16:{s:7:"user_id";i:-1;s:12:"display_name";s:7:"visitor";s:5:"level";i:-1;s:5:"email";N;s:10:"show_email";b:0;s:6:"locale";s:6:"french";s:5:"theme";s:9:"underline";s:8:"timezone";s:12:"Europe/Paris";s:6:"editor";s:6:"BBCode";s:9:"unread_pm";i:0;s:17:"registration_date";i:0;s:20:"last_connection_date";i:1490118465;s:6:"groups";s:0:"";s:18:"warning_percentage";i:0;s:12:"delay_banned";i:0;s:14:"delay_readonly";i:0;}','b089c4443967e5b9','a:0:{}');
INSERT INTO `phpboost_sessions` (`session_id`, `user_id`, `ip`, `timestamp`, `location_script`, `location_title`, `cached_data`, `token`, `data`) VALUES ('e713e085bf1e3e8f0f1d521fdc68095c4f5538eb4da9a3866a339e60b686fb7a',-1,'81.52.143.46',1490118461,'/gallery/gallery-0-8.php','Galerie','a:16:{s:7:"user_id";i:-1;s:12:"display_name";s:7:"visitor";s:5:"level";i:-1;s:5:"email";N;s:10:"show_email";b:0;s:6:"locale";s:6:"french";s:5:"theme";s:9:"underline";s:8:"timezone";s:12:"Europe/Paris";s:6:"editor";s:6:"BBCode";s:9:"unread_pm";i:0;s:17:"registration_date";i:0;s:20:"last_connection_date";i:1490118461;s:6:"groups";s:0:"";s:18:"warning_percentage";i:0;s:12:"delay_banned";i:0;s:14:"delay_readonly";i:0;}','c9c99e3880b7db34','a:0:{}');
INSERT INTO `phpboost_sessions` (`session_id`, `user_id`, `ip`, `timestamp`, `location_script`, `location_title`, `cached_data`, `token`, `data`) VALUES ('2a925cf9fa395922ac3285745a3199b54d61522b7d0462b48a1931e5eb85c1b2',-1,'51.255.65.71',1490118416,'/calendar/events_list/?table=,filters:{filter1:27/11/2016}','Liste des événements','a:16:{s:7:"user_id";i:-1;s:12:"display_name";s:7:"visitor";s:5:"level";i:-1;s:5:"email";N;s:10:"show_email";b:0;s:6:"locale";s:6:"french";s:5:"theme";s:9:"underline";s:8:"timezone";s:12:"Europe/Paris";s:6:"editor";s:6:"BBCode";s:9:"unread_pm";i:0;s:17:"registration_date";i:0;s:20:"last_connection_date";i:1490118416;s:6:"groups";s:0:"";s:18:"warning_percentage";i:0;s:12:"delay_banned";i:0;s:14:"delay_readonly";i:0;}','7b22f44ce1f44f7c','a:0:{}');
INSERT INTO `phpboost_sessions` (`session_id`, `user_id`, `ip`, `timestamp`, `location_script`, `location_title`, `cached_data`, `token`, `data`) VALUES ('d7473ca5e5325b0877b3c1ca4cb367552805a3ebcc1c2d7ba5891d0cdece7954',-1,'141.8.142.65',1490115307,'/contact/','Contact','a:16:{s:7:"user_id";i:-1;s:12:"display_name";s:7:"visitor";s:5:"level";i:-1;s:5:"email";N;s:10:"show_email";b:0;s:6:"locale";s:6:"french";s:5:"theme";s:9:"underline";s:8:"timezone";s:12:"Europe/Paris";s:6:"editor";s:6:"BBCode";s:9:"unread_pm";i:0;s:17:"registration_date";i:0;s:20:"last_connection_date";i:1490115307;s:6:"groups";s:0:"";s:18:"warning_percentage";i:0;s:12:"delay_banned";i:0;s:14:"delay_readonly";i:0;}','2dc7a6e6e714b60e','a:0:{}');
DROP TABLE IF EXISTS `phpboost_shoutbox`;
CREATE TABLE `phpboost_shoutbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(150) DEFAULT '',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `contents` text,
  `timestamp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `timestamp` (`timestamp`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_shoutbox` (`id`, `login`, `user_id`, `contents`, `timestamp`) VALUES (1,'PHPBoost',-1,'L''équipe de PHPBoost vous souhaite la bienvenue !',1275082734);
DROP TABLE IF EXISTS `phpboost_smallads`;
CREATE TABLE `phpboost_smallads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `contents` text NOT NULL,
  `picture` varchar(255) NOT NULL DEFAULT '',
  `id_created` int(11) NOT NULL DEFAULT '0',
  `date_created` int(11) NOT NULL DEFAULT '0',
  `type` int(4) NOT NULL DEFAULT '0',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `shipping` decimal(10,2) NOT NULL DEFAULT '0.00',
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  `date_approved` int(11) NOT NULL DEFAULT '0',
  `id_updated` int(11) NOT NULL DEFAULT '0',
  `date_updated` int(11) NOT NULL DEFAULT '0',
  `links_flag` int(11) NOT NULL DEFAULT '0',
  `vid` int(11) NOT NULL DEFAULT '0',
  `max_weeks` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `date_created` (`date_created`),
  KEY `vid` (`vid`),
  KEY `date_approved` (`date_approved`),
  KEY `approved` (`approved`),
  KEY `id_created` (`id_created`),
  FULLTEXT KEY `title` (`title`),
  FULLTEXT KEY `contents` (`contents`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS `phpboost_smileys`;
CREATE TABLE `phpboost_smileys` (
  `idsmiley` int(11) NOT NULL AUTO_INCREMENT,
  `code_smiley` varchar(50) DEFAULT '',
  `url_smiley` varchar(50) DEFAULT '',
  PRIMARY KEY (`idsmiley`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (1,':o','wow.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (2,':whistle','whistle.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (3,':)','smile.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (4,':lol','laugh.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (5,':p','tongue.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (6,':(','sad.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (7,';)','wink.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (8,':what','what.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (9,':D','grin.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (10,'^^','happy.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (11,':|','straight.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (12,':gne','gne.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (13,':top','top.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (14,':party','party.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (15,':devil','devil.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (16,':@','angry.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (17,':''(','cry.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (18,':crazy','crazy.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (19,':cool','cool.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (20,':night','night.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (21,':vomit','vomit.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (22,':unhappy','unhappy.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (23,':love','love.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (24,':hum','confused.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (25,':drool','drooling.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (26,':cold','cold.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (27,':hot','hot.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (28,':hi','hello.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (29,':bal','balloon.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (30,':bomb','bomb.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (31,':brokenheart','brokenheart.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (32,':cake','cake.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (33,':dead','dead.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (34,':drink','drink.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (35,':flower','flower.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (36,':ghost','ghost.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (37,':gift','gift.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (38,':girly','girly.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (39,':heart','heart.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (40,':hug','hug.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (41,':idea','idea.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (42,':kiss','kiss.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (43,':mail','mail.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (44,':x','mute.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (46,':nerd','nerd.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (47,':sick','sick.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (48,':boring','boring.png');
INSERT INTO `phpboost_smileys` (`idsmiley`, `code_smiley`, `url_smiley`) VALUES (49,':zombie','zombie.png');
DROP TABLE IF EXISTS `phpboost_stats`;
CREATE TABLE `phpboost_stats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stats_year` int(11) NOT NULL DEFAULT '0',
  `stats_month` int(1) NOT NULL DEFAULT '0',
  `stats_day` int(1) NOT NULL DEFAULT '0',
  `nbr` int(11) NOT NULL DEFAULT '0',
  `pages` int(11) NOT NULL DEFAULT '0',
  `pages_detail` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stats_day` (`stats_day`,`stats_month`,`stats_year`)
) ENGINE=MyISAM AUTO_INCREMENT=425 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (1,2016,1,21,1,0,'a:0:{}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (2,2016,1,22,1,186,'a:2:{i:22;i:143;i:23;i:43;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (3,2016,1,23,9,530,'a:14:{i:4;i:92;i:5;i:4;i:7;i:2;i:11;i:1;i:12;i:44;i:13;i:82;i:14;i:99;i:16;i:61;i:17;i:10;i:18;i:37;i:19;i:1;i:21;i:18;i:22;i:6;i:23;i:73;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (4,2016,1,24,6,373,'a:18:{i:0;i:66;i:3;i:1;i:4;i:1;i:8;i:27;i:9;i:14;i:10;i:17;i:11;i:2;i:12;i:12;i:13;i:34;i:14;i:13;i:15;i:6;i:16;i:5;i:17;i:53;i:18;i:63;i:19;i:1;i:20;i:24;i:21;i:7;i:22;i:27;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (5,2016,1,25,9,566,'a:15:{i:0;i:179;i:1;i:46;i:5;i:7;i:7;i:3;i:8;i:1;i:9;i:13;i:11;i:84;i:13;i:4;i:14;i:27;i:15;i:19;i:16;i:1;i:17;i:97;i:18;i:61;i:20;i:8;i:21;i:16;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (6,2016,1,26,14,174,'a:19:{i:2;i:1;i:5;i:1;i:6;i:1;i:7;i:3;i:8;i:1;i:9;i:53;i:10;i:7;i:11;i:3;i:12;i:1;i:13;i:20;i:14;i:7;i:15;i:1;i:16;i:1;i:17;i:15;i:18;i:1;i:19;i:52;i:20;i:1;i:21;i:4;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (7,2016,1,27,14,375,'a:16:{i:0;i:1;i:5;i:1;i:6;i:2;i:7;i:6;i:8;i:2;i:9;i:48;i:11;i:89;i:12;i:43;i:13;i:7;i:14;i:44;i:17;i:28;i:18;i:39;i:19;i:5;i:20;i:7;i:21;i:28;i:22;i:25;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (8,2016,1,28,13,318,'a:15:{i:1;i:20;i:2;i:1;i:6;i:2;i:7;i:2;i:10;i:57;i:11;i:3;i:13;i:6;i:14;i:26;i:15;i:1;i:16;i:2;i:17;i:36;i:18;i:31;i:19;i:125;i:21;i:5;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (9,2016,1,29,12,253,'a:13:{i:6;i:1;i:7;i:1;i:8;i:1;i:9;i:2;i:10;i:2;i:11;i:12;i:12;i:3;i:15;i:23;i:16;i:25;i:17;i:7;i:18;i:103;i:21;i:18;i:22;i:55;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (10,2016,1,30,11,331,'a:14:{i:1;i:1;i:5;i:1;i:6;i:2;i:7;i:2;i:8;i:1;i:11;i:58;i:12;i:16;i:13;i:1;i:14;i:9;i:16;i:22;i:17;i:143;i:18;i:57;i:21;i:17;i:22;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (11,2016,1,31,11,117,'a:14:{i:3;i:1;i:5;i:1;i:6;i:1;i:7;i:1;i:8;i:10;i:9;i:11;i:12;i:37;i:13;i:4;i:14;i:10;i:15;i:9;i:17;i:1;i:18;i:9;i:19;i:20;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (12,2016,2,1,11,183,'a:12:{i:6;i:2;i:7;i:21;i:8;i:1;i:9;i:1;i:10;i:20;i:13;i:1;i:14;i:32;i:15;i:59;i:16;i:12;i:17;i:6;i:18;i:1;i:21;i:27;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (13,2016,2,2,10,103,'a:12:{i:2;i:28;i:6;i:3;i:7;i:1;i:8;i:2;i:9;i:1;i:11;i:5;i:14;i:16;i:16;i:5;i:17;i:1;i:20;i:12;i:22;i:1;i:23;i:28;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (14,2016,2,3,11,69,'a:14:{i:0;i:1;i:2;i:1;i:5;i:1;i:6;i:2;i:7;i:1;i:9;i:1;i:10;i:2;i:14;i:1;i:15;i:1;i:17;i:24;i:18;i:12;i:19;i:10;i:20;i:3;i:21;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (15,2016,2,4,8,288,'a:15:{i:6;i:2;i:7;i:5;i:8;i:4;i:9;i:6;i:10;i:4;i:13;i:5;i:14;i:1;i:15;i:1;i:17;i:52;i:18;i:87;i:19;i:88;i:20;i:1;i:21;i:5;i:22;i:5;i:23;i:22;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (16,2016,2,5,8,856,'a:9:{i:15;i:35;i:16;i:184;i:17;i:194;i:18;i:52;i:19;i:101;i:20;i:1;i:21;i:40;i:22;i:81;i:23;i:168;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (17,2016,2,6,9,337,'a:16:{i:0;i:24;i:6;i:2;i:8;i:57;i:9;i:41;i:12;i:2;i:13;i:47;i:14;i:20;i:15;i:36;i:16;i:29;i:17;i:12;i:18;i:26;i:19;i:3;i:20;i:11;i:21;i:19;i:22;i:6;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (18,2016,2,7,9,244,'a:22:{i:0;i:13;i:1;i:1;i:2;i:3;i:3;i:2;i:4;i:12;i:6;i:7;i:7;i:16;i:8;i:4;i:9;i:15;i:10;i:41;i:11;i:14;i:12;i:11;i:13;i:12;i:14;i:5;i:16;i:1;i:17;i:3;i:18;i:9;i:19;i:1;i:20;i:7;i:21;i:6;i:22;i:50;i:23;i:11;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (19,2016,2,8,12,233,'a:17:{i:0;i:32;i:5;i:1;i:6;i:6;i:7;i:1;i:8;i:3;i:9;i:25;i:10;i:14;i:12;i:17;i:14;i:1;i:15;i:73;i:16;i:4;i:17;i:12;i:18;i:3;i:19;i:28;i:20;i:2;i:21;i:8;i:22;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (20,2016,2,9,6,672,'a:21:{i:0;i:30;i:2;i:9;i:3;i:7;i:6;i:2;i:7;i:2;i:8;i:8;i:9;i:48;i:10;i:112;i:11;i:25;i:12;i:14;i:13;i:56;i:14;i:33;i:15;i:8;i:16;i:1;i:17;i:61;i:18;i:122;i:19;i:51;i:20;i:59;i:21;i:8;i:22;i:3;i:23;i:13;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (21,2016,2,10,7,167,'a:19:{i:3;i:7;i:4;i:4;i:5;i:1;i:6;i:1;i:8;i:4;i:9;i:11;i:10;i:1;i:11;i:33;i:12;i:17;i:13;i:4;i:14;i:1;i:15;i:5;i:16;i:7;i:17;i:14;i:18;i:1;i:19;i:2;i:21;i:2;i:22;i:40;i:23;i:12;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (22,2016,2,11,7,204,'a:17:{i:0;i:17;i:2;i:1;i:4;i:9;i:7;i:1;i:8;i:1;i:9;i:25;i:10;i:2;i:12;i:3;i:13;i:1;i:14;i:78;i:15;i:1;i:16;i:1;i:18;i:2;i:19;i:21;i:20;i:21;i:21;i:19;i:22;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (23,2016,2,12,5,556,'a:20:{i:0;i:3;i:1;i:23;i:3;i:12;i:7;i:1;i:8;i:3;i:9;i:43;i:10;i:11;i:11;i:31;i:12;i:11;i:13;i:12;i:14;i:1;i:15;i:26;i:16;i:77;i:17;i:71;i:18;i:72;i:19;i:23;i:20;i:1;i:21;i:33;i:22;i:79;i:23;i:23;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (24,2016,2,13,4,131,'a:15:{i:0;i:4;i:3;i:3;i:5;i:4;i:7;i:1;i:9;i:1;i:10;i:32;i:11;i:10;i:13;i:9;i:14;i:17;i:15;i:2;i:16;i:11;i:17;i:21;i:18;i:1;i:21;i:2;i:23;i:13;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (25,2016,2,14,7,241,'a:20:{i:0;i:3;i:4;i:2;i:6;i:1;i:7;i:1;i:8;i:1;i:9;i:24;i:10;i:3;i:11;i:10;i:12;i:17;i:13;i:4;i:14;i:3;i:15;i:16;i:16;i:2;i:17;i:21;i:18;i:104;i:19;i:11;i:20;i:9;i:21;i:6;i:22;i:1;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (26,2016,2,15,29,673,'a:18:{i:0;i:3;i:1;i:1;i:5;i:2;i:9;i:1;i:10;i:8;i:11;i:3;i:12;i:2;i:13;i:19;i:14;i:3;i:15;i:23;i:16;i:9;i:17;i:68;i:18;i:5;i:19;i:128;i:20;i:174;i:21;i:63;i:22;i:64;i:23;i:97;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (27,2016,2,16,36,776,'a:20:{i:0;i:38;i:4;i:2;i:5;i:1;i:7;i:44;i:8;i:189;i:9;i:62;i:10;i:36;i:11;i:5;i:12;i:31;i:13;i:56;i:14;i:1;i:15;i:19;i:16;i:9;i:17;i:118;i:18;i:37;i:19;i:30;i:20;i:24;i:21;i:9;i:22;i:5;i:23;i:60;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (28,2016,2,17,19,281,'a:20:{i:1;i:2;i:2;i:1;i:3;i:2;i:4;i:1;i:5;i:1;i:6;i:1;i:8;i:13;i:9;i:33;i:10;i:22;i:11;i:7;i:12;i:5;i:14;i:8;i:16;i:3;i:17;i:15;i:18;i:33;i:19;i:33;i:20;i:23;i:21;i:29;i:22;i:40;i:23;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (29,2016,2,18,11,556,'a:21:{i:0;i:2;i:2;i:3;i:3;i:2;i:4;i:1;i:7;i:7;i:8;i:25;i:9;i:10;i:10;i:96;i:11;i:39;i:12;i:13;i:13;i:7;i:14;i:10;i:15;i:1;i:16;i:35;i:17;i:3;i:18;i:33;i:19;i:103;i:20;i:84;i:21;i:29;i:22;i:20;i:23;i:33;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (30,2016,2,19,15,471,'a:21:{i:0;i:6;i:1;i:2;i:2;i:3;i:3;i:1;i:4;i:59;i:6;i:4;i:7;i:2;i:8;i:14;i:9;i:6;i:10;i:26;i:11;i:20;i:12;i:3;i:13;i:174;i:14;i:21;i:16;i:11;i:17;i:2;i:18;i:11;i:19;i:11;i:21;i:36;i:22;i:36;i:23;i:23;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (31,2016,2,20,16,456,'a:23:{i:0;i:86;i:1;i:5;i:3;i:1;i:4;i:2;i:5;i:7;i:6;i:58;i:7;i:25;i:8;i:13;i:9;i:8;i:10;i:11;i:11;i:10;i:12;i:29;i:13;i:3;i:14;i:63;i:15;i:13;i:16;i:1;i:17;i:2;i:18;i:13;i:19;i:4;i:20;i:23;i:21;i:19;i:22;i:6;i:23;i:54;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (32,2016,2,21,15,220,'a:18:{i:0;i:6;i:3;i:15;i:4;i:7;i:5;i:5;i:6;i:6;i:7;i:4;i:8;i:3;i:9;i:2;i:10;i:11;i:11;i:2;i:12;i:10;i:13;i:3;i:14;i:34;i:15;i:6;i:16;i:13;i:17;i:10;i:20;i:80;i:22;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (33,2016,2,22,12,273,'a:19:{i:1;i:3;i:2;i:2;i:3;i:1;i:5;i:2;i:6;i:1;i:7;i:28;i:9;i:28;i:10;i:25;i:11;i:12;i:12;i:74;i:13;i:12;i:14;i:10;i:15;i:3;i:17;i:8;i:18;i:7;i:19;i:3;i:20;i:4;i:22;i:20;i:23;i:30;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (34,2016,2,23,15,167,'a:17:{i:1;i:1;i:3;i:11;i:5;i:26;i:7;i:6;i:8;i:1;i:10;i:5;i:11;i:24;i:12;i:25;i:13;i:7;i:14;i:3;i:15;i:22;i:18;i:1;i:19;i:10;i:20;i:1;i:21;i:10;i:22;i:11;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (35,2016,2,24,11,202,'a:15:{i:0;i:2;i:6;i:1;i:8;i:9;i:9;i:21;i:10;i:14;i:11;i:22;i:13;i:18;i:14;i:4;i:15;i:1;i:16;i:22;i:17;i:3;i:18;i:24;i:19;i:55;i:21;i:5;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (36,2016,2,25,11,151,'a:16:{i:0;i:1;i:1;i:1;i:8;i:5;i:9;i:3;i:11;i:2;i:12;i:49;i:13;i:9;i:14;i:3;i:15;i:2;i:16;i:1;i:17;i:22;i:18;i:4;i:19;i:13;i:20;i:3;i:21;i:2;i:23;i:31;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (37,2016,2,26,11,55,'a:13:{i:0;i:6;i:1;i:5;i:3;i:2;i:9;i:1;i:10;i:1;i:13;i:1;i:14;i:20;i:15;i:3;i:16;i:3;i:18;i:2;i:20;i:3;i:22;i:1;i:23;i:7;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (38,2016,2,27,12,69,'a:11:{i:5;i:21;i:7;i:7;i:12;i:1;i:13;i:3;i:14;i:11;i:17;i:1;i:18;i:3;i:19;i:7;i:20;i:4;i:22;i:8;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (39,2016,2,28,9,138,'a:16:{i:0;i:18;i:3;i:12;i:6;i:1;i:7;i:11;i:8;i:5;i:9;i:14;i:10;i:2;i:11;i:1;i:13;i:9;i:14;i:1;i:15;i:2;i:16;i:44;i:17;i:12;i:18;i:1;i:20;i:3;i:22;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (40,2016,2,29,14,134,'a:16:{i:2;i:2;i:3;i:4;i:6;i:1;i:7;i:2;i:8;i:1;i:9;i:2;i:10;i:9;i:11;i:31;i:15;i:34;i:16;i:1;i:17;i:5;i:18;i:12;i:19;i:14;i:20;i:2;i:21;i:11;i:22;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (41,2016,3,1,14,406,'a:18:{i:2;i:1;i:3;i:3;i:6;i:1;i:8;i:6;i:9;i:20;i:10;i:22;i:11;i:13;i:12;i:18;i:13;i:2;i:14;i:132;i:15;i:23;i:16;i:54;i:17;i:8;i:18;i:13;i:19;i:23;i:20;i:10;i:21;i:15;i:22;i:42;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (42,2016,3,2,9,104,'a:16:{i:0;i:7;i:1;i:10;i:2;i:4;i:3;i:9;i:6;i:3;i:8;i:2;i:9;i:1;i:11;i:6;i:13;i:23;i:14;i:2;i:15;i:1;i:18;i:2;i:20;i:2;i:21;i:28;i:22;i:3;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (43,2016,3,3,9,592,'a:13:{i:4;i:2;i:5;i:3;i:6;i:2;i:8;i:17;i:10;i:11;i:15;i:1;i:17;i:122;i:18;i:119;i:19;i:21;i:20;i:50;i:21;i:82;i:22;i:94;i:23;i:68;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (44,2016,3,4,16,432,'a:17:{i:0;i:12;i:2;i:7;i:3;i:6;i:8;i:80;i:9;i:83;i:10;i:49;i:11;i:94;i:12;i:7;i:14;i:1;i:15;i:40;i:16;i:3;i:17;i:6;i:18;i:1;i:19;i:14;i:21;i:2;i:22;i:21;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (45,2016,3,5,13,1049,'a:11:{i:0;i:1;i:3;i:2;i:9;i:4;i:10;i:30;i:11;i:7;i:13;i:12;i:18;i:3;i:20;i:4;i:21;i:963;i:22;i:22;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (46,2016,3,6,11,164,'a:19:{i:3;i:7;i:4;i:8;i:5;i:42;i:6;i:1;i:7;i:4;i:8;i:6;i:9;i:5;i:11;i:1;i:13;i:20;i:14;i:17;i:15;i:11;i:16;i:2;i:17;i:4;i:18;i:1;i:19;i:4;i:20;i:18;i:21;i:7;i:22;i:2;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (47,2016,3,7,12,219,'a:17:{i:0;i:3;i:1;i:17;i:5;i:9;i:6;i:84;i:8;i:2;i:9;i:1;i:11;i:18;i:12;i:37;i:14;i:3;i:15;i:2;i:16;i:11;i:17;i:18;i:18;i:1;i:19;i:2;i:20;i:8;i:21;i:2;i:22;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (48,2016,3,8,8,108,'a:19:{i:1;i:2;i:2;i:1;i:4;i:7;i:5;i:4;i:7;i:31;i:8;i:6;i:9;i:10;i:10;i:14;i:11;i:1;i:12;i:1;i:13;i:1;i:14;i:1;i:15;i:10;i:16;i:1;i:18;i:4;i:19;i:3;i:20;i:8;i:22;i:2;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (49,2016,3,9,11,59,'a:19:{i:1;i:1;i:2;i:5;i:3;i:1;i:4;i:1;i:6;i:3;i:7;i:2;i:8;i:2;i:9;i:1;i:10;i:8;i:11;i:1;i:12;i:2;i:14;i:2;i:16;i:4;i:17;i:11;i:18;i:7;i:20;i:3;i:21;i:1;i:22;i:3;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (50,2016,3,10,8,73,'a:16:{i:0;i:1;i:1;i:2;i:2;i:2;i:5;i:2;i:6;i:1;i:7;i:14;i:8;i:8;i:9;i:12;i:10;i:13;i:11;i:6;i:12;i:2;i:13;i:2;i:16;i:1;i:17;i:1;i:19;i:3;i:20;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (51,2016,3,11,14,162,'a:16:{i:0;i:1;i:4;i:2;i:6;i:2;i:8;i:73;i:9;i:20;i:10;i:15;i:11;i:1;i:13;i:7;i:14;i:4;i:15;i:8;i:16;i:2;i:18;i:5;i:20;i:1;i:21;i:10;i:22;i:10;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (52,2016,3,12,15,318,'a:19:{i:3;i:7;i:4;i:11;i:6;i:4;i:7;i:1;i:8;i:29;i:9;i:33;i:10;i:36;i:12;i:1;i:13;i:80;i:14;i:23;i:15;i:8;i:16;i:2;i:17;i:22;i:18;i:48;i:19;i:2;i:20;i:2;i:21;i:4;i:22;i:4;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (53,2016,3,13,13,188,'a:19:{i:0;i:78;i:1;i:6;i:3;i:6;i:4;i:2;i:5;i:5;i:6;i:8;i:7;i:7;i:8;i:1;i:9;i:3;i:10;i:12;i:11;i:24;i:12;i:2;i:13;i:2;i:14;i:1;i:16;i:3;i:17;i:3;i:18;i:3;i:19;i:20;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (54,2016,3,14,15,645,'a:18:{i:0;i:1;i:2;i:1;i:3;i:2;i:7;i:2;i:8;i:1;i:9;i:3;i:10;i:6;i:11;i:2;i:13;i:8;i:14;i:4;i:16;i:4;i:17;i:64;i:18;i:21;i:19;i:14;i:20;i:324;i:21;i:185;i:22;i:1;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (55,2016,3,15,13,153,'a:17:{i:0;i:1;i:1;i:1;i:5;i:6;i:7;i:4;i:8;i:2;i:9;i:2;i:10;i:1;i:11;i:2;i:12;i:13;i:13;i:20;i:14;i:49;i:15;i:1;i:16;i:9;i:17;i:14;i:19;i:1;i:21;i:19;i:22;i:8;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (56,2016,3,16,14,99,'a:18:{i:0;i:2;i:1;i:23;i:2;i:2;i:4;i:1;i:5;i:1;i:7;i:7;i:8;i:7;i:9;i:5;i:10;i:9;i:12;i:1;i:13;i:7;i:14;i:6;i:15;i:5;i:17;i:16;i:18;i:2;i:19;i:2;i:22;i:2;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (57,2016,3,17,15,175,'a:18:{i:0;i:17;i:2;i:1;i:3;i:4;i:6;i:25;i:7;i:5;i:8;i:5;i:9;i:7;i:10;i:4;i:12;i:1;i:13;i:34;i:15;i:1;i:16;i:4;i:17;i:17;i:18;i:10;i:20;i:4;i:21;i:2;i:22;i:3;i:23;i:31;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (58,2016,3,18,8,209,'a:17:{i:0;i:70;i:1;i:16;i:2;i:5;i:3;i:6;i:6;i:2;i:7;i:7;i:9;i:9;i:10;i:3;i:11;i:3;i:12;i:2;i:14;i:2;i:17;i:1;i:18;i:48;i:19;i:3;i:21;i:1;i:22;i:24;i:23;i:7;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (59,2016,3,19,11,116,'a:19:{i:0;i:7;i:2;i:1;i:3;i:1;i:5;i:1;i:6;i:4;i:7;i:41;i:8;i:4;i:9;i:2;i:10;i:8;i:11;i:1;i:13;i:1;i:14;i:18;i:15;i:2;i:16;i:4;i:17;i:1;i:18;i:10;i:20;i:1;i:22;i:8;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (60,2016,3,20,11,240,'a:24:{i:0;i:2;i:1;i:6;i:2;i:6;i:3;i:6;i:4;i:5;i:5;i:4;i:6;i:6;i:7;i:2;i:8;i:10;i:9;i:18;i:10;i:6;i:11;i:11;i:12;i:19;i:13;i:2;i:14;i:2;i:15;i:1;i:16;i:2;i:17;i:14;i:18;i:5;i:19;i:23;i:20;i:5;i:21;i:64;i:22;i:2;i:23;i:19;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (61,2016,3,21,17,150,'a:19:{i:2;i:1;i:4;i:3;i:5;i:1;i:6;i:1;i:7;i:1;i:8;i:44;i:9;i:15;i:10;i:1;i:12;i:2;i:13;i:23;i:15;i:1;i:16;i:7;i:17;i:5;i:18;i:5;i:19;i:4;i:20;i:9;i:21;i:18;i:22;i:6;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (62,2016,3,22,9,55,'a:15:{i:1;i:2;i:3;i:1;i:7;i:2;i:8;i:6;i:9;i:9;i:10;i:2;i:13;i:1;i:14;i:3;i:15;i:3;i:16;i:7;i:18;i:10;i:19;i:3;i:20;i:4;i:21;i:1;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (63,2016,3,23,11,121,'a:15:{i:1;i:3;i:2;i:6;i:4;i:4;i:6;i:1;i:7;i:3;i:8;i:8;i:9;i:6;i:10;i:8;i:11;i:1;i:12;i:7;i:17;i:49;i:18;i:10;i:19;i:7;i:20;i:3;i:22;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (64,2016,3,24,13,231,'a:16:{i:1;i:8;i:7;i:11;i:10;i:19;i:11;i:3;i:12;i:38;i:13;i:12;i:14;i:36;i:16;i:9;i:17;i:8;i:18;i:17;i:19;i:1;i:20;i:3;i:21;i:1;i:22;i:9;i:23;i:55;i:0;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (65,2016,3,25,12,598,'a:19:{i:0;i:437;i:2;i:1;i:3;i:6;i:4;i:6;i:7;i:2;i:8;i:3;i:9;i:11;i:10;i:23;i:11;i:1;i:13;i:1;i:14;i:1;i:15;i:12;i:16;i:14;i:17;i:11;i:18;i:12;i:19;i:2;i:20;i:48;i:21;i:4;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (66,2016,3,26,12,116,'a:19:{i:0;i:2;i:2;i:3;i:3;i:1;i:4;i:3;i:6;i:7;i:8;i:2;i:9;i:8;i:10;i:1;i:11;i:9;i:12;i:2;i:13;i:3;i:14;i:5;i:15;i:1;i:16;i:10;i:17;i:2;i:18;i:16;i:19;i:30;i:20;i:8;i:21;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (67,2016,3,28,23,483,'a:23:{i:0;i:80;i:1;i:2;i:3;i:2;i:5;i:1;i:6;i:9;i:7;i:10;i:8;i:1;i:9;i:54;i:10;i:32;i:11;i:88;i:12;i:14;i:13;i:3;i:14;i:13;i:16;i:8;i:18;i:7;i:19;i:10;i:20;i:16;i:21;i:81;i:22;i:1;i:23;i:5;i:2;i:4;i:15;i:27;i:17;i:15;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (68,2016,3,29,11,368,'a:17:{i:0;i:6;i:1;i:5;i:2;i:1;i:4;i:7;i:7;i:1;i:9;i:2;i:10;i:113;i:11;i:113;i:12;i:3;i:14;i:18;i:15;i:81;i:16;i:5;i:18;i:1;i:19;i:6;i:21;i:2;i:22;i:2;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (69,2016,3,30,13,164,'a:14:{i:0;i:73;i:1;i:8;i:4;i:4;i:5;i:1;i:9;i:10;i:10;i:20;i:15;i:1;i:17;i:3;i:18;i:9;i:19;i:5;i:20;i:5;i:21;i:4;i:22;i:16;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (70,2016,3,31,10,391,'a:21:{i:1;i:1;i:2;i:4;i:3;i:2;i:4;i:6;i:5;i:8;i:6;i:7;i:7;i:1;i:8;i:13;i:9;i:8;i:10;i:20;i:11;i:10;i:12;i:1;i:13;i:173;i:14;i:89;i:16;i:1;i:17;i:2;i:18;i:3;i:20;i:21;i:21;i:1;i:22;i:9;i:23;i:11;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (71,2016,4,1,10,108,'a:17:{i:0;i:6;i:1;i:12;i:2;i:1;i:4;i:1;i:5;i:1;i:7;i:7;i:9;i:2;i:10;i:5;i:11;i:30;i:12;i:10;i:13;i:1;i:15;i:1;i:16;i:4;i:20;i:23;i:21;i:1;i:22;i:2;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (72,2016,4,2,12,184,'a:17:{i:0;i:2;i:5;i:2;i:7;i:11;i:8;i:1;i:9;i:2;i:10;i:1;i:11;i:4;i:13;i:14;i:15;i:9;i:16;i:3;i:17;i:4;i:18;i:36;i:19;i:14;i:20;i:2;i:21;i:2;i:22;i:71;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (73,2016,4,3,13,192,'a:19:{i:1;i:18;i:2;i:6;i:4;i:1;i:5;i:4;i:6;i:44;i:7;i:1;i:8;i:2;i:9;i:2;i:10;i:4;i:11;i:15;i:12;i:56;i:14;i:7;i:16;i:3;i:17;i:2;i:18;i:7;i:19;i:13;i:20;i:4;i:22;i:1;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (74,2016,4,4,20,1018,'a:15:{i:6;i:1;i:7;i:214;i:8;i:266;i:9;i:3;i:10;i:1;i:13;i:3;i:14;i:4;i:15;i:8;i:16;i:7;i:17;i:299;i:18;i:100;i:19;i:58;i:20;i:3;i:21;i:34;i:22;i:17;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (75,2016,4,5,17,192,'a:20:{i:0;i:1;i:1;i:1;i:2;i:1;i:4;i:5;i:6;i:2;i:7;i:9;i:8;i:9;i:9;i:30;i:10;i:33;i:11;i:10;i:12;i:1;i:14;i:12;i:15;i:8;i:16;i:3;i:18;i:6;i:19;i:7;i:20;i:30;i:21;i:12;i:22;i:7;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (76,2016,4,6,17,144,'a:18:{i:0;i:8;i:1;i:2;i:2;i:1;i:3;i:2;i:4;i:1;i:6;i:1;i:7;i:3;i:10;i:19;i:11;i:78;i:12;i:1;i:13;i:2;i:14;i:4;i:15;i:6;i:18;i:3;i:19;i:1;i:20;i:2;i:21;i:1;i:22;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (77,2016,4,7,14,69,'a:19:{i:0;i:12;i:1;i:2;i:3;i:4;i:5;i:2;i:6;i:2;i:8;i:1;i:9;i:1;i:10;i:8;i:11;i:2;i:12;i:2;i:13;i:1;i:15;i:1;i:16;i:2;i:17;i:2;i:18;i:3;i:19;i:10;i:20;i:3;i:22;i:1;i:23;i:10;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (78,2016,4,8,13,209,'a:18:{i:0;i:9;i:1;i:1;i:3;i:3;i:4;i:3;i:6;i:2;i:7;i:3;i:8;i:48;i:9;i:8;i:10;i:1;i:12;i:1;i:13;i:8;i:14;i:14;i:16;i:3;i:17;i:3;i:19;i:1;i:20;i:5;i:21;i:18;i:23;i:78;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (79,2016,4,9,14,208,'a:20:{i:0;i:10;i:1;i:1;i:2;i:1;i:3;i:1;i:6;i:6;i:7;i:6;i:8;i:6;i:9;i:14;i:10;i:3;i:11;i:26;i:12;i:2;i:13;i:8;i:14;i:1;i:15;i:62;i:16;i:9;i:17;i:14;i:19;i:2;i:20;i:2;i:22;i:30;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (80,2016,4,10,15,75,'a:17:{i:0;i:3;i:3;i:1;i:7;i:4;i:8;i:2;i:10;i:1;i:11;i:24;i:12;i:2;i:13;i:5;i:14;i:4;i:16;i:4;i:17;i:7;i:18;i:1;i:19;i:6;i:20;i:1;i:21;i:2;i:22;i:4;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (81,2016,4,11,19,231,'a:22:{i:0;i:29;i:1;i:1;i:2;i:1;i:3;i:5;i:5;i:1;i:6;i:5;i:7;i:9;i:8;i:10;i:9;i:3;i:10;i:18;i:12;i:8;i:13;i:1;i:14;i:2;i:15;i:1;i:16;i:38;i:17;i:9;i:18;i:3;i:19;i:12;i:20;i:2;i:21;i:7;i:22;i:10;i:23;i:56;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (82,2016,4,12,11,102,'a:17:{i:0;i:2;i:3;i:2;i:4;i:2;i:5;i:9;i:7;i:6;i:8;i:2;i:9;i:2;i:10;i:3;i:11;i:6;i:12;i:5;i:13;i:4;i:14;i:3;i:16;i:1;i:18;i:3;i:19;i:3;i:20;i:24;i:21;i:25;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (83,2016,4,13,17,578,'a:22:{i:0;i:8;i:1;i:1;i:2;i:2;i:3;i:5;i:4;i:2;i:5;i:20;i:6;i:1;i:8;i:6;i:9;i:5;i:10;i:4;i:11;i:5;i:12;i:2;i:13;i:13;i:14;i:14;i:15;i:436;i:17;i:1;i:18;i:10;i:19;i:9;i:20;i:3;i:21;i:4;i:22;i:22;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (84,2016,4,14,20,629,'a:19:{i:1;i:1;i:3;i:4;i:4;i:1;i:7;i:8;i:8;i:3;i:9;i:2;i:10;i:12;i:11;i:14;i:12;i:205;i:13;i:284;i:14;i:16;i:15;i:8;i:17;i:1;i:18;i:18;i:19;i:6;i:20;i:3;i:21;i:23;i:22;i:13;i:23;i:7;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (85,2016,4,15,16,355,'a:21:{i:1;i:1;i:2;i:16;i:3;i:14;i:4;i:1;i:5;i:75;i:6;i:1;i:9;i:22;i:10;i:52;i:11;i:22;i:12;i:1;i:13;i:4;i:14;i:1;i:15;i:5;i:16;i:114;i:17;i:2;i:18;i:5;i:19;i:4;i:20;i:6;i:21;i:3;i:22;i:4;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (86,2016,4,16,16,137,'a:20:{i:0;i:6;i:3;i:2;i:5;i:2;i:6;i:12;i:7;i:9;i:8;i:5;i:9;i:4;i:10;i:1;i:11;i:9;i:12;i:2;i:13;i:1;i:14;i:1;i:15;i:2;i:16;i:4;i:17;i:11;i:18;i:6;i:19;i:3;i:20;i:35;i:21;i:7;i:22;i:15;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (87,2016,4,17,18,179,'a:17:{i:0;i:28;i:3;i:6;i:7;i:25;i:8;i:5;i:9;i:9;i:10;i:18;i:11;i:4;i:13;i:7;i:14;i:6;i:15;i:5;i:16;i:13;i:18;i:3;i:19;i:1;i:20;i:1;i:21;i:21;i:22;i:7;i:23;i:20;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (88,2016,4,18,27,302,'a:23:{i:0;i:1;i:1;i:4;i:2;i:1;i:3;i:3;i:4;i:10;i:5;i:2;i:6;i:43;i:7;i:5;i:8;i:6;i:9;i:6;i:10;i:2;i:11;i:17;i:12;i:4;i:13;i:148;i:14;i:10;i:15;i:2;i:16;i:5;i:17;i:6;i:18;i:11;i:19;i:5;i:20;i:8;i:22;i:1;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (89,2016,4,19,19,127,'a:22:{i:0;i:4;i:1;i:1;i:2;i:9;i:3;i:2;i:4;i:4;i:5;i:4;i:6;i:3;i:7;i:5;i:8;i:23;i:9;i:14;i:10;i:6;i:11;i:11;i:12;i:5;i:14;i:2;i:15;i:2;i:16;i:3;i:17;i:5;i:18;i:4;i:19;i:2;i:21;i:12;i:22;i:4;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (90,2016,4,20,26,195,'a:21:{i:0;i:15;i:2;i:3;i:4;i:2;i:5;i:3;i:7;i:7;i:8;i:1;i:9;i:24;i:10;i:21;i:11;i:2;i:12;i:5;i:13;i:3;i:14;i:5;i:15;i:4;i:16;i:6;i:17;i:16;i:18;i:20;i:19;i:3;i:20;i:17;i:21;i:17;i:22;i:15;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (91,2016,4,21,22,91,'a:19:{i:0;i:1;i:1;i:1;i:2;i:2;i:5;i:7;i:7;i:1;i:8;i:8;i:9;i:5;i:10;i:8;i:12;i:7;i:13;i:7;i:14;i:3;i:15;i:1;i:16;i:4;i:18;i:5;i:19;i:6;i:20;i:4;i:21;i:2;i:22;i:4;i:23;i:15;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (92,2016,4,22,22,279,'a:21:{i:0;i:13;i:1;i:16;i:2;i:9;i:3;i:8;i:4;i:2;i:6;i:4;i:7;i:2;i:8;i:6;i:9;i:1;i:10;i:6;i:11;i:4;i:12;i:16;i:13;i:1;i:14;i:83;i:17;i:2;i:18;i:87;i:19;i:1;i:20;i:2;i:21;i:12;i:22;i:2;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (93,2016,4,23,13,237,'a:22:{i:0;i:27;i:1;i:32;i:2;i:1;i:3;i:3;i:4;i:1;i:5;i:2;i:7;i:8;i:8;i:3;i:9;i:65;i:10;i:8;i:12;i:16;i:13;i:26;i:14;i:7;i:15;i:3;i:16;i:2;i:17;i:1;i:18;i:4;i:19;i:10;i:20;i:4;i:21;i:1;i:22;i:4;i:23;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (94,2016,4,24,22,694,'a:21:{i:0;i:12;i:2;i:6;i:3;i:1;i:5;i:1;i:6;i:3;i:7;i:2;i:8;i:47;i:9;i:6;i:10;i:17;i:11;i:1;i:12;i:20;i:13;i:5;i:14;i:4;i:15;i:1;i:16;i:3;i:17;i:8;i:18;i:8;i:19;i:495;i:20;i:12;i:22;i:5;i:23;i:37;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (95,2016,4,25,23,258,'a:20:{i:0;i:18;i:2;i:2;i:3;i:6;i:7;i:5;i:8;i:7;i:9;i:30;i:10;i:4;i:11;i:4;i:12;i:3;i:13;i:4;i:14;i:1;i:15;i:2;i:16;i:1;i:17;i:5;i:18;i:42;i:19;i:13;i:20;i:4;i:21;i:4;i:22;i:43;i:23;i:60;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (96,2016,4,26,12,159,'a:16:{i:2;i:4;i:3;i:2;i:4;i:1;i:5;i:6;i:7;i:1;i:8;i:49;i:10;i:3;i:12;i:2;i:14;i:1;i:15;i:7;i:17;i:22;i:19;i:2;i:20;i:1;i:21;i:9;i:22;i:39;i:23;i:10;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (97,2016,4,27,19,280,'a:19:{i:0;i:3;i:2;i:1;i:5;i:2;i:7;i:1;i:8;i:1;i:9;i:30;i:10;i:4;i:11;i:15;i:12;i:35;i:13;i:12;i:14;i:4;i:16;i:7;i:17;i:5;i:18;i:95;i:19;i:31;i:20;i:12;i:21;i:12;i:22;i:5;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (98,2016,4,28,17,166,'a:21:{i:0;i:2;i:1;i:2;i:2;i:7;i:3;i:1;i:4;i:3;i:7;i:14;i:8;i:37;i:9;i:6;i:10;i:3;i:11;i:5;i:12;i:1;i:13;i:6;i:14;i:3;i:15;i:4;i:16;i:1;i:17;i:3;i:18;i:5;i:19;i:2;i:21;i:6;i:22;i:27;i:23;i:28;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (99,2016,4,29,12,135,'a:23:{i:0;i:7;i:1;i:3;i:2;i:3;i:3;i:1;i:4;i:6;i:5;i:6;i:6;i:1;i:7;i:1;i:8;i:4;i:9;i:4;i:10;i:4;i:11;i:4;i:13;i:5;i:14;i:16;i:15;i:4;i:16;i:16;i:17;i:8;i:18;i:2;i:19;i:8;i:20;i:12;i:21;i:10;i:22;i:2;i:23;i:8;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (100,2016,4,30,13,155,'a:17:{i:0;i:22;i:1;i:3;i:2;i:4;i:3;i:3;i:7;i:1;i:9;i:6;i:10;i:15;i:11;i:7;i:12;i:5;i:13;i:2;i:14;i:14;i:15;i:9;i:16;i:2;i:18;i:13;i:19;i:27;i:21;i:21;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (101,2016,5,1,18,249,'a:19:{i:0;i:14;i:1;i:3;i:4;i:6;i:5;i:1;i:7;i:6;i:8;i:7;i:9;i:2;i:10;i:8;i:12;i:1;i:13;i:4;i:15;i:4;i:16;i:9;i:17;i:39;i:18;i:6;i:19;i:4;i:20;i:26;i:21;i:61;i:22;i:19;i:23;i:29;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (102,2016,5,2,18,251,'a:20:{i:0;i:1;i:1;i:2;i:3;i:20;i:6;i:2;i:7;i:1;i:8;i:3;i:9;i:4;i:10;i:8;i:11;i:1;i:12;i:2;i:13;i:41;i:14;i:9;i:16;i:1;i:17;i:9;i:18;i:15;i:19;i:45;i:20;i:7;i:21;i:8;i:22;i:22;i:23;i:50;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (103,2016,5,3,23,415,'a:20:{i:0;i:14;i:1;i:5;i:2;i:6;i:4;i:1;i:5;i:33;i:6;i:2;i:8;i:4;i:9;i:1;i:10;i:7;i:11;i:256;i:12;i:6;i:14;i:13;i:15;i:8;i:16;i:10;i:17;i:12;i:18;i:14;i:20;i:8;i:21;i:5;i:22;i:3;i:23;i:7;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (104,2016,5,4,19,136,'a:22:{i:0;i:4;i:1;i:2;i:2;i:1;i:3;i:1;i:4;i:1;i:5;i:2;i:6;i:1;i:7;i:9;i:8;i:16;i:10;i:3;i:11;i:17;i:12;i:7;i:13;i:22;i:14;i:5;i:15;i:1;i:17;i:20;i:18;i:3;i:19;i:6;i:20;i:1;i:21;i:3;i:22;i:2;i:23;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (105,2016,5,5,16,1059,'a:22:{i:0;i:492;i:1;i:1;i:3;i:6;i:4;i:2;i:5;i:32;i:6;i:7;i:7;i:4;i:8;i:2;i:9;i:9;i:10;i:4;i:11;i:1;i:12;i:19;i:13;i:5;i:14;i:2;i:15;i:8;i:17;i:3;i:18;i:2;i:19;i:15;i:20;i:4;i:21;i:53;i:22;i:206;i:23;i:182;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (106,2016,5,6,19,591,'a:23:{i:0;i:127;i:1;i:1;i:2;i:2;i:3;i:2;i:4;i:40;i:5;i:2;i:7;i:6;i:8;i:134;i:9;i:64;i:10;i:51;i:11;i:7;i:12;i:2;i:13;i:66;i:14;i:2;i:15;i:6;i:16;i:2;i:17;i:11;i:18;i:9;i:19;i:6;i:20;i:6;i:21;i:29;i:22;i:1;i:23;i:15;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (107,2016,5,7,19,355,'a:24:{i:0;i:3;i:1;i:1;i:2;i:3;i:3;i:1;i:4;i:4;i:5;i:19;i:6;i:3;i:7;i:2;i:8;i:4;i:9;i:22;i:10;i:12;i:11;i:71;i:12;i:28;i:13;i:8;i:14;i:100;i:15;i:7;i:16;i:1;i:17;i:4;i:18;i:14;i:19;i:26;i:20;i:9;i:21;i:2;i:22;i:8;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (108,2016,5,8,17,349,'a:23:{i:0;i:2;i:1;i:3;i:2;i:6;i:3;i:1;i:4;i:14;i:5;i:9;i:6;i:3;i:7;i:6;i:8;i:2;i:9;i:3;i:10;i:24;i:11;i:15;i:12;i:31;i:14;i:120;i:15;i:5;i:16;i:2;i:17;i:3;i:18;i:1;i:19;i:2;i:20;i:8;i:21;i:6;i:22;i:9;i:23;i:74;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (109,2016,5,9,14,305,'a:19:{i:0;i:155;i:1;i:2;i:2;i:11;i:3;i:3;i:5;i:4;i:6;i:6;i:7;i:2;i:9;i:3;i:10;i:11;i:11;i:5;i:12;i:7;i:13;i:12;i:16;i:8;i:17;i:48;i:18;i:6;i:19;i:11;i:21;i:2;i:22;i:8;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (110,2016,5,10,16,1343,'a:23:{i:0;i:23;i:1;i:1;i:2;i:87;i:3;i:392;i:4;i:176;i:5;i:5;i:6;i:2;i:7;i:17;i:8;i:57;i:9;i:8;i:10;i:6;i:11;i:4;i:12;i:1;i:13;i:24;i:14;i:159;i:15;i:4;i:16;i:2;i:17;i:7;i:18;i:7;i:19;i:5;i:20;i:6;i:21;i:5;i:23;i:345;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (111,2016,5,11,16,180,'a:22:{i:0;i:3;i:2;i:3;i:3;i:4;i:4;i:6;i:5;i:2;i:6;i:19;i:7;i:1;i:8;i:12;i:9;i:4;i:10;i:6;i:11;i:7;i:12;i:8;i:13;i:50;i:14;i:2;i:15;i:9;i:16;i:2;i:17;i:1;i:19;i:1;i:20;i:20;i:21;i:4;i:22;i:11;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (112,2016,5,12,17,428,'a:23:{i:0;i:21;i:1;i:112;i:2;i:68;i:3;i:96;i:4;i:6;i:5;i:3;i:6;i:3;i:7;i:4;i:9;i:6;i:10;i:15;i:11;i:3;i:12;i:9;i:13;i:7;i:14;i:10;i:15;i:11;i:16;i:15;i:17;i:2;i:18;i:8;i:19;i:14;i:20;i:3;i:21;i:3;i:22;i:4;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (113,2016,5,13,14,1144,'a:22:{i:0;i:3;i:1;i:34;i:2;i:265;i:3;i:44;i:4;i:466;i:5;i:3;i:6;i:1;i:8;i:1;i:9;i:11;i:10;i:28;i:11;i:6;i:12;i:4;i:14;i:90;i:15;i:123;i:16;i:1;i:17;i:18;i:18;i:2;i:19;i:12;i:20;i:7;i:21;i:4;i:22;i:15;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (114,2016,5,14,12,118,'a:21:{i:0;i:2;i:1;i:3;i:2;i:2;i:3;i:3;i:4;i:2;i:6;i:1;i:8;i:5;i:9;i:4;i:10;i:4;i:11;i:5;i:12;i:9;i:13;i:12;i:14;i:3;i:15;i:5;i:16;i:5;i:17;i:3;i:18;i:4;i:20;i:16;i:21;i:1;i:22;i:7;i:23;i:22;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (115,2016,5,15,21,691,'a:23:{i:0;i:39;i:1;i:3;i:2;i:7;i:3;i:4;i:4;i:246;i:5;i:221;i:6;i:10;i:7;i:8;i:8;i:5;i:9;i:22;i:10;i:4;i:11;i:10;i:12;i:13;i:13;i:6;i:15;i:24;i:16;i:8;i:17;i:12;i:18;i:7;i:19;i:9;i:20;i:4;i:21;i:6;i:22;i:17;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (116,2016,5,16,21,352,'a:22:{i:0;i:1;i:1;i:3;i:2;i:1;i:3;i:2;i:5;i:4;i:6;i:97;i:7;i:1;i:8;i:7;i:9;i:4;i:10;i:1;i:11;i:61;i:12;i:4;i:13;i:45;i:14;i:6;i:15;i:7;i:16;i:3;i:17;i:13;i:18;i:50;i:19;i:5;i:20;i:18;i:21;i:18;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (117,2016,5,17,14,841,'a:22:{i:0;i:8;i:1;i:2;i:2;i:3;i:3;i:1;i:4;i:1;i:5;i:116;i:7;i:2;i:8;i:2;i:9;i:30;i:10;i:9;i:11;i:1;i:13;i:103;i:14;i:38;i:15;i:236;i:16;i:4;i:17;i:2;i:18;i:1;i:19;i:2;i:20;i:3;i:21;i:9;i:22;i:62;i:23;i:206;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (118,2016,5,18,23,1153,'a:24:{i:0;i:1;i:1;i:17;i:2;i:13;i:3;i:4;i:4;i:5;i:5;i:3;i:6;i:415;i:7;i:6;i:8;i:2;i:9;i:1;i:10;i:2;i:11;i:11;i:12;i:43;i:13;i:2;i:14;i:2;i:15;i:11;i:16;i:36;i:17;i:505;i:18;i:42;i:19;i:4;i:20;i:9;i:21;i:9;i:22;i:8;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (119,2016,5,19,18,396,'a:22:{i:0;i:30;i:1;i:131;i:2;i:1;i:3;i:2;i:4;i:1;i:5;i:48;i:6;i:1;i:7;i:2;i:8;i:54;i:9;i:17;i:10;i:2;i:11;i:5;i:14;i:9;i:15;i:4;i:16;i:3;i:17;i:1;i:18;i:20;i:19;i:14;i:20;i:29;i:21;i:15;i:22;i:6;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (120,2016,5,20,17,704,'a:24:{i:0;i:2;i:1;i:2;i:2;i:3;i:3;i:7;i:4;i:7;i:5;i:1;i:6;i:4;i:7;i:199;i:8;i:9;i:9;i:37;i:10;i:2;i:11;i:7;i:12;i:1;i:13;i:4;i:14;i:13;i:15;i:2;i:16;i:36;i:17;i:11;i:18;i:4;i:19;i:4;i:20;i:29;i:21;i:24;i:22;i:294;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (121,2016,5,21,15,1364,'a:24:{i:0;i:4;i:1;i:1;i:2;i:2;i:3;i:3;i:4;i:8;i:5;i:5;i:6;i:1;i:7;i:4;i:8;i:444;i:9;i:263;i:10;i:8;i:11;i:36;i:12;i:251;i:13;i:13;i:14;i:3;i:15;i:10;i:16;i:153;i:17;i:4;i:18;i:47;i:19;i:38;i:20;i:6;i:21;i:28;i:22;i:7;i:23;i:25;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (122,2016,5,22,16,845,'a:23:{i:0;i:1;i:1;i:1;i:2;i:2;i:3;i:2;i:4;i:61;i:5;i:3;i:6;i:60;i:7;i:38;i:8;i:5;i:9;i:3;i:10;i:119;i:11;i:182;i:12;i:3;i:13;i:2;i:15;i:18;i:16;i:6;i:17;i:221;i:18;i:6;i:19;i:2;i:20;i:61;i:21;i:15;i:22;i:32;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (123,2016,5,23,15,253,'a:22:{i:0;i:7;i:2;i:1;i:3;i:5;i:4;i:7;i:5;i:8;i:6;i:6;i:7;i:19;i:8;i:4;i:9;i:4;i:10;i:1;i:11;i:3;i:12;i:4;i:13;i:2;i:14;i:40;i:15;i:10;i:16;i:2;i:17;i:2;i:18;i:5;i:19;i:1;i:20;i:30;i:21;i:58;i:22;i:34;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (124,2016,5,24,13,320,'a:23:{i:0;i:25;i:1;i:5;i:2;i:1;i:3;i:9;i:4;i:1;i:5;i:3;i:6;i:124;i:7;i:7;i:8;i:7;i:9;i:39;i:10;i:1;i:11;i:6;i:12;i:1;i:14;i:11;i:15;i:9;i:16;i:18;i:17;i:17;i:18;i:3;i:19;i:19;i:20;i:1;i:21;i:1;i:22;i:9;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (125,2016,5,25,17,962,'a:23:{i:0;i:2;i:2;i:3;i:3;i:1;i:4;i:14;i:5;i:5;i:6;i:149;i:7;i:361;i:8;i:5;i:9;i:1;i:10;i:79;i:11;i:43;i:12;i:5;i:13;i:6;i:14;i:14;i:15;i:1;i:16;i:11;i:17;i:1;i:18;i:2;i:19;i:6;i:20;i:1;i:21;i:11;i:22;i:220;i:23;i:21;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (126,2016,5,26,13,319,'a:21:{i:0;i:72;i:1;i:1;i:2;i:2;i:4;i:2;i:6;i:2;i:7;i:2;i:8;i:2;i:9;i:14;i:10;i:4;i:11;i:3;i:12;i:1;i:13;i:1;i:14;i:1;i:16;i:10;i:17;i:147;i:18;i:39;i:19;i:1;i:20;i:1;i:21;i:1;i:22;i:6;i:23;i:7;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (127,2016,5,27,13,186,'a:19:{i:0;i:29;i:3;i:1;i:4;i:5;i:5;i:5;i:6;i:8;i:8;i:5;i:9;i:8;i:10;i:4;i:11;i:1;i:12;i:3;i:13;i:7;i:14;i:3;i:16;i:85;i:17;i:3;i:18;i:3;i:19;i:9;i:20;i:4;i:21;i:2;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (128,2016,5,28,13,395,'a:23:{i:0;i:12;i:1;i:2;i:2;i:92;i:3;i:106;i:4;i:3;i:5;i:1;i:6;i:2;i:7;i:6;i:8;i:1;i:9;i:1;i:10;i:3;i:12;i:30;i:13;i:8;i:14;i:65;i:15;i:11;i:16;i:6;i:17;i:6;i:18;i:18;i:19;i:10;i:20;i:4;i:21;i:2;i:22;i:4;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (129,2016,5,29,25,562,'a:22:{i:0;i:42;i:1;i:4;i:2;i:1;i:4;i:13;i:6;i:229;i:7;i:4;i:8;i:8;i:9;i:17;i:10;i:23;i:11;i:6;i:12;i:9;i:13;i:1;i:14;i:6;i:15;i:11;i:16;i:8;i:17;i:7;i:18;i:22;i:19;i:18;i:20;i:2;i:21;i:44;i:22;i:79;i:23;i:8;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (130,2016,5,30,20,539,'a:22:{i:0;i:1;i:1;i:1;i:2;i:3;i:3;i:3;i:6;i:1;i:7;i:173;i:8;i:32;i:9;i:1;i:10;i:1;i:11;i:7;i:12;i:25;i:13;i:16;i:14;i:17;i:15;i:178;i:16;i:48;i:17;i:1;i:18;i:3;i:19;i:1;i:20;i:2;i:21;i:2;i:22;i:2;i:23;i:21;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (131,2016,5,31,16,209,'a:20:{i:0;i:49;i:4;i:6;i:5;i:2;i:6;i:2;i:7;i:2;i:8;i:1;i:9;i:7;i:10;i:5;i:11;i:3;i:12;i:3;i:13;i:42;i:14;i:9;i:15;i:3;i:16;i:7;i:17;i:4;i:18;i:2;i:20;i:31;i:21;i:24;i:22;i:1;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (132,2016,6,1,12,587,'a:19:{i:1;i:2;i:3;i:2;i:4;i:1;i:5;i:93;i:6;i:1;i:8;i:6;i:9;i:23;i:10;i:262;i:11;i:4;i:12;i:20;i:13;i:1;i:14;i:2;i:15;i:7;i:16;i:9;i:18;i:1;i:19;i:7;i:20;i:4;i:22;i:25;i:23;i:117;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (133,2016,6,2,20,819,'a:23:{i:0;i:2;i:2;i:2;i:3;i:34;i:4;i:1;i:5;i:11;i:6;i:6;i:7;i:1;i:8;i:2;i:9;i:2;i:10;i:2;i:11;i:4;i:12;i:29;i:13;i:206;i:14;i:40;i:15;i:6;i:16;i:47;i:17;i:13;i:18;i:3;i:19;i:56;i:20;i:300;i:21;i:9;i:22;i:39;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (134,2016,6,3,16,222,'a:24:{i:0;i:34;i:1;i:6;i:2;i:6;i:3;i:7;i:4;i:13;i:5;i:5;i:6;i:1;i:7;i:3;i:8;i:4;i:9;i:1;i:10;i:7;i:11;i:36;i:12;i:15;i:13;i:21;i:14;i:6;i:15;i:5;i:16;i:5;i:17;i:2;i:18;i:15;i:19;i:17;i:20;i:3;i:21;i:8;i:22;i:1;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (135,2016,6,4,10,995,'a:22:{i:0;i:1;i:1;i:2;i:2;i:6;i:4;i:3;i:5;i:1;i:6;i:124;i:7;i:10;i:8;i:1;i:9;i:1;i:10;i:3;i:11;i:2;i:12;i:13;i:13;i:395;i:14;i:107;i:15;i:86;i:16;i:10;i:17;i:2;i:18;i:4;i:19;i:2;i:20;i:2;i:21;i:77;i:22;i:143;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (136,2016,6,5,18,110,'a:22:{i:0;i:2;i:1;i:1;i:3;i:1;i:4;i:1;i:5;i:2;i:6;i:1;i:7;i:1;i:8;i:4;i:9;i:2;i:10;i:10;i:11;i:9;i:13;i:1;i:14;i:4;i:15;i:1;i:16;i:8;i:17;i:26;i:18;i:2;i:19;i:5;i:20;i:9;i:21;i:14;i:22;i:2;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (137,2016,6,6,13,1093,'a:24:{i:0;i:15;i:1;i:3;i:2;i:1;i:3;i:3;i:4;i:2;i:5;i:2;i:6;i:3;i:7;i:1;i:8;i:7;i:9;i:29;i:10;i:2;i:11;i:8;i:12;i:10;i:13;i:603;i:14;i:1;i:15;i:2;i:16;i:3;i:17;i:5;i:18;i:101;i:19;i:11;i:20;i:3;i:21;i:4;i:22;i:115;i:23;i:159;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (138,2016,6,7,23,207,'a:23:{i:0;i:20;i:2;i:5;i:3;i:17;i:4;i:1;i:5;i:2;i:6;i:7;i:7;i:2;i:8;i:24;i:9;i:25;i:10;i:3;i:11;i:7;i:12;i:4;i:13;i:28;i:14;i:3;i:15;i:1;i:16;i:10;i:17;i:10;i:18;i:15;i:19;i:4;i:20;i:10;i:21;i:3;i:22;i:1;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (139,2016,6,8,15,426,'a:22:{i:0;i:21;i:1;i:4;i:2;i:6;i:3;i:4;i:4;i:4;i:6;i:1;i:7;i:3;i:8;i:4;i:9;i:3;i:10;i:32;i:11;i:2;i:13;i:4;i:14;i:1;i:15;i:1;i:16;i:5;i:17;i:79;i:18;i:16;i:19;i:5;i:20;i:13;i:21;i:42;i:22;i:46;i:23;i:130;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (140,2016,6,9,17,403,'a:23:{i:0;i:3;i:1;i:3;i:2;i:4;i:3;i:91;i:4;i:3;i:5;i:4;i:6;i:5;i:7;i:12;i:9;i:6;i:10;i:49;i:11;i:96;i:12;i:2;i:13;i:4;i:14;i:62;i:15;i:4;i:16;i:5;i:17;i:2;i:18;i:26;i:19;i:5;i:20;i:3;i:21;i:4;i:22;i:5;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (141,2016,6,10,24,1299,'a:24:{i:0;i:1;i:1;i:3;i:2;i:351;i:3;i:1;i:4;i:75;i:5;i:7;i:6;i:13;i:7;i:2;i:8;i:10;i:9;i:36;i:10;i:20;i:11;i:7;i:12;i:308;i:13;i:8;i:14;i:21;i:15;i:7;i:16;i:1;i:17;i:4;i:18;i:9;i:19;i:162;i:20;i:166;i:21;i:56;i:22;i:19;i:23;i:12;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (142,2016,6,11,20,111,'a:20:{i:0;i:3;i:1;i:2;i:2;i:1;i:3;i:1;i:6;i:1;i:7;i:16;i:8;i:5;i:9;i:7;i:10;i:9;i:11;i:6;i:12;i:3;i:13;i:5;i:14;i:7;i:15;i:8;i:16;i:5;i:17;i:13;i:18;i:7;i:20;i:6;i:21;i:5;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (143,2016,6,12,11,980,'a:22:{i:0;i:6;i:1;i:12;i:2;i:3;i:3;i:7;i:5;i:7;i:6;i:5;i:7;i:70;i:8;i:7;i:9;i:5;i:10;i:1;i:11;i:2;i:12;i:2;i:14;i:2;i:15;i:17;i:16;i:201;i:17;i:15;i:18;i:302;i:19;i:7;i:20;i:22;i:21;i:3;i:22;i:3;i:23;i:281;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (144,2016,6,13,23,419,'a:24:{i:0;i:17;i:1;i:1;i:2;i:1;i:3;i:1;i:4;i:1;i:5;i:6;i:6;i:2;i:7;i:2;i:8;i:47;i:9;i:7;i:10;i:9;i:11;i:3;i:12;i:1;i:13;i:91;i:14;i:98;i:15;i:14;i:16;i:3;i:17;i:38;i:18;i:29;i:19;i:3;i:20;i:30;i:21;i:7;i:22;i:2;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (145,2016,6,14,26,1782,'a:23:{i:0;i:212;i:1;i:10;i:2;i:2;i:3;i:1;i:4;i:10;i:5;i:4;i:7;i:5;i:8;i:18;i:9;i:5;i:10;i:26;i:11;i:1;i:12;i:6;i:13;i:5;i:14;i:426;i:15;i:83;i:16;i:8;i:17;i:830;i:18;i:46;i:19;i:33;i:20;i:6;i:21;i:33;i:22;i:9;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (146,2016,6,15,22,553,'a:20:{i:0;i:3;i:3;i:2;i:5;i:1;i:6;i:16;i:7;i:21;i:8;i:60;i:9;i:71;i:10;i:54;i:11;i:21;i:12;i:40;i:13;i:67;i:14;i:14;i:15;i:4;i:16;i:2;i:17;i:56;i:18;i:14;i:19;i:27;i:21;i:7;i:22;i:68;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (147,2016,6,16,13,350,'a:20:{i:1;i:1;i:2;i:7;i:3;i:1;i:4;i:4;i:6;i:3;i:7;i:208;i:8;i:7;i:9;i:13;i:10;i:12;i:11;i:8;i:12;i:1;i:13;i:1;i:14;i:3;i:15;i:10;i:16;i:1;i:18;i:3;i:19;i:25;i:20;i:15;i:22;i:17;i:23;i:10;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (148,2016,6,17,21,836,'a:24:{i:0;i:2;i:1;i:2;i:2;i:1;i:3;i:10;i:4;i:15;i:5;i:3;i:6;i:1;i:7;i:24;i:8;i:13;i:9;i:34;i:10;i:22;i:11;i:23;i:12;i:1;i:13;i:11;i:14;i:31;i:15;i:10;i:16;i:15;i:17;i:256;i:18;i:9;i:19;i:304;i:20;i:12;i:21;i:1;i:22;i:4;i:23;i:32;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (149,2016,6,18,12,683,'a:20:{i:0;i:11;i:1;i:8;i:2;i:1;i:3;i:1;i:4;i:3;i:5;i:3;i:6;i:3;i:7;i:33;i:8;i:1;i:11;i:1;i:12;i:2;i:13;i:5;i:14;i:2;i:15;i:2;i:17;i:8;i:19;i:2;i:20;i:1;i:21;i:1;i:22;i:3;i:23;i:592;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (150,2016,6,19,6,958,'a:23:{i:0;i:153;i:1;i:5;i:2;i:1;i:3;i:8;i:4;i:96;i:5;i:2;i:6;i:4;i:7;i:16;i:8;i:29;i:9;i:5;i:10;i:13;i:11;i:2;i:12;i:1;i:13;i:1;i:14;i:90;i:15;i:3;i:16;i:89;i:17;i:254;i:18;i:28;i:19;i:1;i:20;i:1;i:21;i:147;i:23;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (151,2016,6,20,13,633,'a:17:{i:0;i:3;i:3;i:18;i:4;i:22;i:6;i:1;i:8;i:2;i:9;i:1;i:10;i:5;i:11;i:5;i:12;i:3;i:13;i:27;i:14;i:7;i:15;i:11;i:16;i:77;i:17;i:313;i:18;i:134;i:21;i:3;i:22;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (152,2016,6,21,20,338,'a:23:{i:0;i:1;i:1;i:2;i:2;i:7;i:3;i:1;i:4;i:1;i:6;i:3;i:7;i:1;i:8;i:30;i:9;i:3;i:10;i:4;i:11;i:4;i:12;i:6;i:13;i:3;i:14;i:68;i:15;i:100;i:16;i:2;i:17;i:21;i:18;i:5;i:19;i:8;i:20;i:2;i:21;i:8;i:22;i:2;i:23;i:56;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (153,2016,6,22,13,239,'a:21:{i:0;i:1;i:1;i:7;i:2;i:1;i:3;i:4;i:5;i:1;i:6;i:4;i:7;i:6;i:8;i:1;i:9;i:1;i:10;i:5;i:11;i:4;i:12;i:2;i:14;i:1;i:15;i:2;i:16;i:10;i:18;i:1;i:19;i:2;i:20;i:5;i:21;i:11;i:22;i:165;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (154,2016,6,23,21,545,'a:21:{i:0;i:4;i:1;i:1;i:2;i:4;i:3;i:1;i:5;i:49;i:6;i:265;i:7;i:7;i:8;i:51;i:11;i:40;i:12;i:2;i:13;i:3;i:14;i:29;i:15;i:47;i:16;i:2;i:17;i:3;i:18;i:13;i:19;i:3;i:20;i:6;i:21;i:7;i:22;i:4;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (155,2016,6,24,11,1001,'a:22:{i:0;i:3;i:2;i:1;i:3;i:4;i:4;i:2;i:5;i:188;i:6;i:3;i:7;i:1;i:8;i:3;i:9;i:2;i:10;i:601;i:11;i:136;i:13;i:2;i:14;i:14;i:15;i:1;i:16;i:1;i:17;i:1;i:18;i:4;i:19;i:3;i:20;i:1;i:21;i:16;i:22;i:6;i:23;i:8;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (156,2016,6,25,17,1060,'a:23:{i:0;i:1;i:1;i:1;i:2;i:93;i:3;i:375;i:4;i:124;i:5;i:92;i:6;i:7;i:7;i:20;i:8;i:4;i:9;i:2;i:10;i:4;i:11;i:2;i:12;i:1;i:13;i:4;i:14;i:1;i:15;i:11;i:17;i:4;i:18;i:5;i:19;i:74;i:20;i:214;i:21;i:7;i:22;i:2;i:23;i:12;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (157,2016,6,26,14,1377,'a:23:{i:0;i:1;i:1;i:39;i:2;i:562;i:3;i:3;i:4;i:1;i:5;i:4;i:6;i:3;i:7;i:2;i:8;i:8;i:9;i:7;i:10;i:7;i:11;i:19;i:12;i:6;i:13;i:6;i:14;i:3;i:15;i:6;i:16;i:42;i:18;i:10;i:19;i:19;i:20;i:5;i:21;i:2;i:22;i:135;i:23;i:487;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (158,2016,6,27,24,185,'a:20:{i:0;i:8;i:1;i:9;i:2;i:1;i:3;i:3;i:6;i:3;i:7;i:3;i:9;i:3;i:10;i:6;i:11;i:29;i:12;i:2;i:13;i:6;i:14;i:38;i:15;i:11;i:16;i:9;i:17;i:3;i:18;i:24;i:19;i:10;i:21;i:2;i:22;i:7;i:23;i:8;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (159,2016,6,28,13,137,'a:23:{i:0;i:3;i:1;i:2;i:2;i:1;i:3;i:1;i:4;i:2;i:5;i:2;i:6;i:3;i:7;i:8;i:8;i:1;i:9;i:5;i:10;i:1;i:11;i:13;i:12;i:2;i:13;i:12;i:14;i:6;i:15;i:1;i:16;i:2;i:17;i:3;i:18;i:29;i:19;i:3;i:21;i:6;i:22;i:6;i:23;i:25;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (160,2016,6,29,15,356,'a:23:{i:0;i:10;i:1;i:3;i:2;i:3;i:4;i:183;i:5;i:1;i:6;i:3;i:7;i:4;i:8;i:8;i:9;i:4;i:10;i:8;i:11;i:2;i:12;i:3;i:13;i:53;i:14;i:38;i:15;i:9;i:16;i:3;i:17;i:1;i:18;i:1;i:19;i:3;i:20;i:9;i:21;i:4;i:22;i:2;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (161,2016,6,30,19,719,'a:21:{i:1;i:2;i:2;i:3;i:4;i:18;i:5;i:2;i:6;i:3;i:7;i:2;i:8;i:309;i:9;i:15;i:10;i:6;i:11;i:249;i:12;i:14;i:13;i:14;i:14;i:1;i:15;i:2;i:16;i:2;i:18;i:8;i:19;i:39;i:20;i:19;i:21;i:3;i:22;i:2;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (162,2016,7,1,18,441,'a:21:{i:2;i:4;i:3;i:2;i:4;i:5;i:5;i:1;i:6;i:1;i:7;i:4;i:8;i:9;i:9;i:36;i:10;i:36;i:11;i:1;i:12;i:234;i:13;i:14;i:14;i:12;i:15;i:1;i:16;i:20;i:18;i:22;i:19;i:8;i:20;i:14;i:21;i:5;i:22;i:4;i:23;i:8;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (163,2016,7,2,18,283,'a:22:{i:0;i:38;i:1;i:9;i:2;i:15;i:3;i:4;i:4;i:2;i:5;i:7;i:7;i:2;i:8;i:1;i:9;i:7;i:10;i:6;i:11;i:1;i:12;i:21;i:13;i:11;i:14;i:93;i:15;i:3;i:16;i:3;i:17;i:19;i:18;i:2;i:19;i:12;i:20;i:10;i:21;i:16;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (164,2016,7,3,14,699,'a:23:{i:0;i:2;i:1;i:1;i:2;i:250;i:4;i:3;i:5;i:2;i:6;i:151;i:7;i:3;i:8;i:8;i:9;i:6;i:10;i:3;i:11;i:14;i:12;i:1;i:13;i:19;i:14;i:2;i:15;i:3;i:16;i:3;i:17;i:1;i:18;i:3;i:19;i:147;i:20;i:61;i:21;i:3;i:22;i:4;i:23;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (165,2016,7,4,13,258,'a:21:{i:0;i:1;i:1;i:6;i:2;i:53;i:3;i:2;i:4;i:3;i:5;i:3;i:6;i:5;i:7;i:1;i:9;i:3;i:10;i:4;i:11;i:2;i:12;i:12;i:13;i:2;i:14;i:3;i:15;i:3;i:16;i:1;i:17;i:2;i:19;i:105;i:20;i:3;i:22;i:14;i:23;i:30;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (166,2016,7,5,11,665,'a:22:{i:0;i:1;i:1;i:1;i:2;i:4;i:4;i:2;i:5;i:3;i:7;i:8;i:8;i:1;i:9;i:503;i:10;i:32;i:11;i:14;i:12;i:6;i:13;i:3;i:14;i:3;i:15;i:3;i:16;i:22;i:17;i:5;i:18;i:2;i:19;i:25;i:20;i:8;i:21;i:3;i:22;i:7;i:23;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (167,2016,7,6,20,370,'a:23:{i:0;i:2;i:1;i:2;i:2;i:2;i:3;i:1;i:4;i:2;i:5;i:2;i:7;i:8;i:8;i:7;i:9;i:25;i:10;i:1;i:11;i:5;i:12;i:27;i:13;i:5;i:14;i:4;i:15;i:3;i:16;i:5;i:17;i:4;i:18;i:153;i:19;i:11;i:20;i:10;i:21;i:50;i:22;i:32;i:23;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (168,2016,7,7,16,237,'a:19:{i:0;i:27;i:1;i:9;i:2;i:15;i:3;i:24;i:4;i:14;i:6;i:65;i:7;i:1;i:8;i:10;i:9;i:2;i:10;i:2;i:12;i:6;i:15;i:2;i:16;i:7;i:18;i:17;i:19;i:2;i:20;i:3;i:21;i:24;i:22;i:2;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (169,2016,7,8,10,323,'a:20:{i:0;i:5;i:1;i:7;i:2;i:1;i:3;i:12;i:4;i:1;i:6;i:45;i:7;i:2;i:8;i:201;i:9;i:2;i:10;i:3;i:11;i:7;i:12;i:9;i:16;i:1;i:17;i:8;i:18;i:1;i:19;i:1;i:20;i:1;i:21;i:6;i:22;i:6;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (170,2016,7,9,13,676,'a:23:{i:0;i:5;i:1;i:3;i:2;i:1;i:3;i:2;i:4;i:4;i:6;i:1;i:7;i:1;i:8;i:2;i:9;i:21;i:10;i:10;i:11;i:3;i:12;i:1;i:13;i:3;i:14;i:1;i:15;i:1;i:16;i:1;i:17;i:20;i:18;i:2;i:19;i:97;i:20;i:2;i:21;i:26;i:22;i:6;i:23;i:463;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (171,2016,7,10,13,388,'a:23:{i:0;i:4;i:1;i:1;i:2;i:2;i:3;i:8;i:4;i:3;i:5;i:1;i:6;i:1;i:7;i:215;i:8;i:12;i:9;i:6;i:10;i:3;i:11;i:1;i:12;i:3;i:13;i:32;i:14;i:1;i:16;i:5;i:17;i:6;i:18;i:4;i:19;i:3;i:20;i:68;i:21;i:1;i:22;i:6;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (172,2016,7,11,10,472,'a:21:{i:0;i:40;i:3;i:3;i:4;i:1;i:5;i:2;i:6;i:6;i:7;i:1;i:8;i:2;i:9;i:2;i:10;i:58;i:11;i:53;i:12;i:211;i:14;i:1;i:15;i:4;i:16;i:45;i:17;i:1;i:18;i:1;i:19;i:1;i:20;i:6;i:21;i:28;i:22;i:2;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (173,2016,7,12,16,502,'a:21:{i:0;i:3;i:1;i:1;i:3;i:3;i:5;i:2;i:6;i:55;i:7;i:1;i:8;i:8;i:10;i:23;i:11;i:1;i:12;i:5;i:13;i:2;i:14;i:119;i:15;i:1;i:16;i:47;i:17;i:2;i:18;i:19;i:19;i:123;i:20;i:41;i:21;i:40;i:22;i:1;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (174,2016,7,13,15,146,'a:20:{i:1;i:1;i:4;i:4;i:5;i:10;i:6;i:4;i:7;i:6;i:8;i:27;i:9;i:6;i:10;i:3;i:11;i:4;i:13;i:2;i:14;i:6;i:15;i:2;i:16;i:11;i:17;i:3;i:18;i:7;i:19;i:7;i:20;i:1;i:21;i:30;i:22;i:6;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (175,2016,7,14,13,621,'a:20:{i:0;i:3;i:1;i:2;i:2;i:179;i:3;i:50;i:4;i:2;i:5;i:1;i:6;i:1;i:7;i:1;i:9;i:37;i:10;i:7;i:11;i:24;i:12;i:267;i:13;i:1;i:14;i:4;i:15;i:17;i:17;i:1;i:18;i:7;i:19;i:6;i:20;i:2;i:21;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (176,2016,7,15,20,710,'a:22:{i:0;i:8;i:2;i:14;i:3;i:4;i:4;i:1;i:5;i:1;i:6;i:1;i:7;i:8;i:8;i:13;i:10;i:12;i:11;i:3;i:12;i:1;i:13;i:3;i:14;i:30;i:15;i:7;i:16;i:12;i:17;i:419;i:18;i:81;i:19;i:59;i:20;i:6;i:21;i:8;i:22;i:11;i:23;i:8;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (177,2016,7,16,13,128,'a:22:{i:0;i:1;i:2;i:4;i:3;i:6;i:4;i:6;i:5;i:1;i:6;i:8;i:7;i:4;i:8;i:4;i:9;i:4;i:10;i:3;i:11;i:18;i:12;i:6;i:13;i:14;i:14;i:6;i:15;i:6;i:16;i:1;i:17;i:1;i:18;i:9;i:19;i:6;i:21;i:2;i:22;i:11;i:23;i:7;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (178,2016,7,17,18,731,'a:22:{i:0;i:2;i:1;i:8;i:2;i:2;i:4;i:1;i:5;i:1;i:6;i:1;i:7;i:4;i:8;i:6;i:10;i:20;i:11;i:7;i:12;i:3;i:13;i:4;i:14;i:34;i:15;i:9;i:16;i:103;i:17;i:80;i:18;i:22;i:19;i:61;i:20;i:356;i:21;i:1;i:22;i:3;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (179,2016,7,18,12,507,'a:23:{i:0;i:3;i:1;i:303;i:2;i:3;i:3;i:3;i:4;i:3;i:5;i:3;i:6;i:2;i:7;i:4;i:8;i:3;i:9;i:1;i:10;i:6;i:11;i:4;i:12;i:9;i:13;i:4;i:14;i:3;i:15;i:5;i:17;i:2;i:18;i:15;i:19;i:8;i:20;i:10;i:21;i:94;i:22;i:1;i:23;i:18;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (180,2016,7,19,17,532,'a:22:{i:0;i:5;i:1;i:5;i:2;i:5;i:5;i:248;i:6;i:2;i:7;i:6;i:8;i:17;i:9;i:20;i:10;i:18;i:11;i:4;i:12;i:3;i:13;i:6;i:14;i:5;i:15;i:3;i:16;i:2;i:17;i:3;i:18;i:2;i:19;i:137;i:20;i:22;i:21;i:9;i:22;i:6;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (181,2016,7,20,11,244,'a:23:{i:0;i:5;i:1;i:2;i:3;i:16;i:4;i:3;i:5;i:3;i:6;i:2;i:7;i:1;i:8;i:2;i:9;i:2;i:10;i:2;i:11;i:10;i:12;i:5;i:13;i:11;i:14;i:4;i:15;i:4;i:16;i:16;i:17;i:3;i:18;i:2;i:19;i:6;i:20;i:19;i:21;i:117;i:22;i:5;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (182,2016,7,21,14,336,'a:24:{i:0;i:2;i:1;i:2;i:2;i:1;i:3;i:5;i:4;i:2;i:5;i:2;i:6;i:4;i:7;i:4;i:8;i:9;i:9;i:82;i:10;i:5;i:11;i:8;i:12;i:17;i:13;i:3;i:14;i:11;i:15;i:29;i:16;i:6;i:17;i:2;i:18;i:28;i:19;i:11;i:20;i:8;i:21;i:45;i:22;i:10;i:23;i:40;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (183,2016,7,22,14,549,'a:23:{i:0;i:1;i:2;i:1;i:3;i:2;i:4;i:4;i:5;i:68;i:6;i:3;i:7;i:3;i:8;i:2;i:9;i:5;i:10;i:13;i:11;i:24;i:12;i:34;i:13;i:1;i:14;i:7;i:15;i:153;i:16;i:4;i:17;i:1;i:18;i:7;i:19;i:6;i:20;i:2;i:21;i:18;i:22;i:97;i:23;i:93;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (184,2016,7,23,17,685,'a:23:{i:0;i:3;i:1;i:2;i:2;i:114;i:3;i:298;i:4;i:3;i:5;i:1;i:7;i:35;i:8;i:6;i:9;i:2;i:10;i:3;i:11;i:16;i:12;i:5;i:13;i:86;i:14;i:4;i:15;i:3;i:16;i:55;i:17;i:6;i:18;i:2;i:19;i:5;i:20;i:2;i:21;i:18;i:22;i:6;i:23;i:10;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (185,2016,7,24,13,593,'a:20:{i:0;i:2;i:1;i:2;i:2;i:1;i:3;i:1;i:6;i:1;i:7;i:2;i:8;i:1;i:11;i:4;i:12;i:2;i:13;i:301;i:14;i:127;i:15;i:49;i:16;i:17;i:17;i:2;i:18;i:8;i:19;i:9;i:20;i:6;i:21;i:30;i:22;i:26;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (186,2016,7,25,22,302,'a:21:{i:3;i:7;i:4;i:26;i:5;i:8;i:6;i:6;i:7;i:105;i:8;i:3;i:9;i:5;i:10;i:7;i:11;i:11;i:12;i:4;i:13;i:5;i:14;i:7;i:15;i:4;i:16;i:6;i:17;i:5;i:18;i:6;i:19;i:7;i:20;i:1;i:21;i:18;i:22;i:23;i:23;i:38;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (187,2016,7,26,19,1608,'a:21:{i:1;i:102;i:2;i:498;i:3;i:271;i:4;i:1;i:6;i:1;i:7;i:5;i:9;i:2;i:10;i:2;i:11;i:3;i:12;i:3;i:13;i:39;i:14;i:305;i:15;i:13;i:16;i:5;i:17;i:1;i:18;i:13;i:19;i:32;i:20;i:147;i:21;i:57;i:22;i:98;i:23;i:10;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (188,2016,7,27,22,616,'a:24:{i:0;i:3;i:1;i:147;i:2;i:1;i:3;i:2;i:4;i:1;i:5;i:2;i:6;i:13;i:7;i:4;i:8;i:37;i:9;i:21;i:10;i:1;i:11;i:12;i:12;i:6;i:13;i:35;i:14;i:3;i:15;i:6;i:16;i:4;i:17;i:24;i:18;i:261;i:19;i:9;i:20;i:2;i:21;i:7;i:22;i:1;i:23;i:14;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (189,2016,7,28,26,462,'a:24:{i:0;i:2;i:1;i:31;i:2;i:1;i:3;i:6;i:4;i:3;i:5;i:4;i:6;i:5;i:7;i:8;i:8;i:5;i:9;i:45;i:10;i:10;i:11;i:64;i:12;i:4;i:13;i:9;i:14;i:86;i:15;i:11;i:16;i:3;i:17;i:21;i:18;i:13;i:19;i:3;i:20;i:74;i:21;i:30;i:22;i:14;i:23;i:10;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (190,2016,7,29,22,731,'a:24:{i:0;i:5;i:1;i:12;i:2;i:4;i:3;i:4;i:4;i:289;i:5;i:2;i:6;i:8;i:7;i:6;i:8;i:7;i:9;i:19;i:10;i:23;i:11;i:19;i:12;i:8;i:13;i:16;i:14;i:2;i:15;i:125;i:16;i:1;i:17;i:7;i:18;i:56;i:19;i:2;i:20;i:17;i:21;i:39;i:22;i:8;i:23;i:52;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (191,2016,7,30,17,174,'a:20:{i:0;i:4;i:1;i:3;i:4;i:2;i:6;i:9;i:7;i:10;i:8;i:1;i:9;i:27;i:10;i:20;i:11;i:5;i:12;i:5;i:13;i:7;i:14;i:10;i:15;i:2;i:17;i:8;i:18;i:5;i:19;i:16;i:20;i:21;i:21;i:8;i:22;i:4;i:23;i:7;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (192,2016,7,31,18,775,'a:24:{i:0;i:4;i:1;i:3;i:2;i:69;i:3;i:52;i:4;i:232;i:5;i:1;i:6;i:1;i:7;i:5;i:8;i:5;i:9;i:9;i:10;i:3;i:11;i:88;i:12;i:54;i:13;i:24;i:14;i:66;i:15;i:39;i:16;i:15;i:17;i:3;i:18;i:39;i:19;i:16;i:20;i:3;i:21;i:29;i:22;i:7;i:23;i:8;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (193,2016,8,1,23,413,'a:22:{i:0;i:10;i:1;i:1;i:2;i:14;i:3;i:1;i:4;i:4;i:5;i:1;i:6;i:22;i:7;i:5;i:8;i:8;i:9;i:106;i:10;i:3;i:11;i:12;i:12;i:76;i:13;i:13;i:14;i:6;i:15;i:10;i:16;i:17;i:17;i:2;i:18;i:6;i:20;i:38;i:21;i:3;i:23;i:55;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (194,2016,8,2,24,1297,'a:22:{i:2;i:607;i:3;i:7;i:4;i:197;i:5;i:6;i:6;i:2;i:7;i:200;i:8;i:13;i:9;i:12;i:10;i:1;i:11;i:2;i:12;i:60;i:13;i:7;i:14;i:2;i:15;i:2;i:16;i:1;i:17;i:3;i:18;i:13;i:19;i:10;i:20;i:2;i:21;i:3;i:22;i:133;i:23;i:14;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (195,2016,8,3,21,285,'a:22:{i:0;i:1;i:1;i:3;i:2;i:2;i:3;i:16;i:4;i:1;i:5;i:2;i:6;i:2;i:7;i:3;i:8;i:5;i:9;i:3;i:10;i:3;i:11;i:73;i:12;i:2;i:13;i:4;i:15;i:3;i:16;i:11;i:17;i:6;i:18;i:3;i:20;i:35;i:21;i:89;i:22;i:14;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (196,2016,8,4,15,429,'a:22:{i:0;i:1;i:1;i:2;i:2;i:3;i:3;i:2;i:4;i:4;i:6;i:1;i:7;i:1;i:8;i:166;i:9;i:4;i:10;i:32;i:11;i:12;i:12;i:83;i:14;i:14;i:15;i:1;i:16;i:2;i:17;i:5;i:18;i:11;i:19;i:4;i:20;i:11;i:21;i:3;i:22;i:2;i:23;i:65;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (197,2016,8,5,22,2333,'a:24:{i:0;i:2;i:1;i:6;i:2;i:3;i:3;i:18;i:4;i:330;i:5;i:261;i:6;i:56;i:7;i:5;i:8;i:359;i:9;i:198;i:10;i:7;i:11;i:1;i:12;i:2;i:13;i:4;i:14;i:9;i:15;i:310;i:16;i:515;i:17;i:158;i:18;i:51;i:19;i:6;i:20;i:2;i:21;i:23;i:22;i:5;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (198,2016,8,6,18,365,'a:23:{i:0;i:90;i:1;i:1;i:2;i:2;i:3;i:9;i:4;i:1;i:5;i:1;i:6;i:8;i:7;i:6;i:9;i:1;i:10;i:3;i:11;i:13;i:12;i:5;i:13;i:3;i:14;i:4;i:15;i:2;i:16;i:2;i:17;i:107;i:18;i:90;i:19;i:4;i:20;i:1;i:21;i:2;i:22;i:9;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (199,2016,8,7,21,617,'a:24:{i:0;i:4;i:1;i:6;i:2;i:4;i:3;i:22;i:4;i:2;i:5;i:2;i:6;i:2;i:7;i:3;i:8;i:6;i:9;i:16;i:10;i:11;i:11;i:10;i:12;i:365;i:13;i:2;i:14;i:71;i:15;i:1;i:16;i:1;i:17;i:4;i:18;i:5;i:19;i:3;i:20;i:4;i:21;i:58;i:22;i:13;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (200,2016,8,8,18,589,'a:23:{i:0;i:8;i:1;i:12;i:2;i:1;i:3;i:6;i:4;i:4;i:5;i:3;i:6;i:51;i:7;i:5;i:8;i:17;i:9;i:208;i:10;i:2;i:11;i:4;i:12;i:7;i:14;i:11;i:15;i:1;i:16;i:5;i:17;i:33;i:18;i:12;i:19;i:4;i:20;i:15;i:21;i:6;i:22;i:6;i:23;i:168;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (201,2016,8,9,22,870,'a:24:{i:0;i:2;i:1;i:2;i:2;i:4;i:3;i:3;i:4;i:1;i:5;i:242;i:6;i:1;i:7;i:6;i:8;i:6;i:9;i:19;i:10;i:7;i:11;i:1;i:12;i:7;i:13;i:6;i:14;i:309;i:15;i:20;i:16;i:120;i:17;i:29;i:18;i:2;i:19;i:3;i:20;i:2;i:21;i:62;i:22;i:10;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (202,2016,8,10,16,1056,'a:24:{i:0;i:5;i:1;i:4;i:2;i:303;i:3;i:167;i:4;i:149;i:5;i:2;i:6;i:3;i:7;i:34;i:8;i:10;i:9;i:4;i:10;i:126;i:11;i:144;i:12;i:8;i:13;i:31;i:14;i:10;i:15;i:20;i:16;i:6;i:17;i:4;i:18;i:2;i:19;i:2;i:20;i:3;i:21;i:4;i:22;i:12;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (203,2016,8,11,14,891,'a:24:{i:0;i:15;i:1;i:4;i:2;i:329;i:3;i:3;i:4;i:2;i:5;i:24;i:6;i:5;i:7;i:2;i:8;i:8;i:9;i:24;i:10;i:8;i:11;i:4;i:12;i:5;i:13;i:32;i:14;i:34;i:15;i:45;i:16;i:2;i:17;i:300;i:18;i:2;i:19;i:2;i:20;i:29;i:21;i:5;i:22;i:5;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (204,2016,8,12,17,453,'a:24:{i:0;i:3;i:1;i:117;i:2;i:106;i:3;i:4;i:4;i:4;i:5;i:14;i:6;i:1;i:7;i:4;i:8;i:9;i:9;i:30;i:10;i:54;i:11;i:15;i:12;i:12;i:13;i:4;i:14;i:9;i:15;i:8;i:16;i:10;i:17;i:9;i:18;i:1;i:19;i:1;i:20;i:18;i:21;i:5;i:22;i:9;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (205,2016,8,13,21,842,'a:24:{i:0;i:1;i:1;i:2;i:2;i:326;i:3;i:4;i:4;i:28;i:5;i:15;i:6;i:6;i:7;i:1;i:8;i:1;i:9;i:6;i:10;i:14;i:11;i:10;i:12;i:5;i:13;i:2;i:14;i:9;i:15;i:4;i:16;i:2;i:17;i:92;i:18;i:1;i:19;i:10;i:20;i:49;i:21;i:178;i:22;i:7;i:23;i:69;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (206,2016,8,14,18,1412,'a:24:{i:0;i:34;i:1;i:4;i:2;i:6;i:3;i:1;i:4;i:2;i:5;i:1;i:6;i:566;i:7;i:307;i:8;i:12;i:9;i:26;i:10;i:183;i:11;i:13;i:12;i:6;i:13;i:1;i:14;i:15;i:15;i:1;i:16;i:20;i:17;i:5;i:18;i:4;i:19;i:18;i:20;i:84;i:21;i:4;i:22;i:55;i:23;i:44;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (207,2016,8,15,20,1167,'a:16:{i:8;i:20;i:9;i:556;i:10;i:12;i:11;i:3;i:12;i:1;i:13;i:5;i:14;i:41;i:15;i:9;i:16;i:1;i:17;i:1;i:18;i:15;i:19;i:9;i:20;i:15;i:21;i:179;i:22;i:158;i:23;i:142;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (208,2016,8,16,25,937,'a:24:{i:0;i:3;i:1;i:3;i:2;i:7;i:3;i:4;i:4;i:3;i:5;i:3;i:6;i:6;i:7;i:6;i:8;i:3;i:9;i:9;i:10;i:29;i:11;i:36;i:12;i:62;i:13;i:18;i:14;i:9;i:15;i:239;i:16;i:176;i:17;i:43;i:18;i:18;i:19;i:12;i:20;i:9;i:21;i:153;i:22;i:10;i:23;i:76;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (209,2016,8,17,25,1367,'a:23:{i:0;i:5;i:1;i:2;i:2;i:2;i:3;i:4;i:4;i:1;i:5;i:3;i:6;i:2;i:7;i:5;i:8;i:32;i:9;i:24;i:10;i:36;i:11;i:9;i:12;i:19;i:13;i:300;i:14;i:3;i:15;i:15;i:16;i:317;i:17;i:202;i:18;i:330;i:19;i:22;i:21;i:8;i:22;i:18;i:23;i:8;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (210,2016,8,18,21,273,'a:24:{i:0;i:9;i:1;i:2;i:2;i:2;i:3;i:2;i:4;i:1;i:5;i:2;i:6;i:3;i:7;i:1;i:8;i:10;i:9;i:60;i:10;i:9;i:11;i:3;i:12;i:11;i:13;i:2;i:14;i:14;i:15;i:6;i:16;i:6;i:17;i:12;i:18;i:8;i:19;i:22;i:20;i:55;i:21;i:2;i:22;i:17;i:23;i:14;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (211,2016,8,19,25,924,'a:22:{i:1;i:3;i:2;i:7;i:3;i:5;i:4;i:1;i:5;i:1;i:6;i:239;i:7;i:11;i:8;i:27;i:9;i:2;i:10;i:9;i:11;i:19;i:12;i:3;i:13;i:32;i:14;i:81;i:15;i:64;i:16;i:44;i:17;i:34;i:18;i:28;i:19;i:299;i:21;i:5;i:22;i:5;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (212,2016,8,20,15,174,'a:12:{i:9;i:19;i:10;i:2;i:11;i:21;i:12;i:28;i:13;i:1;i:14;i:22;i:15;i:9;i:16;i:2;i:17;i:8;i:19;i:51;i:21;i:3;i:23;i:8;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (213,2016,8,21,17,380,'a:23:{i:0;i:1;i:1;i:3;i:2;i:7;i:3;i:2;i:4;i:4;i:5;i:2;i:6;i:3;i:7;i:12;i:8;i:8;i:9;i:5;i:10;i:16;i:11;i:10;i:12;i:24;i:13;i:11;i:14;i:6;i:15;i:10;i:16;i:5;i:17;i:14;i:19;i:4;i:20;i:3;i:21;i:130;i:22;i:57;i:23;i:43;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (214,2016,8,22,13,1134,'a:24:{i:0;i:5;i:1;i:312;i:2;i:38;i:3;i:7;i:4;i:297;i:5;i:3;i:6;i:2;i:7;i:5;i:8;i:47;i:9;i:11;i:10;i:3;i:11;i:3;i:12;i:8;i:13;i:5;i:14;i:171;i:15;i:1;i:16;i:8;i:17;i:116;i:18;i:2;i:19;i:5;i:20;i:3;i:21;i:15;i:22;i:63;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (215,2016,8,23,14,1397,'a:22:{i:0;i:5;i:1;i:2;i:2;i:1;i:3;i:1;i:4;i:1;i:6;i:13;i:7;i:303;i:8;i:2;i:9;i:313;i:10;i:7;i:11;i:373;i:12;i:2;i:13;i:16;i:14;i:3;i:16;i:2;i:17;i:1;i:18;i:107;i:19;i:205;i:20;i:18;i:21;i:3;i:22;i:12;i:23;i:7;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (216,2016,8,24,22,411,'a:23:{i:0;i:7;i:1;i:5;i:2;i:2;i:3;i:1;i:5;i:3;i:6;i:2;i:7;i:8;i:8;i:18;i:9;i:5;i:10;i:5;i:11;i:8;i:12;i:18;i:13;i:2;i:14;i:142;i:15;i:6;i:16;i:5;i:17;i:8;i:18;i:36;i:19;i:6;i:20;i:2;i:21;i:42;i:22;i:37;i:23;i:43;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (217,2016,8,25,21,1723,'a:23:{i:0;i:10;i:1;i:2;i:2;i:2;i:3;i:1;i:4;i:300;i:5;i:1;i:6;i:5;i:7;i:14;i:8;i:186;i:9;i:59;i:10;i:563;i:11;i:353;i:12;i:3;i:13;i:1;i:14;i:2;i:15;i:46;i:16;i:3;i:17;i:3;i:18;i:8;i:19;i:12;i:21;i:31;i:22;i:74;i:23;i:44;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (218,2016,8,26,21,1757,'a:23:{i:0;i:1;i:1;i:10;i:2;i:4;i:3;i:9;i:5;i:306;i:6;i:4;i:7;i:7;i:8;i:313;i:9;i:7;i:10;i:181;i:11;i:26;i:12;i:163;i:13;i:6;i:14;i:7;i:15;i:3;i:16;i:143;i:17;i:27;i:18;i:21;i:19;i:22;i:20;i:57;i:21;i:133;i:22;i:5;i:23;i:302;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (219,2016,8,27,25,418,'a:23:{i:0;i:1;i:2;i:3;i:3;i:2;i:4;i:2;i:5;i:5;i:6;i:2;i:7;i:6;i:8;i:4;i:9;i:8;i:10;i:39;i:11;i:17;i:12;i:3;i:13;i:9;i:14;i:34;i:15;i:37;i:16;i:206;i:17;i:3;i:18;i:17;i:19;i:7;i:20;i:2;i:21;i:3;i:22;i:4;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (220,2016,8,28,17,536,'a:23:{i:0;i:10;i:1;i:4;i:2;i:2;i:3;i:1;i:4;i:1;i:6;i:5;i:7;i:9;i:8;i:28;i:9;i:25;i:10;i:7;i:11;i:46;i:12;i:18;i:13;i:7;i:14;i:11;i:15;i:26;i:16;i:8;i:17;i:15;i:18;i:40;i:19;i:140;i:20;i:54;i:21;i:16;i:22;i:4;i:23;i:59;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (221,2016,8,29,21,853,'a:24:{i:0;i:5;i:1;i:4;i:2;i:4;i:3;i:1;i:4;i:1;i:5;i:1;i:6;i:8;i:7;i:22;i:8;i:182;i:9;i:57;i:10;i:245;i:11;i:54;i:12;i:3;i:13;i:49;i:14;i:7;i:15;i:13;i:16;i:154;i:17;i:2;i:18;i:5;i:19;i:9;i:20;i:5;i:21;i:8;i:22;i:8;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (222,2016,8,30,17,305,'a:23:{i:0;i:3;i:1;i:4;i:3;i:1;i:4;i:3;i:5;i:1;i:6;i:13;i:7;i:169;i:8;i:11;i:9;i:4;i:10;i:14;i:11;i:6;i:12;i:2;i:13;i:3;i:14;i:4;i:15;i:1;i:16;i:1;i:17;i:1;i:18;i:6;i:19;i:13;i:20;i:18;i:21;i:15;i:22;i:9;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (223,2016,8,31,13,734,'a:23:{i:0;i:9;i:1;i:10;i:3;i:7;i:4;i:1;i:5;i:6;i:6;i:6;i:7;i:2;i:8;i:2;i:9;i:13;i:10;i:17;i:11;i:4;i:12;i:5;i:13;i:3;i:14;i:3;i:15;i:89;i:16;i:18;i:17;i:56;i:18;i:7;i:19;i:311;i:20;i:138;i:21;i:10;i:22;i:10;i:23;i:7;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (224,2016,9,1,20,1286,'a:24:{i:0;i:55;i:1;i:26;i:2;i:5;i:3;i:317;i:4;i:172;i:5;i:1;i:6;i:4;i:7;i:2;i:8;i:7;i:9;i:65;i:10;i:74;i:11;i:28;i:12;i:61;i:13;i:205;i:14;i:3;i:15;i:2;i:16;i:84;i:17;i:6;i:18;i:39;i:19;i:27;i:20;i:11;i:21;i:11;i:22;i:2;i:23;i:79;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (225,2016,9,2,15,625,'a:22:{i:0;i:92;i:1;i:3;i:2;i:5;i:3;i:5;i:4;i:4;i:5;i:48;i:6;i:2;i:7;i:11;i:8;i:2;i:9;i:6;i:11;i:36;i:12;i:1;i:13;i:4;i:14;i:2;i:15;i:155;i:16;i:16;i:17;i:101;i:18;i:37;i:20;i:61;i:21;i:6;i:22;i:1;i:23;i:27;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (226,2016,9,3,28,863,'a:24:{i:0;i:196;i:1;i:307;i:2;i:6;i:3;i:3;i:4;i:7;i:5;i:3;i:6;i:170;i:7;i:2;i:8;i:5;i:9;i:10;i:10;i:12;i:11;i:13;i:12;i:11;i:13;i:13;i:14;i:7;i:15;i:34;i:16;i:4;i:17;i:8;i:18;i:19;i:19;i:16;i:20;i:4;i:21;i:11;i:22;i:1;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (227,2016,9,4,19,1943,'a:24:{i:0;i:4;i:1;i:145;i:2;i:341;i:3;i:10;i:4;i:2;i:5;i:6;i:6;i:63;i:7;i:8;i:8;i:22;i:9;i:22;i:10;i:29;i:11;i:20;i:12;i:64;i:13;i:833;i:14;i:304;i:15;i:8;i:16;i:21;i:17;i:4;i:18;i:9;i:19;i:9;i:20;i:7;i:21;i:3;i:22;i:4;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (228,2016,9,5,10,1215,'a:24:{i:0;i:6;i:1;i:167;i:2;i:1;i:3;i:3;i:4;i:95;i:5;i:401;i:6;i:4;i:7;i:4;i:8;i:87;i:9;i:7;i:10;i:1;i:11;i:105;i:12;i:6;i:13;i:152;i:14;i:11;i:15;i:9;i:16;i:5;i:17;i:43;i:18;i:17;i:19;i:39;i:20;i:5;i:21;i:25;i:22;i:13;i:23;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (229,2016,9,6,19,483,'a:24:{i:0;i:8;i:1;i:141;i:2;i:11;i:3;i:4;i:4;i:3;i:5;i:4;i:6;i:4;i:7;i:9;i:8;i:6;i:9;i:2;i:10;i:7;i:11;i:4;i:12;i:4;i:13;i:74;i:14;i:11;i:15;i:2;i:16;i:7;i:17;i:13;i:18;i:1;i:19;i:27;i:20;i:96;i:21;i:22;i:22;i:10;i:23;i:13;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (230,2016,9,7,18,2446,'a:24:{i:0;i:10;i:1;i:69;i:2;i:5;i:3;i:3;i:4;i:188;i:5;i:11;i:6;i:2;i:7;i:10;i:8;i:3;i:9;i:5;i:10;i:4;i:11;i:293;i:12;i:2;i:13;i:10;i:14;i:15;i:15;i:14;i:16;i:8;i:17;i:11;i:18;i:7;i:19;i:289;i:20;i:102;i:21;i:584;i:22;i:543;i:23;i:258;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (231,2016,9,8,16,454,'a:24:{i:0;i:128;i:1;i:17;i:2;i:17;i:3;i:14;i:4;i:9;i:5;i:2;i:6;i:2;i:7;i:6;i:8;i:9;i:9;i:6;i:10;i:7;i:11;i:7;i:12;i:108;i:13;i:3;i:14;i:9;i:15;i:1;i:16;i:8;i:17;i:14;i:18;i:32;i:19;i:5;i:20;i:23;i:21;i:7;i:22;i:4;i:23;i:16;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (232,2016,9,9,18,784,'a:24:{i:0;i:3;i:1;i:76;i:2;i:4;i:3;i:4;i:4;i:2;i:5;i:4;i:6;i:4;i:7;i:4;i:8;i:6;i:9;i:4;i:10;i:9;i:11;i:2;i:12;i:8;i:13;i:10;i:14;i:9;i:15;i:18;i:16;i:6;i:17;i:8;i:18;i:2;i:19;i:13;i:20;i:7;i:21;i:124;i:22;i:147;i:23;i:310;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (233,2016,9,10,13,872,'a:22:{i:0;i:1;i:1;i:11;i:2;i:47;i:3;i:1;i:4;i:1;i:5;i:4;i:6;i:1;i:7;i:7;i:8;i:9;i:9;i:1;i:10;i:343;i:11;i:307;i:12;i:88;i:13;i:5;i:14;i:17;i:15;i:2;i:16;i:4;i:18;i:6;i:19;i:6;i:20;i:3;i:21;i:6;i:22;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (234,2016,9,11,9,373,'a:24:{i:0;i:100;i:1;i:3;i:2;i:1;i:3;i:9;i:4;i:2;i:5;i:1;i:6;i:17;i:7;i:11;i:8;i:17;i:9;i:5;i:10;i:11;i:11;i:11;i:12;i:8;i:13;i:5;i:14;i:7;i:15;i:41;i:16;i:8;i:17;i:9;i:18;i:10;i:19;i:66;i:20;i:3;i:21;i:2;i:22;i:7;i:23;i:19;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (235,2016,9,12,22,903,'a:24:{i:0;i:50;i:1;i:4;i:2;i:253;i:3;i:228;i:4;i:5;i:5;i:6;i:6;i:11;i:7;i:40;i:8;i:17;i:9;i:9;i:10;i:15;i:11;i:38;i:12;i:5;i:13;i:5;i:14;i:7;i:15;i:55;i:16;i:80;i:17;i:11;i:18;i:24;i:19;i:17;i:20;i:4;i:21;i:7;i:22;i:6;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (236,2016,9,13,18,1363,'a:23:{i:0;i:4;i:1;i:5;i:2;i:215;i:3;i:13;i:5;i:1;i:6;i:45;i:7;i:7;i:8;i:1;i:9;i:37;i:10;i:144;i:11;i:173;i:12;i:69;i:13;i:84;i:14;i:8;i:15;i:160;i:16;i:5;i:17;i:49;i:18;i:44;i:19;i:5;i:20;i:29;i:21;i:4;i:22;i:70;i:23;i:191;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (237,2016,9,14,16,1151,'a:24:{i:0;i:23;i:1;i:2;i:2;i:14;i:3;i:3;i:4;i:5;i:5;i:3;i:6;i:3;i:7;i:5;i:8;i:18;i:9;i:8;i:10;i:29;i:11;i:20;i:12;i:4;i:13;i:643;i:14;i:224;i:15;i:13;i:16;i:3;i:17;i:4;i:18;i:9;i:19;i:4;i:20;i:20;i:21;i:33;i:22;i:54;i:23;i:7;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (238,2016,9,15,22,1308,'a:24:{i:0;i:11;i:1;i:6;i:2;i:7;i:3;i:5;i:4;i:8;i:5;i:5;i:6;i:181;i:7;i:1;i:8;i:20;i:9;i:32;i:10;i:348;i:11;i:5;i:12;i:113;i:13;i:13;i:14;i:13;i:15;i:50;i:16;i:9;i:17;i:5;i:18;i:26;i:19;i:18;i:20;i:16;i:21;i:119;i:22;i:296;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (239,2016,9,16,16,646,'a:24:{i:0;i:7;i:1;i:53;i:2;i:4;i:3;i:5;i:4;i:1;i:5;i:4;i:6;i:1;i:7;i:16;i:8;i:7;i:9;i:12;i:10;i:8;i:11;i:46;i:12;i:39;i:13;i:4;i:14;i:13;i:15;i:4;i:16;i:309;i:17;i:7;i:18;i:7;i:19;i:44;i:20;i:6;i:21;i:40;i:22;i:3;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (240,2016,9,17,19,679,'a:24:{i:0;i:6;i:1;i:11;i:2;i:1;i:3;i:1;i:4;i:1;i:5;i:6;i:6;i:5;i:7;i:8;i:8;i:5;i:9;i:101;i:10;i:11;i:11;i:3;i:12;i:7;i:13;i:13;i:14;i:14;i:15;i:31;i:16;i:90;i:17;i:9;i:18;i:20;i:19;i:6;i:20;i:53;i:21;i:5;i:22;i:267;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (241,2016,9,18,12,289,'a:24:{i:0;i:7;i:1;i:2;i:2;i:2;i:3;i:7;i:4;i:5;i:5;i:6;i:6;i:5;i:7;i:3;i:8;i:12;i:9;i:4;i:10;i:42;i:11;i:11;i:12;i:13;i:13;i:8;i:14;i:12;i:15;i:6;i:16;i:6;i:17;i:2;i:18;i:6;i:19;i:43;i:20;i:32;i:21;i:17;i:22;i:29;i:23;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (242,2016,9,19,17,1112,'a:24:{i:0;i:22;i:1;i:18;i:2;i:2;i:3;i:4;i:4;i:1;i:5;i:2;i:6;i:12;i:7;i:10;i:8;i:18;i:9;i:8;i:10;i:9;i:11;i:8;i:12;i:211;i:13;i:19;i:14;i:217;i:15;i:94;i:16;i:307;i:17;i:109;i:18;i:1;i:19;i:7;i:20;i:5;i:21;i:5;i:22;i:4;i:23;i:19;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (243,2016,9,20,16,218,'a:24:{i:0;i:16;i:1;i:7;i:2;i:4;i:3;i:9;i:4;i:4;i:5;i:1;i:6;i:2;i:7;i:6;i:8;i:7;i:9;i:7;i:10;i:6;i:11;i:3;i:12;i:2;i:13;i:6;i:14;i:1;i:15;i:3;i:16;i:2;i:17;i:28;i:18;i:17;i:19;i:5;i:20;i:22;i:21;i:7;i:22;i:41;i:23;i:12;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (244,2016,9,21,16,746,'a:23:{i:0;i:7;i:1;i:3;i:2;i:8;i:3;i:7;i:4;i:9;i:5;i:4;i:6;i:8;i:7;i:11;i:8;i:260;i:9;i:87;i:10;i:154;i:11;i:44;i:12;i:11;i:13;i:4;i:14;i:60;i:15;i:2;i:17;i:14;i:18;i:4;i:19;i:13;i:20;i:19;i:21;i:2;i:22;i:4;i:23;i:11;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (245,2016,9,22,17,565,'a:22:{i:1;i:4;i:3;i:61;i:4;i:210;i:5;i:70;i:6;i:7;i:7;i:9;i:8;i:7;i:9;i:24;i:10;i:31;i:11;i:3;i:12;i:96;i:13;i:5;i:14;i:3;i:15;i:4;i:16;i:4;i:17;i:3;i:18;i:2;i:19;i:9;i:20;i:1;i:21;i:5;i:22;i:5;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (246,2016,9,23,15,267,'a:24:{i:0;i:1;i:1;i:1;i:2;i:3;i:3;i:12;i:4;i:10;i:5;i:1;i:6;i:8;i:7;i:110;i:8;i:7;i:9;i:4;i:10;i:5;i:11;i:6;i:12;i:12;i:13;i:4;i:14;i:4;i:15;i:4;i:16;i:9;i:17;i:2;i:18;i:9;i:19;i:6;i:20;i:14;i:21;i:21;i:22;i:11;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (247,2016,9,24,23,1248,'a:24:{i:0;i:193;i:1;i:3;i:2;i:1;i:3;i:6;i:4;i:5;i:5;i:2;i:6;i:1;i:7;i:2;i:8;i:4;i:9;i:2;i:10;i:21;i:11;i:6;i:12;i:150;i:13;i:15;i:14;i:33;i:15;i:5;i:16;i:12;i:17;i:1;i:18;i:7;i:19;i:10;i:20;i:262;i:21;i:490;i:22;i:2;i:23;i:15;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (248,2016,9,25,19,619,'a:24:{i:0;i:2;i:1;i:3;i:2;i:3;i:3;i:5;i:4;i:6;i:5;i:1;i:6;i:4;i:7;i:14;i:8;i:15;i:9;i:5;i:10;i:7;i:11;i:14;i:12;i:12;i:13;i:263;i:14;i:24;i:15;i:6;i:16;i:7;i:17;i:8;i:18;i:3;i:19;i:3;i:20;i:8;i:21;i:184;i:22;i:6;i:23;i:16;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (249,2016,9,26,21,1182,'a:24:{i:0;i:9;i:1;i:2;i:2;i:6;i:3;i:11;i:4;i:1;i:5;i:2;i:6;i:8;i:7;i:15;i:8;i:9;i:9;i:160;i:10;i:242;i:11;i:14;i:12;i:311;i:13;i:13;i:14;i:42;i:15;i:4;i:16;i:128;i:17;i:6;i:18;i:45;i:19;i:13;i:20;i:7;i:21;i:109;i:22;i:19;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (250,2016,9,27,24,879,'a:23:{i:0;i:5;i:2;i:2;i:3;i:5;i:4;i:14;i:5;i:4;i:6;i:1;i:7;i:358;i:8;i:9;i:9;i:9;i:10;i:154;i:11;i:151;i:12;i:4;i:13;i:5;i:14;i:8;i:15;i:3;i:16;i:5;i:17;i:28;i:18;i:38;i:19;i:39;i:20;i:10;i:21;i:12;i:22;i:10;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (251,2016,9,28,17,649,'a:22:{i:0;i:6;i:1;i:3;i:2;i:2;i:3;i:2;i:4;i:3;i:5;i:4;i:6;i:11;i:7;i:8;i:8;i:26;i:9;i:121;i:11;i:12;i:12;i:14;i:13;i:5;i:14;i:5;i:15;i:335;i:16;i:55;i:17;i:3;i:18;i:1;i:19;i:6;i:21;i:7;i:22;i:15;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (252,2016,9,29,21,324,'a:24:{i:0;i:2;i:1;i:5;i:2;i:4;i:3;i:3;i:4;i:3;i:5;i:9;i:6;i:2;i:7;i:14;i:8;i:1;i:9;i:5;i:10;i:2;i:11;i:14;i:12;i:24;i:13;i:18;i:14;i:81;i:15;i:10;i:16;i:1;i:17;i:2;i:18;i:1;i:19;i:4;i:20;i:13;i:21;i:12;i:22;i:1;i:23;i:93;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (253,2016,9,30,19,1084,'a:24:{i:0;i:8;i:1;i:34;i:2;i:9;i:3;i:343;i:4;i:41;i:5;i:3;i:6;i:156;i:7;i:88;i:8;i:9;i:9;i:2;i:10;i:11;i:11;i:248;i:12;i:11;i:13;i:6;i:14;i:2;i:15;i:23;i:16;i:4;i:17;i:25;i:18;i:11;i:19;i:15;i:20;i:7;i:21;i:11;i:22;i:8;i:23;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (254,2016,10,1,24,366,'a:24:{i:0;i:58;i:1;i:24;i:2;i:3;i:3;i:6;i:4;i:28;i:5;i:1;i:6;i:7;i:7;i:43;i:8;i:6;i:9;i:3;i:10;i:11;i:11;i:14;i:12;i:14;i:13;i:18;i:14;i:5;i:15;i:6;i:16;i:11;i:17;i:18;i:18;i:7;i:19;i:33;i:20;i:9;i:21;i:30;i:22;i:5;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (255,2016,10,2,23,816,'a:23:{i:0;i:307;i:2;i:9;i:3;i:4;i:4;i:2;i:5;i:1;i:6;i:12;i:7;i:5;i:8;i:179;i:9;i:78;i:10;i:25;i:11;i:5;i:12;i:7;i:13;i:18;i:14;i:8;i:15;i:1;i:16;i:48;i:17;i:28;i:18;i:5;i:19;i:29;i:20;i:12;i:21;i:14;i:22;i:5;i:23;i:14;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (256,2016,10,3,14,849,'a:23:{i:0;i:8;i:1;i:6;i:2;i:159;i:3;i:9;i:4;i:3;i:6;i:7;i:7;i:3;i:8;i:13;i:9;i:57;i:10;i:310;i:11;i:12;i:12;i:17;i:13;i:3;i:14;i:11;i:15;i:8;i:16;i:136;i:17;i:10;i:18;i:15;i:19;i:9;i:20;i:24;i:21;i:16;i:22;i:12;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (257,2016,10,4,27,703,'a:24:{i:0;i:7;i:1;i:15;i:2;i:2;i:3;i:34;i:4;i:12;i:5;i:9;i:6;i:9;i:7;i:15;i:8;i:11;i:9;i:10;i:10;i:39;i:11;i:37;i:12;i:21;i:13;i:32;i:14;i:11;i:15;i:6;i:16;i:5;i:17;i:356;i:18;i:11;i:19;i:13;i:20;i:7;i:21;i:24;i:22;i:7;i:23;i:10;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (258,2016,10,5,16,1510,'a:24:{i:0;i:2;i:1;i:9;i:2;i:230;i:3;i:2;i:4;i:3;i:5;i:6;i:6;i:3;i:7;i:9;i:8;i:6;i:9;i:4;i:10;i:362;i:11;i:596;i:12;i:149;i:13;i:29;i:14;i:5;i:15;i:44;i:16;i:3;i:17;i:4;i:18;i:5;i:19;i:20;i:20;i:4;i:21;i:4;i:22;i:6;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (259,2016,10,6,24,670,'a:24:{i:0;i:7;i:1;i:3;i:2;i:9;i:3;i:2;i:4;i:4;i:5;i:4;i:6;i:305;i:7;i:2;i:8;i:12;i:9;i:12;i:10;i:5;i:11;i:13;i:12;i:5;i:13;i:4;i:14;i:14;i:15;i:4;i:16;i:8;i:17;i:32;i:18;i:10;i:19;i:112;i:20;i:14;i:21;i:3;i:22;i:46;i:23;i:40;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (260,2016,10,7,26,705,'a:23:{i:0;i:4;i:1;i:105;i:2;i:8;i:3;i:3;i:4;i:4;i:5;i:3;i:6;i:2;i:7;i:40;i:8;i:10;i:9;i:73;i:10;i:80;i:11;i:6;i:12;i:7;i:13;i:2;i:14;i:7;i:15;i:28;i:16;i:2;i:17;i:20;i:19;i:14;i:20;i:224;i:21;i:41;i:22;i:11;i:23;i:11;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (261,2016,10,8,16,992,'a:24:{i:0;i:6;i:1;i:264;i:2;i:51;i:3;i:7;i:4;i:39;i:5;i:2;i:6;i:6;i:7;i:10;i:8;i:2;i:9;i:1;i:10;i:7;i:11;i:42;i:12;i:8;i:13;i:3;i:14;i:46;i:15;i:70;i:16;i:21;i:17;i:26;i:18;i:153;i:19;i:8;i:20;i:4;i:21;i:8;i:22;i:11;i:23;i:197;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (262,2016,10,9,15,714,'a:22:{i:0;i:1;i:1;i:1;i:2;i:5;i:3;i:7;i:4;i:155;i:6;i:2;i:7;i:97;i:8;i:123;i:9;i:5;i:10;i:21;i:11;i:6;i:12;i:4;i:13;i:3;i:14;i:5;i:16;i:163;i:17;i:48;i:18;i:10;i:19;i:7;i:20;i:10;i:21;i:5;i:22;i:23;i:23;i:13;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (263,2016,10,10,21,436,'a:24:{i:0;i:1;i:1;i:4;i:2;i:4;i:3;i:269;i:4;i:7;i:5;i:7;i:6;i:5;i:7;i:5;i:8;i:5;i:9;i:14;i:10;i:17;i:11;i:4;i:12;i:3;i:13;i:3;i:14;i:3;i:15;i:10;i:16;i:2;i:17;i:9;i:18;i:1;i:19;i:8;i:20;i:27;i:21;i:6;i:22;i:7;i:23;i:15;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (264,2016,10,11,24,661,'a:24:{i:0;i:3;i:1;i:3;i:2;i:5;i:3;i:5;i:4;i:19;i:5;i:2;i:6;i:5;i:7;i:10;i:8;i:144;i:9;i:13;i:10;i:1;i:11;i:9;i:12;i:4;i:13;i:5;i:14;i:4;i:15;i:8;i:16;i:109;i:17;i:12;i:18;i:118;i:19;i:5;i:20;i:102;i:21;i:35;i:22;i:5;i:23;i:35;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (265,2016,10,12,19,1725,'a:24:{i:0;i:172;i:1;i:97;i:2;i:1;i:3;i:12;i:4;i:8;i:5;i:1;i:6;i:3;i:7;i:284;i:8;i:3;i:9;i:3;i:10;i:6;i:11;i:68;i:12;i:225;i:13;i:5;i:14;i:3;i:15;i:118;i:16;i:441;i:17;i:2;i:18;i:7;i:19;i:12;i:20;i:5;i:21;i:5;i:22;i:4;i:23;i:240;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (266,2016,10,13,15,1215,'a:24:{i:0;i:25;i:1;i:300;i:2;i:11;i:3;i:199;i:4;i:97;i:5;i:4;i:6;i:3;i:7;i:241;i:8;i:3;i:9;i:3;i:10;i:5;i:11;i:42;i:12;i:6;i:13;i:4;i:14;i:4;i:15;i:9;i:16;i:43;i:17;i:187;i:18;i:7;i:19;i:4;i:20;i:8;i:21;i:5;i:22;i:1;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (267,2016,10,14,20,506,'a:23:{i:0;i:7;i:1;i:2;i:2;i:2;i:3;i:93;i:4;i:4;i:5;i:6;i:6;i:2;i:7;i:8;i:8;i:4;i:9;i:11;i:10;i:6;i:11;i:6;i:12;i:5;i:13;i:29;i:14;i:7;i:15;i:3;i:16;i:3;i:18;i:275;i:19;i:3;i:20;i:6;i:21;i:17;i:22;i:3;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (268,2016,10,15,25,238,'a:22:{i:0;i:2;i:1;i:5;i:2;i:5;i:3;i:3;i:6;i:6;i:7;i:3;i:8;i:13;i:9;i:6;i:10;i:7;i:11;i:6;i:12;i:6;i:13;i:4;i:14;i:1;i:15;i:20;i:16;i:6;i:17;i:5;i:18;i:15;i:19;i:46;i:20;i:66;i:21;i:5;i:22;i:2;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (269,2016,10,16,18,478,'a:23:{i:0;i:7;i:1;i:13;i:2;i:14;i:3;i:27;i:4;i:34;i:5;i:33;i:6;i:11;i:7;i:2;i:8;i:3;i:9;i:101;i:10;i:3;i:11;i:53;i:12;i:4;i:13;i:5;i:14;i:4;i:15;i:6;i:16;i:1;i:17;i:2;i:18;i:2;i:19;i:95;i:20;i:5;i:22;i:3;i:23;i:50;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (270,2016,10,17,22,258,'a:24:{i:0;i:6;i:1;i:10;i:2;i:1;i:3;i:1;i:4;i:4;i:5;i:1;i:6;i:2;i:7;i:6;i:8;i:5;i:9;i:3;i:10;i:39;i:11;i:7;i:12;i:18;i:13;i:36;i:14;i:5;i:15;i:2;i:16;i:6;i:17;i:2;i:18;i:5;i:19;i:9;i:20;i:5;i:21;i:11;i:22;i:62;i:23;i:12;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (271,2016,10,18,22,458,'a:24:{i:0;i:2;i:1;i:2;i:2;i:23;i:3;i:2;i:4;i:191;i:5;i:5;i:6;i:1;i:7;i:6;i:8;i:64;i:9;i:7;i:10;i:11;i:11;i:7;i:12;i:4;i:13;i:33;i:14;i:45;i:15;i:7;i:16;i:1;i:17;i:4;i:18;i:8;i:19;i:7;i:20;i:5;i:21;i:15;i:22;i:7;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (272,2016,10,19,17,457,'a:24:{i:0;i:137;i:1;i:1;i:2;i:6;i:3;i:28;i:4;i:4;i:5;i:2;i:6;i:3;i:7;i:3;i:8;i:39;i:9;i:10;i:10;i:2;i:11;i:10;i:12;i:2;i:13;i:18;i:14;i:10;i:15;i:5;i:16;i:39;i:17;i:14;i:18;i:7;i:19;i:70;i:20;i:22;i:21;i:6;i:22;i:16;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (273,2016,10,20,18,177,'a:23:{i:0;i:2;i:1;i:4;i:2;i:4;i:3;i:2;i:4;i:2;i:5;i:1;i:6;i:3;i:7;i:25;i:8;i:6;i:9;i:4;i:10;i:5;i:11;i:5;i:12;i:4;i:13;i:11;i:14;i:8;i:15;i:5;i:16;i:15;i:17;i:1;i:18;i:20;i:19;i:38;i:20;i:6;i:21;i:4;i:22;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (274,2016,10,21,21,393,'a:24:{i:0;i:192;i:1;i:2;i:2;i:2;i:3;i:6;i:4;i:5;i:5;i:4;i:6;i:15;i:7;i:4;i:8;i:21;i:9;i:4;i:10;i:7;i:11;i:7;i:12;i:3;i:13;i:27;i:14;i:7;i:15;i:14;i:16;i:8;i:17;i:12;i:18;i:7;i:19;i:8;i:20;i:4;i:21;i:3;i:22;i:26;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (275,2016,10,22,18,312,'a:23:{i:0;i:5;i:1;i:3;i:2;i:1;i:3;i:3;i:4;i:1;i:5;i:5;i:6;i:10;i:7;i:29;i:8;i:6;i:9;i:5;i:10;i:19;i:11;i:20;i:12;i:16;i:13;i:8;i:14;i:136;i:15;i:6;i:17;i:12;i:18;i:16;i:19;i:6;i:20;i:1;i:21;i:1;i:22;i:1;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (276,2016,10,23,15,230,'a:24:{i:0;i:2;i:1;i:5;i:2;i:1;i:3;i:2;i:4;i:8;i:5;i:1;i:6;i:2;i:7;i:62;i:8;i:1;i:9;i:3;i:10;i:25;i:11;i:7;i:12;i:8;i:13;i:1;i:14;i:3;i:15;i:10;i:16;i:11;i:17;i:2;i:18;i:52;i:19;i:8;i:20;i:3;i:21;i:3;i:22;i:4;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (277,2016,10,24,28,181,'a:22:{i:1;i:3;i:2;i:2;i:4;i:3;i:5;i:2;i:6;i:2;i:7;i:2;i:8;i:1;i:9;i:4;i:10;i:13;i:11;i:8;i:12;i:9;i:13;i:12;i:14;i:7;i:15;i:4;i:16;i:6;i:17;i:40;i:18;i:3;i:19;i:23;i:20;i:7;i:21;i:3;i:22;i:18;i:23;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (278,2016,10,25,22,261,'a:22:{i:0;i:37;i:1;i:30;i:2;i:2;i:3;i:2;i:4;i:12;i:6;i:2;i:7;i:3;i:8;i:3;i:9;i:3;i:10;i:23;i:12;i:2;i:13;i:19;i:14;i:59;i:15;i:3;i:16;i:18;i:17;i:2;i:18;i:13;i:19;i:4;i:20;i:4;i:21;i:12;i:22;i:6;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (279,2016,10,26,15,670,'a:22:{i:0;i:2;i:2;i:90;i:3;i:2;i:4;i:4;i:5;i:1;i:7;i:4;i:8;i:88;i:9;i:287;i:10;i:11;i:11;i:3;i:12;i:5;i:13;i:4;i:14;i:7;i:15;i:7;i:16;i:8;i:17;i:8;i:18;i:3;i:19;i:56;i:20;i:2;i:21;i:5;i:22;i:13;i:23;i:60;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (280,2016,10,27,19,259,'a:24:{i:0;i:6;i:1;i:7;i:2;i:5;i:3;i:8;i:4;i:3;i:5;i:6;i:6;i:7;i:7;i:5;i:8;i:11;i:9;i:23;i:10;i:12;i:11;i:3;i:12;i:3;i:13;i:14;i:14;i:5;i:15;i:1;i:16;i:7;i:17;i:3;i:18;i:15;i:19;i:7;i:20;i:43;i:21;i:3;i:22;i:55;i:23;i:7;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (281,2016,10,28,30,837,'a:24:{i:0;i:6;i:1;i:8;i:2;i:17;i:3;i:20;i:4;i:6;i:5;i:5;i:6;i:2;i:7;i:1;i:8;i:198;i:9;i:7;i:10;i:10;i:11;i:2;i:12;i:364;i:13;i:40;i:14;i:15;i:15;i:10;i:16;i:21;i:17;i:8;i:18;i:7;i:19;i:61;i:20;i:11;i:21;i:3;i:22;i:7;i:23;i:8;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (282,2016,10,29,16,221,'a:24:{i:0;i:11;i:1;i:8;i:2;i:6;i:3;i:6;i:4;i:6;i:5;i:7;i:6;i:18;i:7;i:9;i:8;i:18;i:9;i:14;i:10;i:3;i:11;i:10;i:12;i:29;i:13;i:9;i:14;i:9;i:15;i:2;i:16;i:5;i:17;i:6;i:18;i:6;i:19;i:8;i:20;i:13;i:21;i:6;i:22;i:9;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (283,2016,10,30,25,1766,'a:24:{i:0;i:8;i:1;i:6;i:2;i:6;i:3;i:3;i:4;i:570;i:5;i:8;i:6;i:5;i:7;i:6;i:8;i:3;i:9;i:23;i:10;i:13;i:11;i:176;i:12;i:3;i:13;i:9;i:14;i:93;i:15;i:20;i:16;i:1;i:17;i:4;i:18;i:43;i:19;i:5;i:20;i:16;i:21;i:308;i:22;i:433;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (284,2016,10,31,18,712,'a:24:{i:0;i:299;i:1;i:4;i:2;i:3;i:3;i:5;i:4;i:5;i:5;i:20;i:6;i:2;i:7;i:7;i:8;i:1;i:9;i:34;i:10;i:41;i:11;i:58;i:12;i:5;i:13;i:39;i:14;i:18;i:15;i:3;i:16;i:4;i:17;i:7;i:18;i:7;i:19;i:34;i:20;i:8;i:21;i:4;i:22;i:8;i:23;i:96;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (285,2016,11,1,18,371,'a:24:{i:0;i:3;i:1;i:3;i:2;i:1;i:3;i:36;i:4;i:15;i:5;i:2;i:6;i:24;i:7;i:149;i:8;i:5;i:9;i:9;i:10;i:5;i:11;i:3;i:12;i:25;i:13;i:2;i:14;i:44;i:15;i:6;i:16;i:7;i:17;i:1;i:18;i:4;i:19;i:9;i:20;i:14;i:21;i:1;i:22;i:1;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (286,2016,11,2,23,827,'a:23:{i:0;i:1;i:1;i:2;i:2;i:4;i:3;i:5;i:4;i:3;i:5;i:539;i:6;i:33;i:7;i:25;i:8;i:18;i:9;i:3;i:10;i:9;i:11;i:5;i:12;i:6;i:13;i:4;i:15;i:43;i:16;i:40;i:17;i:2;i:18;i:5;i:19;i:30;i:20;i:23;i:21;i:5;i:22;i:12;i:23;i:10;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (287,2016,11,3,20,545,'a:24:{i:0;i:18;i:1;i:9;i:2;i:4;i:3;i:3;i:4;i:2;i:5;i:15;i:6;i:6;i:7;i:5;i:8;i:12;i:9;i:1;i:10;i:22;i:11;i:6;i:12;i:11;i:13;i:45;i:14;i:6;i:15;i:8;i:16;i:5;i:17;i:1;i:18;i:10;i:19;i:8;i:20;i:14;i:21;i:3;i:22;i:4;i:23;i:327;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (288,2016,11,4,20,216,'a:24:{i:0;i:4;i:1;i:1;i:2;i:2;i:3;i:49;i:4;i:6;i:5;i:2;i:6;i:1;i:7;i:7;i:8;i:14;i:9;i:6;i:10;i:15;i:11;i:1;i:12;i:2;i:13;i:8;i:14;i:1;i:15;i:2;i:16;i:9;i:17;i:6;i:18;i:7;i:19;i:3;i:20;i:9;i:21;i:14;i:22;i:4;i:23;i:43;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (289,2016,11,5,16,120,'a:24:{i:0;i:18;i:1;i:1;i:2;i:5;i:3;i:5;i:4;i:3;i:5;i:4;i:6;i:5;i:7;i:10;i:8;i:1;i:9;i:8;i:10;i:1;i:11;i:7;i:12;i:4;i:13;i:1;i:14;i:2;i:15;i:5;i:16;i:4;i:17;i:10;i:18;i:6;i:19;i:6;i:20;i:5;i:21;i:4;i:22;i:3;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (290,2016,11,6,14,457,'a:24:{i:0;i:5;i:1;i:4;i:2;i:9;i:3;i:4;i:4;i:326;i:5;i:5;i:6;i:1;i:7;i:5;i:8;i:27;i:9;i:3;i:10;i:2;i:11;i:2;i:12;i:4;i:13;i:8;i:14;i:5;i:15;i:1;i:16;i:2;i:17;i:15;i:18;i:6;i:19;i:4;i:20;i:3;i:21;i:4;i:22;i:4;i:23;i:8;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (291,2016,11,7,20,298,'a:23:{i:0;i:95;i:1;i:5;i:2;i:19;i:4;i:4;i:5;i:7;i:6;i:3;i:7;i:9;i:8;i:3;i:9;i:37;i:10;i:4;i:11;i:6;i:12;i:1;i:13;i:4;i:14;i:3;i:15;i:1;i:16;i:3;i:17;i:10;i:18;i:4;i:19;i:3;i:20;i:27;i:21;i:1;i:22;i:46;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (292,2016,11,8,18,140,'a:24:{i:0;i:3;i:1;i:1;i:2;i:2;i:3;i:5;i:4;i:17;i:5;i:2;i:6;i:2;i:7;i:2;i:8;i:9;i:9;i:4;i:10;i:6;i:11;i:5;i:12;i:2;i:13;i:9;i:14;i:6;i:15;i:5;i:16;i:7;i:17;i:3;i:18;i:10;i:19;i:14;i:20;i:3;i:21;i:18;i:22;i:1;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (293,2016,11,9,23,208,'a:22:{i:0;i:6;i:1;i:14;i:2;i:18;i:3;i:5;i:5;i:4;i:6;i:1;i:7;i:2;i:8;i:6;i:9;i:1;i:10;i:44;i:11;i:5;i:12;i:13;i:13;i:5;i:15;i:49;i:16;i:2;i:17;i:4;i:18;i:2;i:19;i:1;i:20;i:6;i:21;i:12;i:22;i:6;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (294,2016,11,10,31,1949,'a:24:{i:0;i:21;i:1;i:3;i:2;i:4;i:3;i:347;i:4;i:1;i:5;i:9;i:6;i:2;i:7;i:4;i:8;i:5;i:9;i:2;i:10;i:2;i:11;i:3;i:12;i:2;i:13;i:362;i:14;i:365;i:15;i:432;i:16;i:307;i:17;i:3;i:18;i:4;i:19;i:27;i:20;i:3;i:21;i:31;i:22;i:9;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (295,2016,11,11,18,207,'a:23:{i:0;i:20;i:1;i:2;i:2;i:2;i:3;i:1;i:4;i:55;i:5;i:1;i:7;i:3;i:8;i:3;i:9;i:1;i:10;i:6;i:11;i:8;i:12;i:6;i:13;i:8;i:14;i:9;i:15;i:2;i:16;i:2;i:17;i:6;i:18;i:26;i:19;i:23;i:20;i:3;i:21;i:7;i:22;i:6;i:23;i:7;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (296,2016,11,12,20,263,'a:24:{i:0;i:10;i:1;i:6;i:2;i:2;i:3;i:2;i:4;i:7;i:5;i:5;i:6;i:4;i:7;i:4;i:8;i:8;i:9;i:10;i:10;i:11;i:11;i:30;i:12;i:4;i:13;i:5;i:14;i:3;i:15;i:1;i:16;i:5;i:17;i:2;i:18;i:5;i:19;i:6;i:20;i:8;i:21;i:115;i:22;i:4;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (297,2016,11,13,16,209,'a:24:{i:0;i:4;i:1;i:33;i:2;i:3;i:3;i:5;i:4;i:4;i:5;i:1;i:6;i:3;i:7;i:21;i:8;i:7;i:9;i:51;i:10;i:5;i:11;i:12;i:12;i:6;i:13;i:1;i:14;i:2;i:15;i:2;i:16;i:1;i:17;i:4;i:18;i:4;i:19;i:4;i:20;i:20;i:21;i:5;i:22;i:2;i:23;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (298,2016,11,14,22,453,'a:24:{i:0;i:8;i:1;i:23;i:2;i:10;i:3;i:5;i:4;i:2;i:5;i:4;i:6;i:130;i:7;i:6;i:8;i:2;i:9;i:10;i:10;i:15;i:11;i:6;i:12;i:19;i:13;i:4;i:14;i:7;i:15;i:5;i:16;i:3;i:17;i:2;i:18;i:10;i:19;i:6;i:20;i:7;i:21;i:147;i:22;i:18;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (299,2016,11,15,22,145,'a:23:{i:0;i:5;i:1;i:7;i:2;i:2;i:3;i:3;i:4;i:3;i:5;i:4;i:6;i:3;i:7;i:5;i:8;i:6;i:9;i:11;i:10;i:20;i:11;i:24;i:12;i:14;i:13;i:6;i:15;i:5;i:16;i:2;i:17;i:3;i:18;i:3;i:19;i:6;i:20;i:2;i:21;i:5;i:22;i:4;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (300,2016,11,16,19,572,'a:24:{i:0;i:6;i:1;i:6;i:2;i:4;i:3;i:3;i:4;i:4;i:5;i:188;i:6;i:16;i:7;i:136;i:8;i:88;i:9;i:20;i:10;i:4;i:11;i:13;i:12;i:3;i:13;i:2;i:14;i:16;i:15;i:5;i:16;i:3;i:17;i:3;i:18;i:27;i:19;i:3;i:20;i:7;i:21;i:4;i:22;i:8;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (301,2016,11,17,16,363,'a:24:{i:0;i:4;i:1;i:2;i:2;i:11;i:3;i:18;i:4;i:2;i:5;i:5;i:6;i:8;i:7;i:3;i:8;i:7;i:9;i:3;i:10;i:1;i:11;i:4;i:12;i:4;i:13;i:9;i:14;i:38;i:15;i:4;i:16;i:188;i:17;i:4;i:18;i:10;i:19;i:4;i:20;i:5;i:21;i:4;i:22;i:22;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (302,2016,11,18,19,292,'a:24:{i:0;i:13;i:1;i:4;i:2;i:2;i:3;i:1;i:4;i:1;i:5;i:1;i:6;i:2;i:7;i:10;i:8;i:3;i:9;i:13;i:10;i:2;i:11;i:9;i:12;i:8;i:13;i:10;i:14;i:32;i:15;i:35;i:16;i:1;i:17;i:13;i:18;i:9;i:19;i:100;i:20;i:3;i:21;i:3;i:22;i:3;i:23;i:14;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (303,2016,11,19,17,194,'a:23:{i:0;i:5;i:2;i:4;i:3;i:17;i:4;i:1;i:5;i:2;i:6;i:4;i:7;i:4;i:8;i:7;i:9;i:13;i:10;i:2;i:11;i:7;i:12;i:3;i:13;i:12;i:14;i:3;i:15;i:8;i:16;i:3;i:17;i:29;i:18;i:2;i:19;i:4;i:20;i:1;i:21;i:4;i:22;i:5;i:23;i:54;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (304,2016,11,20,17,729,'a:24:{i:0;i:21;i:1;i:2;i:2;i:15;i:3;i:2;i:4;i:3;i:5;i:4;i:6;i:29;i:7;i:2;i:8;i:302;i:9;i:7;i:10;i:177;i:11;i:77;i:12;i:9;i:13;i:7;i:14;i:1;i:15;i:1;i:16;i:15;i:17;i:1;i:18;i:8;i:19;i:4;i:20;i:18;i:21;i:2;i:22;i:4;i:23;i:18;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (305,2016,11,21,22,1102,'a:24:{i:0;i:5;i:1;i:2;i:2;i:1;i:3;i:1;i:4;i:4;i:5;i:3;i:6;i:2;i:7;i:296;i:8;i:437;i:9;i:11;i:10;i:66;i:11;i:99;i:12;i:10;i:13;i:19;i:14;i:4;i:15;i:11;i:16;i:3;i:17;i:19;i:18;i:52;i:19;i:14;i:20;i:13;i:21;i:12;i:22;i:15;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (306,2016,11,22,18,432,'a:21:{i:0;i:242;i:1;i:5;i:2;i:5;i:4;i:2;i:5;i:5;i:6;i:2;i:7;i:6;i:8;i:9;i:9;i:6;i:11;i:6;i:12;i:15;i:13;i:36;i:14;i:8;i:15;i:1;i:16;i:1;i:18;i:18;i:19;i:46;i:20;i:4;i:21;i:3;i:22;i:7;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (307,2016,11,23,12,376,'a:23:{i:0;i:1;i:1;i:2;i:2;i:3;i:3;i:2;i:4;i:1;i:5;i:2;i:6;i:2;i:7;i:32;i:9;i:1;i:10;i:2;i:11;i:5;i:12;i:3;i:13;i:5;i:14;i:19;i:15;i:9;i:16;i:5;i:17;i:18;i:18;i:6;i:19;i:3;i:20;i:6;i:21;i:1;i:22;i:6;i:23;i:242;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (308,2016,11,24,19,528,'a:23:{i:0;i:5;i:1;i:1;i:2;i:12;i:4;i:14;i:5;i:8;i:6;i:303;i:7;i:8;i:8;i:25;i:9;i:7;i:10;i:3;i:11;i:18;i:12;i:4;i:13;i:8;i:14;i:18;i:15;i:11;i:16;i:4;i:17;i:19;i:18;i:19;i:19;i:7;i:20;i:4;i:21;i:8;i:22;i:19;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (309,2016,11,25,24,510,'a:23:{i:0;i:7;i:1;i:3;i:2;i:2;i:3;i:1;i:4;i:1;i:6;i:7;i:7;i:3;i:8;i:11;i:9;i:1;i:10;i:2;i:11;i:2;i:12;i:8;i:13;i:3;i:14;i:236;i:15;i:47;i:16;i:118;i:17;i:2;i:18;i:2;i:19;i:2;i:20;i:6;i:21;i:16;i:22;i:9;i:23;i:21;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (310,2016,11,26,19,1787,'a:24:{i:0;i:4;i:1;i:3;i:2;i:3;i:3;i:3;i:4;i:9;i:5;i:5;i:6;i:2;i:7;i:38;i:8;i:11;i:9;i:5;i:10;i:5;i:11;i:9;i:12;i:16;i:13;i:25;i:14;i:3;i:15;i:3;i:16;i:8;i:17;i:65;i:18;i:10;i:19;i:12;i:20;i:4;i:21;i:7;i:22;i:1091;i:23;i:446;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (311,2016,11,27,20,432,'a:24:{i:0;i:5;i:1;i:4;i:2;i:18;i:3;i:3;i:4;i:6;i:5;i:4;i:6;i:5;i:7;i:2;i:8;i:2;i:9;i:7;i:10;i:7;i:11;i:3;i:12;i:209;i:13;i:4;i:14;i:31;i:15;i:55;i:16;i:3;i:17;i:5;i:18;i:23;i:19;i:4;i:20;i:1;i:21;i:24;i:22;i:2;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (312,2016,11,28,18,467,'a:22:{i:1;i:1;i:2;i:1;i:3;i:6;i:4;i:4;i:5;i:8;i:6;i:5;i:7;i:1;i:8;i:5;i:9;i:7;i:10;i:6;i:11;i:76;i:12;i:12;i:13;i:221;i:14;i:5;i:15;i:8;i:16;i:21;i:17;i:4;i:18;i:11;i:19;i:40;i:20;i:6;i:21;i:17;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (313,2016,11,29,24,208,'a:22:{i:0;i:4;i:1;i:20;i:2;i:5;i:3;i:5;i:4;i:3;i:5;i:3;i:6;i:4;i:7;i:6;i:8;i:2;i:9;i:10;i:10;i:2;i:11;i:11;i:12;i:7;i:13;i:6;i:14;i:8;i:15;i:2;i:16;i:3;i:18;i:10;i:20;i:18;i:21;i:70;i:22;i:5;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (314,2016,11,30,23,104,'a:24:{i:0;i:1;i:1;i:3;i:2;i:2;i:3;i:4;i:4;i:1;i:5;i:7;i:6;i:2;i:7;i:14;i:8;i:12;i:9;i:11;i:10;i:4;i:11;i:1;i:12;i:5;i:13;i:3;i:14;i:6;i:15;i:3;i:16;i:3;i:17;i:3;i:18;i:3;i:19;i:2;i:20;i:4;i:21;i:8;i:22;i:1;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (315,2016,12,1,20,1552,'a:22:{i:0;i:14;i:1;i:3;i:3;i:12;i:4;i:6;i:6;i:40;i:7;i:52;i:8;i:7;i:9;i:5;i:10;i:8;i:11;i:7;i:12;i:79;i:13;i:46;i:14;i:3;i:15;i:13;i:16;i:3;i:17;i:12;i:18;i:13;i:19;i:6;i:20;i:4;i:21;i:4;i:22;i:1190;i:23;i:25;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (316,2016,12,2,21,4458,'a:23:{i:0;i:309;i:1;i:390;i:2;i:828;i:4;i:4;i:5;i:3;i:6;i:616;i:7;i:132;i:8;i:41;i:9;i:782;i:10;i:303;i:11;i:60;i:12;i:5;i:13;i:489;i:14;i:15;i:15;i:10;i:16;i:7;i:17;i:55;i:18;i:334;i:19;i:50;i:20;i:6;i:21;i:6;i:22;i:6;i:23;i:7;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (317,2016,12,3,15,147,'a:23:{i:0;i:1;i:1;i:6;i:2;i:25;i:3;i:1;i:4;i:1;i:5;i:3;i:6;i:7;i:7;i:7;i:8;i:10;i:9;i:3;i:10;i:19;i:11;i:7;i:12;i:1;i:13;i:5;i:14;i:6;i:15;i:5;i:16;i:11;i:17;i:6;i:18;i:1;i:19;i:7;i:21;i:5;i:22;i:7;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (318,2016,12,4,21,435,'a:23:{i:0;i:6;i:1;i:18;i:2;i:4;i:3;i:6;i:4;i:4;i:6;i:1;i:7;i:2;i:8;i:18;i:9;i:3;i:10;i:8;i:11;i:4;i:12;i:9;i:13;i:12;i:14;i:17;i:15;i:8;i:16;i:260;i:17;i:11;i:18;i:1;i:19;i:9;i:20;i:1;i:21;i:8;i:22;i:5;i:23;i:20;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (319,2016,12,5,14,599,'a:24:{i:0;i:7;i:1;i:6;i:2;i:1;i:3;i:4;i:4;i:1;i:5;i:4;i:6;i:1;i:7;i:45;i:8;i:5;i:9;i:2;i:10;i:3;i:11;i:8;i:12;i:305;i:13;i:2;i:14;i:3;i:15;i:5;i:16;i:4;i:17;i:85;i:18;i:66;i:19;i:4;i:20;i:4;i:21;i:2;i:22;i:18;i:23;i:14;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (320,2016,12,6,16,524,'a:22:{i:2;i:3;i:3;i:1;i:4;i:5;i:5;i:4;i:6;i:2;i:7;i:9;i:8;i:3;i:9;i:44;i:10;i:40;i:11;i:14;i:12;i:3;i:13;i:3;i:14;i:316;i:15;i:14;i:16;i:5;i:17;i:13;i:18;i:2;i:19;i:10;i:20;i:3;i:21;i:2;i:22;i:22;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (321,2016,12,7,17,408,'a:24:{i:0;i:5;i:1;i:22;i:2;i:3;i:3;i:5;i:4;i:1;i:5;i:15;i:6;i:5;i:7;i:3;i:8;i:113;i:9;i:5;i:10;i:2;i:11;i:58;i:12;i:57;i:13;i:7;i:14;i:37;i:15;i:2;i:16;i:9;i:17;i:3;i:18;i:12;i:19;i:30;i:20;i:6;i:21;i:1;i:22;i:3;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (322,2016,12,8,16,296,'a:23:{i:0;i:36;i:1;i:2;i:2;i:1;i:3;i:1;i:4;i:2;i:5;i:3;i:6;i:5;i:7;i:16;i:8;i:10;i:9;i:30;i:10;i:3;i:11;i:7;i:12;i:2;i:13;i:6;i:14;i:5;i:15;i:3;i:16;i:36;i:17;i:19;i:18;i:77;i:19;i:3;i:20;i:16;i:21;i:11;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (323,2016,12,9,15,487,'a:23:{i:0;i:3;i:1;i:4;i:2;i:5;i:3;i:5;i:5;i:3;i:6;i:1;i:7;i:6;i:8;i:8;i:9;i:24;i:10;i:6;i:11;i:18;i:12;i:2;i:13;i:14;i:14;i:320;i:15;i:5;i:16;i:18;i:17;i:11;i:18;i:8;i:19;i:14;i:20;i:3;i:21;i:1;i:22;i:4;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (324,2016,12,10,21,174,'a:20:{i:1;i:5;i:2;i:3;i:4;i:3;i:5;i:1;i:6;i:2;i:7;i:2;i:8;i:17;i:9;i:28;i:10;i:29;i:11;i:21;i:14;i:9;i:15;i:4;i:16;i:4;i:17;i:3;i:18;i:7;i:19;i:1;i:20;i:20;i:21;i:2;i:22;i:5;i:23;i:8;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (325,2016,12,11,23,388,'a:20:{i:0;i:4;i:1;i:17;i:3;i:2;i:4;i:1;i:6;i:1;i:7;i:60;i:8;i:3;i:9;i:10;i:10;i:12;i:11;i:13;i:13;i:14;i:14;i:154;i:15;i:1;i:16;i:44;i:17;i:4;i:18;i:14;i:19;i:3;i:20;i:3;i:21;i:4;i:22;i:24;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (326,2016,12,12,25,662,'a:23:{i:1;i:1;i:2;i:19;i:3;i:1;i:4;i:4;i:5;i:5;i:6;i:2;i:7;i:87;i:8;i:3;i:9;i:31;i:10;i:35;i:11;i:131;i:12;i:1;i:13;i:9;i:14;i:5;i:15;i:4;i:16;i:22;i:17;i:13;i:18;i:7;i:19;i:26;i:20;i:10;i:21;i:3;i:22;i:3;i:23;i:240;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (327,2016,12,13,21,881,'a:24:{i:0;i:520;i:1;i:1;i:2;i:11;i:3;i:3;i:4;i:3;i:5;i:4;i:6;i:5;i:7;i:7;i:8;i:6;i:9;i:6;i:10;i:63;i:11;i:13;i:12;i:65;i:13;i:26;i:14;i:44;i:15;i:5;i:16;i:3;i:17;i:9;i:18;i:18;i:19;i:17;i:20;i:7;i:21;i:3;i:22;i:6;i:23;i:36;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (328,2016,12,14,26,970,'a:23:{i:0;i:5;i:1;i:1;i:2;i:4;i:3;i:29;i:4;i:8;i:6;i:99;i:7;i:147;i:8;i:11;i:9;i:4;i:10;i:19;i:11;i:8;i:12;i:4;i:13;i:5;i:14;i:46;i:15;i:3;i:16;i:7;i:17;i:5;i:18;i:284;i:19;i:81;i:20;i:31;i:21;i:100;i:22;i:58;i:23;i:11;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (329,2016,12,15,16,179,'a:24:{i:0;i:4;i:1;i:3;i:2;i:5;i:3;i:4;i:4;i:3;i:5;i:7;i:6;i:4;i:7;i:7;i:8;i:2;i:9;i:24;i:10;i:14;i:11;i:4;i:12;i:1;i:13;i:5;i:14;i:5;i:15;i:10;i:16;i:10;i:17;i:7;i:18;i:18;i:19;i:5;i:20;i:9;i:21;i:6;i:22;i:18;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (330,2016,12,16,16,549,'a:24:{i:0;i:3;i:1;i:1;i:2;i:6;i:3;i:3;i:4;i:1;i:5;i:4;i:6;i:6;i:7;i:387;i:8;i:5;i:9;i:3;i:10;i:14;i:11;i:3;i:12;i:2;i:13;i:8;i:14;i:6;i:15;i:8;i:16;i:5;i:17;i:24;i:18;i:30;i:19;i:9;i:20;i:2;i:21;i:9;i:22;i:6;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (331,2016,12,17,17,350,'a:24:{i:0;i:5;i:1;i:3;i:2;i:13;i:3;i:3;i:4;i:101;i:5;i:3;i:6;i:1;i:7;i:6;i:8;i:6;i:9;i:57;i:10;i:6;i:11;i:2;i:12;i:6;i:13;i:1;i:14;i:23;i:15;i:5;i:16;i:11;i:17;i:10;i:18;i:8;i:19;i:33;i:20;i:5;i:21;i:28;i:22;i:2;i:23;i:12;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (332,2016,12,18,20,486,'a:24:{i:0;i:3;i:1;i:6;i:2;i:6;i:3;i:7;i:4;i:4;i:5;i:7;i:6;i:3;i:7;i:20;i:8;i:62;i:9;i:7;i:10;i:14;i:11;i:15;i:12;i:21;i:13;i:7;i:14;i:9;i:15;i:10;i:16;i:89;i:17;i:26;i:18;i:52;i:19;i:57;i:20;i:37;i:21;i:6;i:22;i:3;i:23;i:15;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (333,2016,12,19,22,356,'a:24:{i:0;i:2;i:1;i:4;i:2;i:97;i:3;i:26;i:4;i:3;i:5;i:8;i:6;i:36;i:7;i:6;i:8;i:1;i:9;i:22;i:10;i:10;i:11;i:2;i:12;i:5;i:13;i:12;i:14;i:7;i:15;i:7;i:16;i:10;i:17;i:8;i:18;i:9;i:19;i:13;i:20;i:26;i:21;i:21;i:22;i:6;i:23;i:15;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (334,2016,12,20,31,1139,'a:23:{i:0;i:11;i:1;i:6;i:2;i:7;i:3;i:8;i:5;i:13;i:6;i:558;i:7;i:128;i:8;i:32;i:9;i:9;i:10;i:5;i:11;i:109;i:12;i:5;i:13;i:78;i:14;i:29;i:15;i:36;i:16;i:3;i:17;i:11;i:18;i:35;i:19;i:3;i:20;i:9;i:21;i:11;i:22;i:3;i:23;i:30;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (335,2016,12,21,25,437,'a:23:{i:0;i:5;i:1;i:7;i:2;i:2;i:3;i:8;i:4;i:4;i:6;i:7;i:7;i:15;i:8;i:15;i:9;i:8;i:10;i:7;i:11;i:190;i:12;i:7;i:13;i:4;i:14;i:63;i:15;i:8;i:16;i:9;i:17;i:2;i:18;i:5;i:19;i:10;i:20;i:26;i:21;i:19;i:22;i:8;i:23;i:8;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (336,2016,12,22,19,200,'a:12:{i:12;i:29;i:13;i:12;i:14;i:4;i:15;i:4;i:16;i:2;i:17;i:6;i:18;i:10;i:19;i:19;i:20;i:4;i:21;i:7;i:22;i:2;i:23;i:101;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (337,2016,12,23,21,758,'a:24:{i:0;i:7;i:1;i:2;i:2;i:8;i:3;i:3;i:4;i:7;i:5;i:3;i:6;i:33;i:7;i:1;i:8;i:17;i:9;i:18;i:10;i:3;i:11;i:9;i:12;i:4;i:13;i:15;i:14;i:27;i:15;i:16;i:16;i:33;i:17;i:16;i:18;i:10;i:19;i:4;i:20;i:3;i:21;i:25;i:22;i:4;i:23;i:490;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (338,2016,12,24,23,842,'a:23:{i:0;i:275;i:1;i:26;i:2;i:1;i:3;i:4;i:4;i:1;i:5;i:3;i:6;i:7;i:7;i:298;i:8;i:17;i:9;i:10;i:10;i:18;i:11;i:71;i:12;i:3;i:14;i:56;i:15;i:9;i:16;i:7;i:17;i:12;i:18;i:4;i:19;i:5;i:20;i:2;i:21;i:1;i:22;i:5;i:23;i:7;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (339,2016,12,25,14,553,'a:24:{i:0;i:27;i:1;i:1;i:2;i:29;i:3;i:5;i:4;i:14;i:5;i:4;i:6;i:5;i:7;i:8;i:8;i:2;i:9;i:6;i:10;i:8;i:11;i:12;i:12;i:6;i:13;i:128;i:14;i:2;i:15;i:12;i:16;i:199;i:17;i:1;i:18;i:1;i:19;i:55;i:20;i:8;i:21;i:7;i:22;i:8;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (340,2016,12,26,21,411,'a:24:{i:0;i:4;i:1;i:4;i:2;i:2;i:3;i:7;i:4;i:3;i:5;i:4;i:6;i:6;i:7;i:182;i:8;i:50;i:9;i:10;i:10;i:16;i:11;i:13;i:12;i:15;i:13;i:3;i:14;i:9;i:15;i:3;i:16;i:3;i:17;i:33;i:18;i:13;i:19;i:4;i:20;i:4;i:21;i:8;i:22;i:8;i:23;i:7;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (341,2016,12,27,27,311,'a:23:{i:0;i:4;i:1;i:4;i:2;i:5;i:3;i:14;i:4;i:2;i:5;i:3;i:6;i:10;i:7;i:8;i:8;i:4;i:9;i:6;i:10;i:4;i:11;i:86;i:12;i:7;i:13;i:17;i:15;i:2;i:16;i:4;i:17;i:8;i:18;i:7;i:19;i:70;i:20;i:15;i:21;i:7;i:22;i:10;i:23;i:14;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (342,2016,12,28,22,420,'a:24:{i:0;i:8;i:1;i:4;i:2;i:8;i:3;i:50;i:4;i:21;i:5;i:4;i:6;i:3;i:7;i:10;i:8;i:11;i:9;i:7;i:10;i:7;i:11;i:13;i:12;i:6;i:13;i:3;i:14;i:4;i:15;i:68;i:16;i:102;i:17;i:13;i:18;i:7;i:19;i:18;i:20;i:37;i:21;i:7;i:22;i:5;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (343,2016,12,29,28,463,'a:23:{i:0;i:9;i:1;i:275;i:2;i:7;i:3;i:2;i:4;i:4;i:5;i:2;i:6;i:4;i:7;i:8;i:8;i:1;i:9;i:9;i:10;i:6;i:11;i:7;i:12;i:18;i:13;i:10;i:14;i:6;i:15;i:42;i:16;i:3;i:17;i:28;i:18;i:6;i:19;i:4;i:20;i:6;i:21;i:2;i:22;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (344,2016,12,30,22,398,'a:24:{i:0;i:7;i:1;i:1;i:2;i:2;i:3;i:2;i:4;i:35;i:5;i:13;i:6;i:6;i:7;i:123;i:8;i:27;i:9;i:11;i:10;i:24;i:11;i:9;i:12;i:5;i:13;i:4;i:14;i:1;i:15;i:13;i:16;i:4;i:17;i:2;i:18;i:4;i:19;i:5;i:20;i:14;i:21;i:63;i:22;i:14;i:23;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (345,2016,12,31,22,610,'a:23:{i:0;i:8;i:1;i:5;i:2;i:3;i:3;i:3;i:4;i:7;i:5;i:4;i:6;i:7;i:7;i:4;i:8;i:6;i:9;i:153;i:10;i:248;i:11;i:14;i:12;i:16;i:13;i:10;i:14;i:13;i:16;i:32;i:17;i:10;i:18;i:8;i:19;i:10;i:20;i:8;i:21;i:3;i:22;i:1;i:23;i:37;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (346,2017,1,1,22,3649,'a:23:{i:0;i:4;i:1;i:7;i:2;i:3;i:3;i:2;i:4;i:6;i:6;i:1;i:7;i:1215;i:8;i:3;i:9;i:5;i:10;i:1347;i:11;i:48;i:12;i:5;i:13;i:2;i:14;i:707;i:15;i:30;i:16;i:39;i:17;i:5;i:18;i:8;i:19;i:117;i:20;i:33;i:21;i:8;i:22;i:4;i:23;i:50;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (347,2017,1,2,28,388,'a:24:{i:0;i:11;i:1;i:30;i:2;i:7;i:3;i:6;i:4;i:3;i:5;i:4;i:6;i:1;i:7;i:3;i:8;i:100;i:9;i:17;i:10;i:7;i:11;i:6;i:12;i:17;i:13;i:10;i:14;i:8;i:15;i:3;i:16;i:6;i:17;i:39;i:18;i:41;i:19;i:2;i:20;i:20;i:21;i:2;i:22;i:13;i:23;i:32;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (348,2017,1,3,23,1067,'a:21:{i:1;i:5;i:2;i:7;i:5;i:5;i:6;i:1;i:7;i:5;i:8;i:4;i:9;i:633;i:10;i:232;i:11;i:73;i:12;i:5;i:13;i:10;i:14;i:9;i:15;i:1;i:16;i:3;i:17;i:3;i:18;i:6;i:19;i:4;i:20;i:4;i:21;i:53;i:22;i:1;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (349,2017,1,4,22,641,'a:20:{i:0;i:14;i:2;i:1;i:5;i:9;i:7;i:4;i:8;i:340;i:9;i:15;i:10;i:1;i:11;i:7;i:12;i:5;i:13;i:5;i:14;i:3;i:15;i:4;i:16;i:7;i:17;i:15;i:18;i:168;i:19;i:6;i:20;i:3;i:21;i:6;i:22;i:8;i:23;i:20;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (350,2017,1,5,20,296,'a:24:{i:0;i:2;i:1;i:7;i:2;i:1;i:3;i:6;i:4;i:2;i:5;i:27;i:6;i:25;i:7;i:3;i:8;i:10;i:9;i:7;i:10;i:1;i:11;i:7;i:12;i:8;i:13;i:4;i:14;i:5;i:15;i:55;i:16;i:4;i:17;i:5;i:18;i:19;i:19;i:28;i:20;i:2;i:21;i:12;i:22;i:54;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (351,2017,1,6,14,392,'a:23:{i:0;i:4;i:1;i:2;i:2;i:6;i:3;i:6;i:4;i:2;i:5;i:2;i:6;i:6;i:7;i:7;i:8;i:9;i:9;i:27;i:10;i:2;i:11;i:3;i:13;i:8;i:14;i:12;i:15;i:6;i:16;i:4;i:17;i:7;i:18;i:2;i:19;i:260;i:20;i:5;i:21;i:5;i:22;i:4;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (352,2017,1,7,27,554,'a:24:{i:0;i:4;i:1;i:4;i:2;i:5;i:3;i:3;i:4;i:1;i:5;i:4;i:6;i:2;i:7;i:10;i:8;i:28;i:9;i:22;i:10;i:11;i:11;i:23;i:12;i:48;i:13;i:18;i:14;i:5;i:15;i:28;i:16;i:4;i:17;i:12;i:18;i:17;i:19;i:41;i:20;i:17;i:21;i:237;i:22;i:5;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (353,2017,1,8,19,349,'a:24:{i:0;i:5;i:1;i:1;i:2;i:20;i:3;i:4;i:4;i:4;i:5;i:10;i:6;i:118;i:7;i:6;i:8;i:3;i:9;i:6;i:10;i:13;i:11;i:15;i:12;i:14;i:13;i:7;i:14;i:2;i:15;i:14;i:16;i:3;i:17;i:26;i:18;i:40;i:19;i:7;i:20;i:1;i:21;i:4;i:22;i:2;i:23;i:24;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (354,2017,1,9,24,366,'a:23:{i:0;i:14;i:1;i:3;i:2;i:9;i:3;i:6;i:4;i:7;i:6;i:3;i:7;i:7;i:8;i:6;i:9;i:3;i:10;i:8;i:11;i:7;i:12;i:39;i:13;i:84;i:14;i:7;i:15;i:29;i:16;i:1;i:17;i:3;i:18;i:46;i:19;i:4;i:20;i:12;i:21;i:15;i:22;i:34;i:23;i:19;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (355,2017,1,10,120,0,'a:0:{}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (356,2017,1,11,17,184,'a:23:{i:0;i:42;i:1;i:1;i:2;i:6;i:3;i:7;i:5;i:2;i:6;i:8;i:7;i:5;i:8;i:5;i:9;i:39;i:10;i:5;i:11;i:7;i:12;i:3;i:13;i:2;i:14;i:2;i:15;i:2;i:16;i:5;i:17;i:1;i:18;i:5;i:19;i:8;i:20;i:3;i:21;i:7;i:22;i:18;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (357,2017,1,12,21,302,'a:22:{i:0;i:12;i:1;i:8;i:2;i:5;i:3;i:42;i:4;i:5;i:5;i:6;i:8;i:10;i:9;i:8;i:10;i:5;i:11;i:6;i:12;i:29;i:13;i:26;i:14;i:4;i:15;i:4;i:16;i:19;i:17;i:5;i:18;i:74;i:19;i:7;i:20;i:12;i:21;i:7;i:22;i:1;i:23;i:7;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (358,2017,1,13,25,1243,'a:23:{i:0;i:2;i:1;i:1;i:2;i:2;i:3;i:716;i:4;i:39;i:5;i:6;i:6;i:1;i:7;i:8;i:8;i:88;i:9;i:6;i:10;i:223;i:11;i:11;i:12;i:1;i:13;i:14;i:14;i:3;i:15;i:67;i:16;i:15;i:18;i:12;i:19;i:1;i:20;i:11;i:21;i:1;i:22;i:9;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (359,2017,1,14,24,277,'a:24:{i:0;i:2;i:1;i:5;i:2;i:2;i:3;i:1;i:4;i:4;i:5;i:3;i:6;i:9;i:7;i:7;i:8;i:8;i:9;i:11;i:10;i:14;i:11;i:53;i:12;i:7;i:13;i:8;i:14;i:7;i:15;i:70;i:16;i:7;i:17;i:12;i:18;i:2;i:19;i:9;i:20;i:10;i:21;i:4;i:22;i:18;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (360,2017,1,15,25,939,'a:24:{i:0;i:5;i:1;i:2;i:2;i:6;i:3;i:7;i:4;i:20;i:5;i:4;i:6;i:15;i:7;i:5;i:8;i:7;i:9;i:525;i:10;i:12;i:11;i:24;i:12;i:24;i:13;i:15;i:14;i:48;i:15;i:19;i:16;i:10;i:17;i:9;i:18;i:7;i:19;i:7;i:20;i:64;i:21;i:63;i:22;i:21;i:23;i:20;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (361,2017,1,16,19,217,'a:23:{i:0;i:4;i:1;i:4;i:2;i:2;i:3;i:1;i:4;i:4;i:6;i:6;i:7;i:48;i:8;i:7;i:9;i:5;i:10;i:6;i:11;i:11;i:12;i:18;i:13;i:27;i:14;i:2;i:15;i:16;i:16;i:22;i:17;i:5;i:18;i:5;i:19;i:5;i:20;i:4;i:21;i:1;i:22;i:1;i:23;i:13;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (362,2017,1,17,21,204,'a:20:{i:1;i:1;i:3;i:50;i:4;i:20;i:5;i:1;i:6;i:2;i:7;i:1;i:8;i:6;i:9;i:3;i:10;i:2;i:11;i:5;i:12;i:5;i:14;i:8;i:15;i:3;i:16;i:22;i:17;i:4;i:18;i:42;i:19;i:2;i:20;i:14;i:21;i:4;i:22;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (363,2017,1,18,16,237,'a:24:{i:0;i:13;i:1;i:35;i:2;i:5;i:3;i:2;i:4;i:10;i:5;i:3;i:6;i:7;i:7;i:5;i:8;i:7;i:9;i:8;i:10;i:11;i:11;i:2;i:12;i:2;i:13;i:5;i:14;i:5;i:15;i:1;i:16;i:3;i:17;i:2;i:18;i:3;i:19;i:6;i:20;i:88;i:21;i:9;i:22;i:2;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (364,2017,1,19,20,1441,'a:24:{i:0;i:3;i:1;i:97;i:2;i:4;i:3;i:3;i:4;i:133;i:5;i:1;i:6;i:1;i:7;i:256;i:8;i:7;i:9;i:246;i:10;i:346;i:11;i:100;i:12;i:2;i:13;i:110;i:14;i:58;i:15;i:27;i:16;i:13;i:17;i:4;i:18;i:1;i:19;i:6;i:20;i:4;i:21;i:14;i:22;i:2;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (365,2017,1,20,20,161,'a:24:{i:0;i:1;i:1;i:1;i:2;i:2;i:3;i:2;i:4;i:2;i:5;i:2;i:6;i:4;i:7;i:25;i:8;i:5;i:9;i:3;i:10;i:2;i:11;i:5;i:12;i:6;i:13;i:1;i:14;i:4;i:15;i:14;i:16;i:37;i:17;i:12;i:18;i:10;i:19;i:7;i:20;i:4;i:21;i:6;i:22;i:5;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (366,2017,1,21,25,302,'a:24:{i:0;i:1;i:1;i:1;i:2;i:19;i:3;i:2;i:4;i:4;i:5;i:2;i:6;i:26;i:7;i:22;i:8;i:27;i:9;i:16;i:10;i:9;i:11;i:36;i:12;i:10;i:13;i:16;i:14;i:5;i:15;i:4;i:16;i:10;i:17;i:11;i:18;i:7;i:19;i:5;i:20;i:11;i:21;i:43;i:22;i:6;i:23;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (367,2017,1,22,23,507,'a:24:{i:0;i:16;i:1;i:5;i:2;i:6;i:3;i:18;i:4;i:7;i:5;i:2;i:6;i:1;i:7;i:39;i:8;i:5;i:9;i:1;i:10;i:10;i:11;i:8;i:12;i:7;i:13;i:13;i:14;i:103;i:15;i:12;i:16;i:6;i:17;i:1;i:18;i:50;i:19;i:119;i:20;i:9;i:21;i:23;i:22;i:44;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (368,2017,1,23,29,1238,'a:24:{i:0;i:7;i:1;i:2;i:2;i:3;i:3;i:1;i:4;i:23;i:5;i:2;i:6;i:48;i:7;i:439;i:8;i:87;i:9;i:22;i:10;i:20;i:11;i:45;i:12;i:8;i:13;i:9;i:14;i:10;i:15;i:5;i:16;i:13;i:17;i:9;i:18;i:6;i:19;i:129;i:20;i:288;i:21;i:4;i:22;i:1;i:23;i:57;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (369,2017,1,24,18,573,'a:24:{i:0;i:3;i:1;i:115;i:2;i:3;i:3;i:25;i:4;i:9;i:5;i:1;i:6;i:9;i:7;i:12;i:8;i:20;i:9;i:68;i:10;i:21;i:11;i:156;i:12;i:8;i:13;i:9;i:14;i:18;i:15;i:23;i:16;i:5;i:17;i:6;i:18;i:18;i:19;i:10;i:20;i:7;i:21;i:13;i:22;i:8;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (370,2017,1,25,24,1079,'a:23:{i:1;i:9;i:2;i:59;i:3;i:108;i:4;i:5;i:5;i:7;i:6;i:3;i:7;i:14;i:8;i:119;i:9;i:39;i:10;i:45;i:11;i:4;i:12;i:87;i:13;i:19;i:14;i:385;i:15;i:19;i:16;i:2;i:17;i:3;i:18;i:15;i:19;i:14;i:20;i:66;i:21;i:12;i:22;i:42;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (371,2017,1,26,19,582,'a:23:{i:0;i:75;i:1;i:107;i:3;i:5;i:4;i:5;i:5;i:2;i:6;i:9;i:7;i:4;i:8;i:92;i:9;i:42;i:10;i:26;i:11;i:8;i:12;i:9;i:13;i:4;i:14;i:8;i:15;i:10;i:16;i:11;i:17;i:4;i:18;i:100;i:19;i:5;i:20;i:33;i:21;i:10;i:22;i:8;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (372,2017,1,27,22,319,'a:24:{i:0;i:5;i:1;i:4;i:2;i:4;i:3;i:13;i:4;i:3;i:5;i:8;i:6;i:3;i:7;i:5;i:8;i:9;i:9;i:2;i:10;i:1;i:11;i:92;i:12;i:3;i:13;i:29;i:14;i:19;i:15;i:13;i:16;i:12;i:17;i:6;i:18;i:11;i:19;i:3;i:20;i:34;i:21;i:20;i:22;i:7;i:23;i:13;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (373,2017,1,28,22,246,'a:24:{i:0;i:5;i:1;i:19;i:2;i:14;i:3;i:4;i:4;i:3;i:5;i:3;i:6;i:2;i:7;i:1;i:8;i:3;i:9;i:9;i:10;i:9;i:11;i:4;i:12;i:6;i:13;i:5;i:14;i:14;i:15;i:14;i:16;i:98;i:17;i:7;i:18;i:5;i:19;i:15;i:20;i:1;i:21;i:1;i:22;i:2;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (374,2017,1,29,22,2563,'a:23:{i:0;i:10;i:1;i:4;i:2;i:3;i:3;i:2;i:4;i:978;i:5;i:3;i:6;i:1;i:7;i:99;i:8;i:202;i:9;i:46;i:10;i:13;i:11;i:299;i:12;i:719;i:13;i:7;i:15;i:11;i:16;i:18;i:17;i:1;i:18;i:58;i:19;i:64;i:20;i:7;i:21;i:4;i:22;i:12;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (375,2017,1,30,21,474,'a:23:{i:0;i:2;i:1;i:2;i:2;i:9;i:3;i:2;i:4;i:2;i:5;i:7;i:6;i:5;i:7;i:64;i:8;i:4;i:9;i:11;i:10;i:21;i:12;i:14;i:13;i:5;i:14;i:7;i:15;i:3;i:16;i:9;i:17;i:2;i:18;i:3;i:19;i:3;i:20;i:1;i:21;i:137;i:22;i:150;i:23;i:11;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (376,2017,1,31,36,273,'a:23:{i:0;i:7;i:1;i:4;i:2;i:4;i:3;i:3;i:4;i:6;i:5;i:4;i:6;i:1;i:7;i:12;i:8;i:34;i:9;i:7;i:10;i:5;i:11;i:1;i:13;i:35;i:14;i:8;i:15;i:16;i:16;i:10;i:17;i:15;i:18;i:5;i:19;i:19;i:20;i:66;i:21;i:3;i:22;i:3;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (377,2017,2,1,23,309,'a:23:{i:0;i:22;i:1;i:3;i:2;i:10;i:3;i:2;i:4;i:9;i:5;i:2;i:6;i:12;i:7;i:7;i:8;i:24;i:9;i:12;i:10;i:35;i:11;i:7;i:12;i:3;i:13;i:25;i:14;i:4;i:15;i:9;i:16;i:7;i:17;i:4;i:19;i:4;i:20;i:70;i:21;i:11;i:22;i:18;i:23;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (378,2017,2,2,28,329,'a:24:{i:0;i:1;i:1;i:6;i:2;i:6;i:3;i:4;i:4;i:8;i:5;i:7;i:6;i:50;i:7;i:9;i:8;i:12;i:9;i:10;i:10;i:13;i:11;i:24;i:12;i:27;i:13;i:9;i:14;i:73;i:15;i:4;i:16;i:4;i:17;i:8;i:18;i:6;i:19;i:11;i:20;i:24;i:21;i:2;i:22;i:4;i:23;i:7;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (379,2017,2,3,27,286,'a:24:{i:0;i:19;i:1;i:7;i:2;i:1;i:3;i:8;i:4;i:2;i:5;i:13;i:6;i:2;i:7;i:9;i:8;i:7;i:9;i:7;i:10;i:8;i:11;i:26;i:12;i:11;i:13;i:48;i:14;i:14;i:15;i:12;i:16;i:2;i:17;i:35;i:18;i:7;i:19;i:3;i:20;i:8;i:21;i:26;i:22;i:10;i:23;i:1;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (380,2017,2,4,15,168,'a:22:{i:1;i:1;i:2;i:10;i:3;i:1;i:5;i:2;i:6;i:3;i:7;i:21;i:8;i:10;i:9;i:31;i:10;i:4;i:11;i:7;i:12;i:7;i:13;i:9;i:14;i:1;i:15;i:1;i:16;i:9;i:17;i:10;i:18;i:9;i:19;i:13;i:20;i:11;i:21;i:2;i:22;i:4;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (381,2017,2,5,18,215,'a:24:{i:0;i:7;i:1;i:6;i:2;i:12;i:3;i:6;i:4;i:6;i:5;i:7;i:6;i:4;i:7;i:7;i:8;i:8;i:9;i:15;i:10;i:17;i:11;i:16;i:12;i:7;i:13;i:10;i:14;i:12;i:15;i:4;i:16;i:5;i:17;i:10;i:18;i:12;i:19;i:6;i:20;i:7;i:21;i:8;i:22;i:12;i:23;i:11;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (382,2017,2,6,19,225,'a:24:{i:0;i:7;i:1;i:6;i:2;i:8;i:3;i:9;i:4;i:3;i:5;i:6;i:6;i:1;i:7;i:18;i:8;i:17;i:9;i:9;i:10;i:5;i:11;i:15;i:12;i:9;i:13;i:19;i:14;i:15;i:15;i:11;i:16;i:12;i:17;i:13;i:18;i:9;i:19;i:1;i:20;i:11;i:21;i:2;i:22;i:7;i:23;i:12;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (383,2017,2,7,23,158,'a:24:{i:0;i:3;i:1;i:7;i:2;i:6;i:3;i:5;i:4;i:8;i:5;i:4;i:6;i:10;i:7;i:13;i:8;i:7;i:9;i:10;i:10;i:2;i:11;i:15;i:12;i:4;i:13;i:3;i:14;i:4;i:15;i:6;i:16;i:5;i:17;i:4;i:18;i:7;i:19;i:7;i:20;i:6;i:21;i:10;i:22;i:3;i:23;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (384,2017,2,8,25,1597,'a:24:{i:0;i:711;i:1;i:301;i:2;i:5;i:3;i:7;i:4;i:4;i:5;i:4;i:6;i:2;i:7;i:3;i:8;i:6;i:9;i:8;i:10;i:14;i:11;i:15;i:12;i:9;i:13;i:91;i:14;i:5;i:15;i:337;i:16;i:26;i:17;i:6;i:18;i:7;i:19;i:1;i:20;i:10;i:21;i:11;i:22;i:5;i:23;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (385,2017,2,9,22,368,'a:24:{i:0;i:9;i:1;i:7;i:2;i:3;i:3;i:2;i:4;i:4;i:5;i:4;i:6;i:76;i:7;i:11;i:8;i:8;i:9;i:5;i:10;i:7;i:11;i:43;i:12;i:7;i:13;i:5;i:14;i:5;i:15;i:3;i:16;i:8;i:17;i:15;i:18;i:78;i:19;i:10;i:20;i:33;i:21;i:9;i:22;i:4;i:23;i:12;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (386,2017,2,10,24,210,'a:23:{i:0;i:8;i:1;i:6;i:2;i:6;i:3;i:11;i:4;i:10;i:5;i:5;i:6;i:7;i:7;i:11;i:8;i:19;i:9;i:11;i:10;i:21;i:11;i:7;i:12;i:4;i:13;i:6;i:14;i:6;i:15;i:10;i:17;i:6;i:18;i:7;i:19;i:7;i:20;i:12;i:21;i:9;i:22;i:14;i:23;i:7;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (387,2017,2,11,23,569,'a:24:{i:0;i:5;i:1;i:1;i:2;i:4;i:3;i:6;i:4;i:16;i:5;i:7;i:6;i:3;i:7;i:5;i:8;i:11;i:9;i:332;i:10;i:4;i:11;i:22;i:12;i:41;i:13;i:11;i:14;i:7;i:15;i:5;i:16;i:6;i:17;i:5;i:18;i:16;i:19;i:7;i:20;i:9;i:21;i:7;i:22;i:12;i:23;i:27;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (388,2017,2,12,23,409,'a:24:{i:0;i:13;i:1;i:15;i:2;i:11;i:3;i:10;i:4;i:11;i:5;i:15;i:6;i:9;i:7;i:51;i:8;i:15;i:9;i:24;i:10;i:11;i:11;i:72;i:12;i:15;i:13;i:24;i:14;i:8;i:15;i:18;i:16;i:18;i:17;i:4;i:18;i:13;i:19;i:24;i:20;i:11;i:21;i:5;i:22;i:6;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (389,2017,2,13,24,254,'a:12:{i:12;i:15;i:13;i:8;i:14;i:10;i:15;i:6;i:16;i:34;i:17;i:13;i:18;i:136;i:19;i:4;i:20;i:8;i:21;i:8;i:22;i:6;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (390,2017,2,14,24,532,'a:24:{i:0;i:6;i:1;i:4;i:2;i:5;i:3;i:236;i:4;i:48;i:5;i:5;i:6;i:5;i:7;i:5;i:8;i:19;i:9;i:9;i:10;i:6;i:11;i:6;i:12;i:9;i:13;i:9;i:14;i:12;i:15;i:16;i:16;i:5;i:17;i:14;i:18;i:8;i:19;i:4;i:20;i:12;i:21;i:10;i:22;i:72;i:23;i:7;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (391,2017,2,15,27,251,'a:24:{i:0;i:14;i:1;i:1;i:2;i:6;i:3;i:5;i:4;i:1;i:5;i:5;i:6;i:5;i:7;i:8;i:8;i:24;i:9;i:5;i:10;i:5;i:11;i:7;i:12;i:16;i:13;i:12;i:14;i:16;i:15;i:7;i:16;i:36;i:17;i:11;i:18;i:8;i:19;i:5;i:20;i:3;i:21;i:25;i:22;i:12;i:23;i:14;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (392,2017,2,16,20,439,'a:23:{i:0;i:11;i:1;i:6;i:2;i:3;i:3;i:8;i:4;i:272;i:5;i:2;i:7;i:6;i:8;i:9;i:9;i:8;i:10;i:9;i:11;i:13;i:12;i:8;i:13;i:3;i:14;i:8;i:15;i:4;i:16;i:5;i:17;i:10;i:18;i:13;i:19;i:4;i:20;i:15;i:21;i:7;i:22;i:5;i:23;i:10;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (393,2017,2,17,28,1183,'a:23:{i:0;i:3;i:1;i:5;i:2;i:6;i:3;i:6;i:4;i:4;i:6;i:3;i:7;i:4;i:8;i:8;i:9;i:6;i:10;i:27;i:11;i:9;i:12;i:1;i:13;i:9;i:14;i:8;i:15;i:60;i:16;i:731;i:17;i:232;i:18;i:7;i:19;i:5;i:20;i:6;i:21;i:6;i:22;i:30;i:23;i:7;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (394,2017,2,18,26,216,'a:23:{i:0;i:4;i:1;i:4;i:2;i:2;i:3;i:7;i:4;i:9;i:5;i:9;i:7;i:13;i:8;i:11;i:9;i:7;i:10;i:6;i:11;i:4;i:12;i:8;i:13;i:3;i:14;i:5;i:15;i:4;i:16;i:10;i:17;i:3;i:18;i:8;i:19;i:5;i:20;i:60;i:21;i:29;i:22;i:3;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (395,2017,2,19,20,673,'a:24:{i:0;i:4;i:1;i:12;i:2;i:8;i:3;i:16;i:4;i:9;i:5;i:5;i:6;i:7;i:7;i:83;i:8;i:361;i:9;i:7;i:10;i:8;i:11;i:12;i:12;i:7;i:13;i:5;i:14;i:14;i:15;i:5;i:16;i:4;i:17;i:5;i:18;i:7;i:19;i:74;i:20;i:3;i:21;i:5;i:22;i:10;i:23;i:2;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (396,2017,2,20,26,264,'a:24:{i:0;i:7;i:1;i:2;i:2;i:7;i:3;i:18;i:4;i:5;i:5;i:2;i:6;i:7;i:7;i:16;i:8;i:17;i:9;i:10;i:10;i:17;i:11;i:10;i:12;i:8;i:13;i:10;i:14;i:10;i:15;i:3;i:16;i:14;i:17;i:15;i:18;i:17;i:19;i:6;i:20;i:12;i:21;i:9;i:22;i:12;i:23;i:30;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (397,2017,2,21,22,168,'a:24:{i:0;i:28;i:1;i:9;i:2;i:2;i:3;i:6;i:4;i:1;i:5;i:4;i:6;i:6;i:7;i:5;i:8;i:9;i:9;i:6;i:10;i:14;i:11;i:6;i:12;i:3;i:13;i:6;i:14;i:13;i:15;i:5;i:16;i:8;i:17;i:10;i:18;i:2;i:19;i:7;i:20;i:6;i:21;i:6;i:22;i:3;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (398,2017,2,22,27,653,'a:24:{i:0;i:5;i:1;i:8;i:2;i:1;i:3;i:5;i:4;i:13;i:5;i:10;i:6;i:6;i:7;i:11;i:8;i:24;i:9;i:48;i:10;i:18;i:11;i:4;i:12;i:11;i:13;i:8;i:14;i:11;i:15;i:5;i:16;i:32;i:17;i:8;i:18;i:391;i:19;i:5;i:20;i:8;i:21;i:10;i:22;i:5;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (399,2017,2,23,27,208,'a:24:{i:0;i:10;i:1;i:6;i:2;i:2;i:3;i:18;i:4;i:7;i:5;i:5;i:6;i:4;i:7;i:6;i:8;i:7;i:9;i:7;i:10;i:10;i:11;i:15;i:12;i:13;i:13;i:11;i:14;i:6;i:15;i:11;i:16;i:2;i:17;i:14;i:18;i:11;i:19;i:4;i:20;i:9;i:21;i:5;i:22;i:21;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (400,2017,2,24,21,652,'a:24:{i:0;i:6;i:1;i:8;i:2;i:6;i:3;i:4;i:4;i:15;i:5;i:2;i:6;i:7;i:7;i:10;i:8;i:13;i:9;i:46;i:10;i:11;i:11;i:15;i:12;i:9;i:13;i:35;i:14;i:6;i:15;i:4;i:16;i:396;i:17;i:7;i:18;i:21;i:19;i:5;i:20;i:4;i:21;i:8;i:22;i:7;i:23;i:7;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (401,2017,2,25,27,812,'a:24:{i:0;i:5;i:1;i:10;i:2;i:7;i:3;i:3;i:4;i:4;i:5;i:7;i:6;i:3;i:7;i:318;i:8;i:9;i:9;i:47;i:10;i:119;i:11;i:4;i:12;i:9;i:13;i:7;i:14;i:67;i:15;i:5;i:16;i:8;i:17;i:10;i:18;i:11;i:19;i:38;i:20;i:25;i:21;i:38;i:22;i:52;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (402,2017,2,26,18,1333,'a:24:{i:0;i:8;i:1;i:12;i:2;i:1;i:3;i:2;i:4;i:3;i:5;i:8;i:6;i:7;i:7;i:14;i:8;i:41;i:9;i:34;i:10;i:4;i:11;i:4;i:12;i:3;i:13;i:8;i:14;i:10;i:15;i:37;i:16;i:11;i:17;i:17;i:18;i:16;i:19;i:51;i:20;i:12;i:21;i:7;i:22;i:403;i:23;i:620;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (403,2017,2,27,23,593,'a:24:{i:0;i:13;i:1;i:7;i:2;i:9;i:3;i:8;i:4;i:12;i:5;i:7;i:6;i:17;i:7;i:240;i:8;i:4;i:9;i:16;i:10;i:130;i:11;i:16;i:12;i:13;i:13;i:6;i:14;i:6;i:15;i:9;i:16;i:8;i:17;i:14;i:18;i:14;i:19;i:14;i:20;i:5;i:21;i:16;i:22;i:6;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (404,2017,2,28,18,230,'a:24:{i:0;i:4;i:1;i:4;i:2;i:4;i:3;i:16;i:4;i:17;i:5;i:7;i:6;i:9;i:7;i:7;i:8;i:11;i:9;i:11;i:10;i:13;i:11;i:15;i:12;i:14;i:13;i:8;i:14;i:10;i:15;i:5;i:16;i:6;i:17;i:13;i:18;i:5;i:19;i:15;i:20;i:7;i:21;i:13;i:22;i:8;i:23;i:8;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (405,2017,3,1,20,715,'a:24:{i:0;i:7;i:1;i:3;i:2;i:4;i:3;i:7;i:4;i:7;i:5;i:7;i:6;i:6;i:7;i:12;i:8;i:19;i:9;i:9;i:10;i:14;i:11;i:23;i:12;i:9;i:13;i:9;i:14;i:8;i:15;i:10;i:16;i:7;i:17;i:6;i:18;i:483;i:19;i:4;i:20;i:38;i:21;i:8;i:22;i:9;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (406,2017,3,2,13,162,'a:23:{i:0;i:5;i:1;i:1;i:3;i:6;i:4;i:6;i:5;i:8;i:6;i:5;i:7;i:9;i:8;i:9;i:9;i:2;i:10;i:9;i:11;i:4;i:12;i:6;i:13;i:10;i:14;i:6;i:15;i:3;i:16;i:2;i:17;i:6;i:18;i:7;i:19;i:11;i:20;i:8;i:21;i:6;i:22;i:13;i:23;i:20;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (407,2017,3,3,16,390,'a:24:{i:0;i:8;i:1;i:7;i:2;i:4;i:3;i:1;i:4;i:2;i:5;i:5;i:6;i:7;i:7;i:8;i:8;i:5;i:9;i:6;i:10;i:19;i:11;i:6;i:12;i:6;i:13;i:4;i:14;i:12;i:15;i:9;i:16;i:222;i:17;i:12;i:18;i:7;i:19;i:14;i:20;i:12;i:21;i:4;i:22;i:5;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (408,2017,3,4,20,236,'a:24:{i:0;i:9;i:1;i:14;i:2;i:14;i:3;i:11;i:4;i:6;i:5;i:8;i:6;i:9;i:7;i:10;i:8;i:11;i:9;i:9;i:10;i:5;i:11;i:18;i:12;i:2;i:13;i:6;i:14;i:5;i:15;i:28;i:16;i:13;i:17;i:11;i:18;i:11;i:19;i:5;i:20;i:10;i:21;i:7;i:22;i:9;i:23;i:5;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (409,2017,3,5,20,280,'a:24:{i:0;i:9;i:1;i:14;i:2;i:5;i:3;i:5;i:4;i:10;i:5;i:3;i:6;i:8;i:7;i:18;i:8;i:11;i:9;i:7;i:10;i:5;i:11;i:9;i:12;i:5;i:13;i:4;i:14;i:2;i:15;i:39;i:16;i:5;i:17;i:3;i:18;i:3;i:19;i:64;i:20;i:8;i:21;i:26;i:22;i:8;i:23;i:9;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (410,2017,3,6,29,561,'a:24:{i:0;i:9;i:1;i:9;i:2;i:7;i:3;i:2;i:4;i:117;i:5;i:19;i:6;i:7;i:7;i:6;i:8;i:11;i:9;i:16;i:10;i:11;i:11;i:12;i:12;i:7;i:13;i:13;i:14;i:53;i:15;i:215;i:16;i:11;i:17;i:4;i:18;i:5;i:19;i:9;i:20;i:6;i:21;i:6;i:22;i:2;i:23;i:4;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (411,2017,3,7,21,429,'a:24:{i:0;i:1;i:1;i:7;i:2;i:9;i:3;i:9;i:4;i:6;i:5;i:9;i:6;i:5;i:7;i:8;i:8;i:11;i:9;i:52;i:10;i:7;i:11;i:6;i:12;i:178;i:13;i:7;i:14;i:7;i:15;i:4;i:16;i:9;i:17;i:18;i:18;i:10;i:19;i:20;i:20;i:32;i:21;i:6;i:22;i:5;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (412,2017,3,8,29,1231,'a:24:{i:0;i:8;i:1;i:3;i:2;i:5;i:3;i:5;i:4;i:621;i:5;i:387;i:6;i:20;i:7;i:8;i:8;i:12;i:9;i:5;i:10;i:27;i:11;i:4;i:12;i:9;i:13;i:20;i:14;i:6;i:15;i:29;i:16;i:2;i:17;i:3;i:18;i:6;i:19;i:8;i:20;i:12;i:21;i:9;i:22;i:10;i:23;i:12;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (413,2017,3,9,18,394,'a:24:{i:0;i:17;i:1;i:3;i:2;i:2;i:3;i:6;i:4;i:4;i:5;i:1;i:6;i:5;i:7;i:6;i:8;i:5;i:9;i:8;i:10;i:121;i:11;i:3;i:12;i:12;i:13;i:6;i:14;i:6;i:15;i:7;i:16;i:7;i:17;i:4;i:18;i:7;i:19;i:8;i:20;i:7;i:21;i:77;i:22;i:35;i:23;i:37;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (414,2017,3,10,16,190,'a:24:{i:0;i:13;i:1;i:10;i:2;i:2;i:3;i:5;i:4;i:1;i:5;i:7;i:6;i:12;i:7;i:13;i:8;i:9;i:9;i:7;i:10;i:8;i:11;i:14;i:12;i:3;i:13;i:3;i:14;i:6;i:15;i:5;i:16;i:5;i:17;i:5;i:18;i:13;i:19;i:12;i:20;i:7;i:21;i:12;i:22;i:10;i:23;i:8;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (415,2017,3,11,27,456,'a:24:{i:0;i:1;i:1;i:2;i:2;i:2;i:3;i:3;i:4;i:2;i:5;i:5;i:6;i:23;i:7;i:16;i:8;i:16;i:9;i:127;i:10;i:54;i:11;i:26;i:12;i:11;i:13;i:5;i:14;i:5;i:15;i:7;i:16;i:1;i:17;i:2;i:18;i:2;i:19;i:89;i:20;i:5;i:21;i:16;i:22;i:10;i:23;i:26;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (416,2017,3,12,34,598,'a:24:{i:0;i:2;i:1;i:7;i:2;i:6;i:3;i:4;i:4;i:247;i:5;i:17;i:6;i:35;i:7;i:38;i:8;i:44;i:9;i:10;i:10;i:11;i:11;i:18;i:12;i:28;i:13;i:4;i:14;i:35;i:15;i:3;i:16;i:2;i:17;i:4;i:18;i:5;i:19;i:17;i:20;i:36;i:21;i:11;i:22;i:11;i:23;i:3;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (417,2017,3,13,24,243,'a:22:{i:0;i:2;i:1;i:7;i:2;i:4;i:3;i:2;i:4;i:5;i:6;i:2;i:7;i:7;i:8;i:2;i:9;i:7;i:10;i:6;i:11;i:52;i:12;i:20;i:13;i:11;i:14;i:24;i:16;i:7;i:17;i:3;i:18;i:3;i:19;i:6;i:20;i:8;i:21;i:17;i:22;i:28;i:23;i:20;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (418,2017,3,14,19,404,'a:24:{i:0;i:13;i:1;i:7;i:2;i:2;i:3;i:8;i:4;i:6;i:5;i:12;i:6;i:13;i:7;i:13;i:8;i:20;i:9;i:77;i:10;i:24;i:11;i:9;i:12;i:5;i:13;i:45;i:14;i:8;i:15;i:10;i:16;i:32;i:17;i:24;i:18;i:24;i:19;i:21;i:20;i:12;i:21;i:4;i:22;i:4;i:23;i:11;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (419,2017,3,15,31,345,'a:24:{i:0;i:6;i:1;i:3;i:2;i:1;i:3;i:13;i:4;i:24;i:5;i:40;i:6;i:9;i:7;i:22;i:8;i:22;i:9;i:12;i:10;i:18;i:11;i:13;i:12;i:11;i:13;i:28;i:14;i:7;i:15;i:12;i:16;i:6;i:17;i:8;i:18;i:11;i:19;i:9;i:20;i:3;i:21;i:13;i:22;i:10;i:23;i:44;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (420,2017,3,16,26,712,'a:24:{i:0;i:18;i:1;i:8;i:2;i:11;i:3;i:2;i:4;i:10;i:5;i:16;i:6;i:11;i:7;i:14;i:8;i:11;i:9;i:50;i:10;i:9;i:11;i:4;i:12;i:6;i:13;i:11;i:14;i:11;i:15;i:7;i:16;i:5;i:17;i:106;i:18;i:88;i:19;i:184;i:20;i:14;i:21;i:7;i:22;i:66;i:23;i:43;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (421,2017,3,17,21,2084,'a:24:{i:0;i:16;i:1;i:63;i:2;i:47;i:3;i:27;i:4;i:113;i:5;i:4;i:6;i:106;i:7;i:7;i:8;i:104;i:9;i:7;i:10;i:434;i:11;i:732;i:12;i:108;i:13;i:6;i:14;i:105;i:15;i:112;i:16;i:7;i:17;i:14;i:18;i:10;i:19;i:11;i:20;i:31;i:21;i:5;i:22;i:4;i:23;i:11;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (422,2017,3,18,29,383,'a:24:{i:0;i:9;i:1;i:7;i:2;i:7;i:3;i:8;i:4;i:3;i:5;i:8;i:6;i:10;i:7;i:13;i:8;i:5;i:9;i:13;i:10;i:14;i:11;i:29;i:12;i:28;i:13;i:11;i:14;i:4;i:15;i:11;i:16;i:11;i:17;i:5;i:18;i:11;i:19;i:27;i:20;i:121;i:21;i:11;i:22;i:11;i:23;i:6;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (423,2017,3,19,27,1245,'a:24:{i:0;i:10;i:1;i:253;i:2;i:784;i:3;i:5;i:4;i:5;i:5;i:4;i:6;i:4;i:7;i:9;i:8;i:8;i:9;i:5;i:10;i:36;i:11;i:10;i:12;i:9;i:13;i:10;i:14;i:4;i:15;i:13;i:16;i:6;i:17;i:6;i:18;i:7;i:19;i:13;i:20;i:12;i:21;i:8;i:22;i:16;i:23;i:8;}');
INSERT INTO `phpboost_stats` (`id`, `stats_year`, `stats_month`, `stats_day`, `nbr`, `pages`, `pages_detail`) VALUES (424,2017,3,20,32,629,'a:24:{i:0;i:6;i:1;i:6;i:2;i:15;i:3;i:3;i:4;i:1;i:5;i:6;i:6;i:8;i:7;i:12;i:8;i:8;i:9;i:9;i:10;i:63;i:11;i:38;i:12;i:11;i:13;i:8;i:14;i:34;i:15;i:45;i:16;i:6;i:17;i:23;i:18;i:12;i:19;i:16;i:20;i:67;i:21;i:5;i:22;i:223;i:23;i:4;}');
DROP TABLE IF EXISTS `phpboost_stats_referer`;
CREATE TABLE `phpboost_stats_referer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT '',
  `relative_url` varchar(255) DEFAULT '',
  `total_visit` int(11) NOT NULL DEFAULT '0',
  `today_visit` int(11) NOT NULL DEFAULT '0',
  `yesterday_visit` int(11) NOT NULL DEFAULT '0',
  `nbr_day` int(11) NOT NULL DEFAULT '0',
  `last_update` int(11) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `url` (`url`,`relative_url`)
) ENGINE=MyISAM AUTO_INCREMENT=853 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_stats_referer` (`id`, `url`, `relative_url`, `total_visit`, `today_visit`, `yesterday_visit`, `nbr_day`, `last_update`, `type`) VALUES (846,'http://www.aeromodelisme-sablais.fr','/sitemap/index.php',23,0,0,5,1489747229,0);
INSERT INTO `phpboost_stats_referer` (`id`, `url`, `relative_url`, `total_visit`, `today_visit`, `yesterday_visit`, `nbr_day`, `last_update`, `type`) VALUES (847,'http://www.aeromodelisme-sablais.fr','/',6,0,0,5,1489747893,0);
INSERT INTO `phpboost_stats_referer` (`id`, `url`, `relative_url`, `total_visit`, `today_visit`, `yesterday_visit`, `nbr_day`, `last_update`, `type`) VALUES (842,'http://gay.hotel.hotblog.top','/',1,0,0,7,1489551585,0);
INSERT INTO `phpboost_stats_referer` (`id`, `url`, `relative_url`, `total_visit`, `today_visit`, `yesterday_visit`, `nbr_day`, `last_update`, `type`) VALUES (840,'http://casino1.pro','/',2,0,0,8,1489816445,0);
INSERT INTO `phpboost_stats_referer` (`id`, `url`, `relative_url`, `total_visit`, `today_visit`, `yesterday_visit`, `nbr_day`, `last_update`, `type`) VALUES (822,'http://lesgpr.zhype.com','/',12,1,0,17,1490112039,0);
INSERT INTO `phpboost_stats_referer` (`id`, `url`, `relative_url`, `total_visit`, `today_visit`, `yesterday_visit`, `nbr_day`, `last_update`, `type`) VALUES (852,'http://whois.domaintools.com','/aeromodelisme-sablais.fr',1,1,0,1,1490055178,0);
INSERT INTO `phpboost_stats_referer` (`id`, `url`, `relative_url`, `total_visit`, `today_visit`, `yesterday_visit`, `nbr_day`, `last_update`, `type`) VALUES (848,'http://jerk.galleries.porngalleries.top','/',1,0,0,4,1489816144,0);
INSERT INTO `phpboost_stats_referer` (`id`, `url`, `relative_url`, `total_visit`, `today_visit`, `yesterday_visit`, `nbr_day`, `last_update`, `type`) VALUES (849,'http://exclusive-galleries.erolove.top','/',1,0,0,4,1489820188,0);
INSERT INTO `phpboost_stats_referer` (`id`, `url`, `relative_url`, `total_visit`, `today_visit`, `yesterday_visit`, `nbr_day`, `last_update`, `type`) VALUES (850,'http://business.telrock.net','/',1,0,0,4,1489825173,0);
INSERT INTO `phpboost_stats_referer` (`id`, `url`, `relative_url`, `total_visit`, `today_visit`, `yesterday_visit`, `nbr_day`, `last_update`, `type`) VALUES (843,'http://www.ffam.asso.fr','/fr/pratiquer-l-aeromodelisme/trouver-un-club-pres-de-chez-vous/resultats.html',2,0,0,6,1489692904,0);
INSERT INTO `phpboost_stats_referer` (`id`, `url`, `relative_url`, `total_visit`, `today_visit`, `yesterday_visit`, `nbr_day`, `last_update`, `type`) VALUES (845,'https://www.phpboost.com','/web/visit/10',1,0,0,5,1489735411,0);
INSERT INTO `phpboost_stats_referer` (`id`, `url`, `relative_url`, `total_visit`, `today_visit`, `yesterday_visit`, `nbr_day`, `last_update`, `type`) VALUES (844,'http://stockings.galleries.lastnews.in','/',1,0,0,5,1489710300,0);
INSERT INTO `phpboost_stats_referer` (`id`, `url`, `relative_url`, `total_visit`, `today_visit`, `yesterday_visit`, `nbr_day`, `last_update`, `type`) VALUES (841,'http://strapon.xblog.in','/',1,0,0,8,1489466698,0);
INSERT INTO `phpboost_stats_referer` (`id`, `url`, `relative_url`, `total_visit`, `today_visit`, `yesterday_visit`, `nbr_day`, `last_update`, `type`) VALUES (851,'http://gay.adultgalls.com','/',1,0,0,3,1489880121,0);
DROP TABLE IF EXISTS `phpboost_upload`;
CREATE TABLE `phpboost_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcat` int(11) NOT NULL DEFAULT '0',
  `name` varchar(150) DEFAULT '',
  `path` varchar(255) DEFAULT '',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `size` double NOT NULL,
  `type` varchar(10) DEFAULT '',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=184 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (5,0,'coudriou (Custom).jpg','coudriou-_custom.jpg',3,58,'jpg',1454003782);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (7,0,'aerienne coudriou 1 (Custom).jpg','aerienne-coudriou-1-_custom.jpg',3,39,'jpg',1454088464);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (8,0,'Réglement intérieur.doc','reglement-interieur.doc',3,141,'doc',1454170027);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (9,0,'Xingu en vol 004 (Custom).JPG','xingu-en-vol-004-_custom.jpg',3,8.3,'jpg',1454172199);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (11,0,'Zone de vol.jpg','zone-de-vol.jpg',3,729.1,'jpg',1454175376);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (12,0,'Zone de vol (Custom) (2).jpg','zone-de-vol-_custom_-_2.jpg',3,27.7,'jpg',1454175433);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (13,0,'cockpit-FHAPR-site.jpg','cockpit-fhapr-site.jpg',1,52.3,'jpg',1454605607);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (17,0,'STAMPE.jpg','stampe.jpg',1,64.7,'jpg',1454703989);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (39,0,'COUDRIOU 09-09-1984.jpg','coudriou-09-09-1984.jpg',3,977,'jpg',1455819595);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (22,0,'logo club.jpg','logo-club.jpg',3,33.3,'jpg',1455036883);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (34,0,'avion_127.gif','avion_127.gif',5,13.8,'gif',1455548226);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (32,0,'005 2.jpg','005-2.jpg',5,68.3,'jpg',1455299272);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (27,0,'514397Ecolage (Custom) (Custom).jpg','514397ecolage-_custom_-_custom.jpg',3,2.5,'jpg',1455294282);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (29,0,'acces le coudriou 2 (Custom).jpg','acces-le-coudriou-2-_custom.jpg',3,51.2,'jpg',1455294913);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (30,0,'acces le coudriou 2.jpg','acces-le-coudriou-2.jpg',3,333.5,'jpg',1455295098);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (31,0,'inscription club.doc','inscription-club.doc',3,18.5,'doc',1455296351);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (33,0,'aile volante.jpg (Custom).jpg','aile-volante_jpg-_custom.jpg',3,22.3,'jpg',1455300911);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (45,0,'avion-decollage.jpg','avion-decollage.jpg',5,19.5,'jpg',1456847139);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (46,0,'20130412_143818a.jpg','20130412_143818a.jpg',5,77.1,'jpg',1456847740);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (47,0,'DSC06872.JPG','dsc06872.jpg',1,69.2,'jpg',1457022670);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (49,1,'les 4 LS  2015.jpg','les-4-ls--2015.jpg',1,21.6,'jpg',1457023839);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (54,0,'construction-ls3.wmv','construction-ls3.wmv',1,17957.4,'wmv',1457043064);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (55,0,'DSC00197.JPG','dsc00197.jpg',5,110.4,'jpg',1457084950);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (57,0,'DSCN0287.JPG','dscn0287.jpg',5,117.5,'jpg',1457085545);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (58,0,'PICT0010 (400x225).jpg','pict0010-_400x225.jpg',5,44.3,'jpg',1457085990);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (59,0,'DSC01176.JPG','dsc01176.jpg',5,91.5,'jpg',1457086327);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (60,0,'Post-it_Yellow.png','post-it_yellow.png',5,197.4,'png',1457087500);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (62,0,'DSCN1330.JPG','dscn1330.jpg',5,212.5,'jpg',1458255961);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (73,0,'index.jpg','index.jpg',3,13.2,'jpg',1459503164);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (75,0,'WP_20160416_001.jpg','wp_20160416_001.jpg',5,173.4,'jpg',1460831353);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (76,0,'DSCN0037.JPG','dscn0037.jpg',5,252.9,'jpg',1460879699);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (78,0,'DSCN1397.JPG','dscn1397.jpg',5,216.3,'jpg',1461616970);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (80,0,'DSCN1403.JPG','dscn1403.jpg',5,241.5,'jpg',1461618791);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (83,0,'20160424_143608.jpg','20160424_143608.jpg',5,195,'jpg',1461876155);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (84,0,'tondeuse.jpeg','tondeuse.jpeg',1,3,'jpeg',1462480442);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (85,0,'peinture.png','peinture.png',1,2.9,'png',1462481555);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (87,0,'P_20160517_110416_1_p.jpg','p_20160517_110416_1_p.jpg',5,176.2,'jpg',1463941649);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (88,0,'IMG_20160523_162450.jpg','img_20160523_162450.jpg',5,609.8,'jpg',1464165906);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (146,0,'homme-qui-utilise-la-tondeuse.gif','homme-qui-utilise-la-tondeuse.gif',5,18.5,'gif',1475826111);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (90,0,'121018-tortosa-040.jpg','121018-tortosa-040.jpg',5,109.3,'jpg',1464897555);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (91,0,'IMG_20160611_154431.jpg','img_20160611_154431.jpg',1,844,'jpg',1465818121);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (94,0,'affichette interclub.jpg','affichette-interclub.jpg',3,760.7,'jpg',1466440072);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (95,0,'2007_Faucheuse.gif','2007_faucheuse.gif',5,187.9,'gif',1466971931);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (96,0,'310392-pique-nique-conseils-pour-le-0x384-2.jpg','310392-pique-nique-conseils-pour-le-0x384-2.jpg',5,130.9,'jpg',1466973687);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (99,0,'salle d''Olonne 005.jpg','salle-d_olonne-005.jpg',5,113,'jpg',1468343634);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (101,0,'tonte 18 juillet.jpg','tonte-18-juillet.jpg',1,448.7,'jpg',1468870122);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (102,0,'renard.jpg','renard.jpg',1,109.2,'jpg',1468870257);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (103,0,'pitts.jpg','pitts.jpg',1,902.8,'jpg',1469564928);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (104,0,'avion_guillaume.jpg','avion_guillaume.jpg',1,977.4,'jpg',1469732750);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (105,0,'warbird (1 sur 1) (Medium) (Small).jpg','warbird-_1-sur-1_-_medium_-_small.jpg',5,85.9,'jpg',1469827149);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (166,0,'V__738B.jpeg','v_738b.jpeg',3,126.1,'jpeg',1486659690);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (107,0,'P47 de David.jpg','p47-de-david.jpg',1,73.3,'jpg',1469970113);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (108,0,'GPR LES SABLES 2016.jpg','gpr-les-sables-2016.jpg',1,167,'jpg',1470770990);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (109,0,'debbie.jpg','debbie.jpg',1,137.5,'jpg',1470771858);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (110,0,'IMG_20160809_151222.jpg','img_20160809_151222.jpg',1,864,'jpg',1470819643);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (111,0,'Stampe Francois.jpg','stampe-francois.jpg',1,799.3,'jpg',1470985971);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (112,3,'vue_ensemble.JPG','vue_ensemble.jpg',1,770.4,'jpg',1471293651);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (113,0,'IMG_0409.JPG','img_0409.jpg',1,163.4,'jpg',1471374980);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (114,0,'IMG_0362.JPG','img_0362.jpg',1,173.4,'jpg',1471375948);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (115,0,'JC.JPG','jc.jpg',1,46,'jpg',1471546311);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (168,0,'V__738B (Small).jpeg','v_738b-_small.jpeg',3,49.9,'jpeg',1486661140);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (167,0,'V__738B.jpeg','v_738b_93997.jpeg',3,126.1,'jpeg',1486660009);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (118,0,'inscription club.doc','inscription-club_34b79.doc',3,33.5,'doc',1473502106);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (125,4,'arrivée.JPG','arrivee.jpg',1,199,'jpg',1473753434);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (126,4,'Didier.JPG','didier.jpg',1,140.2,'jpg',1473753443);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (127,4,'Raynal.JPG','raynal.jpg',1,219.4,'jpg',1473753454);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (128,4,'goblin 380.JPG','goblin-380.jpg',1,135.6,'jpg',1473754718);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (130,5,'antenne drone.jpg','antenne-drone.jpg',1,271.3,'jpg',1473757584);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (131,5,'drone detail.JPG','drone-detail.jpg',1,171.2,'jpg',1473757592);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (132,5,'drones racer.JPG','drones-racer.jpg',1,248.5,'jpg',1473757600);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (133,5,'fpv Franck.JPG','fpv-franck.jpg',1,199.2,'jpg',1473757607);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (134,5,'immersion Jo.jpg','immersion-jo.jpg',1,160.8,'jpg',1473757617);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (135,5,'instal fpv.JPG','instal-fpv.jpg',1,155.4,'jpg',1473757626);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (136,5,'parcours racer.JPG','parcours-racer.jpg',1,174.2,'jpg',1473757639);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (137,5,'Sedric.JPG','sedric.jpg',1,220,'jpg',1473757650);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (142,5,'table drone.png','table-drone.png',1,364.2,'png',1473773008);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (141,4,'detail goblin.png','detail-goblin.png',1,127.7,'png',1473772602);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (144,0,'tondeuse1_s.jpg','tondeuse1_s.jpg',5,17.4,'jpg',1475773886);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (145,0,'interdit-de-vol.jpg','interdit-de-vol.jpg',5,32,'jpg',1475775870);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (147,0,'garde champetre.jpg','garde-champetre.jpg',5,35.8,'jpg',1476694165);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (148,0,'parapente.jpg','parapente.jpg',1,259,'jpg',1476897610);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (149,0,'1 Planeur ROBBE RC-START.JPG','1-planeur-robbe-rc-start.jpg',5,7430.7,'jpg',1477676817);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (151,0,'inscription club.doc','inscription-club_3b5f2.doc',3,33.5,'doc',1479724259);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (152,0,'bouton-web-aga-convocation-siteorange21__nwmgqz.jpg','bouton-web-aga-convocation-siteorange21_nwmgqz.jpg',5,32.2,'jpg',1479748900);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (158,0,'WP_20161212_002.jpg','wp_20161212_002.jpg',5,671.8,'jpg',1481740284);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (154,0,'un-prototype-de-drone-fabriquee-par-squadrone-system-equipee-d-une-camera-gopro-est-testee-le-2-juillet-2014_4971857.jpg','un-prototype-de-drone-fabriquee-par-squadrone-system-equipee-d-une-camera-gopro-est-testee-le-2-juillet-2014_4971857.jpg',5,95.7,'jpg',1480671415);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (155,0,'IMAG0113 (Copier).JPG','imag0113-_copier.jpg',5,339.7,'jpg',1481016790);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (156,0,'IMG_4493.JPG','img_4493.jpg',5,1216.1,'jpg',1481627400);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (163,0,'24143-650x330-galette-des-rois-fotolia.jpg','24143-650x330-galette-des-rois-fotolia.jpg',5,135.9,'jpg',1482575318);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (159,0,'PiouPiou de Sauveterre.jpg','pioupiou-de-sauveterre.jpg',1,19.4,'jpg',1481748423);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (160,0,'pioupiou.png','pioupiou_db542.png',1,18.2,'png',1481748515);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (162,0,'875c176c.gif','875c176c.gif',5,383.7,'gif',1482084668);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (164,0,'P1050583-1.jpg','p1050583-1.jpg',5,56.8,'jpg',1484219810);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (165,0,'Rencontre indoor POUZAUGES.pdf','rencontre-indoor-pouzauges.pdf',3,228.2,'pdf',1485161589);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (169,0,'tt_salon_montaigu_2017_04_22.jpg','tt_salon_montaigu_2017_04_22.jpg',3,100.3,'jpg',1487751502);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (170,0,'affiche indoor 2017.png','affiche-indoor-2017.png',3,558.8,'png',1487925328);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (171,0,'affiche indoor 2017.png','affiche-indoor-2017_3d909.png',3,558.8,'png',1487925334);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (172,0,'DSCN1344.JPG','dscn1344.jpg',5,474.7,'jpg',1488047205);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (173,0,'WP_20170224_002 (Medium).jpg','wp_20170224_002-_medium.jpg',3,193.6,'jpg',1488055627);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (174,0,'WP_20170224_002 (Small) (Mobile).jpg','wp_20170224_002-_small_-_mobile.jpg',3,48.9,'jpg',1488096238);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (175,0,'affiche angers.jpg','affiche-angers.jpg',3,110.8,'jpg',1490003173);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (176,0,'Indoor 2017 (Large).jpg','indoor-2017-_large.jpg',3,175.4,'jpg',1490018605);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (180,0,'divers_Boris.jpg','divers_boris.jpg',1,117.4,'jpg',1490093403);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (183,0,'fokker_Boris.jpg','fokker_boris.jpg',1,58.2,'jpg',1490093884);
INSERT INTO `phpboost_upload` (`id`, `idcat`, `name`, `path`, `user_id`, `size`, `type`, `timestamp`) VALUES (179,0,'maquettes_indoor.jpg','maquettes_indoor.jpg',1,156.1,'jpg',1490092963);
DROP TABLE IF EXISTS `phpboost_upload_cat`;
CREATE TABLE `phpboost_upload_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_parent` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(150) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_upload_cat` (`id`, `id_parent`, `user_id`, `name`) VALUES (1,0,1,'photos jp3');
INSERT INTO `phpboost_upload_cat` (`id`, `id_parent`, `user_id`, `name`) VALUES (3,0,1,'P\\''TITS GROS');
INSERT INTO `phpboost_upload_cat` (`id`, `id_parent`, `user_id`, `name`) VALUES (4,0,1,'Symposium hélicos');
INSERT INTO `phpboost_upload_cat` (`id`, `id_parent`, `user_id`, `name`) VALUES (5,4,1,'drones');
DROP TABLE IF EXISTS `phpboost_visit_counter`;
CREATE TABLE `phpboost_visit_counter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) NOT NULL DEFAULT '',
  `time` date NOT NULL DEFAULT '0000-00-00',
  `total` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `ip` (`ip`)
) ENGINE=MyISAM AUTO_INCREMENT=7790 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (1,7363,'2017-03-21',28);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7789,'90.126.204.85','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7788,'89.26.248.3','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7787,'78.121.93.24','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7786,'178.137.83.106','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7785,'62.210.80.48','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7784,'94.185.84.146','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7783,'217.182.91.226','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7782,'90.9.194.122','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7781,'104.238.169.126','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7780,'90.49.204.2','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7779,'86.69.129.99','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7778,'2.1.212.248','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7777,'2.9.171.176','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7776,'150.70.173.49','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7775,'150.70.173.5','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7774,'92.90.20.1','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7773,'78.242.157.85','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7772,'90.49.55.35','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7771,'188.65.135.26','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7770,'80.118.144.119','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7769,'90.49.230.233','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7768,'2.0.29.205','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7767,'104.238.169.71','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7766,'91.200.12.143','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7765,'91.219.237.59','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7764,'109.201.154.183','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7763,'46.148.127.221','2017-03-21',0);
INSERT INTO `phpboost_visit_counter` (`id`, `ip`, `time`, `total`) VALUES (7762,'80.12.38.42','2017-03-21',0);
DROP TABLE IF EXISTS `phpboost_web`;
CREATE TABLE `phpboost_web` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contents` text,
  `url` varchar(255) DEFAULT NULL,
  `number_views` int(11) DEFAULT NULL,
  `approbation_type` int(11) DEFAULT NULL,
  `creation_date` int(11) DEFAULT NULL,
  `rewrited_name` varchar(255) DEFAULT '',
  `short_contents` text,
  `start_date` int(11) NOT NULL DEFAULT '0',
  `end_date` int(11) NOT NULL DEFAULT '0',
  `author_user_id` int(11) NOT NULL DEFAULT '0',
  `partner` tinyint(1) NOT NULL DEFAULT '0',
  `partner_picture` varchar(255) DEFAULT '',
  `privileged_partner` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_category` (`id_category`),
  FULLTEXT KEY `title` (`name`),
  FULLTEXT KEY `contents` (`contents`),
  FULLTEXT KEY `short_contents` (`short_contents`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_web` (`id`, `id_category`, `name`, `contents`, `url`, `number_views`, `approbation_type`, `creation_date`, `rewrited_name`, `short_contents`, `start_date`, `end_date`, `author_user_id`, `partner`, `partner_picture`, `privileged_partner`) VALUES (3,3,'Fédération Française d''Aéromodélisme','','http://www.ffam.asso.fr/',112,1,1454089364,'federation-francaise-d-aeromodelisme',NULL,0,0,1,0,'',0);
INSERT INTO `phpboost_web` (`id`, `id_category`, `name`, `contents`, `url`, `number_views`, `approbation_type`, `creation_date`, `rewrited_name`, `short_contents`, `start_date`, `end_date`, `author_user_id`, `partner`, `partner_picture`, `privileged_partner`) VALUES (4,4,'Club de la Roche sur Yon','','http://www.acymodelisme.fr/',116,1,1455311612,'club-de-la-roche-sur-yon',NULL,0,0,1,0,'',0);
INSERT INTO `phpboost_web` (`id`, `id_category`, `name`, `contents`, `url`, `number_views`, `approbation_type`, `creation_date`, `rewrited_name`, `short_contents`, `start_date`, `end_date`, `author_user_id`, `partner`, `partner_picture`, `privileged_partner`) VALUES (5,5,'Modelisme.com','','http://www.modelisme.com/forum/forum.php',130,1,1455311734,'modelisme-com',NULL,0,0,1,0,'',0);
INSERT INTO `phpboost_web` (`id`, `id_category`, `name`, `contents`, `url`, `number_views`, `approbation_type`, `creation_date`, `rewrited_name`, `short_contents`, `start_date`, `end_date`, `author_user_id`, `partner`, `partner_picture`, `privileged_partner`) VALUES (6,0,'la gazette des olonnes ','<span style="font-size: 15px;"><span style="color:#0000FF;">Voici l''adresse d''un blog local qui peut nous être utile ,plein de renseignements et aussi de jolies prises de vue aériennes  ( photos de R.B )<br />\n</span></span><br />\n<span style="text-decoration: underline;"> <a href="http://www.lagazettedesolonnes.com/">http://www.lagazettedesolonnes.com/</a></span>','http://www.lagazettedesolonnes.com/',105,1,1470086460,'la-gazette-des-olonnes','',0,0,5,0,'',0);
DROP TABLE IF EXISTS `phpboost_web_cats`;
CREATE TABLE `phpboost_web_cats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `rewrited_name` varchar(250) DEFAULT '',
  `c_order` int(11) unsigned NOT NULL DEFAULT '0',
  `special_authorizations` tinyint(1) NOT NULL DEFAULT '0',
  `auth` text,
  `id_parent` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_web_cats` (`id`, `name`, `description`, `image`, `rewrited_name`, `c_order`, `special_authorizations`, `auth`, `id_parent`) VALUES (3,'FFAM','','','ffam',0,0,NULL,0);
INSERT INTO `phpboost_web_cats` (`id`, `name`, `description`, `image`, `rewrited_name`, `c_order`, `special_authorizations`, `auth`, `id_parent`) VALUES (4,'Club voisin','','','club-voisin',0,0,NULL,0);
INSERT INTO `phpboost_web_cats` (`id`, `name`, `description`, `image`, `rewrited_name`, `c_order`, `special_authorizations`, `auth`, `id_parent`) VALUES (5,'Forum','','','forum',0,0,NULL,0);
DROP TABLE IF EXISTS `phpboost_wiki_articles`;
CREATE TABLE `phpboost_wiki_articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_contents` int(11) NOT NULL DEFAULT '0',
  `title` varchar(250) DEFAULT '',
  `encoded_title` varchar(250) DEFAULT '',
  `hits` int(11) NOT NULL DEFAULT '0',
  `id_cat` int(11) NOT NULL DEFAULT '0',
  `is_cat` tinyint(1) NOT NULL DEFAULT '0',
  `defined_status` varchar(6) NOT NULL DEFAULT '0',
  `undefined_status` text,
  `redirect` int(11) NOT NULL DEFAULT '0',
  `auth` text,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `title` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_wiki_articles` (`id`, `id_contents`, `title`, `encoded_title`, `hits`, `id_cat`, `is_cat`, `defined_status`, `undefined_status`, `redirect`, `auth`) VALUES (1,1,'réglages hélico','reglages-helico',187,1,1,0,'',0,'');
INSERT INTO `phpboost_wiki_articles` (`id`, `id_contents`, `title`, `encoded_title`, `hits`, `id_cat`, `is_cat`, `defined_status`, `undefined_status`, `redirect`, `auth`) VALUES (2,2,'Les bases','les-bases',149,1,0,0,'',0,'');
INSERT INTO `phpboost_wiki_articles` (`id`, `id_contents`, `title`, `encoded_title`, `hits`, `id_cat`, `is_cat`, `defined_status`, `undefined_status`, `redirect`, `auth`) VALUES (3,3,'azithromycin hec 500 mg erfahrungen','azithromycin-hec-500-mg-erfahrungen',7,0,0,0,'',0,'');
INSERT INTO `phpboost_wiki_articles` (`id`, `id_contents`, `title`, `encoded_title`, `hits`, `id_cat`, `is_cat`, `defined_status`, `undefined_status`, `redirect`, `auth`) VALUES (4,4,'cipramil 20mg preis','cipramil-20mg-preis',9,0,0,0,'',0,'');
INSERT INTO `phpboost_wiki_articles` (`id`, `id_contents`, `title`, `encoded_title`, `hits`, `id_cat`, `is_cat`, `defined_status`, `undefined_status`, `redirect`, `auth`) VALUES (5,5,'azithromycin 500 1a pharma pille','azithromycin-500-1a-pharma-pille',7,0,0,0,'',0,'');
INSERT INTO `phpboost_wiki_articles` (`id`, `id_contents`, `title`, `encoded_title`, `hits`, `id_cat`, `is_cat`, `defined_status`, `undefined_status`, `redirect`, `auth`) VALUES (6,6,'dimazon 40 dosage','dimazon-40-dosage',4,0,0,0,'',0,'');
INSERT INTO `phpboost_wiki_articles` (`id`, `id_contents`, `title`, `encoded_title`, `hits`, `id_cat`, `is_cat`, `defined_status`, `undefined_status`, `redirect`, `auth`) VALUES (7,7,'qlaira pille vergessen tag 15','qlaira-pille-vergessen-tag-15',1,0,0,0,'',0,'');
INSERT INTO `phpboost_wiki_articles` (`id`, `id_contents`, `title`, `encoded_title`, `hits`, `id_cat`, `is_cat`, `defined_status`, `undefined_status`, `redirect`, `auth`) VALUES (8,8,'posologia zimox sospensione pediatrica','posologia-zimox-sospensione-pediatrica',1,0,0,0,'',0,'');
DROP TABLE IF EXISTS `phpboost_wiki_cats`;
CREATE TABLE `phpboost_wiki_cats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_parent` int(11) NOT NULL DEFAULT '0',
  `article_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_wiki_cats` (`id`, `id_parent`, `article_id`) VALUES (1,0,1);
DROP TABLE IF EXISTS `phpboost_wiki_contents`;
CREATE TABLE `phpboost_wiki_contents` (
  `id_contents` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL DEFAULT '0',
  `menu` text,
  `content` text,
  `activ` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(11) DEFAULT '0',
  `user_ip` varchar(50) DEFAULT '',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_contents`),
  FULLTEXT KEY `content` (`content`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
INSERT INTO `phpboost_wiki_contents` (`id_contents`, `id_article`, `menu`, `content`, `activ`, `user_id`, `user_ip`, `timestamp`) VALUES (1,1,'','Les réglages d''un hélicoptère éléctrique.',1,1,'2.1.83.160',1465989706);
INSERT INTO `phpboost_wiki_contents` (`id_contents`, `id_article`, `menu`, `content`, `activ`, `user_id`, `user_ip`, `timestamp`) VALUES (2,2,'','Comment commencer:',1,1,'2.1.83.160',1465989757);
INSERT INTO `phpboost_wiki_contents` (`id_contents`, `id_article`, `menu`, `content`, `activ`, `user_id`, `user_ip`, `timestamp`) VALUES (3,3,'','zineryt lotion kaufen <br />\n&lt;a href= <a href="http://americalat.webs.com">http://americalat.webs.com</a> &gt;gabapentin dosierung kinder&lt;/a&gt; &lt;a href= <a href="http://zofiahager.asso-web.com">http://zofiahager.asso-web.com</a> &gt;zineryt lotion&lt;/a&gt; <br />\ntab resochin 250 <br />\n[url="http://americalat.webs.com"]gabapentin 600 mg wirkstoff[/url] [url="http://zofiahager.asso-web.com"]zineryt lotion for rosacea[/url] <br />\nnifurantin b6 erfahrungen',1,-1,'50.7.124.168',1489628217);
INSERT INTO `phpboost_wiki_contents` (`id_contents`, `id_article`, `menu`, `content`, `activ`, `user_id`, `user_ip`, `timestamp`) VALUES (4,4,'','resochin 250 mg preis<br />\n&lt;a href= <a href="http://lacyphlegm.cybersite.nu">http://lacyphlegm.cybersite.nu</a> &gt;avamys spray nasal preis&lt;/a&gt;<br />\n[url="http://americalat.webs.com"]gabapentin gleicher wirkstoff wie lyrica[/url]<br />\nnifurantin b6 schwangerschaft<br />\n&lt;a href= <a href="http://tammerarep-blog.logdown.com">http://tammerarep-blog.logdown.com</a> &gt;azithromycin&lt;/a&gt;<br />\n[url="http://lymantwisd.oneminutesite.it"]resochin 250 mg n1[/url]<br />\nresochin 250',1,-1,'37.139.52.40',1489705425);
INSERT INTO `phpboost_wiki_contents` (`id_contents`, `id_article`, `menu`, `content`, `activ`, `user_id`, `user_ip`, `timestamp`) VALUES (5,5,'','azithromycin<br />\n&lt;a href= <a href="http://tonetteelv.ucoz.pl">http://tonetteelv.ucoz.pl</a> &gt;azithromycin 500 mg preis&lt;/a&gt;<br />\n[url="http://tonetteelv.ucoz.pl"]azithromycin sandoz 500 mg und alkohol[/url]<br />\nresochin tabletten 250mg<br />\n&lt;a href= <a href="http://markusvalr.1apps.com">http://markusvalr.1apps.com</a> &gt;zineryt amazon&lt;/a&gt;<br />\n[url="http://russellgra.soup.io"]nifurantin b6 kaufen[/url]<br />\nazithromycin pille wechselwirkung',1,-1,'83.217.10.175',1489708249);
INSERT INTO `phpboost_wiki_contents` (`id_contents`, `id_article`, `menu`, `content`, `activ`, `user_id`, `user_ip`, `timestamp`) VALUES (6,6,'','amoxival vet 200 beipackzettel<br />\n&lt;a href= <a href="http://claytonver.wifeo.com">http://claytonver.wifeo.com</a> &gt;bisacodyl prix&lt;/a&gt;<br />\n[url="http://kennygarof.tribalpages.com"]amoxival 40 prix[/url]<br />\ndimazon 40 mg posologie<br />\n&lt;a href= <a href="http://kennygarof.tribalpages.com">http://kennygarof.tribalpages.com</a> &gt;amoxival chat&lt;/a&gt;<br />\n[url="http://omercoffla.onlc.eu"]dalacine vidal[/url]<br />\ngranudoxy vomissement',1,-1,'37.139.52.40',1489886077);
INSERT INTO `phpboost_wiki_contents` (`id_contents`, `id_article`, `menu`, `content`, `activ`, `user_id`, `user_ip`, `timestamp`) VALUES (7,7,'','nolvadex pct buy<br />\n&lt;a href= <a href="http://zelmalauth.ayosport.com/article-15527-zithromax">http://zelmalauth.ayosport.com/article-15527-zithromax</a> &gt;zithromax saft&lt;/a&gt;<br />\n[url="http://claytonnul-blog.logdown.com/posts/1619351-claytonnul"]chloramphenicol spray kaufen[/url]<br />\nchloramphenicol acetyltransferase molecular weight<br />\n&lt;a href= <a href="http://gaylaairol.guildomatic.com">http://gaylaairol.guildomatic.com</a> &gt;clindamycin 300 pille&lt;/a&gt;<br />\n[url="http://www.onweb.fr?company_id=17316"]zyban kaufen schweiz[/url]<br />\nchloramphenicol katzen welpen',1,-1,'195.43.95.199',1490046031);
INSERT INTO `phpboost_wiki_contents` (`id_contents`, `id_article`, `menu`, `content`, `activ`, `user_id`, `user_ip`, `timestamp`) VALUES (8,8,'','famvir effetti collaterali<br />\n&lt;a href= <a href="http://chungstroh.blogg.no">http://chungstroh.blogg.no</a> &gt;flixotide diskus 500&lt;/a&gt;<br />\n[url="http://galinaacoc.aircus.com"]cefixime prezzo[/url]<br />\nfamciclovir gatto<br />\n&lt;a href= <a href="http://chungstroh.blogg.no">http://chungstroh.blogg.no</a> &gt;flixotide 250 mcg aerosol spray 60 doses&lt;/a&gt;<br />\n[url="http://bernardoti.startbewijs.nl"]levodopa benserazide dosage[/url]<br />\nlevodopa carbidopa intestinal gel',1,-1,'91.219.237.59',1490058359);
DROP TABLE IF EXISTS `phpboost_wiki_favorites`;
CREATE TABLE `phpboost_wiki_favorites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `id_article` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
