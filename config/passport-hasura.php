<?php

return [
    /*
     * Should the package intercept Passport signing and modify the token for Hasura?
     * This is useful if you decided to keep Passport confgiured and working as is,
     * and you want to use this packages /hasura/auth endpoint instead.
     */
    'enabled' => env('PASSPORT_HASURA_ENABLED', true),

    /*
     * The default role that will be set for Hasura JWTs. This should be set to a role
     * that has very strict permissions. If you have a role will basic read access,
     * such as anonymous like the Hasura documentation recommends under roles
     * (https://docs.hasura.io/1.0/graphql/manual/auth/roles-variables.html#roles)
     * then that role should be set here.
     */
    'default_role' => env('PASSPORT_HASURA_DEFAULT_ROLE', 'user'),

    /*
     * Set the claims namespace Hasura is configured to receive. Default is https://hasura.io/claims.
     * There is no need to modify this unless you modified the claims namespace in Hasura.
     */
    'claims_namespace' => env('PASSPORT_HASURA_CLAIMS_NAMESPACE', 'https://hasura.io/claims'),
];
