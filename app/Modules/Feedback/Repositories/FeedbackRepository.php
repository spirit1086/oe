<?php
namespace App\Modules\Feedback\Repositories;

use App\Modules\Feedback\Dto\FeedbackDto;
use App\Modules\Feedback\Interfaces\InterfaceFeedbackRepository;
use App\Modules\Feedback\Models\Feedback;

class FeedbackRepository implements InterfaceFeedbackRepository
{
   public function save(FeedbackDto $feedbackDto): void
   {
       Feedback::updateOrCreate(['id' => null], $feedbackDto->toArray());
   }
}
