<?php $_result='		<section id="module-wiki">					
			<header>
				<h1>
					<a href="/syndication/rss/wiki/" title="Syndication" class="fa fa-syndication"></a>
					Wiki PHPBoost
				</h1>
			</header>
			<div class="content">
						<div class="wiki-tools-container">
			<menu id="cssmenu-wikitools" class="cssmenu cssmenu-right cssmenu-actionslinks cssmenu-tools">
				<ul class="level-0 hidden">
					
					<li><a href="../wiki/history.php" title="Historique" class="cssmenu-title">
						<i class="fa fa-reply"></i> Historique
					</a></li>
					
						
					
					
					
						<li><a href="../wiki/property.php?random=1" title="Page aléatoire" class="cssmenu-title">
							<i class="fa fa-random"></i> Page aléatoire
						</a></li>
					
					
				</ul>
			</menu>
			<script>
				jQuery("#cssmenu-wikitools").menumaker({
					title: "Outils",
					format: "multitoggle",
					breakpoint: 768
				});
				jQuery(document).ready(function() {
					jQuery("#cssmenu-wikitools ul").removeClass(\'hidden\');
				});
			</script>
		</div>
		<div class="spacer"></div>
				<br /><br />
				Bienvenue sur le module wiki ! <br />
Voici quelques conseils pour bien débuter sur ce module.<br />
<ul class="formatter-ul">
<li class="formatter-li">Pour configurer votre module, rendez vous dans l\'<a href="/wiki/admin_wiki.php">administration du module</a>
</li><li class="formatter-li">Pour créer des catégories, <a href="/wiki/post.php?type=cat">cliquez ici</a>
</li><li class="formatter-li">Pour créer des articles, rendez vous <a href="/wiki/post.php">ici</a><br />
</li></ul> <br />
Pour personnaliser l\'accueil de ce module, <a href="/wiki/admin_wiki.php">cliquez ici</a> <br />
Pour en savoir plus, n\'hésitez pas à consulter la documentation du module sur le site de <a href="http://www.phpboost.com">PHPBoost</a>.
				<br />
				
					<hr /><br />
					<strong><em>Liste des catégories principales :</em></strong>
					<br /><br />
					
					Aucune catégorie existante
				
				<br /><br />
				<div class="options">
					<a href="/wiki/explorer.php" title="Explorateur du wiki">
						<i class="fa fa-folder-open"></i>
						Explorateur du wiki
					</a>
				</div>
				<br />
				
				<hr /><br />
				<table id="table">
					<thead>
						<tr> 
							<th colspan="2">
								<strong><em>Derniers articles mis à jour :</em></strong>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							
							<td class="center" colspan="2">Aucun article existant</td>
						</tr>
					</tbody>
				</table>
				
			</div>
			<footer></footer>
		</section>
		
'; ?>