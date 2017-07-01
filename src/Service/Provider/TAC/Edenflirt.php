<?php
/**
 * @author         Pierre-Henry Soria <pierrehenrysoria@gmail.com>
 * @copyright      (c) 2017, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; <https://www.gnu.org/licenses/gpl-3.0.en.html>
 */

namespace DAT\Service\Provicer\TAC;

use DAT\Service\Identifier\Affiliate as AffiliateId;
use DAT\Service\Provider\Providable;

class Edenflirt implements Providable
{
    const FORM_URL = 'http://';

    /** @var Affiliate */
    private $affiliateId;

    /**
     * @param AffiliateId $affiliateId
     */
    public function __construct(AffiliateId $affiliateId)
    {
        $this->affiliateId = $affiliateId;
    }

    public function getUrl()
    {
        return self::FORM_URL . $this->affiliateId->getValue();
    }
}