<?php
/**
 * @author         Pierre-Henry Soria <pierrehenrysoria@gmail.com>
 * @copyright      (c) 2017, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; <https://www.gnu.org/licenses/gpl-3.0.en.html>
 */

namespace DAT\Service\Provider\TAC;

use DAT\Service\Identifier\Affiliate as AffiliateId;
use DAT\Service\Provider\Providable;

class EveFlirt implements Providable
{
    const MAX_PASSWORD_LENGTH = 8;

    const FORM_URL = 'https://www.idilys.com';
    const FORM_ACTION_URI = 'login/registerProcess/?cf0=&cf1=P13&degree=soft';

    const PLATFORM_FIELD = 'account[created_from]';
    const TOS_FIELD = 'account[cgv]';
    const EMAIL_FIELD = 'account[email]';
    const USERNAME_FIELD = 'account[profile][nickname]';
    const FIRSTNAME_FIELD = 'account[profile][firstname]';
    const GENDER_FIELD = 'account[profile][sex]';
    const PASSWORD_FIELD = 'account[password]';
    const BIRTH_DAY_FIELD = 'account[profile][birthday][day]';
    const BIRTH_MONTH_FIELD = 'account[profile][birthday][month]';
    const BIRTH_YEAR_FIELD = 'account[profile][birthday][year]';
    const COUNTRY_FIELD = 'account[profile][country]';
    const CITY_FIELD = 'account[profile][city]';
    const POSTALCODE_FIELD = 'account[profile][postal_code]';

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
        return self::FORM_ACTION_URI . '&comfrom=' . $this->affiliateId->getValue();
    }
}