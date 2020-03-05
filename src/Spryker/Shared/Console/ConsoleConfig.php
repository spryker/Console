<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Shared\Console;

use Spryker\Shared\Kernel\AbstractBundleConfig;

class ConsoleConfig extends AbstractBundleConfig
{
    /**
     * @api
     *
     * @return bool
     */
    public function shouldCatchExceptions(): bool
    {
        return $this->get(ConsoleConstants::CATCH_EXCEPTIONS, false);
    }
}
