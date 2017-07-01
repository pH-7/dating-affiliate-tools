<?php
/**
 * @author         Pierre-Henry Soria <pierrehenrysoria@gmail.com>
 * @copyright      (c) 2017, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; <https://www.gnu.org/licenses/gpl-3.0.en.html>
 */

namespace DAT\Service\Provider\Prelinker;

use DAT\Service\Identifier\Affiliate as AffiliateId;
use DAT\Service\Provider\Providable;

class EasyFlirt implements Providable
{
    const MAX_PASSWORD_LENGTH = 6;

    const FORM_URL = 'https://www.easyflirt.com';
    const FORM_ACTION_URI = '';

    /** @var Affiliate */
    private $affiliateId;

    /**
     * @param AffiliateId $affiliateId
     */
    public function __construct(AffiliateId $affiliateId)
    {
        $this->affiliateId = $affiliateId;
    }

    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {
        return self::FORM_URL;
    }

    /**
     * {@inheritDoc}
     */
    public function getFormAction()
    {
        return self::FORM_ACTION_URI . '?pr=' . $this->affiliateId->getValue();
    }
}