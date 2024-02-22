<?php

namespace App\Modules\Feedback\Interfaces;

use App\Modules\Feedback\Dto\FeedbackDto;

interface InterfaceFeedbackService
{
   public function setFeedback(FeedbackDto $feedbackDto): void;
}
