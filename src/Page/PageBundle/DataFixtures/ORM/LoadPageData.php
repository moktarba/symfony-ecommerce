<?php //src/DataFixtures/ORM/LoadCategoryData.php

namespace Page\PageBundle\DataFixtures\ORM;

use Page\PageBundle\Entity\Page;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class LoadPageData extends AbstractFixture implements OrderedFixtureInterface
{
     public function load(ObjectManager $manager)
    {
        $page1 = new Page();
        $page1->setTitre('CGV');
        $page1->setDescription(
            "
              <div><h2>A propos de ces CGV et CGU de services</h2></div>
<article class='row'>
    <h3>Introduction aux CGU/CGV pour la vente de prestations de services en ligne</h3>
    <div><p class='text-justify'>Les conditions générales d’utilisation (CGU) sont les informations qui, disponibles sur un site internet, apprennent à son visiteur ses modalités de fonctionnement et les conditions de responsabilité de l’éditeur, ce qui permet généralement d’éviter ou de réduire de nombreux conflits. La loi du 21 juin 2004 pour la confiance dans l’économie numérique encadre les obligations informatives mises à la charge des vendeurs en ligne, et exige ainsi dans de nombreux cas la communication de CGU, mais aussi de CGV dans le cadre d’un site marchand.<br />
    <br />
    Les conditions générales de vente (CGV) regroupent quant à elles les modalités de vente dans le cadre d’un contrat de <a href='https://www.legalife.fr/modele/cgv-et-cgu-pour-les-produits-en-ligne/'>vente de produits</a> ou de prestation de services, qu’il soit exécuté en personne ou sur internet, et à l’adresse de consommateurs ou de professionnels. Les articles L. 441-6 du Code de commerce et L. 112-1 et suivants du Code de la consommation fixent pour le prestataire de service une obligation de communication de ces CGV à l'acheteur, qu'il s'agisse d'un professionnel ou d'un particulier.<br />
    <br />
    Condensées en un seul document, ces conditions générales constituent donc une source d’information essentielle pour le visiteur d’un site de commerce électronique, puisqu’elles définissent les conditions de fonctionnement et d’utilisation du site autant que les modalités de vente des prestations de services proposées dessus. Dans le cadre du e-commerce qui se développe toujours plus, le législateur a ainsi tenté d’assurer une meilleure information précontractuelle pour le consommateur, afin d’éviter un vide juridique dans ce domaine en pleine expansion. Mais pour vous et non seulement pour le respect des textes, des CGU/CGV bien rédigées représentent une garantie non négligeable face aux aléas d’une activité commerciale électronique.</p>
    </div>
</article>
<article class='row'>
    <h3>Quand utiliser ce modèle de document ?</h3>
    <div><p class='text-justify' >Pour déterminer si cet exemple type de CGU/CGV est le plus adapté à votre site, il faut catégoriser l’activité que vous y effectuez. En effet, selon que vous vendez des produits ou des services, que vous les proposez en ligne ou hors ligne, et ce à l’attention d’acheteurs professionnels ou de simples consommateurs, vous ne serez pas soumis tout à fait aux mêmes règles.<br />
    <br />
    Si vos clients sont des professionnels comme vous, c’est-à-dire des entreprises ou éventuellement d'autres sites internets &nbsp;(on parle alors de relation BtoB, Business to Business en anglais), la rédaction de vos conditions générales est soumise au régime prévu dans le Code du commerce. A l’inverse, si vos acheteurs sont des particuliers ou des professionnels contractant pour les besoins de leur vie personnelle, il sont qualifiés de consommateurs au sens du Code de la consommation que vous devez alors respecter (il s'agit là d'une relation BtoC, Business to Consumer).<br />
    <br />
    Quant au type d’activité exercée, il convient de déterminer si vous fournissez des produits, c’est-à-dire des biens, ou si au contraire vous effectuez des prestations de service auprès de vos clients (service à domicile, service informatique,…). Cette distinction peut se révéler complexe pour certaines activités qui réunissent ces deux aspects. Doit alors primer la qualification de l’activité essentielle du contrat. Si vous hésitez sur ce point, avant de vous lancer dans la rédaction du document, il est toujours possible de <a href='https://www.legalife.fr/consulter-un-avocat'>consulter un avocat</a> spécialisé qui répondra à toutes vos questions.<br />
    <br />
    Le modèle type que nous vous proposons de personnaliser ici est adapté si vous êtes l’éditeur d’un site internet de e-commerce, et plus précisément si vous vendez en ligne des prestations de service à des acheteurs dont le statut peut être celui de professionnels comme de consommateurs. Répondez alors à notre questionnaire, et le logiciel vous guide dans la création en ligne de vos CGU/CGV.</p>
    </div>
</article>
            "
        );
        $manager->persist($page1);

        $page2 = new Page();
        $page2->setTitre('Mentions Légales');
        $page2->setDescription(
            "
                Mentions légales pour un site internet
                Ce document est un modèle de mentions légales : les mentions légales sont des mentions obligatoires ayant pour but principalement de permettre aux internautes naviguant sur le site d\'identifier la personne responsable (civilement, pénalement, etc.) de ce site internet.

                Si l\'éditeur vend également des biens ou produits par le biais du site, il devra établir et publier – outre les présentes mentions légales obligatoires – des mentions particulières concernant ses conditions générales de vente.

                Lorsque l\'éditeur ne vend pas des biens ou des produits, ce modèle offre la possibilité d\'indiquer de quelles manières les données personnelles des utilisateurs sont traitées et collectées, conformément aux dispositions du règlement européen du parlement et du conseil n°2016/679 (règlement général sur la protection des données, 'RGPD').


                Comment utiliser ce document ?

                Une partie de ce document contient des dispositions légales obligatoires qu\'il faudra nécessairement remplir. Des espaces de rédaction libre sont prévus dans le document afin de permettre à certains secteurs d\'activités réglementées de préciser leur agrément ou les conditions particulières de leur activité.

                Pour remplir ses obligations déclaratives, l\'éditeur du site doit prévoir que ces mentions légales soient publiées et qu\'elles soient facilement identifiables par les internautes sur le site internet (prévoir un lien hypertexte dans chacune des pages, un onglet bien identifié, etc.).

                Enfin, l\'éditeur du site doit prévoir une adresse mail valide et régulièrement consultée afin de réagir promptement à tout signalement de contenu illicite sur son site.


                Le droit applicable

                Le règlement européen 2016/679 du Parlement européen et du Conseil.
                La Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l\'économie numérique et notamment l\'article 6.
                La Loi n° 78-17 du 6 janvier 1978 relative à l\'informatique, aux fichiers et aux libertés pour les questions de traitement de données à caractère personnel.


                Aide d\'un avocat

                Vous pourrez choisir de consulter un avocat si vous avez besoin d\'aide.

                L\'avocat pourra répondre à vos questions ou vous aider dans vos démarches. Cette option vous sera proposée à la fin du document.


                Comment modifier le modèle ?

                Vous remplissez un formulaire. Le document se rédige sous vos yeux au fur et à mesure de vos réponses.

                A la fin, vous le recevez gratuitement aux formats Word et PDF. Vous pouvez le modifier et le réutiliser.
            "
        );
        $manager->persist($page2);


     $page3 = new Page();
     $page3->setTitre('La Page d\'Aide');
     $page3->setDescription(
     "
         Votre page d’accueil est la page qui s’affiche lorsque vous vous connectez à Facebook. Elle est composée du fil d’actualité, qui correspond à la liste continuellement actualisée des publications de vos amis, des Pages que vous aimez et de toute autre relation que vous avez. Vous pouvez réagir aux publications que vous voyez, ou rechercher des personnes ou des sujets qui vous intéressent. Découvrez comment définir ce que vous voulez voir dans votre fil d’actualité.
     "
      );
    $manager->persist($page3);

     $page4 = new Page();
     $page4->setTitre('Qui Sommes Nous ?');
     $page4->setDescription(
     '
     <div class="aboutus">
     <table>
         <tbody>
             <tr>
                 <td colspan="2">
                 <br />
                 <br />
                 <p align="center" _rdeditor_temp="1"> <img alt="Logo Cdiscount" src="https://i1.cdscdn.com/other/logotop-qui-sommes-nous_160315102909.png">
                 </p>
                 <br />
                 <br />
                 </td>
             </tr>
             <tr>
                 <td colspan="2"><font color="#0055a6" style="font-size: large;">Fondée en 1999, aujourd’hui filiale de Cnova N.V., le pôle e-Commerce du groupe Casino, Cdiscount a enregistré depuis sa création plus de 16 millions de clients : un internaute acheteur français sur trois est client. Cdiscount tient sa force de sa capacité à acquérir les bons produits aux meilleurs prix, de sa qualité de service et de sa stratégie multicanale qui s’appuie sur une réseau de distribution de 18 000 points de retrait.
                 Le modèle économique de Cdiscount repose sur une offre large et optimisée, une très forte attractivité et réactivité commerciale et un référencement Internet optimal.
                 </font>
                 <br />
                 <br />
                 </td>
             </tr>
         </tbody>
     </table>
     <br />
     <br />
     <table>
         <tbody>
             <tr>
                 <td>
                 <div class="spEdImgLeft"><img width="375" height="250" alt="" src="//i6.cdscdn.com/other/1-350x250_160315104008.jpg">
                 </div>
                 <div>&nbsp;</div>
                 <div class="spEdImgLeft"><img width="375" height="250" alt="" src="//i6.cdscdn.com/other/2-350x250_160315104018.jpg?d711a270-71ac-4ab6-a973-a2bb3052076b"></div>
                 </td>
                 <td style="padding-left: 20px;">
                 <div style="font-size: 1.3em;">Classée comme une des premières enseignes françaises en image-prix, Cdiscount propose ainsi une offre produit de plus de 114 000 références réparties autour d’une quarantaine d’univers. L’entreprise poursuit la diversification de son offre, notamment à travers le développement de sa marketplace, baptisée ”C le Marché”, qui permet à des partenaires sélectionnés de proposer près de 24 millions d’offres supplémentaires.</div>
                 <br />
                 <div style="font-size: 1.3em;">Cdiscount affiche son ambition : offrir les meilleurs prix sur tous ses produits et assurer un service de qualité en s’appuyant sur une logistique intégrée forte d’une capacité de stockage de plus de 300 000 m2 : 108 000 m2 d’entrepôts pour les petits colis, 3 000 m2 de stockage dédié au vin dans la région bordelaise, 106 000 m2 à proximité de Saint-Étienne, 88 000 m² à proximité de Paris et 20 000m² près d’Orléans pour les gros colis. </div>
                 <br />
                 <div style="font-size: 1.3em;">
                 L’audience de Cdiscount place le site dans le Top 3 des sites les plus fréquentés du e-commerce et permet à sa régie 3W Régie, qui commercialise l’espace publicitaire des grands sites marchands (Priceminister/ Vivastreet, Mistergooddeal, etc.) de s’imposer comme une des principales régies de France. Accessible en ligne, au téléphone ou par courrier, le Centre de relation client de Cdiscount est le premier du secteur à obtenir la certification NF 345, délivrée par l’Afnor. </div>
                 </td>
             </tr>
         </tbody>
     </table>
     <br />
     <br />
     <table>
         <tbody>
             <tr>
                 <td class="tdpad">
                 <font color="#ed6f0c" style="font-size: 1.8em;">Histoire</font>
                 <div style="font-size: 1.3em;"><br />
                 Cdiscount a été fondé en 1999. D’abord consacré aux produits culturels, le site dédié aux achats en ligne à prix discount s’est rapidement affirmé comme un défricheur de tendances, ouvrant ses pages à la high-tech en 2000, au prêt-à-porter en 2002, au vin et gros électroménager en 2004, à l’automobile et au voyage en 2007, et poursuivant avec succès sa diversification pour aujourd’hui proposer les meilleures offres sur une gamme de produits et services de plus en plus large. L’ouverture de sa marketplace ”C le Marché” en 2011 a permis de renforcer encore l’étendue de son offre.<br />
                 </div>
                 </td>
                 <td>
                 <div class="spEdImgLeft"><img width="375" height="250" alt="" src="https://i1.cdscdn.com/other/3-350x250_160315110942.jpg?5ba6e3ed-0855-445a-929e-beeedd8e75e4"></div>
                 </td>
             </tr>
             <tr>
                 <td class="tdpad">
                 <font color="#ed6f0c" style="font-size: 1.8em;">Organisation</font>
                 <div style="font-size: 1.3em;"><br />
                 Cdiscount, qui emploie 1 500 personnes, est implanté à Bordeaux depuis sa création. Son organisation repose sur une des plus grandes plateformes logistique dédiée au e-commerce de France. Tous les produits légers sont stockés dans 110 000 m2 d’une plateforme logistique unique bâtie dans la zone industrielle de Cestas Pot au Pin. Celle-ci est située à proximité des grands axes de communication, et regroupe les capacités logistiques de Cdiscount avec une puissance de traitement supérieure à 100 000 colis / jour. Cette base logistique est complétée par un entrepôt dédié au vin de 3 000 m2 basé à Blanquefort, par&nbsp;106 000 m2 d’entrepôts près de Saint-Etienne et 108 000 m2 d’entrepôts près de Paris pour le stockage et la distribution des produits lourds et/ou encombrants.
                 <br />
                 Cdiscount est une filiale de Cnova, le pôle e-commerce du groupe Casino. Avec un volume d’affaires de 4,8 milliards d’euros TCC, essentiellement réalisé en France et au Brésil, Cnova est l’un des acteurs majeurs du e-commerce à l’échelle mondiale. Cnova s’appuie sur les sites de Cdiscount en France, Côte d’Ivoire, et Extra.com, CasasBahia.com et Pontofrio.com au Brésil.<br />
                 </div>
                 </td>
                 <td>
                 <div class="spEdImgLeft"><img width="375" height="250" alt="" src="https://i1.cdscdn.com/other/4-350x250_160315110952.jpg?9d846e6c-6c60-47fa-9331-c75e1ac9ceb1"></div>
                 </td>
             </tr>
         </tbody>
     </table>
     <br />
     <br />
     <table>
         <tbody>
             <tr>
                 <td>
                 <div class="spEdImgLeft"><img width="350" height="450" alt="" src="https://i1.cdscdn.com/other/5-350x450_160315113928.jpg"></div>
                 </td>
                 <td>
                 <font color="#ed6f0c" style="font-size: 1.8em;">Offres sur le site                 </font>
                 <ul>
                     <br />
                     <li style="font-size: 1.3em; font-weight: bold;">Plus de 40 univers</li>
                     <br />
                 </ul>
                 <dl style="font-size: 1.3em;">
                     <dd>- Produits culturels : DVD, jeux vidéo, musique, livres… </dd>
                     <dd>- High Tech : TV, hifi, photo &amp; vidéo, tablettes, téléphonie… </dd>
                     <dd>- Informatique : ordinateurs, imprimantes, écrans, disques durs, réseau, consommables… </dd>
                     <dd>- Equipement de la maison : électroménager, meubles, décoration, entretien… </dd>
                     <dd>- Equipement de la personne : prêt-à-porter, chaussures, sport, sacs, bijoux, lunettes… </dd>
                     <dd>- Hygiène / Beauté : cosmétique, forme, soins, parfumerie…</dd>
                     <dd>- Alimentaire : vins &amp; spiritueux, épicerie, confiserie…</dd>
                     <dd>- Pour l’enfant : jeux, jouets, articles de puériculture…</dd>
                     <dd>- Services : financement, paiement, garanties, assurances, voyages…</dd>
                 </dl>
                 </td>
             </tr>
         </tbody>
     </table>
     <br />
     <br />
     <table>
         <tbody>
             <tr>
                 <td class="tdpad">
                 <ul>
                     <li style="font-size: 1.3em; font-weight: bold;">C le Marché : la marketplace de Cdiscount</li>
                     <br />
                 </ul>
                 <div style="font-size: 1.3em;">C le Marché est une plateforme technique permettant à des vendeurs sélectionnés de bénéficier d’une vitrine attractive sur le web dans l’objectif de générer de nouvelles ventes. Les partenaires sont sélectionnés sur la qualité de leurs offres, leur positionnement prix et leur savoir-faire logistique. Plus de 23,5 millions d’offres sont proposées par les 8 400 commerçants-partenaires.</div>
                 <div style="font-size: 1.3em;">Nous proposons également à l’ensemble de nos commerçants-partenaires, un service innovant et gratuit : Cdiscount LOCAL, qui permet aux vendeurs qui disposent d’un magasin ou d’un entrepôt ouvert au public de proposer le retrait immédiat..Avec ce service, les boutiques sont géolocalisées sur notre site, et les clients peuvent choisir d’aller chercher directement leur commande 2H après en magasin et ce gratuitement. </div>
                 <br />
           <ul>
                     <li style="font-size: 1.3em; font-weight: bold;">Cdiscount à volonté </li>
             </ul>
                     <div style="font-size: 1.3em;">Cdiscount à volonté c’est l’offre d’abonnement permettant à nos clients de profiter des meilleurs avantages de Cdiscount :<br />

                 - La livraison gratuite et illimitée sur des millions de produits<br />
                 - Les offres exclusives avec des ventes privées, des avant premières <br />
                 - La cagnotte à volonté permettant de gagner des euros à chaque achat effectué sur des sites partenaires puis de les dépenser sur Cdiscount<br />


             </div>

             <br />

                  <br />
                 <br />
                 <ul>
                     <li style="font-size: 1.3em; font-weight: bold;">Cdiscount Alimentaire </li>
                     <br />
                 </ul>
                 <div style="font-size: 1.3em;">Cdiscount lance une offre alimentaire express avec livraison à domicile en 1h30, en s’appuyant sur le réseau des magasins Franprix à Paris, Neuilly-sur-Seine et Levallois-Perret.</div>
                    <br />
              <br />
           <ul>
                     <li style="font-size: 1.3em; font-weight: bold;">Livraison le jour même </li>
                     <br />
                 </ul>
                 <div style="font-size: 1.3em;">Pour enrichir encore son offre de livraison et répondre au mieux aux attentes de ses clients sur tous les achats de produits volumineux : meubles et canapés, gros électroménager, univers image et son, Cdiscount propose la livraison le jour même sur Paris et les départements d’Ile de France, ainsi qu’à Lyon et à Villeurbanne.</div>
                    <br />
              <br />
           <ul>
                     <li style="font-size: 1.3em; font-weight: bold;">Paiement</li>
                     <br />
                 </ul>
                 <div style="font-size: 1.3em;">Nous proposons une offre de paiement adaptée à chacun et parfaitement sécurisée : vos informations sont directement envoyées à nos partenaires bancaires, pour vous permettre d’effectuer vos achats en toute sérénité.
           <br />
           Nous avons également mis en place de nombreuses solutions de paiement pour répondre à  tous vos besoins :  <br />
           -	En 1 fois, 2 fois ou 4 fois par carte bancaire<br />
     -	Par Espèce : dans un réseau de magasins près de chez vous  <br />
     -	Via Paypal <br />
     -	Avec la carte Cdiscount : au comptant ou en plusieurs fois<br />
     -	Solution crédit : paiement échelonné jusqu’à 36 mois <br />
     -	Paiement Flash <br />

           </div>
                 <br />
              <br />
              <ul>
                     <li style="font-size: 1.3em; font-weight: bold;">Cdiscount Pro</li>
                     <br />
                 </ul>
                 <div style="font-size: 1.3em;">Cdiscount a aussi mis en place une offre dédiée aux professionnels via le site dédié Cdiscount Pro, qui propose des offres adaptées à chaque activité, assorties de services spécifiques.</div>
                 <br />
              <br />
              <ul>
                     <li style="font-size: 1.3em; font-weight: bold;">Les autres sites du Groupe Cdiscount : </li>
                     <br />
                 </ul>


                     <div style="font-size: 1.3em; text-decoration: underline;">Comptoir Santé</div>

                 <div style="font-size: 1.3em;">Comptoir Santé propose une offre complète de plus de 50 000 références et 1500 marques dans les domaines de la santé, beauté, cosmétiques…
     Avec une offre de services de qualité (modes de livraison et de paiement, programme fidélité…) et des prix compétitifs, Comptoir Santé compte désormais parmi les sites leaders de la parapharmacie en ligne..</div>
                <br />
            <div style="font-size: 1.3em; text-decoration: underline;">Mon Corner Deco</div>
                 <div style="font-size: 1.3em;">Mon Corner Déco est un site de mobilier et décoration qui allie, dans un même espace, e-commerce et contenu éditorial.
     Avec une cible féminine à la recherche de tendances actuelles et conseils décos, le site propose une sélection de produits adaptée à tous les budgets et pour tous les goûts !
     </div>

           </td>
                 <td>
                 <div class="spEdImgLeft"><img width="375" height="250" alt="" src="https://i1.cdscdn.com/other/6-350x250_160315111003.jpg"></div>
                 <div>&nbsp;</div>
           <br />
           <br />
           <br />
           <br />
           <br />
           <br />
           <br />
           <br />
           <br />
           <br />
             <br />
           <br />
           <br />
           <br />
           <br />
           <br />
           <br />	<br />
           <br />
           <br />
           <br />
           <br />
           <br />
           <br />
           <br />
                 <div class="spEdImgLeft"><img width="375" height="250" alt="" src="https://i1.cdscdn.com/other/7-350x250_160315111019.jpg"></div>
                 </td>
             </tr>
         </tbody>
     </table>
     <br />
     <br />
     <table>
         <tbody>
             <tr>
                 <td>
                 <font color="#ed6f0c" style="font-size: 1.8em;">Quelques chiffres</font>
                 <ul><br />
                     <li style="font-size: 1.3em;">Volume d’affaires : 2 741 millions d’euros</li>
                     <li style="font-size: 1.3em;">Chiffre d’affaires : 1 765 millions d’euros</li>
                     <li style="font-size: 1.3em;">1 500 collaborateurs</li>
                     <li style="font-size: 1.3em;">108 000 m2 d’entrepôts pour les petits colis, 3 000 m2 de stockage dédié au vin dans la région bordelaise, 106 000 m2 à proximité de Saint-Étienne, 88 000 m² à proximité de Paris, 20 000m² près d’Orléans pour les gros colis. </li>
                     <li style="font-size: 1.3em;">Environ 2 millions visiteurs par jour avec un pic de 5 millions lors de l’ouverture des soldes d’hiver</li>
                     <li style="font-size: 1.3em;">16 millions de clients</li>
                     <li style="font-size: 1.3em;">114 000 références en propre </li>
                     <li style="font-size: 1.3em;">23,6 millions d’offres de partenaires via ”C le Marché”</li>
                     <li style="font-size: 1.3em;">8 400 partenaires via ”C le Marché” </li>
                     <li style="font-size: 1.3em;">85 000 ventes par jour en moyenne</li>
                     <li style="font-size: 1.3em;">18 000 points relais en France (Point retrait Cdiscount, Relais Colis, Mondial Relay, So Colissimo), dont : 11 000 points retraits express (J+1/J+2) &amp; 1 000 points retraits Cdiscount dans les enseignes du groupe Casino :</li>
                 </ul>
                 <dl style="font-size: 1.3em;">
                     <dd>- En partenariat avec les enseignes de proximité pour les petits colis</dd>
                     <dd>- Dans les hypermarchés et supermarchés Casino et Géant ainsi que les Franprix et Leader Price </dd>
                 </dl>
                 <br />
                 <br />
                 <br />
                 </td>
             </tr>
         </tbody>
     </table>
     </div>
     '
      );
      $manager->persist($page4);



        $manager->flush();

        $this->addReference('page1', $page1);
        $this->addReference('page2', $page2);
        $this->addReference('page3', $page3);
        $this->addReference('page4', $page4);
    }

    public function getOrder()
    {
        return 1;
    }
}
