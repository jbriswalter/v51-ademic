<?php
/*##################################################
 *                             stats_english.php
 *                            -------------------
 *   begin                :  September 27, 2007
 *   last modified		: August 1st, 2009 - Forensic
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
#                                                          English                                                                        #
 ####################################################

$LANG['stats'] = 'Statistics';
$LANG['more_stats'] = 'More statistics';
$LANG['last_member'] = 'Latest member';
$LANG['percentage'] = 'Percentage';
$LANG['member_registered'] = '<strong>%d</strong> registered member';
$LANG['member_registered_s'] = '<strong>%d</strong> registered members';
$LANG['admin.authorizations'] = 'Permissions';
$LANG['admin.authorizations.read'] = 'Permission to display the statistics';


//Robots
$LANG['robot'] = 'Robot';
$LANG['robots'] = 'Robots';
$LANG['unknown_bot'] = 'Unknown robot';
$LANG['erase_rapport'] = 'Erase rapport';
$LANG['number_r_visit'] = 'Number of views';

//Stats
$LANG['stats'] = 'Stats';
$LANG['more_stats'] = 'More stats';
$LANG['site'] = 'Site';
$LANG['referer_s'] = 'Referent websites';
$LANG['no_referer'] = 'no referent website';
$LANG['page_s'] = 'Displayed pages';
$LANG['browser_s'] = 'Browsers';
$LANG['keyword_s'] = 'Keywords';
$LANG['no_keyword'] = 'no keyword';
$LANG['os'] = 'Operating systems';
$LANG['fai'] = 'Internet Access Providers';
$LANG['all_fai'] = 'See all Internet access providers';
$LANG['10_fai'] = 'See the 10 principal Internet access providers';
$LANG['number'] = 'Number of ';
$LANG['start'] = 'Creation of the website';
$LANG['stat_lang'] = 'Visitor\'s Countries';
$LANG['all_langs'] = 'See all visitor\'s countries';
$LANG['10_langs'] = 'See the 10 most common countries of visitors';
$LANG['visits_year'] = 'See statistics for the year';
$LANG['unknown'] = 'Unknown';
$LANG['last_member'] = 'Last member registered';
$LANG['top_10_posters'] = 'Top 10: posters';
$LANG['version'] = 'Version';
$LANG['colors'] = 'Colors';
$LANG['calendar'] = 'Calendar';
$LANG['events'] = 'Events';

//Sites r�f�rents.
$LANG['total_visit'] = 'Total visits';
$LANG['average_visit'] = 'Average visits';
$LANG['trend'] = 'Trend';
$LANG['last_update'] = 'Last visit';

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
	'lynx' => array('Lynx', ''),
	'seamonkey' => array('SeaMonkey', 'seamonkey.png'),
	'camino' => array('Camino', ''),
	'links' => array('Links', ''),
	'galeon' => array('Galeaon', ''),
	'phoenix' => array('Phoenix', ''),
	'chimera' => array('Chimera', ''),
	'k-meleon' => array('K-meleon', ''),
	'icab' => array('Icab', ''),
	'ncsa mosaic'=> array('Ncsa mosaic', ''),
	'amaya' => array('Amaya', ''),
	'omniweb' => array('Omniweb', ''),
	'hotjava' => array('Hotjava', ''),
	'browsex' => array('Browsex', ''),
	'amigavoyager'=> array('Amigavoyager', ''),
	'amiga-aweb'=> array('Amiga-aweb', ''),
	'ibrowse' => array('Ibrowse', ''),
	'phone' => array('Phone', '../phone.png'),
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
	'windowsserver2003' => array('Windows Server 2003', 'windowsxp.png'),
	'windowsxp' => array('Windows XP', 'windowsxp.png'),
	'windowsold' => array('Old Windows (before 2000)', 'windowsold.png'),
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
	'phone' => array('Phone', '../phone.png'),
	'other' => array('Others', '../other.png')
);

//Pays.
global $stats_array_lang;
$stats_array_lang = array(
	'ac' => array('Ascension Islands', 'ac.png'),
	'ad' => array('Andorra', 'ad.png'),
	'ae' => array('United Arab Emirates', 'ae.png'),
	'af' => array('Afghanistan', 'af.png'),
	'ag' => array('Antigua and Barbuda', 'ag.png'),
	'ai' => array('Anguilla', 'ai.png'),
	'al' => array('Albania', 'al.png'),
	'am' => array('Armenia', 'am.png'),
	'an' => array('Netherlands Antilles', 'an.png'),
	'ao' => array('Angola', 'ao.png'),
	'aq' => array('Antarctica', 'aq.png'),
	'ar' => array('Argentina', 'ar.png'),
	'as' => array('American Samoa', 'as.png'),
	'at' => array('Austria', 'at.png'),
	'au' => array('Australia', 'au.png'),
	'aw' => array('Aruba', 'aw.png'),
	'az' => array('Azerbaijan', 'az.png'),
	'ba' => array('Bosnia and Herzegovina', 'ba.png'),
	'bb' => array('Barbados', 'bb.png'),
	'bd' => array('Bangladesh', 'bd.png'),
	'be' => array('Belgium', 'be.png'),
	'bf' => array('Burkina Faso', 'bf.png'),
	'bg' => array('Bulgaria', 'bg.png'),
	'bh' => array('Bahrain', 'bh.png'),
	'bi' => array('Burundi', 'bi.png'),
	'bj' => array('Benin', 'bj.png'),
	'bm' => array('Bermuda', 'bm.png'),
	'bn' => array('Bruneo', 'bn.png'),
	'bo' => array('Bolivia', 'bo.png'),
	'br' => array('Brazil', 'br.png'),
	'bs' => array('Bahamas', 'bs.png'),
	'bt' => array('Bhutan', 'bt.png'),
	'bv' => array('Bouvet Island', 'bv.png'),
	'bw' => array('Botswana', 'bw.png'),
	'by' => array('Belarus', 'by.png'),
	'bz' => array('Belize', 'bz.png'),
	'ca' => array('Canada', 'ca.png'),
	'cc' => array('Cocos (Keeling) Islands', 'cc.png'),
	'cd' => array('Congo, (The Democratic Republic of the', 'cd.png'),
	'cf' => array('Central African Republic', 'cf.png'),
	'cg' => array('Congo', 'cg.png'),
	'ch' => array('Switzerland', 'ch.png'),
	'ci' => array('Cote D\'Ivoire', 'ci.png'),
	'ck' => array('Cook Islands', 'ck.png'),
	'cl' => array('Chile', 'cl.png'),
	'cm' => array('Cameroon', 'cm.png'),
	'cn' => array('China', 'cn.png'),
	'co' => array('Colombia', 'co.png'),
	'cr' => array('Costa Rica', 'cr.png'),
	'cs' => array('Serbia Montenegro', 'cs.png'),
	'cu' => array('Cuba', 'cu.png'),
	'cv' => array('Cape Verde', 'cv.png'),
	'cx' => array('Christmas Island', 'cx.png'),
	'cy' => array('Cyprus', 'cy.png'),
	'cz' => array('Czech Republic', 'cz.png'),
	'de' => array('Germany', 'de.png'),
	'dj' => array('Djibouti', 'dj.png'),
	'dk' => array('Denmark', 'dk.png'),
	'dm' => array('Dominica', 'dm.png'),
	'do' => array('Dominican Republic', 'do.png'),
	'dz' => array('Algeria', 'dz.png'),
	'ec' => array('Ecuador', 'ec.png'),
	'ee' => array('Estonia', 'ee.png'),
	'eg' => array('Egypt', 'eg.png'),
	'eh' => array('Western Sahara', 'eh.png'),
	'er' => array('Eritrea', 'er.png'),
	'es' => array('Spain', 'es.png'),
	'et' => array('Ethiopia', 'et.png'),
	'fi' => array('Finland', 'fi.png'),
	'fj' => array('Fiji', 'fj.png'),
	'fk' => array('Falkland Islands (Malvinas)', 'fk.png'),
	'fm' => array('Micronesia, (Federated States of', 'fm.png'),
	'fo' => array('Faroe Islands', 'fo.png'),
	'fr' => array('France', 'fr.png'),
	'ga' => array('Gabon', 'ga.png'),
	'gd' => array('Grenada', 'gd.png'),
	'ge' => array('Georgia', 'ge.png'),
	'gf' => array('French Guyana', 'gf.png'),
	'gg' => array('Guernsey', 'gg.png'),
	'gh' => array('Ghana', 'gh.png'),
	'gi' => array('Gibraltar', 'gi.png'),
	'gl' => array('Greenland', 'gl.png'),
	'gm' => array('Gambia', 'gm.png'),
	'gn' => array('Guinea', 'gn.png'),
	'gp' => array('Guadeloupe', 'gp.png'),
	'gq' => array('Equatorial Guinea', 'gq.png'),
	'gr' => array('Greece', 'gr.png'),
	'gs' => array('South Georgia and the South Sandwich Islands', 'gs.png'),
	'gt' => array('Guatemala', 'gt.png'),
	'gu' => array('Guam', 'gu.png'),
	'gw' => array('Guinea-Bissau', 'gw.png'),
	'gy' => array('Guyana', 'gy.png'),
	'hk' => array('Hong Kong', 'hk.png'),
	'hm' => array('Heard Island and McDonald Islands', 'hm.png'),
	'hn' => array('Honduras', 'hn.png'),
	'hr' => array('Croatia', 'hr.png'),
	'ht' => array('Haiti', 'ht.png'),
	'hu' => array('Hungary', 'hu.png'),
	'id' => array('Indonesia', 'id.png'),
	'ie' => array('Ireland', 'ie.png'),
	'il' => array('Israel', 'il.png'),
	'im' => array('Man Island', 'im.png'),
	'in' => array('India', 'in.png'),
	'io' => array('British Indian Ocean Territory', 'io.png'),
	'iq' => array('Iraq', 'iq.png'),
	'ir' => array('Iran, (Islamic Republic of', 'ir.png'),
	'is' => array('Iceland', 'is.png'),
	'it' => array('Italy', 'it.png'),
	'je' => array('Jersey', 'je.png'),
	'jm' => array('Jamaica', 'jm.png'),
	'jo' => array('Jordan', 'jo.png'),
	'jp' => array('Japan', 'jp.png'),
	'ke' => array('Kenya', 'ke.png'),
	'kg' => array('Kyrgyzstan', 'kg.png'),
	'kh' => array('Cambodia', 'kh.png'),
	'ki' => array('Kiribati', 'ki.png'),
	'km' => array('Comoros', 'km.png'),
	'kn' => array('Saint Kitts and Nevis', 'kn.png'),
	'kp' => array('Korea, (Democratic People\'s Republic of', 'kp.png'),
	'kr' => array('Korea, (Republic of', 'kr.png'),
	'kw' => array('Kuwait', 'kw.png'),
	'ky' => array('Cayman Islands', 'ky.png'),
	'kz' => array('Kazakhstan', 'kz.png'),
	'la' => array('Laos', 'la.png'),
	'lb' => array('Lebanon', 'lb.png'),
	'lc' => array('Saint Lucia', 'lc.png'),
	'li' => array('Liechtenstein', 'li.png'),
	'lk' => array('Sri Lanka', 'lk.png'),
	'lr' => array('Liberia', 'lr.png'),
	'ls' => array('Lesotho', 'ls.png'),
	'lt' => array('Lithuania', 'lt.png'),
	'lu' => array('Luxembourg', 'lu.png'),
	'lv' => array('Latvia', 'lv.png'),
	'ly' => array('Libya', 'ly.png'),
	'ma' => array('Morocco', 'ma.png'),
	'mc' => array('Monaco', 'mc.png'),
	'md' => array('Moldova, (Republic of', 'md.png'),
	'mg' => array('Madagascar', 'mg.png'),
	'mh' => array('Marshall Islands', 'mh.png'),
	'mk' => array('Macedonia', 'mk.png'),
	'ml' => array('Mali', 'ml.png'),
	'mm' => array('Myanmar', 'mm.png'),
	'mn' => array('Mongolia', 'mn.png'),
	'mo' => array('Macau', 'mo.png'),
	'mp' => array('Northern Mariana Islands', 'mp.png'),
	'mq' => array('Martinique', 'mq.png'),
	'mr' => array('Mauritania', 'mr.png'),
	'ms' => array('Montserrat', 'ms.png'),
	'mt' => array('Malta', 'mt.png'),
	'mu' => array('Mauritius', 'mu.png'),
	'mv' => array('Maldives', 'mv.png'),
	'mw' => array('Malawi', 'mw.png'),
	'mx' => array('Mexico', 'mx.png'),
	'my' => array('Malaysia', 'my.png'),
	'mz' => array('Mozambique', 'mz.png'),
	'na' => array('Namibia', 'na.png'),
	'nc' => array('New Caledonia', 'nc.png'),
	'ne' => array('Niger', 'ne.png'),
	'nf' => array('Norfolk Island', 'nf.png'),
	'ng' => array('Nigeria', 'ng.png'),
	'ni' => array('Nicaragua', 'ni.png'),
	'nl' => array('Netherlands', 'nl.png'),
	'no' => array('Norway', 'no.png'),
	'np' => array('Nepal', 'np.png'),
	'nr' => array('Nauru', 'nr.png'),
	'nu' => array('Niue', 'nu.png'),
	'nz' => array('New Zealand', 'nz.png'),
	'om' => array('Oman', 'om.png'),
	'pa' => array('Panama', 'pa.png'),
	'pe' => array('Peru', 'pe.png'),
	'pf' => array('French Polynesia', 'pf.png'),
	'pg' => array('Papua New Guinea', 'pg.png'),
	'ph' => array('Philippines', 'ph.png'),
	'pk' => array('Pakistan', 'pk.png'),
	'pl' => array('Poland', 'pl.png'),
	'pm' => array('Saint Pierre and Miquelon', 'pm.png'),
	'pn' => array('Pitcairn', 'pn.png'),
	'pr' => array('Puerto Rico', 'pr.png'),
	'ps' => array('Palestinian Territory', 'ps.png'),
	'pt' => array('Portugal', 'pt.png'),
	'pw' => array('Palau', 'pw.png'),
	'py' => array('Paraguay', 'py.png'),
	'qa' => array('Qatar', 'qa.png'),
	're' => array('Reunion Island', 're.png'),
	'ro' => array('Romania', 'ro.png'),
	'ru' => array('Russian Federation', 'ru.png'),
	'rs' => array('Russia', 'rs.png'),
	'rw' => array('Rwanda', 'rw.png'),
	'sa' => array('Saudi Arabia', 'sa.png'),
	'sb' => array('Solomon Islands', 'sb.png'),
	'sc' => array('Seychelles', 'sc.png'),
	'sd' => array('Sudan', 'sd.png'),
	'se' => array('Sweden', 'se.png'),
	'sg' => array('Singapore', 'sg.png'),
	'sh' => array('Saint Helena', 'sh.png'),
	'si' => array('Slovenia', 'si.png'),
	'sj' => array('Svalbard', 'sj.png'),
	'sk' => array('Slovakia', 'sk.png'),
	'sl' => array('Sierra Leone', 'sl.png'),
	'sm' => array('San Marino', 'sm.png'),
	'sn' => array('Senegal', 'sn.png'),
	'so' => array('Somalia', 'so.png'),
	'sr' => array('Suriname', 'sr.png'),
	'st' => array('Sao Tome and Principe', 'st.png'),
	'su' => array('Old U.S.S.R', 'su.png'),
	'sv' => array('El Salvador', 'sv.png'),
	'sy' => array('Syrian Arab Republic', 'sy.png'),
	'sz' => array('Swaziland', 'sz.png'),
	'tc' => array('Turks and Caicos Islands', 'tc.png'),
	'td' => array('Chad', 'td.png'),
	'tf' => array('French Southern Territories', 'tf.png'),
	'tg' => array('Togo', 'tg.png'),
	'th' => array('Thailand', 'th.png'),
	'tj' => array('Tajikistan', 'tj.png'),
	'tk' => array('Tokelau', 'tk.png'),
	'tm' => array('Turkmenistan', 'tm.png'),
	'tn' => array('Tunisia', 'tn.png'),
	'to' => array('Tonga', 'to.png'),
	'tp' => array('East Timor', 'tp.png'),
	'tr' => array('Turkey', 'tr.png'),
	'tt' => array('Trinidad and Tobago', 'tt.png'),
	'tv' => array('Tuvalu', 'tv.png'),
	'tw' => array('Taiwan', 'tw.png'),
	'tz' => array('Tanzania, (United Republic of', 'tz.png'),
	'ua' => array('Ukraine', 'ua.png'),
	'ug' => array('Uganda', 'ug.png'),
	'uk' => array('United Kingdom', 'uk.png'),
	'gb' => array('Great Britain', 'gb.png'),
	'um' => array('United States Minor Outlying Islands', 'um.png'),
	'us' => array('United States', 'us.png'),
	'uy' => array('Uruguay', 'uy.png'),
	'uz' => array('Uzbekistan', 'uz.png'),
	'va' => array('Vatican City', 'va.png'),
	'vc' => array('Saint Vincent and the Grenadines', 'vc.png'),
	've' => array('Venezuela', 've.png'),
	'vg' => array('Virgin Islands, (British', 'vg.png'),
	'vi' => array('Virgin Islands, (U.S.', 'vi.png'),
	'vn' => array('Vietnam', 'vn.png'),
	'vu' => array('Vanuatu', 'vu.png'),
	'wf' => array('Wallis and Futuna', 'wf.png'),
	'ws' => array('Samoa', 'ws.png'),
	'ye' => array('Yemen', 'ye.png'),
	'yt' => array('Mayotte', 'yt.png'),
	'yu' => array('Yugoslavia', 'yu.png'),
	'za' => array('South Africa', 'za.png'),
	'zm' => array('Zambia', 'zm.png'),
	'zr' => array('Zaire', 'zr.png'),
	'zw' => array('Zimbabwe', 'zw.png'),
	'tv' => array('Tuvalu', 'tv.png'),
	'ws' => array('Samoa', 'ws.png'),
	'other' => array('Others', '../other.png')
);
?>