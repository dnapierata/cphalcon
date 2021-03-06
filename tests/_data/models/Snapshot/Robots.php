<?php

namespace Phalcon\Test\Models\Snapshot;

use Phalcon\Mvc\Model;

/**
 * \Phalcon\Test\Models\Snapshot\Robots
 *
 * @copyright 2011-2017 Phalcon Team
 * @link      https://phalconphp.com
 * @author    Andres Gutierrez <andres@phalconphp.com>
 * @author    Serghei Iakovlev <serghei@phalconphp.com>
 * @package   Phalcon\Test\Models\Snapshot
 *
 * @property int $id
 * @property sting $name
 * @property string $type
 * @property int $year
 * @property string $datetime
 * @property string $deleted
 * @property string $text
 *
 * @method static Robots findFirst($parameters = null)
 * @method static Robots[] find($parameters = null)
 *
 * The contents of this file are subject to the New BSD License that is
 * bundled with this package in the file LICENSE.txt
 *
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world-wide-web, please send an email to license@phalconphp.com
 * so that we can send you a copy immediately.
 */
class Robots extends Model
{
    public function initialize()
    {
        $this->hasMany('id', RobotsParts::class, 'robots_id');

        $this->keepSnapshots(true);
    }
}
