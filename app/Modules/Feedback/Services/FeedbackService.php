<?php

namespace App\Modules\Feedback\Services;

use App\Modules\Feedback\Dto\FeedbackDto;
use App\Modules\Feedback\Interfaces\InterfaceFeedbackRepository;
use App\Modules\Feedback\Interfaces\InterfaceFeedbackService;

class FeedbackService implements InterfaceFeedbackService
{
   public InterfaceFeedbackRepository $feedbackRepository;

   public function __construct(InterfaceFeedbackRepository $feedbackRepository)
   {
      $this->feedbackRepository = $feedbackRepository;
   }

   public function setFeedback(FeedbackDto $feedbackDto): void
   {
       $this->feedbackRepository->save($feedbackDto);
   }
}
