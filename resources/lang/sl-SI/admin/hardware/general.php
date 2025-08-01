<?php

return [
    'about_assets_title'           => 'O sredstvih',
    'about_assets_text'            => 'Sredstva so stvari, ki so sledene po serijski številki ali oznaki sredstva. Ponavadi so stvari z višjo vrednostjo, pri katerih je opredelitev določenega predmeta pomembna.',
    'archived'  				=> 'Arhivirano',
    'asset'  					=> 'Sredstev',
    'bulk_checkout'             => 'Množična izdaja',
    'bulk_checkin'              => 'Bulk Checkin',
    'checkin'  					=> 'Sprejem sredstev',
    'checkout'  				=> 'Izdaja sredstev',
    'clear'                     => 'Počisti',
    'clone'  					=> 'Klonska sredstvo',
    'deployable'  				=> 'Razdeljeno',
    'deleted'  					=> 'To sredstvo je bilo izbrisano.',
    'delete_confirm'            => 'Ali ste prepričani, da želite izbrisati to sredstvo?',
    'edit'  					=> 'Urejanje sredstva',
    'model_deleted'  			=> 'Model tega sredstva je bil izbrisan. Pred obnovitvijo sredstva je potrebno obnoviti model.',
    'model_invalid'             => 'Ta model za to sredstvo ni veljaven.',
    'model_invalid_fix'         => 'The asset must be updated use a valid asset model before attempting to check it in or out, or to audit it.',
    'requestable'               => 'Zahtevano',
    'requested'				    => 'Zahtevano',
    'not_requestable'           => 'Ni zahtevano',
    'requestable_status_warning' => 'Ne spreminjaj zahtevanega statusa',
    'restore'  					=> 'Obnovitev sredstev',
    'pending'  					=> 'Na čakanju',
    'undeployable'  			=> 'Nerazdeljeno',
    'undeployable_tooltip'  	=> 'This asset has a status label that is undeployable and cannot be checked out at this time.',
    'view'  					=> 'Ogled sredstva',
    'csv_error' => 'V datoteki CSV je napaka:',
    'import_text' => '<p>Upload a CSV that contains asset history. The assets and users MUST already exist in the system, or they will be skipped. Matching assets for history import happens against the asset tag. We will try to find a matching user based on the user\'s name you provide, and the criteria you select below. If you do not select any criteria below, it will simply try to match on the username format you configured in the <code>Admin &gt; General Settings</code>.</p><p>Fields included in the CSV must match the headers: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. Any additional fields will be ignored. </p><p>Checkin Date: blank or future checkin dates will checkout items to associated user.  Excluding the Checkin Date column will create a checkin date with todays date.</p>    ',
    'csv_import_match_f-l' => 'Poskusi najti uporabnike po obliki <strong>firstname.lastname</strong> (<code>jane.smith</code>)',
    'csv_import_match_initial_last' => 'Poskusi najti uporabnike po obliki <strong>prvega imena priimka</strong> (<code>jsmith</code>)',
    'csv_import_match_first' => 'Poskusi najti uporabnike po obliki <strong>ime</strong> (<code>jane</code>)',
    'csv_import_match_email' => 'Poskusi najti uporabnike po <strong>e-pošti</strong> kot uporabniškem imenu',
    'csv_import_match_username' => 'Poskusi najti uporabnike po <strong>uporabniškem imenu</strong>',
    'error_messages' => 'Sporočila napak:',
    'success_messages' => 'Sporočila uspeha:',
    'alert_details' => 'Glej dol za detajle.',
    'custom_export' => 'Izvoz po meri',
    'mfg_warranty_lookup' => ':manufacturer Warranty Status Lookup',
    'user_department' => 'User Department',
];
