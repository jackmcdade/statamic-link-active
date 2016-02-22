<?php

namespace Statamic\Addons\LinkActive;

use Statamic\API\URL;
use Statamic\Extend\Tags;
use Stringy\StaticStringy as Stringy;

class LinkActiveTags extends Tags
{
    /**
     * Render an href tag and apply an active class when there.
     *
     * Maps to {{ link_active }}
     *
     * @return string
     */
    public function index()
    {
        $url = Stringy::ensureLeft($this->get('url'), '');

        $html = " href='{$url}'";

        if ($url === URL::getCurrent()) {
            $active_class = $this->get('class', 'active');
            $html .= " class='{$active_class}'";
        }

        return $html;
    }
}
