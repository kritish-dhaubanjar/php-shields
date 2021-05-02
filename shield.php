<?php
$url = 'https://vyaguta-extension-default-rtdb.firebaseio.com/requests.json';

$cURLConnection = curl_init();
curl_setopt($cURLConnection, CURLOPT_URL, $url);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($cURLConnection);
curl_close($cURLConnection);

$data  = json_decode($response, true);

header("Content-Type: image/svg+xml");
header('Cache-Control: no-cache');
header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() - 36000));
?>

<!-- Created with Inkscape (http://www.inkscape.org/) -->

<svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="136" height="28.207687" viewBox="0 0 35.983334 7.4632844" version="1.1" id="svg8" inkscape:version="0.92.3 (unknown)" sodipodi:docname="shield.svg">
   <defs id="defs2" />
   <sodipodi:namedview id="base" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:zoom="2.8" inkscape:cx="95.248356" inkscape:cy="-22.955728" inkscape:document-units="mm" inkscape:current-layer="g834" showgrid="false" inkscape:window-width="1366" inkscape:window-height="710" inkscape:window-x="0" inkscape:window-y="30" inkscape:window-maximized="1" fit-margin-top="0" fit-margin-left="0" fit-margin-right="0" fit-margin-bottom="0" units="px" />
   <metadata id="metadata5">
      <rdf:RDF>
         <cc:Work rdf:about="">
            <dc:format>image/svg+xml</dc:format>
            <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
            <dc:title />
         </cc:Work>
      </rdf:RDF>
   </metadata>
   <g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1" transform="translate(-35.546847,-279.18047)">
      <g id="g834" transform="matrix(0.26654321,0,0,0.26654585,35.546847,207.47964)">
         <rect y="269" x="-2.1083923e-07" height="28" width="90" id="rect815" style="opacity:1;fill:#555555;fill-opacity:1;stroke:none;stroke-width:1.02225566;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
         <text id="text834" y="287.54236" x="29.949398" style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:10.58333302px;line-height:0;font-family:'Lobster 1.4';-inkscape-font-specification:'Lobster 1.4, ';letter-spacing:-0.11641606px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.26458332" xml:space="preserve">
            <tspan style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:11.91170597px;font-family:'Open Sans';-inkscape-font-specification:'Open Sans';fill:#ffffff;stroke-width:0.26458332" y="287.54236" x="29.949398" id="tspan832" sodipodi:role="line">TOKENS</tspan>
         </text>
         <rect y="269" x="90" height="27.999998" width="45" id="rect815-3" style="opacity:1;fill:#007ec6;fill-opacity:1;stroke:none;stroke-width:0.72284395;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
         <text id="text834-6" y="287.53616" x="102.42632" style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:10.58333302px;line-height:0;font-family:'Lobster 1.4';-inkscape-font-specification:'Lobster 1.4, ';letter-spacing:-0.11641606px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.26458332" xml:space="preserve">
            <tspan style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:11.91170597px;font-family:'Open Sans';-inkscape-font-specification:'Open Sans';fill:#ffffff;stroke-width:0.26458332" y="287.53616" x="102.42632" id="tspan832-7" sodipodi:role="line"><?php echo count($data); ?></tspan>
         </text>
         <path style="fill:#ffffff;stroke-width:0.61259049" id="path1035" d="m 17.214851,275.64892 v 3.95488 l 1.102664,1.51433 1.102664,-1.51433 v -3.95488 z m 2.205328,3.95488 v 1.88188 l 1.778959,-0.58808 2.337646,-3.19038 -1.793665,-1.30849 z m 1.778959,1.2938 -1.102659,1.52902 1.793662,0.57339 3.763756,-1.22028 -0.691002,-2.10241 z m 0.691003,2.10241 -1.793662,0.57338 1.102659,1.52902 3.763757,1.22028 0.691002,-2.10241 z m -0.691003,2.10241 -1.778959,-0.58809 v 1.88188 l 2.32294,3.20507 1.793665,-1.30849 z m -1.778959,1.29379 -1.102664,-1.51433 -1.102664,1.51433 v 3.95488 h 2.205328 z m -2.205328,0 v -1.88188 l -1.778964,0.58809 -2.337646,3.19037 1.793666,1.30849 z m -1.778964,-1.29379 1.102664,-1.52903 -1.793666,-0.57338 -3.763757,1.22028 0.691002,2.10241 z m -0.691002,-2.10241 1.793666,-0.57339 -1.102664,-1.52902 -3.763757,-1.22028 -0.691002,2.10241 z m 0.691002,-2.10241 1.778964,0.58808 v -1.88189 l -2.322944,-3.20506 -1.793666,1.30849 z" inkscape:connector-curvature="0" />
      </g>
   </g>
</svg>
