<?php
/*##################################################
 *                             stats_french.php
 *                            -------------------
 *   begin                :  September 27, 2007
 *   copyright            : (C) 2007 Viarre R�gis
 *   email                : crowkait@phpboost.com
 *
 *  
 ###################################################
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 ###################################################*/


 ####################################################
#                                                          French                                                                        #
 ####################################################

$LANG['stats'] = 'Statistiques';
$LANG['more_stats'] = 'Plus de stats';
$LANG['last_member'] = 'Dernier membre';
$LANG['percentage'] = 'Pourcentage';
$LANG['member_registered'] = '<strong>%d</strong> membre inscrit';
$LANG['member_registered_s'] = '<strong>%d</strong> membres inscrits';
$LANG['admin.authorizations'] = 'Autorisations';
$LANG['admin.authorizations.read'] = 'Autorisation d\'afficher les statistiques';

//Robots
$LANG['robot'] = 'Robot';
$LANG['robots'] = 'Robots';
$LANG['unknown_bot'] = 'Robot inconnu';
$LANG['erase_rapport'] = 'Effacer le rapport';
$LANG['number_r_visit'] = 'Nombre de visite(s)';

//Statistiques
$LANG['stats'] = 'Statistiques';
$LANG['more_stats'] = 'Plus de stats';
$LANG['site'] = 'Site';
$LANG['referer_s'] = 'Sites r�f�rents';
$LANG['no_referer'] = 'Aucun site r�f�rent';
$LANG['page_s'] = 'Pages vues';
$LANG['browser_s'] = 'Navigateurs';
$LANG['keyword_s'] = 'Mots cl�s';
$LANG['no_keyword'] = 'Aucun mot cl�';
$LANG['fai'] = 'Fournisseurs d\'acc�s Internet';
$LANG['all_fai'] = 'Voir la liste compl�te des fournisseurs d\'acc�s Internet';
$LANG['10_fai'] = 'Voir les 10 principaux fournisseurs d\'acc�s Internet';
$LANG['os'] = 'Syst�mes d\'exploitation';
$LANG['number'] = 'Nombre ';
$LANG['start'] = 'Cr�ation du site';
$LANG['stat_lang'] = 'Pays des visiteurs';
$LANG['all_langs'] = 'Voir la liste compl�te des pays des visiteurs';
$LANG['10_langs'] = 'Voir les 10 principaux pays des visiteurs';
$LANG['visits_year'] = 'Voir les statistiques de l\'ann�e';
$LANG['unknown'] = 'Inconnu';
$LANG['last_member'] = 'Dernier membre';
$LANG['top_10_posters'] = 'Top 10 : posteurs';
$LANG['version'] = 'Version';
$LANG['colors'] = 'Couleurs';
$LANG['calendar'] = 'Calendrier';
$LANG['events'] = 'Ev�nements';

//Sites r�f�rents.
$LANG['total_visit'] = 'Total des visites';
$LANG['average_visit'] = 'Visites moyennes';
$LANG['trend'] = 'Tendance';
$LANG['last_update'] = 'Derni�re visite';

//Navigateurs.
global $stats_array_browsers;
$stats_array_browsers = array(
	'edge' => array('Edge', 'edge.png'),
	'internetexplorer' => array('Internet Explorer', 'internetexplorer.png'),
	'opera' => array('Opera', 'opera.png'),
	'firefox' => array('Firefox', 'firefox.png'),
	'safari' => array('Safari', 'safari.png'),
	'chrome' => array('Chrome', 'chrome.png'),
	'konqueror' => array('Konqueror', ''),
	'netscape' => array('Netscape', ''),
	'mozilla' => array('Mozilla', ''),
	'aol' => array('Aol', ''),
	'lynx' => array('lynx', ''),
	'seamonkey' => array('SeaMonkey', 'seamonkey.png'),
	'camino' => array('Camino', ''),
	'links' => array('Links', ''),
	'galeon' => array('Galeaon', ''),
	'phoenix' => array('Phoenix', ''),
	'chimera' => array('Chimera', ''),
	'k-meleon' => array('K-meleon', ''),
	'icab' => array('Icab', ''),
	'ncsa mosaic'=> array('Ncsa mosaic', ''),
	'amaya'	=> array('Amaya', ''),
	'omniweb' => array('Omniweb', ''),
	'hotjava' => array('Hotjava', ''),
	'browsex' => array('Browsex', ''),
	'amigavoyager'=> array('Amigavoyager', ''),
	'amiga-aweb'=> array('Amiga-aweb', ''),
	'ibrowse' => array('Ibrowse', ''),
	'phone' => array('Mobile', '../phone.png'),
	'other' => array('Autres', '../other.png')
);

