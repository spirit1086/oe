<?php
namespace App\Modules\Feedback\Interfaces;

use App\Modules\Feedback\Dto\FeedbackDto;

interface InterfaceFeedbackRepository
{
    public function save(FeedbackDto $feedbackDto): void;
}
