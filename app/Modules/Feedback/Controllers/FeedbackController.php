<?php

namespace App\Modules\Feedback\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Feedback\Dto\FeedbackDto;
use App\Modules\Feedback\Interfaces\InterfaceFeedbackService;
use App\Modules\Feedback\Requests\FeebackValidate;
use OpenApi\Attributes as OAT;

class FeedbackController extends Controller
{
    public InterfaceFeedbackService $feedbackService;

    public function __construct(InterfaceFeedbackService $feedbackService)
    {
        $this->feedbackService = $feedbackService;
    }


    #[OAT\Post(
        path: '/api/feedback',
        operationId: 'set feedback',
        summary: 'set user feedback',
        requestBody: new OAT\RequestBody(
            description: 'Information about a new pet in the system',
            content: new OAT\MediaType(
                mediaType: 'multipart/form-data',
                schema: new OAT\Schema(ref: "#/components/schemas/feedback")
            )
        ),
        tags: ['Feedback'],
        responses: [
            new OAT\Response(
                response: 200,
                description: 'Response feedback'
            )
        ]
    )]

    public function saveFeedback(FeebackValidate $request): void
    {
         $dto = new FeedbackDto($request);
         $this->feedbackService->setFeedback($dto);
    }
}