//Syst�me d'exploitation.
global $stats_array_os;
$stats_array_os = array(
	'android' => array('Android', 'android.png'),
	'ios' => array('IOS', 'iphone.png'),
	'windowsphone' => array('Windows phone', 'windows8.png'),
	'windows10' => array('Windows 10', 'windows10.png'),
	'windows8.1' => array('Windows 8.1', 'windows8.png'),
	'windows8' => array('Windows 8', 'windows8.png'),
	'windowsseven' => array('Windows 7', 'windowsseven.png'),
	'windowsvista' => array('Windows Vista', 'windowsvista.png'),
	'windowsserver2003' => array('Windows Serveur 2003', 'windowsxp.png'),
	'windowsxp' => array('Windows XP', 'windowsxp.png'),
	'windowsold' => array('Ancien Windows (avant 2000)', 'windowsold.png'),
	'linux' => array('Linux', 'linux.png'),
	'macintosh' => array('Mac OS', 'mac.png'),
	'sunos' => array('SunOS', 'sun.png'),
	'os2' => array('OS2', 'os2.png'),
	'freebsd' => array('FreeBSD', 'freebsd.png'),
	'netbsd' => array('NetBSD', 'freebsd.png'),
	'aix' => array('AIX', 'aix.png'),
	'irix' => array('Irix', 'irix.png'),
	'hp-ux' => array('HP-UX', 'hpux.png'),
	'wii' => array('Wii', 'wii.png'),
	'psp' => array('PSP', 'psp.png'),
	'playstation3' => array('Playstation 3', 'ps3.png'),
	'phone' => array('Mobile', '../phone.png'),
	'other' => array('Autres', '../other.png')
);

