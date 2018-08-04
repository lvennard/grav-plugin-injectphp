<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class InjectphpPlugin
 * @package Grav\Plugin
 */
class InjectphpPlugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            return;
        }

        // Enable the main event we are interested in
        $this->enable([
            'onPageContentRaw' => ['onPageContentRaw', 0]
        ]);
    }

    /**
     * Do some work for this event, full details of events can be found
     * on the learn site: http://learn.getgrav.org/plugins/event-hooks
     *
     * @param Event $e
     */
    public function onPageContentRaw(Event $e)
    {
        $content = $e['page']->getRawContent();
                $regex = "/^injectphp:/";
                if (preg_match($regex, $content)) {
                        $fullurl="";
                        $urlvalue = explode(':', $content);
                        foreach ($urlvalue as $urlsection) {
                                if ($urlsection!="injectphp") {
                                $fullurl = $fullurl . $urlsection . ":";
                                }
                        }
                        $trimmedurl = "";
                        $trimmedurl = rtrim($fullurl, ":");
                        $newcontent = implode('', file($trimmedurl));
                        $e['page']->setRawContent($newcontent);
                } else {
                $e['page']->setRawContent($content);
                }
    }
}
