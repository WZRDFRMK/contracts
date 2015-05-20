<?php

namespace WZRD\Contracts\Auth;

interface Authenticator
{
    /**
     * Authenticate data with providers.
     *
     * @param array                          $data
     * @param WZRD\Contracts\Auth\Provider[] $providers
     *
     * @return mixed
     */
    public function authenticate(array $data, array $providers);
}
