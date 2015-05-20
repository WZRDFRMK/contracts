<?php

namespace WZRD\Contracts\Auth;

interface Provider
{
    /**
     * Authenticate with data.
     *
     * @param array $data
     *
     * @return mixed
     */
    public function authenticate(array $data = []);
}
