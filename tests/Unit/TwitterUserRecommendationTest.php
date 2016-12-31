<?php

namespace Unit;

use Unit\Publisher\Mode\Recommendation\AbstractRecommendationTest;
use Publisher\Entry\Twitter\Mode\Recommendation\TwitterUserRecommendation;

class TwitterUserRecommendationTest extends AbstractRecommendationTest
{
    
    /**
     * @inheritDoc
     */
    protected function createRecommendation(array $content = array())
    {
        return new TwitterUserRecommendation($content);
    }
    
}