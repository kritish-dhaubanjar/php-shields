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
   <defs>
      <style type="text/css">
         /* @import url("https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i"); */
         
         /* cyrillic-ext */
         @font-face {
           font-family: 'Roboto';
           font-style: normal;
           font-weight: 400;
           src: url(data:font/woff2;base64,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) format('woff2');
           unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
      </style>
   </defs>
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
         <text id="text834" y="287.54236" x="29.949398" style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:10.58333302px;line-height:0;font-family:'Roboto';-inkscape-font-specification:'Roboto, ';letter-spacing:-0.11641606px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.26458332" xml:space="preserve">
            <tspan style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:11.91170597px;font-family:'Roboto';-inkscape-font-specification:'Roboto';fill:#ffffff;stroke-width:0.26458332" y="287.54236" x="29.949398" id="tspan832" sodipodi:role="line">TOKENS</tspan>
         </text>
         <rect y="269" x="90" height="27.999998" width="45" id="rect815-3" style="opacity:1;fill:#007ec6;fill-opacity:1;stroke:none;stroke-width:0.72284395;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal" />
         <text id="text834-6" y="287.53616" x="102.42632" style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:10.58333302px;line-height:0;font-family:'Roboto';-inkscape-font-specification:'Roboto, ';letter-spacing:-0.11641606px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.26458332" xml:space="preserve">
            <tspan style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:11.91170597px;font-family:'Roboto';-inkscape-font-specification:'Roboto';fill:#ffffff;stroke-width:0.26458332" y="287.53616" x="102.42632" id="tspan832-7" sodipodi:role="line"><?php echo count($data); ?></tspan>
         </text>
         <path style="fill:#ffffff;stroke-width:0.61259049" id="path1035" d="m 17.214851,275.64892 v 3.95488 l 1.102664,1.51433 1.102664,-1.51433 v -3.95488 z m 2.205328,3.95488 v 1.88188 l 1.778959,-0.58808 2.337646,-3.19038 -1.793665,-1.30849 z m 1.778959,1.2938 -1.102659,1.52902 1.793662,0.57339 3.763756,-1.22028 -0.691002,-2.10241 z m 0.691003,2.10241 -1.793662,0.57338 1.102659,1.52902 3.763757,1.22028 0.691002,-2.10241 z m -0.691003,2.10241 -1.778959,-0.58809 v 1.88188 l 2.32294,3.20507 1.793665,-1.30849 z m -1.778959,1.29379 -1.102664,-1.51433 -1.102664,1.51433 v 3.95488 h 2.205328 z m -2.205328,0 v -1.88188 l -1.778964,0.58809 -2.337646,3.19037 1.793666,1.30849 z m -1.778964,-1.29379 1.102664,-1.52903 -1.793666,-0.57338 -3.763757,1.22028 0.691002,2.10241 z m -0.691002,-2.10241 1.793666,-0.57339 -1.102664,-1.52902 -3.763757,-1.22028 -0.691002,2.10241 z m 0.691002,-2.10241 1.778964,0.58808 v -1.88189 l -2.322944,-3.20506 -1.793666,1.30849 z" inkscape:connector-curvature="0" />
      </g>
   </g>
</svg>
