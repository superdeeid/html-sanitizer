<?php

/*
 * This file is part of the HTML sanitizer project.
 *
 * (c) Titouan Galopin <galopintitouan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HtmlSanitizer\Extension\Basic\Node;

use HtmlSanitizer\Node\AbstractTagNode;
use HtmlSanitizer\Node\IsChildlessTrait;

/**
 * @author Titouan Galopin <galopintitouan@gmail.com>
 *
 * @final
 */
class BrNode extends AbstractTagNode
{
    use IsChildlessTrait;

    public function getTagName(): string
    {
        return 'br';
    }
}
