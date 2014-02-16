    <?php  
    /* 
    Template Name: Konfigurator 
    */  
    ?>  
<?php get_header(); ?>

<div class="container">

<style type="text/css">

i{font-style: italic;}

/* Progress */
.tabs{ margin: 0; padding: 0; background: #eee;}
html.no-js .tabs{display: none;}
html.js .tabs{background: #eee;}


.tabs li{display: inline-block; font-size: 0.75em; text-align: center; width: 13%; margin: 0; padding: 0; line-height: 3;}

.tabs li a{text-decoration: none; display: inline-block; width: 100%; height: 100%;}

li[aria-selected="true"] a{background: #777; color: #eee;}

a,
fieldset{
	-webkit-transition: all 200ms ease-in-out;
	-moz-transition: all 200ms ease-in-out;
	-ms-transition: all 200ms ease-in-out;
	-o-transition: all 200ms ease-in-out;
	transition: all 200ms ease-in-out;
}

#konfigurator fieldset

html.no-js fieldset{
	border-bottom: 1px solid #777;
}

html.no-js fieldset:nth-child(even){
	background: #eee;
}

.next-tab,
.prev-tab{background: #eee; padding:0.5em; text-decoration: none;}

.next-tab:hover,
.prev-tab:hover{background: #333; color: #eee;}

.prev-tab{float: left;}
.next-tab{float: right;}

.disabled {
cursor: default !important;
pointer-events: none;
opacity: 0.35;
}

.tab-header{padding: 1.5rem 0;}
.tab-header h2,
.tab-header p{margin: 0; padding:0;}

.fieldset-body{min-height: 31rem;}

#preis{background: #eee; padding: 1rem;}
#preis p{margin: 0; padding: 0; line-height: 2.5;}

#preis p span,
#preis p strong{display: inline-block; width: 16rem;}

.netto{}
.steuer{font-size: 0.85em; border-bottom: 1px solid #777;}
.brutto{font-size: 1.25em;}
.versand{font-size: 0.75em; line-height: 1;}

/* Accordion */
#accordion{}

#accordion h3{cursor: pointer;}
#accordion h3[aria-selected="false"]:before{
    content: "▾";
    opacity: 0.45;
}

#accordion h3[aria-selected="true"]:before{
    content: "▴";
    opacity: 0.45;
}

#accordion div{padding-left: 1em; color: #777;}

#accordion div p{}
	</style>

<script type="text/javascript">

$(document).ready(function () {
    var $tabs = $('#konfigurator').tabs();
 
    $(".tab").each(function (i) {
 
        var totalSize = $(".tab").size() - 1;
 
        if (i != totalSize) {
            next = i + 1;
            $(this).append("<a href='#' class='next-tab mover' rel='" + next + "'>Vorwärts &#187;</a>");
        }
 
        if (i != 0) {
            prev = i-1;
            $(this).append("<a href='#' class='prev-tab mover' rel='" + prev + "'>&#171; Zurück</a>");
        }
 
    });
 
    $('.next-tab, .prev-tab').click(function () {
        var cc = $(this).attr("rel");
 
        $('#konfigurator').tabs({ active: parseInt(cc) });
        //  $('#tabs').tabs({active:1})
        return false;
    });
});

$(function() {
$( "#accordion" ).accordion({
collapsible: true
});
});

</script>

<!-- Accordion -->
<div id="accordion">
<h3>Section 1</h3>
<div>
<p>
Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
</p>
</div>
<h3>Section 2</h3>
<div>
<p>
Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
suscipit faucibus urna.
</p>
</div>
<h3>Section 3</h3>
<div>
<p>
Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
</p>
<ul>
<li>List item one</li>
<li>List item two</li>
<li>List item three</li>
</ul>
</div>
<h3>Section 4</h3>
<div>
<p>
Cras dictum. Pellentesque habitant morbi tristique senectus et netus
et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
mauris vel est.
</p>
<p>
Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
inceptos himenaeos.
</p>
</div>
</div>
<!-- /Accordion -->


<h1>Glasplatten-Konfigurator</h1>

<div id="owl-post" class="owl-carousel owl-theme">

<a href="http://www.jan-wambach.de/blog/wp-content/uploads/2013/04/startseitenbilder_fassaden.jpg"><img class="alignnone size-full wp-image-396" alt="Bild 3" src="http://www.jan-wambach.de/blog/wp-content/uploads/2013/04/startseitenbilder_fassaden.jpg" /></a>

<a href="http://www.jan-wambach.de/blog/wp-content/uploads/2013/04/startseitenbilder_gebäude.jpg"><img class="alignnone size-full wp-image-397" alt="Bild 2" src="http://www.jan-wambach.de/blog/wp-content/uploads/2013/04/startseitenbilder_gebäude.jpg" /></a>

<a href="http://www.jan-wambach.de/blog/wp-content/uploads/2013/04/startseitenbilder_duschen.jpg"><img class="alignnone size-full wp-image-398" alt="Bild 1" src="http://www.jan-wambach.de/blog/wp-content/uploads/2013/04/startseitenbilder_duschen.jpg" /></a>

<a href="http://www.jan-wambach.de/blog/wp-content/uploads/2013/06/cropped-NewYork.jpg"><img class="alignnone size-medium wp-image-415" alt="cropped-NewYork.jpg" src="http://www.jan-wambach.de/blog/wp-content/uploads/2013/06/cropped-NewYork.jpg" /></a>

</div>

<form id="konfigurator" class="clearfix">

<ul class="tabs" class="clearfix">
<li><a href="#tab-1">Glasstärke</a></li>
<li><a href="#tab-2">Glasform</a></li>
<li><a href="#tab-3">Abmessungen</a></li>
<li><a href="#tab-4">Glasart</a></li>
<li><a href="#tab-5">Glasbearbeitung</a></li>
<li><a href="#tab-6">Glaslackierung</a></li>
<li><a href="#tab-7">Zeichnung</a></li>
</ul>



<fieldset id="tab-1" class="tab">

<header class="sixteen columns tab-header">
<h2>1. Glasstärke</h2>
<p><strong>Schritt 1 von 7:</strong> <i>Bestimmen Sie die Glasstärke</i></p>
</header>

<article class="fieldset-body clearfix">

<div class="four columns">
<img src="http://i0.wp.com/www.jan-wambach.de/blog/wp-content/uploads/2013/04/startseitenbilder_fassaden.jpg?w=960" alt="Testbild" title="Testbild" >
<input type="radio" name="Glasstaerke" value="4mm ESG" required>
<p>4 Millimeter Einscheibensicherheitsglas</p>
</div>

<div class="four columns">
<img src="http://i0.wp.com/www.jan-wambach.de/blog/wp-content/uploads/2013/04/startseitenbilder_fassaden.jpg?w=960" alt="Testbild" title="Testbild" >
<input type="radio" name="Glasstaerke" value="6mm ESG" required>
<p>6 Millimeter Einscheibensicherheitsglas</p>
</div>

<div class="four columns">
<img src="http://i0.wp.com/www.jan-wambach.de/blog/wp-content/uploads/2013/04/startseitenbilder_fassaden.jpg?w=960" alt="Testbild" title="Testbild" >
<input type="radio" name="Glasstaerke" value="8mm ESG" required>
<p>8 Millimeter Einscheibensicherheitsglas</p>
</div>

<div class="four columns">
<img src="http://i0.wp.com/www.jan-wambach.de/blog/wp-content/uploads/2013/04/startseitenbilder_fassaden.jpg?w=960" alt="Testbild" title="Testbild" >
<input type="radio" name="Glasstaerke" value="10mm ESG" required>
<p>10 Millimeter Einscheibensicherheitsglas</p>
</div>

</article>

</fieldset>


<fieldset id="tab-2" class="tab">

<header class="sixteen columns tab-header">
<h2>2. Glasform</h2>
<p><strong>Schritt 2 von 7:</strong> <i>Wählen Sie die Glasform</i></p>
</header>

<article class="fieldset-body clearfix">

<div class="four columns">
<img src="http://i1.wp.com/www.jan-wambach.de/blog/wp-content/uploads/2013/04/startseitenbilder_duschen.jpg?w=960" alt="Testbild" title="Testbild" >
<input type="radio" name="Form" value="Form 1" required>
<p>Form 1</p>
</div>

<div class="four columns">
<img src="http://i1.wp.com/www.jan-wambach.de/blog/wp-content/uploads/2013/04/startseitenbilder_duschen.jpg?w=960" alt="Testbild" title="Testbild" >
<input type="radio" name="Form" value="Form 1" required>
<p>Form 2</p>
</div>

<div class="four columns">
<img src="http://i1.wp.com/www.jan-wambach.de/blog/wp-content/uploads/2013/04/startseitenbilder_duschen.jpg?w=960" alt="Testbild" title="Testbild" >
<input type="radio" name="Form" value="Form 1" required>
<p>Form 3</p>
</div>

<div class="four columns">
<img src="http://i1.wp.com/www.jan-wambach.de/blog/wp-content/uploads/2013/04/startseitenbilder_duschen.jpg?w=960" alt="Testbild" title="Testbild" >
<input type="radio" name="Form" value="Form 1" required>
<p>Form 4</p>
</div>

</article>

</fieldset>



<fieldset id="tab-3" class="tab">

<header class="sixteen columns tab-header">
<h2>3. Abmessungen</h2>
<p><strong>Schritt 3 von 7:</strong> <i>Tragen Sie die Abmessungen ein</i></p>
</header>

<article class="fieldset-body clearfix">

<label>Breite</label>
<input type="number" placeholder="Breite in mm" name="Breite" min="240" max="3500" pattern="[0-9]{4}" required>

<label>Höhe</label>
<input type="number" placeholder="Höhe in mm" name="Hoehe" min="240" max="3500" pattern="[0-9]{4}" required>

</article>

</fieldset>



<fieldset id="tab-4" class="tab">

<header class="sixteen columns tab-header">
<h2>4. Glasart</h2>
<p><strong>Schritt 4 von 7:</strong> <i>Bestimmen Sie die Glasart</i></p>
</header>

<article class="fieldset-body clearfix">

<div class="four columns">
<img src="http://i0.wp.com/www.jan-wambach.de/blog/wp-content/uploads/2013/06/cropped-NewYork.jpg?w=460" alt="Testbild" title="Testbild" >
<input type="radio" name="Glasart" value="Klarglas" required>
<p>Klarglas</p>
</div>

<div class="four columns">
<img src="http://i0.wp.com/www.jan-wambach.de/blog/wp-content/uploads/2013/06/cropped-NewYork.jpg?w=460" alt="Testbild" title="Testbild" >
<input type="radio" name="Glasart" value="Optiwhite" required>
<p>Optiwhite</p>
</div>

<div class="four columns">
<img src="http://i0.wp.com/www.jan-wambach.de/blog/wp-content/uploads/2013/06/cropped-NewYork.jpg?w=460" alt="Testbild" title="Testbild" >
<input type="radio" name="Glasart" value="Grünglas" required>
<p>Grünglas</p>
</div>

<div class="four columns">
<img src="http://i0.wp.com/www.jan-wambach.de/blog/wp-content/uploads/2013/06/cropped-NewYork.jpg?w=460" alt="Testbild" title="Testbild" >
<input type="radio" name="Glasart" value="Grauglas" required>
<p>Grauglas</p>
</div>

<div class="four columns">
<img src="http://i0.wp.com/www.jan-wambach.de/blog/wp-content/uploads/2013/06/cropped-NewYork.jpg?w=460" alt="Testbild" title="Testbild" >
<input type="radio" name="Glasart" value="Bronzeglas" required>
<p>Bronzeglas</p>
</div>

<div class="four columns">
<img src="http://i0.wp.com/www.jan-wambach.de/blog/wp-content/uploads/2013/06/cropped-NewYork.jpg?w=460" alt="Testbild" title="Testbild" >
<input type="radio" name="Glasart" value="Blauglas" required>
<p>Blauglas</p>
</div>

<div class="four columns">
<img src="http://i0.wp.com/www.jan-wambach.de/blog/wp-content/uploads/2013/06/cropped-NewYork.jpg?w=460" alt="Testbild" title="Testbild" >
<input type="radio" name="Glasart" value="Satinato" required>
<p>Satinato</p>
</div>

</article>

</fieldset>



<fieldset id="tab-5" class="tab">

<header class="sixteen columns tab-header">
<h2 class="sixteen columns">5. Glasbearbeitung</h2>
<p><strong>Schritt 5 von 7:</strong> <i>Wählen Sie eine Glasbearbeitung</i></p>
</header>

<article class="fieldset-body clearfix">

</article>

</fieldset>



<fieldset id="tab-6" class="tab">

<header class="sixteen columns tab-header">
<h2 class="sixteen columns">6. Glaslackierung</h2>
<p><strong>Schritt 6 von 7:</strong> <i>Wählen Sie eine Lackierung</i></p>
</header>

<article class="fieldset-body clearfix">

</article>

</fieldset>



<fieldset id="tab-7" class="tab">

<header class="sixteen columns tab-header">
<h2 class="sixteen columns">7. Konstruktionszeichnung</h2>
<p><strong>Schritt 7 von 7:</strong> <i>Hier können Sie optional eine Konstruktionszeichnung im *.pdf oder *.dxf-Format hochladen</i></p>
</header>

<article class="fieldset-body clearfix">

<input type="file">

</article>


</fieldset>


<article class="clearfix">

<header class="sixteen columns tab-header">
<h2 class="sixteen columns">Bestellen</h2>
</header>

<input type="reset" value="Zurücksetzen">
<input type="submit" value="Absenden">

<p class="row" style="font-size:10px;"><input type="checkbox" required><i>Hiermit erkläre ich, dass ich die <a href="###">Allgemeinen Geschäftsbedingungen der Tardis GmbH & Co. KG</a> gelesen und akzeptiert habe.</i></p>

</article>

<article id="preis">
<p class="netto"><span>Zwischensumme (netto):</span><strong>24,37 €</strong></p>
<p class="steuer"><span>zzgl. 19% MwSt.:</span><strong>4,63 €</strong></p>
<p class="brutto"><span>Gesamtsumme:</span><strong>29,00 €</strong></p>
<p class="versand"><i>inkl. MwSt., <a href="##">zzgl. Versandkosten</a></i></p>
</article>


</form>

<section id="zertifiziert">
<img style="display:block; margin:0 auto;" src="http://i0.wp.com/www.tardis.com/wp-content/uploads/2012/09/TUV-GS.png">
<p style="font-size:0.75em; text-align:center;">Einscheibensicherheitsglas,TÜV-geprüft und zertifiziert nach DIN EN 12150</p>
</section>

</div>

<?php get_footer(); ?>