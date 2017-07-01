<?php
/**
 * @author         Pierre-Henry Soria <pierrehenrysoria@gmail.com>
 * @copyright      (c) 2017, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; <https://www.gnu.org/licenses/gpl-3.0.en.html>
 */

namespace DAT\Service\Provicer\TAC;

use DAT\Service\Identifier\Affiliate as AffiliateId;
use DAT\Service\Provider\Providable;

class EveFlirt implements Providable
{
    const MAX_PASSWORD_LENGTH = 8;

    const FORM_URL = 'https://www.idilys.com';
    const FORM_ACTION_URI = 'loginSubmit/?cf0=&cf1=P13&degree=soft';

    const EMAIL_FIELD = 'account[email]';
    const USERNAME_FIELD = 'account[profile][nickname]';
    const NAME_FIELD = 'account[profile][name]';
    const PASSWORD_FIELD = 'account[password]';

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
        return self::FORM_URL . '&comfrom=' . $this->affiliateId->getValue();
    }

    /**
     * {@inheritDoc}
     */
    public function getFormAction()
    {
        return self::FORM_ACTION_URI;
    }
}