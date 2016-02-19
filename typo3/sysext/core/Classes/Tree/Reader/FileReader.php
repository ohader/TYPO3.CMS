<?php
namespace TYPO3\CMS\Core\Tree\Reader;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Class FileReader
 * @package TYPO3\CMS\Core\Tree\Reader
 */
class FileReader implements ReaderInterface
{
    public function get($identifier, $depth = null, $checkPermissions = true)
    {
        // TODO: Implement get() method.
    }

    public function getRootNodes()
    {
        // TODO: Implement getRootNodes() method.
    }

    public function getChildren($identifier, $depth = null, $checkPermissions = true)
    {
        // TODO: Implement getChildren() method.
    }

    public function getDepth($identifier)
    {
        // TODO: Implement getDepth() method.
    }
}
