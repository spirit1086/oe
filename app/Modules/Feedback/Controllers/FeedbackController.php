<?php

namespace App\Modules\Feedback\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Feedback\Dto\FeedbackDto;
use App\Modules\Feedback\Interfaces\InterfaceFeedbackService;
use App\Modules\Feedback\Requests\FeebackValidate;

class FeedbackController extends Controller
{
    public InterfaceFeedbackService $feedbackService;

    public function __construct(InterfaceFeedbackService $feedbackService)
    {
        $this->feedbackService = $feedbackService;
    }


    public function saveFeedback(FeebackValidate $request): void
    {
         $dto = new FeedbackDto($request);
         $this->feedbackService->setFeedback($dto);
    }
}
