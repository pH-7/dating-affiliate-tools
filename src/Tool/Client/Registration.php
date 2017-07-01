<?php
/**
 * @author         Pierre-Henry Soria <pierrehenrysoria@gmail.com>
 * @copyright      (c) 2017, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; <https://www.gnu.org/licenses/gpl-3.0.en.html>
 */

namespace DAT\Tool\Client;

use PH7\External\Http\Client\PH7Client;
use DAT\Service\Provider\Providable;
use InvalidArgumentException;

class Registration implements Registrable
{
    /** @var PH7Client */
    private $httpClient;

    /** @var Providable */
    private $provider;

    /** @var array */
    private $userData;

    /**
     * @param Providable $provider
     * @param array
     */
    public function __construct(Providable $provider, array $aData)
    {
        $this->userData = $aData;
        $this->provider = $provider;
        $this->httpClient = new PH7Client($this->provider->getUrl());

    }

    /**
     * {@inheritDoc}
     */
    public function send()
    {
        try {
            $this->httpClient->post($this->provider->getFormAction(), $this->userData);
            $this->httpClient->send();
        } catch (InvalidArgumentException $e) {
            //TODO: Add monolog here
        }
    }
}