<?php

namespace Publisher\Entry\Twitter\Mode\Recommendation;

use Publisher\Mode\Recommendation\AbstractRecommendation;

class TwitterUserRecommendation extends AbstractRecommendation
{
    
    /**
     * @inheritDoc
     */
    public function getMessagePayload()
    {
        $status = $this->title ? $this->title."\n".$this->message : $this->message;
        $status .= $this->url ? "\n".$this->url : '';
        
        return $status;
    }
    
    /**
     * @inheritDoc
     */
    public function generateBody()
    {
        return array('status' => $this->getMessagePayload());
    }

}