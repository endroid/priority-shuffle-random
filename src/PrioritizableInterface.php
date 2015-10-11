<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Endroid\PriorityShuffleRandom;

interface PrioritizableInterface
{
    /**
     * Returns the value.
     *
     * @return mixed
     */
    public function getValue();

    /**
     * Returns the priority.
     *
     * @return int
     */
    public function getPriority();
}
