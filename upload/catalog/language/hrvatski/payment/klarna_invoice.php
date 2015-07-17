<?php
// Text
$_['text_title']				= 'Klarna račun - Platite u roku od 14 dana';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna račun zahtjeva dodatne informacije prije nego može obraditi Vašu narudžbu.';
$_['text_male']					= 'Muško';
$_['text_female']				= 'Žensko';
$_['text_year']					= 'Godina';
$_['text_month']				= 'Mjesec';
$_['text_day']					= 'Dan';
$_['text_comment']				= 'Klarna broj narudžbe: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Spol';
$_['entry_pno']					= 'Osobni broj';
$_['entry_dob']					= 'Datum rođenja';
$_['entry_phone_no']			= 'Broj telefona';
$_['entry_street']				= 'Ulica';
$_['entry_house_no']			= 'Kućni broj';
$_['entry_house_ext']			= 'Dodatak kućnom broju';
$_['entry_company']				= 'Registracijski broj tvrtke';

// Help
$_['help_pno']					= 'Upišite broj socijalnog osiguranja.';
$_['help_phone_no']				= 'Upišite broj telefona.';
$_['help_street']				= 'Imajte na umu da se dostava može izvršiti samo na registriranu adresu kod Klarna plaćanja.';
$_['help_house_no']				= 'Upišite kućni broj.';
$_['help_house_ext']			= 'Upišite dodatak kućnom broju. Npr. A, B, C, Red...';
$_['help_company']				= 'Upišite naziv i registracijski broj tvrtke';

// Error
$_['error_deu_terms']			= 'Morate se složiti s Klarna izjavom o privatnosti (Datenschutz)';
$_['error_address_match']		= 'Adresa za plaćanje i dostavu se moraju podudarati kod Klarna plaćanja';
$_['error_network']				= 'Došlo je do greške kod spajanja na Klarnu. Molimo pokušajte ponovno kasnije.';