//Pays.
global $stats_array_lang;
$stats_array_lang = array(
	'ac' => array('Ascension (�le)', 'ac.png'),
	'ad' => array('Andorre', 'ad.png'),
	'ae' => array('Emirats Arabes Unis', 'ae.png'),
	'af' => array('Afghanistan', 'af.png'),
	'ag' => array('Antigua et Barbuda', 'ag.png'),
	'ai' => array('Anguilla', 'ai.png'),
	'al' => array('Albanie', 'al.png'),
	'am' => array('Arm�nie', 'am.png'),
	'an' => array('Antilles Neerlandaises', 'an.png'),
	'ao' => array('Angola', 'ao.png'),
	'aq' => array('Antarctique', 'aq.png'),
	'ar' => array('Argentine', 'ar.png'),
	'as' => array('American Samoa', 'as.png'),
	'at' => array('Autriche', 'at.png'),
	'au' => array('Australie', 'au.png'),
	'aw' => array('Aruba', 'aw.png'),
	'az' => array('Azerbaidjan', 'az.png'),
	'ba' => array('Bosnie Herz�govine', 'ba.png'),
	'bb' => array('Barbade', 'bb.png'),
	'bd' => array('Bangladesh', 'bd.png'),
	'be' => array('Belgique', 'be.png'),
	'bf' => array('Burkina Faso', 'bf.png'),
	'bg' => array('Bulgarie', 'bg.png'),
	'bh' => array('Bahrein', 'bh.png'),
	'bi' => array('Burundi', 'bi.png'),
	'bj' => array('B�nin', 'bj.png'),
	'bm' => array('Bermudes', 'bm.png'),
	'bn' => array('Brunei', 'bn.png'),
	'bo' => array('Bolivie', 'bo.png'),
	'br' => array('Br�sil', 'br.png'),
	'bs' => array('Bahamas', 'bs.png'),
	'bt' => array('Bhoutan', 'bt.png'),
	'bv' => array('Bouvet (�le)', 'bv.png'),
	'bw' => array('Botswana', 'bw.png'),
	'by' => array('Bi�lorussie', 'by.png'),
	'bz' => array('B�lize', 'bz.png'),
	'ca' => array('Canada', 'ca.png'),
	'cc' => array('Cocos (Keeling) �les', 'cc.png'),
	'cd' => array('R�p. d�m. du Congo', 'cd.png'),
	'cf' => array('R�p Centrafricaine', 'cf.png'),
	'cg' => array('Congo', 'cg.png'),
	'ch' => array('Suisse', 'ch.png'),
	'ci' => array('C�te d\'Ivoire', 'ci.png'),
	'ck' => array('Cook (�les)', 'ck.png'),
	'cl' => array('Chili', 'cl.png'),
	'cm' => array('Cameroun', 'cm.png'),
	'cn' => array('Chine', 'cn.png'),
	'co' => array('Colombie', 'co.png'),
	'cr' => array('Costa Rica', 'cr.png'),
	'cs' => array('Serbie Montenegro', 'cs.png'), 
	'cu' => array('Cuba', 'cu.png'),
	'cv' => array('Cap Vert', 'cv.png'),
	'cx' => array('Christmas (�le)', 'cx.png'),
	'cy' => array('Chypre', 'cy.png'),
	'cz' => array('Tch�quie', 'cz.png'),
	'de' => array('Allemagne', 'de.png'),
	'dj' => array('Djibouti', 'dj.png'),
	'dk' => array('Danemark', 'dk.png'),
	'dm' => array('Dominique', 'dm.png'),
	'do' => array('R�p Dominicaine', 'do.png'),
	'dz' => array('Alg�rie', 'dz.png'),
	'ec' => array('Equateur', 'ec.png'),
	'ee' => array('Estonie', 'ee.png'),
	'eg' => array('Egypte', 'eg.png'),
	'eh' => array('Sahara Occidental', 'eh.png'),
	'er' => array('Erythr�e', 'er.png'),
	'es' => array('Espagne', 'es.png'),
	'et' => array('Ethiopie', 'et.png'),
	'fi' => array('Finlande', 'fi.png'),
	'fj' => array('Fidji', 'fj.png'),
	'fk' => array('Falkland (Malouines) �les', 'fk.png'),
	'fm' => array('Micron�sie', 'fm.png'),
	'fo' => array('Faroe (�les)', 'fo.png'),
	'fr' => array('France', 'fr.png'),
	'ga' => array('Gabon', 'ga.png'),
	'gd' => array('Grenade', 'gd.png'),
	'ge' => array('G�orgie', 'ge.png'),
	'gf' => array('Guyane Fran�aise', 'gf.png'),
	'gg' => array('Guernsey', 'gg.png'),
	'gh' => array('Ghana', 'gh.png'),
	'gi' => array('Gibraltar', 'gi.png'),
	'gl' => array('Groenland', 'gl.png'),
	'gm' => array('Gambie', 'gm.png'),
	'gn' => array('Guin�e', 'gn.png'),
	'gp' => array('Guadeloupe', 'gp.png'),
	'gq' => array('Guin�e Equatoriale', 'gq.png'),
	'gr' => array('Gr�ce', 'gr.png'),
	'gs' => array('G�orgie du sud', 'gs.png'),
	'gt' => array('Guatemala', 'gt.png'),
	'gu' => array('Guam', 'gu.png'),
	'gw' => array('Guin�e-Bissau', 'gw.png'),
	'gy' => array('Guyana', 'gy.png'),
	'hk' => array('Hong Kong', 'hk.png'),
	'hm' => array('Heard et McDonald (�les)', 'hm.png'),
	'hn' => array('Honduras', 'hn.png'),
	'hr' => array('Croatie', 'hr.png'),
	'ht' => array('Haiti', 'ht.png'),
	'hu' => array('Hongrie', 'hu.png'),
	'id' => array('Indon�sie', 'id.png'),
	'ie' => array('Irlande', 'ie.png'),
	'il' => array('Isra�l', 'il.png'),
	'im' => array('Ile de Man', 'im.png'),
	'in' => array('Inde', 'in.png'),
	'io' => array('Ter. Brit. Oc�an Indien', 'io.png'),
	'iq' => array('Iraq', 'iq.png'),
	'ir' => array('Iran', 'ir.png'),
	'is' => array('Islande', 'is.png'),
	'it' => array('Italie', 'it.png'),
	'je' => array('Jersey', 'je.png'),
	'jm' => array('Jama�que', 'jm.png'),
	'jo' => array('Jordanie', 'jo.png'),
	'jp' => array('Japon', 'jp.png'),
	'ke' => array('Kenya', 'ke.png'),
	'kg' => array('Kirghizistan', 'kg.png'),
	'kh' => array('Cambodge', 'kh.png'),
	'ki' => array('Kiribati', 'ki.png'),
	'km' => array('Comores', 'km.png'),
	'kn' => array('Saint Kitts et Nevis', 'kn.png'),
	'kp' => array('Cor�e du nord', 'kp.png'),
	'kr' => array('Cor�e du sud', 'kr.png'),
	'kw' => array('Kowe�t', 'kw.png'),
	'ky' => array('Ca�manes (�les)', 'ky.png'),
	'kz' => array('Kazakhstan', 'kz.png'),
	'la' => array('Laos', 'la.png'),
	'lb' => array('Liban', 'lb.png'),
	'lc' => array('Sainte Lucie', 'lc.png'),
	'li' => array('Liechtenstein', 'li.png'),
	'lk' => array('Sri Lanka', 'lk.png'),
	'lr' => array('Liberia', 'lr.png'),
	'ls' => array('Lesotho', 'ls.png'),
	'lt' => array('Lituanie', 'lt.png'),
	'lu' => array('Luxembourg', 'lu.png'),
	'lv' => array('Lettonie', 'lv.png'),
	'ly' => array('Libye', 'ly.png'),
	'ma' => array('Maroc', 'ma.png'),
	'mc' => array('Monaco', 'mc.png'),
	'md' => array('Moldavie', 'md.png'),
	'mg' => array('Madagascar', 'mg.png'),
	'mh' => array('Marshall (�les)', 'mh.png'),
	'mk' => array('Mac�doine', 'mk.png'),
	'ml' => array('Mali', 'ml.png'),
	'mm' => array('Myanmar', 'mm.png'),
	'mn' => array('Mongolie', 'mn.png'),
	'mo' => array('Macao', 'mo.png'),
	'mp' => array('Mariannes du nord (�les)', 'mp.png'),
	'mq' => array('Martinique', 'mq.png'),
	'mr' => array('Mauritanie', 'mr.png'),
	'ms' => array('Montserrat', 'ms.png'),
	'mt' => array('Malte', 'mt.png'),
	'mu' => array('Maurice (�le)', 'mu.png'),
	'mv' => array('Maldives', 'mv.png'),
	'mw' => array('Malawi', 'mw.png'),
	'mx' => array('Mexique', 'mx.png'),
	'my' => array('Malaisie', 'my.png'),
	'mz' => array('Mozambique', 'mz.png'),
	'na' => array('Namibie', 'na.png'),
	'nc' => array('Nouvelle Cal�donie', 'nc.png'),
	'ne' => array('Niger', 'ne.png'),
	'nf' => array('Norfolk (�le)', 'nf.png'),
	'ng' => array('Nig�ria', 'ng.png'),
	'ni' => array('Nicaragua', 'ni.png'),
	'nl' => array('Pays Bas', 'nl.png'),
	'no' => array('Norv�ge', 'no.png'),
	'np' => array('N�pal', 'np.png'),
	'nr' => array('Nauru', 'nr.png'),
	'nu' => array('Niue', 'nu.png'),
	'nz' => array('Nouvelle Z�lande', 'nz.png'),
	'om' => array('Oman', 'om.png'),
	'pa' => array('Panama', 'pa.png'),
	'pe' => array('P�rou', 'pe.png'),
	'pf' => array('Polyn�sie Fran�aise', 'pf.png'),
	'pg' => array('Papouasie Nvelle Guin�e', 'pg.png'),
	'ph' => array('Philippines', 'ph.png'),
	'pk' => array('Pakistan', 'pk.png'),
	'pl' => array('Pologne', 'pl.png'),
	'pm' => array('St. Pierre et Miquelon', 'pm.png'),
	'pn' => array('Pitcairn (�le)', 'pn.png'),
	'pr' => array('Porto Rico', 'pr.png'),
	'ps' => array('Palestine', 'ps.png'),
	'pt' => array('Portugal', 'pt.png'),
	'pw' => array('Palau', 'pw.png'),
	'py' => array('Paraguay', 'py.png'),
	'qa' => array('Qatar', 'qa.png'),
	're' => array('R�union (�le de la)', 're.png'),
	'ro' => array('Roumanie', 'ro.png'),
	'ru' => array('Russie', 'ru.png'),
	'rs' => array('Russie', 'rs.png'),
	'rw' => array('Rwanda', 'rw.png'),
	'sa' => array('Arabie Saoudite', 'sa.png'),
	'sb' => array('Salomon (�les)', 'sb.png'),
	'sc' => array('Seychelles', 'sc.png'),
	'sd' => array('Soudan', 'sd.png'),
	'se' => array('Su�de', 'se.png'),
	'sg' => array('Singapour', 'sg.png'),
	'sh' => array('St. H�l�ne', 'sh.png'),
	'si' => array('Slov�nie', 'si.png'),
	'sj' => array('Svalbard/Jan Mayen (�les)', 'sj.png'),
	'sk' => array('Slovaquie', 'sk.png'),
	'sl' => array('Sierra Leone', 'sl.png'),
	'sm' => array('Saint-Marin', 'sm.png'),
	'sn' => array('S�n�gal', 'sn.png'),
	'so' => array('Somalie', 'so.png'),
	'sr' => array('Suriname', 'sr.png'),
	'st' => array('Sao Tome et Principe', 'st.png'),
	'su' => array('Ex U.R.S.S.', 'su.png'),
	'sv' => array('Salvador', 'sv.png'),
	'sy' => array('Syrie', 'sy.png'),
	'sz' => array('Swaziland', 'sz.png'),
	'tc' => array('Turks et Ca�ques (�les)', 'tc.png'),
	'td' => array('Tchad', 'td.png'),
	'tf' => array('Territoires Fr du sud', 'tf.png'),
	'tg' => array('Togo', 'tg.png'),
	'th' => array('Thailande', 'th.png'),
	'tj' => array('Tadjikistan', 'tj.png'),
	'tk' => array('Tokelau', 'tk.png'),
	'tm' => array('Turkm�nistan', 'tm.png'),
	'tn' => array('Tunisie', 'tn.png'),
	'to' => array('Tonga', 'to.png'),
	'tp' => array('Timor Oriental', 'tp.png'),
	'tr' => array('Turquie', 'tr.png'),
	'tt' => array('Trinit� et Tobago', 'tt.png'),
	'tv' => array('Tuvalu', 'tv.png'),
	'tw' => array('Taiwan', 'tw.png'),
	'tz' => array('Tanzanie', 'tz.png'),
	'ua' => array('Ukraine', 'ua.png'),
	'ug' => array('Ouganda', 'ug.png'),
	'uk' => array('Royaume Uni', 'uk.png'),
	'gb' => array('Grande Bretagne', 'gb.png'),
	'um' => array('US Minor Outlying (�les)', 'um.png'),
	'us' => array('�tats-Unis', 'us.png'),
	'uy' => array('Uruguay', 'uy.png'),
	'uz' => array('Ouzb�kistan', 'uz.png'),
	'va' => array('Vatican', 'va.png'),
	'vc' => array('St Vincent et les Grenadines', 'vc.png'),
	've' => array('Venezuela', 've.png'),
	'vg' => array('Vierges Brit. (�les)', 'vg.png'),
	'vi' => array('Vierges USA (�les)', 'vi.png'),
	'vn' => array('Vi�t Nam', 'vn.png'),
	'vu' => array('Vanuatu', 'vu.png'),
	'wf' => array('Wallis et Futuna (�les)', 'wf.png'),
	'ws' => array('Western Samoa', 'ws.png'),
	'ye' => array('Yemen', 'ye.png'),
	'yt' => array('Mayotte', 'yt.png'),
	'yu' => array('Yugoslavie', 'yu.png'),
	'za' => array('Afrique du Sud', 'za.png'),
	'zm' => array('Zambie', 'zm.png'),
	'zr' => array('R�p. D�m. du Congo (ex Za�re)', 'zr.png'),
	'zw' => array('Zimbabwe', 'zw.png'),
	'tv' => array('Tuvalu', 'tv.png'),
	'ws' => array('Western Samoa', 'ws.png'),
	'other' => array('Autres', '../other.png')
);
?>
