<?php
/**
 * @author         Pierre-Henry Soria <pierrehenrysoria@gmail.com>
 * @copyright      (c) 2017, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; <https://www.gnu.org/licenses/gpl-3.0.en.html>
 */

namespace DAT\Tool\Client;

use PH7\External\Http\Client\PH7Client;
use DAT\Service\Provider\Providable;

class Registration implements Registrable
{
    /**
     * @param Providable $provider
     * @param array
     */
    public function __construct(Providable $provider, array $aData)
    {
        $oPH7CMSApi = new PH7Client($provider->getUrl());
    }

    public function send()
    {
        /***** Log a user *****/
        $aLogin = [
            'identity' => $sUser,
            'password' => $sPass,
            'remember' => 'on',
            'submit' => 'Login'
        ];

    // Login the user
        $oPH7CMSApi->post($sReauest1, $aLogin);
    // Submit the form
        $oPH7CMSApi->send();


        /***** Send a message *****/
        $aMsg = ['message' => $sBody];

    // Send the message
        $oPH7CMSApi->post($sRequest2, ['message' => $sBody])->setHeader(false)->send();

        echo $oPH7CMSApi->getResponse(); // Will show the sucessful message telling you that your msg has been send
    }
}