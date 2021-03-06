<?php
/**
 * TOC content loader plugin manager
 *
 * PHP version 5
 *
 * Copyright (C) The University of Chicago 2017.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 2,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @category VuFind2
 * @package  Content
 * @author   John Jung <jej@uchicago.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     http://vufind.org/wiki/vufind2:hierarchy_components Wiki
 */
namespace VuFind\Content\TOC;

/**
 * TOC content loader plugin manager
 *
 * @category VuFind2
 * @package  Content
 * @author   John Jung <jej@uchicago.edu>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     http://vufind.org/wiki/vufind2:hierarchy_components Wiki
 */
class PluginManager extends \VuFind\ServiceManager\AbstractPluginManager
{
    /**
     * Default plugin aliases.
     *
     * @var array
     */
    protected $aliases = [
        'demo' => 'VuFind\Content\TOC\Demo',
        'syndetics' => 'VuFind\Content\TOC\Syndetics',
        'syndeticsplus' => 'VuFind\Content\TOC\SyndeticsPlus',
    ];

    /**
     * Default plugin factories.
     *
     * @var array
     */
    protected $factories = [
        'VuFind\Content\TOC\Demo' => 'Zend\ServiceManager\Factory\InvokableFactory',
        'VuFind\Content\TOC\Syndetics' => 'VuFind\Content\AbstractSyndeticsFactory',
        'VuFind\Content\TOC\SyndeticsPlus' =>
            'VuFind\Content\AbstractSyndeticsFactory',
    ];

    /**
     * Return the name of the base class or interface that plug-ins must conform
     * to.
     *
     * @return string
     */
    protected function getExpectedInterface()
    {
        return 'VuFind\Content\AbstractBase';
    }
}
