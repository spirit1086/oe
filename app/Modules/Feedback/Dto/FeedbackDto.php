<?php
namespace App\Modules\Feedback\Dto;
use App\Modules\Feedback\Requests\FeebackValidate;
use Illuminate\Support\Facades\Storage;

class FeedbackDto
{
   private string $lastname;
   private string $firstname;
   private string $email;
   private ?string $mobile;
   private ?int $city_id;
   private string $theme;
   private string $message;
   private string $userfile;

   public function __construct(FeebackValidate $request)
   {
     $this->lastname = $request->input('lastname');
     $this->firstname = $request->input('firstname');
     $this->email = $request->input('email');
     $this->mobile = $request->input('mobile') ?? null;
     $this->city_id = $request->input('city_id') ?? null;
     $this->theme = $request->input('theme');
     $this->message = $request->input('message');
     $this->userfile = $this->uploadedFile($request->file('userfile'));
   }

   protected function uploadedFile($file): string
   {
       return Storage::disk('public')->put('files', $file);
   }

    public function toArray()
    {
        return get_object_vars($this);
    }
}
