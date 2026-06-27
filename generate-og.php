<?php
$w = 1200; $h = 630;
$img = imagecreatetruecolor($w, $h);

$black  = imagecolorallocate($img, 8,   8,   8);
$gold   = imagecolorallocate($img, 212, 175, 55);
$gold2  = imagecolorallocate($img, 245, 200, 66);
$white  = imagecolorallocate($img, 255, 255, 255);
$gray   = imagecolorallocate($img, 120, 120, 120);
$dark   = imagecolorallocate($img, 26,  26,  26);

// Background
imagefilledrectangle($img, 0, 0, $w, $h, $black);

// Right dark panel
imagefilledrectangle($img, 700, 0, $w, $h, $dark);

// Gold left border
imagefilledrectangle($img, 0, 0, 6, $h, $gold);

// Gold diagonal accent
$points = [700, 0, 760, 0, 740, $h, 700, $h];
imagefilledpolygon($img, $points, $gold);

// Decorative gold lines
imagesetthickness($img, 1);
for ($i = 0; $i < 5; $i++) {
    $alpha = imagecolorallocatealpha($img, 212, 175, 55, 110 - $i * 20);
    imageline($img, 50 + $i * 15, 0, 50 + $i * 15, $h, $alpha);
}

// Logo
$logoPath = __DIR__ . '/public/logo.png';
if (file_exists($logoPath)) {
    $logo = imagecreatefrompng($logoPath);
    $lw = imagesx($logo); $lh = imagesy($logo);
    $scale = 100 / $lh;
    $nw = (int)($lw * $scale); $nh = 100;
    imagecopyresampled($img, $logo, 60, 60, 0, 0, $nw, $nh, $lw, $lh);
    imagedestroy($logo);
}

// Fonts
$fontBold   = 'C:/Windows/Fonts/arialbd.ttf';
$fontReg    = 'C:/Windows/Fonts/arial.ttf';
$fontExists = file_exists($fontBold);

if ($fontExists) {
    // Main headline
    imagettftext($img, 62, 0, 60, 290, $white, $fontBold, 'CARVORA');
    imagettftext($img, 62, 0, 60, 360, $gold,  $fontBold, 'CHARCOAL');

    // Tagline
    imagettftext($img, 20, 0, 60, 410, $gray,  $fontReg,  'Premium Coconut Shell Charcoal Briquette');

    // Separator line
    imagefilledrectangle($img, 60, 430, 300, 432, $gold);

    // Stats
    imagettftext($img, 18, 0, 60,  470, $gold,  $fontBold, '30+');
    imagettftext($img, 14, 0, 60,  492, $gray,  $fontReg,  'Countries');
    imagettftext($img, 18, 0, 180, 470, $gold,  $fontBold, '75+');
    imagettftext($img, 14, 0, 180, 492, $gray,  $fontReg,  'Clients');
    imagettftext($img, 18, 0, 290, 470, $gold,  $fontBold, '100%');
    imagettftext($img, 14, 0, 290, 492, $gray,  $fontReg,  'Natural');

    // Domain
    imagettftext($img, 16, 0, 60, 560, $gray, $fontReg, 'carvoracharcoal.my.id');

    // Right panel text
    imagettftext($img, 16, 0, 790, 200, $gray, $fontReg,  'Indonesia');
    imagettftext($img, 22, 0, 790, 240, $white, $fontBold, 'Trusted by');
    imagettftext($img, 22, 0, 790, 270, $gold,  $fontBold, 'importers');
    imagettftext($img, 22, 0, 790, 300, $white, $fontBold, 'worldwide');

    // Certifications on right
    $certs = ['ISO 9001', 'Halal Cert', 'Eco-Friendly', 'SGS Tested'];
    foreach ($certs as $i => $cert) {
        imagefilledrectangle($img, 790, 360 + $i * 44, 800, 376 + $i * 44, $gold);
        imagettftext($img, 14, 0, 810, 376 + $i * 44, $white, $fontReg, $cert);
    }
} else {
    // Fallback: built-in font
    imagestring($img, 5, 60, 200, 'CARVORA CHARCOAL', $white);
    imagestring($img, 4, 60, 230, 'Premium Coconut Shell Charcoal', $gray);
    imagestring($img, 3, 60, 260, 'carvoracharcoal.my.id', $gold);
}

imagepng($img, __DIR__ . '/public/og.png');
imagedestroy($img);
echo "OG image generated: public/og.png (" . filesize(__DIR__ . '/public/og.png') . " bytes)\n";
