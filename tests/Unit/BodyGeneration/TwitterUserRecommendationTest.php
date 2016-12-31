<?php

namespace Unit\BodyGeneration;

use Unit\Publisher\Mode\Recommendation\BodyGeneration\RecommendationTest;
use Publisher\Entry\Twitter\Mode\Recommendation\TwitterUserRecommendation;

class TwitterUserRecommendationTest extends RecommendationTest
{   
    
    protected function getTestEntity()
    {
        return new TwitterUserRecommendation();
    }
    
    public function getSampleContentAndBody()
    {
        $title = 'test-title';
        $message = 'test-message';
        $url = 'http://www.example.com';
        
        return array(
            array( // only message
                array('message' => $message),
                array('status' => $message)
            ),
            array( // message and title
                array('message' => $message, 'title' => $title),
                array('status' => $title . "\n" . $message)
            ),
            array( // message and url
                array('message' => $message, 'url' => $url),
                array('status' => $message . "\n" . $url)
            ),
            array( // message, title and url
                array('message' => $message, 'title' => $title, 'url' => $url),
                array('status' => $title . "\n" . $message . "\n" . $url)
            )
        );
    }
    
}