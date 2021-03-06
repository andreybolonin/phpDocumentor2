<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2016 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\DomainModel\ReadModel\Mapper;

use phpDocumentor\DomainModel\ReadModel\Mapper;
use phpDocumentor\DomainModel\ReadModel\Type;

interface Factory
{
    /**
     * Returns a mapper for the given type of view.
     *
     * @param Type $viewType
     *
     * @return Mapper
     */
    public function create(Type $viewType);
}
