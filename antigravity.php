<?php

function getAntigravitySettings($countryCode) {
    
    // ---------------------------------------------------------
    // SCHRITT 1: SPRACHE BESTIMMEN (Nur DE, ES, EN)
    // ---------------------------------------------------------
    
    // Liste der deutschsprachigen Länder
    $dach_laender = ['DE', 'AT', 'CH', 'LI', 'LU'];
    
    // Liste der spanischsprachigen Länder (Spanien + Lateinamerika)
    $es_laender   = [
        'ES', // Spanien
        'MX', 'AR', 'CO', 'CL', 'PE', 'VE', 'EC', 'GT', 'CU', 'BO', 'DO', 'HN', 'PY', 'SV', 'NI', 'CR', 'PA', 'UY', 'GQ'
    ];

    // Logik:
    if (in_array($countryCode, $dach_laender)) {
        $lang = 'german';
    } elseif (in_array($countryCode, $es_laender)) {
        $lang = 'spanish';
    } else {
        $lang = 'english'; // Fallback für ALLE anderen (FR, IT, US, UK, JP etc.)
    }

    // ---------------------------------------------------------
    // SCHRITT 2: REGION BESTIMMEN (Deine Liste)
    // ---------------------------------------------------------
    
    // Standard-Region
    $region = 'Weltweit';

    // Spezifische Zuweisungen
    if ($countryCode === 'DE') $region = 'Deutschland';
    elseif ($countryCode === 'US') $region = 'USA';
    elseif ($countryCode === 'CA') $region = 'Kanada';
    elseif ($countryCode === 'BR') $region = 'Brasilien';
    elseif ($countryCode === 'JP') $region = 'Japan';
    elseif ($countryCode === 'SG') $region = 'Singapur';
    
    // Gruppen-Zuweisungen
    elseif (in_array($countryCode, ['AU', 'NZ'])) {
        $region = 'Australien / Neuseeland';
    }
    elseif (in_array($countryCode, ['GB', 'IE'])) {
        $region = 'UK/Irland';
    }
    elseif (in_array($countryCode, ['DK', 'NO', 'SE'])) {
        $region = 'Skandinavien'; // Achtung: Sprache ist hier nun 'english'!
    }
    elseif (in_array($countryCode, ['CH', 'LI', 'IS'])) {
        $region = 'EFTA';
    }
    // Europa-Liste (Gekürzt für Übersicht, hier kommen alle rein)
    elseif (in_array($countryCode, ['AT', 'FR', 'IT', 'ES', 'NL', 'BE', 'PL', 'CZ', 'PT', 'GR', 'HU', 'RO', 'BG', 'HR', 'SI', 'SK', 'FI', 'EE', 'LV', 'LT', 'LU', 'MT', 'CY'])) {
        $region = 'Europa';
    }

    // ---------------------------------------------------------
    // RÜCKGABE DES ERGEBNISSES
    // ---------------------------------------------------------
    
    return [
        'region'   => $region,  // Z.B. "Europa"
        'language' => $lang     // Z.B. "english" (weil wir FR/IT etc. ignoriert haben)
    ];
}
?>
