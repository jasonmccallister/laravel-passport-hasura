<?php

return [
    /*
     * Set the claims namespace Hasura is configured to receive. Default is https://hasura.io/claims.
     * There is no need to modify this unless you modified the claims namespace in Hasura.
     */
    'claims_namespace' => env('PASSPORT_HASURA_CLAIMS_NAMESPACE', 'https://hasura.io/claims'),
];
