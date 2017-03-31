<?php



























interface FeedProvider extends ExtensionPoint
{
const EXTENSION_POINT='feeds';

function get_feeds_list();

function get_feed_data_struct();
}
?>
